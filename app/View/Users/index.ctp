<?php //debug($users); ?>
<a style="display: block; margin: 10px 0;" href="<?php //echo Router::url('/', true); ?>users/add/"><i class="fa fa-user-plus"></i>
 Add User</a>

 <ul>
 	<li>
 		<ul>
 			<li style="float:left; width:40px;">ID</li>
 			<li style="float:left; width:120px;">Username</li>
 			<li style="float:left; width:120px;">Role</li>
 			<!-- <li style="float:left; width:120px;">Name</li> -->
 			<li style="float:left; margin-bottom: 10px; width:100px;">Actions</li>
 			<hr style="clear:both;">
 		</ul>
 	</li>
 	<li>
 		<?php foreach ($users as $user) : ?>
 		<ul style="clear:both;">
 			<li style="float:left; width:40px;"><a href="<?php echo Router::url('/', true); ?>users/view/<?php echo $user['User']['id']; ?>"><?php echo $user['User']['id']; ?></a></li>
 			<li style="float:left; width:120px;"><?php echo $user['User']['username']; ?></li>
 			<li style="float:left; width:120px;"><?php echo $user['User']['role']; ?></li>
 			<!-- <li style="float:left; width:120px;"><?php //echo $user['User']['name']; ?></li> -->
 			<li style="float:left; margin-bottom: 10px; width:100px;"><a href="<?php echo Router::url('/', true); ?>users/delete/<?php echo $user['User']['id']; ?>">delete</a></li>
 		</ul>
		<?php endforeach; ?>
 	</li>
 </ul>
 <div style="clear:both; margin-bottom: 20px;"></div>
 <?php //debug($users); ?>

<!--  M 10:30 - 12:30
 			T 10:30 - 12:30 -->