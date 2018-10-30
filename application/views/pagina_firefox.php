<!-- <!DOCTYPE html>
	<head>
		<title>Tour Virtual 360º MOZILLA</title>
        <meta charset="UTF-8">
		<link href="_style/default.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="_scripts/jquery-1.2.6.pack.js"></script>
		<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
		<script type="text/javascript" src="_scripts/script.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
  	<body>
        <p>oiiiii</p>
  	</body>
 -->



<!DOCTYPE html>
	<head>
		<title>Tour Virtual 360º MOZILLA</title>
        <meta charset="UTF-8">
		<link href="_style/default.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="_scripts/jquery-1.2.6.pack.js"></script>
		<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
		<script type="text/javascript" src="_scripts/script.js"></script>
		<link rel="stylesheet" type="text/css" href="style1.css">
	</head>
  	<body>
        <label id="icone" for="check">
            <input type="search" >
        </label>

  		<a-scene>
			<a-assets>
				<img id="sky" src="img/areaconvivenciaB.jpg">
			</a-assets>
  			<a-sky src="#sky"></a-sky>
		</a-scene>

		<div class="caixas">
			<div class="group">
            	<div class="mapa c" id="idmapapequeno" onclick="AbrirMapa()"></div>
            	<div class="information b" id="information_id"><img src="img/izinho.png" id="idizinho">
	                <div class="conteudoinformation" id="idconteudoinformation">
	                    <div class="i_titulo">Título</div>
	                    <div class="i_texto">Informações</div>
	                </div>
            	</div>
        	</div>
   	    	<div class="mapagrande" id="idmapa">
        		<button onclick="FecharMapa()">X</button>
    		</div>
		</div>
  	</body>
</html>