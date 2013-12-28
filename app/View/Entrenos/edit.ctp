<div class="entrenos form">
<?php echo $this->Form->create('Entreno'); ?>
	<fieldset>
		<legend><?php echo __('Edit Entreno'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('rutinas');
		echo $this->Form->input('dias_semana');
		echo $this->Form->input('autor_id');
		echo $this->Form->input('puntuacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Entreno.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Entreno.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entrenos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Autors'), array('controller' => 'autors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autor'), array('controller' => 'autors', 'action' => 'add')); ?> </li>
	</ul>
</div>
