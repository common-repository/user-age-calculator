<?php

$widget_options          = get_option('uac_widget_options');
$uac_title1              = ! empty( $widget_options['uac_title1'] ) ? $widget_options['uac_title1'] : 'Calculate Your Age To Current Date';
$uac_title1_font_size    = ! empty( $widget_options['uac_title1_font_size'] ) ? $widget_options['uac_title1_font_size'] : 16;
$uac_title1_color        = ! empty( $widget_options['uac_title1_color'] ) ? $widget_options['uac_title1_color'] : '#000';
$uac_label1              = ! empty( $widget_options['uac_label1'] ) ? $widget_options['uac_label1'] : 'Your Birth Date';
$uac_label1_font_size    = ! empty( $widget_options['uac_label1_font_size'] ) ? $widget_options['uac_label1_font_size'] : 16;
$uac_label1_color        = ! empty( $widget_options['uac_label1_color'] ) ? $widget_options['uac_label1_color'] : '#000';
$uac_time_label1         = ! empty( $widget_options['uac_time_label1'] ) ? $widget_options['uac_time_label1'] : 'Time of Birth';
$uac_time_font_size1     = ! empty( $widget_options['uac_time_font_size1'] ) ? $widget_options['uac_time_font_size1'] : 16;
$uac_time_color1         = ! empty( $widget_options['uac_time_color1'] ) ? $widget_options['uac_time_color1'] : '#000';
$uac_time_label2         = ! empty( $widget_options['uac_time_label2'] ) ? $widget_options['uac_time_label2'] : 'Time of Birth';
$uac_time_font_size2     = ! empty( $widget_options['uac_time_font_size2'] ) ? $widget_options['uac_time_font_size2'] : 14;
$uac_time_color2         = ! empty( $widget_options['uac_time_color2'] ) ? $widget_options['uac_time_color2'] : '#000';
$uac_dropdown1_font_size = ! empty( $widget_options['uac_dropdown1_font_size'] ) ? $widget_options['uac_dropdown1_font_size'] : 14;
$uac_dropdown1_color     = ! empty( $widget_options['uac_dropdown1_color'] ) ? $widget_options['uac_dropdown1_color'] : '#000';
$uac_show_time1          = ! empty( $widget_options['uac_show_time1'] ) ? $widget_options['uac_show_time1'] : 2;
$uac_show_h1             = ! empty( $widget_options['uac_show_h1'] ) ? $widget_options['uac_show_h1'] : 1;
$uac_show_f1             = ! empty( $widget_options['uac_show_f1'] ) ? $widget_options['uac_show_f1'] : 1;
$uac_show_b1             = ! empty( $widget_options['uac_show_b1'] ) ? $widget_options['uac_show_b1'] : 1;
$uac_border1_color       = ! empty( $widget_options['uac_border1_color'] ) ? $widget_options['uac_border1_color'] : '#f0f0f0';
$uac_bgcolor1            = ! empty( $widget_options['uac_bgcolor1'] ) ? $widget_options['uac_bgcolor1'] : '#fff';
$uac_hf_bgcolor1         = ! empty( $widget_options['uac_hf_bgcolor1'] ) ? $widget_options['uac_hf_bgcolor1'] : '#f0f0f0';
$uac_title2              = ! empty( $widget_options['uac_title2'] ) ? $widget_options['uac_title2'] : 'Calculate Your Age To Given Date';
$uac_title2_font_size    = ! empty( $widget_options['uac_title2_font_size'] ) ? $widget_options['uac_title2_font_size'] : 16;
$uac_title2_color        = ! empty( $widget_options['uac_title2_color'] ) ? $widget_options['uac_title2_color'] : '#000';
$uac_label21             = ! empty( $widget_options['uac_label21'] ) ? $widget_options['uac_label21'] : 'Your Birth Date (From Date)';
$uac_label21_font_size   = ! empty( $widget_options['uac_label21_font_size'] ) ? $widget_options['uac_label21_font_size'] : 16;
$uac_label21_color       = ! empty( $widget_options['uac_label21_color'] ) ? $widget_options['uac_label21_color'] : '#000';
$uac_label22             = ! empty( $widget_options['uac_label22'] ) ? $widget_options['uac_label22'] : 'To Date';
$uac_label22_font_size   = ! empty( $widget_options['uac_label22_font_size'] ) ? $widget_options['uac_label22_font_size'] : 16;
$uac_label22_color       = ! empty( $widget_options['uac_label22_color'] ) ? $widget_options['uac_label22_color'] : '#000';
$uac_dropdown2_font_size = ! empty( $widget_options['uac_dropdown2_font_size'] ) ? $widget_options['uac_dropdown2_font_size'] : 14;
$uac_dropdown2_color     = ! empty( $widget_options['uac_dropdown2_color'] ) ? $widget_options['uac_dropdown2_color'] : '#000';
$uac_show_time2          = ! empty( $widget_options['uac_show_time2'] ) ? $widget_options['uac_show_time2'] : 1;
$uac_show_h2             = ! empty( $widget_options['uac_show_h2'] ) ? $widget_options['uac_show_h2'] : 1;
$uac_show_f2             = ! empty( $widget_options['uac_show_f2'] ) ? $widget_options['uac_show_f2'] : 1;
$uac_show_b2             = ! empty( $widget_options['uac_show_b2'] ) ? $widget_options['uac_show_b2'] : 1;
$uac_border2_color       = ! empty( $widget_options['uac_border2_color'] ) ? $widget_options['uac_border2_color'] : '#f0f0f0';
$uac_bgcolor2            = ! empty( $widget_options['uac_bgcolor2'] ) ? $widget_options['uac_bgcolor2'] : '#fff';
$uac_hf_bgcolor2         = ! empty( $widget_options['uac_hf_bgcolor2'] ) ? $widget_options['uac_hf_bgcolor2'] : '#f0f0f0';

