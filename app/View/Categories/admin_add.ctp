<div class = "container">
<?php echo __('Admin add category');?>
<?php
	echo $this->Form->create('Category');
	echo $this->Form->input('name');
	echo $this->Form->submit('Submit');
	echo $this->Form->end();
?>
</div>