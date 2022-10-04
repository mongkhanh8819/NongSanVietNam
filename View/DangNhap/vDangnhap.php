<?php  
    include_once("modules/login-google/login.php");
 ?>
<div class="bg"></div>
<div class="star-field">
    <div class="layer"></div>
    <div class="layer"></div>
    <div class="layer"></div>
</div>
<div style="display:flex;justify-content:center;align-items:centerl;" class="m-3">
    <div style="margin:auto;">
        <div class="card">
            <div class="card-block">
                <h2 class="card-header text-center">ĐĂNG NHẬP HỆ THỐNG</h2>
                <div class="card-body">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <form class="mt-3" action="index.php" method="POST" id="login">
                                <input id="anchor" type="hidden" name="anchor" value="">
                                <div class="form-group">
                                    <label for="username" class="sr-only">
                                        Tên tài khoản
                                    </label>
                                    <input type="text" name="username" id="username" class="form-control" value="" placeholder="Tên tài khoản" autocomplete="username">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="sr-only">Mật khẩu</label>
                                    <input type="password" name="password" id="password" value="" class="form-control" placeholder="Mật khẩu" autocomplete="current-password">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-block mt-3" id="loginbtn" value="login">Đăng nhập</button> 
                            </form>
                            <div class="social-auth-links text-center">
                                <p>- OR -</p>
                                <a href="<?php
                                echo $client->createAuthUrl(); ?>" class="btn btn-block btn-danger">
                                <!-- <a href="modules/login-google/login.php" class="btn btn-block btn-danger">  -->
                                  <i class="fab fa-google mr-2"></i>
                                  Đăng nhập bằng Google
                                </a>
                                <!-- <a href="modules/login-google/logout.php">Logout</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>