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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css" integrity="sha512-YTuMx+CIxXa1l+j5aDPm98KFbVcYFNhlr2Auha3pwjHCF1lLbY9/ITQQlsUzdM1scW45kHC5KNib4mNa1IFvJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <script src="scroll-bounce/ptrLight.js"></script>
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

    <script>
        $(function() {
            $('#appCapsule').ptrLight({
                'refresh': function(ptrLightInstance) {
                    window.location.replace("/payment")
                    setTimeout(function() {
                        console.log('Updated!');
                        ptrLightInstance.done();
                    }, 2000);
                },
                pullThreshold: $(window).height() * 0.5,
                maxPullThreshold: $(window).height()
            });
        });
    </script>
    <style type="text/css">
        #appCapsule {
            -webkit-overflow-scrolling: touch;
            overflow-y: scroll;
        }

        body #ptr-light-spinner {
            top: 10px;
        }
    </style>

</head>

<body style="background-color: white; margin: 0; height: 100%; overflow: hidden; ">

<!-- loader -->
<div id="loader">
    <div class="spinner-border" role="status"></div>
</div>
<!-- * loader -->

<style>
    h1{
        font-size: 1.4rem;
    }
    .card .card-title {
        color: #27173E;
        font-size: .8rem;
        font-weight: 500;
    }


    .list-check > li {
        font-size: xx-small;
        text-align: start;
    }

    .list-check > li > span {
        text-align: start;
    }
</style>

