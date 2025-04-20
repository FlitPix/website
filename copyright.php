<?php
require($_SERVER['DOCUMENT_ROOT'] . '/includes/globals.php');
$title = 'Copyright - ' . $site_title;
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
            <?php
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php');
            ?>

            <div id="main">
                <h2>Copyright</h2>
                <p>This website contains a decently large amount of copyrighted material, or fan-made material derived from it. Since I don't make any money off of this website (notice the lack of ads!), and the content is being used solely for the purpose of personal expression, I believe this to be a valid application of <a href="https://www.copyright.gov/fair-use/">United States fair use</a>. The following sections are specific statements on various franchises used on this website.</p>

                <h3>Original content</h3>
                <p>All original content &copy; <?php echo date("Y"); ?> FlitPix.</p>

                <h3>Poke&#769;mon</h3>
                <p>Poke&#769;mon &copy; 2002-<?php echo date("Y"); ?> Poke&#769;mon. &copy; 1995-<?php echo date("Y"); ?> Nintendo/Creatures Inc./GAME FREAK inc. &trade;, &reg; and Poke&#769;mon character names are trademarks of Nintendo.</p>
            </div>
            
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
        </div>
    </body>
</html>
