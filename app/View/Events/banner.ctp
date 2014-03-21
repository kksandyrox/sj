<div class="container">
	<div class = "row">
		<div class = "col-md-offset-1 col-md-10">
<!-- <div class = "panel panel-primary">
	<div class = "panel-heading">Featured Events</div> -->
	<div id="slider" class="nivoSlider shadow slider-height">
		<?php foreach($datas as $data):?>
			<?php if(!empty($data['Event']['image'])):
			echo $this->Html->image("{$data['Event']['dir']}/xvga_{$data['Event']['image']}", array('pathPrefix' => 'files/event/image/')); ?>
		<?php else :
		echo $this->Html->image('http://placehold.it/1024x768');
		endif;
		endforeach;
		?>
	</div>
</div>
<?php foreach($all_events as $all_event) : ?>
	<div class = "col-md-4 banner-small-pics">
		<?php if(!empty($all_event['Event']['image'])):?>
			<?php 
			echo $this->Html->link($this->Html->image("{$all_event['Event']['dir']}/sbp_{$all_event['Event']['image']}", array('pathPrefix' => 'files/event/image/', 'class' => 'img-circle')), array('controller' => 'events', 'action' => 'view', $all_event['Event']['id']), array('escape' => false));
			?>
		<?php else: ?>
			<?php 
			echo $this->Html->link($this->Html->image("http://placehold.it/220x150", array('class' => 'img-circle')), array('controller' => 'events', 'action' => 'view', $all_event['Event']['id']), array('escape' => false));
// echo $this->Html->image("{$all_event['Event']['dir']}/icon_{$all_event['Event']['image']}", array('pathPrefix' => 'files/event/image/'));	?>
<?php endif;?>
</div>
<?php endforeach;?>
<!-- <div class = "col-md-offset-5">
<?php echo $this->Html->link(__('View Events'), array('controller' => 'events', 'action' => 'index'));?>	
</div> -->
</div>