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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
   

            <!-- Divider -->
           

           

            
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
     

                    <!-- Topbar Navbar -->
                   
                     
                            
                                
                                    
                                   
                  

                </nav>
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

                <!-- Begin Page Content -->
                
                <br> <br> <br>
<div class="container">
    

    <div class="rapport">
        <div class="entete">
            <h1>Rapport Client</h1>
            <p>Date du rapport: <?php echo date('d/m/Y'); ?></p>
        </div>

         <div class="section">
            <h2>Informations Client :</h2>

            <p><strong>NOM :</strong> <?php echo $rapport['Nom']; ?></p>
            <h3>Bon de commandes :</h3>
            <p><strong>N° :</strong> <?php echo $rapport['N°']; ?></p>
            <p><strong>Date :</strong> <?php echo $rapport['date']; ?></p>
            <h3>Contact :</h3>
            <p><strong>GSM :</strong> <?php echo $rapport['gsm']; ?></p>
            <p><strong>Email :</strong> <?php echo $rapport['email']; ?></p>
            <h3>Devis :</h3>
            <p><strong>N°devis :</strong> <?php echo $rapport['N°devis']; ?></p>
            <p><strong>Date de devis :</strong> <?php echo $rapport['date_devis']; ?></p>
            <h3>Facture :</h3>
            <p><strong>N°facture :</strong> <?php echo $rapport['N°facture']; ?></p>
            <p><strong>Date de facture :</strong> <?php echo $rapport['date_facture']; ?></p>
            <p><strong>Validation :</strong>  <?php if ($rapport['validation'] == 1): ?>
        Valider
    <?php else: ?>
        Non Valider
    <?php endif; ?></p>
            <h3>Livraison :</h3>
            <p><strong>Lieu :</strong> <?php echo $rapport['lieu']; ?></p>
            <p><strong>Date Livraison :</strong> <?php echo $rapport['date_Livraison']; ?></p>
        </div>
    </div>

<button onclick="window.print()" style="background-color: #4f4528; color: white;">Imprimer</button>


<style>
 body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }


.rapport {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.entete {
    text-align: center;
    margin-bottom: 20px;
}

.section {
    margin-bottom: 20px;
}

.section h2 {
    margin-bottom: 10px;
}

.section p {
    margin-bottom: 5px;
}

.section p strong {
    margin-right: 5px;
}
s

</style>
        
</div>
<style > .souligner {
    text-decoration: underline;
}
</style>
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