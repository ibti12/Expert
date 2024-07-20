<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DeplacementsController;
use App\Http\Controllers\DepController;
use App\Http\Controllers\DosController;
use App\Http\Controllers\BCommandeController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\LivraisonController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\FourfController;
use App\Http\Controllers\FourbController;
use App\Http\Controllers\FourdController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CommandeController;


Route::get('/admin', function () {
    return 'dashboard';
    
})->middleware('role:admin');
Route::view('/hello', 'hello')->name('hello');
Route::get('/user', function () {
    return 'dashboard';
})->middleware('role:user');


Route::get('/', function () {
    return view('hello');
});
Route::get('/hello', function () {
    return view('hello');
})->name('hello');

Route::get('/f', function () {
    return view('f');
});
Route::get('/f', function () {
    return view('f');
});
Route::get('/periode', function () {
    return view('periode');
})->name('periode');

Route::get('fournisseur', function () {
    return view('fournisseur');
});
Route::get('rap', function () {
    return view('rap');
});
Route::get('fact_fiche', function () {
    return view('fact_fiche');
});
Route::get('ref', function () {
    return view('ref');
});

Route::get('reference', function () {
    return view('reference');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/searche_devis', function () {
    return view('searche_devis');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/exemple', function () {
    return view('exemple');
})->name('exemple');
Route::get('/lost_password', function () {
    return view('lost_password');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/deplacement', function () {
    return view('deplacement');
});
Route::get('/dep', function () {
    return view('dep');
});
Route::get('/edit_Bcommande', function () {
    return view('edit_Bcommande');
});
Route::get('/edit_rap', function () {
    return view('edit_rap');
});

Route::get('/fichier', function () {
    return view('fichier');
});
Route::get('/EX', function () {
    return view('EX');
});
Route::get('/dos', function () {
    return view('dos');
});
Route::get('/dossiers-client/welcome', function () {
    return view('welcome');
});
Route::get('/dossiers-client/fichier', function () {
    return view('fichier');
});
Route::get('/facture_ex', function () {
    return view('facture_ex');
});
Route::get('/fichier', function () {
    return view('fichier');
})->name('fichier');
Route::get('/client', function () {
    return view('client');
});

Route::get('/b_commande', function () {
    return view('b_commande');
});
Route::get('/devis', function () {
    return view('devis');
});
Route::get('/facture', function () {
    return view('facture');
});
Route::get('/livraison', function () {
    return view('livraison');
});
Route::get('/rapport', function () {
    return view('rapport');
});
Route::get('/historique', function () {
    return view('historique');
});
Route::get('/ajouter_dep', function () {
    return view('ajouter_dep');
});
Route::get('/ajouter_dos', function () {
    return view('ajouter_dos');
});
Route::get('/ajouter_rap', function () {
    return view('ajouter_rap');
});
Route::get('/liste_rapport', function () {
    return view('liste_rapport');
});
Route::get('/info_client', function () {
    return view('info_client');
});
Route::get('/edit_dep', function () {
    return view('edit_dep');
});
Route::get('/edit_devis', function () {
    return view('edit_devis');
});
Route::get('/edit_facture', function () {
    return view('edit_facture');
});
Route::get('/edit_livraison', function () {
    return view('edit_livraison');
});

Route::post('/deplacements/store', [DeplacementsController::class, 'store'])->name('deplacements.store');

Route::get('/deplacements', [DeplacementsController::class, 'index']);
Route::get('/clients', [ClientsController::class, 'index']);
Route::get('/client', function () {
    return view('client');
});
Route::get('/client/details/{id}', [ClientsController::class, 'show']);

Route::post('/clients/store', [ClientsController::class, 'store'])->name('clients.store');
Route::get('/rapport/details/{id}', [RapportController::class, 'show']);
Route::get('/deplacements/{id}/edit', [DeplacementsController::class, 'edit']);


Route::delete('/deplacements/{id}', [DeplacementsController::class, 'destroy'])->name('deplacements.destroy');

Route::delete('/devis/{id}', [DevisController::class, 'destroy'])->name('devis.destroy');
Route::delete('/factures/{id}', [FactureController::class, 'destroy'])->name('factures.destroy');
Route::delete('/livraisons/{id}', [LivraisonController::class, 'destroy'])->name('livraisons.destroy');
Route::delete('/rapports/{id}', [RapportController::class, 'destroy'])->name('rapports.destroy');
Route::get('/deplacement', [DeplacementsController::class, 'index'])->name('deplacements.index');

Route::get('/dossiers/{id}/edit', [DosController::class, 'edit']);
Route::delete('/dossiers/{id}', [DosController::class, 'destroy'])->name('dos.destroy');
Route::get('/dossier', [DosController::class, 'index'])->name('dossiers.index');
Route::get('/b_commande/{id}/edit', [BCommandeController::class, 'edit'])->name('b_commande.edit');
Route::get('/devis/{id}/edit', [DevisController::class, 'edit'])->name('devis.edit');
Route::get('/rapport/{id}/edit', [RapportController::class, 'edit'])->name('rapport.edit');

