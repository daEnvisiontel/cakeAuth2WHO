<?php echo $this->element('header'); ?>

		<div class="container">
			<aside class="col-sm-3 col-xs-12">
				<?php echo $this->element('sidebar'); ?>				
			</aside>

			<div class="content col-sm-9 col-xs-12" style="margin-bottom: 10px;">
				<?php echo $this->Session->flash(); ?>


				<h2><?php echo $title_for_layout; ?></h2>
				<?php echo $this->fetch('content'); ?>
			</div>

			<p class="sidebar_layout_footer">
				Website by an AiC student: <a href="http//dannyavery.com/portfolio" target="_blank">Danny Avery</a>
			</p>
		</div><!-- container -->