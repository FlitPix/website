<?php
require('includes/globals.php');
$title = 'Projects - ' . $site_title;
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
                <h2>Projects</h2>
                <p>WIP</p>
            </div>
            
            <?php include('includes/footer.php');?>
        </div>
    </body>
</html>
