<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XVAL Consulting</title>
    <h1>XVAL Consulting</h1>
    <p> Le précis de l'expertise<p>
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <!-- Custom styles for this template-->
    <link href="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
<div class="scroll-back">
  

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            
                
                    <!-- Page Heading -->
                   
                    <!-- Content Row -->
                    </li>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
   
</div>
</div>
<!-- HTML !-->


<style>
    /* CSS */
    .button-container {
       display:flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 60px;
        margin-top: 30px;
    }

   .card {
    width: 250px;
    height: 200px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    text-align: center; /* Centrer le texte */
}


    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .button-report,
    .button-client,
    .button-travel,
    .button-expense {
        width: 200px;
        height: 100px;
        line-height: 78px;
        font-size: 20px;
        font-family: 'Bebas Neue', sans-serif;
        background-color: #8B4513; /* Marron */
        border: 0;
        color: #fff;
        letter-spacing: 3px;
        outline: transparent;
        position: relative;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .button-report:hover,
    .button-client:hover,
    .button-travel:hover,
    .button-expense:hover {
        background-color: #654321; /* Marron foncé au survol */
    }

    .button-report:after,
    .button-client:after,
    .button-travel:after,
    .button-expense:after {
        --slice-0: inset(50% 50% 50% 50%);
        --slice-1: inset(80% -6px 0 0);
        --slice-2: inset(50% -6px 30% 0);
        --slice-3: inset(10% -6px 85% 0);
        --slice-4: inset(40% -6px 43% 0);
        --slice-5: inset(80% -6px 5% 0);

        content: ' Veuillez  Cliquez ici ';
        display: block;
        position: absolute;
        top: 0;
        left: 4;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, transparent 3%, #8B4513 3%, #8B4513 5%, #8B4513 5%);
        text-shadow: -3px -3px 0px #F8F005, 3px 3px 0px #8B4513;
        clip-path: var(--slice-0);
    }

    .button-report:hover:after,
    .button-client:hover:after,
    .button-travel:hover:after,
    .button-expense:hover:after {
        animation: 1s glitch;
        animation-timing-function: steps(2, end);
    }

    @keyframes glitch {
        0% {
            clip-path: var(--slice-1);
            transform: translate(-20px, -10px);
        }

        10% {
            clip-path: var(--slice-3);
            transform: translate(10px, 10px);
        }

        20% {
            clip-path: var(--slice-1);
            transform: translate(-10px, 10px);
        }

        30% {
            clip-path: var(--slice-3);
            transform: translate(0px, 5px);
        }

        40% {
            clip-path: var(--slice-2);
            transform: translate(-5px, 0px);
        }

        50% {
            clip-path: var(--slice-3);
            transform: translate(5px, 0px);
        }

        60% {
            clip-path: var(--slice-4);
            transform: translate(5px, 10px);
        }

        70% {
            clip-path: var(--slice-2);
            transform: translate(-10px, 10px);
        }

        80% {
            clip-path: var(--slice-5);
            transform: translate(20px, -10px);
        }

        90% {
            clip-path: var(--slice-1);
            transform: translate(-10px, 0px);
        }

         100% {
            clip-path: var(--slice-1);
            transform: translate(0);
        }
    }
     body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }
        .custom-divider {
    border-top: 2px solid #007bff; /* Couleur de la bordure */
    margin: 20px 0; /* Marge verticale */
}


</style>

<hr style="border-top: 20px solid #ccc; margin: 20px 0;">


<div class="button-container">
    <div class="card">
        <a href="rap" class="button-report" role="button">Rapports</a>
    </div>
    <div class="card">
        <a href="fichier" class="button-client" role="button">  Client</a>
    </div>
    <div class="card">
        <a href="fournisseur" class="button-expense" role="button"> Fournisseur</a>
    </div>
    <div class="card">
        <a href="dossier" class="button-travel" role="button"> Dossiers</a>
    </div>
    


</div>
        </div>
    </div>
<hr style="border-top: 20px solid #ccc; margin: 20px 0;">

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