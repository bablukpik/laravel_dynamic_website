<!DOCTYPE HTML>
<html>
<head>
<title>App Name - @yield('title')</title>
{!! HTML::style('resource/css/bootstrap.css') !!}
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{!! HTML::script('resource/js/jquery-1.11.0.min.js') !!}
<!-- Custom Theme files -->
{!! HTML::style('resource/css/style.css') !!}
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
{!! HTML::script('js/jquery.mixitup.min.js') !!}
<script type="text/javascript">
$(function () {
    
    var filterList = {
    
        init: function () {
        
            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixitup({
                targetSelector: '.portfolio',
                filterSelector: '.filter',
                effects: ['fade'],
                easing: 'snap',
                // call the hover effect
                onMixEnd: filterList.hoverEffect()
            });             
        
        },
        
        hoverEffect: function () {
        
            // Simple parallax effect
            $('#portfoliolist .portfolio').hover(
                function () {
                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                    $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');             
                },
                function () {
                    $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                    $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');                               
                }       
            );              
        
        }

    };
    
    // Run the show!
    filterList.init();
    
    
}); 
</script>
</head>
<body>
    <!-- Header Starts Here -->
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="index.html">{!! HTML::image('resource/images/logo.png', 'Logo') !!}</a>
            </div>
            <span class="menu"></span>
            <div class="navigation">
                <ul class="navig cl-effect-3" >
                    <li>{!! HTML::link('index', 'Home') !!}</li>
                    <li>{!! HTML::link('games', 'Games') !!}</li>
                    <li>{!! HTML::link('blog', 'Blog') !!}</li>
                    <li>{!! HTML::link('features', 'Features') !!}</li>
                    <li>{!! HTML::link('contact', 'Contact') !!}</li>
                </ul>
                <div class="search-bar">
                        <input type="text" placeholder="search" required=""  value="search"/>
                        <input type="submit" value="" />
                </div>
                <div class="clearfix"></div>
                <script>
                    $( "span.menu" ).click(function() {
                      $( ".navigation" ).slideToggle( "slow", function() {
                        // Animation complete.
                      });
                    });
                </script>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Header Ends Here --> 
        @yield('bangla')
        @yield('content')
    <!-- Footer Starts Here -->
    <div class="footer">
        <div class="container">
            <ul class="social">
                <li><i class="fa"></i></li>
                <li><i class="fb"></i></li>
                <li><i class="fc"></i></li>
            </ul>
            <p>2014 Design by <a href="https://bablucse.wordpress.com">W3layouts</a></p>
        </div>
    </div>
    <!-- Footer Ends Here -->
</body>
</html>