<!DOCTYPE html>
<html lang="">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="http://localhost/news-express/asset/css/index-style.css" rel="stylesheet"/>
        <title>Báo nóng</title>
    </head>
    <body>
        <div id="upper-header" class="full-width">
            <?php require "upper-header.html"; ?>
        </div>
        <div id="header" class="full-width">
            <?php require "header.html"; ?>
        </div>
        <div id="banner">Chỗ này để banner</div>
        <div id="nav-bar">
            <?php require "nav-bar.html"; ?>
            <hr/>
        </div>
        <div id="sub-nav-bar">Chỗ này dành cho sub-nav-bar</div>
        <div id="content">
        </div>
        <div id="upper-footer" class="full-width">
            <?php require "upper-footer.html"; ?>
        </div>
        <div id="footer" class="full-width">
            <?php require "footer.html"; ?>
        </div>
    </body>
</html>