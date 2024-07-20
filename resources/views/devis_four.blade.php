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
    <!-- Bootstrap core CSS -->
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

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

        /* Custom styles */
        .imprimerButton {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4f4528;
            color: white;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .imprimerButton:hover {
            background-color: #6d5f3b;
        }

        .scroll-back {
            position: fixed;
            bottom: 350px; /* Ajustez la position verticale selon vos préférences */
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

<body>

<button id="addfourdsButton" class="imprimerButton" onclick="showModal()"> +Ajouter  devis</button>

<!-- Modal pour ajouter des références -->
<div id="addfourdsModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Ajouter devis</h2>
        <form action="{{ route('fourds.store') }}" method="POST" id="addfourdsForm">
            @csrf

            <!-- Champ pour saisir le numéro de devis -->
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="{{$nom}}" required>
            </div>
            <div>
                <label for="numero">devis N°</label>
                <input type="text" name="numero" required>
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
        document.getElementById('addfourdsModal').style.display = 'block';
    }

    // Fonction pour cacher le modal
    function closeModal() {
        document.getElementById('addfourdsModal').style.display = 'none';
    }
</script>

<div class="scroll-back">
    <a href="javascript:history.back()"><<</a>
</div>

<style>
    .imprimerButton {
        background-color: #4CAF50; /* Vert */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .imprimerButton:hover {
        background-color: #45a049;
    }

    .modal {
        display: none; /* Caché par défaut */
        position: fixed; /* Rester en place */
        z-index: 1; /* S'assure qu'il est au-dessus de tout */
        left: 0;
        top: 0;
        width: 100%; /* Largeur complète */
        height: 100%; /* Hauteur complète */
        overflow: auto; /* Activer le défilement si nécessaire */
        background-color: rgb(0,0,0); /* Couleur de fond */
        background-color: rgba(0,0,0,0.4); /* Ajoute une opacité */
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% du haut et centré */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Peut être ajusté */
        max-height: 80%; /* Limiter la hauteur */
        overflow-y: auto; /* Activer le défilement si nécessaire */
        border-radius: 10px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

  
</style>

 
        <!-- Content Row -->
        
            <br>
            <div class="d-flex align-items-center justify-content-end mb-4">
    <a href="{{ route('upload.show')}}" class="imprimerButton right-align-button"><i class="fas fa-plus fa-sm text-white-50"></i>Téléverser pdf</a>
</div>
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content"></div>

<div class="row">
            <div class="container">
                <br><br><br><h1>Liste des devis du fournisseur  :{{$nom}}</h1>
                @if ($fourds->isEmpty())
                    <p>Aucun devis trouvée pour ce fournisseur.</p>
                @else
                    <table>
                        <thead>
                            <tr>
                                <th>devis N° :</th>
                                <th>fournisseur</th>
                                <th>Voir</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fourds as $fourd)
                            <tr id="fourd-row-{{ $fourd->id }}">
                                <td>{{ $fourd->numero }}</td>
                                <td>{{ $fourd->nom }}</td>
                                <td>
                                    <div class="file-list-item">
                                        @foreach ($file as $f)
                                            @if ($f->file_name == $fourd->numero)
                                                <a href="{{ route('file.show', ['id' => $f->id]) }}">visualiser</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </td>
                                <td>        
                                    <a href="#" onclick="event.preventDefault(); 
                                            if(confirm('Êtes-vous sûr de vouloir supprimer ce devis ?')) { 
                                                document.getElementById('delete-form-{{ $fourd->id }}').submit(); 
                                            }" class="imprimerButton">
                                        Supprimer
                                    </a>
                                    <form id="delete-form-{{ $fourd->id }}" 
                                        action="{{ route('fourds.destroy', ['id' => $fourd->id]) }}" 
                                        method="POST" 
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Formulaire de mise à jour caché -->

<style>
    .right-align-button {
    margin-left: 1100px;
}

    .edit-fourd-form {
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
        text-align: right
    }
a:hover {
    color: #6d5f3b; /* Couleur du texte au survol */
    
}
.text-right {
    text-align: right;
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
    .edit-fourd-btn{
        display: inline-block;
        padding: 8px 16px;
        background-color: #4f4528;
        color: white;
        border: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    .edit-fourd-btn:hover {
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
