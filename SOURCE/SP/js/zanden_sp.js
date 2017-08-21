$(function() {

	// General
	var domain = "http://localhost/Zanden/SP/";
	var url = location.href;

	// Current Directory
	var dir = url.replace(domain, "").match(/^\w+\/|\w+\./)[0].replace(/\/|\./, "");

	// Navigation Number
	var navs = [
		"product",
		"buy",
		"company"
	];
	
	// Set "current" class
	if ( dir !== "index" ) {
		var list = $('#global_nav li').eq(navs.indexOf(dir));
		list.addClass("current");
	}

});