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

        #adddepsModal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        #adddepsModal div {
            display: flex;
            flex-direction: column;
        }

        #adddepsModal label {
            margin-top: 10px;
        }

        #adddepsModal button {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<button id="adddepsButton" class="imprimerButton"> +Ajouter des visites</button>

<!-- Modal pour ajouter des Déplacements -->
<!-- Modal pour ajouter des Déplacements -->
<div id="adddepsModal" style="display: none;">
    <div style="overflow-y: scroll; max-height: 400px;">
        <h2>Ajouter des Déplacements</h2>
        <form action="{{ route('deps.store') }}" method="POST" id="adddepsForm">
            @csrf

            <!-- Champ pour saisir le numéro de devis -->
            <div>
                <label for="id">Numéro de déplacement</label>
                <input type="text" name="it" value="{{$dep->id}}" required>
            </div>

            <!-- Conteneur pour les champs de Déplacements -->
            <div id="deps-container">
                <div class="dep">
                    <div>
                        <label for="ref"Visiste</label>
                      
                    </div>
                    <div>
                        <label for="date_aller">Date aller</label>
                        <input type="date" name="date-aller[]" required>
                    </div>
                    <div>
                        <label for="date_retour">Date retour</label>
                        <input type="date" name="date_retour[]"  required>
                    </div>
                    <div>
                        <label for="kilometrage">kilométrage</label>
                        <input type="text" name="kilometrage[]" required>
                    </div>
                </div>
            </div>

            <!-- Bouton pour ajouter une nouvelle Déplacement -->
            <button type="button" onclick="adddep()">Ajouter Visite</button>

            <!-- Bouton pour soumettre le formulaire -->
            <button type="submit">Soumettre</button>
        </form>
    </div>
</div>

<!-- Script JavaScript pour gérer l'ouverture/fermeture du modal et l'ajout de Déplacements -->
<script>
    // Fonction pour afficher le modal
    function showModal() {
        document.getElementById('adddepsModal').style.display = 'block';
    }

    // Fonction pour cacher le modal
    function closeModal() {
        document.getElementById('adddepsModal').style.display = 'none';
    }

    // Fonction pour ajouter une Déplacement (champs de saisie)
    function adddep() {
        const container = document.getElementById('deps-container');
        const dep = document.querySelector('.dep');
        const clone = dep.cloneNode(true);

        // Effacer les valeurs des champs clonés
        clone.querySelectorAll('input').forEach(input => {
            input.value = '';
        });

        container.appendChild(clone);
        updatedepNumbers();
    }

    // Fonction pour mettre à jour les numéros de Déplacement
    function updatedepNumbers() {
        const deps = document.querySelectorAll('.dep');
        deps.forEach((dep, index) => {
            const label = dep.querySelector('label');
            label.textContent = `Déplacement ${index + 1}`;
        });
    }

    // Écouteur d'événement pour le clic sur le bouton "Ajouter des Déplacements"
    document.getElementById('adddepsButton').addEventListener('click', showModal);
</script>
</body>
</html>




    <div class="scroll-back">
    <a href="javascript:history.back()"><<</a>
</div>
<style>
    .scroll-back {
   position: fixed;
    bottom: 350px; /* Ajustez la position verticale selon vos pDéplacements */
    right: 1230px; /* Ajustez la position horizontale selon vos pDéplacements */
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

<br><br><br><h1>Liste  des visites du dossier  déplacement  :N° {{$dep->id}}</h1>
    @if ($deplacements->isEmpty())
    <p>Aucunevisite trouvée pour ce numéro de déplacements.</p>
@else
    <table>
        <thead>
            <tr>
            <th>visite</th>
                <th>Date aller</th>
                <th>Date retour</th>
                <th>kilométrage</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deplacements as $deplacement)
            <tr id="dep-row-{{ $deplacement->id}}">
            <td>{{ $deplacement->it}}</td>
                    <td>{{ $deplacement->date_aller }}</td>
                    <td>{{ $deplacement->date_retour }}</td>
                    <td>{{ $deplacement->kilometrage}}</td>
                <td> <button class="edit-dep-btn" onclick="showEditForm({{ $deplacement->id}})">Editer</button>


                <!-- Lien pour vérifier l'URL -->

<!-- Formulaire pour la suppression -->
<form id="delete-form-{{ $deplacement->id }}" action="{{ route('deps.delete', ['id' => $deplacement->id]) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<!-- Bouton pour déclencher la suppression -->
<button  onclick="event.preventDefault(); console.log('Button clicked!'); document.getElementById('delete-form-{{ $deplacement->id }}').submit();" class="imprimerButton">
    Supprimer
</button>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        console.log('Document loaded');
        document.getElementById('test-link-{{ $deplacement->id }}').addEventListener('click', function (event) {
            event.preventDefault();
            console.log('Link clicked: ' + this.href);
        });
    });
</script>

                    
            </td>
            <tr id="edit-dep-form-{{ $deplacement->id}}" class="edit-dep-form" style="display: none;">
              
            <form class="update-dep-form" method="POST" action="{{ route('deps.update', ['id' => $deplacement->id]) }}">
                        @csrf
                        @method('PATCH')
                        <td>
                        <input type="hidden" name="it" value="{{ $deplacement->it }}">
                </td>
                <td>
                        <input type="date" name="date_aller" value="{{ $deplacement->date_aller }}" placeholder="Date_aller">
                </td>
                <td>
                        <input type="date" name="date_retour" value="{{ $deplacement->date_retour}}" placeholder="Date_retour">
                </td>
                <td>
                        <input type="text" name="kilometrage" value="{{ $deplacement->kilometrage }}" placeholder="kilométrage">
                </td>
                <td colspan="2">
                        <button type="submit">Mettre à jour</button>
                   
                </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>

<script>
  function showEditForm(depId) {
    // Masquer tous les formulaires de modification
    document.querySelectorAll('.edit-dep-form').forEach(form => {
        form.style.display = 'none';
    });
    
    // Afficher le formulaire de modification de la Déplacement spécifique
    const editForm = document.getElementById('edit-dep-form-' + depId);
    if (editForm) {
        editForm.style.display = 'table-row';
    }
}


</script>




@endif

</div>
<!-- Formulaire de mise à jour caché -->

<style>
      .edit-dep-form {
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
    .edit-dep-btn{
        display: inline-block;
        padding: 8px 16px;
        background-color: #4f4528;
        color: white;
        border: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    .edit-dep-btn:hover {
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
