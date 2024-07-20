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
    
                                    

    

 <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               
 
                        <!-- Topbar Search -->
                        <style>
    /* Styles for the filter form */
    .filter-container {
        max-width: 400px;
        margin: 30px auto;
        padding: 10px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-family: Raleway, sans-serif;
        text-align: center;
        overflow: hidden; /* Hide overflow to contain animations */
    }

    .report {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
        text-align: left;
    }

    .filter-form {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
        position: relative; /* Position relative for animation */
    }

    .filter-form label {
        display: none;
    }

    .filter-form input[type="date"] {
        width: calc(50% - 10px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .filter-form input[type="date"]:focus {
        border-color: #4f4528;
        box-shadow: 0 0 5px rgba(79, 69, 40, 0.5);
    }

    .filter-form button[type="submit"] {
        padding: 12px 24px;
        background-color: #4f4528;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    .filter-form button[type="submit"]:hover {
        background-color: #6d5f3b;
        transform: scale(1.05); /* Scale effect on hover */
    }

    /* Animated underline effect */
    .underline {
        position: absolute;
        left: 50%;
        bottom: 0;
        width: 0;
        height: 2px;
        background-color: #4f4528;
        transition: width 0.3s ease-out, left 0.3s ease-out;
    }

    .filter-form input[type="date"]:focus + .underline {
        width: calc(50% - 10px);
        left: 25%;
    }

    /* Responsive design for smaller screens */
    @media screen and (max-width: 600px) {
        .filter-container {
            max-width: 100%;
            padding: 15px;
        }
        .filter-form {
            flex-direction: column;
            margin-bottom: 15px;
        }
        .filter-form input[type="date"] {
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>

<div class="filter-container">
    <div class="report">
        <p>Période</p>
    </div>
    <form class="filter-form" method="POST" action="{{ route('fourfs.filter') }}">
        @csrf
        <label for="date_achat_start">Date de début :</label>
        <input type="date" id="date_achat_start" name="date_achat_start" required>
        <div class="underline"></div> <!-- Animated underline -->
        
        <label for="date_achat_end">Date de fin :</label>
        <input type="date" id="date_achat_end" name="date_achat_end" required>
        <div class="underline"></div> <!-- Animated underline -->
        
        <button type="submit">Filtrer</button>
    </form>
</div>




                    <!-- Topbar Navbar -->
                  
                <!-- End of Topbar -->
                <div class="scroll-back">
    <a href="javascript:history.back()"><<</a>
</div>
<style>
 
    .scroll-back {
   position: fixed;
    bottom: 372px; /* Ajustez la position verticale selon vos préférences */
    right: 1212px; /* Ajustez la position horizontale selon vos préférences */
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
    
<style>
        /* Styles pour la modal */
        .modal {
            display: none; /* Masquer par défaut */
            position: fixed; /* Position fixe */
            z-index: 1; /* Positionnement au-dessus de tout */
            left: 0;
            top: 0;
            width: 100%; /* Largeur pleine */
            height: 100%; /* Hauteur pleine */
            overflow: auto; /* Activer le défilement si nécessaire */
            background-color: rgb(0,0,0); /* Fond noir avec opacité */
            background-color: rgba(0,0,0,0.4); /* Fond noir avec opacité */
        }

        .modal-content {
            background-color: #fefefe; /* Fond blanc */
            margin: 15% auto; /* Centre verticalement et horizontalement */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Largeur de la modal */
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
</head>
<body>







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



                    


                    <div class="container">
    <br><br><br>
    <h1>Rapport d'achat :</h1>

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
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fourfs as $fourf)
                    <tr id="fourf-row-{{ $fourf->id }}">
                        <td>{{ $fourf->nom }}</td>
                        <td>{{ $fourf->date_achat }}</td>
                        <td>{{ $fourf->date_paiement }}</td>
                        <td>{{ $fourf->montant }}</td>
                        <td>{{ $tva }}</td>
                        <td>{{ $montant_ttc }}</td>
                        <td>
                            @if ($fourf->status == 1)
                                Payé
                            @else
                                Non Payé
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>







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
