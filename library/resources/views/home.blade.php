<x-template>
    @if (session('success'))
        <div class="alert alert-secondary">
            {{ session('success') }}
        </div>
    @endif
    <div class="container px-4 py-5 min-vh-50" >
        <h2 class="pb-2 border-bottom">Books List</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mb-5">
            @forelse ($books as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/uploads/' . $item->image) }}" class="card-img-top" alt=" image">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->nome }}</h5>
                  <p class="card-text">{{ $item->anno_pubblicazione }}</p>
                  <p class="card-text">{{ $item->numero_pagine }}</p>
                  <a href="{{ route('show', $item->id) }}" class="btn btn-secondary">Detail</a>
                </div>
              </div>
            @empty
                <h4>Oops! There are no books, add one! </h4>
            @endforelse
        </div>
      </div>

      <div class="container px-4 py-5 min-vh-50" >
        <h2 class="pb-2 border-bottom">Authors List</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mb-5">
            @forelse ($authors as $author)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $author->name }}</h5>
                  <h5 class="card-title">{{ $author->surname }}</h5>
                  <a href="{{ route('authors.show', $author->id) }}" class="btn btn-secondary">Detail</a>
                </div>
              </div>
            @empty
                <h4>Oops! There are no Authors, add one! </h4>
            @endforelse
        </div>
      </div>
   
</x-template>
