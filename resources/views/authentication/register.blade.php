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

<style>
    .appHeader.transparent{
        height: 15vh;
    }

    #appCapsule {
        padding-top: 15vh;
        padding-bottom: 0;
    }
    .titre{
        color: white;
        z-index: 1;
        text-align: center;
        margin-top: 1.5rem;
        margin-bottom: 0;
    }
    .form-group.boxed .form-control {
        background: #f2f2f2;
        border: 1px solid #f2f2f2;
    }

    .btn-primary {
        background: #2a6e40 !important;
        border-color: #2a6e40 !important;
        color: #FFFFFF !important;
    }
</style>

<body style="background: white">

<!-- loader -->
<div id="loader">
    <div class="spinner-border" role="status"></div>
</div>
<!-- * loader -->

<!-- App Header -->
<div class="appHeader no-border transparent position-absolute">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <h2 class="titre">Inscription</h2>
            <p style="color: white; z-index: 1; text-align: center;margin: 0;font-size: xx-small;"> <small> Vous n'avez pas encore de compte ? Inscrivez-vous</small> </p>
        </div>
    </div>
</div>
<!-- * App Header -->


<!-- App Capsule -->
<div id="appCapsule">
    <div class="section p-2">

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

        <form action="{{ route('register') }}" method="POST" id="formRegister">
            @csrf
            <div class="card">
                <div class="card-body" style="padding-bottom: 0">

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            {{---<label class="label" for="name">Nom</label>---}}
                            <input type="text" class="form-control" name="name" id="name" required placeholder="nom">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                           {{----- <label class="label" for="surname">Prenom</label>----}}
                            <input type="text" class="form-control" id="surname" name="surname" required placeholder="prenom">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            {{-----<label class="label" for="country">Pays</label>----}}
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

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            {{-----<label class="label" for="email1">E-mail</label>-----}}
                            <input type="email" class="form-control" id="email1" name="email" required placeholder="e-mail">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            {{-----mot de passe----}}
                            <input type="password" class="form-control" id="password1" required name="password" autocomplete="off"
                                   placeholder="Mot de paase">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            {{-----<label class="label" for="password2">Password Again</label>-----}}
                            <input type="password" class="form-control" id="password2" required name="password_confirmation" autocomplete="off"
                                   placeholder="Confirmer mot de passe">
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
                            <label class="form-check-label" for="customCheckb1" style="font-size: smaller;">
                                J'accepte les <a style="color: #2a6e40; font-weight: bold" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#cguModal">CGU</a> et <a style="color: #2a6e40; font-weight: bold" data-bs-toggle="modal" data-bs-target="#regleModal" href="javascript:void(0);">regles de jeu</a>
                            </label>
                        </div>
                        <div style="font-size: smaller; padding-left: 2rem;">
                            J'ai déjà un compte.
                            <a onclick="$('#loader').show()" href="{{ route('login') }}">Se connecter</a>
                        </div>
                    </div>

                </div>



            <div class="form-button-group transparent" style="position: relative">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
            </div>
            <div class="form-button-group  transparent" style="position: relative;margin-top: -1.5rem;">
                <button type="button" onclick="google_login()" style="background-color: #ff7575 !important; border-color: #ff7575 !important;" class="btn btn-primary btn-block btn-lg"><ion-icon style="font-size: inherit" name="logo-google"></ion-icon> Sign in with google</button>
            </div>

        </form>
    </div>

</div>
<!-- * App Capsule -->


