<?php

require_once 'inc/header.inc.php';
require_once 'inc/init.php';
require_once 'inc/functions.php';

?>


<section class="logincontent">
    <div class="login">
        <div class="row loginrow">
            <div class="col-6 logincol-6">
                <div class="logincard">
                    <img src="assets/img/doll.jpg">
                </div>
                <div class="logintext">
                    <p class="logintitre">SELAMAT DATANG DI ILEARNING</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolore in facere repudiandae, officiis quod id vero voluptatibus obcaecati nesciunt eos aspernatur sunt voluptate cum deserunt facilis tempora aperiam expedita.</p>
                </div>
            </div>
            <div class="col logincol">
                <div class="logincard">
                    <img src="assets/img/fantasy.jpg">
                </div>
                <form class="loginform">
                    <div class="mb-3">
                    <label for="inputEmail" class="col-mb-3 col-form-label text-success"> Username / Email</label>
                    <input type="email" class="form-control is-valid inputEmail" placeholder="Email">
                    </div>
                    <div class="mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label text-danger">Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control is-invalid inputPassword" placeholder="Password">
                    </div>
                    <div class="col-sm-4">
                        <small class="text-danger passwordHelp">
                        mot de passe erroné
                        </small>      
                    </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="CheckLog">
                        <label class="form-check-label" for="CheckLog">Veuillez cocher la case pour continuer</label>
                        <a href="#" class="text-success mdpof">mdp oublié ?</a>
                    </div>
                    <button type="submit" class="btn btn-success loginbutton"><a>LOGIN</a></button>
                    <div class="loginbuttontext">
                        <p>Lorem ipsum dolor sit amet consectetur <a href="inscription.php" class="text-success">Horreur</a></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>


 
<!-- lien js perso -->
<script src="assets/js/script.js"></script>

<?php
require_once 'inc/footer.inc.php';