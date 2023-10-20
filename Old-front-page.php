
<?php 
    get_header(); 
?>


<body style="overflow-x: hidden;">
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="<?= get_site_url(); ?>">
                                    <h1 style="color:  #000080;  font-size: 30px;"  ><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/WhatsApp Image 2023-09-08 at 19.30.16.jpeg" alt="Logo ArtiWeb" style="width: 250px; height: 100px;" class="arti"></h1>
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
                                            <h3>Opening Hour</h3>
                                            <p>Mon - Fri, 9:00 - 23:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>+0532-432066</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>Contact@artiweb.ma</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="" class="nav-item nav-link active">Home</a>
                                <a href="nous.html" class="nav-item nav-link">About</a>
                                <!-- <a href="" class="nav-item nav-link">Service</a> -->
                                <a href="" class="nav-item nav-link" onmouseover="showOverlay('m_ser/chat.html')" onmouseout="hideOverlay()">Service</a>
                                <script>
                                    let timeoutId;
                            
                                    function showOverlay(pageURL) {
                                        const overlay = document.getElementById('overlay');
                                        const serviceFrame = document.getElementById('serviceFrame');
                                        serviceFrame.src = pageURL;
                                        overlay.style.display = 'block';
                                        serviceFrame.style.width = '100%';
                                        serviceFrame.style.height = '100%';
                                    }
                            
                                    function hideOverlay() {
                                        const overlay = document.getElementById('overlay');
                                        timeoutId = setTimeout(function() {
                                            overlay.style.display = 'none';
                                        }, 1000); // Délai en millisecondes (3 secondes)
                                    }
                            
                                    // Fonction pour afficher le contenu lors du survol
                                    function showContent() {
                                        const overlay = document.getElementById('overlay');
                                        clearTimeout(timeoutId); // Effacer le délai s'il existe
                                        overlay.style.display = 'block';
                                    }
                            
                                    // Fonction pour masquer le contenu lorsque le curseur quitte l'overlay
                                    function hideContent() {
                                        const overlay = document.getElementById('overlay');
                                        timeoutId = setTimeout(function() {
                                            overlay.style.display = 'none';
                                        }, 50); // Délai en millisecondes (3 secondes)
                                    }
                                </script>
                                <a href="#applicationsSection" class="nav-item nav-link">Application </a>
                                <a href="#projects" class="nav-item nav-link">Project</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Nos offres</a>
                                    <div class="dropdown-menu">
                                        <a href="https://artiweb.ma/demandez-un-devis/" class="dropdown-item">Devis</a>
                                        <a href="https://artiweb.ma/forfait/" class="dropdown-item">Forfait</a>
                                    </div> 
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-primary" href="#" id="evaluationBtn" data-toggle="modal" data-target="#evaluationModal" >Evaluation gratuite</a>

                                <!-- Boîte de dialogue modale -->
                                <div class="modal fade" id="evaluationModal" tabindex="-1" role="dialog" aria-labelledby="evaluationModalLabel"
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
                                                <!-- Ajoutez autant d'options que nécessaire -->
                                            </select>
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
                                                <!-- Ajoutez autant d'options que nécessaire -->
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
                                
                              </div>
                              <!-- Placez ce script JavaScript dans votre page HTML ou dans un fichier externe -->
    <script>
        function envoyerInformations() {
            var nom = document.getElementById("inputNom").value;
            var telephoneOrMail = document.getElementById("inputTelephoneOrMail").value;
            var optionsServices = document.getElementById("inputOptionsServices").value;
            var courriel = document.getElementById("inputCourriel").value;
            var urlSiteWeb = document.getElementById("inputUrlSiteWeb").value;
        
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "ser.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Afficher la réponse de PHP (par exemple, le message de succès)
                    console.log(xhr.responseText);
                    alert("Votre message a été envoyé avec succès.");
                }
            };
        
            var data = "nom=" + encodeURIComponent(nom) +
                    "&telephoneOrMail=" + encodeURIComponent(telephoneOrMail) +
                    "&optionsServices=" + encodeURIComponent(optionsServices) +
                    "&courriel=" + encodeURIComponent(courriel) +
                    "&urlSiteWeb=" + encodeURIComponent(urlSiteWeb);
        
            xhr.send(data);
        }
        </script>
    
                             
                              <!-- Votre formulaire HTML comme précédemment -->
                          
    </div>
