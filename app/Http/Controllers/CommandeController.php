<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
use App\Models\Fourb;
use App\Models\Fournisseur;
use Illuminate\Support\Facades\Validator; // Import the Validator facade
use Illuminate\Support\Facades\Log; // I
class CommandeController extends Controller
{
    public function showInvoice()
{
    // Récupérer toutes les références depuis la base de données
    $commandes = commande::all();

    // Initialiser un tableau pour stocker les totaux pour chaque num_bon
    $totalsByNumBon = [];

    // Calculer les totaux pour chaque num_bon
    foreach ($commandes as $commande) {
        $num_bon = $commande->num_bon;
        $prix_unitaire = $commande->prix_unitaire;
        $quantite = $commande->quantite;
        
        // Calculer le total_ht pour cette référence
        $total_ht = $prix_unitaire * $quantite;
        
        // Calculer le tva pour cette référence (20% de total_ht)
        $tva = $total_ht * 0.20;

        // Calculer le total_ttc pour cette référence
        $total_ttc = $total_ht + $tva;

        // Ajouter les totaux au tableau totalsByNumBon
        if (!isset($totalsByNumBon[$num_bon])) {
            $totalsByNumBon[$num_bon] = [
                'total_ht' => $total_ht,
                'tva' => $tva,
                'total_ttc' => $total_ttc,
            ];
        } else {
            $totalsByNumBon[$num_bon]['total_ht'] += $total_ht;
            $totalsByNumBon[$num_bon]['tva'] += $tva;
            $totalsByNumBon[$num_bon]['total_ttc'] += $total_ttc;
        }
    }

    // Passer les données à la vue et afficher la Fourb
    return view('invoice', [
        'totalsByNumBon' => $totalsByNumBon,
    ]);
}

public function showByNumeroFourb($numero)
{
    // Récupérer la Fourb avec le numéro de devis donné
    $Fourb = Fourb::where('numero', $numero)->first();

    // Vérifier si la Fourb existe
    if ($Fourb) {
        // Récupérer les références associées à cette Fourb
        $commandes = commande::where('num_bon', $Fourb->numero)->get();
    } else {
        $commandes = collect();
    }

    // Retourner la vue avec les références et le numéro de devis
    return view('bon', compact('commandes', 'numero'));
}
public function genereFourb($numero)
{
    // Recherche de la Fourb avec le numéro de devis donné
    $fourb = Fourb::where('numero', $numero)->first();

    // Initialisation des variables pour le calcul du total HT, de la TVA et du total TTC
    $total_ht = 0;
    $tva = 0;
    $total_ttc = 0;
    $four = null;

    // Vérifier si la Fourb existe
    if ($fourb) {
        // Récupérer les références associées à cette Fourb
        $commandes = commande::where('num_bon', $fourb->numero)->get();

        // Calculer le total HT et la TVA
        $total_ht = $commandes->sum(function ($commande) {
            return $commande->prix_unitaire * $commande->quantite;
        });

        $tva = $total_ht * 0.2; // Calcul de la TVA (20% du total HT)

        // Calculer le total TTC
        $total_ttc = $total_ht + $tva;

         // Récupérer les références associées à cette Fourb
         $four =Fournisseur::where('nom', $fourb->nom)->first();
    } else {
        // Si la Fourb n'existe pas, initialiser une collection vide de références
        $commandes = collect();
    }

    // Retourner la vue avec les références, le four et d'autres informations de Fourb
    return view('four_fiche', compact('commandes', 'fourb', 'four', 'total_ht', 'tva', 'total_ttc'));
}
// Méthode pour afficher le formulaire d'édition


// Méthode pour supprimer une référence
public function destroy($id)
{
    // Trouver la commande à supprimer
    $commande = Commande::findOrFail($id);

    // Supprimer la commande
    $commande->delete();

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'La commande a été supprimée avec succès.');
}




    public function create($numero)
    {
        return view('create', compact('numero'));
    }

    public function store(Request $request)
    {
        // Valider les données
        $validatedData = $request->validate([
            'ref.*' => 'required',
            'object.*' => 'required',
            'prix_unitaire.*' => 'required|numeric',
            'quantite.*' => 'required|numeric',
            'num_bon' => 'required', // Validez la présence de 'num_bon' dans la requête
        ]);
    
        // Recherche de la Fourb en fonction du numéro de Fourb
        $Fourb = Fourb::where('numero', $request->input('num_bon'))->first();
    
        if (!$Fourb) {
            return redirect()->back()->with('error', 'Fourb non trouvée.');
        }
    
        // Accéder aux données soumises
        $references = $request->input('ref');
        $objects = $request->input('object');
        $prix_unitaires = $request->input('prix_unitaire');
        $quantites = $request->input('quantite');
       
    
    
        // Assurez-vous que la valeur 'numero' existe dans la requête
        if ($request->has('num_bon')) {
            // Obtenir la valeur de 'numero' à partir de l'objet $Fourb
            $numero = $Fourb->numero;
        } else {
            // Traiter l'absence de 'numero' dans la requête
            // Vous pouvez choisir de rediriger avec un message d'erreur ici
        }
    
        // Traiter les données soumises uniquement si elles sont valides
        if ($validatedData) {
            // Parcourir les données soumises
            for ($i = 0; $i < count($references); $i++) {
                // Traiter chaque élément
                $commande = new Commande();
                $commande->ref = $references[$i];
                $commande->object = $objects[$i];
                $commande->prix_unitaire = $prix_unitaires[$i];
                $commande->quantite = $quantites[$i];
                $commande->total_ht = $prix_unitaires[$i] * $quantites[$i];
                $commande->num_bon = $numero; 
             
                // Assigner la valeur de 'numero' à 'num_bon'
                $commande->save();
            }
    
            // Rediriger avec un message de succès
            return redirect()->back()->with('success', 'Commandes enregistrées avec succès.');
        } else {
            // Rediriger avec un message d'erreur si les données ne sont pas valides
            return redirect()->back()->with('error', 'Veuillez remplir tous les champs correctement.');
        }
    }

