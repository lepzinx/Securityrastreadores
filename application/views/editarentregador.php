<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SecurityRastreadores - Edição de Clientes</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Paper - Material Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo-icon-dark.png">

 
       <link rel="shortcut icon" href="assets/img/logo-icon-dark.png">

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
    
<link href="<?= base_url()?>assets/plugins/datatables/dataTables.bootstrap.css" type="text/css" rel="stylesheet">                    <!-- Bootstrap Support for Datatables -->
<link href="<?= base_url()?>assets/plugins/datatables/dataTables.themify.css" type="text/css" rel="stylesheet">                  <!-- FontAwesome Support for Datatables -->

   
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

                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li class=""><a href="<?= base_url()?>">Home</a></li>
<li class="active"><a href="<?= base_url()?>index.php/dashboard/cadastroentregador">Cadastro entregador</a></li>
<li class="active"><a href="">Editar entregador</a></li>

                            </ol>
                            <div class="page-heading">            
                               <h1>Geral</h1>
 
                           </div>
                            <div class="container-fluid">
  
<div data-widget-group="group1">
    <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="info-tile info-tile-alt tile-purple">
            <div class="info">
                <div class="tile-heading"><span>Clientes</span></div>
                <div class="tile-body"><span><?= $total_clientes?></span></div>
            </div>
            <div class="stats">
               <div class="tile-content"><div id="dashboard-sparkline-indigo"></div></div>
            </div>
        </div>
    </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="info-tile info-tile-alt tile-brown ">
            <div class="info">
                <div class="tile-heading"><span>Usuários</span></div>
                <div class="tile-body "><span><?=$total_usuarios?></span></div>
            </div>
            <div class="stats">
                <div class="tile-content"><div class="tile-line"></div></div>
            </div>
        </div>
    </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="info-tile info-tile-alt tile-gray ">
            <div class="info">
                <div class="tile-heading"><span>Entregador</span></div>
                <div class="tile-body "><span><?=$total_entregador?></span></div>
            </div>
            <div class="stats">
                <div class="tile-content">
                    <span class="material-icons tile-icon">face</span>
                </div>
            </div>
        </div>
    </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="info-tile info-tile-alt tile-indigo">
                <div class="info">
                    <div class="tile-heading"><span>Equipamento</span></div>
                    <div class="tile-body"><span><?= $total_equipamentos?></span></div>
                </div>
                <div class="stats">
                    <div class="tile-content"><div id="dashboard-sparkline-indigo"></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="info-tile info-tile-alt tile-success clearfix">
                <div class="info">
                    <div class="tile-heading"><span>On-line</span></div>
                    <div class="tile-body "><span>1,454</span></div>
                </div>
                <div class="stats">
                    <div class="tile-content"><div id="dashboard-sparkline-success"></div></div>
                </div>
            </div>
        </div>
    
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="info-tile info-tile-alt tile-danger">
                <div class="info">
                    <div class="tile-heading"><span>Offline</span></div>
                    <div class="tile-body "><span>2,344</span></div>
                </div>
                <div class="stats">
                    <div class="tile-content"><div id="dashboard-sparkline-gray"></div></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="info-tile info-tile-alt tile-primary">
                <div class="info">
                    <div class="tile-heading"><span>Monitorado 24hs</span></div>
                    <div class="tile-body "><span><?=$total_monitorado?></span></div>
                </div>
                <div class="stats">
                    <div class="tile-content"><div id="dashboard-sparkline-primary"></div></div>
                </div>
            </div>
        </div>
   
       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="info-tile info-tile-alt tile-orange">
            <div class="info">
                <div class="tile-heading"><span>Eventos</span></div>
                <div class="tile-body "><span><?=$total_eventos;?></span></div>
            </div>
            <div class="stats">
                <div class="tile-content"><div class="tile-pie"></div></div>
            </div>
        </div>
    </div>
        
        



    <div class="page-heading">            
        <h1>Novo entregador

                           </div>
     
        <div class="col-sm-2"></div>
        			<div class="panel col-sm-8">
				<div class="panel-heading">
					<h2>Editar entregador</h2>
	
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
                                                    <form method="post" action="<?= base_url()?>index.php/dashboard/alterarentregador/<?=$indice?>" class="form-horizontal" enctype="multipart/form-data">
                                                           <?php foreach($entregador as $ent){ ?>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nome</label>
									<div class="col-sm-8">
										<input name="entrega_nome" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_nome?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Nome do entregador</p>
									</div>
								</div>
                                                            		<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">CPF</label>
									<div class="col-sm-8">
										<input name="entrega_cpf" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_cpf?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Documento CPF</p>
									</div>
								</div>
                          
                                                            <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Telefone Fixo</label>
									<div class="col-sm-8">
										<input name="entrega_fixo" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_fixo?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Telefone do entregador</p>
									</div>
								</div>
                                                              <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Telefone celular</label>
									<div class="col-sm-8">
										<input name="entrega_cel" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_cel?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Telefone móvel </p>
									</div>
								</div>
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Endereço</label>
									<div class="col-sm-8">
										<input name="entrega_endereco" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_endereco?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Endereço do entregador</p>
									</div>
								</div>
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Marca do carro</label>
									<div class="col-sm-8">
										<input name="entrega_marca" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_marca?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Modelo do carro</label>
									<div class="col-sm-8">
										<input name="entrega_modelo" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_modelo?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
                                                              <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Cor</label>
									<div class="col-sm-8">
										<input name="entrega_cor" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_cor?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
                                                            <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Ano</label>
									<div class="col-sm-8">
										<input name="entrega_ano" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_ano?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
                                                         <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Placa</label>
									<div class="col-sm-8">
										<input name="entrega_placa" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_placa?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
                                                         <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tipo CNH</label>
									<div class="col-sm-8">
										<input name="entrega_cnh" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_cnh?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
                                                         <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Validade</label>
									<div class="col-sm-8">
										<input name="entrega_validade" type="text" class="form-control" id="focusedinput" value="<?=$ent->entrega_validade?>">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
                                                        <?php if($this->session->userdata["usuario_tipo"] == "A"){ ?>
                                                         <div class="form-group">
									<label for="cliente_id" class="col-sm-2 control-label">Cliente</label>
					
									<div class="col-sm-8"><select name="cliente_id" id="selector1" class="form-control">
                                                                                <?php foreach($usuarios as $usu){ ?>
										<option value="<?= $usu->cliente_id?>"><?= $usu->cliente_id?> - <?= $usu->cliente_nome?></option>
							
                                                                                <?php } ?>
									</select>
								</div>
                                                        <?php } ?>
                                                         </div>
                                                           <?php }?>
                                                                           <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
										 
                                                                                 <input type="submit" class="btn btn-raised btn-success" value="Alterar">
                                                                                <a class="btn btn-raised" href="<?= base_url() ?>index.php/dashboard/cadastroentregador/">Voltar</a>
                                                                                         <a class="btn btn-raised btn-danger pull-right" href="javascript:;" onclick="ConfirmaExclusao()">Excluir</a>
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
           
							
                                                          
							</form>
						</div>
         <div class="col-sm-2"></div>
        
        
                 <script> function ConfirmaExclusao() {
  if( confirm( 'Tem certeza que deseja excluir?' ) ) {
  location="<?=base_url()?>index.php/dashboard/excluircli/<?=$indice?>";
  }
}</script>



                </div>
            </div>
        </div>
        
                </div>
            </div>
        </div>

        <div class="infobar-wrapper scroll-pane">
            <div class="infobar scroll-content">

    
        <ul class="nav nav-tabs material-nav-tabs stretch-tabs icon-tabs">
            <li ><a href="#tab-7-1" data-toggle="tab">
                <i class="material-icons">settings</i>
            </a></li>
            <li class="active "><a href="#tab-7-2" data-toggle="tab"><span class="step size-64">
                  <i class="material-icons">textsms</i>
                </span></a>
            </li>
        </ul>
                                  
  
                
                
                
                
                
                

    <div class="tab-content">
        <div class="tab-pane" id="tab-7-1">

            <table class="table table-settings">
                <tbdody>
                    <tr>
                        <td>
                            <h5>Alerts</h5>
                            <p>Sets alerts to get notified when changes occur to get new alerming items</p>
                        </td>
                        <td><span class="togglebutton toggle-info"><label><input type="checkbox"> </label></span></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Notifications</h5>
                            <p>You will receive notification email for any notifications if you set notification</p>
                        </td>
                        <td><span class="togglebutton toggle-primary"><label><input type="checkbox" class="toggle"  checked=""> </label></span></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Messages</h5>
                            <p>You will receive notification on email after setting messages notifications</p>                            
                        </td>
                        <td>
                            <span class="togglebutton toggle-danger"><label><input type="checkbox" > </label></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Warnings</h5>
                            <p>You will get warnning only some specific setttings or alert system</p>
                        </td>
                        <td>
                            <span class="togglebutton toggle-warning"><label><input type="checkbox" checked=""> </label></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Sidebar</h5>
                            <p>You can hide/show use with sidebar collapsw settings</p>
                        </td>
                        <td><span class="togglebutton toggle-success"><label><input type="checkbox" checked=""> </label></span></td>
                    </tr>
                </tbdody>
            </table>

        </div>
        <div class="tab-pane active" id="tab-7-2">

            <div class="widget">
                <div class="widget-heading">Recent Activities</div>
                <div class="widget-body">
                    <ul class="timeline">
                        <li class="timeline-purple">
                            <div class="timeline-icon"><i class="material-icons">add</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Jana Pena is now Follwing you</span>
                                    <span class="date">2 min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-primary">
                            <div class="timeline-icon"><i class="material-icons">textsms</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Percy liaye Like your picture</span>
                                    <span class="date">6 min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-green">
                            <div class="timeline-icon"><i class="material-icons">done</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Leon miles make your presentation for new project</span>
                                    <span class="date">2 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-danger">
                            <div class="timeline-icon"><i class="material-icons">favorite</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Lake wile like your comment</span>
                                    <span class="date">5 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-sky">
                            <div class="timeline-icon"><i class="material-icons">attach_money</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">The Mountain Ambience paid your payment</span>
                                    <span class="date">9 hours ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="widget">
                <div class="widget-heading">Contacts</div>
                <div class="widget-body">
                    <ul class="media-list contacts">
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="<?=base_url()?>assets/demo/avatar/avatar_01.png" alt="" />
                            </div>
                            <div class="media-body">
                              <span class="text-gray">Jon Owens</span>
                                <span class="contact-status text-success">Online</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="<?=base_url()?>assets/demo/avatar/avatar_02.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Nina Huges</span>
                                <span class="contact-status text-muted">Offline</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_03.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Austin Lee</span>
                                <span class="contact-status text-danger">Busy</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_04.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Grady Hines</span>
                                <span class="contact-status text-warning">Away</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_06.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Adrian Barton</span>
                                <span class="contact-status text-success">Online</span>
                            </div>
                        </li>
                    </ul>                                
                </div>
            </div>


            </div>
        </div>

    </div>

