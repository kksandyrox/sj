<div class = "container">
	<ul>
		<li>
			<?php 
				echo $this->Html->link(__('Create new categories'), array('controller' => 'categories', 'action' => 'admin_add'));
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(__('Create new events'), array('controller' => 'events', 'action' => 'admin_add'));
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(__('List all categories'), array('controller' => 'categories', 'action' => 'admin_index'));
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(__('List all events'), array('controller' => 'events', 'action' => 'admin_index'));
			?>
		</li>
	</ul>
</div>