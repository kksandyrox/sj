<div class ="container">
	<div class = "row">
<!-- 		<div class = "col-md-2">
			<span class = "glyphicon glyphicon-chevron-left"></span>
			<?php echo $this->Html->link(__('Back'), $this->request->referer(), array('class' => 'btn btn-success'));?>
		</div> -->
		<div class = "col-md-offset-10">
			<span class = "glyphicon glyphicon-eye-open"></span>
			<?php echo $this->Html->link(__('View all events'), array('action' => 'index'), array('class' => 'btn btn-success')); ?>
		</div>
	</div> <br />
	<div class = "row">
	<div class = "col-md-6">
			<div class = "panel panel-primary">
				<div class = "panel-heading"><?php echo $event['Event']['name'];?></div>
				<div class = "panel-body">


				<?php if(!empty($event['Event']['image'])):?>
					<?php echo $this->Html->image("{$event['Event']['dir']}/dis_{$event['Event']['image']}", array('pathPrefix' => 'files/event/image/')); ?> 
				<?php else:?>
					<?php echo $this->Html->image("http://placehold.it/420x250");?>
				<?php endif;?>
					<h4>Description</h4>
					<p><?php echo $event['Event']['description'];?></p>
				</div>


				<table class ="table">
					<tr>
						<th><?php echo __('Name'); ?></th>
						<th><?php echo __('Category'); ?></th>
						<th><?php echo __('Date'); ?></th>
						<th><?php echo __('Result'); ?></th>
					</tr>
					<tr>
						<td><?php echo $event['Event']['name'];?></td>
						<td><?php echo $event['Category']['name'];?></td>
						<td><?php echo h(date('F d,  Y', strtotime($event['Event']['date'])));?></td>
						<td><?php echo $event['Event']['result'];?></td>
					</tr>
				</table>

			</div>
		</div>
		<div class = "col-md-6">
			<div id="disqus_thread"></div>
		</div>
	</div>
</div>
