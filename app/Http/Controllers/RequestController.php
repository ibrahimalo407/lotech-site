<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function quote(Request $request, $serviceId)
    {
        // Traitement de la demande de devis pour le service correspondant
        // Vous pouvez ajouter votre logique ici, par exemple, enregistrer une demande dans la base de données

        return redirect()->back()->with('success', 'Votre demande de devis a été envoyée avec succès !');
    }
}
