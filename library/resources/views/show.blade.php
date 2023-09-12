<x-template>
    <div class="container px-4 py-5 min-vh-100" >
        <h2 class="pb-2 border-bottom">Books Detail</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mb-5">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/uploads/' . $book->image) }}" class="card-img-top" alt=" image">
            <div class="card-body">
              <h5 class="card-title">{{ $book->nome }}</h5>
              <p class="card-text">{{ $book->anno_pubblicazione }}</p>
              <p class="card-text">{{ $book->numero_pagine }}</p>
              <a href="{{ route('edit', $book->id) }}" class="btn btn-primary">Edit</a>
              <a href="{{ route('show', $book->id) }}" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
      </div>
</x-template>