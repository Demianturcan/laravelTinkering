@include('layouts.nav')

<section class="flex flex-col min-h-screen bg-gray-100 p-6">
    <div class="flex-grow">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Add New Film</h1>
            <form action="{{ route('films.store') }}" method="post">
                @csrf
                @method('post')
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                    <input type="text" name="title" value="{{ old('title', 'Pel·lícula per defecte') }}" required
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                           placeholder="Enter film title">
                </div>

                <div class="mb-4">
                    <label for="director" class="block text-sm font-medium text-gray-700">Director:</label>
                    <input type="text" name="director" value="{{ old('director', 'Director') }}" required
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                           placeholder="Enter director's name">
                </div>

                <div class="mb-4">
                    <label for="year" class="block text-sm font-medium text-gray-700">Release Year:</label>
                    <input type="number" name="year" value="{{ old('year', 2023) }}" required
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                           placeholder="Enter release year">
                </div>

                <button type="submit" class="w-full bg-pink-800 text-white px-4 py-2 rounded hover:bg-pink-700">Add Film
                </button>
            </form>
            <a href="/films" class="text-gray-500 mt-4 no-underline bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded inline-block">Return</a>
        </div>
    </div>
</section>

@include('layouts.footer')
