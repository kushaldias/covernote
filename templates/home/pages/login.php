<?php include_once ('header/header.php'); ?>

<body style="background-color:#FFF">
    <!------------------------------------ Details -------------------------------->
    <div class="row" >
        <div class="six column" style="padding-top:33px;">
            <form method="post" action="" name="login">
                <div class="row" style="margin-bottom:15px;">
                    <div class="two column" >
                        <label id="terma" class="label" style="margin-bottom:15px;">please sign-in</label>
                    </div>
                    <div class="four column"></div>
                    <div class="four column"></div>
                </div> 	


                <div class="form-signin offset-by-three" >
                    <h2 class="form-signin-heading">HNB General CoverNote System</h2>
                    <div class="login-wrap">
                        <div class="user-login-info">                           
                            <?php echo $ui->input_text(array('name' => 'username', 'hint' => 'User ID', 'class' => 'required form-control')); ?>
                            <small id="pay_user_name_msg" class="hide">* please enter your username</small> 
                            <?php echo $ui->input_password(array('name' => 'password', 'hint' => 'Password', 'class' => 'required')); ?>
                            <small id="user_error_msg" class="hide">* entered username or password is incorrect</small>
                        </div>
                        <label class="checkbox">
                            <input type="checkbox" value="remember-me"> Remember me
                            <span class="pull-right">
                                <a data-toggle="modal" href=""> Forgot Password?</a>
                            </span>
                        </label>
                        <?php echo $ui->input_button_primary(array('name' => 'btnlogin', 'value' => 'Login', 'type' => 'submit')); ?>

                        <!--send to UI class fro authenticate-->

                    </div>
                </div>   

        </div>   



        <!--------------------------------right side------------------------------->

        <div class="four columns">
            <a href=""><img src="<?php echo IMAGED_PATH; ?>b/page2_img.jpg" width="230" height="304"></a>
        </div>
    </div>


</body>

<?php include_once ('footer/footer.php'); ?>