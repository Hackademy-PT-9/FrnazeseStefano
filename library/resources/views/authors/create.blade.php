<x-template>
    <div class="container px-4 py-5 min-vh-100" >
        <h2 class="pb-2 border-bottom">Create author</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mb-5">
          <div class="col d-flex align-items-center">
            <form action="{{ route('authors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text"  required name="name" value="{{ old('name') }}" class="form-control" >
                  <div  class="form-text">Remember the name can't be too long.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Surname</label>
                    <input type="text" required name="surname" value="{{ old('surname') }}" class="form-control"  >
                    <div  class="form-text">Remember the surname can't be too long.</div>
                </div>
                <button type="submit" class="btn btn-success">Create</button>
              </form>
          </div>
        </div>
      </div>
</x-template>