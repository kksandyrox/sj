<div class = "container">
	<h2>
		<?php echo __('Admin add category');?>
	</h2>
	<?php
	echo $this->Form->create('Category'); 
	?>
	<div class = "row">
		<div class = "col-md-3">
			<?php
			echo $this->Form->input('name');
			?>
		</div>
	</div>
	<?php
	echo $this->Form->submit('Submit');
	echo $this->Form->end();
	?>
</div>