<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BFSTAG | Welcome</title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- End Preloader -->

        <section class="contact-form-section">
            <div class="auto-container">
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12 mx-auto">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Bienvenue dans notre communauté</h2>
                        </div>
                        <h6 class="sec-user-name">M/Mme {{ $user['lastname'] }}</h6>
                        <h6 class="sec-title-6">Votre compte a été créé avec succès.</h6>
                        <p>
                            Nous avons envoyé un email contenant vos informations d'identification.
                            Si vous avez des questions ou avez besoin d'aide, n'hésitez pas à nous contacter. <br>
                            Toute la communauté vous remercie.
                        </p>
                        <a href="{{ route('index') }}" class="login-link">revenir à l'accueil</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- End PageWrapper -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {});

    </script>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Revolution Slider -->
    <script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/plugins/revolution/js/main-slider-script.js"></script>
    <!-- For Js Library -->

    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/nav-tool.js"></script>
    <script src="assets/js/validate.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>
