@extends('layouts.app')
@section('title', 'Login')

@section('content')

<div class="login-page">
    <div class="login-box">
        <h2 class="login-title">Se connecter</h2>
        <p class="login-subtitle">Heureux de vous revoir ! Veuillez vous connecter pour continuer.</p>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="login-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre adresse e-mail" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            </div>
            <button type="submit" class="btn-login">Se connecter</button>
        </form>

        <div class="alternative-action">
            <p>Vous n'avez pas de compte ?  <a href="{{ route('register') }}">Inscrivez-vous ici</a></p>
        </div>
    </div>
</div>

<style>
.login-page {
    background: linear-gradient(135deg, #2d3436, #d35400); /* Charcoal gray to burnt orange gradient */
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.login-box {
    background-color: #fff; /* White background for the login box */
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    padding: 40px;
    max-width: 400px;
    width: 100%;
    text-align: center;
}

.login-title {
    font-family: 'Poppins', sans-serif;
    color: #2d3436; /* Charcoal gray for title */
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.login-subtitle {
    color: #636e72; /* Muted gray for subtitle */
    font-size: 1rem;
    font-weight: 300;
    margin-bottom: 20px;
}

.login-errors {
    background-color: #ff7675; /* Soft coral for error background */
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
    text-align: left;
}

.login-errors ul {
    margin: 0;
    padding-left: 20px;
}

.login-errors li {
    font-size: 0.9rem;
}

.login-form .form-group {
    margin-bottom: 20px;
    text-align: left;
}

.login-form label {
    color: #2d3436; /* Charcoal gray for labels */
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 5px;
    display: block;
}

.login-form input {
    width: 100%;
    padding: 12px;
    border: 1px solid #dfe6e9; /* Light gray border */
    border-radius: 5px;
    font-size: 1rem;
    color: #2d3436; /* Charcoal gray text */
    background-color: #f7f1e3; /* Creamy off-white background */
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.login-form input:focus {
    outline: none;
    border-color: #e67e22; /* Warm pumpkin orange on focus */
    box-shadow: 0 0 5px rgba(230, 126, 34, 0.3); /* Subtle orange glow */
}

.login-form .btn-login {
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

.login-form .btn-login:hover {
    background-color: #d35400; /* Darker orange on hover */
    transform: translateY(-2px); /* Slight lift effect */
}

.alternative-action {
    margin-top: 20px;
}

.alternative-action p {
    color: #636e72; /* Muted gray for text */
    font-size: 0.9rem;
}

.alternative-action a {
    color: #ff7675; /* Soft coral for link */
    font-weight: 500;
    text-decoration: none;
    transition: color 0.3s ease;
}

.alternative-action a:hover {
    color: #e74c3c; /* Darker coral on hover */
    text-decoration: underline;
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .login-box {
        padding: 20px;
    }
    .login-title {
        font-size: 1.5rem;
    }
    .login-subtitle {
        font-size: 0.9rem;
    }
}
</style>
@endsection
