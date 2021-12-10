<!--Accueil -->
<?php
session_start();
include('header.php');
include('navbar.php');
?>

    <section id="index" style="display: list-item; background-color: #fff; padding-bottom: 10px; padding-top:0px;">
        <div>
            <p class="logo_debut_de_page">
                <!-- Charger une image depuis les fichiers-->
                <img src="image/logo-dos.png" alt="Logo" title="Pas touche au lion" class="img-logo-debut-de-page" width="648.1" height="656.8" style="margin: auto; padding-bottom:0;">
            </p>
        </div>
    </section>
    <!-- Famille-->
    <section class="page-section bg-white" id="film">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase text-blanc">Bienvenue sur le site </h2>
                <h3 class="section-subheading text-muted">Rentre tes coordonées et découvre le message de bienvenue que le Prez ta concocté.</h3>
                <form method="post" action="famille.php">
                    <p>
                        <label class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" for="Nom">Votre Nom :</label>
                        <input type="text" name="Nom" id="Nom" placeholder="Ex: BRESNU ^_^ (EN MAJ)" />
                    </p>
                    <p>
                        <label class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" for="Prenom">Votre Prenom :</label>
                        <input type="text" name="Prenom" id="Prenom" placeholder="Ex: Arthur ^_^ " />
                    </p>
                    <button type="submit" class="btn btn-primary col-md-2" style="text-align: center; background: #a74128; border: solid #a74128;">Decouvre le message</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Les Rubriques-->
    <section class="page-section" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Les Rubriques</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4" style="margin: auto;">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="la_cour.php">
                            <img class="img-fluid" src="image/Acceuil/La_cour.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="lignes_embrasees.php">
                            <img class="img-fluid" src="image/Acceuil/Lignes_Embrasees.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="banquet_matinal.php">
                            <img class="img-fluid" src="image/Acceuil/banquet.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="nos_metrages.php">
                            <img class="img-fluid" src="image/Acceuil/metrages.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="t_ponch.php">
                            <img class="img-fluid" src="image/Acceuil/T_ponch.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="planigramme.php">
                            <img class="img-fluid" src="image/Acceuil/planigramme.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="mecenes.php">
                            <img class="img-fluid" src="image/Acceuil/mecenes.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include('footer.php');
?>