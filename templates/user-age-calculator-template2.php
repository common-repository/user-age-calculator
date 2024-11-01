<?php
$widget_options          = get_option('uac_widget_options');

$uac_title2              = ! empty( $widget_options['uac_title2'] ) ? sanitize_text_field( $widget_options['uac_title2'] ) : 'Calculate Your Age To Given Date';
$uac_title2_font_size    = ! empty( $widget_options['uac_title2_font_size'] ) ? intval( $widget_options['uac_title2_font_size'] ) : 16;
$uac_title2_color        = ! empty( $widget_options['uac_title2_color'] ) ? sanitize_text_field( $widget_options['uac_title2_color'] ) : '#000';
$uac_label21             = ! empty( $widget_options['uac_label21'] ) ? sanitize_text_field( $widget_options['uac_label21'] ) : 'Your Birth Date (From Date)';
$uac_label21_font_size   = ! empty( $widget_options['uac_label21_font_size'] ) ? intval( $widget_options['uac_label21_font_size'] ) : 16;
$uac_label21_color       = ! empty( $widget_options['uac_label21_color'] ) ? sanitize_text_field( $widget_options['uac_label21_color'] ) : '#000';
$uac_label22             = ! empty( $widget_options['uac_label22'] ) ? sanitize_text_field( $widget_options['uac_label22'] ) : 'To Date';
$uac_label22_font_size   = ! empty( $widget_options['uac_label22_font_size'] ) ? intval( $widget_options['uac_label22_font_size'] ) : 16;
$uac_label22_color       = ! empty( $widget_options['uac_label22_color'] ) ? sanitize_text_field( $widget_options['uac_label22_color'] ) : '#000';
$uac_dropdown2_font_size = ! empty( $widget_options['uac_dropdown2_font_size'] ) ? intval( $widget_options['uac_dropdown2_font_size'] ) : 14;
$uac_dropdown2_color     = ! empty( $widget_options['uac_dropdown2_color'] ) ? sanitize_text_field( $widget_options['uac_dropdown2_color'] ) : '#000';
$uac_show_h2             = ! empty( $widget_options['uac_show_h2'] ) ? intval( $widget_options['uac_show_h2'] ) : 1;
$uac_show_f2             = ! empty( $widget_options['uac_show_f2'] ) ? intval( $widget_options['uac_show_f2'] ) : 1;
$uac_show_b2             = ! empty( $widget_options['uac_show_b2'] ) ? intval( $widget_options['uac_show_b2'] ) : 1;
$uac_border2_color       = ! empty( $widget_options['uac_border2_color'] ) ? sanitize_text_field( $widget_options['uac_border2_color'] ) : '#f0f0f0';
$uac_bgcolor2            = ! empty( $widget_options['uac_bgcolor2'] ) ? sanitize_text_field( $widget_options['uac_bgcolor2'] ) : '#fff';
$uac_hf_bgcolor2         = ! empty( $widget_options['uac_hf_bgcolor2'] ) ? sanitize_text_field( $widget_options['uac_hf_bgcolor2'] ) : '#f0f0f0';
$random_number           = rand( 1, 9999 );

$header_css = "background-color:{$uac_hf_bgcolor2};font-size:{$uac_title2_font_size}px;color:{$uac_title2_color};border-bottom: 1px solid {$uac_border2_color};";
if ( 2 === $uac_show_h2 ) {
	$header_css .= "display:none;";
}

$label21_css = "font-size:{$uac_label21_font_size}px;color:{$uac_label21_color}";
$label22_css = "font-size:{$uac_label22_font_size}px;color:{$uac_label22_color}";
$input_css   = "font-size:{$uac_dropdown2_font_size}px;line-height:{$uac_dropdown2_font_size}px;color:{$uac_dropdown2_color}";

$footer_css = "background-color:unset;";
if ( 1 === $uac_show_f2 ) {
	$footer_css = "background-color:{$uac_hf_bgcolor2};";
}
$footer_css .= "border-top: 1px solid {$uac_border2_color};";

$widget_css = "border:unset;";
if ( 1 === $uac_show_b2 ) {
	$widget_css = "border:1px solid {$uac_border2_color};";
}

$widget_css .= "background-color:{$uac_bgcolor2}";

