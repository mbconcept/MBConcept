@extends('layouts.app')

@section('title', 'Contact - MB CONCEPT')

@section('content')
    <section class="contact-section">
        <div class="form-container">
            @if($type === 'contact')
                <h1>Contactez-nous</h1>
                <p>Posez-nous vos questions, nous vous répondrons dans les plus brefs délais.</p>
            @else
                <h1>Obtenez votre devis gratuit</h1>
                <p>Laissez-nous vos coordonnées, et nous vous rappellerons pour discuter de votre projet.</p>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nom et prénom</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="phone">Numéro de téléphone</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Votre message (facultatif)</label>
                    <textarea id="message" name="message" rows="5"></textarea>
                </div>

                <button type="submit" class="submit-button">Envoyer</button>
            </form>
        </div>
    </section>
@endsection
