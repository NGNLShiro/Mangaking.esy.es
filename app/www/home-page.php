<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/connection.php"; ?>
<?php
	$bxh = "bxh";
	$tbname1 = "hotmanga";
	$tbname2 = "latest-update-manga";
	$tbname3 = "a-new-manga";
?>



<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Manga King</title>
	<link rel="stylesheet" href="../../contents/css/mangaclub.css" type="text/css">
    
    
    
</head>
<body>
	<hr />
	<div id="header">
		<div class="clearfix1">
        	<div id="logo">
            	<a href="mangaking.esy.es"><img src="E:/wamp/www/Manga Club Project/Mangaking.esy.es/contents/img/Logo.png" /></a>
            </div>
        	<div id="banner">
            	<img src="E:/wamp/www/Manga Club Project/Mangaking.esy.es/contents/img/Banner.png" />
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
                                    	<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/genre-content-column1.php"; ?>
                                    </ul>
                                </div>
                                <div class = "genre-content-column">
                                	<ul>
                                    	<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/genre-content-column2.php"; ?>
                                    </ul>
                                </div>
                                <div class = "genre-content-column">
                                	<ul>
                                    	<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/genre-content-column3.php"; ?>
                                    </ul>
                                </div>
                                <div class = "genre-content-column">
                                	<ul>
                                    	<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/genre-content-column4.php"; ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a class="a-navigation" href="#">Truyện mới</a></li>
                        <li><a class="a-navigation" href="#">Mới cập nhật</a></li>
                        <li><a class="a-navigation" href="#">Truyện full</a></li>
                    </ul>
                </div>
                <form action="E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/Search Result.php" method="post">
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
                <a href="#"><img id="slider-img1-img" onMouseOver="bigImg1()" onMouseOut="normalImg()" src="E:/wamp/www/Manga Club Project/Mangaking.esy.es/contents/img/slider1.png" /></a>
            </div>
            <div id="slider-img2">
                <a href="#"><img id="slider-img2-img" onMouseOver="bigImg2()" onMouseOut="normalImg()" src="E:/wamp/www/Manga Club Project/Mangaking.esy.es/contents/img/slider2.png" /></a>
            </div>
            <div id="slider-img3">
                <a href="#"><img id="slider-img3-img" src="E:/wamp/www/Manga Club Project/Mangaking.esy.es/contents/img/slider3.png" /></a>
            </div>
            <div id="slider-img4">
                <a href="#"><img id="slider-img4-img" onMouseOver="bigImg4()" onMouseOut="normalImg()" src="E:/wamp/www/Manga Club Project/Mangaking.esy.es/contents/img/slider4.png" /></a>
            </div>
            <div id="slider-img5">
                <a href="#"><img id="slider-img5-img" onMouseOver="bigImg5()" onMouseOut="normalImg()" src="E:/wamp/www/Manga Club Project/Mangaking.esy.es/contents/img/slider5.png" /></a>
            </div>
        </div>
        <div class="clearfix">
        	<div id="column1">
            	<div id="column1-title">
                	<ul>
                    	<li id="change1" class="always-active" onClick="change1()">Truyện Hot</li>
                        <li id="change2" onClick="change2()">Truyện Mới Cập Nhật</li>
                        <li id="change3" onClick="change3()">Truyện Mới Đăng</li>
                    </ul>
                </div>
                <div id="column1-hot-manga">
                	<div class="column1-content-part1">
                    	<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/hot-manga-home-page1.php"; ?>
                    </div>
                    <div class="column1-content-part2">
                    	<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/hot-manga-home-page2.php"; ?>
                    </div>
                </div>
                <div id="column1-latest-update-manga">
                	<div class="column1-content-part1">
                    	<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/latest-update-manga-home-page1.php"; ?>
                    </div>
                    <div class="column1-content-part2">
                    	<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/latest-update-manga-home-page2.php"; ?>
                    </div>
                </div>
                <div id="column1-new-manga">
                	<div class="column1-content-part1">
                    	<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/new-manga-home-page1.php"; ?>
                    </div>
                    <div class="column1-content-part2">
                    	<?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/new-manga-home-page2.php"; ?>
                    </div>
                </div>
            </div>
            <div id="column2">
                <div id="column2-part1">
                	<div id="column2-part1-title">
                    	<p>-Bảng Xếp Hạng-</p>
                    </div>
                    <ul>
                        <?php include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/admin/Top-home-page.php"; ?>
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