?>
<p>
	<div id="uac-widget" class="uac-widget2" style="<?php echo esc_html( $widget_css ); ?>">

		<div class="uac-header2" style="<?php echo esc_html( $header_css ); ?>">
			<?php echo esc_html( $uac_title2 ); ?>
		</div>

		<div class="uac-dob-container1">

			<div class="label" style="<?php echo esc_html( $label21_css ); ?>">
				<?php echo esc_html( $uac_label21 ); ?>
			</div>

			<select id="birth-date2-<?php echo intval( $random_number ); ?>" class="uac-birth-date" style="<?php echo esc_html( $input_css ); ?>">
				<?php for ( $i = 1; $i <= 31; $i++ ) { ?>
					<option value="<?php echo intval( $i ); ?>">
						<?php if ( $i < 10) { echo '0'; } echo esc_html( $i ); ?>
					</option>
				<?php } ?>
			</select>

			<select id="birth-month2-<?php echo intval( $random_number ); ?>" class="uac-birth-month" style="<?php echo esc_html( $input_css ); ?>">
				<option value="1"><?php echo __( 'January', 'user-age-calculator' ); ?></option>
				<option value="2"><?php echo __( 'February', 'user-age-calculator' ); ?></option>
				<option value="3"><?php echo __( 'March', 'user-age-calculator' ); ?></option>
				<option value="4"><?php echo __( 'April', 'user-age-calculator' ); ?></option>
				<option value="5"><?php echo __( 'May', 'user-age-calculator' ); ?></option>
				<option value="6"><?php echo __( 'June', 'user-age-calculator' ); ?></option>
				<option value="7"><?php echo __( 'July', 'user-age-calculator' ); ?></option>
				<option value="8"><?php echo __( 'August', 'user-age-calculator' ); ?></option>
				<option value="9"><?php echo __( 'September', 'user-age-calculator' ); ?></option>
				<option value="10"><?php echo __( 'October', 'user-age-calculator' ); ?></option>
				<option value="11"><?php echo __( 'November', 'user-age-calculator' ); ?></option>
				<option value="12"><?php echo __( 'December', 'user-age-calculator' ); ?></option>
			</select>

			<input id="birth-year2-<?php echo intval( $random_number ); ?>" type="text" class="uac-birth-year" placeholder="Enter year" style="<?php echo esc_html( $input_css ); ?>" />
		</div>

		<div class="uac-dob-container2">

			<div class="label" style="<?php echo esc_html( $label22_css ); ?>">
				<?php echo esc_html( $uac_label22 ); ?>
			</div>

			<select id="to-date2-<?php echo intval( $random_number ); ?>" class="uac-birth-date" style="<?php echo esc_html( $input_css ); ?>">
				<?php for ( $i = 1; $i <= 31; $i++ ) { ?>
					<option value="<?php echo intval( $i ); ?>">
						<?php if ( $i < 10) { echo '0'; } echo esc_html( $i ); ?>
					</option>
				<?php } ?>
			</select>

			<select id="to-month2-<?php echo intval( $random_number ); ?>" class="uac-birth-month" style="<?php echo esc_html( $input_css ); ?>">
				<option value="1"><?php echo __( 'January', 'user-age-calculator' ); ?></option>
				<option value="2"><?php echo __( 'February', 'user-age-calculator' ); ?></option>
				<option value="3"><?php echo __( 'March', 'user-age-calculator' ); ?></option>
				<option value="4"><?php echo __( 'April', 'user-age-calculator' ); ?></option>
				<option value="5"><?php echo __( 'May', 'user-age-calculator' ); ?></option>
				<option value="6"><?php echo __( 'June', 'user-age-calculator' ); ?></option>
				<option value="7"><?php echo __( 'July', 'user-age-calculator' ); ?></option>
				<option value="8"><?php echo __( 'August', 'user-age-calculator' ); ?></option>
				<option value="9"><?php echo __( 'September', 'user-age-calculator' ); ?></option>
				<option value="10"><?php echo __( 'October', 'user-age-calculator' ); ?></option>
				<option value="11"><?php echo __( 'November', 'user-age-calculator' ); ?></option>
				<option value="12"><?php echo __( 'December', 'user-age-calculator' ); ?></option>
			</select>

			<input id="to-year2-<?php echo intval( $random_number ); ?>" type="text" class="uac-birth-year" placeholder="Enter year" style="<?php echo esc_html( $input_css ); ?>" />
		</div>


		<div id="uac-message2-<?php echo intval( $random_number ); ?>" class="uac-message"></div>

		<div class="uac-footer2" style="<?php echo esc_html( $footer_css ); ?>">
			<button class="button uac-submit-button" onclick="uac_calculate_to_given_date( <?php echo intval( $random_number ); ?> ); return false;">Calculate</button>
		</div>


	</div>
</p>




