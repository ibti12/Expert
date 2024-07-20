<?php
require_once 'C:\Users\pc\Expertises\public\montantEnLettres.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <link rel="stylesheet" href="style.css">
    <style>
       /* styles.css */

body {
    font-family: 'Raleway', sans-serif; /* Utilisation de la police Raleway pour tout le texte */
    color: #333; /* Couleur de texte par défaut */
    line-height: 1.6; /* Hauteur de ligne */
    display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Centrer verticalement */
            margin: 0;
}

h1, h2, h3, h4, h5, h6 {
    font-weight: bold; /* Police en gras pour les titres */
}

.high-tower-text {
    font-size: 17.5px; /* Taille de police pour l'effet "High Tower Text" */
    letter-spacing: 1px; /* Espacement entre les lettres */
    text-transform: uppercase; /* Texte en majuscules */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Ombre portée légère */
}

/* Ajoutez d'autres styles spécifiques au besoin */

        .invoice-number {
    width: 300px; /* Vous pouvez ajuster cette valeur */
    padding: 10px; /* Ajoutez un peu de padding pour améliorer l'apparence */
    box-sizing: border-box;
    text-align: center; /* Centre le texte horizontalement */
            display: flex;
            justify-content: center; /* Centre le contenu horizontalement */
            align-items: center; /* Centre le contenu verticalement */
            flex-direction: column; /* Arrange le contenu en colonne */
            border: 1px solid #000; / /* Assurez-vous que le padding est inclus dans la largeur totale */
}

        .invoice-box {
            max-width: 800Px;
            margin: auto;
            padding: 12px;
            border: 1px solid #eee;
           
            font-size: 16px;
            line-height: 24px;
            color: #555;
        }
      
        .invoice-box .header {
            margin-bottom: 20px;
        }

        .invoice-box .header .address {
            text-align: left;
            margin-bottom: 10px;
        }

        .invoice-box .header .client-invoice-details {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-left: 5px;
        }

        .invoice-box .header .client-info {
            text-align: left;
        }

        .invoice-box .header .invoice-number {
            border: 1px solid #000;
            padding: 10px;
            text-align: right;
        }

        .invoice-box .header .client-info p,
        .invoice-box .header .invoice-number p {
            margin: 5px ;
        }

        .invoice-box .client-address {
            text-align: left;
            margin-bottom: 20px;
            margin-left: 5px;
        }

        .invoice-box .client-address p {
            margin: 0;
        }

        .invoice-box .object {
            text-align: left;
            padding: 10px 0;
            font-size: 16px;
            font-weight: bold;
            margin-left: 5px;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin-left: 2px;
            margin-right: 5px;
        }
    
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .no-border {
            border: none;
        }

        .right-align {
            text-align: right;
        }
        
        .totals-table {
            border-collapse: collapse;
            width: 65%;
            margin-left: auto;
            text-align: right;
            margin-left: 30px;
        }

        .totals-table td {
            border-top: none;
        border-bottom: none;
    }
        

        .grand-total {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            padding-top: 4px;
            border: 1px solid black;
            display: inline-block;
            margin: 8px ;
            margin-left: 20px;
        }

        .note {
            text-align: center;
            padding-top: 20px;
            font-size: 14px;
            margin-left: 30px;
        }
        
    </style>
</head>
<body>
    <div class="invoice-box">
        <br><br>
    
        <div class="header" style="margin-bottom: -10px;">
        <h1 class="high-tower-text"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facture</h1>
        <br><br>
            <div class="client-invoice-details">
                <div class="client-info" >
              
                    <p class="high-tower-text" class="high-tower-text"><strong> Client :</strong> {{$facture->nom}}<br>
                    @if($client)
                    <strong>ICE :</strong> {{ $client->IE }}</p>
                    @else
    <p class="high-tower-text"><strong>ICE :non disponible </strong>
    @endif
                </div>
                <div class="invoice-number">
                    <p>Facture N° : {{$facture->numero}}<br>
                    Du : {{$facture->date}}</p>
                </div>
            </div>
        </div><br>
        @if($client)
        <div class="client-address"style="margin-bottom: -10px;">
            <p >{{ $client->ADRESSE }}</p>
        </div>
        @else
    <p class="high-tower-text"><strong>Adresse:non disponible </strong>
    @endif<br>
    @if($facture->contact)
        <div class="client-address"style="margin-bottom: -10px;">
            <p >{{ $facture->contact}}</p>
        </div>
        @else
    <p class="high-tower-text"><strong> </strong>
    @endif<br>
        <div class="object" class="high-tower-text">
            <strong >Objet : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> &nbsp;&nbsp;&nbsp;{{$facture->plus}}
        </div><br>
        <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid black; /* Ajoute une bordure à toutes les cellules */
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2; /* Ajoute une couleur de fond pour les en-têtes */
    }

    /* Supprime la bordure pour les données dans les cellules TD */
    td {
        border-top: none;
        border-bottom: none;
    }

    /* Style optionnel pour les cellules TD de la première colonne */
    td:first-child {
        font-weight: bold;
    }
    .hr {
            width: 95.5%; /* Dépasse de 20% de chaque côté */
            margin-left: -10%; /* Centre la ligne horizontalement */
            margin-bottom: -20px; /* Ajustez la marge inférieure selon vos besoins */
            border: 0;
            border-top: 1px solid #000; /* Couleur et style de la ligne */
            position: absolute; /* Permet le positionnement hors du conteneur */
            left: 60.5%;
            transform: translateX(-50%); /* Centre horizontalement */
        }
</style>
</head>
<body>

<table  style="margin-bottom: -9px;">
    <tr class="high-tower-text">
        <th>Référence</th>
        <th>Description des prestations</th>
        <th>Prix unitaire HT</th>
        <th>Quantité</th>
        <th>Total HT</th>
    </tr>
    @foreach ($references as $reference)
            <tr>
                <td>{{ $reference->ref }}</td>
                <td>{{ $reference->object }}</td>
                <td>{{ $reference->prix_unitaire }} MAD</td>
                <td>{{ $reference->quantité  }}</td>
               
                <td>{{  $reference->total_ht}} MAD</td>
            
            
            </tr>
      
            @endforeach

  
</table>

<hr class="hr" style="margin-bottom: -20px;">
</table>
<style>
        .table-container {
            border: 1px solid black;
            width: fit-content;
            padding: 10px;
            margin: 20px 0 20px auto; /* Aligne le tableau à droite */
            text-align: left;
        }
        .table-row {
            display: flex;
            justify-content: space-between;
        }
        .table-row span {
            display: inline-block;
        }
        .table-row .label {
            margin-right: 148px; /* Ajoute de l'espace entre les éléments */
        }
    </style>
</head>
<body><br>
    <div class="table-container" style="margin-bottom: -45px;">
        <div class="table-row">
            <span class="label">Total HT  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span>{{ $total_ht }} MAD</span>
        </div>
        <div class="table-row">
            <span class="label">TVA 20%  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span>{{ $tva }} MAD</span>
        </div>
        <div class="table-row">
            <span class="label">Total TTC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span>{{ $total_ttc }} MAD</span>
        </div>
    </div>
<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="grand-total">
            <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL TTC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong> {{ $total_ttc }} MAD
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div class="note" class="high-tower-text">
        (Arrêtez la présente facture à la somme de {{ montantEnLettres($total_ttc) }} TTC)<br>
        payée par chèque
        </div>
       
        <br><br><br><br><br>  <br><br><br><br>    <br><br><br><br>    <br><br><br><br>    <br><br><br><br>    <br><br><br><br> 
    </div>
</body>
</html>
