<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

 

</head>

<body >
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <form class="form-horizontal">
                        <h3 class="title">Formulaire de connexion</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input class="form-control" type="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" type="password" placeholder="Mot de passe">
                        </div>
                        <button class="btn signin">connexion</button>
                        <span class="forgot-pass"><a href="lost_password">Mot de passe oublié ?</a></span>
                        <span class="register"><a href="register">Inscription</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
       <style>
        body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }

  .form-container {
    font-family: 'Poppins', sans-serif;
    position: relative; /* Changez de "center" à "relative" pour une utilisation correcte de z-index */
    z-index: 10;
    margin: 0 auto; /* Centrage horizontal */
    max-width: 400px; /* Largeur maximale du formulaire pour éviter l'extension excessive sur les écrans larges */
}

.form-container .form-horizontal{
    background-color: #fff;
    padding: 30px 30px 10px;
    border: 2px solid #986552;

}
.form-container .form-horizontal {
    background-color: #fff;
    padding: 30px 30px 10px;
    border: 2px solid #986552;
    margin: 0 auto; /* Ajoutez cette ligne pour centrer le formulaire */
    max-width: 500px; /* Facultatif: pour limiter la largeur maximale du formulaire */
}

.form-container .form-horizontal:before,
.form-container .form-horizontal:after{
    content: '';
    background-color: #fff;
    height: 100%;
    width: 100%;
    border: 1px solid #986552;
    transform: rotate(3deg);
    position: absolute;
    left: 0;
    top: 30;
    z-index: -1;
}
.form-container .form-horizontal:after{ transform: rotate(-3deg); }
.form-container .title{
    color: #4f4528;
    background: linear-gradient(to right,#f5f5f5,transparent,transparent,transparent,#f5f5f5);
    font-size: 23px;
    font-weight: 600;
    text-align: center;
    text-transform: capitalize;
    padding: 2px;
    margin: 0 0 20px 0;
}
.form-horizontal .form-group{
    background-color:  #a49d8c;
    font-size: 0;
    margin: 0 0 15px;
    border: 1px solid  #4f4528;
    border-radius: 3px;
}
.form-horizontal .input-icon{
    color: #4f4528;
    font-size: 18px;
    text-align: center;
    line-height: 40px;
    height: 40px;
    width: 40px;
    vertical-align: top;
    display: inline-block;
}
.form-horizontal .form-control{
    color: #4f4528;
    background-color: transparent;
    font-size: 14px;
    letter-spacing: 1px;
    width: calc(100% - 55px);
    height: 40px;
    padding: 2px 10px 2px 0;
    box-shadow: none;
    border: none;
    border-radius: 0;
    display: inline-block;
    transition: all 0.3s;
}
.form-horizontal .form-control:focus{
    box-shadow: none;
    border: none;
}
.form-horizontal .form-control::placeholder{
    color: rgba(0,0,0,0.7);
    font-size: 14px;
    text-transform: capitalize;
}
.form-horizontal .btn {
    color: #fff;
    background-color: #4f4528; /* Marron */
    font-size: 16px;
    font-weight: 600;
    text-transform: capitalize;
    width: 150px;
    padding: 5px 18px;
    margin: 0 0 15px 0;
    border: none;
    border-radius: 30px;
    display: inline-block;
    transition: all 0.3s ease;
}

.form-horizontal .btn:hover,
.form-horizontal .btn:focus{
    color: #fff;
    letter-spacing: 2px;
}
.form-horizontal .forgot-pass{
    font-size: 12px;
    text-align: right;
    width: calc(100% - 105px);
    display: inline-block;
    vertical-align: top;
}
.form-horizontal .forgot-pass a,
.form-horizontal .register a{
    color: #4f4528;
    transition: all 0.3s ease;
}
.form-horizontal .forgot-pass a:hover,
.form-horizontal .register a:hover{
    color: #4f4528;
    text-decoration: underline;
}
.form-horizontal .register{
    font-size: 12px;
    text-align: center;
    padding-top: 8px;
    border-top: 1px solid #4f4528;
    display: block;
}

  </style>  <!-- Bootstrap core JavaScript-->
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