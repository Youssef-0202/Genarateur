<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $template->nom ?? 'Site généré avec WebCraft' }}</title>
    
    <!-- Inclure les styles CSS directement (sans utiliser asset()) -->
    <style>
        .custom-navbar {
    background: linear-gradient(135deg, #2d3436, #d35400); /* Charcoal gray to burnt orange gradient */
    border-bottom: 2px solid #dfe6e9; /* Light gray border for contrast */
    padding: 10px 0; /* Consistent padding for spacing */
}

.custom-navbar .navbar-brand {
    font-family: 'Poppins', sans-serif;
    color: #f7f1e3; /* Creamy off-white for brand text */
    font-size: 1.8rem; /* Slightly larger brand text */
}

.custom-navbar .nav-link {
    color: #f7f1e3; /* Creamy off-white for links */
    font-weight: 500;
    font-size: 1rem;
    padding: 8px 12px; /* Adjusted padding for click area */
    transition: color 0.3s ease, background-color 0.3s ease;
}

.custom-navbar .nav-link:hover {
    color: #ff7675; /* Soft coral for hover */
    background-color: rgba(255, 118, 117, 0.1); /* Subtle coral background on hover */
    border-radius: 4px; /* Smooth rounded corners */
}

.custom-navbar .btn-outline-light {
    background-color: transparent; /* Transparent background for outline button */
    border-color: #ff7675; /* Soft coral border */
    color: #f7f1e3; /* Creamy off-white text */
    font-weight: 500;
    transition: all 0.3s ease;
}

.custom-navbar .btn-outline-light:hover {
    background-color: #ff7675; /* Soft coral background on hover */
    border-color: #e74c3c; /* Darker coral border */
    color: #fff; /* White text on hover */
}

.custom-navbar .btn-primary {
    background-color: #e67e22; /* Warm pumpkin orange for primary button */
    border-color: #d35400; /* Darker orange border */
    color: #fff; /* White text */
    font-weight: 500;
    transition: all 0.3s ease;
}

.custom-navbar .btn-primary:hover {
    background-color: #d35400; /* Darker orange on hover */
    border-color: #b53c00; /* Even darker border for contrast */
    color: #fff;
}

/* Ensure responsive spacing for smaller screens */
@media (max-width: 991px) {
    .custom-navbar .nav-item {
        margin-bottom: 10px; /* Vertical spacing for collapsed menu */
    }
    .custom-navbar .nav-item.me-3 {
        margin-right: 0; /* Remove horizontal margin in collapsed state */
    }
}
.custom-footer {
        background-color: #f7f1e3; /* Creamy off-white background */
        color: #2d3436; /* Charcoal gray text */
        padding: 30px 0; /* Increased padding for a more spacious feel */
        font-family: 'Poppins', sans-serif;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1); /* Subtle top shadow for depth */
    }

    .custom-footer p {
        margin: 0;
        color: #636e72; /* Muted gray text */
        font-weight: 300; /* Light weight for a soft look */
        font-size: 0.9rem;
    }

    .logout-button {
        background: none;
        border: none;
        color: #e67e22; /* Warm pumpkin orange */
        font-size: 0.9rem;
        font-weight: 500; /* Medium weight for emphasis */
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        transition: color 0.3s ease, transform 0.2s ease; /* Smooth transitions */
    }

    .logout-button:hover {
        color: #ff7675; /* Soft coral on hover */
        transform: translateY(-2px); /* Slight lift effect */
    }
    </style>
    
    <!-- Inclure les polices et autres ressources externes -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    @if(isset($componentsData['Navbar']))
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">
                @if(isset($componentsData['Navbar']['logo']))
                    <img src="{{ $componentsData['Navbar']['logo'] }}" alt="Logo" height="30">
                @else
                    {{ $template->nom ?? 'WebCraft' }}
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if(isset($componentsData['Navbar']['links']))
                        @foreach($componentsData['Navbar']['links'] as $link)
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @endif

    <!-- Masthead/Hero Section -->
    @if(isset($componentsData['Masthead']))
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">{{ $componentsData['Masthead']['subheading'] ?? 'Bienvenue sur notre site' }}</div>
            <div class="masthead-heading">{{ $componentsData['Masthead']['heading'] ?? 'Ravi de vous rencontrer' }}</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#">{{ $componentsData['Masthead']['buttonText'] ?? 'En savoir plus' }}</a>
        </div>
    </header>
    @endif

    <!-- Services Section -->
    @if(isset($componentsData['Services']))
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">{{ $componentsData['Services']['heading'] ?? 'Services' }}</h2>
                <h3 class="section-subheading text-muted">{{ $componentsData['Services']['subheading'] ?? 'Ce que nous offrons' }}</h3>
            </div>
            <div class="row text-center">
                @if(isset($componentsData['Services']['services']))
                    @foreach($componentsData['Services']['services'] as $service)
                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="{{ $service['icon'] ?? 'fas fa-star' }} fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">{{ $service['title'] ?? 'Service' }}</h4>
                            <p class="text-muted">{{ $service['description'] ?? 'Description du service' }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    @endif

    <!-- Portfolio Section -->
    @if(isset($componentsData['Portfolio']))
    <section class="page-section" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">{{ $componentsData['Portfolio']['heading'] ?? 'Portfolio' }}</h2>
                <h3 class="section-subheading text-muted">{{ $componentsData['Portfolio']['subheading'] ?? 'Nos réalisations' }}</h3>
            </div>
            <div class="row">
                @if(isset($componentsData['Portfolio']['items']))
                    @foreach($componentsData['Portfolio']['items'] as $item)
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <a class="portfolio-link" href="#">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="{{ $item['image'] ?? '' }}" alt="{{ $item['captionHeading'] ?? 'Image' }}">
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">{{ $item['captionHeading'] ?? 'Titre' }}</div>
                                    <div class="portfolio-caption-subheading text-muted">{{ $item['captionSubheading'] ?? 'Sous-titre' }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    @endif

    <!-- About Section -->
    @if(isset($componentsData['About']))
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">{{ $componentsData['About']['heading'] ?? 'À propos' }}</h2>
                <h3 class="section-subheading text-muted">{{ $componentsData['About']['subheading'] ?? 'Notre histoire' }}</h3>
            </div>
            <ul class="timeline">
                @if(isset($componentsData['About']['timeline']))
                    @foreach($componentsData['About']['timeline'] as $key => $item)
                        @if($key !== 'finalMessage')
                            <li class="{{ isset($item['inverted']) && $item['inverted'] ? 'timeline-inverted' : '' }}">
                                <div class="timeline-image">
                                    @if(isset($item['image']))
                                        <img class="rounded-circle img-fluid" src="{{ $item['image'] }}" alt="{{ $item['subheading'] ?? 'Timeline image' }}">
                                    @endif
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>{{ $item['year'] ?? '' }}</h4>
                                        <h4 class="subheading">{{ $item['subheading'] ?? 'Étape' }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">{{ $item['description'] ?? 'Description' }}</p>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                @endif
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            {{ $componentsData['About']['timeline']['finalMessage'] ?? 'Rejoignez-nous!' }}
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    @endif

    <!-- Team Section -->
    @if(isset($componentsData['Team']))
    <section class="page-section" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">{{ $componentsData['Team']['heading'] ?? 'Notre équipe' }}</h2>
                <h3 class="section-subheading text-muted">{{ $componentsData['Team']['subheading'] ?? 'Des professionnels passionnés' }}</h3>
            </div>
            <div class="row">
                @if(isset($componentsData['Team']['members']))
                    @foreach($componentsData['Team']['members'] as $member)
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ $member['image'] ?? '' }}" alt="{{ $member['name'] ?? 'Team member' }}">
                                <h4>{{ $member['name'] ?? 'Nom' }}</h4>
                                <p class="text-muted">{{ $member['role'] ?? 'Rôle' }}</p>
                                <a class="btn btn-dark btn-social mx-2" href="{{ $member['social']['twitter'] ?? '#' }}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="{{ $member['social']['facebook'] ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="{{ $member['social']['linkedin'] ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    @endif

    <!-- Clients/Logos Section -->
    @if(isset($componentsData['Clients']))
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                @if(isset($componentsData['Clients']['logos']))
                    @foreach($componentsData['Clients']['logos'] as $logo)
                        <div class="col-md-3 col-sm-6 my-3">
                            <a href="#">
                                <img class="img-fluid img-brand d-block mx-auto" 
                                     src="{{ $logo['image'] ?? '' }}" 
                                     alt="{{ $logo['alt'] ?? 'Logo client' }}" 
                                     aria-label="{{ $logo['aria_label'] ?? 'Logo client' }}">
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    @endif

    <!-- Footer -->
    @if(isset($componentsData['Footer']))
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">
                    {{ $componentsData['Footer']['copyright'] ?? 'Copyright © WebCraft ' . date('Y') }}
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    @if(isset($componentsData['Footer']['social_links']))
                        <a class="btn btn-dark btn-social mx-2" href="{{ $componentsData['Footer']['social_links']['twitter'] ?? '#' }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="{{ $componentsData['Footer']['social_links']['facebook'] ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="{{ $componentsData['Footer']['social_links']['linkedin'] ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                    @endif
                </div>
                <div class="col-lg-4 text-lg-end">
                    @if(isset($componentsData['Footer']['footer_links']))
                        <a class="link-dark text-decoration-none me-3" href="{{ $componentsData['Footer']['footer_links']['privacy_policy'] ?? '#' }}">Politique de confidentialité</a>
                        <a class="link-dark text-decoration-none" href="{{ $componentsData['Footer']['footer_links']['terms_of_use'] ?? '#' }}">Conditions d'utilisation</a>
                    @endif
                </div>
            </div>
        </div>
    </footer>
    @endif

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    <script>
        // Ici, vous pouvez ajouter tout le JavaScript nécessaire au fonctionnement du site
        document.addEventListener('DOMContentLoaded', function() {
            // Code JavaScript pour l'interactivité du site
        });
    </script>
</body>
</html>