<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Finapp</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

<!-- loader -->
<div id="loader">
    <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
</div>
<!-- * loader -->

<!-- App Header -->
<div class="appHeader no-border transparent">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Welcome</div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

    <!-- carousel slider -->
    <div class="carousel-slider splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide p-2">
                    <img src="assets/img/sample/photo/vector1.png" alt="alt" class="imaged w-100 square mb-4">
                    <h2>Simple to Use</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </li>
                <li class="splide__slide p-2">
                    <img src="assets/img/sample/photo/vector2.png" alt="alt" class="imaged w-100 square mb-4">
                    <h2>Minimalist and Stylish</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </li>
                <li class="splide__slide p-2">
                    <img src="assets/img/sample/photo/vector3.png" alt="alt" class="imaged w-100 square mb-4">
                    <h2>Easy to Use Components</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </li>
            </ul>
        </div>
    </div>
    <!-- * carousel slider -->

    <div class="carousel-button-footer">
        <div class="row">
            <div class="col-6">
                <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg btn-block">Register</a>
            </div>
            <div class="col-6">
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-block">Login</a>
            </div>
        </div>
    </div>


</div>
<!-- * App Capsule -->


<!-- ========= JS Files =========  -->
<!-- Bootstrap -->
<script src="assets/js/lib/bootstrap.bundle.min.js"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- Splide -->
<script src="assets/js/plugins/splide/splide.min.js"></script>
<!-- Base Js File -->
<script src="assets/js/base.js"></script>


</body>

</html>
