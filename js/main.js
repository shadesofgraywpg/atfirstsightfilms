
				/* jQuery Videobackground
				
				$('.video-background').videobackground({
					videoSource: ['../images/video/test.mp4',
						'../images/video/test.webm', 
						'../images/video/test.ogv'], 
					controlPosition: '#main',
					poster: '../images/video/test.jpg',
					loadedCallback: function() {
						$(this).videobackground('mute', {controlPosition: '#intro a'});
					}
				});
				 */
				


/* Smoothscroll Top */	



$(document).ready(function(){


 $(window).scroll(function(){
  // get the height of #wrap
  var h = $('body').height();
  var y = $(window).scrollTop();
  if( y > (h*.03) ){
   // if we are show scrolltotop
   $("a.scrollup").stop().fadeTo('100', 100);
  } else {
   //$("a.scrollup").fadeOut(200);
   $(".scrollup").stop().hide();
   $('.navbar .nav > li').removeClass("active");
  }
 });
 
 
  	$('a.scrollup').click(function(){
	    		$(this).fadeOut('fast');
	    		$('html, body').animate({
					scrollTop: $("body").offset().top
				}, 900);
	});
	
});


 	
 	
 	$('#intro a').click(function(e){
	e.preventDefault();
	    		$('html, body').animate({
					scrollTop: $("#contact").offset().top
				}, 900);
	});
	
	

	$('.navbar a.brand').click(function(){
	    		$('html, body').animate({
					scrollTop: $("body").offset().top
				}, 900);
	});


	$('.navbar a.work').click(function(e){
	e.preventDefault();
	    		$('html, body').animate({
					scrollTop: $("#work").offset().top
				}, 900);
	});
	
	$('.navbar a.about').click(function(e){
	e.preventDefault();
	    		$('html, body').animate({
					scrollTop: $("#about").offset().top
				}, 900);
	});
	
	$('.navbar a.contact').click(function(e){
	e.preventDefault();
	    		$('html, body').animate({
					scrollTop: $("#contact").offset().top
				}, 900);
	});
	
	
	$('.iconbar-horizontal a.fui-mail').click(function(e){
	e.preventDefault();
	    		$('html, body').animate({
					scrollTop: $("#contact").offset().top
				}, 900);
	});
	$('.iconbar-horizontal a.fui-search').click(function(e){
	e.preventDefault();
	    		$('html, body').animate({
					scrollTop: $("#discover").offset().top
				}, 900);
	});
	$('.iconbar-horizontal a.fui-video').click(function(e){
	e.preventDefault();
	    		$('html, body').animate({
					scrollTop: $("#work").offset().top
				}, 900);
	});
	



/*---------- Randomize List ----------*/

$(document).ready(function(){
      $('ul.random').each(function(){
            // get current ul
            var $ul = $(this);
            // get array of list items in current ul
            var $liArr = $ul.children('li');
            // sort array of list items in current ul randomly
            $liArr.sort(function(a,b){
                  // Get a random number between 0 and 10
                  var temp = parseInt( Math.random()*10 );
                  // Get 1 or 0, whether temp is odd or even
                  var isOddOrEven = temp%2;
                  // Get +1 or -1, whether temp greater or smaller than 5
                  var isPosOrNeg = temp>5 ? 1 : -1;
                  // Return -1, 0, or +1
                  return( isOddOrEven*isPosOrNeg );
            })
            // append list items to ul
            .appendTo($ul);            
      });
});	




/*---------- Randomize Carousel Item Order ----------*/

$('.random div').eq(Math.floor((Math.random() * $('.random div').length))).addClass("active");




/* Video Carousel */

$('#ourwork.carousel').each(function(){
        $(this).carousel({
            interval: false
        });
    });

    $('#processCarousel').each(function(){
        $(this).carousel({
            interval: 5000
        });
    });

		/* --- INSTAGRAM FEED --- */
        var usernames = [
            'atfirstsight' 
        ]
        $(function() {
            if ($('.instagram_feed').size() > 0) {
                $.ajax({
                    type: "GET",
                    dataType: "jsonp",
                    cache: false,
                    url: "https://api.instagram.com/v1/users/8241917/media/recent/?access_token=8241917.0e7932a.a259b970695c40cc8c7d038ea34a9820",
                    success: function(data) {
                        $.each(data.data, function(i) {
                            if ($.inArray(data.data[i].user.username, usernames) >= -1) {
                                $(".instagram_feed ul").append("<li><img class='instagram-image' src='" + data.data[i].images.low_resolution.url +"' /><a target='_blank' href='" + data.data[i].link +"'><div class='info'><p>" + data.data[i].caption.text + "</p></div></a></li>");
                            }
                        })
                        $('.instagram_feed li').each(function() {
                            var li = $(this);
                            // hover
                            var info = li.find('a');
                            if (info.size() > 0) {
                                info.css('top', '-' + info.width() + 'px');
                                li.mouseenter(function() {
                                    info.css('top', '-' + info.width() + 'px');
                                    info.css('top', 'auto');
                                    info.css('z-index', 5);

                                    aniArgs = {};
                                    aniArgs['top'] = parseInt(info.width() * 0);

                                    info.stop(true).animate(aniArgs, 20, 'easeInOutSine');
                                });
                                li.mouseleave(function() {
                                    aniArgs = {};
                                    aniArgs['top'] = '-' + info.width() + 'px';

                                    info.stop(true).animate(aniArgs, 100, 'easeInOutSine', function() {
                                        info.css('top', '-' + parseInt(info.width()) + 'px');
                                    });
                                });
                            }
                        })
                        var oneToOneInstagramSize = function() {
                            $('.instagram_feed li').height($('.instagram_feed li').width());
                            $('.instagram_feed').height($('.instagram_feed li').width());
                            $('.instagram_feed li').each(function() {
                                $(this).children()
                                    .height($(this).width())
                                    .width($(this).width());
                            })
                        }
                        oneToOneInstagramSize();
                        $(window).resize(oneToOneInstagramSize);
                    }
                });
            }
        });

        
        
        
    
