<x-template>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container px-4 py-5 min-vh-100" >
        <h2 class="pb-2 border-bottom">Books List</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mb-5">
            @forelse ($libri as $item)
            <div class="col d-flex align-items-start mb-5">
                <div>
                  <h3 class="fs-2">{{ $item->nome }}</h3>
                  <p>Number of pages: {{ $item->numero_pagine }}</p>
                  <p>Year of publication: {{ $item->anno_pubblicazione }}</p>
                  <a href="{{ route('show', ['id' => $item->id]) }}" class="btn btn-secondary btn-sm">
                    Detail
                  </a>
                </div>
            </div>
            @empty
                <h4>Oops! There are no books, add one! </h4>
            @endforelse
        </div>
      </div>
   
</x-template>
