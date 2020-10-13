
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Simply food</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Food Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
<link rel="stylesheet" href={{url("frontend/css/bootstrap.css")}}>
	<!-- Bootstrap-CSS -->
<link rel="stylesheet" href={{url("frontend/css/style.css")}} type="text/css" media="all" />
	<!-- Style-CSS -->
<link href={{url("frontend/css/font-awesome.min.css")}} rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=devanagari,latin-ext"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		@include('partials.header')
	</div>
	<!-- //main banner -->

	<!-- blog -->
	<section class="wthree-row py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-8 blog-left-content">
					@yield('content')
				</div>
				@include('partials.sidebar')
			</div>
		</div>
	</section>
	<!-- //blog -->

	<!-- more -->
	<section class="blog_w3ls py-5" id="more">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle mb-sm-5 mb-4">You may also like</h3>
			<div class="row">
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-4">
					<div class="med-blog">
						<div class="blog-header">
							<a href="blog1.html">
								<img class="img-fluid" src="images/blog1.jpg" alt="image">
							</a>
						</div>
						<div class="blog-body bg-wh p-4">
							<span>March 12, 2019 - loremipsum</span>
							<a href="blog1.html" class="blog-title">Dictum porta auris magna umgtdd fos</a>
							<p>Cras ultricies ligula sed magna dictum portaout auris blandita. Nulla viverra pharetra
								se.</p>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-4">
					<div class="med-blog">
						<div class="blog-header">
							<a href="blog3.html">
								<img class="img-fluid" src="images/blog2.jpg" alt="image">
							</a>
						</div>
						<div class="blog-body bg-wh p-4">
							<span>March 14, 2019 - pharetra</span>
							<a href="blog3.html" class="blog-title">Quis autem vel eum iure reprehdd ende</a>
							<p>Cras ultricies ligula sed magna dictum portaout auris blandita. Nulla viverra pharetra
								se.</p>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-4">
					<div class="med-blog">
						<div class="blog-header">
							<a href="blog4.html">
								<img class="img-fluid" src="images/blog3.jpg" alt="image">
							</a>
						</div>
						<div class="blog-body bg-wh p-4">
							<span>March 16, 2019 - portaout</span>
							<a href="blog4.html" class="blog-title">Suscipit labo iosam nisi ut aliquid</a>
							<p>Cras ultricies ligula sed magna dictum portaout auris blandita. Nulla viverra pharetra
								se.</p>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
			</div>
		</div>
	</section>
	<!-- //more -->
@include('partials.footer')
</body>

</html>