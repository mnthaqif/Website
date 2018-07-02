<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Integrasys</title>

	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="simple-line-icons/css/simple-line-icons.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"/>

	<link href="css/style2.css" rel="stylesheet" />
	<link href="css/magnific-popup.css" rel="stylesheet"/>
	<link href="css/gallery-1.css" rel="stylesheet"/>
</head>

<body>


	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/portfolio/jquery.quicksand.js"></script>
	<script src="js/portfolio/setting.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script>
	$(document).ready(function(){
		/* -------- Isotope Filtering -------- */
		var $container = $('#isotope-gallery-container');
		var $filter = $('.filter');
		$(window).load(function () {
			// Initialize Isotope
			$container.isotope({
				itemSelector: '.gallery-item-wrapper'
			});
			$('.filter a').click(function () {
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector });
				return false;
			});
			$filter.find('a').click(function () {
				var selector = $(this).attr('data-filter');
				$filter.find('a').parent().removeClass('active');
				$(this).parent().addClass('active');
			});
		});
		$(window).smartresize(function () {
			$container.isotope('reLayout');
		});
		// End Isotope Filtering
		$('.gallery-zoom').magnificPopup({
			type: 'image'
			// other options
		});
	});
</script>
</body>

</hmtl>
