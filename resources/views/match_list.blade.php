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
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#ModalBasic" class="headerButton">
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
                                <div class="col-4" style="padding: 0">
                                    <div class="coupon" id="coupon" data-rencontre_id="{{$match['id_']}}"  data-couponvalue="{{$item['odd']}}" data-bet_id="{{ $match['odds_response']['id'] }}" data-value= "{{ $item['value'] }}" style="color: black; text-align: center;  font-size: 10px; cursor: pointer">
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

<!-- Modal Basic -->
<div class="modal fade modalbox" id="ModalBasic" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <a href="#" data-bs-dismiss="modal">Close</a>
            </div>
            <div class="modal-body" style="padding:0">
                @if(isset($get_detmatch))
                <div id="appCapsule" style="height: -webkit-fill-available; padding: 0">

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



                    <!-- Stats -->
                    <div id="appCapsule" style="padding: 0; height: -webkit-fill-available;">


                        <!-- Wallet -->
                        <div class="section full gradientSection" style="background: radial-gradient(85% 125% at top, #11a44c, #11a44c 75%, #eee 80%, #fff 15%); height: 15vh">
                            <div class="in" style="padding: 0px 16px 40px 16px;">
                                <h5 class="title mb-1" style="padding-top: 5px; opacity: 1">@if(isset($get_detmatch['sport_icon'])) {!! $get_detmatch['sport_icon'] !!} @endif  {{ $get_detmatch['league_name'] }}
                                    ~ <span style="font-weight: normal;">{{ $get_detmatch['league_round'] }}</h5>
                                <div class="container mt-2" style="background-color: rgba(255, 255, 255, 0.2); justify-content: space-between;height: 40px;border-radius: 30px;">
                                    <div class="row">
                                        <div class="col-1" style="padding: 0">
                                            <img src="{{ $get_detmatch['team_logo_home'] }}" alt="logo" class="logo" style="width: 40px;border-radius: 50%;height: 40px;box-shadow: 3px 0px 20px rgb(0 0 0 / 60%);position: absolute;left: 5px;background-color: white;">
                                        </div>
                                        <div class="col-4">
                                            <div class="team_name" style="color: white; font-weight: bold; margin-top: 5px; text-align: initial">{{ $get_detmatch['team_name_home'] }}</div>
                                        </div>
                                        <div class="col-2">
                                            <div class="card" style="position: absolute;top: 49%;left: 50%;transform: translate(-50%, -50%);">
                                                <div class="card-body" style="padding: 5px 10px">
                                                    <div class="container" style="margin: 0; padding: 0px 5px 0px">
                                                        <div class="row" style="margin-top: 6px">
                                                            <div class="col" style="padding: 0">
                                                                <strong style="font-size: 20px; color: black" >{{  $get_detmatch['hour'] }}</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!----<h6 class="card-title" style="margin-top: 10px;color: #11a44c">VS</h6>---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="team_name" style="color: white; font-weight: bold; margin-top: 5px;">{{ $get_detmatch['team_name_away'] }}</div>
                                        </div>
                                        <div class="col-1" style="padding:0">
                                            <img src="{{ $get_detmatch['team_logo_away'] }}" alt="logo" class="logo" style="width: 40px;border-radius: 50%;height: 40px;box-shadow: 3px 0px 20px rgb(0 0 0 / 60%);position: absolute;right: 5px;background-color: white;">
                                        </div>
                                    </div>
                                    <h6 style="margin-top: 1rem; color: white">{{ $get_detmatch['date'] }}</h6>
                                </div>
                                <!----<div class="wallet-inline-button mt-2" style="background-color: rgba(255, 255, 255, 0.6); justify-content: space-between;height: 35px;border-radius: 30px;">
                                    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                                        <div class="iconbox" style="width: 35px; height: 35px; box-shadow: 3px 0px 20px rgb(0 0 0 / 60%);">
                                            <img src="assets/img/match/team-logo.png" alt="logo" class="logo" style="width: 55px">
                                        </div>
                                    </a>
                                    <div class="">this is test</div>
                                    <div class="card" style="position: absolute;top: 49%;left: 50%;transform: translate(-50%, -50%);">
                                        <div class="card-body" style="padding: 0 30px">
                                            <h6 class="card-title" style="margin-top: 10px;color: #11a44c">VS</h6>
                                        </div>
                                        <div class="card-footer" style="padding: 0; height: 15px">
                                            <em style="font-size: 10px;position: absolute;left: 30%;top: 65%;">10:18:50</em>
                                        </div>
                                    </div>
                                    <div class="">this is test</div>
                                    <a href="crypto-exchange.html" class="item">
                                        <div class="iconbox" style="width: 35px; height: 35px; box-shadow: -3px 0px 20px rgb(0 0 0 / 60%);">
                                            <img src="assets/img/match/team-logo2.png" alt="logo" class="logo" style="width: 55px">
                                        </div>
                                    </a>
                                </div>------>
                            </div>
                        </div>
                        <!-- * Wallet -->

                        <div class="section" style="padding: 0; height: 83%">
                            <div class="card" style="border-radius: 0; height: -webkit-fill-available;">
                                <div class="card-body">
                                    <div class="carousel-multiple splide">
                                        <div class="splide__track">
                                            <ul class="nav splide__list">

                                                <li class="nav-item splide__slide">
                                                    <a href="#odds_pronostic_match" type="button" data-bs-toggle="tab" class="nav-link btn btn-outline-success btn-sm btn-block me-1 mb-1" style="border: none">Temps réglementaire</a>
                                                </li>

                                                <li class="nav-item splide__slide">
                                                    <a href="#odds_pronostic_first_half" type="button" data-bs-toggle="tab" class="nav-link btn btn-outline-success btn-sm btn-block me-1 mb-1" style="border: none">1 Mi-temps</a>
                                                </li>

                                                <li class="nav-item splide__slide">
                                                    <a href="#odds_pronostic_second_half" type="button" data-bs-toggle="tab" class="nav-link btn btn-outline-success btn-sm btn-block me-1 mb-1" style="border: none">2 Mi-temps</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content mt-1" style="height: 93%">
                                        <div class="tab-pane fade show active" id="odds_pronostic_match" role="tabpanel" style="height: 100%">
                                            <div class="accordion" style="height: 350px;overflow: auto">
                                                @if(isset($get_detmatch['odds_pronostic_match']))
                                                    @foreach($get_detmatch['odds_pronostic_match'] as $index => $pron_match)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#accordion00{{$index}}" style="padding: 0px 50px 0px 16px">
                                                                    <ion-icon name="football-outline"></ion-icon>
                                                                    {{ $pron_match['pronostic_name'] }}
                                                                </button>
                                                            </h2>
                                                            <div id="accordion00{{$index}}" class="accordion-collapse collapse my-2" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <ul class="listview flush transparent image-listview text">
                                                                        <li style="min-height: 50px">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    @foreach($pron_match['values'] as $index3 => $pron)
                                                                                        <div class="col-4" style="padding: 3px 3px">
                                                                                            <div class="coupon" id="coupon" data-bs-toggle="modal" data-bs-target="#actionSheetInset" data-proname="{{ $pron_match['pronostic_name'] }}" data-couponame="{{ $pron['value_name'] }}" data-couponvalue="{{ $pron['odd'] }}" data-leaguename="{{ $get_detmatch['league_name'] }}" data-team1="{{ $get_detmatch['team_name_home'] }}" data-team2="{{ $get_detmatch['team_name_away'] }}"  data-bet_id="{{ $pron_match['id'] }}" data-value= "{{ $pron['value'] }}"  style="color: black; text-align: center;  font-size: 10px; background-color: white"><span class="short_team_name">{{ $pron['value_name'] }}</span> <span class="badge-green"> {{ $pron['odd'] }} </span></div>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="odds_pronostic_first_half" role="tabpanel" style="height: 100%">
                                            <div class="accordion" style="height: 350px;overflow: auto">
                                                @if(isset($get_detmatch['odds_pronostic_first_half']))
                                                    @foreach($get_detmatch['odds_pronostic_first_half'] as $index1 => $pron_match1)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#accordion00{{$index1}}" style="padding: 0px 50px 0px 16px">
                                                                    <ion-icon name="football-outline"></ion-icon>
                                                                    {{ $pron_match1['pronostic_name'] }}
                                                                </button>
                                                            </h2>
                                                            <div id="accordion00{{$index1}}" class="accordion-collapse collapse my-2" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <ul class="listview flush transparent image-listview text">
                                                                        <li style="min-height: 50px">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    @foreach($pron_match1['values'] as $index4 => $pron1)
                                                                                        <div class="col-4" style="padding: 3px 3px">
                                                                                            <div class="coupon" id="coupon" data-bs-toggle="modal" data-bs-target="#actionSheetInset" data-proname="{{ $pron_match1['pronostic_name'] }}" data-couponame="{{ $pron1['value_name'] }}" data-couponvalue="{{ $pron1['odd'] }}" data-leaguename="{{ $get_detmatch['league_name'] }}" data-team1="{{ $get_detmatch['team_name_home'] }}" data-team2="{{ $get_detmatch['team_name_away'] }}" data-bet_id="{{ $pron_match1['id'] }}" data-value= "{{ $pron1['value'] }}" style="color: black; text-align: center;  font-size: 10px; background-color: white"><span class="short_team_name">{{ $pron1['value_name'] }}</span> <span class="badge-green"> {{ $pron1['odd'] }} </span></div>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="odds_pronostic_second_half" role="tabpanel" style="height: 100%">
                                            <div class="accordion" style="height: 350px;overflow: auto">
                                                @if(isset($get_detmatch['odds_pronostic_second_half']))
                                                    @foreach($get_detmatch['odds_pronostic_second_half'] as $index2 => $pron_match2)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#accordion00{{$index2}}" style="padding: 0px 50px 0px 16px">
                                                                    <ion-icon name="football-outline"></ion-icon>
                                                                    {{ $pron_match2['pronostic_name'] }}
                                                                </button>
                                                            </h2>
                                                            <div id="accordion00{{$index2}}" class="accordion-collapse collapse my-2" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <ul class="listview flush transparent image-listview text">
                                                                        <li style="min-height: 50px">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    @foreach($pron_match2['values'] as $index5 => $pron2)
                                                                                        <div class="col-4" style="padding: 3px 3px">
                                                                                            <div class="coupon" id="coupon" data-bs-toggle="modal" data-bs-target="#actionSheetInset" data-proname="{{ $pron_match2['pronostic_name'] }}" data-couponame="{{ $pron2['value_name'] }}" data-couponvalue="{{ $pron2['odd'] }}" data-leaguename="{{ $get_detmatch['league_name'] }}" data-team1="{{ $get_detmatch['team_name_home'] }}" data-team2="{{ $get_detmatch['team_name_away'] }}" data-bet_id="{{ $pron_match2['id'] }}" data-value= "{{ $pron2['value'] }}" style="color: black; text-align: center;  font-size: 10px; background-color: white"><span class="short_team_name">{{ $pron2['value_name'] }}</span> <span class="badge-green"> {{ $pron2['odd'] }} </span></div>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-----<div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs capsuled" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#odds_pronostic_match" role="tab">
                                                odds_pronostic_match
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#card" role="tab">
                                                Cards
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">
                                                Settings
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-1">
                                        <div class="tab-pane fade show active" id="odds_pronostic_match" role="tabpanel">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate enim sed elit
                                            consequat, sed ultricies ligula venenatis. In nec arcu eget neque sodales accumsan vel
                                            et neque.
                                        </div>
                                        <div class="tab-pane fade" id="card" role="tabpanel">
                                            Suspendisse maximus ligula eu ligula iaculis, eu bibendum odio dignissim. Pellentesque
                                            elementum nisl elit, non feugiat risus luctus sit amet.
                                        </div>
                                        <div class="tab-pane fade" id="settings" role="tabpanel">
                                            Vestibulum sed facilisis diam, vel sodales leo. Aenean lacinia, nisi sit amet iaculis
                                            maximus, nibh orci iaculis risus, vitae faucibus dui orci quis elit.
                                        </div>
                                    </div>
                                </div>
                            </div>---->
                        </div>

                        <!-- Form Action Sheet -->
                        <div class="modal fade action-sheet" id="actionSheetForm" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Parier</h5>
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
                                                    <div class="input-info">Select a bank account</div>
                                                </div>

                                                <div class="form-group basic">
                                                    <label class="label">Enter Amount</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                        <input type="text" class="form-control" placeholder="Enter an amount"
                                                               value="100">
                                                    </div>
                                                    <div class="input-info">Minimum $50</div>
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
                        <!-- * Form Action Sheet -->

                        <!-- Deposit Action Sheet -->
                        <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Deposit</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="action-sheet-content">
                                            <form>
                                                <div class="form-group basic mb-2">
                                                    <div class="input-wrapper">
                                                        <label class="label" for="account2">Select Account</label>
                                                        <select class="form-control custom-select" id="account2">
                                                            <option value="0">Savings (*** 5019)</option>
                                                            <option value="1">Investment (*** 6212)</option>
                                                            <option value="2">Mortgage (*** 5021)</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group basic">
                                                    <div class="input-wrapper">
                                                        <label class="label" for="depositAmount">Enter Amount</label>
                                                        <div class="exchange-group small">
                                                            <div class="input-col">
                                                                <input type="text" class="form-control form-control-lg pe-0"
                                                                       id="depositAmount" placeholder="0" value="380" maxlength="14">
                                                            </div>
                                                            <div class="select-col">
                                                                <select class="form-select form-select-lg currency">
                                                                    <option value="USD" selected>USD</option>
                                                                    <option value="EUR">EUR</option>
                                                                    <option value="AUD">AUD</option>
                                                                    <option value="CAD">CAD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-2">
                                                    <button type="button" class="btn btn-primary btn-lg btn-block"
                                                            data-bs-dismiss="modal">Deposit</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * Deposit Action Sheet-->

                        <!-- Withdraw Action Sheet -->
                        <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Withdraw</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="action-sheet-content">
                                            <form>
                                                <div class="form-group basic mb-2">
                                                    <div class="input-wrapper">
                                                        <label class="label" for="account3">Select Account</label>
                                                        <select class="form-control custom-select" id="account3">
                                                            <option value="0">Savings (*** 5019)</option>
                                                            <option value="1">Investment (*** 6212)</option>
                                                            <option value="2">Mortgage (*** 5021)</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group basic mb-2">
                                                    <div class="input-wrapper">
                                                        <label class="label" for="iban1">IBAN</label>
                                                        <input type="email" class="form-control" id="iban1"
                                                               placeholder="Enter your IBAN">
                                                        <i class="clear-input">
                                                            <ion-icon name="close-circle"></ion-icon>
                                                        </i>
                                                    </div>
                                                </div>

                                                <div class="form-group basic">
                                                    <div class="input-wrapper">
                                                        <label class="label" for="withdrawAmount">Enter Amount</label>
                                                        <div class="exchange-group small">
                                                            <div class="input-col">
                                                                <input type="text" class="form-control form-control-lg pe-0"
                                                                       id="withdrawAmount" placeholder="0" value="380" maxlength="14">
                                                            </div>
                                                            <div class="select-col">
                                                                <select class="form-select form-select-lg currency">
                                                                    <option value="USD" selected>USD</option>
                                                                    <option value="EUR">EUR</option>
                                                                    <option value="AUD">AUD</option>
                                                                    <option value="CAD">CAD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-2">
                                                    <button type="button" class="btn btn-primary btn-lg btn-block"
                                                            data-bs-dismiss="modal">Withdraw</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * Withdraw Action Sheet-->

                        <!-- Send Action Sheet -->
                        <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Send</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="action-sheet-content">
                                            <form>

                                                <div class="form-group basic mb-2">
                                                    <div class="input-wrapper">
                                                        <label class="label" for="walletaddress">Wallet Address</label>
                                                        <input type="email" class="form-control" id="walletaddress"
                                                               placeholder="Enter a wallet address">
                                                        <i class="clear-input">
                                                            <ion-icon name="close-circle"></ion-icon>
                                                        </i>
                                                    </div>
                                                </div>

                                                <div class="form-group basic">
                                                    <div class="input-wrapper">
                                                        <label class="label" for="sendAmount">Enter Amount</label>
                                                        <div class="exchange-group small">
                                                            <div class="input-col">
                                                                <input type="text" class="form-control form-control-lg pe-0"
                                                                       id="sendAmount" placeholder="0" value="380" maxlength="14">
                                                            </div>
                                                            <div class="select-col">
                                                                <select class="form-select form-select-lg currency">
                                                                    <option value="BTC" selected>BTC</option>
                                                                    <option value="ETH">ETH</option>
                                                                    <option value="ADA">ADA</option>
                                                                    <option value="USDT">USDT</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-2">
                                                    <button type="button" class="btn btn-primary btn-lg btn-block"
                                                            data-bs-dismiss="modal">Send</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * Send Action Sheet-->

                    </div>
                    <!-- * Stats -->

                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- * Modal Basic -->

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
        console.log($(this).scrollTop())
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


