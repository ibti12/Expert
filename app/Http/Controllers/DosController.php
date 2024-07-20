<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dossier;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
class DosController extends Controller
{
    // Afficher la liste des dossiers
    public function index()
    {
        $dossiers = Dossier::all();
      
       
            // Rechercher le fichier associé avec le numéro de dossier actuel
            $file = File::all();

        // Si le fichier est trouvé
      
        return view('dossier', ['dossiers' => $dossiers,'file' => $file]);
    
}
    // Afficher le formulaire de création de dossier
    public function create()
    {
        return view('dossiers.create');
    }

    // Enregistrer un nouveau dossier dans la base de données
   public function update(Request $request, $id)
{
    // Validation des données du formulaire
    $request->validate([
        'N°_dossier' => 'required',
        'type' => 'required',
        'client_nom' => 'required',
        'date' => 'required|date',
        'details' => 'nullable|string',
    ]);

    // Affichez les valeurs soumises du formulaire pour vérifier si elles sont correctes
  

    // Récupérer le dossier spécifique depuis la base de données
    $dossier = Dossier::findOrFail($id);

    // Mettre à jour les propriétés du dossier avec les données du formulaire
    $dossier->update([
        'N°dossier' => $request->input('N°_dossier'),
        'type' => $request->input('type'),
        'client_nom' => $request->input('client_nom'),
        'date' => $request->input('date'),
        'details' => $request->input('details'),
        'annexes' => $request->has('annexes') ? 1 : 0,
        'photos' => $request->has('photos') ? 1 : 0,
        'rap_photos' => $request->has('rap_photos') ? 1 : 0,
        'attestation' => $request->has('attestation') ? 1 : 0,
        'pv' => $request->has('pv') ? 1 : 0,
        'PDF' => $request->has('PDF') ? 1 : 0, 
        'word' => $request->has('word') ? 1 : 0, 

    ]);
      
    // Rediriger l'utilisateur vers la liste des dossiers avec un message de succès
    return redirect()->route('dossiers.index')->with('success', 'Le dossier a été mis à jour avec succès.');

}

    // Afficher les détails d'un dossier spécifique
    public function show($id)
    {
        $dossier = Dossier::findOrFail($id);
        return view('dossiers.show', ['dossier' => $dossier]);
    }

    // Afficher le formulaire d'édition d'un dossier
    public function edit($id)
    {
        $dossier = Dossier::findOrFail($id);
        return view('edit_dossier', ['dossier' => $dossier]);
    }

    

    // Supprimer un dossier de la base de données
    public function destroy($id)
    {
        $dossier = Dossier::findOrFail($id);
        $dossier->delete();

        return redirect()->route('dossiers.index')->with('success', 'Le dossier a été supprimé avec succès.');
    }
   public function store(Request $request)
{
    // Validate incoming request data
    $validatedData = $request->validate([
        'N°dossier' => 'required',
        'type' => 'required',
        'client_nom' => 'required',
        'date' => 'required|date',
        // Ajoutez d'autres règles de validation au besoin
    ]);

    // Create a new instance of the Dossier model
    $dossier = new Dossier;

    // Set the attributes of the Dossier instance
    $dossier->N°dossier = $validatedData['N°dossier'];
    $dossier->type = $validatedData['type'];
    $dossier->client_nom = $validatedData['client_nom'];
    $dossier->date = $validatedData['date'];
    $dossier->details = $request->input('details', null); // Vous pouvez utiliser input() pour obtenir la valeur avec une valeur par défaut de null

    // Set the boolean attributes based on whether the corresponding fields are checked in the form
    $dossier->annexes = $request->has('annexes') ? 1 : 0;
    $dossier->photos = $request->has('photos') ? 1 : 0;
    $dossier->rap_photos = $request->has('rap_photos') ? 1 : 0;
    $dossier->attestation = $request->has('attestation') ? 1 : 0;
    $dossier->pv = $request->has('pv') ? 1 : 0;
    $dossier->PDF = $request->has('PDF') ? 1 : 0;
    $dossier->word = $request->has('word') ? 1 : 0;

    // Save the Dossier instance to the database
    $dossier->save();

    // Rediriger avec un message de succès
    return redirect()->route('dossiers.index')->with('success', 'Le dossier a été enregistré avec succès.');
}
public function rechercher(Request $request)
    {
        $client_nom = $request->input('client_nom');
        $dossiers= null;

        if($client_nom) {
            $dossiers =Dossier::where('client_nom', 'like', $client_nom . '%')->get();
        } else {
            $dossiers = Dossier::all();
        }
        $file = File::all();
        return view('s_dossier', compact('dossiers','file'));
    }
    public function search(Request $request)
    {
        // Récupérer l'année sélectionnée dans le formulaire
        $year = $request->input('year');

        // Recherche des dossiers où l'année dans la date du dossier correspond à l'année sélectionnée
        $dossiers = Dossier::whereRaw('YEAR(date) = ?', [$year])->get();

        // Vous pouvez ensuite utiliser ces dossiers pour afficher les résultats de la recherche

        // Retourner une vue avec les résultats de la recherche et les informations des dossiers
        return view('dos_rap', compact('dossiers'));
    }

  

   
    
        public function generateFile(Request $request)
        {
            // Récupérer les données nécessaires pour générer le fichier
            $year = $request->input('year');
    
            // Recherche des dossiers où l'année dans la date du dossier correspond à l'année sélectionnée
            $dossiers = Dossier::whereRaw('YEAR(date) = ?', [$year])->get();
    
            // Générer le contenu de la vue avec les informations des dossiers
            $content = View::make('dossiers', ['dossiers' => $dossiers])->render();
    
            // Générer le fichier avec le contenu
            $filename = 'liste_dossiers_' . $year . '.txt';
            file_put_contents($filename, $content);
    
            // Télécharger le fichier généré
            return response()->download($filename)->deleteFileAfterSend();
        }
        public function welcome()
        {
            return view('welcome');
        }
        public function fichier()
    {
        return view('fichier');
    }
    public function upload(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|file|mimes:pdf|max:2048', // Max 2MB
        ]);

        $pdfPath = $request->file('pdf_file')->store('pdf');

        // Autre traitement si nécessaire...

        return view('dos', ['pdfPath' => $pdfPath]);
    }
}

