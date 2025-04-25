<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="{{ url('/') }}">WebCraft</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="{{ url('/') }}">Accueil</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="{{ url('/features') }}">Fonctionnalités</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="{{ url('/contact') }}">Contact</a>
                </li>
                <li class="nav-item me-3">
                    <a class="btn btn-outline-light text-white" href="{{ url('/login') }}">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary text-white" href="{{ route('register') }}">Inscription</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
</style>
