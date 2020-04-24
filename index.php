<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SFXP</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Core theme CSS (assets/includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="icon" href="./assets/images/iconBox.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/venobox.css" type="text/css" media="screen" />

    <style>
    .container {
        position: relative;
        text-align: center;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .play {
        font-size: 5em;
        color: white;
    }

    .play:hover {
        font-size: 6em;
    }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img id="imgLogo"
                    src="./assets/images/fxlogo.png" /><span id="logoName">SFXP Trading Academy</span></a><button
                class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">
                        Welcome to SFXP Trading Academy
                    </h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">
                        <?php
                 if(isset($_SESSION["userId"])){

                     echo '
                     Start Forex now with Sbu Forex Pro we guarantee that we can educate you
                     and empower you with the best skills to make money and be your
                      boss.
                    ';
                }
                 else{
                    echo 'Start Forex now with Sbu Forex Pro we guarantee that we can educate you
                    and empower you with the best skills to make money and be your
                    boss. To join <a class ="link" href ="login.php">login</a> / <a class ="link" href ="signup.php">register</a> with us';
                }
                ?>
                    </p>
                    <?php
                 if(isset($_SESSION["userId"])){

                     echo '<form action="./assets/includes/logout.inc.php" method="post">
                     <button type="submit" name="logout-submit" class="btn btn-primary btn-xl js-scroll-trigger"  >Logout</button>
                     </form>';
                }
                 else{
                 echo '<a class="btn btn-primary btn-xl js-scroll-trigger" href="login.php"
                 >Login</a
               >';
                }
            
        ?>
                </div>
            </div>
        </div>
    </header>
    <!-- About section-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">What we offer ?</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">
                        We offer you eligible and trust worthy resources for you to know how the market works and how to
                        use the tools to make money in the coomfort of your mobile device. With Sbu Fx Pro you will know
                        when to buy and sell and become comfortable in making trades.

                    </p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">At Your Service</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Earn</h3>
                        <p class="text-muted mb-0">
                            We will teach you how to generate money at your own pace while living a comnfortable
                            lifestyle to take of your needs and at avery low risk by giving all the tools needed to do
                            so.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-mobile-alt text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Make money</h3>
                        <p class="text-muted mb-0">
                            We offer you a way of making money in the comfort of your devices such as mobile device,
                            tablets or Laptop. Now you can make money easily wherever you go.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                        <h3 class="h4 mb-2">get connected</h3>
                        <p class="text-muted mb-0">
                            Understand how the global market works for you to understand how exchange rates work for you to trade without risk.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-exchange-alt text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Exchange rates</h3>
                        <p class="text-muted mb-0">
                            Know when to buy and sell trades. Become familiar with charts of currencies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio section-->
    <!-- Portfolio section-->
    <section id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">

                <div class="col-lg-4 col-sm-6 lightbox">
                    <img class="img-fluid" src="assets/images/video_1.png" alt="" />
                    <div class="centered"><a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="https://youtu.be/Uksl6BjrxY8"><i class="fa fa-play-circle play"></i></a></div>
                </div>
                <div class="col-lg-4 col-sm-6 lightbox">
                    <img class="img-fluid" src="assets/images/video_2.png" alt="" />
                    <div class="centered"><a a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="https://youtu.be/23w1hSpvCnw"><i class="fa fa-play-circle play"></i></a></div>
                </div>
                <div class="col-lg-4 col-sm-6 lightbox">
                    <img class="img-fluid" src="assets/images/video.png" alt="" />
                    <div class="centered"><a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="https://youtu.be/dHwq6sJDFNk"><i class="fa fa-play-circle play"></i></a></div>
                </div>
                <div class="col-lg-4 col-sm-6 lightbox">
                    <img class="img-fluid" src="assets/images/video_3.png" alt="" />
                    <div class="centered"><a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="https://youtu.be/NQIK5N8jH6c"><i class="fa fa-play-circle play"></i></a></div>
                </div>
                <div class="col-lg-4 col-sm-6 lightbox">
                    <img class="img-fluid" src="assets/images/video_4.png" alt="" />
                    <div class="centered"><a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="https://youtu.be/zka2nAWS6SA"><i class="fa fa-play-circle play"></i></a></div>
                </div>
                <div class="col-lg-4 col-sm-6 lightbox">
                    <img class="img-fluid" src="assets/images/video_5.png" alt="" />
                    <div class="centered"><a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="https://youtu.be/qyAr2E_XS8I"><i class="fa fa-play-circle play"></i></a></div>
                </div>

            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="page-section bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Download our Terms of Use Privacy Policy</h2>
            <a class="btn btn-light btn-xl" href="assets/doc/SFXP_TRADING_ACADEMY terms of use privacy policy.docx.pdf"
                download>Download Now!</a>
        </div>
    </section>
    <!-- Contact section-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">
                        Get in touch with for more information and any quetions. Email, call or whatsapp and become a
                        member of the Sbu Fx Pro Trading Academy.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>whatsapp: +27-672677164</div>
                    <div>calls +27-676476765</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a
                        class="d-block" href="mailto:contact@yourwebsite.com">sbufxpro@gmail.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">
                Copyright © 2020 - SFXP Trading Academy
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/scripts.js"></script>
    <!-- video  -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/venobox.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".venobox").venobox({
            framewidth: "400px", // default: ''
            frameheight: "300px", // default: ''
            border: "10px", // default: '0'
            bgcolor: "#d6370cs", // default: '#fff'
            titleattr: "data-title", // default: 'title'
            numeratio: true, // default: false
            infinigall: true, // default: false
            share: ["facebook", "twitter", "download"], // default: []
            arrowsColor: "#d6370c",
        });
    });
    </script>
</body>

</html>