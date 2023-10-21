<div class="top-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="http://localhost/wp">
                        <h1 style="color:  #000080;  font-size: 30px;"><img src="http://localhost/wp/wp-content/themes/ArtiTheme/assets/img/WhatsApp Image 2023-09-08 at 19.30.16.jpeg" alt="Logo ArtiWeb" style="width: 250px; height: 100px;" class="arti"></h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Horaires d'ouvertures</h3>
                                <p>Lundi - Vendredi (9:00 - 21:00)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Téléphone</h3>
                                <p>(+212) 532-432066</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-send-mail"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Adresse e-mail</h3>
                                <p>contact@artiweb.ma</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">
                            <!-- <img src="http://localhost/wp/wp-content/themes/ArtiTheme/assets/img/WhatsApp Image 2023-09-08 at 19.30.16.jpeg" width="100px" height="auto" alt="Logo ArtiWeb"/> -->
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="<?= get_site_url(); ?>" class="nav-item nav-link active">Accueil</a>
                                <a href="<?= get_site_url(); ?>/a-propos-artiweb-agence-de-communication/" class="nav-item nav-link">À propos</a>
                                <!-- <a href="" class="nav-item nav-link">Service</a> -->
                                <a href="<?= get_site_url(); ?>/nos-services/" class="nav-item nav-link">Nos services</a>
                               
                                <!-- <a href="#applicationsSection" class="nav-item nav-link">Application</a> -->
                                <a href="<?= get_site_url(); ?>/applications/" class="nav-item nav-link">Application</a>
                                <a href="<?= get_site_url(); ?>/#projects" class="nav-item nav-link">Projects</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Nos offres</a>
                                    <div class="dropdown-menu">
                                        <a href="<?= get_site_url(); ?>/demandez-un-devis/" class="dropdown-item">Devis</a>
                                        <a href="<?= get_site_url(); ?>/forfait/" class="dropdown-item">Forfait</a>
                                    </div> 
                                </div>
                                <a href="<?= get_site_url(); ?>/contactez-nous/" class="nav-item nav-link">Contactez Nous</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-primary" href="<?= get_site_url(); ?>/contactez-nous/" id="evaluationBtn" data-toggle="modal" data-target="#evaluationModal" >Evaluation gratuite</a>

                                <!-- Boîte de dialogue modale -->
                                <!-- <div class="modal fade" id="evaluationModal" tabindex="-1" role="dialog" aria-labelledby="evaluationModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content" style="margin-top: -900px">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="evaluationModalLabel">Entrez vos informations</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="ser.php" method="post">
                                        <div class="form-group">
                                          <label for="inputNom">Nom et Prénom *</label>
                                          <input type="text" class="form-control" id="inputNom" placeholder="Entrez votre nom" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputTelephoneOrMail">Email *</label>
                                          <input type="text" class="form-control" id="inputTelephoneOrMail"
                                            placeholder="Entrez votre numéro de téléphone ou adresse e-mail" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputOptionsServices">Téléphone *</label>
                                          <input type="text" class="form-control" id="inputOptionsServices"
                                            placeholder="Entrez votre Téléphone" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputCourriel">Société</label>
                                          <input type="email" class="form-control" id="inputCourriel" placeholder="Entrez votre Société">
                                        </div>
                                        <div class="form-group">
                                            <label for="selectSecteurActivite">Sélectionnez votre secteur d'activité</label>
                                            <select class="form-control" id="selectSecteurActivite">
                                                <option value="architecture">Architecture</option>
                                                <option value="service">Service</option>
                                                <option value="industries">Industries</option>
                                                <option value="enseignement">Enseignement</option>
                                                 <option value="sante">Santé</option>
                                                 Ajoutez autant d'options que nécessaire -->
                                            <!-- </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="selectService">Sélectionnez un service</label>
                                            <select class="form-control" id="selectService">
                                                <option value="strategieDigitale">Stratégie Digitale</option>
                                                <option value="creationContenus">Création De Contenus</option>
                                                <option value="seo">SEO</option>
                                                <option value="socialAds">Social ADS</option>
                                                <option value="seaDisplay">SEA et Display</option>
                                                <option value="seaDisplay"> Display</option>
                                            Ajoutez autant d'options que nécessaire 
                                            </select>
                                        </div>  
                                        
                                        
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                      <button type="button" class="btn btn-primary" onclick="envoyerInformations()">Envoyer</button>
                                    </div>
                                  </div>
                                </div>  
                                
                              </div>-->
                              <!-- Placez ce script JavaScript dans votre page HTML ou dans un fichier externe --> 
                          
        </div>
</div>
</nav>
</div>
</div>