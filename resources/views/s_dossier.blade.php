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
    
                                    

    <div class="menu-bar">
    <nav>
        <ul>  <li>
        <li><a href="dashboard">Acceuil</a></li>
       
       
       <li><a href="b_commande">Bon de commande</a></li>
        <li><a href="devis">Devis</a></li>
        <li><a href="facture">Facture</a></li>
        <li><a href="livraison">Livraison</a></li>
         <li><a href="deplacement">Déplacement</a></li>
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
                 <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('dossiers.recherche') }}" method="get" >
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..."
            aria-label="Search" aria-describedby="basic-addon2"  name="client_nom">
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
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="dos"class="imprimerButton"><i class="fas fa-plus fa-sm text-white-50"></i>
    Téléverser pdf</a>
</div>

<div class="container">
   
    <table border="1" id="rapportTable">
        <thead>
            <tr>
                <th>N°dossier</th>
                <th>Type</th>
                <th>Client</th>
                <th>Date</th>
                <th>plus</th>
                <th>status</th>
                <th>Détails</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
             @if($dossiers->isNotEmpty())
            @foreach($dossiers as $dossier)
            <tr>
                <td>{{ $dossier->N°dossier }}</td>
                <td>{{ $dossier->type }}</td>
                <td>{{ $dossier->client_nom}}</td>
                 <td>{{ $dossier->date }}</td>
                   <td><!-- Champs de type radio pour annexes -->
<!-- Radio buttons for Annexes -->
<label for="annexes">Annexes :</label>
<input type="checkbox" id="annexes" name="annexes" value="1" {{ $dossier->annexes ? 'checked' : '' }}>
<br>

<!-- Checkboxes for Photos -->
<label for="photos">Photos :</label>
<input type="checkbox" id="photos" name="photos" value="1" {{ $dossier->photos ? 'checked' : '' }}>
<br>

<!-- Checkboxes for Rapports Photos -->
<label for="rap_photos">Rapports Photos :</label>
<input type="checkbox" id="rap_photos" name="rap_photos" value="1" {{ $dossier->rap_photos ? 'checked' : '' }}>
<br>

<!-- Checkboxes for Attestation -->
<label for="attestation">Attestation :</label>
<input type="checkbox" id="attestation" name="attestation" value="1" {{ $dossier->attestation ? 'checked' : '' }}>
<br>

<!-- Checkboxes for Attestation -->
<label for="pv">Procés verbale :</label>
<input type="checkbox" id="pv" name="pv" value="1" {{ $dossier->pv ? 'checked' : '' }}>
<br>

<!-- Add other radio buttons and checkboxes for other boolean values -->


<div class="file-list-item">
@foreach ($file as $f)
    @if ($f->file_name == $dossier->N°dossier)
        <a href="{{ route('file.show', ['id' => $f->id]) }}">voir</a>
    @endif
@endforeach
</div>



</td>
                     
            <td>
                    @if($dossier->PDF == 1)
                        PDF
                    @else
                        Word
                    @endif
                </td>
                <td>{{ $dossier->details}}</td>


                <td>
                    <a href="/dossiers/{{ $dossier->id }}/edit" class="imprimerButton"> <i class="fa fa-edit"></i></a><br><br>
                         <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer ce dossier ?')) { document.getElementById('delete-form-{{ $dossier->id }}').submit(); }" class="imprimerButton"> <i class="fa fa-trash"></i></a>

                 <form id="delete-form-{{ $dossier->id }}" action="{{ route('dos.destroy', $dossier->id) }}" method="post" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
         @else
        <tr>
            <td colspan="4">Aucun résultat trouvé pour ce client.</td>
        </tr>
    @endif
        </tbody>
    </table>
</div>

<style>
 
    /* Style pour les inputs radio */
input[type="radio"] {
    -webkit-appearance: none; /* Supprimer les styles par défaut */
    -moz-appearance: none;
    appearance: none;
    width: 20px; /* Taille de l'input */
    height: 20px;
    border: 2px solid #4f4528; /* Couleur de la bordure */
    border-radius: 50%; /* Pour rendre l'input arrondi */
    outline: none; /* Supprimer la bordure de focus */
    background-color: transparent; /* Fond transparent */
    margin-right: 10px; /* Espacement à droite */
    vertical-align: middle;
}

/* Style pour les inputs cochés */
input[type="radio"]:checked {
    background-color: #4f4528; /* Couleur de fond lorsque l'input est coché */
}

/* Style pour les cases à cocher */
input[type="checkbox"] {
    -webkit-appearance: none; /* Supprimer les styles par défaut */
    -moz-appearance: none;
    appearance: none;
    width: 20px; /* Taille de l'input */
    height: 20px;
    border: 2px solid #4f4528; /* Couleur de la bordure */
    border-radius: 4px; /* Pour rendre l'input arrondi */
    outline: none; /* Supprimer la bordure de focus */
    background-color: transparent; /* Fond transparent */
    margin-right: 10px; /* Espacement à droite */
    vertical-align: middle;
}

/* Style pour les cases à cocher cochées */
input[type="checkbox"]:checked {
    background-color: #4f4528; /* Couleur de fond lorsque l'input est coché */
}

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

</body>

</html>