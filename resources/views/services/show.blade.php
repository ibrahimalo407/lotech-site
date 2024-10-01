@extends('layouts.app')

@section('content')
    <section class="service-detail py-16 bg-gray-100">
        <div class="relative">
            <img src="{{ asset('storage/' . $service->background_image) }}" alt="{{ $service->title }}"
                class="w-full h-64 object-cover mb-8">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="container mx-auto relative z-10 text-white text-center">
                <h2 class="text-4xl font-bold mb-4">{{ $service->title }}</h2>
                <p class="text-lg">{{ $service->description }}</p>
            </div>
        </div>

        <div class="container mx-auto mt-12">
            <div class="section">
                <h3 class="section-title">Avantages Clés</h3>
                <ul class="list-disc list-inside mb-8">
                    @foreach ($service->benefits as $benefit)
                        <li class="text-gray-700">{{ $benefit->description }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="container mx-auto mt-12">
            <div class="section">
                <h3 class="section-title">Comment Nous Travaillons</h3>
                <div class="flex flex-col md:flex-row">
                    @foreach ($service->process_steps as $step)
                        <div class="step custom-step mb-4 md:mb-0 md:w-1/3 mx-2">
                            <h4 class="font-semibold text-lg mb-2">{{ $step['title'] }}</h4>
                            <p class="text-gray-600">{{ $step['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-12">
            <div class="section">
                <h3 class="section-title">Demandez un Devis</h3>
                <form action="{{ route('request.quote', $service->id) }}" method="POST" class="form-custom">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Votre Nom</label>
                        <input type="text" name="name" id="name" required class="input-custom" />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Votre Email</label>
                        <input type="email" name="email" id="email" required class="input-custom" />
                    </div>
                    <button type="submit" class="button-custom">Demander un Devis</button>
                </form>
            </div>
        </div>

        <div class="container mx-auto mt-12">
            <div class="section">
                <h3 class="section-title">Témoignages</h3>
                <div class="flex flex-wrap">
                    @foreach ($service->testimonials as $testimonial)
                        <div class="testimonial mb-4 md:w-1/3 mx-2">
                            <blockquote class="italic text-gray-600">"{{ $testimonial->text }}"</blockquote>
                            <p class="mt-2 text-right font-semibold">{{ $testimonial->author }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-12">
            <div class="section">
                <h3 class="section-title">Questions Fréquemment Posées</h3>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <ul>
                        @foreach ($service->faqs as $faq)
                            <li class="mb-4">
                                <h4 class="font-semibold">{{ $faq->question }}</h4>
                                <p class="text-gray-600">{{ $faq->answer }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('services.index') }}" class="cta-button">Retour aux Services</a>
        </div>
    </section>
@endsection
