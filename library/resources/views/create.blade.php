<x-template>
    <div class="container px-4 py-5 min-vh-100" >
        <h2 class="pb-2 border-bottom">Create book</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mb-5">
          <div class="col d-flex align-items-center">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text"  required name="nome" value="{{ old('nome') }}" class="form-control" >
                  <div  class="form-text">Remember the name can't be too long.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Number of pages</label>
                    <input type="number" required name="numero_pagine" value="{{ old('numero_pagine') }}" class="form-control"  >
                </div>
                <div class="mb-3">
                    <label class="form-label">Year of publication</label>
                    <input type="number"  name="anno_pubblicazione" value="{{ old('anno_pubblicazione') }}" class="form-control"min="1000" max="9999" >
                  </div>
                <button type="submit" class="btn btn-success">Create</button>
              </form>
          </div>
        </div>
      </div>
</x-template>