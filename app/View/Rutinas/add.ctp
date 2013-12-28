<div class="rutinas form">
<?php echo $this->Form->create('Rutina'); ?>
	<fieldset>
		<legend><?php echo __('Add Rutina'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('tipo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('autor_id');
		echo $this->Form->input('ejercicios_ids');
		echo $this->Form->input('ejercicios_series');
		echo $this->Form->input('puntuacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rutinas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Autors'), array('controller' => 'autors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autor'), array('controller' => 'autors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ejercicios'), array('controller' => 'ejercicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ejercicioss'), array('controller' => 'ejercicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
