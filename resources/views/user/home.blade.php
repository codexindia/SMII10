@php
    $noticeCol = ['primary', 'secondary', 'tertiary', 'accent', 'gray'];

@endphp
@extends('user.layouts.app')
@section('content')
    <section class="py-4 bg-gray-50 border-b border-gray-200">
        <div class="container mx-auto">
            <div class="relative overflow-hidden" id="notice-slider">
                <div class="flex transition-transform duration-500 ease-in-out" id="notice-slides">
                    <!-- Notice Items -->
                    @foreach ($notice as $index => $item)
                        @php
                            $colorIndex = $index % count($noticeCol);
                            $color = $noticeCol[$colorIndex];
                        @endphp
                        <div class="w-full flex-shrink-0 px-4">
                            <div
                                class="bg-{{ $color }}/10 border-l-4 border-{{ $color }} rounded-r-md p-4 flex items-center">
                                <i class="fas fa-bullhorn text-{{ $color }} text-xl mr-4"></i>
                                <div>
                                    <h3 class="font-bold text-{{ $color }}">
                                        {{ $item->title }}
                                    </h3>
                                    <p class="text-gray-700">
                                        {{ \Illuminate\Support\Str::limit($item->description, 100, '...') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Controls - Only show if there are multiple notices -->
                @if (count($notice) > 1)
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

                    <!-- Dynamic Indicators -->
                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 flex space-x-2 mb-2" id="notice-indicators">
                        @foreach ($notice as $index => $item)
                            <button class="w-2 h-2 rounded-full {{ $index === 0 ? 'bg-primary' : 'bg-gray-300' }}"
                                data-index="{{ $index }}"></button>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Add slider JavaScript at the end of your file using  -->

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
                    <img src="{{ asset('user/campus/img1.jpg') }}" alt="AI lab"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">AI lab</h4>
                        <p class="text-gray-200 text-sm mt-2">
                            Our state-of-the-art AI lab is equipped with advanced tools and technologies to foster
                            innovation and research.
                        </p>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="{{ asset('user/campus/img2.jpg') }}" alt="Computer Laboratory"
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
                    <img src="{{ asset('user/campus/img9.png') }}" alt="Science Laboratory"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    {{-- <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">Science Labs</h4>
                        <p class="text-gray-200 text-sm mt-2">
                            Cutting-edge facilities for research and experiments in
                            physics, chemistry, and biology.
                        </p>
                    </div> --}}
                </div>

                <!-- Gallery Item 4 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="{{ asset('user/campus/img8.jpg') }}" alt="Collaborative Workspace"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    {{-- <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">
                            Collaborative Spaces
                        </h4>
                        <p class="text-gray-200 text-sm mt-2">
                            Dedicated areas where students can work together on projects
                            and exchange ideas.
                        </p>
                    </div> --}}
                </div>

                <!-- Gallery Item 5 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="{{ asset('user/campus/img7.jpg') }}" alt="Auditorium"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    {{-- <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">Modern Auditorium</h4>
                        <p class="text-gray-200 text-sm mt-2">
                            A 500-seat auditorium with advanced acoustics for lectures,
                            performances, and events.
                        </p>
                    </div> --}}
                </div>

                <!-- Gallery Item 6 -->
                <div
                    class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <img src="{{ asset('user/campus/img6.jpg') }}" alt="Sports Facilities"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" />
                    {{-- <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <h4 class="text-white text-xl font-bold">Sports Complex</h4>
                        <p class="text-gray-200 text-sm mt-2">
                            Comprehensive sports facilities including indoor courts,
                            swimming pool, and fitness center.
                        </p>
                    </div> --}}
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
                        <img src="{{ asset('user/images/collabera.png') }}" alt="Microsoft"
                            class="h-12 md:h-16 object-contain" />
                    </div>

                    <div class="mx-8 flex-shrink-0">
                        <img src="{{ asset('user/images/ifcokissan.png') }}" alt="Microsoft"
                            class="h-12 md:h-16 object-contain" />
                    </div>
                    <div class="mx-8 flex-shrink-0">
                        <img src="{{ asset('user/images/jio-logo-icon.png') }}" alt="Microsoft"
                            class="h-12 md:h-16 object-contain" />
                    </div>
                    <div class="mx-8 flex-shrink-0">
                        <img src="{{ asset('user/images/Paytm_logo.jpg') }}" alt="Microsoft"
                            class="h-12 md:h-16 object-contain" />
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
   @include('user.components.featuredCourse')

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
                            <div class="flex items-start text-xs md:text-base">
                                <i class="fas fa-map-marker-alt text-tertiary text-xl mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800 ">Address</h4>
                                    <p class="text-gray-700">
                                        Panjarpara<br />Buniadpur, West Bengal 733125
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start  text-xs md:text-base">
                                <i class="fas fa-phone text-tertiary text-xl mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Phone</h4>
                                    <p class="text-gray-700">+91 90646 54015</p>
                                </div>
                            </div>
                            <div class="flex items-start text-xs md:text-base" style="word-break: break-all;">
                                <i class="fas fa-envelope text-tertiary text-xl mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Email</h4>
                                    <p class="text-gray-700">academyofeducationskilldevelop@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start  text-xs md:text-base">
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
                                <a href="https://www.facebook.com/share/1EYrRWD1fX/"
                                    class="bg-accent text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-accent/90 transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://wa.me/916296686487"
                                    class="bg-secondary text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-secondary/90 transition duration-300">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="https://www.instagram.com/ahesd_college_?igsh=MTRqd2Z2aWN5dzRzOA=="
                                    class="bg-tertiary text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-tertiary/90 transition duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/ahesd-college-5387a4358"
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
        // Sliding notices functionality
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.getElementById("notice-slides");
            const prevBtn = document.getElementById("prev-notice");
            const nextBtn = document.getElementById("next-notice");
            const indicators = document.querySelectorAll("[data-index]");
            let currentSlide = 0;
            const slideCount = {{ $notice->count() }}; // Total number of slides

            function updateSlides() {
                slides.style.transform = `translateX(-${currentSlide * 100}%)`;

                // Update indicators
                indicators.forEach((indicator, index) => {
                    if (index === currentSlide) {
                        indicator.classList.remove("bg-gray-300");
                        indicator.classList.add("bg-primary");
                    } else {
                        indicator.classList.remove("bg-primary");
                        indicator.classList.add("bg-gray-300");
                    }
                });
            }

            prevBtn.addEventListener("click", function() {
                currentSlide = (currentSlide - 1 + slideCount) % slideCount;
                updateSlides();
            });

            nextBtn.addEventListener("click", function() {
                currentSlide = (currentSlide + 1) % slideCount;
                updateSlides();
            });

            indicators.forEach((indicator) => {
                indicator.addEventListener("click", function() {
                    currentSlide = parseInt(this.dataset.index);
                    updateSlides();
                });
            });

            // Auto slide every 5 seconds
            setInterval(function() {
                currentSlide = (currentSlide + 1) % slideCount;
                updateSlides();
            }, 3000);
        });
    </script>
@endpush
