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
	<!-- TINYMCE SETTING -->
			<script type="text/javascript" src="<?php echo base_url('dist/tinymce/js/tinymce/tinymce.min.js');?>"></script>
			<!-- END TINYMCE -->
</head>

<script>
tinymce.init({
	selector: 'textarea',
	theme: "modern",
	height: 500,
	menubar: false,
	plugins: [
		'advlist autolink lists link image charmap print preview anchor textcolor',
		'searchreplace visualblocks code fullscreen',
		'insertdatetime media table contextmenu paste code help wordcount'
	],
	toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
	content_css: [
		'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		'//www.tinymce.com/css/codepen.min.css']
});
</script>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active"><?php echo $title;?></li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Selamat datang <i class="fa fa-exclamation-circle"></i></a>
                        </li>
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="title">
                                    Notification <span class="badge pull-right">0</span>
                                </li>
                                <li class="message">
                                    No new notification
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown danger">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-star-half-o"></i> 4</a>
                            <ul class="dropdown-menu danger  animated fadeInDown">
                                <li class="title">
                                    Notification <span class="badge pull-right">4</span>
                                </li>
                                <li>
                                    <ul class="list-group notifications">
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i> new registration
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge success">1</span> <i class="fa fa-check icon"></i> new orders
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge danger">2</span> <i class="fa fa-comments icon"></i> customers messages
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item message">
                                                view all
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                            </ul>
                        </li>-->
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('USERNAME')?> <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="profile-img">
                                    <img src="../img/profile/picjumbo.com_HNCK4153_resize.jpg" class="profile-img">
                                </li>
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username"><?php echo $this->session->userdata('FULLNAME')?></h4>
                                        <p><?php echo $this->session->userdata('EMAIL')?></p>
										<?php if ($this->session->userdata('DEPT') == 'DEPT0001'){ ?>
                                        <div class="btn-group margin-bottom-2x" role="group">
											<a href="<?php echo site_url('persons/profile')?>" class="btn btn-default"><i class="fa fa-user-secret"></i>  Profile</a>
											<a href="<?php echo site_url('login/logout')?>" class="btn btn-default"><i class="fa fa-sign-out"></i>  Logout</a>
                                        </div>
										<?php } else {?>
                                        <div class="btn-group margin-bottom-2x" role="group">
											<a href="<?php echo site_url('login/logout')?>" class="btn btn-default"><i class="fa fa-sign-out"></i>  Logout</a>
                                        </div>
										<?php } ?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon">
									<img src="<?php echo base_url('dist/img/workstation-24.png')?>" border="0" alt="Menubar Image" />
								</div>
                                <div class="title">
									<?php if(isset($config)){foreach($config as $row){ echo $row->app_name; } }?>
								</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
						<?php if ($this->session->userdata('DEPT') == 'DEPT0001' and $this->session->userdata('IN') == '0'){ ?>
                        <ul class="nav navbar-nav">
                            <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>">
                                <a href="<?php echo site_url('dashboard')?>">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard </span>
                                </a>
                            </li>
                            <li class="<?php if(isset($active_assets)){echo $active_assets ;}?>">
                                <a href="<?php echo site_url('assets')?>">
                                    <span class="icon fa fa-desktop"></span><span class="title">Assets </span>
                                </a>
                            </li>
                            <li class="<?php if(isset($active_assignments)){echo $active_assignments ;}?>">
                                <a href="<?php echo site_url('assignments')?>">
                                    <span class="icon fa fa-tasks"></span><span class="title">Assignments </span>
                                </a>
                            </li>
                            <li class="<?php if(isset($active_persons)){echo $active_persons ;}?>">
                                <a href="<?php echo site_url('persons')?>">
                                    <span class="icon fa fa-users"></span><span class="title">Employees </span>
                                </a>
                            </li>
                            <li class="panel panel-default dropdown <?php if(isset($active_config)){echo $active_config ;}?>">
                                <a data-toggle="collapse" href="#dropdown-config">
                                    <span class="icon fa fa-cogs"></span><span class="title">Configurations </span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-config" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li>
												<a href="<?php echo site_url('config')?>">
													<span class="icon fa fa-cog"></span><span class="title">Configuration </span>
												</a>
                                            </li>
                                            <li>
												<a href="<?php echo site_url('areas')?>">
													<span class="icon fa fa-map-marker"></span><span class="title">Areas </span>
												</a>
                                            </li>
                                            <li>
												<a href="<?php echo site_url('categories')?>">
													<span class="icon fa fa-list"></span><span class="title">Categories </span>
												</a>
                                            </li>
                                            <li>
												<a href="<?php echo site_url('departments')?>">
													<span class="icon fa fa-flag"></span><span class="title">Departments </span>
												</a>
                                            </li>
                                            <li>
												<a href="<?php echo site_url('levels')?>">
													<span class="icon fa fa-sitemap"></span><span class="title">Levels </span>
												</a>
                                            </li>
                                            <li>
												<a href="<?php echo site_url('status')?>">
													<span class="icon fa fa-file-text-o"></span><span class="title">Status </span>
												</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
						<?php } else if ($this->session->userdata('DEPT') != 'DEPT0001' and $this->session->userdata('IN') == '0') { ?>
						<ul class="nav navbar-nav">
                            <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>">
                                <a href="<?php echo site_url('dashboard')?>">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard </span>
                                </a>
                            </li>
                            <li class="<?php if(isset($active_persons)){echo $active_persons ;}?>">
                                <a href="<?php echo site_url('persons/profile')?>">
                                    <span class="icon fa fa-user-secret"></span><span class="title">Profile </span>
                                </a>
                            </li>
                        </ul>
						<?php } else {?>
						<ul class="nav navbar-nav">
                            <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>">
                                <a href="<?php echo site_url('dashboard')?>">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard </span>
                                </a>
                            </li>
                        </ul>
						<?php } ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>