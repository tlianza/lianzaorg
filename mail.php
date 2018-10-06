<?php
    $nav=3;
    $title='Contact Tom Lianza';
    require('_header.php');

$body = "";
$mailok = "There was an error sending your message:";

if(isset($_POST['c_mbody'])){
	$body = $_POST['c_mbody'];
	if ( mail("postman@lianza.org", "Lianza.org Message", $body) ){
         $mailok = "Your message has been sent:";
    }
}

$mailsent = strcmp($body, "");
?>

<h1>Contact</h1>

<div class="card mb-3">
    <h5 class="card-header">Send Email</h5>
    <div class="card-body">
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

                <input type="submit" class="btn btn-primary" name="c_submit" value="Send E-mail" />
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading"><?php echo( $mailok ); ?></h4>
                <p><?php echo( $body ); ?></p>
            </div>
            <p><a href=".">&lt;&lt; back</a></p>
        <?php }?>
    </div>
</div>

<?php if ( !$mailsent ) { ?>
<div class="card">
    <h5 class="card-header">Google Hangout</h5>
    <div class="card-body">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
        <div class="g-hangout" data-render="createhangout" data-invites="[{ id : '114575895726450969649', invite_type : 'PROFILE' }]" ></div>
    </div>
</div>
<?php }?>


<?php require('_footer.php'); ?>