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


	// ################## NOTLOGGED ##################
	if ($('main.index').length > 0) {
		// console.log($('body').find('main.index'));
		$('body').css('overflow', 'auto');
	}

	// ################## MENU ##################
	// trick pour poser le active du menu sur la bonne page
	let origin = window.location.origin;
	let url = window.location.pathname;
	$('nav li a[href="' + origin + url + '"]').addClass('active');


	// ################## PROFIL ##################
	/// switch portfollio / profil
	$('.user-porfollio').hide();
	$('.switcher').on('click', function () {
		let $this = $(this);

		if ($this.hasClass('active')) {
			$this.removeClass('active');
		} else {
			$this.addClass('active');
		}

		if ($this.hasClass('profil')) {
			$this.addClass('active');
			$('.switcher.portfollio').removeClass('active');
			$('.user-profil').show();
			$('.user-porfollio').hide();
		} else if ($this.hasClass('portfollio')) {
			$this.addClass('active');
			$('.switcher.profil').removeClass('active');
			$('.user-profil').hide();
			$('.user-porfollio').show();
		}
	});

	// ################## MESSAGERIE INSTANTANNEE ##################
	$('.chat-window-closed').on('click', function (e) {
		$(this).hide();
		$('.chat-window-opened').show();
	});
	$('.close-chat-window').on('click', function (e) {
		$('.chat-window-opened').hide().removeClass('extend');
		$('.chat-window-closed').show();
	});
	$('.contact').on('click', function (e) {
		$('.chat-window-opened').addClass('extend');
		$('.contact').removeClass('active');
		$(this).addClass('active');
	});

	// ################## MESSAGERIE INTERNE ##################
	$('.mail').on('click', function(e) {
		$('.mail').removeClass('active');
		$(this).addClass('active');
	});


});
