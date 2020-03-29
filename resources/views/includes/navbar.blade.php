<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Mossoct</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/features') }}">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pricing') }}">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>