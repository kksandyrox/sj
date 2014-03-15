<div class = "container">
	<div class = "row">
		<div class = "col-md-2">
		<span class = "glyphicon glyphicon-chevron-left"></span>
			<?php echo $this->Html->link(__('Back'), array('action' => 'index'), array('class' => 'btn btn-success'));?>
		</div>
	</div>
	<h2><?php echo __('Category'); ?></h2>
	<table class = "table table-stripped">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Created'); ?></th>
			<th><?php echo __('Modified'); ?></th>
		</tr>
		<tr>
			<td><?php echo h($category['Category']['id']); ?></td>
			<td><?php echo h($category['Category']['name']); ?></td>
			<td><?php echo h($category['Category']['created']); ?></td>
			<td><?php echo h($category['Category']['modified']); ?></td>
		</tr>
	</table>
</div>

