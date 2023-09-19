<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Library</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item ms-3">
                  <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item ms-3">
                  <a href="{{ route('books.create') }}" class="btn btn-success {{ Route::currentRouteName() == 'books.create' ? 'disabled' : '' }}">+Add Book</a>
              </li>
              <li class="nav-item ms-3">
                <a href="{{ route('authors.create') }}" class="btn btn-success {{ Route::currentRouteName() == 'authors.create' ? 'disabled' : '' }}">+Add Author</a>
            </li>
          </ul>
      </div>
  </div>
</nav>
