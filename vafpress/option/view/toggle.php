<tr class="vp-toggle" <?php echo VP_Util_Text::print_if_exists($validation, 'data-vp-validation="%s"'); ?> id="<?php echo $name; ?>">
	<td class="label">
		<label>
			<?php echo $label; ?>
			<?php VP_Util_Text::print_if_exists($description, '<div class="description">%s</div>'); ?>
		</label>
	</td>
	<td class="fields">
		<label>
			<input <?php if( $value ) echo 'checked'; ?> type="checkbox" name="<?php echo $name; ?>" value="1" />
			<span></span>
		</label>
		<div class="validation-msgs"><ul></ul></div>
	</td>
</tr>