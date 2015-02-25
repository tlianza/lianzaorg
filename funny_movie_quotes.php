<?php 
	define("pagename", "funny movie quotes");
	define("level1", "funny quotes");
	define("file1", "funny_quotes.php");
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>{Tom Lianza} <?php echo(pagename)?></title>
	<link rel="STYLESHEET" type="text/css" href="common.css">
	<link href="." rel="start" dir="ltr" xml:lang="en" lang="en" />
</head>

<body background="images/purp-bg.gif">
<DIV ID="overDiv" STYLE="position:absolute; visibility:hide; z-index:1;"></DIV>
<script language="JavaScript" src="overlib.js" type="text/javascript"></script>

<br>&nbsp;<br>
<table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td class="breadcrumb"><?php require("tree.php")?></td>
	<td align="right"><?print($titleString)?></td>
</tr>
<tr>
	<td colspan="2">
	<table width="100%" border="0" cellspacing="5" cellpadding="2" bgcolor="#C0C0C0">
	<tr>
		<td colspan="3" class="smallsect">These are some my favorite funny quotes from movies.  Enjoy!</td>
	</tr>
	<tr>
		<td class="coltitle"><b>Movie</b></td>
		<td class="coltitle"><b>Quote</b></td>
		<td class="coltitle"><b>Sound</b></td>
	</tr>
	<tr>
		<td class="maintext"><a href="http://us.imdb.com/Title?0120654">Dirty Work</a></td>
		<td class="maintext">
			Mitch: "I've never seen so many dead hookers in all my life."
			<br>Random Guy: "Lord knows I have."
		</td>
		<td class="maintext"></td>
	</tr>
	<tr>
		<td class="maintext"><a href="http://us.imdb.com/Title?0109686">Dumb and Dumber</a></td>
		<td class="maintext">
			Harry: "What's her last name, I'll look it up."
			<br>Lloyd: "Ahh...you know I don't really recall..."   
			<br>Harry: "Maybe it's on the briefcase, look on the--"   
			<br>Lloyd: "Oh yeah! It's right here - Samsonite.  I was way off."
		</td>
		<td class="maintext"><a href="sounds/movie_sampsnte.wav">.wav</a></td>
	</tr>
	<tr>
		<td class="maintext"><a href="http://us.imdb.com/Title?0080339">Airplane!</a></td>
		<td class="maintext">
			Boy: "Cream?"
			<br>Girl: "No thank you, I take it black... like my men."   
		</td>
		<td class="maintext"><a href="sounds/movie_black.wav">.wav</a></td>
	</tr>
	<tr>
		<td class="maintext"><a href="http://us.imdb.com/Title?0080339">Airplane!</a></td>
		<td class="maintext">
			Doctor: "What was it we had for dinner tonight?"
			<br>Flight Attendant: "Well, we had a choice - steak or fish."
			<br>Doctor: "Yes, I remember, I had lasagna."   
		</td>
		<td class="maintext"><a href="sounds/movie_lasagna.wav">.wav</a></td>
	</tr>
	<tr>
		<td class="maintext"><a href="http://us.imdb.com/Title?0116483">Happy Gilmore</a></td>
		<td class="maintext">
			Shooter McGavin: "You're in big trouble pal, I eat pieces of shit like you for breakfast."
			<br>Happy Gilmore: "You eat pieces of shit for breakfast?"   
			<br>Shooter McGavin: "No!"
		</td>
		<td class="maintext"><a href="sounds/movie_happyshitbrkfst.wav">.wav</a></td>
	</tr>
	<tr>
		<td class="maintext"><a href="http://us.imdb.com/Title?0112508">Billy Madison</a></td>
		<td class="maintext">
			"Mr. Madison, what you've just said is one of the most insanely 
			idiotic things I have ever heard.  At no point in your rambling, 
			incoherent response were you even close to anything that could be 
			considered a rational though.  Everyone in this room is now dumber 
			for having listened to it.  I award you no points and may God have 
			mercy on your soul."
		</td>
		<td class="maintext"><a href="sounds/movie_everyoneisnowdumber.wav">.wav</a></td>
	</tr>
	
	</table>
	</td>
</tr>
<tr>
	<td class="breadcrumb"><?php require("tree.php")?></td>
</tr>
</table>
<p>&nbsp;</p>



</html>