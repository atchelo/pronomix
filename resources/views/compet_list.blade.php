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

        <div class="section mt-2">

            <div class="accordion" id="accordionExample2">
                @foreach($compets as $index => $compet)
                    <div class="accordion-item" id="compet_det{{$index}}" data-competid="{{$compet['id_']}}">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion00{{$index}}">
                                <div class="icon-box mx-2">
                                    <img src="{{ $compet['logo'] }}" alt="logo" class="logo" style="width: 30px;height: 30px;">
                                </div>
                                <div class="in mx-2">
                                    {{ $compet['nom'] }} ~ {{ $compet['country_name'] }}
                                </div>
                            </button>
                        </h2>
                        <div id="accordion00{{$index}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">

                                <div class="accordion-body" @if(isset($compet['rencontres'])) style="background-color: currentColor" @endif>
                                    @if(isset($compet['rencontres']))
                                @foreach($compet['rencontres'] as $index1 => $rencontre)
                                        <div class="card-block mb-1" id="detmatch{{$index1}}" style="height: 135px; background-color: white" data-matchid="{{$rencontre['id_']}}">
                                            <div class="section full" style="position: relative; text-align: center">
                                                <div class="in" style="padding: 0px">
                                                    <div class="titleCard__textWrapper" style="justify-content: space-between;color: #1e1e1e; overflow: hidden;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp: 1;
-webkit-box-orient: vertical;">
                                    <span class="titleCard__text" style="font-size: 12px">
                                           @if(isset($rencontre['sport_icon'])) {!! $rencontre['sport_icon'] !!} @endif  {{ $rencontre['league_name'] }}
                                            ~ <span style="font-weight: normal; color: #6f6c6c;">{{ $rencontre['league_round'] }}</span><br>
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
   -webkit-box-orient: vertical;">{{ $rencontre['team_name_home'] }}</div>
                                                            </div>
                                                            <div class="col-2" style="padding: 0">
                                                                <img src="{{ $rencontre['team_logo_home'] }}" alt="logo" class="logo" style="width: 35px;height: 35px;">
                                                            </div>
                                                            <div class="col-2" style="padding: 0">
                                                                <div class="card" style="padding: 7px 0 7px 0; background-color: transparent">
                                                                    <div class="card-body" style="padding: 0">
                                                                        <div class="container" style="padding: 0px 5px 0px">
                                                                            <div class="row" >
                                                                                <div class="col" style="padding: 0">
                                                                                    <strong style="font-size: 20px; color: black" >{{ $rencontre['hour'] }}</strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2" style="padding: 0">
                                                                <img src="{{ $rencontre['team_logo_away'] }}" alt="logo" class="logo" style="width: 35px;height: 35px;">
                                                            </div>
                                                            <div class="col-3" style="padding: 0">
                                                                <div id="team_name" class="team_name" style="color: black; font-weight: bold; margin-top: 5px; text-align: center;overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 1;
           line-clamp: 2;
   -webkit-box-orient: vertical;">{{ $rencontre['team_name_away'] }}</div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding: 0 50px;">
                                                            <div class="col" style="padding: 0">
                                                                <div class="" style="color: black;text-align: center; font-size: 10px">{{ $rencontre['date'] }}</div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4" style="padding: 0">
                                                                <div class="coupon" style="color: black; text-align: center;  font-size: 10px">Victoire <span class="short_team_name">{{ $rencontre['team_name_home'] }}</span> <span class="badge-green"> {{ $rencontre['bets_home']['odd'] }}</span></div>
                                                            </div>
                                                            <div class="col-4" style="padding: 0 3px">
                                                                <div class="coupon" style="color: black; text-align: center;  font-size: 10px">Match nul <span class="badge-green"> {{ $rencontre['bets_draw']['odd'] }}</span></div>
                                                            </div>
                                                            <div class="col-4" style="padding: 0">
                                                                <div class="coupon" style="color: black; text-align: center;  font-size: 10px">Victoire <span class="short_team_name">{{ $rencontre['team_name_away'] }}</span> <span class="badge-green"> {{ $rencontre['bets_away']['odd'] }}</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                    @else
                                        <div class="alert alert-outline-dark mb-1" role="alert">
                                            <i class="fa fa-futbol-o"></i> Aucune rencontre disponible pour l'instant.
                                        </div>
                                    @endif
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

<script>
    window.addEventListener("load", function() {

        var team_name_shrt = document.getElementsByClassName('short_team_name');
        var result_shrt;
        team_name_shrt.forEach(function(number_shrt) {
            result_shrt = number_shrt.innerText;
            number_shrt.innerHTML = result_shrt.substring(0, 2);
        });

    });

    var rollback = "{{route('rollback')}}";
    var current_page = "{{$current_page}}";
    current_page = parseInt(current_page) + 1;
    var total_page = "{{$total_page}}";
   var next_page = "{!! $next_page !!}";
    var token = "{{ $token }}";

    var step = 2;

    $('#aft_body').on('resize', onScroll);
    $('#aft_body').on('scroll', onScroll);
    function onScroll(){
        if($('#aft_body').scrollTop() + window.innerHeight >= $(this)[0].scrollHeight) {
            if (next_page !== null){
                if(step == current_page){
                    $('#load_spinner').css('display', 'block');
                    console.log('load')
                    $('#accordionExample2').append("<div id='loader_box' style='width: 100%; display: flex'></div>");
                    $('#loader_box').append("<div id='load_spinner' class='spinner-grow text-success' style='margin-left: auto; margin-right:auto' role='status'></div>");
                    step++;
                    var o = new Object();
                    o['token'] = token;
                    o['page'] = current_page;
                    //$("#bodyID").addClass('block');
                   $.ajax({
                        url: `${next_page}`,
                        data: o,
                       async:false,
                       datatype: "json",
                        method: "GET",
                        success: function (data) {
                            console.log(data)
                           if (data.success === true){
                                next_page = data.data.next_page_url;
                                var url = "{{ route('store_compet') }}";
                                var ccompet_data = data;
                                var token = data.new_token;
                                var p = new Object();
                                p["list_compet"] = ccompet_data;
                                p["token"] = token;

                                var params = JSON.stringify(p);

                               var CSRF_TOKEN = document.querySelectorAll('meta[name="csrf-token"]')[0].getAttribute('content');

                               var httpc = new XMLHttpRequest(); // simplified for clarity
                               httpc.open("POST", url, true); // sending as POST
                               httpc.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                               httpc.setRequestHeader("X-CSRF-TOKEN", CSRF_TOKEN);

                               httpc.onreadystatechange = function() { //Call a function when the state changes.
                                   if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
                                       console.log(JSON.parse(httpc.responseText))
                                       var data = JSON.parse(httpc.responseText);
                                       $('#loader_box').remove();
                                       $('#load_spinner').remove();
                                       current_page = parseInt(data[0]) + 1;
                                       step = current_page;
                                       data[1].forEach(getall);
                                       function getall(item) {
                                           $('#accordionExample2').append(item);
                                       }
                                       var team_name_shrt = document.getElementsByClassName('short_team_name');
                                       var result_shrt;
                                       team_name_shrt.forEach(function(number_shrt) {
                                           result_shrt = number_shrt.innerText;
                                           number_shrt.innerHTML = result_shrt.substring(0, 2);
                                       });
                                       $('#loader').hide();
                                   }
                               };
                               httpc.send(params);

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
