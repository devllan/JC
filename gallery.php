
<html>
	<head>
		<meta charset="UTF-8">
		<title>画廊</title>
		<link href="./css/gallery.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" href="css/swipebox.css">
			<!-- start-smoth-scrolling -->
	    <script type="text/javascript" src="js/move-top.js"></script>
	    <script type="text/javascript" src="js/easing.js"></script>
	    <script type="text/javascript">
	    jQuery(document).ready(function($) {
	        $(".scroll").click(function(event) {
	            event.preventDefault();
	            $('html,body').animate({
	                scrollTop: $(this.hash).offset().top
	            }, 1000);
	        });
	    });
	    </script>
    	<!-- start-smoth-scrolling -->
	</head>
	<body>
		<!--头部导航-->
		<div class="header">
			<div class="header_top">
				<div class="header-top-left">
					<span>我们不生产果汁只是果汁的搬运工</span>
				</div>
				<div class="header-top-mid">
					<span>外卖电话：+0646-784-900</span>
				</div>
				<div class="header-top-right">
					<ul>
						<li><a href="#" class="f1"> </a></li>
						<li><a href="#" class="f2"> </a></li>
						<li><a href="#" class="f3"> </a></li>
						<li><a href="#" class="f4"> </a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<!--内容栏目-->
<div class="logo-head">
	<div class="container">
		<div class="logo">
			<h1><a href="index.php"><img src="images/logo.png" alt=""/></a></h1>
		</div>
		<div class="navigation">
				<ul class="nav1">
					<li><a class="hvr-overline-from-center button2" href="about.php">关于</a></li>
					<li><a class="hvr-overline-from-center button2" href="services.php">服务</a></li>
					<li><a class="hvr-overline-from-center button2" href="blog.php">博客</a></li>
					<li><a class="hvr-overline-from-center button2" href="video.php">视频</a></li>
					<li><a class="hvr-overline-from-center button2 active" href="gallery.php">画廊</a></li>	
					<li><a class="hvr-overline-from-center button2" href="contact.php">联系</a></li>
				</ul>
				<!-- script for menu -->
					<script> 
						$("span.menu").click(function(){
						$("ul.nav1").slideToggle( 300, function(){
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->	
		</div>
	</div>
</div>

<div class="banner page-head"></div>

<!--gallery-starts--> 
<div class="facilities">
	<div class="container_f">
		<h3 class="tittle_f">画廊</h3> 
			
			<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
			</script>
			<div class='view view-seventh'><a href=images/b1.jpg class='b-link-stripe b-animate-go  swipebox'  title='Image Title'><img src=images/b1.jpg alt='' class='img-responsive'><div class='mask'><h4>FRUIT CRUSH</h4><p>黑网站，我们更专业！！！！！</p></div></a></div><div class='view view-seventh'><a href=images/b2.jpg class='b-link-stripe b-animate-go  swipebox'  title='Image Title'><img src=images/b2.jpg alt='' class='img-responsive'><div class='mask'><h4>FRUIT CRUSH</h4><p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。</p></div></a></div><div class='view view-seventh'><a href=images/b3.jpg class='b-link-stripe b-animate-go  swipebox'  title='Image Title'><img src=images/b3.jpg alt='' class='img-responsive'><div class='mask'><h4>FRUIT CRUSH</h4><p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。</p></div></a></div><div class='view view-seventh'><a href=images/b4.jpg class='b-link-stripe b-animate-go  swipebox'  title='Image Title'><img src=images/b4.jpg alt='' class='img-responsive'><div class='mask'><h4>FRUIT CRUSH</h4><p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。</p></div></a></div><div class='view view-seventh'><a href=images/b5.jpg class='b-link-stripe b-animate-go  swipebox'  title='Image Title'><img src=images/b5.jpg alt='' class='img-responsive'><div class='mask'><h4>FRUIT CRUSH</h4><p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。</p></div></a></div><div class='view view-seventh'><a href=images/b6.jpg class='b-link-stripe b-animate-go  swipebox'  title='Image Title'><img src=images/b6.jpg alt='' class='img-responsive'><div class='mask'><h4>FRUIT CRUSH</h4><p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。</p></div></a></div><div class='view view-seventh'><a href=images/b7.jpg class='b-link-stripe b-animate-go  swipebox'  title='Image Title'><img src=images/b7.jpg alt='' class='img-responsive'><div class='mask'><h4>FRUIT CRUSH</h4><p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。</p></div></a></div><div class='view view-seventh'><a href=images/b8.jpg class='b-link-stripe b-animate-go  swipebox'  title='Image Title'><img src=images/b8.jpg alt='' class='img-responsive'><div class='mask'><h4>FRUIT CRUSH</h4><p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。</p></div></a></div><div class='view view-seventh'><a href=images/b1.jpg class='b-link-stripe b-animate-go  swipebox'  title='Image Title'><img src=images/b1.jpg alt='' class='img-responsive'><div class='mask'><h4>FRUIT CRUSH</h4><p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁。</p></div></a></div>				<div class="clearfix"></div>
	</div>
</div>
<!--gallery-ends--> 

<!--footer-->
<div class="footer">
	<div class="footer_top">
		<div class="footer1">
			<span><strong>地址</strong></span>
			<ul>
				<li>保定市 莲池区</li>
				<li>东风东路</li>
				<li>999号</li>
				<li>营业时间：Mon-Fri 9am - 6pm</li>
			</ul>
		</div>
		
		<div class="footer2">
			<span><strong>联系方式</strong></span>
			<ul>
				<li>Tel: +1234-567-890</li>
				<li>Fax: +1646-216-9789</li>
				<li>Email: info@yourdomain.com</li>
			</ul>
		</div>
		
		<div class="footer3">
			<span><strong>SEARCH</strong></span></br>
			<div class="input">
				<input type="text" name="" id="input" value="" /><img src="images/fdj.png"/>
			</div>	
		</div>
		
		<div class="footer4">
			<a href=#""><div class="footer_logo"></div></a>
		</div>
	</div>
	
	<div class="footer_bottom">
		<div class="footer_img">Copyright © 2015.Company name All rights reserved</div>
	</div>
</div>


<!-- smooth scrolling -->
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
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //smooth scrolling -->

</body>