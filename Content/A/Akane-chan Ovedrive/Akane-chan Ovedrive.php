<?php include"../../../connection.php"; ?>
<?php
	$a = 10;
	$tbname = "manga-name-a";
	$tbnamechapter = "manga-name-a-chapter";
	$tbnamechaptercontent = "manga-name-a-chapter-content";
	$bxh = "bxh";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include"../../../Manga_Name_Title.php"; ?></title>
		
        
        
		<link rel="stylesheet" type="text/css" href="../../../CSS/Manga Chapter.css" />





</head>

<body>
	<hr />
	<div id="header">
		<div class="clearfix1">
        	<div id="logo">
            	<a href="../Adventure Boy/mangaking.esy.es"><img src="../../../Pictures/Logo.png" /></a>
            </div>
        	<div id="banner">
            	<img src="../../../Pictures/Banner.png" />
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
                                    	<?php include"../../../genre-content-column1.php"; ?>
                                    </ul>
                                </div>
                                <div class = "genre-content-column">
                                	<ul>
                                    	<?php include"../../../genre-content-column2.php"; ?>
                                    </ul>
                                </div>
                                <div class = "genre-content-column">
                                	<ul>
                                    	<?php include"../../../genre-content-column3.php"; ?>
                                    </ul>
                                </div>
                                <div class = "genre-content-column">
                                	<ul>
                                    	<?php include"../../../genre-content-column4.php"; ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a class="a-navigation" href="#">Truyện mới</a></li>
                        <li><a class="a-navigation" href="#">Mới cập nhật</a></li>
                        <li><a class="a-navigation" href="#">Truyện full</a></li>
                    </ul>
                </div>
                <form action="../../../Search Result.php" method="post">
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
       	<div class="clearfix">
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
        	<div id="column1">
                <div id="content-manga-img">
                    <?php include"../../../content_manga_img.php"; ?>
                </div>
                <div id="content-manga-text">
                    <?php include"../../../content_manga_text.php"; ?>
                </div>
                <div id="content-manga-summary">
                    <div id="content-manga-summary-title">
                    	<p style="text-transform:uppercase;">NỘI DUNG TRUYỆN <span style="color:red;"><?php include"../../../Manga_Name_Title.php"; ?></span> : </p>
                    </div>
                    <div id="content-manga-summary-text">
                    	<?php include"../../../content_manga_summary.php"; ?>
                    </div>
                </div>
                <div id="manga-chapter-list">
                	<div id="manga-chapter-list-title">
                    	<p>DANH SÁCH CHAP</p>
                    </div>
                    <div id="manga-chapter-list-content-title">
                    	<div class="manga-chapter-list-content-title">
                            <p>Chapter</p>
                        </div>
                        <div class="manga-chapter-list-content-title">
                            <p>Ngày ra</p>
                        </div>
                        <div class="manga-chapter-list-content-title">
                          	<p>Lượt xem</p>
                        </div>
                    </div>
                    <div id="manga-chapter-list-content">
                    	<div id="manga-chapter-list-content-number">
                            <div class="manga-chapter-list-content-choice">
                            	<?php include"../../../manga_chapter_list_content_number.php"; ?>
                            </div>
                        </div>
                        <div id="manga-chapter-list-content-date">
                            <div class="manga-chapter-list-content-choice">
                            	<?php include"../../../manga_chapter_list_content_date.php"; ?>
                            </div>
                        </div>
                        <div id="manga-chapter-list-content-views">
                            <div class="manga-chapter-list-content-choice">
                            	<?php include"../../../manga_chapter_list_content_views.php"; ?>
                            </div>
                        </div>
                    </div>
                    <hr />
                </div>
            </div>
            <div id="column2">
                <div id="column2-part1">
                	<div id="column2-part1-title">
                    	<p>-Bảng Xếp Hạng-</p>
                    </div>
                    <ul>
                        <?php include"../../../Top.php"; ?>
                    </ul>
                    <hr />
                </div>
                <div id="column2-part2">
                	<div id="column2-part2-title">
                    	<p>-Truyện Tương Tự-</p>
                    </div>
                    <ul>
                    	<?php include"../../../manga_same_content.php"; ?>
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
			if(window.scrollY >= 104)
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
            $.post("../../../getState.php",{partialState:value},function(data){
                $("#results").html(data);
            });
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



