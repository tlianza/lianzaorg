<?php
//print out some js tracking
echo("<script src=\"http://www.google-analytics.com/urchin.js\" type=\"text/javascript\"></script>");
echo("<script type=\"text/javascript\">_uacct = \"UA-149162-1\";urchinTracker();</script>");
// This prints the tree stuff out

if (DEFINED("pagename") && DEFINED("level1")){
	echo ("<a href=\".\"  title=\"back to home page\"><font color=\"#FFFFFF\"><u>home</u></font></a> &gt; <a href=\"". file1 ."\"><font color=\"#FFFFFF\"><u>" . level1 . "</u></font></a> &gt; " . pagename);
}
else if (DEFINED("pagename")){
	echo ("<a href=\".\"  title=\"back to home page\"><font color=\"#FFFFFF\"><u>home</u></font></a> &gt; " . pagename);
}
else {
	echo ("<a href=\".\"  title=\"back to home page\"><font color=\"#FFFFFF\"><u>home</u></font></a> &gt; inner page");
}

$titleString = "<a href=\".\" class=\"myname\">".pagename."</a>";
?>