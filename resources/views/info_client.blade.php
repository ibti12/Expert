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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
   

            <!-- Divider -->
           

           

            
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
     

                    <!-- Topbar Navbar -->
                   
                     
                            
                                
                                    
                                   
                  

                </nav>
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
</style>

                <!-- Begin Page Content -->
                
                
<div class="container">

   
    <div class="client-info">
    <h2 style="color: #4f4528;">Informations {{ $client->NOM }}</h2>
     <ul>
        <li><strong style="color: #4f4528;">Nom:</strong> {{ $client->NOM }}</li>
        <li><strong style="color: #4f4528;">Adresse:</strong> {{ $client->ADRESSE }}</li>
        <li><strong style="color: #4f4528;">Ville:</strong> {{ $client->VILLE }}</li>
        <li><strong style="color: #4f4528;">Téléphone:</strong> {{ $client->TELEPHONE }}</li>
        <li><strong style="color: #4f4528;">Email:</strong> {{ $client->EMAIL }}</li>
        <li><strong style="color: #4f4528;">SITES:</strong> {{ $client->SITES }}</li>
        <li><strong style="color: #4f4528;">GPS:</strong> {{ $client->GPS}}</li>
        <li><strong style="color: #4f4528;">ICE:</strong> {{ $client->IE }}</li>
        <li><strong style="color: #4f4528;">TP:</strong> {{ $client->TP }}</li>
        <li><strong style="color: #4f4528;">IF:</strong> {{ $client->IF}}</li>
        <li><strong style="color: #4f4528;">CNSS:</strong> {{ $client->CNSS }}</li>
        <li>  <li><a  class="link" href="{{ route('client.dossiers', ['client_nom' => $client->NOM]) }}">Voir les dossiers</a></li>
</li>

        <!-- Ajoutez d'autres détails du client ici selon vos besoins -->
        <!-- Assurez-vous d'utiliser les noms de colonnes de votre modèle Client -->
    </ul>
    

    </div>
   
</div>

    </div>
          
        <style>
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

    body {
        font-family: Raleway, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f2efe8;
    }

    .client-info {
        border: 2px solid #4f4528;
        border-radius: 10px;
        padding: 20px;
        width: 400px;
        margin: 0 auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .client-info h2 {
        color: #4f4528;
        margin-bottom: 20px;
        text-align: center;
    }

    .client-info ul {
        list-style-type: none;
        padding: 0;
        margin-bottom: 20px;
    }

    .client-info li {
        margin-bottom: 10px;
    }

    .client-info li strong {
        display: inline-block;
        width: 100px;
        color: #6c757d;
    }

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

    .scroll-back:hover {
        background-color: #333;
    }
</style>

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