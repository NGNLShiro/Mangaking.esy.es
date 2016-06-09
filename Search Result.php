<?php include"connection.php"; ?>
<?php include"connection2.php"; ?>
<?php $d = $_POST['search-box']; ?>



<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Manga Club</title>
	<link rel="stylesheet" href="CSS/Manga Club.css" type="text/css">
    
    
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $AutoPlaySteps: 1,
              $SlideDuration:1,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 4
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url(img/b03.png) no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url(img/a03.png) no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
		
		.slider img {
			top: 0px;
  			left: 0px;
 		 	width: 170px;
  			height: 210px;
  			position: absolute;
  			overflow: hidden;
		}
		
    </style>
    
    
</head>
<body>
	<div id="header">
		<div class="clearfix1">
            <div style="background-image:url(Pictures/Banner.png);" id="search">
            	<form action="Search Result.php" method="post">
                	<input id="header-search" name="search-box" type="text" placeholder="Search . . ." onKeyUp="getStates(this.value)">
                    <input id="header-submit" name="submit" type="submit" value="Tìm kiếm">
                    <br />
                    <div id="results"></div>
                </form>
            </div>
			<div id="navigation">
            	<div id="ul-navigation">
                    <ul>
                        <li><a class="a-navigation" href="http://mangaclub.esy.es/">Trang Chủ</a></li>
                        <li><a class="a-navigation" href="#">Manga List</a></li>
                        <li><a class="a-navigation" href="#">Truyện mới</a></li>
                        <li><a class="a-navigation" href="#">Mới cập nhật</a></li>
                        <li><a class="a-navigation" href="#">Truyện full</a></li>
                    </ul>
                </div>
                <div id="advance-search">
                	<label id="check" for="click">Tìm kiếm nâng cao</label>
                    <input id="click" type="checkbox" style="display:none;">
                    <div id="advance-search-content">
                    	<p style="position:absolute; right:20px; top:0; cursor:pointer; font-size:18px;" onclick="closeit()">X</p>
                    	<form id="form" action="#" method="post">
                            <div id="Search_Box_Part1">
                                <input class="advance-search-text" name="title" type="text" placeholder="Tên Truyện" /><br>
                                <input class="advance-search-text" name="artist" type="text" placeholder="Tên Tác Giả" />
                                <input id="advance-search-submit" name="advance-search-submit" type="submit" value="Tìm Kiếm" />
                                <br />
                            </div>
                            <div class="Search_Box_Part2" style="margin-left: 100px;">
                                    <label><input name="4_Koma" type="checkbox"> 4 Koma</label><br />
                                    <label><input name="Action" type="checkbox"> Action</label><br />
                                    <label><input name="Adult" type="checkbox"> Adult</label><br />
                                    <label><input name="Adventure" type="checkbox"> Adventure</label><br />
                                    <label><input name="Award_Winning" type="checkbox"> Award Winning</label><br />
                                    <label><input name="Comedy" type="checkbox"> Comedy</label><br />
                                    <label><input name="Cooking" type="checkbox"> Cooking</label><br />
                                    <label><input name="Demons" type="checkbox"> Demons</label><br />
                                    <label><input name="Doujinshi" type="checkbox"> Doujinshi</label>
                            </div>
                            <div class="Search_Box_Part2">
                                    <label><input name="Drama" type="checkbox"> Drama</label><br />
                                    <label><input name="Ecchi" type="checkbox"> Ecchi</label><br />
                                    <label><input name="Fantasy" type="checkbox"> Fantasy</label><br />
                                    <label><input name="Gender_Bender" type="checkbox"> Gender Bender</label><br />
                                    <label><input name="Harem" type="checkbox"> Harem</label><br />
                                    <label><input name="Historical" type="checkbox"> Historical</label><br />
                                    <label><input name="Horror" type="checkbox"> Horror</label><br />
                                    <label><input name="Josei" type="checkbox"> Josei</label><br />
                                    <label><input name="Magic" type="checkbox"> Magic</label>
                            </div>
                            <div class="Search_Box_Part2">
                                    <label><input name="Martial_Art" type="checkbox"> Martial Art</label><br />
                                    <label><input name="Mature" type="checkbox"> Mature</label><br />
                                    <label><input name="Mecha" type="checkbox"> Mecha</label><br />
                                    <label><input name="Medical" type="checkbox"> Medical</label><br />
                                    <label><input name="Music" type="checkbox"> Music </label><br />
                                    <label><input name="Mystery" type="checkbox"> Mystery</label><br />
                                    <label><input name="One_Shot" type="checkbox"> One Shot</label><br />
                                    <label><input name="Psychological" type="checkbox"> Psychological</label>
                            </div>
                            <div class="Search_Box_Part2">
                                    <label><input name="Romance" type="checkbox"> Romance</label><br />
                                    <label><input name="School_Life" type="checkbox"> School Life</label><br />
                                    <label><input name="Sci_Fi" type="checkbox"> Sci Fi</label><br />
                                    <label><input name="Seinen" type="checkbox"> Seinnen</label><br />
                                    <label><input name="Shojou" type="checkbox"> Shojou</label><br />
                                    <label><input name="Shojou_Ai" type="checkbox"> Shojou Ai</label><br />
                                    <label><input name="Shonen" type="checkbox"> Shonen</label><br />
                                    <label><input name="Shounen_Ai" type="checkbox"> Shounen Ai</label>
                            </div>
                            <div class="Search_Box_Part2" style="margin-right:0px;">
                                    <label><input name="Slice_of_Life" type="checkbox"> Slice of Life</label><br />
                                    <label><input name="Smut" type="checkbox"> Smut</label><br />
                                    <label><input name="Sports" type="checkbox"> Sports</label><br />
                                    <label><input name="Supernatural" type="checkbox"> Supernatural</label><br />
                                    <label><input name="Stagedy" type="checkbox"> Tragedy</label><br />
                                    <label><input name="Webtoon" type="checkbox"> Webtoon</label><br />
                                    <label><input name="Yaoi" type="checkbox"> Yaoi</label><br />
                                    <label><input name="Yuri" type="checkbox"> Yuri</label>
                            </div>
                        </form>
                    </div>
                </div>
          	</div>
		</div>
	</div>
	<div id="contents">
		<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 250px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 250px; overflow: hidden;">
           	<?php include"slider_content.php"; ?>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:21px;height:21px;">
                <div data-u="numbertemplate"></div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    	</div>
    <div class="clearfix">
    	<h1><?php echo"Kết quả cho ".$d; ?></h1>
        <?php include"Result_manga_search.php"; ?>
  	</div>
        <div class="clearfix2">
        	<div id="part3-navigation">
                <ul>
                    <li><a href="#">Bình chọn</a></li>
                    <li><a href="#">Được đọc nhiều nhất</a></li>
                   	<li><a href="#">Top Tuần</a></li>
                    <li><a href="#">Top Tháng</a></li>
                    <li><a href="#">Top Năm</a></li>
               	</ul>
            </div>
            <div class="part3-content-manga">
            	<table>
                	<?php include"Top.php"; ?>
                </table>
            </div>
        </div>
	</div>
    <div id="footer">
    	<p>Designer : <a href="https://www.facebook.com/nhokutevalanhlung">Snie</a> , <a href="https://www.facebook.com/quocthang.nguyenhuu">NH QThắng</a></p>
        <p>Programer : <a href="https://www.facebook.com/nhokutevalanhlung">Snie</a> , <a href="https://www.facebook.com/quocthang.nguyenhuu">NH QThắng</a> , <a href="https://www.facebook.com/takei.hikaru">Jason Vu</a> , <a href="https://www.facebook.com/GeroHoshigami">Gero</a></p>
        <p>Địa chỉ liên hệ : Khoa01222133097@gmail.com</p>
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
	
    



