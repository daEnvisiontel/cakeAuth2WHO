<?php echo $this->element('header'); ?>

	<div class="container">
		<div class="content col-xs-12">
			<?php echo $this->Session->flash(); ?>


			<h2><?php echo $title_for_layout; ?></h2>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>

<?php echo $this->element('footer'); ?>
