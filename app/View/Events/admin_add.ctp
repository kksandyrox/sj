<div class = "container">
<?php echo __('Admin add event');?>
<?php
	echo $this->Form->create('Event', array('type' => 'file'));
	echo $this->Form->input('name');
	echo $this->Form->input('category_id');
	echo $this->Form->input('description', array('rows' => 3)); 
	echo $this->Form->input('date', array('type' => 'text', 'class' => 'datepicker', 'div' => false)); 
	echo $this->Form->input('image', array('type' => 'file', 'label' => false));
	echo $this->Form->input('dir', array('type' => 'hidden'));
	?>
	<div>
		<?php 
			echo __('Upload Picture'); 
		?>
	</div>
<?php		
	echo $this->Form->input('result', array('rows' => 1));
	echo $this->Form->submit('Submit');
	echo $this->Form->end();
?>
</div>