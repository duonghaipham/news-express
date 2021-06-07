<div id="post">
    <div id="author">
        <?php
        echo "<p>" . $post['name'] . "</p>";
        if (isset($_SESSION['username']) && $_SESSION['username'] == $post['username'])
            echo "<a href='http://localhost/news-express/index.php?controller=feed&action=load_edit&id_feed=" . $post['id_feed'] . "'>Chỉnh</a>";
        ?>
    </div>
    <?php
    echo "<h1 id='post-title'>" . $post['title'] . "</h1>";
    echo "<p id='post-summary'>" . $post['summary'] . "</p>";
    echo "<img id='post-figure' src='http://localhost/news-express/data/img/" . $post['url_figure'] . "' alt='fig'>";
    echo "<p id='post-content'>" . str_replace(array("\r\n", "\n", "\r"), "<br/>", $post['content']) . "</p>";
    echo "<p id='post-viewed-count'>Số người đọc: " . $post['viewed_count'] . "</p>";
    ?>
</div>