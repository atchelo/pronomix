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
        .team_name{

        }

    </style>
</head>

<body style="background-color: white">

<!-- loader -->
<div id="loader">
    <div class="spinner-border text-light" role="status"></div>
</div>
<!-- * loader -->

<div style="height: -webkit-fill-available; padding-bottom: 0; background-color: #EDEDF5;border-radius: 30px; margin: 10px;">
    <!-- App Header -->
    <div class="appHeader" style="border-radius: 0 0 30px 30px; margin: 0 12px;">
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
            <a href="app-settings.html" class="headerButton">
                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged w32">
                <span class="badge badge-danger">6</span>
            </a>
        </div>
    </div>
    <!-- * App Header -->
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section inset mt-2 mb-2">
            <div class="accordion" id="accordionExample2">
                @foreach($get_compet as $index => $compet)


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
                            <div class="accordion-body" style="background-color: currentColor">

                            </div>
                        </div>
                    </div>

                @endforeach
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
    $('[id^="compet_det"]').on('show.bs.collapse', function(e) {
        //console.log($(this).data('competid'))
        var token = "{{$token}}";
        var comp_id = $(this).data('competid');
        //var loader =  document.getElementById('loader');
        //loader.show();

        $.ajax({
            url: `https://demo.pronomix.net/api/matchs-disponibles/liste/search=&filtre_date=?token=${token}`,
            method: "GET",
            success: function (data) {
                if (data.success === true){
                    //$("#loader").hide();
                    var new_token = data.new_token;
                    var match_data = data.data;
                    var o = [];
                    data.data.forEach(function(number) {
                        if (comp_id === number.league_id){
                            o.push(number)
                        }
                    });
                    if (o.length !== 0){
                        console.log('data found')
                        o.forEach(function(item) {
                            $('.accordion-body').append(`<div class="card-block mb-2" id="detmatch" style="height: 135px; background-color: white" data-matchid="">
                    <div class="section full" style="position: relative; text-align: center">
                        <div class="in" style="padding: 0px">
                            <div class="titleCard__textWrapper" style="justify-content: space-between;color: #1e1e1e;">
                                    <span class="titleCard__text" style="font-size: 12px">
                                ${ item.sport_icon} ${ item.league_name}
                        ~ <span style="font-weight: normal; color: #6f6c6c;">${ item.league_round}</span><br>
                                                                            </span>
                            </div>

                            <div class="container mt-1" style="background-color: rgba(255, 255, 255, 0.2); justify-content: space-between;height: 40px;border-radius: 10px;">
                                <div class="row">
                                    <div class="col-3" style="padding: 0">
                                        <div class="team_name" style="color: black; font-weight: bold; margin-top: 5px; text-align: center"> ${ item.team_name_home} </div>
                                    </div>
                                    <div class="col-2" style="padding: 0">
                                        <img src="${ item.team_logo_home}" alt="logo" class="logo" style="width: 35px;height: 35px;">
                                    </div>
                                    <div class="col-2" style="padding: 0">
                                        <div class="card" style="padding: 7px 0 7px 0; background-color: transparent">
                                            <div class="card-body" style="padding: 0">
                                                <div class="container" style="padding: 0px 5px 0px">

                        <div class="row" >
                            <div class="col" style="padding: 0">
                                <strong style="font-size: 20px; color: black" > ${ item.date.split(' ')[1]} </strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2" style="padding: 0">
                                        <img src="${ item.team_logo_away}" alt="logo" class="logo" style="width: 35px;height: 35px;">
                                    </div>
                                    <div class="col-3" style="padding: 0">
                                        <div id="team_name" class="team_name" style="color: black; font-weight: bold; margin-top: 5px; text-align: center">${ item.team_name_away}</div>
                                    </div>
                                </div>
                                <div class="row" style="padding: 0 50px;">
                                    <div class="col" style="padding: 0">
                                        <div class="" style="color: black;text-align: center; font-size: 10px"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4" style="padding: 0">
                                        <div class="coupon" style="color: black; text-align: center;  font-size: 10px">Victoire <span class="short_team_name"></span> <span class="badge-green"> 3.30</span></div>
                                    </div>
                                    <div class="col-4" style="padding: 0 3px">
                                        <div class="coupon" style="color: black; text-align: center;  font-size: 10px">Match nul <span class="badge-green"> 3.30</span></div>
                                    </div>
                                    <div class="col-4" style="padding: 0">
                                        <div class="coupon" style="color: black; text-align: center;  font-size: 10px">Victoire <span class="short_team_name"></span> <span class="badge-green"> 3.30</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`);
                        });

                    }else{
                        console.log('data not found')
                        $('.accordion-body').append(`<div id="message" class="alert alert-outline-danger mb-1" role="alert">
                        Aucun element trouve
                    </div>`);
                    }
                    //window.location = `${url}?new_token=` + new_token + `&match_data=` + match_data;


                }
            }
        });

    });


    $('[id^="compet_det"]').on('hidden.bs.collapse', function(e) {
        $('[id^="detmatch"]').remove();
        $('[id^="message"]').remove();
    });
</script>



</body>

</html>
