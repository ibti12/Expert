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

 <form id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

 
                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('facture.recherche') }}" method="get" >
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
            aria-label="Search" aria-describedby="basic-addon2"  name="numero">
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
    <i class="fas fa-plus fa-sm text-white-50"></i> Ajouter une facture
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

 
<form id="devisForm" class="d-none" method="POST" action="{{ route('factures.store') }}">
<!-- Formulaire à afficher/masquer -->
  @csrf
    <!-- Vos champs de formulaire ici -->
    <label for="numero">N°:</label><br>
    <input type="text" id="numero" name="numero"><br>
    <label for="type">Type de dossier:</label><br>
<select name="type" id="type" style="width: 180px;">
  <optgroup label="Evaluation">
    <option value="Valeur Vénale">Valeur Vénale</option>
    <option value="Valeur d'Assurance">Valeur d'Assurance</option>
    <option value="Expertise Immobilier">Expertise Immobilier</option>
  </optgroup>
  <optgroup label="Comptabilité">
    <option value="Rapprochement des Immobilisations Comptables">Rapprochement des Immobilisations Comptables</option>
    <option value="Inventaire Divers">Inventaire Divers</option>
    <option value="Valeur d'Apport de Fusion Absorption">Valeur d'Apport de Fusion Absorption</option>
  </optgroup>
  <optgroup label="Sinistre">
    <option value="Sinistre">Sinistre</option>
  </optgroup>
</select><br>

    <label for="date">Date :</label><br>
    <input type="date" id="date" name="date"><br><br>
     <label for="OBJET">Objet :</label><br>
    <input type="OBJET" id="OBJET" name="OBJET"><br><br>
    <!-- Ajoutez d'autres champs de formulaire ici -->
     <input type="checkbox" id="validation" name="validation" value="1">
    <label for="validation">Etat </label>
   <br>
    <label for="nom">Entreprise:</label><br>
    <input type="nom" id="nom" name="nom"><br><br>
    <label for="montant">Montant:</label><br>
    <input type="montant" id="montant" name="montant"><br><br>
     <label for="plus">Plus :</label><br>
   <textarea id="plus" name="plus"></textarea>
<br>

<label for="nombre_references">Nombre de références :</label><br>
    <select name="nombre_references" id="nombre_references">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <!-- Ajoutez d'autres options au besoin -->
    </select><br>
    <div id="references" >
   
        <!-- Les champs pour les références seront ajoutés dynamiquement ici -->
    </div><br>
<br><br><br><br>
   <input type="submit" value="Soumettre" style="background-color: #4f4528; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;">
</form>
</form>

<!-- JavaScript pour afficher/masquer le formulaire -->
<script>
    document.getElementById('nombre_references').addEventListener('change', function() {
        var nombreReferences = parseInt(this.value);
        var referencesDiv = document.getElementById('references');
        referencesDiv.innerHTML = '';

        for (var i = 1; i <= nombreReferences; i++) {
            var referenceFieldset = document.createElement('fieldset');
            referenceFieldset.innerHTML = '<legend>Référence ' + i + '</legend>' +
                '<label for="reference_' + i + '">Référence :</label>' +
                '<input type="text" id="reference_' + i + '" name="references[]" required><br>' +
                '<label for="prix_unitaire_' + i + '">Prix unitaire :</label>' +
                '<input type="text" id="prix_unitaire_' + i + '" name="prix_unitaires[]" required><br>' +
                '<label for="quantite_' + i + '">Quantité :</label>' +
                '<input type="text" id="quantite_' + i + '" name="quantites[]" required><br>' +
                '<label for="total_ht_' + i + '">Total HT :</label>' +
                '<input type="text" id="total_ht_' + i + '" name="totals_ht[]" required><br><br>';
            referencesDiv.appendChild(referenceFieldset);
        }
    });
</script>

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
                    <div  class="row">


@php
    $factures = App\Models\Facture::all();
@endphp
<div class="container">

  
    <h1>Liste des Factures</h1>
    <table border="1" id="rapportTable">
        <thead>
            <tr>
                <th>N°</th>
                <th>date</th>
                 <th>Entreprise</th>
                  <th>Plus</th>
                <th>Etat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($factures as $facture)
            <tr>
               
                <td>{{ $facture->numero}}</td>
                <td>{{ $facture->date }}</td>
                 <td>{{ $facture->nom }}</td>
                  <td>{{ $facture->plus }}</td>
               <td>
    @if($facture->validation == 1)
       Payé
    @else
        Non Payé
    @endif
</td>

               
                <td>
                    <a  style="background-color: #4f4528; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;" href="/facture/{{$facture->id}}/edit" class="imprimerButton" title="Éditer">
                    <i class="fa fa-edit"></i>
                </a>
                <a  style="background-color: #4f4528; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;"class="deleteButton" href="#" onclick="event.preventDefault(); checkAccessCode('{{ $facture->id }}');" title="Supprimer">
    <i class="fa fa-trash"></i>
</a>
<form id="delete-form-{{ $facture->id }}" action="{{ route('factures.destroy', $facture->id) }}" method="post" style="display: none;">
    @csrf
    @method('DELETE')
</div>
</form>
            </tr>
           

       
            @endforeach
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>
function checkAccessCode(factureId) {
    var accessCode = '123'; // Remplacez ceci par votre code secret

    var enteredCode = prompt("Entrez le code d'accès :");

    if (enteredCode === accessCode) {
        // Si le code est correct, soumettre le formulaire de suppression
        document.getElementById('delete-form-' + factureId).submit();
    } else {
        alert('Code incorrect. La suppression a été annulée.');
    }
}
</script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>