<nav class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Main Links -->
            <div class="flex space-x-6 items-center">
                <a href="/" class="text-gray-700 hover:text-indigo-600">Home</a>

                <!-- Books Dropdown -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-indigo-600 focus:outline-none">
                        Books
                    </button>
                    <div class="absolute left-0 mt-2 w-40 bg-white border border-gray-200 shadow-md rounded hidden group-hover:block z-10">
                        <a href="/books" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All Books</a>
                        <a href="/books/new" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Arrivals</a>
                        <a href="/books/popular" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Popular</a>
                        <a href="/books/recommended" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Recommended</a>
                    </div>
                </div>

                <!-- Categories Dropdown -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-indigo-600 focus:outline-none">
                        Categories
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 shadow-md rounded hidden group-hover:block z-10">
                        <a href="/categories/fiction" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Fiction</a>
                        <a href="/categories/non-fiction" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Non-Fiction</a>
                        <a href="/categories/scifi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Science Fiction</a>
                        <a href="/categories/romance" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Romance</a>
                        <a href="/categories/history" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">History</a>
                        <a href="/categories/children" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Children’s</a>
                    </div>
                </div>

                <a href="/authors" class="text-gray-700 hover:text-indigo-600">Authors</a>
                <a href="/my-library" class="text-gray-700 hover:text-indigo-600">My Library</a>
                <a href="/search" class="text-gray-700 hover:text-indigo-600">Search</a>
                <a href="/about" class="text-gray-700 hover:text-indigo-600">About</a>
            </div>

            <!-- Authentication Links -->
            <div class="flex items-center space-x-4">
                @auth
                    <a href="/profile" class="text-gray-700 hover:text-indigo-600">Profile</a>
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="text-gray-700 hover:text-indigo-600">Logout</button>
                    </form>
                @else
                    <a href="/login" class="text-gray-700 hover:text-indigo-600">Login</a>
                    <a href="/register" class="text-gray-700 hover:text-indigo-600">Register</a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-indigo-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                               d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Dropdown -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
        <a href="/" class="block text-gray-700 hover:text-indigo-600">Home</a>

        <div class="border-t border-gray-200 pt-2">
            <span class="text-sm text-gray-500">Books</span>
            <a href="/books" class="block text-gray-700 hover:text-indigo-600 pl-2">All Books</a>
            <a href="/books/new" class="block text-gray-700 hover:text-indigo-600 pl-2">New Arrivals</a>
            <a href="/books/popular" class="block text-gray-700 hover:text-indigo-600 pl-2">Popular</a>
            <a href="/books/recommended" class="block text-gray-700 hover:text-indigo-600 pl-2">Recommended</a>
        </div>

        <div class="border-t border-gray-200 pt-2">
            <span class="text-sm text-gray-500">Categories</span>
            <a href="/categories/fiction" class="block text-gray-700 hover:text-indigo-600 pl-2">Fiction</a>
            <a href="/categories/non-fiction" class="block text-gray-700 hover:text-indigo-600 pl-2">Non-Fiction</a>
            <a href="/categories/scifi" class="block text-gray-700 hover:text-indigo-600 pl-2">Sci-Fi</a>
            <a href="/categories/romance" class="block text-gray-700 hover:text-indigo-600 pl-2">Romance</a>
            <a href="/categories/history" class="block text-gray-700 hover:text-indigo-600 pl-2">History</a>
            <a href="/categories/children" class="block text-gray-700 hover:text-indigo-600 pl-2">Children’s</a>
        </div>

        <a href="/authors" class="block text-gray-700 hover:text-indigo-600">Authors</a>
        <a href="/my-library" class="block text-gray-700 hover:text-indigo-600">My Library</a>
        <a href="/search" class="block text-gray-700 hover:text-indigo-600">Search</a>
        <a href="/about" class="block text-gray-700 hover:text-indigo-600">About</a>

        @auth
            <a href="/profile" class="block text-gray-700 hover:text-indigo-600">Profile</a>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="text-gray-700 hover:text-indigo-600">Logout</button>
            </form>
        @else
            <a href="/login" class="block text-gray-700 hover:text-indigo-600">Login</a>
            <a href="/register" class="block text-gray-700 hover:text-indigo-600">Register</a>
        @endauth
    </div>
</nav>
