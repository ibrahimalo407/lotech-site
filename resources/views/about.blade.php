@extends('layouts.app')

@section('content')
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
@endsection
