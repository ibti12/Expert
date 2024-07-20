<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;

class FactureController extends Controller
{
    // Afficher la liste des factures
    public function index()
    {
        $factures = Facture::all();
        return view('s_facture', compact('factures'));
    }

    // Afficher le formulaire de création d'une nouvelle facture
    public function create()
    {
        return view('factures.create');
    }

    // Enregistrer une nouvelle facture
   public function store(Request $request)
{
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'numero' => 'required',
        'date' => 'required|date',
     
       'nom' => 'required',
       'plus' => 'required',
       'type' => 'required',
       'montant' => 'required',

       
        // Ajoutez d'autres règles de validation si nécessaire
    ]);

    // Créer un nouvel objet Facture avec les données du formulaire
    $facture = new Facture();
    $facture->numero = $validatedData['numero'];
    $facture->date = $validatedData['date'];
    $facture->validation = $request->has('validation') ? 1 : 0;
    $facture->contact= $request->input('contact', null); 
$facture->nom = $validatedData['nom'];
$facture->plus = $validatedData['plus'];
$facture->type = $validatedData['type'];
$facture->montant = $validatedData['montant'];
     $facture->save();
 

    // Rediriger l'utilisateur vers la liste des factures avec un message de succès
    return redirect()->route('factures.index')->with('success', 'La facture a été créée avec succès.');
}



    // Afficher les détails d'une facture spécifique
    public function show($id)
    {
        $facture = Facture::findOrFail($id);
        return view('factures.show', compact('facture'));
    }

    // Afficher le formulaire d'édition d'une facture
    public function edit($id)
    {
        $facture = Facture::findOrFail($id);
        return view('edit_facture', compact('facture'));
    }

    // Mettre à jour une facture existante
  public function update(Request $request, $id)
{
    // Validation des données du formulaire
    $request->validate([
        'numero' => 'required',
        'date' => 'required|date',
        'nom' => 'required',
        'plus' => 'required',
        'contact'=>'nullable|string',
        
        // Ajoutez d'autres règles de validation si nécessaire
    ]);

    // Récupérer la facture spécifique depuis la base de données
    $facture = Facture::findOrFail($id);

    // Mettre à jour les propriétés de la facture avec les données du formulaire
    $facture->update([
        'numero' => $request->input('numero'),
        'date' => $request->input('date'),
        'validation' => $request->has('validation') ? 1 : 0,
        'plus' => $request->input('plus'),
        'nom' => $request->input('nom'),
        'contact' => $request->input('contact'),
        'montant' => $request->input('montant'),
        'type' => $request->input('type'), // Mettre à jour la validation en fonction de la valeur soumise depuis le formulaire

        // Mettez à jour d'autres champs si nécessaire
    ]);
    
    // Vérifier si la case à cocher a été cochée ou non
    if ($request->has('validation')) {
        $facture->validation = 1;
    } else {
        $facture->validation = 0;
    }

    // Enregistrer les modifications
    $facture->save();
    // Rediriger l'utilisateur vers une page de confirmation ou autre avec un message de succès
    return redirect()->route('factures.index')->with('success', 'La facture a été mise à jour avec succès.');
}

    // Supprimer une facture existante
    public function destroy($id)
    {
        // Récupérer la facture spécifique depuis la base de données
        $facture = Facture::findOrFail($id);

        // Supprimer la facture de la base de données
        $facture->delete();

        // Rediriger l'utilisateur vers la liste des factures avec un message de succès
        return redirect()->route('factures.index')->with('success', 'La facture a été supprimée avec succès.');
    }
        
        public function rechercher(Request $request)
        {
            $nom = $request->input('nom');
          
            $factures = null;
    
            if ($nom) {
                // Utilisez la méthode get() pour récupérer toutes les factures correspondant au numéro
                $factures = Facture::where('nom','like', $nom . '%')->get();
            } else {
                // Si aucun numéro n'est saisi, récupérez toutes les factures
                $factures = Facture::all();
            }
            \Log::info('Factures count: ' . $factures->count());

            // Retournez la vue avec les factures trouvées
            return view('s_facture', compact('factures'));
        }
    
    

    
    public function recap()
    {
        // Récupérer la somme des montants par type de facture
        $factures = Facture::selectRaw('type, SUM(montant) as total_montant')
                             ->groupBy('type')
                             ->get();
    
        // Passer $sumsByType à la vue modal.blade.php
        return view('modal', compact('factures'));
    }
    
}