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
	?>
</head>
<body>

<nav class="navbar navbar-inverse" role="navigation">
	<div class = "container">
		<div class= "row"> 
			<ul>
				<li><?php echo $this->Html->link(__('SPORTS WEBSITE'), array('controller' => 'events', 'action' => 'banner'), array('class' => 'navbar-brand'));?></li>
			</ul>
		</div>
	</div>
</nav>
<div id="content">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
</div>
</body>
</html>
