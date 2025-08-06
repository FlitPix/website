<?php
require($_SERVER['DOCUMENT_ROOT'] . '/includes/globals.php');
$title = $site_title;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
        <meta name="og:title" content="<?php echo $title; ?>">

        <style>
            #index {
                flex: 1;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div id="wrap">
            <div id="webrings">
                
            </div>

            <div id="index">
                <h1>Flit</h1>
                <a href="/index2.php"><img src="/images/bird-pfp.png" alt="A eurasian magpie" height="200" width="200"></a>
                <p>Bap the bird to enter...</p>
            </div>

            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');?>
        </div>
    </body>
</html>
