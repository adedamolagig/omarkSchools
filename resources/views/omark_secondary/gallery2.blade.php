<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset ('css/GalleryStyle.css')}}">
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<style type="text/css">
		body{
			margin: 20px;
			padding: 0;
			background: #333;
		}

		.container {
			max-width: 1750px;
			margin: auto;
			border: #fff solid 3px;
			background: #333;
		}

		.main-img img, .imgs img{
			width: 100%;
		}

		.imgs {
			display:  grid;
			grid-template-columns: repeat(4, 1fr); 
			grid-gap: 10px;
		}

		.flex {
			flex: 1;
		}

		.level{ display: flex; align-items: center; }
        .flex{ flex: 1; }


	</style>
  
</head>
<body>
	<div class="row">
		<div class="container">
			<div class="col-md-8 flex">
					<div class="main-img">
						<img src="images/omark_pictures/img_5149.jpg" id="current">
					</div>

					<div class="imgs">
						
						
						<img src="{{ asset ('images/omark_pictures/IMG_5188.JPG') }}">
						<img src="images/omark_pictures/img_5189.jpg">
						<img src="images/omark_pictures/img_5190.jpg">
						<img src="images/omark_pictures/img_5191.jpg">
						<img src="images/omark_pictures/img_5192.jpg">
						<img src="images/omark_pictures/img_5193.jpg">
						<img src="images/omark_pictures/img_5194.jpg">
						<img src="images/omark_pictures/img_5195.jpg">
						<img src="images/omark_pictures/img_5196.jpg">
						<img src="images/omark_pictures/img_5197.jpg">
						<img src="images/omark_pictures/img_5198.jpg">
						<img src="images/omark_pictures/img_5199.jpg">
						<img src="images/omark_pictures/img_5200.jpg">
						<img src="images/omark_pictures/img_5200.jpg">
						<img src="images/omark_pictures/img_5201.jpg">
						<img src="images/omark_pictures/img_5202.jpg">

					</div>
			</div>
			@include('layouts.gallery_navbar')
		</div>
		

	</div>



		

			

	<script src="{{asset ('js/Gallerymain.js')}}"></script>
</body>
</html>