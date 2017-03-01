<!-- TITLE BEGINS -->
<div class="headerimage homeimg text-center"
     style="background-image: url(<?= WEBROOT . "views/src/img/03/homebanner.jpg" ?>);">
    <div class="headercontent home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 data-scrollreveal="enter top over 1.9s after 0.2s">LE MEILLEUR DES MEILLEURS</h1>

                    <p class="lead" data-scrollreveal="enter bottom over 1.9s after 0.4s">
                        Magasiner Les Meilleurs Vendeurs
                    </p>
                    <a target="_blank" data-scrollreveal="enter bottom over 1.0s after 1.6s" href="#"
                       class="homeimgbtn">
                        Obtenir Maintenant</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TITLE ENDS -->
<!-- MAIN CONTENT BEGINS -->
<div id="homepagetemplate" class="container padtop10 padbot40">
    <div class="row">
        <div class="col-md-12">
            <div class="clear text-center sectionlatestitems">
                <h2 class="maintitle">DERNIERS PRODUITS</h2>

                <div class="separatr">
							<span>
							<a href="shop.html" class="view-all"><i class="fa fa-reorder"></i></a>
							</span>
                </div>
            </div>
            <div class="wowitemboxlist sectionlatestitems clear">

                <?php
                foreach ($prods as $key => $val) {
                    ?>
                    <div class="wowitembox">
                        <div class="wowitemboxinner">
                            <div class="imagearea">
                                <img width="555" height="370" src="http://localhost/img/03/5_1-150x150.jpg"
                                     class="attachment-post-thumbnail wp-post-image" alt="163_1"/>

                                <div class="caption">
                                    <div class="blur">
                                    </div>
                                    <div class="caption-text">
                                        <div class="captionbuttons">
                                            <a href="productsingle.html" class="captiondetails"><i
                                                    class="fa fa-link"></i> VOIR PLUS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="notesarea">
                                <a href="productsingle.html">
                                    <h2><?php echo $prods[$key]->getNom(); ?></h2>
                                </a>

                                <div class="description">
                                    <p>
                                        <?php echo $prods[$key]->getDesignation(); ?>
                                    </p>
                                </div>
                                <div class="notesbottom">
                                    <div class="price fleft">
                                        $<?php echo $prods[$key]->getPrix(); ?>
                                    </div>
                                    <div class="cart fright">
                                        <a href="#" class="edd-add-to-cart">
                                            <span class="edd-add-to-cart-label">Add to Cart</span>
                                        </a>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .wowitemboxinner-->
                    </div>
                    <!-- .wowitembox-->
                <?php } ?>

            </div>
            <!-- .wowitemboxlist-->

            <div class="clear">
            </div>
            <div class="divider1">
            </div>
            <div class="row text-center seactionitemfeatures">
                <div class="narrowheader">
                    <h2 class="maintitle">CARACTÉRISTIQUES DU PRODUIT</h2>
                    56.000 clients ne peuvent pas se tromper. Nous offrons un soutien et des mises à jour gratuite à vie
                    pour tous nos articles! QUELQUES TRES BELLE DEVISE POUR QUITTER. FAITES VOS VISITEURS AIME LES
                    PRODUITS!
                </div>
            </div>
            <div class="col-md-4">
                <div class="featurebox">
                    <h2><i class="fa fa-gift"></i> Item Support </h2>
                    Duis suscipit dapibus massa, in placerat metus iaculis ut. Praesent semper risus elit. Nam
                    rutrum ipsum id sagittis egestas ulla eget nunc.
                </div>
            </div>
            <div class="col-md-4">
                <div class="featurebox">
                    <h2><i class="fa fa-trophy"></i> Free Updates </h2>
                    Duis suscipit dapibus massa, in placerat metus iaculis ut. Praesent semper risus elit. Nam
                    rutrum ipsum id sagittis egestas ulla eget nunc.
                </div>
            </div>
            <div class="col-md-4">
                <div class="featurebox">
                    <h2><i class="fa fa-bullhorn"></i> Boxed &#038; Wide </h2>
                    Duis suscipit dapibus massa, in placerat metus iaculis ut. Praesent semper risus elit. Nam
                    rutrum ipsum id sagittis egestas ulla eget nunc.
                </div>
            </div>
            <div class="col-md-4">
                <div class="featurebox">
                    <h2><i class="fa fa-cogs"></i> Theme Options </h2>
                    Duis suscipit dapibus massa, in placerat metus iaculis ut. Praesent semper risus elit. Nam
                    rutrum ipsum id sagittis egestas ulla eget nunc.
                </div>
            </div>
            <div class="col-md-4">
                <div class="featurebox">
                    <h2><i class="fa fa-anchor"></i> Optional Sidebars </h2>
                    Duis suscipit dapibus massa, in placerat metus iaculis ut. Praesent semper risus elit. Nam
                    rutrum ipsum id sagittis egestas ulla eget nunc.
                </div>
            </div>
            <div class="col-md-4">
                <div class="featurebox">
                    <h2><i class="fa fa-cloud-download"></i> Built for EDD </h2>
                    Duis suscipit dapibus massa, in placerat metus iaculis ut. Praesent semper risus elit. Nam
                    rutrum ipsum id sagittis egestas ulla eget nunc.
                </div>
            </div>
            <div class="clear">
            </div>
            <div class="divider1">
            </div>
            <div class="clear text-center sectionbestseller">
                <h2 class="maintitle">TOP VENDUS</h2>

                <div class="separatr">
                        <span style="font-size: 0.77em;text-transform:uppercase;"><i class="fa fa-star"></i>&nbsp; NOS ACHETEURS FAVORIS &nbsp; <i
                                class="fa fa-star"></i></span>
                </div>
            </div>
            <div class="wowitemboxlist sectionbestseller clear">

                <div class="wowitembox">
                    <div class="wowitemboxinner">
                        <div class="imagearea">
                            <img width="555" height="370" src="<?= WEBROOT . "views/src/img/03/133_1.jpg" ?>"
                                 class="attachment-post-thumbnail wp-post-image" alt="133_1"/>

                            <div class="caption">
                                <div class="blur">
                                </div>
                                <div class="caption-text">
                                    <div class="captionbuttons">
                                        <a href="productsingle.html" class="captiondetails"><i
                                                class="fa fa-link"></i> VOIR PLUS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notesarea">
                            <a href="productsingle.html">
                                <h2>Typing Good</h2>
                            </a>

                            <div class="description">
                                <p>
                                    Sed ac scelerisque ligula, ac aliquam ligula. Vivamus ut pellentesque nisi, vel
                                    com.
                                </p>
                            </div>
                            <div class="notesbottom">
                                <div class="price fleft">
                                    $27.00
                                </div>
                                <div class="cart fright">
                                    <a href="#" class="edd-add-to-cart">
                                        <span class="edd-add-to-cart-label">Add to Cart</span>
                                    </a>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .wowitemboxinner-->
                </div>
                <!-- .wowitembox-->

                <div class="wowitembox">
                    <div class="wowitemboxinner">
                        <div class="imagearea">
                            <img width="555" height="370" src="<?= WEBROOT . "views/src/img/03/181_1.jpg" ?>"
                                 class="attachment-post-thumbnail wp-post-image" alt="181_1"/>

                            <div class="caption">
                                <div class="blur">
                                </div>
                                <div class="caption-text">
                                    <div class="captionbuttons">
                                        <a href="productsingle.html" class="captiondetails"><i
                                                class="fa fa-link"></i> VOIR PLUS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notesarea">
                            <a href="productsingle.html">
                                <h2>Old Game</h2>
                            </a>

                            <div class="description">
                                <p>
                                    Sed ac scelerisque ligula, ac aliquam ligula. Vivamus ut pellentesque nisi, vel
                                    com.
                                </p>
                            </div>
                            <div class="notesbottom">
                                <div class="price fleft">
                                    $33.00
                                </div>
                                <div class="cart fright">
                                    <a href="#" class="edd-add-to-cart">
                                        <span class="edd-add-to-cart-label">Add to Cart</span>
                                    </a>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .wowitemboxinner-->
                </div>
                <!-- .wowitembox-->

                <div class="wowitembox">
                    <div class="wowitemboxinner">
                        <div class="imagearea">
                            <img width="555" height="370" src="<?= WEBROOT . "views/src/img/03/168_1.jpg" ?>"
                                 class="attachment-post-thumbnail wp-post-image" alt="168_1"/>

                            <div class="caption">
                                <div class="blur">
                                </div>
                                <div class="caption-text">
                                    <div class="captionbuttons">
                                        <a href="productsingle.html" class="captiondetails"><i
                                                class="fa fa-link"></i> VOIR PLUS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notesarea">
                            <a href="productsingle.html">
                                <h2>Bananas</h2>
                            </a>

                            <div class="description">
                                <p>
                                    Sed ac scelerisque ligula, ac aliquam ligula. Vivamus ut pellentesque nisi, vel
                                    com.
                                </p>
                            </div>
                            <div class="notesbottom">
                                <div class="price fleft">
                                    $6.50
                                </div>
                                <div class="cart fright">
                                    <a href="#" class="edd-add-to-cart">
                                        <span class="edd-add-to-cart-label">Add to Cart</span>
                                    </a>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .wowitemboxinner-->
                </div>
                <!-- .wowitembox-->

                <div class="wowitembox">
                    <div class="wowitemboxinner">
                        <div class="imagearea">
                            <img width="555" height="370" src="<?= WEBROOT . "views/src/img/03/5_1.jpg" ?>"
                                 class="attachment-post-thumbnail wp-post-image" alt="5_1"/>

                            <div class="caption">
                                <div class="blur">
                                </div>
                                <div class="caption-text">
                                    <div class="captionbuttons">
                                        <a href="productsingle.html" class="captiondetails"><i
                                                class="fa fa-link"></i> VOIR PLUS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notesarea">
                            <a href="productsingle.html">
                                <h2>Sandy Banner</h2>
                            </a>

                            <div class="description">
                                <p>
                                    Sed ac scelerisque ligula, ac aliquam ligula. Vivamus ut pellentesque nisi, vel
                                    com.
                                </p>
                            </div>
                            <div class="notesbottom">
                                <div class="price fleft">
                                    $8.00
                                </div>
                                <div class="cart fright">
                                    <a href="#" class="edd-add-to-cart">
                                        <span class="edd-add-to-cart-label">Add to Cart</span>
                                    </a>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .wowitemboxinner-->
                </div>
                <!-- .wowitembox-->

            </div>
            <!-- .wowitemboxlist-->
        </div>
    </div>
</div>