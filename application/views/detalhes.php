                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li class=""><a href="<?= base_url()?>">Home</a></li>
<li class="active"><a href="">Detalhes</a></li>

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
         </div>
  

    
<?php if($this->session->userdata['usuario_tipo'] == "C") { ?>
    
       <div class="page-heading">            
           <h1>Detalhes</h1><small><?=$equip_id?></small>
 
                           </div>
      <div class="row">
<div data-widget-group="group1">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Equipamentos</h2>
                                        <div class="panel-ctrls">
                                                     <div class="row">
                                                
                                            <form class="inline">
                                            <input class="btn" type="submit" value="Excel">
                                        </form>
                                        <form class="inline">
                                            <input class="btn" type="submit" value="PDF">
                                            
                                        </form>
                                            <form class="inline">
                                               
                                              <input class="form-inline form-control" type="text" placeholder="Procurar">
                                            </form>
                                                </div>
                                        </div>
				</div>
				<div class="panel-body no-padding">
					<table id="tableData" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Data/Hora</th>
								<th>Temperatura ºC</th>
								<th>Umidade %</th>
                                                                <th>Entrada</th>
                                                                <th>Saída</th>
                                                                <th>Localização</th>

							</tr>
						</thead>
						<tbody>
                                                   <?php
                                                             foreach($equipamento as $ultimo){  
                                                        ?>
                                                    <tr>
                                                             <td><?=$ultimo->data_hora;?></td>
                                                             <td><?=$ultimo->temp_dados;?>ºC</td>
                                                             <td><?=$ultimo->umid_dados;?>%</td>
                                                    </tr>
                                                     <?php }?>
                                                     
						</tbody>
					</table>
				</div>
				<div class="panel-footer"></div>
			</div>
		</div>
	</div>
</div>
<?php }?>

    </div>