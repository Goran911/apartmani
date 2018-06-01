<!DOCTYPE html>
<?php
	include('php/config.php');
?>
<!--
Template Name: Overerts
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Apartmani Tri šešira</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="layout/scripts/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="layout/scripts/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="layout/scripts/myscript.js" type="text/javascript"></script>
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="magnific-popup/magnific-popup.css">

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
<script src="magnific-popup/jquery.magnific-popup.js"></script>
<script>

	//PrettyPhoto
	jQuery(document).ready(function() {
		$("a[rel^='prettyPhoto']").prettyPhoto();
	});

	//BlackAndWhite
	$(window).load(function(){
		$('.client_img').BlackAndWhite({
			hoverEffect : true, // default true
			// set the path to BnWWorker.js for a superfast implementation
			webworkerPath : false,
			// for the images with a fluid width and height
			responsive:true,
			// to invert the hover effect
			invertHoverEffect: false,
			// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
			intensity:1,
			speed: { //this property could also be just speed: value for both fadeIn and fadeOut
				fadeIn: 300, // 200ms for fadeIn animations
				fadeOut: 300 // 800ms for fadeOut animations
			},
			onImageReady:function(img) {
				// this callback gets executed anytime an image is converted
			}
		});
	});

	$(document).ready(function() {

	$('a.btn-gallery').on('click', function(event) {
		event.preventDefault();

		var gallery = $(this).attr('href');

		$(gallery).magnificPopup({
      delegate: 'a',
			type:'image',
			gallery: {
				enabled: true
			}
		}).magnificPopup('open');
	});

});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

</head>

<body id="top">

<!-- PRELOADER -->
<img id="preloader" src="images/501.GIF" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

<div id="overlay">
