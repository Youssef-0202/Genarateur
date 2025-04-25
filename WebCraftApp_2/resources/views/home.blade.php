@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-light d-flex align-items-center" style="background: linear-gradient(135deg, #2d3436, #d35400); height: 100vh;">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-3 fw-bold mb-4" style="color: #f7f1e3;">Générez votre site web en quelques clics</h1>
                <p class="lead mb-5" style="color: #f7f1e3;">
                    WebCraft transforme vos idées en sites élégants, rapidement et sans compétences techniques.
                </p>

            </div>

        </div>


    </div>
</section>

<style>
.hero-section {
    background: linear-gradient(135deg, #2d3436, #d35400); /* Charcoal gray to burnt orange gradient */
    position: relative;
    overflow: hidden;
}

.hero-section h1 {
    font-family: 'Poppins', sans-serif;
    color: #f7f1e3; /* Creamy off-white for heading */
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3); /* Subtle shadow for depth */
}

.hero-section p {
    color: #f7f1e3; /* Creamy off-white for paragraph */
    font-size: 1.25rem;
    font-weight: 300;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Lighter shadow for readability */
}

.hero-section .btn-primary {
    background-color: #e67e22; /* Warm pumpkin orange */
    border-color: #d35400; /* Darker orange border */
    color: #fff;
    font-weight: 500;
    padding: 12px 30px; /* Slightly larger padding for prominence */
    transition: all 0.3s ease;
}

.hero-section .btn-primary:hover {
    background-color: #d35400; /* Darker orange on hover */
    border-color: #b53c00; /* Even darker border */
    color: #fff;
}

.hero-section .btn-outline-light {
    background-color: transparent;
    border-color: #ff7675; /* Soft coral border */
    color: #f7f1e3; /* Creamy off-white text */
    font-weight: 500;
    padding: 12px 30px; /* Matching padding with primary button */
    transition: all 0.3s ease;
}

.hero-section .btn-outline-light:hover {
    background-color: #ff7675; /* Soft coral background on hover */
    border-color: #e74c3c; /* Darker coral border */
    color: #fff;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 2.5rem; /* Smaller heading on mobile */
    }
    .hero-section p {
        font-size: 1rem; /* Smaller paragraph text on mobile */
    }
    .hero-section .btn-lg {
        padding: 10px 20px; /* Slightly smaller buttons on mobile */
    }
}
</style>

<!-- Features Section -->
<section id="features" class="features-section py-5 text-center">
    <div class="container">
        <h2 class="mb-5">Fonctionnalités puissantes à portée de main</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0 feature-card">
                    <div class="card-body">
                        <i class="fas fa-bolt fa-3x mb-4"></i>
                        <h5 class="card-title">Rapide et efficace</h5>
                        <p class="card-text">Créez des sites web entièrement responsifs en un rien de temps avec notre générateur de code optimisé.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0 feature-card">
                    <div class="card-body">
                        <i class="fas fa-paint-brush fa-3x mb-4"></i>
                        <h5 class="card-title">Modèles personnalisables</h5>
                        <p class="card-text">Choisissez parmi une large gamme de modèles et personnalisez-les selon vos besoins.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0 feature-card">
                    <div class="card-body">
                        <i class="fas fa-shield-alt fa-3x mb-4"></i>
                        <h5 class="card-title">Sécurisé et fiable</h5>
                        <p class="card-text">Conçu avec les dernières normes de sécurité pour protéger vos données.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0 feature-card">
                    <div class="card-body">
                        <i class="fas fa-edit fa-3x mb-4"></i>
                        <h5 class="card-title">Éditeur intuitif</h5>
                        <p class="card-text">Modifiez vos sites en temps réel avec un éditeur visuel simple et puissant.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0 feature-card">
                    <div class="card-body">
                        <i class="fas fa-file-export fa-3x mb-4"></i>
                        <h5 class="card-title">Exportation facile</h5>
                        <p class="card-text">Exportez vos projets vers différentes plateformes avec un seul clic.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0 feature-card">
                    <div class="card-body">
                        <i class="fas fa-search fa-3x mb-4"></i>
                        <h5 class="card-title">Optimisation SEO intégrée</h5>
                        <p class="card-text">Boostez la visibilité de votre site avec des outils SEO intégrés.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0 feature-card">
                    <div class="card-body">
                        <i class="fas fa-plug fa-3x mb-4"></i>
                        <h5 class="card-title">Intégrations tierces</h5>
                        <p class="card-text">Connectez WebCraft à vos outils préférés comme Google Analytics ou Mailchimp.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0 feature-card">
                    <div class="card-body">
                        <i class="fas fa-robot fa-3x mb-4"></i>
                        <h5 class="card-title">Assistance IA</h5>
                        <p class="card-text">Laissez notre IA vous guider et optimiser vos designs automatiquement.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0 feature-card">
                    <div class="card-body">
                        <i class="fas fa-users fa-3x mb-4"></i>
                        <h5 class="card-title">Collaboration en équipe</h5>
                        <p class="card-text">Travaillez en équipe sur vos projets avec des outils de collaboration en temps réel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Features Section */
    .features-section {
        background-color: #fff; /* White background for contrast */
        padding: 60px 0; /* Adjusted padding */
    }

    .features-section h2 {
        color: #2d3436; /* Charcoal gray */
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 40px;
    }

    .feature-card {
        background-color: #f7f1e3; /* Creamy off-white */
        border-radius: 10px; /* Rounded corners */
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth hover effects */
    }

    .feature-card:hover {
        transform: translateY(-5px); /* Slight lift on hover */
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15); /* Deeper shadow */
    }

    .feature-card .card-body {
        padding: 30px;
    }

    .feature-card i {
        color: #ff7675; /* Soft coral for icons */
        margin-bottom: 20px;
    }

    .feature-card .card-title {
        color: #2d3436; /* Charcoal gray */
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 1.25rem;
        margin-bottom: 15px;
    }

    .feature-card .card-text {
        color: #636e72; /* Muted gray */
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 0.9rem;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .features-section h2 {
            font-size: 2rem;
        }
        .feature-card .card-body {
            padding: 20px;
        }
        .feature-card .card-title {
            font-size: 1.1rem;
        }
        .feature-card .card-text {
            font-size: 0.85rem;
        }
    }

    @media (max-width: 576px) {
        .features-section {
            padding: 40px 0;
        }
        .features-section h2 {
            font-size: 1.75rem;
        }
    }
