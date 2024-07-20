<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note de frais</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <br><br>
    <div class="container">
    <div class="container_p">
    
    <img src="{{ asset('image\image.png') }}" class="right-image" width="100" height="100" alt="Description de l'image">
    <h1>Note de frais</h1>
</div>
    <div class="header-left" style="text-align: right;">
            <p>{{$deplacement->date}}</p>
        </div>
        <div class="header">
    
            <table  class="info-table">
            
                <tr  class="high-tower-text">
                    <td>Client: {{$deplacement->nom}}</td>
                    <td>Dossier: {{$deplacement->num_dossier}}</td>
                    </tr>
                  
                    </table>
                    </div>
        <br>
        <br>
        <h2 >Déplacements</h2>
        <div class="deplacement-table1">
            <table class="high-tower-text">
                <tr>
                    <th>Ville :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th> {{$deplacement->lieu}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>{{$totalGeneral }} DH</th>
                   
                </tr>
                </table>
                <br><br>
                </div>
        <div class="deplacement-table">
        <table class="high-tower-text">
    <tr>
        <th></th>
        @foreach($dep as $index => $depItem)
        <th>Déplacement {{ $index + 1 }}</th>
        @endforeach
    </tr>
    <tr>
        <td>Date aller</td>
        @foreach($dep as $depItem)
        <td>{{ $depItem->date_aller }}</td>
        @endforeach
    </tr>
    <tr>
        <br>
        <td>Date retour</td>
        @foreach($dep as $depItem)
        <td>{{ $depItem->date_retour }}</td>
        @endforeach
    </tr>
    <tr>
        <td class="high-tower-text">Kilométrage</td>
        @foreach($dep as $depItem)
        <td>{{ $depItem->kilometrage }} KM</td>
        @endforeach
    </tr>
    <br><br>
</table>

        </div>
        <br><br>
        <div class="frais-table">
       
        <table class="high-tower-text">
       

            <tr>
                <th ></th>
                <th >Frais par jour</th>
                    <th >Nombre de jours</th>
                <th ></th>
                <th ></th>
            </tr>
            <tr>
              
                            <td>Repas:</td>
                            <td> {{$deplacement->repas}} DH</td>
                            <td> {{$deplacement->nbr_jours}}</td>
                            <td></td>
                            <td>{{ $totals['repas'] }} DH</td>
                        </tr>
                  
            <tr>
               
                            <td>Indémnités Kilométriques</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{$totalKilometrageTaux}} DH </td>
                        </tr>
                        <tr>
               
               <td>Taux kilométrique</td>
               <td>{{$deplacement->taux}} DH</td>
               <td></td>
               <td> {{ $totalKilometrage}} Km</td>
               <td></td>
           </tr>
                        <tr>
                            <td>Autoroute</td>
                            <td>{{$deplacement->autoroute}} DH</td>
                            <td>{{$deplacement->nbr_jours}}</td>
                            <td></td>
                            <td>{{ $totals['autoroute'] }} DH</td>
                       
                        <tr>
                            <td>Hôtel</td>
                            <td>{{$deplacement->hotel}} DH</td>
                            <td>{{$deplacement->nbr_jours}}</td>
                            <td></td>
                            <td>{{ $totals['hotel'] }} DH</td>
                        </tr>
                   
                        <tr>
                            <td>Taxi</td>
                            <td>{{$deplacement->taxi}} DH</td>
                            <td>{{$deplacement->nbr_jours}}</td>
                            <td></td>
                            <td>{{ $totals['taxi'] }} DH</td>
                      
                        <tr>
                            <td>Parking</td>
                            <td>{{$deplacement->parking}} DH</td>
                            <td>{{$deplacement->nbr_jours}}</td>
                            <td></td>
                            <td>{{ $totals['parking'] }} DH</td>
                      
                        <tr>
                            <td>Invitation</td>
                            <td>{{$deplacement->invitation}} DH</td>
                            <td>{{$deplacement->nbr_jours}}</td>
                            <td></td>
                            <td>{{ $totals['invitation'] }} DH</td>
                      
                        <tr>
                            <td>Gasoil</td>
                            <td>{{$deplacement->gasoil}} DH</td>
                            <td>{{$deplacement->nbr_jours}}</td>
                            <td></td>
                            <td>{{ $totals['gasoil'] }} DH</td>
                       
                        <tr>
                            <td >Autres</td>
                            <td>{{$deplacement->autre}} DH</td>
                            <td>{{$deplacement->nbr_jours}}</td>
                            <td></td>
                            <td>{{ $totals['autre'] }} DH</td>
                          
        </table>
    </div>
       <br><br>
        <div class="footer">
            <table  class="info-table">
          
                <tr class="high-tower-text">
                    <td>Nom du collaborateur</td>
                    <td>Validation</td>
                    <td>Règlement</td>
                    <td>Avance</td>
                    <td>Reste</td>
                </tr>
                <tr class="high-tower-text">
                    <td>{{$deplacement->collaborateur}}</td>
                    <td>{{$deplacement->validation}}</td>
                    <td>{{$deplacement->reglement}}</td>
                    <td>{{$deplacement->avance}}</td>
                    <td>{{$deplacement->reste}}</td>
                </tr>
               
            </table>
        </div>
    </div>
