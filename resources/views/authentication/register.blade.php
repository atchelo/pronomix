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

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" type="text/css" href="assets/country/niceCountryInput.css">
    <script src="assets/country/niceCountryInput.js"></script>
    <link rel="manifest" href="__manifest.json">
    <style>
        input:focus, textarea:focus {

        }
    </style>
</head>

<body>

<!-- loader -->
<div id="loader">
    <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
</div>
<!-- * loader -->

<!-- App Header -->
<div class="appHeader no-border transparent position-absolute">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle"></div>
    <div class="right">
        <a href="{{ route('login') }}" class="headerButton">
            Login
        </a>
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2 text-center">
        <h1>Register now</h1>
        <h4>Create an account</h4>
    </div>
    <div class="section mb-5 p-2">

        @if($errors->any())
            <script>
                $(document).ready(function(){
                    <?= isset($errors) ? "toastbox('toast-1')" : ''?>
                });
            </script>
                <div id="toast-1" class="toast-box toast-top bg-danger">
                    <div class="in">
                        <div class="text">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-text-light close-button">OK</button>
                </div>
        @endif

            @php
                $get_error = session()->get('error');
            @endphp
            <script>
                $(document).ready(function(){
                    <?= isset($get_error) ? "toastbox('toast-2')" : ''?>
                });
            </script>

            <div id="toast-2" class="toast-box toast-top bg-danger">
                <div class="in">
                    <div class="text">
                        {{ $get_error }}
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-text-light close-button">OK</button>
            </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="name">Nom</label>
                            <input type="text" class="form-control" name="name" id="name" required placeholder="Votre nom">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="surname">Prenom</label>
                            <input type="text" class="form-control" id="surname" name="surname" required placeholder="Votre prenom">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="country">Pays</label>
                            <div id="testinput" style="width: 100%" data-selectedcountry="CI" data-showspecial="false"
                                 data-showflags="true" data-i18nall="All selected" data-i18nnofilter="No selection"
                                 data-i18nfilter="Filter" data-onchangecallback="onChangeCallback" />
                            <input type="hidden" name="country" id="country">
                        </div>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="email1">E-mail</label>
                            <input type="email" class="form-control" id="email1" name="email" required placeholder="Your e-mail">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" required name="password" autocomplete="off"
                                   placeholder="Your password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password2">Password Again</label>
                            <input type="password" class="form-control" id="password2" required name="password_confirmation" autocomplete="off"
                                   placeholder="Type password again">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox mt-2 mb-1">
                        <div class="form-check">
                            <input required type="checkbox" class="form-check-input" id="customCheckb1" name="term" style="border: transparent; border: none;
            background-color: transparent;
            resize: none;
            outline: none; display: flex; position: absolute; left: 2.8rem">
                            <label class="form-check-label" for="customCheckb1">
                                I agree <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and
                                    conditions</a>
                            </label>
                        </div>
                    </div>

                </div>



            <div class="form-button-group transparent" style="bottom: 0">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
            </div>

        </form>
    </div>

</div>
<!-- * App Capsule -->


<!-- Terms Modal -->
<div class="modal fade modalbox" id="termsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Terms and Conditions</h5>
                <a href="#" data-bs-dismiss="modal">Close</a>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum, urna eget finibus
                    fermentum, velit metus maximus erat, nec sodales elit justo vitae sapien. Sed fermentum
                    varius erat, et dictum lorem. Cras pulvinar vestibulum purus sed hendrerit. Praesent et
                    auctor dolor. Ut sed ultrices justo. Fusce tortor erat, scelerisque sit amet diam rhoncus,
                    cursus dictum lorem. Ut vitae arcu egestas, congue nulla at, gravida purus.
                </p>
                <p>
                    Donec in justo urna. Fusce pretium quam sed viverra blandit. Vivamus a facilisis lectus.
                    Nunc non aliquet nulla. Aenean arcu metus, dictum tincidunt lacinia quis, efficitur vitae
                    dui. Integer id nisi sit amet leo rutrum placerat in ac tortor. Duis sed fermentum mi, ut
                    vulputate ligula.
                </p>
                <p>
                    Vivamus eget sodales elit, cursus scelerisque leo. Suspendisse lorem leo, sollicitudin
                    egestas interdum sit amet, sollicitudin tristique ex. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos himenaeos. Phasellus id ultricies eros. Praesent
                    vulputate interdum dapibus. Duis varius faucibus metus, eget sagittis purus consectetur in.
                    Praesent fringilla tristique sapien, et maximus tellus dapibus a. Quisque nec magna dapibus
                    sapien iaculis consectetur. Fusce in vehicula arcu. Aliquam erat volutpat. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- * Terms Modal -->


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
