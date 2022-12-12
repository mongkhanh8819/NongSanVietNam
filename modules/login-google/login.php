<?php

if (!isset($_SESSION))
{
        session_start();
}
require 'db_connection.php';

if(isset($_SESSION['login_id'])){
    header('Location: ../../index.php');
    //header('Location: home.php');
    exit;
}

require 'google-api-php-client-2.4.0/vendor/autoload.php';

// Creating new google client instance
$client = new Google_Client();

//echo $client->createAuthUrl();
// Enter your Client ID
$client->setClientId('732773006700-2oscnjqr3kntiki82nq86v1eaqeur336.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('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');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost/NongSanVN/modules/login-google/login.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])):

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])){

        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $id = mysqli_real_escape_string($db_connection, $google_account_info->id);
        $full_name = mysqli_real_escape_string($db_connection, trim($google_account_info->name));
        $email = mysqli_real_escape_string($db_connection, $google_account_info->email);
        $profile_pic = mysqli_real_escape_string($db_connection, $google_account_info->picture);

        // checking user already exists or not
        //JOIN xaphuong ON khachhangthanhvien.MaXa = xaphuong.MaXa JOIN huyenquan ON xaphuong.MaHuyen = huyenquan.MaHuyen JOIN tinhthanh ON huyenquan.MaTinh = tinhthanh.MaTinh
        $get_user = mysqli_query($db_connection, "SELECT * FROM `khachhangthanhvien` WHERE `google_id`='$id'");
        if(mysqli_num_rows($get_user) > 0){
            while ($row = mysqli_fetch_array($get_user)) {
                if ($row['MaXa'] == NULL) {
                    $_SESSION['login_id'] = $id; 
                    $_SESSION['name'] = $row['Ten_KHTV'];
                    $_SESSION['MaKHTV'] = $row['MaKHTV'];
                    //$_SESSION['Ten_KHTV'] = $row1['Ten_KHTV'];
                    $_SESSION['avatar'] = $row['HinhAnh'];
                    
                    if($row['MaXa'] == NULL){
                        $_SESSION['xa'] = 1;
                    }
                    
                    $_SESSION['diachi'] = 1;
                    //$_SESSION['LoginSuccess'] = true;
                    //echo "<script>alert('OK');</script>";
                    header('Location: ../../index.php');
                    exit;    
                }elseif ($row['MaXa'] != NULL) {
                    $_SESSION['login_id'] = $id; 
                    $_SESSION['name'] = $row['Ten_KHTV'];
                    $_SESSION['MaKHTV'] = $row['MaKHTV'];
                    //$_SESSION['Ten_KHTV'] = $row1['Ten_KHTV'];
                    $_SESSION['avatar'] = $row['HinhAnh'];
                    
                    if($row['MaXa'] == NULL){
                        $_SESSION['xa'] = 1;
                    }
                    
                    $_SESSION['diachi'] = $row['DiaChi'].", ".$row['TenXa'].", ".$row['TenHuyen'].", ".$row['TenTinh'];
                    //$_SESSION['LoginSuccess'] = true;
                    //echo "<script>alert('OK');</script>";
                    header('Location: ../../index.php');
                    exit;
                }
                   
            }
            

        }
        else{

            // if user not exists we will insert the user
            $insert = mysqli_query($db_connection, "INSERT INTO `khachhangthanhvien`(`google_id`,`Ten_KHTV`,`Email`) VALUES('$id','$full_name','$email')");
            
            if($insert){
                $get_user = mysqli_query($db_connection, "SELECT * FROM `khachhangthanhvien` WHERE `google_id`='$id'");
                while ($row = mysqli_fetch_array($get_user)) {
                    $_SESSION['login_id'] = $id; 
                    $_SESSION['name'] = $row['Ten_KHTV'];
                    $_SESSION['MaKHTV'] = $row['MaKHTV'];
                    //$_SESSION['Ten_KHTV'] = $row1['Ten_KHTV'];
                    $_SESSION['avatar'] = $row['HinhAnh'];
                    
                    if($row['MaXa'] == NULL){
                        $_SESSION['xa'] = 1;
                    }
                    
                    //YÊU CẦU NGƯỜI DÙNG CẬP NHẬT ĐỊA CHỈ
                    //$_SESSION['diachi'] = $row['DiaChi'].", ".$row['TenXa'].", ".$row['TenHuyen'].", ".$row['TenTinh'];
                    //$_SESSION['LoginSuccess'] = true;
                    //echo "<script>alert('OK');</script>";
                    header('Location: ../../index.php');
                    exit;   
                }
                // $_SESSION['login_id'] = $id;
                // $_SESSION['name'] = $full_name;  
                // header('Location: ../../index.php');
                // exit;
            }
            else{
                echo "Sign up failed!(Something went wrong).";
                //echo $profile_pic;
            }

        }

    }
    else{
        header('Location: ../../login.php');
        exit;
    }
    
else: 
    // Google Login Url = $client->createAuthUrl(); 
?>

    <!-- <a class="login-btn" href="<?php echo $client->createAuthUrl(); ?>">Login</a> -->

<?php endif; ?>