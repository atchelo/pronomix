<!doctype html>
<html lang="en" style="margin: 0; height: 100%; overflow: hidden;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Finapp</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="stylesheet" href="scroll-bounce/ptrLight.css">
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <script src="scroll-bounce/ptrLight.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/country/niceCountryInput.css">
    <script src="assets/country/niceCountryInput.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <style>
        .user-card div:before {
            content: "";
            z-index: 2;
            position: absolute;
            width: 50px;
            height: 50px;
            top: -2px;
            left: -2px;
            background-color: transparent;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border: 3px solid #299b59;
        }

        .user-card div{
            position: relative;
            width: 40px;
            height: 40px;
            margin: auto;
            border-radius: 50%;
            -webkit-border-radius: 50%;
        }


        .user-card span{
            z-index: 3;
            background-repeat: no-repeat;
            background-position: 50%;
            height: 35px;
            width: 35px;
            display: inline-block;
            position: relative;
            background-size: cover!important;
            border-radius: 50%;
            padding: 5px;
            left: 3px;
            top: 5px;
            background-color: #299b59;
        }

        .badge-green{
            display: inline-block;
            padding: 3px 5px !important;
            min-width: 10px;
            border-radius: 0.25rem;
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            line-height: 1;
            white-space: nowrap;
            vertical-align: baseline;
            color: #fff;
            background-color: #006951;
        }

        .coupon{
            border: 1px solid #e4e4e4;
        }

    </style>
    <style type="text/css">
        #appCapsule {
            -webkit-overflow-scrolling: touch;
            overflow-y: scroll;
        }

        body #ptr-light-spinner {
            top: 10px;
        }

        .tracking-wrap {
            position: relative;
            background-color: #ddd;
            height: 7px;
            display: flex;
            margin-bottom: 60px;
            margin-top: 50px;
        }
        .tracking-wrap .step {
            flex-grow: 1;
            width: 25%;
            margin-top: -18px;
            text-align: center;
            position: relative;
        }
        .tracking-wrap .step::before {
            height: 7px;
            position: absolute;
            content: "";
            width: 100%;
            left: 0;
            top: 18px;
        }
        .tracking-wrap .icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;<link rel="stylesheet" href="assets/css/style.css">
            position: relative;
            border-radius: 100%;
            background: #ddd;
        }
        .tracking-wrap .text {
            display: block;
            margin-top: 7px;
        }
        .tracking-wrap .step.active .icon {
            background: #00a524;
            color: #fff;
        }
        .tracking-wrap .step.active .text {
            font-weight: 400;
            color: #000;
        }
        .tracking-wrap .step.active:before {
            background: #00a524;
        }

        .menu-category {
            margin: 0;
            padding: 0;
        }
        .menu-category li {
            position: relative;
            display: block;
            border-bottom: 1px solid #e4e4e4;
        }
        .menu-category li:last-child {
            border-bottom: 0;
        }
        .menu-category a {
            color: #212529;
        }
        .menu-category > li > a {
            display: block;
            padding: 10px 18px;
        }
        .menu-category .submenu {
            display: none;
            margin: 0;
            padding: 0;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 20;
            position: absolute;
            left: 100%;
            top: 0;
            width: 250px;
            background: #fff;
        }
        .menu-category .submenu li {
            list-style: none;
        }
        .menu-category .submenu li a {
            padding: 10px 16px;
            display: block;
        }
        .menu-category li:hover {
            background: #f8f9fa;
            transition: all 0.3s;
        }
        .menu-category li:hover .submenu {
            display: block;
            margin-left: 0px;
        }
        .menu-category .has-submenu > a:after {
            content: "›";
            font-size: 24px;
            color: #999;
            line-height: 18px;
            font-weight: bold;
            float: right;
        }

        .form-inline input[type=number] {
            max-width: 100px;
        }

        .input-spinner {
            width: 125px;
            flex-wrap: nowrap;
            display: inline-flex;
            vertical-align: middle;
        }
        .input-spinner input.form-control {
            text-align: center;
            max-width: 46px;
            font-weight: bold;
            flex-basis: 46px;
            border-color: #e4e4e4;
            flex-grow: 0;
        }
        .input-spinner .btn {
            width: 42px;
            text-align: center;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        .checkbox-btn {
            position: relative;
        }
        .checkbox-btn input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }
        .checkbox-btn input:checked ~ .btn {
            border-color: #3167eb;
            background-color: #3167eb;
            color: #fff;
        }

        .btn-check {
            position: relative;
            display: inline-block;
            border: 2px solid #dee2e6;
            transition: 0s !important;
        }
        .btn-check input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }
        .btn-check input:checked ~ .btn {
            border-color: #3167eb;
            background-color: #3167eb;
            color: #fff;
        }
        .btn-check:hover:not(.active) {
            border-color: #bbb;
        }

        .js-check {
            position: relative;
        }
        .js-check .title {
            margin-left: 22px;
        }
        .js-check input {
            position: absolute;
            top: 21px;
            left: 18px;
        }
        .js-check.active {
            border-color: #3167eb;
        }
        .js-check:hover:not(.active) {
            border-color: #ccc;
        }

        .js-check.box {
            width: 100%;
            border-width: 3px;
        }

        .card-header .form-check {
            margin-bottom: 0;
            padding-top: 5px;
            padding-bottom: 5px;
        }


    </style>

