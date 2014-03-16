<div class = "container">
	<div class = "row">
		<div class = "col-md-2">
			<span class = "glyphicon glyphicon-chevron-left"></span>
			<?php echo $this->Html->link(__('Back'), array('controller' => 'users', 'action' => 'controls', 'admin' => false), array('class' => 'btn btn-success'));?>
		</div>
	</div>

	<div class = "row">
	<div class = "col-md-offset-3 col-md-6">
			<div class = "panel panel-primary">
				<div class = "panel-heading"> Admin Add Event</div>
				<div class = "panel-body">
					<?php
					echo $this->Form->create('Event', array('type' => 'file'));
					echo $this->Form->input('name', array('placeholder' => 'Enter event name', 'class' => 'form-control'));
					echo $this->Form->input('category_id', array('empty' => 'Select category', 'between' => '<br />', 'class' => 'form-control'));
					echo $this->Form->input('description', array('rows' => 3, 'placeholder' => 'Enter description', 'class' => 'disable-resize form-control')); 
					echo $this->Form->input('date', array('type' => 'text', 'class' => 'datepicker form-control left-margin', 'div' => false, 'placeholder' => 'Select date'));				
					echo $this->Form->input('image', array('type' => 'file', 'label' => 'Upload Image'));
					echo $this->Form->input('dir', array('type' => 'hidden'));	
					echo $this->Form->input('result', array('rows' => 1, 'placeholder' => 'Enter result', 'class' => 'disable-resize form-control'));
					echo $this->Form->input('is_enabled');
					echo $this->Form->button('Submit', array('class' => 'btn btn-primary'));
					echo $this->Form->end();
					?>	
				</div>
			</div>
		</div>
	</div>
</div>



<!-- 	<div class = "row">
		<div class = "col-md-4">
		<h4 class = "left-margin">
			<?php echo __('Admin add event');?>
		</h4>	
			<?php
			echo $this->Form->create('Event', array('type' => 'file'));
			echo $this->Form->input('name', array('placeholder' => 'Enter event name', 'class' => 'form-control'));
			echo $this->Form->input('category_id', array('empty' => 'Select category', 'between' => '<br />', 'class' => 'form-control'));
			echo $this->Form->input('description', array('rows' => 3, 'placeholder' => 'Enter description', 'class' => 'disable-resize form-control')); 
			echo $this->Form->input('date', array('type' => 'text', 'class' => 'datepicker form-control left-margin', 'div' => false, 'placeholder' => 'Select date')); ?>
			<?php
			echo $this->Form->input('image', array('type' => 'file', 'label' => 'Upload Image'));
			echo $this->Form->input('dir', array('type' => 'hidden'));	
			echo $this->Form->input('result', array('rows' => 1, 'placeholder' => 'Enter result', 'class' => 'disable-resize form-control'));
			echo $this->Form->input('is_enabled');
			echo $this->Form->button('Submit', array('class' => 'btn btn-primary'));
			echo $this->Form->end();
			?>
		</div>
	</div> -->
