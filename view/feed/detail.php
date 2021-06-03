<div id="post">
    <?php
    echo "<p id='post-author'>" . $post['NAME'] . "</p>";
    echo "<h1 id='post-title'>" . $post['TITLE'] . "</h1>";
    echo "<p id='post-summary'>" . $post['SUMMARY'] . "</p>";
    echo "<img id='post-figure' src='http://localhost/news-express/data/img/" . $post['URL_FIGURE'] . "' alt='fig'>";
    echo "<p id='post-content'>" . str_replace(array("\r\n", "\n", "\r"), "<br/>", $post['CONTENT']) . "</p>";
    echo "<p id='post-viewed-count'>Số người đọc: " . $post['VIEWED_COUNT'] . "</p>";
    ?>
</div>