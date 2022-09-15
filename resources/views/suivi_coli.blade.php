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

        .appHeader {
            height: 15vh;
            display: flex;
            /*justify-content: center;*/
            align-items: center;
            /*z-index: 999;*/
            /*color: #27173E;*/
            /* border-bottom: 1px solid #DCDCE9;*/
            border-radius: 0 0 100% 100% !important;
            /*position: absolute !important;*/
            background: #FFFFFF !important;
            right: 0vh !important;
            left: 0vh !important;
            top: -5vh !important;
            /*bottom: 0 !important;*/
        }


    </style>

</head>

<body style="background-color: white; margin: 0; height: 100%; overflow: hidden; ">

<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/img/icon/user.png') }}" alt="image" class="imaged  w24">
                    </div>
                    <div class="in">
                        <strong>{{ $islogged['nom'] }} {{ $islogged['prenom'] }}</strong>
                        <div class="text-muted">{{ $islogged['reference'] }}</div>
                    </div>
                    <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                        <ion-icoFn name="close-outline"></ion-icoFn>
                    </a>
                </div>
                <!-- * profile box -->
                <!-- balance -->
                {{-----<div class="sidebar-balance">
                    <div class="listview-title">Points</div>
                    <div class="in">
                        <h1 class="amount">{{ $islogged['balance_points'] }}</h1>
                    </div>
                </div>-----}}
                <!-- * balance -->

                <!-- action group -->
                {{----<div class="action-group">
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="add-outline"></ion-icon>
                            </div>
                            Deposit
                        </div>
                    </a>
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            Withdraw
                        </div>
                    </a>
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            Send
                        </div>
                    </a>
                    <a href="app-cards.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            My Cards
                        </div>
                    </a>
                </div>-----}}
                <!-- * action group -->

                <!-- menu -->
                <div class="listview-title mt-1">Menu</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="{{route('home') }}" class="item">
                            <div class="icon-box bg-primary" style="background-color: #00373e !important;">
                                <img src="{{ asset('assets/img/icon/home.png') }}" alt="image" class="imaged  w24">
                            </div>
                            <div class="in">
                                Accueil
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('allmatch') }}"  class="item" onclick="$('#loader').show()">
                            <div class="icon-box bg-primary" style="background-color: #018cb7 !important;">
                                <img src="{{ asset('assets/img/icon/dice2.png') }}" alt="image" class="imaged  w24">
                            </div>
                            <div class="in">
                                Pronostiques
                                {{----<span class="badge badge-primary">10</span>---}}
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('allcompet') }}" class="item" onclick="$('#loader').show()">
                            <div class="icon-box bg-primary" style="background-color: #f9b233 !important;">
                                <img src="{{ asset('assets/img/icon/trophy.png') }}" alt="image" class="imaged  w24">
                            </div>
                            <div class="in">
                                Competition
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('result') }}" {{-----data-bs-toggle="modal" data-bs-target="#DialogIconedDangerSoon"----}} class="item">
                            <div class="icon-box bg-primary" style="background-color: #fc5c13 !important;">
                                <img src="{{ asset('assets/img/icon/result.png') }}" alt="image" class="imaged  w24">
                            </div>
                            <div class="in">
                                Resultats
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" {{-----data-bs-toggle="modal" data-bs-target="#DialogIconedDangerSoon"----}} class="item" data-bs-dismiss="modal">
                            <div class="icon-box bg-primary" style="background-color: #ffad57 !important;">
                                <img src="{{ asset('assets/img/icon/credit_card2.png') }}" alt="image" class="imaged  w24">
                            </div>
                            <div class="in">
                                Acheter des tiquets
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="item" id="all_lot2" data-bs-dismiss="modal">
                            <div class="icon-box bg-primary" style="background-color: #2a6e40 !important;">
                                <img src="{{ asset('assets/img/icon/gift2.png') }}" alt="image" class="imaged  w24">
                            </div>
                            <div class="in">
                                Lots
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * menu -->

                <!-- others -->
                <div class="listview-title mt-1">Autres</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="javascript:void(0);" data-bs-dismiss="modal" {{-----data-bs-toggle="modal" data-bs-target="#DialogIconedDangerSoon"----}} class="item">
                            <div class="icon-box bg-primary" style="background-color: #FFFFFF !important;">
                                <img src="{{ asset('assets/img/icon/call_client2.png') }}" alt="image" class="imaged  w24">
                            </div>
                            <div class="in">
                                Support
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="closeSideModal()" data-bs-toggle="modal" data-bs-target="#DialogConfirmLogOut" class="item">
                            <div class="icon-box bg-primary" style="background-color: #FFFFFF !important;">
                                <img src="{{ asset('assets/img/icon/logout.png') }}" alt="image" class="imaged  w24">
                            </div>
                            <div class="in">
                                Déconnexion
                            </div>
                        </a>
                    </li>


                </ul>
                <!-- * others -->

                <!-- send money -->
                {{----<div class="listview-title mt-1">Send Money</div>
                <ul class="listview image-listview flush transparent no-line">
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Artem Sazonov</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar4.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Sophie Asveld</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Kobus van de Vegte</div>
                            </div>
                        </a>
                    </li>
                </ul>-----}}
                <!-- * send money -->

            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->

