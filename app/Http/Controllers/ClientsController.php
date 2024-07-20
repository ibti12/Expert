<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client; // Assurez-vous d'importer le modèle Rapprot
use App\Models\Dossier;
use App\Models\File;

class ClientsController extends Controller
{



    public function index()
    {
          $clients = Client::all();
        return view('fichier', compact('clients'));
    }

    // Fonction pour afficher les détails d'un client spécifique
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('info_client', compact('client'));
    }

      public function afficherclient()
    {
        return view('client');
    }

  public function store(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'NOM' => 'required',
        'ADRESSE' => 'required',
        'VILLE' => 'required',
        'SITES' => 'url',
       
        
        'TELEPHONE' => 'required', // Ajout du champ TELEPHONE
        'EMAIL' => 'required|email',
        // Ajouter des règles de validation pour d'autres champs si nécessaire
    ]);
    
   
            $client = new Client([
            'NOM' => $request->input('NOM'),
            'ADRESSE' => $request->input('ADRESSE'),
            'SITES' => $request->input('SITES'),
            'GPS' => $request->input('GPS'),
            'IE' => $request->input('IE'),
            'TP' => $request->input('TP'),
            'IF' => $request->input('IF')?? null,
            'VILLE' => $request->input('IF'),
            'CNSS' => $request->input('CNSS')?? null,
            'TELEPHONE' => $request->input('TELEPHONE'),
            'EMAIL' => $request->input('EMAIL'),
           
        ]);
             $client->save();
    // Redirection de l'utilisateur vers la liste des clients avec un message de succès
    return redirect()->route('clients.index')->with('success', 'Le client a été ajouté avec succès.');
}
public function rechercher(Request $request)
{
    $NOM = $request->input('NOM');
    $clients = null;

    if ($NOM) {
        $clients = Client::where('NOM', 'like', $NOM . '%')->get();
    } else {
        $clients= Client::all();
    }

    return view('s_fichier', compact('clients'));
}
public function dossiers($client_nom)
    {
        // Recherchez le client par nom
        $client = Client::where('NOM', $client_nom)->firstOrFail();

        // Récupérer les dossiers associés au client
        $dossiers = Dossier::where('client_nom', $client->NOM)->get();
        $file = File::all();

        return view('client_dos', compact('dossiers', 'client_nom','file'));

    }
   }





