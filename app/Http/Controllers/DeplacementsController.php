<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deplacement;
use App\Models\Dep;



class DeplacementsController extends Controller
{
    // Méthode pour afficher la liste des déplacements
 public function index()
    {
        // Récupérer la liste des déplacements depuis la base de données
        $deplacements = Deplacement::all();

        // Passer les données à la vue
        return view('deplacement', compact('deplacements'));
    }

    // Méthode pour afficher le formulaire de création d'un nouveau déplacement
    public function create()
    {
        // Retourner la vue du formulaire de création
        return view('deplacements.create');
    }

    // Méthode pour enregistrer un nouveau déplacement dans la base de données
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'date' => 'required|date',
            'lieu' => 'required',
            'nom' => 'required',
            'mission' => 'required',
            'collaborateur'=> 'nullable|string',
            'validation'=> 'nullable|string',
            'num_dossier'=>'required',
            'reglement'=> 'nullable|string',
            'repas' => 'nullable|numeric',
            'taux'=>'nullable|numeric',
            'autoroute'=>'nullable|numeric',
            'avance'=>'nullable|numeric',
            'reste'=>'nullable|numeric',
            'hotel'=>'nullable|numeric',
            'taxi'=>'nullable|numeric',
            'parking'=>'nullable|numeric',
            'invitation'=>'nullable|numeric',
            'gasoil'=>'nullable|numeric',
            'autre'=>'nullable|numeric',
            'nbr_jours'=>'required',
        ]);

        // Créer un nouveau déplacement avec les données du formulaire
        $deplacement = new Deplacement();
            $deplacement->date = $validatedData['date'];
            $deplacement->lieu =$validatedData['lieu'];
            $deplacement->nom = $validatedData['nom'];
            $deplacement->mission = $validatedData['mission'];
            $deplacement->collaborateur = $validatedData['collaborateur'];
            $deplacement-> validation= $validatedData['validation'];
            $deplacement->reglement = $validatedData['reglement'];
            $deplacement->avance = $validatedData['avance'];
            $deplacement->reste = $validatedData['reste'];
            $deplacement->num_dossier = $validatedData['num_dossier'];
            $deplacement->repas =$validatedData['repas'];
            $deplacement->taux = $validatedData['taux'];
            $deplacement->autoroute= $validatedData['autoroute'];
            $deplacement->hotel = $validatedData['hotel'];
            $deplacement->taxi = $validatedData['taxi'];
            $deplacement->parking= $validatedData['parking'];
            $deplacement->invitation = $validatedData['invitation'];
            $deplacement->gasoil= $validatedData['gasoil'];
            $deplacement->autre = $validatedData['autre'];
            $deplacement->nbr_jours =$validatedData['nbr_jours'];
            $deplacement->save();
        // Rediriger l'utilisateur vers la liste des devis avec un message de succès
        return redirect()->route('deplacements.index')->with('success', 'Le devis a été mis à jour avec succès.');
    }

    

    // Méthode pour afficher les détails d'un déplacement spécifique
    public function show($id)
    {
        // Récupérer le déplacement spécifique depuis la base de données
        $deplacement = Deplacement::findOrFail($id);

        // Retourner la vue des détails du déplacement avec les données du déplacement
        return view('deplacements.show', compact('deplacement'));
    }

    // Méthode pour afficher le formulaire de modification d'un déplacement
    public function edit($id)
    {
        // Récupérer le déplacement spécifique depuis la base de données
        $deplacement = Deplacement::findOrFail($id);

        // Retourner la vue du formulaire de modification avec les données du déplacement
        return view('edit_dep', compact('deplacement'));
    }
    // Méthode pour mettre à jour un déplacement dans la base de données
     public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'date' => 'required|date',
            'lieu' => 'required',
            'nom' => 'required',
            'mission' => 'required',
            'collaborateur'=> 'nullable|string',
            'validation'=> 'nullable|string',
            'num_dossier'=>'required',
            'reglement'=> 'nullable|string',
            'repas' => 'nullable|numeric',
            'taux'=>'nullable|numeric',
            'autoroute'=>'nullable|numeric',
            'avance'=>'nullable|numeric',
            'reste'=>'nullable|numeric',
            'hotel'=>'nullable|numeric',
            'taxi'=>'nullable|numeric',
            'parking'=>'nullable|numeric',
            'invitation'=>'nullable|numeric',
            'gasoil'=>'nullable|numeric',
            'autre'=>'nullable|numeric',
            'nbr_jours'=>'required',
        ]);

        // Récupérer le déplacement spécifique depuis la base de données
        $deplacement = Deplacement::findOrFail($id);

        // Mettre à jour les propriétés du déplacement avec les données du formulaire
        $deplacement->update($request->all());
        $deplacement->repas = $request->input('repas');
    $deplacement->taux = $request->input('taux');
        $deplacement->save();
        // Rediriger l'utilisateur vers la liste des devis avec un message de succès
        return redirect()->route('deplacements.index')->with('success', 'Le devis a été mis à jour avec succès.');
    }


    // Méthode pour supprimer un déplacement de la base de données
    public function destroy($id)
    {
        // Récupérer le déplacement spécifique depuis la base de données
        $deplacement = Deplacement::findOrFail($id);

        // Supprimer le déplacement de la base de données
        $deplacement->delete();

        // Rediriger l'utilisateur vers la liste des déplacements avec un message de succès
return redirect()->route('deplacements.index')->with('success', 'Le déplacement a été supprimé avec succès.');
    }
    public function rechercher(Request $request)
    {
        $nom = $request->input('nom');
        $deplacements= null;

        if($nom) {
            $deplacements = Deplacement::where('nom',  'like', $nom . '%')->get();
        } else {
            $deplacements = Deplacement::all();
        }

        return view('s_deplacement', compact('deplacements'));
    }
    public function generefiche($id)
   
    {
      $deplacement = Deplacement::findOrFail($id);

        // Initialiser les totaux
        $totals = [
            'repas' => $deplacement->repas * $deplacement->nbr_jours,
            'taux' => $deplacement->taux * $deplacement->nbr_jours,
            'autoroute' => $deplacement->autoroute * $deplacement->nbr_jours,
            'hotel' => $deplacement->hotel * $deplacement->nbr_jours,
            'taxi' => $deplacement->taxi * $deplacement->nbr_jours,
            'parking' => $deplacement->parking * $deplacement->nbr_jours,
            'invitation' => $deplacement->invitation * $deplacement->nbr_jours,
            'gasoil' => $deplacement->gasoil * $deplacement->nbr_jours,
            'autre' => $deplacement->autre * $deplacement->nbr_jours,
            'total' => 0,
        ];
    
        // Calculer le total général
        $totalGeneral = array_sum($totals);
    
        // Récupérer les autres déplacements de la table "dep" avec le même ID que le déplacement actuel
        $dep = Dep::where('it', $deplacement->id)->get();
    
        // Calculer la somme des kilométrages
        $totalKilometrage = $dep->sum('kilometrage');
        // Calculer le total des kilomètres * taux
        $totalKilometrageTaux = $totalKilometrage * $deplacement->taux;foreach ($totals as $total) {
            $totalGeneral += $total;
        }
        // Retourner la vue avec les données des déplacements, les totaux et les autres déplacements
        return view('reference', compact('deplacement', 'totals', 'totalGeneral', 'dep', 'totalKilometrage', 'totalKilometrageTaux'));
    }
    }
    
    

