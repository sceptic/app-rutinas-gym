<div id="rutinas_view">
<h2><?php echo __('Rutina'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rutina['Rutina']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($rutina['Rutina']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($rutina['Rutina']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($rutina['Rutina']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rutina['Autor']['nombre'], array('controller' => 'autors', 'action' => 'view', $rutina['Autor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ejercicioss'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rutina['Ejercicioss']['nombre'], array('controller' => 'ejercicios', 'action' => 'view', $rutina['Ejercicioss']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ejercicios Series'); ?></dt>
		<dd>
			<?php echo h($rutina['Rutina']['ejercicios_series']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Puntuacion'); ?></dt>
		<dd>
			<?php echo h($rutina['Rutina']['puntuacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rutina'), array('action' => 'edit', $rutina['Rutina']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rutina'), array('action' => 'delete', $rutina['Rutina']['id']), null, __('Are you sure you want to delete # %s?', $rutina['Rutina']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rutinas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rutina'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autors'), array('controller' => 'autors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autor'), array('controller' => 'autors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ejercicios'), array('controller' => 'ejercicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ejercicioss'), array('controller' => 'ejercicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
