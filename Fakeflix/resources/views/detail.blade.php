<x-main>
    <section class="main-container overflow-hidden container">
        <div class="main-container">
            <img width="380" src="{{ $media['cover'] }}" alt="{{ $media['name'] }}">
        </div>
        <div class="container">
            <h1>{{ $media['name'] }}</h1>
            <p>{{ $media[0] }}</p>
        </div>
    </section>
</x-main>
