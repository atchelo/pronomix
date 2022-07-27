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
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css" integrity="sha512-YTuMx+CIxXa1l+j5aDPm98KFbVcYFNhlr2Auha3pwjHCF1lLbY9/ITQQlsUzdM1scW45kHC5KNib4mNa1IFvJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
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

        .badge-red{
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
            background-color: #d40000;
        }

        .badge-blue{
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
            background-color: #3a87ad;
        }

        .coupon{
            border: 1px solid #e4e4e4;
        }

    </style>
</head>

<body style="background-color: white; margin: 0; height: 100%; overflow: hidden; ">

<!-- loader -->
<div id="loader">
    <div class="spinner-border" role="status"></div>
</div>
<!-- * loader -->

<div id="scroller" style="height: -webkit-fill-available; padding-bottom: 0; background-color: #EDEDF5;border-radius: 30px; margin-top: 30px; overflow-y: auto; position: relative">
    <!-- App Header -->
    <div class="appHeader" style="border-radius: 30px; margin: auto; position: sticky">
        <div class="left">
            <a href="{{ route('home') }}" class="headerButton">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle" style="background-color: #11a44c;border-radius: 10px;">
            <!---<img src="assets/img/logo_final_w.png" alt="logo" class="logo">--->
        </div>
        <div class="right">
            <a href="" class="headerButton" onclick="">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a>
            <a href="{{ route('pers_info') }}" class="headerButton" id="linkToPersInfo">
                <ion-icon class="icon" name="person-outline"></ion-icon>
            </a>
        </div>
    </div>

    <div class="extraHeader">
        <form class="search-form" style="display: flex; justify-content: space-around">
            <div class="form-group searchbox" style="width: 48%">
                <input type="number" class="form-control" id="refsearch" style="height: 2.5rem">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
            </div>
            <div class="form-group boxed" style="padding: 0; width: 48%">
                <div class="input-wrapper">
                    <select class="form-control custom-select" id="select4b" style="height: 2.5rem; padding: 0 1rem 0 1.6rem; text-align: center">
                        <option value="">Tous les filtres</option>
                        <option {{ request()->option == 1 ? 'selected' : '' }} value="1">Gagné</option>
                        <option {{ request()->option == 2 ? 'selected' : '' }} value="2">Perdu</option>
                        <option {{ request()->option == 3 ? 'selected' : '' }} value="3">En Attente</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <div id="appCapsule" style="padding: 0">
        <div class="section mt-2" style="margin-top: 4rem !important; padding: 0 .1px; margin-bottom: 3rem !important">

                <div class="transactions" id="puthist">

                    <style>
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


                        .badge-red {
                            display: inline-block;
                            padding: 3px 5px;
                            min-width: 10px;
                            border-radius: 0.25rem;
                            text-align: center;
                            font-size: 10px;
                            font-weight: bold;
                            line-height: 1;
                            white-space: nowrap;
                            vertical-align: baseline;
                            color: #fff;
                            background-color: #d40000;
                        }

                        .badge-cancelled {
                            display: inline-block;
                            padding: 3px 5px;
                            min-width: 10px;
                            border-radius: 0.25rem;
                            text-align: center;
                            font-size: 10px;
                            font-weight: bold;
                            line-height: 1;
                            white-space: nowrap;
                            vertical-align: baseline;
                            color: #fff;
                            background-color: dimgray;
                        }

                    </style>
                    @foreach($hist_data as $index => $hist)
                    <div id="hist_pron" class="item"
                         {{-----data-user_new_balance="{{ $hist['pronostic_content']['user_new_balance'] }}"
                         data-type="{{ $hist['pronostic_content']['type'] }}"

                         data-pronostics="{{ json_encode($hist['pronostic_content']['pronostics']) }}"

                         data-pronostic_win="{{ $hist['pronostic_win'] }}"
                         data-date_created="{{ $hist['date_created'] }}"
                         data-mise_tickets="{{ $hist['mise_tickets'] }}"
                         data-odd_cumul="{{ $hist['pronostic_content']['odd_cumul'] }}"
                         data-gain_potentiel="{{ $hist['pronostic_content']['gain_potentiel'] }}"----}}
                         style="padding: 25px 24px; position: relative; overflow: hidden;" onclick="showdetails({{ $hist['reference_coupon'] }})">
                        <div class="detail">
                            <div>
                                <strong style="color: #11a44c;"> {{ $hist['type'] }} - N° {{ $hist['reference_coupon'] }} </strong>
                                <p class="small text-muted"><span><b></b> {{ $hist['date_created'] }} </span> - {{ $hist['mise_tickets'] }} Ticket(s)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" style="display: flex; justify-content: end">
                                @if($hist['pronostic_win'] === 'lost')
                                    <div class="badge-red"> Perdu </div>
                                @elseif($hist['pronostic_win'] === 'win')
                                    <div class="badge-green"> Gagné </div>
                                @else
                                    <div class="badge-blue"> En Attente </div>
                                @endif
                            </div>
                            <div class="col-12" style="display: flex; justify-content: end">
                                <p>{{ $hist['gain_potentiel'] }} pts</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

        </div>


    </div>
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

