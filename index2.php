<?php
require('includes/globals.php');
$title = $site_title;
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
                <h2>Index</h2>
                <p>Hiya, I'm Flit! Welcome to my website! I'm still building it out for now, and mobile support isn't quite ready - in the meantime, though, you can use the links at the top right to browse the various pages that do exist. <strong>Some of them are broken, I know - I'll add those pages when they're done, should be fairly soon.</strong></p>
                <p><strong>Please note that this website works best using Firefox, on desktop computers.</strong> I did <em>not</em> test this on Chromium-based browsers, nor am I interested in doing so.</p>
                <p>...By the way, if you really liked the landing page, you can always <a href="index.php">go back</a>...</p>

                <h3>About me</h3>
                <p>I'm just a guy from Indiana with a tech degree who likes to host stuff, roleplay, and play video games.</p>
                <p>My pronouns are <b>they/them</b>. I'm <b>22 years old</b>, my birthday is on <b><a href="https://en.wikipedia.org/wiki/Earth_Day">Earth Day</a></b>, and I'm on the <b>Autism spectrum</b>. I like messing around with open source software, sometimes providing feedback, and always trying to learn new things. Linux is fun to mess around with! Video games are also really fun despite me not playing them as much recently - <b>Poke&#769;mon</b> is by far my biggest hyperfixation, with Sonic being a close second, though I pretty much try to play everything.</p>

                <h3>Where you can find me</h3>
                <p>Of course, this website isn't all the Internet has to offer, so here's some of the other places you can find me. You can find more at my <a href="links.php">Links</a> page.</p>
                <ul>
                    <li><a href="https://github.com/FlitPix" rel="me">FlitPix on GitHub</a></li>
                    <li><a href="mailto:malikth32@gmail.com" rel="me">malikth32@gmail.com via Email/DeltaChat</a></li>
                </ul>

                <h3>Cool people</h3>
                <p>I've met these people on various online communities and want to give them a shoutout. Go check them out, give them a follow, maybe commission them if they have those? (If I'm particularly close to you and you're not listed here, or if you have a button/stamp you'd like for me to put here instead, don't hesitate to <a href="/contact.php">reach out to me</a>.)</p>
                <ul>
                    <li><a href="https://alphabooks.carrd.co/">Alpha Books</a> <b>(ALERT: It is homeless and needs financial support!)</b></li>
                    <li><a href="https://whimsicott.gay/">cat</a></li>
                    <li><a href="https://bumblebb.carrd.co/">ferncroft</a></li>
                    <li><a href="https://sky-viv-abm.carrd.co/">Skylar</a></li>
                    <li><a href="https://cynderheartstudios.carrd.co/">Cyn</a></li>
                    <li><a href="https://sorakoudo.carrd.co/">Sora Koudo</a></li>
                </ul>
            </div>
            
            <?php include('includes/footer.php');?>
        </div>
    </body>
</html>
