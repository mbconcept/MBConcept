@extends('layouts.app')

@section('title', 'MB CONCEPT')

@section('content')
    <section class="title-section">
        <div class="title-content">
            <div>
                <h1>MB CONCEPT</h1>
                <p>Votre vision, notre chef-d'œuvre.</p>
            </div>
            <a href="{{route('estimate')}}" class="link-section">Obtenez votre devis gratuit</a>
        </div>
    </section>
@endsection