<script type="text/javascript">
		function closeit(){
			document.getElementById("click").checked = false;
			document.getElementById("chatbox-click").checked = false;
		}
		
		window.onscroll = function (){
			if(window.scrollY >= 109)
			{
				var nav = document.getElementById("navigation");
				nav.classList.add("active");
			}
			else
			{
				var nav = document.getElementById("navigation");
            	nav.classList.remove("active");
			}
		}
		
		
	
	</script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type = "text/javascript">
        function getStates(value){
            $.post("getState.php",{partialState:value},function(data){
                $("#results").html(data);
            });
        }
    
    </script>
    
    <script type="text/javascript">
	function bigImg1 (){
		var a = document.getElementById("slider-img1-img");
		var b = document.getElementById("slider-img2-img");
		var c = document.getElementById("slider-img3-img");
		var d = document.getElementById("slider-img4-img");
		var e = document.getElementById("slider-img5-img");
		a.style.height = "250px";
		a.style.width = "527px";
		a.style.zIndex = "5";
		a.style.top = "0px";
		b.style.height = "200px";
		b.style.width = "422px";
		b.style.zIndex = "4";
		b.style.top = "50px";
		b.style.left = "320px";
		c.style.height = "150px";
		c.style.width = "316px";
		c.style.zIndex = "3";
		c.style.top = "100px";
		c.style.left = "575px";
		d.style.height = "150px";
		d.style.width = "316px";
		d.style.zIndex = "2";
		d.style.top = "100px";
		d.style.right = "150px";
		e.style.height = "150px";
		e.style.width = "316px";
		e.style.zIndex = "1";
		e.style.top = "100px";
		}
	function bigImg2 (){
		var a = document.getElementById("slider-img1-img");
		var b = document.getElementById("slider-img2-img");
		var c = document.getElementById("slider-img3-img");
		var d = document.getElementById("slider-img4-img");
		var e = document.getElementById("slider-img5-img");
		a.style.height = "200px";
		a.style.width = "422px";
		a.style.zIndex = "1";
		a.style.top = "50px";
		a.style.left = "0px";
		b.style.height = "250px";
		b.style.width = "527px";
		b.style.zIndex = "5";
		b.style.top = "0px";
		b.style.left = "185px";
		c.style.height = "200px";
		c.style.width = "422px";
		c.style.zIndex = "3";
		c.style.top = "50px";
		c.style.left = "480px";
		d.style.height = "150px";
		d.style.width = "316px";
		d.style.zIndex = "2";
		d.style.top = "100px";
		d.style.right = "150px";
		e.style.height = "150px";
		e.style.width = "316px";
		e.style.zIndex = "1";
		e.style.top = "100px";
		}
	function bigImg4 (){
		var a = document.getElementById("slider-img1-img");
		var b = document.getElementById("slider-img2-img");
		var c = document.getElementById("slider-img3-img");
		var d = document.getElementById("slider-img4-img");
		var e = document.getElementById("slider-img5-img");
		a.style.height = "150px";
		c.style.width = "316px";
		a.style.zIndex = "1";
		a.style.top = "100px";
		a.style.left = "0";
		b.style.height = "150px";
		b.style.width = "316px";
		b.style.zIndex = "2";
		b.style.top = "100px";
		b.style.left = "160px";
		c.style.height = "200px";
		c.style.width = "422px";
		c.style.zIndex = "3";
		c.style.top = "50px";
		c.style.left = "325px";
		d.style.height = "250px";
		d.style.width = "527px";
		d.style.zIndex = "5";
		d.style.top = "0";
		d.style.right = "170px";
		e.style.height = "200px";
		e.style.width = "422px";
		e.style.zIndex = "1";
		e.style.top = "50px";
		}
	function bigImg5 (){
		var a = document.getElementById("slider-img1-img");
		var b = document.getElementById("slider-img2-img");
		var c = document.getElementById("slider-img3-img");
		var d = document.getElementById("slider-img4-img");
		var e = document.getElementById("slider-img5-img");
		a.style.height = "150px";
		a.style.width = "316px";
		a.style.zIndex = "1";
		a.style.top = "100px";
		a.style.left = "0px";
		b.style.height = "150px";
		b.style.width = "316px";
		b.style.zIndex = "2";
		b.style.top = "100px";
		b.style.left = "165px";
		c.style.height = "150px";
		c.style.width = "316px";
		c.style.zIndex = "3";
		c.style.top = "100px";
		c.style.left = "330px";
		d.style.height = "200px";
		d.style.width = "422px";
		d.style.zIndex = "4";
		d.style.top = "50px";
		d.style.right = "290px";
		e.style.height = "250px";
		e.style.width = "527px";
		e.style.zIndex = "5";
		e.style.top = "0px";
		}
	function normalImg (){
		var a = document.getElementById("slider-img1-img");
		var b = document.getElementById("slider-img2-img");
		var c = document.getElementById("slider-img3-img");
		var d = document.getElementById("slider-img4-img");
		var e = document.getElementById("slider-img5-img");
		a.style.height = "150px";
		a.style.width = "316px";
		a.style.left = "0";
		a.style.zIndex = "1";
		a.style.top = "100px";
		b.style.height = "200px";
		b.style.width = "422px";
		b.style.left = "145px";
		b.style.zIndex = "2";
		b.style.top = "50px";
		c.style.height = "250px";
		c.style.width = "527px";
		c.style.left = "340px";
		c.style.zIndex = "3";
		c.style.top = "0px";
		d.style.height = "200px";
		d.style.width = "422px";
		d.style.right = "145px";
		d.style.zIndex = "2";
		d.style.top = "50px";
		e.style.height = "150px";
		e.style.width = "316px";
		e.style.right = "0px";
		e.style.zIndex = "1";
		e.style.top = "100px";
	}

