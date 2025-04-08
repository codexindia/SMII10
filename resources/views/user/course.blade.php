@extends('user.layouts.app')
@section('title', 'Course')
@section('content')
<section class="py-20 bg-gradient-to-r from-primary to-tertiary text-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Excellence in Education on Campus</h1>
        <p class="text-xl mb-10 text-white/90">
          Discover our comprehensive academic programs delivered by expert faculty in state-of-the-art campus facilities
        </p>
        
        <!-- Updated CTA for campus visit -->
        <div class="flex flex-col sm:flex-row justify-center gap-4">
          <a href="#programs" class="bg-white text-primary font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition duration-300 transform hover:scale-105">
            Explore Programs
          </a>
          <a href="#campus-tour" class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition duration-300 transform hover:scale-105">
            Schedule Campus Tour
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Campus Highlights Section - New section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
        Campus Experience
      </h2>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-50 rounded-lg p-6 text-center">
          <div class="rounded-full bg-primary/10 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
            <i class="fas fa-chalkboard-teacher text-primary text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Expert Faculty</h3>
          <p class="text-gray-600">Learn directly from industry professionals and experienced educators in interactive classroom settings.</p>
        </div>
        
        <div class="bg-gray-50 rounded-lg p-6 text-center">
          <div class="rounded-full bg-primary/10 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
            <i class="fas fa-laptop text-primary text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Modern Facilities</h3>
          <p class="text-gray-600">Access cutting-edge labs, libraries, and learning spaces equipped with the latest technology.</p>
        </div>
        
        <div class="bg-gray-50 rounded-lg p-6 text-center">
          <div class="rounded-full bg-primary/10 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
            <i class="fas fa-users text-primary text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-3 text-gray-800">Community</h3>
          <p class="text-gray-600">Join a vibrant campus community with networking opportunities, clubs, and events.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Academic Departments Section - Instead of Categories -->
  <section id="programs" class="py-16 bg-gray-50 border-t border-gray-200">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
      Academic Departments
      </h2>
      
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-7 gap-6">
      <!-- Department 1 -->
      <div class="bg-white shadow-md rounded-lg p-6 text-center cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-primary/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-laptop-code text-primary text-2xl"></i>
        </div>
        <h3 class="font-semibold text-gray-800">Computer Science</h3>
        <p class="text-sm text-gray-600 mt-2">3 Programs</p>
      </div>
      
      <!-- Department 2 -->
      <div class="bg-white shadow-md rounded-lg p-6 text-center cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-secondary/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-microchip text-secondary text-2xl"></i>
        </div>
        <h3 class="font-semibold text-gray-800">Electronics </h3>
        <p class="text-sm text-gray-600 mt-2">2 Programs</p>
      </div>
      
      <!-- Department 3 -->
      <div class="bg-white shadow-md rounded-lg p-6 text-center cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-tertiary/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-book text-tertiary text-2xl"></i>
        </div>
        <h3 class="font-semibold text-gray-800">Communication</h3>
        <p class="text-sm text-gray-600 mt-2">1 Programs</p>
      </div>
      
      <!-- Department 4 -->
      <div class="bg-white shadow-md rounded-lg p-6 text-center cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-accent/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-seedling text-accent text-2xl"></i>
        </div>
        <h3 class="font-semibold text-gray-800">Agriculture & Environmental Sciences</h3>
        <p class="text-sm text-gray-600 mt-2">2 Programs</p>
      </div>
      
      <!-- Department 5 -->
      <div class="bg-white shadow-md rounded-lg p-6 text-center cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-primary/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-concierge-bell text-primary text-2xl"></i>
        </div>
        <h3 class="font-semibold text-gray-800">Hospitality and Tourism</h3>
        <p class="text-sm text-gray-600 mt-2">1 Programs</p>
      </div>
      
      <!-- Department 6 -->
      <div class="bg-white shadow-md rounded-lg p-6 text-center cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-secondary/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-spa text-secondary text-2xl"></i>
        </div>
        <h3 class="font-semibold text-gray-800">Beauty and Wellness</h3>
        <p class="text-sm text-gray-600 mt-2">1 Programs</p>
      </div>
       <!-- Department 7 -->
       <div class="bg-white shadow-md rounded-lg p-6 text-center cursor-pointer transition duration-300 transform hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-secondary/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-newspaper text-secondary text-2xl"></i>
        </div>
        <h3 class="font-semibold text-gray-800">Media Studies / Mass Communication</h3>
        <p class="text-sm text-gray-600 mt-2">1 Programs</p>
      </div>
      </div>
    </div>
  </section>

  <!-- Featured Programs Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
        Featured Academic Programs
      </h2>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Program 1 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden h-full hover:shadow-xl transition-shadow duration-300">
          <div class="relative">
            <img
              src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
              alt="Computer Science Program"
              class="w-full h-48 object-cover"
            />
            <div class="absolute top-4 right-4 bg-accent text-white text-xs font-bold px-2 py-1 rounded-full">
              Popular
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center mb-3">
              <span class="bg-primary/10 text-primary text-xs font-medium px-2.5 py-1 rounded">Computer Science</span>
              <div class="ml-auto flex items-center text-gray-600">
                <i class="fas fa-user-graduate text-sm mr-1"></i>
                <span class="text-sm font-medium">250+ Alumni</span>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-800">B.Sc in Computer Science</h3>
            <p class="text-gray-600 text-sm mb-4">
              Comprehensive program covering programming, algorithms, data structures, and software development with hands-on practical training.
            </p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <div class="flex items-center mr-4">
                <i class="far fa-calendar-alt mr-1"></i>
                <span>4 Years</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-chalkboard mr-1"></i>
                <span>On Campus</span>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-sm bg-tertiary/10 text-tertiary px-2 py-1 rounded">Enrolling Now</span>
              <a href="program-details.html" class="bg-primary hover:bg-primary/90 text-white py-2 px-4 rounded-md transition duration-300">
                Learn More
              </a>
            </div>
          </div>
        </div>
        
        <!-- Program 2 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden h-full hover:shadow-xl transition-shadow duration-300">
          <div class="relative">
            <img
              src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
              alt="Business Administration"
              class="w-full h-48 object-cover"
            />
            <div class="absolute top-4 right-4 bg-tertiary text-white text-xs font-bold px-2 py-1 rounded-full">
              High Placement
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center mb-3">
              <span class="bg-secondary/10 text-secondary text-xs font-medium px-2.5 py-1 rounded">Business</span>
              <div class="ml-auto flex items-center text-gray-600">
                <i class="fas fa-user-graduate text-sm mr-1"></i>
                <span class="text-sm font-medium">300+ Alumni</span>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-800">BBA in Business Administration</h3>
            <p class="text-gray-600 text-sm mb-4">
              Learn management principles, marketing strategies, finance, and organizational leadership with industry case studies.
            </p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <div class="flex items-center mr-4">
                <i class="far fa-calendar-alt mr-1"></i>
                <span>3 Years</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-chalkboard mr-1"></i>
                <span>On Campus</span>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-sm bg-tertiary/10 text-tertiary px-2 py-1 rounded">Enrolling Now</span>
              <a href="program-details.html" class="bg-primary hover:bg-primary/90 text-white py-2 px-4 rounded-md transition duration-300">
                Learn More
              </a>
            </div>
          </div>
        </div>
        
        <!-- Program 3 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden h-full hover:shadow-xl transition-shadow duration-300">
          <div class="relative">
            <img
              src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
              alt="Data Science"
              class="w-full h-48 object-cover"
            />
          </div>
          <div class="p-6">
            <div class="flex items-center mb-3">
              <span class="bg-tertiary/10 text-tertiary text-xs font-medium px-2.5 py-1 rounded">Data Science</span>
              <div class="ml-auto flex items-center text-gray-600">
                <i class="fas fa-user-graduate text-sm mr-1"></i>
                <span class="text-sm font-medium">150+ Alumni</span>
              </div>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-800">B.Sc in Data Science</h3>
            <p class="text-gray-600 text-sm mb-4">
              Master data analysis, machine learning, statistical modeling, and big data technologies in our cutting-edge data labs.
            </p>
            <div class="flex items-center text-sm text-gray-500 mb-4">
              <div class="flex items-center mr-4">
                <i class="far fa-calendar-alt mr-1"></i>
                <span>4 Years</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-chalkboard mr-1"></i>
                <span>On Campus</span>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-sm bg-tertiary/10 text-tertiary px-2 py-1 rounded">Enrolling Now</span>
              <a href="program-details.html" class="bg-primary hover:bg-primary/90 text-white py-2 px-4 rounded-md transition duration-300">
                Learn More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- All Programs Section -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
        All Academic Programs
      </h2>
      
      <!-- Filters -->
      <div class="mb-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        <div class="flex flex-wrap gap-3">
          <button class="bg-primary text-white px-4 py-2 rounded-full text-sm hover:bg-primary/90 transition duration-300">
            All Programs
          </button>
          <button class="bg-white text-gray-700 px-4 py-2 rounded-full text-sm border border-gray-300 hover:bg-gray-50 transition duration-300">
            Undergraduate
          </button>
          <button class="bg-white text-gray-700 px-4 py-2 rounded-full text-sm border border-gray-300 hover:bg-gray-50 transition duration-300">
            Postgraduate
          </button>
          <button class="bg-white text-gray-700 px-4 py-2 rounded-full text-sm border border-gray-300 hover:bg-gray-50 transition duration-300">
            Diploma
          </button>
          <button class="bg-white text-gray-700 px-4 py-2 rounded-full text-sm border border-gray-300 hover:bg-gray-50 transition duration-300">
            Certificate
          </button>
        </div>
      </div>
      
      <!-- Programs List - More formal academic style -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50 border-b">
              <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-800">Program Name</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-800">Department</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-800">Duration</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-800">Level</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-800">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <!-- Program 1 -->
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                  <div>
                    <h4 class="text-base font-medium text-gray-800">B.Sc in Computer Science</h4>
                    <p class="text-sm text-gray-500">Comprehensive program in computing fundamentals</p>
                  </div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500">Computer Science</td>
                <td class="px-6 py-4 text-sm text-gray-500">4 Years</td>
                <td class="px-6 py-4">
                  <span class="bg-primary/10 text-primary text-xs font-medium px-2 py-1 rounded">Undergraduate</span>
                </td>
                <td class="px-6 py-4">
                  <a href="program-details.html" class="text-primary hover:text-primary/80 text-sm font-medium">View Details</a>
                </td>
              </tr>
              
              <!-- Program 2 -->
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                  <div>
                    <h4 class="text-base font-medium text-gray-800">BBA in Business Administration</h4>
                    <p class="text-sm text-gray-500">Foundation in business management principles</p>
                  </div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500">Business</td>
                <td class="px-6 py-4 text-sm text-gray-500">3 Years</td>
                <td class="px-6 py-4">
                  <span class="bg-primary/10 text-primary text-xs font-medium px-2 py-1 rounded">Undergraduate</span>
                </td>
                <td class="px-6 py-4">
                  <a href="program-details.html" class="text-primary hover:text-primary/80 text-sm font-medium">View Details</a>
                </td>
              </tr>
              
              <!-- Program 3 -->
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                  <div>
                    <h4 class="text-base font-medium text-gray-800">M.Sc in Data Science</h4>
                    <p class="text-sm text-gray-500">Advanced study in analytics and machine learning</p>
                  </div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500">Data Science</td>
                <td class="px-6 py-4 text-sm text-gray-500">2 Years</td>
                <td class="px-6 py-4">
                  <span class="bg-secondary/10 text-secondary text-xs font-medium px-2 py-1 rounded">Postgraduate</span>
                </td>
                <td class="px-6 py-4">
                  <a href="program-details.html" class="text-primary hover:text-primary/80 text-sm font-medium">View Details</a>
                </td>
              </tr>
              
              <!-- Program 4 -->
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                  <div>
                    <h4 class="text-base font-medium text-gray-800">Diploma in Graphic Design</h4>
                    <p class="text-sm text-gray-500">Practical training in visual communication</p>
                  </div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500">Arts & Design</td>
                <td class="px-6 py-4 text-sm text-gray-500">1 Year</td>
                <td class="px-6 py-4">
                  <span class="bg-tertiary/10 text-tertiary text-xs font-medium px-2 py-1 rounded">Diploma</span>
                </td>
                <td class="px-6 py-4">
                  <a href="program-details.html" class="text-primary hover:text-primary/80 text-sm font-medium">View Details</a>
                </td>
              </tr>
              
              <!-- Program 5 -->
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                  <div>
                    <h4 class="text-base font-medium text-gray-800">MBA in Marketing</h4>
                    <p class="text-sm text-gray-500">Specialized business administration in marketing strategy</p>
                  </div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500">Business</td>
                <td class="px-6 py-4 text-sm text-gray-500">2 Years</td>
                <td class="px-6 py-4">
                  <span class="bg-secondary/10 text-secondary text-xs font-medium px-2 py-1 rounded">Postgraduate</span>
                </td>
                <td class="px-6 py-4">
                  <a href="program-details.html" class="text-primary hover:text-primary/80 text-sm font-medium">View Details</a>
                </td>
              </tr>
              
              <!-- Program 6 -->
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                  <div>
                    <h4 class="text-base font-medium text-gray-800">Certificate in Digital Marketing</h4>
                    <p class="text-sm text-gray-500">Short-term professional qualification in digital marketing</p>
                  </div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500">Business</td>
                <td class="px-6 py-4 text-sm text-gray-500">6 Months</td>
                <td class="px-6 py-4">
                  <span class="bg-accent/10 text-accent text-xs font-medium px-2 py-1 rounded">Certificate</span>
                </td>
                <td class="px-6 py-4">
                  <a href="program-details.html" class="text-primary hover:text-primary/80 text-sm font-medium">View Details</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <!-- Pagination -->
      <div class="mt-8 flex justify-center">
        <nav class="flex items-center space-x-2">
          <a href="#" class="px-3 py-2 rounded-md bg-white border border-gray-300 text-gray-600 hover:bg-gray-50 transition duration-300">
            <i class="fas fa-chevron-left text-sm"></i>
          </a>
          <a href="#" class="px-4 py-2 rounded-md bg-primary text-white font-medium hover:bg-primary/90 transition duration-300">1</a>
          <a href="#" class="px-4 py-2 rounded-md bg-white border border-gray-300 text-gray-600 hover:bg-gray-50 transition duration-300">2</a>
          <a href="#" class="px-4 py-2 rounded-md bg-white border border-gray-300 text-gray-600 hover:bg-gray-50 transition duration-300">3</a>
          <a href="#" class="px-3 py-2 rounded-md bg-white border border-gray-300 text-gray-600 hover:bg-gray-50 transition duration-300">
            <i class="fas fa-chevron-right text-sm"></i>
          </a>
        </nav>
      </div>
    </div>
  </section>

  <!-- Campus Facilities Section - New section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-4 text-gray-800">
        Our Campus Facilities
      </h2>
      <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto">
        Our state-of-the-art campus provides students with everything they need for an enriching educational experience
      </p>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
          <img 
            src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
            alt="Modern Library" 
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="font-bold text-lg text-gray-800">Modern Library</h3>
            <p class="text-gray-600 text-sm">Extensive collection of books, journals, and digital resources</p>
          </div>
        </div>
        
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
          <img 
            src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
            alt="Computer Labs" 
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="font-bold text-lg text-gray-800">Computer Labs</h3>
            <p class="text-gray-600 text-sm">Cutting-edge technology and software for practical learning</p>
          </div>
        </div>
        
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
          <img 
            src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
            alt="Research Centers" 
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="font-bold text-lg text-gray-800">Research Centers</h3>
            <p class="text-gray-600 text-sm">Dedicated spaces for innovation and advanced research</p>
          </div>
        </div>
        
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
          <img 
            src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
            alt="Recreation Areas" 
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="font-bold text-lg text-gray-800">Recreation Areas</h3>
            <p class="text-gray-600 text-sm">Sports facilities and areas for extracurricular activities</p>
          </div>
        </div>
      </div>
      
      <div class="mt-8 text-center">
        <a id="campus-tour" href="#" class="inline-flex items-center bg-primary hover:bg-primary/90 text-white py-3 px-6 rounded-full transition duration-300">
          <i class="fas fa-map-marker-alt mr-2"></i> Schedule a Campus Tour
        </a>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-20 bg-gradient-to-r from-primary/90 to-tertiary/90 text-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Join Our Campus Community?</h2>
      <p class="text-xl mb-10 max-w-3xl mx-auto">
        Take the next step in your educational journey with AHE Skill Development College. Applications are now open for the upcoming academic year.
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="#" class="bg-white text-primary font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition duration-300 transform hover:scale-105">
          Apply for Admission
        </a>
        <a href="#" class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition duration-300 transform hover:scale-105">
          Download Brochure
        </a>
      </div>
    </div>
  </section>
@endsection