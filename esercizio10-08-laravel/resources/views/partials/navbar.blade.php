<nav class="navbar navbar-expand-lg bg-light colorNav testoBianco">
    <div class="container-fluid">
        <a class="navbar-brand testoPurple" href="{{ route('home') }}">Portfoglio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link testoBianco" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link testoBianco" href="{{ route('about') }}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link testoBianco" href="{{ route('services') }}">Servizi offerti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link testoBianco" href="{{ route('contacts') }}">Contatti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