</div>
        </div>

    
    <!-- Das FAB -->
<button class="btn btn-primary btn-fab demo-switcher-fab" data-toggle="tooltip" data-placement="top" title="Click for Settings"><i class="material-icons">settings</i></button>

<!-- Switcher -->
    <div class="demo-options">
        <div class="demo-body">
            <div class="tabular">
                <div class="tabular-row">
                    <div class="tabular-cell">Fixed Header</div>
                    <div class="tabular-cell demo-switches text-right">
                        <div class="togglebutton checkbox-primary">
                            <label>
                                <input type="checkbox" name="demo-fixedheader" />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Boxed Layout</div>
                    <div class="tabular-cell demo-switches text-right">
                            <div class="togglebutton toggle-primary">
                                <label>
                                    <input type="checkbox" name="demo-layoutboxed">
                                </label>
                            </div>
                        </div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Collapse Leftbar</div>
                    <div class="tabular-cell demo-switches text-right">
                            <div class="togglebutton toggle-primary">
                                <label>
                                    <input type="checkbox" name="demo-collapseleftbar">
                                </label>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="demo-body">
            <div class="option-title">Brand</div>
            <ul id="demo-header-color" class="demo-color-list">
                <li><span data-addclass="navbar-brand-default" class="brand-switcher demo-default"></span></li>
                <li><span data-addclass="navbar-brand-primary" class="brand-switcher demo-primary"></span></li>
                <li><span data-addclass="navbar-brand-success" class="brand-switcher demo-success"></span></li> 
                <li><span data-addclass="navbar-brand-danger" class="brand-switcher demo-danger"></span></li>
                <li><span data-addclass="navbar-brand-warning" class="brand-switcher demo-warning"></span></li>
                <li><span data-addclass="navbar-brand-info" class="brand-switcher demo-info"></span></li> 
                <li><span data-addclass="navbar-brand-inverse" class="brand-switcher demo-inverse"></span></li> 
            </ul>
        </div>

        <div class="demo-body">
            <div class="option-title">Topnav</div>
            <ul id="demo-header-color" class="demo-color-list">
                <li><span data-addclass="navbar-cyan" class="topnav-switcher demo-cyan"></span></li>
                <li><span data-addclass="navbar-light-blue" class="topnav-switcher demo-light-blue"></span></li>
                <li><span data-addclass="navbar-blue" class="topnav-switcher demo-blue"></span></li>
                <li><span data-addclass="navbar-indigo" class="topnav-switcher demo-indigo"></span></li>
                <li><span data-addclass="navbar-deep-purple" class="topnav-switcher demo-deep-purple"></span></li> 
                <li><span data-addclass="navbar-purple" class="topnav-switcher demo-purple"></span></li> 
                <li><span data-addclass="navbar-pink" class="topnav-switcher demo-pink"></span></li> 
                <li><span data-addclass="navbar-red" class="topnav-switcher demo-red"></span></li>
                <li><span data-addclass="navbar-teal" class="topnav-switcher demo-teal"></span></li>
                <li><span data-addclass="navbar-green" class="topnav-switcher demo-green"></span></li>
                <li><span data-addclass="navbar-light-green" class="topnav-switcher demo-light-green"></span></li>
                <li><span data-addclass="navbar-orange" class="topnav-switcher demo-orange"></span></li>               
                <li><span data-addclass="navbar-deep-orange" class="topnav-switcher demo-deep-orange"></span></li>
                
                <li><span data-addclass="navbar-bluegray" class="topnav-switcher demo-bluegray"></span></li>
                
                
                <li><span data-addclass="navbar-gray" class="topnav-switcher demo-gray"></span></li> 
                
                <li><span data-addclass="navbar-default" class="topnav-switcher demo-default"></span></li>
                <li><span data-addclass="navbar-bleachedcedar" class="topnav-switcher demo-bleachedcedar"></span></li>
                <li><span data-addclass="navbar-brown" class="topnav-switcher demo-brown"></span></li>
            </ul>
        </div>

        <div class="demo-body">
            <div class="option-title">Sidebar</div>
            <ul id="demo-sidebar-color" class="demo-color-list">
                <li><span data-addclass="sidebar-cyan" class="leftbar-switcher demo-cyan"></span></li>
                <li><span data-addclass="sidebar-light-blue" class="leftbar-switcher demo-light-blue"></span></li>
                <li><span data-addclass="sidebar-blue" class="leftbar-switcher demo-blue"></span></li>
                <li><span data-addclass="sidebar-indigo" class="leftbar-switcher demo-indigo"></span></li>
                <li><span data-addclass="sidebar-deep-purple" class="leftbar-switcher demo-deep-purple"></span></li> 
                <li><span data-addclass="sidebar-purple" class="leftbar-switcher demo-purple"></span></li> 
                <li><span data-addclass="sidebar-pink" class="leftbar-switcher demo-pink"></span></li> 
                <li><span data-addclass="sidebar-red" class="leftbar-switcher demo-red"></span></li>
                <li><span data-addclass="sidebar-teal" class="leftbar-switcher demo-teal"></span></li>
                <li><span data-addclass="sidebar-green" class="leftbar-switcher demo-green"></span></li>
                <li><span data-addclass="sidebar-light-green" class="leftbar-switcher demo-light-green"></span></li>
                <li><span data-addclass="sidebar-orange" class="leftbar-switcher demo-orange"></span></li>               
                <li><span data-addclass="sidebar-deep-orange" class="leftbar-switcher demo-deep-orange"></span></li>
                
                <li><span data-addclass="sidebar-bluegray" class="leftbar-switcher demo-bluegray"></span></li>
                
                
                <li><span data-addclass="sidebar-gray" class="leftbar-switcher demo-gray"></span></li> 
                
                <li><span data-addclass="sidebar-default" class="leftbar-switcher demo-default"></span></li>
                <li><span data-addclass="sidebar-bleachedcedar" class="leftbar-switcher demo-bleachedcedar"></span></li>
                <li><span data-addclass="sidebar-brown" class="leftbar-switcher demo-brown"></span></li>
            </ul>
        </div>



    </div>