</style>

<!-- GSAP Animation Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    window.onload = () => {
        gsap.from('.features-section h2', {
            duration: 1,
            y: -50,
            opacity: 0,
            ease: 'power2.out'
        });
        gsap.from('.feature-card', {
            duration: 1,
            opacity: 0,
            y: 50,
            stagger: 0.2,
            delay: 0.5,
            ease: 'power2.out'
        });
    };
</script>

<!-- Template Gallery Section -->
<section id="templates" class="template-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Découvrez nos modèles</h2>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Diapositive 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Diapositive 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Diapositive 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/back1.jpg') }}" class="d-block w-100 rounded" alt="Agence">
                    <div class="carousel-caption">
                        <p>Idéal pour les petites entreprises et agences avec un design épuré et chaleureux.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/back2.jpg') }}" class="d-block w-100 rounded" alt="Portfolio élégant">
                    <div class="carousel-caption">
                        <p>Un portfolio monopage avec une esthétique Bootstrap remarquable.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/back3.jpg') }}" class="d-block w-100 rounded" alt="Blog épuré">
                    <div class="carousel-caption">
                        <p>Créez un blog minimaliste et élégant en toute simplicité.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
</section>

<style>
    /* Template Section */
    .template-section {
        background-color: #f7f1e3; /* Creamy off-white background */
        padding: 60px 0; /* Adjusted padding */
    }

    .template-section h2 {
        color: #2d3436; /* Charcoal gray */
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 40px;
    }

    /* Carousel */
    .carousel {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        border-radius: 10px; /* Rounded corners */
        overflow: hidden;
    }

    .carousel-inner img {
        border-radius: 10px; /* Rounded image corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Image shadow */
    }

    .carousel-caption {
        background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
        color: #636e72; /* Muted gray */
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 1rem;
        padding: 10px 20px;
        border-radius: 5px; /* Rounded caption */
        bottom: 20px; /* Adjusted position */
    }

    .carousel-indicators button {
        background-color: #636e72; /* Muted gray for inactive */
        opacity: 0.5;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        margin: 0 5px;
        transition: background-color 0.3s ease, opacity 0.3s ease;
    }

    .carousel-indicators .active {
        background-color: #e67e22; /* Pumpkin orange for active */
        opacity: 1;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 5%; /* Narrower controls */
        transition: transform 0.3s ease;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        transform: scale(1.1); /* Slight scale on hover */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-image: none; /* Remove default Bootstrap icon */
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: #ff7675; /* Soft coral */
        transition: background-color 0.3s ease;
    }

    .carousel-control-prev-icon::before,
    .carousel-control-next-icon::before {
        font-family: 'Font Awesome 5 Free'; /* Use Font Awesome */
        font-weight: 900;
        color: #fff; /* White icon */
        font-size: 16px;
    }

    .carousel-control-prev-icon::before {
        content: '\f053'; /* Font Awesome chevron-left */
    }

    .carousel-control-next-icon::before {
        content: '\f054'; /* Font Awesome chevron-right */
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: #d35400; /* Burnt orange on hover */
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .template-section h2 {
            font-size: 2rem;
        }
        .carousel-caption {
            font-size: 0.9rem;
            padding: 8px 15px;
        }
    }

    @media (max-width: 576px) {
        .template-section {
            padding: 40px 0;
        }
        .template-section h2 {
            font-size: 1.75rem;
        }
        .carousel-caption {
            font-size: 0.8rem;
            bottom: 10px;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 10%;
        }
    }