@if(isset($get_detmatch))
    <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");

        window.addEventListener("load", function() {

            var team_name_shrt = document.getElementsByClassName('short_team_name');
            var result_shrt;
            team_name_shrt.forEach(function(number_shrt) {
                result_shrt = number_shrt.innerText;
                number_shrt.innerHTML = result_shrt.substring(0, 9);
            });

            var team_name = document.getElementsByClassName('team_name');
            var result;
            team_name.forEach(function(number) {
                result = number.innerText;
                number.innerHTML = result.substring(0, 9);

            });

        });

        $('#pronticketval').blur(function()
        {
            if( !$(this).val() ) {
                console.log('test')
                $('#error_message').show()
                //$('#pronticketval').css("display","block");
            }
        });

        $('[id^="coupon"]').on('click', function (e) {
            var pron = $(this).data('proname');
            var coup = $(this).data('couponame');
            var coupval = $(this).data('couponvalue');
            var leaguename = $(this).data('leaguename');
            var team1 = $(this).data('team1');
            var team2 = $(this).data('team2');
            var bet_id = $(this).data('bet_id');
            var value = $(this).data('value');
            console.log('test')
            $('#error_message').hide()

            var sumvar = pron + ',' + coup + ',' + coupval;

            $('#action-title').empty(pron);
            $('#coupname').empty(coup);
            $('#coupval').empty(coupval);

            $('#action-title').append(pron);
            $('#coupname').append(coup);
            $('#coupval').append(coupval);

            $('#pron_simple').on('click', function (e) {
                $('#actionSheetInset').modal('hide');
                $('#simprontitle').empty();
                $('#simprontitle').append(pron);
                $('#simple_league_name').empty();
                $('#simple_league_name').append(leaguename);

                $('#team1').empty();
                $('#team1').append(team1);

                $('#team2').empty();
                $('#team2').append(team2);

                $('#pronval').val(sumvar);

            });

            $('#pronticketval').on('keyup', function (e) {
                var res = $(this).val()*47.23*coupval;
                $('#ipt_info').empty();
                $('#ipt_info').append(res.toFixed(2));
            });

            $('#pronostiquer').click(function(e) {
                var nbre_ticket = $('#pronticketval').val();

                if ($('#pronticketval').val()){
                    $('#actionSheetInset2').modal('hide');
                    $("#loader").show();
                    var rencontre_id = "{{$get_detmatch['id_']}}";
                    var bet_id1 = bet_id;
                    var value1 = value;
                    var nbre_ticket1 = nbre_ticket;
                    var token = "{{$token}}";

                    var o = new Object();
                    o["rencontre_id_"] = rencontre_id;
                    o["bet_id"] = bet_id1;
                    o["value"] = value1;
                    o["nbr_tickets"] = nbre_ticket1;
                    o["token"] = token;
                    console.log(o)
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: `https://demo.pronomix.net/api/pronostic-simple`,
                        data: o,
                        success: function(data) {
                            if (data.status === 'success'){
                                console.log(data)
                                var new_token = data.new_token;
                                var message = data.message;
                                var data_reg = data.data;
                                var o = new Object();
                                o["new_token"] = new_token;
                                o["message"] = message;
                                o["data_reg"] = data_reg;
                                var url = "{{ route('pronos') }}";
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
                                        if (data['status'] === 'success'){
                                            $('#coup_success1').empty();
                                            $('#coup_success1').append(data['message']);
                                            $('#actionSheetInset2').modal('hide');
                                            $("#loader").hide();
                                            $('#DialogIconedSuccess1').modal('show');
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
                            else {
                                $('#coup_error').empty();
                                $('#coup_error').append(data.message);
                                $('#actionSheetInset2').modal('hide');
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
                            },
                            419: function (){
                                window.location = "{{ route('logout') }}";
                            }
                        }
                    });

                }else {
                    console.log('not submit')
                    $('#error_message').show()

                }

            });

            $('#pron_multi').click(function (e) {
                console.log(bet_id)
                console.log(value)
                $('#actionSheetInset').modal('hide');
                $("#loader").show();
                var rencontre_id = "{{$get_detmatch['id_']}}";
                var o = new Object();
                o["rencontre_id_"] = rencontre_id;
                o["bet_id"] = bet_id;
                o["value"] = value;
                o["token"] = "{{$token}}";
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
                                    if (data['status'] === 'success'){
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
                        else {
                            $('#coup_error').empty();
                            $('#coup_error').append(data.message);
                            $("#loader").hide();
                            $('#DialogIconedDanger').modal('show');
                        }
                    },
                    statusCode: {
                        500: function() {
                            $('#coup_error').empty();
                            $('#coup_error').append("Impossible d'enregistrer votre pronostic. Merci de ressayer plutard.");
                            $("#loader").hide();
                            $('#DialogIconedDanger').modal('show');
                        },
                        419: function (){
                            window.location = "{{ route('logout') }}";
                        }
                    }
                });


            });


            //console.log(coup);
        });

        $('#coup_pron1').click(function(e) {
            $("#loader").show();
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
                    if (data.success === true){
                        console.log(data)
                        var new_token = data.new_token;
                        var data_reg = data.data;
                        var o = new Object();
                        o["new_token"] = new_token;
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
                                window.location = "{{ route('coup_pron') }}";
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

        });


        $('#actionSheetInset2').on('hidden.bs.modal', function () {
            $('#simprontitle').empty();
            $('#simple_league_name').empty();

            $('#team1').empty();

            $('#team2').empty();

            $('#ipt_info').empty();

            $('#pronticketval').val('');
        })


        $('#allmatch').click(function() {
            var token = "{{$token}}";
            //var loader =  document.getElementById('loader');
            //loader.show();

            $("#loader").show();

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


    </script>
    @endif

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
</script>

<script>


</script>


</body>

</html>
