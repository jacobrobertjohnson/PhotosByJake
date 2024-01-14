<?php
    include "include_tkn.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $rssXml = simplexml_load_file("../public/rss.xml");
    $photos = $rssXml->xpath('/rss/channel/item');
?>

<div class="image-container">
    <?php
        foreach ($photos as $photo) {
            $title = $photo->title;
            $link = $photo->link;
            $description = $photo->description;

            include "image_card.php";
        }
    ?>
</div>