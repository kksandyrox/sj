<div class ="container">
	<div class = "row">
		<div class = "col-md-2">
			<span class = "glyphicon glyphicon-chevron-left"></span>
			<?php echo $this->Html->link(__('Back'), array('controller' => 'events', 'action' => 'index'), array('class' => 'btn btn-success'));?>
		</div>
	</div> <br />
<div class = "panel panel-primary">
<div class = "panel-heading"><?php echo $event['Event']['name'];?></div>
<div class = "panel-body">

<?php if(!empty($event['Event']['image'])):?>
		<?php echo $this->Html->image("{$event['Event']['dir']}/dis_{$event['Event']['image']}", array('pathPrefix' => 'files/event/image/', 'class' => 'img-responsive')); ?> 
	<?php else:?>
		<?php echo $this->Html->image("http://placehold.it/420x250", array('class' => 'img-responsive'));?>
	<?php endif;?>




<h4>Description</h4>
<p><?php echo $event['Event']['description'];?></p>
</div>


<table class ="table">
	<tr>
		<th><?php echo __('Id') ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('is_enabled'); ?></th>
		<th><?php echo __('Result'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
	</tr>
	<tr>
		<td><?php echo $event['Event']['id'];?></td>
		<td><?php echo $event['Event']['name'];?></td>
		<td><?php echo $event['Category']['name'];?></td>
						<td><?php echo h(date('F d,  Y', strtotime($event['Event']['date'])));?></td>
		<?php if($event['Event']['is_enabled'] == 1) :?>
			<td><?php echo $event['Event']['is_enabled'];?></td>
		<?php else :?>
			<?php $event['Event']['is_enabled'] = 0;?>
			<td><?php echo $event['Event']['is_enabled'];?></td>
		<?php endif;?>
		<td><?php echo $event['Event']['result'];?></td>
		<td><?php echo $event['Event']['created'];?></td>
		<td><?php echo $event['Event']['modified'];?></td>
	</tr>
</table>
</div>
</div>
