<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport Année {{ $annee}}</title>
    <style>
        /* Vos styles CSS ici */
    </style>
</head>
<body><br><br><br><br><br><br> <br><br><br><br> <br>
    <h1>Rapport Année {{ $annee  }}</h1>
    <br><br><br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Année</th>
                <th>Numéro de dossier</th>
                <th>Client</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dossiers as $dossier)
            <tr>
                <td>{{ $dossier->date->format('Y') }}</td>
                <td>{{ $dossier->N°dossier }}</td>
                <td>{{ $dossier->client_nom }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Aucun dossier trouvé pour l'année précédente.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
<style>
        body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2efe8;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #4f4528;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border: 1px solid #dddddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #dddddd;
        }

        th {
            background-color: #f2f2f2;
            font-size: 18px;
            color: #4f4528;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }

        td:first-child {
            width: 20%;
            font-size: 16px;
        }

        td:last-child {
            width: 40%;
            font-size: 16px;
        }

        .empty {
            font-style: italic;
        }
    </style>