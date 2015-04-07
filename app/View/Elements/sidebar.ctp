<h3>Menu</h3>

<ul>
	<li>
		<!-- <i class="fa fa-home"></i> -->
		<?php  
			echo $this->Html->link('Edit Jobs', '/employers/edit', array('class' => 'button'));
		?>
		
	</li>
	<li><a href="<?php echo $this->Html->url(array('controller' => 'employers', 'action' => 'index')); ?>" class="selected"><i class="fa fa-home"></i> Jobs</a></li>
	<li><a href="<?php echo $this->Html->url(array('controller' => 'employers', 'action' => 'edit')); ?>"><i class="fa fa-wrench"></i> Edit Jobs</a></li>
	<li><a href="#"><i class="fa fa-users"></i> Edit Users</a></li>
	<li><a href="#"><i class="fa fa-file-text-o"></i> Student Info</a></li>
	<li><a href="#"><i class="fa fa-bar-chart-o"></i> Stats</a></li>
</ul>

<h3>Filter Options</h3>

<form action="">
	<input type="text">
	<input type="submit" value="">
</form>

<p>Compensation</p>
	<hr>
<ul>
	<li><a href="#">Full-Time</a></li>
	<li><a href="#">Part-Time</a></li>
	<li><a href="#">Freelance</a></li>
	<li><a href="#">Internship</a></li>
	<li><a href="#">Volunteer</a></li>
</ul>

<?php debug($this->Html->url(array('controller' => 'employers', 'action' => 'edit'))); ?>