</div>
</nav>
</div>
</div>
            <!-- Nav Bar End -->
            <div class="overlay" id="overlay" onmouseover="showContent()" onmouseout="hideContent()">
                <div class="overlay-content">
                    <iframe id="serviceFrame" src=""></iframe>
                </div>
            </div>

            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Une agence web de confiance</p>
                            <h1 class="animated fadeInLeft">pour le développement de votre site web</h1>
                            <a class="btn animated fadeInUp" href="#" data-toggle="modal" data-target="#evaluationModal">Here we go</a>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Experts dans la création  </p>
                            <h1 class="animated fadeInLeft">de sites web pour votre entreprise</h1>
                            <a class="btn animated fadeInUp" href="#" data-toggle="modal" data-target="#evaluationModal">Here we go</a>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Nous réalisons vos</p>
                            <h1 class="animated fadeInLeft"> projets web avec professionnalisme</h1>
                            <a class="btn animated fadeInUp" href="#" data-toggle="modal" data-target="#evaluationModal">Here we go</a>

                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->


            <!-- Feature Start-->
            <div class="containere" style="padding: 45px 0;">
                
                <div class="title-container">
                    <div class="title-line">Fiers d'être</div>
                    <div class="title-line highlighted-text">certifié</div>
                </div>
                <div class="certificates-wrapper">
        
                    <div class="certificates" id="certificateContainer">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/cer1.png" alt="Certificat 1">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/cerrr2.jpg" alt="Certificat 2">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/cerrr3.jpg" alt="Certificat 3">
                        <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/cerrr4.jpg" alt="Certificat 4">
                       
        
        
                        <!-- Ajoutez autant d'images de certificats que vous le souhaitez -->
                    </div>
                </div>
        
            </div>
            <script>
                const certificateContainer = document.getElementById("certificateContainer");
        
                function cloneCertificates() {
                    const certificates = certificateContainer.querySelectorAll("img");
                    certificates.forEach((certificate) => {
                        const clone = certificate.cloneNode(true);
                        certificateContainer.appendChild(clone);
                    });
                }
        
                cloneCertificates();
        
                let scrollAmount = 0;
                const scrollStep = 2; // Réglez la vitesse de défilement selon vos besoins
        
                function scrollCertificates() {
                    scrollAmount += scrollStep;
                    if (scrollAmount >= certificateContainer.scrollWidth / 2) {
                        scrollAmount = 0;
                    }
                    certificateContainer.scrollTo(scrollAmount, 0);
                }
        
                setInterval(scrollCertificates, 30); // Réglez l'intervalle de défilement selon vos besoins
            </script>
            
            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/giff.gif" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Welcome to ArtiWeb</p>
                                <h2>À propos de nous</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    ArtiWeb est une Agence de Communication et Marketing Digital basée à Fès. Nous créons et développons des supports de communications adaptés à vos besoins de visibilité.
                                </p>
                                <p>
                                    le métier de nos experts consiste à vous apporter des idées brillantes, créatives et innovantes pour mieux véhiculer vos messages, valeurs et interagir efficacement avec vos clients cibles. Bénéficiez d’un échange offert et sans engagement avec un de nos experts.
                                </p>
                                <a class="btn" href="https://artiweb.ma/a-propos-artiweb-agence-de-communication/">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Fact Start -->
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">109</h2>
                                        <p>Expert Workers</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">485</h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">890</h2>
                                        <p>Running Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->

        <!-- service part -->
         <section id="service-section" class="scroll-reveal fade-up">
            <div class="service-head">
               <h2>What I <span>Offer</span></h2>
              <h2><div class="text-3">Here is my Services <span class="typingg"></span></div></h2>
              <script>
                var typed = new Typed(".typingg", {
                    strings: ["SEO", "SEA", "Social ADS", "Création de Contenu","Stradégie degital"],
                    typeSpeed: 80,
                    backSpeed: 80,
                    loop: true,
                });
            </script>
               
           </div><br>
           <div class="tixt"><h2 ><p class="section-text">
            À la recherche d’experts en<span class="highlighted-text">conception de site web</span>,
            d’une agence Google Ads ou de
            <span class="highlighted-text">gestionnaires médias sociaux</span> 
    
            Notre agence marketing web propose des stratégies sur-mesure qui génèrent des résultats rapides et mesurables.
            Le tout grâce à des spécialistes certifiés et équipés des meilleurs outils d’intelligence artificielle du marché.
          </p></h2></div>
           
            <div class="card-container">
                <div class="card">
                    <div class="front" style="background-image: url('img/lead.gif');">
                        
                      <h1 class="mod" style="margin-bottom: 90px;">Génération De Leads</h1>
                      <button class="bot">View Details</button>
                    </div>
                    <div class="back">
                        <p class="para">
                          Boostez votre visibilité en ligne, obtenez des leads qualifiés et gagnez de nouveaux clients grâce à notre expertise digitale complète.
                        </p>
                        <button id="showModalButton">Learn More</button>
                        <script>
                            // Initialisez WOW.js
                            new WOW().init();
                        </script>
                        <script>
                            const button = document.getElementById("showModalButton");
                            button.addEventListener("click", function() {
                                window.location.href = "https://artiweb.ma/agence-generation-de-leads-fes/";
                            });
                        </script>
                      </div>
                                            
                  </div>
                  <div class="card">
                    <div class="front" style="background-image: url('img/stra.gif');">
                      <h1 class="mod" style="margin-bottom: 120px;">Stratégie Digitale</h1>
                      <button class="bot">View Details</button>
                    </div> 
                    <div class="back">
                      <p class="para">
                        Construisez une stratégie efficace et pertinente pour atteindre vos objectifs.
                      </p>
                      <button id="showModalButton2">Learn More</button>

                      <script>
                       const button2 = document.getElementById("showModalButton2");
                       button2.addEventListener("click", function() {
                     window.location.href = "https://artiweb.ma/strategie-digitale/";
                        });
                      </script>
                      </div>
                  </div>
                  <div class="card">
                    <div class="front" style="background-image: url('img/g2.jpg');">
                      <h1 class="mod" style="margin-bottom: 100px;">Creation De Contenus​</h1>
                      <button class="bot">View Details</button>
                    </div>
                    <div class="back">
                      <p class="para">
                        Produisez du contenu pertinent et de qualité pour attirer et fidéliser votre audience.
                      </p>
                      <button id="showModalButton3">Learn More</button>

                      <script>
                       const button3 = document.getElementById("showModalButton2");
                       button3.addEventListener("click", function() {
                     window.location.href = "https://artiweb.ma/creation-de-contenus/";
                        });
                      </script>
                    </div>
                  </div>
                  <div class="card">
                    <div class="front" style="background-image: url('img/sea.gif');">
                      <h1 class="mod" style="margin-bottom: 120px; margin-right :180px;">SEA</h1>
                      <button class="bot">View Details</button>
                    </div>
                    <div class="back">
                      <p class="para">
                        Placez vos publicités dans les résultats de recherches de Google et d’autres moteurs de recherche.
                      </p>
                      <button id="showModalButton4">Learn More</button>

                      <script>
                       const button4 = document.getElementById("showModalButton4");
                       button4.addEventListener("click", function() {
                     window.location.href = "https://artiweb.ma/sea/";
                        });
                      </script>
                    </div>
                  </div>
                  <div class="card">
                    <div class="front" style="background-image: url('img/seo.gif');">
                      <h1 class="mod" style="margin-bottom: 120px; margin-left :220px;">SEO</h1>
                      <button class="bot">View Details</button>
                    </div>
                    <div class="back">
                      <p class="para">
                        Optimisez le contenu de votre site web pour le rendre plus visible et mieux classé dans les moteurs de recherche.
                      </p>
                      <button id="showModalButton5">Learn More</button>

                      <script>
                       const button5 = document.getElementById("showModalButton5");
                       button5.addEventListener("click", function() {
                     window.location.href = "https://artiweb.ma/seo/";
                        });
                      </script>
                    </div>
                  </div>
                  <div class="card">
                    <div class="front" style="background-image: url('img/social.gif');">
                      <h1 class="mod" style="margin-bottom: 120px; margin-right:150px;" >Social ADS</h1>
                      <button class="bot">View Details</button>
                    </div>
                    <div class="back">
                      <p class="para">
                        Promouvez les produits ou services de votre entreprise sur les réseaux sociaux.
                      </p>
                      <button id="showModalButton6">Learn More</button>

                      <script>
                       const button6 = document.getElementById("showModalButton6");
                       button6.addEventListener("click", function() {
                     window.location.href = "https://artiweb.ma/social-ads/";
                        });
                      </script>
                    </div>
                  </div>
          </section>
         <!-- service of video  -->
         <div class="containeer">
            <div class="titlle-container">
                <div class="titlle-line">Découvrez notre service de </div>
                <div class="titlle-line highlightedd-text">création de vidéos publicitaires</div>
            </div>
            <div class="videos-wrapper">
                <div class="videos" id="videoContainer">
                    <video class="videoo" controls>
                        <source src="video-first 1 (1).mov" type="video/mp4">
                    </video>
                    <video class="videoo" controls>
                        <source src="digital.mp4" type="video/mp4">
                    </video>
                    <video class="videoo" controls>
                        <source src="Vidéo(11).mp4 1080p.mp4" type="video/mp4">
                    </video>
                    <video class="videoo" controls>
                        <source src="WhatsApp Video 2023-09-06 at 22.06.24.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="fullscreen" id="fullscreenContainer">
            <div class="close-button" id="closeFullscreen">X</div>
            <video class="video-player" controls>
                <source src=""></source> <!-- Placeholder pour la vidéo en plein écran -->
            </video>
            <button class="prev-button">&#8249; Précédent</button>
            <button class="next-button">Suivant &#8250;</button>
            <script>
                const videoContainer = document.getElementById("videoContainer");
                const fullscreenContainer = document.getElementById("fullscreenContainer");
                const closeFullscreen = document.getElementById("closeFullscreen");
                const videoPlayer = fullscreenContainer.querySelector(".video-player");
                //partie de preceden et suivant 
                const prevButton = fullscreenContainer.querySelector(".prev-button");
                 const nextButton = fullscreenContainer.querySelector(".next-button");
                 // Définir currentVideoIndex en dehors des fonctions
                  let currentVideoIndex = 0; // Indice de la vidéo actuellement affichée
        
                function cloneVideos() {
                    const videos = videoContainer.querySelectorAll(".videoo"); // Utilisez ".videoo" pour cibler les éléments vidéo
                    videos.forEach((videoo) => {
                        // Ajoutez l'attribut "muted" pour désactiver le son des vidéos dans la section de défilement
                        videoo.muted = true;
                        videoo.addEventListener("click", () => openFullscreen(videoo));
                    });
                }
        
                cloneVideos();
        
                let scrollPosition = 0;
                const scrollSpeed = 2; // Modifiez la vitesse du défilement ici
              
        
                function scrollVideos() {
                    scrollPosition += scrollSpeed;
                    if (scrollPosition >= videoContainer.scrollWidth / 2) {
                        scrollPosition = 0;
                    }
                    videoContainer.scrollTo(scrollPosition, 0);
                }
        
                setInterval(scrollVideos, 30);
        
                function openFullscreen(videoo) {
                   videoPlayer.src = videoo.querySelector("source").src;
                    fullscreenContainer.style.display = "flex";
                    //partie de precedent et suivant 
                    body.style.overflow = "hidden"; // Désactive le défilement de la page
                   // Utilisez currentVideoIndex à la place de videoIndex
                      currentVideoIndex = Array.from(videoContainer.querySelectorAll(".videoo")).indexOf(videoo);
                     

    // Gestion de la lecture en plein écran sur les téléphones
    if (window.innerWidth < 992) {
        if (videoPlayer.requestFullscreen) {
            videoPlayer.requestFullscreen();
        } else if (videoPlayer.mozRequestFullScreen) {
            videoPlayer.mozRequestFullScreen(); // Pour Firefox
        } else if (videoPlayer.webkitRequestFullscreen) {
            videoPlayer.webkitRequestFullscreen(); // Pour Chrome, Safari et Opera
        } else if (videoPlayer.msRequestFullscreen) {
            videoPlayer.msRequestFullscreen(); // Pour Internet Explorer
        }
    }

                }
                
                closeFullscreen.addEventListener("click", () => {
                    videoPlayer.pause();
                    videoPlayer.src = ""; // Réinitialiser la source vidéo
                    fullscreenContainer.style.display = "none";
                });
                prevButton.addEventListener("click", () => {
                    const videoElements = videoContainer.querySelectorAll(".videoo");
                    if (currentVideoIndex > 0) {
                        currentVideoIndex--; // Décrémentez l'indice de la vidéo actuelle
                    } else {
                        currentVideoIndex = videoElements.length - 1; // Revenez à la dernière vidéo si vous êtes déjà à la première
                    }
                    openFullscreen(videoElements[currentVideoIndex]);
                });
                
                nextButton.addEventListener("click", () => {
                    const videoElements = videoContainer.querySelectorAll(".videoo");
                    if (currentVideoIndex < videoElements.length - 1) {
                        currentVideoIndex++; // Incrémente l'indice de la vidéo actuelle
                    } else {
                        currentVideoIndex = 0; // Revenez à la première vidéo si vous êtes déjà à la dernière
                    }
                    openFullscreen(videoElements[currentVideoIndex]);
                });
                
                // JavaScript
