<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>registration form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/RegisterApplicant.css')?>" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>APPLICANT REGISTRATION FORM</b></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first-name" id="first-name" class="form-control input-sm" placeholder="enter your full name in capital blocks in here">
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last-name" id="last-name" class="form-control input-sm" placeholder="enter your surname in capital blocks in here">
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="postal-address" id="postal-address" class="form-control input-sm" placeholder="enter your postal address in here">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="permanent-address" id="permanent-address" class="form-control input-sm" placeholder="enter your permanent address in here">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="text" name="driving-licence" id="driving-licence"   class="form-control input-sm " placeholder="enter your NIC No/ Driving Licence No/Passposrt No ">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-ms-6">
                                    <div form-group>
                                        <input type="email" name="personal-email" id="personal-email" class="form-control input-sm" placeholder="enter your personal-email address in here">
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-ms-6">
                                    <div form-group>
                                        <input type="email" name="office-email" id="office-email" class="form-control input-sm" placeholder="enter your office-email address in here">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-ms-6">
                                    <div form-group>
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="password">
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-ms-6">
                                    <div form-group>
                                        <input type="re-password" name="re-password" id="re-password" class="form-control input-sm" placeholder="re password">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-ms-6">
                                    <div form-group>
                                        <input type="re-password" name="re-password" id="re-password" class="form-control input-sm" placeholder="re password">
                                    </div>
                                </div>
                                
                            </div>
                            <input type="submit" value="register" class="btn btn-info btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</body>
</html>