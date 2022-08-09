<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Managing Editor</title>

    <?php require "../php/css.php" ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <?php require "./header.php" ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
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
            </div>
        </div>
    </div>
</body>
<?php require "../php/script.php" ?>

</html>
<!-- end document-->