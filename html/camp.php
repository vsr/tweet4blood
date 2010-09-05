<?php
require_once('recaptchalib.php');
$publickey = "YOURPUBLICKEY";
$privatekey = "YOURPVTKEY";
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
msg ="<p class='notice'><b>Preview Tweet:</b> BLOOD DONATION CAMP AT "+document.getElementById('venue').value+" ON "+ document.getElementById('date').value +" IN #"+document.getElementById('city').value+" "+document.getElementById('info').value+"</p>";
document.getElementById('preview').innerHTML=msg;
}

function validateTweet(){
	error = false;
	msg ="<p class='error' ><b>ERROR:</b>Please enter";
	if(document.getElementById('city').value==""){
	msg=msg+" city name";
	error = true;
	}
	if(document.getElementById('venue').value ==""){
	msg=msg+", venue of the camp";
	error = true;
	}
	if(document.getElementById('info').value == ""){
	msg=msg+", camp info";
	error = true;
	}if(document.getElementById('date').value == ""){
	msg=msg+", date";
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
	<h1 class="span-16" ><a href="http://tweet4blood.com"><img style="float:left;"alt="Tweet 4 Blood" src="logo.png" /></a> </h1><h2>Blood Camp Announcement</h2>
	</div>

<!--
<div id="desc-button" onclick="javascript:toggleAbout();" >V</div>
-->
<div id="desc" class="span-24  last">
	
		<div  class="span-14   desc-text">
	<p class="alt" > 
	Using tweet 4 blood you can tweet your blood requests to followers @tweet4blood who are donors. Tweets are also hashtagged city wise for easy finding.
You dont have to login to tweet it from here. But make sure not to spam the community.</p>
<p><b>-<a href="http://tweet4blood.com">Send your personal blood request</a></b>
</p>

	
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
					<h3>Tweet your blood donation camp info:</h3>

					<form action="http://tweet4blood.com/camp.php" method="post" onSubmit="return validateTweet();">
					<p><label>Blood donation camp at</label><input size="25" maxlength="25" id="venue" name="venue" type="input" value="camp venue" class="text" > 
					<p><label>In &nbsp;city</label><input size="20" maxlength="20" id="city" name="city" type="input" class="text"> </p>
					<p><label>On date</label> <input size="9" maxlength="9" id="date" name="date" type="date" value="01-jan-09" class="text" ></p>
					<p><label>For more Info at</label>&nbsp;<input size="55" maxlength="55" id="info" name="info" value="timings, notes etc" type="input" class="text">.</p>
<?php
echo recaptcha_get_html($publickey);
?>





	
	<span id="preview"  class="span-12 prepend-1" ></span>
					<p><input type="button" value="preview" onclick="previewTweet();"/>

					<input type="submit" name="tweet" value="tweet" /></p>
					
<?php
if ($_POST["tweet"]) {
$resp = recaptcha_check_answer ($privatekey,
                                  $_SERVER["REMOTE_ADDR"],
                                  $_POST["recaptcha_challenge_field"],
                                  $_POST["recaptcha_response_field"]);
	if ($resp->is_valid) {
		require_once('twitter.lib.php');
		$uid ="tweet4blood";
		$pw = "YOUR PASSWORD";
		$twitter = new Twitter($uid, $pw);
		$statusMsg = "BLOOD DONATION CAMP AT ".$_POST["venue"]." ON ".$_POST["date"]." AT #".$_POST["city"]."  ". $_POST["info"];
		echo $statusMsg."<br>";
		$twitter->updateStatus($statusMsg);
		echo "<span><b><font color=green>Your donation camp message is tweeted to <a href='http://twitter.com/tweet4blood'>@tweet4blood</a> community.</font></b></span>";
	}else{
		echo "<span><b><font color=red>Captch is not valid. We could not tweet the message. Try again.</font></b></span>";
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

	
	
<li>	<a href="http://tweet4blood.com/feedback.html">Give you Feedback or Suggestions here</a> or tweet to <a href="http://twitter.com/thej">@thej</a>
	</li>
	<li><a href="http://twitter.com/tweet4blood">@tweet4blood</a>
	</li>
	<li><a href="http://vinayraikar.com/">VSR</a></li>
<li><a href="http://thejeshgn.com">Thejesh GN Project</a></li>
<li><a href="http://thejeshgn.com/tag/tweet4blood/">blog</a></li>
<li>Donate:&nbsp;<a href="http://thejeshgn.com/payme/">Paypal</a></li>

	
	
	
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