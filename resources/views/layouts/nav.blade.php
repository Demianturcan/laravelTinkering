@include('layouts.html_header')

<nav class="bg-gray-100 border-b-[1px] border-rose-700">
    <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center">
        <a href="/"
           class="text-gray-800 font-bold text-2xl mb-4 lg:mb-0 hover:text-rose-700 hover:cursor-pointer no-underline">Projecte
            Laravel
        </a>

        <div class="lg:hidden">
            <button class="text-gray-800 focus:outline-none">
                <svg class="h-6 w-6"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"
                    ></path>
                </svg>
            </button>
        </div>

        <div class="lg:flex lg:flex-row lg:space-x-4 lg:mt-0 mt-4 flex flex-col items-center text-lg">
            <a href="/"
               class="text-gray-800 px-4 py-2 hover:text-rose-700 hover:-translate-y-0.5 no-underline transition-transform duration-300">Home</a>
            <a href="/films"
               class="text-gray-800  px-4 py-2 hover:text-rose-700 hover:-translate-y-0.5 no-underline transition-transform duration-300">Pel·licules</a>
            <a href="/shows"
               class="text-gray-800  px-4 py-2 hover:text-rose-700 hover:-translate-y-0.5 no-underline transition-transform duration-300">Series</a>

        </div>
    </div>

</nav>


