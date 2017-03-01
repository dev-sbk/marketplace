<?php
require_once "config/config.php";
require_once ROOT . "models/inc.php";
require_once ROOT . "controllers/Controller.php";
$params = explode('/', $_GET['p']);
$controller = $params[0];
require_once ROOT . "controllers/" . $controller . ".php";
$controller = new $controller();
$action = isset($params[1]) ? $params[1] : 'index';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="<?= WEBROOT . "views/src/img/favicon.ico"?>"/>
    <title>My Marketplace</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link rel='stylesheet' href='<?= WEBROOT . "views/src/css/edd.css" ?>' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= WEBROOT . "views/src/css/bootstrap.min.css" ?>' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= WEBROOT . "views/src/css/style.css" ?>' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= WEBROOT . "views/src/css/font-awesome.css" ?>' type='text/css' media='all'/>
    <link href="<?= WEBROOT . "views/src/css/skins/blue.css" ?>" rel="stylesheet">

</head>
<body>
<div class="boxedlayout">
    <!-- HEADER
    ================================================== -->
    <nav id="wow-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href='<?=WEBROOT."home/index"?>'>
                    <img alt="Kailo" src="<?= WEBROOT . "views/src/img/logo.png" ?>"/>
                </a>
            </div>
            <!-- Menu -->
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul id="menu-top" class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?=WEBROOT."home/index"?>">ACCUEIL</a></li>
                    <li><a href="<?=WEBROOT."shop/index"?>">boutique</a></li>
                    <li><a href="checkout.html">GATEGORIES</a></li>
                    <li><a href="checkout.html">PRODUITS</a></li>
                    <li><a href="checkout.html">NEWSLETTER</a></li>
                    <li><a href="<?=WEBROOT."contactez/index"?>">CONTACT</a></li>
                    <li><a href="<?=WEBROOT."register/index"?>">CONNEXION</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- PAGE CONTENT
   <?php
    if (method_exists($controller, $action)) {
        unset($params[0]);
        unset($params[1]);
        call_user_func_array(array($controller, $action), $params);
    } else echo "Erreur 404";
    ?>

    <!-- MAIN CONTENT ENDS -->
    <!-- CALL TO ACTION
    ================================================== -->
    <div class="actionbeforefooter text-center">
        <div class="container">
            <span><i class="fa fa-star fa-spin"></i> Livraison offerte dès 30€ et exclusivité membres : 10€ de remise dès 40€ d'achats hors points rouges. Code : RELAX</span>
            <a target="_blank" class="actionbutton" href="#">Buy Now </a>
        </div>
    </div>

    <!-- FOOTER
    ================================================== -->
    <footer class="themefooter section medium-padding bg-graphite">
        <div class="container">
            <div class="section-inner row">
                <div class="column column-1 col-md-4 rightbd">
                    <div class="widgets">
                        <div class="widget widget_text">
                            <div class="widget-content">
                                <h3 class="widget-title">About &nbsp; &#8220;Kailo&#8221;</h3>

                                <div class="textwidget">
                                    You are previewing "Kailo", a premium HTML bootstrap template that will help you
                                    design your website for selling videos, ebooks, photos, audio, software, podcasts or
                                    any other type of file. The Wordpress version provides a fully functional shop
                                    ready.
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /footer-a -->
                <div class="column column-1 col-md-4 rightbd">
                    <div class="widgets">
                        <div class="widget widget_wysija">
                            <div class="widget-content">
                                <h3 class="widget-title">ABONNEZ-VOUS À NOTRE NEWSLETTER</h3>

                                <div class="widget_wysija_cont">
                                    <form class="widget_wysija">
                                        Abonnez-vous à notre newsletter et rejoignez nos 1374 abonnés.
                                        <p class="wysija-paragraph">
                                            <label>Email <span class="wysija-required">*</span></label>
                                            <input type="text" name=""
                                                   class="wysija-input validate[required,custom[email]]" title="Email"
                                                   value=""/>
                                        </p>
                                        <input class="wysija-submit wysija-submit-field" type="submit"
                                               value="INSCRIPTION"/>
                                    </form>
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /footer-b -->
                <div class="column column-1 col-md-4">
                    <div class="widgets">
                        <div class="widget widget_edd_categories_tags_widget">
                            <div class="widget-content">
                                <h3 class="widget-title">SHOP CATÉGORIES</h3>
                                <ul class="edd-taxonomy-widget">
                                    <li><a href="#">Banners</a></li>
                                    <li><a href="#">Graphics</a></li>
                                    <li><a href="#">Logos</a></li>
                                    <li><a href="#">Photoes</a></li>
                                    <li><a href="#">Vintage</a></li>
                                </ul>
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /footer-c -->
                <div class="clear">
                </div>
            </div>
            <!-- /footer-inner -->
        </div>
        <!-- /grid -->
        <div class="sectioncredits">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
						<span class="credits-left fleft">
						&copy; Tous droits réservés, Saber Ben Khalifa </span>
                        <ul class="footermenu fright">
                            <li><a href="<?=WEBROOT."home/index"?>">Accueil</a></li>
                            <li><a href="<?=WEBROOT."shop/index"?>">Boutique</a></li>
                            <li><a href="<?=WEBROOT."contactez/index"?>">Contact</a></li>
                            <li><a href="<?=WEBROOT."register/index"?>">Connexion</a></li>
                        </ul>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
            <!-- /grid -->
        </div>
        <!-- /sectioncredits -->
    </footer>
    <!-- /footer -->
    <script type='text/javascript' src='<?= WEBROOT . "views/src/js/jquery.js" ?>'></script>
    <script type='text/javascript' src='<?= WEBROOT . "views/src/js/bootstrap.min.js" ?>'></script>
    <script type='text/javascript' src='<?= WEBROOT . "views/src/js/masonry.js" ?>'></script>
    <script type='text/javascript' src='<?= WEBROOT . "views/src/js/imagesloaded.js" ?>'></script>
    <script type='text/javascript' src='<?= WEBROOT . "views/src/js/SmoothScroll.js" ?>'></script>
    <script type='text/javascript' src='<?= WEBROOT . "views/src/js/init.js" ?>'></script>
    <script type='text/javascript' src='<?= WEBROOT . "views/src/js/anim.js" ?>'></script>
