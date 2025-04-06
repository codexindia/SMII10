   <!-- Header -->
   <!-- Top Bar with Social Icons -->
   <div class="bg-gray-100 py-2 shadow-sm">
       <div class="container mx-auto px-4 flex justify-between items-center">
           <div class="flex items-center text-sm text-gray-600">
               <div class="flex items-center mr-6">
                   <i class="fas fa-phone-alt text-primary mr-2"></i>
                   <span>+1 (555) 123-4567</span>
               </div>
               <div class="hidden sm:flex items-center">
                   <i class="fas fa-envelope text-primary mr-2"></i>
                   <span>info@aheskill.edu</span>
               </div>
           </div>
           <div class="flex space-x-3">
               <a href="#" class="text-gray-600 hover:text-primary transition-colors duration-300">
                   <i class="fab fa-whatsapp"></i>
               </a>
               <a href="#" class="text-gray-600 hover:text-primary transition-colors duration-300">
                   <i class="fab fa-facebook-f"></i>
               </a>

               <a href="#" class="text-gray-600 hover:text-tertiary transition-colors duration-300">
                   <i class="fab fa-instagram"></i>
               </a>
               <a href="#" class="text-gray-600 hover:text-accent transition-colors duration-300">
                   <i class="fab fa-linkedin-in"></i>
               </a>
               <a href="#" class="text-gray-600 hover:text-primary transition-colors duration-300">
                   <i class="fab fa-youtube"></i>
               </a>
           </div>
       </div>
   </div>
   <header class="bg-white shadow-lg sticky top-0 z-50">
       <div class="container mx-auto px-4 py-4 flex justify-between items-center">
           <div class="flex items-center">
            <a href="{{ route('user.home') }}" class="flex items-center">
               <i class="fas fa-graduation-cap text-primary text-3xl mr-3"></i>
               <div>
                   <h1
                       class="text-xl md:text-2xl font-bold bg-gradient-to-r from-primary to-tertiary text-transparent bg-clip-text leading-tight">
                       AHE Skill Development College
                   </h1>
                   <p class="text-xs text-gray-600">
                       Academy of Higher Education and Skill Development
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
               <a href="#about"
                   class="px-4 py-2 rounded-md text-gray-800 hover:text-primary hover:bg-primary hover:bg-opacity-10 transition-all duration-300 relative group">
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
           <button
               class="md:hidden focus:outline-none bg-primary/10 p-2 rounded-md hover:bg-primary/20 transition-colors duration-300">
               <i class="fas fa-bars text-primary"></i>
           </button>
       </div>
   </header>
