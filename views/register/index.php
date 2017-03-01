<!-- PAGE CONTENT
    ================================================== -->
<div class="templatemyaccount">

    <!-- TITLE BEGINS -->
    <div class="headerimage" style="background-image: url(<?= WEBROOT . "views/src/img/03/header.jpg);"?>">
        <div class="headercontent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fleft">
                            <h1>Mon Compte</h1>
                        </div>
                        <div class="fright breadc">
                            <a href="<?=WEBROOT."home/index"?>">Accueil</a> / Connexion
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TITLE ENDS -->

    <div class="container padtop40 padbot50">
        <div class="row">
            <!-- MAIN CONTENT BEGINS -->
            <div class="col-md-12">
                <div class="wraplogin">
                    <form id="edd_login_form" class="edd_form" action="#" method="post">
                        <fieldset>
                            <legend>Connectez-vous à votre compte</legend>
                            <p>
                                <label>Nom d'utilisateur</label>
                                <input name="edd_user_login" id="edd_user_login" class="required edd-input" type="text" title="Username" placeholder="Entrer votre pseudo"/>
                            </p>
                            <p>
                                <label>Mot de passe</label>
                                <input name="edd_user_pass" id="edd_user_pass" class="password required edd-input" type="password" placeholder="Entrer votre mot de passe"/>
                            </p>
                            <p>
                                <input id="edd_login_submit" type="submit" class="edd_submit" value="Connexion"/>
                            </p>
                            <p class="edd-lost-password">
                                <a href="#" title="Lost Password">
                                    Mot de passe oblié? </a>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <span class="or">Ou</span>
                <div class="wrapregister">
                    <form id="edd_register_form" class="edd_form" action="#" method="post">
                        <fieldset>
                            <legend>Enregistrer un nouveau compte</legend>
                            <p>
                                <label>Nom d'utilisateur</label>
                                <input id="edd-user-login" class="required edd-input" type="text" name="edd_user_login" title="Username" placeholder="Entrer votre pseudo"/>
                            </p>
                            <p>
                                <label>Email</label>
                                <input id="edd-user-email" class="required edd-input" type="email" name="edd_user_email" title="Email Address" placeholder="Entrer votre email"/>
                            </p>
                            <p>
                                <label>Mot de passe</label>
                                <input id="edd-user-pass" class="password required edd-input" type="password" name="edd_user_pass" placeholder="Entrer votre mot de passe"/>
                            </p>
                            <p>
                                <label>Confirmer mot de passe</label>
                                <input id="edd-user-pass2" class="password required edd-input" type="password" name="edd_user_pass2" placeholder="Confirmer votre mot de passe"/>
                            </p>
                            <p>
                                <input class="button" name="edd_register_submit" type="submit" value="Inscription"/>
                            </p>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- MAIN CONTENT ENDS -->

        </div>
    </div>
</div>