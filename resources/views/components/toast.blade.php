<!-- toast bottom iconed -->
<div id="toast-7" class="toast-box toast-bottom" style="justify-content: center">
    <div class="in">
        <ion-icon name="document-outline" style="width: 24px" data-bs-toggle="modal" data-bs-target="#gen_coup"></ion-icon>
        <ion-icon id="sup_pron_coup" name="trash-outline" style="width: 24px" data-bs-toggle="modal" data-bs-target="#DialogIconedButtonInline1"></ion-icon>
    </div>
    <div class="in" style="padding: 0">
        <button type="button" class="btn btn-secondary" id="coup_pron" style="border-radius: inherit; background: white !important; border:white !important; color: #11a44c !important;">PRONOSTIC MULTIPLE(<span id="pron_numb"></span>)</button>
        {{---<ion-icon class="close-button" name="close-circle-outline" style="width: 24px"></ion-icon>---}}
    </div>
</div>
<!-- * toast bottom iconed -->

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
    <button type="button" class="btn btn-sm btn-text-light close-button">FERMER</button>
</div>
<!-- toast center -->

<!-- DialogIconedSuccess -->
<div class="modal fade dialogbox" id="DialogIconedSuccessGenCoup" data-bs-backdrop="static" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="display: flex; justify-content: center">
                <h1 id="code" style="text-align: center"></h1>
            </div>
            <div class="modal-body" id="coup_successGenCoup" style="margin-bottom: 15px">
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
                    <button type="button" id="fermer1" data-bs-dismiss="modal" class="btn btn-success btn-block">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * DialogIconedSuccess -->

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

<!-- DialogIconedDanger -->
<div class="modal fade dialogbox" id="DialogIconedDangerSoon" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-icon text-info">
                <ion-icon name="alert-circle-outline"></ion-icon>
            </div>
            <div class="modal-header">
                <h5 class="modal-title">En Cour</h5>
            </div>
            <div class="modal-body">
                cette fonctionnalité sera prochainement disponible.
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn" data-bs-dismiss="modal">Fermer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * DialogIconedDanger -->


<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged  w36">
                    </div>
                    <div class="in">
                        <strong>{{ $islogged['nom'] }} {{ $islogged['prenom'] }}</strong>
                        <div class="text-muted">{{ $islogged['reference'] }}</div>
                    </div>
                    <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                        <ion-icoFn name="close-outline"></ion-icoFn>
                    </a>
                </div>
                <!-- * profile box -->
                <!-- balance -->
                {{-----<div class="sidebar-balance">
                    <div class="listview-title">Points</div>
                    <div class="in">
                        <h1 class="amount">{{ $islogged['balance_points'] }}</h1>
                    </div>
                </div>-----}}
                <!-- * balance -->

                <!-- action group -->
                {{----<div class="action-group">
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="add-outline"></ion-icon>
                            </div>
                            Deposit
                        </div>
                    </a>
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            Withdraw
                        </div>
                    </a>
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            Send
                        </div>
                    </a>
                    <a href="app-cards.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            My Cards
                        </div>
                    </a>
                </div>-----}}
                <!-- * action group -->

                <!-- menu -->
                <div class="listview-title mt-1">Menu</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="{{route('home') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Accueil
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="allmatch1" class="item" data-bs-dismiss="modal">
                            <div class="icon-box bg-primary">
                                <ion-icon name="dice-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Pronostiques
                                {{----<span class="badge badge-primary">10</span>---}}
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="item" id="allcompet" data-bs-dismiss="modal">
                            <div class="icon-box bg-primary">
                                <ion-icon name="trophy-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Competition
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" {{-----data-bs-toggle="modal" data-bs-target="#DialogIconedDangerSoon"----}} class="item" data-bs-dismiss="modal">
                            <div class="icon-box bg-primary">
                                <ion-icon name="checkbox-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Resultats
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" {{-----data-bs-toggle="modal" data-bs-target="#DialogIconedDangerSoon"----}} class="item" data-bs-dismiss="modal">
                            <div class="icon-box bg-primary">
                                <ion-icon name="ticket-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Acheter des tiquets
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="item" id="all_lot2" data-bs-dismiss="modal">
                            <div class="icon-box bg-primary">
                                <ion-icon name="gift-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Lots
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * menu -->

                <!-- others -->
                <div class="listview-title mt-1">Others</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="javascript:void(0);" {{-----data-bs-toggle="modal" data-bs-target="#DialogIconedDangerSoon"----}} class="item" data-bs-dismiss="modal">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Settings
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-bs-dismiss="modal" {{-----data-bs-toggle="modal" data-bs-target="#DialogIconedDangerSoon"----}} class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Support
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="item" data-bs-dismiss="modal">
                            <div class="icon-box bg-primary">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Log out
                            </div>
                        </a>
                    </li>


                </ul>
                <!-- * others -->

                <!-- send money -->
                {{----<div class="listview-title mt-1">Send Money</div>
                <ul class="listview image-listview flush transparent no-line">
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Artem Sazonov</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar4.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Sophie Asveld</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Kobus van de Vegte</div>
                            </div>
                        </a>
                    </li>
                </ul>-----}}
                <!-- * send money -->

            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->


