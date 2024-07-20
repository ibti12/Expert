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
    bottom: 319px; /* Ajustez la position verticale selon vos préférences */
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


</head>

<body id="page-top">

    <!-- Page Wrapper -->
   

            <!-- Divider -->
           

           

            
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



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
              
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                                  
                <div class="d-sm-flex align-items-center justify-content-between mb-4"><br><br>
                <a href="{{ route('generer-rapport', ['annee' => $year]) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm boton-marron">
        <i class="fas fa-plus fa-sm text-white-50"></i> Générer rapport
    </a>
</div>


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

<div class="container">

<h1>Liste dossiers</h1>
   
    <table border="1" id="dossierTable">
        <thead>
            <tr>
               
                <th>Année</th>
                <th>Numéro</th>
                <th>Client</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
             @if($dossiers->isNotEmpty())
            @foreach($dossiers as $dossier)
            <tr>
               
               
                <td>{{ $dossier->date->format('Y') }}</td>
                <td>{{ $dossier->N°dossier}}</td>
                <td>{{ $dossier->client_nom }}</td>
                  <td><div class="file-list-item">
                  @foreach ($file as $f)
    @if ($f->file_name == $dossier->N°dossier)
        <a href="{{ route('file.show', ['id' => $f->id]) }}">voir</a>
    @endif
@endforeach
                    </div></td>
              
        @endforeach
    @else
        <tr>
            <td colspan="4"></td>Aucun dossier trouvé pour cette année.</td>
        </tr>
    @endif
        </tbody>
    </table>
</div>

<style>
     body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }

    /* Ajoutez ici vos styles CSS */
    .container {
        margin: 20px;
    }

    table {
        width: 110%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .imprimerButton {
        display: inline-block;
        padding: 8px 16px;
        background-color: #4f4528;
        color: white;
        border: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .imprimerButton:hover {
        background-color: #6d5f3b;
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
<div id="searchResults"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('searchButton').addEventListener('click', function() {
            let reportNumber = document.getElementById('report_number').value;

            // Envoie des données du formulaire en AJAX
            fetch('{{ route("rapports.search") }}?report_number=' + reportNumber)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('searchResults').innerHTML = data;
                });
        });
    });
</script>

</body>

</html>