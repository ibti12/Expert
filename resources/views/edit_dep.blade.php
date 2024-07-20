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

        h1, p {
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
    right: 1212px; /* Ajustez la position horizontale selon vos préférences */
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

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #c9ba94; /* Couleur marron légère */
    border-radius: 10px;
}

.container h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    font-weight: bold;
}

.form-group input[type="text"],
.form-group textarea,
.form-group select {
    width: 95%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.button-85 {
  display: block;
  margin: 0 auto;
  padding: 10px 20px;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background: #4f4528; /* Fond marron */
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
  background: #4f4528; /* Fond marron */
  left: 0;
  top: 0;
  border-radius: 10px;
}
 body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
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
                
                                    
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                    <!-- Page Heading -->
                   
                    <!-- Content Row -->
                    <br><br><br>
<div class="container">
      <form action="{{ route('deplacements.update', ['id' => $deplacement->id]) }}" method="POST">
    @csrf
    @method('PUT')
        
    <h2>Modification du déplacement <?php echo $deplacement['id']; ?></h2>
    <h6>Infos générale :</h6>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="date">Date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="date" id="date" name="date" class="form-control" value="{{ $deplacement->date }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lieu">Lieu :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="lieu" name="lieu" class="form-control" value="{{ $deplacement->lieu}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nom">Client:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="{{ $deplacement->nom }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="num_dossier">N° dossier:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="num_dossier" name="num_dossier" class="form-control" value="{{ $deplacement->num_dossier }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="mission">Mission:</label>
                            <select name="mission" value= "{{ $deplacement->mission }}">
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
                            <input type="text" id="validation" name="validation" class="form-control" value="{{ $deplacement->validation}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reglement">Règlement:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="reglement" name="reglement" class="form-control" value="{{ $deplacement->reglement}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="avance">Avance:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="avance" name="avance" class="form-control" value="{{ $deplacement->avance }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reste">Reste:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" id="reste" name="reste" class="form-control" value="{{ $deplacement->reste }}">
                        </div>
                    </div>
                    <div class="form-row">
                        
                        <div class="form-group col-md-6">
                            <label for="nbr_jour">Nombre du jours:</label>
                            <input type="number" id="nbr_jours" name="nbr_jours" class="form-control" value="{{ $deplacement->nbr_jours}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="collaborateur">Collaborateur:</label>
                            <input type="text" id="collaborateur" name="collaborateur" class="form-control" value="{{ $deplacement->collaborateur }}">
                        </div>
                        </div>
                    <h5>les Frais :</h5>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="repas">Repas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" id="repas" name="repas" class="form-control" value="{{ $deplacement->repas }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="taux">Taux kilométrique:</label>
                            <input type="number" id="taux" name="taux" class="form-control" value="{{ $deplacement->taux }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="autoroute">Autoroute:</label>
                            <input type="number" id="autoroute" name="autoroute" class="form-control" value="{{ $deplacement->autoroute }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hotel">Hotel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" id="hotel" name="hotel" class="form-control" value="{{ $deplacement->hotel }}">
                        </div>
                    </div>
                  
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="taxi">Taxi:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" id="taxi" name="taxi" class="form-control" value="{{ $deplacement->taxi}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="parking">Parking :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                            <input type="number" id="parking" name="parking" class="form-control" value="{{ $deplacement->parking}}">
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="invitation">Invitaion:&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" id="invitation" name="invitation" class="form-control" value="{{ $deplacement->invitation }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gasoil">Gasoil: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" id="gasoil" name="gasoil" class="form-control" value="{{ $deplacement->gasoil }}">
                        </div>
                        <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="autre">Autres:</label>
                            <input type="number" id="autre" name="autre" class="form-control" value="{{ $deplacement->autre }}">
                        </div>
                        </div>
                        </div>
                    <button type="submit" class="button-85">Mettre à jour</button>
                </form>
            </div>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>