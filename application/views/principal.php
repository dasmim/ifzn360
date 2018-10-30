<html>
<head>
	<title>IFZN360°</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="<?=base_url()?>/assets/css/style.css" rel="stylesheet">
					<link href="<?=base_url()?>/assets/css/css2.mapa.css" rel="stylesheet">

	<link href="<?=base_url()?>/assets/css/css_mapa.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/pagina_Chrome.js"></script>
	<meta charset="UTF-8">
</head>
<body>
	<div id ="sobreposicao" style="background-color: #080808;"></div>

		<div id="a" >
			<div id="menu">
			    <a href="#b">Mapa</a>
			    <a href="#d">Eventos</a>
			    <a href="#f">Sobre</a>

			</div>
			
			<div class="meiooucenter">
				<img src="<?=base_url()?>assets/imgs/lgbranca.png" id="logo">    
				<!-- <h1>O SISTEMA QUE TE ORIENTA </h1>    -->
				<div id="meubotao">
					<a class="btn btn-6 btn-6i " onclick="qual_navegador()">Conheça você mesmo</a>

				</div> 
			    
		    </div>

			<a href="#b">		
				<img src="http://www.free-icons-download.net/images/angle-brackets-marks-down-icon-70927.png" id="seta">
			</a>
		</div>
		<div>
			
			<div>
		      <a href="blocoB"><img class="icon a" src="<?=base_url()?>assets/imgs/m-m.svg" id="pin_a"></a>
		      <div class="informacao_a"><p>Área de convivência bloco <b>B</b></p></div>
	    	</div>

	    	<div>
		      <a href="hall_entrada"><img class="icon b" src="<?=base_url()?>assets/imgs/m-m.svg" id="pin_b"></a>
		      <div class="informacao_b"><p>Entrada</p></div>
	    	</div>

	    	<div>
		      <a href="principal"><img class="icon c" src="<?=base_url()?>assets/imgs/m-m.svg" id="pin_c"></a>
		      <div class="informacao_c"><p>Quadra</p></div>
	    	</div>

	    	<div>
		      <a href="blocoA"><img class="icon d" src="<?=base_url()?>assets/imgs/m-m.svg" id="pin_d"></a>
		      <div class="informacao_d"><p>Área de convivência bloco <b>A</b></p></div>
	    	</div>

	    	<div>
		      <a href="principal"><img class="icon e" src="<?=base_url()?>assets/imgs/m-m.svg" id="pin_e"></a>
		      <div class="informacao_e"><p>Salas bloco <b>b</b></p></div>
	    	</div>

	    	<div>
		      <a href="principal"><img class="icon f" src="<?=base_url()?>assets/imgs/m-m.svg" id="pin_f"></a>
		      <div class="informacao_f"><p>Laboratórios</p></div>
	    	</div>

	    <!-- 	<div>
		      <a href="principal"><img class="icon g" src="<?=base_url()?>assets/imgs/m-m.svg" id="pin_6"></a>
		      <div class="informacao_f"><p>Piscina</p></div>
	    	</div> -->

	    	<p>Se localize no nosso mapa. <br>Você pode clicar nos ícones para conhecer locais e ir para o seu tour virtual. Faça sua escolha!</p>

			<div id="b" style="height: 106%;"><img src="<?=base_url()?>assets/imgs/mapanewnew.png" id="mapa"></div>
		</div>
	
	
	<div id="c"></div>
	<div id="d">
	    <div class="bloc1"><img src="http://portal.ifrn.edu.br/campus/natalzonanorte/noticias/sorteio-do-tema-e-apresentacao-financeira-da-semadec-2018/image_preview"><h2>SEMADEC</h2><p>Semana de Esporte, Musica Artes, Danca do IFRN- Zona Norte</p><p><a href="http://eventos.ifrn.edu.br/semadeczn/">Saiba mais</a></p></div>

	    <div class="bloc1"><img class=" MOCITEC" src="http://eventos.ifrn.edu.br/mociteczn/wp-content/uploads/2017/08/2017-color.png"><br><h2>MOCITEC</h2><p>Mostra de Ciência e tecnologia do campus Natal Zona Norte</p><p><a href="https://pt-br.facebook.com/mociteczn/">Saiba mais</a></p></div>

	    <div class="bloc1"><img src="http://portal.ifrn.edu.br/campus/natalzonanorte/noticias/comissao-divulga-programacao-da-semana-do-meio-ambiente-2018/image_preview"><h2>SEMENTE</h2><p>Semana de meio ambiente do campus Natal Zona Norte </p><p><a href="https://www.facebook.com/SementeIFZN">Saiba mais</a></p></div> 
</div>
  
	<div id="e"></div>
	<div id="f">

	<h1>Quem <span>Somos</span></h1>
	<p style="margin-top: 44px" id="somos">Desenvolvido por 5 alunos do 4° do curso de informática para internet. O IFZN360° é um um sistema de imagens em 360° do IFRN Campus Natal Zona-Norte que tem como principal objetivo proporcionar um tour virtual dos locais mais visitados do campus. </p>
	
</div>
	<div id="g"></div>
	<script>
	
	// 	function qual_navegador(){
	// 		if (get_browser().name == "Chrome"){
	// 			window.location.href="principal/pagina_Chrome"; 
	// 		}else if(get_browser().name == "Firefox"){
	// 			window.location.href="principal/pagina_firefox";
	// 		}else{
	// 			alert("Navegador não suportado!");
	// 		}
	// 	}
	
	// function get_browser(){
	// 	var ua=navigator.userAgent,tem,M=ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || []; 
	// 	if(/trident/i.test(M[1])){
	// 		tem=/\brv[ :]+(\d+)/g.exec(ua) || []; 
	// 		return {name:'IE',version:(tem[1]||'')};
	// 		}   
	// 	if(M[1]==='Chrome'){
	// 		tem=ua.match(/\bOPR\/(\d+)/)
	// 		if(tem!=null)   {return {name:'Opera', version:tem[1]};}
	// 		}   
	// 	M=M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
	// 	if((tem=ua.match(/version\/(\d+)/i))!=null) {M.splice(1,1,tem[1]);}
	// 	return {
	// 	  name: M[0],
	// 	  version: M[1]
	// 	};
	//  }

	//  $(document).ready(
	//       function(){
	//         $("#pin_a").mouseover(function(){
	//           $(".informacao_a").css("display", "block");

	//         });
	//         $("#pin_a").mouseout(function(){
	//           $(".informacao_a").css("display", "none");

	//         });

	//         $("#pin_b").mouseover(function(){
	//           $(".informacao_b").css("display", "block");

	//         });
	//         $("#pin_b").mouseout(function(){
	//           $(".informacao_b").css("display", "none");

	//         });

	//         $("#pin_c").mouseover(function(){
	//           $(".informacao_c").css("display", "block");

	//         });
	//         $("#pin_c").mouseout(function(){
	//           $(".informacao_c").css("display", "none");

	//         });
	//       }
	//     );
	</script>	

	


</body>
</html>






