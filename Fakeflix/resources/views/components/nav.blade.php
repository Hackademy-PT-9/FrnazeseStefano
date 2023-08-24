<header class="overflow-hidden">
    <div class="netflixLogo">
        <a id="logo">
            <img src="/img/logo.png" alt="Logo Image">
        </a>
    </div>
    <nav class="main-nav">
        <nav class="main-nav">
            <a href="{{route('home')}}">Home</a>
            <a href="{{ route('catalogue', ['tipologia' => 'serie']) }}" >Serie TV</a>
            <a href="{{ route('catalogue', ['tipologia' => 'film']) }}" >Film</a>
        </nav>
    </nav>
</header>