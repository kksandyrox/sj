<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('Sports event website');?>
	</title>
	<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('bootstrap');

	echo $this->Html->css('no-admin');
	echo $this->Html->css('nivo-slider');	
	echo $this->fetch('meta');
	echo $this->fetch('css');

	echo $this->Html->script('jquery'); 
	echo $this->Html->script('bootstrap'); 	
	echo $this->Html->script('jquery.nivo.slider');	 
	echo $this->Html->script('sand');	 
	echo $this->fetch('script');
	?>
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
	<div class ="container">
		<ul class = "list-unstyled">
			<li><a class="navbar-brand" href="#">SPORTS WEBSITE</a></li>
			<li class = "navbar-right"><?php echo $this->Html->link(__('Admin Login'), array('controller' => 'users', 'action' => 'login', 'admin' => false), array('type' => 'button', 'class' => 'btn btn-success navbar-btn'));?></li>
		</ul>
		</div>
	</nav>

	<div id="content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
</body>
</html>