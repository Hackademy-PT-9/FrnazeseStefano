<x-main>
    <section class="main-container overflow-hidden container">
        <h1>{{ ucfirst($tipologia) }} su FakeFlix</h1>
        <div class="box">
            @foreach($data as $item)
                <a href="{{ route('detail', ['uri' => $item['uri']]) }}">
                    <img width="380" src="{{ $item['cover'] }}" alt="{{ $item['name'] }}">
                </a>
            @endforeach
        </div>
    </section>
</x-main>
