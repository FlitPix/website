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
                <div class="webring" id="fediring">
                    <table>
                        <tr>
                            <td class="webring-prev"><a href="https://fediring.net/previous?host=flitpix.net">←</a></td>
                            <td class="webring-info">
                                <a href="https://fediring.net/"><img src="/images/buttons/fediring.gif" alt="Fediring"></a>
                                <a class="webring-links" href="https://fediring.net/random">random</a>
                            </td>
                            <td class="webring-next"><a href="https://fediring.net/next?host=flitpix.net">→</a></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="index">
                <h1>FlitPix</h1>
                <a href="index2.php"><img src="images/vulpix-pfp.png" alt="A pixel-art portrait of a Vulpix" height="200" width="200"></a>
                <p>Boop the pix to enter...</p>
            </div>

            <?php include('includes/footer.php');?>
        </div>
    </body>
</html>