function stopVideoScrolling() {
    const videos = document.querySelectorAll('.videoo');
    const isSmallScreen = window.innerWidth <= 991; // Définissez la largeur de l'écran à laquelle vous souhaitez désactiver le défilement.

    videos.forEach((video) => {
        if (isSmallScreen) {
            video.pause(); // Arrêtez la lecture des vidéos
        } else {
            video.play(); // Reprise de la lecture des vidéos
        }
    });
}

// Appelez la fonction lorsque la page est chargée et redimensionnée
window.addEventListener('load', stopVideoScrolling);
window.addEventListener('resize', stopVideoScrolling);

                
            </script>
        </div>

        <!-- and of service of video -->

            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s" id="applicationsSection">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/man.JPG" alt="Image" class="blinking" >
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p style="size: 80px;">Welcome to Our Applications</p>
                                <h2>ARTI  <span style="color: rgb(94, 129, 243);">STOCK</span></h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Découvrez notre logiciel de gestion de stock sophistiqué, conçu pour vous aider à optimiser et à rationaliser la gestion de vos inventaires. Notre solution vous permet de suivre avec précision les entrées et les sorties de produits, de surveiller les niveaux de stock en temps réel et d'anticiper les besoins de réapprovisionnement
                                </p>
                                <p>
                                    Grâce à une interface conviviale, vous pourrez visualiser l'état de votre stock d'un simple coup d'œil, générer des rapports détaillés sur les mouvements de produits et minimiser les risques de ruptures ou de surstocks. Simplifiez la gestion logistique de votre entreprise, réduisez les coûts opérationnels et améliorez l'efficacité de votre chaîne d'approvisionnement grâce à notre logiciel de gestion de stock avancé.
                                </p>
                                <a class="btn" href="https://artiweb.ma/demandez-un-devis/" style="background-color: rgb(94, 129, 243);" target="_blank">DEMANDEZ VOTRE DEVIS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
            
            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/app2.jpg" alt="Image" class="blinking">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                
                                <h2>ARTI  <span style="color: rgb(243, 199, 141);">ECOLES </span></h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Découvrez notre logiciel de gestion scolaire innovant, conçu pour simplifier et améliorer tous les aspects de la gestion au sein de votre établissement éducatif. Notre solution vous permet de gérer facilement les inscriptions des élèves, les emplois du temps, les notes et évaluations, ainsi que la communication avec les parents. 
                                </p>
                                <p>
                                  Grâce à une interface conviviale, vous pourrez suivre en temps réel les performances de chaque élève, générer des rapports détaillés et faciliter la collaboration entre les enseignants, les élèves et les parents. Gagnez en efficacité administrative, réduisez les tâches manuelles et consacrez plus de temps à l'éducation. Simplifiez la gestion de votre école avec notre logiciel intuitif et performant.
                                </p>
                                <a class="btn" href="https://artiweb.ma/demandez-un-devis/" style="background-color:  rgb(243, 199, 141);" target="_blank">DEMANDEZ VOTRE DEVIS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/app3.jpg" alt="Image" class="blinking">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            
                            <h2>ARTI <span style="color: rgb(86, 158, 102);">PHARMA</span> </h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Arti PHARMA représente un logiciel de pharmacie contemporain qui harmonise facilité d'utilisation et efficacité.
                            </p>
                            <p>
                                L'équipe derrière Arti PHARMA guide ses clients dans la résolution de leurs défis journaliers et simplifie la gestion de leurs pharmacies.
                                 Avec ATLAS PHARMA, écartez les risques d'erreurs et optimisez votre emploi du temps.
                                 Souhaiteriez-vous expérimenter Arti PHARMA en ligne ? L'essai est gratuit en passant par notre site web.

                            </p>
                            <a class="btn" href="https://artiweb.ma/demandez-un-devis/" style="background-color: rgb(86, 158, 102);" target="_blank">DEMANDEZ VOTRE DEVIS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/app1.jpg" alt="Image" class="blinking">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            
                            <h2>ARTI <span style="color: rgb(73, 112, 73);">Hôtel</span> </h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Conçu pour les hôtels, maisons d'hôtes et autres établissements d'hébergement, le logiciel de gestion présente de nombreux avantages pour les professionnels. 
                            </p>
                            <p>
                                Doté de nombreuses fonctionnalités, cet outil est accessible à tous et facilite l'activité hôtelière au quotidien. Il comporte les fonctions clés indispensables au management des établissements hôteliers : gestion de l'accueil, gestion des réservations, allotments, chambres, points de vente, stock .... Découvrez notre logiciel de gestion ARTI Hôtels Manager, l'outil idéal pour optimiser votre activité. Accédez à votre hôtel partout où vous êtes. Notre panneau web vous permet d'être toujours mis à jour des derniers changements.
                            </p>
                            <a class="btn" href="https://artiweb.ma/demandez-un-devis/" style="background-color: rgb(73, 112, 73);" target="_blank">DEMANDEZ VOTRE DEVIS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
                      


        <!-- /*... other exemple of services...*/ -->



            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center" id="projects">
                        <p>Our Projects</p>
                        <h2>Notre Portefeuille de Projets</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/temannn.jpg" alt="Image" >
                                    <div class="service-overlay">
                                        <p>
                                        Nous avons eu le privilège de collaborer avec Teman Liveaboard, une entreprise indonésienne spécialisée dans les voyages de plongée et de loisirs à travers les îles de l'archipel. Notre équipe a créé leur site web pour refléter la beauté naturelle et l'aventure que leurs voyages offrent. En combinant un design moderne avec des éléments traditionnels, nous avons mis en valeur l'essence même de l'Indonésie. 
                                        </p>

                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3 ><a href="https://temanliveaboard.com/" style="color: skyblue;" class="animated-link" target="_blank">Site Teman Liveaboard</a></h3>
                                    <a class="btn" href="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/temaaan2.JPG"  data-lightbox="service"  >+</a>

                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/allooo.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Dans ce projet, notre mission était de fournir à Alloo Assur une plateforme en ligne conviviale pour faciliter la sélection et la souscription d'assurances personnalisées, même dans les situations complexes. En mettant l'accent sur la simplicité et la rapidité, nous avons conçu un processus fluide qui permet aux clients de trouver la couverture d'assurance la mieux adaptée à leur profil, et ce, en quelques étapes simples.

                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3 ><a href="https://alloassurrance.fr/home" style="color: skyblue;" class="animated-link" target="_blank">Site Allo Assur</a></h3>
                                    <a class="btn" href="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/alloo2.JPG" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/souniii.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Notre équipe a méticuleusement conçu une plateforme en ligne qui met en avant l'expertise et les services diversifiés de Sounifac. En mettant l'accent sur l'intuitivité, nous avons élaboré une interface qui guide les visiteurs à travers les différentes facettes de l'entreprise. Cette conception réfléchie a permis aux utilisateurs de trouver rapidement les informations dont ils ont besoin, tout en offrant une expérience immersive et harmonieuse
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3 ><a href="https://www.sounifac.com/" style="color: skyblue;" class="animated-link" target="_blank">Site Sounifac</a></h3>
                                    <a class="btn" href="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/sounii2.JPG" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/idalu (1).jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            En tant qu'agence spécialisée dans le développement web, nous sommes fiers de vous présenter notre partenariat avec L'IDALU, L'entreprise d'ingénierie aluminium, spécialisée dans la métallurgie, est reconnue pour son expertise dans le domaine de l'aluminium. Fort de nombreuses années d'expérience, il se distingue par sa capacité à repousser les frontières de ce matériau léger et durable.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3 ><a href="https://www.idalu-maroc.com/" style="color: skyblue;" class="animated-link" target="_blank">Site IDALU</a></h3>
                                    <a class="btn" href="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/idalu2 (1).jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/poll.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Nous avons conçu et développé un site web qui capture l'essence même de 3Presso Centre Dentaire Palladino. En mettant en avant leurs services révolutionnaires d'Implantologie computer guidata et de soins dentaires de pointe, le site offre aux visiteurs une fenêtre sur l'expertise exceptionnelle et la passion du centre dentaire pour la santé bucco-dentaire.
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3 ><a href="https://www.implantologiapalladino.it/" style="color: skyblue;" class="animated-link" target="_blank">Site Palladino</a></h3>
                                    <a class="btn" href="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/poll2.JPG" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/schol.jpg" alt="Image">
                                    <div class="service-overlay">
                                        <p>
                                            Nous avons conçu et développé un site web pour cette entreprise dédiée à l'éducation ,et elle partage une vision similaire à celle de l'école primaire FirstSchool. Elle croit en l'importance de fournir aux élèves non seulement des connaissances académiques, mais aussi des valeurs humaines essentielles. 
                                        </p>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3 ><a href="https://groupe-scolaire-first.online/" style="color: skyblue;" class="animated-link" target="_blank">Site First School</a></h3>
                                    <a class="btn" href="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/schol1.JPG" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->


           
            <div class="video wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/agence.mp4" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="margin-top: -400px;">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <video controls id="video">
                                    <source src="" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                // Initialisez WOW.js
                new WOW().init();
        
                // Gérez le chargement de la vidéo dans la modal
                $('#videoModal').on('shown.bs.modal', function (e) {
                    var $videoSrc = $(e.relatedTarget).data("src");
                    $("#video source").attr('src', $videoSrc);
                    $("#video")[0].load(); // Recharge la vidéo
                });
            </script>
            <!-- Video End -->


            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header text-center" style="margin-left: 160px;">
                        <p>Our Team</p>
                        <h2>Meet Our Engineer</h2>
                      <h2><div class="text-3">Engineering <span class="typing"></span></div></h2>  
    <script>
        var typed = new Typed(".typing", {
            strings: ["Designers", "Developers", "Innovators", "Collaborators"],
            typeSpeed: 80,
            backSpeed: 80,
            loop: true,
        });
    </script>
                    </div>
                    
                <div class="contient">
                    
                    <div class="icoo">
                        <div class="imgbx active " style="--i:1;" data-id="cont1">
                            <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/chef.jpg" alt="" >
                        </div>
                        <div class="imgbx" style="--i:2;" data-id="cont2">
                            <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/emp1.png" alt="">
                        </div>
                        <div class="imgbx" style="--i:3;"data-id="cont3">
                            <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/emp2.png" alt="">
                        </div>
                        <div class="imgbx" style="--i:4;" data-id="cont4">
                            <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/emp3.png" alt="">
                        </div>
                        <div class="imgbx" style="--i:5;" data-id="cont5">
                            <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/emp4.png" alt="">
                        </div> 
                    </div>
    
                    <div class="cont">
                     <div class="contbx active" id="cont1">
                           <div class="caard">
                            <div class="imgbx">
                                <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/chef.jpg" alt="">
                            </div>
                            <div class="txtbx">
                                <h2>Mr Amine <br> <span>Directeur</span></h2>
                                <ul class="sci">
                                    <li><a href=""><i class="fab fa-twitter" style="color: black;"></i></a></li>
                                    <li><a href="https://www.facebook.com/Artiwebmaroc?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f" style="color: black;"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/arti-web/" target="_blank"><i class="fab fa-linkedin-in" style="color: black;"></i></a></li>
                                    <li><a href="https://www.instagram.com/artiweb.ma/?igshid=NTc4MTIwNjQ2YQ%3D%3D" target="_blank"><i class="fab fa-instagram" style="color: black;"></i></a></li>
                                </ul>
                            </div>
                           </div>
                     </div>
                     <div class="contbx " id="cont2">
                        <div class="caard">
                         <div class="imgbx">
                             <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/emp1.png" alt="">
                         </div>
                         <div class="txtbx">
                             <h2><br> <span></span></h2>
                             <ul class="sci">
                                <li><a href="#"><i class="fab fa-twitter" style="color: black;"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f" style="color: black;"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in" style="color: black;"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" style="color: black;"></i></a></li>
                             </ul>
                         </div>
                        </div>
                  </div>
                  <div class="contbx " id="cont3">
                    <div class="caard">
                     <div class="imgbx">
                         <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/emp2.png" alt="">
                     </div>
                     <div class="txtbx">
                         <h2> <br> <span></span></h2>
                         <ul class="sci">
                            <li><a href="#"><i class="fab fa-twitter" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" style="color: black;"></i></a></li>
                         </ul>
                     </div>
                    </div>
              </div>
              <div class="contbx " id="cont4">
                <div class="caard">
                 <div class="imgbx">
                     <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/emp3.png" alt="">
                 </div>
                 <div class="txtbx">
                     <h2> <br> <span></span></h2>
                     <ul class="sci">
                        <li><a href="#"><i class="fab fa-twitter" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" style="color: black;"></i></a></li>
                     </ul>
                 </div>
                </div>
            </div>
            <div class="contbx " id="cont5">
                <div class="caard">
                 <div class="imgbx">
                     <img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/emp4.png" alt="">
                 </div>
                 <div class="txtbx">
                     <h2> <br> <span></span></h2>
                     <ul class="sci">
                        <li><a href="#"><i class="fab fa-twitter" style="color: black;"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f" style="color: black;"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in" style="color: black;"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram" style="color: black;"></i></a></li>
                     </ul>
                 </div>
                </div>
            </div>
            <!-- <div class="contbx " id="cont6">
                <div class="caard">
                 <div class="imgbx">
                     <img src="img/gestion.jpeg" alt="">
                 </div>
                 <div class="txtbx">
                     <h2>Someone Famous <br> <span>Product Designer</span></h2>
                     <ul class="sci">
                        <li><a href="#"><i class="fab fa-twitter" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" style="color: black;"></i></a></li>
                     </ul>
                 </div>
                </div>
            </div> -->
            <!-- <div class="contbx " id="cont7">
                <div class="caard">
                 <div class="imgbx">
                     <img src="gestion.jpeg" alt="">
                 </div>
                 <div class="txtbx">
                     <h2>Someone Famous <br> <span>Product Designer</span></h2>
                     <ul class="sci">
                        <li><a href="#"><i class="fab fa-twitter" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" style="color: black;"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" style="color: black;"></i></a></li>
                     </ul>
                 </div>
                </div>
            </div> -->
                    </div>
                </div>
                <script>
                    // Sélectionnez tous les éléments avec la classe '.imgbx'
                    let imgbx = document.querySelectorAll('.imgbx');
                    // Sélectionnez tous les éléments avec la classe '.contbx'
                    let contbx = document.querySelectorAll('.contbx');
                
                    // Parcourez chaque élément '.imgbx'
                    for (let i = 0; i < imgbx.length; i++) {
                        imgbx[i].addEventListener('mouseover', function () {
                            // Parcourez tous les éléments '.contbx'
                            for (let j = 0; j < contbx.length; j++) {
                                // Réinitialisez la classe de tous les '.contbx' pour les cacher
                                contbx[j].className = 'contbx';
                            }
                            // Récupérez l'ID du dataset de l'élément '.imgbx' survolé
                            let id = this.dataset.id;
                            // Sélectionnez l'élément '.contbx' correspondant à l'ID et ajoutez la classe 'active'
                            document.getElementById(id).className = 'contbx active';
                            for(let i = 0; i < imgbx.length; i++){
                                imgbx[i].className ='imgbx';
                            }
                            this.className ='imgbx active ';
                        });
                    }
                </script>
                
                </div> 
            </div><br><br><br>
            <!-- Team End -->
            


            <section class = "contact-section">
                <div class = "contact-bg">
                  <h3>Get in Touch with Us</h3>
                  <h2>contact us</h2>
                  <div class = "line">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                  <p class = "text">Si vous avez des questions ou si vous souhaitez en savoir davantage sur nos services, n'hésitez pas à nous contacter. Notre équipe passionnée chez ArtiWeb, une Agence de Communication et Marketing Digital basée à Fès, est là pour répondre à toutes vos interrogations. Nous sommes déterminés à vous aider à atteindre vos objectifs en créant des supports de communications sur mesure, adaptés à vos besoins de visibilité..</p>
                </div>
          
          
                <div class = "contact-body">
                  <div class = "contact-info">
                    <div>
                      <span><i class = "fas fa-mobile-alt"></i></span>
                      <span>Phone No.</span>
                      <span class = "text">+0532-432066</span>
                    </div>
                    <div>
                      <span><i class = "fas fa-envelope-open"></i></span>
                      <span>E-mail</span>
                      <span class = "text">Contact@artiweb.ma</span>
                    </div>
                    <div>
                      <span><i class = "fas fa-map-marker-alt"></i></span>
                      <span>Address</span>
                      <span class = "text">22Q2+62, Ave Mohammed es Slaoui, Fes 30050</span>
                    </div>
                    <div>
                      <span><i class = "fas fa-clock"></i></span>
                      <span>Opening Hours</span>
                      <span class = "text">Monday - Friday ( 9:00 - 21:00)</span>
                    </div>
                  </div>
          
                  <div class = "contact-form">
                    <form>
                      <div>
                        <input type="text" class="form-control" placeholder="Prénom">
                        <input type="text" class="form-control" placeholder="Nom">
                      </div>
                      <div>
                        <input type="email" class="form-control" placeholder="Adresse mail">
                        <input type="text" class="form-control" placeholder="Numéro de téléphone">
                      </div>
                      <textarea rows = "5" placeholder="Votre Message" class = "form-control"></textarea>
                      <input type = "submit" class="send-btn" value="Envoyer le message">
                    </form>
          
                    <div>
                      <img src = "<?= get_stylesheet_directory_uri() . "/assets/" ?>img/contact.gif" alt = "">
                    </div>
                  </div>
                </div>
          
                <div class = "map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.227832867499!2d-5.002454224284144!3d34.038026373162296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8b73ec23f32f%3A0x2f5183c1d50c3d09!2sArti%20web%20%3A%20Agence%20de%20Communication%20et%20Marketing%20Digital%20-%20F%C3%A8s!5e0!3m2!1sfr!2sma!4v1691092683800!5m2!1sfr!2sma" width="1340" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
          
                <div class = "contact-footer">
                  <h3>Follow Us</h3>
                  <div class = "social-links">
                    <a href = "https://www.facebook.com/Artiwebmaroc?mibextid=ZbWKwL" class = "fab fa-facebook-f" target="_blank"></a>
                    <a href = "#" class = "fab fa-twitter" target="_blank"></a>
                    <a href = "https://www.instagram.com/artiweb.ma/?igshid=NTc4MTIwNjQ2YQ%3D%3D" class = "fab fa-instagram" target="_blank"></a>
                    <a href = "https://www.linkedin.com/company/arti-web/" class = "fab fa-linkedin" target="_blank"></a>
                    <a href = "https://api.whatsapp.com/send/?phone=%2B212664017447&text&type=phone_number&app_absent=0" class = "fa fa-whatsapp" target="_blank"></a>
                  </div>
                </div>
              </section>
          

            <!-- Testimonial Start -->
            <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/allo-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/ipfi-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/souni-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/teman-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/school-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/idalu-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/allo-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/ipfi-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/souni-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/teman-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/school-modified.png" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="<?= get_stylesheet_directory_uri() . "/assets/" ?>img/idalu-modified.png" alt="Testimonial"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                <div class="slider-item">
                                    <h3>Allo Assurance</h3>
                                    <h4>Assurance</h4>
                                    <p> Assurance Allo est une agence d'assurances. Souscrire une assurance chez Assurances Allo c'est opter pour un rapport qualité/prix inégalé.
                                    </p>
                                </div>
                                <div class="slider-item">
                                    <h3>IPFI</h3>
                                    <h4>Formation</h4>
                                    <p>IPFI est un institut spécialisé dans la formation de professionnels de la santé. Ouvert en 2005, L’IPFI est sous la tutelle du Secrétariat d’Etat chargé de la Formation Professionnelle de Rabat, autorisé sous le n° 04/09/1/2006. Les programmes des filières d’IPFI sont homologués par le ministère et l’institut IPFI est l’une des premières écoles paramédicales privées du Maroc .</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Sounifac</h3>
                                    <h4>Prestations de services</h4>
                                    <p>Sounifac est une société marocaine privée fondée en 2005 à Fès. Depuis lors, elle n’a cessé de croître pour être composée aujourd’hui de plus de 150 personnes, tous engagés à ne répondre qu’à un seul objectif : la satisfaction de nos clients.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Teman</h3>
                                    <h4>Croisière</h4>
                                    <p>Teman Liveaboard est une compagnie de croisière indonésienne dédiée à offrir des voyages de loisirs et de plongée de classe mondiale à travers l'archipel, offrant une expérience conviviale et mémorable de la beauté naturelle de l'Indonésie. Notre navire, le KLM Teman, a été construit à Sulawesi par des artisans du bois traditionnels. Il peut accueillir jusqu'à 12 personnes dans 5 cabines avec des espaces communs spacieux.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>First School</h3>
                                    <h4>Etudes</h4>
                                    <p> C'est une entreprise dédiée à l'éducation et elle partage une vision similaire à celle de l'école primaire FirstSchool. Elle croit en l'importance de fournir aux élèves non seulement des connaissances académiques, mais aussi des valeurs humaines essentielles. </p>
                                </div>
                                <div class="slider-item">
                                    <h3>IDALU</h3>
                                    <h4>ingénierie aluminum</h4>
                                    <p>  L'entreprise d'ingénierie aluminium, spécialisée dans la métallurgie, est reconnue pour son expertise dans le domaine de l'aluminium. Fort de nombreuses années d'expérience, il se distingue par sa capacité à repousser les frontières de ce matériau léger et durable.  </p>
                                </div>
                                <div class="slider-item">
                                    <h3>Allo Assurance</h3>
                                    <h4>profession</h4>
                                    <p> Assurance Allo est une agence d'assurances. Souscrire une assurance chez Assurances Allo c'est opter pour un rapport qualité/prix inégalé.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>IPFI</h3>
                                    <h4>Formation</h4>
                                    <p>IPFI est un institut spécialisé dans la formation de professionnels de la santé. Ouvert en 2005, L’IPFI est sous la tutelle du Secrétariat d’Etat chargé de la Formation Professionnelle de Rabat, autorisé sous le n° 04/09/1/2006. Les programmes des filières d’IPFI sont homologués par le ministère et l’institut IPFI est l’une des premières écoles paramédicales privées du Maroc ..</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Sounifac</h3>
                                    <h4>Prestations de services</h4>
                                    <p>Sounifac est une société marocaine privée fondée en 2005 à Fès. Depuis lors, elle n’a cessé de croître pour être composée aujourd’hui de plus de 150 personnes, tous engagés à ne répondre qu’à un seul objectif : la satisfaction de nos clients.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Teman</h3>
                                    <h4>Croisière</h4>
                                    <p>Teman Liveaboard est une compagnie de croisière indonésienne dédiée à offrir des voyages de loisirs et de plongée de classe mondiale à travers l'archipel, offrant une expérience conviviale et mémorable de la beauté naturelle de l'Indonésie. Notre navire, le KLM Teman, a été construit à Sulawesi par des artisans du bois traditionnels. Il peut accueillir jusqu'à 12 personnes dans 5 cabines avec des espaces communs spacieux.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>First School</h3>
                                    <h4>Etudes</h4>
                                    <p> C'est une entreprise dédiée à l'éducation et elle partage une vision similaire à celle de l'école primaire FirstSchool. Elle croit en l'importance de fournir aux élèves non seulement des connaissances académiques, mais aussi des valeurs humaines essentielles. </p>
                                </div>
                                <div class="slider-item">
                                    <h3>IDALU</h3>
                                    <h4>ingénierie aluminum</h4>
                                    <p>  L'entreprise d'ingénierie aluminium, spécialisée dans la métallurgie, est reconnue pour son expertise dans le domaine de l'aluminium. Fort de nombreuses années d'expérience, il se distingue par sa capacité à repousser les frontières de ce matériau léger et durable.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->

             <!-- team partie -->
             <div class="containerrrr">
                <div class="board">
                    <h2 class="text-light">Word form our customers</h2>
                    <p class="text-light">Some of the fullfilled costomers reviews</p>
        
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="comments">
                                    L'agence de marketing digital Artiweb se distingue par son expertise pointue, son approche stratégique et sa capacité à générer des résultats tangibles, faisant d'elle le partenaire idéal pour propulser votre entreprise vers de nouveaux sommets en ligne
                                </div>
                                <div class="profile">
                                    <!-- <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt=""> -->
                                    <div class="avatar">
                                        m <!-- Remplacez cette lettre par l'initiale du nom de la personne -->
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            // Récupère la première lettre du nom (remplacez "P" par l'initiale du nom)
                                            var firstLetter = "m";
                                    
                                            // Sélectionne l'élément .avatar et ajoute la première lettre à son contenu
                                            var avatar = document.querySelector(".avatar");
                                            avatar.textContent = firstLetter;
                                        });
                                    </script>
                                    
                                    
                                    <a href="#">mezrag naoufal</a>
                                    <span class="stars">
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="comments">
                                    L'agence de communication Arti Web se distingue par sa créativité inspirante et son expertise technologique, offrant des solutions digitales qui donnent vie aux visions de ses clients de manière exceptionnelle.
                                 </div>
                                <div class="profile">
                                    <div class="avatarr">
                                        S <!-- Remplacez cette lettre par l'initiale du nom de la personne -->
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            // Récupère la première lettre du nom (remplacez "P" par l'initiale du nom)
                                            var firstLetter = "S";
                                    
                                            // Sélectionne l'élément .avatar et ajoute la première lettre à son contenu
                                            var avatar = document.querySelector(".avatarr");
                                            avatar.textContent = firstLetter;
                                        });
                                    </script>
                                    <a href="#">Sara Badidi</a>
                                    <span class="stars">
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="comments">
                                    ArtiWeb est une agence de marketing digitale remarquable qui se distingue par son expertise, sa créativité et sa capacité à générer des résultats exceptionnels en ligne.
                                </div>
                                <div class="profile">
                                    <div class="avatarrr">
                                        B <!-- Remplacez cette lettre par l'initiale du nom de la personne -->
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            // Récupère la première lettre du nom (remplacez "P" par l'initiale du nom)
                                            var firstLetter = "B";
                                    
                                            // Sélectionne l'élément .avatar et ajoute la première lettre à son contenu
                                            var avatar = document.querySelector(".avatarrr");
                                            avatar.textContent = firstLetter;
                                        });
                                    </script>
                                    <a href="#">Bilal Ourdaja</a>
                                    <span class="stars">
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="comments">
                                    Je suis satisfaite de la conception de mon site web et aussi pour le référencement naturel vraiment Arti Web c'est la meilleure agence de marketing digital a Fès, et surtout très bon rapport service / prix .
                                       Je recommande a toute personne intéressée.
                                 </div>
                                <div class="profile">
                                    <div class="avatarrrr">
                                        N <!-- Remplacez cette lettre par l'initiale du nom de la personne -->
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            // Récupère la première lettre du nom (remplacez "P" par l'initiale du nom)
                                            var firstLetter = "N";
                                    
                                            // Sélectionne l'élément .avatar et ajoute la première lettre à son contenu
                                            var avatar = document.querySelector(".avatarr");
                                            avatar.textContent = firstLetter;
                                        });
                                    </script>
                                    <a href="#">NAJIA MALKI</a>
                                    <span class="stars">
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                        <i class="fas fa-star yellow-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                
                    </div>
        
                </div>
            </div>
        
            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <script >// initialize swiper js
        
                const swiper = new Swiper('.swiper', {
                    loop: true,
                
                     // If we need pagination
                  pagination: {
                    el: '.swiper-pagination',
                  },
                
                    // Navigation arrows
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                
                
                })</script>
             <!-- /team partie... -->


            <!-- Footer Start -->
           


    
    <?php get_footer(); ?>
