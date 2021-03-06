<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="<?php echo base_url()?>public/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>public/assets/img/favicon-32x32.png" sizes="32x32">

    <title>UNILEVER REPORTING SYSTEM - Login Page</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/bower_components/uikit/css/uikit.almost-flat.min.css"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/assets/css/login_page.min.css" />
</head>
<body class="login_page" style="background:white;">
    <!--<h1><?php echo lang('login_heading');?></h1>
    <p><?php echo lang('login_subheading');?></p>-->
    
    <!--<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>-->
    
    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
            <div class="alert alert-info">
                <strong><div id="infoMessage"><?php echo $message;?></div></strong>
            </div>
                <div class="login_heading">
                    <!-- <div class="user_avatar"></div> -->
                    <div><img src="<?php echo base_url('/public/assets/img/unilever-logo_tcm244-409314.svg')?>" style="width:50%; height:50%;"/></div>
                </div>
                <form action="<?php echo base_url('auth/login')?>" method="POST">
                    <div class="uk-form-row">
                        <label for="identity">Username</label>
                        <input type="text" name="identity" id="identity" data-parsley-trigger="change" required="" class="md-input" data-parsley-id="4">
                    </div>
                    <div class="uk-form-row">
                        <label for="password">Password</label>
                        <input class="md-input" type="password" id="password" name="password" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <button class="md-btn md-btn-primary md-btn-block md-btn-large">Sign In</button>
                    </div>
                    <div class="uk-margin-top">
                        <span class="icheck-inline">
                            <input type="checkbox" name="remember" value="1" id="remember" data-md-icheck>
                            <label for="login_page_stay_signed" class="inline-label">Remember Me</label>
                        </span>
                    </div>
                </form>
            </div>
            <!-- <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->
            <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top" id="login_help_close"></button>
                <h2 class="heading_b uk-text-success">Can't log in?</h2>
                <p>Here�s the info to get you back in to your account as quickly as possible.</p>
                <p>First, try the easiest thing: if you remember your password but it isn�t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
                <p>If your password still isn�t working, it�s time to <a href="#" id="login_password_reset_show">reset your password</a>.</p>
            </div>
            <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
                <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
                <form action="">
                    <div class="uk-form-row">
                        <label for="login_email_reset">Your email address</label>
                        <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <button class="md-btn md-btn-primary md-btn-block">Reset password</button>
                    </div>
                </form>
            </div>
        </div>
       
    </div>
    
    <!-- common functions -->
    <script src="<?php echo base_url()?>public/assets/js/common.min.js"></script>
    <!-- altair core functions -->
    <script src="<?php echo base_url()?>public/assets/js/altair_admin_common.min.js"></script>

    <!-- altair login page functions -->
    <script src="<?php echo base_url()?>public/assets/js/pages/login_page.min.js"></script>
    <!-- common functions -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script src="<?php echo base_url()?>public/assets/jquery.backstretch.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('body').backstretch("https://dl.dropbox.com/u/515046/www/garfield-interior.jpg");
        });
    </script>

</body>
</html>