</div>

<!-- DEMO BEGIN - DOES NOT APPEAR ON ORIGINAL FILES, FOR DEMO PURPOSED ONLY -->
<style>
    /* =================================================================== */
    /* Styles Switcher for Demo
    ====================================================================== */

    #style-switcher {
        background-color: #fff;
        width: 180px;
        position: fixed;
        top: 200px;
        z-index: 9999;
        border-radius: 0 0 10px 0;
        left: -185px;
        -webkit-box-shadow: 2px 3px 3px rgba(0, 0, 0, 0.3);
        box-shadow: 2px 3px 3px rgba(0, 0, 0, 0.3);
    }

    #style-switcher div {
        padding: 5px 10px;
    }

    #style-switcher h2 {
        background-color: #444;
        color: #fff;
        padding: 0;
        font-size: 13px;
        padding: 13px 0 11px 13px;
    }

    #style-switcher h2 a {
        background-image: url(<?=WEBROOT."views/src/img/demo/settings-icon.png"?>);
        background-repeat: no-repeat;
        background-position: 9px center;
        background-color: #fff;
        display: block;
        height: 44px;
        position: absolute;
        right: -39px;
        text-indent: -9999px;
        top: 0;
        width: 39px;
        border-radius: 0 5px 5px 0;
        -webkit-box-shadow: 1px 2px 1px rgba(0, 0, 0, 0.3);
        box-shadow: 1px 2px 1px rgba(0, 0, 0, 0.3);
    }

    #style-switcher h3 {
        letter-spacing: 0.5px;
        color: #373737;
        font-size: 13px;
        margin: 5px 0 5px 3px;
    }

    .colors {
        list-style: none;
        margin: 0px 0px 10px 0px;
        overflow: hidden;
    }

    .colors li {
        float: left;
        margin: 2px;
        border: solid 1px #fff;
        text-align: center;
        line-height: 30px;
        font-weight: 600;
    }

    .colors li a {
        display: block;
        width: 30px;
        height: 30px;
        cursor: pointer;
    }

    #reset {
        margin: 0 0 10px 2px;
    }

    #reset a {
        color: #fff;
        font-size: 12px;
        padding: 5px 14px;
        box-shadow: none;
        border-radius: 1px;
    }

    .blue {
        background-color: #25c5ed;
    }

    .bluedark {
        background-color: #3a97b1;
    }

    .gold {
        background-color: #daa520;
    }

    .green {
        background-color: #b3d656;
    }

    .orange {
        background-color: #fd9e02;
    }

    .pink {
        background-color: #f36;
    }

    .red {
        background-color: #ff6666;
    }

    #layout-style {
        background-color: #fff;
        color: #373737;
        font-weight: 600;
        margin-left: 2px;
        margin-bottom: 15px;
    }

    .bg1 {
        background-image: url("<?=WEBROOT."views/src/img/07/black-and-white-hd-wallpapers-wallpaper-street-wallpaper-other-photo-hd-black-and-white-wallpaper.jpg"?>");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg2 {
        background-image: url("<?=WEBROOT."views/src/img/07/tumblr_n1ipr3bTo11st5lhmo1_1280.jpg"?>");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg3 {
        background-image: url("<?=WEBROOT."views/src/img/07/beachppl.jpg"?>");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg4 {
        background-image: url("<?=WEBROOT."views/src/img/07/Camera-Black-and-White-Photography-HD-Wallpaper.jpg"?>");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg5 {
        background-image: url("<?=WEBROOT."views/src/img/07/07/tumblr_n7yhezarqF1st5lhmo1_1280.jpg"?>");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg6 {
        background-image: url("<?=WEBROOT."views/src/img/07/07/tumblr_n10n4rpjvZ1st5lhmo1_1280.jpg"?>");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg7 {
        background-image: url(<?=WEBROOT."views/src/img/intro.jpg"?>);
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg8 {
        background-image: url(<?=WEBROOT."views/src/img/06/slide1.jpg"?>);
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg9 {
        background-image: url(<?=WEBROOT."views/src/img/06/orangeheader-1024x640.png"?>);
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg10 {
        background-image: url(<?=WEBROOT."views/src/img/bg.jpg"?>);
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg11 {
        background-image: url(<?=WEBROOT."views/src/img/slide3.jpg"?>);
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bg12 {
        background-image: url(<?=WEBROOT."views/src/img/12/stream-14358.jpg"?>);
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .bgr {
        padding: 0 !important;
    }

    .colors li a.active {
        box-shadow: 0 0 0 1px #ddd inset;
        border-radius: 50%;
    }

    @media only screen and (max-width: 767px) {
        #style-switcher {
            display: none;
        }
    }

    @media (min--moz-device-pixel-ratio: 1.3),
    (-o-min-device-pixel-ratio: 2.6/2),
    (-webkit-min-device-pixel-ratio: 1.3),
    (min-device-pixel-ratio: 1.3),
    (min-resolution: 1.3dppx) {
        #style-switcher h2 a {
            background: url(<?=WEBROOT."views/src/img/demo/settings-icon.png"?>) no-repeat 9px center transparent;
            background-size: 21px;
            background-color: #404040;
        }
    }

    .boxedlayout {
        background-color: #fff;
    }

    body.boxed {
        background-image: url(<?=WEBROOT."views/src/img/03/green_nature_dual_monitor-other.jpg"?>);
        background-position: top center;
        background-attachment: fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
    }

    body.boxed, body.boxed #wow-menu.navbar-default {
        width: 90%;
        margin: 0px auto;
    }
</style>

<link rel="stylesheet" href="#" id="colors"/>
</body>

<!-- Mirrored from www.wowthemes.net/demo/kailo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2016 07:24:44 GMT -->
</html>