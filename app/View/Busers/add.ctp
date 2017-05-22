<?php echo $this->Html->script( 'jquery-git.js'); ?>
<?php echo $this->Html->script( 'zip.js'); ?>
<?php echo $this->Html->css( 'custom.css'); ?>

<div class="busers form">
<?php echo $this->Form->create('Buser'); ?>
	<fieldset>
		<legend><?php echo __('Add Buser'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('zip_code');
		echo $this->Form->button('郵便番号から住所', array('type' => 'button','id' => 'tran-btn'));
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

<!-- ポップアップ用の背景とimg -->
<div id="popup-background">
</div>

<div id="popup-sel">
	<p style="font-style:italic">複数の候補があります。選択して下さい。</p>
	<select id="zip-sel" size=5 label="都道府県">
	<!--	<option>1</option>	-->
	</select>
</div>

