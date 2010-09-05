<?php
require_once('recaptchalib.php');
$publickey = "PUBLIC KEY";
$privatekey = "PVT KEY";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="" content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta name="description" content="Twitter for Blood aka tweet 4 blood is where you can tweet your blood requests to all the followers. You dont have to login to tweet."/>
<meta name="keywords" content="twitter, blood, donor, donation, blood group, tweet, tweet4blood, twit, twitter tools, thej, thejesh, thejeshgn " />
<script>
function previewTweet(){
msg ="<b>Preview Tweet:</b> REQ "+document.getElementById('group')[document.getElementById('group').selectedIndex].value+" AT #"+document.getElementById('city').value+" CONTACT "+document.getElementById('contact').value+" INFO "+document.getElementById('info').value;
document.getElementById('preview').innerHTML=msg;
}

function validateTweet(){
	error = false;
	msg ="<font color=red><b>ERROR</b>";
	if(document.getElementById('city').value==""){
	msg=msg+"<br>Please enter city name.";
	error = true;
	}
	if(document.getElementById('contact').value ==""){
	msg=msg+"<br>Please enter contact name.";
	error = true;
	}
	if(document.getElementById('info').value == ""){
	msg=msg+"<br>Please enter contact info.";
	error = true;
	}
	msg=msg+"</font>";
	if(error){
		document.getElementById('preview').innerHTML=msg;

		return false;
	}else{
		return true;
	}
}
</script>
<style>
body{margin:0px;padding:0px;font-family:Verdana,Helvetica;color:#566f29;font-size:0.9em;}
#header {border-top:5px solid #86a85e;border-left:1px solid #86a85e;margin-bottom:25px;-moz-border-radius-bottomleft:0px;-moz-border-radius-bottomright:0px;
-moz-border-radius-topleft:5px;-moz-border-radius-topright:0px;}
#footer{border-bottom:5px solid #86a85e;border-right:1px solid #86a85e;margin-top:20px;-moz-border-radius-bottomleft:0px;-moz-border-radius-bottomright:5px;
-moz-border-radius-topleft:0px;-moz-border-radius-topright:0px;padding:0px 10px 3px 0px;text-align:right;font-size:0.7em;}
#message{padding:5px;background:#f8ffd7;margin:5px 0px;}
a{color:#5FBF17;text-decoration:none;}
a:hover{color:#7FDF37;text-decoration:none;}
</style>
</head>
<body>
<div id="header"/>
<table>
<tr class="head"><td><a href="http://tweet4blood.com"><img width="253px" height="71px" src="http://media.thejeshgn.com/img/logo/tweet4blood.png" border="0" alt="Twitter for Blood aka tweet 4 blood" title="Twitter for Blood aka tweet 4 blood"/></a></td></tr>
<tr class="body"><td>
<table>
	<tr>	
		<td width="25%"><b>About:</b>
			<p><img src="http://s3.amazonaws.com/twitter_production/profile_images/79756732/blood_normal.jpg" style="float: left;" border="0">Using tweet 4 blood you can tweet your blood requests to followers <a href="http://twitter.com/tweet4blood/">@tweet4blood</a> who are donors. Tweets are also hashtagged city wise for easy finding.</p> 
			<p>You dont have to login to tweet it from here. But make sure not to spam the community.</p>
			<p>Please follow <a href="http://twitter.com/tweet4blood/">@tweet4blood</a> if you are a blood donor.</p>
			<br>
			<center> 
			<a class="a2a_dd" href="http://www.addtoany.com/share_save?linkname=Tweet%204%20Blood&amp;linkurl=http%3A%2F%2Ftweet4blood.com"><img style="border-width: 0pt;" src="http://static.addtoany.com/buttons/share_save_171_16.gif" alt="Share/Save/Bookmark" border="0" width="171" height="16"></a><script type="text/javascript">a2a_linkname="Tweet 4 Blood";a2a_linkurl="http://tweet4blood.com";</script><script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
			</center>
		</td>
		<td>
				<!-- start of middle form-->
					<h3>Tweet your blood request now</h3>
					<form action="http://tweet4blood.com/index.php" method="post" onSubmit="return validateTweet();">
					<p> <b>REQ</b>&nbsp;<select id="group" name="group"><option value="A+VE">A+VE</option><option value="A-VE">A-VE</option><option value="B+VE">B+VE</option><option value="B-VE">B-VE</option><option value="AB+VE">AB+VE</option><option value="AB-VE">AB-VE</option><option value="O+VE">O+VE</option><option value="O-VE">O-VE</option><option value="Any GRP">ANY</option></select>&nbsp;<b>AT</b>&nbsp;<input size="25" maxlength="25" id="city" name="city" type="text"> city.</p>
					<p><b>CONTACT</b>&nbsp;<input size="25" maxlength="25" id="contact" name="contact" type="text">.</p>
					<p><b>CONTACT INFO</b>&nbsp;<input size="67" maxlength="67" id="info" name="info" type="text">.</p>
					<?php
					echo recaptcha_get_html($publickey);
					?>
					<font color="red"><span id="preview"></span></font>
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
								$pw = "Your password";
								$twitter = new Twitter($uid, $pw);
								$statusMsg = "REQ ".$_POST["group"]." AT #".$_POST["city"]." .CONTACT ".$_POST["contact"]." ".$_POST["info"];
								echo $statusMsg."<br>";
								$twitter->updateStatus($statusMsg);
								echo "<span><b><font color=green>Your message is tweeted to <a href='http://twitter.com/tweet4blood'>@tweet4blood</a> community.</font></b></span>";
							}else{
								echo "<span><b><font color=red>Captch is not valid. We could not tweet the message. Try again.</font></b></span>";
							}
					}
					?>
					</form>
				<!-- end of middle form-->
		</td>
		<td width="30%">&nbsp;</td>
	</tr>
</table>
</td></tr>
<tr class="foot"><td></td></tr>
<table>
<div id="footer"><b>Feedback:</b>
	DM or @reply  to <a href="http://twitter.com/thej">@thej</a>
	or email
	<a href="http://thejeshgn.com/contact">i at thejeshgn dot com</a>&nbsp;|&nbsp;<a href="http://twitter.com/tweet4blood">@tweet4blood</a>&nbsp;|&nbsp;<a href="http://thejeshgn.com">Thejesh GN Project</a>&nbsp;|&nbsp;<a href="http://vinayraikar.com/">VSR</a></div>
</body>
</html>