/*
 * 	JavaScript template
 * 	JavaScript da classe template.class.php
 * 	
 * 	Sistema:	AMA
 * 	Autor:		Rogério Eduardo Pereira
 * 	Data:		Oct 4, 2014
 */
function iniciaSlideGrande()
{
	$('.sliderGrande').cycle
	({ 
		fx:      'fade', 
		speed:    1500, 
		timeout:  7000 
	});
}

function iniciaSlideCachorros()
{
	$('#adoteCachorro').cycle
	({ 
		fx:      'fade', 
		speed:    1000, 
		timeout:  5000 
	});
}

function iniciaSlideGatos()
{
	$('#adoteGato').cycle
	({ 
		fx:      'fade', 
		speed:    1000, 
		timeout:  5000 
	});
}

function iniciaSlideApoio()
{
	$('#apoio').cycle
	({ 
		fx:      'fade', 
		speed:    1000, 
		timeout:  5000 
	});
}