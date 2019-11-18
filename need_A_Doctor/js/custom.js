jQuery(document).ready(function () {


    $('#carouselHacked').carousel();

    //this code is for the gmap
    var map = new GMaps({
        el: '#map',
        lat: -12.043333,
        lng: -77.028333
    });


    //this code is for smooth scroll and nav selector
    $(document).ready(function () {
        $(document).on("scroll", onScroll);

        //smoothscroll
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $('a').each(function () {
                $(this).removeClass('active');
            })
            $(this).addClass('active');

            var target = this.hash,
                menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top + 2
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('.navbar-default .navbar-nav>li>a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('.navbar-default .navbar-nav>li>a').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }


    //this code is for animation nav
    jQuery(window).scroll(function () {
        var windowScrollPosTop = jQuery(window).scrollTop();

        if (windowScrollPosTop >= 150) {
            jQuery(".header").css({
                "background": "#B193DD",
            });
            jQuery(".top-header img.logo").css({
                "margin-top": "-40px",
                "margin-bottom": "0"
            });
            jQuery(".navbar-default").css({
                "margin-top": "-15px",
            });
        } else {
            jQuery(".header").css({
                "background": "transparent",
            });
            jQuery(".top-header img.logo").css({
                "margin-top": "-15px",
                "margin-bottom": "25px"
            });
            jQuery(".navbar-default").css({
                "margin-top": "12px",
                "margin-bottom": "0"
            });

        }
    });




});


/***************code for detect location of patient */
var rad=document.getElementById("rad");
var x=document.getElementById("p");

rad.onchange=getLocation;
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
/*****************************function to compute distance between two location */

function distance(lat1, lon1, lat2, lon2, unit) {
	var radlat1 = Math.PI * lat1/180
	var radlat2 = Math.PI * lat2/180
	var theta = lon1-lon2
	var radtheta = Math.PI * theta/180
	var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
	dist = Math.acos(dist)
	dist = dist * 180/Math.PI
	dist = dist * 60 * 1.1515
	if (unit=="K") { dist = dist * 1.609344 }
	if (unit=="N") { dist = dist * 0.8684 }
	return dist
}


