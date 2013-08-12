<?php 
header('Content-type: text/css');
ob_start("compress");

  	function compress($buffer) {
  		  /* remove comments */
      	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
      		
      	/* remove tabs, spaces, newlines, etc. */
      	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
      		
      	return $buffer;
  	}

  	/* css files for compression */
  	include('plugins.less');
  	include('workless.less');
  	include('typography.less');
    include('font.less');
  	include('forms.less');
  	include('tables.less');
  	include('buttons.less');
  	include('alerts.less');
  	include('tabs.less');
  	include('pagination.less');
  	include('breadcrumbs.less');
    include('backgrounds.less');
  	include('helpers.less');
    include('scaffolding.less');
  	include('application.less');
    include('responsive.less');
    include('print.less');

ob_end_flush();