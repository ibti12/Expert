<!DOCTYPE html>
<html lang="en">
<img src="{{ asset('image/track.png') }}" alt="Nom de l'image" class="image"><br><br><br>
    <style>
        .image {
    width: 130pX; /* Largeur de l'image */
    height: 90px; /* Hauteur automatique pour maintenir les proportions */
    position: absolute; /* Position absolue par rapport au conteneur parent */
    top: -2px; /* Distance depuis le haut */
    left: 15px; /* Distance depuis la gauche */
    border-radius: 10px; /* Bord arrondi */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Ombre */
    opacity: 0.7; /* Opacité */
}</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
<div class="scroll-back">
    <a href="javascript:history.back()"><<</a>
</div>
<style>
    .scroll-back {
    position: fixed;
    bottom: 372px; /* Ajustez la position verticale selon vos préférences */
    right: 1213px; /* Ajustez la position horizontale selon vos préférences */
    background-color: #4f4528;
    color: #fff;
    padding: 15px;
    border-radius: 5px;
    cursor: pointer;
    z-index: 9999;
}

.scroll-back a {
    color: #fff;
    text-decoration: none;
}

.scroll-back:hover {
    background-color: #333;
}
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
   

            <!-- Divider -->
           

           

            
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                           
                     
                            
                                
                                    
                                   
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                    <!-- Page Heading -->
                   
                    <!-- Content Row -->
                    </li>
                <div class="container">
                     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>Ajout d'un nouvel enregistrement</h2>
    <form action="{{ route('dossiers.store') }}" method="post">
        @csrf
   
        <!-- Informations de l'enregistrement -->
        <div class="section">
            <h3>Informations de l'enregistrement</h3>
           
        <div class="row">
    <div class="col-md-6">
        <label>N°dossier:</label>
        <input type="text" name="N°dossier" class="form-control">
    </div>
    <div class="col-md-6">
        <label>client:</label>
        <input type="text" name="client_nom" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
     <label>Type:   </label>
            <select name="type">
    <optgroup label="Valeur Vénale">
        <option value="valeur_venale">Valeur Vénale</option>
        <option value="valeur_venale_terrain">Valeur Vénale (Terrain)</option>
        <option value="valeur_venale_construction">Valeur Vénale (Construction)</option>
        <option value="valeur_venale_materiale">Valeur Vénale (Matériale)</option>
        <option value="valeur_venale_mixte">Valeur Vénale (Terrain; Construction; Matériale)</option>
    </optgroup>
    <optgroup label="Valeur d'Assurance">
        <option value="valeur_d_assurance">Valeur d'Assurance</option>
    </optgroup>
    <optgroup label="Expertise Immobilier">
        <option value="expertise_immobilier">Expertise Immobilier</option>
        <option value="expertise_immobilier_terrain">Expertise Immobilier (Terrain)</option>
        <option value="expertise_immobilier_construction">Expertise Immobilier (Construction)</option>
        <option value="expertise_immobilier_mixte">Expertise Immobilier (Terrain; Construction)</option>
    </optgroup>
    <optgroup label="Rapprochement des Immobilisations Comptables">
        <option value="rapprochement_immobilisations_comptables">Rapprochement des Immobilisations Comptables</option>
    </optgroup>
    <optgroup label="Inventaire Divers">
        <option value="inventaire_divers">Inventaire Divers</option>
        <option value="inventaire_divers_biens">Inventaire Divers (Biens)</option>
        <option value="inventaire_divers_stocks">Inventaire Divers (Stocks)</option>
        <option value="inventaire_divers_mixte">Inventaire Divers (Biens; Stocks)</option>
    </optgroup>
    <optgroup label="Valeur d'Apport de Fusion Absorption">
        <option value="valeur_apport_fusion_absorption">Valeur d'Apport de Fusion Absorption</option>
    </optgroup>
    <optgroup label="Sinistre">
        <option value="sinistre">Sinistre</option>
        <option value="sinistre_construction_batiments">Sinistre (Construction Batiments)</option>
        <option value="sinistre_materie_et_contenu">Sinistre (Matériel et Contenu)</option>
        <option value="sinistre_marchandise">Sinistre (Marchandise)</option>
        <option value="sinistre_perte_exploitation">Sinistre (Perte d'Exploitation)</option>
        <option value="sinistre_rc">Sinistre (RC)</option>
    </optgroup>
</select>

            <!-- Options de type -->
        </select>
    </div>
    <div class="col-md-6">
        <label>Date:</label>
        <input type="date" name="date" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>Détails:</label>
        <textarea name="details" rows="4" class="form-control"></textarea>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
<!-- Boutons radio pour annexes -->
<label for="annexes_oui">Annexes : <br>- Oui</label>
<input type="radio" id="annexes_oui" name="annexes" value="1">
<label for="annexes_non">Non</label>
<input type="radio" id="annexes_non" name="annexes" value="0">
</div>
</div>
<div class="row">
    <div class="col-md-6">
<!-- Cases à cocher pour photos -->
<label for="photos">Photos :</label>
<input type="checkbox" id="photos" name="photos" value="1">

<!-- Cases à cocher pour rap_photos -->
<label for="rap_photos">Rapports Photos :</label>
<input type="checkbox" id="rap_photos" name="rap_photos" value="1">

<!-- Cases à cocher pour attestation -->
<label for="attestation">Attestation :</label>
<input type="checkbox" id="attestation" name="attestation" value="1">
</div>
</div>
<div class="row">
    <div class="col-md-6">
<!-- Bouto<ns radio pour pv -->
<label for="pv_oui">Procès-Verbal <br>- Oui</label>
<input type="radio" id="pv_oui" name="pv" value="1">
<label for="pv_non">Non</label>
<input type="radio" id="pv_non" name="pv" value="0">
<br>
<label for="PDF">PDF :</label>
<input type="checkbox" id="PDF" name="PDF" value="1">
<label for="word">Word :</label>
<input type="checkbox" id="word" name="word" value="1">
      </div>
      </div>  <!-- Bouton d'envoi -->
        <button class="submit-button" type="submit">Soumettre</button>
    </form>
</div>


<style>
          input[type="text"],
        select,
        textarea {
            width: 300px; /* ou toute autre valeur de largeur souhaitée */
        }
 
     body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }

.container {
    width: 60%;
    margin: 20px auto;
    padding: 20px;
    background-color: #f5f5f5; /* Fond gris clair */
    border-radius: 15px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Ombre douce */
}

h2 {
    color: #4f4528; /* Marron foncé */
    border-bottom: 2px solid #4f4528; /* Bordure basse marron foncé */
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.label {
    font-weight: bold;
    color: #4f4528; /* Marron foncé */
}

.input-field {
    width: calc(100% - 20px);
    padding: 10px;
    border: 1px solid #4f4528; /* Bordure marron foncé */
    border-radius: 5px;
    margin-bottom: 10px;
}

.submit-button {
    width: 100%;
    padding: 10px;
    background-color: #4f4528; /* Marron foncé */
    color: #fff; /* Texte blanc */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-button:hover {
    background-color: #6d5f3b; /* Marron plus foncé au survol */
}

</style>
</form>

             </div>       
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>

</html>