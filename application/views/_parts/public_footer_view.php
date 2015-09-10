<?php
	// Custom JS Files
	if(isset($theme['assets']['footer']['js'])) {
		foreach($this->template->get_js('footer') as $js_file) {
			echo $js_file . "\n";
		}
	}
?>
</body>
</html>