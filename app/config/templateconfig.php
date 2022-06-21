<?php

return [

	'template' => [
		'wrapper_start' => TEMPLATE_PATH . 'wrapperstart.php',		
		'header'        => TEMPLATE_PATH . 'header.php',
		'nav'           => TEMPLATE_PATH . 'nav.php',		
		':view'         => ':action_view',
		'wrapper_end'   => TEMPLATE_PATH . 'wrapperend.php'

	],
	'header_resources' => [
		'css' => [
			'bootstrap'           =>  CSS . 'bootstrap.css',
			'animate'             =>  CSS . 'animate.css',
			'font-awesome'        =>  CSS . 'font-awesome.css',
			'mainar'              =>  CSS . 'mainar.css'
		]
	],
		'footer_resources' => [
			'jquery'       => JS . 'jquery-3.2.1.min.js',
			'bootstrap'    => JS . 'bootstrap.min.js',
			'plugin'       => JS . 'plugin.js',
			'font-awesome' => JS . 'fontawesome-all.min.js',
			'typed'        => JS . 'typed.min.js',
			'particleground'   => JS . 'jquery.particleground.min.js',
			'mixitup'          => JS . 'jquery.mixitup.min.js',
			'nicescroll'       => JS . 'jquery.nicescroll.min.js',
			'wow'              => JS . 'wow.min.js',
			'smooth'           => JS . 'jquery.smooth-scroll.js'
		]
	

];