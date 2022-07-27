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
    <link rel="stylesheet" type="text/css" href="assets/country/niceCountryInput.css">
    <script src="assets/country/niceCountryInput.js"></script>
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
    <!-- App Capsule -->
    <div id="appCapsule" style="padding: 0">

        <div class="section">
            <ul class="listview image-listview inset" style="margin:0">
                <li style="background-color: #11a44c !important" id="pers_info">
                    <div class="item">
                        <div class="icon-box bg-primary" style="background: white !important;color: #11a44c !important;">
                            <ion-icon name="person-circle-outline" role="img" class="md hydrated" aria-label="wallet outline"></ion-icon>
                        </div>
                        <div class="in" style="color: white">
                            <div>Informations Personnelles</div>
                        </div>
                    </div>
                </li>
                <li id="pwd_modif">
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="lock-closed-outline" role="img" class="md hydrated" aria-label="cash outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Modifier mot de passe</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item" id="suivi_coli">
                        <div class="icon-box bg-primary">
                            <ion-icon name="gift-outline" role="img" class="md hydrated" aria-label="cash outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Suivis colis</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="mail-open-outline" role="img" class="md hydrated" aria-label="cash outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Messages</div>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="card mt-2">
                <div id="message_modal_error" class="alert alert-outline-danger alert-dismissible fade show" role="alert" style="display: none">
                    <p id="message_error" style="margin: 0"></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div id="message_modal_success" class="alert alert-outline-primary alert-dismissible fade show" role="alert" style="display: none">
                    <p id="message_success" style="margin: 0"></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <p style="margin: 0;     font-size: .8rem;
    text-align: center;">Numero de compte: <b>2022221004101404</b></p>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="nom">Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom" required @if(isset($infos['nom'])) value="{{ $infos['nom'] }}"  @endif placeholder="Votre nom">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="prenom">Prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" @if(isset($infos['prenom'])) value="{{ $infos['prenom'] }}"  @endif required placeholder="Votre prenom">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email">E-mail</label>
                                <input type="email" class="form-control" disabled id="email" @if(isset($infos['email'])) value="{{ $infos['email'] }}"  @endif name="email" required placeholder="Your e-mail">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="pays_id">Pays</label>
                                <select class="form-control custom-select" id="pays_id" name="pays_id">
                                    @foreach($liste_pays as $pays)
                                        <option value="{{ $pays['id'] }}">{{ $pays['nom'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="pays_id">Indicatif</label>
                                <select class="form-control custom-select" id="pays_id" name="pays_id">
                                    @foreach($liste_pays as $pays)
                                        <option value="{{ $pays['id'] }}">+{{ $pays['indicatif'] }} ({{ $pays['nom'] }})</option>
                                    @endforeach
                                </select>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="msisdn">Numéro de téléphone</label>
                                <input type="text" class="form-control" id="msisdn" required name="msisdn" autocomplete="off"
                                       placeholder="Numéro de téléphone" @if(isset($infos['msisdn'])) value="{{ $infos['msisdn'] }}"  @endif>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic" style="bottom: auto">
                            <button type="submit" id="info_modif" class="btn btn-primary btn-block btn-lg">Modifier mes informations</button>
                        </div>
                </div>
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
                    <a href="#" class="btn" data-bs-dismiss="modal" id="code_coup_ferme">Fermer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * DialogIconedDanger -->


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

    $('#code_coup_ferme').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('pers_info') }}";
    });

    $('#fermer').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('pers_info') }}";
    });

    /*$('#pers_info').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('pers_info') }}";
    });*/
    $('#suivi_coli').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('suivi_coli') }}";
    });
    $('#pwd_modif').click(function(e) {
        $("#loader").show();
        window.location = "{{ route('pwd_modif') }}";
    });

    $('#info_modif').click(function(e) {
        $("#loader").show();
        var token = "{{ $token }}";
        var o = new Object();
        o['token'] = token;
        o['nom'] = $('#nom').val();
        o['prenom'] =  $('#prenom').val();
        //o['email'] =  $('#email').val();
        o['pays_id'] =  $('#pays_id').val();
        o['msisdn'] =  $('#msisdn').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
                url: "https://demo.pronomix.net/api/user-informations/update",
            data: o,
            success: function(data) {
                console.log(data)
                if (data.status === false){
                    $('#coup_error').empty();
                    $('#coup_error').append(data.message);
                    $("#loader").hide();
                    $('#DialogIconedDanger').modal('show');

                }
                else if (data.status === true){
                    $('#coup_success').empty();
                    $('#coup_success').append(data.message);
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
    });


</script>



<script>
    function onChangeCallback(ctr){
        console.log("The country was changed: " + ctr);
        $('#country').val(ctr);
    }
    $(document).ready(function () {
        new NiceCountryInput($("#testinput")).init();
        $('#country').val('CI');
    });
</script>



</body>

</html>
