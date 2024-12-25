@include('layouts.nav')
<section class="flex flex-col min-h-screen pt-12 bg-gray-100 sm:pt-16">
    <div class="flex-grow">
        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 overflow-x-scroll">
            <h1 class="text-3xl font-bold mb-4">Films</h1>
            <a href="{{ route('films.create') }}"
               class="bg-pink-800 text-white px-4 py-2 rounded hover:bg-pink-700 no-underline mb-4 inline-block">Add New Film</a>
            <div class="overflow-x-auto">
                <table class="min-w-full mt-4 bg- border border-gray-300">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        {{--                        <th class="py-3 px-6 text-left">ID</th>--}}
                        <th class="py-3 px-6 text-left">Title</th>
                        <th class="py-3 px-6 text-left">Director</th>
                        <th class="py-3 px-6 text-left">Year</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                    @forelse ($films as $film)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            {{--                        <td class="py-3 px-6 text-left">{{ $film['id'] }}</td>             --}}
                            <td class="py-3 px-6 text-left">{{ htmlspecialchars($film['title']) }}</td>
                            <td class="py-3 px-6 text-left">{{ htmlspecialchars($film['director']) }}</td>
                            <td class="py-3 px-6 text-left">{{ htmlspecialchars($film['year']) }}</td>
                            <td class="py-3 px-2 text-center flex flex-col sm:flex-row sm:justify-center">
                                <a href="{{ route('films.destroy', $film['id']) }}"
                                   class="text-red-500 hover:text-red-800 mb-2 sm:mb-0 sm:mr-4 no-underline">Delete</a>
                                <a href="{{ route('films.edit', $film['id']) }}"
                                   class="text-gray-50 rounded-sm p-1 hover:bg-blue-700 mb-2 sm:mb-0 sm:mr-4 bg-blue-400 no-underline">Edit</a>
                                <a href="{{ route('films.show', $film['id']) }}"
                                   class="text-gray-50 rounded-sm p-1 hover:bg-blue-700 bg-blue-400 no-underline">Show</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-3 px-6 text-center">No films available.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
