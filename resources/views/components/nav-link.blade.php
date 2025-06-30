<nav class=" pl-10 ">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <!-- Left -->
      <div class="flex items-center space-x-10">
        <!-- Replace this with your logo elsewhere -->
        <!-- Navigation links -->
        <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">Catalog</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">Authors</a>

        <!-- Genres Dropdown -->
        <div class="relative space-x-10">
          <button id="genres-btn"
            class="text-gray-700 hover:text-blue-600 flex items-center focus:outline-none">
            Genres
            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" >
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="genres-menu"
            class="absolute left-0 mt-1 w-40 bg-white border rounded shadow-xl hidden z-10"
            style="margin-top: 0.3rem;"> <!-- small gap -->
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Fiction</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Non-fiction</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Sci-Fi</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Biography</a>
          </div>
        </div>
      </div>

      <!-- Right (Account) -->
      <div class="flex items-center ml-10">
        <div class="relative">
          <button id="account-btn"
            class="text-gray-700 hover:text-blue-600 flex items-center focus:outline-none">
            Account
            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" >
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="account-menu"
            class="absolute right-0 mt-1 w-40 bg-white border rounded shadow-xl hidden z-10"
            style="margin-top: 0.3rem;"> <!-- small gap -->
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Login</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Register</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
          </div>
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="flex items-center sm:hidden">
        <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="sm:hidden hidden px-2 pt-2 pb-3 space-y-1 border-t">
    <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Home</a>
    <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Catalog</a>
    <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Authors</a>

    <!-- Mobile Genres dropdown -->
    <details class="group ml-5">
      <summary class="px-3 py-2 rounded cursor-pointer text-gray-700 hover:bg-gray-100 flex justify-between items-center">
        Genres
        <svg class="ml-2 h-4 w-4 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </summary>
      <div class="pl-4 mt-1 space-y-1">
        <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Fiction</a>
        <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Non-fiction</a>
        <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Sci-Fi</a>
        <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Biography</a>
      </div>
    </details>

    <!-- Mobile Account dropdown -->
    <details class="group mt-2">
      <summary class="px-3 py-2 rounded cursor-pointer text-gray-700 hover:bg-gray-100 flex justify-between items-center">
        Account
        <svg class="ml-2 h-4 w-4 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </summary>
      <div class="pl-4 mt-1 space-y-1">
        <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Login</a>
        <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Register</a>
        <a href="#" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100">Profile</a>
      </div>
    </details>
  </div>

  <script>
    // Mobile menu toggle
    const mobileBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Dropdown toggle function
    function setupDropdown(btnId, menuId) {
      const btn = document.getElementById(btnId);
      const menu = document.getElementById(menuId);

      btn.addEventListener('click', (e) => {
        e.stopPropagation(); // prevent document click handler
        // Toggle this menu
        const isHidden = menu.classList.contains('hidden');
        // Close all dropdowns first
        document.querySelectorAll('.dropdown-menu').forEach(m => m.classList.add('hidden'));
        if (isHidden) {
          menu.classList.remove('hidden');
        } else {
          menu.classList.add('hidden');
        }
      });
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', () => {
      document.querySelectorAll('.dropdown-menu').forEach(m => m.classList.add('hidden'));
    });

    // Setup dropdowns
    setupDropdown('genres-btn', 'genres-menu');
    setupDropdown('account-btn', 'account-menu');

    // Add class to dropdown menus for easier selection
    document.getElementById('genres-menu').classList.add('dropdown-menu');
    document.getElementById('account-menu').classList.add('dropdown-menu');
  </script>
</nav>
