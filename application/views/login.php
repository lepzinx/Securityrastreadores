<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title>Security Rastreadores - Entrar</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="KaijuThemes">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet"> 
    <link href="<?=base_url();?>assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->

    <link href="<?=base_url();?>assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/styles.css" type="text/css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link href="assets/css/ie8.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->
    
    </head>

    <body class="focused-form animated-content">
        
        
<div class="container" id="login-form">
	<a href="<?= base_url(); ?>" class="login-logo"><img src="<?= base_url(); ?>assets/img/logo-dark.png"></a>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>Entrar</h2>
					</div>
					<div class="panel-body">
                                               
      <?php  $erro = md5('1');
      if ($indice == $erro) {
            $data['msg'] = "Erro ao fazer login! Verifique as informações digitadas!";
            $this->load->view('includes/falha', $data);
        } ?>
						
						<form action="<?= base_url();?>index.php/usuarios/entrar" method="post" class="form-horizontal" id="validate-form">
							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group">							
										<span class="input-group-addon">
											<i class="ti ti-user"></i>
										</span>
										<input type="text" name="login" class="form-control" placeholder="Nome de usuário" data-parsley-minlength="6" placeholder="At least 6 characters" required>
									</div>
		                        </div>
							</div>

							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group">
										<span class="input-group-addon">
											<i class="ti ti-key"></i>
										</span>
										<input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
									</div>
		                        </div>
							</div>

							<div class="form-group mb-n">
								<div class="col-xs-12">
									<a href="extras-forgotpassword.html" class="pull-left">Esqueceu a senha?</a>
									<div class="checkbox-inline icheck pull-right p-n">
										<div class="checkbox">
											
										</div>
									</div>
								</div>
							</div>
                                                    <div class="panel-footer">
						<div class="clearfix">
				
							<input type="submit" class="btn btn-primary btn-raised pull-right" value="Login">
						</div>
					</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
</div>

    
    
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script src="<?=base_url();?>assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script src="<?=base_url();?>assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script src="<?=base_url();?>assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

<script src="<?=base_url();?>assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script src="<?=base_url();?>assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script src="<?=base_url();?>assets/plugins/progress-skylo/skylo.js"></script> 		<!-- Skylo -->

<script src="<?=base_url();?>assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script src="<?=base_url();?>assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script src="<?=base_url();?>assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->

<script src="<?=base_url();?>assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script src="<?=base_url();?>assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script src="<?=base_url();?>assets/plugins/dropdown.js/jquery.dropdown.js"></script> <!-- Fancy Dropdowns -->
<script src="<?=base_url();?>assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
<script src="<?=base_url();?>assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->

<script src="<?=base_url();?>assets/js/application.js"></script>
<script src="<?=base_url();?>assets/demo/demo.js"></script>
<script src="<?=base_url();?>assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    <!-- Load page level scripts-->
    

    <!-- End loading page level scripts-->
    </body>
</html>