// Route pour l'édition d'une facture
Route::get('/facture/{id}/edit', [FactureController::class, 'edit']);

// Route pour l'édition d'une livraison
Route::get('/livraison/{id}/edit', [LivraisonController::class, 'edit'])->name('livraisons.edit');
Route::get('/earch', [RapportController::class, 'search'])->name('rapports.search');

Route::get('/fichier', [ClientsController::class, 'index'])->name('clients.index');
Route::post('/rapports/store', [RapportController::class, 'store'])->name('rapports.store');
Route::get('/rapp', [RapportController::class, 'aff'])->name('rapports.index');
Route::post('/dossiers/store', [DosController::class, 'store'])->name('dossiers.store');
Route::post('/commandes/store', [BCommandeController::class, 'store'])->name('commandes.store');
Route::get('/B', [BCommandeController::class, 'index'])->name('commandes.index');
Route::post('/devis/store', [DevisController::class, 'store'])->name('devis.store');
Route::get('/d', [DevisController::class, 'index'])->name('devis.index');
Route::post('/factures/store', [FactureController::class, 'store'])->name('factures.store');
Route::get('/F', [FactureController::class, 'index'])->name('factures.index');
Route::post('/livraisons/store', [LivraisonController::class, 'store'])->name('livraisons.store');
Route::get('/l', [LivraisonController::class, 'index'])->name('livraisons.index');
Route::put('/devis/{id}', [DevisController::class, 'update'])->name('devis.update');
Route::put('/deplacements/{id}', [DeplacementsController::class, 'update'])->name('deplacements.update');
Route::put('/b_commandes/{id}', [BCommandeController::class, 'update'])->name('b_commande.update');
Route::get('/b_com', [BCommandeController::class, 'index'])->name('b_commande.index');
Route::put('/dossiers/{id}', [DosController::class, 'update'])->name('dossiers.update');
Route::put('/factures/{id}', [FactureController::class, 'update'])->name('factures.update');
Route::put('/livraisons/{id}', [LivraisonController::class, 'update'])->name('livraisons.update');
Route::put('/rapports/{id}', [RapportController::class, 'update'])->name('rapports.update');
Route::get('/che', [DevisController::class, 'rechercher'])->name('devis.recherche');
Route::get('/facture', [FactureController::class, 'rechercher'])->name('factures.search');




Route::get('/recher', [BCommandeController::class, 'rechercher'])->name('commande.recherche');
Route::get('/re', [LivraisonController::class, 'rechercher'])->name('livraison.recherche');
Route::get('/te', [ClientsController::class, 'rechercher'])->name('client.recherche');
Route::get('/dere', [DeplacementsController::class, 'rechercher'])->name('deplacements.recherche');

Route::get('/repse', [DosController::class, 'rechercher'])->name('dossiers.recherche');
Route::get('/recap', [FactureController::class, 'recap'])->name('factures.recap');


Route::get('/references/create', [ReferenceController::class, 'create'])->name('references.create');
Route::post('/references', [ReferenceController::class, 'store'])->name('references.store');

Route::get('/invoice', [ReferenceController::class, 'showInvoice'])->name('invoice');
Route::get('/references/{numero}', [ReferenceController::class, 'showByNumerofacture'])->name('references.show');
Route::get('/generefacture/{numero}', [ReferenceController::class, 'generefacture'])->name('reference.generefacture');
Route::get('/references/{id}/edit', [ReferenceController::class, 'edit'])->name('references.edit');

// Route pour supprimer une référenceuse App\Http\Controllers\ReferenceController;

Route::delete('/references/{id}', [ReferenceController::class, 'destroy'])->name('references.delete');

Route::get('/references/welcome', [ReferenceController::class, 'index'])->name('references.welcome');
//Route::get('/references/{num_fact}', [ReferenceController::class, 'show'])->name('references.show');
Route::post('/references', [ReferenceController::class, 'store'])->name('references.store');
Route::get('references', [ReferenceController::class, 'index'])->name('references.index');
Route::patch('/references/{id}', [ReferenceController::class, 'update'])->name('references.update');
Route::get('/references/{id}/edit', [ReferenceController::class, 'edit'])->name('references.edit');
Route::get('/items/create', [itemController::class, 'create'])->name('items.create');
Route::post('/items', [itemController::class, 'store'])->name('items.store');

Route::get('/invoice', [itemController::class, 'showInvoice'])->name('invoice');
Route::get('/items/{num_devis}', [ItemController::class, 'showByNumeroDevis'])->name('items.show');


Route::get('/items/{id}/edit', [itemController::class, 'edit'])->name('items.edit');



Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('items.delete');

Route::get('/items/welcome', [itemController::class, 'index'])->name('items.welcome');

