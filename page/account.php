<div class="main-container col1-layout">
    <div class="main">
        <div class="col-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="account-login">
                            <div class="page-title">
                                <h1>Đăng nhập hệ thống</h1>
                            </div>
                            <div class="row customer-content">
                                <span class="circle" id="circle">Hoặc</span>
                                <div class="col-md-12">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="account-from login">
                                        <form action="excute_account_login.php" method="post"
                                            id="login-form">
                                            <input name="form_key" type="hidden" value="GRZpNQ8U5xK4EqxZ" />
                                            <div class="heading">
                                                <p class="line small">Bạn đã có tài khoản?</p>
                                                <h4 class="line big">Đăng nhập</h4>
                                            </div>
                                            <div class="content">
                                                <div class="field">
                                                    <span class="icon">
                                                        <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" name="email" value="" id="email"
                                                        class="input-text required-entry validate-email"
                                                        title="Địa chỉ email" placeholder="Địa chỉ email" />
                                                </div>
                                                <div class="field">
                                                    <span class="icon">
                                                        <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="password" name="password"
                                                        class="input-text required-entry validate-password" id="pass"
                                                        title="Mật khẩu" placeholder="Mật khẩu" />
                                                </div>

                                                <div class="recaptcha-login">
                                                    <div class="g-recaptcha"
                                                        data-sitekey="6LfYzTIUAAAAAF8bs2TJzspiGpMaSCmYf7vgpFQE">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="end">
                                                <button type="submit" class="btn-submit-form" title="Đăng nhập"
                                                    name="send" id="send2">
                                                    <span><span>Đăng nhập</span></span></button>
                                                <div class="forgot-pass">
                                                    <a href="../forgotpassword/index.html" class="f-left">Bạn muốn tìm lại mật khẩu?</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="account-from register">
                                        <form action="excute_account_add.php" method="post"
                                            id="form-validate" class="scaffold-form" enctype="multipart/form-data">
                                            <div class="heading">
                                                <p class="line small">Bạn là khách hàng mới?</p>
                                                <h4 class="line big">Đăng ký</h4>
                                            </div>
                                            <div class="content">
                                                <div class="customer-name">
                                                    <div class="field name-firstname">
                                                        <span class="icon">
                                                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                                                        </span>
                                                        <div class="input-box">
                                                            <input type="text" id="firstname" placeholder="Họ và tên"
                                                                name="full_name" value="" title="Tên" maxlength="255"
                                                                class="input-text required-entry" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <span class="icon">
                                                        <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="input-box">
                                                        <input type="email" autocapitalize="off" autocorrect="off"
                                                            spellcheck="false" name="email" id="email_address" value=""
                                                            title="Địa chỉ email" placeholder="Email"
                                                            class="input-text validate-email required-entry" />
                                                    </div>
                                                </div>

                                                <div class="field">
                                                    <span class="icon">
                                                        <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="input-box">
                                                        <input type="password" name="password" id="password"
                                                            title="Mật khẩu" placeholder="Mật khẩu"
                                                            class="input-text required-entry validate-password" />
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <span class="icon">
                                                        <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="input-box">
                                                        <input type="password" name="confirmation"
                                                            title="Nhập lại mật khẩu" placeholder="Nhập lại mật khẩu"
                                                            id="confirmation"
                                                            class="input-text required-entry validate-cpassword" />
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <span class="icon">
                                                        <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="input-box">
                                                        <input type="text" name="phone_number" id="phone_number"
                                                            value="" title="Điện thoại" placeholder="Điện thoại"
                                                            class="input-text  required-entry" />
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <span class="icon">
                                                        <i class="glyphicon glyphicon-home" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="input-box">
                                                        <input type="text" name="address" id="address"
                                                            value="" title="Địa chỉ" placeholder="Địa chỉ"
                                                            class="input-text  required-entry" />
                                                    </div>
                                                </div>
                                                <input name="customer_type" type="hidden" value="1">
                                                <div class="field">
                                                    <input type="checkbox" name="is_subscribed"
                                                        title="Tôi muốn nhận đề nghị qua email" value="1"
                                                        id="is_subscribed" class="checkbox" />
                                                    <label for="is_subscribed">Tôi muốn nhận đề nghị qua
                                                        email</label>
                                                </div>
                                                <div class="recaptcha-login">
                                                    <div class="g-recaptcha"
                                                        data-sitekey="6LfYzTIUAAAAAF8bs2TJzspiGpMaSCmYf7vgpFQE">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="end">
                                                <button type="submit" title="Đăng ký"
                                                    class="btn-submit-form"><span><span>Đăng
                                                            ký</span></span></button>
                                            </div>
                                        </form>
                                        <script type="text/javascript">
                                            //<![CDATA[
                                            var dataForm = new VarienForm('form-validate', true);
        //]]>
                                        </script>
                                    </div>
                                </div>
                            </div>


                            <script type="text/javascript">
                                //<![CDATA[
                                var dataForm = new VarienForm('login-form', true);
                                var dataFormQuickLogin = new VarienForm('quick-login-form', true);
                    //]]>
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>