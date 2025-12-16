<header class="mobile-header">
    <button class="menu-toggle" aria-label="Ouvrir le menu">
        <span class="hamburger"></span>
    </button>
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/images/logo-fin.svg') }}" alt="Logo de l'entreprise">
        </a>
    </div>

    <nav class="desktop-nav">
        <ul>
            <li>
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'active-link' : '' }}">
                    Accueil
                </a>
            </li>

            <li>
                <a href="{{ route('infos') }}"
                   class="{{ request()->routeIs('infos') ? 'active-link' : '' }}">
                    À Propos
                </a>
            </li>

            <li>
                <a href="{{ route('companies') }}"
                   class="{{ request()->routeIs('companies') ? 'active-link' : '' }}">
                    Professionnels
                </a>
            </li>

            <li>
                <a href="{{ route('individuals') }}"
                   class="{{ request()->routeIs('individuals') ? 'active-link' : '' }}">
                    Particuliers
                </a>
            </li>

            <li>
                <a href="{{ route('contact', ['type' => 'contact']) }}"
                   class="{{ request()->routeIs('contact') ? 'active-link' : '' }}">
                    Contact
                </a>
            </li>


        </ul>
    </nav>
</header>

<nav class="mobile-nav">
    <ul>
        <li><a href="{{route('home')}}">ACCUEIL</a></li>
        <li><a href="{{route('infos')}}">À PROPOS</a></li>
        <li><a href="{{route('companies')}}">PROFESSIONNELS</a></li>
        <li><a href="{{route('individuals')}}">PARTICULIERS</a></li>
        <li><a href="{{ route('contact', ['type' => 'contact']) }}">CONTACTS</a></li>
    </ul>
    <div class="contact-info-nav">
        <p>Tel : 06 12 34 56 78</p>
        <p><a href="mailto:contact@mbconcept-pro.fr">contact@mbconcept-pro.fr</a></p>
        <p>Horaires : Lun-Ven 8h-18h</p>
    </div>
</nav>