<div id="aft_body" style="height: -webkit-fill-available; padding-bottom: 0; background-color: #EDEDF5;border-radius: 30px; margin-top: 30px; overflow-y: auto; position: relative">
    <!-- App Header -->
    <div class="appHeader" style="border-radius: 30px; margin: 2px; position: sticky">
        <div class="left">
            <a href="{{ route('home') }}" class="headerButton">
                <ion-icon name="chevron-back-outline"></ion-icon>
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
            <a href="{{ route('pers_info') }}" class="headerButton" id="linkToPersInfo">
                <ion-icon class="icon" name="person-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Extra Header -->
    <div class="extraHeader pe-0 ps-0">
        <ul class="nav nav-tabs lined" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#Perso" role="tab">
                    Perso
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Foot" role="tab">
                    Foot
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Pro" role="tab">
                    Pro
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Gold" role="tab">
                    Gold
                </a>
            </li>
        </ul>
    </div>
    <!-- * Extra Header -->


    <!-- App Capsule -->
    <div id="appCapsule" class="extra-header-active full-height">

        <div class="section tab-content mt-2 mb-1">

            <!-- Perso tab -->
            <div class="tab-pane fade show active" id="Perso" role="tabpanel">
                @if(!isset($data))
                    <div class="row">
                        <div class="col-12 mb-2" style="padding: 0 2.5rem;height: 295px;">
                            <div class="card text-center" style="height: -webkit-fill-available">
                                <div class="card-header" style="justify-content: center">
                                    <h1 class="my-0">Perso</h1>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Pack Personnalisé</h5>
                                    <h2>?</h2>
                                    <ul class="list-check text-left">
                                        <li> <span style="text-align: center; overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2;
           line-clamp: 2;
   -webkit-box-orient: vertical;">Choisissez le nombre de tickets à acheter</span> </li>
                                        <li> <span style="text-align: center; overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2;
           line-clamp: 2;
   -webkit-box-orient: vertical;">Faites des économies sur votre achat de tickets</span> </li>
                                    </ul>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#DialogBasic" class="btn btn-primary square">Obtenir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="container">
                        <figure class="card bg-white shadow-lg border-primary mx-auto" style="max-width: 750px;">
                            <div class="p-3 p-md-5">

                                <header class="mb-4 text-center">
                                    <img width="200" src="https://demo.pronomix.net/imgs/logo_final.png" alt="logo">

                                    <p>
                                        <img width="120" src="https://demo.pronomix.net/imgs/cancel.png"><br>
                                        Désolé, Votre achat de tickets Pronomix n'a pu aboutir.
                                    </p>
                                </header>
                                <ul class="mt-3 mb-4 list-condensed text-left" style="list-style: none">
                                    <li>Date operation: <b>missing</b></li>
                                    <li>Ticket(s): <b> missing </b></li>
                                    <li>Montant: <b> {{ $data['amount'] }} </b></li>
                                    <li>Reférence de paiement: <b>{{ $data['reference'] }}</b></li>
                                </ul>
                                <hr>
                                <p class="mb-0 text-center">
                                    <br><small>(*)Les détails de cette transaction vous seront communiqué par mail et/ou par SMS.</small>
                                </p>
                            </div>
                        </figure>

                    </div>
                @endif
            </div>
            <!-- * Perso tab -->

            <!-- Foot tab -->
            <div class="tab-pane fade" id="Foot" role="tabpanel">
                @if(!isset($data))
                    <div class="row">
                        <div class="col-12 mb-2" style="padding: 0 2.5rem; height: 295px">
                            <div class="card text-center" style="height: -webkit-fill-available">
                                <div class="card-header" style="justify-content: center">
                                    <h1 class="my-0">Foot</h1>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Pack Personnalisé</h5>
                                    <h2>500 <span class="text-muted">Fcfa</span></h2>
                                    <ul class="list-check text-left">
                                        <li>5 Tickets</li>
                                        <li>1 Tickets bonus</li><br>
                                    </ul>
                                    <a href="#" style="background-color: #3167eb !important; border-color: #3167eb !important" class="btn btn-primary square" onclick="achatPackTickets('2')"> <span>Obtenir</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="container">
                        <figure class="card bg-white shadow-lg border-primary mx-auto" style="max-width: 750px;">
                            <div class="p-3 p-md-5">

                                <header class="mb-4 text-center">
                                    <img width="200" src="https://demo.pronomix.net/imgs/logo_final.png" alt="logo">

                                    <p>
                                        <img width="120" src="https://demo.pronomix.net/imgs/cancel.png"><br>
                                        Désolé, Votre achat de tickets Pronomix n'a pu aboutir.
                                    </p>
                                </header>
                                <ul class="mt-3 mb-4 list-condensed text-left" style="list-style: none">
                                    <li>Date operation: <b>missing</b></li>
                                    <li>Ticket(s): <b> missing </b></li>
                                    <li>Montant: <b> {{ $data['amount'] }} </b></li>
                                    <li>Reférence de paiement: <b>{{ $data['reference'] }}</b></li>
                                </ul>
                                <hr>
                                <p class="mb-0 text-center">
                                    <br><small>(*)Les détails de cette transaction vous seront communiqué par mail et/ou par SMS.</small>
                                </p>
                            </div>
                        </figure>

                    </div>
                @endif
            </div>
            <!-- * Foot tab -->

            <!-- Pro tab -->
            <div class="tab-pane fade" id="Pro" role="tabpanel">
                @if(!isset($data))
                    <div class="row">
                        <div class="col-12 mb-2" style="padding: 0 2.5rem; height: 295px">
                            <div class="card text-center" style="height: -webkit-fill-available">
                                <div class="card-header" style="justify-content: center">
                                    <h1 class="my-0">Pro</h1>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Pack Personnalisé</h5>
                                    <h2>1100 <span class="text-muted">Fcfa</span></h2>
                                    <ul class="mt-3 mb-4 list-check text-left">
                                        <li>10 Tickets</li>
                                        <li>3 Tickets bonus</li><br>
                                    </ul>
                                    <a href="#" onclick="achatPackTickets('3')" style="background-color: #3167eb !important; border-color: #3167eb !important" class="btn btn-primary square">Obtenir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="container">
                        <figure class="card bg-white shadow-lg border-primary mx-auto" style="max-width: 750px;">
                            <div class="p-3 p-md-5">

                                <header class="mb-4 text-center">
                                    <img width="200" src="https://demo.pronomix.net/imgs/logo_final.png" alt="logo">

                                    <p>
                                        <img width="120" src="https://demo.pronomix.net/imgs/cancel.png"><br>
                                        Désolé, Votre achat de tickets Pronomix n'a pu aboutir.
                                    </p>
                                </header>
                                <ul class="mt-3 mb-4 list-condensed text-left" style="list-style: none">
                                    <li>Date operation: <b>missing</b></li>
                                    <li>Ticket(s): <b> missing </b></li>
                                    <li>Montant: <b> {{ $data['amount'] }} </b></li>
                                    <li>Reférence de paiement: <b>{{ $data['reference'] }}</b></li>
                                </ul>
                                <hr>
                                <p class="mb-0 text-center">
                                    <br><small>(*)Les détails de cette transaction vous seront communiqué par mail et/ou par SMS.</small>
                                </p>
                            </div>
                        </figure>

                    </div>
                @endif
            </div>
            <!-- * Pro tab -->

            <!-- Gold tab -->
            <div class="tab-pane fade" id="Gold" role="tabpanel">
                @if(!isset($data))
                    <div class="row">
                        <div class="col-12 mb-2" style="padding: 0 2.5rem; height: 295px">
                            <div class="card text-center" style="height: -webkit-fill-available">
                                <div class="card-header" style="justify-content: center">
                                    <h1 class="my-0">Gold</h1>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Pack Personnalisé</h5>
                                    <h2>3000 <span class="text-muted">Fcfa</span></h2>
                                    <ul class="mt-3 mb-4 list-check text-left">
                                        <li>10 Tickets</li>
                                        <li>3 Tickets bonus</li><br>
                                    </ul>
                                    <a href="#" onclick="achatPackTickets('4')" style="background-color: #3167eb !important; border-color: #3167eb !important" class="btn btn-primary square">Obtenir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="container">
                        <figure class="card bg-white shadow-lg border-primary mx-auto" style="max-width: 750px;">
                            <div class="p-3 p-md-5">

                                <header class="mb-4 text-center">
                                    <img width="200" src="https://demo.pronomix.net/imgs/logo_final.png" alt="logo">

                                    <p>
                                        <img width="120" src="https://demo.pronomix.net/imgs/cancel.png"><br>
                                        Désolé, Votre achat de tickets Pronomix n'a pu aboutir.
                                    </p>
                                </header>
                                <ul class="mt-3 mb-4 list-condensed text-left" style="list-style: none">
                                    <li>Date operation: <b>missing</b></li>
                                    <li>Ticket(s): <b> missing </b></li>
                                    <li>Montant: <b> {{ $data['amount'] }} </b></li>
                                    <li>Reférence de paiement: <b>{{ $data['reference'] }}</b></li>
                                </ul>
                                <hr>
                                <p class="mb-0 text-center">
                                    <br><small>(*)Les détails de cette transaction vous seront communiqué par mail et/ou par SMS.</small>
                                </p>
                            </div>
                        </figure>

                    </div>
                @endif
            </div>
            <!-- * Gold tab -->

        </div>

    </div>
    <!-- * App Capsule -->

    <!-- App Capsule -->
    <div id="appCapsule" style="padding: 0">

        <div class="section mt-2">

            @if(!isset($data))
                <div class="row">
                    <div class="col-12 mb-2" style="padding: 0 2.5rem;height: 295px;">
                        <div class="card text-center" style="height: -webkit-fill-available">
                            <div class="card-header" style="justify-content: center">
                                <h1 class="my-0">Perso</h1>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Pack Personnalisé</h5>
                                <h2>?</h2>
                                <ul class="list-check text-left">
                                    <li> <span style="text-align: center; overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2;
           line-clamp: 2;
   -webkit-box-orient: vertical;">Choisissez le nombre de tickets à acheter</span> </li>
                                    <li> <span style="text-align: center; overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2;
           line-clamp: 2;
   -webkit-box-orient: vertical;">Faites des économies sur votre achat de tickets</span> </li>
                                </ul>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#DialogBasic" class="btn btn-primary square">Obtenir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2" style="padding: 0 2.5rem; height: 295px">
                        <div class="card text-center" style="height: -webkit-fill-available">
                            <div class="card-header" style="justify-content: center">
                                <h1 class="my-0">Foot</h1>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Pack Personnalisé</h5>
                                <h2>500 <span class="text-muted">Fcfa</span></h2>
                                <ul class="list-check text-left">
                                    <li>5 Tickets</li>
                                    <li>1 Tickets bonus</li><br>
                                </ul>
                                <a href="#" style="background-color: #3167eb !important; border-color: #3167eb !important" class="btn btn-primary square" onclick="achatPackTickets('2')"> <span>Obtenir</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2" style="padding: 0 2.5rem; height: 295px">
                        <div class="card text-center" style="height: -webkit-fill-available">
                            <div class="card-header" style="justify-content: center">
                                <h1 class="my-0">Pro</h1>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Pack Personnalisé</h5>
                                <h2>1100 <span class="text-muted">Fcfa</span></h2>
                                <ul class="mt-3 mb-4 list-check text-left">
                                    <li>10 Tickets</li>
                                    <li>3 Tickets bonus</li><br>
                                </ul>
                                <a href="#" onclick="achatPackTickets('3')" style="background-color: #3167eb !important; border-color: #3167eb !important" class="btn btn-primary square">Obtenir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2" style="padding: 0 2.5rem; height: 295px">
                        <div class="card text-center" style="height: -webkit-fill-available">
                            <div class="card-header" style="justify-content: center">
                                <h1 class="my-0">Gold</h1>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Pack Personnalisé</h5>
                                <h2>3000 <span class="text-muted">Fcfa</span></h2>
                                <ul class="mt-3 mb-4 list-check text-left">
                                    <li>10 Tickets</li>
                                    <li>3 Tickets bonus</li><br>
                                </ul>
                                <a href="#" onclick="achatPackTickets('4')" style="background-color: #3167eb !important; border-color: #3167eb !important" class="btn btn-primary square">Obtenir</a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="container">
                    <figure class="card bg-white shadow-lg border-primary mx-auto" style="max-width: 750px;">
                        <div class="p-3 p-md-5">

                            <header class="mb-4 text-center">
                                <img width="200" src="https://demo.pronomix.net/imgs/logo_final.png" alt="logo">

                                <p>
                                    <img width="120" src="https://demo.pronomix.net/imgs/cancel.png"><br>
                                    Désolé, Votre achat de tickets Pronomix n'a pu aboutir.
                                </p>
                            </header>
                            <ul class="mt-3 mb-4 list-condensed text-left" style="list-style: none">
                                <li>Date operation: <b>missing</b></li>
                                <li>Ticket(s): <b> missing </b></li>
                                <li>Montant: <b> {{ $data['amount'] }} </b></li>
                                <li>Reférence de paiement: <b>{{ $data['reference'] }}</b></li>
                            </ul>
                            <hr>
                            <p class="mb-0 text-center">
                                <br><small>(*)Les détails de cette transaction vous seront communiqué par mail et/ou par SMS.</small>
                            </p>
                        </div>
                    </figure>

                </div>
            @endif

        </div>


    </div>-------}}
    <!-- * App Capsule -->
