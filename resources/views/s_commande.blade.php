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
        <li><a href="dossier">Dossier</a></li>
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

 
                 <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('commande.recherche') }}" method="get" >
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..."
            aria-label="Search" aria-describedby="basic-addon2"  name="nom">
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
    <i class="fas fa-plus fa-sm text-white-50"></i> Ajouter un bon de commande
</a>
<br><br>
<!-- Formulaire à afficher/masquer -->
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form id="devisForm" class="d-none" method="POST" action="{{ route('commandes.store') }}">
    @csrf
    <!-- Vos champs de formulaire ici -->
    <label for="N°">N°:</label><br>
    <input type="text" id="N°" name="N°"><br>
    <label for="date">Date :</label><br>
    <input type="date" id="date" name="date"><br>
     <label for="nom">Client:</label><br>
    <input type="nom" id="nom" name="nom"><br><br>
     <label for="plus">Plus :</label><br>
   <textarea id="plus" name="plus"></textarea>
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

  
  
<table border="1" id="rapportTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>N°</th>
                <th>date</th>
                <th>Client</th>
                <th>Plus</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @if($b_commandes->isNotEmpty())
            @foreach($b_commandes as $b_commandes)
            <tr>
               <td>{{ $b_commandes->id }}</td>
                <td>{{ $b_commandes->N° }}</td>
                <td>{{ $b_commandes->date }}</td>
                <td>{{ $b_commandes->nom}}</td>
                <td>{{ $b_commandes->plus }}</td>
               
                  <td><a href="/b_commande/{{$b_commandes->id}}/edit" style="background-color: #4f4528; color: white;" class="imprimerButton"> <i class="fa fa-edit"></i></a>
                     <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer ce Bon de commande ?')) { document.getElementById('delete-form-{{ $b_commandes->id }}').submit(); }" class="imprimerButton"> <i class="fa fa-trash"></i></a>

                 <form id="delete-form-{{ $b_commandes->id }}" action="{{ route('b_commandes.destroy', $b_commandes->id) }}" method="post" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                  <!-- Ajoutez ici des liens ou des boutons pour les actions -->
                        <!-- Ajoutez ici des liens ou des boutons pour les actions -->
                     </td>
                       
                       
            </tr>
           

       
            @endforeach

      
    @else
        <tr>
            <td colspan="3">Aucun résultat trouvé pour ce client.</td>
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


    .container {
        margin: 10px;
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
        border-radius: 10px;
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