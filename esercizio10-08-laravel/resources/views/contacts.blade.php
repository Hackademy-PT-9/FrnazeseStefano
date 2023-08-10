@extends('layouts/app')

@section('content')
    <div class="container">
        <h1 class=" display-5 text-center mb-5 testoPurple">Contattaci</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Inserisci la tua email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Messaggio</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a style="background-color: #A48EFF;border-color: black;" href="#" class="btn btn-primary">Invia</a>
                </div>
            </div>
        </div>
    </div>
@endsection
