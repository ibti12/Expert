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
      /* styles.css */

body {
    font-family: 'Raleway', sans-serif; /* Utilisation de la police Raleway pour tout le texte */
    color: #333; /* Couleur de texte par défaut */
    line-height: 1.6; /* Hauteur de ligne */
}

h1, h2, h3, h4, h5, h6 {
    font-weight: bold; /* Police en gras pour les titres */
}

.high-tower-text {
    font-size: 36px; /* Taille de police pour l'effet "High Tower Text" */
    letter-spacing: 1px; /* Espacement entre les lettres */
    text-transform: uppercase; /* Texte en majuscules */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Ombre portée légère */
}

/* Ajoutez d'autres styles spécifiques au besoin */


        p {
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

        #addfourbsModal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        #addfourbsModal div {
            display: flex;
            flex-direction: column;
        }

        #addfourbsModal label {
            margin-top: 10px;
        }

        #addfourbsModal button {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<button id="addfourbsButton" class="imprimerButton" onclick="showModal()"> +Ajouter  bon de commande</button>

<!-- Modal pour ajouter des références -->
<div id="addfourbsModal" style="display: none;">
    <div style="overflow-y: scroll; max-height: 400px;">
        <h2>Ajouter bons de commande</h2>
        <form action="{{ route('fourbs.store') }}" method="POST" id="addfourbsForm">
            @csrf

            <!-- Champ pour saisir le numéro de devis -->
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="{{$nom}}" required>
            </div>
            <div>
                <label for="numero">Numero</label>
                <input type="text" name="numero"  required>
            </div>

            <!-- Conteneur pour les champs de références -->
            <div id="fourbs-container">
                <div class="fourb">
                    <div>
                        <label for="date">Date</label>
                        <input type="date" name="date" required>
                    </div>
                    <div>
                        <label for="contact">Contact</label>
                        <input type="text" id="contact" name="contact" >
                    </div>
                    <div>
                        <label for="gsm">Gsm</label>
                        <input type="text" id="gm" name="gsm" >
                    </div>
                    <div>
                        <label for="plus">Objet</label>
                        <input type="text" id="plus" name="plus" >
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
        document.getElementById('addfourbsModal').style.display = 'block';
    }

    // Fonction pour cacher le modal
    function closeModal() {
        document.getElementById('addfourbsModal').style.display = 'none';
    }
</script>



    <div class="scroll-back">
    <a href="javascript:history.back()"><<</a>
</div>
<style>
    .scroll-back {
   position: fixed;
    bottom: 330px; /* Ajustez la position verticale selon vos préférences */
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

<br><br><br><h1>Liste des bon de commandes du fournisseur  :{{$nom}}</h1>
    @if ($fourbs->isEmpty())
    <p>Aucune bon de commande trouvée pour ce fournisseur.</p>
@else
    <table>
        <thead>
            <tr>
            <th>Numéro</th>
            <th>Fournisseur</th>
                <th>Date</th>
                <th>object</th>
              <th>Contact</th>
              <Th></Th>
              <th>Gsm</th>
                <th>Action</th>
            
               
            </tr>
        </thead>
        <tbody>
            @foreach ($fourbs as $fourb)
            <tr id="fourb-row-{{ $fourb->id }}">
                    
                    <td>{{ $fourb->numero}}</td>
                    <td>{{ $fourb->nom}}</td>
                    <td>{{ $fourb->date }} </td>
                    <td>{{ $fourb->plus}}</td>

                    <td>{{ $fourb->contact}}</td>
                    <td></td>
                    <td>{{ $fourb->gsm }}</td>
                   

                   
                    
                    
                    <td>
    <div style="white-space: nowrap;">
        <button class="edit-fourb-btn" onclick="showEditForm({{ $fourb->id }})">Editer</button>

        <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer ce bon de commande ?')) { document.getElementById('delete-form-{{ $fourb->id }}').submit(); }" class="imprimerButton">Supprimer</a>
        <form id="delete-form-{{ $fourb->id }}" action="{{ route('fourbs.destroy', ['id' => $fourb->id]) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>

        <a style="background-color: #4f4528; color: #fff; border: none; border-radius: 5px; padding: 5px 10px; cursor: pointer;" class="deleteButton" href="{{ route('commande.show', ['numero' => $fourb->numero]) }}">Références</a>
        <a style="background-color: #4f4528; color: #fff; border: none; border-radius: 5px; padding: 5px 10px; cursor: pointer;" class="deleteButton" href="{{ route('commande.generefacture', ['numero' => $fourb->numero]) }}">Générer</a>
    </div>
</td>

         
            <tr id="edit-fourb-form-{{ $fourb->id }}" class="edit-fourb-form" style="display: none;">
                <td>
                    <form class="update-fourb-form" method="POST" action="{{ route('fourbs.update', ['id' => $fourb->id]) }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="numero" value="{{ $fourb->numero}}" >
                </td>
                <td>
                <input type="hidden" name="nom" value="{{ $fourb->nom}}" >
                </td>
               
                <td>
                        <input type="date" name="date" value="{{ $fourb->date}}" >
                </td>
            
                <td>
                        <input type="text" name="plus" value="{{ $fourb->plus}}" >
                </td>
                <td>
                        <input type="text" name="contact" value="{{ $fourb->contact}}" >
                </td>
                <td>
                        <input type="text" name="gsm" value="{{ $fourb->gsm}}" >
                </td>
               
               
                <td colspan="2">
                        <button type="submit">Enregistrer</button>
                        </td>
                    </form>
                    
            </tr>
        @endforeach
      
    </tbody>
</table>
<script>
   
    // Fonction pour afficher les champs de saisie d'une référence
    function showEditForm(fourbId) {
        // Masquer tous les formulaires de modification
        document.querySelectorAll('.edit-fourb-form').forEach(form => {
            form.style.display = 'none';
        });
        
        // Afficher le formulaire de modification de la référence spécifique
        const editForm = document.getElementById('edit-fourb-form-' + fourbId);
        if (editForm) {
            editForm.style.display = 'table-row';
        }
    }
</script>




@endif

</div>
<!-- Formulaire de mise à jour caché -->

<style>
      .edit-fourb-form {
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
    .edit-fourb-btn{
        display: inline-block;
        padding: 8px 16px;
        background-color: #4f4528;
        color: white;
        border: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    .edit-fourb-btn:hover {
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
