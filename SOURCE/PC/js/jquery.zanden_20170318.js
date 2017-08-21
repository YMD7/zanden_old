$(function() {

	// ====== Insert href URL to langage selectors ======

	var url = location.href;
	var has_www = /www/.test(url);
	var domain = has_www ? "http://www.localhost/" : "http://localhost/";
	var dirStructure = url.split(domain).join("");

	var langRoot = dirStructure.match(/^[a-z]*\//);

	// not found = English
	if ( langRoot === null ) {
		var langRoot = [""];
		var dirUnderLangRoot = dirStructure;
	}
	else
	{
		switch( langRoot[0] ) {
			case "jp/":
			var dirUnderLangRoot = dirStructure.split(langRoot[0]).join("");
			$('body').addClass("jp");
			break;

			default:
			var langRoot = [""];
			var dirUnderLangRoot = dirStructure;
			break;
		}
	}

	var lang_lists = $('div#langSelect ul').children();

	for ( var i = 0; i < lang_lists.length; i++ ) {
		var list = lang_lists[i];
		var list_class = $(list).attr('class');

		switch( list_class ) {
			case "en":
			var hrefUrl = domain + dirUnderLangRoot;
			$(list).children().attr('href', hrefUrl);
			break;

			case "jp":
			var hrefUrl = domain + "jp/" + dirUnderLangRoot;
			$(list).children().attr('href', hrefUrl);
			break;

			default:
			break;
		}
	}

	// ====== Add "current" class to gnavi ======

	var mainDivClass = $('div#main').attr('class');
	switch (mainDivClass) {

		case "index":
		$('div#gnavi li:nth-child(1)').addClass("current");
		break;

		case "product":
		$('body').addClass("product"); // Add class to body
		$('div#gnavi li:nth-child(2)').addClass("current");
		break;

		case "indiv":
		$('div#gnavi li:nth-child(2)').addClass("current");
		break;

		case "award":
		$('div#gnavi li:nth-child(3)').addClass("current");
		$('body').addClass("award");
		break;

		case "listening":
		$('div#gnavi li:nth-child(4)').addClass("current");
		$('body').addClass("listening");
		// -- + 言語切替を非表示に + ----------------
		$('.lang-text').css("display", "none");
		break;

		case "buy":
		if (langRoot[0] === "") {
			$('div#gnavi li:nth-child(4)').addClass("current");
		}
		else {
			$('div#gnavi li:nth-child(5)').addClass("current");
		}
		break;

		case "company":
		if (langRoot[0] === "") {
			$('div#gnavi li:nth-child(5)').addClass("current");
		}
		else {
			$('div#gnavi li:nth-child(6)').addClass("current");
		}
		$('body').addClass("company");
		break;

	};

	// ====== Add "current" class to sub-navi ======

	var currentProduct = $('div#top h3').text();

	var productNames = {
		"Model 120": "m120.php",
		"Model 1200mk3": "m1200.php",
		"Model 1300": "m1300.php",
		"Model 3000": "m3000.php",
		"Model 3100": "m3100.php",
		"Model 300": "m300.php",
		"Model 6000": "m6000.php",
		"Model 8120": "m8120.php",
		"Model 9600": "m9600.php",
		"Model 2500": "m2500.php",
		"Model 2000 Premium": "m2000.php",
		"Model 5000 Signature": "m5000.php",
		"Model UL-15A": "UL-15A.php",
		"Model DSC-1": "DSC-1.php",
		"Model TPM-1": "TPM-1.php"
	};
	$('div#sub_navi dl a[href="http://localhost/product/' + productNames[currentProduct] + '"] dd').addClass("current");

	// ====== Remove "hidden" class from div#langSelect ======

	$('div.lang-text span.no-display').click(function() {
		$('div#langSelect:hidden').fadeIn(200);
		$(this).addClass('display').removeClass('no-display');
	});

});
