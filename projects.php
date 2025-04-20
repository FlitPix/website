<?php
require($_SERVER['DOCUMENT_ROOT'] . '/includes/globals.php');
$title = 'Projects - ' . $site_title;
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
                <h1>Projects</h1>
                <p>This will be spruced up later. For now, here's a decent list:</p>
                <h2>Development</h2>
                <ul>
                    <li><strong><a href="https://talesofcelestia.com/">PMD: Tales of Celestia</a></strong> - A public <a href="https://www.phpbb.com/">phpBB</a> forum board for Pokémon Mystery Dungeon roleplay!</li>
                </ul>
                <h2>Writing</h2>
                <ul>
                    <li><strong><a href="https://toyhou.se/~literature/162744.another-day-another-mission">Another Day, Another Mission...</a></strong> - A oneshot gift for <a href="https://gyro.tech/card">GyroTech</a>, made as part of <a href="https://discord.gg/PkmnWorkshop">Pokémon Workshop</a>'s Secret Santa 2022!</li>
                </ul>
            </div>
            
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
        </div>
    </body>
</html>
