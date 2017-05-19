<div class="busers view">
<h2><?php echo __('Buser'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($buser['Buser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($buser['Buser']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip Code'); ?></dt>
		<dd>
			<?php echo h($buser['Buser']['zip_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ken Name Kan'); ?></dt>
		<dd>
			<?php echo h($buser['Buser']['ken_name_kan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City Name Kan'); ?></dt>
		<dd>
			<?php echo h($buser['Buser']['city_name_kan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town Name Kan'); ?></dt>
		<dd>
			<?php echo h($buser['Buser']['town_name_kan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail Name Kan'); ?></dt>
		<dd>
			<?php echo h($buser['Buser']['detail_name_kan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($buser['Buser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($buser['Buser']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Buser'), array('action' => 'edit', $buser['Buser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Buser'), array('action' => 'delete', $buser['Buser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $buser['Buser']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Busers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Buser'), array('action' => 'add')); ?> </li>
	</ul>
</div>
