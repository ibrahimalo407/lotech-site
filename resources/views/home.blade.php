@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <!-- Hero Section -->

    <section class="hero">
        <div class="tm-page-wrap mx-auto">
            <div class="tm-banner-bg">
                <div class="tm-banner-overlay"></div>
                <div class="container d-flex flex-column justify-content-center" style="height: 100vh;">
                    <div class="row tm-banner-row tm-banner-row-header">
                        <div class="col-xs-12">
                            <h1 class="tm-banner-title">Bienvenue chez LoTech</h1>
                            <p class="tm-banner-subtitle">Votre partenaire pour le développement web et logiciel</p>
                        </div>
                    </div>

                    <div class="row tm-banner-row" id="tm-section-search">
                        <form action="" method="get" class="tm-search-form">
                            <div class="form-row tm-search-form-row">
                                <div class="tm-form-group tm-form-group-1">
                                    <label for="inputCity">Votre Projet</label>
                                    <input name="project" type="text" class="form-control" id="inputCity"
                                        placeholder="Décrivez votre projet..." required>
                                </div>
                                <div class="tm-form-group tm-form-group-2">
                                    <label for="inputService">Choisissez un Service</label>
                                    <select name="service" class="form-control tm-select" id="inputService" required>
                                        <option value="web-development" selected>Développement Web</option>
                                        <option value="software-development">Développement Logiciel</option>
                                        <option value="consulting">Consulting</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row tm-search-form-row">
                                <div class="tm-form-group tm-form-group-1">
                                    <label for="inputEmail">Email</label>
                                    <input name="email" type="email" class="form-control" id="inputEmail"
                                        placeholder="Votre email" required>
                                </div>
                                <div class="tm-form-group tm-form-group-2">
                                    <label for="inputPhone">Téléphone</label>
                                    <input name="phone" type="tel" class="form-control" id="inputPhone"
                                        placeholder="Votre téléphone" required>
                                </div>
                            </div>

                            <br>
                            <div class="form-row tm-search-form-row">
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-primary tm-btn tm-btn-search text-uppercase">Demandez un
                                        Devis</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div style="height: 130px"></div>
    {{-- À Propos --}}
    <section class="about py-5 text-center">
        <h2 class="about-title">À Propos de Nous</h2>
        <p class="about-description">
            Chez <strong>LoTech</strong>, nous sommes une équipe passionnée par l'innovation et dédiée à offrir
            des solutions de qualité. Notre mission est d'accompagner nos clients vers la réussite, en créant des produits
            et services sur mesure, adaptés aux besoins actuels du marché. Nous croyons fermement que l'innovation et la
            collaboration sont les clés du succès, et nous travaillons sans relâche pour que chaque projet reflète ces
            valeurs.
        </p>
        <div class="team">
            <div class="team-member">
                <img src="{{ asset('images/ibrahima.jpg') }}" alt="Jean Dupont - CEO" class="team-image">
                <h3>LO Thierno Daha</h3>
                <p>CEO</p>
                <p>Daha est un leader visionnaire avec plus de 10 ans d'expérience dans l'industrie. Il dirige notre
                    entreprise vers de nouveaux sommets.</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/ibrahima.jpg') }}" alt="Marie Curie - Développeuse" class="team-image">
                <h3>LO Ibrahima</h3>
                <p>Développeur</p>
                <p>Ibrahima est expert en développement de logiciels, avec une passion pour la création de solutions
                    techniques innovantes et robustes.</p>
            </div>
            
        </div>
    </section>


    {{-- services --}}

    <div style="height: 120px"></div>
    <div class="services">
        <h2 class="services-title">Nos Services</h2>
        <section class="services-container">
            <div class="card">
                <div class="content">
                    <div class="icon"><i class="fa fa-code"></i></div>
                    <div class="title">Développement Web</div>
                    <p>Solutions modernes adaptées à vos besoins.</p>
                </div>
            </div>
            <div class="card active">
                <div class="content">
                    <div class="icon"><i class="fa fa-mobile"></i></div>
                    <div class="title">Développement d'Applications</div>
                    <p>Création d'applications puissantes et conviviales.</p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><i class="fa fa-paint-brush"></i></div>
                    <div class="title">Design Web</div>
                    <p>Conception de sites esthétiques et fonctionnels.</p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><i class="fa fa-laptop"></i></div>
                    <div class="title">Design Réactif</div>
                    <p>Sites adaptés à tous les appareils.</p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><i class="fa fa-line-chart"></i></div>
                    <div class="title">Publicité</div>
                    <p>Stratégies pour maximiser votre visibilité.</p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><i class="fa fa-wordpress"></i></div>
                    <div class="title">WordPress</div>
                    <p>Développement de sites WordPress personnalisés.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Projects Section -->
    <section id="nos-projets" class="nos-projets">
        <div class="nos-projets-container">
            <h2 class="nos-projets-title">Nos Projets</h2>
            <div class="nos-projets-grid">
                <div class="nos-projet-card">
                    <div class="nos-projet-content">
                        <div class="nos-projet-icon">
                            <img src="{{ asset('images/lms-image-education.png') }}" alt="Projet 1"
                                class="nos-projet-image">
                        </div>
                        <h3 class="nos-projet-title">Application Mobile pour Suivi de Projets</h3>
                        <p>Développement d'une application mobile intuitive pour la gestion de projets d'équipe.</p>
                    </div>
                </div>
                <div class="nos-projet-card">
                    <div class="nos-projet-content">
                        <div class="nos-projet-icon">
                            <img src="{{ asset('images/lms-image-education.png') }}" alt="Projet 2"
                                class="nos-projet-image">
                        </div>
                        <h3 class="nos-projet-title">Site Web E-commerce</h3>
                        <p>Création d'un site e-commerce complet et optimisé pour les conversions.</p>
                    </div>
                </div>
                <div class="nos-projet-card">
                    <div class="nos-projet-content">
                        <div class="nos-projet-icon">
                            <img src="{{ asset('images/lms-image-education.png') }}" alt="Projet 3"
                                class="nos-projet-image">
                        </div>
                        <h3 class="nos-projet-title">Système de Gestion de Contenu (CMS)</h3>
                        <p>Développement d'un CMS personnalisé pour la gestion des contenus web.</p>
                    </div>
                </div>
                <div class="nos-projet-card">
                    <div class="nos-projet-content">
                        <div class="nos-projet-icon">
                            <img src="{{ asset('images/lms-image-education.png') }}" alt="Projet 4"
                                class="nos-projet-image">
                        </div>
                        <h3 class="nos-projet-title">Plateforme de Réservation en Ligne</h3>
                        <p>Création d'une plateforme de réservation pour un service de location.</p>
                    </div>
                </div>
                <div class="nos-projet-card">
                    <div class="nos-projet-content">
                        <div class="nos-projet-icon">
                            <img src="{{ asset('images/lms-image-education.png') }}" alt="Projet 5"
                                class="nos-projet-image">
                        </div>
                        <h3 class="nos-projet-title">Développement d'un CRM</h3>
                        <p>Mise en place d'un système CRM pour améliorer la gestion des relations clients.</p>
                    </div>
                </div>
                <div class="nos-projet-card">
                    <div class="nos-projet-content">
                        <div class="nos-projet-icon">
                            <img src="{{ asset('images/lms-image-education.png') }}" alt="Projet 6"
                                class="nos-projet-image">
                        </div>
                        <h3 class="nos-projet-title">Application Web de Gestion de Tâches</h3>
                        <p>Application web pour gérer les tâches et projets avec collaboration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Témoignages --}}
    <section class="testimonials py-5 bg-light text-center">
        <h2 class="testimonials-title">Ce que nos clients disent</h2>
        <div class="testimonials-carousel">
            <div class="testimonial">
                <p>"Un service exceptionnel!"</p>
                <h4>— Alice Martin</h4>
            </div>
            <div class="testimonial">
                <p>"J'ai adoré travailler avec l'équipe!"</p>
                <h4>— Pierre Durand</h4>
            </div>
        </div>
    </section>

    {{-- Blog --}}
    <section class="blog py-5">
        <h2 class="blog-title text-center">Nos Articles Récents</h2>
        <div class="blog-grid">
            <div class="blog-card">
                <h3>Titre de l'Article</h3>
                <p>Un extrait de l'article ici...</p>
                <a href="#" class="read-more">Lire la suite</a>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="faq py-5 bg-light">
        <h2 class="faq-title text-center">Questions Fréquemment Posées</h2>
        <div class="faq-list">
            <div class="faq-item">
                <h3 class="faq-question">Question 1?</h3>
                <p class="faq-answer">Réponse à la question 1.</p>
            </div>
        </div>
    </section>


    <!-- Contact CTA -->
    <section class="contact-cta py-5 bg-light text-center">
        <h2 class="cta-title mb-4">Prêt à démarrer un projet ?</h2>
        <p class="cta-description mb-4">Contactez-nous dès aujourd'hui pour un devis personnalisé.</p>
        <a href="/contact" class="btn btn-primary btn-lg cta-button">Demandez un Devis</a>
    </section>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script>
        // GSAP animations
        gsap.from(".hero h1", {
            duration: 1.5,
            y: -50,
            opacity: 0
        });
        gsap.from(".hero p", {
            duration: 1.5,
            delay: 0.3,
            y: -50,
            opacity: 0
        });
        gsap.from(".hero .btn", {
            duration: 1.5,
            delay: 0.6,
            scale: 0,
            opacity: 0
        });

        // Animate service cards on scroll
        gsap.from(".services-section .card", {
            scrollTrigger: ".services-section",
            duration: 0.5,
            y: 50,
            opacity: 0,
            stagger: 0.2
        });

        // Animate project cards on scroll
        gsap.from(".projects-section .card", {
            scrollTrigger: ".projects-section",
            duration: 0.5,
            y: 50,
            opacity: 0,
            stagger: 0.2
        });
    </script>
@endpush
