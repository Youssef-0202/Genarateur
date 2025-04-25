<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modèles - WebCraft</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    @if (Request::is('register'))
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @endif
    @if (Request::is('login'))
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @endif
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="{{ url('/templates') }}">WebCraft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-4">
                        <a class="nav-link text-white" href="{{ url('/templates') }}">Modèles</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary text-white" href="/login">Se déconnecter</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="container my-5">
            <h2 class="text-center">Modèles</h2>
            <p class="lead text-center">Créez votre site idéal avec les modèles uniques de WebCraft.</p>
        </div>
        <!-- Template Gallery Section -->
        <section id="templates" class="template-section py-5">
            <div class="container">
                <h2 class="text-center mb-5">Choisissez votre modèle</h2>
                <div class="template-list d-flex flex-column align-items-center gap-5">
                    @foreach ($templates as $template)
                        <div class="template-card card shadow-sm">
                            <div class="card-img-container position-relative">
                                <img src="{{ $template->imagePrev }}" class="card-img-top" alt="{{ $template->nom }}">
                                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                    <i class="fas fa-eye fa-2x"></i>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $template->nom }}</h5>
                                <p class="card-text">{{ $template->description ?? 'Parfait pour les petites entreprises et agences, avec un design chaleureux et épuré.' }}</p>
                                <a href="{{ route('templates.show', $template->templateId) }}" class="btn btn-outline-primary">Voir le modèle</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        window.onload = () => {
            gsap.from('.template-section h2, .template-section .lead', {
                duration: 1,
                y: -50,
                opacity: 0,
                ease: 'power3.out'
            });
            gsap.from('.template-card', {
                duration: 1,
                opacity: 0,
                x: 20,
                y: 50,
                stagger: 0.2,
                delay: 0.5,
                ease: 'power3.out'
            });
            gsap.from('.template-card .card-img-overlay', {
                duration: 0.5,
                opacity: 0,
                scale: 0.8,
                delay: 1,
                stagger: 0.2,
                ease: 'power3.out'
            });
        };
    </script>

<style>
    /* Global Body Style */
    body {
        background-color: #f7f1e3; /* Creamy off-white */
        font-family: 'Poppins', sans-serif;
        color: #2d3436; /* Charcoal gray */
    }

    /* Navbar Styles */
    .custom-navbar {
        background: linear-gradient(135deg, #2d3436, #d35400); /* Charcoal gray to burnt orange */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
        padding: 12px 0;
    }

    .custom-navbar .navbar-brand {
        color: #f7f1e3; /* Creamy off-white */
        font-size: 1.8rem;
        font-weight: 700;
        transition: color 0.3s ease;
    }

    .custom-navbar .navbar-brand:hover {
        color: #ff7675; /* Soft coral */
    }

    .custom-navbar .nav-link {
        color: #f7f1e3; /* Creamy off-white */
        font-weight: 500;
        font-size: 1rem;
        padding: 8px 15px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .custom-navbar .nav-link:hover {
        color: #ff7675; /* Soft coral */
        background-color: rgba(255, 118, 117, 0.15); /* Subtle coral background */
    }

    .custom-navbar .btn-primary {
        background-color: #e67e22; /* Pumpkin orange */
        border: none;
        font-weight: 500;
        padding: 8px 20px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .custom-navbar .btn-primary:hover {
        background-color: #d35400; /* Burnt orange */
        transform: translateY(-2px); /* Slight lift */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Main */
    main {
        margin-bottom: 40px; /* Reduced space before footer */
    }

    /* Template Section */
    .template-section {
        background-color: #f7f1e3; /* Creamy off-white to match body */
        padding: 60px 0 40px 0; /* Reduced bottom padding */
    }

    .template-section h2 {
        color: #2d3436; /* Charcoal gray */
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 40px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .template-section .lead {
        color: #636e72; /* Muted gray */
        font-weight: 300;
        font-size: 1.25rem;
        transition: color 0.3s ease;
    }

    .template-section .lead:hover {
        color: #e67e22; /* Pumpkin orange */
    }

    .template-list {
        max-width: 700px; /* Card width */
        margin: 0 auto;
        gap: 2.5rem; /* Optimized gap */
    }

    .template-card {
        background-color: #fff; /* White for contrast with section background */
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border: 1px solid #dfe6e9;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border 0.3s ease;
        width: 100%;
    }

    .template-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        border: 2px solid #e67e22; /* Pumpkin orange */
    }

    .template-card .card-img-container {
        position: relative;
        overflow: hidden;
        border-radius: 10px 10px 0 0;
    }

    .template-card .card-img-top {
        border-radius: 10px 10px 0 0;
        height: 200px;
        object-fit: cover;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        transition: transform 0.5s ease, opacity 0.3s ease;
    }

    .template-card:hover .card-img-top {
        transform: scale(1.05);
        opacity: 0.9;
    }

    .template-card .card-img-overlay {
        opacity: 0;
        background-color: rgba(230, 126, 34, 0.3);
        transition: opacity 0.3s ease;
    }

    .template-card:hover .card-img-overlay {
        opacity: 1;
    }

    .template-card .card-img-overlay i {
        color: #fff;
        animation: pulse 1.5s infinite;
        transition: transform 0.3s ease;
    }

    .template-card:hover .card-img-overlay i {
        transform: scale(1.2);
    }

    .template-card .card-body {
        padding: 25px;
    }

    .template-card .card-title {
        color: #2d3436;
        font-weight: 500;
        font-size: 1.25rem;
        margin-bottom: 12px;
    }

    .template-card .card-text {
        color: #636e72;
        font-weight: 300;
        font-size: 0.9rem;
        margin-bottom: 15px;
    }

    .template-card .btn-outline-primary {
        border-color: #e67e22;
        color: #e67e22;
        font-weight: 500;
        padding: 8px 20px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .template-card .btn-outline-primary:hover {
        background-color: #e67e22;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Pulsing Animation */
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .custom-navbar .nav-item {
            margin-bottom: 10px;
        }
        .custom-navbar .nav-item.me-4 {
            margin-right: 0;
        }
    }

    @media (max-width: 768px) {
        main {
            margin-bottom: 30px;
        }
        .template-section {
            padding: 40px 0 30px 0;
        }
        .template-section h2 {
            font-size: 2rem;
        }
        .template-section .lead {
            font-size: 1.1rem;
        }
        .template-card .card-title {
            font-size: 1.1rem;
        }
        .template-card .card-text {
            font-size: 0.85rem;
        }
        .template-card .card-body {
            padding: 20px;
        }
        .template-card .card-img-top {
            height: 150px;
        }
        .template-list {
            gap: 2rem;
        }
    }

    @media (max-width: 576px) {
        main {
            margin-bottom: 20px;
        }
        .template-section {
            padding: 30px 0 20px 0;
        }
        .template-section h2 {
            font-size: 1.75rem;
        }
        .template-section .lead {
            font-size: 1rem;
        }
        .template-list {
            max-width: 100%;
            gap: 1.5rem;
        }
    }
</style>
