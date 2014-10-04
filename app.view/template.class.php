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
				<?php
					require 'app.view/template/head.class.php';
				?>
			</head>
			<body>
				<div class='page'>
					
					<!--HEADER-->
					<header class='headerTopo'>
						<?php
							require 'app.view/template/header.class.php';
						?>
					</header>
					
					<!--SECTION-->
					<section class='content'>
						#CONTENT
					</section>
					
					<!--FOOTER-->
					<footer>
						<?php
							require 'app.view/template/footer.class.php';
						?>
					</footer>
				</div>
				
				<script>
					iniciaSlideGrande();
					iniciaSlideCachorros();
					iniciaSlideGatos();
					iniciaSlideApoio();
				</script>
			</body>
		</html>
	<?php
	}
}
?>