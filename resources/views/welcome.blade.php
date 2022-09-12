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

<style>
    .btn-primary {
        background: #4ccf7f !important;
        border-color: #4ccf7f !important;
        color: #FFFFFF !important;
        font-weight: bold;
    }

    .btn-outline-secondary {
        background: transparent;
        border-color: #11a44c;
        color: #11a44c;
        transition: 0.2s all;
        font-weight: bold;
    }
</style>

<body class="bg-white" style="height: 100vh">

<!-- loader -->
<div id="loader">
    <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
</div>
<!-- * loader -->


<!-- App Capsule -->
<div id="appCapsule" style="background-image: url('{{ asset('assets/img/man.png') }}'); height: 75vh; background-size: contain; background-repeat: no-repeat">

    <!-- carousel slider -->

    <!-- * carousel slider -->

    <h2 style="text-align: center; margin-top: 25rem">On attend plus que vous</h2>
    <p class="text-muted" style="text-align: center; margin: 0 3rem;">rejoignez-nous et commencez une nouvelle aventure</p>

    <div class="carousel-button-footer">
        <div class="row">
            <div class="col-6">
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-block">Inscription</a>
            </div>
            <div class="col-6">
                <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg btn-block">Connexion</a>
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
