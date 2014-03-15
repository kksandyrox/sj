<div class = "container">
	<div class = "row">
	<div class = "col-md-offset-2 col-md-8">
			<div class = "panel panel-primary">
				<div class ="panel-heading">Welcome To Admin Panel</div>
				<ul class ="list-unstyled">
					<li class = "well top-margin">
					<span class = "glyphicon glyphicon-hand-right"></span>
						<?php 
						echo $this->Html->link(__('Create new categories'), array('controller' => 'categories', 'action' => 'add', 'admin' => true));
						?>
					</li>
					<li class = "well">
					<span class = "glyphicon glyphicon-hand-right"></span>
						<?php 
						echo $this->Html->link(__('Create new events'), array('controller' => 'events', 'action' => 'add', 'admin' => true));
						?>
					</li>
					<li class = "well">
					<span class = "glyphicon glyphicon-hand-right"></span>
						<?php 
						echo $this->Html->link(__('List all categories'), array('controller' => 'categories', 'action' => 'index', 'admin' => true));
						?>
					</li>
					<li class = "well">
					<span class = "glyphicon glyphicon-hand-right"></span>
						<?php 
						echo $this->Html->link(__('List all events'), array('controller' => 'events', 'action' => 'index', 'admin' => true));
						?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