Route::post('/items', [itemController::class, 'store'])->name('items.store');
Route::get('items', [itemController::class, 'index'])->name('items.index');
Route::patch('/items/{id}', [itemController::class, 'update'])->name('items.update');
Route::get('/items/{id}/edit', [itemController::class, 'edit'])->name('items.edit');
Route::get('/generefacture/{numero}', [ReferenceController::class, 'generefacture'])->name('reference.generefacture');
Route::get('/generedevis/{num_devis}', [itemController::class, 'genereDevis'])->name('items.generedevis');
Route::post('/deps', [DepController::class, 'store'])->name('deps.store');
Route::get('/dep', [DepController::class, 'index'])->name('dep.index');

Route::patch('/deps/{id}',  [DepController::class, 'update'])->name('deps.update');



Route::get('/deps/{id}', [DepController::class, 'showByNumerodep'])->name('deps.show');
Route::delete('/deps/{id}', [DepController::class, 'destroy'])->name('deps.delete');
Route::get('/generefiche/{id}', [DeplacementsController::class, 'generefiche'])->name('deplacements.generefiche');
Route::get('/dossiers-client/{client_nom}', [ClientsController::class, 'dossiers'])->name('client.dossiers');
Route::get('/dossiers-client/ajouter_dos', [DosController::class, 'store'])->name('client.ajouter_dos');
Route::get('/fournisseurs', [FournisseurController::class, 'index'])->name('fournisseurs.index');
Route::post('/fournisseurs', [FournisseurController::class, 'store'])->name('fournisseurs.store');
Route::get('/factf/{nom}', [FourfController::class, 'showByNomfour'])->name('factf.show');
Route::post('/fourfs', [FourfController::class, 'store'])->name('fourfs.store');
Route::get('/fourfs', [FourfController::class, 'index'])->name('fourfs.index');
Route::delete('/fourfs/{id}', [FourfController::class, 'destroy'])->name('fourfs.destroy');
Route::delete('/fourds/{id}', [FourdController::class, 'destroy'])->name('fourds.destroy');
Route::delete('/fourbs/{id}', [FourbController::class, 'destroy'])->name('fourbs.destroy');
Route::patch('/fourfs/{id}',  [FourfController::class, 'update'])->name('fourfs.update');
Route::patch('/fourbs/{id}',  [FourbController::class, 'update'])->name('fourbs.update');
Route::get('/bonf/{nom}', [FourbController::class, 'showByNomfour'])->name('Bonf.show');
Route::get('/devisf/{nom}', [FourdController::class, 'showByNomfour'])->name('devisf.show');
Route::post('/fourds', [FourdController::class, 'store'])->name('fourds.store');
Route::post('/fourbs', [FourbController::class, 'store'])->name('fourbs.store');


Route::get('/commande/{numero}', [CommandeController::class, 'showByNumeroFourb'])->name('commande.show');
Route::get('/commande/generefacture/{numero}', [CommandeController::class, 'genereFourb'])->name('commande.generefacture');
Route::post('/commandes', [CommandeController::class, 'store'])->name('commandes.save');
Route::patch('/commandes/{id}', [CommandeController::class, 'update'])->name('commandes.update');
Route::delete('/commandes/{id}', [CommandeController::class, 'destroy'])->name('commandes.destroy');
Route::delete('/b_commandes/{id}', [BCommandeController::class, 'destroy'])->name('b_commandes.destroy');
Route::get('/fourni', [FournisseurController::class, 'search'])->name('fournisseurs.search');
Route::post('/generate-file', [DosController::class, 'generateFile'])->name('generate-file');


Route::get('/generer-rapport/{annee}', [RapportController::class, 'genererRapport'])->name('generer-rapport');
Route::get('/dossiers-client/welcome', [DosController::class, 'welcome']);
Route::get('/dossiers-client/fichier', [DosController::class, 'fichier']);

Route::get('file:///C:/Users/pc/OneDrive/Documents/{nomFichier}', function ($nomFichier) {
    $chemin = public_path('file:///C:/Users/pc/OneDrive/Documents/TD-SMI3%20programmation.pdf' . $nomFichier);

    if (file_exists($chemin)) {
        return response()->file($chemin);
    } else {
        abort(404);
    }
})->name('file:///C:/Users/pc/OneDrive/Documents/');

Route::post('/upload', [FileController::class, 'upload'])->name('upload');


// Route pour le téléversement de fichier
Route::post('/upload', [FileController::class, 'upload'])->name('file.upload');

// Route pour afficher le fichier
Route::get('/file/{id}', [FileController::class, 'show'])->name('file.show');
Route::get('/dossier/{N°dossier}', [dosController::class, 'name'])->name('dossse.name');
Route::get('/dossier', [DosController::class, 'index'])->name('dossiers.index');
Route::get('/upload', [FourdController::class, 'showUploadPdfForm'])->name('upload.show');
Route::post('/fourfs/filter', [FourfController::class, 'filter'])->name('fourfs.filter');