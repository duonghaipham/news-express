<div id="content">
    <div id="top-news">
        <a href='<?php echo URLROOT . "?action=view_&id_feed=" . $head_news[0]['id_feed']; ?>'>
        <img id='figure' src='<?php echo URLWEB . "data/img/" . $head_news[0]['url_figure']; ?>' alt='Top news'/>
        <p id='title'><?php echo $head_news[0]['title']; ?></p>
        </a>
    </div>
    <div id="runner-up-news">
        <?php
        for ($i = 1; $i < sizeof($head_news); $i++) {
            echo "<a class='runner-up-item' href='" . URLROOT . "?action=view_&id_feed=" . $head_news[$i]['id_feed'] . "'>";
            echo "<img class='runner-up-figure' src='" . URLWEB . "data/img/" . $head_news[$i]['url_figure'] ."' alt='Runner-up news'/>";
            echo '<p class="runner-up-title">' . $head_news[$i]['title'] . '</p></a>';
        }
        ?>
    </div>
</div>