<?
$bloc_index = (!empty($bloc_index) ? $bloc_index : '0');
//$datas = (!empty($bloc) ? $bloc->to_array() : array());
?>
<h2><em><?= _('Bloc') ?></em></h2>
<div class="bloc ui-state-default">
    <input type="hidden" name="bloc[<?= $bloc_index ?>][sibl_id]" value="<?= $bloc->sibl_id ?>" />
    <input type="hidden" name="bloc[<?= $bloc_index ?>][sibl_published]" value="<?= $bloc->sibl_published ?>" />
	<div class="bloc_title">
		<label>
			<input placeholder="<?= _('Title') ?>" type="text" name="bloc[<?= $bloc_index ?>][sibl_title]" value="<?= $bloc->sibl_title ?>" />
		</label>
	</div>
	<div class="wys">
		<?php
		$content = (!empty($bloc) ? \Nos\Tools_Wysiwyg::prepare_renderer($bloc->wysiwygs->content) : '');
		echo \Nos\Renderer_Wysiwyg::renderer(array(
			'style' => 'width: 100%; height: 220px;',
			'name'	=> 'bloc['.$bloc_index.'][wysiwyg]',
			'value'	=> $content,
			'renderer_options' 	=> \Nos\Tools_Wysiwyg::jsOptions(array(
				'mode' 				=> 'exact',
			), $bloc, false),
		));
		?>
	</div>
	<div class="options">
		<div class="bloc_class">
			<label>
				<?= _('CSS class property') ?> <input type="text" name="bloc[<?= $bloc_index ?>][sibl_class]" value="<?= $bloc->sibl_class ?>" />
			</label>
		</div>
	</div>
</div>
