<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/lib/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/lib/css/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/lib/css/animate.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/lib/css/bootstrap-switch.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/lib/css/checkbox3.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/lib/css/jquery.dataTables.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/lib/css/dataTables.bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/lib/css/select2.min.css')?>">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/themes/flat-blue.css')?>">
	<!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url('dist/img/favicon.ico')?>">
</head>

<body class="flat-blue login-page">
    <div class="container">
        <div class="login-box">
            <div>
                <div class="login-form row">
                    <div class="col-sm-12 text-center login-header">
                        <i class="login-logo fa fa-connectdevelop fa-5x"></i>
                        <h4 class="login-title"><?php echo $title?></h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="login-body">
                            <div class="progress hidden" id="login-progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    Log In...
                                </div>
                            </div>
							<?php if(isset($config)){foreach($config as $row){?>
							<center><img src="<?php echo base_url('dist/img/Logo TSB-2.png')?>" height="100px" class="profile-img"></center>
							<div class="alert fresh-color alert-info text-center align-center"><h4><?php echo $row->app_name; ?></h4></div>
							
							<?php }}?>
                            <form action="<?= site_url('login/cek_login')?>" method="post">
							<?php
							$message = $this->session->flashdata('notif');
							if($message){
								echo '<p class="alert fresh-color alert-danger text-center">'.$message .'</p>';
							}?>
                                <div class="control">
                                    <input type="text" class="form-control" placeholder="Username" name="user_name" required />
                                </div>
                                <div class="control">
                                    <input type="password" class="form-control" placeholder="Password" name="pwd" required />
                                </div>
                                <div class="login-button text-center">
									<button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> | Sign In</button>
                                </div>
                            </form>
                        </div>
                        <div class="login-footer">
                            <span class="text-right"><a href="#" class="color-white">Forgot password?</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript Libs -->
    <script type="text/javascript" src="<?php echo base_url('dist/lib/js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/lib/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/lib/lib/js/Chart.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/lib/js/bootstrap-switch.min.js')?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url('dist/lib/js/jquery.matchHeight-min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/lib/js/jquery.dataTables.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/lib/js/dataTables.bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/lib/js/select2.full.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/lib/js/ace/ace.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/lib/js/ace/mode-html.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/lib/js/ace/theme-github.js')?>"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo base_url('dist/js/app.js')?>"></script>
</body>

</html>
