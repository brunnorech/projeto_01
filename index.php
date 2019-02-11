
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 04</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="estilo/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="keywords" content="palavras-chaves,separadas,por,virtgula">
	<meta name="description" content="Descrição do meu website">
	<meta charset="author" content="Bruno"/>
	<meta charset="utf-8"/>
	
</head>
<body>


<header>
<div class="container">
<div class="logo"></div><!--logo-->
	<nav class="desktop-menu">
		<ul>
			<li><a href="">home</a></li>
			<li><a href="#servicos">serviços</a></li>
			<li><a href="#sobre">sobre</a></li>
			<li><a href="#contato">contato</a></li>
		</ul>
		
	</nav>
	<nav class="mobile-menu">
		<div class="botao-menu"></div>
		<ul>
			<li><a href="">home</a></li>
			<li><a href="#servicos">serviços</a></li>
			<li><a href="#sobre">sobre</a></li>
			<li><a href="#contato">contato</a></li>
		</ul>
		
	</nav>
	<div class="clear"></div>
	<div class="chamada1">
			<h2>Sistemas Próprios<br/>para Empresas Autênticas</h2>
			<p>Lorem ipsum dolor sit amet, consectetur
			 adipiscing elit. Phasellus vitae commodo 
			 neque. Nam in purus luctus, blandit felis nec.</p>
	</div><!--chamada1-->
</div>
</header>
<section id="servicos" class="chamada2">
	<div class="wrap">
		<h2>Desenvolvemos sistemas únicos</h2>
		<p>Para todas as plataformas e diversos segmentos:</p>
		<ul>
			<li> Lojas virtuais</li>
			<li> Sites institucionais</li>
			<li> Sistemas corporativos</li>
			<li>Muitos outros</li>
		</ul>
		<form>
			<input type="submit" name="acao" value="Entre em contato" />
		</form>
	</div><!--wrap-->

<div class="device">
	
</div>
<div class="clear"></div>
</section><!--chamada-2-->
<section class="sessao2">
	<div class="container">
		<h2> Desenvolvido por pessoas e para pessoas</h2>

		<p>Lorem ipsum lorem lorem ipsum lorem ipsum
		Lorem ipsum lorem lorem ipsum lorem ipsumasdf
		Lorem ipsum lorem lorem ipsum lorem ipsum
		Lorem ipsum lorem lorem ipsum lorem ipsumasdf
		Lorem ipsum lorem lorem ipsum lorem ipsum
		Lorem ipsum lorem lorem ipsum lorem ipsum
		Lorem ipsum lorem lorem ipsum lorem ipsum
		Lorem ipsum lorem lorem ipsum lorem ipsum
		Lorem ipsum lorem lorem ipsum lorem ipsumasdf
		Lorem ipsum lorem lorem ipsum lorem ipsum
	
		</p>
		<img src="imagens/mockup.jpg"/>
	</div>

</section>
<section  id="sobre" class="sessao3">
<div class="parte1">
<div class="wraper-parte1">
<h2> Nosso time </h2>
<p>Lorem ipsum lorem lorem ipsum lorem ipsum
		Lorem ipsum lorem lorem ipsum lorem ipsumasdf
		Lorem ipsum lorem lorem ipsum lorem ipsum
		Lorem ipsum lorem lorem ipsum lorem ipsumasdf</p>
</div><!--wraper-parte1-->
</div><!--parte1-->

<div class="parte2">
	<div class="scrollEquipe">
		<div class="scroll-wrapper">
			<div class="sobre-autor">
				<div class="titulo-autor">
					<h2>Bruno Rech</h2>
					<div class="img-autor"></div><!--img-autor-->
				</div><!--titulo-autor-->
				<span>Desenvolvedor e CEO</span><br><br>
				<p>Formado em Análise e Desenvolvimento de Sistemas, estudos focados em desenvolvimento de sistemas web, mas também amante do desenvolvimento
					desktop.
					</p>
			</div><!--sobre-autor-->
			<div class="sobre-autor">
				<div class="titulo-autor">
					<h2>Bruno Rech</h2>
					<div class="img-autor"></div><!--img-autor-->
				</div><!--titulo-autor-->
				<span>Desenvolvedor e CEO</span><br><br>
				<p>Formado em Análise e Desenvolvimento de Sistemas, estudos focados em desenvolvimento de sistemas web, mas também amante do desenvolvimento
					desktop.
					</p>
			</div><!--sobre-autor-->
			<div class="sobre-autor">
				<div class="titulo-autor">
					<h2>Bruno Rech</h2>
					<div class="img-autor"></div><!--img-autor-->
				</div><!--titulo-autor-->
					<span>Desenvolvedor e CEO</span><br><br>
					<p>Formado em Análise e Desenvolvimento de Sistemas, estudos focados em desenvolvimento de sistemas web, mas também amante do desenvolvimento
						desktop.
					</p>
			</div><!--sobre-autor-->

		</div><!--scrollwapper-->
	</div><!--scrollEquipe-->
		<div class="slider-bullets">
			
			
		</div><!--slider-bullets-->

</div><!--parte2-->
<div class="clear"></div>
</section>
<section id="contato" class="sessao4">
	<div class="container">
		<div class="form">
			<h2>Entre em contato</h2>
			<p>Proin sagittis, risus ut tempus
			condimentum, urna est volupat augue,a placerat ligula magna
			tincidunt sapien. </p>
			 <form>
				 <input type="text" name="nome" placeholder="Nome"/>
				 <input type="e-mail" name="email" placeholder="E-mail"/>
				 <textarea name="mensagem" placeholder="Mensagem"></textarea><br>
				 <input type="submit" value="Enviar"/>
			 </form>
		</div><!--form-->
		<div class="map-wraper">
			<h2>Venha nos visitar</h2>
			<div class="wraper3">
				<!-- 
				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCP0aq8U6zwtmSRfX5eZSYD_Yq9GARVI1E'></script>
				<div class="wraper2" id='gmap_canvas'>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
				
				  <script type='text/javascript'>
				  function init_map(){
					  var myOptions = {zoom:12,center:new google.maps.LatLng(-23.54874,-46.93472269999995),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-23.54874,-46.93472269999995)});infowindow = new google.maps.InfoWindow({content:'<strong style="color:black;">Rech Sistemas</strong><br><p style="color:black;">Kurt Boetccher<br>06653085 Itapevi</p><br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
					
				-->
				<div class="wraper2" id="mapa"></div>
			</div><!--wraper3-->
		</div><!--div-wraper-->
		<div class="clear"></div>
	</div><!--container-->
</section><!--sessao4-->
<footer>
	<div class="container">
		<p>Todos os direitos reservados</p>
		<p>contato:brunno.rech@outlook.com</p>
		<div class="clear"></div>
	</div><!--cpntainer-->
	
</footer>
<script src="js/jquery.js"></script>
<script src="js/sliderEquipe.js"></script>
<script src="js/menuScroll.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCP0aq8U6zwtmSRfX5eZSYD_Yq9GARVI1E"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>
</html>