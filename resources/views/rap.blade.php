<!DOCTYPE html>
<html lang="en">
<img src="{{ asset('image/track.png') }}" alt="Nom de l'image" class="image"><br><br><br>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

    <div class="scroll-back">
        <a href="javascript:history.back()"><<</a>
    </div>
    
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
}
        .scroll-back {
            position: fixed;
            bottom: 319px;
            /* Ajustez la position verticale selon vos préférences */
            right: 1200px;
            /* Ajustez la position horizontale selon vos préférences */
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

        .menu-bar {
            background-color: #dbc6a7;
            /* Bleu foncé */
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
            color: #4f4528;
            /* Blanc */
            font-weight: bold;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .menu-bar nav ul li a:hover {
            background-color: #4f4528;
            /* Bleu clair au survol */
            color: #fff;
            /* Blanc au survol */
        }

        .boton-marron {
            background-color: #4f4528;
            color: white;
            transition: background-color 0.3s, color 0.3s;
            /* Ajoute une transition douce */
            position: absolute;
            right: 0;
        }

        .boton-marron:hover {
            background-color: #4f4528;
            color: white;
        }

        body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }

        .container {
            margin: 20px;
        }

        table {
            width: 110%;
            border-collapse: collapse;
        }

        th,
        td {
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

        /* Styles pour centrer la barre de recherche */
        .navbar-search {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .input-group {
            width: 50%;
            /* Ajustez cette valeur selon vos besoins */
        }
        
        /* Centrer le contenu de la page */
        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
    </style>
</head>

<body id="page-top">

    <div class="menu-bar">
        <nav>
            <ul>
                <li><a href="dashboard">Accueil</a></li>
                <li><a href="dos">Téléverser pdf</a></li>
            </ul>
        </nav>
    </div>

    <div class="content-wrapper">
        <!-- Begin Page Content -->
        <div class="container">

            <!-- Topbar Search -->
            <div class="search-bar">
        <form class="d-flex" action="{{ route('rapports.search') }}" method="get">
        
            <input type="text" class="form-control" placeholder="Rechercher..." aria-label="Search" name="date" id="searchInput">
            <select class="form-control" name="year" aria-label="Year" id="yearSelect">
                <option value="">Sélectionner l'année</option>
                
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
            </select>
            <button class="btn" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </form>
    </div>

    <script>
        document.getElementById('yearSelect').addEventListener('change', function () {
            var searchInput = document.getElementById('searchInput');
            var year = this.value;
            if (year) {
                searchInput.value = year + ' ' + searchInput.value;
            }
        });
    </script>

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
<style>
.search-bar {
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #f2efe8, #dbc6a7);
    padding: 20px;
    border-radius: 50px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 80%;
    margin: -20px auto; /* Déplacer la barre vers le haut */
    transition: transform 0.3s ease;
    margin-bottom:150px;
}

.search-bar:hover {
    transform: scale(1.05);
}

.search-bar .form-control {
    border: none;
    border-radius: 50px;
    padding: 15px 20px;
    margin-right: 10px;
    font-size: 18px;
    flex: 1;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.search-bar .form-control:focus {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.search-bar .btn {
    background-color: #4f4528;
    color: white;
    border: none;
    padding: 15px 20px;
    font-size: 18px;
    border-radius: 50px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.search-bar .btn:hover {
    background-color: #6d5f3b;
    transform: translateY(-2px);
}


.search-bar select {
    border: none;
    border-radius: 50px;
    padding: 15px;
    font-size: 18px;
    margin-right: 10px;
    flex: 0 0 150px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease; /* Ajout de la transition pour la bordure */
}

.search-bar select:focus {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border: 2px solid #6d5f3b; /* Change la couleur de la bordure lorsqu'il est sélectionné */
    color: #000; /* Couleur du texte lorsque le sélecteur est en focus */
}



    </style>