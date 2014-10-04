<?php

/*
 * 	Classe  head
 * 	Head do template
 * 	
 * 	Sistema:	AMA
 * 	Autor:		Rogério Eduardo Pereira
 * 	Data:		Oct 3, 2014
 */

/*
 * Classe head
 */
class head
{
	/*
	 * Variaveis
	 */

	/*
	 * Método construtor
	 */
	public function __construct()
	{
		$this->show();
	}
	
	/*
	 * Método show
	 * Exibe as informações na tela
	 */
	public function show()
	{
	?>
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
		<link href='http://fonts.googleapis.com/css?family=Open+Sans'				rel='stylesheet' type='text/css'>

		<!--CSS-->
		<link rel="stylesheet" href="app.view/css/template.css">

		<!--JQuery-->
		<script src="app.view/js/jquery.js"></script>
		<script src="app.view/js/jquery.cycle.all.js"></script>

		<!--JavaScript-->
		<script src="app.view/js/template.js"></script>
	<?php
	}
}

new head();
?>