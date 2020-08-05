jQuery(document).ready(function($) {
	$('.toggle-more-btn').on('click',function(e){
		e.preventDefault();
		$('.more-items').slideToggle(300);
		$(this).toggleClass('active');
	});
	var winwidth = 0;
	$(window).load(function(){
		winwidth = $(this).width();
	});
	$(window).on('resize', function(){
		winwidth = $(this).width();
	});



	$('.menu-item-has-children > a').on('click', function(e){
		e.preventDefault();
		if(winwidth <= 480){
			$(this).next('ul').slideToggle(300);
		}
	});

	$("#primary-menu li.menu-item-has-children").hover(function(){
		$(this).next('ul').stop().fadeIn(200);
	},
	function(){
		$(this).next('ul').stop().fadeOut(200);
	});
	$('.menu-toggle').click(function(event){
		event.preventDefault();
		$(this).toggleClass('toggled');
		$('.main-navigation').toggleClass('toggled');
	});
	$(window).load(function(){
		$('#keep-exploring-item').owlCarousel({
			items: 3,
			margin: 1,
			dots: false,
			responsive:{
				0:{
					dots: true,
					nav: false,
				},
				1024:{
					dots: false,
					nav: true,
				}
			}
		});
		$(".list-image a").filter(function(){
			return this.href == location.href.replace(/#.*/, "");
		}).addClass("active");
	});

	$(".backtop-btn").click(function(e){
		e.preventDefault();
		$('html,body').animate({
			scrollTop:0},1000,'swing');
		});
		$(window).scroll(function(){
			if ($(window).scrollTop() >= 55) {
				$('.site-header').addClass('fixed');
				$('.back-top').addClass('active');
			}
			else {
				$('.site-header').removeClass('fixed');
				$('.back-top').removeClass('active');
			}
		});

		$('#btn-backtop').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});

		$('.mobile-menu-toggle').on('click', function(e){
			e.preventDefault();
			$(this).toggleClass('active');
			$('.rolex-menu').slideToggle(300);
		});
		$('.site-menu-button').on('click', function(e){
			e.preventDefault();
			$('nav.main-navigation').slideToggle(300);
		});

		$('.footer-col-title').on('click', function(){
			$(this).next('ul').slideToggle(300);
		});
	});