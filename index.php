<?php

//the utility that parses rss feeds
require('simplepie.inc');
$cache_location = './cache';

//set an error handler
function display_error($error, $error_string, $filename, $line, $symbols){
	echo "<p>The error '<b>$error_string</b>' occurred in the file '<i>$filename</i>' on line $line.</p>";	
}

date_default_timezone_set('America/Los_Angeles') ;

error_reporting(0); //show no errors-149162-1
//set_error_handler('display_error');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
	<title>Lianza.org</title>
<!--	<link rel="openid.server" href="http://www.myopenid.com/server" />
	<link rel="openid.delegate" href="http://tlianza.myopenid.com/" />
-->
<link rel="openid.server" href="https://indieauth.com/openid" />
<link rel="openid.delegate" href="http://lianza.org/" />
	<meta http-equiv="X-XRDS-Location" content="http://tlianza.myopenid.com/xrds" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta name="description" content="The personal home page of Tom Lianza" />
</head> 

<body>
	
<div id="wrapper">
	
	<div class="textchunk">
		<div class="sectionheader">About...</div>
		<a href="http://www.facebook.com/people/Tom_Lianza/4810243" rel="me">facebook</a> | <a href="http://www.linkedin.com/in/tlianza" rel="me">linkedin</a> | <a href="https://github.com/tlianza" rel="me">github</a> | <a href="http://stackoverflow.com/users/26624/tlianza" rel="me">stackoverflow</a> | <a href="https://plus.google.com/+TomLianza/" rel="me">google</a> | <a href="/blog/">blog</a> | other <a href="/projects.html">projects</a><br />
	</div>

<p class="sectionheader">Contact Me</p>

You can send me e-mail <a href="/mail.php">here</a>.


<p class="sectionheader">Me, online.</p>
	
<script type="text/javascript" src="http://friendfeed.com/embed/widget/tlianza?v=3&amp;num=10&amp;hide_logo=1"></script><noscript><a href="http://friendfeed.com/tlianza"><img alt="View my FriendFeed" style="border:0;" src="http://friendfeed.com/embed/widget/tlianza?v=3&amp;num=10&amp;hide_logo=1&amp;format=png"/></a></noscript>
	
<p>See some <a href="http://jokewars.com" title="The funniest jokes on the web">funny jokes</a>.</p>


</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-149162-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</html>
