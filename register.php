<?php 
include_once("config/config.php");
include_once("templates/header.php");?>
<section id="form" class="bg-light-gray bkg_login_register set_minimum_height">
		<div class="container">
        <div class="row">
            <div class="col-md-7 form_center">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" align="center">
                        <h3>New User Registration</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" name="frm_registration" id="frm_registration" method="post">
                            <fieldset>
								<div class="form-group" id="msg_block"></div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" name="firstname" id="firstname" type="text" autofocus>
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Last Name" name="lastname" id="lastname" type="text" autofocus>
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Email-ID" name="email" id="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input style="padding-top:0px;padding-bottom:0px;height:48px" class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
                                </div>
								<div class="form-group">
                                    <input style="padding-top:0px;padding-bottom:0px;height:48px" class="form-control" placeholder="Confirm Password" name="cpassword" id="cpassword" type="password" value="">
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="Registration Code" name="regcode" id="regcode" type="text" value="">
                                </div>
								<div class="form-group">
                                    <input class="btn btn-lg btn-success btn-block" name="btn_registration" id="btn_registration" type="submit" value="Submit" />
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