
	<div class = "row">
		<div class = "col-md-2">
			<span class = "glyphicon glyphicon-chevron-left"></span>
			<?php echo $this->Html->link(__('Back'), array('controller' => 'users', 'action' => 'controls', 'admin' => false), array('class' => 'btn btn-success'));?>
		</div>
		<div class = "col-md-offset-10">
			<span class = "glyphicon glyphicon-plus"></span>
			<?php echo $this->Html->link(__('Add New Event'), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
		</div>
	</div>
	<h2><?php echo __('Events'); ?></h2>
	<table class = "table table-striped" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('result'); ?></th>
			<th><?php echo $this->Paginator->sort('is_enabled'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['id']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['name']); ?>&nbsp;</td>
		<td>
			<?php echo __($event['Category']['name']); ?>
		</td>
		<td><?php echo h(date('F d, Y', strtotime($event['Event']['date']))); ?>&nbsp;</td>

		 <td>
		 <?php if(!empty($event['Event']['image'])):?>
		 <?php echo $this->Html->image("{$event['Event']['dir']}/icon_{$event['Event']['image']}", array('pathPrefix' => 'files/event/image/', 'class' => 'img-circle')); ?> 
		<?php else :?>
			<?php echo $this->Html->image("http://placehold.it/82x82", array('class' => 'img-circle'));?>
		<?php endif;?>

		 </td>
		<td><?php echo h($event['Event']['result']); ?>&nbsp;</td>
		<?php if($event['Event']['is_enabled'] == 1):?>
		<td><?php echo h($event['Event']['is_enabled']); ?>&nbsp;</td>
	<?php else:?>
		<?php $event['Event']['is_enabled'] = 0 ;?>
		<td><?php echo h($event['Event']['is_enabled']); ?>&nbsp;</td>
	<?php endif;?>
		<td>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id']), array('class' => 'btn btn-primary bottom-margin')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $event['Event']['id']), array('class' => 'btn btn-warning bottom-margin')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $event['Event']['id']), array('class' => 'btn btn-danger bottom-margin'), __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>


