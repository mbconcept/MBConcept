@extends('layouts.app')

@section('title', 'MB CONCEPT - Professionnels')

@section('content')

    <section class="companies-section">
        <div class="companies-container">
            <div class="companies-hero-content-wrapper">
                <h1 class="poppins-bold">
                    Rénovation de vos locaux professionnels
                </h1>
                <div class="companies-hero-actions">
                    <a href="{{ route('contact', ['type' => 'devis']) }}" class="link-section">
                        Demander un devis gratuit
                    </a>
                </div>
            </div>

            <div class="companies-detail-all-content">
                <div class="companies-detail-content">
                    <div class="companies-image-wrapper">
                        <img src="{{ Vite::asset('resources/images/renovation-pro.webp') }}"
                             alt="Rénovation de locaux professionnels"
                             loading="lazy">
                    </div>
                    <div class="companies-text-wrapper">
                        <h2>Travaux de gros œuvres et réhabilitation de locaux commerciaux</h2>
                        <p>En tant que spécialistes de la rénovation tous corps d'état, notre équipe garantit la bonne exécution de l'intégralité de vos travaux de construction. Nous pilotons votre projet du sol au plafond, couvrant un large éventail de prestations : maçonnerie et gros œuvre, plâtrerie (pose de placo), revêtements de sols et murs, peinture, plomberie, installations électriques et sanitaires, ainsi que l'optimisation et l'agencement de tous vos espaces.</p>

                        <ul class="companies-list">
                            <li>Construction ou extension de bâtiments</li>
                            <li>Travaux de gros œuvre et de second œuvre</li>
                            <li>Travaux en hauteur, surélévation de bâtiment</li>
                            <li>Renforcement des murs porteurs</li>
                            <li>Travaux d’isolation thermique</li>
                            <li>Démolition et évacuation de gravats</li>
                            <li>Travaux de plâtrerie, pose de faux-plafonds</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="companies-detail-all-content companies-detail-all-content-2">
                <div class="companies-detail-content reverse-order">
                    <div class="companies-image-wrapper">
                        <img src="{{ Vite::asset('resources/images/renovation-pro2.webp') }}"
                             alt="Rénovation de locaux professionnels"
                             loading="lazy">
                    </div>
                    <div class="companies-text-wrapper">
                        <h2>Travaux de gros œuvres et réhabilitation de locaux commerciaux</h2>
                        <p>
                            Notre entreprise est spécialisée dans la rénovation et la réhabilitation complète de locaux professionnels, incluant les bureaux, les espaces commerciaux et les sites industriels. Nous comprenons à quel point un environnement de travail bien conçu est essentiel : il doit être optimisé, fonctionnel et agréable pour favoriser la productivité. C'est pourquoi nous appliquons notre savoir-faire technique pour transformer vos locaux existants, en les adaptant précisément à vos exigences opérationnelles.
                            <br><br>
                            Notre équipe de professionnels qualifiés est mobilisée pour maîtriser tous les aspects de votre projet, depuis les travaux structurels initiaux jusqu'aux finitions. Nous gérons l'ensemble des corps de métier requis : maçonnerie, électricité, plomberie, peinture, ainsi que l'aménagement et l'agencement intérieur. Nous traitons chaque chantier avec rigueur, nous engageant à respecter les normes techniques, les budgets et les délais établis avec vous. Qu'il s'agisse d'une intervention ciblée ou d'une transformation totale, nous assurons un accompagnement méthodologique, de la phase de conception à la livraison finale.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
