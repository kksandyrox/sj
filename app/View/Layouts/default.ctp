<?php
/**
 *
 *
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


?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('Sports event website');?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		 echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('ui-lightness/jquery-ui-1.10.3.custom');	
		echo $this->Html->css('custom');
		echo $this->Html->css('nivo-slider');
		echo $this->fetch('script');
		echo $this->Html->script('jquery'); 
		echo $this->Html->script('jqueryui'); 
		echo $this->Html->script('jquerypicker');
		echo $this->Html->script('date'); 		 
		echo $this->Html->script('bootstrap'); 	
		echo $this->Html->script('disqus');	 
		echo $this->Html->script('sand');	 
	?>
</head>
<body>
<!-- <div class = "navbar navbar-inverse navbar-static-top">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-4 navbar-brand">SPORTS</div>
			<div class = "col-md-4 pull-right navbar-link"><?php echo $this->Html->link(__('Admin'), array('controller' => 'users', 'action' => 'login', 'admin' => false))?></div>
		</div>
	</div>
</div> -->

<nav class="navbar navbar-inverse" role="navigation">
	<ul class = "list-unstyled">
		<li><a class="navbar-brand" href="#">Brand</a></li>
<!-- 		<li class = "pull-right"><button type="button" class="btn btn-default navbar-btn">Admin Login</button></li> -->
<li class = "pull-right"><?php echo $this->Html->link(__('Admin Login'), array('controller' => 'users', 'action' => 'login', 'admin' => false), array('type' => 'button', 'class' => 'btn btn-default navbar-btn'));?></li>
	</ul>
	>
</nav>
<div id="content">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
</div>
</body>
</html>
