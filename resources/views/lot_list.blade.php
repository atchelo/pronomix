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
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <script src="{{ asset('rater/rater.js') }}" ></script>
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
        .team_name{

        }

        .block{
            pointer-events:none !important;
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

        .btn-primary {
            background: #4ccf7f !important;
            border-color: #4ccf7f !important;
            color: #FFFFFF !important;
        }

    </style>
</head>

<body id="bodyID" style="background-color: white; margin: 0; height: 100%; overflow: hidden;  -webkit-overflow-scrolling: touch;">

<!-- loader -->
<div id="loader">
    <div class="spinner-border" role="status"></div>
</div>
<!-- * loader -->

<div id="flux" style="height: -webkit-fill-available; padding-bottom: 0; background-color: #00373e;border-radius: 30px; margin-top: 30px; position: relative; overflow-y: auto;">
    <!-- App Header -->
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
    <!-- * App Header -->
    <!-- App Capsule -->
    <div id="appCapsule" style="padding: 0">

        <div class="section inset mt-2 mb-2" style="margin-bottom: 3.7rem !important;">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css" integrity="sha512-YTuMx+CIxXa1l+j5aDPm98KFbVcYFNhlr2Auha3pwjHCF1lLbY9/ITQQlsUzdM1scW45kHC5KNib4mNa1IFvJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <div class="transactions">
                <div id="putlot" class="container">
                    @foreach($get_lot['data'] as $index => $lot)
                        <div class="row item" style="color: orange; padding: 10px 10px; @if($lot['restant'] === '0') opacity: 0.5 ;pointer-events: none; @endif; background-color: #FFFFFF !important;" id="item{{$index}}">
                            <div class="col-12">
                                @if($lot['new'] === 'true')
                                    <span class="badge badge-danger" style="display: inline-block;
    padding: 3px 10px;
    min-width: 10px;
    border-radius: 0.25rem;
    text-align: center;
    font-size: 15px;
    font-weight: bold;
    line-height: 1;
    white-space: nowrap;
    vertical-align: baseline;
    color: #fff;
    background-color: #ff6a00;"><i class="fa fa-star"></i> Nouveau</span>
                                @endif
                                <img src="{{ $lot['preview_img'] }}" alt="img" class="image-block imaged" style="width: -webkit-fill-available !important;">
                            </div>
                            <div class="col-12" style="margin-top: 15px">
                                <h2 style="font-weight: bold;">{{ $lot['titre'] }}</h2>
                                <h4>{{ $lot['nom'] }}</h4>
                                <h5 style="margin: 0">Stock disponible: <span>{{ $lot['restant'] }}</span></h5>
                            </div>
                            <div class="col-12">
                                <div class="rating" data-rate-value={{ $lot['popularity'] }}></div>
                            </div>
                            <div class="col-12">
                                <p>{!! $lot['description'] !!}</p>
                            </div>
                            <div class="col-12" style="    display: flex;
    justify-content: end; margin-bottom: 0.5rem">
                                <span style="display: inline-block;
    padding: 3px 5px;
    min-width: 10px;
    border-radius: 0.25rem;
    text-align: center;
    font-size: 15px;
    font-weight: bold;
    line-height: 1;
    white-space: nowrap;
    margin-right: 9px;
    vertical-align: baseline;
    color: #fff;
    background-color: #ff6a00;">{{ number_format($lot['valeur'], 2, ',', ' ') }}pts</span>
                            </div>
                            <div class="col-12 mt-1" style="display: flex;
    justify-content: space-between;">
                                <button type="button" class="btn btn-primary me-1 mb-1" onclick="obtenir_q( {{ json_encode($lot['titre']) }}, {{ $lot['restant'] }}, {{ $lot['valeur'] }},  {{ $lot['id'] }})" style="border-radius: 0.37rem; padding: 3px 2rem;">OBTENIR</button>
                                <button type="button" class="btn btn-light me-1 mb-1" onclick="suivre_coli({{ json_encode($lot['titre']) }} ,{{$lot['id']}})" style="border-radius: 0.37rem; border-color: #e4e4e4 !important; padding: 3px 2rem;"> <ion-icon name="heart" style="font-size: 15px; color: #969696"></ion-icon> SUIVRE</button>
                            </div>
                        </div>
                    @endforeach
                        <div id="load_spinner" class="spinner-grow text-success" role="status"></div>
                </div>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->
</div>

@include('components.toast')


<!-- DialogIconedInfo -->
<div class="modal fade dialogbox" id="DialogIconedInfo" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-icon text-danger">
                <ion-icon name="alert-circle-outline" class="text-warning"></ion-icon>
            </div>
            <div class="modal-header">
                <h5 class="modal-title text-warning">Attention</h5>
            </div>
            <div class="modal-body" id="coup_info">

            </div>
            <div class="modal-footer">
                {{----<a href="#" class="btn" id="code_coup_ferme" data-bs-dismiss="modal">Fermer</a>
                    <a href="#" class="btn" id="buy_tickets" data-bs-dismiss="modal">Acheter tickets</a>----}}

                <button id="code_coup_ferme" type="button" data-bs-dismiss="modal" class="btn btn-secondary shadowed"> <ion-icon name="close-outline"></ion-icon> Fermer</button>

                <button id="buy_tickets" type="button" data-bs-dismiss="modal" class="btn btn-primary shadowed"> <ion-icon name="checkmark-outline"></ion-icon> Acheter ticket</button>

            </div>
        </div>
    </div>
</div>
<!-- * DialogIconedInfo -->

<!-- Dialog Iconed Inline -->
<div class="modal fade dialogbox" id="DialogIconedButtonInline2" data-bs-backdrop="static" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="titre"></h2>
            </div>
            <div class="modal-body">
                <p style="margin:0; text-align: start; color: black">valeur : <span id="valeur" style="display: inline-block;
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
    background-color: #ff6a00;">{{ number_format($lot['valeur'], 2, ',', ' ') }}</span></p>
                <p style="margin:0; text-align: start; color: black">Restant : <strong style="color: black" id="restant"></strong></p>
                <p style="margin:0; text-align: start;">Voulez-vous vraiment obtenir cet article?</p>
            </div>
            <div class="modal-footer">
                <button id="pron_coup_del_all" type="button" data-bs-dismiss="modal" class="btn btn-secondary shadowed"> <ion-icon name="close-outline"></ion-icon> ANNULER</button>
                {{---<a id="pron_coup_del_all" href="#" class="btn btn-text-danger" data-bs-dismiss="modal">
                    <ion-icon name="close-outline"></ion-icon>
                    ANNULER
                </a>----}}
                <button id="obtenir_r" type="button" class="btn btn-primary shadowed"> <ion-icon name="checkmark-outline"></ion-icon> OBTENIR</button>
                {{----<a href="#" id="obtenir_r" class="btn btn-text-primary">
                    <ion-icon name="checkmark-outline"></ion-icon>
                    OBTENIR
                </a>----}}
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
                <h5 class="modal-title" id="titre1"></h5>
            </div>
            <div class="modal-body">
                <p>Suivre l'actualité de cet article?</p>
                Vous serez informé si la valeur de l'article est en baisse ou si votre cumul de points s'en rapproche.
            </div>
            <div class="modal-footer">
                <button id="pron_coup_del_all" type="button" data-bs-dismiss="modal" class="btn btn-secondary shadowed"> <ion-icon name="close-outline"></ion-icon> ANNULER</button>
                {{-----<a id="pron_coup_del_all" href="#" class="btn btn-text-danger" data-bs-dismiss="modal">
                    <ion-icon name="close-outline"></ion-icon>
                    ANNULER
                </a>----}}
                {{----<a href="#" id="obtenir_r3" class="btn btn-text-primary">
                    <ion-icon name="checkmark-outline"></ion-icon>
                    SUIVRE L'ARTICLE
                </a>    ----}}
                <button id="obtenir_r3" type="button" class="btn btn-primary shadowed"> <ion-icon name="checkmark-outline"></ion-icon>SUIVRE</button>
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

<!-- DialogIconedSuccess -->
<div class="modal fade dialogbox" id="DialogIconedSuccessLots" data-bs-backdrop="static" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-icon text-success">
                <ion-icon name="checkmark-circle"></ion-icon>
            </div>
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
            </div>
            <div class="modal-body" id="coup_successLots">
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="{{ route('suivi_coli') }}" type="button" id="fermerLots" data-bs-dismiss="modal" class="btn btn-success btn-block">Fermer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * DialogIconedSuccess -->

<div id="toast-11" class="toast-box toast-center" style="background-color: #fff">
    <div class="in">
        <ion-icon name="alert-circle-outline" class="text-warning"></ion-icon>
        <div class="text-warning" id="popuptext">

        </div>
    </div>
</div>

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

    var options = {
        step_size: 2,
    }

    $(".rating").rate(options);
    var rollback = "{{route('rollback')}}";
    var current_page = "{{$get_lot['current_page']}}";
    var total_page = "{{$get_lot['last_page']}}";
    var next_page = "{!! $get_lot['next_page_url'] !!}";

    var step = 1;
    $('#load_spinner').hide();

    $('#flux').on('resize', onScroll);
    $('#flux').on('scroll', onScroll);
    function onScroll(){
        if($('#flux').scrollTop() + window.innerHeight >= $(this)[0].scrollHeight) {
            if (current_page < total_page){
                if(step == current_page){
                    step++;
                   $("#bodyID").addClass('block');

                    $.ajax({
                        url: `${next_page}`,
                        method: "GET",
                        success: function (data) {
                            if (data.success === true){
                                $('#load_spinner').css('display', 'block');
                               $("#loader").show();
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
                                        current_page = data[0];
                                        next_page = data[2];

                                        data[1].forEach(getall);
                                        function getall(item) {
                                            $('#putlot').append(item);
                                        }
                                        $('#loader').hide();
                                        $('#load_spinner').hide();
                                        $("#bodyID").removeClass('block');

                                        //window.location = data;
                                        // location.reload();
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

                }
            }
            else {
                $('#load_spinner').hide();
            }
        }

    }


    $("#back").click(function(e) {
        $.ajax({
            url: `${rollback}`,
            method: "GET",
            success: function (data) {
                if (data.success === true){
                    //$("#loader").hide();
                   // console.log('success')
                }
            }
        });
    });

    function obtenir_q(titreR, restantR, valeurR, idR) {
        var titre = titreR;
        var restant = restantR;
        var valeur = valeurR.toLocaleString('fr-FR');
        var id = idR;


        $('#titre').empty();
        $('#titre').append(titre);

        $('#valeur').empty();
        $('#valeur').append(valeur + ' pts');

        $('#restant').empty();
        $('#restant').append(restant);

        $('#DialogIconedButtonInline2').modal('show');

        $("#obtenir_r").click(function (e) {
            $('#DialogIconedButtonInline2').modal('hide');
            $("#loader").show();
            var p = new Object();
            p['token'] = "{{$token}}";
            p['id'] = id;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: `https://demo.pronomix.net/api/obtenir-lot`,
                data: p,
                success: function(data) {
                    var new_token = data.new_token;
                    var message = data.message;
                    if (data.status === "failed"){
                        var o = new Object();
                        o["new_token"] = new_token;
                        o["message"] = message;
                        var url = "{{ route('obtenir_lot') }}";

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
                        p["data"] = data.data;
                        var urlS = "{{ route('obtenir_lot_success') }}";

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
                                $('#coup_successLots').empty();
                                $('#coup_successLots').append(data);
                                $('#DialogIconedSuccessLots').modal('show');

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
    function suivre_coli(titreR1, idR1) {


        var titre1 = titreR1;
        console.log(titre1)
        var id1 = idR1;

        $('#titre1').empty();
        $('#titre1').append(titre1);

        $('#DialogIconedButtonInline3').modal('show');

        $("#obtenir_r3").click(function (e) {
            console.log('test')
            $('#DialogIconedButtonInline3').modal('hide');
            $("#loader").show();
            var q = new Object();
            q['token'] = "{{$token}}";
            q['id'] = id1;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: `https://demo.pronomix.net/api/follow-article`,
                data: q,
                success: function(data) {
                    console.log(data)
                    var new_token = data.new_token;
                    var message = data.message;
                    if (data.status === "failed"){
                        var o = new Object();
                        o["new_token"] = new_token;
                        o["message"] = message;
                        var url = "{{ route('info_livraison') }}";

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
                        var urlS = "{{ route('info_livraison') }}";

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
                                $('#coup_successLots').empty();
                                $('#coup_successLots').append(data);
                                $('#DialogIconedSuccessLots').modal('show');

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

            e.stopImmediatePropagation();
            e.preventDefault();


        });
    }


    $( document ).ready(function() {

            var vars = [], hash;
            var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('#');
            for(var i = 0; i < hashes.length; i++)
            {
                hash = hashes[i].split('=');
                vars.push(hash[0]);
                vars[hash[0]] = hash[1];
            }
            var cur_id = vars[1];

        $("#flux").animate({
            scrollTop: $(`#${cur_id}`).offset().top
        }, 1);

    });

    $('#coup_pron1').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('coup_pron') }}";
    });

    $('#buy_tickets').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('payment_index') }}";
    });


</script>

</body>

</html>
