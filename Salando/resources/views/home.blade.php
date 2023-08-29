<x-template>

 @if (session('success'))
     <div>
        {{ session('success') }}
     </div>
 @endif
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Salando!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Shop Now!</a>
        </div>
    </header>
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Products</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                {{-- @php
                    dd($jsonData)
                @endphp --}}
                @foreach ($jsonData as $data)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">More Info</div>
                            </div>
                            <img style="max-width: 200px;" class="img-fluid" src="{{ $data['image'] }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $data['title'] }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $data['description'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
            
            </div>
        </div>
    </section>
    
</x-template>