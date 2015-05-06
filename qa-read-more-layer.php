<?php

class qa_html_theme_layer extends qa_html_theme_base {

	var $readmore_plugin_directory;
	var $readmore_plugin_url;
	function qa_html_theme_layer($template, $content, $rooturl, $request) {
		global $qa_layers;
		$this->readmore_plugin_directory = $qa_layers['Readmore Layer']['directory'];
		$this->readmore_plugin_url = $qa_layers['Readmore Layer']['urltoroot'];
		qa_html_theme_base::qa_html_theme_base($template, $content, $rooturl, $request);
	}

	function head_css() {
		global $qa_request;
		qa_html_theme_base::head_css();
		$this->output('<LINK REL="stylesheet" TYPE="text/css" HREF="'. qa_opt('site_url') . $this->readmore_plugin_url.'style.css'.'"/>');
	}

	function body_suffix() {
		qa_html_theme_base::body_suffix();
		
		//Read more text for question
		if ( $this->template == 'question' ) {
			$this->output('<script src="'. qa_opt('site_url') . $this->readmore_plugin_url .'qa-read-more.min.js"></script>');
		}
	}

}