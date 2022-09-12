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

<div id="aft_body" style="height: -webkit-fill-available; padding-bottom: 0; background-color: #00373e;border-radius: 30px; margin-top: 30px">
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


            <h1 class="total" id="nbre_point" style="position: absolute;left: 50%;transform: translate(-50%, -50%);top: 8rem; color: #FFFFFF; font-size: 3rem">{{ $numb }}<small style="color: #FFFFFF; font-size: .575em;">Pts</small> </h1>

            <h1 class="total" style="position: absolute;left: 50%;transform: translate(-50%, -50%);top: 10.5rem; font-size: 2rem; color: #ce9d52">{{ $islogged['balance_tickets'] }}<small style="color: #ce9d52; font-size: .675em;">Tickets</small></h1>

        <!-- Stats -->
        <div class="section" style="margin-top: 9rem; padding: 0; height: -webkit-fill-available; box-shadow: 0px 5px rgb(17 164 76 / 10%), 0px -10px 12px rgb(17 164 76 / 10%);height: -webkit-fill-available;border-radius: 30px 30px;">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card" style="height: 100%; border-radius: 30px">
                        <div class="card-body">
                            <div class="transactions">
                                <!-- item -->
                                <a href="{{ route('payment_index') }}" id="linkToPayment" class="item">
                                    <div class="detail">
                                        <img style="margin-right: 16px;width: 65px;padding: 10px;background-color: white;" src="{{ asset('assets/img/icon/credit_card.png') }}" alt="">
                                        <div>
                                            <strong>Recharger le compte</strong>
                                            <p>when you get direct deposit</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- * item -->
                                <!-- item -->
                                <a href="{{ route('allmatch') }}" id="linkToAll_match" class="item" {{----id="allmatch"---}}>
                                    <div class="detail">
                                        <img style="margin-right: 16px;width: 65px;padding: 10px;background-color: white;" src="{{ asset('assets/img/icon/dice.png') }}" alt="">
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
                                        <img style="margin-right: 16px;width: 65px;padding: 10px;background-color: white;" src="{{ asset('assets/img/icon/gift.png') }}" alt="">
                                        <div>
                                            <strong>Les lots</strong>
                                            <p>when you get direct deposit</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- * item -->
                                <!-- item -->
                                <a href="{{ route('his_coup') }}" id="linkToHist" {{---data-bs-toggle="modal" data-bs-target="#DialogIconedDangerSoon"---}} class="item">
                                    <div class="detail">
                                        <img style="margin-right: 16px;width: 65px;padding: 10px;background-color: white;" src="{{ asset('assets/img/icon/history.png') }}" alt="">
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

    $('[id^="linkTo"]').click(function () {
        $("#loader").show();
    });


    // Our simple App
    const App = async (onstart, onload) => {
        onstart();

        // Loading...

        // The application is now loaded
        onload();
    }

    let isSlow;
    let loaded;

    App(
        () => {
            isSlow = setTimeout(() => {
                console.log("Thing are getting slow...");
            }, 3000); // 10 seconds
        },
        () => {
            clearTimeout(isSlow);
            loaded = true;
            console.log("Loaded.");
        });


</script>


</body>
<div class="placeholder-item"></div>

</html>
