<section class="main-container col1-layout">
    <div class="main container">


        <div class="page-content">

            <div class="account-login">

                <div class="box-authentication">
                    <form action="account_page.php" method="POST">
                        <h4>Đăng Nhập</h4>
                        <p class="before-login-text">Welcome back! Sign in to your account</p>
                        <label for="user_login">Username<span class="required">*</span></label>
                        <input id="user_login" type="text" name="username" class="form-control" required>
                        <label for="password_login">Password<span class="required">*</span></label>
                        <input id="password_login" type="password" name="pass" class="form-control" required>
                        <!-- <p class="forgot-pass"><a href="#">Lost your password?</a></p> -->
                        <button type="submit" class="button" name="btn-DN"><i class="fa fa-lock"></i>&nbsp; <span>Đăng
                                Nhập</span></button>
                        <label class="inline" for="rememberme">
                            <!-- <input type="checkbox" value="forever" id="rememberme" name="rememberme"> Remember me -->
                        </label>
                    </form>
                </div>
                <div class="box-authentication">
                    <form action="account_page.php" method="POST">
                        <h4>Đăng Ký</h4>
                        <p>Create your very own account</p>
                        <label for="username_register">Username<span class="required">*</span></label>
                        <input id="username_register" name="username" type="text" class="form-control" required>
                        <span class="tb-thongbao" id="tb-username_reg"></span>
                        <label for="fullname_register">Fullname<span class="required">*</span></label>
                        <input id="fullname_register" name="fullname" type="text" class="form-control" required>
                        <label for="email_register">Email<span class="required">*</span></label>
                        <input id="email_register" name="email" type="email" class="form-control" required>
                        <span class="tb-thongbao" id="tb-email_reg"></span>
                        <label for="password_register">Password<span class="required">*</span></label>
                        <input id="password_register" name="pass" type="password" class="form-control" required>
                        <span class="tb-thongbao" id="tb-repassword_reg"></span>
                        <label for="">Giới tính<span class="required">*</span></label>
                        <input type="radio" name="gender" style="width:14px; margin-left:15px;" value="Nam">Nam 
                        <input type="radio" name="gender" style="width:14px; margin-left:15px;" value="Nu">Nữ<br>
                        <label for="phone_register">Điện thoại<span class="required">*</span></label>
                        <input id="phone_register" name="phone" type="text" class="form-control" required>
                        <span class="tb-thongbao" id="tb-phone_reg"></span>
                        <!-- <label for="birthdate_register">Birthday<span class="required">*</span></label>
                        <input id="birthdate_register" name="birthdate" type="date" class="form-control" required>
                        <span class="tb-thongbao" id="tb-birthdate_reg"></span> -->
                        <label for="address_register">Địa chỉ<span class="required">*</span></label>
                        <input id="address_register" name="address" type="text" class="form-control" required>
                        <span class="tb-thongbao" id="tb-address_reg"></span>

                        <button type="submit" class="button" name="btn-DK"><i class="fa fa-user"></i>&nbsp; <span>Đăng
                                Ký</span></button>
                    </form>

                    <!-- <div class="register-benefits">
                    <h5>Sign up today and you will be able to :</h5>
                    <ul>
                        <li>Speed your way through checkout</li>
                        <li>Track your orders easily</li>
                        <li>Keep a record of all your purchases</li>
                    </ul>
                </div> -->
                </div>


            </div>
        </div>

    </div>
</section>