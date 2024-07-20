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



    
<div class="container">

  
   <!-- Formulaires d'édition -->

   <div class="container">
    <div class="edit-form">
        <form method="POST" action="{{ route('devis.update', ['id' => $devis->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="N°">N°:</label>
                <input type="text" id="N°" name="N°" class="form-control" value="{{ $devis->N° }}">
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" class="form-control" value="{{ $devis->date }}">
            </div>
            <div class="form-group">
                <label for="nom">Entreprise:</label>
                <input type="text" id="nom" name="nom" class="form-control" value="{{ $devis->nom }}">
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" class="form-control" value="{{ $devis->contact }}">
            </div>
            <div class="form-group">
                <label for="contact_xval">Contact_xval:</label>
                <input type="text" id="contact_xval" name="contact_xval" class="form-control" value="{{ $devis->contact_xval }}">
            </div>
            <div class="form-group">
                <label for="gsm">GSM:</label>
                <input type="text" id="gsm" name="gsm" class="form-control" value="{{ $devis->gsm }}">
            </div>
            <div class="form-group">
                <label for="plus">Plus:</label>
                <textarea id="plus" name="plus" class="form-control">{{ $devis->plus }}</textarea>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </div>
        </form>
    </div>
</div>

<style>
    .edit-form {
        max-width: 500px;
        margin: auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 10px; /* Réduire l'espace entre les groupes de formulaires */
        text-align: center; /* Centrer les champs */
    }

    label {
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    input[type="date"],
    textarea {
        width: calc(100% - 20px); /* Réduire la largeur des champs */
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px; /* Réduire la taille de la police */
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
</style>


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

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>