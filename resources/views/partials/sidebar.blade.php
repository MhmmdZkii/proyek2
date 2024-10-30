    <!-- resources/views/partials/sidebar.blade.php -->

<div class="min-h-screen flex flex-col bg-gray-800 text-white w-64" style="background-color: #0F1C2F">
    <!-- Logo -->
    <div class="flex items-center justify-center h-16 bg-gray-900">
        <h1 class="text-lg font-semibold"></h1>
    </div>

    <!-- Sidebar Links -->
    <nav class="flex flex-col mt-4" style="background-color: ">
        <a href="{{ route('dashboard') }}" class="px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">
            Home
        </a>
        <a href="" class="px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">
           Add Rooms
        </a>
        <a href="" class="px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">
            Bookings
        </a>
        <a href="" class="px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">
            Kontrol Lampu
        </a>
        <a href="" class="px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">
            About
        </a>
        <a href="{{ route('logout') }}" 
            class="px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        
        <!-- Form Logout -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </nav>
</div>
