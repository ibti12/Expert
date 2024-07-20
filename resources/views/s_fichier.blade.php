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
    bottom: 320px; /* Ajustez la position verticale selon vos préférences */
    right: 1216px; /* Ajustez la position horizontale selon vos préférences */
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


</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
   

            <!-- Divider -->
           

           

            
            

        </ul>
        <!-- End of Sidebar -->
 <div class="menu-bar">
    <nav>
        <ul>
            <li><a href="dashboard">Accueil</a></li>
        </ul>
    </nav>
</div>

<style>
    .menu-bar {
        background-color:  #dbc6a7;; /* Bleu foncé */
        padding: 15px 0;
        text-align: center;
    }

    .menu-bar nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .menu-bar nav ul li {
        display: inline-block;
        margin-right: 20px;
    }

    .menu-bar nav ul li:last-child {
        margin-right: 0;
    }

    .menu-bar nav ul li a {
        text-decoration: none;
        color: #4f4528;; /* Blanc */
        font-weight: bold;
        font-size: 18px;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .menu-bar nav ul li a:hover {
        background-color: #4f4528; /* Bleu clair au survol */
        color: #fff; /* Blanc au survol */
    }
</style>


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

                   <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('client.recherche') }}" method="get" >
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..."
            aria-label="Search" aria-describedby="basic-addon2"  name="NOM">
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

                <!-- Begin Page Content -->
                
                    <!-- Page Heading -->
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
  
    <a href="client" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm boton-marron float-right"><i class="fas fa-plus fa-sm text-white-50"></i>
    Ajouter un Entreprise/client </a>
</div>




                      
<div class="container">

   
    <style>
        .boton-marron {
    background-color: #4f4528;
    color: white;
    transition: background-color 0.3s, color 0.3s; /* Ajoute une transition douce */
 position: absolute; right: 0;
}

.boton-marron:hover {
    background-color:#4f4528;
    color: white;
}
        body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            display: ruby;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            width: 300px;
            background-color: #efe8dc;
            border-radius: 5px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background-color: #4f4528;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            border-bottom: 2px solid #7a6048;
        }

        .card-body {
            padding: 20px;
        }

        .info {
            margin-bottom: 15px;
        }

        .info label {
            font-weight: bold;
            color: #7a6048;
        }

        .info p {
            margin: 5px 0;
            color: #403025;
        }

        .info p:last-child {
            margin-bottom: 0;
        }
        .btn-more-info {
    background-color: #6d5f3b; /* Marron */
    color: #ffffff; /* Blanc pour le texte */
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.btn-more-info:hover {
    background-color: #4f4528; /* Marron plus foncé au survol */
}
  .link {
            display: inline-block;
            padding: 10px 20px;
            background-color:#4f4528;
            color: #fff; /* Couleur du texte */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .link:hover {
            background-color: #ddd; /* Couleur au survol */
        }

    </style>
   
    <div class="container">
   
</div>

    
      

        <!-- Fiche 2 -->
    
     <div class="card-deck">
            @foreach($clients as $cl)
            <div class="card">
                <div class="card-header">Client{{ $cl->id }}</div>
                <div class="card-body">
                    <div class="info">
                        <label>Nom du client :</label>
                        <p>{{ $cl->NOM }}</p>
                    </div>
                    <div class="info">
                        <label>Adresse :</label>
                        <p>{{ $cl->ADRESSE }}</p>
                        <p>{{ $cl->VILLE }}</p>
                    </div>
                    <div class="info">
                        <label>Téléphone :</label>
                        <p>{{ $cl->TELEPHONE }}</p>
                    </div>
                    <div class="info">
                        <label>Email :</label>
                        <p>{{ $cl->EMAIL }}</p>
                    </div>
                    <a href="/client/details/{{ $cl->id }}" class="link">Détails</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>



        <!-- Ajoutez autant de fiches que nécessaire -->
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