?>
<div class="wrap uac-wrap">
	<h2>User Age Calculator</h2>

	<div id="uac-message"></div>

	<h2 class="nav-tab-wrapper uac-tabs">
		<a class="nav-tab <?php echo ( 1 === $active_tab ) ? 'nav-tab-active' : ''; ?>" href="<?php echo admin_url( 'options-general.php?page=' . self::$plugin_slug ); ?>" id="uac-tab1">
			<?php echo __( 'Calculate To Current Date', 'user-age-calculator' ); ?>
		</a>
		<a class="nav-tab <?php echo ( 2 === $active_tab ) ? 'nav-tab-active' : ''; ?>" href="<?php echo admin_url( 'options-general.php?page=' . self::$plugin_slug ); ?>" id="uac-tab2">
			<?php echo __( 'Calculate To Given Date', 'user-age-calculator' ); ?>
		</a>
		<a class="nav-tab <?php echo ( 3 === $active_tab ) ? 'nav-tab-active' : ''; ?>" href="<?php echo admin_url( 'options-general.php?page=' . self::$plugin_slug ); ?>" id="uac-tab3">
			<?php echo __( 'About', 'user-age-calculator' ); ?>
		</a>
	</h2>

	<form action="options-general.php?page=user-age-calculator" method="post">

		<?php wp_nonce_field( self::$plugin_slug, self::$plugin_slug . '-nonce' ); ?>

		<input type="hidden" name="uac_current_tab" id="uac_current_tab" value="1">

		<section class="uac-section uac-settings">
			<p>
				<b>Use the following shortcode to display age calculator</b>
			</p>

			<input type="text" class="uac-shortcode-input" value="[user-age-calculator template=1]" id="uac-shortcode1">
			<button class="button" onclick="uac_copy_shortcode( 'uac-shortcode1' )">Copy Shortcode</button>
			<div class="uac-spacer-10"></div>

			<div class="uac-admin-container">
				<div class="uac-admin-left">
					<div class="uac-spacer-10"></div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Title</b></div>

						<div class="uac-settings-right">
							<input type="text" name="uac_title1" id="uac_title1" value="<?php echo esc_attr( $uac_title1 ); ?>">

							<select name="uac_title1_font_size" id="uac_title1_font_size">
								<optgroup label="Font Size">
									<?php
									for ( $i = 5; $i <= 50; $i++ ) {
										printf( "<option value='%s' %s>%s</option>", $i, selected( $i, $uac_title1_font_size ), $i );
									}
									?>
								</optgroup>
							</select>

							<input class="widefat" type="text" name="uac_title1_color" id="uac_title1_color" value="<?php echo esc_attr( $uac_title1_color ); ?>" data-default-color="#000" />
						</div>
					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Label 1</b></div>

						<div class="uac-settings-right">
							<input type="text" name="uac_label1" id="uac_label1" value="<?php echo esc_attr( $uac_label1 ); ?>">

							<select name="uac_label1_font_size" id="uac_label1_font_size">
								<optgroup label="Font Size">
									<?php
									for ( $i = 5; $i <= 50; $i++ ) {
										printf( "<option value='%s' %s>%s</option>", $i, selected( $i, $uac_label1_font_size ), $i );
									}
									?>
								</optgroup>
							</select>

							<input class="widefat" type="text" name="uac_label1_color" id="uac_label1_color" value="<?php echo esc_attr( $uac_label1_color ); ?>" data-default-color="#000" />
						</div>
					</div>

					<div class="uac-time-unit-admin">
						<div class="uac-settings-section">
							<div class="uac-settings-left"><b>Label 2</b></div>

							<div class="uac-settings-right">
								<input type="text" name="uac_time_label1" id="uac_time_label1" value="<?php echo esc_attr( $uac_time_label1 ); ?>">

								<select name="uac_time_font_size1" id="uac_time_font_size1">
									<optgroup label="Font Size">
										<?php
										for ( $i = 5; $i <= 50; $i++ ) {
											printf( "<option value='%s' %s>%s</option>", $i, selected( $i, $uac_time_font_size1 ), $i );
										}
										?>
									</optgroup>
								</select>

								<input class="widefat" type="text" name="uac_time_color1" id="uac_time_color1" value="<?php echo esc_attr( $uac_time_color1 ); ?>" data-default-color="#000" />
							</div>
						</div>
					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Dropdown</b></div>

						<div class="uac-settings-right">
							<select name="uac_dropdown1_font_size" id="uac_dropdown1_font_size">
								<optgroup label="Font Size">
									<?php
									for ( $i = 5; $i <= 50; $i++ ) {
										printf( "<option value='%s' %s>%s</option>", $i, selected( $i, $uac_dropdown1_font_size ), $i );
									}
									?>
								</optgroup>
							</select>

							<input class="widefat" type="text" name="uac_dropdown1_color" id="uac_dropdown1_color" value="<?php echo esc_attr( $uac_dropdown1_color ); ?>" data-default-color="#000" />
						</div>
					</div>

					<div class="uac-settings-section uac-time-unit-section">
						<div class="uac-settings-left"><b>Show Time Units</b></div>

						<div class="uac-settings-right">
							<input type="radio" name="uac_show_time1" value="1" id="uac_show_time1" <?php echo checked( $uac_show_time1, 1 ); ?>>
							<label for="uac_show_time1">Show</label>

							<input type="radio" name="uac_show_time1" value="2" id="uac_show_time12" <?php echo checked( $uac_show_time1, 2 ); ?>>
							<label for="uac_show_time12">Hide</label>
						</div>

					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Show Header</b></div>

						<div class="uac-settings-right">
							<input type="radio" name="uac_show_h1" value="1" id="uac_show_h11" <?php echo checked( $uac_show_h1, 1 ); ?>>
							<label for="uac_show_h11">Show</label>

							<input type="radio" name="uac_show_h1" value="2" id="uac_show_h12" <?php echo checked( $uac_show_h1, 2 ); ?>>
							<label for="uac_show_h12">Hide</label>
						</div>

					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Show Footer</b></div>

						<div class="uac-settings-right">
							<input type="radio" name="uac_show_f1" value="1" id="uac_show_f11" <?php echo checked( $uac_show_f1, 1 ); ?>>
							<label for="uac_show_f11">Show</label>

							<input type="radio" name="uac_show_f1" value="2" id="uac_show_f12" <?php echo checked( $uac_show_f1, 2 ); ?>>
							<label for="uac_show_f12">Hide</label>
						</div>

					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Show Borders</b></div>

						<div class="uac-settings-right">
							<input type="radio" name="uac_show_b1" value="1" id="uac_show_b11" <?php echo checked( $uac_show_b1, 1 ); ?>>
							<label for="uac_show_b11">Show</label>

							<input type="radio" name="uac_show_b1" value="2" id="uac_show_b12" <?php echo checked( $uac_show_b1, 2 ); ?>>
							<label for="uac_show_b12">Hide</label>
						</div>

					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Border Color</b></div>

						<div class="uac-settings-right">
							<input class="widefat" type="text" name="uac_border1_color" id="uac_border1_color" value="<?php echo esc_attr( $uac_border1_color ); ?>" data-default-color="#f0f0f0" />
						</div>
					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Background Color</b></div>

						<div class="uac-settings-right">
							<input class="widefat" type="text" name="uac_bgcolor1" id="uac_bgcolor1" value="<?php echo esc_attr( $uac_bgcolor1 ); ?>" data-default-color="#ffffff" />
						</div>
					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Header/Footer<br/> Background Color</b></div>

						<div class="uac-settings-right">
							<input class="widefat" type="text" name="uac_hf_bgcolor1" id="uac_hf_bgcolor1" value="<?php echo esc_attr( $uac_hf_bgcolor1 ); ?>" data-default-color="#f0f0f0" />
						</div>
					</div>

					<div class="uac-spacer-10"></div>

					<input type="submit" value="Reset to Default" class="button" id="uac-reset-button1" name="uac-reset-button">
					<input type="submit" value="Save Settings" class="uac-submit-button">

				</div>

				<div id="uac-preview" class="uac-admin-right">
					<div class="heading"><b>Preview</b></div>

					<?php
					require __DIR__ . '/user-age-calculator-template1.php';
					?>
				</div>
			</div>
		</section>

		<section class="uac-section uac-settings">
			<p>
				<b>Use the following shortcode to display age calculator</b>
			</p>

			<input type="text" class="uac-shortcode-input" value="[user-age-calculator template=2]" id="uac-shortcode2">
			<button class="button" onclick="uac_copy_shortcode( 'uac-shortcode2' )">Copy Shortcode</button>

			<div class="uac-admin-container">
				<div class="uac-admin-left">

					<div class="uac-spacer-10"></div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Title</b></div>

						<div class="uac-settings-right">
							<input type="text" name="uac_title2" id="uac_title2" value="<?php echo esc_attr( $uac_title2 ); ?>">

							<select name="uac_title2_font_size" id="uac_title2_font_size">
								<optgroup label="Font Size">
									<?php
									for ( $i = 5; $i <= 50; $i++ ) {
										printf( "<option value='%s' %s>%s</option>", $i, selected( $uac_title2_font_size, $i ), $i );
									}
									?>
								</optgroup>
							</select>

							<input class="widefat" type="text" name="uac_title2_color" id="uac_title2_color" value="<?php echo esc_attr( $uac_title2_color ); ?>" data-default-color="#000" />
						</div>
					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Label 1</b></div>

						<div class="uac-settings-right">
							<input type="text" name="uac_label21" id="uac_label21" value="<?php echo esc_attr( $uac_label21 ); ?>">

							<select name="uac_label21_font_size" id="uac_label21_font_size">
								<optgroup label="Font Size">
									<?php
									for ( $i = 5; $i <= 50; $i++ ) {
										printf( "<option value='%s' %s>%s</option>", $i, selected( $uac_label21_font_size, $i ), $i );
									}
									?>
								</optgroup>
							</select>

							<input class="widefat" type="text" name="uac_label21_color" id="uac_label21_color" value="<?php echo esc_attr( $uac_label21_color ); ?>" data-default-color="#000" />
						</div>
					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Label 2</b></div>

						<div class="uac-settings-right">
							<input type="text" name="uac_label22" id="uac_label22" value="<?php echo esc_attr( $uac_label22 ); ?>">

							<select name="uac_label22_font_size" id="uac_label22_font_size">
								<optgroup label="Font Size">
									<?php
									for ( $i = 5; $i <= 50; $i++ ) {
										printf( "<option value='%s' %s>%s</option>", $i, selected( $uac_label22_font_size, $i ), $i );
									}
									?>
								</optgroup>
							</select>

							<input class="widefat" type="text" name="uac_label22_color" id="uac_label22_color" value="<?php echo esc_attr( $uac_label22_color ); ?>" data-default-color="#000" />
						</div>
					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Dropdown</b></div>

						<div class="uac-settings-right">
							<select name="uac_dropdown2_font_size" id="uac_dropdown2_font_size">
								<optgroup label="Font Size">
									<?php
									for ( $i = 5; $i <= 50; $i++ ) {
										printf( "<option value='%s' %s>%s</option>", $i, selected( $uac_dropdown2_font_size, $i ), $i );
									}
									?>
								</optgroup>
							</select>

							<input class="widefat" type="text" name="uac_dropdown2_color" id="uac_dropdown2_color" value="<?php echo esc_attr( $uac_dropdown2_color ); ?>" data-default-color="#000" />
						</div>
					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Show Header</b></div>

						<div class="uac-settings-right">
							<input type="radio" name="uac_show_h2" value="1" id="uac_show_h21" <?php echo checked( $uac_show_h2, 1 ); ?>>
							<label for="uac_show_h21">Show</label>

							<input type="radio" name="uac_show_h2" value="2" id="uac_show_h22" <?php echo checked( $uac_show_h2, 2 ); ?>>
							<label for="uac_show_h22">Hide</label>
						</div>

					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Show Footer</b></div>

						<div class="uac-settings-right">
							<input type="radio" name="uac_show_f2" value="1" id="uac_show_f21" <?php echo checked( $uac_show_f2, 1 ); ?>>
							<label for="uac_show_f21">Show</label>

							<input type="radio" name="uac_show_f2" value="2" id="uac_show_f22" <?php echo checked( $uac_show_f2, 2 ); ?>>
							<label for="uac_show_f22">Hide</label>
						</div>

					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Show Borders</b></div>

						<div class="uac-settings-right">
							<input type="radio" name="uac_show_b2" value="1" id="uac_show_b21" <?php echo checked( $uac_show_b2, 1 ); ?>>
							<label for="uac_show_b21">Show</label>

							<input type="radio" name="uac_show_b2" value="2" id="uac_show_b22" <?php echo checked( $uac_show_b2, 2 ); ?>>
							<label for="uac_show_b22">Hide</label>
						</div>

					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Border Color</b></div>

						<div class="uac-settings-right">
							<input class="widefat" type="text" name="uac_border2_color" id="uac_border2_color" value="<?php echo esc_attr( $uac_border2_color ); ?>" data-default-color="#f0f0f0" />
						</div>
					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Background Color</b></div>

						<div class="uac-settings-right">
							<input class="widefat" type="text" name="uac_bgcolor2" id="uac_bgcolor2" value="<?php echo esc_attr( $uac_bgcolor2 ); ?>" data-default-color="#ffffff" />
						</div>
					</div>

					<div class="uac-settings-section">
						<div class="uac-settings-left"><b>Header/Footer<br/> Background Color</b></div>

						<div class="uac-settings-right">
							<input class="widefat" type="text" name="uac_hf_bgcolor2" id="uac_hf_bgcolor2" value="<?php echo esc_attr( $uac_hf_bgcolor2 ); ?>" data-default-color="#f0f0f0" />
						</div>
					</div>

					<div class="uac-spacer-10"></div>

					<input type="submit" value="Reset to Default" class="button" id="uac-reset-button2" name="uac-reset-button">
					<input type="submit" value="Save Settings" class="uac-submit-button">
				</div>

				<div id="uac-preview" class="uac-admin-right">
					<div class="heading"><b>Preview</b></div>

					<?php
					require __DIR__ . '/user-age-calculator-template2.php';
					?>
				</div>

			</div>
		</section>

	</form>

	<section class="uac-section">
		<div class="uac-about">

			<p><b><?php echo __( 'User age calculator', 'user-age-calculator' ); ?></b></p>

			<p><?php echo __( 'Version: 1.0.1', 'user-age-calculator' ); ?></p>

			<p><a href="https://websolutionideas.com/" target="_blank"><?php echo __( 'Author\'s Website', 'user-age-calculator' ); ?></a></p>

			<p><?php echo __( 'If you have any feedback please tell us. We love to improve our service.', 'user-age-calculator' ); ?></p>

			<p><a href="https://websolutionideas.com/provide-feedback/" target="_blank"><?php echo __( 'Provide Feedback', 'user-age-calculator' ); ?></a></p>
		</div>

	</section>

	<div id="uac-instructions">
		<h4 class="heading">Instructions</h4>
		<ul>
			<li>In the navigation menu, click "Posts" or "Pages".</li>
			<li>Edit the Post or Page where you want to add the age calculator widget.</li>
			<li>Paste the shortcode at your preferred location inside the text editor.</li>
			<li>Click "Update" to save your changes.</li>
		</ul>
	</div>
</div>

<script language="JavaScript">
	<?php
	$current_tab = 1;
	if ( ! empty( $_POST['uac_current_tab'] ) && intval( $_POST['uac_current_tab'] ) >=1 ) {
		$current_tab = intval( $_POST['uac_current_tab'] );
	}
	?>
	var current_tab = '<?php echo intval( $current_tab ); ?>';

	jQuery( document ).ready(function() {
		jQuery( '#uac-tab1, #uac-tab2, #uac-tab3' ).removeClass('nav-tab-active');
		jQuery( '#uac-tab' + current_tab ).click();
	});

</script>


