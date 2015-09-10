<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
		// Page Title
		if(isset($theme['assets']['header']['title']))
			echo $this->template->get_title() . "\n";

		// Meta Tags
		if(isset($theme['assets']['header']['meta'])) {
			foreach($this->template->get_meta() as $meta_tag) {
				echo $meta_tag . "\n";
			}
		}

		// Custom CSS Files
		if(isset($theme['assets']['header']['css'])) {
			foreach($this->template->get_css() as $css_file) {
				echo $css_file . "\n";
			}
		}

		// Custom JS Files
		if(isset($theme['assets']['header']['js'])) {
			foreach($this->template->get_js('header') as $js_file) {
				echo $js_file . "\n";
			}
		}
	?>
</head>
<body>