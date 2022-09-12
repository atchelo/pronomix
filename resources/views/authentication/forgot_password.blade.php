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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <link rel="manifest" href="__manifest.json">
</head>

<body>

<!-- loader -->
<div id="loader">
    <div class="spinner-border" role="status"></div>
</div>
<!-- * loader -->

<!-- App Header -->
{{----<div class="appHeader no-border transparent position-absolute">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle"></div>
    <div class="right">
    </div>
</div>----}}
<!-- * App Header -->


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

<!-- DialogIconedSuccess -->
<div class="modal fade dialogbox" id="DialogIconedSuccess" tabindex="-1"
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
        </div>
    </div>
</div>
<!-- * DialogIconedSuccess -->

<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2 text-center">
        <h1>Forgot password</h1>
        <h4>Type your e-mail to reset your password</h4>
    </div>
    <div class="section mb-5 p-2">
        <div class="card">
            <div class="card-body pb-1">
                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="label" for="email1">E-mail</label>
                        <input type="email" class="form-control" id="email1" placeholder="Your e-mail">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-button-group transparent">
            <button type="button" onclick="reset_pwd()" class="btn btn-primary btn-block btn-lg">Reset Password</button>
        </div>
    </div>

</div>
<!-- * App Capsule -->

<script>
    function reset_pwd() {
        var mail = $('#email1').val()
        $("#loader").show();
        var o = new Object();
        o["email"] = mail;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: `https://demo.pronomix.net/api/password/mail/send-reinitialisation`,
            data: o,
            success: function(data) {

                if (data.status === 'failed'){
                    $('#coup_error').empty(data.message);
                    $('#coup_error').append(data.message);
                    $("#loader").hide();
                    $('#DialogIconedDanger').modal('show');
                }else if(data.status === 'success'){
                    $('#coup_success').empty(data.message);
                    $('#coup_success').append(data.message);
                    $("#loader").hide();
                    $('#DialogIconedSuccess').modal('show');
                }
                console.log(data)

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
