<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Paper - Material Admin Theme</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Paper - Material Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo-icon-dark.png">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet"> 

    <link href="<?= base_url()?>assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">        <!-- Font Awesome -->
    <link href="<?= base_url()?>assets/css/styles.css" type="text/css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link href="<?= base_url()?>assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->

    <link href="<?= base_url()?>assets/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">            <!-- iCheck -->
    <link href="<?= base_url()?>assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->

    <!--[if lt IE 10]>
        <script src="assets/js/media.match.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link href="<?= base_url()?>assets/plugins/form-daterangepicker/daterangepicker-bs3.css" type="text/css" rel="stylesheet">    <!-- DateRangePicker -->
<link href="<?= base_url()?>assets/plugins/fullcalendar/fullcalendar.css" type="text/css" rel="stylesheet">                   <!-- FullCalendar -->
<link href="<?= base_url()?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" type="text/css" rel="stylesheet">
<link href="<?= base_url()?>assets/less/card.less" type="text/css" rel="stylesheet"> 

<link href="<?= base_url()?>assets/plugins/chartist/dist/chartist.min.css" type="text/css" rel="stylesheet"> <!-- chartist -->
 
<script type="text/javascript" src="<?= base_url()?>assets/js/datatables.min.js"></script>
<link href="<?= base_url()?>assets/plugins/datatables/dataTables.bootstrap.css" type="text/css" rel="stylesheet">
<link href="<?= base_url()?>assets/plugins/datatables/dataTables.themify.css" type="text/css" rel="stylesheet">

    </head>

    <body class="animated-content infobar-overlay">
        
        
<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
	<!-- <div id="page-progress-loader" class="show"></div> -->

	<div class="logo-area">
            <a class="navbar-brand navbar-brand-primary" href="<?= base_url();?>">
			<img class="show-on-collapse img-logo-white" alt="Paper" src="<?= base_url();?>assets/img/logo-icon-white.png">
			<img class="show-on-collapse img-logo-dark" alt="Paper" src="<?= base_url();?>assets/img/logo-icon-dark.png">
			<img class="img-white" alt="Paper" src="<?= base_url();?>assets/img/logo-white.png">
			<img class="img-dark" alt="Paper" src="<?= base_url();?>assets/img/logo-dark.png">
		</a>

		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg stay-on-search">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">menu</i>
				</span>
			</a>
		</span>
		<span id="trigger-search" class="toolbar-trigger toolbar-icon-bg ov-h">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">search</i>
				</span>
			</a>
		</span>
		<div id="search-box">
			<input class="form-control" type="text" placeholder="Search..." id="search-input"></input>
		</div>
	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">

		<li class="toolbar-icon-bg appear-on-search ov-h" id="trigger-search-close">
	        <a class="toggle-fullscreen"><span class="icon-bg">
	        	<i class="material-icons">close</i>
	        </span></i></a>
	    </li>
		<li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
	        <a href="#" class="toggle-fullscreen"><span class="icon-bg">
	        	<i class="material-icons">fullscreen</i>
	        </span></i></a>
	    </li>

   		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="material-icons">notifications</i></span><span class="badge badge-info"></span></a>
			<div class="dropdown-menu animated notifications">
				<div class="topnav-dropdown-header">
					<span>3 new notifications</span>
					
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-success">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">lock</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Privacy settings have been changed.</h4>
									<span class="notification-time">8 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-info">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">shopping_cart</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">A new order has been placed.</h4>
									<span class="notification-time">24 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-teal">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">perm_contact_calendar</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">New event started!</h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-indigo">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">settings</i></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">New app settings updated.</h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-danger">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="material-icons">comment</i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Jessi commented your post.</h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">See all notifications</a>
				</div>
			</div>
		</li>

        <li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="material-icons">mail</i></span><span
			class="badge badge-info"></span></a>
			<div class="dropdown-menu animated notifications">
				<div class="topnav-dropdown-header">
					<span>2 new messages</span>
					
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="<?= base_url();?>assets/demo/avatar/avatar_01.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Amy Green</strong> <span class="text-gray">‒ Integer vitae libero ac risus egestas placerat.</span></h4>
									<span class="notification-time">2 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="<?= base_url();?>assets/demo/avatar/avatar_09.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Daniel Andrews</strong> <span class="text-gray">‒ Vestibulum commodo felis quis tortor</span></h4>
									<span class="notification-time">40 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="<?= base_url();?>assets/demo/avatar/avatar_02.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Jane Simpson</strong> <span class="text-gray">‒ Fusce lobortis lorem at ipsum semper sagittis.</span></h4>
									<span class="notification-time">6 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="<?= base_url();?>assets/demo/avatar/avatar_03.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Harold Hawkins</strong> <span class="text-gray">‒ Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span></h4>
									<span class="notification-time">8 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="<?= base_url();?>assets/demo/avatar/avatar_04.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Brian Fisher</strong> <span class="text-gray">‒ Praesent dapibus, neque id cursus faucibus.</span></h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="<?= base_url();?>assets/demo/avatar/avatar_05.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Dylan Black</strong> <span class="text-gray">‒ Pellentesque fermentum dolor. </span></h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-message">
							<a href="#">
								<div class="media-left">
									<img class="img-circle avatar" src="<?= base_url();?>assets/demo/avatar/avatar_06.png" alt="" />
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><strong>Bobby Harper</strong> <span class="text-gray">‒ Sed adipiscing ornare risus. Morbi est est.</span></h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">See all messages</a>
				</div>
			</div>
		</li>

		<li class="toolbar-icon-bg" id="trigger-infobar">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">more_vert</i>
				</span>
			</a>
		</li>
		
	</ul>

