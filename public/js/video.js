var coverVid=function(a,b,c){function d(a,b){var c=null;return function(){var d=this,e=arguments;window.clearTimeout(c),c=window.setTimeout(function(){a.apply(d,e)},b)}}function e(){var d=a.parentNode.offsetHeight,e=a.parentNode.offsetWidth,f=b,g=c,h=d/g,i=e/f;i>h?(a.style.height="auto",a.style.width=e+"px"):(a.style.height=d+"px",a.style.width="auto")}document.addEventListener("DOMContentLoaded",e),window.onresize=function(){d(e(),50)},a.style.position="absolute",a.style.top="50%",a.style.left="50%",a.style["-webkit-transform"]="translate(-50%, -50%)",a.style["-ms-transform"]="translate(-50%, -50%)",a.style.transform="translate(-50%, -50%)",a.parentNode.style.overflow="hidden"};window.jQuery&&jQuery.fn.extend({coverVid:function(){return coverVid(this[0],arguments[0],arguments[1]),this}});
fullscreen();

$(window).resize(fullscreen);

function fullscreen() {
	var Video = $('.Video');
	var windowH = $(window).height();
	var windowW = $('#page-content-wrapper').width();

	Video.width(windowW);
	Video.height(windowH);
}

coverVid(document.querySelector('.Video__item'), 640, 360);
//# sourceMappingURL=video.js.map
