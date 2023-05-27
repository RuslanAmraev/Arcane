<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" type="image/x-icon" href="./img/favicon-32x32.png"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./fonts/stylesheet.css">
    <link rel="stylesheet" href="./fonts/bebasneue.css">
    <link rel="stylesheet" href="./fonts/montserrat.css">
    <!-- <link rel="stylesheet" href="./slick.css"> -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="jquery.pagepiling.css" />
    <title>Arcane рекламное агенство</title>
</head>
<body>
    <?php include('./header.html') ?>
    <div id="pagepiling">
    <?php include('./switch.html') ?>
        <div class="section">
            <?php include('./main.html') ?>
        </div>
        <div class="section">
            <?php include('./advantages.html') ?>
        </div>
    </div>
    <!-- <script src="./jquery.js"></script>
    <script src="./slick.min.js"></script> -->
    <script src="./jquery.min.js"></script>
    <script type="text/javascript" src="jquery.pagepiling.js"></script>
    <script src="./jquery.maskedinput.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>