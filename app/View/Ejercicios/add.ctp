<div class="ejercicios form">
	dasdsadsa
<?php echo $this->Form->create('Ejercicio',array('type' => 'file')); ?>
	<fieldset>
		<legend>Añadir ejercicios</legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('img', array('type' => 'file'));
		echo $this->Form->input('autor_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ejercicios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Autors'), array('controller' => 'autors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autor'), array('controller' => 'autors', 'action' => 'add')); ?> </li>
	</ul>
</div>
