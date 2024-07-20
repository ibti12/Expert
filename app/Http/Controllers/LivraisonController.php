<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livraison;

class LivraisonController extends Controller
{
    // Afficher la liste des livraisons
    public function index()
    {
        $livraisons = Livraison::all();
        return view('livraison', compact('livraisons'));
    }

    // Afficher le formulaire de création d'une nouvelle livraison
    public function create()
    {
        return view('livraisons.create');
    }

    // Enregistrer une nouvelle livraison
  public function store(Request $request)
{
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'lieu' => 'required|string',
        'date' => 'required|date',
        'nom' => 'required|string',
         
        'N°dossier' => 'required',
        // Ajoutez d'autres règles de validation si nécessaire
    ]);

    // Créer un nouvel objet Livraison avec les données du formulaire
    $livraison = new Livraison();
    $livraison->lieu = $validatedData['lieu'];
    $livraison->date = $validatedData['date'];
    $livraison->nom = $validatedData['nom'];
    $livraison->status = $request->has('status') ? 1 : 0;

         $livraison->N°dossier = $validatedData['N°dossier'];


    $livraison->save();

    // Rediriger l'utilisateur vers la liste des livraisons avec un message de succès
    return redirect()->route('livraisons.index')->with('success', 'La livraison a été créée avec succès.');
}
    // Afficher les détails d'une livraison spécifique
    public function show($id)
    {
        $livraison = Livraison::findOrFail($id);
        return view('livraisons.show', compact('livraison'));
    }

    // Afficher le formulaire d'édition d'une livraison
    public function edit($id)
    {
        $livraison = Livraison::findOrFail($id);
        return view('edit_livraison', compact('livraison'));
    }

    // Mettre à jour une livraison existante
    public function update(Request $request, $id)
{
    // Validation des données du formulaire
    $request->validate([
        'lieu' => 'required',
        'date' => 'required|date',
        'nom' => 'required',
        'N°dossier' => 'required',
        // Ajoutez d'autres règles de validation si nécessaire
    ]);

    try {
        // Récupérer la livraison spécifique depuis la base de données
        $livraison = Livraison::findOrFail($id);

        // Mettre à jour les propriétés de la livraison avec les données du formulaire
        $livraison->update([
            'nom' => $request->input('nom'),
            'date' => $request->input('date'),
            'lieu' => $request->input('lieu'),
            'N°dossier' => $request->input('N°dossier'),
            'status' => $request->has('status') ? 1 : 0,
        ]);

        // Rediriger l'utilisateur vers la liste des livraisons avec un message de succès
        return redirect()->route('livraisons.index')->with('success', 'La livraison a été mise à jour avec succès.');
    } catch (\Exception $e) {
        // En cas d'erreur, rediriger l'utilisateur avec un message d'erreur
        return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour de la livraison.');
    }
}


    // Supprimer une livraison existante
    public function destroy($id)
    {
        // Récupérer la livraison spécifique depuis la base de données
        $livraison = Livraison::findOrFail($id);

        // Supprimer la livraison de la base de données
        $livraison->delete();

        // Rediriger l'utilisateur vers la liste des livraisons avec un message de succès
        return redirect()->route('livraisons.index')->with('success', 'La livraison a été supprimée avec succès.');
    }
    public function rechercher(Request $request)
    {
        $nom = $request->input('nom');
        $livraisons= null;

        if($nom) {
            $livraisons = Livraison::where('nom', 'like', $nom . '%')->get();
        } else {
            $livraisons = livraison::all();
        }

        return view('s_livraison', compact('livraisons'));
    }

}

