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
			grid-template-columns: repeat(6, 1fr); 
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
						<img src="images/omark_pictures/img_5150.JPG">
						<img src="images/omark_pictures/img_5151.JPG">
						<img src="images/omark_pictures/img_5152.JPG">
						<img src="images/omark_pictures/img_5153.JPG">
						<img src="images/omark_pictures/img_5154.JPG">
						<img src="images/omark_pictures/img_5155.JPG">
						<img src="images/omark_pictures/img_5156.JPG">
						<img src="images/omark_pictures/img_5157.JPG">
						<img src="images/omark_pictures/img_5158.JPG">
						<img src="images/omark_pictures/img_5159.JPG">
						<img src="images/omark_pictures/img_5160.JPG">
						<img src="images/omark_pictures/img_5161.JPG">
						<img src="images/omark_pictures/img_5162.JPG">
						<img src="images/omark_pictures/img_5163.JPG">
						<img src="images/omark_pictures/img_5164.JPG">
						<img src="images/omark_pictures/img_5165.JPG">
						<img src="images/omark_pictures/img_5166.JPG">
						<img src="images/omark_pictures/img_5167.JPG">
						<img src="images/omark_pictures/img_5168.JPG">
						<img src="images/omark_pictures/img_5169.JPG">
						<img src="images/omark_pictures/img_5170.JPG">
						<img src="images/omark_pictures/img_5171.JPG">
						<img src="images/omark_pictures/img_5172.JPG">
						<img src="images/omark_pictures/img_5173.JPG">
						<img src="images/omark_pictures/img_5174.JPG">
						<img src="images/omark_pictures/img_5175.JPG">
						<img src="images/omark_pictures/img_5176.JPG">
						<img src="images/omark_pictures/img_5178.JPG">
						

						<!-- <img src="images/omark_pictures/img_5176.jpg">
						<img src="images/omark_pictures/img_5178.jpg">
						<img src="images/omark_pictures/img_5183.jpg">
						<img src="images/omark_pictures/img_5184.jpg">
						<img src="images/omark_pictures/img_5185.jpg">
						<img src="images/omark_pictures/img_5186.jpg">
						<img src="images/omark_pictures/img_5187.jpg">
						<img src="images/omark_pictures/img_5188.jpg">
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
						<img src="images/omark_pictures/img_5200.jpg"> -->
					</div>
			</div>
			<div class="col-md-2">
				<li><a href=" {{ route('gallery2') }} "> Gallery 1</a></li>
				<li><a href="#"> Gallery 2</a></li>
				<li><a href="#"> Gallery 3</a></li>
			</div>	
		</div>
		

	</div>



		

			

	<script src="{{asset ('js/Gallerymain.js')}}"></script>
</body>
</html>