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
    
                                    

  

 <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="ajouter_dos" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm boton-marron"><i class="fas fa-plus fa-sm text-white-50"></i>
    Ajouter un dossier</a>
</div>
                    <!-- Topbar Search -->
                  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
            aria-label="Search" aria-describedby="basic-addon2">
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

<style> body {
            font-family: 'Raleway', sans-serif; /* Utilisation de Raleway comme police par défaut */
        }
.boton-marron {
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
    bottom: 350px; /* Ajustez la position verticale selon vos préférences */
    right: 1250px; /* Ajustez la position horizontale selon vos préférences */
    background-color: #4f4528;
    color: #fff;
    padding: 10px;
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
@php
    $dossiers = App\Models\Dossier::all();
@endphp
<div class="container">
    <h1>Liste dossiers</h1>
   <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dossiers as $dossier)
        <tr onclick="showDossier({{$dossier->id }},'{{ $dossier->nom }}','{{ $dossier->description }}')">
            <td>{{ $dossier->id }}</td>
            <td>{{ $dossier->nom }}</td>
            <td>{{ $dossier->description }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div id="dossierDetails">
    <p>Sélectionnez un dossier pour afficher les détails.</p>
</div>

<script>
    function showDossier(id, nom, description) {
        document.getElementById('dossierDetails').innerHTML = `
            <h2>Dossier ${id}</h2>
            <p><strong>Nom:</strong> ${nom}</p>
            <p><strong>Description:</strong> ${description}</p>
            <!-- Ajoutez d'autres détails du dossier ici selon vos besoins -->
        `;
    }
</script>
</div>

<style>
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

</body>

</html>