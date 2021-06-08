<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo URLWEB . 'asset/css/general.css'; ?>" rel="stylesheet"/>
        <link href="<?php echo URLWEB . 'asset/css/update.css'; ?>" rel="stylesheet"/>
        <title>Thông tin nhà báo</title>
    </head>
    <body>
        <?php
        require "layout/upper-header.php";
        require "layout/header.php";
        require "layout/nav-bar.php";
        require "user/update.php";
        require "layout/upper-footer.php";
        require "layout/footer.html";
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?php echo URLWEB . 'asset/js/update.js'; ?>"></script>
    </body>
</html>