<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BFSTAG | Join us</title>
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
        <!-- Header Style One -->
        <header class="main-header">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container clearfix" style="height: 50px;">
                    </div>
                </div>
            </div>
        </header>
        <!-- End Main Header -->

        <!-- Contact Form Section -->
        <section class="contact-form-section">
            <div class="auto-container">
                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                            <img src="assets/images/BFSTAG.jpg" alt="" class="logo-img-responsive" />
                    </div>
                </div>
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12 mx-auto">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Prêt à nous rejoindre? Remplissez le formulaire!</h2>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="#">
                                @csrf
                                <div class="row clearfix">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <span class="icon flaticon-user-4"></span>
                                        <input type="text" name="firstname" placeholder="Nom" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <span class="icon flaticon-user-4"></span>
                                        <input type="text" name="lastname" placeholder="Prénom" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <span class="icon flaticon-telephone"></span>
                                        <input type="text" name="phone" placeholder="Numéro de téléphone" required>
                                        <span class="phone-error-message"></span>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <span class="icon flaticon-telephone"></span>
                                        <input type="text" name="whatsapp" placeholder="Numéro Whatsapp" required>
                                        <span class="whatsapp-error-message"></span>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-6 col-sm-12">
                                        <span class="icon flaticon-location"></span>
                                        <input type="text" name="address" placeholder="Adresse" required>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <span class="icon flaticon-envelope"></span>
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <span class="icon flaticon-book"></span>
                                        <select name="sector" class="custom-select-box" style="max-height: 50px; overflow-y: auto;">
                                            <option>Filière</option>
                                            <option>Sciences</option>
                                            <option>⁠Ingénierie</option>
                                            <option>Arts et lettres</option>
                                            <option>Santé</option>
                                            <option>Banque ou Finance</option>
                                            <option>Marketing</option>
                                            <option>Informatique</option>
                                            <option>Droit</option>
                                            <option>Agriculture</option>
                                            <option>Autre</option>
                                        </select>
                                        <span class="sector-error-message"></span>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <span class="check-title mb-2">As-tu un business ?</span><br>
                                        <div class="form-check form-check-inline radio-wrapper">
                                            <label>
                                                <input class="form-check-input" type="radio" id="business-yes" name="business" value="yes">
                                                <span class="form-check-label">Oui</span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline radio-wrapper">
                                            <label>
                                                <input class="form-check-input" type="radio" id="business-no" name="business" value="no" checked>
                                                <span class="form-check-label">Non</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 business-select" style="display: none;">
                                        <span class="icon flaticon-work-table"></span>
                                        <select name="business" class="custom-select-box">
                                            <option>Sélectionner le domaine</option>
                                            <option>Commerce de détail</option>
                                            <option>Service professionnel</option>
                                            <option>Technologie & Informatique</option>
                                            <option>Restauration & Alimentation</option>
                                            <option>Santé & Bien-être</option>
                                            <option>Autre</option>
                                        </select>
                                        <span class="business-error-message"></span>
                                    </div>

                                    <!-- Form Group -->
                                    <span class="submit-error"></span>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-three submit-btn" type="submit" name="submit-form"><span class="txt">Soumettre</span></button>
                                        <div id="loading" class="loading" style="display: none;">
                                            <div class="spinner"></div>
                                            <span>Envoi en cours...</span>
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>
                        <!-- eND Contact Form -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Form Section -->



    </div>
    <!-- End PageWrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
        <button class="close-search"><span class="flaticon-up-arrow"></span></button>
        <form method="post" action="blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('input[type="radio"]').click(function() {
                if ($(this).attr("value") == "yes") {
                    $(".business-select").show();
                } else {
                    $(".business-select").hide();
                }
            });
            $('input[name="phone"]').on('input', function() {
                formatPhoneNumber($(this), $('.phone-error-message'));
            });
            $('input[name="whatsapp"]').on('input', function() {
                formatPhoneNumber($(this), $('.whatsapp-error-message'));
            });

            $('form').on('submit', function(event) {
                event.preventDefault();
                // Récupérer les valeurs des champs
                let firstname = $('input[name="firstname"]').val();
                let lastname = $('input[name="lastname"]').val();
                let phone = $('input[name="phone"]').val();
                let whatsapp = $('input[name="whatsapp"]').val();
                let selectedSector = $('select[name="sector"]').val();
                let selectedBusiness = $('select[name="business"]').val();
                if (selectedSector === "Filière") {
                    $('.sector-error-message').text('Aucune filière n\'a été selectionnée');
                    $('.sector-error-message').css('color', 'red');
                } else {
                    $('.sector-error-message').text('');
                }

                if (selectedBusiness === "Sélectionner le domaine") {
                    $('.business-error-message').text('Aucun domaine sélectionné');
                    $('.business-error-message').css('color', 'red');
                    selectedBusiness = '';
                } else {
                    $('.business-error-message').text('');
                }
                let formData = {
                    _token: $('input[name="_token"]').val()
                    , firstname: $('input[name="firstname"]').val()
                    , lastname: $('input[name="lastname"]').val()
                    , phone: $('input[name="phone"]').val()
                    , whatsapp: $('input[name="whatsapp"]').val()
                    , address: $('input[name="address"]').val()
                    , email: $('input[name="email"]').val()
                    , sector: $('select[name="sector"]').val()
                    , business: $('select[name="business"]').val()
                , };

                $('submit-error').text('');
                sendData(formData);
            });


            function sendData(formData) {
                $.ajax({
                    type: "POST"
                    , url: "{{ route('auth.join-us-action') }}"
                    , data: formData
                    , beforeSend: function() {
                        $('.submit-btn').hide();
                        $('#loading').show();
                    }
                    , success: function(response) {
                        if (response.status_code === 200) {
                            window.location.replace("{{ route('auth.mailsentwelcome') }}");
                        } else {
                            $('.submit-error').text(response.message);
                            $('.submit-error').css('color', 'red');
                        }
                    }
                    , error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                    , complete: function() {
                        $('.submit-btn').show();
                        $('#loading').hide();
                    }
                });
            }


            function formatPhoneNumber(input, errorClass) {
                let val = input.val().replace(/\D/g, '');
                if (val.startsWith('226')) {
                    val = val.slice(0, 11);
                } else if (val.startsWith('233')) {
                    val = val.slice(0, 12);
                } else {
                    val = val.slice(0, 12);
                }
                if (val.startsWith('226') || val.startsWith('233')) {
                    val = '+' + val;
                    errorClass.text('');
                } else {
                    errorClass.text('Le numéro doit commencer par 226 ou 233.');
                    errorClass.css('color', 'red');
                }
                if (val.length === 0) {
                    errorClass.text('');
                }
                input.val(val);
            }
        });

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
