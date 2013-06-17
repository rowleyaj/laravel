<!DOCTYPE html>
<!--[if IE 8]>          <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="en" > <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>@section('title')Application Title
			@show
		</title>

		<meta name="description" content="
			@section('description')
				{{-- Insert application description here --}}
				Application Description
			@show
			">
		<meta name="viewport" content="width=device-width" />

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		<link rel="stylesheet" href="assets/css/app.css" />
	  
		<script src="assets/js/vendor/custom.modernizr.js"></script>
	</head>
	<body>
		@yield('content')

		<script>
			document.write('<script src=' +
			('__proto__' in {} ? 'assets/js/vendor/zepto' : 'assets/js/vendor/jquery') +
			'.js><\/script>')
		</script>
	  
		<!-- Full list of foundation JS, minify appropriate files -->     
		<script src="assets/js/foundation/foundation.js"></script>        
		<script src="assets/js/foundation/foundation.alerts.js"></script>
		<script src="assets/js/foundation/foundation.clearing.js"></script>
		<script src="assets/js/foundation/foundation.cookie.js"></script>
		<script src="assets/js/foundation/foundation.dropdown.js"></script>
		<script src="assets/js/foundation/foundation.forms.js"></script>
		<script src="assets/js/foundation/foundation.interchange.js"></script>
		<script src="assets/js/foundation/foundation.joyride.js"></script>
		<script src="assets/js/foundation/foundation.magellan.js"></script>
		<script src="assets/js/foundation/foundation.orbit.js"></script>
		<script src="assets/js/foundation/foundation.placeholder.js"></script>
		<script src="assets/js/foundation/foundation.reveal.js"></script>
		<script src="assets/js/foundation/foundation.section.js"></script>
		<script src="assets/js/foundation/foundation.tooltips.js"></script>
		<script src="assets/js/foundation/foundation.topbar.js"></script>

		<!-- Start Foundation -->
		<script>
			$(document).foundation();
		</script>

		<!-- Google Analytics: change UA-XXXXX-X to be site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  	ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>
	</body>
</html>