<!-- Terms Modal -->
<div class="modal fade modalbox" id="cguModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Condition d'utilisation</h5>
                <a href="#" data-bs-dismiss="modal">Fermer</a>
            </div>
            <div class="modal-body">
                <div class="tabs tabs--menu tabs--scrollable">
                    <div class="tabs__contents" style="text-align: left">
                        <div id="tabSummary" class="isActive">
                            <section class="">
                                <article class="GIxHAe">
                                    <div class="">
                                        <div class="">
                                            <div class="ugt2L">
                                                <div class="">
                                                    <div class="N5YmOc kJXJmd">
                                                        <header class="mSUZQd">
                                                            <div class="jbRlDc" style="text-align: justify; text-align-last: left;">
                                                                <h2 class="fnfC4c">
                                                                    Version: 1.0
                                                                    Date de publication : 01/03/2019 à 09:11</h2>
                                                                <div class="ISnqu">
                                                                    <p>
                                                                        <a style="color: #000;" href="#introduction"><b>1. INTRODUCTION</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>2. CHANGEMENT DES CONDITIONS GÉNÉRALES</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>3. OUVERTURE ET GESTION D'UN COMPTE</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>4. IDENTIFICATION</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>5. VOS INFORMATIONS PERSONNELLES</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>6. MOYEN DE PAIEMENT</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>7. DEVISES ACCEPTÉS</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>8. UTILISATION DE VOTRE COMPTE</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>9. RÉGLES DU JEU</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>10. LOTS</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>11. CLOTURE DE COMPTE</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>12. INDEMNITÉS</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>13. DROITS DE PROPRIÉTÉ INTELLECTUELLE</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>14. ERREURS LOGICIELLES</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>15. SERVICE CLIENT ET RÉSOLUTIONS DE CONFLITS</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>16. GÉNÉRALITÉ</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>17. LANGUE</b></a><br>
                                                                        <a style="color: #000;" href="#introduction"><b>18. LOI APPLICABLE</b></a><br>
                                                                        <a style="color: #000;" href="#promotion"><b>19. PROMOTIONS</b></a><br>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </header>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="GIxHAe">
                                    <div class=" XLK0Od Aovece">
                                        <div class="ahh38c">
                                            <div class="ugt2L">
                                                <div class="">
                                                    <div class="N5YmOc kJXJmd">
                                                        <header class="mSUZQd">
                                                            <div class="jbRlDc">
                                                                <br>
                                                                <h2 class="fnfC4c" id="introduction">1. Introduction</h2>
                                                                <div class="ISnqu">
                                                                    <div class="c-black">
                                                                        Ces Conditions Générales définissent votre accès et votre utilisation de de la plateforme pronomix.com,
                                                                        que vous y accédiez via le site web en ligne ou
                                                                        par le biais des applications mobile android ou IOS.
                                                                        Veuillez lire attentivement ces Conditions Générales avant d'utiliser tout ou partie du Site.
                                                                    </div>
                                                                    <br><h2 class="fnfC4c" id="introduction">2. Changement des conditions générales</h2>
                                                                    <div class="c-black">
                                                                        Nous nous réservons le droit de modifier nos Conditions Générales à tout moment. Tout changement significatif des Conditions Générales vous sera notifié par le
                                                                        biais d’une pop up à la prochaine connexion ou par tout moyen approprié (par exemple, par email ou par message sur le Site ou dans l'application mobile). Cependant, il reste de votre
                                                                        responsabilité de vérifier les Conditions Générales de temps en temps pour vous assurer que vous êtes en accord avec celles-ci et votre utilisation continue du
                                                                        Site sera la preuve que vous acceptez les modifications des Conditions Générales que nous aurions pu faire.
                                                                    </div>
                                                                    <br><h2 class="fnfC4c" id="introduction">3. Ouverture et gestion d'un compte</h2>
                                                                    <div class="c-black">
                                                                          3.1- Pour effectuer un ou plusieurs pronostics sur le site pronomix,
                                                                        l’utilisateur doit ouvrir un « Compte » Pronomix. <br>Vous pouvez ouvrir un Compte en
                                                                        remplissant correctement et intégralement le formulaire de demande sur la page d'inscription du site ou de
                                                                        l'application mobile ou via votre compte Facebook ou Google. C'est uniquement après cela
                                                                        que vous êtes considéré comme détenteur d'un compte Pronomix et que vous
                                                                        pouvez pronostiquer en mode réel sur le site.
                                                                        Créer un compte Pronomix sera la preuve que vous aurez accepté les Conditions Générales d'utilisation du site.
                                                                        <br>
                                                                         3.2- En ouvrant un Compte Pronomix, vous déclarez et garantissez que :
                                                                        <br>  3.2.1 vous avez au moins dix-huit (18) ans pour souscrire aux Services, ou l'âge du consentement légal prévu par les lois qui vous sont applicables lors de votre
                                                                        utilisation du site. Vous comprenez que l'utilisation de nos Services n'est pas appropriée aux mineurs et que vous n'aiderez pas un mineur à utiliser un Compte.
                                                                        <br>  3.2.2 vous vous conformerez à tout moment à ces Conditions Générales.
                                                                        <br>  3.2.3 toute information fournie par vous, pour la demande d’un Compte, ou plus tard en liaison avec votre Compte (incluant mais ne se limitant pas au numéro de
                                                                        registre national, nom, pseudo, adresse postale, adresse email et numéro de téléphone) est complète, précise, à jour, non mensongère.
                                                                        <br>  3.2.4 vous comprenez qu'il existe un risque de perdre de l'argent en pronostiquant ou en achetant des tickets sur le site ou via les applications mobiles et que vous êtes entièrement responsable de toutes les
                                                                        pertes encourues.
                                                                        <br>  3.2.5 vous n'avez pas déjà de compte chez nous, n'avez pas eu votre compte suspendu ou clôturé par nous en accord avec nos Conditions Générales, ou n’êtes pas
                                                                        actuellement auto-exclu de notre plateforme.
                                                                        <br>  3.2.6 le jeu doit rester une activité de divertissement. Vous ne devez pas avoir des espérances déraisonnables au sujet des gains que vous pouvez obtenir par le jeu.
                                                                        Vous reconnaissez et comprenez qu'une petite proportion de clients peut souffrir d’une addiction au jeu et peut avoir besoin de l'aide de professionnels afin de
                                                                        traiter et surmonter cette addiction. Referez-vous à notre page <a href="https://demo.pronomix.net/jeu-responsable">"Jeu responsable"</a>,
                                                                        dont le lien est disponible en bas de chaque page du site, pour vous familiariser avec les mesures concernant le jeu responsable prises par Pronomix.
                                                                        <br>  3.2.7 En acceptant ces Conditions Générales vous déclarez que la source de tous les fonds employés par vous sur le site n'est pas illégale et que vous n'utiliserez pas
                                                                        le site pour une activité illégale ou frauduleuse, incluant (sans caractère limitatif) le blanchiment d'argent tel que prévu par toute loi s'appliquant à vous. Vous
                                                                        déclarez également que vous ne pronostiquerez pas sur des événements dans lesquels vous êtes impliqués que ce soit directement ou indirectement,
                                                                        ou des événements sur lesquels vous avez obtenu toute information d'une façon illégale ou non-éthique.
                                                                        <br>  3.2.8 Vous reconnaissez et comprenez que des poursuites pénales et/ou civiles peuvent être intentées contre vous et toutes autres personnes liées à votre
                                                                        participation dans une telle activité, et que nous nous réservons le droit de transmettre, à notre discrétion unique et sans vous en aviser, toute information aux
                                                                        autorités compétentes pour des investigations dans le cas où de telles activités sont suspectées ou reliées à votre compte. Notez par ailleurs que nous sommes
                                                                        en mesure de contacter toute autorité compétente dans le cas où nous suspections des transactions et / ou des activités indiquant un éventuel blanchiment de
                                                                        capitaux. Vous renoncez à tout droit, de quelque nature que ce soit, qui pourrait vous être reconnu, en quelque lieu que ce soit, à raison de la communication
                                                                        des dites informations. En outre, nous nous réservons le droit de séquestrer tous les fonds dont nous pensons qu’ils sont liés à une activité illicite ou frauduleuse,
                                                                        sans avoir à justifier du motif de cette retenue.
                                                                        <br>  3.2.9 Vous ne pouvez pas demander ni ouvrir un Compte si vous agissez en tant que mandataire au nom de quelqu'un d'autre ou pour le Compte ou au profit d’un
                                                                        tiers.<br>  3.2.10 Nous nous réservons le droit de clôturer un Compte et de conserver les soldes de ce Compte lorsque nous avons une suspicion raisonnable que le Compte est
                                                                        utilisé ou contrôlé par une personne autre que la personne nommée comme le propriétaire du compte enregistré et/ou lorsque nous avons une suspicion
                                                                        raisonnable que le Compte est utilisé de manière frauduleuse ou en connexion avec un ou plusieurs affiliés marketing de Pronomix.
                                                                        <br>  3.2.11 Vous ne laisserez pas de tiers utiliser votre Compte, et vous serez entièrement responsable de toutes les pertes provoquées par l’action d’un tiers sur votre
                                                                        Compte. Vous nous informerez immédiatement si vous suspectez qu'un tiers ait obtenu l'accès à votre Compte, et vous nous aiderez pleinement dans nos
                                                                        recherches en la matière.
                                                                        <br>  3.2.12 Vous comprenez que les fonds utilisés pour créditer votre compte Pronomix ne gagnent pas d'intérêt et que vous ne devez pas considérer Pronomix comme toute forme d'institution
                                                                        financière ou bancaire.
                                                                        <br>  3.2.13 Vous comprenez et acceptez que Pronomix interdit l'utilisation de dispositifs robotisés, automatisés, mécaniques, électroniques ou autres pour prendre des
                                                                        décisions automatiques, qu'une telle utilisation soit tentée ou effectuée par vous ou par un tiers. Si Pronomix a des raisons
                                                                        fondées de soupçonner l'utilisation d'un tel dispositif sur sa plateforme, Pronomix se réserve le droit d'annuler tout pronostic ou achats qui aurait pu être réalisé à l'aide d'un tel
                                                                        procédé, et / ou d'exclure un client de toute Promotion dans lequel un tel dispositif aurait pu être utilisé, et / ou de suspendre le Compte en question
                                                                        durant investigation et de clôturer le Compte à sa seule discrétion. Pronomix considère l'utilisation de tels dispositifs comme une tentative de fraude et se réserve
                                                                        le droit, dans un tel cas, de ne pas rembourser le solde du Compte à la clôture de celui-ci et d'annuler tout pronostic ou achat en cours.
                                                                        <br>  3.2.14 Vous ne devez pas demander ni ouvrir un compte si vous êtes situé dans un territoire dans lequel la demande ou l'ouverture d'un Compte et/ou l'utilisation de
                                                                        nos Services n'est pas autorisée, est illégale ou contraire à la loi applicable (« Territoires interdits »). Il est de votre responsabilité de vous assurer que ce n'est pas le cas.
                                                                    </div>


                                                                    <br>
                                                                    <h2 class="fnfC4c" id="introduction">4. Identification</h2>
                                                                    <div class="c-black">
                                                                        Quand vous ouvrez un compte Pronomix, et à tout moment lorsque vous avez un compte chez nous, vous acceptez que nous puissions :
                                                                        <br>  4.1 vous demander la justification de votre identité, âge et origine des fonds et, même si votre Compte a été ouvert, le bloquer à notre discrétion à tout moment si
                                                                        nous ne sommes pas satisfaits de l'information fournie ou en cas de délai dans la fourniture de l'information ;
                                                                        <br>  4.2 vous demander une photo couleur récente de vous tenant vos papiers d'identité si nous avons des doutes sur l'identité réelle du détenteur du Compte ;
                                                                        <br>  4.3 annuler et ne pas rembourser tout achat effectué sur la plateforme et vous interdire de jouer jusqu'à ce que votre identité, âge et/ou l'origine des fonds aient été vérifiés de manière
                                                                        satisfaisante.
                                                                        <br>  4.4 clôturer votre compte en cas de suspicion d'une activité frauduleuse incluant, mais ne se limitant pas à, la fourniture d'informations
                                                                        personnelles frauduleuses, la contrefaçon, la fourniture de documents financiers ou d'identités altérés ou volés, ou l'inscription de comptes multiples.
                                                                        <br><br>
                                                                        <h2 class="fnfC4c" id="introduction">5. Vos informations personnelles</h2>
                                                                        <div class="c-black">
                                                                            Les informations personnelles que nous nous réservons le droit d'exiger pour l'enregistrement complet sont : prénom, nom de famille, civilité, date de naissance,
                                                                            adresse du domicile, email, numéro de téléphone, langue, devise, et n ° de passeport ou de carte d’identité. Vous serez également tenu de fournir des
                                                                            coordonnées. Il est de votre responsabilité de vous assurer que toutes les informations
                                                                            fournies par vous sur le formulaire d'inscription sont précises et à jour car il nous est demandé sous la législation applicable de vérifier les détails entrés par vous
                                                                            avec des documents d'identité et de de paiements dans le but de vérifier votre identité. Vous pouvez accéder à votre compte et éditer certaines de vos
                                                                            informations personnelles, à tout moment dans la section « Mon Compte » du site ou en contactant le Service Clients. Nous nous réservons le droit de changer votre mot de passe et/ou nom de Compte à tout moment, à notre discrétion absolue, et nous vous informerons de
                                                                            toutes les modifications apportées en employant les coordonnées de contact que vous nous avez fournies et nous nous réservons le droit de transmettre vos informations personnelles à des autorités si nous sommes dans l’obligation de le faire en vertu de toute loi,
                                                                            règlement, procédure, ordre des tribunaux ou requête gouvernementale, notamment dans le cadre de la détection et prévention des délits.
                                                                            <br><br>
                                                                            <h2 class="fnfC4c" id="introduction">6. Moyens de paiement</h2>
                                                                            Différents moyens de paiement pourront être utilisés pour acheter des tickets pronostic. Les paiements effectués sur la plateforme sont non remboursables et la valeur des services concernés peut
                                                                            varier à tout moment. Les moyens de paiement retenus sont Orange money, Moov money, MTN Money, Paypal et Visa.
                                                                            <div class="c-black">
                                                                                <br><br>
                                                                                <h2 class="fnfC4c" id="introduction">7. Devises acceptées</h2>
                                                                                Les transactions peuvent être effectuées sous plusieurs devises qui vous sont proposées lors de l'achat de tickets de pronostic. Vos transactions seront faites dans la devise
                                                                                que vous aurez ainsi sélectionnée, à moins que vous n’indiquiez une autre préférence lors de l'opération. Les devises disponibles sont Franc FCA (XOF), l'Euro (€) et le dollar US ($).
                                                                                <div class="c-black">
                                                                                    <br><h2 class="fnfC4c" id="introduction">8. Utilisation de votre compte</h2>
                                                                                      8.1
                                                                                    Votre compte est strictement personnel. Vous ne laisserez pas d'autres personnes utiliser votre compte, pour pronostiquer ou jouer via votre compte, ou l’utiliser pour
                                                                                    accepter le paiement des gains, des bonifications ou des prix. En particulier, vous emploierez vos meilleurs efforts pour empêcher les mineurs et les autres
                                                                                    personnes vulnérables sous votre garde d'utiliser votre compte. Toute tentative par un mineur de s'inscrire et d'ouvrir un Compte, par un joueur d'aider un
                                                                                    mineur à s'inscrire et à ouvrir un compte ou toute activité sur un compte par un mineur peut être reporté aux autorités juridiques locales.
                                                                                    <br>  8.2 Les pronostics sont valides seulement s’ils sont admis par nos serveurs. Jusqu'à l'acceptation du pronostic par nos serveurs, toute information concernant votre/vos pronostics de
                                                                                    Pronomix constitue une simple invitation à jouer.
                                                                                    <br><br>
                                                                                    <h2 class="fnfC4c" id="introduction">9. Règles de jeu</h2>
                                                                                      8.1
                                                                                    Pour Toutes connaitre et savoir sur comment jouer et pronostiquer sur Pronomix, referez-vous à notre page <a href="https://demo.pronomix.net/regles-de-jeu">"Règles de jeu"</a>.
                                                                                    <br><br>
                                                                                    <h2 class="fnfC4c" id="introduction">10. Lots</h2>
                                                                                      10.1
                                                                                    Les lots diverses et temporaires, qui seront diponibles sur la plateforme Pronomix sont à la disposition et à la portée de tout utilisateur possédant un compte. En d'autres termes, vous pouvez prétendre obtenir le ou les
                                                                                    lots de votre choix, uniquement si vous possédez un compte.
                                                                                    <br>  10.2
                                                                                    Pour obtenir un lot de votre choix, il faut posséder le nombre de points necessaire à l'obtention du dit lot.
                                                                                    <br>  10.3
                                                                                    Pour obtenir un lot de votre choix, il faut échanger le nombre de points necessaire contre le lot en question.
                                                                                    <br>  10.4
                                                                                    Vous êtes autorisé à demander et obtenir autant de lots et autant de fois que vous le souhaitez, pourvu que vous possédiez le nombre de points necessaire dans votre balance de points.
                                                                                    <br>  10.5
                                                                                    Pour obtenir le nombre de point necessaire à l'obtention du ou des lots que vous souhaitez, vous devez pronostiquer autant de fois qu'il sera necessaire. Pour en savoir plus sur les pronostics veuillez vous referer à la page <a href="regles_jeu">"Règles de jeu"</a>.
                                                                                    <br>  10.6
                                                                                    La valeur en nombre de points, des lots disponibles n'est en aucun cas lié à une quelquonque devise connue. Elle est établie par les administrateurs de la plateforme Pronomix et peut donc être fixe ou varier dans le temps selon nos désires et besoin.
                                                                                    <br>  10.7
                                                                                    Un lot recu n'est en aucun cas remboursable en biens ou en espèce et celà même si il s'avère être défaillant.
                                                                                    <br>  10.8
                                                                                    En acceptant les valeurs et/ou gains pour un ou plusieurs pronostics justes, vous consentez irrévocablement à l'utilisation de votre nom et/ou de votre prénom plus
                                                                                    l'initiale de votre nom de famille à des fins publicitaires et promotionnelles sans contrepartie additionnelle. Nous pouvons également vous contacter pour vous
                                                                                    demander votre permission de montrer d'autres détails vous concernant, dans ce même cadre.
                                                                                    <br><br>
                                                                                    <h2 class="fnfC4c" id="introduction">11. Clôture de compte</h2>
                                                                                      11.1
                                                                                    Au cas où vous méconnaîtriez l’une des dispositions de ces Conditions Générales, nous nous réservons le droit, à tout moment, sans avertissement préalable, et
                                                                                    sans préjudice de toutes procédures subséquentes qui peuvent être ouvertes, de suspendre ou clôturer votre Compte Pronomix, vous refuser l'accès à l'ensemble ou une
                                                                                    partie de nos Services, refuser en particulier d'accepter de pronostiquer, ou de retirer nos offres promotionnelles dans l’attente de la conclusion de
                                                                                    toutes les procédures. Tout solde positif existant sur votre Compte Pronomix (tickets valables, cumuls de points, historique des paiements etc...) pendant et/ou après la conclusion de toutes les procédures seront définitivement et irrévocablement perdus.
                                                                                    <br>  11.2
                                                                                    Nous et vous sommes autorisés à mettre un terme à cet accord à tout moment. Clôturer votre compte représente le terme de cet accord. Dans le cas d'une
                                                                                    réactivation ou de la réouverture de votre compte par nous, ces Conditions Générales d'Utilisation gouverneront à nouveau votre accès et votre utilisation de la plateforme.
                                                                                    <br>  11.3
                                                                                    À la résiliation de ce contrat par nous ou par vous, sauf disposition contraire, et sous réserve de tous les droits ou obligations nés avant cette rupture, nous serons
                                                                                    mutuellement déchargés de toute obligation l’un envers l’autre.
                                                                                    <br>  11.4
                                                                                    Votre Compte Pronomix sera définitivement clôturé dans un délais de 30 jours après votre demande de suppression de compte.
                                                                                    Vous avez la possibilité de d'arrêt la procédure avant ce delai et de rétablir votre compte Pronomix.
                                                                                    <br>  11.5
                                                                                    Votre Compte Pronomix ne sera pas clôturé tant qu’il ne l’aura pas été par nous ou par vous comme spécifié ci-dessus.
                                                                                    <br><br>
                                                                                    <h2 class="fnfC4c" id="introduction">12. Clôture de compte</h2>
                                                                                    Vous acceptez entièrement de nous défendre et indemniser (honoraires d’avocats y compris), ainsi que nos représentants, directeurs, agents et employés à l’encontre de toutes
                                                                                    action/demande en justice, réclamation, requête, ou plainte faite par un tiers et causée par, ou résultant d'une violation de votre part, à ces Conditions Générales
                                                                                    ou à tous documents auxquels ces Conditions Générales font référence, ou d'une violation de votre part aux lois ou droits des tiers, ou de votre utilisation de la plateforme,
                                                                                    ou de l'utilisation du site par une autre personne utilisant vos coordonnées personnelles (nom d’utilisateur et mot de passe) avec ou sans votre autorisation.<br><br>
                                                                                    <h2 class="fnfC4c" id="introduction">13. Droits de propriété intellectuelle</h2>
                                                                                    Tous les copyrights, marques déposées, brevets et d'autres droits de propriété intellectuelle sur n'importe quel matériel ou contenu (incluant sans limitation,
                                                                                    logiciels, données, applications, information, texte, photographies, musique, bruit, vidéos, graphiques, logos, symboles, dessin-modèle et d'autres images de
                                                                                    matériel ou mobiles) contenu dans le site (« Contenu ») nous appartiennent ou ont été concédés à notre profit par les propriétaires des droits d'usage en tant
                                                                                    qu'élément du Service. Aucune utilisation de ce Contenu et des droits de propriété intellectuelle y afférents sans consentement écrit préalable et exprès du
                                                                                    propriétaire n'est autorisée. Tous les droits sont expressément réservés.En particulier, vous vous interdisez, en ce qui concerne le Contenu (en tout ou en partie), de vous engager dans des activités interdites énumérées ci-dessous
                                                                                    (ensemble, les « Activités Prohibées ») :
                                                                                      13.1
                                                                                    de le vendre, céder, concéder sous-traiter ou conclure tout acte permettant aux tiers d’y accéder, sauf dans la mesure expressément permise ;
                                                                                      13.2
                                                                                    de le changer, l’éditer, le modifier, le restructurer ou l’adapter de n'importe quelle manière ;
                                                                                      13.3
                                                                                    de le copier, le redistribuer, procéder ou de tenter d'accéder au code source dans n'importe quel but ;
                                                                                      13.4
                                                                                    d’employer le site de façon illégale ou pour tout but illégal, ou de toute façon contraire avec ces Conditions Générales.
                                                                                      13.5
                                                                                    Si vous commettez une activité prohibée vous serez entièrement responsable de tous les dommages, coûts et dépenses en découlant.
                                                                                      13.6
                                                                                    Nous vous accordons un droit non-exclusif, non transmissible, non-cessible et personnel de regarder et utiliser le Contenu par l'intermédiaire de votre PC,
                                                                                    téléphone mobile, ou tout autre dispositif d'accès, seulement pour des buts privés et non-commerciaux, et sous réserve de votre observation stricte de ces
                                                                                    Conditions Générales.
                                                                                      13.7
                                                                                    Vous nous informerez immédiatement si vous êtes au courant de l'utilisation non autorisée ou de la copie de n'importe quel Contenu ou n'importe quelle partie
                                                                                    du site ou de n'importe quel accès non autorisé au site ou toute autre activité non autorisée, incluant mais non limitée à n'importe quelle Activité Prohibée en
                                                                                    liaison avec les Services par toute personne (physique ou morale). Vous acceptez de nous fournir toute l'aide raisonnable pour toute recherche que nous
                                                                                    effectuerons conformément aux informations que vous nous fournirez. Vous nous accordez une licence perpétuelle, irrévocable, gratuite, mondiale de
                                                                                    reproduire, virer, modifier, adapter et/ou éditer n'importe quel Contenu fourni par vous à nous, par email ou autrement, sur le site, selon ce qui nous paraît
                                                                                    opportun, sans vous en aviser, sauf mention contraire de votre part dans une telle communication.<br><br>
                                                                                    <h2 class="fnfC4c" id="introduction">14. Erreurs logicielles</h2>
                                                                                      14.1
                                                                                    En cas d'erreur logiciel ou de défaillance, qui est ou qui peut être mise en évidence par Pronomix sur l'un de ses systèmes ou ceux fournis par l'un de ses
                                                                                    fournisseurs, les Pronostics ou les jeux seront annulés. Vous recevrez la somme complète de vos balances et la quasi totalité des tickets pronostics qui vous auront été prélevés.
                                                                                    Pronomix exclut, par la présente, toute nouvelle responsabilité pour une telle défaillance logicielle.
                                                                                    <br>  14.2
                                                                                    Toute utilisateur qui détecte une défaillance sur notre plateforme doit en informer Pronomix aussitôt que la défaillance est découverte en
                                                                                    contactant support@pronomix.net.
                                                                                    <br><br>
                                                                                    <h2 class="fnfC4c" id="introduction">15. Service Client et résolution de conflit</h2>
                                                                                      15.1
                                                                                    Vous devez nous contacter dans les 6 mois si vous avez la moindre question concernant les pronostics ou les lots, ou si vous
                                                                                    avez des questions ou avez besoin d'assistance. À notre seule discretion, toute demande faite au-delà de ce delai de 6 mois pourrait ne pas être prise en
                                                                                    compte. Toutes les communications entre le détenteur du compte et nos équipes sont susceptibles d'être enregistrées, pour des raisons de régulations, de
                                                                                    sécurité ainsi que dans le but de former nos équipes.
                                                                                    <br>  15.2
                                                                                    Nous ne tolérerons aucun comportement insultant, abusif ou violent contre nos employés. Si nous considérons que vous vous comportez d'une telle façon, nous
                                                                                    nous réservons le droit de suspendre et/ou de clôturer votre Compte, et/ou de prendre toutes les autres mesures appropriées.
                                                                                    <br>  15.3
                                                                                    Si vous avez une réclamation, prévenez le service client par email à support@pronomix.net. Nous mettrons en œuvre nos meilleurs efforts pour
                                                                                    résoudre rapidement le problème reporté.
                                                                                    <br><br>
                                                                                    <h2 class="fnfC4c" id="introduction">16. Généralités</h2>
                                                                                      16.1
                                                                                    Nous pouvons reporter la mise en œuvre de nos droits en vertu de ces Conditions Générales sans pour autant y renoncer et sans les perdre.
                                                                                    <br>  16.2
                                                                                    Le fait de ne pas exercer nos droits issus des Conditions Générales ne constitue pas une renonciation générale à ces droits.
                                                                                    <br>  16.3
                                                                                    Nous ne serons pas responsables envers vous pour une non-exécution de ces Conditions Générales due à des circonstances hors de notre contrôle et à des cas
                                                                                    de force majeure.
                                                                                    <br>  16.4
                                                                                    Ces Conditions Générales forment l’intégralité de l’accord conclu entre vous et nous au sujet de votre utilisation du Service et remplacent tous les accords
                                                                                    précédents concernant le Service.
                                                                                    <br>  16.5
                                                                                    Si une partie de ces Conditions Générales est réputée nulle ou inapplicable, alors la disposition nulle ou inapplicable sera considérée remplacée par une
                                                                                    disposition valide et applicable qui reflète le plus fidèlement possible l'intention de la disposition originale et le reste des Conditions Générales continuera à
                                                                                    produire ses pleins effets.
                                                                                    <br><br>
                                                                                    <h2 class="fnfC4c" id="introduction">17. Langue</h2>
                                                                                    La version en langue Française de ces Conditions Générales et de tout contenu du Site prime sur n'importe quelle autre version dans une autre langue, présente
                                                                                    ou à venir.
                                                                                    <br><br>
                                                                                    <h2 class="fnfC4c" id="introduction">18. Loi applicable</h2>
                                                                                    Ce contrat est régi par les lois de Côte d'ivoire, dont les juridictions sont exclusivement compétentes pour régler tout conflit qui en découle. Nous ne pouvons accepter
                                                                                    de responsabilité en vertu des lois d’une autre juridiction.
                                                                                    <br><br>
                                                                                    <h2 class="fnfC4c" id="promotion">19. Promotions</h2>
                                                                                      19.1
                                                                                    Vous pouvez être éligible pour participer aux programmes ou campagnes publicitaires sur nos différents cannaux de communication, dont les conditions et émissions
                                                                                    seront à notre discrétion, et non transmissibles.
                                                                                    N'importe quel publicité offerte par nous (incluant mais ne se limitant pas à des publicités de bienvenue ou de remise de lots) nous appartient.
                                                                                    <br>

                                                                                    <div class="c-black">


                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                        </div></div></div></div></header>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Terms Modal -->

<!-- Terms Modal -->
<div class="modal fade modalbox" id="regleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Regles du jeu</h5>
                <a href="#" data-bs-dismiss="modal">Fermer</a>
            </div>
            <div class="modal-body">
                <div class="tabs tabs--menu tabs--scrollable">
                    <div class="tabs__contents" style="text-align: left">
                        <div id="tabSummary" class="isActive">
                            <section style="text-align: justify;">
                                <article class="GIxHAe">
                                    <div class="">
                                        <div class="">
                                            <div class="ugt2L">
                                                <div class="">
                                                    <div class="N5YmOc kJXJmd">
                                                        <header class="mSUZQd">
                                                            <div class="jbRlDc">

                                                                <div class="ISnqu">
                                                                    <p>
                                                                        <a style="color: #000;" href="#introduction"><b>1. PRONOMIX, QU'EST CE QUE C'EST?</b></a><br>
                                                                        <a style="color: #000;" href="#type"><b>2. LES DIFFERENTS TYPES DE PRONOSTICS</b></a><br>
                                                                        <a style="color: #000;" href="#comment_ca_marche"><b>3. COMMENT CA MARCHE?</b></a><br>
                                                                        <a style="color: #000;" href="#pronostiquez"><b>4. COMMENT PRONOSTIQUER?</b></a><br>
                                                                        <a style="color: #000;" href="#principes"><b>5. PRINCIPES DE VALIDATIONS ET D'ENREGISTREMENT DES COUPONS PRONOSTICS SUR PRONOMIX</b></a><br>
                                                                        <a style="color: #000;" href="#gains"><b>6. CALCUL DES GAINS</b></a><br>
                                                                        <a style="color: #000;" href="#recompneses"><b>7. RECOMPENSES</b></a><br>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </header>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="GIxHAe">
                                    <div class=" XLK0Od Aovece">
                                        <div class="ahh38c">
                                            <div class="ugt2L">
                                                <div class="">
                                                    <div class="N5YmOc kJXJmd">
                                                        <header class="mSUZQd">
                                                            <div class="jbRlDc">
                                                                <br>
                                                                <h2 class="fnfC4c" id="introduction">1. PRONOMIX, QU'EST CE QUE C'EST?</h2>
                                                                <div class="ISnqu">
                                                                    <div class="c-black">
                                                                        Pronomix est une plateforme de pronostics sur des rencontres sportives. Chaque utilisateur a la possibilité de pronostiquer pour gagner des lots mis en jeu.
                                                                    </div>

                                                                    <br>
                                                                    <h2 class="fnfC4c" id="type">2. LES DIFFERENTS TYPES DE PRONOSTICS</h2>
                                                                    <div class="c-black">
                                                                        Sur Pronomix, il existe deux types de pronostics:<br>
                                                                         <b>2.1 Pronostic simple</b><br>
                                                                        Un pronostic simple est un pronostic valide d'une seule et unique rencontre enregistré sur un coupon de pronostic.
                                                                        <br> <b>2.2 Pronostic multiple</b><br>
                                                                        Un pronostic multiple est un ensemble de pronostics valides de plusieurs rencontres, enregistré sur un seul et même coupon pronostic.

                                                                        <br>

                                                                        <br><h2 class="fnfC4c" id="comment_ca_marche">3. COMMENT CA MARCHE?</h2>
                                                                        <div class="c-black">
                                                                             <b>3.1 Première étape: création de son compte.</b><br>
                                                                            Pour que vos pronostics soient pris en compte, vous devez posséder un compte Pronomix qui n'est
                                                                            autorisé qu'aux personnes agée de 18 ans ou plus. <a href="https://demo.pronomix.net/register">cliquez ici si vous souhaitez créer
                                                                                un compte Pronomix</a> ou vous pouvez vous <a href="https://demo.pronomix.net/login">connecter en cliquant ici</a> si vous possédez déjà un compte.
                                                                            <br> <b>3.2 Deuxième étape: Pronostiquez!</b><br>
                                                                            Pronostiquer c'est le fait de deviner juste l'issue d'une rencontre. Pour qu'un pronostic soit pris en compte sur Pronomix, vous devez vous rendre
                                                                            à la <a href="https://demo.pronomix.net/matchs-disponibles">liste des rencontres disponibles</a>, selectionner une rencontre et faire un choix parmis différentes issues proposées.
                                                                            Pour valider votre pronostic,
                                                                            vous devez posséder au moins un <a href="https://demo.pronomix.net/obtenir-tickets">ticket de pronostics</a>.
                                                                            A chaque issue de rencontre est attribué une valeur (ou cote) qui peut varier selon l'enjeu, la nature de la competition ou
                                                                            selon les performences des équipes qui s'affrontent.
                                                                            Votre pronostic est considéré juste lorsque l'issue du match concorde avec votre choix parmi ceux qui vous seront proposés.
                                                                            <br> <b>2.3 Gagnez des points!</b><br>
                                                                            A chaque pronostic juste, vous cumulez des points dans votre balance que vous pouvez echanger contre des lots mis en jeu.
                                                                        </div>


                                                                        <br>
                                                                        <h2 class="fnfC4c" id="pronostiquez">4. COMMENT PRONOSTIQUER?</h2>
                                                                        <div class="c-black">
                                                                            Pour pronostiquer, selectionnez une recontre dans <a href="#">la liste des rencontres disponibles</a>, choisir un ou plusieurs pronostics et
                                                                            les valider avec au moins un ticket.
                                                                            <br> <b>4.1 Enregistrer un pronostic simple</b><br>
                                                                            Pour enregister un pronostic simple, vous devez cliquer sur la rencontre de votre choix et selectionner le pronostic qui
                                                                            vous convient. Ensuite cliquez sur <b>"pronostic rapide"</b> et validez le pronostic avec le nombre de tickets pronostics que vous souhaitez.
                                                                            votre gain sera calculé automatiquement et en fonction du nombre de tickets utilisés.
                                                                            <br> <b>4.2 Enregistrer un pronostic multiple</b><br>
                                                                            Pour enregister un pronostic multiple, vous devez d'abord constituer liste de pronostics valide dans votre coupon de pronostic multiple.
                                                                            <br>  <b>4.2.1 Qu'est ce qu'un coupon de pronostics multiple</b><br>
                                                                            Un coupon de pronostics multiple est une liste personnalisée de pronostics que l'utilisateur peut constituer
                                                                            dans le but de tous les valider en un seul coupon.
                                                                            <br>
                                                                        </div>
                                                                        <br>
                                                                        <h2 class="fnfC4c" id="principes">5. PRINCIPES DE VALIDATIONS ET D'ENREGISTREMENT DES COUPONS PRONOSTICS SUR PRONOMIX</h2>
                                                                        <div class="c-black">
                                                                            Sur pronomix, pour qu'un coupon pronostic soit valide, celui-ci doit respecter les principes de jeu
                                                                            établies comme suit:
                                                                            <br> <b>5.1 Selection de rencontres valide</b><br>
                                                                            Une rencontre est déclarée valide et apte à être ajoutée à un coupon de pronostic si et seulement si, au moment du pronostic,
                                                                            elle reste disponible dans la liste des rencontre et que sa date de la rencontre n'est toujours pas passée.
                                                                            <br> <b>5.2 Pronostic valide</b><br>
                                                                            Pour qu'un pronostic soit valide il faudrait:
                                                                            <br>-qu'il soit toujours disponible dans la liste des pronostics, associé à la rencontre.
                                                                            <br>-que la date de la rencontre reste encore à venir.

                                                                            <br> <b>5.3 Coupon de pronostics valide</b><br>
                                                                            Pour qu'un coupon de pronostics soit valide et apte à être enregistré, il faudrait:
                                                                            <br>-Au préablable que tous les pronostics sélectionnés soit valides et que les rencontres associées soient encore disponibles au moment du pronostic.
                                                                            <br>-Dans le cas d'un pronostic simple, le coupon devra contenir un pronostic unique.
                                                                            <br>-Dans le cas d'un pronostic multiple, le coupon devra contenir un maximum de 20 pronostics différents.
                                                                            <br>-Dans le cas d'un pronostic multiple, le coupon devra contenir un au minimum 2 et au maximum de 20 pronostics différents.
                                                                            <br>-Le coupon devra être validé avec au minimum 1 et au maximum 100 tickets
                                                                            <br>-Un coupon validé ne peut être annulé.
                                                                            <br>-Les tickets utilisés pour valider votre coupon ne sont pas remboursables
                                                                        </div>
                                                                        <br>
                                                                        <h2 class="fnfC4c" id="gains">6. CALCUL DES GAINS </h2>
                                                                        <div class="c-black">
                                                                            Le calcul des gains sur pronomic repond à la logique suivante:
                                                                            <br> <b>6.1 Calcul des gains de pronostic simple</b><br>
                                                                            Pour un pronoctic simple, le gain est calculé selon la formule suivante:<br>
                                                                            <strong style="color: #006951; font-size: 18px;">[Cote du pronostic selectionné]*[Nombre de tickets utilisés pour valider le coupon]*97,3</strong>.
                                                                            <br>
                                                                            Exemple de calcul de gains de pronostics simple:<br>
                                                                            Victoire Barcelone <span class="badge-green" style="font-size: 15px !important;">2.30</span><br>
                                                                            Tickets utilisé: 3<br>
                                                                            (2.30 x 3 x 97,30) = 671,37 points
                                                                            <br> <b>6.2 Calcul des gains de pronostics multiple</b><br>
                                                                            Pour un pronoctic multiple, le gain est calculé selon la formule suivante:<br>
                                                                            <strong style="color: #006951; font-size: 18px;">[Somme des cotes des pronostics selectionnés]*[Nombre de tickets utilisés pour valider le coupon]*97,3</strong>.
                                                                            <br>
                                                                            Exemple de calcul de gains de pronostics multiple:<br>
                                                                            Victoire Barcelone <span class="badge-green" style="font-size: 15px !important;">2.30</span><br>
                                                                            Victoire Réal Madrid <span class="badge-green" style="font-size: 15px !important;">1.30</span><br>
                                                                            +1,5 buts AC Milan <span class="badge-green" style="font-size: 15px !important;">1.81</span><br>
                                                                            Liverpool marque au moins 1 but dans le match <span class="badge-green" style="font-size: 15px !important;">1.17</span><br>
                                                                            Tickets utilisé: 3<br>
                                                                            (2.30 + 1.30 + 1.81 + 1.17) x (3 x 97,30) = 1 920,70 points
                                                                        </div>
                                                                        <br>
                                                                        <h2 class="fnfC4c" id="recompenses">7. RECOMPENSES</h2>
                                                                        <div class="c-black">
                                                                            Chaque utilisateur pourra échanger ses points gagnés contres des lots mis en jeu.
                                                                            Une fois la demande de lots enclanchée, il est impossible d'annuler l'opération et les lots recupéré ne sont
                                                                            ni remboursables, ni remplaçables.
                                                                            <br>


                                                                        </div>
                                                                    </div>

                                                                </div></div></header></div></div></div></div></div></article>
                            </section>
                        </div>
                    </div>
                </div>
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

    $("#formRegister").submit(function (e) {
        $('#loader').show();
    });
</script>

</body>

</html>
