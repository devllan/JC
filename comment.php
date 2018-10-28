

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>评论页面</title>
		<link href="./css/comment.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery-1.11.1.min.js"></script>
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
					<li><a class="hvr-overline-from-center button2 active" href="blog.php">博客</a></li>
					<li><a class="hvr-overline-from-center button2" href="video.php">视频</a></li>
					<li><a class="hvr-overline-from-center button2" href="gallery.php">画廊</a></li>	
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


<div id="content">
	<div class="content_title">
		<span>博客</span>
	</div>
	<div class="content_left">
		<img class="content_left_img" src="images/b8.jpg" />
		<div class="content_left_title">
			我们只生产全世界最优质水果的果汁		</div>
		<div class="content_left_time">
			发表于<span>2017-08-28</span>
		</div>
		<div class="content_left_text">
			<p>为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。为什么我们只生产全世界最优质的水果的果汁，因为我们想让全世界的人喝道最安全，最放心，最优质的果汁，为了这个目标，我们需要不懈的努力才能够达到。</p>
		</div>
		<div class="content_left_comment">
			<div class="content_left_comment_1">
				
			
			<div class='content_left_comment_left'><img src='./images/team-1.jpg' /></div><div class='content_left_comment_right'><p class='content_left_comment_right_title'>Simmy</p><p class='content_left_comment_right_content'>我爱你~</p><p class='content_left_comment_right_data'>08月14日</p></div><div class='content_left_comment_left'><img src='./images/team-1.jpg' /></div><div class='content_left_comment_right'><p class='content_left_comment_right_title'>Simmy</p><p class='content_left_comment_right_content'>果汁外卖网</p><p class='content_left_comment_right_data'>08月11日</p></div><div class='content_left_comment_left'><img src='./images/team-1.jpg' /></div><div class='content_left_comment_right'><p class='content_left_comment_right_title'>Simmy</p><p class='content_left_comment_right_content'>sssss</p><p class='content_left_comment_right_data'>10月31日</p></div>			</div>
			<div style="clear: both;"></div>
		</div>
		
	</div>
	<div class="content_right">
		<div class="content_right_title">
			相关文章
		</div>
		<div class="content_right_news">
			<div class="content_right_news_left">
				<img src="./images/team-1.jpg" />
			</div>
			<div class="content_right_news_right">
				<p class="content_right_news_right_title">
					我们只生产有中国特色社会写啥写啥写啥
				</p>
				<p class="content_right_news_right_content">
					这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜
				</p>
			</div>
			<div style="clear: both;"></div>
		</div>
		<div class="content_right_news">
			<div class="content_right_news_left">
				<img src="./images/team-1.jpg" />
			</div>
			<div class="content_right_news_right">
				<p class="content_right_news_right_title">
					我们只生产有中国特色社会写啥写啥写啥
				</p>
				<p class="content_right_news_right_content">
					这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜
				</p>
			</div>
			<div style="clear: both;"></div>
		</div>
		<div class="content_right_news">
			<div class="content_right_news_left">
				<img src="./images/team-1.jpg" />
			</div>
			<div class="content_right_news_right">
				<p class="content_right_news_right_title">
					我们只生产有中国特色社会写啥写啥写啥
				</p>
				<p class="content_right_news_right_content">
					这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜
				</p>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>
	<div style="clear:both;"></div>
	
		<div class="content_text">
			<textarea id="comment" name="comment"></textarea>
		</div>
		<div class="content_button">
			<button id="pl-btn" type="button">提交</button>
		<div style="clear:both;"></div>
		</div>
	
	
</div>
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
				<input type="text" name="" value="" />
				<img src="images/fdj.png"/>
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
</html>