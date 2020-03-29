<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Mossoct</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Route::is('index') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Route::is('features') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('features')}}">Features</a>
                </li>
                <li class="nav-item {{ Route::is('pricing') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                </li>
                <li class="nav-item {{ Route::is('mahasiswa.index') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>