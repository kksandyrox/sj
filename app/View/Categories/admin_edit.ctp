<div class="container">	
	<div class = "row">
		<div class = "col-md-2">
		<span class = "glyphicon glyphicon-chevron-left"></span>
			<?php echo $this->Html->link(__('Back'), array('action' => 'index'), array('class' => 'btn btn-success'));?>
		</div>
	</div>
	<?php echo $this->Form->create('Category'); ?>
	<div class = "row">
		<div class = "col-md-4">
<!-- 			<div class = 'input-group input-group-lg'> -->
				<h4 class = "left-margin" ><?php echo __('Admin Edit Category');?></h4>
				<?php
				echo $this->Form->input('id', array('class' => 'form-control'));
				echo $this->Form->input('name', array('class' => 'form-control'));
				?>
				<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary left-margin')); ?>
				<?php echo $this->Form->end();?>
<!-- 			</div>
 -->		</div>
	</div>
</div>