public function index()
{
    // Récupérez les références depuis la base de données et passez-les à la vue
    $commandes = commande::all();
    return view('ref', compact('commandes'));
}
public function update(Request $request, $id)
{
    // Valider les données
    $validatedData = $request->validate([
        'ref' => 'required',
        'object' => 'required',
        'prix_unitaire' => 'required|numeric',
        'quantite' => 'required|numeric',
    ]);

    // Trouver la commande à mettre à jour
    $commande = Commande::findOrFail($id);

    // Vérifier s'il y a des modifications dans les données
    if ($request->ref == $commande->ref &&
        $request->object == $commande->object &&
        $request->prix_unitaire == $commande->prix_unitaire &&
        $request->quantite == $commande->quantite) {
        // Aucune modification n'a été apportée, donc ne pas mettre à jour
        return redirect()->back()->with('warning', 'Aucune modification détectée.');
    }

    // Assurez-vous que le champ 'quantite' est défini et a une valeur non null
    if (!$request->has('quantite')) {
        return redirect()->back()->with('error', 'Veuillez spécifier une valeur pour la quantité.');
    }

    // Mettre à jour les valeurs de la référence avec les nouvelles données
    $commande->ref = $request->input('ref');
    $commande->object = $request->input('object');
    $commande->prix_unitaire = $request->input('prix_unitaire');
    $commande->quantite = $request->input('quantite');
    $commande->total_ht = $request->input('prix_unitaire') * $request->input('quantite'); // Mettre à jour le total_ht si nécessaire
    $commande->save();

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'Commande mise à jour avec succès.');
}public function edit($id)
{
    // Rechercher la référence à éditer
    $commande = commande::find($id);

    // Vérifier si la référence existe
    if (!$commande) {
        return redirect()->back()->with('error', 'Référence non trouvée.');
    }

    return view('edit-commande')->with('commande', $commande);
}

}


