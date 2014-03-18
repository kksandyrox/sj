<div class = "container">	
	<div class = "row">
		<div class = "col-md-2">
			<span class = "glyphicon glyphicon-chevron-left"></span>
<!-- 			<?php echo $this->Html->link(__('Back'), array('controller' => 'users', 'action' => 'controls', 'admin' => false), array('class' => 'btn btn-success'));?> -->
<?php echo $this->Html->link(__('Back'), $this->request->referer(), array('class' => 'btn btn-success'));?>
		</div>
	</div>
	<div class = "row">
		<div class = "col-md-offset-3 col-md-6">
			<div class = "panel panel-primary">
				<div class = "panel-heading"> Admin Add Category</div>
				<div class = "panel-body">
					<?php echo $this->Form->create('Category'); ?>
					<?php
					echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Enter category name'));
					?>															
					<?php
					echo $this->Form->button('Submit', array('class' => 'btn btn-primary left-margin'));
					echo $this->Form->end();
					?>
				</div>
			</div>	
		</div>
	</div>


<!-- 	<?php echo $this->Form->create('Category'); ?>
	<div class = "row">
		<div class = "col-md-4">
			<h4 class = "left-margin" ><?php echo __('Admin Add Category');?></h4>
			<?php
			echo $this->Form->input('name', array('class' => 'form-control'));
			?>															
			<?php
			echo $this->Form->button('Submit', array('class' => 'btn btn-primary left-margin'));
			echo $this->Form->end();
			?>
		</div>
	</div> -->
</div>