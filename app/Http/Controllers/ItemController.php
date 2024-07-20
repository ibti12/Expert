<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Devis;
use App\Models\Client;
use Illuminate\Support\Facades\Validator; // Import the Validator facade
use Illuminate\Support\Facades\Log; // I
class ItemController extends Controller
{
    public function showInvoice()
{
    // Récupérer toutes les références depuis la base de données
    $items = Item::all();

    // Initialiser un tableau pour stocker les totaux pour chaque num_devis
    $totalsByNumDevis  = [];

    // Calculer les totaux pour chaque num_devis
    foreach ($items as $item) {
        $num_devis = $item->num_devis;
        $prix_unitaire = $item->prix_unitaire;
        $quantite = $item->quantite;
        
        // Calculer le total_ht pour cette référence
        $total_ht = $prix_unitaire * $quantite;
        
        // Calculer le tva pour cette référence (20% de total_ht)
        $tva = $total_ht * 0.20;

        // Calculer le total_ttc pour cette référence
        $total_ttc = $total_ht + $tva;

        // Ajouter les totaux au tableau totalsByNumDevis 
        if (!isset($totalsByNumDevis [$num_devis])) {
            $totalsByNumDevis [$num_devis] = [
                'total_ht' => $total_ht,
                'tva' => $tva,
                'total_ttc' => $total_ttc,
            ];
        } else {
            $totalsByNumDevis [$num_devis]['total_ht'] += $total_ht;
            $totalsByNumDevis [$num_devis]['tva'] += $tva;
            $totalsByNumDevis [$num_devis]['total_ttc'] += $total_ttc;
        }
    }

    // Passer les données à la vue et afficher la Devis
    return view('invoice', [
        'totalsByNumDevis ' => $totalsByNumDevis ,
    ]);
}

public function showByNumeroDevis($num_devis)
{
    // Retrieve the devis with the given number
    $devis = Devis::where('N°', $num_devis)->first();

    // Check if the devis exists
    if ($devis) {
        // Retrieve the items associated with this devis
        $items = Item::where('num_devis', $devis->{"N°"})->get();
    } else {
        $items = collect();
    }

    // Return the view with the items and the number
    return view('item', compact('items', 'num_devis'));
}

public function genereDevis($num_devis)
{
    // Recherche de la Devis avec le numéro de devis donné
    $devis = Devis::where('N°', $num_devis)->first();

    // Initialisation des variables pour le calcul du total HT, de la TVA et du total TTC
    $total_ht = 0;
    $tva = 0;
    $total_ttc = 0;
    $client = null;

    // Vérifier si la Devis existe
    if ($devis) {
        // Récupérer les références associées à cette Devis
        $items = Item::where('num_devis', $devis->{"N°"})->get();

        // Calculer le total HT et la TVA
        $total_ht = $items->sum(function ($item) {
            return $item->prix_unitaire * $item->quantite;
        });

        $tva = $total_ht * 0.2; // Calcul de la TVA (20% du total HT)

        // Calculer le total TTC
        $total_ttc = $total_ht + $tva;

         // Récupérer les références associées à cette Devis
         $client = Client::where('NOM', $devis->nom)->first();



    } else {
        // Si la Devis n'existe pas, initialiser une collection vide de références
        $items = collect();
    }

    // Retourner la vue avec les références, le client et d'autres informations de Devis
    return view('Devis_ex', compact('items', 'devis', 'client', 'total_ht', 'tva', 'total_ttc','num_devis','client'));
}
// Méthode pour afficher le formulaire d'édition


// Méthode pour supprimer une référence
public function destroy($id)
{
    // Trouver la référence à supprimer
    $item = Item::findOrFail($id);

    // Supprimer la référence
    $item->delete();

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'La référence a été supprimée avec succès.');
}


public function show($num_devis)
    {
        $Items = Item::where('num_devis', $num_devis)->get();
        return view('ref', compact('Items', 'num_devis'));
    }

    public function create($N°)
    {
        return view('create', compact('N°'));
    }

 

    // Dans la méthode store du contrôleur ItemController

    public function store(Request $request)
    {
        // Valider les données de la requête
        $validator = Validator::make($request->all(), [
            'num_devis' => 'required',
            'ref.*' => 'required',
            'object.*' => 'required',
            'prix_unitaire.*' => 'required',
            'quantite.*' => 'required|numeric',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Recherche du devis en fonction du numéro de devis
        $devis = Devis::where('N°', $request->input('num_devis'))->first();
    
        if (!$devis) {
            return redirect()->back()->with('error', 'Devis non trouvé.');
        }
    
        // Boucle sur les données des références et les enregistre une par une
        foreach ($request->ref as $index => $ref) {
            $item = new Item();
            $item->ref = $ref;
            $item->object = $request->object[$index];
            $item->prix_unitaire = $request->prix_unitaire[$index];
            $item->quantite = $request->quantite[$index];
            $item->total_ht = $request->prix_unitaire[$index] * $request->quantite[$index];
            $item->num_devis = $devis->N°;
    
            // Afficher les données avant la sauvegarde
           
    
            // Sauvegarde l'élément
            $item->save();
    
            // Afficher les données après la sauvegarde
          
        }
    
        return redirect()->back()->with('success', 'Références ajoutées avec succès.');
    }
    
    public function update(Request $request, $id)
    {
        // Rechercher la référence à mettre à jour
        $item = Item::findOrFail($id);
    
        // Valider les données de la requête
        $validator = Validator::make($request->all(), [
            'ref' => 'required',
            'object' => 'required',
            'prix_unitaire' => 'required',
            'quantite' => 'required',
        ]);
    
        // Vérifier si la validation a échoué
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
        // Mettre à jour les valeurs de la référence avec les nouvelles données
        $item->ref = $request->input('ref');
        $item->object = $request->input('object');
        $item->prix_unitaire = $request->input('prix_unitaire');
        $item->quantite = $request->input('quantite');
        $item->total_ht = $request->input('prix_unitaire') * $request->input('quantite'); // Mettre à jour le total_ht si nécessaire
        $item->save();
    
        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Référence mise à jour avec succès.');
    }
    public function edit($id)
{
    // Rechercher la référence à éditer
    $Item = Item::find($id);

    // Vérifier si la référence existe
    if (!$Item) {
        return redirect()->back()->with('error', 'Référence non trouvée.');
    }

    return view('edit-Items')->with('Items', $Item);
}

}

