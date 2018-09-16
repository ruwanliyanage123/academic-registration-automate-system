<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UCSC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>" type="text/css"/>
        <link rel="stylesheet" href="<?=base_url('assets/css/UserloginView.css')?>" type="text/css"/>
        <script src="main.js"></script>
    </head>
    <body>

        <div class="heading">
            <h1 alilgn="center"> USER LOGIN</h1>
        </div>
        <form action= "<?= base_url("/index.php/UserLoginController/getPostValue")?>" method = "post" >
            <div class="username">
                USERNAME
                <input type='text' name='username' id='username' required size='25'placeholder=" Enter your username"/>
            </div>
            <div class="password">
                PASSWORD 
                <input type='password' name='password' id='password' size='25' placeholder=" Enter your password" required />
            </div>
            <div class="login">
                <input type="submit" name="login"  value="LOG IN">
            </div>
        </form>

        <form action= "<?= base_url("/index.php/UserLoginController/registerApplicant")?>" method = "post" >
            <div class="signup">
                <input type="submit" name="signup" value="SIGN UP"/>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </div>
        </form>
    </body>
</html>