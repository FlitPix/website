<?php
require($_SERVER['DOCUMENT_ROOT'] . '/includes/globals.php');
require($_SERVER['DOCUMENT_ROOT'] . '/includes/birthday.php');
$title = $site_title;
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
                <h2>Index</h2>
                <p><a href="https://www.youtube.com/channel/UCiYpKsB66LZsk7s4yhxJqlQ">Yo waddup</a>, I'm <b>Flit</b>. You might have also seen me around as <b>FlitPix</b>. Welcome to my website! It's fairly bare-bones, but that's just how I prefer it. :)</p>
                <p><strong>Please note that this website works best using Firefox, on desktop computers.</strong> I did <em>not</em> test this on Chromium-based browsers, nor am I interested in doing so.</p>
                <p>You can go back to the landing page <a href="index.php">here</a>, if you want.</p>

                <h3>About me</h3>
                <p>I'm a <a href="https://en.wikipedia.org/wiki/Eurasian_magpie">eurasian magpie</a> from Indiana, somehow, with a tech degree who likes to host stuff, roleplay, and play video games.</p>
                <p>I'm <b>agender</b>. My pronouns are <b>they/them</b>. I'm <b><?php echo $age ?> years old</b>, my birthday is on <b><a href="https://en.wikipedia.org/wiki/Earth_Day">Earth Day</a></b>, and I'm on the <b>Autism spectrum</b>. I like messing around with open source software, sometimes providing feedback, and trying to learn new things. Linux is fun to mess around with! Video games are also really fun despite me not playing them as much recently - <b>Poke&#769;mon</b> is by far my biggest hyperfixation, with Sonic and Metroid being close seconds, though I pretty much try to play everything.</p>

                <h3>Cool people</h3>
                <p>I've met these people on various online communities and want to give them a shoutout. Go check them out, give them a follow, maybe commission them if they have those? (If I'm particularly close to you and you're not listed here, or if you have a button/stamp you'd like for me to put here instead, don't hesitate to <a href="/contact.php">reach out to me</a>.)</p>
                <ul>
                    <li><a href="https://bumblebb.carrd.co/">ferncroft</a></li>
                    <li><a href="https://cynderheartstudios.carrd.co/">Cyn</a></li>
                    <li><a href="https://sorakoudo.carrd.co/">Sora Koudo</a></li>
                </ul>
            </div>
            
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
        </div>
    </body>
</html>
