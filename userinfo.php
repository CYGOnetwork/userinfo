<title>CYGO Network User Info Tool</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cygo.network/landing/wp-content/themes/mystem/style.css">
<style>
	body {
		background: #15191d;
		color: #fff;
	}
	p, h1, h2, h3, h4, h5 {
		color: #fff;
	}
	a {
		color:#23748f;
		text-decoration: underline;
	}
	.box {
		background: #1e2429;
		width: 35%;
		text-align: center;
		margin: auto;
		border: 20px solid #1e2429;
		
	}
	.lowerbox {
		width: 50%
		text-align: center
		margin: auto;
	}
</style>
<br/>
<center><img src="https://cygo.network/landing/wp-content/uploads/2020/04/cropped-newcygologofullwhite60percent.png" alt="CYGO logo"></center>
<br/>
<br/>
<div class="box">
<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
print "<center>";
print "<h1>";
print "Your IP address is ".$_SERVER['REMOTE_ADDR'];
print "</h1>";
print "<h3>";
print "Your hostname is " .$hostname;
print "<br/>";
print "<br/>";
print "Your user agent string is ".$_SERVER['HTTP_USER_AGENT'];
print "<br/>";
print "<br/>";
print "You accessed this website using port ".$_SERVER['REMOTE_PORT'];
print "</h3>";
print "</center>";
?>
</div>
<br/>
<br/>
<br/>
<center>
<div class="lowerbox">
<center>
<p>Don't want websites you visit to know this? Try using a VPN or downloading the <a href="https://www.torproject.org/">official TOR Browser bundle.</a></p>
<br/>
<p><strong>We do not collect, posess, or retain any of this information being presented to you on this page.</strong></p>
<p><a href="https://cygo.network/landing">Go back home</a></p>
</center>
</div>
