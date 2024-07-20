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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
   

            <!-- Divider -->
           

           

            
            

        </ul>
        <!-- End of Sidebar -->

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

                    <!-- Topbar Search -->
                    
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
                   
                    <!-- Content Row -->
                    </li>
<div class="container">
    <div id="modal-form">
         @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <style>
        body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }

       
        .row {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .column {
            flex: 1;
            margin-right: 10px;
        }

        .column:last-child {
            margin-right: 0;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="checkbox"] {
            width: calc(100% - 16px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button-85 {
            padding: 10px 20px;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            background: #4f4528;
            cursor: pointer;
            border-radius: 10px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-85:hover {
            background-color: #5d5132;
        }

        .center {
            text-align: center;
        }

        .souligner {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="center souligner">L'insertion d'un nouveau Rapport</h2>
     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form  method="POST" action="{{ route('rapports.store') }}">
        @csrf
        <div class="row">
             <div class="col">
            <label for="numero">N°:</label>
            <input type="text" name="N°" placeholder="N°" value="{{ old('N°') }}" required>
        </div>
         <div class="col">
            <label for="NOM">NOM:</label>
            <input type="text" name="Nom" placeholder="Nom" value="{{ old('Nom') }}" required>
        </div>
        </div>

        <div class="row">
             <div class="col">
            <label for="date">Date:</label>
            <input type="date" name="date" placeholder="date" value="{{ old('date') }}" required>
        </div>
         <div class="col">
            <label for="gsm">Gsm:</label>
            <input type="text" name="gsm" placeholder="gsm" value="{{ old('gsm') }}" required>
        </div>
        </div>

        <div class="row">
             <div class="col">
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="email" value="{{ old('email') }}" required></div>
        </div>
        <div class="row">
             <div class="col">
            <label for="N° devis">N° devis:</label>
            <input type="text" name="N°devis" placeholder="N°devis" value="{{ old('N°devis') }}"></div>
             <div class="col">
            <label for="date_devis">date_devis:</label>
            <input type="date" name="date_devis" placeholder="date_devis" value="{{ old('date_devis') }}" required>
        </div>
    </div>
        <div class="row">
             <div class="col">
            <label for="N°facture">N° facture:</label>
            <input type="text" name="N°facture" placeholder="N°facture" value="{{ old('N°facture') }}" required></div>
             <div class="col">
            <label for="date_facture">Date facture:</label>
            <input type="date" name="date_facture" placeholder="date_facture" value="{{ old('date_facture') }}" required></div>
             <div class="col">
            <label for="validation">Validation:</label>
            <input type="checkbox" name="validation" value="1" @if(old('validation')) checked @endif>
            <input type="hidden" name="validation" value="0">
        </div>
    </div>
        <div class="row">
             <div class="col">
            <label for="lieu">Lieu:</label>
            <input type="text" name="lieu" placeholder="lieu" value="{{ old('lieu') }}" required></div>
             <div class="col">
            <label for="date_livraison">Date livraison:</label>
            <input type="date" name="date_Livraison" placeholder="date_Livraison" value="{{ old('date_Livraison') }}" required>
        </div>
    </div>
        <br>
        <div class="center">
            <button class="button-85" type="submit" role="button">Soumettre</button>
        </div>
    </form>
</div>
</form>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>

</html>