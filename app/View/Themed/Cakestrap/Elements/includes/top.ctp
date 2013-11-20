<?php echo $this->Html->docType('html5'); ?> 
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	echo $this->fetch('meta');

	echo $this->Html->css('bootstrap');
	echo $this->Html->css('main');

	echo $this->fetch('css');

	echo $this->Html->script('libs/jquery-1.10.2.min');
	echo $this->Html->script('libs/bootstrap.min');

	echo $this->fetch('script');
	?>
</head>

<body>

	<div id="main-container">
		
		<div id="header" class="container">
			<div id="header">
				<h1>Captive Response</h1>
			</div>
		</div><!-- /#header .container -->

		<div id="content" class="container">
			<?php echo $this->Session->flash(); ?>