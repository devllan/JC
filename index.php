 <html>
	<head>
		<meta charset="UTF-8">
		<title>首页</title>
		<link href="./css/index.css" rel="stylesheet" type="text/css" media="all" />
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


<!-- banner -->
<div class="banner">
	<div class="container">
		<script src="js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h3>FRUIT CRUSH</h3>
							<h4>我们只生产有中国特色社会主义的果汁</h4>
							<p>“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。
矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。一瓶水的方寸之间，能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运。</p>
							<a class="hvr-rectangle-out button" href="blog.php">了解更多</a>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="banner-info">
							<h3>FRUIT CRUSH</h3>
							<h4>我们只生产有中国特色社会主义的果汁</h4>
							<p>“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。
矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。农夫山泉有点甜，再甜能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运。</p>
							<a class="hvr-rectangle-out button" href="blog.php">了解更多</a>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="banner-info">
							<h3>FRUIT CRUSH</h3>
							<h4>我们只生产有中国特色社会主义的果汁</h4>
							<p>“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。
矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。其实农夫山泉一点都不甜，这是真的，你不信可以去尝尝，就知道我说的是不是真的了。话说这个真的是真的，为啥这么多的废话呢，主要是you believe me.你相信我之后你就会发现你被我骗了。</p>
							<a class="hvr-rectangle-out button" href="blog.php">了解更多</a>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
			</div>
	</div>
</div>
<!-- //banner -->



<!-- welcome -->
    <div class="welcome">
        <div class="container">
            <div class="welcome-head">
            	<div class="welcom-line">
            		<div class="left-line"></div>
                	<h3 class="tittle">欢迎光临</h3>
                	<div class="right-line"></div>
                </div>
                <div class="wel-img mask text-center">
                    <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/1.jpg" alt="" /></a>
                </div>
                <h4>我们只生产有中国特色社会主义的果汁</h4>
                <p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。一瓶水的方寸之间，能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运。连农夫山泉总裁办公室主任钟晓晓也感到意外，在全世界媒体对G20杭州峰会每一处细节都不放过的报道之中，在主会场、茶歇区、新闻中心、各大接待酒店以及国宴餐桌上，都能看到农夫山泉饮品的身影作为G20杭州峰会的工作和厨房用水的农夫山泉倒突然有了几分“网红”的待遇。</p>
            </div>
        </div>
    </div>
<!-- //welcome -->


<!-- our specials -->
	<div class="specials">
		<div class="specials-content">
			<div class="specials-title">
				<p><strong>我们的特色饮品</strong></p>
			</div>
			<div class="specials-p">
				<div class="specials-1">
                    <figure class="specials-1-1">
                        <img src="images/4.jpg" alt="" />
                        <figcaption>
                            <h4>FRUIT CRUSH</h4>
                            <p>In sit amet sapien eros Integer quibusdam et aut officiis debitis aut rerum in tincidunt labore et dolore magna aliqua</p>
                        </figcaption>
                    </figure>
               </div>
				<div class="specials-2">
					<p><strong>我们只生产有中国特色社会主义的果汁</strong></p>
					<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。</p>
				</div>
				<div class="specials-3">
					<p id="s3"><strong>我们只生产有中国特色社会主义的果汁</strong></p>
					<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。</p>
				</div>
				<div class="specials-4">
					<figure class="specials-4-1">
                        <img src="images/3.jpg" alt="" />
                        <figcaption>
                            <h4>FRUIT CRUSH</h4>
                            <p>In sit amet sapien eros Integer quibusdam et aut officiis debitis aut rerum in tincidunt labore et dolore magna aliqua</p>
                        </figcaption>
                    </figure>
				</div>
			</div>
			
		</div>
	</div>
<!-- //our specials -->


<!-- act -->
	<div class="act">
		<div class="act-content">
			<div class="act-title">
				<h3 class="tittle">特色活动</h3>
			</div>
			<div class="act-left">
				<div class="left1">
					<div class="act-img1"><p>05 / 03</p></div>
					<div class="act-word1">
						<span><strong>我们只生产有中国特色社会主义的果汁</strong></span>
						<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。</p>
					</div>
				</div>
				<div class="left2">
					<div class="act-img2"><p>07 / 04</p></div>
					<div class="act-word2">
						<span><strong>我们只生产有中国特色社会主义的果汁</strong></span>
						<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。</p>
					</div>
				</div>
				<div class="left3">
					<div class="act-img3"><p>05 / 05</p></div>
					<div class="act-word3">
						<span><strong>我们只生产有中国特色社会主义的果汁</strong></span>
						<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。</p>
					</div>
				</div>
			</div>
			</div>
			<div class="act-right">
				<div class="right-img"></div>
			</div>
		</div>
	</div>

<!-- //act -->


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
				<input type="text" name="" id="input" value="" />
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
		