<?php
error_reporting(-1);
ini_set('display_errors', 1);
header('Content-type: text/html; charset=utf-8'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fansy</title>

    <!-- Add jQuery library -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <link rel="stylesheet" href="/bower/fancybox/source/jquery.fancybox.css?v=2.1.5">
    <link rel="stylesheet" href="css/style.css">
    <script src="/bower/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script>
        $(document).ready(function () {
            $(".fancybox").fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                prevEffect: 'none',
                nextEffect: 'none'
            });
        });
    </script>
    <script src="/vendor/public/bootstrap/dist/js/bootstrap.min.js"></script>

</head>
<body>
<h2>Галерея</h2>
<div class="main">


    <a class="fancybox" rel="gallery1" href="img/img1.jpg" title="Крутая фотка">
        <img src="img/img1.jpg" alt="Крутая фотка">

    </a>
    <a class="fancybox" rel="gallery1" href="img/img2.jpg" title="Крутая фотка)">
        <img src="img/img2.jpg" alt="Крутая фотка">
    </a>
    <a class="fancybox" rel="gallery1" href="img/img3.jpg" title="Крутая фотка">
        <img src="img/img3.jpg" alt="Крутая фотка">
    </a>
    <a class="fancybox" rel="gallery1" href="img/img4.jpg" title="Крутая фотка)">
        <img src="img/img4.jpg" alt="Крутая фотка">
    </a>
    <a class="fancybox" rel="gallery1" href="img/img5.jpg" title="Крутая фотка)">
        <img src="img/img5.jpg" alt="Крутая фотка">
    </a>
    <a class="fancybox" rel="gallery1" href="img/img6.jpg" title="Крутая фотка">
        <img src="img/img6.jpg" alt="Крутая фотка">
    </a>
    <a class="fancybox" rel="gallery1" href="img/img7.jpg" title="Крутая фотка">
        <img src="img/img7.jpg" alt="Крутая фотка">
    </a>
    <a class="fancybox" rel="gallery1" href="img/img8.jpg" title="Крутая фотка">
        <img src="img/img8.jpg" alt="">
    </a>
    <a class="fancybox" rel="gallery1" href="img/img9.jpg" title="Крутая фотка">
        <img src="img/img9.jpg" alt="Крутая фотка">
    </a>
</div>

</body>
</html>

