<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Atrace - E-commerce Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom scrollbar and additional styling */
    .input-email::-webkit-input-placeholder {
      color: #d6d6d6;
    }
    .line-clamp-2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
    /* Custom colors for Tailwind */
    .bg-atrace-orange { background-color: #ff7d00; }
    .bg-atrace-yellow { background-color: #fff068; }
    .text-atrace-orange { color: #ff7d00; }
    .text-atrace-yellow { color: #fff068; }
    .border-atrace-orange { border-color: #ff7d00; }
  </style>
</head>
<body class="bg-[#fafafa] font-sans text-[#333]">
  <!-- HEADER with search bar and navigation -->
  <!-- HEADER with top search bar and icons -->
  <header class="bg-white sticky top-0 z-50 shadow-sm">
    <div class="flex items-center w-full max-w-7xl mx-auto px-4 py-2 space-x-4">
      <!-- Logo -->
      <div class="flex-none">
        <a href="#" aria-label="Atrace logo">
          <svg width="48" height="48" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-12 w-12">
            <rect x="25" y="25" width="20" height="80" fill="#EF7225"/>
            <rect x="55" y="25" width="20" height="80" fill="#501764"/>
            <rect x="85" y="25" width="25" height="80" fill="#FFE54C"/>
            <rect x="60" y="105" width="25" height="5" fill="#501764"/>
            <rect x="90" y="110" width="10" height="5" fill="#FFE54C"/>
          </svg>
        </a>
      </div>
      <!-- Search bar -->
      <div class="flex-grow">
        <form class="relative">
          <input
            type="text"
            placeholder="What items are you looking for today?"
            class="w-full border border-gray-300 rounded-full py-2 pl-5 pr-14 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400"
            
          />
          <button type="submit" aria-label="Search" class="absolute right-2 top-1/2 -translate-y-1/2 bg-orange-400 text-white h-8 w-8 flex items-center justify-center rounded-full hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </button>
        </form>
      </div>
      <!-- Icons -->
      <nav class="flex items-center space-x-5 text-gray-600">
         <!-- Notification Bell -->
          <button aria-label="Notifications" class="text-gray-600 hover:text-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-400 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/>
              </svg>
          </button>
          
         <!-- Shopping Cart -->
         <a href="cart.php" aria-label="Shopping Cart" class="text-gray-600 hover:text-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-400 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 3h2l.4 2M7 13h10l4-8H5.4m1.6 8L6 5H2m5 8v6a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-6m-10 0h10"/>
              </svg>
          </a>
          
          <!-- Heart (wishlist/favorites) -->
          <a href="wishlist.php" aria-label="Wishlist" class="text-gray-600 hover:text-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-400 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
          </a>
          <div class="h-6 w-px bg-gray-300"></div>
          <!-- User Icon -->
          <button aria-label="Login" onclick="window.location.href='account.php'" class="hover:text-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-400 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
              <circle cx="12" cy="7" r="4"/>
            </svg>
          </button>
            
      </nav>
    </div>
    <!-- Yellow navigation bar -->
    <nav class="bg-orange-500 text-white text-sm font-semibold">
    <ul class="max-w-7xl mx-auto flex justify-around py-2 px-4 select-none">
      <li>
        <a href="category.php" class="hover:text-gray-200 cursor-pointer transition-colors duration-200">Kategori</a>
      </li>
      <li>
        <a href="seller_page.php" class="hover:text-gray-200 cursor-pointer transition-colors duration-200">Seller</a>
      </li>
      <li>
        <a href="cart.php" class="hover:text-gray-200 cursor-pointer transition-colors duration-200">Keranjang</a>
      </li>
      <li>
        <a href="help.php" class="hover:text-gray-200 cursor-pointer transition-colors duration-200">Bantuan</a>
      </li>
      <li>
        <a href="#" class="hover:text-gray-200 cursor-pointer transition-colors duration-200">About Us</a>
      </li>
  </ul>
    </nav>
  </header>
  <main class="max-w-7xl mx-auto px-4 py-6 space-y-8">
    <!-- Hero Banner -->
    <div class="bg-[#000000] rounded-2xl p-8 text-white relative overflow-hidden">
      <div class="flex items-center justify-between">
        <div class="space-y-4">
          <div class="flex items-center space-x-2">
            <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
              <span class="text-black text-xs">🍎</span>
            </div>
            <span class="text-sm">iPhone 14 Series</span>
          </div>
          <h2 class="text-4xl font-bold">
            Up to 10%<br />
            off Voucher
          </h2>
          <button class="bg-transparent border border-white text-white hover:bg-white hover:text-black px-4 py-2 rounded">
            Shop Now →
          </button>
        </div>
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=200&h=200&fit=crop" alt="iPhone" class="w-48 h-48 object-contain" />
        </div>
      </div>
      <div class="flex justify-center space-x-2 mt-6">
        <div class="w-2 h-2 rounded-full bg-[#ff7d00]"></div>
        <div class="w-2 h-2 rounded-full bg-[#74767e]"></div>
        <div class="w-2 h-2 rounded-full bg-[#74767e]"></div>
        <div class="w-2 h-2 rounded-full bg-[#74767e]"></div>
        <div class="w-2 h-2 rounded-full bg-[#74767e]"></div>
      </div>
    </div>

    <!-- Categories -->
    <section>
      <div class="flex items-center justify-between mb-6">
        <div class="flex items-center space-x-2">
          <div class="w-4 h-6 bg-[#ff7d00] rounded"></div>
          <h3 class="text-xl font-semibold text-[#222325]">Cari dari Kategori</h3>
        </div>
        <div class="flex space-x-2">
          <button class="border border-gray-300 p-2 rounded hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="15,18 9,12 15,6"/>
            </svg>
          </button>
          <button class="border border-gray-300 p-2 rounded hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9,18 15,12 9,6"/>
            </svg>
          </button>
        </div>
      </div>
      <div class="grid grid-cols-8 gap-4">
        <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
          <div class="text-2xl mb-2">📱</div>
          <p class="text-sm font-medium text-[#222325]">Elektronik</p>
        </div>
        <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
          <div class="text-2xl mb-2">📚</div>
          <p class="text-sm font-medium text-[#222325]">Buku & Tulis</p>
        </div>
        <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
          <div class="text-2xl mb-2">🔍</div>
          <p class="text-sm font-medium text-[#222325]">Kaca</p>
        </div>
        <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
          <div class="text-2xl mb-2">👕</div>
          <p class="text-sm font-medium text-[#222325]">Fashion</p>
        </div>
        <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
          <div class="text-2xl mb-2">⚽</div>
          <p class="text-sm font-medium text-[#222325]">Olahraga</p>
        </div>
        <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
          <div class="text-2xl mb-2">🧸</div>
          <p class="text-sm font-medium text-[#222325]">Mainan</p>
        </div>
        <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
          <div class="text-2xl mb-2">🪑</div>
          <p class="text-sm font-medium text-[#222325]">Furniture</p>
        </div>
        <div class="bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
          <div class="text-2xl mb-2">💍</div>
          <p class="text-sm font-medium text-[#222325]">Aksesoris</p>
        </div>
      </div>
    </section>

    <!-- Flash Sales -->
    <section>
      <div class="flex items-center justify-between mb-6">
        <div class="flex items-center space-x-4">
          <div class="flex items-center space-x-2">
            <div class="w-4 h-6 bg-[#ff7d00] rounded"></div>
            <h3 class="text-xl font-semibold text-[#222325]">Flash Sales</h3>
          </div>
          <div class="flex items-center space-x-2 text-[#222325]">
            <div class="bg-[#ff7d00] text-white px-2 py-1 rounded text-sm font-bold">03</div>
            <span>:</span>
            <div class="bg-[#ff7d00] text-white px-2 py-1 rounded text-sm font-bold">23</div>
            <span>:</span>
            <div class="bg-[#ff7d00] text-white px-2 py-1 rounded text-sm font-bold">19</div>
            <span>:</span>
            <div class="bg-[#ff7d00] text-white px-2 py-1 rounded text-sm font-bold">56</div>
          </div>
        </div>
        <div class="flex space-x-2">
          <button class="border border-gray-300 p-2 rounded hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="15,18 9,12 15,6"/>
            </svg>
          </button>
          <button class="border border-gray-300 p-2 rounded hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9,18 15,12 9,6"/>
            </svg>
          </button>
        </div>
      </div>
      <div class="grid grid-cols-5 gap-4">
        <!-- Product 1 -->
        <div class="bg-white rounded-lg p-4 hover:shadow-lg transition-shadow">
          <div class="relative mb-3">
            <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=120&h=120&fit=crop" alt="AK-300 Wired Keyboard" class="w-full h-32 object-contain" />
            <span class="absolute top-2 left-2 bg-[#ff7d00] text-white text-xs px-2 py-1 rounded">SALE</span>
            <button class="absolute top-2 right-2 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#74767e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
          <h4 class="font-medium text-sm text-[#222325] mb-2 line-clamp-2">AK-300 Wired Keyboard</h4>
          <div class="space-y-1">
            <p class="font-bold text-[#ff7d00]">Rp 8.000.000</p>
            <p class="text-xs text-[#74767e] line-through">Rp 10.000.000</p>
          </div>
          <div class="flex items-center justify-between mt-2">
            <div class="flex items-center space-x-1">
              <div class="flex">
                <span class="text-[#fff068] text-xs">★★★★★</span>
              </div>
              <span class="text-xs text-[#74767e]">(150)</span>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="bg-white rounded-lg p-4 hover:shadow-lg transition-shadow">
          <div class="relative mb-3">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=120&h=120&fit=crop" alt="Headset Earphone" class="w-full h-32 object-contain" />
            <span class="absolute top-2 left-2 bg-[#ff7d00] text-white text-xs px-2 py-1 rounded">SALE</span>
            <button class="absolute top-2 right-2 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#74767e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
          <h4 class="font-medium text-sm text-[#222325] mb-2 line-clamp-2">Headset / Earphone Original Proy G8 Series</h4>
          <div class="space-y-1">
            <p class="font-bold text-[#ff7d00]">Rp 10.500</p>
            <p class="text-xs text-[#74767e] line-through">Rp 15.000</p>
          </div>
          <div class="flex items-center justify-between mt-2">
            <div class="flex items-center space-x-1">
              <div class="flex">
                <span class="text-[#fff068] text-xs">★★★★★</span>
              </div>
              <span class="text-xs text-[#74767e]">(89)</span>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="bg-white rounded-lg p-4 hover:shadow-lg transition-shadow">
          <div class="relative mb-3">
            <img src="https://images.unsplash.com/photo-1606144042614-b2417e99c4e3?w=120&h=120&fit=crop" alt="HAVIT HV-G92 Gamepad" class="w-full h-32 object-contain" />
            <span class="absolute top-2 left-2 bg-[#ff7d00] text-white text-xs px-2 py-1 rounded">SALE</span>
            <button class="absolute top-2 right-2 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#74767e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
          <h4 class="font-medium text-sm text-[#222325] mb-2 line-clamp-2">HAVIT HV-G92 Gamepad</h4>
          <div class="space-y-1">
            <p class="font-bold text-[#ff7d00]">Rp 1.965.000</p>
            <p class="text-xs text-[#74767e] line-through">Rp 2.500.000</p>
          </div>
          <div class="flex items-center justify-between mt-2">
            <div class="flex items-center space-x-1">
              <div class="flex">
                <span class="text-[#fff068] text-xs">★★★★★</span>
              </div>
              <span class="text-xs text-[#74767e]">(234)</span>
            </div>
          </div>
        </div>

        <!-- Product 4 -->
        <div class="bg-white rounded-lg p-4 hover:shadow-lg transition-shadow">
          <div class="relative mb-3">
            <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=120&h=120&fit=crop" alt="IPS LCD Gaming Monitor" class="w-full h-32 object-contain" />
            <span class="absolute top-2 left-2 bg-[#ff7d00] text-white text-xs px-2 py-1 rounded">SALE</span>
            <button class="absolute top-2 right-2 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#74767e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
          <h4 class="font-medium text-sm text-[#222325] mb-2 line-clamp-2">IPS LCD Gaming Monitor</h4>
          <div class="space-y-1">
            <p class="font-bold text-[#ff7d00]">Rp 3.965.000</p>
            <p class="text-xs text-[#74767e] line-through">Rp 5.000.000</p>
          </div>
          <div class="flex items-center justify-between mt-2">
            <div class="flex items-center space-x-1">
              <div class="flex">
                <span class="text-[#fff068] text-xs">★★★★★</span>
              </div>
              <span class="text-xs text-[#74767e]">(67)</span>
            </div>
          </div>
        </div>

        <!-- Product 5 -->
        <div class="bg-white rounded-lg p-4 hover:shadow-lg transition-shadow">
          <div class="relative mb-3">
            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=120&h=120&fit=crop" alt="S-Series Comfort Chair" class="w-full h-32 object-contain" />
            <span class="absolute top-2 left-2 bg-[#ff7d00] text-white text-xs px-2 py-1 rounded">SALE</span>
            <button class="absolute top-2 right-2 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#74767e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
          <h4 class="font-medium text-sm text-[#222325] mb-2 line-clamp-2">S-Series Comfort Chair</h4>
          <div class="space-y-1">
            <p class="font-bold text-[#ff7d00]">Rp 5.965.000</p>
            <p class="text-xs text-[#74767e] line-through">Rp 7.000.000</p>
          </div>
          <div class="flex items-center justify-between mt-2">
            <div class="flex items-center space-x-1">
              <div class="flex">
                <span class="text-[#fff068] text-xs">★★★★★</span>
              </div>
              <span class="text-xs text-[#74767e]">(45)</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Recommendations -->
    <section>
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center space-x-4">
        <div class="flex items-center space-x-2">
            <div class="w-4 h-6 bg-[#ff7d00] rounded"></div>
            <h3 class="text-xl font-semibold text-[#222325]">Rekomendasi barang yang cocok untukmu</h3>
            </div>
        </div>
        <div class="flex space-x-2">
        <button class="border border-gray-300 p-2 rounded hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15,18 9,12 15,6"/>
            </svg>
        </button>
        <button class="border border-gray-300 p-2 rounded hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9,18 15,12 9,6"/>
            </svg>
        </button>
        </div>
    </div>

  <div class="grid grid-cols-5 gap-4">
<!-- Product 1 -->
<div class="bg-white rounded-lg p-4 hover:shadow-lg transition-shadow">
          <div class="relative mb-3">
            <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=120&h=120&fit=crop" alt="AK-300 Wired Keyboard" class="w-full h-32 object-contain" />
            <span class="absolute top-2 left-2 bg-[#ff7d00] text-white text-xs px-2 py-1 rounded">SALE</span>
            <button class="absolute top-2 right-2 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#74767e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
          <h4 class="font-medium text-sm text-[#222325] mb-2 line-clamp-2">AK-300 Wired Keyboard</h4>
          <div class="space-y-1">
            <p class="font-bold text-[#ff7d00]">Rp 8.000.000</p>
            <p class="text-xs text-[#74767e] line-through">Rp 10.000.000</p>
          </div>
          <div class="flex items-center justify-between mt-2">
            <div class="flex items-center space-x-1">
              <div class="flex">
                <span class="text-[#fff068] text-xs">★★★★★</span>
              </div>
              <span class="text-xs text-[#74767e]">(150)</span>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="bg-white rounded-lg p-4 hover:shadow-lg transition-shadow">
          <div class="relative mb-3">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=120&h=120&fit=crop" alt="Headset Earphone" class="w-full h-32 object-contain" />
            <span class="absolute top-2 left-2 bg-[#ff7d00] text-white text-xs px-2 py-1 rounded">SALE</span>
            <button class="absolute top-2 right-2 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#74767e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
          <h4 class="font-medium text-sm text-[#222325] mb-2 line-clamp-2">Headset / Earphone Original Proy G8 Series</h4>
          <div class="space-y-1">
            <p class="font-bold text-[#ff7d00]">Rp 10.500</p>
            <p class="text-xs text-[#74767e] line-through">Rp 15.000</p>
          </div>
          <div class="flex items-center justify-between mt-2">
            <div class="flex items-center space-x-1">
              <div class="flex">
                <span class="text-[#fff068] text-xs">★★★★★</span>
              </div>
              <span class="text-xs text-[#74767e]">(89)</span>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="bg-white rounded-lg p-4 hover:shadow-lg transition-shadow">
          <div class="relative mb-3">
            <img src="https://images.unsplash.com/photo-1606144042614-b2417e99c4e3?w=120&h=120&fit=crop" alt="HAVIT HV-G92 Gamepad" class="w-full h-32 object-contain" />
            <span class="absolute top-2 left-2 bg-[#ff7d00] text-white text-xs px-2 py-1 rounded">SALE</span>
            <button class="absolute top-2 right-2 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#74767e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
          <h4 class="font-medium text-sm text-[#222325] mb-2 line-clamp-2">HAVIT HV-G92 Gamepad</h4>
          <div class="space-y-1">
            <p class="font-bold text-[#ff7d00]">Rp 1.965.000</p>
            <p class="text-xs text-[#74767e] line-through">Rp 2.500.000</p>
          </div>
          <div class="flex items-center justify-between mt-2">
            <div class="flex items-center space-x-1">
              <div class="flex">
                <span class="text-[#fff068] text-xs">★★★★★</span>
              </div>
              <span class="text-xs text-[#74767e]">(234)</span>
            </div>
          </div>
        </div>

        <!-- Product 4 -->
        <div class="bg-white rounded-lg p-4 hover:shadow-lg transition-shadow">
          <div class="relative mb-3">
            <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=120&h=120&fit=crop" alt="IPS LCD Gaming Monitor" class="w-full h-32 object-contain" />
            <span class="absolute top-2 left-2 bg-[#ff7d00] text-white text-xs px-2 py-1 rounded">SALE</span>
            <button class="absolute top-2 right-2 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#74767e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
          <h4 class="font-medium text-sm text-[#222325] mb-2 line-clamp-2">IPS LCD Gaming Monitor</h4>
          <div class="space-y-1">
            <p class="font-bold text-[#ff7d00]">Rp 3.965.000</p>
            <p class="text-xs text-[#74767e] line-through">Rp 5.000.000</p>
          </div>
          <div class="flex items-center justify-between mt-2">
            <div class="flex items-center space-x-1">
              <div class="flex">
                <span class="text-[#fff068] text-xs">★★★★★</span>
              </div>
              <span class="text-xs text-[#74767e]">(67)</span>
            </div>
          </div>
        </div>

        <!-- Product 5 -->
        <div class="bg-white rounded-lg p-4 hover:shadow-lg transition-shadow">
          <div class="relative mb-3">
            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=120&h=120&fit=crop" alt="S-Series Comfort Chair" class="w-full h-32 object-contain" />
            <span class="absolute top-2 left-2 bg-[#ff7d00] text-white text-xs px-2 py-1 rounded">SALE</span>
            <button class="absolute top-2 right-2 p-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#74767e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
          <h4 class="font-medium text-sm text-[#222325] mb-2 line-clamp-2">S-Series Comfort Chair</h4>
          <div class="space-y-1">
            <p class="font-bold text-[#ff7d00]">Rp 5.965.000</p>
            <p class="text-xs text-[#74767e] line-through">Rp 7.000.000</p>
          </div>
          <div class="flex items-center justify-between mt-2">
            <div class="flex items-center space-x-1">
              <div class="flex">
                <span class="text-[#fff068] text-xs">★★★★★</span>
              </div>
              <span class="text-xs text-[#74767e]">(45)</span>
            </div>
          </div>
        </div>
  </div>

  <!-- View All Products Button -->
  <div class="text-center mt-8">
        <button onclick="window.location.href='category.php'" class="bg-[#ff7d00] hover:bg-[#ff8a00] text-white px-8 py-2 rounded">View All Products</button>
    </div>
  </section>
 <!-- Audio Banner -->
 <div class="bg-[#000000] rounded-2xl p-8 text-white relative overflow-hidden">
      <div class="flex items-center justify-between">
        <div class="space-y-6">
          <div>
            <p class="text-[#00ff66] text-sm font-medium mb-2">Categories</p>
            <h2 class="text-4xl font-bold">
              Enhance Your<br />
              Music Experience
            </h2>
          </div>
          <div class="flex space-x-4">
            <div class="bg-white text-black rounded-full w-16 h-16 flex flex-col items-center justify-center">
              <span class="text-xs font-bold">23</span>
              <span class="text-xs">Hours</span>
            </div>
            <div class="bg-white text-black rounded-full w-16 h-16 flex flex-col items-center justify-center">
              <span class="text-xs font-bold">05</span>
              <span class="text-xs">Days</span>
            </div>
            <div class="bg-white text-black rounded-full w-16 h-16 flex flex-col items-center justify-center">
              <span class="text-xs font-bold">59</span>
              <span class="text-xs">Minutes</span>
            </div>
            <div class="bg-white text-black rounded-full w-16 h-16 flex flex-col items-center justify-center">
              <span class="text-xs font-bold">35</span>
              <span class="text-xs">Seconds</span>
            </div>
          </div>
          <button class="bg-[#00ff66] hover:bg-[#1dbf73] text-black font-medium px-6 py-2 rounded">Buy Now!</button>
        </div>
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=300&h=300&fit=crop" alt="Speaker" class="w-72 h-72 object-contain" />
        </div>
      </div>
    </div>
  </main>

  <!-- Footer Services -->
  <section class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4">
      <div class="grid grid-cols-3 gap-8 text-center">
        <div class="space-y-4">
          <div class="w-16 h-16 bg-[#222325] rounded-full flex items-center justify-center mx-auto">
            <span class="text-white text-2xl">🚚</span>
          </div>
          <div>
            <h4 class="font-bold text-[#222325] mb-2">FREE AND FAST DELIVERY</h4>
            <p class="text-sm text-[#74767e]">Free delivery for all orders over $140</p>
          </div>
        </div>
        <div class="space-y-4">
          <div class="w-16 h-16 bg-[#222325] rounded-full flex items-center justify-center mx-auto">
            <span class="text-white text-2xl">🎧</span>
          </div>
          <div>
            <h4 class="font-bold text-[#222325] mb-2">24/7 CUSTOMER SERVICE</h4>
            <p class="text-sm text-[#74767e]">Friendly 24/7 customer support</p>
          </div>
        </div>
        <div class="space-y-4">
          <div class="w-16 h-16 bg-[#222325] rounded-full flex items-center justify-center mx-auto">
            <span class="text-white text-2xl">✅</span>
          </div>
          <div>
            <h4 class="font-bold text-[#222325] mb-2">MONEY BACK GUARANTEE</h4>
            <p class="text-sm text-[#74767e]">We return money within 30 days</p>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- FOOTER -->
 <footer class="bg-gray-300 text-white text-sm select-none py-10">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-5 gap-8">
      <!-- Exclusive subscribe -->
      <div>
        <h3 class="font-bold mb-3">Exclusive</h3>
        <p class="mb-2">Get 10% off your first order</p>
        <form class="flex max-w-xs">
          <input
            type="email"
            placeholder="Enter your email"
            aria-label="Exclusive newsletter email"
            required
            class="flex-grow rounded-l-md px-3 py-2 text-orange-600 border border-white placeholder:text-orange-300 focus:outline-none focus:ring-2 focus:ring-orange-300"
          />
          <button type="submit" aria-label="Subscribe" class="bg-orange-400 px-4 py-2 rounded-r-md text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-700"> > </button>
        </form>
      </div>
      <!-- Support -->
      <div>
        <h3 class="font-bold mb-3">Support</h3>
        <address class="not-italic text-xs mb-2">
          Jl. Ring Road Utara,<br />
          Ngringin, Condongcatur, Kec.<br />
          Depok, Kabupaten Sleman, Daerah<br />
          Istimewa Yogyakarta 55281
        </address>
        <p class="text-xs mb-2">exclusive@gmail.com</p>
        <p class="text-xs">+88015-88888-9999</p>
      </div>
      <!-- Account -->
      <div>
        <h3 class="font-bold mb-3">Account</h3>
        <ul class="space-y-1 text-xs">
          <li><a href="#" class="hover:underline">My Account</a></li>
          <li><a href="#" class="hover:underline">Login / Register</a></li>
          <li><a href="#" class="hover:underline">Cart</a></li>
          <li><a href="#" class="hover:underline">Wishlist</a></li>
          <li><a href="#" class="hover:underline">Shop</a></li>
        </ul>
      </div>
      <!-- Quick Link -->
      <div>
        <h3 class="font-bold mb-3">Quick Link</h3>
        <ul class="space-y-1 text-xs">
          <li><a href="#" class="hover:underline">Privacy Policy</a></li>
          <li><a href="#" class="hover:underline">Terms Of Use</a></li>
          <li><a href="#" class="hover:underline">FAQ</a></li>
          <li><a href="#" class="hover:underline">Contact</a></li>
        </ul>
      </div>
      <!-- Follow Us -->
      <div>
        <h3 class="font-bold mb-3">Follow Us</h3>
        <div class="flex flex-col space-y-3">
          <div class="flex items-center space-x-2">
            <img
              src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/51aa29eb-65b1-4014-8f4e-fe76f48e25a8.png"
              alt="Square black and white QR code for Atrace app"
              class="h-16 w-16 object-contain bg-white rounded-sm"
              onerror="this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4ba783a2-4231-40eb-a8c1-b0ac38b1b994.png';"
            />
            <div class="flex flex-col space-y-1">
              <a href="#" class="inline-block hover:opacity-90" aria-label="Get on Google Play Store">
                <img
                  src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/71fa2ad5-bad2-400d-846e-6572ae5929e2.png"
                  alt="Google Play store button with black background and white text"
                  class="h-10 w-auto"
                  onerror="this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2dca91ae-62c4-41c3-8bcb-2bea0826c750.png';"
                />
              </a>
              <a href="#" class="inline-block hover:opacity-90" aria-label="Download on the App Store">
                <img
                  src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/35b35d16-ade7-432b-bc63-d71eea879df8.png"
                  alt="App Store button with black background and white text"
                  class="h-10 w-auto"
                  onerror="this.src='https://placehold.co/120x40?text=No+Image';"
                />
              </a>
            </div>
          </div>
          <div class="flex space-x-4 justify-start">
            <!-- Social icons -->
            <a href="#" class="hover:text-gray-300" aria-label="Facebook">
              <svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6" aria-hidden="true"><path d="M22.675 0h-21.35C.597 0 0 .592 0 1.322v21.355c0 .73.597 1.323 1.325 1.323h11.497v-9.294H9.691v-3.622h3.131V8.413c0-3.1 1.894-4.789 4.659-4.789 1.325 0 2.466.099 2.797.143v3.24l-1.918.001c-1.504 0-1.794.715-1.794 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.323V1.322c0-.73-.593-1.322-1.322-1.322z"/></svg>
            </a>
            <a href="#" class="hover:text-gray-300" aria-label="Twitter">
              <svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6" aria-hidden="true"><path d="M23.954 4.57a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723 9.86 9.86 0 0 1-3.127 1.194 4.92 4.92 0 0 0-8.384 4.482A13.95 13.95 0 0 1 1.671 3.15a4.822 4.822 0 0 0-.664 2.475c0 1.708.87 3.215 2.188 4.099a4.904 4.904 0 0 1-2.228-.616v.05c0 2.385 1.698 4.374 3.946 4.827a4.902 4.902 0 0 1-2.224.084c.627 1.956 2.444 3.379 4.6 3.416a9.867 9.867 0 0 1-6.102 2.095c-.395 0-.779-.023-1.158-.069a13.945 13.945 0 0 0 7.548 2.212c9.054 0 14.002-7.496 14.002-13.986 0-.213-.005-.425-.014-.636A9.936 9.936 0 0 0 24 4.59z"/></svg>
            </a>
            <a href="#" class="hover:text-gray-300" aria-label="Instagram">
              <svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.206.058 2.095.248 2.588.415a5.051 5.051 0 0 1 1.838 1.06 5.05 5.05 0 0 1 1.061 1.838c.168.493.357 1.382.415 2.588.058 1.266.07 1.645.07 4.85 0 3.204-.012 3.583-.07 4.849-.058 1.206-.247 2.095-.415 2.588a5.08 5.08 0 0 1-1.06 1.838 5.083 5.083 0 0 1-1.838 1.061c-.493.168-1.382.357-2.588.415-1.266.058-1.645.07-4.85.07-3.204 0-3.583-.012-4.849-.07-1.206-.058-2.095-.247-2.588-.415a5.05 5.05 0 0 1-1.838-1.06 5.055 5.055 0 0 1-1.061-1.838c-.168-.493-.357-1.382-.415-2.588-.058-1.266-.07-1.645-.07-4.85 0-3.204.012-3.583.07-4.849.058-1.206.247-2.095.415-2.588a5.11 5.11 0 0 1 1.061-1.837 5.101 5.101 0 0 1 1.837-1.062c.494-.167 1.383-.356 2.589-.414 1.265-.059 1.645-.071 4.849-.071zm0-2.163C8.755 0 8.333 0 7.052.067 5.778.133 4.688.37 3.83.73a7.11 7.11 0 0 0-2.57 1.643 7.1 7.1 0 0 0-1.643 2.57C-.329 6.645-.566 7.736-.632 9.01-.7 10.29-.7 10.712-.7 12s0 1.71.067 2.99c.066 1.274.303 2.365.663 3.222a7.102 7.102 0 0 0 1.643 2.571 7.109 7.109 0 0 0 2.57 1.643c.857.36 1.948.597 3.222.663 1.28.067 1.702.067 3 .067s1.72 0 3-.067c1.273-.066 2.364-.303 3.221-.663a7.107 7.107 0 0 0 2.572-1.643 7.11 7.11 0 0 0 1.643-2.57c.36-.857.597-1.948.663-3.222.067-1.28.067-1.702.067-3s0-1.72-.067-3c-.066-1.273-.303-2.365-.663-3.221a7.09 7.09 0 0 0-1.643-2.572 7.092 7.092 0 0 0-2.571-1.643c-.857-.36-1.948-.597-3.222-.663C13.654.001 13.233 0 12 0z"/></svg>
            </a>
            <a href="#" class="hover:text-gray-300" aria-label="LinkedIn">
              <svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.327-.025-3.036-1.849-3.036-1.85 0-2.133 1.444-2.133 2.939v5.666h-3.555v-11.48h3.414v1.571h.049c.476-.9 1.637-1.849 3.37-1.849 3.602 0 4.268 2.37 4.268 5.455v6.303zm-14.356-13.07c-1.144 0-2.07-.927-2.07-2.07 0-1.143.926-2.07 2.07-2.07 1.142 0 2.07.927 2.07 2.07 0 1.143-.928 2.07-2.07 2.07zm1.777 13.07h-3.555v-11.48h3.555v11.48zm16.132-20.452h-20.283c-.706 0-1.28.572-1.28 1.279v21.442c0 .707.573 1.281 1.28 1.281h20.284c.706 0 1.28-.574 1.28-1.281v-21.44c0-.706-.574-1.28-1.28-1.28z"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script>
    // Simple JavaScript for interactivity
    document.addEventListener('DOMContentLoaded', function() {
      // Add click handlers for wishlist buttons
      const wishlistButtons = document.querySelectorAll('button[aria-label="Favorites"], .absolute.top-2.right-2 button');
      wishlistButtons.forEach(button => {
        button.addEventListener('click', function(e) {
          e.preventDefault();
          const heart = this.querySelector('svg');
          if (heart) {
            heart.classList.toggle('text-red-500');
            heart.classList.toggle('fill-current');
          }
        });
      });

      // Add search functionality
      const searchForm = document.querySelector('form');
      if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
          e.preventDefault();
          const searchInput = this.querySelector('input[type="text"]');
          if (searchInput.value.trim()) {
            alert('Searching for: ' + searchInput.value);
          }
        });
      }
    });
  </script>
</body>
</html> 
