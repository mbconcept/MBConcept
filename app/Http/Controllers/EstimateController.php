<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EstimateRequest;
use App\Mail\EstimateMail;
use App\Mail\UserConfirmationMail;
use Illuminate\Support\Facades\Mail;
use Exception; // Importez la classe Exception

class EstimateController extends Controller
{
    public function submit(EstimateRequest $request)
    {
        $data = $request->validated();

        try {
            // Tente d'envoyer le premier e-mail à l'entreprise
            //Mail::to('votre_email@exemple.com')->send(new EstimateMail($data));

            // Si le premier e-mail réussit, tente d'envoyer le deuxième au client
            //Mail::to($data['email'])->send(new UserConfirmationMail($data));

            // Redirige avec succès si les deux e-mails ont été envoyés
            return redirect()->route('home')->with('success', 'Votre demande de devis a été envoyée avec succès !');

        } catch (Exception $e) {
            // Si une erreur survient, redirige avec un message d'erreur
            // On peut aussi logger l'erreur ici pour la déboguer plus tard
            // \Log::error('Erreur lors de l'envoi du mail : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue. Veuillez réessayer plus tard.');
        }
    }
}
