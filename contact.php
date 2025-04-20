<?php
require('includes/globals.php');
$title = 'Contact - ' . $site_title;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <?php require('includes/head.php'); ?>
        <meta name="og:title" content="<?php echo $title; ?>">
    </head>
    
    <body>
        <div id="wrap">
            <?php
            include('includes/navbar.php');
            ?>

            <div id="main">
                <h2>Contact</h2>
                <p>If you'd like to contact me for any reason, you can! Here is a list of ways you can reach out to me:</p>
                <ul>
                    <li><b>Forum:</b> You can private message me <a>here</a> if you have an account on the forum.</li>
                    <li><b>XMPP:</b> <a href="https://invite.joinjabber.org/#flit@chat.flitpix.net">flit@chat.flitpix.net</a></li>
                    <li><b>Email:</b> <a href="mailto:malikth32@gmail.com">malikth32 AT gmail DOT com</a></li>
                    <li><b>Matrix:</b> <a href="https://matrix.to/#/@flitpix:matrix.org">@flitpix:matrix.org</a></li>
                </ul>
            </div>
            <?php include('includes/footer.php');?>
        </div>
    </body>
</html>
