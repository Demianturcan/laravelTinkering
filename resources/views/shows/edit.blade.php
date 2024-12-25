@include('layouts.nav')
<section class="flex flex-col min-h-screen bg-gray-100 p-6">
    <div class="flex-grow">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Edit Show</h1>
            <form action="{{ route('shows.update', ['show' => $show->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ ($show->id) }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2">

                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title:</label>
                    <input type="text" name="title" value="{{ ($show->title) }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>

                <div class="mb-4">
                    <label for="rating" class="block text-gray-700">Rating:</label>
                    <input type="text" name="rating" value="{{ ($show->rating) }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>

                <div class="mb-4">
                    <label for="is_active" class="block text-gray-700">Active:</label>
                    <select name="is_active" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                        <option value="1" {{ $show->is_active ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ !$show->is_active ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="release_date" class="block text-gray-700">Release Date:</label>
                    <input type="date" name="release_date" value="{{ ($show->release_date) }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description:</label>
                    <textarea name="description" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>{{ ($show->description) }}</textarea>
                </div>

                <button type="submit" class="w-full bg-pink-800 text-white px-4 py-2 rounded hover:bg-pink-700">Edit</button>
            </form>

            <a href="/shows" class="text-gray-500 mt-4 no-underline bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded inline-block">Return</a>
        </div>
    </div>
</section>
@include('layouts.footer')