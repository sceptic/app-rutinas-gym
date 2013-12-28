<div class="entrenos view">
<h2><?php echo __('Entreno'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entreno['Entreno']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($entreno['Entreno']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rutinas'); ?></dt>
		<dd>
			<?php echo h($entreno['Entreno']['rutinas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dias Semana'); ?></dt>
		<dd>
			<?php echo h($entreno['Entreno']['dias_semana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entreno['Autor']['nombre'], array('controller' => 'autors', 'action' => 'view', $entreno['Autor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Puntuacion'); ?></dt>
		<dd>
			<?php echo h($entreno['Entreno']['puntuacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entreno'), array('action' => 'edit', $entreno['Entreno']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entreno'), array('action' => 'delete', $entreno['Entreno']['id']), null, __('Are you sure you want to delete # %s?', $entreno['Entreno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entrenos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entreno'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Autors'), array('controller' => 'autors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autor'), array('controller' => 'autors', 'action' => 'add')); ?> </li>
	</ul>
</div>
