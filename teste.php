<?php
require_once './inc/functions/functions.php';
?>

<!doctype html>
<html lang="pt-br" class="">

<head>
    <title>Descrição </title>
    <base href="<?= PATH_URL ?>" />
    <meta charset=" utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, user-scalable=0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <link href="teste.css" rel="stylesheet">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            </div>
            <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            <div class="swiper-slide">
                <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            </div>
            <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            <div class="swiper-slide">
                <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            </div>
            <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            <div class="swiper-slide">
                <img src="./assets/_opcao03/lp_tenis_extreme_blade_1280px-03_0002s_0001s_0005_foto_06.png" alt="">
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

</body>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
</script>

</html>