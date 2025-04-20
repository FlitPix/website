<?php
require($_SERVER['DOCUMENT_ROOT'] . '/includes/globals.php');
$title = 'Links - ' . $site_title;
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
                <h2>Links</h2>
                <p>I'm generally able to be found all around the Internet, not just here! This page lists all of the places where you might be able to find me online - webgames, forums, pretty much anything!</p>
                <p>Please note that, unless I specify otherwise, I am <em>not</em> open to friend requests unless I've chatted with you.</p>

                <h3>Development</h3>
                <p>Code development, usually git.</p>
                <ul>
                    <li><b>GitHub:</b> <a href="https://github.com/FlitPix" rel="me">FlitPix</a></li>
                </ul>

                <h3>Social</h3>
                <p>Social media, forums, and instant messaging.</p>
                <div style="display: block;">
                    <a href="https://matrix.to/#/@flitpix:matrix.org"><img src="/images/buttons/matrix.png" alt="Matrix button"></a>
                    <a href="https://spyware.neocities.org/articles/discord"><img src="/images/buttons/discord-no-way.gif" title="I have a Discord account, but it's not publicly available and I don't think people should use it." alt='"Discord? No Way!" button'></a>
                </div>
                <ul>
                    <li><b>Bulbagarden Forums:</b> <a href="https://forums.bulbagarden.net/index.php?members/flitpix.88477/">FlitPix</a> (account required to view)</li>
                    <li><b>Toyhou.se:</b> <a href="https://toyhou.se/Flit">Flit</a></li>
                    <li><b>Arch Linux Forums:</b> <a onclick="copy(this)">FlitPix</a></li>
                    <li><b>GBATemp:</b> <a href="https://gbatemp.net/members/flitpix.644031/">FlitPix</a></li>
                </ul>
                <h4>Social platforms I'm not on anymore</h4>
                <ul>
                    <li><b>Akkoma:</b> I used to host my own Akkoma server at @flit@akkoma.flitpix.net. Unfortunately, querying the database trashed it... not sure how that happened. I might look into managed hosting in the future, if I decide to keep using social media.</li>
                    <li><b>Mastodon:</b> Before using Akkoma, I used Mastodon at <a href="https://guild.pmdcollab.org/@flit">@flit@guild.pmdcollab.org</a>.</li>
                </ul>
                <h3>Games</h3>
                <p>Did you know I play video games? It's true!!</p>
                <div style="display: block;">
                    <a href="https://www.gog.com/u/FlitPix" rel="me"><img src="/images/buttons/gog.png" title="GOG.com" alt="GOG.com: FlitPix"></a>
                    <a href="https://flitpix.itch.io/" rel="me"><img src="/images/buttons/itch.png" title="Itch.io" alt="Itch.io: Flit"></a>
                    <a href="https://steamcommunity.com/id/flitpix/" rel="me"><img src="/images/buttons/steam.png" title="Steam" alt="Steam: flit"></a>
                </div>
                <ul>
                    <li><b>Nintendo Switch:</b> <a onclick="copy(this)">SW-0182-4828-7410</a></li>
                    <li><b><a href="https://pmuniverse.net/">PMU</a>:</b> I play it sometimes!</li>
                    <li><b><a href="https://pokemonshowdown.com/">Poke&#769;mon Showdown</a>:</b> <a onclick="copy(this)">MalikTH</a>
                    <li><b>Epic Games:</b> <a href="https://store.epicgames.com/en-US/u/ee1bc03b34014a0f8ae99fdf6da0da38">FlitPix</a></li>
                    <li><b>Battle.net:</b> <a onclick="copy(this)">MalikTH#1227</a></li>
                    <li><b>Ubisoft:</b> <a onclick="copy(this)">MalikTH32</a></li>
                    <li><b>Poke&#769;mon GO:</b> MalikTH32 (<a onclick="copy(this)">5877 3457 4712</a>, Modern Vivillon, open to friend requests)</li>
                    <li><b>Minecraft:</b> <a href="https://namemc.com/profile/FlitPix.1">FlitPix</a></li>
                    <li><b><a href="https://www.factorio.com/">Factorio</a>:</b> <a onclick="copy(this)">FlitPix</a> (I don't play often)</li>
                    <li><b><a href="https://pokefarm.com/">Poke&#769;Farm Q</a>:</b> <a href="https://pokefarm.com/user/FlitPix" rel="me">FlitPix</a> (I don't play often)</li>
                </ul>
                <h4>I don't play these anymore...</h4>
                <ul>
                    <li><b>Poke&#769;mon Eclipse RPG:</b> I used to play as MalikTH, but I got IP banned for autoclicking, even though I never did anything like that. Never got a response to my appeal, which means it was either denied or just never looked at...</li>
                    <li><b>Roblox:</b> I used to play as <a href="https://www.roblox.com/users/22697920/profile" rel="me">Flit (@XxMalikTHxX)</a>, but I can't anymore since it's been <a href="https://www.gamingonlinux.com/2024/03/game-over-for-roblox-on-linux-steam-deck-as-its-now-blocked/">blocked on Wine</a>.
                </ul>
            </div>
            
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
        </div>
    </body>
</html>
