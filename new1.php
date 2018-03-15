<div class="wp-full-overlay expanded">
	<form id="customize-controls" class="wrap wp-full-overlay-sidebar">
		<div id="customize-header-actions" class="wp-full-overlay-header">
			
			<div id="customize-save-button-wrapper" class="customize-save-button-wrapper" >
				
				<button id="publish-settings" class="publish-settings button-primary button dashicons dashicons-admin-generic" aria-label="<?php esc_attr_e( 'Publish Settings' ); ?>" aria-expanded="false" disabled></button>
			</div>
			<span class="spinner"></span>
			<button type="button" class="customize-controls-preview-toggle">
				<span class="controls"><?php _e( 'Customize' ); ?></span>
				<span class="preview"><?php _e( 'Preview' ); ?></span>
			</button>
			<a class="customize-controls-close" href="<?php echo esc_url( $wp_customize->get_return_url() ); ?>">
				<span class="screen-reader-text"><?php _e( 'Close the Customizer and go back to the previous page' ); ?></span>
			</a>
		</div>

		<div id="customize-sidebar-outer-content">
			<div id="customize-outer-theme-controls">
				<ul class="customize-outer-pane-parent"><?php // Outer panel and sections are not implemented, but its here as a placeholder to avoid any side-effect in api.Section. ?></ul>
			</div>
		</div>

		
		</div>
	</form>
	<div id="customize-preview" class="wp-full-overlay-main"></div>