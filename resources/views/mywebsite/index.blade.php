@extends('mywebsite.master')
@section('title', 'Page Title Index')

@section('bangla')
	<h1>Amar songar bangla</h1>
@endsection
@section('content')
<div class="banner"></div>
<div class="banner-bot">
	<div class="container">
		<h2>Hello!</h2>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
		<p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima</p>
		<nav class="cl-effect-3"><a href="#">More</a></nav>
	</div>
</div>
<!-- Gallery Starts Here -->
<div class="gallery">
	<div class="container">
		<h3>Gallery</h3>
		<div class="gallery-top">
			<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logo web">1</span></li>
						<li><span class="filter" data-filter="app">2</span></li>
						<li><span class="filter" data-filter="card">3</span></li>
						<li><span class="filter" data-filter="icon">4</span></li>
					</ul>
					<div id="portfoliolist">
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="index.html" class="b-link-stripe b-animate-go  thickbox">
						     {!! HTML::image('resource/images/pic1.jpg', 'a picture') !!}<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "> </h2>
						  		</div></a>
		                </div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="index.html" class="b-link-stripe b-animate-go  thickbox">
						     {!! HTML::image('resource/images/pic2.jpg', 'a picture') !!}<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "> </h2>
						  	 </div></a>
		                </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="index.html" class="b-link-stripe b-animate-go  thickbox">
						     {!! HTML::image('resource/images/pic3.jpg', 'a picture') !!}<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "> </h2>
						  	 </div></a>
		                </div>
					</div>				
					<div class="portfolio logos mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="index.html" class="b-link-stripe b-animate-go  thickbox">
						     {!! HTML::image('resource/images/pic4.jpg', 'a picture') !!}<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "> </h2>
						  	 </div></a>
		                </div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="index.html" class="b-link-stripe b-animate-go  thickbox">
						     {!! HTML::image('resource/images/pic5.jpg', 'a picture') !!}<div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "> </h2>
						  	 </div></a>
		                </div>
					</div>			
				</div>

		</div>
	</div>
</div>
<!-- Gallery Ends Here -->
<!-- Video Part starts Here -->
<div class="video-serch">
	<div class="container">
		<div class="col-md-6 vid-col">
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>
			<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.</p>
			<div class="more">
				<a href="#">See more videos</a>
			</div>
		</div> 
		<div class="col-md-6 vid-coll">
			{!! HTML::image('resource/images/vid-img.jpg', 'a picture') !!}
			<div class="play-but">
				<a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim"><img src="images/vid-play.png" alt="" /></a>
			</div>
			<!--pop-up-box-->
					{!! HTML::script('resource/js/modernizr.custom.53451.js') !!}
					{!! HTML::style('resource/css/popuo-box.css', array('media' => 'all')) !!}
					{!! HTML::script('resource/js/jquery.magnific-popup.js') !!}
			<!--pop-up-box-->
			<div id="small-dialog5" class="mfp-hide">
					<iframe src="//player.vimeo.com/video/38584262"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
		</div>
		<div class="clearfix"></div>
	</div>	
</div>
<!-- Video Part Ends Here -->
<!-- What New Part starts Here -->
<div class="what-new">
	<div class="container">
		<h3>What's new</h3>
		<div class="blog-news">
			<div class="blog-news-grid">
				<div class="news-grid-left">
					<h4>06</h4>
					<small>of january 2015</small>
				</div>
				<div class="news-grid-right">
					<h4>Claritas est etiam processus</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog-news-grid b_n_g">
				<div class="news-grid-left">
					<h4>28</h4>
					<small>of january 2015</small>
				</div>
				<div class="news-grid-right">
					<h4>Claritas est etiam processus</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="blog-news b_n">
			<div class="blog-news-grid">
				<div class="news-grid-left">
					<h4>21</h4>
					<small>of january 2015</small>
				</div>
				<div class="news-grid-right">
					<h4>Claritas est etiam processus</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog-news-grid b_n_g">
				<div class="news-grid-left">
					<h4>05</h4>
					<small>of january 2015</small>
				</div>
				<div class="news-grid-right">
					<h4>Claritas est etiam processus</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- What New Part Endss Here -->
@endsection