  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
        <div>
          <h3 class="text-xl font-bold mb-4">
            AHE Skill Development College
          </h3>
          <p class="text-gray-400 mb-2">
            Empowering minds, Shaping futures. Join us in our journey of
            academic excellence and innovation.
          </p>
          <p class="text-gray-400">
            Affiliated with <span class="font-medium"><a href="https://aisect.org/" class="text-blue-400 hover:text-blue-600 transition duration-300">AISECT Group of Universities</a></span>, a pioneer in skill-based education. The group includes renowned institutions like RN Tagore University, CV Raman University, and Scope Global University.
          </p>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
          <ul class="space-y-2">
            <li>
              <a href="{{ route('user.home') }}" class="text-gray-400 hover:text-tertiary transition duration-300">Home</a>
            </li>
            <li>
              <a href="{{ route('user.about') }}" class="text-gray-400 hover:text-tertiary transition duration-300">About Us</a>
            </li>
            <li>
              <a href="{{ route('user.courses') }}" class="text-gray-400 hover:text-tertiary transition duration-300">Courses</a>
            </li>
            <li>
              <a href="{{ route('user.faculty') }}" class="text-gray-400 hover:text-tertiary transition duration-300">Faculty</a>
            </li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Resources</h4>
          <ul class="space-y-2">
            <li>
              <a href="#" class="text-gray-400 hover:text-tertiary transition duration-300">Student Portal</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-tertiary transition duration-300">Library</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-tertiary transition duration-300">Research</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-tertiary transition duration-300">Careers</a>
            </li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
          <p class="text-gray-400 mb-4">
            Subscribe to our newsletter for the latest updates and news.
          </p>
          <form class="flex">
            <input type="email" placeholder="Your email"
              class="px-4 py-2 w-full rounded-l-md focus:outline-none text-gray-800" />
            <button type="submit" class="bg-accent px-4 py-2 rounded-r-md hover:bg-accent/90 transition duration-300">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="pt-6 border-t border-gray-700 text-gray-400 flex flex-col md:flex-row justify-between items-center mb-4">
        <p>&copy; {{ date('Y') }} AHE Skill Development . All rights reserved.</p>
        <p>Designed & Developed by <a href="https://codexindia.com" class="text-blue-400 hover:text-blue-600 transition duration-300">Codexindia</a></p>
      </div>
    </div>
  </footer>