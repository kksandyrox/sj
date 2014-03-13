<div class = "container">
<?php echo $this->Form->create();
	  echo $this->Form->input('username');
	  echo $this->Form->input('password');
	  echo $this->Form->submit(__('Login'));
	  echo $this->Form->end();
?>
</div>