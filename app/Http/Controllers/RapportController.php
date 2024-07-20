<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rapport;
use App\Models\Dossier;

use App\Models\File;
use Carbon\Carbon;
class RapportController extends Controller
{
    public function show($id)
    {
        $rapport = rapport::findOrFail($id);
        return view('rapport', compact('rapport'));
    }
      public function edit($id)
    {
        // Récupérer le déplacement spécifique depuis la base de données
       $rapport = rapport::findOrFail($id);
        return view('edit_rap', compact('rapport'));
    }
    public function index()
    {
        $rapports = Rapport::all();
        return view('rapport', compact('rapports'));
    }
       public function aff()
    {
        $rapports = Rapport::all();
        return view('liste_rapport', compact('rapports'));
    }
    public function search(Request $request)
    {
        // Récupérer l'année sélectionnée dans le formulaire
        $year = $request->input('year');
    
        // Initialiser une variable $file à null
        $file = null;
    
        // Recherche des dossiers où l'année dans la date du dossier correspond à l'année sélectionnée
        $dossiers = Dossier::whereYear('date', $year)
            ->get()
            ->map(function ($dossier) use (&$file) {
                // Convertir la valeur de la colonne 'date' en un objet Carbon
                $dossier->date = Carbon::parse($dossier->date);
    
                // Recherche du fichier PDF associé au numéro de dossier du dossier actuel
                $file = File::all();
               
    
                return $dossier;
            });
    
        // Retourner une vue avec les résultats de la recherche et les informations des dossiers
        return view('s_rapport', compact('dossiers', 'year', 'file'));
    }
    
   public function store(Request $request)
{
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'N°' => 'required',
        'date' => 'required|date',
        'gsm' => 'required',
        'email' => 'required|email',
        'N°devis' => 'nullable',
        'date_devis' => 'required|date',
        'N°facture' => 'required',
        'date_facture' => 'required|date',
       
        'lieu' => 'required',
        'date_Livraison' => 'required|date',
        'Nom' => 'required',
    ]);
    // Créer une nouvelle instance de Rapport avec les données validées
$rapport = new Rapport();
$rapport->N° = $request->input('N°');
$rapport->date = $request->input('date');
$rapport->gsm = $request->input('gsm');
$rapport->email = $request->input('email');
$rapport->N°devis = $request->input('N°devis');
$rapport->date_devis = $request->input('date_devis');
$rapport->N°facture = $request->input('N°facture');
$rapport->date_facture = $request->input('date_facture');
$rapport->validation = $request->input('validation');
$rapport->lieu = $request->input('lieu');
$rapport->date_Livraison = $request->input('date_Livraison');
$rapport->Nom = $request->input('Nom');
$rapport->save();
 return redirect()->route('rapports.index')->with('success', 'Le rapport a été enregistré avec succès.');
}
 public function destroy($id)
    {
        // Récupérer la facture spécifique depuis la base de données
        $rapport = Rapport::findOrFail($id);

        // Supprimer la facture de la base de données
        $rapport->delete();

        // Rediriger l'utilisateur vers la liste des factures avec un message de succès
        return redirect()->route('rapports.index')->with('success', 'La facture a été supprimée avec succès.');
    }
    public function update(Request $request, $id)
{
    // Validation des données du formulaire
    $request->validate([
        'N°' => 'required',
        'date' => 'required|date',
        'gsm' => 'required',
        'email' => 'required|email',
        'N°devis' => 'required',
        'date_devis' => 'required|date',
        'N°facture' => 'required',
        'date_facture' => 'required|date',
        'validation' => 'required',
        'lieu' => 'required',
        'date_Livraison' => 'required|date',
    ]);

    // Récupérer le rapport spécifique depuis la base de données
    $rapport = Rapport::findOrFail($id);

    // Mettre à jour les propriétés du rapport avec les données du formulaire
    $rapport->update([
        'N°' => $request->input('N°'),
        'date' => $request->input('date'),
        'gsm' => $request->input('gsm'),
        'email' => $request->input('email'),
        'N°devis' => $request->input('N°devis'),
        'date_devis' => $request->input('date_devis'),
        'N°facture' => $request->input('N°facture'),
        'date_facture' => $request->input('date_facture'),
        'validation' => $request->input('validation'),
        'lieu' => $request->input('lieu'),
        'date_Livraison' => $request->input('date_Livraison'),
    ]);

    // Rediriger l'utilisateur vers la liste des rapports avec un message de succès
    return redirect()->route('rapports.index')->with('success', 'Le rapport a été mis à jour avec succès.');
}
public function genererRapport($annee)
{
    // Récupérer les dossiers de l'année précédente
   
   
    $dossiers = Dossier::whereYear('date', $annee )->get()->map(function ($dossier) {
        $dossier->date = new \DateTime($dossier->date);
        return $dossier;
    });
    // Retourner la vue avec les dossiers trouvés
    return view('rap_fiche', compact('dossiers','annee'));
}
}
