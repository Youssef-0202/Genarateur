<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">
            <img src="assets/img/logo.png" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                @foreach ($content['links'] as $link)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
