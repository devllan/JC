
<html>
	<head>
		<meta charset="UTF-8">
		<title>联系</title>
		<link href="./css/contact.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" href="css/swipebox.css">
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=AG1QweSZEWPZB1i6u7ogKTESGT4orSGP"></script>
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
					<li><a class="hvr-overline-from-center button2 active" href="contact.php">联系</a></li>
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


<!--contact our-->
<div class="contact">
	<div class="contact-content">
		<div class="contact-title">联系我们</div>
		<div class="contact-c">
			<div class="contact-left">
				<form action="contact.php" method="post">
					<p>你的名字</p><input type="text" name="username" id="name" pattern="^[a-zA-Z]\w{2,7}" placeholder="请输入您的真实姓名" />
					<p>你的电子邮箱</p><input type="email" name="email" id="email" title="email的格式是 XXX@XXX.XXX" placeholder="请输入您的真实邮箱" />
					<p>你的意见</p><textarea id="content" name="content" rows="" cols="" placeholder="请输入您的真实意见"></textarea>					
					<input id="submit" type="submit" name="submit" value="提交"/>
				</form>
			</div>
			
			<div class="contact-right" >
				<div class="right-title">我们的位置</div>
				<div class="right-content">
					<p class="right-p1">	我们位于保定市军校广场，保定有“京畿重地”之称，是京津冀地区中心城市之一，北邻北京市和张家口市，东接廊坊市和沧州市，南与石家庄市和衡水市相连，西部与山西省接壤。</p>
					<p class="right-p2">保定以“保卫大都，安定天下”得名，素有“北控三关南达九省畿辅重地，都南屏翰”之称。清代，保定为直隶省省会，是直隶总督驻地，在此后200多年间为中国近代史上的区域性政治中心新中国成立后曾两度为河北省省会保定也是传说中尧帝的故乡，有着3000多年的历史是历史上燕国、中山国、后燕立都之地境内文物古迹众多，如大慈阁、直隶总督署、清西陵等</p>
				</div>
				<div class="right-contact">
					<div class="right-contact1">
						保定市 莲池区<br/>
						东风东路<br/>
						999号<br/>
					</div>
					<div class="right-contact2">
						Tel: +1 234-567-890<br/>
						Fax: +1 646-216-9789<br/>
						Email: info@yourdomain.com<br/>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="map">
		<div class="contact-map" id="allmap">
			
		</div>
	</div>
</div>
<script type="text/javascript">
			// 百度地图API功能
			var map = new BMap.Map("allmap");    // 创建Map实例
			map.centerAndZoom(new BMap.Point(115.550904, 38.873351), 20);  // 初始化地图,设置中心点坐标和地图级别
			map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
			map.setCurrentCity("保定");          // 设置地图显示的城市 此项是必须设置的
			map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放  
			
			
			var new_point = new BMap.Point(115.550904, 38.873351);
			var marker = new BMap.Marker(new_point);  // 创建标注
			map.addOverlay(marker);              // 将标注添加到地图中
			map.panTo(new_point);     
</script>
<!--//contact our-->

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