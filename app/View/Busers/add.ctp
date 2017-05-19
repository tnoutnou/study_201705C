<div class="busers form">
<?php echo $this->Form->create('Buser'); ?>
	<fieldset>
		<legend><?php echo __('Add Buser'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('ken_name_kan');
		echo $this->Form->input('city_name_kan');
		echo $this->Form->input('town_name_kan');
		echo $this->Form->input('detail_name_kan');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Busers'), array('action' => 'index')); ?></li>
	</ul>
</div>
