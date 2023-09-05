<x-template>
    <div class="container px-4 py-5 min-vh-100" >
        <h2 class="pb-2 border-bottom">Books Detail</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mb-5">
            <div class="col d-flex align-items-start">
                <div>
                  <h3 class="fs-2">{{ $libro->nome }}</h3>
                  <p>Number of pages: {{ $libro->numero_pagine }}</p>
                  <p>Year of publication: {{ $libro->anno_pubblicazione }}</p>
                </div>
            </div>
        </div>
      </div>
</x-template>