<!-- Modal Basic -->
<div class="modal fade modalbox" id="ModalBasic" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="margin-top: 2rem">
                <ion-icon name="close-circle" data-bs-dismiss="modal" id="close_his"  style="font-size: 2rem;
    position: absolute;
    right: 0.3rem;
    top: 0.3rem;"></ion-icon>
                <div class="titleCard ">
                    <div class="titleCard__textWrapper">
                                        <span class="titleCard__text">N°<strong id="reference_coupon"></strong>
                                            <br><span style="font-weight: normal; color: #6f6c6c; font-size: 14px; ">Type pronostic: <span style="font-weight: normal; color: #6f6c6c; font-size: 14px; " id="type"></span></span>
                                            <br><span style="font-weight: normal; color: #6f6c6c; font-size: 14px; ">Cote: <div class="badge-green" id="odd_cumul"></div></span>
                                            <br><span style="font-weight: normal; color: #6f6c6c; font-size: 14px; ">Nombre de points: <span id="gain_potentiel"></span> pts</span>
                                            <br><span style="font-weight: normal; color: #6f6c6c; font-size: 14px; ">Mise:
                                                <span id="mise_tickets"></span> Tickets
                                              </span>
                                            <br><span style="font-weight: normal; color: #6f6c6c; font-size: 14px; ">Date: <span id="date_created"></span> GMT</span>
                                            <br><span style="font-weight: normal; color: #6f6c6c; font-size: 14px; ">Status:
                                                <span id="status"></span>
                                            </span>
                                        </span>
                    </div>
                </div>
            </div>
            <div class="modal-body" style="margin-top: 11rem; background-color: #EDEDF5;" id="match_hist">

            </div>
        </div>
    </div>
</div>
<!-- * Modal Basic -->

<!-- Default Action Sheet Inset -->
<div class="modal fade action-sheet inset" id="actionSheetInset2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="simprontitle"></h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">

                    <form>
                        <div class="form-group basic">
                            <label class="label">Type Pronostic</label>
                            <div class="input-group">
                                <select class="form-control custom-select" id="type_pron">
                                    <option value="combine">Combiné</option>
                                    <option value="systeme-1">Système-1</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label">Valeur Pronostic</label>
                            <div class="input-group">
                                <input id="pronval" type="text" class="form-control" placeholder="Enter an amount" value="Cote: " readonly>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label">Pronostiquer avec combien de tickets ?</label>
                            <div class="input-group">
                                <input id="pronticketval" required type="number" min="1" class="form-control" placeholder="Saisir le nombre de tickets à utiliser">
                            </div>
                            <small id="error_message" class="text-danger">Veuillez remplir svp</small>
                            <div>Nombre de points : <span class="price text-danger" id="ipt_info"></span></div>
                        </div>

                        <div class="form-group basic">
                            <button id="valid_muli" type="button" class="btn btn-primary btn-block btn-lg">Valider</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Default Action Sheet Inset -->

<!-- Default Action Sheet Inset -->
<div class="modal fade action-sheet inset" id="gen_coup" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="action-title">Option code coupon</h5>
            </div>
            <div class="modal-body">
                <ul class="action-button-list">
                    <li>
                        <a href="#" class="btn btn-list"  data-bs-toggle="modal" data-bs-target="#saisir_coup">
                            <span>Saisir un coupon</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-list" id="gen_coup_click">
                            <span>Generer un code coupon</span> <div style="color: black; text-align: center; background-color: white"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- * Default Action Sheet Inset -->


