<?php

/*	
 *	Classe template
 *	Template
 *
 *	Sistema:	AMA
 *	Autor: 		Rogério Eduardo Pereira
 *	Data: 		22/08/2014
 */
class template
{
	/*
	 *	Variaveis
	 */


	/*
	 *	Método construtor
	 */
	public function __construct()
	{

	}


	/*
	 *	Método show
	 *	Exibe as informações da página
	 */
	public function show()
	{
	?>
		<!DOCTYPE HTML>
		<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
			<head>
				<title>		AMA - Ação de Movimento Animal 		</title>
			
				<!--Meta Tags-->
				<meta name="description" content=	"">
				<meta name="keywords" content=	"">
				<meta charset='UTF-8' />
				
				<!--FavIcon-->
				<link rel="shortcut icon" type="image/x-icon" href="app.view/img/favicon.ico"/>
				
				<!--Acentos-->
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				
				<!--Fontes-->
				<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
				<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
				
				<!--CSS-->
				<link rel="stylesheet" href="app.view/css/template.css">
				
				<!--JQuery-->
				<script src="app.view/js/jquery.js"></script>
				
				<!--JavaScript-->
			</head>
			<body>
				<div class='page'>
					
					<!--HEADER-->
					<header class='headerTopo'>
						<a href='./'>
							<img src='app.view/img/template/logo.png' title='Ama - Ação de Movimento Animal'>
						</a>
						<nav class='menuPrincipal'>
							<ul>
								<li>
									<a href=""> 
										Conheça a AMA
									</a>
								</li>
								<li>
									<a href=""> 
										Adote
									</a>
								</li>
								<li>
									<a href=""> 
										Ajude a AMA
									</a>
								</li>
								<li>
									<a href=""> 
										Seja um parceiro
									</a>
								</li>
							</ul>
						</nav>
						
						<div class='sliderGrande'>
							SLIDER GRANDE
						</div>
						
						<div class='sliderMenor'>
							<div id='adoteCachorro'>
								ADOTE CACHORRO
							</div>
							<div id='adoteGato'>
								ADOTE GATO
							</div>
							<div id='apoio'>
								APOIO
							</div>
						</div>
					</header>
					
					<!--SECTION-->
					<section class='content'>
						#CONTENT
					</section>
					
					<!--FOOTER-->
					<footer>
						<div class='navFooter'>
							<div id='animais'>
							</div>
							<div id='rodapeGrande'>
								<div id='menuInferior'>
									<h1>Menu</h1>
									<hr>
								</div>
								<div id='navegadores'>
									<h1>Navegadores</h1>
									<hr>
										<a href='http://www.google.com/intl/pt-BR/chrome/browser/' target='_blank'>
											<img src='app.view/img/template/chrome.png'	alt='Chrome' title="Chrome">
										</a>
										<a href='https://www.mozilla.org/pt-BR/firefox/new/' target='_blank'>
											<img src='app.view/img/template/firefox.png' alt='Firefox' title="Firefox">
										</a>
										<a href='http://windows.microsoft.com/pt-br/internet-explorer/download-ie' target='_blank'>
											<img src='app.view/img/template/internet-explorer.png' alt='Internet Explorer' title="Internet Explorer">
										</a>
										<a href='http://support.apple.com/kb/dl1531' target='_blank'>
											<img src='app.view/img/template/opera.png' alt='Opera' title="Opera">
										</a>
										<a href='www.opera.com/pt-br/download' target='_blank'>
											<img src='app.view/img/template/safari.png' alt='Safari' title="Safari">
										</a>
								</div>
								<div id='contato'>
									<h1>Contato</h1>
									<hr>
								</div>
								<div id='desenvolvedor'>
									<h1>Desenvolvedor</h1>
									<hr>
										<a href='https://www.facebook.com/rogerioeduardo.pereira'>
											Rogério Pereira
										</a>
								</div>
							</div>
						</div>
						<div class='rodape'>
							&copy; Copyright 2014 - <a href='./'>AMA</a>
						</div>
					</footer>
				</div>
			</body>
		</html>
	<?php
	}
}
?>