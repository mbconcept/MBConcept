@extends('layouts.app')

@section('title', 'MB CONCEPT')

@section('content')
    <section class="title-section">
        <div class="title-content">
            <div>
                <h1>MB CONCEPT</h1>
                <p>Votre spécialiste en rénovation intérieure et extérieure.</p>
            </div>
            <a href="{{ route('contact', ['type' => 'devis']) }}" class="link-section">Obtenez votre devis gratuit</a>
        </div>
    </section>
@endsection
