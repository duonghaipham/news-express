<!DOCTYPE html>
<html lang="">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="http://localhost/news-express/asset/css/style.css" rel="stylesheet"/>
        <title>Báo nóng</title>
    </head>
    <body>
        <?php
        require "layout/upper-header.html";
        require "layout/header.html";
//        require "layout/banner.html";
        require "layout/nav-bar.html";
        require "layout/sub-nav-bar.html";
        require "post/post.php";
        require "layout/upper-footer.html";
        require "layout/footer.html";
        ?>
    </body>
</html>