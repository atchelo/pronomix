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

<div style="height: -webkit-fill-available; padding-bottom: 0; background-color: #EDEDF5;border-radius: 30px; margin: 10px; overflow-y: auto; position: relative">
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
            <a href="app-settings.html" class="headerButton">
                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged w32">
                <span class="badge badge-danger">6</span>
            </a>
        </div>
    </div>
    <style>
        .toast-box .in i.icon, .toast-box .in ion-icon{
            color: black;
        }
    </style>
    <!-- * App Header -->
    <div id="toast-1" class="toast-box toast-top" style="top: 67px; justify-content: space-around; background: white">
        <div class="in">
            <ion-icon name="document-outline" data-bs-toggle="modal" data-bs-target="#gen_coup" style="width: 24px"></ion-icon>
            <ion-icon name="trash-outline" @if(!isset($pron_coups['cumul'])) class="disable_icon" @endif style="width: 24px" data-bs-toggle="modal" data-bs-target="#DialogIconedButtonInline1"></ion-icon>
            <div>
                <p style="color: black; margin: 0;">Cote: @if(isset($pron_coups['cumul'])) {{ $pron_coups['cumul'] }}@else 0 @endif</p>
                <p style="font-size: 11px;margin: 0;color: #958d9e;font-weight: 500;">pronostics: @if(isset($pron_coups['pronostics'])) {{ count($pron_coups['pronostics']) }}@else 0 @endif</p>
            </div>
        </div>
        <div class="in" style="padding: 0">
            <button type="button"  data-bs-toggle="modal" data-bs-target="#actionSheetInset2"  class="btn btn-secondary" style="border-radius: inherit; background: #11a44c !important; border:#11a44c !important; color: white  !important;"><ion-icon name="save-outline" style="width: 20px; color: white !important;"></ion-icon>Valider Coupon</button>
        </div>
    </div>
    <!-- App Capsule -->
    <div id="appCapsule" style="padding: 0">
        <div class="section mt-2" style="margin-top: 5rem !important; padding: 0 8px">

            <div class="transactions">

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
                        font-size: 15px;
                        font-weight: bold;
                        line-height: 1;
                        white-space: nowrap;
                        vertical-align: baseline;
                        color: #fff;
                        background-color: #d40000;
                    }

                </style>

                @if(isset($pron_coups['pronostics']))
                    @foreach($pron_coups['pronostics'] as $index => $pron_coup)
                        <div id="pron_coup{{$index}}" class="item" style="padding: 25px 24px; opacity: {{ ($pron_coup['bloque'] === 'true') ? 0.5 : 1 }}; position: relative; overflow: hidden;">
                            <div class="detail">
                                <div>
                                    <strong style="color: #11a44c;"> {{ $pron_coup['team_name_home'] }} - {{ $pron_coup['team_name_away'] }} </strong>
                                    <p>{{ $pron_coup['date'] }}</p>
                                    <h5 style="margin: 0;">{{ $pron_coup['pronostic_name'] }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="badge-green"> {{ $pron_coup['value_odd'] }} </div>
                                </div>
                                <div class="col-6">
                                    <div class="price text-danger" style="color: #d40000 !important;" data-pron_coup_id="{{$pron_coup['rencontre_id_']}}" id="pron_coup_del{{$index}}"  data-bs-toggle="modal" data-bs-target="#DialogIconedButtonInline"> <ion-icon name="close-circle" style="font-size: x-large; padding: 3px 5px !important;"></ion-icon></div>
                                </div>

                            </div>
                            @if($pron_coup['bloque'] === 'true')
                                <span class="row" style="position: absolute; left: 0.5rem; width: 100%;bottom: 0;">
                        <div class="badge-red"> <h6 style="color: white; margin: 0">Pronostic Bloqué</h6> </div>
                    </span>
                            @endif
                        </div>
                    @endforeach
                @else
                    <div class="item" style="padding: 25px 24px; opacity: 1; position: relative; overflow: hidden;">
                        <div class="detail">
                            Aucun pronostic dans votre coupon
                        </div>
                    </div>
                    @endif

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
                                <input id="pronval" type="text" class="form-control" placeholder="Enter an amount" value="Cote: @if(isset($pron_coups['cumul'])) {{ $pron_coups['cumul'] }}@else 0 @endif/ pronostics: @if(isset($pron_coups['pronostics'])) {{ count($pron_coups['pronostics']) }}@else 0 @endif" readonly>
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
    window.addEventListener("load", function() {
        toastbox('toast-1');
        $('#error_message').hide();
    });

    $('#fermer').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('coup_pron') }}";
    });

    $('#pronticketval').on('keyup', function (e) {
        var coupval = @if(isset($pron_coups['cumul'])) {{ $pron_coups['cumul'] }}@else 0 @endif;
        var res = $(this).val()*47.23*coupval;
        $('#ipt_info').empty();
        $('#ipt_info').append(res.toFixed(2));
    });

    $('#valid_muli').click(function(e) {

        var nbre_ticket = $('#pronticketval').val();

        if ($('#pronticketval').val()){
            $('#actionSheetInset2').modal('hide');
            $("#loader").show();
            var token = "{{$token}}";
            var type_pron = $('#type_pron').val();
            var nmbre_ticket = $('#pronticketval').val();
            console.log(type_pron);
            console.log(nmbre_ticket)
            var p = new Object();
            p['token'] = token;
            p['type_pronostic'] = type_pron;
            p['nbr_tickets'] = nmbre_ticket;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: `https://demo.pronomix.net/api/pronostic-multiple`,
                data: p,
                success: function(data) {
                    if (data.status === 'success'){
                        var new_token1 = data.new_token;
                        var message1 = data.message;
                        var status1 = data.status;
                        var data1 = data.data;
                        var p = new Object();
                        p["new_token"] = new_token1;
                        p["message"] = message1;
                        p["status"] = status1;
                        p["data"] = data1;
                        var url1 = "{{ route('enr_code_coupon') }}";
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: "POST",
                            url: url1,
                            data: p,
                            success: function(data) {
                                console.log(data)
                                $("#gen_coup").modal('hide');
                                if (data['status'] === "failed"){
                                    $('#coup_error').empty();
                                    $('#coup_error').append(data['message']);
                                    $("#loader").hide();
                                    $('#DialogIconedDanger').modal('show');
                                }else {
                                    $('#coup_success').empty();
                                    $('#coup_success').append(data['message']);
                                    $("#loader").hide();
                                    $('#DialogIconedSuccess').modal('show');
                                }
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
                    else if(data.status === 'failed') {
                        var new_token = data.new_token;
                        var message = data.message;
                        var status = data.status;
                        var o = new Object();
                        o["new_token"] = new_token;
                        o["message"] = message;
                        o["status"] = status;
                        var url = "{{ route('code_coupon') }}";
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
                                $("#gen_coup").modal('hide');
                                if (data['status'] === "failed"){
                                    $('#coup_error').empty();
                                    $('#coup_error').append(data['message']);
                                    $("#loader").hide();
                                    $('#DialogIconedDanger').modal('show');
                                }else {
                                    $('#coup_success').empty();
                                    $('#coup_success').append(data['message']);
                                    $("#loader").hide();
                                    $('#DialogIconedSuccess').modal('show');
                                }
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
                        $('#coup_error').empty();
                        $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                        $("#loader").hide();
                        $('#DialogIconedDanger').modal('show');
                    },
                    419: function (){
                        window.location = "{{ route('logout') }}";
                    }
                }
            });
        }else{
            console.log('not submit')
            $('#error_message').show()
        }

    });

    $('#code_coupon_val').click(function(e) {
        var token = "{{$token}}";
        var s = new Object();
        s['token'] = token;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: `https://demo.pronomix.net/api/pronostic-combine/load-coupon`,
            data: s,
            success: function(data) {
                console.log(data)
                var new_token = data.new_token;
                var message = data.message;
                var status = data.status;
                var o = new Object();
                o["new_token"] = new_token;
                o["status"] = status;
                o["message"] = message;
                var url = "{{ route('code_coupon') }}";

                $.ajax({
                    type: "POST",
                    url: url,
                    data: o,
                    success: function(data) {
                        //console.log(data)
                        $("#gen_coup").modal('hide');
                        if (data['status'] === "failed"){
                            $('#coup_error').empty();
                            $('#coup_error').append(data['message']);
                            $("#loader").hide();
                            $('#DialogIconedDanger').modal('show');
                        }else {
                            $('#coup_success').empty();
                            $('#coup_success').append(data['message']);
                            $("#loader").hide();
                            $('#DialogIconedSuccess').modal('show');
                        }
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

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });



            },
            statusCode: {
                500: function() {
                    $('#coup_error').empty();
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

    $('#gen_coup_click').click(function (e) {

        $("#loader").show();

        var token = "{{$token}}";
        var s = new Object();
        s['token'] = token;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: `https://demo.pronomix.net/api/pronostic-combine/generate-code`,
            data: s,
            success: function(data) {
                if (data.status === 'success'){
                    console.log(data)
                    var new_token = data.new_token;
                    var code = data.code;
                    var link = data.link;
                    var message = data.message;
                    var status = data.status;
                    var o = new Object();
                    o["new_token"] = new_token;
                    o["message"] = message;
                    o["code"] = code;
                    o["link"] = link;
                    o["status"] = status;
                    var url = "{{ route('gen_code_coupon') }}";

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
                            $("#gen_coup").modal('hide');
                            if (data['status'] === 'success'){
                                $('#coup_successValCode').empty();
                                $('#coup_successValCode').append(data['message']);
                                $('#code').empty();
                                $('#code').append(data['code']);
                                $('#link_code_coupon').val(data['link']);
                                $("#loader").hide();
                                $('#DialogIconedSuccessValCode').modal('show');
                            }else {
                                $('#coup_error').empty();
                                $('#coup_error').append(data['message']);
                                $("#loader").hide();
                                $('#DialogIconedDanger').modal('show');
                            }
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
                    $('#coup_error').empty();
                    $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                    $("#loader").hide();
                    $('#DialogIconedDanger').modal('show');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $('#coup_error').append(thrownError);
                $("#loader").hide();
                $('#DialogIconedDanger').modal('show');
            }
        });

    });

    $('[id^="pron_coup_del"]').click(function (e) {
       var renc_id = $(this).data('pron_coup_id');
        var token = "{{$token}}";

        var p = new Object();
        p['rencontre_id_'] = renc_id;
        p['token'] = token;

        $("#pron_coup_sup").click(function (e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: `https://demo.pronomix.net/api/pronostic-combine/delete-pronostic`,
                data: p,
                success: function(data) {
                    if (data.status === "success"){

                        console.log(data)
                        var new_token = data.new_token;
                        var data_reg = data.coupon[0];
                        var message = data.message;
                        var o = new Object();
                        o["new_token"] = new_token;
                        o["data_reg"] = data_reg;
                        o["message"] = message;
                        var url = "{{ route('sup_pronos') }}";

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
                                $('#coup_success').empty();
                                $('#coup_success').append(data['message']);
                                $("#loader").hide();
                                $('#DialogIconedSuccess').modal('show');
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
                        $('#coup_error').empty();
                        $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                        $("#loader").hide();
                        $('#DialogIconedDanger').modal('show');
                    }
                }
            });

        });

        console.log(renc_id)

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
                            $('#coup_success').empty();
                            $('#coup_success').append(data['message']);
                            $("#loader").hide();
                            $('#DialogIconedSuccess').modal('show');
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
                    $('#coup_error').empty();
                    $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                    $("#loader").hide();
                    $('#DialogIconedDanger').modal('show');
                }
            }
        });

    });

    $('#coup_pron').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('coup_pron') }}";
    });

    $('#code_coup_ferme').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('coup_pron') }}";
    });
</script>

</body>

</html>
