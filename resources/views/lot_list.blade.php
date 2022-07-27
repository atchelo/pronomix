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

    </style>
</head>

<body id="bodyID" style="background-color: white; margin: 0; height: 100%; overflow: hidden;  -webkit-overflow-scrolling: touch;">

<!-- loader -->
<div id="loader">
    <div class="spinner-border" role="status"></div>
</div>
<!-- * loader -->

<div id="flux" style="height: -webkit-fill-available; padding-bottom: 0; background-color: #EDEDF5;border-radius: 30px; margin-top: 30px; position: relative; overflow-y: auto;">
    <!-- App Header -->
    <div class="appHeader" style="border-radius: 30px; margin: auto; position: sticky">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle" style="background-color: #11a44c;border-radius: 10px;">
            <!---<img src="assets/img/logo_final_w.png" alt="logo" class="logo">--->
        </div>
        <div class="right">
            <a href="#item10" class="headerButton">
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

        <div class="section inset mt-2 mb-2" style="margin-bottom: 3.7rem !important;">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css" integrity="sha512-YTuMx+CIxXa1l+j5aDPm98KFbVcYFNhlr2Auha3pwjHCF1lLbY9/ITQQlsUzdM1scW45kHC5KNib4mNa1IFvJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <div class="transactions">
                <div id="putlot" class="container">
                    @foreach($get_lot['data'] as $index => $lot)
                        <div class="row item" style="color: orange; padding: 10px 10px; @if($lot['restant'] === '0') opacity: 0.5 @endif" id="item{{$index}}">
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
                            <div class="col-12">
                                <span style="display: inline-block;
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
    background-color: #ff6a00;">{{ $lot['valeur'] }}pts</span>
                            </div>
                            <div class="col-12 mt-1">
                                <button type="button" class="btn btn-primary btn-sm btn-block me-1 mb-1" style="border-radius: 0.37rem">OBTENIR</button>
                                <button type="button" class="btn btn-light btn-sm btn-block me-1 mb-1" style="border-radius: 0.37rem; border-color: #e4e4e4 !important;"> <ion-icon name="heart" style="font-size: 15px; color: #969696"></ion-icon> SUIVRE</button>
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

    $(".rating").rate();
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
                    console.log('load')
                    step++;
                   $("#bodyID").addClass('block');

                    $.ajax({
                        url: `${next_page}`,
                        method: "GET",
                        success: function (data) {
                            console.log(data)
                            if (data.success === true){
                                $('#load_spinner').css('display', 'block');
                               $("#loader").show();
                                //console.log(data.response)
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
                                        //console.log(data)
                                        current_page = data[0];
                                        next_page = data[2];
                                        console.log(current_page)

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
                //console.log('last')
            }
            console.log(step)
        }

    }


    $("#back").click(function(e) {
        $.ajax({
            url: `${rollback}`,
            method: "GET",
            success: function (data) {
                if (data.success === true){
                    //$("#loader").hide();
                    console.log('success')
                }
            }
        });
    });


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


</script>

</body>

</html>
