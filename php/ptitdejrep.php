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
$Nom = $postData['nom'];
$Prenom = $postData['prenom'];
$tartine = $postData['tartine'];
$viennoiserie = $postData['viennoiserie'];
$Sale = $postData['Sale'];
$boisson = $postData['boisson'];
$jus = $postData['jus'];
$telephone = $postData['telephone'];
$res = $postData['res'];
$appartement = $postData['appartement'];
$autre_adresse = $postData['autre_adresse'];
$heure = $postData['heure'];
$commentaire = $postData['commentaire'];

// Enregistrons les informations de date dans des variables

$day = date('d');

$year = date('Y');


if (($year>2021)||($year==2021 && $day>12)){?>
    <h1 style="text-align: auto;">Il fallait arriver a l'heure dommage pour toi ;).</h1>

    <button class="btn btn-primary col-md-2" href='index.php' style="text-align: center; background: #8b0404; border: solid #8b0404;">Retour au site </button>
<?php
    return;
}

if (!$Prenom || !$Nom || !$telephone) {?>
    <h1 style="text-align: auto;">Il faut au moins un nom, un prenom et un telephone pour soumettre le formulaire. Votre requete a été ignorer.</h1>
    
    <a href="index.php"><button class="btn btn-primary col-md-2" style="text-align: center; background: #8b0404; border: solid #8b0404;">Retour au site </button></a>
<?php
    return;
}

if ($req = $con->prepare('INSERT INTO `ptidej` ( `prenom`, `nom`, `telephone`, `res`, `appartement`, `autre_adresse`, `heure`, `tartine`, `viennoiserie`, `Sale`, `boisson`, `jus`, `commentaire`) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')) {
	$req->bind_param('sssssssssssss', $Prenom, $Nom, $telephone, $res, $appartement, $autre_adresse, $heure, $tartine, $viennoiserie, $Sale, $boisson, $jus, $commentaire);
    $req->execute();
}

?>

    <h1>Commande ajoutée avec succès !</h1>

    <div class="card">

        <div class="card-body">
            <p class="card-text"><b>Nom</b> : <?php echo strip_tags($Nom); ?></p>
            <p class="card-text"><b>Prenom</b> : <?php echo strip_tags($Prenom); ?></p>
            <p class="card-text"><b>Telephone</b> : <?php echo strip_tags($telephone); ?></p>
            <p class="card-text"><b>Residence</b> : <?php echo strip_tags($res); ?></p>
            <p class="card-text"><b>Appartement</b> : <?php echo strip_tags($appartement); ?></p>
            <p class="card-text"><b>Adresse si t'habite ni à Meumeu ni à Perro nni à Plaace Rose</b> : <?php echo strip_tags($autre_adresse); ?></p>
            <p class="card-text"><b>Heure</b> : <?php echo strip_tags($heure); ?></p>
            <p class="card-text"><b>Tartine</b> : <?php echo strip_tags($tartine); ?></p>
            <p class="card-text"><b>Viennoiserie</b> : <?php echo strip_tags($viennoiserie); ?></p>
            <p class="card-text"><b>Salé</b> : <?php echo strip_tags($Sale); ?></p>
            <p class="card-text"><b>Boisson</b> : <?php echo strip_tags($boisson); ?></p>
            <p class="card-text"><b>Jus</b> : <?php echo strip_tags($jus); ?></p>
            <p class="card-text"><b>Commentaire</b> : <?php echo strip_tags($commentaire); ?></p>
        </div>
        <a href="index.php"><button class="btn btn-primary col-md-2" style="text-align: center; background: #8b0404; border: solid #8b0404;">Retour au site </button></a>
    </div>

<?php
include('footer.php');
?>