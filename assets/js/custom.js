// JavaScript Document
//Registration
jQuery('#frm_registration').submit(function(e){
	e.preventDefault();
	jQuery.ajax({
		type: "POST",
		url: site_url + "ajax_functions.php",
		data: jQuery(this).serialize()+"&action=registration",
		dataType: "json",
		success: function(registerobj){
			jQuery("#msg_block").html(registerobj.message);
			if(registerobj.status==1) {
				location.href = site_url + registerobj.redirect_url;					
			}
		}
	});
});
//Login
jQuery('#frm_login').submit(function(e){
	e.preventDefault();
	jQuery.ajax({
		type: "POST",
		url: site_url + "ajax_functions.php",
		data: jQuery(this).serialize()+"&action=login",
		dataType: "json",
		success: function(loginobj){
			jQuery("#msg_block").html(loginobj.message);
			if(loginobj.status==1) {
				location.href = site_url + loginobj.redirect_url;					
			}
		}
	});
});