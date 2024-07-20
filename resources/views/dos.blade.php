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

   
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
    bottom: 340px; /* Ajustez la position verticale selon vos préférences */
    right: 1213px; /* Ajustez la position horizontale selon vos préférences */
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

    <div class="menu-bar">
    <nav>
        <ul>  <li>
        <li><a href="dashboard">Acceuil</a></li>
       
         <li><a href="rap">Rapport Annuel</a></li>
        </ul>
    </nav>
</div>

<style>
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



 <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


             

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

<style>
     body {
            font-family: 'Raleway', sans-serif; /* Utilisation de Raleway comme police par défaut */
        }
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
/* Styles de base pour le formulaire */
/* Styles de base pour le formulaire */
    /* Styles spécifiques pour le formulaire */
    form.upload-form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        form.upload-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        form.upload-form input[type="file"],
        form.upload-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form.upload-form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4f4528;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        form.upload-form button[type="submit"]:hover {
            background-color: #45a049;
        }

        .file-list-item {
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        .file-list-item a {
            text-decoration: none;
            color: #4f4528;
            font-weight: bold;
        }

        .file-list-item a:hover {
            text-decoration: underline;
        }
</style>

                    <!-- Content Row -->
@php
    $files = App\Models\File::all();
@endphp
       <!-- Contenu principal -->
       <div class="form">
                <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data" class="upload-form">
                    @csrf
                    <label for="pdf_file">Sélectionnez un fichier PDF :</label>
                    <input type="file" id="pdf_file" name="pdf_file"><br><br>
                    
                    <label for="file_name">Nom du fichier  :</label>
                    <input type="text" id="file_name" name="file_name"><br><br>

                    <button type="submit">Téléverser</button>
                </form>
                @foreach($files as $file)
                    <div class="file-list-item">
                        <a href="{{ route('file.show', ['id' => $file->id]) }}">{{ $file->file_name }}</a>
                        
                    </div>
                @endforeach
            </div>
        </div>
    </div>

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

