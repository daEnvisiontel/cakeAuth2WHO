<ul>
 	<li>
 		<ul>
 			<li style="float:left; width:40px;">ID</li>
 			<li style="float:left; width:120px;">Username</li>
 			<!-- <li style="float:left; width:100px;">Name</li> -->
 			<!-- <li style="float:left; margin-bottom: 10px; width:120px;">Country</li> -->
 			<hr style="clear:both;">
 		</ul>
 	</li>
 	<li>
 		<ul style="clear:both;">
 			<li style="float:left; width:40px;"><?php echo $user['User']['id']; ?></li>
 			<li style="float:left; width:120px;"><?php echo $user['User']['username']; ?></li>
 			<!-- <li style="float:left; width:100px;"><?php //echo $user['User']['name']; ?></li> -->
<!-- Uses the UserProfile.php Model to get data -->
 			<!-- <li style="float:left; margin-bottom: 20px; width:120px;"><?php //echo $user['UserProfile']['country']; ?></li> -->
 		</ul>
 	</li>
 </ul>
 <div style="clear:both; margin-bottom: 20px;">
 	<a style="display: block; margin: 10px 0;" href="<?php echo Router::url('/', true); ?>"><i class="fa fa-arrow-circle-left"></i>
 Back</a>
 </div>