<!-- Default Action Sheet Inset -->
<div class="modal fade action-sheet inset" id="saisir_coup" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="action-title">Charger le code coupon</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">

                    <form>
                        <div class="form-group basic">
                            <label class="label">Saisir le code coupon</label>
                            <div class="input-group">
                                <input type="text" id="code_coupon" class="form-control">
                            </div>
                        </div>

                        <div class="form-group basic">
                            <button type="button" id="code_coupon_val" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Valider</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Default Action Sheet Inset -->



<!-- Dialog Iconed Inline -->
<div class="modal fade dialogbox" id="DialogIconedButtonInline" data-bs-backdrop="static" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SUPPRIMER</h5>
            </div>
            <div class="modal-body">
                Etes vous sûr de vouloir suprimer ce pronostic?
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a id="pron_coup_sup" href="#" class="btn btn-text-danger" data-bs-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                        SUPPRIMER
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


<!-- DialogIconedDanger -->
<div class="modal fade dialogbox" id="DialogIconedDanger" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-icon text-danger">
                <ion-icon name="close-circle"></ion-icon>
            </div>
            <div class="modal-header">
                <h5 class="modal-title">Erreur</h5>
            </div>
            <div class="modal-body" id="coup_error">

            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn" id="code_coup_ferme" data-bs-dismiss="modal">Fermer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * DialogIconedDanger -->


<!-- DialogIconedSuccessValCode -->
<div class="modal fade dialogbox" id="DialogIconedSuccessValCode" data-bs-backdrop="static" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="display: flex; justify-content: center">
                <h1 id="code" style="text-align: center"></h1>
            </div>
            <div class="modal-body" id="coup_successValCode" style="margin-bottom: 15px">
            </div>
            <div class="container" style="margin-bottom: 15px">
                <div class="row">
                    <div class="col" style="cursor:pointer; display: flex; justify-content: center" onclick="toastbox('toast-9')">
                        <ion-icon style="width: 1.5em;height: 1.5em; color: #11a44c !important" name="link-outline"></ion-icon><br>
                    </div>
                    <div class="col" style="opacity: 0.3; display: flex; justify-content: center">
                        <ion-icon style="width: 1.5em;height: 1.5em;" name="logo-whatsapp"></ion-icon>
                    </div>
                    <div class="col" style="opacity: 0.3; display: flex; justify-content: center">
                        <ion-icon style="width: 1.5em;height: 1.5em;" name="logo-google"></ion-icon>
                    </div>
                    <div class="col" style="opacity: 0.3; display: flex; justify-content: center">
                        <ion-icon style="width: 1.5em;height: 1.5em;" name="chatbox-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <button type="button" id="coup_pron" class="btn btn-success btn-block">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * DialogIconedSuccessValCode -->


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
                    <button type="button" id="fermer" data-bs-dismiss="modal" class="btn btn-success btn-block">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * DialogIconedSuccess -->

<!-- toast center -->
<div id="toast-9" class="toast-box toast-center" style="z-index: 9999; background: black">
    <div class="in">
        <div class="text">
            <div class="form-group basic">
                <div class="input-group" style="background: aliceblue">
                    <input type="text" id="link_code_coupon" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-sm btn-text-light close-button">CLOSE</button>
</div>
<!-- toast center -->

<!-- toast center iconed -->
<div id="toast-11" class="toast-box toast-center" style="background-color: #fff">
    <div class="in">
        <ion-icon name="alert-circle-outline" class="text-warning"></ion-icon>
        <div class="text-warning" id="popuptext">

        </div>
    </div>
</div>
<!-- toast center iconed -->


