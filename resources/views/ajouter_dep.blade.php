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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
    <div class="scroll-back">
        <a href="javascript:history.back()"><<</a>
    </div>
    <style>
        /* Votre style CSS ici */
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <!-- Divider -->
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <br><br><br>
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
                <form method="POST" action="{{ route('deplacements.store') }}">
                    @csrf
                    <h1>Ajouter un enregistrement</h1>
                    <h6>Infos générale :</h6>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="date">Date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="date" id="date" name="date" class="form-control" value="{{ old('date') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lieu">Lieu :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="lieu" name="lieu" class="form-control" value="{{ old('lieu') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nom">Client:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="num_dossier">N° dossier:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="num_dossier" name="num_dossier" class="form-control" value="{{ old('num_dossier') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="mission">Mission:</label>
                            <select name="mission">
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
                        </div><br>
                       
                    </div>
                    <div class="form-row">
                        
                        <div class="form-group col-md-6">
                            <label for="validation">Validation:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="validation" name="validation" class="form-control" value="{{ old('validation') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reglement">Règlement:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="reglement" name="reglement" class="form-control" value="{{ old('reglement') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="avance">Avance:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="avance" name="avance"  step="0.01" min="0"class="form-control" value="{{ old('avance') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reste">Reste:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="reste" name="reste"  step="0.01" min="0"class="form-control" value="{{ old('reste') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        
                        <div class="form-group col-md-6">
                            <label for="nbr_jour">Nombre du jours:</label>
                            <input type="number" id="nbr_jours" name="nbr_jours" class="form-control" value="{{ old('nbr_jours') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="collaborateur">Collaborateur:</label>
                            <input type="text" id="collaborateur" name="collaborateur" class="form-control" value="{{ old('collaborateur') }}">
                        </div>
                        </div>
                    <h5>les Frais :</h5>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="repas">Repas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" id="repas" name="repas" step="0.01" min="0" class="form-control" value="{{ old('repas') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="taux">Taux kilométrique:</label>
                            <input type="number" id="taux" name="taux" step="0.01" min="0" class="form-control" value="{{ old('taux') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="autoroute">Autoroute:</label>
                            <input type="number" id="autoroute" name="autoroute" step="0.01" min="0" step="0.01" min="0" step="0.01" min="0" class="form-control" value="{{ old('autoroute') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hotel">Hotel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" id="hotel" name="hotel" step="0.01" min="0" class="form-control" value="{{ old('hotel') }}">
                        </div>
                    </div>
                  
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="taxi">Taxi:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" id="taxi" name="taxi" step="0.01" min="0" class="form-control" value="{{ old('taxi') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="parking">Parking :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                            <input type="number" id="parking" name="parking"   step="0.01" min="0" class="form-control" value="{{ old('parking') }}">
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="invitation">Invitaion:&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" id="invitation" name="invitation"  step="0.01" min="0" class="form-control" value="{{ old('invitation') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gasoil">Gasoil: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" id="gasoil"  step="0.01" min="0" name="gasoil" class="form-control" value="{{ old('gasoil') }}">
                        </div>
                        <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="autre">Autres:</label>
                            <input type="number" id="autre" name="autre"  step="0.01" min="0" step="0.01" min="0"  class="form-control" value="{{ old('autre') }}">
                        </div>
                        </div>
                        </div>
                    <button type="submit" class="button-85">Soumettre</button>
                </form>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min"></script>
<style>/* Couleurs */
:root {
    --marron-fonce: #4f4528;
    --marron-moyen: #7d6e4e;
    --marron-clair: #c9ba94;
}

body {
    font-family: Raleway, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f2efe8 ;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    font-weight: bold;
    color: var(--marron-fonce);
}

.form-group input[type="text"],
.form-group input[type="date"],
.form-group input[type="number"] {
    width: calc(50% - 10px);
    padding: 10px;
    border: 1px solid var(--marron-moyen);
    border-radius: 5px;
    box-sizing: border-box;
    margin-right: 10px;
    display: inline-block;
}

.form-group input[type="text"]:last-child,
.form-group input[type="date"]:last-child,
.form-group input[type="number"]:last-child {
    margin-right: 0;
}

.button-85 {
    display: block;
    margin: 0 auto;
    padding: 10px 20px;
    border: none;
    outline: none;
    color: rgb(255, 255, 255);
    background: var(--marron-fonce);
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
}

.button-85:before {
    content: "";
    background: linear-gradient(
        45deg,
        #ff0000,
        #ff7300,
        #fffb00,
        #48ff00,
        #00ffd5,
        #002bff,
        #7a00ff,
        #ff00c8,
        #ff0000
    );
    position: absolute;
    top: -2px;
    left: -2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    -webkit-filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing-button-85 20s linear infinite;
    transition: opacity 0.3s ease-in-out;
    border-radius: 10px;
}

@keyframes glowing-button-85 {
    0% {
        background-position: 0 0;
    }
    50% {
        background-position: 400% 0;
    }
    100% {
        background-position: 0 0;
    }
}

.button-85:after {
    z-index: -1;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: var(--marron-fonce);
    left: 0;
    top: 0;
    border-radius: 10px;
}

.scroll-back {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: var(--marron-fonce);
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
    background-color: var(--marron-moyen);
}
</style>
