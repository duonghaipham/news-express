<?php
$head_news = array();
while ($row = $head_news_key->fetch_assoc()) {
    array_push($head_news, array(
        'ID_FEED' => $row['ID_FEED'],
        'TITLE' => $row['TITLE'],
        'CONTENT' => $row['CONTENT'],
        'URL_FIGURE' => $row['URL_FIGURE']
    ));
}
?>

<div id="content">
    <div id="top-news">
        <?php
        echo "<a href='http://localhost/news-express/index.php?action=detail&id_feed=" . $head_news[0]['ID_FEED'] . "'>";
        echo "<img id='figure' src='http://localhost/news-express/data/img/" . $head_news[0]['URL_FIGURE'] . "' alt='Top news'/>";
        echo "<p id='title'>" . $head_news[0]['TITLE'] . "</p></a>";
        ?>
    </div>
    <div id="runner-up-news">
        <?php
        for ($i = 1; $i < sizeof($head_news); $i++) {
            echo "<a class='runner-up-item' href='http://localhost/news-express/index.php?action=detail&id_feed=" . $head_news[$i]['ID_FEED'] . "'>";
            echo "<img class='runner-up-figure' src='http://localhost/news-express/data/img/" . $head_news[$i]['URL_FIGURE'] ."' alt='Runner-up news'/>";
            echo '<p class="runner-up-title">' . $head_news[$i]['TITLE'] . '</p></a>';
        }
        ?>
    </div>
</div>