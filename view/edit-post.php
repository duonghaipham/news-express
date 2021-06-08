<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo URLWEB . 'asset/css/general.css'; ?>" rel="stylesheet"/>
        <link href="<?php echo URLWEB . 'asset/css/publish.css'; ?>" rel="stylesheet"/>
        <title>Tạo bài báo</title>
    </head>
    <body>
        <?php
        require "layout/upper-header.php";
        require "layout/header.php";
        require "layout/nav-bar.php";
        require "feed/edit.php";
        require "layout/upper-footer.php";
        require "layout/footer.html";
        ?>
        <script src="<?php echo URLWEB . 'asset/js/upload.js'; ?>"></script>
    </body>
</html>