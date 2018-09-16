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
        <link rel="stylesheet" href="<?=base_url('assets/css/UserloginView1.css')?>" type="text/css"/>
        <script src="main.js"></script>
    </head>
    <body>

        <div class="heading">
            <h1 alilgn="center"> USER LOGIN</h1>
        </div>

        
        <form action= "<?= base_url("/index.php/UserLoginController/getPostValue")?>" method = "post" >
            <div class="username">
                
                <input type='text' class="form-control input-sm username" name='username' id='username' required size='5'placeholder="                Enter your username"/>
            </div>
            <div class="password">
               
                <input type='password'class="form-control input-sm password"  name='password' id='password' size='25' placeholder="                 Enter your password" required />
            </div>

            <div class="errorMessage">
                <h5>your username and password is not extits or in valid !<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sign up or re try</h5>
            </div>


            <div class="login">
                <input type="submit" id="login" name="login" class="btn btn-info btn-block"  value="LOG IN">
            </div>
        </form>

        <form action= "<?= base_url("/index.php/UserLoginController/registerApplicant")?>" method = "post" >
            <div class="signup">
                <input type="submit" id="sign-up" class="btn btn-info btn-block" name="signup" value="SIGN UP"/>
                
            </div>
        </form>
    </body>
</html>