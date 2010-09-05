<?php
require_once('recaptchalib.php');
$publickey = "YOUR PUBLIC KEY";
$privatekey = "YOUR PVT KEY";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Twitter for Blood - tweet4blood</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="" content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta name="description" content="Twitter for Blood aka tweet 4 blood is where you can tweet your blood requests to all the followers. You dont have to login to tweet."/>
<meta name="keywords" content="twitter, blood, donor, donation, blood group, tweet, tweet4blood, twit, twitter tools, thej, thejesh, thejeshgn " />
  <!-- Framework CSS -->
	<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="css/print.css" type="text/css" media="print">
  <!--[if IE]><link rel="stylesheet" href="/css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
<style>
body{font-family:georgia,helvetica;}
#header{height:100px;padding-left:15px;}
#desc{font-size:1.1em;border-top:1px solid #888;border-bottom:1px solid #888;background-color:#FAFAFA;padding-top:5px;padding-bottom:5px;padding-left:5px;font-style:italic;}
#footer ul,#footer li{list-style-type:none;float:left;}
#footer li{margin:1px 10px;}
#footer{text-align:center;background-color:#f9f9f9;border-top:1px solid #aeaeae;padding-top:5px;margin-top:5px;}
label{padding:5px;}
#desc{display:block;}
#desc-button{cursor:pointer;font-weight:bold;text-align:center;margin:0px auto;}
.nomargin{margin:0px;}
.desc-text,.desc-link{padding:0px 15px;}
#content{margin-top:10px;}
#content-body{padding:5px;}
input[type=button],input[type=submit]{background-color:#FAFAFA;border:1px solid #434343; padding:5px;font-weight:bold;-moz-border-radius:3px;font-family:georgia;margin:5px;}
#sidebar{padding:5px;background-color:#FAFAFA;}
#sidebar li{list-style-type:circle;padding-bottom:4px;}
a{text-decoration:none;color:#0084B4;}
a:hover{text-decoration:underline;}
#tweets{padding:5px;background-color:#FEFEFE;}
#tweet-form{}
</style>

<script>
function previewTweet(){
msg ="<p class='notice'><b>Preview Tweet:</b> REQ "+document.getElementById('group')[document.getElementById('group').selectedIndex].value+" AT #"+document.getElementById('city').value+" CONTACT "+document.getElementById('contact').value+" INFO "+document.getElementById('info').value+"</p>";
document.getElementById('preview').innerHTML=msg;
}

function validateTweet(){
	error = false;
	msg ="<p class='error' ><b>ERROR:</b>Please enter";
	if(document.getElementById('city').value==""){
	msg=msg+" city name";
	error = true;
	}
	if(document.getElementById('contact').value ==""){
	msg=msg+", contact name";
	error = true;
	}
	if(document.getElementById('info').value == ""){
	msg=msg+", contact info";
	error = true;
	}
	msg=msg+".</p>";
	if(error){
		document.getElementById('preview').innerHTML=msg;

		return false;
	}else{
		return true;
	}
}


function toggleAbout(){
var desc=document.getElementById('desc');

if(desc.style.display=='block' || desc.style.display==''){desc.style.display='none';}
else if(desc.style.display=='none'){desc.style.display='block';}

}
function init(){
var desc=document.getElementById('desc');
desc.style.display='none';
}
</script>



</head>
<body  >

	<div class="container">
	
	<div id="header" class="span-24 last">
	<h1 class="span-16" ><a href="http://tweet4blood.com"><img alt="Tweet 4 Blood" src="logo.png" /></a> </h1>
	</div>

<!--
<div id="desc-button" onclick="javascript:toggleAbout();" >V</div>
-->
<div id="desc" class="span-24  last">
	
		<div  class="span-14   desc-text">
	<p class="alt" > 
	Using tweet 4 blood you can tweet your blood requests to followers @tweet4blood who are donors. Tweets are also hashtagged city wise for easy finding.
You dont have to login to tweet it from here. But make sure not to spam the community.</p>
<p><b><a href="http://tweet4blood.com/camp.php">-Announce a blood donation camp</a></b></p>
	
	</p>
	</div>
	
	<div class="span-8  last desc-link">
<p class="alt" > Please follow @tweet4blood if you are a blood donor.</p>	
	
	
	<a class="a2a_dd" href="http://www.addtoany.com/share_save?linkname=Tweet%204%20Blood&amp;linkurl=http%3A%2F%2Ftweet4blood.com"><img style="border-width: 0pt;" src="http://static.addtoany.com/buttons/share_save_171_16.gif" alt="Share/Save/Bookmark" border="0" width="171" height="16"></a><script type="text/javascript">a2a_linkname="Tweet 4 Blood";a2a_linkurl="http://tweet4blood.com";</script><script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
		
	
	
	</div>

	</div>
	
	
	
	<div id="content" class="span-24 last">
	<div id="content-body" class="span-16  ">
	
	<div id="tweet-form" class="span-15 prepend-1 last">
	
	
	<!-- start of middle form-->
					<h3>Tweet your blood request:</h3>

					<form action="" method="post" onchange="previewTweet();" onSubmit="return validateTweet();">
					<p> <label>Req</label><select id="group" name="group"><option value="A+VE">A+VE</option><option value="A-VE">A-VE</option><option value="B+VE">B+VE</option><option value="B-VE">B-VE</option><option value="AB+VE">AB+VE</option><option value="AB-VE">AB-VE</option><option value="O+VE">O+VE</option><option value="O-VE">O-VE</option><option value="Any GRP">ANY</option></select>
					&nbsp;<label>at</label><input size="25" maxlength="25" id="city" name="city" type="input" class="text" > city.</p>

					<p><label>Contact</label>&nbsp;<input size="25" maxlength="25" id="contact" name="contact" type="input" class="text">.</p>
					<p><label>Contact Info</label>&nbsp;<input size="67" maxlength="67" id="info" name="info" type="input" class="text">.</p>
<?php
echo recaptcha_get_html($publickey);
?>





	
	<span id="preview"  class="span-12 prepend-1" ></span>
					<p><input type="submit" name="tweet" value="tweet" /></p>
					
<?php
if (isset($_POST["tweet"])) {
$resp = recaptcha_check_answer ($privatekey,
                                  $_SERVER["REMOTE_ADDR"],
                                  $_POST["recaptcha_challenge_field"],
                                  $_POST["recaptcha_response_field"]);
	if ($resp->is_valid) {
		require_once('./auth/twitteroauth/twitteroauth.php');
		require_once('./auth/config.php');

		$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_TOKEN_SECRET);
		$statusMsg = "REQ ".$_POST["group"]." AT #".$_POST["city"]." .CONTACT ".$_POST["contact"]." ".$_POST["info"];
		echo $statusMsg."<br>";
		$parameters = array('status' => $statusMsg);
		$twitter->post('statuses/update', $parameters);
		if( in_array($twitter->http_code , array(200,302)) ){
			echo "<p><b><font color=green>Your message is tweeted to <a href='http://twitter.com/tweet4blood'>@tweet4blood</a> community.</font></b></p>";
		}
		else{
			echo "<p>There was some error tweeting.. twitter might be down.</p>$twitter->http_code";
		}
	}else{
		echo "<span><b><font color=red>Captcha is not valid. We could not tweet the message. Try again.</font></b></span>";
	}
}
?>					
					
					
										</form>
				<!-- end of middle form-->
	
	</div>
	
	</div>
	<div id="sidebar" class="span-7 last">
	<div id="tweets">


<div id="twitter_div">
<h5>Recent Requests</h5>
<ul id="twitter_update_list"></ul>
<a href="http://twitter.com/tweet4blood" id="twitter-link" style="display:block;text-align:right;">follow me on Twitter</a>
</div>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/tweet4blood.json?callback=twitterCallback2&amp;count=7"></script>


	</div>
	</div>
	
	</div>
	
	<div id="footer" class="span-24 last">
	
		
	<ul class="span-22 prepend-1 append-1 last">

	
	
<li><a href="http://tweet4blood.com/feedback.html">Give your feedback here</a> or tweet to <a href="http://twitter.com/thej">@thej</a></li>	
<li><a href="http://twitter.com/tweet4blood">@tweet4blood</a></li>
<li><a href="http://thejeshgn.com">Thejesh GN Project</a></li>
<li><a href="http://thejeshgn.com/tag/tweet4blood/">blog</a></li>
<li>Donate:&nbsp;<a href="http://thejeshgn.com/payme/">Paypal</a></li>
<li>Design Credit:&nbsp;<a href="http://vinayraikar.com/">VSR</a></li>

	</ul>
	
	</div>
	
	
	</div>
	
	
	
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-51179-13");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
