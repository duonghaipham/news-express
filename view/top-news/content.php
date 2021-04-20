<?php
$head_news = array();
while ($row = $head_news_key->fetch_assoc()) {
    array_push($head_news, array(
       'TITLE' => $row['TITLE'],
       'CONTENT' => $row['CONTENT'],
       'URL_FIGURE' => $row['URL_FIGURE']
    ));
}
$head_url_fig = $head_news[0]['URL_FIGURE'];
$head_title = $head_news[0]['TITLE'];
?>

<div id="content">
    <div id="top-news">
        <?php
        echo "<a href=#><img id='figure' src='http://localhost/news-express/data/img/$head_url_fig' alt='Top news'/>";
        echo "<p id='title'>$head_title</p></a>";
        ?>
    </div>
    <div id="runner-up-news">
        <?php
        for ($i = 1; $i < sizeof($head_news); $i++) {
            echo "<a class='runner-up-item' href=#>";
            echo "<img class='runner-up-figure' src='http://localhost/news-express/data/img/" . $head_news[$i]['URL_FIGURE'] ."' alt='Runner-up news'/>";
            echo '<p class="runner-up-title">' . $head_news[$i]['TITLE'] . '</p></a>';
        }
        ?>
    </div>
</div>