<!-- loader -->
<div id="loader">
    <div class="spinner-border" role="status"></div>
</div>
<!-- * loader -->

<div id="aft_body" style="height: -webkit-fill-available; padding-bottom: 0; background-color: #EDEDF5;border-radius: 30px; margin-top: 30px; overflow-y: auto; position: relative">

    <!-- App Header -->
    <div class="appHeader" style="border-radius: 30px; margin: 2px; position: sticky !important;">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle" style="background-color: #11a44c;border-radius: 10px;">
            <!---<img src="assets/img/logo_final_w.png" alt="logo" class="logo">--->
        </div>
        <div class="right">
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DialogIconedDangerSoon" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a>
            <a href="{{ route('pers_info') }}" class="headerButton" id="linkToPersInfo">
                <ion-icon class="icon" name="person-outline"></ion-icon>
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
            @if(isset($colis[0]))
                @foreach($colis as $coli)
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="container" style="padding: 0">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ $coli['article_content']['preview_img'] }}" alt="img" class="image-block imaged" style="width: -webkit-fill-available !important;">
                                    </div>
                                    <div class="col-12"><h3 style="font-weight: bold; text-align: center">{{ $coli['article_content']['titre'] }}</h3></div>
                                    <div class="col-12"><h5 style="text-align: center">{{ $coli['article_content']['description'] }}</h5></div>
                                    <div class="col-12">
                                        <p style="text-align: center; margin: 0">Date soumission: {{ $coli['date_created'] }}</p>
                                        <p style="text-align: center; margin: 0">Quantité: {{ $coli['quantite'] }}</p>
                                    </div>
                                    <div class="col">
                                        <!-- timeline -->
                                        <div class="timeline ms-2">
                                            <div class="item">

                                                <div class="dot @if($coli['status_id'] >= 0)  bg-primary  @endif" style="display: flex; justify-content: center"><i class="fa fa-check" style="margin-top: 0.5rem;"></i></div>
                                                <div class="content">
                                                    <h6 class="title" @if($coli['status_id'] >= 0)  style="color: #11a44c !important"  @endif>Colis confirmé</h6>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="dot @if($coli['status_id'] >= 1)  bg-primary  @endif" style="display: flex; justify-content: center"><i class="fa fa-archive"  style="margin-top: 0.5rem;" aria-hidden="true"></i>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title" @if($coli['status_id'] >= 1)  style="color: #11a44c !important"  @endif>Colis disponible</h6>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="dot @if($coli['status_id'] >= 2)  bg-primary  @endif" style="display: flex; justify-content: center"><i class="fa fa-truck" style="margin-top: 0.5rem;"></i></div>
                                                <div class="content">
                                                    <h6 class="title" @if($coli['status_id'] >= 2)  style="color: #11a44c !important"  @endif> En cours de livraison </h6>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="dot @if($coli['status_id'] >= 3)  bg-primary  @endif" style="display: flex; justify-content: center"><i class="fa-solid fa-truck-fast" style="margin-top: 0.5rem;"></i></div>
                                                <div class="content">
                                                    <h6 class="title" @if($coli['status_id'] >= 3)  style="color: #11a44c !important"  @endif>Colis livré</h6>
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
    background-color: #ff6a00;">{{ $coli['valeur_lot'] }}pts</span>
                                                </div>
                                                <div class="col-12">
                                                    <span style="font-weight: bold;">ID :</span> <span>{{ $coli['reference_operation'] }}</span>
                                                </div>

                                                @if($coli['status_id'] < 2)
                                                    <div class="col-12">
                                                        <button type="button" onclick="remboursement({{ $coli['reference_operation'] }})" class="btn btn-outline-danger shadowed me-1 mb-1" style="padding: 11px 7px 10px 2px"> <ion-icon style="margin: 0" name="close-outline"></ion-icon> Annuler</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="button" onclick="info_modif({{ $coli['reference_operation'] }})" class="btn btn-outline-primary shadowed me-1 mb-1" style="padding: 11px 7px 10px 2px; color: #3167eb; border-color: #3167eb"> <ion-icon style="margin: 0" name="add-outline"></ion-icon> Adresse livraison</button>
                                                    </div>
                                                @endif

                                                @if($coli['status_id'] === 3)
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
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="alert alert-outline-danger mb-1" role="alert">
                            Aucun colis
                        </div>
                    </div>
                </div>
                @endif
        </div>


    </div>
    <!-- * App Capsule -->