</style>

<!-- GSAP Animation Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    window.onload = () => {
        gsap.from('.template-section h2', {
            duration: 1,
            y: -50,
            opacity: 0,
            ease: 'power2.out'
        });
        gsap.from('.carousel', {
            duration: 1,
            opacity: 0,
            y: 50,
            delay: 0.5,
            ease: 'power2.out'
        });
        gsap.from('.carousel-caption', {
            duration: 0.8,
            opacity: 0,
            scale: 0.8,
            delay: 1,
            ease: 'power2.out',
            stagger: 0.2
        });
    };
</script>


<section id="contact" class="contact-section my-5">
    <div class="container">
        <h2 class="text-center mb-5">Contactez-nous</h2>
        <form action="/" method="POST">
            @csrf
            <div class="row g-4">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">Prénom</label>
                    <input
                        type="text"
                        class="form-control"
                        id="first_name"
                        name="first_name"
                        placeholder="Entrez votre prénom"
                        required
                    />
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label">Nom</label>
                    <input
                        type="text"
                        class="form-control"
                        id="last_name"
                        name="last_name"
                        placeholder="Entrez votre nom"
                        required
                    />
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Entrez votre e-mail"
                        required
                    />
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Numéro de téléphone</label>
                    <input
                        type="tel"
                        class="form-control"
                        id="phone"
                        name="phone"
                        placeholder="Entrez votre numéro"
                    />
                </div>
                <div class="col-12">
                    <label for="message" class="form-label">Message</label>
                    <textarea
                        class="form-control"
                        id="message"
                        name="message"
                        rows="4"
                        placeholder="Entrez votre message"
                        required
                    ></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
</section>

<style>
    /* Contact Section */
    .contact-section {
        background-color: #fff; /* White background for contrast */
        padding: 60px 0; /* Adjusted padding */
    }

    .contact-section h2 {
        color: #2d3436; /* Charcoal gray */
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 40px;
    }

    .contact-section .form-label {
        color: #2d3436; /* Charcoal gray */
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .contact-section .form-control {
        background-color: #f7f1e3; /* Creamy off-white */
        border: 1px solid #dfe6e9; /* Light gray border */
        color: #2d3436; /* Charcoal gray text */
        border-radius: 5px; /* Rounded corners */
        padding: 10px;
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 0.9rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-section .form-control:focus {
        border-color: #e67e22; /* Pumpkin orange */
        box-shadow: 0 0 5px rgba(230, 126, 34, 0.3); /* Subtle orange glow */
        outline: none;
    }

    .contact-section .btn-primary {
        background-color: #e67e22; /* Pumpkin orange */
        border: none;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 1rem;
        padding: 12px 30px;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .contact-section .btn-primary:hover {
        background-color: #d35400; /* Burnt orange */
        transform: translateY(-2px); /* Slight lift */
    }

    .contact-section form {
        background-color: #fff; /* White background */
        padding: 30px;
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .contact-section h2 {
            font-size: 2rem;
        }
        .contact-section .form-control {
            font-size: 0.85rem;
            padding: 8px;
        }
        .contact-section .btn-primary {
            font-size: 0.9rem;
            padding: 10px 25px;
        }
        .contact-section form {
            padding: 20px;
        }
    }

    @media (max-width: 576px) {
        .contact-section {
            padding: 40px 0;
        }
        .contact-section h2 {
            font-size: 1.75rem;
        }
        .contact-section .form-label {
            font-size: 0.85rem;
        }
    }
</style>

<!-- GSAP Animation Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    window.onload = () => {
        gsap.from('.contact-section h2', {
            duration: 1,
            y: -50,
            opacity: 0,
            ease: 'power2.out'
        });
        gsap.from('.contact-section .form-control, .contact-section .btn-primary', {
            duration: 1,
            opacity: 0,
            y: 50,
            stagger: 0.2,
            delay: 0.5,
            ease: 'power2.out'
        });
    };
</script>
@endsection
