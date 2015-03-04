<?php
    $nav=3;
    $title='Contact Tom Lianza';
    require('_header.php');

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

<h1>Contact</h1>

<h2>Send Email</h2>
<?php if ( !$mailsent ) { ?>

    <form action="mail.php" method="post">
        <div class="form-group">
            <label for="c_mbody">Your message</label>
            <textarea class="form-control"  cols="60" rows="10" name="c_mbody"></textarea>
        </div>

        <div class="form-group">
            <label for="c_emailaddr">Your email address</label> (if you want a reply)
            <input type="email" name="c_emailaddr" class="form-control" id="email">
        </div>

        <input type="submit" class="btn" name="c_submit" value="Send E-mail" />
    </form>

<?php } else { ?>
        <p><?php echo( $mailok ); ?><br /><?php echo( $body ); ?></p>
        <p><a href=".">&lt;&lt; back home</a></p>
<?php }?>
<?php if ( !$mailsent ) { ?>
    <h2>Google Hangout</h2>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <div class="g-hangout" data-render="createhangout" data-invites="[{ id : '114575895726450969649', invite_type : 'PROFILE' }]" ></div>
<?php }?>


<?php require('_footer.php'); ?>