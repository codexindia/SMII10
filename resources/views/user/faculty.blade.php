@extends('user.layouts.app')
@section('title', 'Faculty')
@section('content')
 <!-- Page Header -->
 <section class="py-16 bg-gradient-to-r from-primary to-tertiary text-white">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Faculty</h1>
      <p class="text-xl text-white/80 max-w-3xl mx-auto">
        Meet our dedicated team of educators and researchers who are committed to providing excellence in education
      </p>
    </div>
  </section>

  <!-- Faculty Category Filters -->
  {{-- <section class="py-8 bg-white border-b">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap justify-center gap-4">
        <button class="px-6 py-2 bg-primary text-white rounded-full hover:bg-primary/90 transition-all duration-300">
          All Faculty
        </button>
        <button class="px-6 py-2 bg-white text-gray-700 border border-gray-300 rounded-full hover:bg-gray-50 transition-all duration-300">
          Computer Science
        </button>
        <button class="px-6 py-2 bg-white text-gray-700 border border-gray-300 rounded-full hover:bg-gray-50 transition-all duration-300">
          Business Administration
        </button>
        <button class="px-6 py-2 bg-white text-gray-700 border border-gray-300 rounded-full hover:bg-gray-50 transition-all duration-300">
          Data Science
        </button>
        <button class="px-6 py-2 bg-white text-gray-700 border border-gray-300 rounded-full hover:bg-gray-50 transition-all duration-300">
          Arts & Design
        </button>
      </div>
    </div>
  </section> --}}

  <!-- Faculty Leadership Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
        Faculty Leadership
      </h2>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Dean -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
          <div class="relative">
            <img 
              src="https://randomuser.me/api/portraits/men/32.jpg" 
              alt="Dr. Robert Williams" 
              class="w-40 h-40 mx-auto mt-8 rounded-full object-cover border-4 border-primary"
            />
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-bold text-gray-800">Dr. Robert Williams</h3>
            <p class="text-secondary font-medium mb-3">Dean of Faculty</p>
            <p class="text-sm text-gray-600 mb-4">Ph.D. in Educational Leadership, Harvard University</p>
            <p class="text-gray-700 mb-4">
              Dr. Williams brings over 20 years of experience in academic leadership and has been instrumental in developing our innovative curriculum.
            </p>
            <div class="flex justify-center space-x-3">
              <a href="#" class="text-primary hover:text-primary/80 transition-colors duration-300">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary/80 transition-colors duration-300">
                <i class="far fa-envelope"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary/80 transition-colors duration-300">
                <i class="fas fa-globe"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Associate Dean -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
          <div class="relative">
            <img 
              src="https://randomuser.me/api/portraits/women/44.jpg" 
              alt="Dr. Sarah Johnson" 
              class="w-40 h-40 mx-auto mt-8 rounded-full object-cover border-4 border-primary"
            />
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-bold text-gray-800">Dr. Sarah Johnson</h3>
            <p class="text-secondary font-medium mb-3">Associate Dean</p>
            <p class="text-sm text-gray-600 mb-4">Ph.D. in Business Administration, Stanford University</p>
            <p class="text-gray-700 mb-4">
              Dr. Johnson oversees academic programs and faculty development. Her research focuses on organizational leadership and innovation.
            </p>
            <div class="flex justify-center space-x-3">
              <a href="#" class="text-primary hover:text-primary/80 transition-colors duration-300">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary/80 transition-colors duration-300">
                <i class="far fa-envelope"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary/80 transition-colors duration-300">
                <i class="fas fa-globe"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Director of Research -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
          <div class="relative">
            <img 
              src="https://randomuser.me/api/portraits/men/62.jpg" 
              alt="Dr. Michael Chen" 
              class="w-40 h-40 mx-auto mt-8 rounded-full object-cover border-4 border-primary"
            />
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-bold text-gray-800">Dr. Michael Chen</h3>
            <p class="text-secondary font-medium mb-3">Director of Research</p>
            <p class="text-sm text-gray-600 mb-4">Ph.D. in Computer Science, MIT</p>
            <p class="text-gray-700 mb-4">
              Dr. Chen leads our research initiatives and has published extensively in artificial intelligence and machine learning.
            </p>
            <div class="flex justify-center space-x-3">
              <a href="#" class="text-primary hover:text-primary/80 transition-colors duration-300">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary/80 transition-colors duration-300">
                <i class="far fa-envelope"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary/80 transition-colors duration-300">
                <i class="fas fa-globe"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Department Faculty Section -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-4 text-gray-800">
        All Faculty Members
      </h2>
      <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto">
        Our faculty members are dedicated to providing a high-quality education and fostering a culture of research and innovation. 
      </p>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Faculty Member 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="p-6 text-center">
            <img 
              src="https://randomuser.me/api/portraits/men/42.jpg" 
              alt="Prof. John Smith" 
              class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-primary/20"
            />
            <h3 class="text-xl font-bold mt-4 text-gray-800">Prof. John Smith</h3>
            <p class="text-primary font-medium">Professor of AI</p>
            <p class="text-sm text-gray-600 mt-2">Ph.D., Computer Science</p>
            <div class="border-t border-gray-100 my-4 pt-4">
              <p class="text-sm text-gray-700">
                Specializes in artificial intelligence and neural networks
              </p>
            </div>
            <div class="flex justify-center space-x-3 mt-4">
              <a href="#" class="text-gray-500 hover:text-primary transition-colors duration-300">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-gray-500 hover:text-primary transition-colors duration-300">
                <i class="far fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Faculty Member 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="p-6 text-center">
            <img 
              src="https://randomuser.me/api/portraits/women/26.jpg" 
              alt="Dr. Emily Chen" 
              class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-primary/20"
            />
            <h3 class="text-xl font-bold mt-4 text-gray-800">Dr. Emily Chen</h3>
            <p class="text-primary font-medium">Associate Professor</p>
            <p class="text-sm text-gray-600 mt-2">Ph.D., Software Engineering</p>
            <div class="border-t border-gray-100 my-4 pt-4">
              <p class="text-sm text-gray-700">
                Expert in software architecture and development methodologies
              </p>
            </div>
            <div class="flex justify-center space-x-3 mt-4">
              <a href="#" class="text-gray-500 hover:text-primary transition-colors duration-300">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-gray-500 hover:text-primary transition-colors duration-300">
                <i class="far fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Faculty Member 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="p-6 text-center">
            <img 
              src="https://randomuser.me/api/portraits/men/55.jpg" 
              alt="Dr. Jason Lee" 
              class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-primary/20"
            />
            <h3 class="text-xl font-bold mt-4 text-gray-800">Dr. Jason Lee</h3>
            <p class="text-primary font-medium">Assistant Professor</p>
            <p class="text-sm text-gray-600 mt-2">Ph.D., Cybersecurity</p>
            <div class="border-t border-gray-100 my-4 pt-4">
              <p class="text-sm text-gray-700">
                Focuses on network security and ethical hacking
              </p>
            </div>
            <div class="flex justify-center space-x-3 mt-4">
              <a href="#" class="text-gray-500 hover:text-primary transition-colors duration-300">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-gray-500 hover:text-primary transition-colors duration-300">
                <i class="far fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Faculty Member 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="p-6 text-center">
            <img 
              src="https://randomuser.me/api/portraits/women/65.jpg" 
              alt="Dr. Lisa Wong" 
              class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-primary/20"
            />
            <h3 class="text-xl font-bold mt-4 text-gray-800">Dr. Lisa Wong</h3>
            <p class="text-primary font-medium">Associate Professor</p>
            <p class="text-sm text-gray-600 mt-2">Ph.D., Human-Computer Interaction</p>
            <div class="border-t border-gray-100 my-4 pt-4">
              <p class="text-sm text-gray-700">
                Researches user experience and interface design
              </p>
            </div>
            <div class="flex justify-center space-x-3 mt-4">
              <a href="#" class="text-gray-500 hover:text-primary transition-colors duration-300">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-gray-500 hover:text-primary transition-colors duration-300">
                <i class="far fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      
     
    </div>
  </section>
  
  
  
  <!-- Faculty Research & Publications Section -->
  {{-- <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-4 text-gray-800">
        Faculty Research & Publications
      </h2>
      <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto">
        Our faculty members are actively engaged in cutting-edge research across various disciplines
      </p>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Recent Publication 1 -->
        <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-shadow duration-300">
          <div class="flex items-start">
            <div class="bg-primary/10 rounded-full p-3 mr-4">
              <i class="fas fa-book text-primary text-xl"></i>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gray-800">Machine Learning Applications in Healthcare</h3>
              <p class="text-primary mb-2">Dr. John Smith, Dr. Emily Chen</p>
              <p class="text-gray-600 mb-3">Published in International Journal of Medical Informatics, 2023</p>
              <p class="text-gray-700">This research explores novel applications of machine learning algorithms for early disease detection and patient monitoring.</p>
              <a href="#" class="inline-flex items-center text-secondary hover:text-secondary/80 font-medium mt-3">
                Read Abstract
                <i class="fas fa-external-link-alt ml-2"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Recent Publication 2 -->
        <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-shadow duration-300">
          <div class="flex items-start">
            <div class="bg-primary/10 rounded-full p-3 mr-4">
              <i class="fas fa-book text-primary text-xl"></i>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gray-800">Sustainable Business Practices in Emerging Markets</h3>
              <p class="text-primary mb-2">Dr. Rachel Kim, Dr. James Wilson</p>
              <p class="text-gray-600 mb-3">Published in Journal of International Business Studies, 2023</p>
              <p class="text-gray-700">An examination of how companies implement sustainable practices in developing economies and their impact on local communities.</p>
              <a href="#" class="inline-flex items-center text-secondary hover:text-secondary/80 font-medium mt-3">
                Read Abstract
                <i class="fas fa-external-link-alt ml-2"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Recent Publication 3 -->
        <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-shadow duration-300">
          <div class="flex items-start">
            <div class="bg-primary/10 rounded-full p-3 mr-4">
              <i class="fas fa-book text-primary text-xl"></i>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gray-800">Cybersecurity Frameworks for Critical Infrastructure</h3>
              <p class="text-primary mb-2">Dr. Jason Lee, Dr. Michael Chen</p>
              <p class="text-gray-600 mb-3">Published in International Journal of Critical Infrastructure Protection, 2022</p>
              <p class="text-gray-700">A comprehensive analysis of cybersecurity protocols for protecting essential infrastructure from emerging threats.</p>
              <a href="#" class="inline-flex items-center text-secondary hover:text-secondary/80 font-medium mt-3">
                Read Abstract
                <i class="fas fa-external-link-alt ml-2"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Recent Publication 4 -->
        <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-shadow duration-300">
          <div class="flex items-start">
            <div class="bg-primary/10 rounded-full p-3 mr-4">
              <i class="fas fa-book text-primary text-xl"></i>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gray-800">User Interface Design Principles for Educational Applications</h3>
              <p class="text-primary mb-2">Dr. Lisa Wong, Prof. Amanda Garcia</p>
              <p class="text-gray-600 mb-3">Published in Journal of Educational Technology, 2022</p>
              <p class="text-gray-700">This study presents a framework for designing effective and accessible user interfaces for educational software and platforms.</p>
              <a href="#" class="inline-flex items-center text-secondary hover:text-secondary/80 font-medium mt-3">
                Read Abstract
                <i class="fas fa-external-link-alt ml-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-10">
        <a href="#" class="bg-primary hover:bg-primary/90 text-white py-2 px-6 rounded-full transition-all duration-300 inline-flex items-center">
          View All Research Publications
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </section> --}}
  
  <!-- Join Our Faculty Section -->
  {{-- <section class="py-16 bg-gradient-to-r from-primary/90 to-tertiary/90 text-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Join Our Faculty</h2>
      <p class="text-xl mb-10 max-w-3xl mx-auto">
        We're always looking for talented educators and researchers to join our team. Explore current opportunities at AHE Skill Development College.
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="#" class="bg-white text-primary font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition duration-300 transform hover:scale-105">
          View Open Positions
        </a>
        <a href="#" class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition duration-300 transform hover:scale-105">
          Contact Faculty Affairs
        </a>
      </div>
    </div>
  </section> --}}
@endsection