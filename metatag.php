<?php 
	define("pagename", "META Tag Generator"); 
	define("level1", "projects");
	define("file1", "projects.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>{Tom Lianza} META Tag generator</title>
	<link rel="STYLESHEET" type="text/css" href="common.css" />
	<link href="." rel="start" dir="ltr" xml:lang="en" lang="en" />
	<script language="JavaScript" type="text/javascript">
	var tempVar;
	
	function updateTags(){
		var theForm = document.forms[0];
		var tagString = "";
		
		//The scripting language
		if (theForm.c_scripting[theForm.c_scripting.selectedIndex].value != ""){
			tempVar = theForm.c_scripting[theForm.c_scripting.selectedIndex].value;
			tagString += "<meta http-equiv=\"Content-Script-Type\" content=\""+tempVar+"\" /> \n";
		}
		//The style sheet language
		if (theForm.c_style[theForm.c_style.selectedIndex].value != ""){
			tempVar = theForm.c_style[theForm.c_style.selectedIndex].value;
			tagString += "<meta http-equiv=\"Content-Style-Type\" content=\""+tempVar+"\" /> \n";
		}
		//The expiration date
		if (theForm.c_expires.value != ""){
			//window.alert("okay");
			var numDays = theForm.c_expires.value;
			if(!isNaN(numDays)){
				var today = new Date();
				var theDate =  new Date(today.getTime() + numDays*24*60*60*1000);
				tagString += "<meta http-equiv=\"Content-Language\" content=\""+theDate+"\" /> \n";
			}
		}
		//The author
		if (theForm.c_author.value != ""){
			tagString += "<meta name=\"author\" content=\""+theForm.c_author.value+"\" /> \n";
		}
		//The copyright message
		if (theForm.c_copyright.value != ""){
			tagString += "<meta name=\"copyright\" content=\""+theForm.c_copyright.value+"\" /> \n";
		}
		//The keywords
		if (theForm.c_keywords.value != ""){
			tagString += "<meta name=\"keywords\" content=\""+theForm.c_keywords.value+"\" /> \n";
		}
		//The description
		if (theForm.c_description.value != ""){
			tagString += "<meta name=\"description\" content=\""+theForm.c_description.value+"\" /> \n";
		}
		//The robots
		if (theForm.c_robots.value != ""){
			tagString += "<meta name=\"robots\" content=\""+theForm.c_robots.value+"\" /> \n";
		}
		//The content language
		if (theForm.c_language.value != ""){
			tagString += "<meta name=\"Content-Language\" content=\""+theForm.c_language.value+"\" /> \n";
		}
		
		//Update the tag field
		theForm.c_metatags.value = tagString;
	}
	</script>
</head>

<body background="images/purp-bg.gif" onLoad="updateTags();">

<br>&nbsp;<br>
<table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td class="breadcrumb"><?php require("tree.php")?></td>
	<td align="right"><?print($titleString)?></td>
</tr>
<tr>
	<td colspan="2">
	<form action="">
	<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#C0C0C0">
	<tr>
		<td class="maintext">The purpose of this tool is to allow you to quickly generate standards-compliant META tags.  Not having found a complete META tag generator that I liked, I hope you find this useful.</td>
	</tr>
	<tr>
		<td class="maintext"><div class="largesect">Fill Out Information</div></td>
	</tr>
	<tr><td>
		<table cellspacing="0" cellpadding="0">
		<tr>
			<td class="maintext">Default scripting language</td>
			<td><select name="c_scripting" onChange="updateTags();">
					<option value="">&lt;select&gt;</option>
					<option value="text/javascript" SELECTED>JavaScript</option>
					<option value="text/vbscript">VBScript</option>
					<option value="text/tcl">TCL</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="maintext">Default style sheet language</td>
			<td><select name="c_style" onChange="updateTags();">
					<option value="">&lt;select&gt;</option>
					<option value="text/css" SELECTED>CSS</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="maintext">Author</td>
			<td><input type="text" name="c_author" size="25" maxlength="100" onChange="updateTags();"></td>
		</tr>
		<tr>
			<td class="maintext">Copyright</td>
			<td><input type="text" name="c_copyright" value="&copy; 2001" size="25" maxlength="100" onChange="updateTags();"></td>
		</tr>
		<tr>
			<td class="maintext">Keywords (comma-separated)</td>
			<td><textarea cols="25" rows="2" name="c_keywords" onChange="updateTags();"></textarea></td>
		</tr>
		<tr>
			<td class="maintext">Description</td>
			<td><textarea cols="25" rows="2" name="c_description" onChange="updateTags();"></textarea></td>
		</tr>
		<tr>
			<td class="maintext">Robots</td>
			<td><select name="c_robots" onChange="updateTags();">
					<option value="">&lt;select&gt;</option>
					<option value="INDEX,FOLLOW">index and follow</option>
					<option value="INDEX,NOFOLLOW">index, don't follow</option>
					<option value="NOINDEX,FOLLOW">don't index, follow</option>
					<option value="NOINDEX,NOFOLLOW">neither index nor follow</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="maintext">Expires (days from today)</td>
			<td class="maintext"><input type="text" name="c_expires" value="" size="5" maxlength="10" onChange="updateTags();"></td>
		</tr>
		<tr>
			<td class="maintext">Cache page</td>
			<td><select name="c_cache" onChange="updateTags();">
					<option value="" SELECTED>Yes (default)</option>
					<option value="no-cache">NO</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="maintext">Content Language</td>
			<td><select name="c_language" onChange="updateTags();">
					<option value="en-US">English - USA</option>
					<option value="en-GB">English - Great Britain</option>
					<option value="es">Spanish</option>
				</select>
			</td>
		</tr>
		</table>
	</td></tr>
	<tr>
		<td class="maintext"><div class="largesect">Your META Tags</div></td>
	</tr>
	<tr>
		<td align="center"><textarea cols="60" rows="12" name="c_metatags"></textarea></td>
	</tr>
	</table></form>
	</td>
</tr>
<tr>
	<td class="breadcrumb"><?php require("tree.php")?></td>
</tr>
</table>




</html>