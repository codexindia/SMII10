@extends('user.layouts.app')
@section('content')
    <section class="py-4 bg-gray-50 border-b border-gray-200">
        <div class="container mx-auto">
            <div class="relative overflow-hidden" id="notice-slider">
                <div class="flex transition-transform duration-500 ease-in-out" id="notice-slides">
                    <!-- Notice 1 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="bg-primary/10 border-l-4 border-primary rounded-r-md p-4 flex items-center">
                            <i class="fas fa-bullhorn text-primary text-xl mr-4"></i>
                            <div>
                                <h3 class="font-bold text-primary">
                                    Emergency Notification
                                </h3>
                                <p class="text-gray-700">
                                    Campus will be closed on July 25 due to scheduled
                                    maintenance. All classes will be conducted online.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Notice 2 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="bg-secondary/10 border-l-4 border-secondary rounded-r-md p-4 flex items-center">
                            <i class="fas fa-calendar-alt text-secondary text-xl mr-4"></i>
                            <div>
                                <h3 class="font-bold text-secondary">Upcoming Event</h3>
                                <p class="text-gray-700">
                                    Annual cultural fest "Vibrance 2023" starts next week.
                                    Register now to participate!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Notice 3 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="bg-tertiary/10 border-l-4 border-tertiary rounded-r-md p-4 flex items-center">
                            <i class="fas fa-trophy text-tertiary text-xl mr-4"></i>
                            <div>
                                <h3 class="font-bold text-tertiary">Achievement</h3>
                                <p class="text-gray-700">
                                    Our students won first prize in the National Coding
                                    Competition. Congratulations to the team!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <button
                    class="absolute top-1/2 left-2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 rounded-full w-8 h-8 flex items-center justify-center shadow-md z-10"
                    id="prev-notice">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button
                    class="absolute top-1/2 right-2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 rounded-full w-8 h-8 flex items-center justify-center shadow-md z-10"
                    id="next-notice">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <!-- Indicators -->
                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 flex space-x-2 mb-2">
                    <button class="w-2 h-2 rounded-full bg-primary" data-index="0"></button>
                    <button class="w-2 h-2 rounded-full bg-gray-300" data-index="1"></button>
                    <button class="w-2 h-2 rounded-full bg-gray-300" data-index="2"></button>
                </div>
            </div>
        </div>


    </section>
    <!-- Hero Section -->
    <section id="home" class="bg-primary text-white py-20 overflow-hidden">
        <div class="container mx-auto px-4 flex flex-col items-center relative">
            <!-- Animated background elements -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="animate-pulse opacity-10 absolute -top-20 -right-20 w-64 h-64 rounded-full bg-white"></div>
                <div class="animate-pulse opacity-10 absolute top-40 -left-20 w-80 h-80 rounded-full bg-white"></div>
                <div class="animate-pulse opacity-10 absolute bottom-0 right-20 w-40 h-40 rounded-full bg-white"></div>
            </div>

            <h2 class="text-4xl md:text-5xl font-bold text-center mb-6 animate-fadeIn opacity-0"
                style="animation: fadeInUp 1s ease forwards">
                Welcome to AHE Skill Development College
            </h2>
            <p class="text-xl text-center max-w-2xl mb-10 animate-fadeIn opacity-0"
                style="animation: fadeInUp 1s ease 0.3s forwards">
                Empowering minds, Shaping futures. Excellence in education since
                2005.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 animate-fadeIn opacity-0"
                style="animation: fadeInUp 1s ease 0.6s forwards">
                <a href="#courses"
                    class="bg-white text-primary font-bold py-3 px-6 rounded-full hover:bg-gray-100 transition duration-300 transform hover:scale-105 hover:-translate-y-1">
                    Explore Courses
                </a>
                <a href="#contact"
                    class="bg-transparent border-2 border-white text-white font-bold py-3 px-6 rounded-full hover:bg-white hover:text-primary transition duration-300 transform hover:scale-105 hover:-translate-y-1">
                    Contact Us
                </a>
            </div>
        </div>
    </section>



    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                About Our College
            </h2>
            <div class="flex flex-col md:flex-row items-center gap-10">
                <div class="md:w-1/2 flex items-center justify-center">
                    <img src="{{ asset('user/images/heroImg1.jpg') }}" alt="Campus Image"
                        class="rounded-lg shadow-lg w-full h-64 sm:h-80 md:h-96 lg:h-[400px] object-cover object-center" />
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold mb-4 text-secondary">
                        Our Vision
                    </h3>
                    <p class="text-gray-700 mb-6">
                        At AHE Skill Development College, we are dedicated to providing
                        high-quality education that prepares students for real-world
                        challenges. Our innovative approach to learning combines
                        theoretical knowledge with practical applications.
                    </p>

                    <h3 class="text-2xl font-semibold mb-4 text-secondary">
                        Our Mission
                    </h3>
                    <p class="text-gray-700 mb-6">
                        To create a nurturing environment where students can discover
                        their potential, develop their skills, and grow into responsible
                        global citizens ready to make a positive impact on society.
                    </p>

                    <div class="grid grid-cols-2 gap-4 mt-6">
                        <div class="flex items-center">
                            <i class="fas fa-graduation-cap text-tertiary text-2xl mr-3"></i>
                            <span class="text-gray-800">Qualified Faculty</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-book text-tertiary text-2xl mr-3"></i>
                            <span class="text-gray-800">Modern Curriculum</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-flask text-tertiary text-2xl mr-3"></i>
                            <span class="text-gray-800">State-of-art Labs</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-medal text-tertiary text-2xl mr-3"></i>
                            <span class="text-gray-800">Industry Recognition</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- College Gallery Section -->
        <div class="mt-16">
            <h3 class="text-2xl font-semibold text-center mb-8 text-secondary">
                Campus Gallery
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Gallery Item 1 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                        alt="Modern Library"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">Modern Library</h4>
                        <p class="text-gray-200 text-sm mt-2">
                            Our state-of-the-art library houses over 50,000 books and
                            digital resources for students.
                        </p>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1595113316349-9fa4eb24f884?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                        alt="Computer Laboratory"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">Computer Labs</h4>
                        <p class="text-gray-200 text-sm mt-2">
                            Equipped with the latest hardware and software to support
                            hands-on learning experiences.
                        </p>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1607237138185-eedd9c632b0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                        alt="Science Laboratory"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">Science Labs</h4>
                        <p class="text-gray-200 text-sm mt-2">
                            Cutting-edge facilities for research and experiments in
                            physics, chemistry, and biology.
                        </p>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                        alt="Collaborative Workspace"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">
                            Collaborative Spaces
                        </h4>
                        <p class="text-gray-200 text-sm mt-2">
                            Dedicated areas where students can work together on projects
                            and exchange ideas.
                        </p>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1517164850305-99a3e65bb47e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                        alt="Auditorium"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">Modern Auditorium</h4>
                        <p class="text-gray-200 text-sm mt-2">
                            A 500-seat auditorium with advanced acoustics for lectures,
                            performances, and events.
                        </p>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                        alt="Sports Facilities"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">Sports Complex</h4>
                        <p class="text-gray-200 text-sm mt-2">
                            Comprehensive sports facilities including indoor courts,
                            swimming pool, and fitness center.
                        </p>
                    </div>
                </div>
            </div>

            <!-- <div class="text-center mt-8">
                  <a href="#" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-full hover:bg-primary/90 transition duration-300 transform hover:-translate-y-1 shadow-md">
                    Take a Virtual Tour
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </div> -->
        </div>
    </section>
    <!-- Training & Placement Partners Section -->
    <section class="py-16 bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                Our Training & Placement Partners
            </h2>

            <div class="relative overflow-hidden">
                <div class="logos-slide flex items-center">
                    <!-- Partner Logos -->
                    <div class="mx-8 flex-shrink-0">
                        <img src="{{ asset('user/images/collabera.png') }}" alt="Microsoft" class="h-12 md:h-16 object-contain" />
                    </div>

                    <div class="mx-8 flex-shrink-0">
                        <img src="{{ asset('user/images/ifcokissan.png') }}" alt="Microsoft" class="h-12 md:h-16 object-contain" />
                    </div>
                    <div class="mx-8 flex-shrink-0">
                        <img src="{{ asset('user/images/jio-logo-icon.png') }}" alt="Microsoft" class="h-12 md:h-16 object-contain" />
                    </div>
                    <div class="mx-8 flex-shrink-0">
                        <img src="{{ asset('user/images/Paytm_logo.jpg') }}" alt="Microsoft" class="h-12 md:h-16 object-contain" />
                    </div>
                    <div class="mx-8 flex-shrink-0">
                        <img src="{{ asset('user/images/TCS_Tata_Consultancy_Services.webp') }}" alt="Microsoft"
                            class="h-12 md:h-16 object-contain" />
                    </div>
                    <div class="mx-8 flex-shrink-0">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Microsoft_logo_%282012%29.svg/512px-Microsoft_logo_%282012%29.svg.png"
                            alt="Microsoft" class="h-12 md:h-16 object-contain" />
                    </div>
                    <div class="mx-8 flex-shrink-0">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/IBM_logo.svg/512px-IBM_logo.svg.png"
                            alt="IBM" class="h-12 md:h-16 object-contain" />
                    </div>
                    <div class="mx-8 flex-shrink-0">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/512px-Google_2015_logo.svg.png"
                            alt="Google" class="h-12 md:h-16 object-contain" />
                    </div>
                </div>
            </div>

            
        </div>

      

        <style>
            .logos-slide {
                display: inline-flex;
                animation: scroll 20s linear infinite;
            }

            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            .logos-slide:hover {
                animation-play-state: paused;
            }
        </style>
    </section>

    <!-- Academic Partners Section -->
    <section class="py-16 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                Our Academic Partners
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 items-center justify-items-center">
                <!-- Partner 1 -->
                <div class="flex items-center justify-center p-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Intel_logo_%282006-2020%29.svg"
                        alt="Harvard University" class="h-16 md:h-20 object-contain" />
                </div>

                <!-- Partner 2 -->
                <div class="flex items-center justify-center p-4">
                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b4/NIELIT_Logo.jpg" alt="MIT"
                        class="h-16 md:h-20 object-contain" />
                </div>

                <!-- Partner 3 -->
                <div class="flex items-center justify-center p-4">
                    <img src="https://www.uxdt.nic.in/wp-content/uploads/2020/06/NSDC-Preview.png?x76268"
                        alt="Stanford University" class="h-16 md:h-20 object-contain" />
                </div>

                <!-- Partner 4 -->
                <div class="flex items-center justify-center p-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Tally_-_Logo.png"
                        alt="Oxford University" class="h-16 md:h-20 object-contain" />
                </div>

                <!-- Partner 5 -->
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                    View all academic partnerships
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- Courses Section -->
    <section id="courses" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                Our Courses
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Computer Science" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-primary">
                            Computer Science
                        </h3>
                        <p class="text-gray-700 mb-4">
                            Comprehensive program covering programming, algorithms, data
                            structures, and software development.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-tertiary font-semibold">Duration: 4 years</span>
                            <a href="#"
                                class="bg-primary text-white py-2 px-4 rounded hover:bg-primary/90 transition duration-300">Learn
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Business Administration" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-primary">
                            Business Administration
                        </h3>
                        <p class="text-gray-700 mb-4">
                            Learn management principles, marketing strategies, finance,
                            and organizational leadership.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-tertiary font-semibold">Duration: 3 years</span>
                            <a href="#"
                                class="bg-primary text-white py-2 px-4 rounded hover:bg-primary/90 transition duration-300">Learn
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Data Science" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-primary">
                            Data Science
                        </h3>
                        <p class="text-gray-700 mb-4">
                            Master data analysis, machine learning, statistical modeling,
                            and big data technologies.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-tertiary font-semibold">Duration: 2 years</span>
                            <a href="#"
                                class="bg-primary text-white py-2 px-4 rounded hover:bg-primary/90 transition duration-300">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                Contact Us
            </h2>
            <div class="flex flex-col md:flex-row gap-10">
                <div class="md:w-1/2">
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-gray-700 mb-2">
                                Full Name
                            </label>
                            <input type="text" id="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" />
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">
                                Email Address
                            </label>
                            <input type="email" id="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" />
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 mb-2">
                                Subject
                            </label>
                            <input type="text" id="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" />
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">
                                Message
                            </label>
                            <textarea id="message" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-primary text-white py-2 px-6 rounded-md hover:bg-primary/90 transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
                <div class="md:w-1/2">
                    <div class="bg-gray-100 p-6 rounded-lg h-full">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">
                            Get In Touch
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-tertiary text-xl mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Address</h4>
                                    <p class="text-gray-700">
                                        Panjarpara<br />Buniadpur, West Bengal 733125
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone text-tertiary text-xl mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Phone</h4>
                                    <p class="text-gray-700">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-envelope text-tertiary text-xl mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Email</h4>
                                    <p class="text-gray-700">info@aheskill.edu</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-clock text-tertiary text-xl mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Office Hours</h4>
                                    <p class="text-gray-700">
                                        Monday-Friday: 9:00 AM - 5:00 PM<br />Saturday: 9:00 AM
                                        - 1:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Map Button -->
                        <div class="mt-6">
                            <h4 class="font-semibold text-gray-800 mb-3">Find Us</h4>
                            <button id="openMapBtn"
                                class="bg-tertiary text-white py-2 px-4 rounded-md hover:bg-tertiary/90 transition duration-300 flex items-center">
                                <i class="fas fa-map-marked-alt mr-2"></i> View on Map
                            </button>
                        </div>
                        <div class="mt-8">
                            <h4 class="font-semibold text-gray-800 mb-3">Follow Us</h4>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="bg-accent text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-accent/90 transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#"
                                    class="bg-secondary text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-secondary/90 transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#"
                                    class="bg-tertiary text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-tertiary/90 transition duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#"
                                    class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-primary/90 transition duration-300">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Modal -->
        <div id="mapModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl max-h-[90vh] overflow-hidden">
                <div class="flex justify-between items-center border-b p-4">
                    <h3 class="text-xl font-bold text-gray-800">Our Location</h3>
                    <button id="closeMapBtn" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <div class="p-4">
                    <div class="rounded-lg overflow-hidden h-[60vh]">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.7507034688856!2d88.34696747484256!3d25.355999525251285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb3dadd4d471ff%3A0x20203ec43657a44b!2sSukhimon%20Memorial%20Islamic%20Institute!5e1!3m2!1sen!2sin!4v1743841647791!5m2!1sen!2sin"
                            width="100%" height="100%" style="border: 0" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                        </iframe>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div>
                            <p class="text-gray-700">
                                <i class="fas fa-map-marker-alt text-tertiary mr-2"></i>Buniadpur, Panjarpara, West Bengal
                                733125
                            </p>
                        </div>
                        <button id="getDirectionsBtn"
                            class="bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition duration-300">
                            Get Directions
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </section>
    </div>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            opacity: 0;
        }
    </style>
