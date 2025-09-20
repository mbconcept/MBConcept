<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Mail\UserConfirmationMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Exception;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $data = $request->validated();

        try {
            Mail::to('b.martins@mbconcept-pro.fr')->send(new ContactMail($data));

            Mail::to($data['email'])->send(new UserConfirmationMail($data));

            return redirect()->route('home')->with('success', 'Votre demande de devis a été envoyée avec succès !');

        } catch (Exception $e) {
            Log::error('Erreur lors de l`envoi du mail : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue. Veuillez réessayer plus tard.');
        }
    }
}
