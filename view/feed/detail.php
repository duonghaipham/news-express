<div id="post">
    <div id="author">
        <?php
        echo "<p>" . $post['name'] . "</p>";
        if (isset($_SESSION['username']) && $_SESSION['username'] == $post['username'])
            echo "<a href='" . URLROOT . "?controller=feed&action=load_edit&id_feed=" . $post['id_feed'] . "'>Chỉnh</a>";
        ?>
    </div>
    <h1 id='post-title'><?php echo $post['title']; ?></h1>
    <p id='post-summary'><?php echo $post['summary']; ?></p>
    <img id='post-figure' src='<?php echo URLWEB . "data/img/" . $post['url_figure']; ?>' alt='fig'>
    <p id='post-content'><?php echo str_replace(array("\r\n", "\n", "\r"), "<br/>", $post['content']); ?></p>
</div>