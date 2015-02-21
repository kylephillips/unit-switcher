<?php settings_fields( 'unit-switcher-general' ); ?>
<tr valign="top">
	<th scope="row"><?php _e('Unit Switcher Version', 'unitswitcher'); ?></th>
	<td><strong><?php echo UnitSwitcher\Helpers::version(); ?></strong></td>
</tr>
<tr valign="top">
	<th scope="row"><?php _e('Save User Selection', 'unitswitcher'); ?></th>
	<td valign="top">
		<label>
			<input type="radio" name="unitswitcher_save" value="none" <?php if ( !$this->settings_repo->saveType() ) echo 'checked'; ?> ) />
			<?php _e('None', 'unitswitcher'); ?>
		</label>
		<br>
		<label>
			<input type="radio" name="unitswitcher_save" value="cookie" <?php if ( $this->settings_repo->saveType() == 'cookie' ) echo 'checked'; ?> />
			<?php _e('By Cookie', 'unitswitcher'); ?>
		</label>
		<br>
		<label>
			<input type="radio" name="unitswitcher_save" value="session" <?php if ( $this->settings_repo->saveType() == 'session' ) echo 'checked'; ?> />
			<?php _e('By Session', 'unitswitcher'); ?>
		</label>
	</td>
</tr>
<tr valign="top">
	<th scope="row"><?php _e('Display Options', 'unitswitcher'); ?></th>
	<td>
		<div class="unitswitcher-dependency">
			<label>
				<input type="checkbox" name="unitswitcher_dependencies[css]" value="true" class="unitswitcher-dependency-cb" <?php if ( $this->settings_repo->outputDependency('css') ) echo 'checked'; ?> />
				<?php _e('Output Unit Switcher CSS', 'unitswitcher'); ?>
			</label>
			<div class="unitswitcher-dependency-content">
				<p><em><?php _e('If you are compiling your own minified CSS, include the CSS below:', 'unitswitcher'); ?></em></p>
				<textarea><?php echo UnitSwitcher\Helpers::getFileContents('assets/css/styles-uncompressed.css'); ?></textarea>
			</div>
		</div>

		<div class="unitswitcher-dependency">
			<label>
				<input type="checkbox" name="unitswitcher_dependencies[js]" value="true" class="unitswitcher-dependency-cb" <?php if ( $this->settings_repo->outputDependency('js') ) echo 'checked'; ?> />
				<?php _e('Output Unit Switcher JavaScript', 'unitswitcher'); ?>
			</label>
			<div class="unitswitcher-dependency-content">
				<p><em><?php _e('If you are compiling your own minified Javascript, include the below (required for plugin functionality):', 'unitswitcher'); ?></em></p>
				<textarea><?php echo UnitSwitcher\Helpers::getFileContents('assets/js/src/unit-switcher.js') . "\n\n" . UnitSwitcher\Helpers::getFileContents('assets/js/src/dropdown.js'); ?></textarea>
			</div>
		</div>
	</td>
</tr>