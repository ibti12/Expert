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
    
                                    

 <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->


<!-- JavaScript pour afficher/masquer le formulaire -->


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
    bottom: 380px; /* Ajustez la position verticale selon vos préférences */
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

<div class="container form-container">
    @php
        $factures = App\Models\Facture::all();
    @endphp

    <!-- Formulaires d'édition -->
    <form action="{{ route('factures.update', ['id' => $facture->id]) }}" method="POST" class="edit-form">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="numero">Numéro de facture:</label>
            <input type="text" id="numero" name="numero" class="form-control" value="{{ $facture->numero }}">
        </div>
        <div class="form-group">
            <label for="date">Date de facture:</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ $facture->date }}">
        </div>
        <div class="form-group">
            <label for="nom">Client:</label>
            <input type="text" id="nom" name="nom" class="form-control" value="{{ $facture->nom }}">
        </div>
        <div class="form-group">
            <label for="contact">Contact client:</label>
            <input type="text" id="contact" name="contact" class="form-control" value="{{ $facture->contact}}">
        </div>
        <div class="form-group">
        <label for="type">Type de dossier:</label>
                            <select name="type" value= "{{ $facture->type }}">
    <optgroup label="Valeur Vénale">
        <option value="valeur_venale">Valeur Vénale</option>
        <option value="valeur_venale_terrain">Valeur Vénale (Terrain)</option>
        <option value="valeur_venale_construction">Valeur Vénale (Construction)</option>
        <option value="valeur_venale_materiale">Valeur Vénale (Matériale)</option>
        <option value="valeur_venale_mixte">Valeur Vénale (Terrain; Construction; Matériale)</option>
    </optgroup>
    <optgroup label="Valeur d'Assurance">
        <option value="valeur_d_assurance">Valeur d'Assurance</option>
    </optgroup>
    <optgroup label="Expertise Immobilier">
        <option value="expertise_immobilier">Expertise Immobilier</option>
        <option value="expertise_immobilier_terrain">Expertise Immobilier (Terrain)</option>
        <option value="expertise_immobilier_construction">Expertise Immobilier (Construction)</option>
        <option value="expertise_immobilier_mixte">Expertise Immobilier (Terrain; Construction)</option>
    </optgroup>
    <optgroup label="Rapprochement des Immobilisations Comptables">
        <option value="rapprochement_immobilisations_comptables">Rapprochement des Immobilisations Comptables</option>
    </optgroup>
    <optgroup label="Inventaire Divers">
        <option value="inventaire_divers">Inventaire Divers</option>
        <option value="inventaire_divers_biens">Inventaire Divers (Biens)</option>
        <option value="inventaire_divers_stocks">Inventaire Divers (Stocks)</option>
        <option value="inventaire_divers_mixte">Inventaire Divers (Biens; Stocks)</option>
    </optgroup>
    <optgroup label="Valeur d'Apport de Fusion Absorption">
        <option value="valeur_apport_fusion_absorption">Valeur d'Apport de Fusion Absorption</option>
    </optgroup>
    <optgroup label="Sinistre">
        <option value="sinistre">Sinistre</option>
        <option value="sinistre_construction_batiments">Sinistre (Construction Batiments)</option>
        <option value="sinistre_materie_et_contenu">Sinistre (Matériel et Contenu)</option>
        <option value="sinistre_marchandise">Sinistre (Marchandise)</option>
        <option value="sinistre_perte_exploitation">Sinistre (Perte d'Exploitation)</option>
        <option value="sinistre_rc">Sinistre (RC)</option>
    </optgroup>
</select>
        </div>
        <div class="form-group">
            <label for="plus">Objet :</label>
            <textarea id="plus" name="plus" class="form-control">{{ $facture->plus }}</textarea>
        </div>
        <div class="form-group">
            <label for="montant">Montant :</label>
            <textarea id="montant" name="montant" class="form-control">{{ $facture->montant }}</textarea>
        </div>
        <div class="form-group">
            <label for="validation">Validation:</label>
            <input type="checkbox" id="validation" name="validation" class="form-control" value="1" {{ $facture->validation ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>


</div>

<style>
    .container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; /* Assure que le conteneur prend la hauteur de la fenêtre */
}

.edit-form {
    max-width: 500px;
    width: 100%;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.form-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
    text-align: center;
    width: 100%;
}

input[type="text"],
input[type="date"],
textarea {
    width: 100%;
    max-width: 500px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
}

button[type="submit"] {
    background-color: #4f4528;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #6d5f3b;
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
<script>
    document.querySelectorAll('input[type="number"]').forEach(function (element) {
        element.addEventListener('input', function (e) {
            let value = e.target.value;

            // Remove any non-numeric characters except for commas and dots
            value = value.replace(/[^0-9.,]/g, '');

            // Format the value
            let parts = value.split(',');
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            e.target.value = parts.join(',');
        });
    });
</script>