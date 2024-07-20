<?php

namespace App\Http\Controllers;

use App\Models\Fourd;
use App\Models\File;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FourdController extends Controller
{
    public function index()
    {
        // Récupérer tous les enregistrements de la table fourd
        $fourd = Fourd::all();
        $file = File::all();
        // Retourner la vue avec les enregistrements
        return view('devis_four', compact('fourd','file'));
    }

    public function create()
    {
        // Retourner la vue pour créer un nouvel enregistrement
        return view('fourd.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validator =Validator::make($request->all(),[
           'nom' => 'required',
           'numero' => 'required',
          
           
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
        $fourds = new Fourd();
        $fourds->nom = $four->nom;
        $fourds->numero= $request['numero'];
         $fourds->save();
        // Rediriger l'utilisateur vers la liste des fourfss avec un message de succès
        return redirect()->back()->with('success', 'Références ajoutées avec succès.');
    
    }

    public function edit($id)
    {
        // Trouver l'enregistrement par son ID
        $fourd = Fourd::findOrFail($id);

        // Retourner la vue pour éditer l'enregistrement
        return view('fourd.edit', compact('fourd'));
    }

    public function update(Request $request, $id)
    {
        // Trouver l'enregistrement par son ID
        $fourd = Fourd::findOrFail($id);

        // Valider les données de la requête
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'numero' => 'required',
        ]);

        // Vérifier si la validation a échoué
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Mettre à jour l'enregistrement
        $fourd->update($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('fourd.index')->with('success', 'Enregistrement mis à jour avec succès.');
    }

    
    public function destroy($id)
{
    // Trouver la référence à supprimer
    $fourds = Fourd::findOrFail($id);

    // Supprimer la référence
    $fourds->delete();

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'La référence a été supprimée avec succès.');

}
public function showByNomfour($nom)
{
    $four = Fournisseur::where('nom', $nom)->first();
    $file = File::all();
    
    if ($four) {
        // Retrieve the items associated with this fournisseur
        $fourds = Fourd::where('nom', $four->nom)->get();

    }

      


    // Retourner la vue avec les éléments et le nom
    return view('devis_four', ['fourds' => $fourds, 'nom' => $nom,'file' => $file]);
}
public function showUploadPdfForm()
    {
        return view('dos');
    }
}
