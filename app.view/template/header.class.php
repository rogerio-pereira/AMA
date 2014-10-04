<?php

/*
 * 	Classe  header
 * 	HEADER DO TEMPLATE
 * 	
 * 	Sistema:	AMA
 * 	Autor:		Rogério Eduardo Pereira
 * 	Data:		Oct 3, 2014
 */

/*
 * Classe header
 */
class header
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
		<a href='./'>
			<img src='app.view/img/template/logo.png' title='Ama - Ação de Movimento Animal'>
		</a>
		<nav class='menuPrincipal'>
			<?php
				require 'app.view/template/menu.class.php';
			?>
		</nav>

		<!--1000 X 300 px-->
		<div class='sliderGrande'>
			<img src="app.view/img/slide/1.jpg">
			<img src="app.view/img/slide/2.jpg">
			<img src="app.view/img/slide/3.jpg">
			<img src="app.view/img/slide/4.jpg">
		</div>

		<!--300 x 200 px-->
		<div class='sliderMenor'>
			<div id='adoteCachorro'>
				<img src="app.view/img/cachorros/1.jpg">
				<img src="app.view/img/cachorros/2.jpg">
				<img src="app.view/img/cachorros/3.jpg">
				<img src="app.view/img/cachorros/4.jpg">
			</div>
			<div id='adoteGato'>
				<img src="app.view/img/gatos/1.jpg">
				<img src="app.view/img/gatos/2.jpg">
				<img src="app.view/img/gatos/3.jpg">
				<img src="app.view/img/gatos/4.jpg">
			</div>
			<div id='apoio'>
				<img src="app.view/img/apoio/1.jpg">
				<img src="app.view/img/apoio/2.jpg">
				<img src="app.view/img/apoio/3.jpg">
				<img src="app.view/img/apoio/4.jpg">
			</div>
		</div>
	<?php
	}
}

new header();
?>