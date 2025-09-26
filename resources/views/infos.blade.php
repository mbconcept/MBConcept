@extends('layouts.app')

@section('title', 'À Propos')

@section('content')
    <section class="about-section">
        <div class="about-container">
            <h1>À propos de MB CONCEPT</h1>
            <p>
                Chez MB CONCEPT, nous transformons les visions en réalité. Forts d'une solide expérience dans le domaine de la rénovation et la construction, nous nous engageons à offrir un savoir-faire d'excellence et un service irréprochable. Notre passion pour les projets bien faits, du plus simple au plus complexe, est le moteur de notre entreprise.<br><br>
                Notre approche est fondée sur la qualité, la transparence et l'écoute. Nous croyons que chaque projet est unique et mérite une attention particulière. En travaillant main dans la main avec vous, nous nous assurons que chaque détail est pris en compte, pour un résultat qui dépasse vos attentes. Notre professionnalisme et notre rigueur sont les gages d'un partenariat de confiance.
            </p>

            <hr class="divider">

            <div class="contact-info">
                <h2>Nous contacter</h2>
                <div class="info-group">
                    <p><strong>Téléphone :</strong> <a href="tel:0612345678">06 12 34 56 78</a></p>
                    <p><strong>E-mail :</strong> <a href="mailto:contact@mbconcept-pro.fr">contact@mbconcept-pro.fr</a></p>
                    <p><strong>Horaires :</strong> Lun-Ven 8h-18h</p>
                </div>
            </div>

            <hr class="divider">

            <div class="social-icons">
                <h2>Suivez-nous</h2>
                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </section>
@endsection
