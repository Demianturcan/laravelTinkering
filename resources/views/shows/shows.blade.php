@include('layouts.nav')
<section class="flex flex-col min-h-screen pt-12 bg-gray-100 sm:pt-16">
    <div class="flex-grow">
        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 overflow-x-scroll">
            <h1 class="text-3xl font-bold mb-4">Shows</h1>
            <a href="{{ route('shows.create') }}"
               class="bg-pink-800 text-white px-4 py-2 rounded hover:bg-pink-700 no-underline mb-4 inline-block">Add New Show</a>
            <div class="overflow-x-auto">
                <table class="min-w-full mt-4 bg-white border border-gray-300">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
{{--                        <th class="py-3 px-6 text-left">ID</th>--}}
                        <th class="py-3 px-6 text-left">Title</th>
                        <th class="py-3 px-6 text-left">Rating</th>
                        <th class="py-3 px-6 text-left">Active</th>
                     <th class="py-3 px-6 text-left">Release Date</th>
{{--                        <th class="py-3 px-6 text-left">Description</th>--}}
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                    @forelse ($shows as $show)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
{{--                            <td class="py-3 px-6 text-left">{{ $show->id }}</td>--}}
                            <td class="py-3 px-6 text-left">{{ $show->title }}</td>
                            <td class="py-3 px-6 text-left">{{ $show->rating }}</td>
                            <td class="py-3 px-6 text-left">{{ $show->is_active ? 'Yes' : 'No' }}</td>
                        <td class="py-3 px-6 text-left">{{ $show->release_date }}</td>
{{--                            <td class="py-3 px-6 text-left">{{ $show->description }}</td>--}}
                            <td class="py-3 px-2 text-center flex flex-col sm:flex-row sm:justify-center">
                                <a href="{{ route('shows.destroy', $show->id) }}"
                                   class="text-red-500 hover:text-red-800 mb-2 sm:mb-0 sm:mr-4 no-underline">Delete</a>
                                <a href="{{ route('shows.edit', $show->id) }}"
                                   class="text-gray-50 rounded-sm p-1 hover:bg-blue-700 mb-2 sm:mb-0 sm:mr-4 bg-blue-400 no-underline">Edit</a>
                                <a href="{{ route('shows.show', $show->id) }}"
                                   class="text-gray-50 rounded-sm p-1 hover:bg-blue-700 bg-blue-400 no-underline">Show</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-3 px-6 text-center">No shows available.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
