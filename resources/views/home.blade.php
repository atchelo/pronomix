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
    <meta name="keywords"
          content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="stylesheet" href="scroll-bounce/ptrLight.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <script src="scroll-bounce/ptrLight.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <style>
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

    </style>

    <script>
        $(function() {
            $('#aft_body').ptrLight({
                'refresh': function(ptrLightInstance) {
                    console.log('Updating...');
                    location.reload()
                    setTimeout(function() {
                        console.log('Updated!');
                        ptrLightInstance.done();
                    }, 2000);
                },
                pullThreshold: $(window).height() * 0.5,
                maxPullThreshold: $(window).height(),
            });
        });
    </script>
    <style type="text/css">
        #aft_body {
            -webkit-overflow-scrolling: touch;
            overflow-y: scroll;
        }

        body #ptr-light-spinner {
            top: 10px;
        }
    </style>

</head>

<body style="height: 98vh; background-color: white">

<style>
    .placeholder-item {
        box-shadow: 0 4px 10px 0 rgba(33, 33, 33, 0.15);
        border-radius: 4px;
        height: 200px;
        position: fixed;
        overflow: hidden;
    }

    .placeholder-item::before {
        content: '';
        display: block;
        position: absolute;
        left: -150px;
        top: 0;
        height: 100%;
        width: 150px;
        background: linear-gradient(to right, transparent 0%, #E8E8E8 50%, transparent 100%);
        animation: load 1s cubic-bezier(0.4, 0.0, 0.2, 1) infinite;
    }

    @keyframes load {
        from {
            left: -150px;
        }
        to   {
            left: 100%;
        }
    }
</style>

<!-- loader -->
<div id="loader">
        <div class="spinner-border" role="status"></div>
</div>


<!-- * loader -->

<div id="aft_body" style="height: -webkit-fill-available; padding-bottom: 0; background-color: #EDEDF5;border-radius: 30px; margin: 10px; margin-top: 30px">
    <!-- App Header -->
    <div class="appHeader" style="border-radius: 30px; margin: 2px; position: absolute">
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
    <div id="appCapsule" style="height: -webkit-fill-available; padding-bottom: 0;">

        <!-- Deposit Action Sheet -->
        <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Balance</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account1">From</label>
                                        <select class="form-control custom-select" id="account1">
                                            <option value="0">Savings (*** 5019)</option>
                                            <option value="1">Investment (*** 6212)</option>
                                            <option value="2">Mortgage (*** 5021)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addona1">$</span>
                                        <input type="text" class="form-control" placeholder="Enter an amount"
                                               value="100">
                                    </div>
                                </div>


                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Deposit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Deposit Action Sheet -->

        <!-- Withdraw Action Sheet -->
        <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Withdraw Money</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2d">From</label>
                                        <select class="form-control custom-select" id="account2d">
                                            <option value="0">Savings (*** 5019)</option>
                                            <option value="1">Investment (*** 6212)</option>
                                            <option value="2">Mortgage (*** 5021)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">To</label>
                                        <input type="email" class="form-control" id="text11d" placeholder="Enter IBAN">
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addonb1">$</span>
                                        <input type="text" class="form-control" placeholder="Enter an amount"
                                               value="100">
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Withdraw</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Withdraw Action Sheet -->

        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Send Money</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2">From</label>
                                        <select class="form-control custom-select" id="account2">
                                            <option value="0">Savings (*** 5019)</option>
                                            <option value="1">Investment (*** 6212)</option>
                                            <option value="2">Mortgage (*** 5021)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11">To</label>
                                        <input type="email" class="form-control" id="text11"
                                               placeholder="Enter bank ID">
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="text" class="form-control" placeholder="Enter an amount"
                                               value="100">
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet -->

        <!-- Exchange Action Sheet -->
        <div class="modal fade action-sheet" id="exchangeActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Exchange Money</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group basic">
                                            <div class="input-wrapper">
                                                <label class="label" for="currency1">From</label>
                                                <select class="form-control custom-select" id="currency1">
                                                    <option value="1">EUR</option>
                                                    <option value="2">USD</option>
                                                    <option value="3">AUD</option>
                                                    <option value="4">CAD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group basic">
                                            <div class="input-wrapper">
                                                <label class="label" for="currency2">To</label>
                                                <select class="form-control custom-select" id="currency2">
                                                    <option value="1">USD</option>
                                                    <option value="1">EUR</option>
                                                    <option value="2">AUD</option>
                                                    <option value="3">CAD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon2">$</span>
                                        <input type="text" class="form-control" placeholder="Enter an amount"
                                               value="100">
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Exchange</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Exchange Action Sheet -->

        @php
            $number = $islogged['balance_points'];

        $numb =  number_format((float)$number, 2, '.', '');
        @endphp
        <h1 class="total" style="position: absolute;left: 50%;transform: translate(-50%, -50%);top: 8rem; color: #ff6a00; font-size: 47px">{{ $numb }}<small style="color: #ff6a00; font-size: .575em;">Pts</small> </h1>
        <h1 class="total" style="position: absolute;left: 50%;transform: translate(-50%, -50%);top: 10.5rem; font-size: 24px; color: #3a87ad">{{ $islogged['balance_tickets'] }}<small style="color: #3a87ad; font-size: .675em;">Tickets</small></h1>

        <!-- Stats -->
        <div class="section" style="margin-top: 9rem; padding: 0; height: -webkit-fill-available; box-shadow: 0px 5px rgb(17 164 76 / 10%), 0px -10px 12px rgb(17 164 76 / 10%);height: -webkit-fill-available;border-radius: 30px 30px;">
            <div class="row mt-2" style="height: 100%">
                <div class="col-12">
                    <div class="card" style="height: 100%; border-radius: 30px">
                        <div class="card-body">
                            <div class="transactions">
                                <!-- item -->
                                <a href="parie.html" class="item">
                                    <div class="detail">
                                        <ion-icon name="cash-outline" style="margin-right: 16px; font-size: 48px; color: #11a44c"></ion-icon>
                                        <div>
                                            <strong>Recharger le compte</strong>
                                            <p>when you get direct deposit</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- * item -->
                                <!-- item -->
                                <a href="javascript:void(0);" class="item" id="allmatch">
                                    <div class="detail">
                                        <ion-icon name="dice-outline" style="margin-right: 16px; font-size: 48px; color: #11a44c"></ion-icon>
                                        <div>
                                            <strong>Pronostiquer</strong>
                                            <p>when you get direct deposit</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- * item -->
                                <!-- item -->
                                <a href="javascript:void(0);" class="item" id="all_lot">
                                    <div class="detail">
                                        <ion-icon name="gift-outline" style="margin-right: 16px; font-size: 48px; color: #11a44c"></ion-icon>
                                        <div>
                                            <strong>Les lots</strong>
                                            <p>when you get direct deposit</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- * item -->
                                <!-- item -->
                                <a href="parie.html" class="item">
                                    <div class="detail">
                                        <ion-icon name="file-tray-full-outline" style="margin-right: 16px; font-size: 48px; color: #11a44c"></ion-icon>
                                        <div>
                                            <strong>Historiques Pronostics</strong>
                                            <p>when you get direct deposit</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- * item -->
                            </div>
                            <!----<div class="mt-1"></div>
                            <button type="button" class="btn btn-primary btn-block" style="border-radius: 30px; background-color: #11a44c !important; border-color:#11a44c !important;">Continue</button>
                            <div class="mt-1"></div>
                            <button type="button" class="btn btn-primary btn-block" style="border-radius: 30px; border-color:rgba(17, 164, 76, 0) !important; background-color: rgba(17, 164, 76, 0.2) !important; color: rgba(17, 164, 76, 1) !important">Maybe Later</button>---->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- * Stats -->

    </div>
    <!-- * App Capsule -->
</div>


@include('components.toast')


<!-- App Bottom Menu -->
<!----<div class="appBottomMenu">
    <a href="index.html" class="item active">
        <div class="col">
            <ion-icon name="pie-chart-outline"></ion-icon>
            <strong>Overview</strong>
        </div>
    </a>
    <a href="app-pages.html" class="item">
        <div class="col">
            <ion-icon name="document-text-outline"></ion-icon>
            <strong>Pages</strong>
        </div>
    </a>
    <a href="app-components.html" class="item">
        <div class="col">
            <ion-icon name="apps-outline"></ion-icon>
            <strong>Components</strong>
        </div>
    </a>
    <a href="app-cards.html" class="item">
        <div class="col">
            <ion-icon name="card-outline"></ion-icon>
            <strong>My Cards</strong>
        </div>
    </a>
    <a href="app-settings.html" class="item">
        <div class="col">
            <ion-icon name="settings-outline"></ion-icon>
            <strong>Settings</strong>
        </div>
    </a>
</div>----->
<!-- * App Bottom Menu -->

<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged  w36">
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
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="dice-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Pronostiques
                                <span class="badge badge-primary">10</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-cards.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="dice-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Pronostics multiples
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="item" id="allcompet">
                            <div class="icon-box bg-primary">
                                <ion-icon name="trophy-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Competition
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-components.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="checkbox-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Resultats
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-cards.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="ticket-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Acheter des tiquets
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="item" id="all_lot2">
                            <div class="icon-box bg-primary">
                                <ion-icon name="gift-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Lots
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * menu -->

                <!-- others -->
                <div class="listview-title mt-1">Others</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="app-settings.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Settings
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="component-messages.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Support
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Log out
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

<!-- DialogIconedSuccess -->
<div class="modal fade dialogbox" id="DialogIconedSuccess" data-bs-backdrop="static" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-icon text-success">
                <ion-icon name="checkmark-circle"></ion-icon>
            </div>
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
            </div>
            <div class="modal-body" id="coup_success">
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <button type="button" id="coup_pron1" class="btn btn-success btn-block">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * DialogIconedSuccess -->



<!-- iOS Add to Home Action Sheet -->
<div class="modal inset fade action-sheet ios-add-to-home" id="ios-add-to-home-screen" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add to Home Screen</h5>
                <a href="#" class="close-button" data-bs-dismiss="modal">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content text-center">
                    <div class="mb-1"><img src="assets/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                    </div>
                    <div>
                        Install <strong>Finapp</strong> on your iPhone's home screen.
                    </div>
                    <div>
                        Tap <ion-icon name="share-outline"></ion-icon> and Add to homescreen.
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- * iOS Add to Home Action Sheet -->


<!-- Dialog Iconed Inline -->
<div class="modal fade dialogbox" id="DialogIconedButtonInline1" data-bs-backdrop="static" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">VIDER</h5>
            </div>
            <div class="modal-body">
                Etes vous sûr de vouloir vider ce coupon?
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a id="pron_coup_del_all" href="#" class="btn btn-text-danger" data-bs-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                        VIDER
                    </a>
                    <a href="#" class="btn btn-text-primary" data-bs-dismiss="modal">
                        <ion-icon name="checkmark-outline"></ion-icon>
                        ANNULER
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog Iconed Inline -->



<!-- Android Add to Home Action Sheet -->
<div class="modal inset fade action-sheet android-add-to-home" id="android-add-to-home-screen" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add to Home Screen</h5>
                <a href="#" class="close-button" data-bs-dismiss="modal">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content text-center">
                    <div class="mb-1">
                        <img src="assets/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                    </div>
                    <div>
                        Install <strong>Finapp</strong> on your Android's home screen.
                    </div>
                    <div>
                        Tap <ion-icon name="ellipsis-vertical"></ion-icon> and Add to homescreen.
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Android Add to Home Action Sheet -->



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
    // Add to Home with 2 seconds delay.
    AddtoHome("2000", "once");
</script>

<script>

    window.addEventListener("load", function() {

        var p = new Object();

        p['token'] = "{{$token}}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: `https://demo.pronomix.net/api/coupon-pronostics`,
            data: p,
            success: function(data) {
                if (data.data.pronostics !== undefined){
                    var mul_pron = data.data.pronostics.length;
                }else {
                     mul_pron = 0;
                }

                $("#pron_numb").append(mul_pron);
                toastbox('toast-7');
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



    $('#allmatch').click(function() {
        var token = "{{$token}}";
        //var loader =  document.getElementById('loader');
        //loader.show();

        $("#loader").show();
        document.querySelector("body").setAttribute("style", "pointer-events: none; background-color: white");

        $.ajax({
            url: `https://demo.pronomix.net/api/matchs-disponibles/liste/search=&filtre_date=?token=${token}`,
            method: "GET",
            success: function (data) {
                if (data.success === true){
                    //$("#loader").hide();
                    var url = "{{ route('store_match') }}";
                    var new_token = data.new_token;
                    var match_data = data.data;
                    var o = new Object();
                    o["new_token"] = new_token;
                    o["match_data"] = match_data;
                    //window.location = `${url}?new_token=` + new_token + `&match_data=` + match_data;

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
                            window.location = data;
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
    $('#allcompet').click(function() {
        //var loader =  document.getElementById('loader');
        //loader.show();

        $("#loader").show();

        $.ajax({
            url: `https://demo.pronomix.net/api/competition/liste/search=all_`,
            method: "GET",
            success: function (data) {
                if (data.success === true){
                    var url = "{{ route('store_compet') }}";
                    var compet_data = data.data;
                    var o = new Object();
                    o["compet_data"] = compet_data;

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
                            console.log(data)
                            window.location = data;
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

    $('#all_lot').click(function() {
        //var loader =  document.getElementById('loader');
        //loader.show();

        $("#loader").show();

        $.ajax({
            url: `https://demo.pronomix.net/api/lots/liste/search=all_&type_lot=all_&value_min=none&value_max=none`,
            method: "GET",
            success: function (data) {
                if (data.success === true){
                    //$("#loader").hide();
                    console.log(data.response)
                    var url = "{{ route('store_lots') }}";
                    var lot_data = data.response;
                    var o = new Object();
                    o["lot_data"] = lot_data;

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
                            console.log(data)
                            window.location = data;
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
    $('#all_lot2').click(function() {
        //var loader =  document.getElementById('loader');
        //loader.show();

        $("#loader").show();

        $.ajax({
            url: `https://demo.pronomix.net/api/lots/liste/search=all_&type_lot=all_&value_min=none&value_max=none`,
            method: "GET",
            success: function (data) {
                if (data.success === true){
                    //$("#loader").hide();
                    console.log(data.response)
                    var url = "{{ route('store_lots') }}";
                    var lot_data = data.response;
                    var o = new Object();
                    o["lot_data"] = lot_data;

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
                            console.log(data)
                            window.location = data;
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

    $('#pron_coup_del_all').click(function (e) {
        var token = "{{$token}}";

        var p = new Object();
        p['token'] = token;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: `https://demo.pronomix.net/api/pronostic-combine/delete-coupon`,
            data: p,
            success: function(data) {
                if (data.status === "success"){

                    console.log(data)
                    var new_token = data.new_token;
                    var message = data.message;
                    var o = new Object();
                    o["new_token"] = new_token;
                    o["message"] = message;
                    var url = "{{ route('vid_pronos') }}";

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
                            $('#coup_success').append(data['message']);
                            $("#loader").hide();
                            $('#DialogIconedSuccess').modal('show');
                        },
                        statusCode: {
                            500: function() {
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
                }
            }
        });

    });

    $('#coup_pron1').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('coup_pron') }}";
    });
</script>

</body>
<div class="placeholder-item"></div>

</html>
