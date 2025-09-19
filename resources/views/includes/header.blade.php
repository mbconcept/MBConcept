<header class="mobile-header">
    <button class="menu-toggle" aria-label="Ouvrir le menu">
        <span class="hamburger"></span>
    </button>
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/images/logo-fin.svg') }}" alt="Logo de l'entreprise" width="100" height="auto">
        </a>
    </div>
</header>

<nav class="mobile-nav">
    <ul>
        <li><a href="{{route('home')}}">ACCUEIL</a></li>
        <li><a href="{{route('infos')}}">À PROPOS</a></li>
        <!--<li><a href="{{route('solutions')}}">SOLUTIONS</a></li>
        <li><a href="{{route('realisations')}}">RÉALISATIONS</a></li>-->
        <li><a href="{{ route('contact', ['type' => 'contact']) }}">CONTACTS</a></li>
    </ul>
    <div class="contact-info-nav">
        <p>Tel : 06 12 34 56 78</p>
        <p>b.martins@mbconcept-pro.fr</p>
        <p>Horaires : Lun-Ven 8h-18h</p>
    </div>
</nav>
