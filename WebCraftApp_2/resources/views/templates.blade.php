<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templates</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    @if (Request::is('register'))
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @endif
    @if (Request::is('login'))
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @endif
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="{{ url('/templates') }}">WebCraft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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
            <p class="lead text-center">Découvrez les modèles de sites web proposés par notre générateur WebCraft.</p>
        </div>
        <!-- Template Gallery Section -->
        <section id="templates" class="template-section py-5">
            <div class="container">
                <h2 class="text-center mb-5">Choisissez votre modèle</h2>
                <div class="row g-4">
                    @foreach ($templates as $template)
                        <div class="col-lg-4 col-md-6">
                            <div class="card template-card shadow-sm">
                                <img src="{{ $template->imagePrev }}" class="card-img-top" alt="{{ $template->nom }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $template->nom }}</h5>
                                    <p class="card-text">Se destine aux petites entreprises et aux agences. Son design chaleureux et propre.</p>
                                    <a href="{{ route('templates.show', $template->templateId) }}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <x-footer />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    <script>
        // GSAP Animations for Template Section
        window.onload = () => {
            gsap.from('.template-section h2', {
                duration: 1,
                y: -50,
                opacity: 0,
                ease: 'power2.out'
            });
            gsap.from('.template-card', {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 0.5,
                ease: 'power2.out'
            });
        };
    </script>

    <style>
        /* Navbar Styles */
        .custom-navbar {
            background: linear-gradient(135deg, #2d3436, #d35400); /* Charcoal gray to burnt orange gradient */
            border-bottom: 2px solid #dfe6e9; /* Light gray border */
            padding: 10px 0;
        }

        .custom-navbar .navbar-brand {
            font-family: 'Poppins', sans-serif;
            color: #f7f1e3; /* Creamy off-white */
            font-size: 1.8rem;
        }

        .custom-navbar .nav-link {
            color: #f7f1e3; /* Creamy off-white */
            font-weight: 500;
            font-size: 1rem;
            padding: 8px 12px;
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        .custom-navbar .nav-link:hover {
            color: #ff7675; /* Soft coral */
            background-color: rgba(255, 118, 117, 0.1); /* Subtle coral background */
            border-radius: 4px;
        }

        .custom-navbar .btn-primary {
            background-color: #e67e22; /* Warm pumpkin orange */
            border-color: #d35400; /* Darker orange border */
            color: #fff;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .custom-navbar .btn-primary:hover {
            background-color: #d35400; /* Darker orange */
            border-color: #b53c00; /* Even darker border */
            color: #fff;
        }

        /* Main Content Styles */
        body {
            background-color: #f7f1e3; /* Creamy off-white background for the page */
            font-family: 'Poppins', sans-serif;
            color: #2d3436; /* Charcoal gray text */
        }

        .container.my-5 h2 {
            color: #2d3436; /* Charcoal gray */
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .container.my-5 p.lead {
            color: #636e72; /* Muted gray */
            font-weight: 300;
            font-size: 1.25rem;
        }

        /* Template Section Styles */
        .template-section {
            background-color: #fff; /* White background for contrast */
            padding: 60px 0;
        }

        .template-section h2 {
            color: #2d3436; /* Charcoal gray */
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 40px;
        }

        .template-card {
            background-color: #f7f1e3; /* Creamy off-white card background */
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .template-card:hover {
            transform: translateY(-5px); /* Slight lift on hover */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15); /* Deeper shadow */
        }

        .template-card img {
            height: 200px;
            object-fit: cover;
        }

        .template-card .card-body {
            padding: 20px;
        }

        .template-card .card-title {
            color: #2d3436; /* Charcoal gray */
            font-weight: 600;
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .template-card .card-text {
            color: #636e72; /* Muted gray */
            font-weight: 300;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .template-card .stretched-link::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
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
            .container.my-5 h2 {
                font-size: 2rem;
            }
            .container.my-5 p.lead {
                font-size: 1rem;
            }
            .template-section h2 {
                font-size: 1.75rem;
            }
            .template-card img {
                height: 150px;
            }
        }
    </style>
</body>

</html>
