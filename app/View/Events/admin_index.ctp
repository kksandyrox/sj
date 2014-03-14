<div class="container-fluid">
	<div class = "row">
		<div class = "col-md-offset-10">
			<?php echo $this->Html->link(__('Add New Event'), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
		</div>
	<h2><?php echo __('Events'); ?></h2>
	<table class = "table table-striped" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('result'); ?></th>
			<th><?php echo $this->Paginator->sort('is_enabled'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['id']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['Category']['name'], array('controller' => 'categories', 'action' => 'view', $event['Category']['id'])); ?>
		</td>
		<td><?php echo h($event['Event']['date']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['description']); ?>&nbsp;</td>

		 <td>     	<?php echo $this->Html->image("{$event['Event']['dir']}/icon_{$event['Event']['image']}", array('pathPrefix' => 'files/event/image/')); ?> </td>
		<td><?php echo h($event['Event']['result']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['is_enabled']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['created']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id']), array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $event['Event']['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $event['Event']['id']), array('class' => 'btn btn-danger'), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?>
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
</div>