</div>

@include('components.toast')



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

<!-- Default Action Sheet Inset -->
<div class="modal fade action-sheet inset" id="actionSheetInset" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="action-title"></h5>
            </div>
            <div class="modal-body">
                <ul class="action-button-list">
                    <li>
                        <a href="#" class="btn btn-list" id="pron_simple"  data-bs-toggle="modal" data-bs-target="#actionSheetInset2">
                            <span>Pronostique rapide</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-list" id="pron_multi">
                            <span>Ajouter au coupon</span> <div style="color: black; text-align: center; background-color: white"><span style="font-size: 10px;font-weight: 700; vertical-align: bottom" class="short_team_name" id="coupname"></span> <span class="badge-green" id="coupval"></span></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- * Default Action Sheet Inset -->

<!-- Default Action Sheet Inset -->
<div class="modal fade action-sheet inset" id="actionSheetInset2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="simprontitle"></h5>
            </div>
            <div class="modal-body">
                <ul class="action-button-list">
                    <li>
                        <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                            <span id="simple_league_name" style="margin-left: auto; margin-right: auto"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-list" data-bs-dismiss="modal" style="justify-content: space-around">
                            <strong id="team1"></strong> - <strong id="team2"></strong>
                        </a>
                    </li>
                </ul>
                <div class="action-sheet-content">

                    <form>
                        <div class="form-group basic">
                            <label class="label">Type Pronostic</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter an amount"
                                       value="Simple" readonly>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label">Valeur Pronostic</label>
                            <div class="input-group">
                                <input id="pronval" type="text" class="form-control" placeholder="Enter an amount" readonly>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label">Pronostiquer avec combien de tickets ?</label>
                            <div class="input-group">
                                <input id="pronticketval" required type="number" min="1" max="" class="form-control" placeholder="Saisir le nombre de tickets à utiliser">
                            </div>
                            <small id="error_message" class="text-danger">Veuillez remplir svp</small>
                            <div>Nombre de points : <span class="price text-danger" id="ipt_info"></span></div>
                        </div>

                        <div class="form-group basic">
                            <button id="pronostiquer" type="button" class="btn btn-primary btn-block btn-lg">Pronostiquer</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Default Action Sheet Inset -->

