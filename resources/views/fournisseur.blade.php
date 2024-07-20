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

    
    
    <link rel="preload" as="style" href="http://localhost:8000/build/assets/app-CACkMDGj.css" /><link rel="stylesheet" href="http://localhost:8000/build/assets/app-CACkMDGj.css" />    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
<div class="scroll-back">
    <a href="javascript:history.back()"><<</a>
</div>
<style>
    .scroll-back {
   position: fixed;
    bottom: 270px; /* Ajustez la position verticale selon vos préférences */
    right: 1223px; /* Ajustez la position horizontale selon vos préférences */
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


</style>
</head>

<body id="page-top">


    <!-- Page Wrapper -->
   

            <!-- Divider -->
           

           

            
            

        </ul>
        <!-- End of Sidebar -->
 <div class="menu-bar">
    <nav>
        <ul>
            <li><a href="dashboard">Accueil</a></li>
        </ul>
    </nav>
</div>

<style>
      .boton-marron {
    background-color: #4f4528;
    color: white;
    transition: background-color 0.3s, color 0.3s; /* Ajoute une transition douce */
 position: absolute; right: 0;
}

.boton-marron:hover {
    background-color:#4f4528;
    color: white;
}
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


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('fournisseurs.search') }}" method="get">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..."
            aria-label="Search" aria-describedby="basic-addon2" name="nom">
        <div class="input-group-append">
            <button class="btn boton-marron" type="submit">
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

                <!-- Begin Page Content -->
                
                    <!-- Page Heading -->
                    <div class="main-container">
                    <a style="background-color: #4f4528; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;" class="deleteButton" href="{{ route('exemple') }}">Récap</a>
                    <div class="d-flex justify-content-end p-3">
      
    </div>
        <button id="addSupplierBtn" class="btn btn-primary"> +Ajouter un fournisseur</button>
        <div id="supplierForm" class="hidden">
            <span id="closeBtn" class="close-btn">&times;</span>
            <h2>Ajouter un fournisseur</h2>
            <form method="POST" action="{{ route('fournisseurs.store') }}">
    @csrf
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom"><br>
    <label for="numero">Téléphone:</label><br>
    <input type="text" id="numero" name="numero"><br>
    
    <label for="ice">ICE :</label><br>
    <input type="text" id="ice" name="ice"><br>
    
    
    <label for="email">Email :</label><br>
    <input type="text" id="email" name="email"><br>
    
    <label for="adresse">Adresse :</label><br>
    <input type="text" id="adresse" name="adresse"><br>
    
    
    
    <button type="submit" class="btn boton-marron">Ajouter</button>
</form>
        </div>
    </div>
    
    <script src="script.js"></script>
</body>



                    <!-- Page Heading -->
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
  
                   @php
    use App\Models\Fournisseur; // Importez le modèle Fournisseur si ce n'est pas déjà fait
    $fournisseurs = Fournisseur::all(); // Récupérez tous les fournisseurs
@endphp

<!-- Page Heading -->


<div class="container">
        <div class="card-container">
            @foreach($fournisseurs as $fournisseur)
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $fournisseur->nom }}</h5>
                </div>
                <div class="card-body">
                    <p><i class="icon fas fa-address-card"></i></p>
                    <p><strong>ICE :</strong> {{ $fournisseur->ice }}</p>
                    <p><strong>Adresse :</strong> {{ $fournisseur->adresse }}</p>
                    <p><strong>Email :</strong> {{ $fournisseur->email }}</p>
                    <p><strong>Téléphone: :</strong> {{ $fournisseur->numero }}</p>
                    <div class="dropdown">
                    <button class="btn btn-brown dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('factf.show', ['nom' => $fournisseur->nom]) }}">
   Facture
</a>
                            <a class="dropdown-item"  href="{{ route('Bonf.show', ['nom' => $fournisseur->nom]) }}">Bon de commande</a>
                            <a class="dropdown-item" href="{{ route('devisf.show', ['nom' => $fournisseur->nom]) }}">Devis</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Ajouter le script Bootstrap JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Ajouter Font Awesome pour les icônes -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const addSupplierBtn = document.getElementById('addSupplierBtn');
        const supplierForm = document.getElementById('supplierForm');
        const closeBtn = document.getElementById('closeBtn');

        addSupplierBtn.addEventListener('click', function() {
            supplierForm.classList.toggle('hidden');
            addSupplierBtn.classList.toggle('btn-large'); // Ajoute ou retire la classe .btn-large
        });

        closeBtn.addEventListener('click', function() {
            supplierForm.classList.add('hidden');
            addSupplierBtn.classList.remove('btn-large'); // Retire la classe .btn-large lorsque le formulaire est caché
        });
    });
</script>