<script>
    var rollback = "{{route('rollback')}}";
    var current_page = "{{$current_page}}";
    current_page = parseInt(current_page) + 1;
    var total_page = "{{$total_page}}";
    var next_page = "{!! $next_page !!}";
    var token = "{{ $token }}";

    var step = 2;

    $('#scroller').on('resize', onScroll);
    $('#scroller').on('scroll', onScroll);
    function onScroll(){
        if($('#scroller').scrollTop() + window.innerHeight >= $(this)[0].scrollHeight) {
            if (next_page !== null){
                if(step == current_page){
                    $('#load_spinner').css('display', 'block');
                    console.log('load')
                    $('#puthist').append("<div id='loader_box' style='width: 100%; display: flex'></div>");
                   $('#loader_box').append("<div id='load_spinner' class='spinner-grow text-success' style='margin-left: auto; margin-right:auto' role='status'></div>");
                    step++;
                    var o = new Object();
                    o['token'] = token;
                    o['page'] = current_page;
                    //$("#bodyID").addClass('block');
                    $.ajax({
                        url: `${next_page}`,
                        data: o,
                        method: "GET",
                        success: function (data) {
                        console.log(data)
                            if (data.success === true){
                                next_page = data.pronostics.next_page_url;
                                var url = "{{ route('store_hist') }}";
                                var hist_data = data;
                                var token = data.new_token;
                                total_page = data.pronostics.last_page;
                                var p = new Object();
                                p["hist_data"] = hist_data;
                                p["token"] = token;

                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: p,
                                    success: function(data) {
                                        //console.log(data)
                                        $('#loader_box').remove();
                                        $('#load_spinner').remove();
                                        current_page = parseInt(data[0]) + 1;
                                        step = current_page;
                                        data[1].forEach(getall);
                                        function getall(item) {
                                            $('#puthist').append(item);
                                        }
                                      $('#loader').hide();
                                       // $("#bodyID").removeClass('block');

                                        //window.location = data;
                                        // location.reload();
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
                console.log(step)
            }
            else {
                $('#load_spinner').hide();
                //console.log('last')
            }
        }

    }
    $('#select4b').on('change', function () {
        $('#loader').show();
        var token2 = "{{ $token }}";
        var o = new Object();
        o['token'] = token2;
        var option ='';

        if( !$("#select4b").val() ) {
            option ='';
        }else{
            option = $("#select4b").val();
        }

        var ref = 'all_';
        if( !$('#refsearch').val() ) {
            ref = 'all_';
        }else{
            ref = $('#refsearch').val();
        }


        o['token'] = token2;
        $.ajax({
            url: `https://demo.pronomix.net/api/historique-pronostics/reference_coupon=${ref}/status=${option}?page=1`,
            data: o,
            method: "GET",
            success: function (data) {
                if (data.success === true){

                    if (data.pronostics.data.length !== 0){
                        next_page = data.pronostics.next_page_url;
                        current_page = data.pronostics.current_page;
                        step = current_page;
                        total_page = data.pronostics.last_page;
                        var url = "{{ route('store_hist') }}";
                        var hist_data = data;
                        var token = data.new_token;
                        var p = new Object();
                        p["hist_data"] = hist_data;
                        p["token"] = token;

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: "POST",
                            url: url,
                            data: p,
                            success: function(data) {
                                //console.log(data)
                                $('#puthist').empty();
                                data[1].forEach(getall);
                                function getall(item) {
                                    $('#puthist').append(item);
                                }
                                $('#loader').hide();
                                // $("#bodyID").removeClass('block');

                                //window.location = data;
                                // location.reload();
                            }
                        });
                    }else {
                        $('#popuptext').empty();
                        $('#popuptext').append("Aucun element correspondant");
                        toastbox('toast-11',  2000);
                        $("#loader").hide();
                    }

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

    var token3 = "{{ $token }}";
    $('#refsearch').on('keyup', function () {
        $('#loader').show();
        var o = new Object();
        var option ='';

        if( !$("#select4b").val() ) {
             option ='';
        }else{
            option = $("#select4b").val();
        }

        var ref = 'all_';
        if( !$('#refsearch').val() ) {
            ref = 'all_';
        }else{
            ref = $('#refsearch').val();
        }


        o['token'] = token3;
        $.ajax({
            url: `https://demo.pronomix.net/api/historique-pronostics/reference_coupon=${ref}/status=${option}?page=1`,
            data: o,
            method: "GET",
            success: function (data) {
                if (data.success === true){

                    if (data.pronostics.data.length !== 0){
                        next_page = data.pronostics.next_page_url;
                        current_page = data.pronostics.current_page;
                        step = current_page;
                        total_page = data.pronostics.last_page;
                        var url = "{{ route('store_hist') }}";
                        var hist_data = data;
                        var token = data.new_token;
                        var p = new Object();
                        p["hist_data"] = hist_data;
                        p["token"] = token;

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: "POST",
                            url: url,
                            data: p,
                            success: function(data) {
                                //console.log(data)
                                $('#puthist').empty();
                                data[1].forEach(getall);
                                function getall(item) {
                                    $('#puthist').append(item);
                                }
                                $('#loader').hide();
                                // $("#bodyID").removeClass('block');

                                //window.location = data;
                                // location.reload();
                            }
                        });
                    }
                    else {
                        $('#popuptext').empty();
                        $('#popuptext').append("Aucun element correspondant");
                        toastbox('toast-11',  2000);
                        $("#loader").hide();
                    }
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


    var token1 = "{{ $token }}";

    function showdetails(ref) {
        console.log(ref)
        $('#loader').show();
        var o = new Object();
        o['token'] = token1;
        $.ajax({
            url: `https://demo.pronomix.net/api/detail-pronostics/reference_coupon=${ref}`,
            data: o,
            method: "GET",
            success: function (data) {
                console.log(data)
                var res = data.pronostics;
                var reference_coupon = res.reference_coupon;
                var type = res.type;
                var odd_cumul = res.cote_globale;
                var gain_potentiel = res.gain_potentiel;
                var mise_tickets = res.mise_tickets;
                var date_created = res.date_created;
                var pronostic_win = res.pronostic_win;

                var pronostics = res.pronostic_content.pronostics;

                console.log(pronostics)


                if(pronostic_win === 'lost'){
                    $('#status').append("<div class='badge-red'> Perdu </div>");
                }if (pronostic_win === 'win'){
                    $('#status').append("<div class='badge-green'> Gagné </div>");
                }
                if(pronostic_win === null){
                    $('#status').append("non disponible");
                }

                $('#reference_coupon').empty();
                $('#reference_coupon').append(reference_coupon);


                $('#type').empty();
                $('#type').append(type);

                $('#mise_tickets').empty();
                $('#mise_tickets').append(mise_tickets);

                $('#date_created').empty();
                $('#date_created').append(date_created);


                $('#odd_cumul').empty();
                $('#odd_cumul').append(odd_cumul);

                $('#gain_potentiel').empty();
                $('#gain_potentiel').append(gain_potentiel);



                pronostics.forEach(showall);
                function showall(item) {
                    var res = '';
                    var score = '';
                    var winhome = '';
                    var winaway = '';
                    if(item.score_fulltime_home > item.score_fulltime_away){
                        winhome = "#51b115";
                    }

                    if(item.score_fulltime_away  > item.score_fulltime_home){
                        winaway = "#51b115";
                    }

                    function checknull(el){
                        if(el !== null){
                            return el
                        }else {
                            return '';
                        }
                    }

                    if(item.pronostic_win === 'lost'){

                        res = `<div class='badge-red'> Perdu </div>`;
                        score=`<div class="card" style="padding: 7px 0 7px 0; background-color: transparent">
                                            <div class="card-body" style="padding: 0">
                                                <div class="container" style="padding: 0px 5px 0px">

                                                    <div class="row">
                                                        <div class="col" style="padding: 0">
                                                            <strong style="font-size: 20px; color: black;"><span style="color: ${winhome}">${checknull(item.score_fulltime_home)}</span> - <span style="color: ${winaway}">${checknull(item.score_fulltime_away)}</span></strong>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
<div class="card-footer" style="padding: 0;font-size: x-small;height: 1rem; width: max-content">(${checknull(item.score_halftime_home)} - ${checknull(item.score_halftime_away)}, ${checknull(item.score_secondtime_home)} - ${checknull(item.score_secondtime_away)})</div>
                                        </div>`;
                    }else if(item.pronostic_win === 'win'){
                        res = `<div class='badge-green'> Gagné </div>`;

                        score=`<div class="card" style="padding: 7px 0 7px 0; background-color: transparent">
                                            <div class="card-body" style="padding: 0">
                                                <div class="container" style="padding: 0px 5px 0px">

                                                    <div class="row">
                                                        <div class="col" style="padding: 0">
                                                            <strong style="font-size: 20px; color: black;"><span style="color: ${winhome}">${checknull(item.score_fulltime_home)}</span> - <span style="color: ${winaway}">${checknull(item.score_fulltime_away)}</span></strong>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
<div class="card-footer" style="padding: 0;font-size: x-small;height: 1rem; width: max-content">(${checknull(item.score_halftime_home)} - ${checknull(item.score_halftime_away)}, ${checknull(item.score_secondtime_home)} - ${checknull(item.score_secondtime_away)})</div>
                                        </div>`;
                    }
                    else if(item.pronostic_win === 'canceled'){
                        res = `<div class='badge-red'> reporte </div>`;
                        score=`<div class="card" style="padding: 7px 0 7px 0; background-color: transparent">
                                            <div class="card-body" style="padding: 0">
                                                <div class="container" style="padding: 0px 5px 0px">

                                                    <div class="row">
                                                        <div class="col" style="padding: 0">
                                                            <strong style="font-size: 20px; color: black;text-decoration: line-through;">16:00</strong>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>`;
                    }
                    else{
                        res = 'indisponible';
                        score = `<div class='card' style='padding: 7px 0 7px 0; background-color: transparent'>
                            <div class='card-body' style='padding: 0'>
                                <div class='container' style='padding: 0px 5px 0px'>

                                    <div class='row'>
                                        <div class='col' style='padding: 0'>
                                            <strong style='font-size: 20px; color: black'>_</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    }
                    $('#match_hist').append(
                        `<div class='card-block mb-2' id='detmatch0' style='height: 9rem; background-color: #fff;' data-matchid='897533'>
                <div class='section full' style='position: relative; text-align: center'>
                <div class='in' style='padding: 0px'>
                <div class='titleCard__textWrapper' style='justify-content: space-between;color: #1e1e1e; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;'>
                <span class='titleCard__text' style='font-size: 12px'>
                ${item.sport_icon}   ${item.league_name}~ <span style='font-weight: normal; color: #6f6c6c;'>${item.league_round}</span><br>
        </div>
            <div class='container mt-1'
                 style='background-color: rgba(255, 255, 255, 0.2); justify-content: space-between;height: 40px;border-radius: 10px;'>
                <div class='row'>
                    <div class='col-3' style='padding: 0'>
                        <div class='team_name' style='color: black; font-weight: bold; margin-top: 5px; text-align: center; overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;line-clamp: 2;-webkit-box-orient: vertical;'>
                            ${item.team_name_home}
                        </div>
                    </div>
                    <div class='col-2' style='padding: 0'>
                        <img src='${item.team_logo_home}' alt='logo' class='logo'
                             style='width: 1.8rem;height: 1.8rem;margin-top: 0.3rem'>
                    </div>
                    <div class='col-2' style='padding: 0'>
                        ${score}
                    </div>
                    <div class='col-2' style='padding: 0'>
                        <img src='${item.team_logo_away}' alt='logo' class='logo'
                             style='width: 1.8rem;height: 1.8rem;margin-top: 0.3rem'>
                    </div>
                    <div class='col-3' style='padding: 0'>
                        <div id='team_name' class='team_name' style='color: black; font-weight: bold; margin-top: 5px; text-align: center;overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 1;
           line-clamp: 2;
   -webkit-box-orient: vertical;'>${item.team_name_away}
                        </div>
                    </div>
                </div>
                <div class='row' style='padding: 0 50px;'>
                    <div class='col' style='padding: 0'>
                        <div class='' style='color: black;text-align: center; font-size: 10px'>${item.date}</div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-10' style='padding: 0'>
                        <div  style='color: black; text-align: start;  font-size: 10px'>${item.pronostic_name}
                        <span class='short_team_name'>${item.value_pronostic}</span> <span class='badge-green'>${item.value_odd}</span></div>
                    </div>
                    <div class='col-2' style='padding: 0'>
                        <div  style='color: black; text-align: center;  font-size: 10px'>
                        ${res}
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>`
                    );
                }

                //console.log(pronostics)

                $('#loader').hide();
                $('#ModalBasic').modal('show');

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

    $('#close_his').click(function () {
        $('#status').empty();
        $('#match_hist').empty();
    });


</script>

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
