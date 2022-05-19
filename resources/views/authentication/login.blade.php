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
    <link rel="manifest" href="__manifest.json">
</head>

<body>

<!-- loader -->
<div id="loader">
    <div class="spinner-border text-light" role="status"></div>
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
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2 text-center">
        <h1>Log in</h1>
        <h4>Fill the form to log in</h4>
    </div>
    <div class="section mb-5 p-2">
        @php
        $get_error = session()->get('error');
            @endphp
        <script>
            $(document).ready(function(){
                <?= isset($get_error) ? "toastbox('toast-1')" : ''?>
            });
        </script>

        @error('password')
        <script>
            $(document).ready(function(){
                <?= !isset($get_error) ? "toastbox('toast-1')" : ''?>
            });
        </script>
        <div id="toast-1" class="toast-box toast-top bg-danger">
            <div class="in">
                <div class="text">
                    {{ $get_error }}
                </div>
            </div>
            <button type="button" class="btn btn-sm btn-text-light close-button">OK</button>
        </div>
        @enderror

        <div id="toast-1" class="toast-box toast-top bg-danger">
            <div class="in">
                <div class="text">
                    @if(isset($get_error))
                        {{ $get_error}}
                    @endif
                </div>
            </div>
            <button type="button" class="btn btn-sm btn-text-light close-button">OK</button>
        </div>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-body pb-1">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="email1">E-mail</label>
                            <input type="email" class="form-control" id="email1" placeholder="Your e-mail" name="email" value="{{ old('email') }}" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password1">Password</label>
                            <input type="password" class="form-control" name="password" id="password1" autocomplete="off"
                                   placeholder="Your password" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-links mt-2">
                <div>
                    <a href="{{ route('register') }}">Register Now</a>
                </div>
                <div><a href="app-forgot-password.html" class="text-muted">Forgot Password?</a></div>
            </div>
            <div class="form-button-group  transparent" style="bottom: auto">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
            </div>

        </form>
    </div>

</div>
<!-- * App Capsule -->



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