</head>

<body style="background-color: white; margin: 0; height: 100%; overflow: hidden; ">

<!-- loader -->
<div id="loader">
    <div class="spinner-border" role="status"></div>
</div>
<!-- * loader -->

<div id="aft_body" style="height: -webkit-fill-available; padding-bottom: 0; background-color: #EDEDF5;border-radius: 30px; margin-top: 30px; overflow-y: auto; position: relative">
    <!-- App Header -->
    <div class="appHeader" style="border-radius: 30px; margin: 2px; position: sticky">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle" style="background-color: #11a44c;border-radius: 10px;">
            <!---<img src="assets/img/logo_final_w.png" alt="logo" class="logo">--->
        </div>
        <div class="right">
            <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a>
            <a href="app-settings.html" class="headerButton">
                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged w32">
                <span class="badge badge-danger">6</span>
            </a>
        </div>
    </div>
    <!-- * App Header -->
    <!-- App Capsule -->
    <div id="appCapsule" style="padding: 0">

        <div class="section">

            <ul class="listview image-listview inset" style="margin:0">
                <li id="pers_info">
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="person-circle-outline" role="img" class="md hydrated" aria-label="wallet outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Informations Personnelles</div>
                        </div>
                    </div>
                </li>
                <li id="pwd_modif">
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="lock-closed-outline" role="img" class="md hydrated" aria-label="cash outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Modifier mot de passe</div>
                        </div>
                    </div>
                </li>
                <li style="background-color: #11a44c !important" >
                    <div class="item">
                        <div class="icon-box bg-primary" style="background: white !important;color: #11a44c !important;">
                            <ion-icon name="gift-outline" role="img" class="md hydrated" aria-label="cash outline"></ion-icon>
                        </div>
                        <div class="in" style="color: white">
                            <div>Suivis colis</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="mail-open-outline" role="img" class="md hydrated" aria-label="cash outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Messages</div>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="card mt-2">
                <div class="card-body">
                    <div class="container" style="padding: 0">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('ticket.png') }}" alt="img" class="image-block imaged" style="width: -webkit-fill-available !important;">
                            </div>
                            <div class="col-12"><h3 style="font-weight: bold; text-align: center">Cuisinière à Gaz 4 Feux</h3></div>
                            <div class="col-12">
                                <p style="text-align: center; margin: 0">Date soumission: 01-07-2022, 16:14</p>
                                <p style="text-align: center; margin: 0">Quantité: 1</p>
                            </div>
                            <div class="col">
                                <!-- timeline -->
                                <div class="timeline ms-2">
                                    <div class="item">

                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-check" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis confirmé</h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-archive"  style="margin-top: 0.5rem;" aria-hidden="true"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis disponible</h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-truck" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important"> En cours de livraison </h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa-solid fa-truck-fast" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis livré</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- * timeline -->
                            </div>
                            <div class="col">
                                <div class="info" style="padding: 24px 0;">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="display: inline-block;
    padding: 3px 5px;
    min-width: 10px;
    border-radius: 0.25rem;
    text-align: center;
    font-size: 15px;
    font-weight: bold;
    line-height: 1;
    white-space: nowrap;
    vertical-align: baseline;
    color: #fff;
    background-color: #ff6a00;">661902pts</span>
                                        </div>
                                        <div class="col-12">
                                            <span style="font-weight: bold;">ID :</span> <span>22965002</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="mb-0" style="color: black">Colis Livré</p>
                                                <small class="text-muted" style="font-size: medium">Livré le 10 juillet 2022</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="aside icon-sm bg-success-light rounded-circle" style="background-color: #d1efd8 !important;width: 50px;height: 50px;line-height: 48px !important;font-size: 20px;display: flex;
    justify-content: center;margin-top: 1rem"><i class="fa fa-check" style="margin-top: 0.9rem;color: #00b517 !important"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <div class="container" style="padding: 0">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('ticket.png') }}" alt="img" class="image-block imaged" style="width: -webkit-fill-available !important;">
                            </div>
                            <div class="col-12"><h3 style="font-weight: bold; text-align: center">Cuisinière à Gaz 4 Feux</h3></div>
                            <div class="col-12">
                                <p style="text-align: center; margin: 0">Date soumission: 01-07-2022, 16:14</p>
                                <p style="text-align: center; margin: 0">Quantité: 1</p>
                            </div>
                            <div class="col">
                                <!-- timeline -->
                                <div class="timeline ms-2">
                                    <div class="item">

                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-check" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis confirmé</h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-archive"  style="margin-top: 0.5rem;" aria-hidden="true"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis disponible</h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-truck" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important"> En cours de livraison </h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa-solid fa-truck-fast" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis livré</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- * timeline -->
                            </div>
                            <div class="col">
                                <div class="info" style="padding: 24px 0;">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="display: inline-block;
    padding: 3px 5px;
    min-width: 10px;
    border-radius: 0.25rem;
    text-align: center;
    font-size: 15px;
    font-weight: bold;
    line-height: 1;
    white-space: nowrap;
    vertical-align: baseline;
    color: #fff;
    background-color: #ff6a00;">661902pts</span>
                                        </div>
                                        <div class="col-12">
                                            <span style="font-weight: bold;">ID :</span> <span>22965002</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="mb-0" style="color: black">Colis Livré</p>
                                                <small class="text-muted" style="font-size: medium">Livré le 10 juillet 2022</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="aside icon-sm bg-success-light rounded-circle" style="background-color: #d1efd8 !important;width: 50px;height: 50px;line-height: 48px !important;font-size: 20px;display: flex;
    justify-content: center;margin-top: 1rem"><i class="fa fa-check" style="margin-top: 0.9rem;color: #00b517 !important"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <div class="container" style="padding: 0">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('ticket.png') }}" alt="img" class="image-block imaged" style="width: -webkit-fill-available !important;">
                            </div>
                            <div class="col-12"><h3 style="font-weight: bold; text-align: center">Cuisinière à Gaz 4 Feux</h3></div>
                            <div class="col-12">
                                <p style="text-align: center; margin: 0">Date soumission: 01-07-2022, 16:14</p>
                                <p style="text-align: center; margin: 0">Quantité: 1</p>
                            </div>
                            <div class="col">
                                <!-- timeline -->
                                <div class="timeline ms-2">
                                    <div class="item">

                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-check" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis confirmé</h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-archive"  style="margin-top: 0.5rem;" aria-hidden="true"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis disponible</h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-truck" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important"> En cours de livraison </h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa-solid fa-truck-fast" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis livré</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- * timeline -->
                            </div>
                            <div class="col">
                                <div class="info" style="padding: 24px 0;">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="display: inline-block;
    padding: 3px 5px;
    min-width: 10px;
    border-radius: 0.25rem;
    text-align: center;
    font-size: 15px;
    font-weight: bold;
    line-height: 1;
    white-space: nowrap;
    vertical-align: baseline;
    color: #fff;
    background-color: #ff6a00;">661902pts</span>
                                        </div>
                                        <div class="col-12">
                                            <span style="font-weight: bold;">ID :</span> <span>22965002</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="mb-0" style="color: black">Colis Livré</p>
                                                <small class="text-muted" style="font-size: medium">Livré le 10 juillet 2022</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="aside icon-sm bg-success-light rounded-circle" style="background-color: #d1efd8 !important;width: 50px;height: 50px;line-height: 48px !important;font-size: 20px;display: flex;
    justify-content: center;margin-top: 1rem"><i class="fa fa-check" style="margin-top: 0.9rem;color: #00b517 !important"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <div class="container" style="padding: 0">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('ticket.png') }}" alt="img" class="image-block imaged" style="width: -webkit-fill-available !important;">
                            </div>
                            <div class="col-12"><h3 style="font-weight: bold; text-align: center">Cuisinière à Gaz 4 Feux</h3></div>
                            <div class="col-12">
                                <p style="text-align: center; margin: 0">Date soumission: 01-07-2022, 16:14</p>
                                <p style="text-align: center; margin: 0">Quantité: 1</p>
                            </div>
                            <div class="col">
                                <!-- timeline -->
                                <div class="timeline ms-2">
                                    <div class="item">

                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-check" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis confirmé</h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-archive"  style="margin-top: 0.5rem;" aria-hidden="true"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis disponible</h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa fa-truck" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important"> En cours de livraison </h6>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dot bg-primary" style="display: flex; justify-content: center"><i class="fa-solid fa-truck-fast" style="margin-top: 0.5rem;"></i></div>
                                        <div class="content">
                                            <h6 class="title" style="color: #11a44c !important">Colis livré</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- * timeline -->
                            </div>
                            <div class="col">
                                <div class="info" style="padding: 24px 0;">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="display: inline-block;
    padding: 3px 5px;
    min-width: 10px;
    border-radius: 0.25rem;
    text-align: center;
    font-size: 15px;
    font-weight: bold;
    line-height: 1;
    white-space: nowrap;
    vertical-align: baseline;
    color: #fff;
    background-color: #ff6a00;">661902pts</span>
                                        </div>
                                        <div class="col-12">
                                            <span style="font-weight: bold;">ID :</span> <span>22965002</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="mb-0" style="color: black">Colis Livré</p>
                                                <small class="text-muted" style="font-size: medium">Livré le 10 juillet 2022</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="aside icon-sm bg-success-light rounded-circle" style="background-color: #d1efd8 !important;width: 50px;height: 50px;line-height: 48px !important;font-size: 20px;display: flex;
    justify-content: center;margin-top: 1rem"><i class="fa fa-check" style="margin-top: 0.9rem;color: #00b517 !important"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- * App Capsule -->
