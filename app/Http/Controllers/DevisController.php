<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;

class DevisController extends Controller
{
    // Afficher la liste des devis
    public function index()
    {
        $devis = Devis::all();
        return view('devis', compact('devis'));
    }

    // Afficher le formulaire de création d'un nouveau devis
    public function create()
    {
        return view('devis.create');
    }

    // Enregistrer un nouveau devis
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'N°' => 'required',
            'date' => 'required|date',
             'nom' => 'required',
              'plus' => 'required',
              'contact' => 'required',
              'contact_xval' => 'required',
              'gsm' => 'required',
            // Ajoutez d'autres règles de validation si nécessaire
        ]);

       
        $devis = new Devis();

        
        $devis->N° = $validatedData['N°'];
        $devis->date = $validatedData['date'];
          $devis->nom = $validatedData['nom'];
            $devis->plus = $validatedData['plus'];
            $devis->contact = $validatedData['contact'];
            $devis->gsm = $validatedData['gsm'];
            $devis->contact_xval = $validatedData['contact_xval'];

        $devis->save();
        // Rediriger l'utilisateur vers la liste des devis avec un message de succès
        return redirect()->route('devis.index')->with('success', 'Le devis a été créé avec succès.');
    }

    // Afficher les détails d'un devis spécifique
    public function show($id)
    {
        $devis = Devis::findOrFail($id);
        return view('devis.show', compact('devis'));
    }

    // Afficher le formulaire d'édition d'un devis
    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'N°' => 'required',
            'date' => 'required|date',
            'nom' => 'required',
            'plus' => 'required',
            'contact' => 'required',
            'contact_xval' => 'required',
            'gsm' => 'required',
        ]);

        // Récupérer le devis spécifique depuis la base de données
        $devis = Devis::findOrFail($id);

        // Mettre à jour les propriétés du devis avec les données du formulaire
        $devis->N°= $request->N°;
        $devis->date = $request->date;
        $devis->nom = $request->nom;
        $devis->plus = $request->plus;
        $devis->contact = $request->contact;
        $devis->contact_xval = $request->contact_xval;
        $devis->gsm = $request->gsm;
        $devis->save();

        // Rediriger l'utilisateur vers la liste des devis avec un message de succès
        return redirect()->route('devis.index')->with('success', 'Le devis a été mis à jour avec succès.');
    }

public function edit($id)
    {
        $devis = Devis::findOrFail($id);
        return view('edit_devis', compact('devis'));
    }

    // Supprimer un devis existant
    public function destroy($id)
    {
        // Récupérer le devis spécifique depuis la base de données
        $devis = Devis::findOrFail($id);

        // Supprimer le devis de la base de données
        $devis->delete();

        // Rediriger l'utilisateur vers la liste des devis avec un message de succès
        return redirect()->route('devis.index')->with('success', 'Le devis a été supprimé avec succès.');
    }
 
    
    public function rechercher(Request $request)
    {
        $numero = $request->input('nom');
        $devis = null;

        if($numero) {
            $devis = Devis::where('nom','like', $numero . '%')->get();
        } else {
            $devis = Devis::all();
        }

        return view('s_devis', compact('devis'));
    }

}