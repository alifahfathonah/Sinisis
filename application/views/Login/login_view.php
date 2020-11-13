<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>SINISIS SDN SUMBERSARI 02</title>
    <!-- BOOTSTRAP CORE STYLE  -->
   <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
   <link href="<?php echo base_url('assets/css/style2.css')?>" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background-color: white;
        }
    </style>
</head>
<body>

<div id="login">
       <center><img src="assets/img/b.png" style="width: 40%"/> 
        <fieldset>
            <form role="form" action"Login" method="POST">
                        <input type="text" name="txt_username" placeholder="Username"  /><br>
                        <input type="password" name="txt_password" placeholder="Password"  />
                        <hr />
                        <input style="font-family:Impact; font-size: 20px;" type="submit" name="btn_log" value="LOGIN"><br><br>
                        
                    </form>
                    <b><p style="color: black; font-size: 16px;"><?php echo $model->notif;?></p></b>
        </fieldset>
    </center>
    </div>
                    <footer><center>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; SDN SUMBERSARI 02
                </div>

            </div>
        </div>
    </footer></center>
                </div>
                </div>
 
    <!-- CONTENT-WRAPPER SECTION END-->
   
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>

</body>
</html>