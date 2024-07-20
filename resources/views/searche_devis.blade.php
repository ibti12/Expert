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

   
    @vite('resources/css/app.css')
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
    
                                    

   <div class="menu-bar">
    <ul>
       <li><a href="b_commande">Bon de commande</a></li>
        <li><a href="devis">Devis</a></li>
        <li><a href="facture">Facture</a></li>
        <li><a href="livraison">Livraison</a></li>
         <li><a href="dossier">Dossier</a></li>
        <li><a href="dashboard">Acceuil</a></li>
    </ul>
</div>
<style >
    .menu-bar {
    background-color: #dbc6a7; /* Marron clair */
    padding: 10px;
}

.menu-bar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.menu-bar ul li {
    display: inline;
    margin-right: 20px;
}

.menu-bar ul li:last-child {
    margin-right: 0;
}

.menu-bar ul li a {
    text-decoration: none;
    color: #4f4528; /* Marron foncé */
    font-weight: bold;
}

.menu-bar ul li a:hover {
    color: #6d5f3b; /* Marron plus foncé au survol */
}

</style>

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
                  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('devis.recherche') }}" method="get" >
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..."
            aria-label="Search" aria-describedby="basic-addon2"  name="N°">
        <div class="input-group-append">
            <button class="btn boton-marron" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>


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
<a href="#" id="toggleForm" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm boton-marron">
    <i class="fas fa-plus fa-sm text-white-50"></i> Ajouter un devis
</a>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 
<style>
    /* Style de la barre de recherche */
    .search-bar {
        position: relative;
    }

    .search-bar .btn {
        background-color: #4f4528; /* Couleur de fond du bouton */
        color: #fff; /* Couleur du texte du bouton */
    }

    /* Couleur de l'icône de recherche */
    .search-bar .btn i {
        color: #4f4528; /* Couleur de l'icône */
    }

    /* Style du bouton "Ajouter client" */
    .add-client-btn {
        background-color: #4f4528; /* Couleur de fond du bouton */
        color: #fff; /* Couleur du texte du bouton */
        border: none; /* Supprimer la bordure */
        border-radius: 5px; /* Ajouter un arrondi aux coins */
        padding: 10px 20px; /* Ajouter un espacement intérieur */
        cursor: pointer; /* Afficher le curseur comme un pointeur au survol */
    }

    .add-client-btn:hover {
        background-color: #6d5f3b; /* Couleur de fond au survol */
    }
</style>

<!-- Barre de recherche -->
<form class="search-bar form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('devis.recherche') }}" method="get">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Recherche..." aria-label="Search" aria-describedby="basic-addon2" name="N°">
        <div class="input-group-append">
            <button class="btn" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<!-- Bouton "Ajouter client" -->
<button id="toggleForm" class="add-client-btn">Ajouter client</button>

<!-- Formulaire pour ajouter un client -->
<form id="devisForm" class="d-none" method="POST" action="{{ route('devis.store') }}">
    @csrf
    <!-- Champs du formulaire -->
    <label for="N°">N°:</label><br>
    <input type="text" id="N°" name="N°"><br>
    <label for="date">Date :</label><br>
    <input type="date" id="date" name="date"><br><br>
    <!-- Autres champs du formulaire -->
    <input type="submit" value="Soumettre" style="background-color: #4f4528; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;">
</form>

<!-- JavaScript pour afficher/masquer le formulaire -->
<script>
    // Sélectionnez le bouton "Ajouter client" et le formulaire
    const toggleBtn = document.getElementById('toggleForm');
    const form = document.getElementById('devisForm');

    // Ajoutez un gestionnaire d'événement pour le clic sur le bouton
    toggleBtn.addEventListener('click', function(event) {
        // Empêcher le comportement par défaut du bouton
        event.preventDefault();

        // Vérifiez si le formulaire est actuellement caché ou affiché
        if (form.classList.contains('d-none')) {
            // Si le formulaire est caché, affichez-le
            form.classList.remove('d-none');
        } else {
            // Sinon, cachez-le
            form.classList.add('d-none');
        }
    });
</script>


<style>.boton-marron {
    background-color: #4f4528;
    color: white;
    transition: background-color 0.3s, color 0.3s; /* Ajoute une transition douce */
    position: absolute; right: 0;
}

.boton-marron:hover {
    background-color:#4f4528;
    color: white;
}</style>
                    <!-- Content Row -->
                    <div class="row">
<div class="scroll-back">
    <a href="javascript:history.back()"><<</a>
