<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="Image/x-icon" href="./img/favicon.ico" rel="icon">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.ico">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(93727375, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/93727375" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5919HWLTDQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5919HWLTDQ');
    </script>
    <!-- Google tag (gtag.js) -->

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '946095136503088');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=946095136503088&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
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
    </div>
    <!-- <script src="./jquery.js"></script>
    <script src="./slick.min.js"></script> -->
    <script src="./jquery.min.js"></script>
    <script type="text/javascript" src="jquery.pagepiling.js"></script>
    <script src="./jquery.maskedinput.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>