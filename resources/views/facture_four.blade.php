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
    
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XVAL Consulting</title>
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
   
    <style>
        /* Vos styles CSS existants */
        .imprimerButton {
            background-color: #4f4528;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .imprimerButton:hover {
            background-color: #3e3a2b;
        }

        #addfourfsModal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        #addfourfsModal div {
            display: flex;
            flex-direction: column;
        }

        #addfourfsModal label {
            margin-top: 10px;
        }

        #addfourfsModal button {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<button id="addfourfsButton" class="imprimerButton" onclick="showModal()">+Ajouter facture</button>

<!-- Modal pour ajouter des références -->
<div id="addfourfsModal" style="display: none;">
    <div style="overflow-y: scroll; max-height: 400px;">
        <h2>Ajouter  facture</h2>
        <form action="{{ route('fourfs.store') }}" method="POST" id="addfourfsForm">
            @csrf

            <!-- Champ pour saisir le numéro de devis -->
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="{{$nom}}" required>
            </div>

            <!-- Conteneur pour les champs de références -->
            <div id="fourfs-container">
                <div class="fourf">
                    <div>
                        <label for="montant">Montant</label>
                        <input type="decimale" name="montant"  required>
                    </div>
                    <div>
                        <label for="date_achat">Date d'achat</label>
                        <input type="date" name="date_achat"  required>
                    </div>
                    <div>
                        <label for="date_paiement">Date de paiement</label>
                        <input type="date" name="date_paiement" required>
                    </div>
                    <div>
                        <label for="status">Status</label>
                        <input type="checkbox" id="status" name="status" value="1">
                    </div>
                </div>
            </div>

            <!-- Bouton pour soumettre le formulaire -->
            <button type="submit">Soumettre</button>
        </form>
    </div>
</div>

<!-- Script JavaScript pour gérer l'ouverture/fermeture du modal -->
<script>
    // Fonction pour afficher le modal
    function showModal() {
        document.getElementById('addfourfsModal').style.display = 'block';
    }

    // Fonction pour cacher le modal
    function closeModal() {
        document.getElementById('addfourfsModal').style.display = 'none';
    }
</script>



    <div class="scroll-back">
    <a href="javascript:history.back()"><<</a>
</div>
<style>
    .scroll-back {
   position: fixed;
    bottom: 350px; /* Ajustez la position verticale selon vos préférences */
    right: 1210px; /* Ajustez la position horizontale selon vos préférences */
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

 <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               
                    <!-- Topbar Search -->
                 




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

<br><br><br><h1>Liste des facture du fournisseur  :{{$nom}}</h1>
    @if ($fourfs->isEmpty())
    <p>Aucune facture trouvée pour ce fournisseur.</p>
@else
    <table>
        <thead>
            <tr>
            <th>Fournisseur</th>
            <th>Date d'achat</th>
            <th>Date de paiement</th>
                <th>Montant</th>
                <th>TVA</th>
                <th>Montant TTC</th>
              <th>status</th>
               
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fourfs as $fourf)
            <tr id="fourf-row-{{ $fourf->id }}">
                    
                    <td>{{ $fourf->nom }}</td>
                    <td>{{ $fourf->date_achat }}</td>
                    <td>{{ $fourf->date_paiement }}</td>
                    <td>{{ $fourf->montant}}</td>
                    <td>{{ $tva }}</td>
                    <td>{{ $montant_ttc}}</td>

                    <td>
    @if($fourf->status == 1)
       Payé
    @else
        Non Payé
    @endif
</td>
                    
                    
                <td>        
                <button class="edit-fourf-btn"  onclick="showEditForm({{ $fourf->id }})">Editer</button>


                <a href="#" 
   onclick="event.preventDefault(); 
            if(confirm('Êtes-vous sûr de vouloir supprimer cette Facture ?')) { 
                document.getElementById('delete-form-{{ $fourf->id }}').submit(); 
            }" 
   class="imprimerButton">
   Supprimer
</a>
<form id="delete-form-{{ $fourf->id }}" 
      action="{{ route('fourfs.destroy', ['id' => $fourf->id]) }}" 
      method="POST" 
      style="display: none;">
    @csrf
    @method('DELETE')
</form>

            <tr id="edit-fourf-form-{{ $fourf->id }}" class="edit-fourf-form" style="display: none;">
                <td>
                    <form class="update-fourf-form" method="POST" action="{{ route('fourfs.update', ['id' => $fourf->id]) }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="nom" value="{{ $fourf->nom }}" >
                </td>
                <td>
                        <input type="date" name="date_achat" value="{{ $fourf->date_achat }}" >
                </td>
                <td>
                        <input type="date" name="date_paiement" value="{{ $fourf->date_paiement}}" >
                </td>
                <td>
                        <input type="text" name="montant" value="{{ $fourf->montant }}" >
                </td>
                <td></td>
                <td></td>
                <td>
               
                        <input type="checkbox" name="status" value="1" {{ $fourf->status ? 'checked' : '' }}>
                </td>
              
                <td colspan="2">
                        <button type="submit">Enregistrer</button>
                    </form>
                </td>
            </tr>
        @endforeach
      
    </tbody>
</table>
<script>
   
    // Fonction pour afficher les champs de saisie d'une référence
    function showEditForm(fourfId) {
        // Masquer tous les formulaires de modification
        document.querySelectorAll('.edit-fourf-form').forEach(form => {
            form.style.display = 'none';
        });
        
        // Afficher le formulaire de modification de la référence spécifique
        const editForm = document.getElementById('edit-fourf-form-' + fourfId);
        if (editForm) {
            editForm.style.display = 'table-row';
        }
    }
</script>




@endif

</div>
<!-- Formulaire de mise à jour caché -->

<style>
      .edit-fourf-form {
        background-color: #f9f9f9;
    }

    .edit-form-container {
        padding: 10px;
    }

    .edit-form-container input {
        margin-bottom: 5px;
    }

    .edit-form-container button {
        margin-top: 5px;
    }
    
    a {
        color: #4f4528; /* Couleur du texte */
        text-decoration: none; /* Pas de soulignement */
        transition: color 0.3s; /* Transition douce */
    }
a:hover {
    color: #6d5f3b; /* Couleur du texte au survol */
}

/* Style pour le bouton de suppression */
button[type="submit"] {
    background-color: transparent;
    color: #4f4528;
    border: none;
    cursor: pointer;
    transition: color 0.3s;
    padding: 0;
}

button[type="submit"]:hover {
    color: #6d5f3b;
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
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    border-bottom: 1px solid #ddd; /* Bordure inférieure */
    text-align: left;
}

th {
    background-color: #f2f2f2; /* Couleur de fond de l'en-tête */
}

tr:nth-child(even) {
    background-color: #f2f2f2; /* Couleur de fond des lignes paires */
}
      
    .imprimerButton{
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
    .edit-fourf-btn{
        display: inline-block;
        padding: 8px 16px;
        background-color: #4f4528;
        color: white;
        border: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    .edit-fourf-btn:hover {
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
