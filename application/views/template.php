<!DOCTYPE html>
<html>
<head>
	<title>The MOOCinator</title>
	<?php echo HTML::style('media/css/bootstrap.css'); ?>
	<?php echo HTML::style('media/css/style.css'); ?>
</head>
<body>
	<div id="content">
		<?= $content; ?>
	</div>
	<?php echo HTML::script('media/js/jquery.js'); ?>
	<?php echo HTML::script('media/js/script.js'); ?>
</body>
</html>