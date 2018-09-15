<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UCSC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
            <div class="submit">
                <input type="submit" name="submit" >
            </div>
        </form>
    </body>
</html>