<div class="modal fade dialogbox" id="DialogBlockButton" data-bs-backdrop="static" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                Vous serez redirigé vers la page de paiement. Merci de cliquer sur le bouton en dessous pour finaliser votre achat.
            </div>
            <div class="modal-footer">
                <div class="btn-list">
                    <a href="" id="achat_link" class="btn btn-text-primary btn-block" style="background-color: #11a44c !important;
    color: white !important;">Acheter</a>
                    <a href="#" class="btn btn-text-secondary btn-block" data-bs-dismiss="modal">Fermer</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Dialog Basic -->
<div class="modal fade dialogbox" id="DialogBasic" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Achat Personnalisé</h5>
            </div>
            <div class="modal-body">
                <p style="font-size: 15px; line-height: 1.2;">
                    Choisissez le nombre de tickets que vous souhaitez obtenir.
                    Le ticket pronostics vous revient moins chère lorsque vous en achetez en grande quantité.
                </p>
                <hr>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col" style="font-size: 25px; margin-bottom: 15px;">
                            <b class="text-dark" id="amount">100</b> FCFA
                        </div>
                        <!-- col.// -->
                        <div class="col-auto">
                            <div class="input-group">
                                <button class="btn btn-light" type="button" id="moins" onclick="moins()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999" viewBox="0 0 24 24">
                                        <path d="M19 13H5v-2h14v2z"></path>
                                    </svg>
                                </button>
                                <input class="form-control text-center" type="number" style="font-size: 20px;" id="nbr_tickets_to_buy" placeholder="" onkeyup="change()" value="1">
                                <button class="btn btn-light" type="button" id="plus" onclick="plus()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999" viewBox="0 0 24 24">
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="col-lg-12" style="font-size: 12px;">
                                <span class="form-check-label">Nombre de Tickets</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">fermer</a>
                    <a href="#" class="btn btn-text-primary" onclick="achatPackTicketsPers()">OBTENIR</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Dialog Basic -->


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
    $('#coup_pron1').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('coup_pron') }}";
    });
    $('[id^="coupon"]').on('click', function (e) {
        $("#loader").show();
        var bet_id = $(this).data('bet_id');
        var value = $(this).data('value');
        var rencontre = $(this).data('rencontre_id');
        var token = "{{ $token }}";

        var o = new Object();
        o["rencontre_id_"] = rencontre;
        o["bet_id"] = bet_id;
        o["value"] = value;
        o["token"] = token;
        console.log(o)

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: `https://demo.pronomix.net/api/pronostic-combine/add-to-coupon`,
            data: o,
            success: function(data) {
                console.log(data)
                if (data.status === 'success'){

                    var new_token = data.new_token;
                    var message = data.message;
                    var data_reg = data.data;
                    var o = new Object();
                    o["new_token"] = new_token;
                    o["message"] = message;
                    o["data_reg"] = data_reg;
                    var url = "{{ route('pronos_multi') }}";
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
                            console.log(data)
                            if (data['status'] === 'success'){
                                $('#coup_success').append(data['message']);
                                $("#loader").hide();
                                $('#DialogIconedSuccess').modal('show');
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

                }
                else {

                    $('#coup_error').append(data.message);
                    $("#loader").hide();
                    $('#DialogIconedDanger').modal('show');
                }
            },
            statusCode: {
                500: function() {
                    $('#coup_error').append("Impossible d'enregistrer votre pronostic. Merci de ressayer plutard.");
                    $("#loader").hide();
                    $('#DialogIconedDanger').modal('show');
                },
                419: function (){
                    window.location = "{{ route('logout') }}";
                }
            }
        });

        //console.log(coup);
    });

    function achatPackTickets(pack_id) {
        console.log(pack_id)
        $('#loader').show();
        var p = new Object();
        p['token'] = "{{$token}}";
        p['pack_id'] = pack_id;
        p['metadata'] = 'mobile';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: `https://demo.pronomix.net/api/obtenir-tickets`,
            data: p,
            success: function(data) {
                if (data.status === "success"){
                    console.log(data.data.payment_url)
                    $("#achat_link").attr("href", data.data.payment_url)

                    var new_token = data.new_token;
                    var o = new Object();
                    o["new_token"] = new_token;
                    var url = "{{ route('payment_token_store') }}";

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
                            $('#DialogBlockButton').modal('show');
                            console.log(data)
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
    }

    $( document ).ajaxError(function( event, jqxhr, settings, exception ) {
        if ( jqxhr.status== 401 ) {
            console.log('test')
        }
    });

    function achatPackTicketsPers(){
        var pack_id = '1';
        var nbr_tickets = $('#nbr_tickets_to_buy').val();
        $('#loader').show();

        var p = new Object();
        p['token'] = "{{$token}}";
        p['pack_id'] = pack_id;
        p['nbr_tickets'] = nbr_tickets;
        p['metadata'] = 'mobile';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: `https://demo.pronomix.net/api/obtenir-tickets`,
            data: p,
            success: function(data) {
                if (data.status === "success"){
                    console.log(data.data.payment_url)
                    $("#achat_link").attr("href", data.data.payment_url)

                    var new_token = data.new_token;
                    var o = new Object();
                    o["new_token"] = new_token;
                    var url = "{{ route('payment_token_store') }}";

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
                            $('#DialogBasic').modal('hide');
                            $('#DialogBlockButton').modal('show');
                            console.log(data)
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
    }

    var nbre_tickets = $('#nbr_tickets_to_buy').val();
    var amount = 100;

    function plus(){
        nbre_tickets++;
        $('#nbr_tickets_to_buy').val(nbre_tickets);
        if (nbre_tickets > 0 && nbre_tickets <= 10) {
            amount = 100;
        } else if (nbre_tickets > 10 && nbre_tickets <= 20) {
            amount = 95;
        } else if (nbre_tickets > 20 && nbre_tickets <= 30) {
            amount = 95;
        } else if (nbre_tickets > 30 && nbre_tickets <= 40) {
            amount = 95;
        } else if (nbre_tickets > 40 && nbre_tickets <= 50) {
            amount = 85;
        } else if (nbre_tickets > 50) {
            amount = 75;
        }
        $('#amount').empty();
        $('#amount').append(amount*nbre_tickets);
    }

    function moins(){

        if (nbre_tickets > 1){
            nbre_tickets--;
            $('#nbr_tickets_to_buy').val(nbre_tickets);
            if (nbre_tickets > 0 && nbre_tickets <= 10) {
                amount = 100;
            } else if (nbre_tickets > 10 && nbre_tickets <= 20) {
                amount = 95;
            } else if (nbre_tickets > 20 && nbre_tickets <= 30) {
                amount = 95;
            } else if (nbre_tickets > 30 && nbre_tickets <= 40) {
                amount = 95;
            } else if (nbre_tickets > 40 && nbre_tickets <= 50) {
                amount = 85;
            } else if (nbre_tickets > 50) {
                amount = 75;
            }
            $('#amount').empty();
            $('#amount').append(amount*nbre_tickets);
        }
    }

    function change(){
        nbre_tickets = $('#nbr_tickets_to_buy').val();

        if (nbre_tickets > 0 && nbre_tickets <= 10) {
            amount = 100;
        } else if (nbre_tickets > 10 && nbre_tickets <= 20) {
            amount = 95;
        } else if (nbre_tickets > 20 && nbre_tickets <= 30) {
            amount = 95;
        } else if (nbre_tickets > 30 && nbre_tickets <= 40) {
            amount = 95;
        } else if (nbre_tickets > 40 && nbre_tickets <= 50) {
            amount = 85;
        } else if (nbre_tickets > 50) {
            amount = 75;
        }
        $('#amount').empty();
        var res = amount*nbre_tickets;
        if (res == 0){
            res = 'NaN';
        }
        $('#amount').empty();
        $('#amount').append(res);
    }

</script>

<script>


</script>


</body>

</html>
