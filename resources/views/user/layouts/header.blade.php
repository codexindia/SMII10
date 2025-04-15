   <!-- Header -->
   <!-- Top Bar with Social Icons -->
   <div class="bg-gray-100 py-2 shadow-sm">
       <div class="container mx-auto px-4 flex justify-between items-center">
           <div class="flex items-center text-sm text-gray-600">
               <div class="flex items-center mr-6">
                   <i class="fas fa-phone-alt text-primary mr-2"></i>
                   <span>+91 90646 54015</span>
               </div>
               <div class="hidden sm:flex items-center">
                   <i class="fas fa-envelope text-primary mr-2"></i>
                   <span>academyofeducationskilldevelop@gmail.com</span>
               </div>
           </div>
           <div class="flex space-x-3">
               <a href="https://wa.me/916296686487" class="text-gray-600 hover:text-primary transition-colors duration-300">
                   <i class="fab fa-whatsapp"></i>
               </a>
               <a href="https://www.facebook.com/share/1EYrRWD1fX/" class="text-gray-600 hover:text-primary transition-colors duration-300">
                   <i class="fab fa-facebook-f"></i>
               </a>

               <a href="https://www.instagram.com/ahesd_college_?igsh=MTRqd2Z2aWN5dzRzOA==" class="text-gray-600 hover:text-tertiary transition-colors duration-300">
                   <i class="fab fa-instagram"></i>
               </a>
               <a href="https://www.linkedin.com/in/ahesd-college-5387a4358" class="text-gray-600 hover:text-accent transition-colors duration-300">
                   <i class="fab fa-linkedin-in"></i>
               </a>
               {{-- <a href="#" class="text-gray-600 hover:text-primary transition-colors duration-300">
                   <i class="fab fa-youtube"></i>
               </a> --}}
           </div>
       </div>
   </div>
   <header class="bg-white shadow-lg sticky top-0 z-50">
       <div class="container mx-auto px-4 py-4 flex justify-between items-center">
           <div class="flex items-center">
            <a href="{{ route('user.home') }}" class="flex items-center">
                <img src="{{ asset('user/logo.png') }}" class="h-12 md:h-14 " alt="">
                <div>
                    <h1
                        class="text-md md:text-2xl font-bold bg-gradient-to-r from-primary to-tertiary text-transparent bg-clip-text leading-tight">
                        AHE Skill Development College
                    </h1>
                    <p class="text-xs text-gray-600 hidden md:block">
                        Academy of Higher Education and Skill Development
                    </p>
                    <p class="text-xs font-semibold text-primary">
                        Approved by AISECT (UGC & AICTE)
                    </p>
                </div>
            </a>
            
           </div>

           <nav class="hidden md:flex space-x-1">

               <a href="{{ route('user.home') }}"
                   class="px-4 py-2 rounded-md text-gray-800 hover:text-primary hover:bg-primary hover:bg-opacity-10 transition-all duration-300 relative group {{ request()->routeIs('user.home') ? 'text-primary bg-primary/10' : '' }}">
                   Home
                   <span
                       class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
               </a>
               <a href="{{ route('user.notice') }}"
                   class="{{ request()->routeIs('user.notice') ? 'text-primary bg-primary/10' : '' }} px-4 py-2 rounded-md text-gray-800 hover:text-primary hover:bg-primary hover:bg-opacity-10 transition-all duration-300 relative group">
                   Notice
               </a>
               <a href="{{ route('user.about') }}"
                   class="{{ request()->routeIs('user.about') ? 'text-primary bg-primary/10' : '' }} px-4 py-2 rounded-md text-gray-800 hover:text-primary hover:bg-primary hover:bg-opacity-10 transition-all duration-300 relative group">
                   About
                   <span
                       class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
               </a>
               <a href="{{ route('user.courses') }}"
                   class="{{ request()->routeIs('user.courses') ? 'text-primary bg-primary/10' : '' }} px-4 py-2 rounded-md text-gray-800 hover:text-primary hover:bg-primary hover:bg-opacity-10 transition-all duration-300 relative group">

                   Courses
                   <span
                       class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
               </a>
               <a href="{{ route('user.faculty') }}"
                   class="{{ request()->routeIs('user.faculty') ? 'text-primary bg-primary/10' : '' }} px-4 py-2 rounded-md text-gray-800 hover:text-primary hover:bg-primary hover:bg-opacity-10 transition-all duration-300 relative group">
                   Faculty
                   <span
                       class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
               </a>
               <a href="{{ route('user.comingsoon') }}"
                   class="px-4 py-2 rounded-md text-gray-800 hover:text-primary hover:bg-primary hover:bg-opacity-10 transition-all duration-300 relative group">
                   Admission
                   <span
                       class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
               </a>
               <a href="{{ route('user.comingsoon') }}"
                   class="px-4 py-2 rounded-md text-gray-800 hover:text-primary hover:bg-primary hover:bg-opacity-10 transition-all duration-300 relative group">
                   Results
                   <span
                       class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
               </a>

           </nav>
           <!-- Mobile menu button -->
           <button id="mobile-menu-button"
               class="md:hidden focus:outline-none bg-primary/10 p-2 rounded-md hover:bg-primary/20 transition-colors duration-300">
               <i class="fas fa-bars text-primary"></i>
           </button>

           <!-- Mobile menu panel (hidden by default) -->
           <div id="mobile-menu" class="hidden fixed inset-0 z-50 md:hidden">
               <div class="absolute inset-0 bg-black opacity-50" id="mobile-menu-overlay"></div>
               <div class="absolute right-0 top-0 w-64 bg-white h-full shadow-lg p-4">
                   <div class="flex justify-between items-center mb-5">
                       <h3 class="text-lg font-semibold text-primary">Menu</h3>
                       <button id="close-menu" class="text-gray-500 hover:text-primary">
                           <i class="fas fa-times"></i>
                       </button>
                   </div>
                   <nav class="flex flex-col space-y-3">
                       <a href="{{ route('user.home') }}"
                           class="{{ request()->routeIs('user.home') ? 'text-primary bg-primary/10' : 'text-gray-800' }} px-4 py-2 rounded-md hover:bg-primary/10">Home</a>
                       <a href="{{ route('user.notice') }}"
                           class="{{ request()->routeIs('user.notice') ? 'text-primary bg-primary/10' : 'text-gray-800' }} px-4 py-2 rounded-md hover:bg-primary/10">Notice</a>
                       <a href="{{ route('user.about') }}"  class="{{ request()->routeIs('user.about') ? 'text-primary bg-primary/10' : 'text-gray-800' }} px-4 py-2 rounded-md hover:bg-primary/10">About</a>
                       <a href="{{ route('user.courses') }}"
                           class="{{ request()->routeIs('user.courses') ? 'text-primary bg-primary/10' : 'text-gray-800' }} px-4 py-2 rounded-md hover:bg-primary/10">Courses</a>
                       <a href="{{ route('user.faculty') }}"
                           class="{{ request()->routeIs('user.faculty') ? 'text-primary bg-primary/10' : 'text-gray-800' }} px-4 py-2 rounded-md hover:bg-primary/10">Faculty</a>
                       <a href="{{ route('user.comingsoon') }}"
                           class="text-gray-800 px-4 py-2 rounded-md hover:bg-primary/10">Admission</a>
                       <a href="{{ route('user.comingsoon') }}"
                           class="text-gray-800 px-4 py-2 rounded-md hover:bg-primary/10">Results</a>
                   </nav>
               </div>
           </div>

           <script>
               document.getElementById('mobile-menu-button').addEventListener('click', function() {
                   document.getElementById('mobile-menu').classList.remove('hidden');
               });

               document.getElementById('close-menu').addEventListener('click', function() {
                   document.getElementById('mobile-menu').classList.add('hidden');
               });

               document.getElementById('mobile-menu-overlay').addEventListener('click', function() {
                   document.getElementById('mobile-menu').classList.add('hidden');
               });
           </script>
       </div>
   </header>
