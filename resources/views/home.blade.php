<html>
    <head>
        <title>E-Commerce</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="shortcut icon" href="image/e.png">



    </head>
    <body>
        <!--  navebar  -->
        @include('navbar')

        <!--  -----   carousel  ------    -->

        <div id="carouselExampleCaptions" class="carousel slide mt-40" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-8">
                            <img src="image/slider-img.png" class="d-block w-100 hs-left carousel_img" alt="slider 1">
                        </div>
                        <div class="col-sm-4 carousel_text" style="top: 350px;">
                            <h1 style="display: inline;font-family: cursive;color: yellow;">f</h1>
                            <h2>
                                ashion<br> Women's Clothing
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-sm-8">
                            <img src="image/banner-img.png" class="d-block w-100 hs-left carousel_img" alt="slider ">
                        </div>
                        <div class="col-sm-4 carousel_text">
                            <h1 style="display: inline;font-family: cursive;color: yellow;">N</h1>
                            <h2>
                                ew Product
                            </h2>
                        </div>
                    </div>

                </div>






            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!--    feature     -->
        <div class="container">
			<div class="row features-inner">
				<!-- 1 features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="image/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
					</div>
				</div>
				<!-- 2 features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="image/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>

					</div>
				</div>
				<!-- 3 features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="image/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
					</div>
				</div>
				<!-- 4 features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features single-feature">
						<div class="f-icon">
							<img src="image/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
					</div>
				</div>
			</div>
		</div>

        <!--   category   -->
        <div class="container"id="category">
            <div class="row category" >
                <div class="col-sm-4">
                    <a href={{ route("productofcat") }}>
                        <img src="image/cat1.jpg" class="im">
                    </a>

                    <h1>Man</h1>
                    <h3 class="category-number">13 Product</h3>
                </div>
                <div class="col-sm-4">
                    <a href={{ route("productofcat") }}>
                        <img src="image/cat2.png" class="im">
                    </a>
                    <h1>Woman</h1>
                    <h3 class="category-number">23 Product</h3>
                </div>
                <div class="col-sm-4">
                    <a href={{ route("productofcat") }}>
                        <img src="image/cat3.png">
                    </a>
                    <h1>Kids</h1>
                    <h3 class="category-number">48 Product</h3>
                </div>
                <div class="col-sm-4">
                    <a href={{ route("productofcat") }}>
                        <img src="image/cat4.jpg">
                    </a>
                    <h1>Men's jeans</h1>
                    <h3 class="category-number">44 Product</h3>
                </div>
                <div class="col-sm-4">
                    <a href={{ route("productofcat") }}>
                        <img src="image/cat5.jpg">
                    </a>
                    <h1>Woman's jeans</h1>
                    <h3 class="category-number">44 Product</h3>
                </div><div class="col-sm-4">
                    <a href={{ route("productofcat") }}>
                        <img src="image/cat6.jpg">
                    </a>
                    <h1>Hat</h1>
                    <h3 class="category-number">19 Product</h3>
                </div><div class="col-sm-4">
                    <a href={{ route("productofcat") }}>
                        <img src="image/cat7.png">
                    </a>
                    <h1>Shose</h1>
                    <h3 class="category-number">39 Product</h3>
                </div>
                <div class="col-sm-4">
                    <a href={{ route("productofcat") }}>
                        <img src="image/cat9.jpg">
                    </a>
                    <h1>bags</h1>
                    <h3 class="category-number">22 Product</h3>
                </div>
                <div class="col-sm-4">
                    <a href={{ route("productofcat") }}>
                        <img src="image/cat8.jpg">
                    </a>
                    <h1>Glasses</h1>
                    <h3 class="category-number">12 Product</h3>
                </div>

            </div>
        </div>

        <!--Model-->
        <div class="container model">
            <div class="row">
                <div class="col-lg-3">
                    <img src="image/model/gallery1.jpg">
                </div>
                <div class="col-lg-3">
                    <img src="image/model/gallery3.jpg">
                </div>
                <div class="col-lg-3">
                    <img src="image/model/gallery4.jpg">
                </div>
                <div class="col-lg-3">
                    <img src="image/model/gallery2.jpg">
                </div>

            </div>
        </div>

        <!--    footer   -->

        @extends('footer')

        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/home.js"></script>
    </body>
</html>
