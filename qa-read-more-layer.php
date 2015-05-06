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
		$this->output('<style>
		/* Style your Read More Button here */

		.readmore-button {
			text-transform: uppercase;
			/*
			display: block;
			width: 100%;
			text-align: center;
			color: #333;
			font-size: 11px;
			font-weight: 500;
			border: 1px solid #e5e5e5;
			border-radius: 4px;
			margin-right: 5px;
			padding: 2px 9px 2px 8px;
			background-color: #fcfcfc;
			background-image: linear-gradient(rgba(255,255,255,0),rgba(235,235,235,.3)60%,rgba(225,225,225,.6));
			*/
		}

		/*
		.readmore-button:hover {
		  background-color: #f9f9f9;
		  border-color: #e5e5e5 #ccc #ccc;
		  box-shadow: 0 1px 3px rgba(0,0,0,.15),inset 0 1px 0 rgba(255,255,255,1),inset -1px 0 0 rgba(248,248,248,1),inset 0 -1px 0 rgba(248,248,248,.5),inset 1px 0 0 rgba(248,248,248,1);
		  text-shadow: -1px -1px 0 #fcfcfc,1px -1px 0 #fcfcfc,-1px 1px 0 #fcfcfc,1px 1px 0 #fff;
		}
		*/
		</style>');
	}

	function body_suffix() {
		qa_html_theme_base::body_suffix();
		
		//Read more text for question
		if ( $this->template == 'question' ) {
			$this->output('<script src="'. qa_opt('site_url') . $this->readmore_plugin_url .'qa-read-more.min.js"></script>');
		}
	}

}