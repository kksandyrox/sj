<div class="container">
<div class = "row">
<div class = "col-md-offset-1 col-md-10">
<div class = "panel panel-primary">
<div class = "panel-heading">Featured Events</div>
	<div id="slider" class="nivoSlider">
		<?php foreach($datas as $data):
		// echo $this->Html->image('http://placehold.it/640x480');
		 echo $this->Html->image("{$data['Event']['dir']}/xvga_{$data['Event']['image']}", array('pathPrefix' => 'files/event/image/'));
		endforeach;
		?>
	</div>
</div>
</div>
</div>

<div class = "col-md-offset-5">
	<?php echo $this->Html->link(__('View Events'), array('controller' => 'events', 'action' => 'index'));?>	
</div>
</div>