@endsection
@push('styles')
@endpush
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openMapBtn = document.getElementById("openMapBtn");
            const closeMapBtn = document.getElementById("closeMapBtn");
            const mapModal = document.getElementById("mapModal");
            const getDirectionsBtn =
                document.getElementById("getDirectionsBtn");

            // Open modal
            openMapBtn.addEventListener("click", function() {
                mapModal.classList.remove("hidden");
                document.body.style.overflow = "hidden"; // Prevent scrolling when modal is open
            });

            // Close modal
            closeMapBtn.addEventListener("click", function() {
                mapModal.classList.add("hidden");
                document.body.style.overflow = "auto"; // Restore scrolling
            });

            // Close modal when clicking outside of it
            mapModal.addEventListener("click", function(e) {
                if (e.target === mapModal) {
                    mapModal.classList.add("hidden");
                    document.body.style.overflow = "auto";
                }
            });

            // Get directions button (opens Google Maps in a new tab)
            getDirectionsBtn.addEventListener("click", function() {
                window.open(
                    "https://maps.app.goo.gl/BX2qMsg472Lv5NkA6",
                    "_blank"
                );
            });

            // Close modal with Escape key
            document.addEventListener("keydown", function(e) {
                if (
                    e.key === "Escape" &&
                    !mapModal.classList.contains("hidden")
                ) {
                    mapModal.classList.add("hidden");
                    document.body.style.overflow = "auto";
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const logoSlide = document.querySelector(".logos-slide");
            const logos = logoSlide.innerHTML;

            // Clone logos and append to create seamless loop effect
            logoSlide.innerHTML += logos;

            // Calculate animation duration based on number of logos
            const logoCount =
                document.querySelectorAll(".logos-slide > div").length;
            const duration = logoCount * 0.8; // 2 seconds per logo

            // Apply animation duration dynamically
            logoSlide.style.animation = `scroll ${duration}s linear infinite`;
        });
    </script>
@endpush
