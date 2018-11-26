
		function qual_navegador(){
			if (get_browser().name == "Chrome"){
				window.location.href="fachada"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function fachada(){
			if (get_browser().name == "Chrome"){
				window.location.href="fachada"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function biblioteca(){
			if (get_browser().name == "Chrome"){
				window.location.href="biblioteca"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function inicial(){
			if (get_browser().name == "Chrome"){
				window.location.href="pagina_principal"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function entrada(){
			if (get_browser().name == "Chrome"){
				window.location.href="entrada"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function hall_entrada(){
			if (get_browser().name == "Chrome"){
				window.location.href="hall_entrada";

			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function auditorio(){
			if (get_browser().name == "Chrome"){
				window.location.href="auditorio"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function refeitorio(){
			if (get_browser().name == "Chrome"){
				window.location.href="refeitorio"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function blocoA(){
			if (get_browser().name == "Chrome"){
				window.location.href="blocoA"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function blocoB(){
			if (get_browser().name == "Chrome"){
				window.location.href="blocoB"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function estacionamento(){
			if (get_browser().name == "Chrome"){
				window.location.href="estacionamento"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function campo(){
			if (get_browser().name == "Chrome"){
				window.location.href="campo"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
		function voltar(){
			if (get_browser().name == "Chrome"){
				window.location.href="principal"; 
			}else if(get_browser().name == "Firefox"){
				window.location.href="principal/pagina_firefox";
			}else{
				alert("Navegador não suportado!");
			}
		}
	
	function get_browser(){
		var ua=navigator.userAgent,tem,M=ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || []; 
		if(/trident/i.test(M[1])){
			tem=/\brv[ :]+(\d+)/g.exec(ua) || []; 
			return {name:'IE',version:(tem[1]||'')};
			}   
		if(M[1]==='Chrome'){
			tem=ua.match(/\bOPR\/(\d+)/)
			if(tem!=null)   {return {name:'Opera', version:tem[1]};}
			}   
		M=M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
		if((tem=ua.match(/version\/(\d+)/i))!=null) {M.splice(1,1,tem[1]);}
		return {
		  name: M[0],
		  version: M[1]
		};
	 }

	 $(document).ready(
	      function(){
	        $("#pin_a").mouseover(function(){
	          $(".informacao_a").css("display", "block");

	        });
	        $("#pin_a").mouseout(function(){
	          $(".informacao_a").css("display", "none");

	        });

	        $("#pin_b").mouseover(function(){
	          $(".informacao_b").css("display", "block");

	        });
	        $("#pin_b").mouseout(function(){
	          $(".informacao_b").css("display", "none");

	        });

	        $("#pin_c").mouseover(function(){
	          $(".informacao_c").css("display", "block");

	        });
	        $("#pin_c").mouseout(function(){
	          $(".informacao_c").css("display", "none");

	        });

	        $("#pin_d").mouseover(function(){
	          $(".informacao_d").css("display", "block");

	        });
	        $("#pin_d").mouseout(function(){
	          $(".informacao_d").css("display", "none");

	        });

	        $("#pin_e").mouseover(function(){
	          $(".informacao_e").css("display", "block");

	        });
	        $("#pin_e").mouseout(function(){
	          $(".informacao_e").css("display", "none");

	        });

	        $("#pin_f").mouseover(function(){
	          $(".informacao_f").css("display", "block");

	        });
	        $("#pin_f").mouseout(function(){
	          $(".informacao_f").css("display", "none");

	        });
	      }
	    );
	 
		function AbrirMapa() {
			var mapa = document.getElementById("idmapa");
			mapa.style.display = "flex";
			
			var idconteudoinformation = document.getElementById("information_id");
			idconteudoinformation.style.display = "none";

			var iconeLocal = document.getElementById("iconeLocal");
			iconeLocal.style.display = "block";

			var icone = document.getElementById("icone");
			icone.style.display = "none";

			var idmapapequeno = document.getElementById("idmapapequeno");
			idmapapequeno.style.display = "none"; 
		}

		function FecharMapa() {
			var mapa = document.getElementById("idmapa");
			mapa.style.display = "none";
			
			var idconteudoinformation = document.getElementById("information_id");
			idconteudoinformation.style.display = "block";
			
			var iconeLocal = document.getElementById("iconeLocal");
			iconeLocal.style.display = "none";

			var icone = document.getElementById("icone");
			icone.style.display = "block";

			var idmapapequeno = document.getElementById("idmapapequeno");
			idmapapequeno.style.display = "block";
		}
		$(document).ready(function() {
			$("#information_id").hover(function() {
				var izinho = document.getElementById("idizinho");
				zinho.style.margin = "8px";
				var conteudoinformation = document.getElementById("idconteudoinformation");
				conteudoinformation.style.display = "block";
			}, function() {
				conteudoinformation.style.display = "none";
			});
		});