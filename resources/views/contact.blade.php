@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="contact py-5">
        <div class="container text-center">
            <h2 class="contact-title">Contactez-Nous</h2>
            <p class="contact-description">
                Nous sommes là pour répondre à vos questions. N'hésitez pas à nous contacter !
            </p>
        </div>

        <div class="contact-info">
            <div class="info-item">
                <i class="fas fa-phone-alt"></i>
                <h3>Téléphone</h3>
                <p>(+221) 77-755-52-28</p>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>contact@lotech.com</p>
            </div>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Adresse</h3>
                <p>123 Rue de l'Innovation, Paris, France</p>
            </div>
        </div>

        <div class="contact-form-container">
            <form class="contact-form">
                <input type="text" placeholder="Votre Nom" required>
                <input type="email" placeholder="Votre Email" required>
                <textarea placeholder="Votre Message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>

        <div class="map-container">
            <h3>Où Nous Trouver</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.6939811291254!2d-17.291871726024507!3d14.729885573900594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec19fe2b0e371dd%3A0x21f265c821e237b2!2sRestaurant%20la%20Signare%20Rufisque!5e0!3m2!1sfr!2sma!4v1727800920890!5m2!1sfr!2sma"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

@endsection
