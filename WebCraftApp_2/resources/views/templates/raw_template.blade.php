<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $template->nom ?? 'Template 1' }}</title>
    
    <!-- Inclure les styles CSS directement (sans utiliser asset()) -->
    <link href="css/temp1.css" rel="stylesheet" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    
    <!-- Inclure les polices et autres ressources externes -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
</head>
<body>
    <header class="masthead">
    
        <!-- Navigation (OUTSIDE inner container!) -->
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
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#services">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#contact">Contact</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    
        <!-- Masthead Content (Inside container) -->
        <div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 70vh;">
            <div class="masthead-subheading">{{ $componentsData['Masthead']['subheading'] ?? 'Welcome To Our Game!' }}</div>
            <div class="masthead-heading">{{ $componentsData['Masthead']['heading'] ?? 'It\'s Nice To Meet You' }}</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#">{{ $componentsData['Masthead']['buttonText'] ?? 'Join Us' }}</a>
        </div>
    </header>
    
    <!-- Services Section -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">{{ $componentsData['Services']['heading'] ?? 'Services' }}</h2>
                <h3 class="section-subheading text-muted">{{ $componentsData['Services']['subheading'] ?? 'Lorem ipsum dolor sit amet consectetur.' }}</h3>
            </div>
            <div class="row text-center">
                @if(isset($componentsData['Services']['services']))
                    @foreach($componentsData['Services']['services'] as $service)
                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x "></i>
                                <i class="{{ $service['icon'] ?? 'fas fa-star' }} fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">{{ $service['title'] ?? 'Service' }}</h4>
                            <p class="text-muted">{{ $service['description'] ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.' }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x "></i>
                            <i class="fas fa-heart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x "></i>
                            <i class="fas fa-star fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x "></i>
                            <i class="fas fa-rocket fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    
    <!-- Portfolio Section -->
    <section class="page-section" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">{{ $componentsData['Portfolio']['heading'] ?? 'Portfolio' }}</h2>
                <h3 class="section-subheading text-muted">{{ $componentsData['Portfolio']['subheading'] ?? 'Lorem ipsum dolor sit amet consectetur.' }}</h3>
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
                                    <img class="img-fluid" src="{{ $item['image'] ?? 'assets/img/portfolio/1.jpg' }}" alt="{{ $item['captionHeading'] ?? 'Portfolio Item' }}">
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">{{ $item['captionHeading'] ?? 'Project Name' }}</div>
                                    <div class="portfolio-caption-subheading text-muted">{{ $item['captionSubheading'] ?? 'Category' }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Default Portfolio Items -->
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="#">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="Threads">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Threads</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <!-- Copy the other 5 portfolio items here -->
                    <!-- For brevity, I've included just one, but you'd want to include all 6 default items -->
                @endif
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">{{ $componentsData['About']['heading'] ?? 'About' }}</h2>
                <h3 class="section-subheading text-muted">{{ $componentsData['About']['subheading'] ?? 'Lorem ipsum dolor sit amet consectetur.' }}</h3>
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
                @else
                    <!-- Default Timeline Items -->
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="Our Humble Beginnings">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <!-- Add the other timeline items here -->
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
    
    <!-- Team Section -->
    <section class="page-section" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">{{ $componentsData['Team']['heading'] ?? 'Our Amazing Team' }}</h2>
                <h3 class="section-subheading text-muted">{{ $componentsData['Team']['subheading'] ?? 'Lorem ipsum dolor sit amet consectetur.' }}</h3>
            </div>
            <div class="row">
                @if(isset($componentsData['Team']['members']))
                    @foreach($componentsData['Team']['members'] as $member)
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ $member['image'] ?? 'assets/img/team/1.jpg' }}" alt="{{ $member['name'] ?? 'Team member' }}">
                                <h4>{{ $member['name'] ?? 'Team Member' }}</h4>
                                <p class="text-muted">{{ $member['role'] ?? 'Role' }}</p>
                                <a class="btn btn-dark btn-social mx-2" href="{{ $member['social']['twitter'] ?? '#' }}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="{{ $member['social']['facebook'] ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="{{ $member['social']['linkedin'] ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Default Team Members -->
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="Parveen Anand">
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <!-- Add the other team members here -->
                @endif
            </div>
        </div>
    </section>
    
    <!-- Clients/Logos Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                @if(isset($componentsData['Clients']['logos']))
                    @foreach($componentsData['Clients']['logos'] as $logo)
                        <div class="col-md-3 col-sm-6 my-3">
                            <a href="#">
                                <img class="img-fluid img-brand d-block mx-auto" 
                                     src="{{ $logo['image'] ?? 'assets/img/logos/microsoft.svg' }}" 
                                     alt="{{ $logo['alt'] ?? 'Logo client' }}" 
                                     aria-label="{{ $logo['aria_label'] ?? 'Logo client' }}">
                            </a>
                        </div>
                    @endforeach
                @else
                    <!-- Default Client Logos -->
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#">
                            <img class="img-fluid img-brand d-block mx-auto" 
                                 src="assets/img/logos/microsoft.svg" 
                                 alt="Microsoft Logo" 
                                 aria-label="Microsoft Logo">
                        </a>
                    </div>
                    <!-- Add the other logos here -->
                @endif
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">
                    {{ $componentsData['Footer']['copyright'] ?? 'Copyright © Your Website ' . date('Y') }}
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    @if(isset($componentsData['Footer']['social_links']))
                        <a class="btn btn-dark btn-social mx-2" href="{{ $componentsData['Footer']['social_links']['twitter'] ?? '#!' }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="{{ $componentsData['Footer']['social_links']['facebook'] ?? '#!' }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="{{ $componentsData['Footer']['social_links']['linkedin'] ?? '#!' }}"><i class="fab fa-linkedin-in"></i></a>
                    @else
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    @endif
                </div>
                <div class="col-lg-4 text-lg-end">
                    @if(isset($componentsData['Footer']['footer_links']))
                        <a class="link-dark text-decoration-none me-3" href="{{ $componentsData['Footer']['footer_links']['privacy_policy'] ?? '#!' }}">Politique de confidentialité</a>
                        <a class="link-dark text-decoration-none" href="{{ $componentsData['Footer']['footer_links']['terms_of_use'] ?? '#!' }}">Conditions d'utilisation</a>
                    @else
                        <a class="link-dark text-decoration-none me-3" href="#!">Politique de confidentialité</a>
                        <a class="link-dark text-decoration-none" href="#!">Conditions d'utilisation</a>
                    @endif
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scriptsTemp1.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script>
        // Ici, vous pouvez ajouter tout le JavaScript nécessaire au fonctionnement du site
        document.addEventListener('DOMContentLoaded', function() {
            // Code JavaScript pour l'interactivité du site
        });
    </script>
</body>
</html>