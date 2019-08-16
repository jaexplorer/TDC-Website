$(window).on('load', function() {
    $('.preloader').delay(1500).fadeOut(1000);
});


var isLessThanOrEqualToMaxWidth = window.matchMedia("(max-width: 999px)");
var isLandscape = (window.orientation === 90 || window.orientation === -90) || (window.matchMedia("(orientation: landscape)").matches);
var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
var isNavOpen = false;

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

if (isMobile.any())
{
	isLandscape = (window.innerHeight < window.innerWidth);
}


function openNav()
{
    var t1 = new TimelineMax();
    t1.to(".c-header", .5, { width: "0%", ease: Expo.easeInOut },);
    t1.to(".c-main-cta", .5, { width: "0%", ease: Expo.easeInOut }, 0);
    t1.set(".c-nav, .c-nav_container", {display: "block"});
    t1.set(".c-header", {display: "none"});
    t1.set(".c-main-cta", {display: "none"});
    t1.set(".c-nav_close-btn", {width: "0rem", height: "0rem"});
    t1.set(".c-nav p, .c-nav img, .c-nav p, .c-nav .o-button-round, .c-nav_title_text", {opacity: "0"});
    t1.to(".c-nav-bg_item.-top", .8, { width: "100%", ease: Expo.easeInOut }, 0.2);
    t1.to(".c-nav-bg_item.-bottom", .8, { width: "100%", ease: Expo.easeInOut }, 0.2);
    t1.to(".c-nav_close-btn", .5, {width: "4rem", height: "4rem", ease: Elastic.easeOut.config(1, .5)}, .9);
    t1.set(".main_content", {display: "none"});
    t1.set(".o-container-full", {display: "none"});

    if (isLessThanOrEqualToMaxWidth.matches) { // If media query matches
        t1.to(".c-nav-main", .8, { height: "75%", ease: Expo.easeInOut }, .6);
        t1.to(".c-nav-tile.-top", .8, { height: "25%", ease: Expo.easeInOut }, .7);
        t1.to(".c-nav-tile.-bottom", .8, { height: "25%", ease: Expo.easeInOut }, .8);
    } else {
        t1.to(".c-nav-main", .8, { height: "100%", ease: Expo.easeInOut }, .6);
        t1.to(".c-nav-tile.-top", .8, { height: "50%", ease: Expo.easeInOut }, .7);
        t1.to(".c-nav-tile.-bottom", .8, { height: "50%", ease: Expo.easeInOut }, .8);
    }
	if (isLandscape) {
		t1.to(".c-nav-main", .8, { height: "100%", ease: Expo.easeInOut }, .6);
	}

    t1.to(".c-nav p, .c-nav img, .c-nav p, .c-nav .o-button-round, .c-nav_title_text", .8, {opacity: "1", ease: Expo.easeInOut }, 1);

    t1.staggerFrom(".c-nav .c-nav_list li", 1, {x: -20, opacity: 0, ease:Expo.easeOut}, 0.2, 1);
    isNavOpen = !isNavOpen;
}

function closeNav()
{
    var t1 = new TimelineMax();
    t1.set(".main_content", {display: "block"});
    t1.set(".o-container-full", {display: "flex"});
    t1.to(".c-nav .c-nav_list li", .5, {opacity: 0, ease:Expo.easeOut});
    t1.to(".c-nav p, .c-nav img, .c-nav p, .c-nav .o-button-round, .c-nav_title_text", .8, {opacity: "0", ease: Expo.easeInOut }, 0.2);

    t1.to(".c-nav-main", .8, { height: "0%", ease: Expo.easeInOut }, .6);

    t1.to(".c-nav-tile.-top", .8, { height: "0%", ease: Expo.easeInOut }, .7);
    t1.to(".c-nav-tile.-bottom", .8, { height: "0%", ease: Expo.easeInOut }, .8);

    t1.to(".c-nav_close-btn", .5, {width: "0rem", height: "0rem", ease: Elastic.easeIn.config(1, .5)}, .9);
    t1.to(".c-nav-bg_item.-top", .8, { width: "0%", ease: Expo.easeInOut }, 0.9);
    t1.to(".c-nav-bg_item.-bottom", .8, { width: "0%", ease: Expo.easeInOut }, 0.9);

    t1.set(".c-header", {display: "block"}, 1.5);
    t1.set(".c-main-cta", {display: "flex"}, 1);
    t1.set(".c-nav, .c-nav_container", {display: "none"});
    t1.set(".c-nav .c-nav_list li", {opacity: 1});

    t1.to(".c-main-cta", .5, { width: "7rem", ease: Expo.easeInOut }, 1);

    if (isLessThanOrEqualToMaxWidth.matches) { // If media query matches
        t1.to(".c-header", .5, { width: "100%", ease: Expo.easeInOut }, 1.5);
        t1.to(".c-header", .5, { height: "75px", ease: Expo.easeInOut }, 1.5);
        t1.set(".c-main-cta", {display: "none"}, 1);
    } else {
        t1.to(".c-header", .5, { width: "8rem", ease: Expo.easeInOut }, 1.5);
        t1.to(".c-header", .5, { height: "50%", ease: Expo.easeInOut }, 1.5);
        t1.to(".c-main-cta", .5, { width: "7rem", ease: Expo.easeInOut }, 1.5);
    }
    isNavOpen = !isNavOpen;
}

if (isFirefox) {
	$(document).ready(function(){
		$(".c-menu-btn, .c-menu-btn_container").click(function(){
			openNav();
		});
		$(".c-nav_close-btn, .c-nav_close-label").click(function(){
			closeNav();
		});
	});
}
else
{
	$(document).on("click", ".c-menu-btn_container", function() {
		openNav();
	});

	$(document).on("click", ".c-nav_close-btn, .c-nav_close-label", function() {
		closeNav();
	});
}

$(window).resize(function(){
    var t1 = new TimelineMax();
    if (isNavOpen) {
        if (isLessThanOrEqualToMaxWidth.matches) { // If media query matches
            t1.to(".c-nav-main", .8, { height: "75%", ease: Expo.easeInOut }, .1);
            t1.to(".c-nav-tile.-top", .8, { height: "25%", ease: Expo.easeInOut }, .2);
            t1.to(".c-nav-tile.-bottom", .8, { height: "25%", ease: Expo.easeInOut }, .1);
        } 
		else {
            t1.to(".c-nav-main", .8, { height: "100%", ease: Expo.easeInOut }, .1);
            t1.to(".c-nav-tile.-top", .8, { height: "50%", ease: Expo.easeInOut }, .2);
            t1.to(".c-nav-tile.-bottom", .8, { height: "50%", ease: Expo.easeInOut }, .3);
        }
		if (isLandscape) {
			t1.to(".c-nav-main", .8, { height: "100%", ease: Expo.easeInOut }, .1);
		}
    } else {
        if (isLessThanOrEqualToMaxWidth.matches) { // If media query matches
            t1.to(".c-header", .5, { width: "100%", ease: Expo.easeInOut }, 0.1);
            t1.to(".c-header", .8, { height: "75px", ease: Expo.easeInOut }, 0.1);
            t1.set(".c-main-cta", {display: "none"}, .5);
        } else {
            t1.to(".c-header", .5, { width: "8rem", ease: Expo.easeInOut }, 0.1);
            t1.to(".c-header", .8, { height: "50%", ease: Expo.easeInOut }, 0.1);
            t1.set(".c-main-cta", {display: "flex"}, .5);
        }
    }
});
