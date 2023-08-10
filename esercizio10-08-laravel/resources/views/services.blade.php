@extends('layouts/app')

@section('content')
    <h1 class=" display-5 text-center mb-5 testoPurple">Servizi Offerti</h1>
    <div class="row  justify-content-evenly">
        @foreach ($services as $service)
        <div class="card p-0 mb-5 " style="width: 18rem; border-color: #121423; background-color: rgb(112, 107, 143);">
            <img src="https://picsum.photos/650/400?grayscale" class="img-fluid rounded-3" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="color: #121423">{{ $service }}</h5>
              <p class="card-text testoBianco">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        @endforeach
    </div>
@endsection