<?php
require_once 'C:\Users\pc\Expertises\public\montantEnLettres.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devis</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* styles.css */

body {
    font-family: 'Raleway', sans-serif; /* Utilisation de la police Raleway pour tout le texte */
    color: #333; /* Couleur de texte par défaut */
    line-height: 1.6; /* Hauteur de ligne */
}

h1, h2, h3, h4, h5, h6 {
    font-weight: bold; /* Police en gras pour les titres */
}

.high-tower-text {
    font-size: 17px; /* Taille de police pour l'effet "High Tower Text" */
    letter-spacing: 1px; /* Espacement entre les lettres */
 
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Ombre portée légère */
}

/* Ajoutez d'autres styles spécifiques au besoin */

        .invoice-box {
            max-width: 900px;
            margin: auto;
            padding: 10px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            color: #555;
        }

        .invoice-box .header {
            margin-bottom: 20px;
        }

        .invoice-box .header .address {
            text-align: left;
            margin-bottom: 20px;
        }

        .invoice-box .header .client-invoice-details {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-left: 20px;
        }

        .invoice-box .header .client-info {
            text-align: left;
        }

        .client-invoice-details {
    display: flex;
}

.client-info,
.invoice-number {
    margin-right: 100px; /* Ajustez cette valeur selon vos besoins */
}


        .invoice-box .header .client-info p,
        .invoice-box .header .invoice-number p {
            margin: 4px ;
        }

        .invoice-box .client-address {
            text-align: left;
            margin-bottom: 20px;
            margin-left: 20px;
        }

        .invoice-box .client-address p {
            margin: 0;
        }

        .invoice-box .object {
            text-align: left;
            padding: 10px 0;
            font-size: 16px;
            font-weight: bold;
            margin-left: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
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
            padding-top: 0px;
            border: 2px solid black;
            display: inline-block;
            margin: 4px ;
            margin-left: 20px;
        }

        .note {
            text-align: center;
            padding-top: 20px;
            font-size: 14px;
            margin-left: 30px;
        }
        .hr {
            width: 95.5%; /* Dépasse de 20% de chaque côté */
            margin-left: -11%; /* Centre la ligne horizontalement */
            margin-bottom: -20px; /* Ajustez la marge inférieure selon vos besoins */
            border: 0;
            border-top: 1px solid #000; /* Couleur et style de la ligne */
            position: absolute; /* Permet le positionnement hors du conteneur */
            left: 61.5%;
            transform: translateX(-50%); /* Centre horizontalement */
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <div class="header">
            <br><br><br><br>
            <div class="client-invoice-details">
                <div class="client-info">
                    <p ><strong>Client :</strong> {{$devis->nom}}<br>
                    <strong>Contact :</strong> {{ $devis->contact }}</p>
                   
                    
                </div>
                <div class="invoice-number">
                    <p >
                        Devis N° : {{$devis->N°}}<br>
                    Du : {{$devis->date}}</p>
                </div>
                
            </div>
        </div><br>
        <div class="client-address" style="margin-bottom: -60px;">
      
    @if($client)
           <p ><strong>Adresse :</strong>{{ $client->ADRESSE }}</p>
    @else
    <p ><strong>Adresse :non disponible </strong>
    @endif
</div><br><br><br>
<div class="object"> 
    <strong class="high-tower-text">Objet : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 
    &nbsp;&nbsp;&nbsp;{{$devis->plus}}
    <img src="{{ asset('image\image.png') }}" class="right-image" width="100" height="100" alt="Description de l'image">
</div><br>

<style>
    .object {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .right-image {
        margin-left: 20px; /* Pour ajouter de l'espace entre le texte et l'image */
    }
</style>
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
    .contact-info-wrapper {
    text-align: center;
    margin-bottom: 20px; /* pour l'espace entre les informations de contact et la table */
}

.contact-info {
    display: inline-block;
    text-align: left; /* pour aligner le texte à gauche à l'intérieur de la div */
}

</style>
</head>
<body>

<table style="margin-bottom: -9px;">
    <tr class="high-tower-text">
        <th>Référence</th>
        <th>Description des prestations</th>
        <th>Prix unitaire HT</th>
        <th>Quantité</th>
        <th>Total HT</th>
    </tr>
    @foreach ($items as $item)
            <tr >
                <td>{{ $item->ref }}</td>
                <td>{{ $item->object }}</td>
                <td>{{ $item->prix_unitaire }} MAD</td>
                <td>&nbsp;&nbsp;&nbsp;{{ $item->quantite }}</td>
                <td>{{$item->total_ht}} MAD</td>
               
            </tr>
      
            @endforeach

  
</table>

<hr class="hr">
</table>
<style>
       .table-container {
    border: 1px solid black;
    width: auto; /* Ajuste la largeur en fonction du contenu */
    padding: 15px;
    margin: 20px auto; /* Centre le tableau horizontalement */
    text-align: left;
}

.table-row {
    display: flex;
  
    align-items: center; /* Centre verticalement les éléments */
    padding: 5px 0; /* Espacement réduit entre les lignes */
}

.label {
    min-width: 100px; /* Largeur minimale pour les labels */
    flex: 0 0 auto; /* Empêche l'extension du label */
    margin-right: 5px; /* Espacement réduit entre label et valeur */
    font-weight: bold; /* Met en gras les labels */
}

.value {
    flex: 1; /* Remplit l'espace restant */
    text-align: right;
}


    </style>
</head>
<body><br><br>
<div style="display: flex; align-items: flex-start;">
    <div class="contact-info" style="text-align: left;">
        <p style="margin-right: 20px;">Contact : {{$devis->contact_xval}}</p>
 <p >      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GSM : {{$devis->gsm}}</p>
        
    </div>

    <div class="table-container" style="margin-left: 20px;">
        <div class="table-row">
            <span class="label" >Total HT:</span>
            <span >{{ $total_ht}} MAD</span>
        </div>
        <div class="table-row">
            <span class="label">TVA 20% :</span>
            <span  >{{ $tva}} MAD</span>
        </div>
        <div class="table-row">
            <span class="label" >Total TTC:</span>
            <span>{{ $total_ttc}} MAD</span>
        </div>
    </div>
</div>

<br><br>
       
        <div class="note" class="high-tower-text">
        ( {{ montantEnLettres($total_ht) }} Hors Taxes)
        </div>
        <div class="note">
        H.A XVAL CONSULTING  h.ami@xvalconsulting.ma / contact@xvalconsulting.ma
        RC 425703 - Patente 35400745 - Identifiant Fiscal  33664453 - CNSS 1399154 - ICE 002116877000019
        </div>
       
        <br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br>
    </div>
</body>
</html>
