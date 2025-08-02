<!-- Footer -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<footer class="bg-stone-900 text-white p-10 text-center shadow-inner mt-12 rounded-t-2xl">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
    <!-- About Column -->
    <div>
      <img src="{{ asset('assets/images/logo/logo.jpg') }}" class="mb-2" alt="Logo" width="80">
      <h3 class="text-xl font-bold text-teal-400 mb-2">Maa Dharitri Crafts</h3>
      <p class="text-gray-300 text-sm leading-relaxed">
        Dedicated to promoting traditional terracotta artistry and empowering rural artisans through sustainable practices and fair trade.
      </p>
    </div>
    <!-- Quick Links Column -->
    <div>
      <h3 class="text-xl font-bold text-teal-400 mb-4">Quick Links</h3>
      <ul class="space-y-2">
        <li><a href="{{ route('front.about') }}" class="hover:text-teal-200 transition duration-300 text-gray-300 text-sm">About Us</a></li>
        <li><a href="{{ route('front.products') }}" class="hover:text-teal-200 transition duration-300 text-gray-300 text-sm">Our Products</a></li>
        <li><a href="{{ route('front.events') }}" class="hover:text-teal-200 transition duration-300 text-gray-300 text-sm">Events & Gallery</a></li>
        <li><a href="{{ route('front.contact') }}" class="hover:text-teal-200 transition duration-300 text-gray-300 text-sm">Contact Us</a></li>
      </ul>
    </div>
    <!-- Legal & Connect Column -->
    <div>
      <h3 class="text-xl font-bold text-teal-400 mb-4">Legal & Connect</h3>
      <ul class="space-y-2 mb-4">
        <li><a href="{{ route('page.privacyPolicy') }}" class="hover:text-teal-200 transition duration-300 text-gray-300 text-sm">Privacy Policy</a></li>
        <li><a href="{{ route('page.termsAndConditions') }}" class="hover:text-teal-200 transition duration-300 text-gray-300 text-sm">Terms & Conditions</a></li>
        <li><a href="{{ route('page.cancellationRefund') }}" class="hover:text-teal-200 transition duration-300 text-gray-300 text-sm">Cancellation & Refund Policy</a></li>
        <li><a href="{{ route('page.shippingDelivery') }}" class="hover:text-teal-200 transition duration-300 text-gray-300 text-sm">Shipping & Delivery</a></li>
      </ul>
      <p class="text-gray-300 text-sm">
        Follow Us: <a href="#" class="hover:text-teal-200 transition duration-300 ml-2">
          <i class="fa-brands fa-facebook"></i>
        </a> 
        | 
        <a href="#" class="hover:text-teal-200 transition duration-300 ml-1">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </p>
    </div>
  </div>
  <div class="mt-8 pt-6 border-t border-stone-700 text-gray-400 text-sm">
    <p>&copy; 2025 Maa Dharitri Terracotta Craft Producer. All rights reserved.</p>
    <p class="mt-1">Empowering artisans, preserving heritage.</p>
  </div>
</footer>