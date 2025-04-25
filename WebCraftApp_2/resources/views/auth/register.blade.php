@extends('layouts.app')
@section('title', 'Register')

@section('content')
<div class="register-page">
    <div class="register-container">
        <h2 class="register-title">Créer votre compte</h2>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="register-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Registration Form -->
        <form action="{{ route('register') }}" method="POST" class="register-form">
            @csrf
            <div class="form-group">
                <label for="name">Nom complet</label>
                <input type="text" id="name" name="name" placeholder="Entrez votre nom complet" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" placeholder="example@example.com" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez un mot de passe sécurisé" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmez le mot de passe</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Saisissez à nouveau votre mot de passe" required>
            </div>

            <button type="submit" class="btn-register">S'inscrire</button>
        </form>

        <div class="register-footer">
            Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous</a>
        </div>
    </div>
</div>

<style>
.register-page {
    background: linear-gradient(135deg, #2d3436, #d35400); /* Charcoal gray to burnt orange gradient */
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.register-container {
    background-color: #fff; /* White background for the register box */
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    padding: 40px;
    max-width: 400px;
    width: 100%;
    text-align: center;
}

.register-title {
    font-family: 'Poppins', sans-serif;
    color: #2d3436; /* Charcoal gray for title */
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 20px;
}

.register-errors {
    background-color: #ff7675; /* Soft coral for error background */
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
    text-align: left;
}

.register-errors ul {
    margin: 0;
    padding-left: 20px;
}

.register-errors li {
    font-size: 0.9rem;
}

.register-form .form-group {
    margin-bottom: 20px;
    text-align: left;
}

.register-form label {
    color: #2d3436; /* Charcoal gray for labels */
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 5px;
    display: block;
}

.register-form input {
    width: 100%;
    padding: 12px;
    border: 1px solid #dfe6e9; /* Light gray border */
    border-radius: 5px;
    font-size: 1rem;
    color: #2d3436; /* Charcoal gray text */
    background-color: #f7f1e3; /* Creamy off-white background */
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.register-form input:focus {
    outline: none;
    border-color: #e67e22; /* Warm pumpkin orange on focus */
    box-shadow: 0 0 5px rgba(230, 126, 34, 0.3); /* Subtle orange glow */
}

.register-form .btn-register {
    background-color: #e67e22; /* Warm pumpkin orange */
    border: none;
    color: #fff;
    font-weight: 500;
    font-size: 1rem;
    padding: 12px;
    width: 100%;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.register-form .btn-register:hover {
    background-color: #d35400; /* Darker orange on hover */
    transform: translateY(-2px); /* Slight lift effect */
}

.register-footer {
    margin-top: 20px;
}

.register-footer p {
    color: #636e72; /* Muted gray for text */
    font-size: 0.9rem;
    margin: 0;
}

.register-footer a {
    color: #ff7675; /* Soft coral for link */
    font-weight: 500;
    text-decoration: none;
    transition: color 0.3s ease;
}

.register-footer a:hover {
    color: #e74c3c; /* Darker coral on hover */
    text-decoration: underline;
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .register-container {
        padding: 20px;
    }
    .register-title {
        font-size: 1.5rem;
    }
}
</style>
@endsection
