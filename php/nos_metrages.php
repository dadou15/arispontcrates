<!--Film&Clip -->
<?php
include('header.php');
include('navbar.php');
?>

<section class="page-section min-vh-100" id="Nos_metrages">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Nos Métrages</h2>
        <h3 class="section-subheading text-muted">Arispont'crates mais aussi acteurs dans l'âme. (Un peu de patiente tout arrive apès l'amphi)</h3>
    </div>

<?php
$dateamphi = new DateTime('2021-12-14 20:00:00');
$date = new DateTime(null, new DateTimeZone('Europe/Paris'));
if ($date>=$dateamphi) {
    echo '
    <div class="row" style="margin: auto;">
        <div class="col-lg-4 col-sm-6 mb-4" style="margin: auto;">
            <div class="portfolio-item">
                <a>
                    <h3>Découvre en avant première notre film La Braise, la nouvelle Pont\'réalité en tendance à Champs-sur-Marne.</h3>
                    <video src="image/Film_Clip/film.mp4" width="800" height="450" controls></video>
                </a>
            </div>
        </div>
    </div>
    <div class="row" style="margin: auto;">
        <div class="col-lg-4 col-sm-6 mb-4" style="margin: auto;">
            <div class="portfolio-item">
                <a>
                    <h3>Découvre le clip des Arispont\'crates et n\'oublie pas: "Baise moi la main comme un Arispont\'crates"</h3>
                    <video src="image/Film_Clip/clip.mp4" width="800" height="450"  controls></video>
                </a>
            </div>
        </div>
    </div>';
}
?>
</section>

<?php
include('footer.php');
?>