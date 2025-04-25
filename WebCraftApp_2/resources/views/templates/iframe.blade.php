<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prévisualisation Responsive</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lien vers les icônes Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Lien vers Google Fonts pour Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar">
        <a href="{{ url('/templates') }}" class="btn btn-secondary">Retour aux modèles</a>
        <div class="nav-buttons">
            <button onclick="changePreview('desktop')" title="Bureau" class="preview-btn">
                <i class="bi bi-display"></i>
            </button>
            <button onclick="changePreview('tablet')" title="Tablette" class="preview-btn">
                <i class="bi bi-tablet"></i>
            </button>
            <button onclick="changePreview('mobile')" title="Mobile" class="preview-btn">
                <i class="bi bi-phone"></i>
            </button>
        </div>
        <div>
            <a href="{{ url('/builder') }}" class="btn btn-primary">Commencez votre design</a>
        </div>
    </nav>

    <!-- Conteneur principal -->
    <div class="main-content">
        <div id="preview-container">
            <iframe id="preview-frame" src="{{ url($template->file_path) }}" class="desktop" frameborder="0"></iframe>
        </div>
    </div>

    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function changePreview(mode) {
            const frame = document.getElementById("preview-frame");

            // Supprimer toutes les classes actuelles
            frame.className = "";

            // Ajouter la classe correspondant au mode
            switch (mode) {
                case "desktop":
                    frame.classList.add("desktop");
                    break;
                case "tablet":
                    frame.classList.add("tablet");
                    break;
                case "mobile":
                    frame.classList.add("mobile");
                    break;
                default:
                    console.error("Mode inconnu :", mode);
            }
        }
    </script>

    <style>
        /* Styles globaux */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f1e3; /* Creamy off-white background */
            color: #2d3436; /* Charcoal gray text */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #2d3436, #d35400); /* Charcoal gray to burnt orange gradient */
            padding: 15px 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .btn-secondary {
            background-color: #636e72; /* Muted gray */
            border: none;
            color: #f7f1e3; /* Creamy off-white */
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .navbar .btn-secondary:hover {
            background-color: #ff7675; /* Soft coral */
            transform: translateY(-2px); /* Slight lift */
            color: #fff;
        }

        .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .nav-buttons .preview-btn {
            background-color: #f7f1e3; /* Creamy off-white */
            color: #2d3436; /* Charcoal gray */
            border: 1px solid #dfe6e9; /* Light gray border */
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
        }

        .nav-buttons .preview-btn:hover {
            background-color: #ff7675; /* Soft coral */
            color: #fff;
            transform: translateY(-2px); /* Slight lift */
        }

        .navbar .btn-primary {
            background-color: #e67e22; /* Warm pumpkin orange */
            border: none;
            color: #fff;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .navbar .btn-primary:hover {
            background-color: #d35400; /* Darker orange */
            transform: translateY(-2px); /* Slight lift */
        }

        /* Conteneur principal */
        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #fff; /* White background for contrast */
        }

        #preview-container {
            background: #f7f1e3; /* Creamy off-white */
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15); /* Deeper shadow */
            display: inline-block;
        }

        iframe {
            border: 1px solid #dfe6e9; /* Light gray border */
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        /* Résolutions */
        .desktop {
            width: 1200px;
            height: 800px;
        }

        .tablet {
            width: 768px;
            height: 1024px;
        }

        .mobile {
            width: 375px;
            height: 667px;
        }

        /* Responsive Adjustments */
        @media (max-width: 1200px) {
            .desktop {
                width: 100%;
                height: 600px;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 10px;
            }
            .nav-buttons {
                justify-content: center;
            }
            .tablet {
                width: 100%;
                height: 800px;
            }
        }

        @media (max-width: 576px) {
            .mobile {
                width: 100%;
                height: 500px;
            }
            .navbar .btn {
                padding: 8px 15px;
                font-size: 0.9rem;
            }
            .nav-buttons .preview-btn {
                padding: 8px;
            }
        }
    </style>
</body>
</html>
