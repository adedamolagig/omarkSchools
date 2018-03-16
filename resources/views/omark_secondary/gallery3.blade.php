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
						<img src="images/omark_pictures/IMG_5149.JPG" id="current">
					</div>

					<div class="imgs">
						
						
						<img src="images/omark_pictures/IMG_5203.JPG">
						<img src="images/omark_pictures/IMG_5204.JPG">
						<img src="images/omark_pictures/IMG_5205.JPG">
						<img src="images/omark_pictures/IMG_5206.JPG">
						<img src="images/omark_pictures/IMG_5207.JPG">
						<img src="images/omark_pictures/IMG_5208.JPG">
						<img src="images/omark_pictures/IMG_5209.JPG">
						<img src="images/omark_pictures/IMG_5210.JPG">
						<img src="images/omark_pictures/IMG_5211.JPG">
						<img src="images/omark_pictures/IMG_5212.JPG">
						<img src="images/omark_pictures/IMG_5213.JPG">
						<img src="images/omark_pictures/IMG_5214.JPG">
						<img src="images/omark_pictures/IMG_5215.JPG">
						<img src="images/omark_pictures/IMG_5216.JPG">
						<img src="images/omark_pictures/IMG_5217.JPG">
						<img src="images/omark_pictures/IMG_5218.JPG">

					</div>

					<div></div>
			</div>
			@include('layouts.gallery_navbar')
		</div>
		

	</div>



		

			

	<script src="{{asset ('js/Gallerymain.js')}}"></script>
</body>
</html>