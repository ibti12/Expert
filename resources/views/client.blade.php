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
             
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                    <!-- Page Heading -->
                   
                    <!-- Content Row -->
                    </li>
                    <br><br>
<div class="container">
  

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>

    <h2>L'insertion d'un nouveau client</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <form id="clientForm" method="POST" action="{{ route('clients.store') }}">
        @csrf
        <table>
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="NOM" placeholder="Le nom" value="{{ old('NOM') }}" required></td>
            </tr>
            <tr>
                <td>Adresse :</td>
                <td><textarea name="ADRESSE" placeholder="L'adresse" rows="4" cols="50" required>{{ old('ADRESSE') }}</textarea></td>
            </tr>
            <tr>
                <td>Ville :</td>
                <td><input type="text" name="VILLE" placeholder="La ville" value="{{ old('VILLE') }}" required></td>
            </tr>
            <tr>
                <td>TELEPHONE :</td>
                <td><input type="text" name="TELEPHONE" placeholder="Le TELEPHONE" value="{{ old('TELEPHONE') }}" required></td>
            </tr>
            <tr>
                <td>EMAIL:</td>
                <td><input type="text" name="EMAIL" placeholder="Le EMAIL" value="{{ old('EMAIL') }}" required></td>
            </tr>
            <tr>
                <td>Sites :</td>
                <td><textarea name="SITES" placeholder="Les sites" rows="4" cols="50" required>{{ old('SITES') }}</textarea></td>
            </tr>
            <tr>
                <td>GPS :</td> 
                <td><input type="text" name="GPS" placeholder="Les coordonnées GPS" value="{{ old('GPS') }}"></td>
            </tr>
            <tr>
                <td>ICE :</td>
                <td><input type="text" name="IE" placeholder="Le numéro ICE" value="{{ old('IE') }}" ></td>
            </tr>
            <tr>
                <td>TP :</td>
                <td><input type="text" name="TP" placeholder="Le TP" value="{{ old('TP') }}"></td>
            </tr>
            <tr>
                <td>IF :</td>
                <td><input type="text" name="IF" placeholder="Le IF" value="{{ old('IF') }}" ></td>
            </tr>
            <tr>
                <td>CNSS :</td>
                <td><input type="text" name="CNSS" placeholder="Le CNSS" value="{{ old('CNSS') }}" ></td>
            </tr>
        </table>
        <br>
        <button class="button-85" type="submit" role="button">Enregistrer</button>
    </form>
</div>
</div>

<style>
     body {
        font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }

.center {
  text-align: center; /* Centrer horizontalement */
}
.button-85 {
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background: #4f4528; /* Fond marron */
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-85:before {
  content: "";
  background: linear-gradient(
    45deg,
    #ff0000,
    #ff7300,
    #fffb00,
    #48ff00,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.button-85:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #4f4528; /* Fond marron */
  left: 0;
  top: 0;
  border-radius: 10px;
}

</style>
    </form>
</body>
</html>

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