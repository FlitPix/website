<?php
require('includes/globals.php');
$title = 'Sources - ' . $site_title;
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
                <h2>Sources</h2>
                <p>I think it's incredibly important to source all of the external assets, scripts, etc. that I use, so this page is meant to serve that very purpose. This is a list of all sources for external art, buttons, JavaScript snippets, etc. Please support the original creators of these things!</p>

                <h3>Images</h3>
                <p>All images used on the site.</p>
                <table>
                    <tr>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Source</th>
                    </tr>
                    <tr>
                        <td class="td_images"><img src="/images/vulpix-pfp.png" width="50px" alt=""></td>
                        <td><p>Pixel art of Vulpix, from the Poke&#769;mon Mystery Dungeon games on GBA and DS. Used on the <a href="/index.html">landing page</a>.</p></td>
                        <td><p>Made by Chunsoft for the official games, taken from the <a href="https://sprites.pmdcollab.org/">SpriteCollab</a> project. I upscaled it to fit on the site and for other things.</p></td>
                    </tr>
                    <tr>
                        <td class="td_images"><img src="/images/vulpix-pixel.png" alt=""></td>
                        <td><p>Pixel art of Vulpix, from Poke&#769;mon Sword and Shield on Nintendo Switch. Used as the favicon, and in the footer of every page.</p></td>
                        <td><p>Made by someone in GAME FREAK or Creatures Inc. for the official games.</p></td>
                    </tr>
                    <tr>
                        <td class="td_images"><img src="/images/buttons/firefox1.gif" alt="Firefox button"></td>
                        <td><p>Button advertising <a href="https://firefox.com/">Firefox</a>.</p></td>
                        <td><p><em>Probably</em> made by Mozilla back in the day, archived for public use by <a href="https://keysklubhouse.com/">Key</a>.</p></td>
                    </tr>
                    <tr>
                        <td class="td_images">
                            <img src="/images/buttons/standwithukraine.gif" alt="Animated Ukraine button">
                            <img src="/images/buttons/handcoded.png" alt="Handcoded button">
                        </td>
                        <td><p>Various buttons with messages I find important or self-expressive that I use in the footer of every page.</p></td>
                        <td><p>Made by <a href="https://keysklubhouse.com/">Key</a>.</p></td>
                    </tr>
                    <tr>
                        <td class="td_images">
                            <img src="/images/buttons/kool-de.png" alt="KDE button">
                            <img src="/images/buttons/archive.png" alt="Archive.org button">
                            <img src="/images/buttons/web3.png" alt="Web3 button">
                            <img src="/images/buttons/lgbt.png" alt="LGBT friendly button">
                            <img src="/images/buttons/matrix.png" alt="Matrix button">
                            <img src="/images/buttons/github.png" alt="Github button">
                            <img src="/images/buttons/steam.png" alt="Steam button">
                        </td>
                        <td><p>Various buttons, either with messages I find important or self-expressive that I use in the footer of every page, or used on the <a href="/links.html">Links</a> page.</p></td>
                        <td><p>Made by <a href="https://zeusofthecrows.github.io/stadt/">ɀeus</a>.</p></td>
                    </tr>
                    <tr>
                        <td class="td_images">
                            <img src="/images/buttons/gog.png" alt="GOG.com button">
                            <img src="/images/buttons/itch.png" alt="Itch.io button">
                        </td>
                        <td><p>Various buttons for the <a href="/links.html">Links</a> page.</p></td>
                        <td><p>Made by <a href="https://drakul78.neocities.org/">DraKul78</a>.</p></td>
                    </tr>
                    <tr>
                        <td class="td_images"><img src="/images/buttons/discord-no-way.gif" src='"Discord? No Way!" button'></td>
                        <td><p>"Discord? No Way!" button, used on the <a href="/links.html">Links</a> page.</p></td>
                        <td><p>Made by the team behind the <a href="https://spyware.neocities.org/articles/discord">Spyware Neocities website</a>.</p></td>
                    </tr>
                    <tr>
                        <td class="td_images"><img src="/images/buttons/fp_banner_small.png" alt="Flashpoint Archive button"></td>
                        <td><p>Button advertising the <a href="https://flashpointarchive.org/">Flashpoint Archive</a>, used in the footer of every page.</p></td>
                        <td><p>Made by the Flashpoint team, see their <a href="https://flashpointarchive.org/branding">branding page</a>.</p></td>
                    </tr>
                    <tr>
                        <td class="td_images"><img src="/images/buttons/fediring.gif" alt="Fediring button"></td>
                        <td><p>Button for the <a href="https://fediring.net/">Fediring</a> webring, used on the <a href="/index.html">landing page</a>.</p></td>
                        <td><p>Made by <a href="https://thecozy.cat/">Aevisia</a> for the webring.</p></td>
                    </tr>
                    <tr>
                        <td class="td_images"><img src="/images/buttons/archlinux.gif" alt="Arch Linux button"></td>
                        <td><p><a href="https://archlinux.org/">Arch Linux</a> button, used in the footer of every page.</p></td>
                        <td><p><strong>I don't know!</strong> I found it <a href="https://drakul78.neocities.org/links">here</a>.</p></td>
                    </tr>
                    <tr>
                        <td class="td_images">
                            <img src="/images/buttons/right2repair.png" alt="Right to Repair button">
                        </td>
                        <td><p>Various images.</p></td>
                        <td><p><strong>I don't know!</strong> This table row is all things I took from elsewhere that I don't know the source to.<br>If you are or know the creator, please <a href="/contact.html">contact me</a>!</p></td>
                    </tr>
                </table>

                <h3>Scripts</h3>
                <p>TODO. For now, credit can be found in the source code if it was made by someone else.</p>
            </div>
            
            <?php include('includes/footer.php');?>
        </div>
    </body>
</html>
