<x-app-layout>
    <div x-data="{ open: true }" class="flex min-h-screen">
        <!-- buka/tutp sidebar -->
        <button @click="open = !open" class="p-2 bg-gray-800 text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Sidebar -->
        <div x-show="open" class="w-64 bg-gray-800 text-white min-h-screen transition-all duration-300">
            @include('partials.sidebar')
        </div>

</x-app-layout>