// Sticky Nav Detection
if (document.documentElement.clientWidth > 767 ) {
    $(".navbar").sticky({topSpacing:0});
}



if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)))
{
	// is iPhone / iPod Touch
	//$(".scrollup").stop().hide();
}
if((navigator.userAgent.match(/iPad/i)))
{
	// is iOS iPad
	$("#videoContainer").css("background-image", "url(http://atfirstsightfilms.com/wp-content/themes/AtFirstSightFilms/images/video/fallback.jpg)");
	$("#background_patternOverlay").css("display", "none"); 
	$("#backgroundVideo").css("display", "none");
}
else
{
	// is Desktop (not iOS)
}



// Hide address bar on devices like the iPhone
//---------------------------------------------
function hideAddressBar(bPad) {
	// Big screen. Fixed chrome likely.
	if(screen.width > 980 || screen.height > 980) return;

	// Standalone (full screen webapp) mode
	if(window.navigator.standalone === true) return;

	// Page zoom or vertical scrollbars
	if(window.innerWidth !== document.documentElement.clientWidth) {
		// Sometimes one pixel too much. Compensate.
		if((window.innerWidth - 1) !== document.documentElement.clientWidth) return;
	}
	setTimeout(function() {
		// Already scrolled?
		if(window.pageYOffset !== 0) return;

		// Perform autoscroll
		window.scrollTo(0, 1);

		// Reset body height and scroll
		if(bodyTag !== undefined) bodyTag.style.height = window.innerHeight + 'px';
		window.scrollTo(0, 0);

	}, 1000);

}




// Rotations & Animations
	
	
	$('.rotate').hover(function(){
    var $rotate = $(this),
        $rotateicon = $rotate.find('img'),
        transitionOptions = {
            perspective: '500px',
            duration: 700,
            easing: 'snap',
        };

    if (!$rotate.data('transitioned')) {
        transitionOptions.rotateY = 180;
        $rotateicon.transition(transitionOptions, function () {
            $rotate.data('transitioned', true);
        });
    } else {
        transitionOptions.rotateY = 0;
        $rotateicon.transition(transitionOptions, function () {
            $rotate.data('transitioned', false);
        });
    }
    });


    
    
    $('.scale').hover(function(){
    var $scale = $(this),
        $scaleicon = $scale.find('img'),
        transitionOptions = {
            perspective: '500px',
            scale: 1,
            duration: 250,
            easing: 'ease',
        };
    if (!$scale.data('transitioned')) {
        transitionOptions.scale = 1.1;
        $scaleicon.transition(transitionOptions, function () {
            $scale.data('transitioned', true);
        });
    } else {
        transitionOptions.scale = 1;
        $scaleicon.transition(transitionOptions, function () {
            $scale.data('transitioned', false);
        });
    }
    });


	

/*
 * TweetGet Plugin v1.0 - Twitter Search API Plugin for jQuery
 * For information on building your search query, see:
 *	http://search.twitter.com/api/
 */


(function($){$.fn.tweetGet=function(options){var a={query:'from:twitter&rpp=1&result_type:popular&include_entities=false',url:'http://search.twitter.com/search.json?callback=?&q='};options=$.extend(a,options);return this.each(function(){var b=this;$.getJSON(options.url+options.query,function(data){var c=[];$.each(data.results,function(i,tweet){c.push('<li>'+tweet.text.parseURL().parseUsername().parseHashtag()+'</li>');});$(b).append('<ul>'+c.join('')+'</ul>');});});};String.prototype=$.extend(String.prototype,{parseURL:function(){return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&~\?\/.=]+/g,function(url){return url.link(url);});},parseUsername:function(){return this.replace(/@[a-zA-Z0-9_.-]+\b/g,function(user){return user.link('http://twitter.com/'+user.replace(/@| /g,''));});},parseHashtag:function(){return this.replace(/[#]+[A-Za-z0-9-_]+/g,function(hash){return hash.link('http://search.twitter.com/search?q='+hash.replace('#','%23'));});}});})(jQuery);



$(document).ready(function() {
	$('.tweetContainer').fadeIn(2200);
	$('.tweetContainer').tweetGet({'query': 'from:atfirst_sight'});
	
	var fader = function() {
		$('.twitterFeed ul').fadeOut(1200, function(){
		
			$('.twitterFeed ul li:last-child').after($('.twitterFeed ul li:first-child'));
			$('.twitterFeed ul').fadeIn(1200);
		});
	};

	var interval = setInterval(fader, 7000);

	$('.twitterFeed').hover(function() {
		clearInterval(interval);
	}, function() {
		interval = setInterval(fader, 9000);
	});
});