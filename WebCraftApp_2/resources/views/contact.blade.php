<!-- resources/views/features.blade.php -->
@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section id="contact" class="contact-section my-5">
    <div class="container">
        <h2 class="text-center mb-5">Contactez-nous</h2>
        <form action="/contact" method="POST">
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