<!-- /Switcher -->
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->
    
    
    
<script src="<?=base_url()?>assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script src="<?=base_url()?>assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script src="<?=base_url()?>assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

<script src="<?=base_url()?>assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script src="<?=base_url()?>assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script src="<?=base_url()?>assets/plugins/progress-skylo/skylo.js"></script> 		<!-- Skylo -->

<script src="<?=base_url()?>assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script src="<?=base_url()?>assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script src="<?=base_url()?>assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->

<script src="<?=base_url()?>assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script src="<?=base_url()?>assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script src="<?=base_url()?>assets/plugins/dropdown.js/jquery.dropdown.js"></script> <!-- Fancy Dropdowns -->
<script src="<?=base_url()?>assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
<script src="<?=base_url()?>assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->

<script src="<?=base_url()?>assets/js/application.js"></script>
<script src="<?=base_url()?>assets/demo/demo.js"></script>
<script src="<?=base_url()?>assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->

<script src="<?=base_url()?>assets/demo/demo-datatables.js"></script>
    
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.js"></script>                            <!-- Data Tables -->
<script src="<?=base_url()?>assets/plugins/datatables/TableTools.js"></script>                                   <!-- TableTools -->
<script src="<?=base_url()?>assets/plugins/jquery-editable/jquery.editable.js"></script>                         <!-- jQuery Editable -->
<script src="<?=base_url()?>assets/plugins/datatables/dataTables.editor.js"></script>                            <!-- Data Tables Editor-->
<script src="<?=base_url()?>assets/plugins/datatables/dataTables.editor.bootstrap.js"></script>                  <!-- Data Tables Editor for Bootstrap-->
<script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.js"></script>                         <!-- Bootstrap Support for Datatables -->

<script src="<?=base_url()?>assets/demo/demo-tableeditable.js"></script> 









    </body>
</html>