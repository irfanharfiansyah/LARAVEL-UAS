<style>
    body {
    font-family: 'Noto Sans', sans-serif;
    
}
h2 {
	color: #333;
	text-align: center;
	text-transform: uppercase;
    font-family: 'Noto Sans', sans-serif;
	font-weight: bold;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	width: 140px;
	position: absolute;
	margin: 0 auto;
	height: 3px;
	background: #db584e;
	left: 0;
	right: 0;
	bottom: -10px;
    opacity: .8;
}
.col-center {
	margin: 0 auto;
	float: none !important;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel-item {
	color: #999;
	font-size: 14px;
    text-align: center;
	overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
	width: 135px;
	height: 135px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid rgb(190, 98, 22);
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {
	padding: 10px 0 0px;
}
.carousel .overview {	
	font-style: italic;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #ce6159;
}
.carousel .carousel-control {
	width: 20px;
    height: 20px;
    margin-top: -20px;
    top: 50%;
	background: none;
}
.carousel-control i {
    font-size: 68px;
	line-height: 42px;
    position: absolute;
    display: inline-block;
	color: rgba(231, 65, 0, 0.603);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 rgb(80, 80, 80);
}
.carousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 1px 3px;
	border-radius: 50%;
}
.carousel-indicators li {	
	background: #999;
	border-color: transparent;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {	
	background: #555;		
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
</style>

</head>
<body>
<div class="container" >
	<div class="row" style="margin-top: 180px">
		<div class="col-md-12 ">
			<h2>Testimonials</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="https://i.ibb.co/d5DY64w/img1.jpg" alt=""></div>
						<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus..</p>
						<p class="overview"><b>Jennifer Smith</b>, Office Worker</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="https://i.ibb.co/5FF1vqz/img2.jpg" alt=""></div>
						<p class="testimonial">Vestibulum magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b>Dauglas McNun</b>, Financial Advisor</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="https://i.ibb.co/Trv7hDv/img3.jpg" alt=""></div>
						<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit.</p>
						<p class="overview"><b>Hellen Wright</b>, Athelete</p>
					</div>
				</div>
				<!-- Carousel Controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>  