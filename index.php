<?php
require "lib/db-conn.php";
if (isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "";
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="styles/index-style.css" rel="stylesheet"/>
        <title>Báo nóng</title>
    </head>
    <body>
        <div id="upper-header" class="full-width">
            <?php require "blocks/upper-header.php"; ?>
        </div>
        <div id="header" class="full-width">
            <?php require "blocks/header.php"; ?>
        </div>
        <div id="banner">Chỗ này để banner</div>
        <div id="nav-bar">
            <?php require "blocks/nav-bar.php"; ?>
            <hr/>
        </div>
        <div id="sub-nav-bar">Chỗ này dành cho sub-nav-bar</div>
        <div id="content">
            <?php
            switch ($p) {
                case "detail":
                    require "pages/detail.php";
                    break;
                default:
                    require "pages/homepage.php";
                    break;
            }
            ?>
        </div>
        <div id="upper-footer" class="full-width">
            <?php require "blocks/upper-footer.php"; ?>
        </div>
        <div id="footer" class="full-width">
            <?php require "blocks/footer.php"; ?>
        </div>
    </body>
</html>