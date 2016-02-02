<?php
include_once("config/config.php");
 include_once("templates/header.php");?>
    <section id="form" class="bg-light-gray bkg_login_register set_minimum_height">
		<div class="container">
        <div class="row">
            <div class="col-md-7 form_center">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" align="center">
                        <h3>User Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" name="frm_login" id="frm_login" method="post">
                            <fieldset>
								<div class="form-group" id="msg_block"></div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email-ID" name="email" id="email" type="text" autofocus>
                                </div>
								<div class="form-group">
                                    <input style="padding-top:0px;padding-bottom:0px;height:48px" class="form-control" placeholder="Password" name="text" id="password" type="password" autofocus>
                                </div>
								<div class="form-group">
                                    <input class="btn btn-lg btn-success btn-block" name="btn_login" id="btn_login" type="submit" value="Submit" />
                                </div>
								<div class="form-group">
                                    <a href="register.php">New Registration</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
<?php include_once("templates/footer.php");?>