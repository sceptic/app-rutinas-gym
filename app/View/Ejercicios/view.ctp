<div class="ejercicios view">
<h2><?php echo __('Ejercicio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ejercicio['Ejercicio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($ejercicio['Ejercicio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($ejercicio['Ejercicio']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo h($ejercicio['Ejercicio']['img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ejercicio['Autor']['nombre'], array('controller' => 'autors', 'action' => 'view', $ejercicio['Autor']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ejercicio'), array('action' => 'edit', $ejercicio['Ejercicio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ejercicio'), array('action' => 'delete', $ejercicio['Ejercicio']['id']), null, __('Are you sure you want to delete # %s?', $ejercicio['Ejercicio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ejercicios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ejercicio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autors'), array('controller' => 'autors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autor'), array('controller' => 'autors', 'action' => 'add')); ?> </li>
	</ul>
</div>
