<!DOCTYPE html>
<html lang="">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="http://localhost/news-express/asset/css/style.css" rel="stylesheet"/>
        <title>Báo nóng</title>
    </head>
    <body>
        <?php
        require "layout/upper-header.php";
        require "layout/header.html";
        require "layout/nav-bar.html";
        require "layout/sub-nav-bar.html";
        require "post/post.php";
        require "layout/upper-footer.html";
        require "layout/footer.html";
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="http://localhost/news-express/asset/js/script.js"></script>
    </body>
</html>