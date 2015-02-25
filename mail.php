<?php define("pagename", "contact me"); ?>

<?php
$body = "";
$mailok = "There was an error sending your message:";

if(isset($_POST['c_mbody'])){
	$body = $_POST['c_mbody'];
        $body = $body . "\n e-mail: ";
        $body = $body . $_POST['c_emailaddr'];
	 if ( mail("postman@lianza.org", "Lianza.org Message", $body) ){
                $mailok = "Your message has been sent:";
        }
}

/*
if (in_array("c_mbody", array_keys($HTTP_POST_VARS))){
	$body = $c_mbody;
	$body = $body . "\n e-mail: ";
	$body = $body . $c_emailaddr;
	if ( mail("postman@lianza.org", "Lianza.org Message", $body) ){
		$mailok = "Your message has been sent:";
	}
}
*/
$mailsent = strcmp($body, "");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>{Tom Lianza} E-mail Me</title>
	<link rel="STYLESHEET" type="text/css" href="common.css" />
	<link href="." rel="start" dir="ltr" xml:lang="en" lang="en" />
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
</head>

<body background="images/purp-bg.gif">

<br />&nbsp;<br />
<table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td class="breadcrumb"><?php require("tree.php")?></td>
	<td align="right"><?print($titleString)?></td>
</tr>
<tr>
	<td colspan="2">
	<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#C0C0C0">
	<tr><td>
		
		<table border="0" cellspacing="1" cellpadding="0" align="center">
			<tr>
				<td class="largesect">Contact me via e-mail</td>
			</tr>
			<?php if ( !$mailsent ) { ?>
			<tr>
				<td class="maintext">
					<form action="mail.php" method="post">
					<br /><b>Your message:</b><br /><textarea cols="60" rows="10" name="c_mbody"></textarea>
					<br /><br /><b>Your e-mail address:</b>&nbsp;<input type="text" name="c_emailaddr" size="20" maxlength="200" />&nbsp;(if you want a reply)
					<br /><br /><input type="submit" name="c_submit" value="Send E-mail" /></form>
				</td>
			</tr>
			<?php } else { ?>
			<tr>
				<td class="maintext">
					<br /><b><?php echo( $mailok ); ?></b><br /><?php echo( $body ); ?>
					<br /><br /><a href=".">&lt;&lt; back home</a>
				</td>
			</tr>
			<?php }?>
			<?php if ( !$mailsent ) { ?>
			<tr>
				<td class="largesect"><br />Instant Messenger</td>
			</tr>
			<tr>
				<td class="maintext">
				<iframe src="http://www.google.com/talk/service/badge/Show?tk=z01q6amlqlmunbnrud6p9b8a3vd2rahhpl7bqqagfpu35cb5ffjf5o5oppc7uqrofg5ovkjmobkiqh5dggg1oseq7r65ghvodshcfeqne0m14h58ugfebg68ifntphu4o54q039e7qcivr2g&amp;w=200&amp;h=60" frameborder="0" allowtransparency="true" width="200" height="60"></iframe>	
				</td>
			</tr>
			<?php }?>
			
		</table>
		
	</td></tr>
	</table>
	</td>
</tr>
<tr>
	<td class="breadcrumb"><?php require("tree.php")?></td>
</tr>
</table>




</html>