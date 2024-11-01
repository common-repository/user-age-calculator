<?php
$widget_options          = get_option('uac_widget_options');
$uac_title1              = ! empty( $widget_options['uac_title1'] ) ? sanitize_text_field( $widget_options['uac_title1'] ) : 'Calculate Your Age To Current Date';
$uac_title1_font_size    = ! empty( $widget_options['uac_title1_font_size'] ) ? intval( $widget_options['uac_title1_font_size'] ) : '16';
$uac_title1_color        = ! empty( $widget_options['uac_title1_color'] ) ? sanitize_text_field( $widget_options['uac_title1_color'] ) : '#000';
$uac_label1              = ! empty( $widget_options['uac_label1'] ) ? sanitize_text_field( $widget_options['uac_label1'] ) : 'Your Birth Date';
$uac_label1_font_size    = ! empty( $widget_options['uac_label1_font_size'] ) ? intval( $widget_options['uac_label1_font_size'] ) : '16';
$uac_label1_color        = ! empty( $widget_options['uac_label1_color'] ) ? sanitize_text_field( $widget_options['uac_label1_color'] ) : '#000';
$uac_dropdown1_font_size = ! empty( $widget_options['uac_dropdown1_font_size'] ) ? intval( $widget_options['uac_dropdown1_font_size'] ) : '14';
$uac_dropdown1_color     = ! empty( $widget_options['uac_dropdown1_color'] ) ? sanitize_text_field( $widget_options['uac_dropdown1_color'] ) : '#000';
$uac_show_h1             = ! empty( $widget_options['uac_show_h1'] ) ? intval( $widget_options['uac_show_h1'] ) : 1;
$uac_show_f1             = ! empty( $widget_options['uac_show_f1'] ) ? intval( $widget_options['uac_show_f1'] ) : 1;
$uac_show_b1             = ! empty( $widget_options['uac_show_b1'] ) ? intval( $widget_options['uac_show_b1'] ) : 1;
$uac_border1_color       = ! empty( $widget_options['uac_border1_color'] ) ? sanitize_text_field( $widget_options['uac_border1_color'] ) : '#f0f0f0';
$uac_bgcolor1            = ! empty( $widget_options['uac_bgcolor1'] ) ? sanitize_text_field( $widget_options['uac_bgcolor1'] ) : '#fff';
$uac_hf_bgcolor1         = ! empty( $widget_options['uac_hf_bgcolor1'] ) ? sanitize_text_field( $widget_options['uac_hf_bgcolor1'] ) : '#f0f0f0';
$uac_show_time1          = ! empty( $widget_options['uac_show_time1'] ) ? intval( $widget_options['uac_show_time1'] ) : 2;
$random_number           = rand( 1, 9999 );

$header_css = "background-color:{$uac_hf_bgcolor1};font-size:{$uac_title1_font_size}px;color:{$uac_title1_color};border-bottom: 1px solid {$uac_border1_color};";
if ( 2 === $uac_show_h1 ) {
	$header_css .= "display:none;";
}

$label_css = "font-size:{$uac_label1_font_size}px;color:{$uac_label1_color}";
$input_css = "font-size:{$uac_dropdown1_font_size}px;line-height:{$uac_dropdown1_font_size}px;color:{$uac_dropdown1_color}";

$footer_css = "background-color:unset;";
if ( 1 === $uac_show_f1 ) {
	$footer_css = "background-color:{$uac_hf_bgcolor1};";
}
$footer_css .= "border-top: 1px solid {$uac_border1_color};";

$widget_css = "border:unset;";
if ( 1 === $uac_show_b1 ) {
	$widget_css = "border:1px solid {$uac_border1_color};";
}

$widget_css .= "background-color:{$uac_bgcolor1}";

?>
<p>
	<div id="uac-widget" class="uac-widget1" style="<?php echo esc_html( $widget_css ); ?>">

		<div class="uac-header1" style="<?php echo esc_html( $header_css ); ?>">
			<?php echo esc_html( $uac_title1 ); ?>
		</div>

		<div class="uac-dob-container1">

			<div class="label" style="<?php echo esc_html( $label_css ); ?>">
				<?php echo esc_html( $uac_label1 ); ?>
			</div>

			<select id="birth-date1-<?php echo intval( $random_number ); ?>" class="uac-birth-date" style="<?php echo esc_html( $input_css ); ?>">
				<?php for ( $i = 1; $i <= 31; $i++ ) { ?>
					<option value="<?php echo intval( $i ); ?>">
						<?php if ( $i < 10) { echo '0'; } echo esc_html( $i ); ?>
					</option>
				<?php } ?>
			</select>

			<select id="birth-month1-<?php echo intval( $random_number ); ?>" class="uac-birth-month" style="<?php echo esc_html( $input_css ); ?>">
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

			<input id="birth-year1-<?php echo intval( $random_number ); ?>" type="text" class="uac-birth-year" placeholder="Enter year" style="<?php echo esc_html( $input_css ); ?>" />
		</div>

        <?php
        $time_container_css = '';
        if ( is_admin() ) {
            $time_container_css = ( 2 === $uac_show_time1 ) ? 'display:none;' : 'display:flex;';
        }

        if ( is_admin() || 1 === $uac_show_time1 ) {
            ?>
            <div class="uac-time-container" style="<?php echo esc_attr( $time_container_css ); ?>">
                <div class="uac_time_label1" style="<?php echo esc_html( $label_css ); ?>">
					<?php echo __( 'Time of Birth', 'user-age-calculator' ); ?>
                </div>

                <select id="birth-hour1-<?php echo intval( $random_number ); ?>" class="uac-hour">
                    <option value=""><?php echo __( 'Hours', 'user-age-calculator' ); ?></option>
                    <?php
                    for ( $i = 1; $i <= 12; $i++ ) {
                        printf( '<option value="%s">%s</option>', $i, __( $i, 'user-age-calculator' ) );
                    }
                    ?>
                </select>

                <select id="birth-minute1-<?php echo intval( $random_number ); ?>" class="uac-minute">
                    <option value=""><?php echo __( 'Minutes', 'user-age-calculator' ); ?></option>
                    <?php
                    for ( $i = 0; $i <= 60; $i++ ) {
                        printf( '<option value="%s">%s</option>', $i, __( $i, 'user-age-calculator' ) );
                    }
                    ?>
                </select>

                <select id="birth-ampm1-<?php echo intval( $random_number ); ?>" class="uac-ampm">
                    <option value="am"><?php echo __( 'AM', 'user-age-calculator' ); ?></option>
                    <option value="pm"><?php echo __( 'PM', 'user-age-calculator' ); ?></option>
                </select>
            </div>
            <?php
        }
        ?>

		<div id="uac-message1-<?php echo intval( $random_number ); ?>" class="uac-message"></div>

		<div class="uac-footer1" style="<?php echo esc_html( $footer_css ); ?>">
			<button class="button uac-submit-button" onclick="uac_calculate_to_current_date( <?php echo intval( $random_number ); ?> ); return false;">
				<?php echo __( 'Calculate', 'user-age-calculator' ); ?>
            </button>
		</div>

	</div>
</p>




