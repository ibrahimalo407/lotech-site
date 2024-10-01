<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - LoTech</title>
    <!-- Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-gray-100 text-gray-900">

    <header class="header">
        <div class="container">
            <a href="/" class="logo">
                <img src="{{ asset('images/lotech.png') }}" alt="LoTech Logo" />
            </a>



            <nav class="nav desktop-nav">
                <ul>
                    <li><a href="/" class="nav-link"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><a href="/services" class="nav-link"><i class="fas fa-cogs"></i> Services</a></li>
                    <li><a href="/about" class="nav-link"><i class="fas fa-info-circle"></i> À propos</a></li>
                    <li><a href="/contact" class="nav-link"><i class="fas fa-envelope"></i> Contact</a></li>
                </ul>
            </nav>

            <div class="cta">
                <a href="/contact" class="cta-button"><i class="fas fa-paper-plane"></i> Demander un Devis</a>
            </div>

            <div class="mobile-menu">
                <button id="mobile-menu-button" class="menu-button" aria-label="Menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="mobile-menu-content">
            <ul>
                <li><a href="/" class="mobile-nav-link"><i class="fas fa-home"></i> Accueil</a></li>
                <li><a href="/services" class="mobile-nav-link"><i class="fas fa-cogs"></i> Services</a></li>
                <li><a href="/about" class="mobile-nav-link"><i class="fas fa-info-circle"></i> À propos</a></li>
                <li><a href="/contact" class="mobile-nav-link"><i class="fas fa-envelope"></i> Contact</a></li>

            </ul>
        </div>
    </header>

    <br>
    <br>
    <br>
    <br>

    <main class="pt-16">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer py-5 text-center">
        <p class="footer-text">&copy; 2024 LoTech - Tous droits réservés</p>
        <div class="footer-links">
            <a href="#" class="footer-link">Politique de confidentialité</a>
            <a href="#" class="footer-link">Conditions d'utilisation</a>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('show'); // Alterner l'affichage du menu mobile
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.nos-projet-card');

            // Fonction pour activer les cartes avec animation
            function activateCards() {
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.classList.add('active'); // Ajouter la classe active pour l'animation
                    }, index * 100); // Délai pour chaque carte
                });
            }

            // // Fonction pour désactiver les cartes
            // function deactivateCards() {
            //     cards.forEach((card) => {
            //         card.classList.remove('active'); // Enlever la classe active pour réinitialiser
            //     });
            // }

            // Activer les cartes au chargement de la page
            activateCards();

            // Exemple de désactivation après un certain temps (5 secondes)
            setTimeout(() => {
                deactivateCards();
            }, 5000); // Modifier ou supprimer cette ligne selon vos besoins
        });
    </script>
</body>

</html>
