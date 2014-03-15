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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('ui-lightness/jquery-ui-1.10.3.custom');	
		echo $this->Html->css('custom');
		echo $this->Html->script('jquery'); 
		echo $this->Html->script('jqueryui'); 
		echo $this->Html->script('jquerypicker');
		echo $this->Html->script('date'); 		 
		echo $this->Html->script('bootstrap'); 		 
	?>
</head>
<body>
<div class = "navbar navbar-inverse navbar-static-top">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-4 navbar-brand">SPORTS</div>
			<div class = "col-md-4 pull-right navbar-link"><?php echo $this->Html->link(__('Admin'), array('controller' => 'users', 'action' => 'login', 'admin' => false))?></div>
		</div>
	</div>
</div>
	<div id="container">

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

	</div>

</body>
</html>
