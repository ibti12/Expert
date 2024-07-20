<?php

namespace App\Http\Controllers;

use App\Models\Fourb;


use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class fourbController extends Controller
{
    public function index()
    {
        // Récupérer tous les enregistrements de la table fourb
        $fourb = Fourb::all();
       
        // Retourner la vue avec les enregistrements
        return view('fourb.index', compact('fourb'));
    }

    public function create()
    {
        // Retourner la vue pour créer un nouvel enregistrement
        return view('fourb.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validator =Validator::make($request->all(),[
           'nom' => 'required',
           'date' => 'required',
           'numero' => 'required',
           'plus' => 'required',
           'contact' => 'required',
           'gsm' => 'required',
          
           
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
        $fourbs = new Fourb();
        $fourbs->nom = $four->nom;
        $fourbs->plus=$request->plus;
        $fourbs->date=$request->date;
        $fourbs->numero=$request->numero;
        $fourbs->contact=$request->contact;
        $fourbs->gsm=$request->gsm;
         $fourbs->save();
        // Rediriger l'utilisateur vers la liste des fourfss avec un message de succès
        return redirect()->back()->with('success', 'Références ajoutées avec succès.');
    
    }

    public function edit($id)
    {
        // Trouver l'enregistrement par son ID
        $fourb = fourb::findOrFail($id);

        // Retourner la vue pour éditer l'enregistrement
        return view('fourb.edit', compact('fourb'));
    }

    public function update(Request $request, $id)
    {
        // Trouver l'enregistrement par son ID
        $fourb = Fourb::findOrFail($id);
   
        // Valider les données de la requête
        $validator = Validator::make($request->all(), [
            'date' => 'required|date',
            'plus' => 'required',
            'numero' => 'required',
            'nom' => 'required',
            'contact' => 'required',
            'gsm' => 'required',
            
        ]);
    
        // Vérifier si la validation a échoué
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Récupérer les données validées
        $validatedData = $validator->validated();
    
        // Mettre à jour l'enregistrement
        $fourb->date = $validatedData['date'];
        $fourb->plus = $validatedData['plus'];
        $fourb->numero = $validatedData['numero'];
        $fourb->nom = $validatedData['nom'];
        $fourb->contact = $validatedData['contact'];
         $fourb->gsm = $validatedData['gsm'];
    
        // Enregistrer les modifications
        $fourb->save();
    
        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'La référence a été mise à jour avec succès.');
    }
    
    public function destroy($id)
{
    // Trouver la référence à supprimer
    $fourbs = Fourb::findOrFail($id);

    // Supprimer la référence
    $fourbs->delete();

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'La référence a été supprimée avec succès.');

}
public function showByNomfour($nom)
{
    $four = Fournisseur::where('nom', $nom)->first();
    
    
    if ($four) {
        // Retrieve the items associated with this fournisseur
        $fourbs = Fourb::where('nom', $four->nom)->get();

    }

      


    // Retourner la vue avec les éléments et le nom
    return view('commande', ['fourbs' => $fourbs, 'nom' => $nom]);
}
}
