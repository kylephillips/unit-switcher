<?php settings_fields( 'unit-switcher-units' ); ?>
<tr valign="top">
	<td colspan="2" style="padding:0;">
		<div class="unitswitcher-units">
			<ul class="unitswitcher-units-header">
				<li><?php _e('Primary Unit', 'unitswitcher'); ?> (<span>X</span>)</li>
				<li><?php _e('Alternate Units', 'unitswitcher'); ?></li>
			</ul>

			<ul class="unitswitcher-unit-list">
				<li>
					<table class="unitswitcher-unit-table">
						<tr>
							<td>
								<div class="unitswitcher-defaults">
									<input type="text" placeholder="<?php _e('Name', 'unitswitcher'); ?>">
									<input type="text" placeholder="<?php _e('Singular Name', 'unitswitcher'); ?>">
								</div>
							</td>
							<td>
								<ul class="unitswitcher-alternates">
									<li>
										<div class="formula">
											<input type="text" class="unitswitcher-formula" placeholder="<?php _e('Formula', 'unitswitcher'); ?>">
											<span class="equals">=</span>
										</div>
										<div class="alternates">
											<input type="text" placeholder="<?php _e('Name', 'unitswitcher'); ?>">
											<input type="text" placeholder="<?php _e('Singular Name', 'unitswitcher'); ?>">
										</div>
										<div class="unitswitcher-add-remove-unit unitswitcher-btn-group">
											<a href="#" class="unitswitcher-remove-alternate">-</a>
											<a href="#" class="unitswitcher-add-alternate">+</a>
										</div>
									</li>
								</ul>
							</td>
						</tr>
					</table>
					<div class="unitswitcher-add-remove-unit unitswitcher-btn-group">
						<a href="#" class="unitswitcher-remove-unit">-</a>
						<a href="#" class="unitswitcher-add-unit">+</a>
					</div>
				</li>

			</ul>
		</div>
	</td>
</tr>