</script>

<script type="text/javascript">
	function change1(){
		var a = document.getElementById("change1");
		var b = document.getElementById("change2");
		var c = document.getElementById("change3");
		var d = document.getElementById("column1-hot-manga")
		var e = document.getElementById("column1-latest-update-manga");
		var f = document.getElementById("column1-new-manga");
		a.classList.add("change-active");
		b.classList.remove("change-active");
		c.classList.remove("change-active");
		d.style.zIndex = "3";
		e.style.zIndex = "2";
		f.style.zIndex = "1";
	}
	
	function change2(){
		var a = document.getElementById("change1");
		var b = document.getElementById("change2");
		var c = document.getElementById("change3");
		var d = document.getElementById("column1-hot-manga")
		var e = document.getElementById("column1-latest-update-manga");
		var f = document.getElementById("column1-new-manga");
		a.classList.remove("change-active");
		a.classList.remove("always-active");
		b.classList.add("change-active");
		c.classList.remove("change-active");
		d.style.zIndex = "2";
		e.style.zIndex = "3";
		f.style.zIndex = "1";
	}
	
	function change3(){
		var a = document.getElementById("change1");
		var b = document.getElementById("change2");
		var c = document.getElementById("change3");
		var d = document.getElementById("column1-hot-manga")
		var e = document.getElementById("column1-latest-update-manga");
		var f = document.getElementById("column1-new-manga");
		a.classList.remove("change-active");
		a.classList.remove("always-active");
		b.classList.remove("change-active");
		c.classList.add("change-active");
		d.style.zIndex = "1";
		e.style.zIndex = "2";
		f.style.zIndex = "3";
	}
</script>

<script type="text/javascript">
	function activelogin(){
		var x = document.getElementById("login-result");
		x.classList.remove("active-login");
	}
	function closeloingresult(){
		var y = document.getElementById("login-result");
		y.classList.add("active-login");
	}
</script>




