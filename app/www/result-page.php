<?php include"../app/admin/connection.php"; ?>
<?php
	$bxh = "bxh";
	$tbname = "manga-name";
?>



<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Manga King</title>
	<link rel="stylesheet" href="contents/css/mangaclub.css" type="text/css">
    <style type="text/css">
	body{
		background-image:url(contents/img/tumblr_static_bkhdovnxlqo8g40wkcowk4ks8.jpg)
	}
	
	</style>
		
		
	
	
	
    
    
</head>
<body>
	<hr />
	<div id="header">
		<div class="clearfix1">
        	<div id="logo">
            	<a href="mangaking.esy.es"><img src="contents/img/Logo.png" /></a>
            </div>
        	<div id="banner">
            	<img src="contents/img/Banner.png" />
            </div>
            <div id="log-in">
            	<p onClick="activelogin()">Đăng nhập <span>và</span> Đăng ký</p>
            </div>
			<div id="navigation">
            	<div id="ul-navigation">
                    <ul>
                        <li><a class="a-navigation" href="http://mangaking.esy.es/">Trang Chủ</a></li>
                        <li id="genre-navigation">
                        	<a href="#">Thể Loại</a>
                            <div id = "genre-content">
                                <div class = "genre-content-column">
                                	<ul>
                                    	<?php include"../app/admin/genre-content-column1.php"; ?>
                                    </ul>
                                </div>
                                <div class = "genre-content-column">
                                	<ul>
                                    	<?php include"../app/admin/genre-content-column2.php"; ?>
                                    </ul>
                                </div>
                                <div class = "genre-content-column">
                                	<ul>
                                    	<?php include"../app/admin/genre-content-column3.php"; ?>
                                    </ul>
                                </div>
                                <div class = "genre-content-column">
                                	<ul>
                                    	<?php include"../app/admin/genre-content-column4.php"; ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a class="a-navigation" href="#">Truyện mới</a></li>
                        <li><a class="a-navigation" href="#">Mới cập nhật</a></li>
                        <li><a class="a-navigation" href="#">Truyện full</a></li>
                    </ul>
                </div>
                <form action="../app/admin/result-page.php" method="post">
                    <input id="header-search" name="search-box" type="text" placeholder="Search . . ." onKeyUp="getStates(this.value)">
                    <input id="header-submit" name="submit" type="submit" value="Tìm kiếm">
                    <br />
                    <div id="results-div">
                    	<ul id="results">
                        </ul>
                    </div>
               	</form>
          	</div>
		</div>
	</div>
	<div id="contents">
		<div id="slider">
        	<div id = "login-result" class="active-login">
                <div id="fb-root"></div>
                    <script>
                        (function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=136465386763340";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                <div id = "login">
                    <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false">
                    </div>
                </div>
                <div id="register">
                	<a href="#">Đăng ký Mod</a>
                </div>
                <p id = "close-login-result" onClick="closeloingresult()">X</p>
            </div>
        	<div id="slider-img1">
                <a href="#"><img id="slider-img1-img" onMouseOver="bigImg1()" onMouseOut="normalImg()" src="contents/img/slider1.png" /></a>
            </div>
            <div id="slider-img2">
                <a href="#"><img id="slider-img2-img" onMouseOver="bigImg2()" onMouseOut="normalImg()" src="contents/img/slider2.png" /></a>
            </div>
            <div id="slider-img3">
                <a href="#"><img id="slider-img3-img" src="contents/img/slider3.png" /></a>
            </div>
            <div id="slider-img4">
                <a href="#"><img id="slider-img4-img" onMouseOver="bigImg4()" onMouseOut="normalImg()" src="contents/img/slider4.png" /></a>
            </div>
            <div id="slider-img5">
                <a href="#"><img id="slider-img5-img" onMouseOver="bigImg5()" onMouseOut="normalImg()" src="contents/img/slider5.png" /></a>
            </div>
        </div>
        <div class="clearfix">
        	<div id="column1">
            	<div id="column1-title">
                	<p>Kết quả tìm kiếm cho : </p>
                </div>
                <div id="column1-result">
                	<div class="column1-content-part1">
                    	<?php include"../app/admin/result-search-part1.php"; ?>
                    </div>
                    <div class="column1-content-part2">
                    	<?php include"../app/admin/result-search-part2.php"; ?>
                    </div>
                </div>
            </div>
            <div id="column2">
                <div id="column2-part1">
                	<div id="column2-part1-title">
                    	<p>-Bảng Xếp Hạng-</p>
                    </div>
                    <ul>
                        <?php include"../app/admin/Top-home-page.php"; ?>
                    </ul>
                    <hr />
                </div>
            </div>
        </div>
	</div>
    <div id="footer">
       	<div id="footer-content1">
            <div id="introduction">
                <div class="footer-title">
           	        GIỚI THIỆU
                </div>
  	            <div class="footer-content">
                    <b>MangaClub - </b>Cổng truyện dịch tổng hợp mọi thể loại và reup từ các Fansub tại Việt Nam. Luôn cập nhật truyện nhanh,mới và liên tục.
                </div>
            </div>
            <div id="support">
   	            <div class="footer-title">
                    HỖ TRỢ
                </div>
                <div class="footer-content">
       	            <ul id="ul-footer-content">
	                    <li><a href="#">Hướng dẫn</a></li>
                        <li><a href="#">Báo lỗi</a></li>
                        <li><a href="#">Điều khoản</a></li>
                    </ul>
                </div>
            </div>
            <div id="fanpage">
            </div>
            <div id="footer-content2">
               	<div id="editor">
                    <span>Dev :</span> Ace <span>;</span> <span>Designer :</span> KoA,Siritami <span>;</span> <span>Programer :</span> Gero,Jason.
                </div>
         	    <div id="interaction">
                    <div id="phone">
                        Liên lạc : 01265595244
                    </div>
                  	<div id="email">
                        Liên hệ : khoa01222133097@gmail.com
                    </div>
                </div>
            </div>
        </div>
  	</div>
</body>
</html>

	<script type="text/javascript" src = "contents/js/close-it.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type = "text/javascript">
        function getStates(value){
            $.post("../app/admin/getState.php",{partialState:value},function(data){
                $("#results").html(data);
            });
        }
    </script>
    <script type="text/javascript" src = "contents/js/slider.js"></script>
	<script type="text/javascript" src = "contents/js/login.js"></script>




