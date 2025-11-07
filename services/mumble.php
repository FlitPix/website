<?php
require($_SERVER['DOCUMENT_ROOT'] . '/includes/globals.php');
$title = 'Mumble - ' . $site_title;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
        <meta name="og:title" content="<?php echo $title; ?>">

        <script src="/scripts/funcs.js"></script>
    </head>

    <body>
        <div id="wrap">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'); ?>

            <div id="main">
                <h2>Mumble</h2>
                <p>I run a <a href="https://mumble.info">Mumble</a> server for live voice and text chat! You can read about the benefits on my blog post <a href="https://forum.flitpix.net/board/viewtopic.php?t=39">here</a>.</p>
                <p>A password is required to initially join. This password is available from me on request, or anyone else who has it. To receive the password, please contact <a href="/contact.php">me</a> or someone you know is already there.</p>

                <h3>Rules</h3>
                <p>All rules in my forum board's <a href="https://forum.flitpix.net/board/viewtopic.php?t=4">Rules and Guidelines</a> apply (except anything that would obviously only apply to the forums). Additionally:</p>
                <ul>
                    <li><strong>Do NOT name yourself "Discord".</strong> This will break the Discord bridge if it's connected, and earn you an IP ban if I don't know you (and a very stern talking-to if I do). Do not test me on this.</li>
                    <li>You may invite whoever you wish to the Mumble server by giving them the join password. No need to ask me first.</li>
                    <li>You may run bots, as long as they do not interfere with the uptime of the Mumble server, or other services I provide (like this website or the forum board).</li>
                    <li>Do not spam in the text chat or over the mic.</li>
                    <li>Please take note of the current discussion topic <em>before</em> joining in. Do not derail the current topic.</li>
                </ul>
                <p>Failure to follow these rules may result in a kick or ban. I have no formal rules on what constitutes these things.</p>
                <p>Report issues by <a href="/contact.php">contacting me</a>. <em>Please note that the text chat is not logged, and I keep no recordings of the voice chat.</em></p>

                <h3>How to join</h3>
                <p>Follow these instructions step-by-step.</p>

                <h4>Joining the server</h4>
                <p><strong>A password is required to initially join.</strong> This password is available from me on request, or anyone else who has it. To receive the password, please contact <a href="/contact.php">me</a> or someone you know is already there. If you're in Flit's Chatting Server on Discord, you should already have the password.</p>
                <p>First, download and set up a <a href="https://www.mumble.info/downloads/">Mumble app</a>. I use the desktop app on Linux from the Arch repos, and Mumla on Android from F-Droid.</p>
                <p>Then join the server by clicking <a href="mumble://flitpix.net?title=Flit's%20Mumble%20Server">here</a>. If this doesn't work, you can join manually:</p>
                <ul>
                    <li><b>Address:</b> <a onclick="copy(this)">flitpix.net</a></li>
                    <li><b>Port:</b> <a onclick="copy(this)">64738</a> (default)</li>
                    <li><b>Name:</b> Whatever you want your username to be.
                </ul>
                <p>You will be asked to enter the password (it may say you entered the wrong password; don't worry about that). Enter it now.</p>
                <p><b>Known issue:</b> You will, for now, get a self-signed certificate error. I plan on fixing this. For now, you can accept the warning.</p>
                <p>Congrats, you have connected to the server!</p>
                
                <h4>Registering</h4>
                <p>While it is optional, I <em>highly recommended</em> that you register. Doing so gives you the following benefits:</p>
                <ul>
                    <li>Your name is claimed so others can't use it and impersonate you.</li>
                    <li>You don't have to enter the password to join anymore.</li>
                    <li>You can easily join on multiple devices (desktop and phone, for example).</li>
                    <li>You can make temporary channels.</li>
                </ul>
                <p>To do so on desktop Mumble, you will need to have generated a certificate. If you didn't do it when prompted, you can do it by going to Configure > Certificate Wizard and following the instructions.</p>
                <p>Once you've generated a certificate, connect to the server, make sure you're in the "Flit's Mumble Server" channel, then go to Self > Register. That's all!</p>

                <h4>Joining on multiple devices after registering</h4>
                <p>You can, for example, join on your computer, then switch to your phone later.</p>
                <p>Register on desktop Mumble. Then, export your certificate using the Certificate Wizard.</p>
                <p>You can then import it by moving the certificate file to your other device, and importing it there (Certificate Wizard in Mumble, Settings > Authentication in Mumla).</p>

                <h3>Discord bridge</h3>
                <p>The server has a Mumble-to-Discord bridge. Source code is <a href="https://github.com/Stieneee/mumble-discord-bridge">here</a>. It is bridged with an invite-only Discord server that is not fully open to the public.</p>
                <p>When someone has joined both the Discord and Mumble sides, the bot will automatically join and bridge both voice and text chat.</p>
                <p>By default, the bot runs in Auto mode. You can use <a href="https://github.com/Stieneee/mumble-discord-bridge#usage">commands</a> to move the bot to a different channel on either side, or change between the <em>global</em> Auto and Manual modes. Replace "COMMAND" with "mumble-discord", so for example you would run "!mumble-discord refresh".</p>
                <p>Note that when the bot is present in Mumble, your voice and text messages are sent to Discord, and are subject to their <a href="https://discord.com/privacy">privacy policy</a>.</p>

                <h3>Known issues</h3>
                <ul>
                    <li>Self-signed certificate generated by Mumble for now. You will need to accept the certificate when joining for the first time. Will fix, though it's been painful to try and figure out.</li>
                    <li>In solo testing, there are times where, on Discord, bridged audio will be somewhat quiet at first before getting louder later. I can't tell if this is my audio setup or if it's some weirdness with the bridge. It might not come up with multiple people, we'll see.</li>
                </ul>
            </div>

            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
        </div>
    </body>
</html>
