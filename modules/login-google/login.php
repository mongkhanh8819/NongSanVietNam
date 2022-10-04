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
        $get_user = mysqli_query($db_connection, "SELECT `google_id` FROM `khachhangthanhvien` WHERE `google_id`='$id'");
        if(mysqli_num_rows($get_user) > 0){

            $_SESSION['login_id'] = $id; 
            $_SESSION['name'] = $full_name;
            //$_SESSION['LoginSuccess'] = true;
            //echo "<script>alert('OK');</script>";
            header('Location: ../../index.php');
            exit;

        }
        else{

            // if user not exists we will insert the user
            $insert = mysqli_query($db_connection, "INSERT INTO `khachhangthanhvien`(`google_id`,`Ten_KHTV`,`Email`) VALUES('$id','$full_name','$email')");

            if($insert){
                $_SESSION['login_id'] = $id; 
                header('Location: ../../index.php');
                exit;
            }
            else{
                echo "Sign up failed!(Something went wrong).";
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