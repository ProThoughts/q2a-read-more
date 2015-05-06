<?php

/*
	Plugin Name: Read More
	Plugin URI: https://github.com/HelioChun/q2a-readmore
	Plugin Update Check URI: https://github.com/HelioChun/q2a-readmore/qa-plugin.php
	Plugin Description: Collapses and adds "read more" button for long questions and answers
	Plugin Version: 1.0
	Plugin Date: 2015-05-06
	Plugin Author: Hélio Chun
	Plugin Author URI: 
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_layer(
	'qa-read-more-layer.php',
	'Readmore Layer'
);