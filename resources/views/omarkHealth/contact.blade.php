<!-- banner -->
<div class="banner">
	<div class="header-top">
		<div class="container">
			<div class="header-top-right">
				<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">omarkhealth@gmail.com</a></p>
				<p><i class="fa fa-phone" aria-hidden="true"></i> +234 802 371 1092</p>
			</div>
		</div>
	</div>
		@extends('layouts.navbar')

		@section('content')
		

<!-- map -->
<div class="map">
	<h2>Locate us</h2>
	<div class="container">
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415650.6082293166!2d148.8007935764926!3d-35.52231558352957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b164cdfa09b104b%3A0xe75844385c6e7803!2sAustralian+Capital+Territory%2C+Australia!5e0!3m2!1sen!2sin!4v1496644554880"></iframe> -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3056.532030417651!2d3.232137335106303!3d6.542985014596694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b85169b344f21%3A0xdec103def493228b!2sO&#39;Mark+Schools!5e0!3m2!1sen!2sng!4v1518400597502" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>
<!-- //map -->

<!-- call -->
<div class="number">
	<div class="container">
		<div class="col-md-6 callleft">
			<h5>Ready to get started?</h5>
			<h3>Get in touch, we will call you</h3>
		</div>
		<div class="col-md-6 callright">
			<form action="" method="post">
				{{csrf_field()}}
				<input type="tel" placeholder="Enter your number" required="">
				<input type="submit" value="call me now">
			</form>
		</div>
		<div class="clearfix"></div>	
	</div>
</div>
<!-- //call -->

<!-- contact -->
<div class="contact">
	<h3 class="heading">Contact Us</h3>
	<p>Please, if you still have any questions, we have a very relaible response team that is always glad to respond to any of our queries. Please, do not hesitate to contact either via mail or mobile. </p>
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
							<li>+3402 890 679</li>
							<li>+5356 890 679</li>
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
							<li>345 Diamond Street,</li>
							<li>Australia.</li>
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
							<li><a href="mailto:info@example.com">info@example.com</a></li>
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

@endsection
