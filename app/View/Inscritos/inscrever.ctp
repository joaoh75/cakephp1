<div id="page">
		<div id="content">
			<div class="post">
<?php echo $this->Form->create('Inscrito'); ?>
	<fieldset>
		<legend><?php echo ('Inscrição'); ?></legend>
	<?php
		echo $this->Form->input('nome');			
		echo $this->Form->input('email');
		echo $this->Form->input('telefone');
		echo $this->Form->input('endereco');
		echo $this->Form->input('cidade');
		echo $this->Form->input('estado');
		echo $this->Form->input('cep');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>

			<div style="clear: both;">&nbsp;</div>
		</div>		
		<div style="clear: both;">&nbsp;</div>
	</div>