<script>

    window.addEventListener("load", function() {

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
                if (data.data.pronostics !== undefined){
                    var mul_pron = data.data.pronostics.length;
                }else {
                    mul_pron = 0;
                    $("#sup_pron_coup").addClass('disable_icon')
                }

                $("#pron_numb").append(mul_pron);
                toastbox('toast-7');
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

    $('[id^="allcompet"]').click(function() {
        //var loader =  document.getElementById('loader');
        //loader.show();

        $("#loader").show();

        $.ajax({
            url: `https://demo.pronomix.net/api/competition/liste/search=all_`,
            method: "GET",
            success: function (data) {
                if (data.success === true){
                    var url = "{{ route('store_compet') }}";
                    var compet_data = data.data;
                    var o = new Object();
                    o["compet_data"] = compet_data;

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
                            window.location = data;
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

    $('[id^="all_lot"]').click(function() {
        //var loader =  document.getElementById('loader');
        //loader.show();

        $("#loader").show();

        $.ajax({
            url: `https://demo.pronomix.net/api/lots/liste/search=all_&type_lot=all_&value_min=none&value_max=none`,
            method: "GET",
            success: function (data) {
                if (data.success === true){
                    //$("#loader").hide();
                    console.log(data.response)
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
                            console.log(data)
                            window.location = data;
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

    $('[id^="allmatch"]').click(function() {
        var token = "{{$token}}";
        //var loader =  document.getElementById('loader');
        //loader.show();

        $("#loader").show();
        document.querySelector("body").setAttribute("style", "pointer-events: none; background-color: white");

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
                    $('#coup_error').append("Une erreur est survemue. Merci de ressayer plutard.");
                    $("#loader").hide();
                    $('#DialogIconedDanger').modal('show');
                },
            },
            error: function (data, textStatus, errorThrown) {
                console.log('test');

            },
        });

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
                            $('#coup_success').append(data['message']);
                            $("#loader").hide();
                            $('#DialogIconedSuccess').modal('show');
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


    $('[id^="coup_pron"]').click(function(e) {
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
                }
            }
        });

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
                            $('#coup_error').append(data['message']);
                            $("#loader").hide();
                            $('#DialogIconedDanger').modal('show');
                        }else {
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

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });



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
                                $('#coup_successGenCoup').append(data['message']);
                                $('#code').append(data['code']);
                                $('#link_code_coupon').val(data['link']);
                                $("#loader").hide();
                                $('#DialogIconedSuccessGenCoup').modal('show');
                            }else {
                                $('#coup_error').append(data['message']);
                                $("#loader").hide();
                                $('#DialogIconedDanger').modal('show');
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
            },
            statusCode: {
                500: function() {
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

    $('#fermer').click(function(e) {
        $("#loader").show();
        window.location.reload();
    });
    $('#fermer1').click(function(e) {
        $("#loader").show();
        window.location.reload();
    });
</script>
