<!-- resources/views/features.blade.php -->
@extends('layouts.app')

@section('title', 'Features')

@section('content')

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


@endsection