</div>

@include('components.toast')

<!-- Dialog Iconed Inline -->
<div class="modal fade dialogbox" id="DialogIconedButtonInline2" data-bs-backdrop="static" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titre">Remboursement</h5>
            </div>
            <div class="modal-body">
                Etes vous sûr de vouloir proceder au remboursement de ce article?
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a id="pron_coup_del_all" href="#" class="btn btn-text-danger" data-bs-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                        ANNULER
                    </a>
                    <a href="#" id="remboursement" class="btn btn-text-primary" data-bs-dismiss="modal">
                        <ion-icon name="checkmark-outline"></ion-icon>
                        VALIDER
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog Iconed Inline -->


<!-- Dialog Iconed Inline -->
<div class="modal fade dialogbox" id="DialogIconedButtonInline3" data-bs-backdrop="static" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titre">Informations de livraison</h5>
            </div>
            <div class="modal-body">
                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="nom">Nom prenom</label>
                        <input type="text" class="form-control" disabled name="nom_prenom" id="nom_prenom" {{----@if(isset($infos1['nom']) && isset($infos1['prenom'])) value="{{ $infos1['nom'] }} {{ $infos1['prenom'] }}"  @endif----}} placeholder="Votre nom">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="pays_id">Indicatif</label>
                        <select class="form-control custom-select" id="pays_id" name="pays_id">
                                <option></option>
                        </select>
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="msisdn">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="msisdn" disabled required name="msisdn" autocomplete="off"
                               placeholder="Numéro de téléphone" {{------@if(isset($infos1['msisdn'])) value="{{ $infos1['msisdn'] }}"  @endif-----}}>
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="textarea4">Description</label>
                        <textarea id="textarea4" rows="2" class="form-control" placeholder="Description"></textarea>
                        <i class="clear-input">
                            <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                        </i>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a id="pron_coup_del_all" href="#" class="btn btn-text-danger" data-bs-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                        ANNULER
                    </a>
                    <a href="#" id="enr_info" class="btn btn-text-success" data-bs-dismiss="modal">
                        <ion-icon name="checkmark-outline"></ion-icon>
                        ENREGISTRER
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog Iconed Inline -->

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
    function remboursement(ref) {

        var ref_operation = ref;


        $('#DialogIconedButtonInline2').modal('show');


        $('#remboursement').click(function(e) {
            $("#loader").show();

            var p = new Object();
            p['token'] = "{{$token}}";
            p['reference_operation'] = ref_operation;
            //console.log(p)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: `https://demo.pronomix.net/api/rejeter-lot`,
                data: p,
                success: function(data) {
                   // console.log(data)
                    var new_token = data.new_token;
                    var message = data.message;
                    if (data.status === "failed"){
                        var o = new Object();
                        o["new_token"] = new_token;
                        o["message"] = message;
                        var url = "{{ route('rejeter_lot') }}";

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: "POST",
                            url: url,
                            data: o,
                            success: function(data) {
                                $('#loader').hide();
                                $('#coup_info').empty();
                                $('#coup_info').append(data);
                                $('#DialogIconedInfo').modal('show');
                            },
                            statusCode: {
                                500: function() {
                                    $('#coup_error').empty();
                                    $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                                    $("#loader").hide();
                                    $('#DialogIconedDanger').modal('show');
                                }
                            }
                        });
                    }
                    else if(data.status === "success"){
                        var p = new Object();
                        p["new_token"] = new_token;
                        p["message"] = message;
                        p["user"] = data.user;
                        var urlS = "{{ route('rejeter_lot_success') }}";

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: "POST",
                            url: urlS,
                            data: p,
                            success: function(data) {
                                $('#loader').hide();
                                $('#coup_success').empty();
                                $('#coup_success').append(data);
                                $('#DialogIconedSuccess').modal('show');

                                $('#DialogIconedSuccess').on('hidden.bs.modal', function () {
                                    window.location.href = "{{ route('suivi_coli') }}";
                                })

                            },
                            statusCode: {
                                500: function() {
                                    $('#coup_error').empty();
                                    $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                                    $("#loader").hide();
                                    $('#DialogIconedDanger').modal('show');
                                }
                            }
                        });
                    }

                },
                statusCode: {
                    500: function() {
                        $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                        $("#loader").hide();
                        $('#DialogIconedDanger').modal('show');
                    },
                    419: function (){
                        window.location = "{{ route('logout') }}";
                    }
                }
            });


        });

    }

    function info_modif(ref) {
        $("#loader").show();
        var t = new Object();
        var token1 = "{{ $token }}";
        t['token'] = token1;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: `https://demo.pronomix.net/api/user/suivi-colis-by-id/${ref}`,
            data: t,
            success: function(data) {
                console.log(data)
                if (data.success === true){
                    var d = new Object();
                    d['new_token'] = data.new_token;
                    d['response'] = data.response;

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: "{{ route('info_livraison') }}",
                        data: d,
                        success: function(data) {
                            console.log(data)
                            $('#nom_prenom').empty();
                            $('#nom_prenom').val(data.nom_prenom);

                            var ind = data.indicatif;
                            var code_pays = data.pays_id;

                            $('#pays_id').empty();
                            $('#pays_id').append(`<option value="${code_pays}">
                                       ${ind}
                                  </option>`);

                            $('#msisdn').empty();
                            $('#msisdn').val(data.numero_tel);


                            $('#textarea4').empty();
                            $('#textarea4').val(data.description);
                            $("#loader").hide();
                            $('#DialogIconedButtonInline3').modal('show');

                        },
                        statusCode: {
                            500: function() {
                                $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                                $("#loader").hide();
                                $('#DialogIconedDanger').modal('show');
                            },
                            419: function (){
                                window.location = "{{ route('logout') }}";
                            }
                        }
                    });
                }

            },
            statusCode: {
                500: function() {
                    $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                    $("#loader").hide();
                    $('#DialogIconedDanger').modal('show');
                },
                419: function (){
                    window.location = "{{ route('logout') }}";
                }
            }
        });


        $('#enr_info').click(function (e) {
            $("#loader").show();
            var token = "{{ $token }}";
            var s = new Object();
            s['token'] = token;
            s['pays_id'] = $('#pays_id').val();
            s['msisdn'] =  $('#msisdn').val();
            s['description'] =  $('#textarea4').val();
            s['reference_operation'] = ref;

            console.log(s)

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: `https://demo.pronomix.net/api/suivis-colis/update-infos`,
                data: s,
                success: function(data) {
                    console.log(data)
                        if (data.status === true){
                            $("#loader").hide();
                            $('#coup_success').empty();
                            $('#coup_success').append(data.message);
                            $('#DialogIconedSuccess').modal('show');
                        }

                },
                statusCode: {
                    500: function() {
                        $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                        $("#loader").hide();
                        $('#DialogIconedDanger').modal('show');
                    },
                    419: function (){
                        window.location = "{{ route('logout') }}";
                    }
                }
            });

            console.log(s)
        });

    }

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
