<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <p class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Beasteri</span></p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="{{ route('landingpage.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('regis.index') }}">Extra</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('myextra.index') }}">My Extra</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
