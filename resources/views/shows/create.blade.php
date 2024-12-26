@include('layouts.nav')

<section class="flex flex-col min-h-screen bg-gray-100 p-6">
    <div class="flex-grow">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Add New Show</h1>
            <form action="{{ route('shows.store') }}" method="post">
                @csrf
                @method('post')
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                    <input type="text" name="title" value="{{ old('title', 'Serie per defecte') }}" required
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                           placeholder="Enter show title">
                </div>

                <div class="mb-4">
                    <label for="rating" class="block text-sm font-medium text-gray-700">Rating:</label>
                    <input type="number" step="0.1" name="rating" value="{{ old('rating', 5.0) }}" required
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                           placeholder="Enter rating (e.g., 8.5)">
                </div>

                <div class="mb-4">
                    <label for="is_active" class="block text-gray-700">Active:</label>
                    <select name="is_active" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                        <option value="1" {{ old('is_active', 1) == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('is_active', 1) == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="release_date" class="block text-sm font-medium text-gray-700">Release Date:</label>
                    <input type="date" name="release_date" value="{{ old('release_date', '2023-01-01') }}" required
                           class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                    <textarea name="description" required
                              class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                              placeholder="Enter show description">{{ old('description', 'Pellentesque nec ullamcorper ipsum. Aenean a euismod lectus. Proin vitae sem in risus efficitur pharetra hendrerit vitae libero. Duis tincidunt malesuada turpis.') }}</textarea>
                </div>

                <button type="submit" class="w-full bg-pink-800 text-white px-4 py-2 rounded hover:bg-pink-700">Add Show
                </button>
            </form>
            <a href="/shows" class="text-gray-500 mt-4 no-underline bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded inline-block">Return</a>
        </div>
    </div>
</section>

@include('layouts.footer')
