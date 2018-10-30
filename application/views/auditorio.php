<!DOCTYPE html>
	<head>
		<title>Tour Virtual2 CHROME</title>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?=base_url()?>/assets/css/style1.css" rel="stylesheet">
		<link href="<?=base_url()?>/assets/css/css2.mapa.css" rel="stylesheet">
  		<meta http-equiv="X-UA-Compatible" content="ie=edge">
  		<script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
  		<script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/pagina_Chrome.js"></script>
  		<script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
  		<script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/pagina_Chrome.js"></script>
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  	<link rel="stylesheet" href="<?php echo base_url();?>assets/AdminLTE-2.4.0/bower_components/bootstrap/dist/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url();?>assets/AdminLTE-2.4.0/bower_components/font-awesome/css/font-awesome.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url();?>assets/AdminLTE-2.4.0/bower_components/Ionicons/css/ionicons.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url();?>assets/AdminLTE-2.4.0/dist/css/AdminLTE.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url();?>assets/AdminLTE-2.4.0/dist/css/skins/skin-blue.min.css">
	  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	  	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
  		  		
  		
  		<script type="text/javascript">
			vr url="img/auditorio.jpg" view=360;
		</script>
		<script>
			window.addEventListener('load', onVrViewLoad)
			function onVrViewLoad() {
				var vrView = new VRView.Player('#vrview', {
					image: 'https://i.imgur.com/hYXGeng.jpg',
					is_stereo: false,
					width: '100%',
					height: '900px'
				});
			}

		</script>
	</head>
  	<body id="home-active">
		<div class="wrapper" style="height: auto; min-height: 100%">
    		<div id="vrview">

		    	<section  style="position:absolute !important;" class="content">
		        	<div class="row">
		          		<div  class="col-md-3">
		            		<div style="width: 250px" class="box box-success box-solid ">
		              			<div class="box-header with-border">
		              				<h3 class="box-title">Tour Virtual</h3>
<!-- 		                			<h3 class="box-title">Tuor Virtual</h3>
 -->
		                			<div class="box-tools pull-right">
					                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><img style="width: 1.28571429em;" src="<?=base_url()?>assets/imgs/expand-button.png">
					                  </button>
		                			</div>
		                <!-- /.box-tools -->
		              			</div>
		            
		              			<div class="box-footer no-padding" >
		              				<ul class="nav nav-stacked">
		              					<li ><a href="#" onclick="fachada()">Fachada</a></li>
						                <li ><a href="#" onclick="entrada()">Entrada</a></li>
						                <li ><a href="#" onclick="hall_entrada()">Hall de Entrada </a></li>
						                <li ><a href="#" onclick="auditorio()">Auditorio</a></li>
						                <li ><a href="#" onclick="refeitorio()">Refeitorio</a></li>
						                <li ><a href="#" onclick="blocoA()">Area de convivencia do bloco A</a></li>
						                <li ><a href="#" onclick="blocoB()">Area de convivencia do bloco B</a></li>
						                <li ><a href="#" onclick="estacionamento()">Estacionamento</a></li>
						                <li ><a href="#" onclick="campo()">Campo</a></li>
<!-- 						                <li style="float: right; margin-right: 80px;"><a href="#" onclick="voltar()"><img style="width: 1.28571429em;" src="<?=base_url()?>assets/imgs/seta_voltar.png"> Voltar</a></li>
 -->		              				</ul>
		            			</div>
		            		</div>
		         		</div>
		        	</div> 
		        	<div onclick="voltar()" class="box-header with-border" style="background-color: #fff; border-radius: 3px; border: 1px solid #00a65a; margin-top:-15px">
		              	<a href="#" style="float: right; margin-right: 90px; color: black"><img style="width: 1.15571429em;" src="<?=base_url()?>assets/imgs/seta_voltar.png"> Voltar</a>
					</div>
		      	</section>
		  	</div>
		</div>
		<div class="caixas">
			<div class="group">
            	<div class="mapa c_c" id="idmapapequeno" onclick="AbrirMapa()"></div>
            	<div class="information b_b" id="information_id"><img src="<?=base_url()?>assets/imgs/izinho.png" id="idizinho">
	                	<p class="texto">Este é o auditório do campus onde ocorrem palestras aulas e apresentações </P>
            	</div>
        	</div>

        	<div>
        		<div >
			      <a href="blocoB"><img class="icon a" id="iconeLocal" style="display: none;left: 58%;top: 69%;" src="<?=base_url()?>assets/imgs/m-m.svg" id="pin_a"></a>
			      <div class="informacao_a"><p>Área de convivência bloco B</p></div>
		    	</div>
        		<div class="mapagrande" id="idmapa"><button onclick="FecharMapa()"><b>X</b></button></div>
        	</div>
			
		</div>


 
		<script src="<?php echo base_url();?>assets/AdminLTE-2.4.0/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/AdminLTE-2.4.0/bower_components/jquery-ui/jquery-ui.min.js"></script>
		<script src="<?php echo base_url();?>assets/AdminLTE-2.4.0/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/AdminLTE-2.4.0/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
		<script src="<?php echo base_url();?>assets/AdminLTE-2.4.0/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>assets/AdminLTE-2.4.0/dist/js/adminlte.min.js"></script>
		<script src="<?php echo base_url();?>assets/AdminLTE-2.4.0/dist/js/pages/dashboard.js"></script>
		<script src="<?php echo base_url();?>assets/AdminLTE-2.4.0/dist/js/demo.js"></script>

	</body>
	
</html>
