<?php include"../config/webconfig.php"; ?>
<?php include "../app/admin/connection.php"; ?>
<?php
	$b = $_POST['b'];
	$a = $_POST['a'];
	
	$tbname = "manga-name-a";
	$tbnamechapter = "manga-name-a-chapter";
	$tbnamechaptercontent = "manga-name-a-chapter-content";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include "../app/admin/Manga_Name_Title.php"; ?> - Chap <?php include "../app/admin/chapter-display-present.php"; ?></title>

	<link rel="stylesheet" type="text/css" href="../contents/css/Manga Club Reading.css" />



</head>

<body>
	<div id="fb-root"></div>
	<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1190417454310493";
				  fjs.parentNode.insertBefore(js, fjs);
			}
			(document, 'script', 'facebook-jssdk'));
        </script>
	<hr />
	<div id="header">
		<div class="clearfix1">
            <div id="logo">
            	<a href="http://mangaking.esy.es"><img src="../contents/img/Logo.png" /></a>
            </div>
        	<div id="banner">
            	<img src="../contents/img/Banner.png" />
            </div>
            <div id="log-in">
            	<p onClick="activelogin()">Đăng nhập <span>và</span> Đăng ký</p>
            </div>
			<div id="navigation">
            	<div id="ul-navigation">
                    <ul>
                        <li>Tắt đèn</li>
                        <li><a href="http://mangaking.esy.es">Trang chủ</a></li>
                        <?php include"../app/admin/chap_pre.php"; ?>
                        <li id="chap-number">Chap <?php include"../app/admin/chapter-display-present.php"; ?>/<?php include"../app/admin/chapter-display-all.php"; ?></li>
                        <?php include"../app/admin/chap_next.php"; ?>
                        <li><a href="#">Theo dõi truyện</a></li>
                    </ul>
                </div>
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
            <div id="content-manga-img">
                	<?php
						include "../app/admin/chapter_content.php";
                    ?>
            </div>
        </div>
        <div class="clearfix2">
        	<div id="content-comment">
            	<div class="fb-comments" data-href="" data-width="600" data-numposts="5"></div>
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


	<script type="text/javascript" src = "contents/js/login.js"></script>
    
    
    
    
    
    

