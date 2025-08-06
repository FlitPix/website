<?php
require($_SERVER['DOCUMENT_ROOT'] . '/includes/globals.php');
$title = 'Contact - ' . $site_title;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
        <meta name="og:title" content="<?php echo $title; ?>">
    </head>
    
    <body>
        <div id="wrap">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'); ?>

            <div id="main">
                <h2>Contact</h2>
                <p>If you'd like to contact me for any reason, you can! Here is a list of ways you can reach out to me:</p>
                <ul>
                    <li><b>Forum:</b> You can private message me <a href="https://forum.flitpix.net/board/ucp.php?i=pm&mode=compose&action=quotepost&p=76">here</a> if you have an account on the forum.</li>
                    <li><b>XMPP:</b> <a href="https://invite.joinjabber.org/#flit@chat.flitpix.net">flit@chat.flitpix.net</a></li>
                    <li><b>Email:</b> <a href="mailto:malikth32@gmail.com">malikth32 AT gmail DOT com</a></li>
                    <li><b>Matrix:</b> <a href="https://matrix.to/#/@flitpix:matrix.org">@flitpix:matrix.org</a></li>
                    <li><b>Discord:</b> If you're friends with me on Discord, you can contact me there.</li>
                </ul>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
        </div>
    </body>
</html>
