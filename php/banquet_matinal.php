<!--Petit_dej -->
<?php
session_start();
include('header.php'); 
include('navbar.php');
?>

    <section class="page-section bg-white" id="petitdej">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase text-blanc">Banquet Matinal</h2>
                <h3 class="section-subheading text-muted">Compose ton banquet matinal à ta guise et profite de mets succulents qui te seront apportés à ta demeure mercredi matin.</h3>
            </div>
            <form action="ptitdejrep.php" method="post">

                <div class="form-group" style="margin-top: 10px;">
                    <div class="form-row">
                        <div class="col-lg-2" >
                            <h3><label for="selection_tartine">Tartine:</label></h3>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="tartine" name="tartine">
                                <option value="Nutella">Nutella</option>
                                <option value="Confiture">Confiture d'abricot + beurre</option>
                                <option value="Confiture">Confiture d'abricot sans beurre</option>
                                <option value="Confiture">Confiture de fraise + beurre</option>
                                <option value="Confiture">Confiture de fraise sans beurre</option>
                                <option value="Aucune">Je suis en seche</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-lg-2">
                            <h3><label for="selection_viennoiserie">Viennoiserie:</label></h3>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="viennoiserie" name="viennoiserie">
                                <option value="Croissant">Croissant</option>
                                <option value="Pain au chocolat">Pain au chocolat</option>
                                <option value="Aucune">Je suis en seche</option>
                            </select>
                        </div>


                    </div>
                </div>
                
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-lg-2">
                            <h3><label for="selection_Sale">Salé:</label></h3>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="Sale" name="Sale">
                                <option value="Oeufs">Oeufs</option>
                                <option value="Oeufs_legumes">Oeufs+tomates/oignons/poivrons</option>
                                <option value="Aucune">Je suis en seche</option>
                            </select>
                        </div>


                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-lg-2">
                            <h3><label for="selection_boisson">Boisson:</label></h3>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="boisson" name="boisson" style="margin-top: 0%">
                                <option value="Lait au chocolat">Chocolat</option>
                                <option value="Thé">Thé</option>
                                <option value="Café">Café</option>
                                <option value="Verre de lait">Verre de lait</option>
                                <option value="Aucun">Rien</option>
                            </select>
                        </div>
                        <div class="col-lg-2" >
                            <h3><label for="jus-select">Jus de fruit:</label></h3>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" id="jus" name="jus">
                                <option value="Jus d'orange">Jus d'orange</option>
                                <option value="Jus de pomme">Jus de pomme</option>
                                <option value="Jus d'ananas">Jus d'ananas</option>
                                <option value="Aucun">J'ai pas soif</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-lg-2">
                            <h3><label for="nom">Identité:</label></h3>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-lg-2">
                            <h3><label for="telephone">Ton 06?</label></h3>
                        </div>
                        <div class="col-md-3">
                            <input type="tel" class="form-control" id="telephone" name="telephone">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-2">
                            <h3><label for="Logement">T'habite ou?</label></h3>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" id="res" name="res">
                                <option value="Meunier">Meumeu</option>
                                <option value="Perronet">Perro</option>
                                <option value="Perronet">Place Rose</option>
                                <option value="Autre...">Autre...</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="appartement" name="appartement" placeholder="Appartement">
                        </div>
                        <div class="col-md-6">
                            <input style="margin-top: 0%;" type="text" class="form-control" id="autre_adresse" name="autre_adresse" placeholder="Adresse si t'habite ni à Meumeu ni à Perro ni à Plaace Rose">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div>
                            <h3><label for="heure">Heure</label></h3>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" id="heure" name="heure">
                                <option value="7h30">7h30</option>
                                <option value="7h45">7h45</option>
                                <option value="8h00">8h00</option>
                                <option value="8h15">8h15</option>
                                <option value="8h30">8h30</option>
                                <option value="8h45">8h45</option>
                                <option value="9h00">9h00</option>
                                <option value="7h30">9h15</option>
                                <option value="7h45">9h30</option>
                                <option value="8h00">9h45</option>
                                <option value="8h15">10h00</option>
                                <option value="8h30">10h15</option>
                                <option value="8h45">10h30</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-4">
                            <h3><label for="message">Un petit message pour nous?</label></h3>
                        </div>
                        <div class="col-md-11">
                            <textarea class="form-control" id="commentaire" name="commentaire" rows="3" placeholder="Vous etes vraiment les plus beaux"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group" style=" text-align:center;">
                    <div class="form-row" style=" text-align:center;">
                        <div class="col-md-3" style=" text-align:center;"></div>
                        <button type="submit" class="btn btn-primary col-md-2" style="text-align: center; background: #8b0404; border: solid #8b0404;">A mercredi!</button>
                    </div>

                </div>
            </form>
        </div>
    </section>

<?php 
include('footer.php'); 
?>