@extends('layouts.app')

@section('title', 'MB CONCEPT - Particuliers')

@section('content')

    <section class="individuals-section">
        <div class="individuals-container">
            <div class="individuals-hero-content-wrapper">
                <h1 class="poppins-bold">
                    Tous vos travaux de rénovation
                    de maison
                </h1>
                <div class="individuals-hero-actions">
                    <a href="{{ route('contact', ['type' => 'devis']) }}" class="link-section">
                        Demander un devis gratuit
                    </a>
                </div>
            </div>

            <div class="individuals-detail-all-content">
                <div class="individuals-detail-content">
                    <div class="individuals-image-wrapper">
                        <img src="{{ Vite::asset('resources/images/renovation-part.webp') }}"
                             alt="Rénovation de locaux professionnels"
                             loading="lazy">
                    </div>
                    <div class="individuals-text-wrapper">
                        <h2>Nous vous accompagnons dans la réalisation de vos projets de rénovation de maisons</h2>

                        <ul class="individuals-list">
                            <li>Construction & Extension : Création d'annexes, extension de propriété ou surélévation de toiture pour tout type de bâti (maisons, appartements, pavillons, bâtisses anciennes).</li>
                            <li>Rénovation & Réhabilitation : Rénovation complète et modernisation de tous types de logements, incluant maisons, appartements, lofts et demeures anciennes en pierre.</li>
                            <li>Structure et Gros Œuvre : Travaux de grande ampleur : démolition, création de murs porteurs, maçonnerie structurelle, isolation extérieure, terrasses et ravalement de façade.</li>
                            <li>Aménagements & Finitions : Pose de revêtements (carrelage, parquet), plomberie, menuiserie sur mesure, peinture, installation de cuisines/salles de bains, cloisons et verrières.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="individuals-detail-all-content individuals-detail-all-content-2">
                <div class="individuals-detail-content reverse-order">
                    <div class="individuals-image-wrapper">
                        <img src="{{ Vite::asset('resources/images/renovation-part2.webp') }}"
                             alt="Rénovation de locaux professionnels"
                             loading="lazy">
                    </div>
                    <div class="individuals-text-wrapper">
                        <h2>Nos services de rénovation de maison</h2>
                        <p>
                            Capitalisant sur notre expertise reconnue et notre solide expérience, nous avons pour mission de métamorphoser vos intérieurs afin de garantir des lieux de vie plus agréables, esthétiques et optimisés.
                            <br><br>
                            Notre offre couvre un éventail complet de prestations en rénovation. Qu'il s'agisse de moderniser une cuisine, de réagencer une salle de bain, de rafraîchir une pièce ou de mener une transformation intégrale de votre habitat, notre équipe qualifiée est mobilisée pour concrétiser vos aspirations.
                            <br><br>
                            Nous privilégions une collaboration étroite et personnalisée avec vous. En comprenant précisément vos objectifs et vos désirs, nous élaborons des solutions sur mesure qui s'ajustent parfaitement à votre vision et à vos contraintes."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
