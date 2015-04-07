<h1>Blog posts</h1>

<div style="float:right;">
	<?php 
		if ($this->Session->check('Auth.User')) {
			// if (AuthComponent::user('role') === 'author') {
			// 	echo "Welcome ".AuthComponent::user('username');
			// }
				echo "Welcome ".AuthComponent::user('username');
				echo " | ";
				echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));
		} else {
				echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'));
				echo " | ";
				echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'add'));
		}
	?>
</div>

<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?>

<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Action</th>
		<th>Created</th>
	</tr>
	<!-- Here is where we loop through our $posts array, printing out post info -->
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($post['Post']['title'],
		array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td>
			<?php
				echo $this->Form->postLink('Delete',
					array('action' => 'delete', $post['Post']['id']),
					array('confirm' => 'Are you sure?')
				);
			?>
			<span> | </span>
			<?php
				echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));
			?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
</table>