</body>
</html>

<style>
   .container_p {
            display: flex;
            align-items: center;
        }
        .container_p img {
            margin-right: 150px; /* Espace entre l'image et le texte */
        }
        .container_p h1 {
            margin: 0; /* Enlever la marge par défaut de l'en-tête */
        }
/* styles.css */
.right-image {
        margin-left: 5px; /* Pour ajouter de l'espace entre le texte et l'image */
    }
body {
    font-family: 'Raleway', sans-serif; /* Utilisation de la police Raleway pour tout le texte */
    color: #333; /* Couleur de texte par défaut */
    line-height: 0.5; /* Hauteur de ligne */
}

h1, h2, h3, h4, h5, h6 {
    font-weight: bold; /* Police en gras pour les titres */
}

.high-tower-text {
    font-size: 16.5px; /* Taille de police pour l'effet "High Tower Text" */
    letter-spacing: 1px; /* Espacement entre les lettres */
    /* Texte en majuscules */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Ombre portée légère */
}

/* Ajoutez d'autres styles spécifiques au besoin */

.client-info, .deplacement-info {
    border: 1px solid black;
    padding: 10px;
    margin-bottom: 20px;
}

.header {
    display: flex;
    justify-content: space-between;
}

.deplacement-table table {
            width: 75%;
            border-collapse: collapse;
        }

        .deplacement-table th, .deplacement-table td {
            padding: 8px;
            border: 1px solid transparent; /* Bordures transparentes */
            background-color: transparent; /* Fond transparent */
            color: #000; /* Couleur du texte noire (ou toute autre couleur que vous préférez) */
        }

        .deplacement-table th {
            background-color: rgba(242, 242, 242, 0.5); /* Fond semi-transparent pour les en-têtes */
        }

        .deplacement-table tr {
            border: 1px solid transparent; /* Encadre chaque tr avec une bordure transparente */
            background-color: transparent; /* Fond transparent */
        }

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border-top: 1px solid black;
    border-bottom: 1px solid black;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.no-border-right {
    border-right: none;
}
.frais-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .frais-table td, .frais-table th {
            padding: 8px;
        }

        .frais-table tr {
            border: 1px solid #000; /* Bordure pour chaque ligne */
        }

        .frais-table th {
            background-color: #f2f2f2;
          
            margin-top: 0; /* Supprimer la marge supérieure uniquement pour les éléments <th> */
        }
        

        /* Suppression des bordures pour la première ligne */
        .frais-table tr:first-child {
            border-top: none;
        }

        /* Suppression des bordures pour la dernière ligne */
        .frais-table tr:last-child {
            border-bottom: none;
        }

        /* Suppression des bordures de gauche pour toutes les cellules */
        .frais-table tr td {
            border-left: none;
        }

        /* Suppression des bordures de droite pour toutes les cellules */
        .frais-table tr td:last-child {
            border-right: none;
        }
        .info-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table td, .info-table th {
            padding: 8px;
            border-left: 1px solid #000; /* Bordure à gauche */
            border-right: 1px solid #000; /* Bordure à droite */
        }

        .info-table th {
            background-color: #f2f2f2;
        }
        h1, h2 {
            text-align: center;
        }
        .deplacement-table1 table {
            width: 100%;
            border-collapse: collapse;
        }

        .deplacement-table1 th, .deplacement-table1 td {
            padding: 8px;
            border: 1px solid transparent; /* Bordures transparentes */
            background-color: transparent; /* Fond transparent */
            color: #000; /* Couleur du texte noire (ou toute autre couleur que vous préférez) */
        }

        .deplacement-table1 th {
            background-color: rgba(242, 242, 242, 0.5); /* Fond semi-transparent pour les en-têtes */
        }

        .deplacement-table1 tr {
            border: 1px solid transparent; /* Encadre chaque tr avec une bordure transparente */
            background-color: transparent; /* Fond transparent */
        }
       
        </style>