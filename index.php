<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="Image/x-icon" href="./img/favicon.ico" rel="icon">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./fonts/stylesheet.css">
    <link rel="stylesheet" href="./fonts/bebasneue.css">
    <link rel="stylesheet" href="./fonts/montserrat.css">
    <!-- <link rel="stylesheet" href="./slick.css"> -->
    <link rel="stylesheet" type="text/css" href="jquery.pagepiling.css" />
    <link rel="stylesheet" href="./style.css">
    <title>Агентство по стратегическим и операционным  бизнес услугам - Arcane</title>
    <meta name="keywords" content="Таргетированная реклама, контекстная реклама, продвижение, маркетинг, Диджитал агентство">
    <meta name="description" content="Рекламное агенство, таргетированная реклама в Алматы">
</head>
<body class="preload">
    <?php include('./header.html') ?>
    <div id="pagepiling">
    <?php include('./contactButton.html') ?>
    <?php include('./switch.html') ?>
    <?php include('./contactpop.html') ?>
        <div class="section">
            <?php include('./main.html') ?>
        </div>
        <div class="section">
            <?php include('./advantages.html') ?>
        </div>
        <div class="section">
            <?php include('./services.html') ?>
            <?php include('./servicepoptarget.html') ?>
            <?php include('./servicepopcontext.html') ?>
            <?php include('./servicepopweb.html') ?>
        </div>
        <div class="section">
            <?php include('./trial.html') ?>
        </div>
        <div class="section">
            <?php include('./footer.html') ?>
        </div>
        <?php include('./ThankYou.html') ?>
    </div>
    <!-- <script src="./jquery.js"></script>
    <script src="./slick.min.js"></script> -->
    <script src="./jquery.min.js"></script>
    <script type="text/javascript" src="jquery.pagepiling.js"></script>
    <script src="./jquery.maskedinput.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>