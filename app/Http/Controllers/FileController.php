<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Dossier;
use Illuminate\Support\Facades\Storage;
class FileController extends Controller
{
    //use App\Models\File;
    public function upload(Request $request)
    {
        if ($request->hasFile('pdf_file')) {
            $fileName = $request->file('pdf_file')->getClientOriginalName();
            $filePath = $request->file('pdf_file')->store('pdf');
    
            $file = new File;
            $file->file_name = $request->input('file_name', $fileName);
            $file->file_path = $filePath;
            $file->save();
            return view('dos', ['file' => $file]);
        } else {
            // Gérer le cas où aucun fichier n'a été téléchargé
            return redirect()->back()->with('error', 'Veuillez sélectionner un fichier.');
        }
    }
    public function show($id)
{
    $file = File::findOrFail($id);
    return response()->file(storage_path('app/' . $file->file_path));
}
public function name($N°dossier)
{
   
    $dossier = Dossier::where('N°dossier', $N°dossier)->first();
    if (!$dossier) {
        return response()->json(['error' => 'Dossier non trouvé.'], 404);
    }
    $file = File::where('file_name',$dossier->N°dossier)->first();


        // Si le fichier est trouvé
        if ($file) {
            // Construire le chemin complet du fichier
            $file = File::findOrFail($file->id);
            return redirect()->route('file.show');

            // Vérifier si le fichier physique existe
           
            } else {
                // Gérer le cas où le fichier physique n'existe pas
                return response()->json(['error' => 'Le fichier correspondant n\'existe pas sur le serveur.']);
            }
        
        }
    
public function index()
{
    $files = File::all();
    return view('dos', compact('files'));
}
public function view($file_name)
{
    $file = File::findOrFail($id);
    return response()->file(storage_path('app/' . $file->file_path));
}
}
