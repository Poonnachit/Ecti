<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Managing Editor</title>

    <?php require "../php/css.php" ?>
    <?php require "../php/script.php" ?>
</head>

<body class="">
    <div class="page-wrapper">
        <?php require "./navbar.php" ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container" id="main-page" style="transition: padding-left .5s;">
            <!-- MAIN CONTENT-->
            <div class="main-content" style="padding-top: 30px;">
                <div class="section__content section__content--p30">
                    <?php
                    $content = $_GET["content"];
                    $path = "./pages/" . $content . ".php";

                    if (file_exists($path)) {
                        include($path);
                    } else {
                        include("./pages/dashboard.php");
                    }
                    ?>
                </div>
                <!-- </div> -->
            </div>
        </div>
</body>

</html>
<!-- end document-->