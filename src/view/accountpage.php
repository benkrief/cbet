<?php
        ob_start(); 
    ?>
        <head>
            <link rel="stylesheet" href="assets/account.css">
            <script>
                window.onload = function() {
                    if(!window.location.hash) {
                    window.location = window.location + '#loaded';
                    window.location.reload();
                    }
                }
            </script>
        </head>
        <div class="container">
    <div class="main-body">
    
       
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img <?php if($_COOKIE['gender']=="Monsieur"){echo "src='https://bootdey.com/img/Content/avatar/avatar7.png'" ;} else {echo 'src="assets/img/femme.png"';}?> alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4 style="text-transform : capitalize;"><?php echo $_COOKIE['nom']." ".$_COOKIE['prenom']; ?></h4>
                      <p class="text-secondary mb-1">Betteur</p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><img src="assets/img/plus.png" height="75px" width="75px">  Déposer</h6>
                    <span class="text-secondary"><button style="border: 5px inset #6187E5;border-radius: 10px;">+</button></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><img src="assets/img/moins.png" height="75px" width="75px">  Retirer</h6>
                    <span class="text-secondary"><button style="border: 5px inset #6187E5;border-radius: 10px;">-</button></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><img src="assets/img/logout.png" height="75px" width="75px">  Se déconnecter</h6>
                    <span class="text-secondary"><a href="index.php?page=account&action=logout"><button style="border: 5px inset #6187E5;border-radius: 10px;">-></button></a></span>
                  </li>
                
                </ul>
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Vous</h6>
                    </div>
                    <div class="col-sm-9 text-secondary" style="text-transform : capitalize;">
                    <?php echo $_COOKIE['nom']." ".$_COOKIE['prenom']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_COOKIE['pseudo']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Solde</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_COOKIE['solde']; ?> €
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Téléphone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    0<?php echo $_COOKIE['tel']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary" style="text-transform : capitalize;">
                    <?php echo $_COOKIE['adress']; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Historique</i>Vos préferences</h6>
                      <small>Catégorie Quiz 1</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Catégorie Quiz 2</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Catégorie Quiz 3</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Catégorie Quiz 4</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Catégorie Quiz 5</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Historique</i>Votre Dernier Quiz</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <?php 
        $page = ob_get_clean();

        require 'template/template.php';
     ?>