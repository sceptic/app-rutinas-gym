<div class="ejercicios form">
<?php echo $this->Form->create('Ejercicio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ejercicio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('img');
		echo $this->Form->input('autor_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ejercicio.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Ejercicio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ejercicios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Autors'), array('controller' => 'autors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autor'), array('controller' => 'autors', 'action' => 'add')); ?> </li>
	</ul>
</div>
