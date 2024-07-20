<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reference;
use App\Models\Facture;
use App\Models\Client;
use Illuminate\Support\Facades\Validator; // Import the Validator facade
use Illuminate\Support\Facades\Log; // I
class ReferenceController extends Controller
{
    public function showInvoice()
{
    // Récupérer toutes les références depuis la base de données
    $references = Reference::all();

    // Initialiser un tableau pour stocker les totaux pour chaque num_fact
    $totalsByNumFact = [];

    // Calculer les totaux pour chaque num_fact
    foreach ($references as $reference) {
        $num_fact = $reference->num_fact;
        $prix_unitaire = $reference->prix_unitaire;
        $quantite = $reference->quantite;
        
        // Calculer le total_ht pour cette référence
        $total_ht = $prix_unitaire * $quantite;
        
        // Calculer le tva pour cette référence (20% de total_ht)
        $tva = $total_ht * 0.20;

        // Calculer le total_ttc pour cette référence
        $total_ttc = $total_ht + $tva;

        // Ajouter les totaux au tableau totalsByNumFact
        if (!isset($totalsByNumFact[$num_fact])) {
            $totalsByNumFact[$num_fact] = [
                'total_ht' => $total_ht,
                'tva' => $tva,
                'total_ttc' => $total_ttc,
            ];
        } else {
            $totalsByNumFact[$num_fact]['total_ht'] += $total_ht;
            $totalsByNumFact[$num_fact]['tva'] += $tva;
            $totalsByNumFact[$num_fact]['total_ttc'] += $total_ttc;
        }
    }

    // Passer les données à la vue et afficher la facture
    return view('invoice', [
        'totalsByNumFact' => $totalsByNumFact,
    ]);
}

public function showByNumerofacture($numero)
{
    // Récupérer la facture avec le numéro de devis donné
    $facture = Facture::where('numero', $numero)->first();

    // Vérifier si la facture existe
    if ($facture) {
        // Récupérer les références associées à cette facture
        $references = Reference::where('num_fact', $facture->numero)->get();
    } else {
        $references = collect();
    }

    // Retourner la vue avec les références et le numéro de devis
    return view('ref', compact('references', 'numero'));
}
public function generefacture($numero)
{
    // Recherche de la facture avec le numéro de devis donné
    $facture = Facture::where('numero', $numero)->first();

    // Initialisation des variables pour le calcul du total HT, de la TVA et du total TTC
    $total_ht = 0;
    $tva = 0;
    $total_ttc = 0;
    $client = null;

    // Vérifier si la facture existe
    if ($facture) {
        // Récupérer les références associées à cette facture
        $references = Reference::where('num_fact', $facture->numero)->get();

        // Calculer le total HT et la TVA
        $total_ht = $references->sum(function ($reference) {
            return $reference->prix_unitaire * $reference->quantité;
        });

        $tva = $total_ht * 0.2; // Calcul de la TVA (20% du total HT)

        // Calculer le total TTC
        $total_ttc = $total_ht + $tva;

         // Récupérer les références associées à cette facture
         $client = Client::where('NOM', $facture->nom)->first();
    } else {
        // Si la facture n'existe pas, initialiser une collection vide de références
        $references = collect();
    }

    // Retourner la vue avec les références, le client et d'autres informations de facture
    return view('facture_ex', compact('references', 'facture', 'client', 'total_ht', 'tva', 'total_ttc'));
}
// Méthode pour afficher le formulaire d'édition


// Méthode pour supprimer une référence
public function destroy($id)
    {
        // Trouver la référence à supprimer
        $reference = Reference::findOrFail($id);

        // Supprimer la référence
        $reference->delete();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'La référence a été supprimée avec succès.');
    }



    public function create($numero)
    {
        return view('create', compact('numero'));
    }

    public function store(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'num_fact' => 'required', // Assurez-vous que c'est le bon type et la bonne longueur
        'ref.*' => 'required',
        'object.*' => 'required',
        'prix_unitaire.*' => 'required',
        'quantité.*' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Recherche de la facture en fonction du numéro de facture
    $facture = Facture::where('numero', $request->input('num_fact'))->first();

    if (!$facture) {
        return redirect()->back()->with('error', 'Facture non trouvée.');
    }

    // Boucle sur les données des références et les enregistre une par une
    for ($i = 0; $i < count($request->ref); $i++) {
        $reference = new Reference();
        $reference->ref = $request->ref[$i];
        $reference->object = $request->object[$i];
        $reference->prix_unitaire = $request->prix_unitaire[$i];
        $reference->quantité = $request->quantité[$i];
        $reference->total_ht = $request->prix_unitaire[$i] * $request->quantité[$i]; // Calcul du total_ht
        $reference->num_fact = $facture->numero;
        $reference->save();
    }

    return redirect()->back()->with('success', 'Références ajoutées avec succès.');

}
public function index()
{
    // Récupérez les références depuis la base de données et passez-les à la vue
    $references = Reference::all();
    return view('ref', compact('references'));
}
public function update(Request $request, $id)
{
    // Rechercher la référence à mettre à jour
    $reference = Reference::findOrFail($id);

    // Vérifier si la référence existe
    if (!$reference) {
        return redirect()->back()->with('error', 'Référence non trouvée.');
    }

    // Valider les données de la requête
    $validator = Validator::make($request->all(), [
        'ref' => 'required|string|max:255',
        'object' => 'required|string|max:255',
        'prix_unitaire' => 'required|numeric',
        'quantité' => 'required|integer',
    ]);

    // Vérifier si la validation a échoué
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Vérifier s'il y a des modifications dans les données
    if ($request->ref == $reference->ref &&
        $request->object == $reference->object &&
        $request->prix_unitaire == $reference->prix_unitaire &&
        $request->quantité == $reference->quantité) {
        // Aucune modification n'a été apportée, donc ne pas mettre à jour
        return redirect()->back()->with('warning', 'Aucune modification détectée.');
    }

    // Mettre à jour les valeurs de la référence avec les nouvelles données
    $reference->ref = $request->input('ref');
    $reference->object = $request->input('object');
    $reference->prix_unitaire = $request->input('prix_unitaire');
    $reference->quantité = $request->input('quantité');
    $reference->total_ht = $request->input('prix_unitaire') * $request->input('quantité'); // Mettre à jour le total_ht si nécessaire
    $reference->save();

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'Référence mise à jour avec succès.');
}
public function edit($id)
{
    // Rechercher la référence à éditer
    $reference = Reference::find($id);

    // Vérifier si la référence existe
    if (!$reference) {
        return redirect()->back()->with('error', 'Référence non trouvée.');
    }

    return view('edit-reference')->with('reference', $reference);
}

}

