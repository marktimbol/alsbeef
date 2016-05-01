fullscreen();

$(window).resize(fullscreen);

function fullscreen() {
	var Video = $('.Video');
	var windowH = $(window).height();
	var windowW = $(window).width();

	Video.width(windowW);
	Video.height(windowH);
}

coverVid(document.querySelector('.Video__item'), 640, 360);