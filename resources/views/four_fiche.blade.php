<?php
require_once 'C:\Users\pc\Expertises\public\montantEnLettres.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bon de commande fournisseur</title>
    <link rel="stylesheet" href="style.css">
    <style>
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
    font-size: 17px; /* Taille de police pour l'effet "High Tower Text" */
    letter-spacing: 1px; /* Espacement entre les lettres */
    text-transform: uppercase; /* Texte en majuscules */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Ombre portée légère */
}

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 15px;
            border: 1px solid #eee;
           
            font-size: 12px;
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
           
            align-commandes: flex-start;
            margin-left: 50px;
        }

        .invoice-box .header .client-info {
            text-align: left;
        }

        .client-invoice-details {
    display: flex;
        }
    .client-info,
        .invoice-number,
        .client-address {
            display: flex;
            
            margin-bottom: 10px;
        }

        .client-info p,
        .invoice-number p,
         {
            margin:10px  
        }
        .invoice-number p {
            margin-top: 10px; /* Ajoute un espace entre les deux lignes */
        }



.client-info,
.invoice-number {
    margin-right: 100px; /* Ajustez cette valeur selon vos besoins */
}


        .invoice-box .header .client-info p,
        .invoice-box .header .invoice-number p {
            margin: 10px ;
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
            width: 95%;
            margin-left: 1px;
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
            <br><br><br>
            <div class="client-invoice-details"><br><br><br>
                <div class="client-info">
                    <p><strong>Client: </strong> {{$four->nom}}<br>
                    <strong>Contact: </strong>{{ $four->numero }}</p>
                </div>
                
                <div class="invoice-number">
              <p >Bon de commande N°:{{$fourb->numero}}<br>
                    Du: {{$fourb->date}}</p>
                </div>
            </div>
        </div>
        <div class="client-address" style="margin-bottom: -60px;">
        <p ><strong>Adresse: </strong>
    @if($four)
    
        <p >{{ $four->adresse }}</p>
    @else
        <p >Adresse non disponible</p>
    @endif
  
 
</div><br><br><br>
<h2> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bon de Commande</h2>

<div class="object"> 
    <strong class="high-tower-text">Objet : &nbsp;&nbsp;&nbsp;</strong> 
    &nbsp;&nbsp;&nbsp;{{$fourb->plus}}
    <img src="{{ asset('image\image.png') }}" class="right-image" width="150" height="100" alt="Description de l'image">
</div>

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
    @foreach ($commandes as $commande)
            <tr>
                <td>{{ $commande->ref }}</td>
                <td>{{ $commande->object }}</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $commande->prix_unitaire }} MAD</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $commande->quantite }}</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $commande->total_ht }} MAD</td>
               
            </tr>
      
            @endforeach

  
</table>

<hr class="hr">
</table>
<style>
        .table-container {
            border: 1px solid black;
            width: fit-content;
            padding: 10px;
            margin: 10px 0 10px auto; /* Aligne le tableau à droite */
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
            margin-right: 150px; /* Ajoute de l'espace entre les éléments */
        }
    </style>
</head>
<body><br><br>
<div style="display: flex; align-commandes: flex-start;">
    <div class="contact-info" style="text-align: left;">
        <p style="margin-right: 20px;">Contact :&nbsp;&nbsp; {{$fourb->contact}}</p>
 <p>        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GSM :{{$fourb->gsm}} &nbsp;&nbsp;</p>
        
    </div>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div class="table-container" style="margin-left: 20px;">
   <div class="table-row">
            <span class="label">Total HT&nbsp; : </span>
            <span>{{ $total_ht }} MAD</span>
        </div>
        <div class="table-row">
            <span class="label">TVA 20%:
            
            </span>
            <span>{{ $tva }} MAD</span>
        </div>
        <div class="table-row">
            <span class="label">Total TTC:</span>
<span>{{ $total_ttc }}MAD</span>
        </div>
    </div>
</div>

<br>
       
        <div class="note">
        ( {{ montantEnLettres($total_ht) }} Hors Taxes)
        </div>
        <div class="note">
        H.A XVAL CONSULTING  h.ami@xvalconsulting.ma / contact@xvalconsulting.ma
        RC 425703 - Patente 35400745 - Identifiant Fiscal  33664453 - CNSS 1399154 - ICE 002116877000019
        </div>
       
        <br><br><br><br>  <br><br><br><br>    <br><br><br><br>    <br><br><br><br>    <br><br><br><br>    <br><br><br><br>    </div>
</body>
</html