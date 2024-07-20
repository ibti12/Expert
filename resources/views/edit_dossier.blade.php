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

   
    <style>
        body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }

        h1, p,h3 {
            color: #808080; /* Gris */
        }
    </style>
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
                <nav class="navbar navbar-expand navbar-light">

                    <!-- Sidebar Toggle (Topbar) -->
                  
                    <!-- Topbar Search -->
                    
                  
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                    <!-- Page Heading -->
                   
                    <!-- Content Row -->
                    </li>
                <div class="container">
                <h3 class="text-gray-500">Editer le dossier {{ $dossier->N°dossier }} </h3>
    <form action="{{ route('dossiers.update', ['id' => $dossier->id]) }}" method="post">
    @csrf
    @method('PUT')
    
    <!-- Informations de l'enregistrement -->
    <div class="section">
      
        <label>N°dossier:</label>
        <input type="text" name="N°_dossier" value="{{ $dossier->N°dossier }}"><br><br>
        <label for="type">type:</label>
                            <select name="type" value= "{{ $dossier->type }}">
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
<br><br>&nbsp;
        <label>client:</label>
        <input type="text" name="client_nom" value="{{ $dossier->client_nom }}">&nbsp;
        <label>Date:</label>
        <input type="date" name="date" value="{{ $dossier->date }}"><br><br>
        <label>Détails:</label>
        <textarea name="details" rows="4" cols="50">{{ $dossier->details }}</textarea>
    </div><br>
 <label for="annexes">Annexes :</label>
    <input type="checkbox" id="annexes" name="annexes" value="1" {{ $dossier->annexes ? 'checked' : '' }}>
    <br>

    <label for="photos">Photos :</label>
    <input type="checkbox" id="photos" name="photos" value="1" {{ $dossier->photos ? 'checked' : '' }}>
    <br>

    <label for="rap_photos">Rapports Photos :</label>
    <input type="checkbox" id="rap_photos" name="rap_photos" value="1" {{ $dossier->rap_photos ? 'checked' : '' }}>
    <br>

    <label for="attestation">Attestation :</label>
    <input type="checkbox" id="attestation" name="attestation" value="1" {{ $dossier->attestation ? 'checked' : '' }}>
    <br>

    <label for="pv">Procès-Verbal :</label>
    <input type="checkbox" id="pv" name="pv" value="1" {{ $dossier->pv ? 'checked' : '' }}>
    <br>

    <label for="PDF">PDF:</label>
    <input type="checkbox" id="PDF" name="PDF" value="1" {{ $dossier->PDF ? 'checked' : '' }}>
    <br>

    <label for="word">Word :</label>
    <input type="checkbox" id="word" name="word" value="1" {{ $dossier->word ? 'checked' : '' }}>
    <br>

    <!-- Bouton d'envoi -->
    <button class="submit-button" type="submit">Mettre à jour</button>
</form>

</div>


<style>
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