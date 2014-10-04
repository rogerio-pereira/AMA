<?php

/*
 * 	Classe  footer
 * 	#RESUMO DA CLASSE#
 * 	
 * 	Sistema:	AMA
 * 	Autor:		Rogério Eduardo Pereira
 * 	Data:		Oct 3, 2014
 */

/*
 * Classe footer
 */
class footer
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
		<div class='navFooter'>
			<div id='animais'>
			</div>
			<div id='rodapeGrande'>
				<div id='menuInferior'>
					<h1>Menu</h1>
					<hr>
					<nav class='menuInferior'>
						<?php
							new menu();
						?>
					</nav>
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
					<a href='mailto:amanimal.mg@gmail.com'>
						E-mail
					</a>
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
	<?php
	}
}

new footer();
?>