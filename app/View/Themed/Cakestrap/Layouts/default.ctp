<?php echo $this->element('includes/top'); ?>

			<div class="jumbotron">
				<h1><?php echo $title_for_layout; ?></h1>
				<?php echo $this->fetch('content'); ?>
			</div>

<?php echo $this->element('includes/bottom'); ?>