<!DOCTYPE html>
<html lang="en">
<img src="{{ asset('image/track.png') }}" alt="Nom de l'image" class="image"><br><br><br><br>
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
        <li><a href="dossier">Dossier</a></li>
       
       <li><a href="b_commande">Bon de commande</a></li>
        <li><a href="devis">Devis</a></li>
        <li><a href="facture">Facture</a></li>
       
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
                 <!-- Topbar -->
                 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>
<!-- Topbar Search -->
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('livraison.recherche') }}" method="get">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small max-width-input" placeholder="Rechercher..."
            aria-label="Search" aria-describedby="basic-addon2"  name="nom">
        <div class="input-group-append">
            <button class="btn boton-marron" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>


                    <!-- Topbar Navbar -->
                   

                </nav>
                <!-- End of Topbar -->
<a href="#" id="toggleForm" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm boton-marron">
    <i class="fas fa-plus fa-sm text-white-50"></i> Ajouter une livraison
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
<form id="devisForm" class="d-none" method="POST" action="{{ route('livraisons.store') }}">
    @csrf
    <!-- Vos champs de formulaire ici -->
    <label for="lieu">Lieu:</label><br>
    <input type="text" id="lieu" name="lieu"><br>
    <label for="date">Date :</label><br>
    <input type="date" id="date" name="date"><br><br>
    <label for="nom">Client :</label><br>
    <input type="text" id="nom" name="nom"><br><br>
      <label for="N°dossier">N°dossier:</label><br>
    <input type="text" id="N°dossier" name="N°dossier"><br><br>
    <label for="status">Status :</label><br>
<input type="checkbox" id="status" name="status" value="1">
   <!-- Checked means true, unchecked means false -->
<br>
    <!-- Ajoutez d'autres champs de formulaire ici -->
   <input type="submit" value="Soumettre" style="background-color: #4f4528; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;">

</form>

<!-- JavaScript pour afficher/masquer le formulaire -->
<script>
    // Sélectionnez le lien et le formulaire
    const toggleBtn = document.getElementById('toggleForm');
    const form = document.getElementById('devisForm');

    // Ajoutez un gestionnaire d'événement pour le clic sur le lien
    toggleBtn.addEventListener('click', function(event) {
        // Empêcher le comportement par défaut du lien
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

<style>
/* Style pour le formulaire de recherche */
.navbar-search {
    display: flex;
    align-items: center;
    justify-content: flex-end; /* Alignement des éléments à droite */
}

/* Style pour le groupe de critère de recherche */
.navbar-search .form-group {
    margin-left: 20px; /* Espacement entre les éléments */
}

/* Style pour le champ de sélection du critère */
.navbar-search #critere {
    width: 150px; /* Largeur du champ de sélection */
    padding: 8px; /* Espacement interne */
    border: 2px solid #4f4528; /* Bordure */
    border-radius: 5px; /* Bordure arrondie */
    margin-right: 20px; /* Ajustement de la marge à droite */
}

/* Style pour les champs de saisie de lieu et de date */
.navbar-search .form-group input[type="text"],
.navbar-search .form-group input[type="date"] {
    width: 200px; /* Largeur des champs de saisie */
    padding: 8px; /* Espacement interne */
    border: 2px solid #4f4528; /* Bordure */
    border-radius: 5px; /* Bordure arrondie */
}

/* Style pour le bouton de recherche */
.navbar-search .input-group-append button {
    background-color: #4f4528; /* Couleur de fond du bouton */
    color: white; /* Couleur du texte du bouton */
    border: none; /* Suppression de la bordure */
    padding: 8px 15px; /* Espacement interne du bouton */
    border-radius: 5px; /* Bordure arrondie */
    cursor: pointer; /* Curseur pointeur au survol */
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
}
body {
            font-family: 'Raleway', sans-serif; /* Utilisation de Raleway comme police par défaut */
        }
</style>
                    <!-- Content Row -->
                    <div class="row">


@php
    $livraisons = App\Models\Livraison::all();
@endphp  
<div class="container">

  
    <h1>Liste des livraisons</h1>
    <table border="1" id="rapportTable">
        <thead>
            <tr>
                 <th>N°dossier</th>
                <th>Lieu</th>
                <th>Date</th>
                 <th>Client</th>
                 <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livraisons as $livraison)
            <tr>
               <td>{{ $livraison->N°dossier}}</td>
                <td>{{ $livraison->lieu}}</td>
                <td>{{ $livraison->date }}</td>
                <td>{{ $livraison->nom }}</td>
                    <td>
                    @if($livraison->status== 1)
                        livré
                    @else
                        Non livré
                    @endif
                </td>
                <td><a href="/livraison/{{$livraison->id}}/edit" style="background-color: #4f4528; color: white;" class="imprimerButton"> <i class="fa fa-edit"></i></a>
                     <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cette livraison?')) { document.getElementById('delete-form-{{ $livraison->id }}').submit(); }" class="imprimerButton"> <i class="fa fa-trash"></i></a>

                 <form id="delete-form-{{ $livraison->id }}" action="{{ route('livraisons.destroy', $livraison->id) }}" method="post" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
            </tr>
           

       
            @endforeach
        </tbody>
    </table>
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