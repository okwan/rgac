/* Default hiding */
$('.nav-menu').hide();
$("div#details-1").hide();
$("#div1").hide();
$("#div2").hide();
$("#div3").hide();
$(".overlay").hide();
$('#menu-buttaa').hide();

$(function() {

	// Find all YouTube videos
	var $allVideos = $("iframe[src^='http://www.youtube.com']"),

	    // The element that is fluid width
	    $fluidEl = $("container-fluid");

	// Figure out and save aspect ratio for each video
	$allVideos.each(function() {

		$(this)
			.data('aspectRatio', this.height / this.width)

			// and remove the hard coded width/height
			.removeAttr('height')
			.removeAttr('width');

	});

	// When the window is resized
	// (You'll probably want to debounce this)
	$(window).resize(function() {

		var newWidth = $fluidEl.width();

		// Resize all videos according to their own aspect ratio
		$allVideos.each(function() {

			var $el = $(this);
			$el
				.width(newWidth)
				.height(newWidth * $el.data('aspectRatio'));

		});

	// Kick off one resize to fix all videos on page load
	}).resize();

});

function toggleChevron(e) {
    $(e.target)
        .prev('#icon-accordion')
        .find('i.indicator')
        .toggleClass('plus minus');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);

$("#scrollButton").click(function() {
  event.preventDefault();
    $('html, body').animate({
        scrollTop: $("#div1").offset().top
    }, 1000);
});

/* Able to do a fade-in effect for each page load */
$("body").delay(1000).animate({
    "opacity": "1"
}, 700);

/* on page load different page effect */
$(document).ready(function() {
    number = Math.floor(Math.random() * 3) + 1;

    if (number == 1) {
        $("#div1").fadeIn();
    } else if (number == 2) {
        $("#div1").fadeIn();
    } else {
        $("#div1").fadeIn();
    }
});

function letsGoHome() {
  window.location = "/";
}
/* carousel stuff */
$('.carousel').carousel({
  interval: 1000 * 7.5
});

/* jQuery Scrolling function */
$(window).scroll(function() {

    if ($(this).scrollTop() > 100) {
        $('.nav-title').fadeOut();
    } else {
        $('.nav-menu').fadeOut();
        $('.nav-menu-right').fadeIn();
        $('.nav-title').fadeIn();
    }
});

function showImages(el) {
    var windowHeight = jQuery(window).height();
    $(el).each(function() {
        var thisPos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (topOfWindow + windowHeight > thisPos) {
            $(this).addClass("fadeIn");
        }
    });
}

// WIP
function showDetails(el) {
    if($('span.plus').text() == '+') {
      $('span.plus').text("-");
    } else {
      $('span.plus').text("+");
    }

    $( "div#details-1" ).fadeToggle( "fast", "linear" );

    // $(el).fadeToggle( "slow", "linear" );
    // $('span.plus').text("+");

}

// if the image in the window of browser when the page is loaded, show that image
$(document).ready(function() {
    showImages('.star');
});

// if the image in the window of browser when scrolling the page, show that image
$(window).scroll(function() {
    showImages('.star');
});

/* Open when someone clicks on the span element */
function openNav() {
    $("#myNav").fadeIn();
    $(".rgac_menu").fadeOut();
    $(".a-rgac-brand").animate({ color: "white" }, 1000);
}

function toggleMenuGG() {
	// $("#nav-div").removeClass("col-4");
	// $("#nav-div").addClass("col-8");
	// $("#nav-div").show();
	// $("#nav-title").hide();
  // $("#menu-butt").fadeOut();
  // $("#menu-buttaa").delay(400).fadeIn();
  // $('.icon-list span.ge').fadeOut();
  // $('.icon-list span.ge-mobile').fadeOut();
	// $(".icon-list a").css("display", "block");
  // $(".icon-list a").delay(750).fadeIn();
}

function toggleMenuGGEZ() {
  // $("#menu-buttaa").fadeOut();
  // $("#menu-butt").delay(400).fadeIn();
	// $(".icon-list a").hide();
	// $("#nav-div").removeClass("col-8");
	// $("#nav-div").addClass("col-4");
	// $("#nav-div").show();

  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    $(".icon-list span.ge-mobile").delay(750).fadeIn();
  } else {
    $(".icon-list span.ge").delay(750).fadeIn();
  }
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    $("#myNav").fadeOut();
    $(".rgac_menu").fadeIn();
    $(".a-rgac-brand").animate({ color: "#333" }, 1000);
}

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 // some code..
} else {
  $.fn.moveIt = function() {
      var $window = $(window);
      var instances = [];

      $(this).each(function() {
          instances.push(new moveItItem($(this)));
      });

      window.onscroll = function() {
          var scrollTop = $window.scrollTop();
          instances.forEach(function(inst) {
              inst.update(scrollTop);
          });
      }
  }

  var moveItItem = function(el) {
      this.el = $(el);
      this.speed = parseInt(this.el.attr('data-scroll-speed'));
  };

  moveItItem.prototype.update = function(scrollTop) {
      var pos = scrollTop / this.speed;
      this.el.css('transform', 'translateY(' + -pos + 'px)');
  };

  $(function() {
      $('[data-scroll-speed]').moveIt();
  });
}
