<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BCommande;

class BCommandeController extends Controller
{
    // Afficher la liste des bandes de commandes
    public function index()
    {
        $b_commande = BCommande::all();
        return view('b_commande', compact('b_commande'));
    }

    // Afficher le formulaire d'édition d'une bande de commande
    public function edit($id)
    {
        $b_commande = BCommande::findOrFail($id);
        return view('edit_Bcommande', compact('b_commande'));
    }

   public function update(Request $request, $id)
{
    // Validation des données du formulaire
    $request->validate([
        'N°' => 'nullable|string',
        'date' => 'required|date',
        'nom' => 'required',
        'plus' => 'nullable|string',
        
    ]);

    // Récupérer la bande de commande spécifique depuis la base de données
    $b_commande = BCommande::findOrFail($id);

    // Mettre à jour les champs de la bande de commande avec les données du formulaire
    $b_commande->update([
        'N°' => $request->input('N°'),
        'date' => $request->input('date'),
        'nom' => $request->input('nom'),
        'plus' => $request->input('plus'),
    ]);
        
    // Rediriger l'utilisateur vers la liste des bandes de commandes avec un message de succès
    return redirect()->route('b_commande.index')->with('success', 'Bande de commande mise à jour avec succès.');
}


      
        public function store(Request $request)
{
    // Valider les données du formulaire
    $validatedData = $request->validate([
        
        'date' => 'required|date',
        'nom' => 'required',
        
    ]);

    // Créer une nouvelle instance de BCommande
    $commande = new BCommande();

    // Récupérer les données du formulaire et les assigner à l'instance de BCommande
    $commande->N° = $request->input('N°', null); 
    $commande->date = $validatedData['date'];
     $commande->nom = $validatedData['nom'];
      $commande->plus = $request->input('plus', null); 
  
    // Sauvegarde de la commande dans la base de données
    $commande->save();

    // Redirection avec un message de succès
    return redirect()->route('commandes.index')->with('success', 'La commande a été créée avec succès.');
}
public function destroy($id)
{
    $commande = BCommande::findOrFail($id);
    
    $commande->delete();

    return redirect()->route('commandes.index')->with('success', 'Le dossier a été supprimé avec succès.');
}

    public function rechercher(Request $request)
    {
        $numero = $request->input('nom');
        $b_commandes = null;

        if ($numero) {
            $b_commandes = BCommande::where('nom', 'like', $numero . '%')->get();
        } else {
            $b_commandes = BCommande::all();
        }

        return view('s_commande', compact('b_commandes'));
    }
}

