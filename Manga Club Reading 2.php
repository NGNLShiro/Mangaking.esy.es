<?php include "connection.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
	<?php
		$b = 1;
		include "Manga_Name_Title.php"; 
	?>
</title>

	<link rel="stylesheet" type="text/css" href="CSS/Manga Club Reading.css" />



</head>

<body>
	<div id="header">
		<div class="clearfix1">
			<div class="logo">
				<a href="#"><img style="width:250px; height:150px; float:left; position:absolute; top:0px;" src="Pictures/Logo.png" /></a>
			</div>
            <div id="search">
            	<form action="#" method="post">
                	<input id="header-search" name="header-search" type="text" placeholder="Search . . .">
                    <input id="header-submit" name="header-submit" type="submit" value="Tìm kiếm">
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
                                    <label><input name="Stagedy" type="checkbox"> Stragedy</label><br />
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
        <div class="clearfix">
        	<div id="content-title">
            	<div id="content-title-name">
                	<a href="#">Name of Manga</a>
                </div>
                <p>>></p>
                <div id="content-title-chapter">
                	<a href="#">Chapter Number</a>
                </div>
            </div>
            <div class="pre">
               	<a href="#"><button><< Chap trước </button></a>
            </div>
            <div class="content-choice">
            	<div class="choice">
                	<label class="click-choice-chapter" for="chapter-choice-top">Chap 1</label>
                    <input id="chapter-choice-top" type="checkbox" style="display:none;"/>
                    <div class="choice-chapter-content">
                    	<ul>
                        	<?php
								$a = 1;
								include "Manga_Chapter_Choice.php";
							?>
                        </ul>
                    </div>
                </div>
          	</div>
            <div class="next">
				<a href="#"><button>Tiếp theo >></button></a>
            </div>
            <div id="content-manga-img">
                	<?php
                		$x = 1;
						include "chapter_content.php";
                    ?>
            </div>
            <div class="pre">
               	<a href="#"><button><< Chap trước </button></a>
            </div>
            <div class="content-choice">
            	<div class="choice">
                	<label class="click-choice-chapter" for="chapter-choice-bottom">Chap 1</label>
                    <input id="chapter-choice-bottom" type="checkbox" style="display:none;"/>
                    <div class="choice-chapter-content">
                    	<ul>
                        	<?php
								$a = 1;
								include "Manga_Chapter_Choice.php";
							?>
                        </ul>
                    </div>
                </div>
          	</div>
            <div class="next">
				<a href="#"><button>Tiếp theo >></button></a>
            </div>
        </div>
        <div class="clearfix2">
        	<div id="content-comment">
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






