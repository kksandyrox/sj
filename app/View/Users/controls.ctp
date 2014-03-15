<div class = "container">
	<ul class ="list-unstyled">
		<li>
			<?php 
				echo $this->Html->link(__('Create new categories'), array('controller' => 'categories', 'action' => 'add', 'admin' => true));
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(__('Create new events'), array('controller' => 'events', 'action' => 'add', 'admin' => true));
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(__('List all categories'), array('controller' => 'categories', 'action' => 'index', 'admin' => true));
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(__('List all events'), array('controller' => 'events', 'action' => 'index', 'admin' => true));
			?>
		</li>
	</ul>
</div>