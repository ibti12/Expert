<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styles CSS */
    </style>
</head>
<body>
    <div class="invoice-box">
        <div class="header">
            <!-- En-tête de la facture -->
        </div>

        <!-- Affichage des totaux pour chaque numéro de facture -->
        @foreach ($totalsByNumFact as $num_fact => $totals)
            <div class="facture-section">
                <h2>Facture N° : {{ $num_fact }}</h2>
                <div class="total-section">
                    <p>Total HT : {{ $totals['total_ht'] }} MAD</p>
                    <p>TVA 20% : {{ $totals['tva'] }} MAD</p>
                    <p>Total TTC : {{ $totals['total_ttc'] }} MAD</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