</div>



<!-- Add Card Action Sheet -->
<div class="modal fade action-sheet" id="addCardActionSheet" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add a Card</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="cardnumber1">Card Number</label>
                                <input type="number" id="cardnumber1" class="form-control"
                                       placeholder="Enter Card Number">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label">Expiry Date</label>
                                        <div class="row">
                                            <div class="col-4">
                                                <select class="form-control custom-select" id="exp-month">
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <select class="form-control custom-select" id="exp-year">
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="cardcvv">
                                            CVV
                                            <a href="#" class="ms-05" data-bs-toggle="tooltip"
                                               data-bs-placement="top" title="3-4 digit number back of your card">
                                                What is this?
                                            </a>
                                        </label>
                                        <input type="number" id="cardcvv" class="form-control"
                                               placeholder="Enter 3 digit">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group basic mt-2">
                            <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Add Card Action Sheet -->


<!-- ========= JS Files =========  -->
<!-- Bootstrap -->
<script src="assets/js/lib/bootstrap.bundle.min.js"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- Splide -->
<script src="assets/js/plugins/splide/splide.min.js"></script>

<!-- Base Js File -->
<script src="assets/js/base.js"></script>

<script>
    $('#pers_info').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('pers_info') }}";
    });
    $('#pwd_modif').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('pwd_modif') }}";
    });
</script>


<script>
    function onChangeCallback(ctr){
        console.log("The country was changed: " + ctr);
        $('#country').val(ctr);
    }
    $(document).ready(function () {
        new NiceCountryInput($("#testinput")).init();
        $('#country').val('CI');
    });
</script>



</body>

</html>
