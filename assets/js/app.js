// Custome theme code

$(function () {

	if ($('.clean-gallery').length > 0) {
		baguetteBox.run('.clean-gallery', {animation: 'slideIn'});
	}

	if ($('.clean-product').length > 0) {
		$(window).on("load", function () {
			$('.sp-wrap').smoothproducts();
		});
	}

	// trick pour poser le active sur la bonne page
	let origin = window.location.origin;
	let url = window.location.pathname;

	$('nav li a[href="' + origin + url + '"]').addClass('active');
});
