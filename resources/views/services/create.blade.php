@extends('layouts.app')

@section('content')
<section class="create-service py-16 bg-gray-100">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-8">Ajouter un Service</h2>

        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-lg">
            @csrf
            
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                <input type="text" name="title" id="title" required class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" required class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="mb-6">
                <label for="icon" class="block text-sm font-medium text-gray-700">Icône (classe Font Awesome)</label>
                <input type="text" name="icon" id="icon" required class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ex: fas fa-star"/>
            </div>

            <div class="mb-6">
                <label for="background_image" class="block text-sm font-medium text-gray-700">Image de Fond</label>
                <input type="file" name="background_image" id="background_image" accept="image/*" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required />
            </div>

            <h3 class="text-2xl font-bold mb-4">Avantages</h3>
            <div id="benefits-container">
                <div class="flex mb-4">
                    <input type="text" name="benefits[]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Description de l'avantage" required />
                    <button type="button" class="ml-2 bg-red-500 text-white px-4 py-2 rounded" onclick="removeBenefit(this)">-</button>
                </div>
            </div>
            <button type="button" class="mt-2 mb-6 bg-blue-500 text-white px-4 py-2 rounded" onclick="addBenefit()">Ajouter un Avantage</button>

            <h3 class="text-2xl font-bold mb-4 mt-8">Étapes de Processus</h3>
            <div id="process-steps-container">
                <div class="flex mb-4">
                    <input type="text" name="process_steps[][title]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Titre de l'étape" required />
                    <textarea name="process_steps[][description]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Description de l'étape" required></textarea>
                    <button type="button" class="ml-2 bg-red-500 text-white px-4 py-2 rounded" onclick="removeProcessStep(this)">-</button>
                </div>
            </div>
            <button type="button" class="mt-2 mb-6 bg-blue-500 text-white px-4 py-2 rounded" onclick="addProcessStep()">Ajouter une Étape</button>

            <h3 class="text-2xl font-bold mb-4 mt-8">Témoignages</h3>
            <div id="testimonials-container">
                <div class="flex mb-4">
                    <textarea name="testimonials[][text]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Texte du témoignage" required></textarea>
                    <input type="text" name="testimonials[][author]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Auteur" required />
                    <button type="button" class="ml-2 bg-red-500 text-white px-4 py-2 rounded" onclick="removeTestimonial(this)">-</button>
                </div>
            </div>
            <button type="button" class="mt-2 mb-6 bg-blue-500 text-white px-4 py-2 rounded" onclick="addTestimonial()">Ajouter un Témoignage</button>

            <h3 class="text-2xl font-bold mb-4 mt-8">Questions Fréquemment Posées</h3>
            <div id="faqs-container">
                <div class="flex mb-4">
                    <input type="text" name="faqs[][question]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Question" required />
                    <textarea name="faqs[][answer]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Réponse" required></textarea>
                    <button type="button" class="ml-2 bg-red-500 text-white px-4 py-2 rounded" onclick="removeFaq(this)">-</button>
                </div>
            </div>
            <button type="button" class="mt-2 mb-6 bg-blue-500 text-white px-4 py-2 rounded" onclick="addFaq()">Ajouter une FAQ</button>

            <div class="mt-8 text-center">
                <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded">Créer le Service</button>
            </div>
        </form>
    </div>
</section>

<script>
    function addBenefit() {
        const container = document.getElementById('benefits-container');
        const newBenefit = document.createElement('div');
        newBenefit.classList.add('flex', 'mb-4');
        newBenefit.innerHTML = `
            <input type="text" name="benefits[]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Description de l'avantage" required />
            <button type="button" class="ml-2 bg-red-500 text-white px-4 py-2 rounded" onclick="removeBenefit(this)">-</button>
        `;
        container.appendChild(newBenefit);
    }

    function removeBenefit(button) {
        button.parentElement.remove();
    }

    function addProcessStep() {
        const container = document.getElementById('process-steps-container');
        const newStep = document.createElement('div');
        newStep.classList.add('flex', 'mb-4');
        newStep.innerHTML = `
            <input type="text" name="process_steps[][title]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Titre de l'étape" required />
            <textarea name="process_steps[][description]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Description de l'étape" required></textarea>
            <button type="button" class="ml-2 bg-red-500 text-white px-4 py-2 rounded" onclick="removeProcessStep(this)">-</button>
        `;
        container.appendChild(newStep);
    }

    function removeProcessStep(button) {
        button.parentElement.remove();
    }

    function addTestimonial() {
        const container = document.getElementById('testimonials-container');
        const newTestimonial = document.createElement('div');
        newTestimonial.classList.add('flex', 'mb-4');
        newTestimonial.innerHTML = `
            <textarea name="testimonials[][text]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Texte du témoignage" required></textarea>
            <input type="text" name="testimonials[][author]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Auteur" required />
            <button type="button" class="ml-2 bg-red-500 text-white px-4 py-2 rounded" onclick="removeTestimonial(this)">-</button>
        `;
        container.appendChild(newTestimonial);
    }

    function removeTestimonial(button) {
        button.parentElement.remove();
    }

    function addFaq() {
        const container = document.getElementById('faqs-container');
        const newFaq = document.createElement('div');
        newFaq.classList.add('flex', 'mb-4');
        newFaq.innerHTML = `
            <input type="text" name="faqs[][question]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Question" required />
            <textarea name="faqs[][answer]" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Réponse" required></textarea>
            <button type="button" class="ml-2 bg-red-500 text-white px-4 py-2 rounded" onclick="removeFaq(this)">-</button>
        `;
        container.appendChild(newFaq);
    }

    function removeFaq(button) {
        button.parentElement.remove();
    }
</script>
@endsection
