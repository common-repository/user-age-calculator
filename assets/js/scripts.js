function uac_calculate_to_current_date( random_number ) {

	var dob_year   = Number( jQuery( '#birth-year1-' + random_number ).val() );
	var dob_months = Number( jQuery( '#birth-month1-' + random_number ).val() );
	var dob_date   = Number( jQuery( '#birth-date1-' + random_number ).val() );
	var fdob       = '';

	if ( isNaN( dob_year ) || dob_year < 1900 ) {
		jQuery( '#uac-message1-' + random_number ).html( 'Please enter Year!' ).css('padding-bottom', '20px');
		return;
	}

	dob_months = dob_months < 10 ? '0' + dob_months : dob_months;
	dob_date   = dob_date < 10 ? '0' + dob_date : dob_date;

	if ( jQuery( '#birth-hour1-' + random_number ).length
		&& jQuery( '#birth-hour1-' + random_number ).is(":visible") ) {

		var dob_hour   = Number( jQuery( '#birth-hour1-' + random_number ).val() );
		var dob_minute = Number( jQuery( '#birth-minute1-' + random_number ).val() );
		var dob_ampm   = jQuery( '#birth-ampm1-' + random_number ).val();

		if ( 'pm' === dob_ampm ) {
			dob_hour = dob_hour + 12;
		}

		if ( 60 === dob_minute ) {
			dob_minute = 0;
			dob_hour++;
		}

		dob_hour   = dob_hour < 10 ? '0' + dob_hour : dob_hour;
		dob_minute = dob_minute < 10 ? '0' + dob_minute : dob_minute;

		fdob = new Date( dob_year + '-' + dob_months + '-' + dob_date + 'T' + dob_hour + ':' + dob_minute );

	} else {

		fdob = new Date( dob_year + '-' + dob_months + '-' + dob_date );
	}

	if ( 'Invalid Date' === fdob ) {
		jQuery( '#uac-message1-' + random_number ).html( 'Invalid Date!' ).css('padding-bottom', '20px');
		return;
	}

	var now      = new Date();
	var diff     = now - fdob;
	var age_date = new Date(diff);
	var age      = 0;
	var years    = age_date.getUTCFullYear() - 1970;
	var months   = age_date.getUTCMonth();
	var days     = age_date.getUTCDate() - 1;
	var hours    = age_date.getUTCHours();
	var minutes  = age_date.getUTCMinutes();

	jQuery( '#uac-message1-' + random_number ).html( years+' years, '+months+' months, '+days+' days, ' + hours + ' hours, ' + minutes + ' minutes' ).css('padding-bottom', '20px');
}

function uac_calculate_to_given_date( random_number ) {
	var dob_year   = Number( jQuery( '#birth-year2-' + random_number ).val() );
	var dob_months = Number( jQuery( '#birth-month2-' + random_number ).val() );
	var dob_date   = Number( jQuery( '#birth-date2-' + random_number ).val() );

	var to_date   = Number( jQuery( '#to-date2-' + random_number ).val() );
	var to_month  = Number( jQuery( '#to-month2-' + random_number ).val() );
	var to_year   = Number( jQuery( '#to-year2-' + random_number ).val() );

	if ( isNaN( dob_year ) || dob_year < 1900 ) {
		jQuery( '#uac-message2-' + random_number ).html( 'Please enter Year!' ).css('padding-bottom', '20px');
		return;
	}

	var start_date = new Date( dob_year + '-' + dob_months + '-' + dob_date );
	var end_date   = new Date( to_year + '-' + to_month + '-' + to_date );
	var diff       = end_date - start_date;
	var age_date   = new Date(diff);
	var age        = 0;
	var years      = age_date.getUTCFullYear() - 1970;
	var months     = age_date.getUTCMonth();
	var days       = age_date.getUTCDate() - 1;
	var hours      = age_date.getUTCHours();
	var minutes    = age_date.getUTCMinutes();

	jQuery( '#uac-message2-' + random_number ).html( years+' years, '+months+' months, '+days+' days').css('padding-bottom', '20px');
}

// Automatically set the current date in the To Date fields.
jQuery(function() {
	var now      = new Date();
	var now_date  = now.getDate();
	var now_month = now.getMonth() + 1;
	var now_year  = now.getFullYear();

	jQuery( '.uac-dob-container2 .uac-birth-date' ).val( now_date );
	jQuery( '.uac-dob-container2 .uac-birth-month' ).val( now_month );
	jQuery( '.uac-dob-container2 .uac-birth-year' ).val( now_year );

	jQuery('.uac-birth-year').keypress(function(e){
		if ( e.which == 13 ) e.preventDefault();
	});
});