</header>

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-blue">
                    <div class="static-sidebar">
                        <div class="sidebar">
	<div class="widget" id="widget-profileinfo">
        <div class="widget-body">
            <div class="userinfo ">
                <div class="avatar pull-left">
                    <img src="<?= base_url();?>assets/demo/avatar/avatar_15.png" class="img-responsive img-circle"> 
                </div>
                <div class="info">
                    <span class="username"><?=$this->session->userdata['usuario_nome']?></span>
                    <span class="useremail"><?=$this->session->userdata['usuario_email']?></span>
                </div>

                <div class="acct-dropdown clearfix dropdown">
                    <span class="pull-left"><span class="online-status online"></span>Online</span>
                    <!-- <span class="pull-right dropdown-toggle" data-toggle="dropdown"><a href="javascript:void(0)" class="btn btn-fab-caret btn-xs btn-fab"><i class="material-icons">arrow_drop_down</i><div class="ripple-container"></div></a></span>
                    <ul class="dropdown-menu">
                        <li><span class="online-status online"></span> Online</li>
                        <li><span class="online-status online"></span> Online</li>
                        <li><span class="online-status online"></span> Online</li>
                        <li><span class="online-status online"></span> Online</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
	<div class="widget stay-on-collapse" id="widget-sidebar">
        <?php if($this->session->userdata['usuario_tipo'] == "A") { ?>  
        <nav role="navigation" class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator"><span>Navegação</span></li>
		<li><a  class="withripple" href="<?= base_url();?>"><span class="icon">
		<i class="material-icons">home</i></span><span>Inicio</span><span class="badge badge-teal">2</span></a></li>
		<li><a  class="withripple" href="#"><span class="icon"><i class="material-icons">code</i></span><span>Eventos</span></a></li>
                <li><a  class="withripple" href="#"><span class="icon"><i class="material-icons">code</i></span><span>Painel</span></a></li>
		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">flash_on</i></span><span>Cadastros</span></a>
			<ul class="acc-menu">
                            <li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastrocliente">Clientes</a></li>
                            <li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastroequipamento">Equipamentos</a></li>
                            <li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastroejornadas">Jornadas</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastrogrupo">Grupo</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastroentregadores">Entregadores</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastrousuarios">Usuários</a></li>
			</ul>
		</li>

		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">settings</i></span><span>Relatórios</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/relatorioacessos">Acessos</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/relatorioeventos">Eventos</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/relatoriojornadas">Jornadas</a></li>
                <li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastrotemperatura">Temperatura</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/relatorioumidade">Umidade</a></li>
			</ul>
		</li>

    
<li><a  class="withripple" href="<?= base_url();?>"><span class="icon">
		<i class="material-icons">home</i></span><span>Administração</span></a></li>
                <li><a  class="withripple" href="<?= base_url();?>"><span class="icon">
		<i class="material-icons">home</i></span><span>Monitoramento</span></a></li>
		<li><a  class="withripple" href="<?= base_url(); ?>index.php/usuarios/sair"><span class="icon"><i class="material-icons">map</i></span><span>Sair</span></a>
		</li>

		
	</ul>
</nav>
        <?php } ?>
            <?php if($this->session->userdata['usuario_tipo'] == "C") { ?>
                   <nav role="navigation" class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator"><span>Navegação</span></li>
		<li><a  class="withripple" href="<?= base_url();?>"><span class="icon">
		<i class="material-icons">home</i></span><span>Inicio</span><span class="badge badge-teal">2</span></a></li>
		<li><a  class="withripple" href="#"><span class="icon"><i class="material-icons">code</i></span><span>Eventos</span></a></li>
                <li><a  class="withripple" href="#"><span class="icon"><i class="material-icons">code</i></span><span>Painel</span></a></li>
		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">flash_on</i></span><span>Cadastros</span></a>
			<ul class="acc-menu">
    
                            <li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastroejornadas">Jornadas</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastrogrupo">Grupo</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastroentregadores">Entregadores</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastrousuarios">Usuários</a></li>
			</ul>
		</li>

		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">settings</i></span><span>Relatórios</span></a>
			<ul class="acc-menu">
			<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/relatorioacessos">Acessos</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/relatorioeventos">Eventos</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/relatoriojornadas">Jornadas</a></li>
                <li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastrotemperatura">Temperatura</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/relatorioumidade">Umidade</a></li>
			</ul>
		</li>

    
		<li><a  class="withripple" href="<?= base_url(); ?>index.php/usuarios/sair"><span class="icon"><i class="material-icons">map</i></span><span>Sair</span></a>
		</li>

		
	</ul>
</nav>
            <?php } ?>
                      <?php if($this->session->userdata['usuario_tipo'] == "M") { ?>
                   <nav role="navigation" class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator"><span>Navegação</span></li>
		<li><a  class="withripple" href="<?= base_url();?>"><span class="icon">
		<i class="material-icons">home</i></span><span>Monitoramento</span></a></li>

		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">settings</i></span><span>Relatórios</span></a>
			<ul class="acc-menu">
				<li><a  class="withripple" href="">Eventos</a></li>

			</ul>
		</li>

    
		<li><a  class="withripple" href="<?= base_url(); ?>index.php/usuarios/sair"><span class="icon"><i class="material-icons">map</i></span><span>Sair</span></a>
		</li>

		
	</ul>
</nav>
            <?php } ?>
            
                      <?php if($this->session->userdata['usuario_tipo'] == "D") { ?>
                   <nav role="navigation" class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator"><span>Navegação</span></li>
		<li><a  class="withripple" href="<?= base_url();?>"><span class="icon">
		<i class="material-icons">home</i></span><span>Inicio</span><span class="badge badge-teal">2</span></a></li>
		<li><a  class="withripple" href="#"><span class="icon"><i class="material-icons">code</i></span><span>Eventos</span></a></li>
                <li><a  class="withripple" href="#"><span class="icon"><i class="material-icons">code</i></span><span>Painel</span></a></li>
	
		<li><a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">settings</i></span><span>Relatórios</span></a>
			<ul class="acc-menu">
			
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/relatoriojornadas">Jornadas</a></li>
                <li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/cadastrotemperatura">Temperatura</a></li>
				<li><a  class="withripple" href="<?=base_url()?>index.php/dashboard/relatorioumidade">Umidade</a></li>
			</ul>
		</li>

    
		<li><a  class="withripple" href="<?= base_url(); ?>index.php/usuarios/sair"><span class="icon"><i class="material-icons">map</i></span><span>Sair</span></a>
		</li>

		
	</ul>
</nav>
            <?php } ?>
    </div>
</div>
                    </div>
                </div>
