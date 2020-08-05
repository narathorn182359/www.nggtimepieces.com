<!DOCTYPE html>
<html lang="en">
<head>
<title>NGG Timepieces | Luxury Timepieces Destination</title>
<link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">    
<link href="{{url('ngg/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="{{url('ngg/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="{{url('ngg/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{url('ngg/css/flexslider.css')}}" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="{{url('css/jquery.fancybox.css')}}" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="NGG Timepieces in Udonthani, Thailand is proud to be part of the worldwide network of Official Rolex Retailers, allowed to sell and maintain Rolex watches." />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script type="text/javascript" src="{{url('ngg/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{url('ngg/js/main.js')}}"></script>
<script src="{{url('ngg/js/skdslider.min.js')}}"></script>
<link href="{{url('ngg/css/skdslider.css')}}" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118670532-1"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118670532-1');
</script>



<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':1000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<script type="text/javascript" src="{{url('ngg/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{url('ngg/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>

	
	@yield('content')
	


	
<!-- //copyright -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});

			$('html, body').animate({ scrollTop: 0 }, 'fast');
	</script>
<!-- //here ends scrolling icon -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{url('ngg/js/bootstrap.js')}}"></script>

<script>
	function validateRecaptcha() {
		var response = grecaptcha.getResponse();
		if (response.length === 0) {
			// alert("not validated");
			document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
			return false;
		} else {
			return true;
		}
	}
	
	function verifyCaptcha() {
		document.getElementById('g-recaptcha-error').innerHTML = '';
	}
	</script>






</body>
</html>
