(function($) {
	$(document).on( 'click', '.uac-tabs a', function() {

		jQuery('#uac-message').hide(500);

		// Hide All sections
		$('.uac-section').hide();

		// Show the selcted one
		$('.uac-section').eq($(this).index()).show();

		// Highlight the Tab
		$('.uac-tabs a').attr( 'class', 'nav-tab' );
		$(this).attr( 'class', 'nav-tab nav-tab-active' );

		// Update current tab number, to highlight it after the form is submitted.
		$('#uac_current_tab').val( $(this).index() + 1 );

		if ( 2 === $(this).index() ) {
			$('#uac-instructions').hide();
		} else {
			$('#uac-instructions').show();
		}
		
		return false;
	})

	// Click first Tab
	$('.nav-tab-active').click();

	// Template 1
	// -------------------------------------------------------------
	// Title Text
	$("#uac_title1").on("input", function(){
		$(".uac-header1").html($(this).val());
	});

	// Title Font Size
	$("#uac_title1_font_size").change(function(){
		$(".uac-header1").css('font-size', $(this).val() + 'px');
	});

	// Title color
	$('#uac_title1_color').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-header1').css('color', theColor);
		}
	});

	// Label Text
	$("#uac_label1").on("input", function(){
		$(".uac-widget1 .label").html($(this).val());
	});

	// Label Font Size
	$("#uac_label1_font_size").change(function(){
		$(".uac-widget1 .label").css('font-size', $(this).val() + 'px');
	});

	// Label 1 Color
	$('#uac_label1_color').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-widget1 .label').css('color', theColor);
		}
	});

	// Dropdown Font Size
	$("#uac_dropdown1_font_size").change(function(){
		$(".uac-widget1 select, .uac-widget1 input").css('font-size', $(this).val() + 'px');
	});

	// Dropdown Color
	$('#uac_dropdown1_color').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-widget1 select, .uac-widget1 input').css('color', theColor);
		}
	});

	// Show Time Units
	$("#uac_show_time1, #uac_show_time12").click(function () {
		if ( $( "#uac_show_time1" ).is( ':checked' ) ) {
			$('.uac-time-container').show(200);
		}
		if ( $( "#uac_show_time12" ).is( ':checked' ) ) {
			$('.uac-time-container').hide(200);
		}
	});

	// Show Header
	$("#uac_show_h11, #uac_show_h12").click(function () {
		if ( $( "#uac_show_h11" ).is( ':checked' ) ) {
			$('.uac-header1').show(200);
		}
		if ( $( "#uac_show_h12" ).is( ':checked' ) ) {
			$('.uac-header1').hide(200);
		}
	});

	// Show Footer
	$("#uac_show_f11, #uac_show_f12").click(function () {
		if ( $( "#uac_show_f11" ).is( ':checked' ) ) {
			$('.uac-footer1').removeClass('uac-hide-footer').css('background-color', $('#uac_hf_bgcolor1').val() );
		}
		if ( $( "#uac_show_f12" ).is( ':checked' ) ) {
			$('.uac-footer1').addClass('uac-hide-footer').css('background-color', 'unset');
		}
	});

	// Show Borders
	$("#uac_show_b11, #uac_show_b12").click(function () {
		if ( $( "#uac_show_b11" ).is( ':checked' ) ) {
			$('.uac-widget1').css( 'border', '1px solid ' + $('#uac_border1_color').val() );
		}
		if ( $( "#uac_show_b12" ).is( ':checked' ) ) {
			$('.uac-widget1').css('border', 'none');
		}
	});

	// Border Color
	$('#uac_border1_color').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-widget1').css('border', '1px solid '+ theColor);
			$('.uac-header1').css('border-bottom', '1px solid '+ theColor);
			$('.uac-footer1').css('border-top', '1px solid '+ theColor);
		}
	});

	// BG Color
	$('#uac_bgcolor1').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-widget1').css('background-color', theColor);
		}
	});

	// Header and footer Background color
	$('#uac_hf_bgcolor1').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-header1').css('background-color', theColor);
			$('.uac-footer1').css('background-color', theColor);
		}
	});

	// Time Label Text
	$("#uac_time_label1").on("input", function(){
		$(".uac-widget1 .uac_time_label1").html($(this).val());
	});

	// Time Label color
	$('#uac_time_color1').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('#uac-widget .uac_time_label1').css('color', theColor);
		}
	});

	// Time Font Size
	$("#uac_time_font_size1").change(function(){
		$(".uac_time_label1").css('font-size', $(this).val() + 'px');
	});


	// Template 2
	// -------------------------------------------
	$("#uac_title2").on("input", function(){
		$(".uac-header2").html($(this).val());
	});

	// Title Font Size
	$("#uac_title2_font_size").change(function(){
		$(".uac-header2").css('font-size', $(this).val() + 'px');
	});

	// Title color
	$('#uac_title2_color').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-header2').css('color', theColor);
		}
	});

	// Label 1 Text
	$("#uac_label21").on("input", function(){
		$(".uac-widget2 .uac-dob-container1 .label").html($(this).val());
	});

	// Label 1 Font Size
	$("#uac_label21_font_size").change(function(){
		$(".uac-widget2 .uac-dob-container1 .label").css('font-size', $(this).val() + 'px');
	});

	// Label 1 Color
	$('#uac_label21_color').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-widget2 .uac-dob-container1 .label').css('color', theColor);
		}
	});

	// Label 2 Text
	$("#uac_label22").on("input", function(){
		$(".uac-widget2 .uac-dob-container2 .label").html($(this).val());
	});

	// Label 2 Font Size
	$("#uac_label22_font_size").change(function(){
		$(".uac-widget2 .uac-dob-container2 .label").css('font-size', $(this).val() + 'px');
	});

	// Label 2 Color
	$('#uac_label22_color').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-widget2 .uac-dob-container2 .label').css('color', theColor);
		}
	});

	// Dropdown Font Size
	$("#uac_dropdown2_font_size").change(function(){
		$(".uac-widget2 select, .uac-widget2 input").css('font-size', $(this).val() + 'px');
	});

	// Dropdown Color
	$('#uac_dropdown2_color').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-widget2 select, .uac-widget2 input').css('color', theColor);
		}
	});

	// Show Header
	$("#uac_show_h21, #uac_show_h22").click(function () {
		if ( $( "#uac_show_h21" ).is( ':checked' ) ) {
			$('.uac-header2').show();
		}
		if ( $( "#uac_show_h22" ).is( ':checked' ) ) {
			$('.uac-header2').hide();
		}
	});

	// Show Footer
	$("#uac_show_f21, #uac_show_f22").click(function () {
		if ( $( "#uac_show_f21" ).is( ':checked' ) ) {
			$('.uac-footer2').removeClass('uac-hide-footer').css('background-color', $('#uac_hf_bgcolor2').val() );
		}
		if ( $( "#uac_show_f22" ).is( ':checked' ) ) {
			$('.uac-footer2').addClass('uac-hide-footer').css('background-color', 'unset');
		}
	});

	// Show Borders
	$("#uac_show_b21, #uac_show_b22").click(function () {
		if ( $( "#uac_show_b21" ).is( ':checked' ) ) {
			$('.uac-widget2').css( 'border', '1px solid ' + $('#uac_border2_color').val() );
		}
		if ( $( "#uac_show_b22" ).is( ':checked' ) ) {
			$('.uac-widget2').css('border', 'none');
		}
	});



	// Border Color - Widget 2
	$('#uac_border2_color').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-widget2').css('border', '1px solid '+ theColor);
			$('.uac-header2').css('border-bottom', '1px solid '+ theColor);
			$('.uac-footer2').css('border-top', '1px solid '+ theColor);
		}
	});

	// BG Color
	$('#uac_bgcolor2').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-widget2').css('background-color', theColor);
		}
	});

	// Header and footer
	$('#uac_hf_bgcolor2').wpColorPicker({
		change: function(event, ui){
			var theColor = ui.color.toString();
			$('.uac-header2').css('background-color', theColor);
			$('.uac-footer2').css('background-color', theColor);
		}
	});

})( jQuery );

function uac_copy_shortcode( id ) {
	var copyText = document.getElementById( id );

	/* Select the text field */
	copyText.select();
	copyText.setSelectionRange(0, 99999); /* For mobile devices */

	/* Copy the text inside the text field */
	navigator.clipboard.writeText(copyText.value);

	jQuery('#uac-message').html( '<div class="notice notice-success is-dismissible"><p>Shortcode Copied!</p></div>' ).show(500);
}

