<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="http://localhost/news-express/asset/css/general.css" rel="stylesheet"/>
        <link href="http://localhost/news-express/asset/css/search.css" rel="stylesheet"/>
        <title>Tìm kiếm</title>
    </head>
    <body>
        <?php
        require "layout/upper-header.php";
        require "layout/header.html";
        require "layout/nav-bar.html";
        require "layout/sub-nav-bar.html";
        require "feed/search-result.php";
        require "layout/upper-footer.html";
        require "layout/footer.html";
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="http://localhost/news-express/asset/js/script.js"></script>
    </body>
</html>