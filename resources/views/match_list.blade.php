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
            border-radius: 10px;
        }

    </style>

    <script>
        $(function() {
            $('#appCapsule').ptrLight({
                'refresh': function(ptrLightInstance) {
                    console.log('Updating...');
                    var token = "{{$token}}";
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
                                        location.reload();
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
                    setTimeout(function() {
                        console.log('Updated!');
                        $("#loader").show();
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
            padding: 1vh 0;
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

<body style="background-color: white; margin: 0; height: 100%; overflow: hidden; ">

<!-- loader -->
<div id="loader">
        <div class="spinner-border" role="status"></div>
</div>
<!-- * loader -->

<div id="aft_body" style="height: -webkit-fill-available; padding-bottom: 0; background-color: #00373e;border-radius: 30px; margin-top: 30px; overflow-y: auto; position: relative">
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
    <div id="appCapsule">

        <div class="section mt-2">

            <!-- card block -->
            @foreach($get_match as $index => $match)

                @php
                //dd($match['odds_response']);
                   $date =  Carbon\Carbon::parse($match['date'])->locale('fr');
                @endphp

                <div class="card-block mb-2" style="height: 135px; background-color: white" data-matchid="{{$match['id_']}}">
                    <div class="section full" id="detmatch{{$index}}"  data-matchid="{{$match['id_']}}" style="position: relative; text-align: center">
                        <div class="in" style="padding: 0px;">
                            <div class="titleCard__textWrapper" style="justify-content: space-between;color: #1e1e1e; overflow: hidden;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp: 1;
-webkit-box-orient: vertical;">
                                    <span class="titleCard__text" style="font-size: 12px">
                                           @if(isset($match['sport_icon'])) {!! $match['sport_icon'] !!} @endif  {{ $match['league_name'] }}
                                            ~ <span style="font-weight: normal; color: #6f6c6c;">{{ $match['league_round'] }}</span><br>
                                                                            </span>
                            </div>

                            <div class="container mt-1" style="background-color: rgba(255, 255, 255, 0.2); justify-content: space-between;height: 40px;border-radius: 10px;">
                                <div class="row">
                                    <div class="col-3" style="padding: 0">
                                        <div class="team_name" style="color: black; font-weight: bold; margin-top: 5px; text-align: center; overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 1;
           line-clamp: 2;
   -webkit-box-orient: vertical;">{{ $match['team_name_home'] }}</div>
                                    </div>
                                    <div class="col-2" style="padding: 0">
                                        <img src="{{ $match['team_logo_home'] }}" alt="logo" class="logo" style="width: 35px;height: 35px;">
                                    </div>
                                    <div class="col-2" style="padding: 0">
                                        <div class="card" style="padding: 7px 0 7px 0; background-color: transparent">
                                            <div class="card-body" style="padding: 0">
                                                <div class="container" style="padding: 0px 5px 0px">
                                                    {{----<div class="row" >
                                                        <div class="col" style="padding: 0">
                                                            <strong style="font-size: 25px; color: #11a44c" >3</strong>
                                                        </div>
                                                        <div class="col" style="padding: 0">
                                                            -
                                                        </div>
                                                        <div class="col" style="padding: 0">
                                                            <strong style="font-size: 25px;  color: #11a44c" >0</strong>
                                                        </div>
                                                    </div>-----}}
                                                    <div class="row" >
                                                        <div class="col" style="padding: 0">
                                                            <strong style="font-size: 20px; color: black" >{{  $date->isoFormat('HH:mm') }}</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----<h6 class="card-title" style="margin-top: 10px;color: #11a44c">VS</h6>---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2" style="padding: 0">
                                        <img src="{{ $match['team_logo_away'] }}" alt="logo" class="logo" style="width: 35px;height: 35px;">
                                    </div>
                                    <div class="col-3" style="padding: 0">
                                        <div id="team_name" class="team_name" style="color: black; font-weight: bold; margin-top: 5px; text-align: center;overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 1;
           line-clamp: 2;
   -webkit-box-orient: vertical;">{{ $match['team_name_away'] }}</div>
                                    </div>
                                </div>
                                <div class="row" style="padding: 0 50px;">
                                    <div class="col" style="padding: 0">
                                        <div class="" style="color: black;text-align: center; font-size: 10px">{{ $date->isoFormat('ddd D MMMM YYYY') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 2rem">
                        @if(isset($match['odds_response']['values']))
                            @foreach($match['odds_response']['values'] as $index => $item)
                                @php
                                        $vic = explode(" ", $item['value_name']);
                                @endphp
                                <div class="col-4" style="padding: 0 1rem">
                                    <div class="coupon" id="coupon" data-rencontre_id="{{$match['id_']}}" data-value_name="{{$item['value_name']}}"  data-couponvalue="{{$item['odd']}}" data-bet_id="{{ $match['odds_response']['id'] }}" data-value= "{{ $item['value'] }}" style="color: black; text-align: center;  font-size: 10px; cursor: pointer">
                                        @if($item['value'] === 'Home') Victoire @elseif($item['value'] === 'Draw') Match nul @elseif($item['value'] === 'Away') Victoire @endif
                                        <span class="short_team_name_match">
                                            @if($vic[1] !== 'nul') {{ $vic[1] }} @endif
                                        </span>
                                        <span class="badge-green">{{$item['odd']}} </span>
                                    </div>
                                </div>
                            @endforeach
                            @endif
                    </div>
                </div>
            @endforeach
            <!-- * card block -->

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

    $('#aft_body').on('resize', onScroll);
    $('#aft_body').on('scroll', onScroll);
    function onScroll(){
        sessionStorage.scrollTop = $(this).scrollTop();
    }

    $(document).ready(function() {
        if (sessionStorage.scrollTop != "undefined") {
            $("#aft_body").scrollTop(sessionStorage.scrollTop);
        }else {
            console.log("undefined")
        }
    });

    /*$("#appCapsule").scroll(function() {
        sessionStorage.scrollTop = $(this).scrollTop();
    });

    $(document).ready(function() {
        if (sessionStorage.scrollTop != "undefined") {
            $("#appCapsule").scrollTop(sessionStorage.scrollTop);
        }
    });*/
</script>

<script>
    $('#coup_pron1').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('coup_pron') }}";
    });

    window.addEventListener("load", function() {

        var team_name_shrt = document.getElementsByClassName('short_team_name_match');
        var result_shrt;
        team_name_shrt.forEach(function(number_shrt) {
            result_shrt = number_shrt.innerText;
            number_shrt.innerHTML = result_shrt.substring(0, 2);
        });

    });

    $('[id^="coupon"]').on('click', function (e) {
        $("#loader").show();
        var bet_id = $(this).data('bet_id');
        var value = $(this).data('value');
        var rencontre = $(this).data('rencontre_id');
        var value_name = $(this).data('value_name');
        var couponvalue = $(this).data('couponvalue');
        var det_coup = value_name + ' - ' + value + ' : ' + couponvalue;
        var token = "{{ $token }}";

        var o = new Object();
        o["rencontre_id_"] = rencontre;
        o["bet_id"] = bet_id;
        o["value"] = value;
        o["token"] = token;
        console.log(o);

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
                var global_cote = 'Cote Global: ' + data.data.cumul;
                console.log(global_cote)
                if (data.status === 'success'){
                    if (data.data.pronostics !== undefined){
                        var mul_pron = data.data.pronostics.length;
                        $("#sup_pron_coup").removeClass('disable_icon')
                    }else {
                        mul_pron = 0;
                        $("#sup_pron_coup").addClass('disable_icon')
                    }
                    $('#pron_numb').empty();
                    $("#pron_numb").append(mul_pron);
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
                                $('#message').empty();
                                $('#message').append(data['message']);

                                $('#det_pron_match').empty();
                                $('#det_pron_match').append(det_coup);

                                $('#global_cote').empty();
                                $('#global_cote').append(global_cote);

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
</script>

<script>


</script>


</body>

</html>
