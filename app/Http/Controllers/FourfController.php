<?php

namespace App\Http\Controllers;

use App\Models\Fourf;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Import the Validator facade
use Illuminate\Support\Facades\Log;
class FourfController extends Controller
{
    // Affiche la liste des fourfs
    public function index()
    {
        $fourfs = Fourf::all();
        return view('facture_four', compact('fourfs'));
    }

    // Affiche le formulaire de création d'un nouveau fourf
    public function create()
    {
        return view('fourfs.create');
    }

    // Enregistre un nouveau fourf
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validator =Validator::make($request->all(),[
           'nom' => 'required',
           'montant' => 'required',
           'date_achat' => 'required',

           'date_paiement' => 'required',

    
           
            // Ajoutez d'autres règles de validation si nécessaire
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Recherche du devis en fonction du numéro de devis
        $four = Fournisseur::where('nom', $request->input('nom'))->first();
    
        if (!$four) {
            return redirect()->back()->with('error', 'Devis non trouvé.');
        }
    
        // Créer un nouvel objet fourfs avec les données du formulaire
        $fourfs = new Fourf();
        $fourfs->status = $request->has('status') ? 1 : 0;
        $fourfs->nom = $four->nom;
         $fourfs->montant = $request->montant;
         $fourfs->date_achat = $request->date_achat;
         $fourfs->date_paiement = $request->date_paiement;
         $fourfs->save();
     
    
        // Rediriger l'utilisateur vers la liste des fourfss avec un message de succès
        return redirect()->back()->with('success', 'Références ajoutées avec succès.');
    
    }
    // Affiche les détails d'un fourf
    public function show(Fourf $fourf)
    {
        return view('fourfs.show', compact('fourf'));
    }

    // Affiche le formulaire d'édition d'un fourf existant
    public function edit(Fourf $fourf)
    {
        return view('fourfs.edit', compact('fourf'));
    }

    // Met à jour un fourf existant
    public function update(Request $request, $id)
{
    // Trouver l'enregistrement à mettre à jour
    $fourf = Fourf::findOrFail($id);

    // Valider les données de la requête
    $request->validate([
        'nom' => 'required',
        'montant' => 'required|numeric',
        'date_achat' => 'required|date',
        'date_paiement' => 'required|date',
    ]);

    // Récupérer les données validées et mettre à jour l'enregistrement
    $fourf->update([
        'nom' => $request->input('nom'),
        'montant' => $request->input('montant'),
        'date_achat' => $request->input('date_achat'),
        'date_paiement' => $request->input('date_paiement'),
        'status' => $request->has('status') ? 1 : 0,
    ]);

    // Vérifier si la case à cocher a été cochée ou non
    if ($request->has('status')) {
        $fourf->status = 1;
    } else {
        $fourf->status= 0;
    }

    // Enregistrer les modifications
    $fourf->save();

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'Référence mise à jour avec succès.');
}
    public function destroy($id)
{
    // Trouver la référence à supprimer
    $fourfs = Fourf::findOrFail($id);

    // Supprimer la référence
    $fourfs->delete();

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'La référence a été supprimée avec succès.');
}

    public function showByNomfour($nom)
{
    $four = Fournisseur::where('nom', $nom)->first();
    
    $tva = 0;
    $montant_ttc = 0;
    if ($four) {
        // Retrieve the items associated with this fournisseur
        $fourfs = Fourf::where('nom', $four->nom)->get();

    }

    if ($fourfs && $fourfs->isNotEmpty()) {
            $tva = $fourfs->first()->montant * 0.2; // Calcul de la TVA (20% du montant)
            $montant_ttc = $fourfs->first()->montant * 1.2; // Calcul du montant TTC (montant + TVA)
        }


    // Retourner la vue avec les éléments et le nom
    return view('facture_four', ['fourfs' => $fourfs, 'nom' => $nom, 'tva' => $tva, 'montant_ttc' => $montant_ttc, 'four' => $four]);
}

public function filter(Request $request)
    {
        $request->validate([
            'date_achat_start' => 'required|date',
            'date_achat_end' => 'required|date|after_or_equal:date_achat_start',
        ]);

        $date_achat_start = $request->input('date_achat_start');
        $date_achat_end = $request->input('date_achat_end');

        $fourfs = Fourf::whereBetween('date_achat', [$date_achat_start, $date_achat_end])->get();
        if ($fourfs && $fourfs->isNotEmpty()) {
            $tva = $fourfs->first()->montant * 0.2; // Calcul de la TVA (20% du montant)
            $montant_ttc = $fourfs->first()->montant * 1.2; // Calcul du montant TTC (montant + TVA)
        }

        return view('periode', compact('fourfs','tva','montant_ttc'));
    }

}
