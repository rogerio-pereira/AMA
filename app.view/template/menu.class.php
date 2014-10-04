<?php

/*
 * 	Classe  menu
 * 	Menu do template
 * 	
 * 	Sistema:	AMA
 * 	Autor:		Rogério Eduardo Pereira
 * 	Data:		Oct 3, 2014
 */

/*
 * Classe menu
 */
class menu
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
		<ul>
			<li>
				<a href="?class=conheca"> 
					Conheça a AMA
				</a>
			</li>
			<li>
				<a href=""> 
					Adote
				</a>
				<ul>
					<li>
						<a href="?class=adoteCachorrinhos"> 
							Cachorrinhos
						</a>
					</li>
					<li>
						<a href="?class=adoteGatinhos"> 
							Gatinhos
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href=""> 
					Ajude a AMA
				</a>
				<ul>
					<li>
						<a href="?class=doacoes"> 
							Doações
						</a>
					</li>
					<li>
						<a href="?class=comida"> 
							Comida
						</a>
					</li>
					<li>
						<a href="?class=larTemporario"> 
							Lar Temporário
						</a>
					</li>
					<li>
						<a href="?class=denuncia"> 
							Denúncia
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="?class=parceiro"> 
					Seja um parceiro
				</a>
			</li>
		</ul>
	<?php
	}
}

new menu();
?>