</div>
<style>
    .scroll-back {
 position: fixed;
    bottom: 331px; /* Ajustez la position verticale selon vos préférences */
    right: 1230px; /* Ajustez la position horizontale selon vos préférences */
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


<div class="container">

 
 <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Note de frais</title>
  <style>
    body {
      font-family: Raleway, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    h1, h2 {
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
    }
    th {
      background-color: #eee;
    }
    .center {
      text-align: center;
    }
    .title {
      margin-right: 50px;
    }
    .date {
      float: right;
      margin-left: 20px;
    }
  </style>
  <style>
    .transparent-border-table {
      border-collapse: collapse;
      width: 100%;
      border-color: transparent; /* Rend les bordures transparentes */
    }
    .transparent-border-table th, .transparent-border-table td {
      padding: 8px;
      text-align: left;
      border-color: transparent; /* Rend les bordures transparentes */
    }
    .transparent-border-table th {
      background-color: #f2f2f2;
    }
       .invisible-border td {
      border-left: 1px solid transparent; /* Rendre invisible seulement les traits verticaux */
      border-right: 1px solid transparent; /* Rendre invisible seulement les traits verticaux */
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">Note de frais</h1>
    <h1 class="date"><?php echo date('d/m/Y'); ?></h1>
    <table>
      <tr>
        <th colspan="2">Client : Ste SVLM - GLOBAL ENGINES</th>
        <th>                                     </th>
      </tr>
    </table>
    <h2 class="title">Déplacement</h2>
    <table class="transparent-border-table">
      <tr>
   
    <th>Ville :</th><th> CASA Régions</th>
    <th>350</th>
</tr>
</table>
    <table >
      <tr class="invisible-border">
        <th></th>
        <th>Déplacement 1</th>
        <th>Déplacement 2</th>
        <th>Déplacement 3</th>
        <th>Déplacement 4</th>
        <th>             </th>
      </tr>
      <tr>
        <td>Date aller :</td>
        <td>05/09/2023</td>.
        <td>12/09/2023</td>
        <td>19/09/2023</td>
        <td>26/09/2023</td>
        <td>           </td>
      </tr>
      <tr>
        <td>Date retour :</td>
        <td>09/09/2023</td>
        <td>16/09/2023</td>
        <td>23/09/2023</td>
        <td>30/09/2023</td>
        <td>          </td>
      </tr>
      <tr>
        <td>Kilométrage</td>
        <td>110KM</td>
         <td>110KM</td>
          <td>110KM</td>
           <td>110KM</td>
           <td>      </td>
       </tr>
    </table><br>
     
    <table class="invisible-border">
        <tr>
            <th>
      <tr>
        <th>Repas</th>
        <td>300</td>
        <td>300</td>
        <td>300</td>
        <td>300</td>
        <td>1,200,00DH</td>
      </tr>
  </table>
  <table>
      <tr>
        <td>Indémnités Kilométriques</td>
        <td>1.518,00</td>
      </tr>
      <tr>
        <td>Parking</td>
        <td>200,00</td>
      </tr>
      <tr>
        <td>Autres</td>
        <td>100,00</td>
      </tr>
    </table>
    <table>
      <tr>
        <th>Date aller</th>
        <th>Date retour</th>
        <th>Kilométrage</th>
        <th>Forfait/Jour</th>
      </tr>
      <tr>
        <td>05/09/2023</td>
        <td>09/09/2023</td>
        <td>110 Km</td>
        <td>Forfait/Jour</td>
      </tr>
      <tr>
        <td>12/09/2023</td>
        <td>16/09/2023</td>
        <td>110 Km</td>
        <td>Forfait/Jour</td>
      </tr>
      <tr>
        <td>19/09/2023</td>
        <td>23/09/2023</td>
        <td>110 Km</td>
        <td>Forfait/Jour</td>
      </tr>
      <tr>
        <td>26/09/2023</td>
        <td>30/09/2023</td>
        <td>110 Km</td>
        <td>Forfait/Jour</td>
      </tr>
    </table>
    <table>
      <tr>
        <th>Taux kilométrique</th>
        <th>440 Km</th>
      </tr>
      <tr>
        <td>Repas</td>
        <td>300</td>
      </tr>
      <tr>
        <td>Parking</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Autres</td>
        <td>100</td>
      </tr>
    </table>
    <table>
      <tr>
        <th>Nom du collaborateur</th>
        <th>Validation</th>
        <th>Règlement</th>
        <th>Avance</th>
        <th>Reste</th>
      </tr>
      <tr>
        <td>Ghizlane ERROUSSAFI</td>
        <td>Hicham AMI</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>
</body>
</html>

                    
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
