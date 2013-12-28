<div class="rutinas index">
	<h2><?php echo __('Rutinas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('autor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ejercicios_ids'); ?></th>
			<th><?php echo $this->Paginator->sort('ejercicios_series'); ?></th>
			<th><?php echo $this->Paginator->sort('puntuacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rutinas as $rutina): ?>
	<tr>
		<td><?php echo h($rutina['Rutina']['id']); ?>&nbsp;</td>
		<td><?php echo h($rutina['Rutina']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($rutina['Rutina']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($rutina['Rutina']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rutina['Autor']['nombre'], array('controller' => 'autors', 'action' => 'view', $rutina['Autor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rutina['Ejercicioss']['nombre'], array('controller' => 'ejercicios', 'action' => 'view', $rutina['Ejercicioss']['id'])); ?>
		</td>
		<td><?php echo h($rutina['Rutina']['ejercicios_series']); ?>&nbsp;</td>
		<td><?php echo h($rutina['Rutina']['puntuacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rutina['Rutina']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rutina['Rutina']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rutina['Rutina']['id']), null, __('Are you sure you want to delete # %s?', $rutina['Rutina']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Rutina'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Autors'), array('controller' => 'autors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autor'), array('controller' => 'autors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ejercicios'), array('controller' => 'ejercicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ejercicioss'), array('controller' => 'ejercicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
