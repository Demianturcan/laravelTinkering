@include('layouts.nav')
<section class="flex flex-col min-h-screen bg-gray-100 p-6">
    <div class="flex-grow">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Show Details</h1>

            <div class="mb-4">
                <strong class="block text-gray-700">ID:</strong>
                <p class="mt-1">{{ $show->id }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">Title:</strong>
                <p class="mt-1">{{ $show->title }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">Rating:</strong>
                <p class="mt-1">{{ $show->rating }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">Active:</strong>
                <p class="mt-1">{{ $show->is_active ? 'Yes' : 'No' }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">Release Date:</strong>
                <p class="mt-1">{{ $show->release_date }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">Description:</strong>
                <p class="mt-1">{{ $show->description }}</p>
            </div>

            <a href="/shows" class="text-gray-500 mt-4 no-underline bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded inline-block">Return</a>
            <a href="{{ route('shows.edit', $show->id) }}" class="text-gray-50 mt-4 no-underline bg-pink-800 hover:bg-pink-700 px-4 py-2 rounded inline-block">Edit</a>
        </div>
    </div>
</section>
@include('layouts.footer')
