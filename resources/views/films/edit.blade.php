@include('layouts.nav')
<section class="flex flex-col min-h-screen bg-gray-100 p-6">
    <div class="flex-grow">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Edit Film</h1>
            <form action="{{ route('films.update', ['film' => $film->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ ($film->id)}}" class="mt-1 block w-full border border-gray-300 rounded-md p-2">

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Title:</label>
                    <input type="text" name="title" value="{{ ($film->title)}}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>

                <div class="mb-4">
                    <label for="director" class="block text-gray-700">Director:</label>
                    <input type="text" name="director" value="{{ ($film->director) }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>

                <div class="mb-4">
                    <label for="year" class="block text-gray-700">Year:</label>
                    <input type="number" name="year" value="{{ ($film->year) }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>

                <button type="submit" class="w-full bg-pink-800 text-white px-4 py-2 rounded hover:bg-pink-700">Edit</button>
            </form>

            <a href="/films" class="text-gray-500 mt-4 no-underline bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded inline-block">Return</a>
        </div>
    </div>
</section>
@include('layouts.footer')

