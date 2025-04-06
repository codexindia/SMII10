 <!-- Sidebar -->

 <div class="fixed inset-y-0 left-0 z-30 w-64 bg-indigo-800 text-white transition-sidebar"
     :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0 md:w-16'">
     <div class="absolute top-2 right-2 md:hidden">
         <button @click="sidebarOpen = false" class="text-white focus:outline-none">
             <i class="fas fa-times"></i>
         </button>
     </div>

     <!-- Institute Logo -->
     <div class="flex items-center justify-center h-16 border-b border-indigo-700">
         <h2 class="text-xl font-bold" x-show="sidebarOpen">
             Institute Admin
         </h2>
         <span x-show="!sidebarOpen" class="md:block hidden text-2xl">🏛️</span>
     </div>

     <!-- Navigation -->
     <nav class="mt-5 px-2">
         <a 
             class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md transition-all duration-300 cursor-pointer"
             >
             <i class="fas fa-tachometer-alt mr-4" :class="sidebarOpen ? '' : 'md:mx-auto'"></i>
             <span x-show="sidebarOpen">Dashboard</span>
         </a>

         <a href="{{ route('admin.notice.index') }}"
             class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md transition-all duration-300 cursor-pointer"
             :class="currentTab === 'notices' ? 'bg-indigo-900 text-white' :
                 'text-indigo-300 hover:text-white hover:bg-indigo-700'">
             <i class="fas fa-bullhorn mr-4" :class="sidebarOpen ? '' : 'md:mx-auto'"></i>
             <span x-show="sidebarOpen">Notices</span>
         </a>

         <a 
             class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md transition-all duration-300 cursor-pointer"
             :class="currentTab === 'faculty' ? 'bg-indigo-900 text-white' :
                 'text-indigo-300 hover:text-white hover:bg-indigo-700'">
             <i class="fas fa-chalkboard-teacher mr-4" :class="sidebarOpen ? '' : 'md:mx-auto'"></i>
             <span x-show="sidebarOpen">Faculty</span>
         </a>

         <a 
             class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md transition-all duration-300 cursor-pointer"
             :class="currentTab === 'courses' ? 'bg-indigo-900 text-white' :
                 'text-indigo-300 hover:text-white hover:bg-indigo-700'">
             <i class="fas fa-book mr-4" :class="sidebarOpen ? '' : 'md:mx-auto'"></i>
             <span x-show="sidebarOpen">Courses</span>
         </a>

         <a 
             class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md transition-all duration-300 cursor-pointer"
             :class="currentTab === 'students' ? 'bg-indigo-900 text-white' :
                 'text-indigo-300 hover:text-white hover:bg-indigo-700'">
             <i class="fas fa-user-graduate mr-4" :class="sidebarOpen ? '' : 'md:mx-auto'"></i>
             <span x-show="sidebarOpen">Students</span>
         </a>

         <a 
             class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md transition-all duration-300 cursor-pointer"
             :class="currentTab === 'settings' ? 'bg-indigo-900 text-white' :
                 'text-indigo-300 hover:text-white hover:bg-indigo-700'">
             <i class="fas fa-cog mr-4" :class="sidebarOpen ? '' : 'md:mx-auto'"></i>
             <span x-show="sidebarOpen">Settings</span>
         </a>
     </nav>
 </div>
 <div class="transition-sidebar" :class="sidebarOpen ? 'md:ml-64' : 'md:ml-16'">
     <!-- Top Navigation -->
     <div class="bg-white shadow-sm">
         <div class="flex justify-between items-center py-3 px-4">
             <button @click="sidebarOpen = !sidebarOpen" class="text-gray-600 focus:outline-none">
                 <i class="fas fa-bars"></i>
             </button>

             <div class="flex items-center">
                 <div class="relative">
                     <button class="flex items-center text-gray-600 focus:outline-none">
                         <i class="fas fa-bell mr-4"></i>
                     </button>
                 </div>
                 <div class="relative ml-4">
                     <button class="flex items-center text-gray-600 focus:outline-none">
                         <span class="h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center">
                             <i class="fas fa-user"></i>
                         </span>
                         <span class="ml-2">Admin</span>
                         <i class="fas fa-chevron-down ml-2"></i>
                     </button>
                 </div>
             </div>
         </div>
     </div>

