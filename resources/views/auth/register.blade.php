
<body>

<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <form method="POST" action="{{ route('register') }}" class="form-horizontal">
                        @csrf

                        <h3 class="title">Formulaire D'inscription</h3>
                        <div class="form-group">
                        <span class="input-icon"><i class="fa fa-user"></i></span>
                        <input id="name" class="form-control" type="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nom" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                        <div class="form-group">
                        <span class="input-icon"><i class="fa fa-user"></i></span>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <span class="input-icon"><i class="fa fa-lock"></i></span>
                        <input id="password" class="form-control" required autocomplete="new-password" type="password" name="password"  placeholder="Mot de passe" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <span class="input-icon"> <i class="fa fa-lock"></i></span>
                        <input id="password" class="form-control" name="password_confirmation" required autocomplete="new-password" type="password" placeholder=" Comfirmer Mot de passe" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                  

            <div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

       <x-primary-button style="background-color: #654321; color: white;">      {{ __('Register') }}</x-primary-button>


    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>





<style>
    body {
        background: linear-gradient(135deg, #dbc6a7, #a0522d); /* Dégradé de marron à beige */
        margin: 0; /* Supprime la marge par défaut du corps */
        padding: 0; /* Supprime le rembourrage par défaut du corps */
        font-family: Arial, sans-serif; /* Police de caractères par défaut */
        color: #fff; /* Couleur du texte */
        overflow: hidden; /* Masque tout contenu débordant */
    }

    .form-container {
        font-family: 'Poppins', sans-serif;
        position: relative; /* Changez de "center" à "relative" pour une utilisation correcte de z-index */
        z-index: 10;
        margin: 0 auto; /* Centrage horizontal */
        max-width: 400px; /* Largeur maximale du formulaire pour éviter l'extension excessive sur les écrans larges */
    }

    .form-container .form-horizontal {
        background-color: #f2efe8;
        padding: 30px 30px 10px;
        border: 2px solid #986552;
        margin: 0 auto; /* Ajoutez cette ligne pour centrer le formulaire */
        max-width: 500px; /* Facultatif: pour limiter la largeur maximale du formulaire */
    }

    .form-container .form-horizontal:before,
    .form-container .form-horizontal:after {
        content: '';
        background-color: #f2efe8;
        height: 100%;
        width: 100%;
        border: 1px solid #dbc6a7;
        transform: rotate(3deg);
        position: absolute;
        left: 0;
        top: 30;
        z-index: -1;
    }

    .form-container .form-horizontal:after {
        transform: rotate(-3deg);
    }

    .form-container .title {
        color: #dbc6a7;
        background: linear-gradient(to right, #f5f5f5, transparent, transparent, transparent, #f5f5f5);
        font-size: 23px;
        font-weight: 600;
        text-align: center;
        text-transform: capitalize;
        padding: 2px;
        margin: 0 0 20px 0;
    }

    .form-horizontal .form-group {
        background-color: #f2efe8;
        font-size: 0;
        margin: 0 0 15px;
        border: 1px solid #dbc6a7;
        border-radius: 3px;
    }

    .form-horizontal .input-icon {
        color: #a0522d;
        font-size: 18px;
        text-align: center;
        line-height: 40px;
        height: 40px;
        width: 40px;
        vertical-align: top;
        display: inline-block;
    }

    .form-horizontal .form-control {
        color: #dbc6a7;
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

    .form-horizontal .form-control:focus {
        box-shadow: none;
        border: none;
    }

    .form-horizontal .form-control::placeholder {
        color: rgba(0, 0, 0, 0.7);
        font-size: 14px;
        text-transform: capitalize;
    }

    .form-horizontal .btn {
        color: #fff;
        background-color: #a0522d; /* Marron */
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
    .form-horizontal .btn:focus {
        color: #fff;
        letter-spacing: 2px;
    }

    .form-horizontal .forgot-pass {
        font-size: 12px;
        text-align: right;
        width: calc(100% - 105px);
        display: inline-block;
        vertical-align: top;
    }

    .form-horizontal .forgot-pass a,
    .form-horizontal .register a {
        color: #a0522d;
        transition: all 0.3s ease;
    }

    .form-horizontal .forgot-pass a:hover,
    .form-horizontal .register a:hover {
        color: #4f4528;
        text-decoration: underline;
    }

    .form-horizontal .register {
        font-size: 12px;
        text-align: center;
        padding-top: 8px;
        border-top: 1px solid #a0522d;
        display: block;
    }

    .form-bg {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .form-container {
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .title {
        text-align: center;
        margin-bottom: 20px;
    }
</style>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages -->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
