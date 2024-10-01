@extends('layouts.app')

@section('content')
<section class="services py-16 bg-gray-100">
    <div class="container mx-auto flex flex-col">
        <h2 class="text-4xl font-bold text-center mb-12">Nos Services</h2>
        <div class="flex-grow flex flex-wrap justify-center items-start gap-8">
            @foreach($services as $service)
                <a href="{{ route('services.show', $service->id) }}" class="service-card bg-white rounded-lg shadow-lg p-6 text-center transition-transform duration-300 transform hover:scale-105" data-aos="fade-up">
                    <div class="icon mb-4 text-4xl text-orange-500">
                        <i class="{{ $service->icon }}"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-2">{{ $service->title }}</h3>
                    <p class="text-gray-600">{{ $service->description }}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
