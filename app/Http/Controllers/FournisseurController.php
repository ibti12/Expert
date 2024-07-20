<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    // Affiche la liste des fournisseurs
    public function index()
    {
        $fournisseurs = Fournisseur::all();
        return view('fournisseur', compact('fournisseurs'));
    }

    // Affiche le formulaire pour ajouter un nouveau fournisseur
    public function create()
    {
        return view('fournisseurs.create');
    }

    // Enregistre un nouveau fournisseur
    public function store(Request $request)
{ 
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'numero' => 'required',
        'ice' => 'required',
        'nom' => 'required',
        'email' => 'required',
        'adresse' => 'required',
        
    ]);

    // Créer un nouveau fournisseur avec les données validées
    $fournisseur = new Fournisseur();
    
    $fournisseur->ice = $validatedData['ice'];
    $fournisseur->nom = $validatedData['nom'];
    $fournisseur->email = $validatedData['email'];
    $fournisseur->numero= $validatedData['numero'];
    $fournisseur->adresse = $validatedData['adresse'];

    $fournisseur->save();

    // Rediriger vers une autre page ou retourner une réponse appropriée
    return redirect()->route('fournisseurs.index')->with('success', 'Fournisseur ajouté avec succès');
}

    // Affiche les détails d'un fournisseur
    public function show(Fournisseur $fournisseur)
    {
        return view('fournisseurs.show', compact('fournisseur'));
    }

    // Affiche le formulaire pour modifier un fournisseur
    public function edit(Fournisseur $fournisseur)
    {
        return view('fournisseurs.edit', compact('fournisseur'));
    }

    // Met à jour les informations d'un fournisseur
    public function update(Request $request, Fournisseur $fournisseur)
    {
        $request->validate([
            'ice' => 'required',
            'adresse' => 'required',
            'nom' => 'required',
            'email' => 'required|email',
            'numero' => 'required',
        ]);

        $fournisseur->update($request->all());
        return redirect()->route('fournisseurs.index')->with('success', 'Fournisseur mis à jour avec succès.');
    }

    // Supprime un fournisseur
    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur->delete();
        return redirect()->route('fournisseurs.index')->with('success', 'Fournisseur supprimé avec succès.');
    }
    public function search(Request $request)
    {
        $nom = $request->input('nom');
        $fournisseeurs= null;

        if($nom) {
            $fournisseurs = Fournisseur::where('nom', 'like', $nom . '%')->get();
        } else {
            $fournisseurs = Fournisseur::all();
        }

        return view('s_fournisseur', compact('fournisseurs'));
    }

}

