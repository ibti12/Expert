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

        #additemsModal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        #additemsModal div {
            display: flex;
            flex-direction: column;
        }

        #additemsModal label {
            margin-top: 10px;
        }

        #additemsModal button {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<button id="additemsButton" class="imprimerButton">+Ajouter des références</button>

<!-- Modal pour ajouter des références -->
<!-- Modal pour ajouter des références -->
<div id="additemsModal" style="display: none;">
    <div style="overflow-y: scroll; max-height: 400px;">
        <h2>Ajouter des références</h2>
        <form action="{{ route('items.store') }}" method="POST" id="additemsForm">
            @csrf

            <!-- Champ pour saisir le numéro de devis -->
            <div>
                <label for="num_devis">Numéro de devis</label>
                <input type="text" name="num_devis" value="{{$num_devis}}" required>
            </div>

            <!-- Conteneur pour les champs de références -->
            <div id="items-container">
                <div class="item">
                    <div>
                        <label for="ref">Référence</label>
                        <input type="text" name="ref[]" required>
                    </div>
                    <div>
                        <label for="object">Description des prestations</label>
                        <textarea type="text" name="object[]" required></textarea>
                    </div>
                    <div>
                        <label for="prix_unitaire">Prix Unitaire</label>
                        <input type="text" class="number-input" name="prix_unitaire[]"  required>
                      
                    </div>
                    <div>
                        <label for="quantite">Quantité</label>
                        <input type="number" name="quantite[]" required>
                    </div>
                </div>
            </div>

            <!-- Bouton pour ajouter une nouvelle référence -->
            <button type="button" onclick="additem()">Ajouter une Référence</button>

            <!-- Bouton pour soumettre le formulaire -->
            <button type="submit">Soumettre</button>
        </form>
    </div>
</div>


<!-- Script JavaScript pour gérer l'ouverture/fermeture du modal et l'ajout de références -->

<script>
    // Fonction pour afficher le modal
    function showModal() {
        document.getElementById('additemsModal').style.display = 'block';
    }

    // Fonction pour cacher le modal
    function closeModal() {
        document.getElementById('additemsModal').style.display = 'none';
    }

    // Fonction pour ajouter une référence (champs de saisie)
    function additem() {
        const container = document.getElementById('items-container');
        const item = document.querySelector('.item');
        const clone = item.cloneNode(true);

        // Effacer les valeurs des champs clonés
        clone.querySelectorAll('input').forEach(input => {
            input.value = '';
        });

        container.appendChild(clone);
        updateitemNumbers();
    }

    // Fonction pour mettre à jour les numéros de référence
    function updateitemNumbers() {
        const items = document.querySelectorAll('.item');
        items.forEach((item, index) => {
            const label = item.querySelector('label');
            label.textContent = `Référence ${index + 1}`;
        });
    }

    // Écouteur d'événement pour le clic sur le bouton "Ajouter des références"
    document.getElementById('additemsButton').addEventListener('click', showModal);
</script>
</body>
</html>




    <div class="scroll-back">
    <a href="javascript:history.back()"><<</a>
</div>
<style>
    .scroll-back {
   position: fixed;
    bottom: 350px; /* Ajustez la position verticale selon vos préférences */
    right: 1240px; /* Ajustez la position horizontale selon vos préférences */
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

<br><br><br><h1>Liste des références du devis  :N°{{$num_devis}}</h1>
    @if ($items->isEmpty())
    <p>Aucune référence trouvée pour ce numéro de devis.</p>
@else
    <table>
        <thead>
            <tr>
            <th>Référence</th>
                <th>Description des prestations</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
              
                <th>Total HT</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr id="item-row-{{ $item->id }}">
                    
                    <td>{{ $item->ref }}</td>
                    <td>{{ $item->object }}</td>
                    <td>{{ $item->prix_unitaire }}</td>
                    <td>{{ $item->quantite}}</td>
                    
                    <td>{{ $item->total_ht }}</td>
                <td>        <button class="edit-item-btn"  onclick="showEditForm({{ $item->id }})">Editer</button>


                <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cette référence ?')) { document.getElementById('delete-form-{{ $item->id }}').submit(); }" class="imprimerButton">Supprimer</a>

<form id="delete-form-{{ $item->id }}" action="{{ route('items.delete', ['id' => $item->id]) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

            <tr id="edit-item-form-{{ $item->id }}" class="edit-item-form" style="display: none;">
                <td>
                    <form class="update-item-form" method="POST" action="{{ route('items.update', ['id' => $item->id]) }}">
                        @csrf
                        @method('PATCH')
                        <input type="text" name="ref" value="{{ $item->ref }}" placeholder="Référence">
                </td>
                <td>
                        <input type="text" name="object" value="{{ $item->object }}" placeholder="Description des prestations">
                </td>
                <td>
                        <input type="number" name="prix_unitaire" value="{{ $item->prix_unitaire }}"  step="0.01" min="0" placeholder="Prix Unitaire">
                </td>
                <td>
                        <input type="number" name="quantite" value="{{ $item->quantite }}" placeholder="Quantité">
                </td>
                <td colspan="2">
                        <button type="submit">Mettre à jour</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    // Fonction pour afficher les champs de saisie d'une référence
    function showEditForm(itemId) {
        // Masquer tous les formulaires de modification
        document.querySelectorAll('.edit-item-form').forEach(form => {
            form.style.display = 'none';
        });
        
        // Afficher le formulaire de modification de la référence spécifique
        const editForm = document.getElementById('edit-item-form-' + itemId);
        if (editForm) {
            editForm.style.display = 'table-row';
        }
    }
</script>




@endif

</div>
<!-- Formulaire de mise à jour caché -->

<style>
.edit-item-form {
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
    .edit-item-btn{
        display: inline-block;
        padding: 8px 16px;
        background-color: #4f4528;
        color: white;
        border: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    .edit-item-btn:hover {
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
<script>
    function formatNumberInput(element) {
        let value = element.value;

        // Remove any non-numeric characters except for commas and dots
        value = value.replace(/[^0-9]/g, '');

        // Format the value with two decimal places
        if (value.length > 2) {
            let integerPart = value.slice(0, value.length - 2);
            let decimalPart = value.slice(value.length - 2);
            integerPart = integerPart.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            element.value = integerPart + ',' + decimalPart;
        } else {
            element.value = '0,' + value.padStart(2, '0');
        }

        // Update the visual display of the formatted value
        document.getElementById('formatted-output').innerText = element.value;
    }
</script>