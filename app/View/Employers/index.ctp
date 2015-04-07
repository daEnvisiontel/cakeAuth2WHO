You are here: Employers/index.ctp
<br><br>
<?php  
			echo $this->Html->link('Edit Jobs', '/employers/edit', array('class' => 'button'));
		?>

<?php debug($this->Html->url(array('controller' => 'employers', 'action' => 'edit'))); ?>