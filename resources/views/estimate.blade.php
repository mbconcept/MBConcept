@extends('layouts.app')

@section('title', 'Contact - MB CONCEPT')

@section('content')
    <section class="estimate-section">
        <div class="form-container">
            <h1>Obtenez votre devis gratuit</h1>
            <p>Laissez-nous vos coordonnées, et nous vous rappellerons dans les plus brefs délais pour discuter de votre projet.</p>

            <form action="{{ route('estimate.submit') }}" method="POST">
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
