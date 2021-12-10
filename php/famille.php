<?php
session_start();
$db_password = $_ENV["mysql_password"];
$con = new mysqli('db', 'arispontcrates_user', $db_password, 'arispontcrates');
if ($con->connect_error) {
    header('Location: connexion.php?erreur=bdderror');
	exit();
}

$postData = $_POST;

include('header.php');
include('navbar.php');
$Nom = $postData['Nom'];
$Prenom = $postData['Prenom'];

if ($req = $con->prepare('SELECT famille FROM familles WHERE Nom = ? AND Prenom = ?')) {
	$req->bind_param('ss', $Nom, $Prenom);
    $req->execute();
    $req->store_result();
}

if ($req->num_rows > 0) {
	$req->bind_result($famille);
    $req->fetch();
}


if ($famille == 'A') { ?>
    <img src="image/famille/A_pres.png" alt="Logo" class="img-logo-debut-de-page" width="500.1" height="500.8" style="margin: auto; padding-bottom:0;">
<?php
} else if ($famille == 'C') { ?>
    <img src="image/famille/C_pres.png" alt="Logo" class="img-logo-debut-de-page" width="500.1" height="500.8" style="margin: auto; padding-bottom:0;">
<?php
} else if ($famille == 'D') { ?>
    <img src="image/famille/D_pres.png" alt="Logo" class="img-logo-debut-de-page" width="500.1" height="500.8" style="margin: auto; padding-bottom:0;">
<?php
} else if ($famille == 'M') { ?>
    <img src="image/famille/M_pres.png" alt="Logo" class="img-logo-debut-de-page" width="500.1" height="500.8" style="margin: auto; padding-bottom:0;">
<?php
} else if ($famille == 'S') { ?>
    <img src="image/famille/S_pres.png" alt="Logo" class="img-logo-debut-de-page" width="500.1" height="500.8" style="margin: auto; padding-bottom:0;">
<?php
} else if ($famille == 'W') { ?>
    <img src="image/famille/W_pres.png" alt="Logo" class="img-logo-debut-de-page" width="500.1" height="500.8" style="margin: auto; padding-bottom:0;">
<?php
} else if ($famille == 'Z') { ?>
    <img src="image/famille/Z_pres.png" alt="Logo" class="img-logo-debut-de-page" width="500.1" height="500.8" style="margin: auto; padding-bottom:0;">
<?php
} else { ?>
    <img src="image/famille/PasDeFamille_pres.png" alt="Logo" class="img-logo-debut-de-page" width="500.1" height="500.8" style="margin: auto; padding-bottom:0;">
<?php
}
?>


    <section class="page-section" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Les Rubriques</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4" style="margin: auto;">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="La_cour.php">
                            <img class="img-fluid" src="image/Acceuil/La_cour.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="Lignes_Embrasees.php">
                            <img class="img-fluid" src="image/Acceuil/Lignes_Embrasees.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="Banquet_Matinal.php">
                            <img class="img-fluid" src="image/Acceuil/banquet.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="Nos_Metrages.php">
                            <img class="img-fluid" src="image/Acceuil/metrages.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="T_Ponch.php">
                            <img class="img-fluid" src="image/Acceuil/T_Ponch.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="Planigramme.php">
                            <img class="img-fluid" src="image/Acceuil/planigramme.jpg" alt="" style="border-radius: 15px;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="Mecenes.php">
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