<script>document.addEventListener("DOMContentLoaded", function() {
    const addSupplierBtn = document.getElementById('addSupplierBtn');

    addSupplierBtn.addEventListener('click', function() {
        // Ajoute ou retire la classe 'clicked' lorsqu'on clique sur le bouton
        addSupplierBtn.classList.toggle('clicked');
    });
});
</script>
</body>
</html>
<style>
    
    .btn-large {
        transform: scale(1.2); /* Augmente la taille du bouton */
        transition: transform 0.3s ease; /* Animation douce */
    }

    /* Pour que le bouton revienne à la taille normale lorsque le formulaire est caché */
    #supplierForm.hidden ~ #addSupplierBtn {
        transform: none; /* Réinitialise la taille du bouton */
    }
.card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            width: 250px; /* Largeur de chaque carte */
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .card:hover {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            width: 100%;
            background-color:#dbc6a7;
            border-bottom: none;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 10px;
        }
        .card-title {
            margin-bottom: 0;
        }
        .card-body {
            padding: 10px;
        }
        .dropdown-menu {
            min-width: 100%;
            right: 0;
            left: auto;
            border: none;
            border-radius: 0;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .dropdown-item {
            border-bottom: 1px solid  #4f4528; /* Couleur marron */
            transition: background-color 0.3s ease;
        }
        .dropdown-item:hover {
            background-color: #dbc6a7; /* Couleur beige clair */
        }
        .btn-brown {
            background-color:  #4f4528; /* Couleur marron */
            border-color: #dbc6a7; /* Couleur marron */
            color: #fff; /* Texte blanc */
        }
        .btn-brown:hover {
            background-color: #4f4528; /* Couleur marron clair au survol */
            border-color:  #dbc6a7; /* Couleur marron clair au survol */
        }
        .icon {
            font-size: 40px;
            color:  #4f4528; /* Couleur de l'icône */
            margin-bottom: 10px;
        }
        .btn-brown {
            background-color: #4f4528; /* Couleur marron */
            border-color:  #dbc6a7; /* Couleur marron */
            color: #fff; /* Texte blanc */
        }
        .btn-brown:hover {
            background-color:  #4f4528; /* Couleur marron clair au survol */
            border-color:   #dbc6a7; /* Couleur marron clair au survol */
        }
        .custom-background {
            background-color:  #4f4528; /* Couleur marron */
            color: #fff; /* Texte blanc */
            padding: 10px;
            border-radius: 5px;
        }
        .bg-brown {
            background-color: #8B4513; /* Marron */
        }
        body, html {
    height: 100%;
    margin: 0;
  
    justify-content: center;
    align-items: center;
    background-color: #f0f0f0; /* Couleur de fond de la page */
}

/* Assurez-vous que votre conteneur utilise Flexbox */
.main-container {
    display: flex;
    justify-content: flex-end; /* Aligne les éléments enfants à droite */
    padding: 20px;
}

/* Gardez les autres styles pour le bouton */
.btn {
    padding: 8px 16px;
    font-size: 14px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    background-color:  #4f4528;
    color: #fff;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn:hover {
    background-color:  #4f4528;
}


    #addSupplierBtn {
        padding: 5px 10px; /* Ajuste le padding pour une taille appropriée */
        font-size: 16px; /* Ajuste la taille de la police */
        border-radius: 5px; /* Ajoute des coins arrondis */
    }

    /* Style pour masquer le formulaire initialement */
    .hidden {
        display: none;
    }

    /* Style pour le bouton de fermeture */
    .close-btn {
        font-size: 20px;
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    /* Style pour le formulaire */
    #supplierForm {
        position: relative;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #f9f9f9;
        width: 300px;
        margin: 20px auto;
    }

    /* Style pour les labels et les champs de saisie */
    label {
        font-weight: bold;
        margin-top: 10px;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Style pour le bouton de soumission */
    .btn.boton-marron {
        background-color: #795548;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }


.btn:focus {
    outline: none;
}


.hidden {
    opacity: 0;
    transform: translateY(20px);
    pointer-events: none;
}


/* Effet de survol sur les champs de saisie */
#supplierForm input:hover {
    border-color: #4f4528; /* Marron */
    box-shadow: 0 0 5px rgba(79, 69, 40, 0.3); /* Ombre marron */
}

/* Effet de focus sur les champs de saisie */
#supplierForm input:focus {
    border-color: #3e3721; /* Marron plus foncé */
    box-shadow: 0 0 5px rgba(62, 55, 33, 0.5); /* Ombre marron plus foncé */
}

/* Styles pour le bouton de fermeture */
.close-btn {
    cursor: pointer;
    float: right;
    font-size: 20px;
    font-weight: bold;
    color: #aaa;
}

.close-btn:hover {
    color: #000;
}

.close-btn {
    position: absolute;
    top: 5px;
    right: 5px;
    cursor: pointer;
    font-size: 16px;
    color: #4f4528;
    transition: color 0.3s ease;
}

.close-btn:hover {
    color:  #4f4528;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: calc(100% - 22px); /* Retire le padding */
    padding: 8px;
    border: 1px solid  #4f4528;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input:focus {
    border-color:  #4f4528;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
.btn.clicked {
    background-color: #4f4528; /* Transforme le bouton en bleu */
    color: white;
}
</style>