<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>O'mark School of Health Technology| Home :: O'mark Health</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="O'mark Health of Technology" />

<!-- default css files -->
	<link rel="stylesheet" href=" {{ asset('css/app.css') }} " type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css" /> -->
<!-- default css files -->
	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//web font-->

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<!-- //Default-JavaScript-File -->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->


<!-- Gallery js file -->
	<script src="{{asset('js/jquery.picEyes.js')}}"></script>
	<script>
		$(function(){
		//picturesEyes($('.demo li'));
		$('.demo li').picEyes();
		});
	</script>
<!-- //Gallery js file -->
</head>

<!-- Body -->
<body>


<div class="head">
	<div class="container">
		<div class="navbar-top">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					 <div class="navbar-brand logo ">
						<h1 class="animated wow pulse" data-wow-delay=".5s">
						<a href="index.html">O'mark School of Health Technology</a></h1>
					</div>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav link-effect-4">
				<li class="active"><a href="{{ route('healthHome') }}" data-hover="Home">Home</a> </li>
					<li><a href="about.html" data-hover="About">About </a> </li>
					<li><a href=" {{ route('gallery') }} "  data-hover="Gallery">Gallery</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="icons.html">Icons</a></li>
							<li><a href="typography.html">Short Codes</a></li>
						</ul>
				  </li>
					<li><a href=" {{ route('contact') }} " data-hover="Contact">Contact</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			</div>
			<div class="clearfix"></div>	
	</div>
</div>


@yield('content')





<!-- contact -->
<div class="contact">
	<h3 class="heading">Contact Us</h3>
	<p>Please, if you still have any questions, we have a very reliable response team that is always glad to respond to any of our queries. Please, do not hesitate to contact either via mail or mobile. </p>
	<div class="container">
		<div class="contact-grids">
		
			<div class="col-md-7 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
				<form action="#" method="post">		
					<input type="text" placeholder="Name" name="name" required="">
					<input type="email" placeholder="Email" name="email" required="">
					<div class="clearfix"> </div>
					<textarea placeholder="Message.." name="message" required=""></textarea>
					<input type="submit" value="Send Now" >
				</form>
			</div>
			<div class="col-md-5 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
				<div class="call ">
					<div class="col-xs-1 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-3 contact-grdr">
						<h3>Call us :</h3>
					</div>
					<div class="col-xs-8 contact-grdr">
						<ul>
							<li>+234 802 371 1092</li>
							<li>+234 802 066 9980</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-1 contact-grdl">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-3 contact-grdr">
						<h3>Locate us :</h3>
					</div>
					<div class="col-xs-8 contact-grdr">
						<ul>
							<li>km 11, Omark Bus stop, LASU-Isheri Road</li>
							<li>Lagos, Nigeria.</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-1 contact-grdl">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-3 contact-grdr">
						<h3>Mail us :</h3>
					</div>
					<div class="col-xs-8 contact-grdr">
						<ul>
							<li><a href="mailto:info@example.com">omarkhealth@gmail.com</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //contact -->

<!-- copyright -->
<div class="copyright">
	<div class="container">
		<div class="copyrighttop">
			<ul>
				<li><h4>Follow us on:</h4></li>
				<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a class="facebook" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="copyrightbottom">
			<p>© <?php echo date("Y"); ?>. All Rights Reserved | Design By <a href="#">O'mark Schools</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //copyright -->


<!-- //popup for sign up form -->


	
<!-- clients js file-->
	<script src="{{asset('js/jquery.wmuSlider.js')}}"></script> 
		<script>
			$('.example1').wmuSlider();         
		</script> 
<!-- //clients js file -->

<!-- Jarallax -->
<script src="{{asset('js/jarallax.js')}}"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
<!-- //Jarallax -->

<!-- smooth scrolling -->
	<script src="{{ asset ('js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>
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
	</script>
	<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->



				
</body>
<!-- //Body -->


</html>