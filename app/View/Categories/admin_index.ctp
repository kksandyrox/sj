<div class="container-fluid">
<div class = "row">
	<div class = "col-md-2">
		<span class = "glyphicon glyphicon-chevron-left"></span>
		<?php echo $this->Html->link(__('Back'), array('controller' => 'users', 'action' => 'controls', 'admin' => false), array('class' => 'btn btn-success'));?>
	</div>
	<div class = "col-md-offset-10">
		<span class = "glyphicon glyphicon-plus"></span>
		<?php echo $this->Html->link(__('Add New Category'), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
	</div>
</div>
	<h2><?php echo __('Categories'); ?></h2>
	<table class = "table table-striped" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categories as $category): ?>
	<tr>
		<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['created']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id']), array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
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
