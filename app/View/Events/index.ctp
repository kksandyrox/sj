<div class="container">
	<div class = "row">
<!-- 		<div class = "col-md-2">
			<span class = "glyphicon glyphicon-chevron-left"></span>
			<?php echo $this->Html->link(__('Back'), $this->request->referer(), array('class' => 'btn btn-success'));?>
		</div> -->
		<div class = "col-md-offset-7 col-md-4">
			<?php echo $this->Form->create('Event');?>
			<?php echo $this->Form->input('keyword', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Enter Category or Date (yyyy-mm-dd)'));?>
		</div>
		<div class = "col-md-1">
			<?php echo $this->Form->button('Search', array('class' => 'btn btn-success search-margin'));?>
			<?php echo $this->Form->end();?>
		</div>
	</div>
	<h2><?php echo __('Events'); ?></h2>
	<table class = "table table-striped" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('result'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['id']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['name']); ?>&nbsp;</td>
		<td><?php echo h(date('F d, Y', strtotime($event['Event']['date']))); ?>&nbsp;</td>
		<td>
			<?php echo $event['Category']['name']; ?>
		</td>
		<td><?php echo h($event['Event']['description']); ?>&nbsp;</td>
		<td>		 <?php if(!empty($event['Event']['image'])):?>
		 <?php echo $this->Html->image("{$event['Event']['dir']}/icon_{$event['Event']['image']}", array('pathPrefix' => 'files/event/image/', 'class' => 'img-circle')); ?> 
		<?php else :?>
			<?php echo $this->Html->image("http://placehold.it/82x82", array('class' => 'img-circle'));?>
		<?php endif;?> 
		</td>
		<td><?php echo h($event['Event']['result']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
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

