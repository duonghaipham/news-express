<div id="search-result">
    <h1>Kết quả tìm kiếm cho <span>'<?php echo $_GET['keyword']; ?>'</span></h1>
    <?php
    if ($feed) {
        echo "<p>Có " . strval(count($feed)) . " kết quả</p>";
        foreach ($feed as $post) {
            echo "<a href='http://localhost/news-express/index.php?action=view_&id_feed=" . $post['id_feed'] . "'>" ;
            echo "<div class='post-fragment'>";
            echo "<img src='http://localhost/news-express/data/img/" . $post['url_figure'] . "' alt='Post figure'>";
            echo "<div class='content'>";
            echo "<div class='title'>" . $post['title'] . "</div>";
            echo "<div class='summary'>" . $post['summary'] . "</div></div></div></a>";
        }
    }
    else
        echo "<p>Không tìm thấy kết quả phù hợp</p>";
    ?>
</div>