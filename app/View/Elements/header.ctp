<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

// $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
// $cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php // echo $cakeDescription ?>
		<?php // echo $this->fetch('title'); ?>
		Student Jobs
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min.css', 'style'));

		// echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!-- Font Awesome -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body>
	<header class="container">
		<h1 class="logo">
			<?php  
				echo $this->Html->link('The Art Institute of Colorado', array('controller' => 'posts', 'action' => 'index', 'title' => 'The Art Institute of Colorado'));
			?>
		</h1>

		<nav style="float:right;">
			<ul>
				<li style="color:white;">
					<?php  
						if ($this->Session->check('Auth.User')) {
							// if (AuthComponent::user('role') === 'author') {
							// 	echo "Welcome ".AuthComponent::user('username');
							// }
								echo "Welcome, ".AuthComponent::user('username');
						} else {
							echo "Welcome, Guest";
						}
					?>
				</li>
				<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
				<li><a href="#"><i class="fa fa-vimeo-square fa-2x"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
				<li><a href="#"><i class="fa fa-flickr fa-2x"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-square fa-2x"></i></a></li>
				<li>
					<?php 
						if ($this->Session->check('Auth.User')) :
							// if (AuthComponent::user('role') === 'author') {
							// 	echo "Welcome ".AuthComponent::user('username');
							// }
								echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));
						else :
								echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'));
					?>
				</li>
			</ul>
			<p>
				<?php  
					echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'add'));
					echo " | ";
					echo $this->Html->link('Forgot Password', array('controller' => 'users', 'action' => 'forgot'));
				?>
			</p>
		<?php endif; ?>
		</nav>
		<?php //echo "Welcome, ".AuthComponent::user('username'); ?>
	</header>