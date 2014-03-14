<div class = "container-fluid">
	<div class = "row">
		<div class = "col-md-4">
		<h4>
			<?php echo __('Admin add event');?>
		</h4>	
			<?php
			echo $this->Form->create('Event', array('type' => 'file'));
			echo $this->Form->input('name', array('placeholder' => 'Enter event name'));
			echo $this->Form->input('category_id', array('empty' => 'Select category', 'between' => '<br />'));
			echo $this->Form->input('description', array('rows' => 3, 'placeholder' => 'Enter description', 'class' => 'disable-resize')); 
			echo $this->Form->input('date', array('type' => 'text', 'class' => 'datepicker', 'div' => false, 'placeholder' => 'Select date')); ?>
			<?php
			echo $this->Form->input('image', array('type' => 'file', 'label' => 'Upload Image'));
			echo $this->Form->input('dir', array('type' => 'hidden'));
			?>

			<?php		
			echo $this->Form->input('result', array('rows' => 1, 'placeholder' => 'Enter result', 'class' => 'disable-resize'));
			echo $this->Form->input('is_enabled');
			echo $this->Form->submit('Submit');
			echo $this->Form->end();
			?>
		</div>
	</div>
</div>