<?php

namespace App\Http\Controllers;

use App\Models\deplacement;
use Illuminate\Http\Request;
use App\Models\dep;
use Egulias\EmailValidator\Warning\DeprecatedComment;
use Illuminate\Support\Facades\Validator; // Import the Validator facade
use Illuminate\Support\Facades\Log; //
class depController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deplacements = deplacement::all();
        return view('deplacement', compact('deplacements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deplacement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  
     * @return \Illuminate\Http\Response
     */
   
        // Afficher les données de la requête pour le débogage
       

        public function store(Request $request)
        {
            // Valider les données de la requête entrante
            $validator = Validator::make($request->all(), [
                
                'date_aller.*' => 'required',
                'date_retour.*' => 'required',
                'kilometrage.*' => 'required',
            ]);
       
        
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        
            // Récupérer le Déplacement en fonction de l'ID fourni
            $dep = Deplacement::find($request->input('it'));
        
            if (!$dep) {
                return redirect()->back()->with('error', 'Déplacement non trouvé.');
            }
            // Récupérer les données d'entrée
           // Récupérer les données d'entrée
           $date_aller = $request->input('date-aller');
           $date_retour = $request->input('date_retour');
           $kilometrage = $request->input('kilometrage');
           
           // Vérifier si les tableaux de données ne sont pas vides
           if (!empty($date_aller) && !empty($date_retour) && !empty($kilometrage)) {
               // Enregistrer les déplacements
               foreach ($date_aller as $index => $dateAller) {
                   $deplacement = new Dep();
                   $deplacement->date_aller = $dateAller;
                   $deplacement->it=$dep->id;
                   $deplacement->date_retour = $date_retour[$index];
                   $deplacement->kilometrage = $kilometrage[$index];
                   $deplacement->save();
               }
           } else {
               return redirect()->back()->with('error', 'Les données de déplacement sont manquantes.');
           } 
           return redirect()->back()->with('success', 'Références ajoutées avec succès.');

        }
/** *
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\deplacement  $deplacement
     * @return \Illuminate\Http\Response
*/
    
    public function showByNumerodep($id)
    {
        // Récupérer la facture avec le numéro de devis donné
        $dep = Deplacement::where('id', $id)->first();
    
        // Vérifier si la facture existe
        if ($dep) {
            // Récupérer les références associées à cette facture
            $deplacements = Dep::where('it', $dep->id)->get();
        } else {
            $deplacements = collect();
        }
        
        // Retourner la vue avec les références et le numéro de devis
        return view('dep', compact('deplacements', 'dep'));
    }
    public function update(Request $request, $id)
    {
        // Log les données reçues pour le débogage
        Log::info('Request data:', $request->all());
        
        // Rechercher la référence à mettre à jour
        $deplacement = Dep::where('id', $id)->firstOrFail();
       
        // Valider les données de la requête
        $validator = Validator::make($request->all(), [
            'date_aller' => 'required|date',
            'date_retour' => 'required|date',
            'kilometrage' => 'required|numeric',
        ]);
    
        // Vérifier si la validation a échoué
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Afficher les données envoyées pour vérifier
        Log::info('Validated data:', $request->all());
        
        // Mettre à jour les valeurs de la référence avec les nouvelles données
        $deplacement->date_aller = $request->input('date_aller');
        $deplacement->date_retour = $request->input('date_retour');
        $deplacement->kilometrage = $request->input('kilometrage');
        
        $deplacement->save();
    
        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Déplacement mis à jour avec succès.');
    }

    public function destroy($id)
{
    Log::info('Destroy method called with id: ' . $id); // Log l'ID reçu

    // Trouver la référence à supprimer
    $deplacement = Dep::find($id);
    
    if ($deplacement) {
        Log::info('Record found and will be deleted: ' . $deplacement->id); // Log si le record est trouvé
        // Supprimer la référence
        $deplacement->delete();
    
        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'La référence a été supprimée avec succès.');
    } else {
        Log::warning('Record not found for id: ' . $id); // Log si le record n'est pas trouvé
        return redirect()->back()->with('error', 'La référence n\'a pas été trouvée.');
    }
}

    

}
