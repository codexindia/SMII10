@extends('user.layouts.app')
@section('title', 'About Us')
@section('content')


    <!-- Page Banner -->
    <section class="py-16 bg-gradient-to-r from-primary to-tertiary text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About Us</h1>
            <p class="text-xl text-white/80 max-w-3xl mx-auto">
                Learn about our history, mission, and commitment to quality education and skill development
            </p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <section class="py-2 bg-gray-100 border-b border-gray-200">
        <div class="container mx-auto px-4">
            <div class="flex items-center text-sm text-gray-600">
                <a href="{{ route('user.home') }}" class="hover:text-primary">Home</a>
                <i class="fas fa-chevron-right mx-2 text-xs text-gray-400"></i>
                <span class="text-gray-800">About Us</span>
            </div>
        </div>
    </section>

    <!-- About Overview Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-10">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800">Who We Are</h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Academy of Higher Education and Skill Development (AHESD) is on a mission to reduce unemployment by
                        providing industry-relevant, practical education. Unlike conventional colleges, we focus on
                        vocational training, job-oriented courses, and skill development programs that ensure students are
                        employable from day one.
                    </p>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Established in 2005, AHE Skill Development College has grown from a small training center to a
                        comprehensive educational hub serving thousands of students across West Bengal. Located in
                        Buniadpur, our institution combines academic excellence with practical skill development.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Our mission is clear: No more educated unemployed youth. We believe in learning by doing, ensuring
                        students gain practical experience alongside theoretical knowledge. Whether it's healthcare, IT,
                        agriculture, or hospitality, AHESD provides tailored programs that match market needs.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                        alt="College Building" class="rounded-lg shadow-xl w-full h-auto object-cover" />
                </div>
            </div>
        </div>
    </section>

    <!-- Key Pillars Section - New Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Key Pillars of Our Mission</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Pillar 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-graduation-cap text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Skill-Based Learning</h3>
                    <p class="text-gray-600">
                        We offer B.Voc, Diploma in Vocational Studies, UG/PG programs, and specialized job-oriented courses
                        designed in collaboration with industry experts.
                    </p>
                </div>

                <!-- Pillar 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-secondary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-laptop-code text-secondary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Digital Empowerment</h3>
                    <p class="text-gray-600">
                        Preparing students for Digital India by training them in emerging technologies, AI, data analytics,
                        and more.
                    </p>
                </div>

                <!-- Pillar 3 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-tertiary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-lightbulb text-tertiary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Entrepreneurship</h3>
                    <p class="text-gray-600">
                        Encouraging self-employment through start-up guidance, financial literacy, and business skills
                        development.
                    </p>
                </div>

                <!-- Pillar 4 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-accent/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-handshake text-accent text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Industry Partnerships</h3>
                    <p class="text-gray-600">
                        Strong ties with corporations ensure internships, placements, and real-world exposure for our
                        students.
                    </p>
                </div>
            </div>

            <div class="mt-12 p-8 bg-white rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-4 text-gray-800 text-center">Be Job-Ready, Not Just Degree-Ready</h3>
                <p class="text-gray-700 text-center max-w-3xl mx-auto">
                    The job market is competitive—AHESD ensures you stand out. By choosing skill-integrated education,
                    students secure high-growth careers instead of struggling for jobs. Our mission is to create a workforce
                    that doesn't just seek jobs but creates them.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission, Vision, and Values Section -->
    <section class="py-16 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Mission, Vision & Values</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    The guiding principles that shape our institution and the education we provide
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Mission -->
                <div
                    class="bg-white rounded-lg shadow-md p-8 transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-bullseye text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Our Mission</h3>
                    <p class="text-gray-700 leading-relaxed text-center">
                        To provide accessible, quality education that equips students with both academic knowledge and
                        practical skills necessary to succeed in a rapidly changing global economy. We aim to reduce
                        unemployment by focusing on job-oriented courses, ensuring students are employable from day one
                        while fostering ethical values and social responsibility.
                    </p>
                </div>

                <!-- Vision -->
                <div
                    class="bg-white rounded-lg shadow-md p-8 transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <div class="w-16 h-16 rounded-full bg-secondary/10 flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-eye text-secondary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Our Vision</h3>
                    <p class="text-gray-700 leading-relaxed text-center">
                        To be recognized as a leading institution of higher learning and skill development in Eastern India,
                        transforming India into a global skill hub. Our vision is not just to educate but to inspire
                        innovation, creativity, and self-reliance among the youth, producing graduates who are both
                        industry-ready and socially conscious leaders.
                    </p>
                </div>

                <!-- Values -->
                <div
                    class="bg-white rounded-lg shadow-md p-8 transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <div class="w-16 h-16 rounded-full bg-tertiary/10 flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-heart text-tertiary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Our Values</h3>
                    <ul class="text-gray-700 space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-primary mr-2"></i>
                            <span>Skill-Based Learning with practical experience</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-primary mr-2"></i>
                            <span>Digital Empowerment for emerging technologies</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-primary mr-2"></i>
                            <span>Entrepreneurship Development for self-reliance</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-primary mr-2"></i>
                            <span>Industry Partnerships for real-world exposure</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-primary mr-2"></i>
                            <span>Affordable & Accessible Education for all</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Our History Timeline -->
    {{-- <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 text-gray-800">Our Journey</h2>

            <div class="relative">
                <!-- Vertical Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-primary/20"></div>

                <div class="space-y-12">
                    <!-- Timeline Item 1 -->
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pr-12 md:text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-primary">2005</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Foundation</h4>
                            <p class="text-gray-700">
                                AHE Skill Development College was established with a vision to provide quality education
                                focused on skill development to the youth of West Bengal.
                            </p>
                        </div>
                        <div class="md:w-1/2 relative">
                            <div
                                class="absolute top-0 md:top-2 left-1/2 md:-left-6 transform -translate-x-1/2 md:translate-x-0 w-10 h-10 rounded-full bg-primary flex items-center justify-center z-10">
                                <i class="fas fa-flag text-white"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pl-12 mb-4 md:mb-0 order-2 md:order-none">
                            <h3 class="text-xl font-bold text-primary">2008</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Campus Expansion</h4>
                            <p class="text-gray-700">
                                Expanded our campus facilities with new computer labs, library, and modern classrooms to
                                accommodate growing enrollment.
                            </p>
                        </div>
                        <div class="md:w-1/2 relative order-1 md:order-none">
                            <div
                                class="absolute top-0 md:top-2 left-1/2 md:right-0 transform -translate-x-1/2 md:translate-x-6 w-10 h-10 rounded-full bg-primary flex items-center justify-center z-10">
                                <i class="fas fa-building text-white"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pr-12 md:text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-primary">2012</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Academic Expansion</h4>
                            <p class="text-gray-700">
                                Introduced new programs in Business Administration and Data Science to meet the growing
                                industry demands.
                            </p>
                        </div>
                        <div class="md:w-1/2 relative">
                            <div
                                class="absolute top-0 md:top-2 left-1/2 md:-left-6 transform -translate-x-1/2 md:translate-x-0 w-10 h-10 rounded-full bg-primary flex items-center justify-center z-10">
                                <i class="fas fa-graduation-cap text-white"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 4 -->
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pl-12 mb-4 md:mb-0 order-2 md:order-none">
                            <h3 class="text-xl font-bold text-primary">2016</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Industry Partnerships</h4>
                            <p class="text-gray-700">
                                Established formal partnerships with leading companies for internships, training programs,
                                and placement opportunities.
                            </p>
                        </div>
                        <div class="md:w-1/2 relative order-1 md:order-none">
                            <div
                                class="absolute top-0 md:top-2 left-1/2 md:right-0 transform -translate-x-1/2 md:translate-x-6 w-10 h-10 rounded-full bg-primary flex items-center justify-center z-10">
                                <i class="fas fa-handshake text-white"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 5 -->
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pr-12 md:text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-primary">2020</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Digital Transformation</h4>
                            <p class="text-gray-700">
                                Implemented comprehensive digital learning platforms and infrastructure upgrades to enhance
                                the educational experience.
                            </p>
                        </div>
                        <div class="md:w-1/2 relative">
                            <div
                                class="absolute top-0 md:top-2 left-1/2 md:-left-6 transform -translate-x-1/2 md:translate-x-0 w-10 h-10 rounded-full bg-primary flex items-center justify-center z-10">
                                <i class="fas fa-laptop text-white"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 6 -->
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pl-12 mb-4 md:mb-0 order-2 md:order-none">
                            <h3 class="text-xl font-bold text-primary">2023</h3>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">National Recognition</h4>
                            <p class="text-gray-700">
                                Received national recognition for excellence in skill-based education and achieved top
                                rankings among skill development institutions.
                            </p>
                        </div>
                        <div class="md:w-1/2 relative order-1 md:order-none">
                            <div
                                class="absolute top-0 md:top-2 left-1/2 md:right-0 transform -translate-x-1/2 md:translate-x-6 w-10 h-10 rounded-full bg-primary flex items-center justify-center z-10">
                                <i class="fas fa-trophy text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Leadership Team Section -->
    <section class="py-16 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 text-gray-800">Our Leadership</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Leader 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://randomuser.me/api/portraits/men/40.jpg" alt="Dr. Robert Williams"
                            class="w-full h-56 object-cover object-center" />
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black/70 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4 w-full">
                                <div class="flex justify-center space-x-4">
                                    <a href="#" class="text-white hover:text-accent transition-colors duration-300">
                                        <i class="fab fa-linkedin-in text-lg"></i>
                                    </a>
                                    <a href="#" class="text-white hover:text-accent transition-colors duration-300">
                                        <i class="fab fa-twitter text-lg"></i>
                                    </a>
                                    <a href="#" class="text-white hover:text-accent transition-colors duration-300">
                                        <i class="far fa-envelope text-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800">Dr. Robert Williams</h3>
                        <p class="text-primary font-medium mb-2">Principal</p>
                        <p class="text-gray-600 text-sm">
                            Ph.D. in Educational Leadership with over 20 years of experience in academic administration and
                            teaching.
                        </p>
                    </div>
                </div>

                <!-- Leader 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Dr. Sarah Johnson"
                            class="w-full h-56 object-cover object-center" />
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black/70 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4 w-full">
                                <div class="flex justify-center space-x-4">
                                    <a href="#" class="text-white hover:text-accent transition-colors duration-300">
                                        <i class="fab fa-linkedin-in text-lg"></i>
                                    </a>
                                    <a href="#" class="text-white hover:text-accent transition-colors duration-300">
                                        <i class="fab fa-twitter text-lg"></i>
                                    </a>
                                    <a href="#" class="text-white hover:text-accent transition-colors duration-300">
                                        <i class="far fa-envelope text-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800">Dr. Sarah Johnson</h3>
                        <p class="text-primary font-medium mb-2">Vice Principal</p>
                        <p class="text-gray-600 text-sm">
                            Ph.D. in Business Administration, leading our academic planning and curriculum development
                            initiatives.
                        </p>
                    </div>
                </div>

                <!-- Leader 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://randomuser.me/api/portraits/men/62.jpg" alt="Dr. Michael Chen"
                            class="w-full h-56 object-cover object-center" />
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black/70 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4 w-full">
                                <div class="flex justify-center space-x-4">
                                    <a href="#" class="text-white hover:text-accent transition-colors duration-300">
                                        <i class="fab fa-linkedin-in text-lg"></i>
                                    </a>
                                    <a href="#" class="text-white hover:text-accent transition-colors duration-300">
                                        <i class="fab fa-twitter text-lg"></i>
                                    </a>
                                    <a href="#" class="text-white hover:text-accent transition-colors duration-300">
                                        <i class="far fa-envelope text-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800">Dr. Michael Chen</h3>
                        <p class="text-primary font-medium mb-2">Director of Research</p>
                        <p class="text-gray-600 text-sm">
                            Ph.D. in Computer Science, overseeing research initiatives and industry collaborations.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="faculty.html"
                    class="inline-flex items-center bg-primary hover:bg-primary/90 text-white py-2 px-6 rounded-full transition duration-300">
                    View All Faculty Members
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Key Statistics Section -->
    <section class="py-16 bg-gray-800 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16">AHE by the Numbers</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Stat 1 -->
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">18</div>
                    <div class="text-xl font-medium mb-1">Years</div>
                    <p class="text-gray-300 text-sm">of academic excellence</p>
                </div>

                <!-- Stat 2 -->
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">5,000+</div>
                    <div class="text-xl font-medium mb-1">Students</div>
                    <p class="text-gray-300 text-sm">currently enrolled</p>
                </div>

                <!-- Stat 3 -->
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">120+</div>
                    <div class="text-xl font-medium mb-1">Faculty Members</div>
                    <p class="text-gray-300 text-sm">experienced educators</p>
                </div>

                <!-- Stat 4 -->
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">85%</div>
                    <div class="text-xl font-medium mb-1">Placement Rate</div>
                    <p class="text-gray-300 text-sm">for graduating students</p>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Facilities Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">Our Campus Facilities</h2>
            <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto">
                Our state-of-the-art campus provides students with everything they need for an enriching educational
                experience
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Facility 1 -->
                <div
                    class="bg-gray-50 rounded-lg overflow-hidden shadow-md transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Modern Library" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-800 mb-2">Modern Library</h3>
                        <p class="text-gray-600">
                            Our library houses over 50,000 books, journals, and digital resources across various
                            disciplines, with quiet study spaces and research areas.
                        </p>
                    </div>
                </div>

                <!-- Facility 2 -->
                <div
                    class="bg-gray-50 rounded-lg overflow-hidden shadow-md transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Computer Labs" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-800 mb-2">Computer Labs</h3>
                        <p class="text-gray-600">
                            Six fully equipped computer laboratories with the latest hardware and software for practical
                            learning and projects.
                        </p>
                    </div>
                </div>

                <!-- Facility 3 -->
                <div
                    class="bg-gray-50 rounded-lg overflow-hidden shadow-md transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Research Centers" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-800 mb-2">Research Centers</h3>
                        <p class="text-gray-600">
                            Specialized research facilities supporting innovative projects in emerging technologies and
                            business solutions.
                        </p>
                    </div>
                </div>

                <!-- Facility 4 -->
                <div
                    class="bg-gray-50 rounded-lg overflow-hidden shadow-md transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Recreation Areas" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-800 mb-2">Recreation Areas</h3>
                        <p class="text-gray-600">
                            Sports facilities including indoor courts, fitness center, and outdoor fields for physical
                            activities and events.
                        </p>
                    </div>
                </div>

                <!-- Facility 5 -->
                <div
                    class="bg-gray-50 rounded-lg overflow-hidden shadow-md transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <img src="https://images.unsplash.com/photo-1517164850305-99a3e65bb47e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                        alt="Auditorium" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-800 mb-2">Auditorium</h3>
                        <p class="text-gray-600">
                            A 500-seat auditorium with advanced acoustics for lectures, seminars, cultural performances and
                            events.
                        </p>
                    </div>
                </div>

                <!-- Facility 6 -->
                <div
                    class="bg-gray-50 rounded-lg overflow-hidden shadow-md transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <img src="https://images.unsplash.com/photo-1563906267088-b029e7101114?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Student Center" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-800 mb-2">Student Center</h3>
                        <p class="text-gray-600">
                            A vibrant hub with cafeteria, study areas, and collaborative spaces for students to connect and
                            engage.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Accreditations & Partners Section -->
    <section class="py-16 bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                Our Accreditations & Partnerships
            </h2>

            <div class="bg-white rounded-lg shadow-md p-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Accreditation 1 -->
                    <div class="flex flex-col items-center justify-center">
                        <img src="https://upload.wikimedia.org/wikipedia/en/b/b4/NIELIT_Logo.jpg" alt="NIELIT"
                            class="h-20 object-contain mb-4" />
                        <p class="text-center text-gray-700 text-sm">NIELIT Certified</p>
                    </div>

                    <!-- Accreditation 2 -->
                    <div class="flex flex-col items-center justify-center">
                        <img src="https://www.uxdt.nic.in/wp-content/uploads/2020/06/NSDC-Preview.png?x76268"
                            alt="NSDC" class="h-20 object-contain mb-4" />
                        <p class="text-center text-gray-700 text-sm">NSDC Partner</p>
                    </div>

                    <!-- Accreditation 3 -->
                    <div class="flex flex-col items-center justify-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Intel_logo_%282006-2020%29.svg"
                            alt="Intel" class="h-20 object-contain mb-4" />
                        <p class="text-center text-gray-700 text-sm">Intel Education Partner</p>
                    </div>

                    <!-- Accreditation 4 -->
                    <div class="flex flex-col items-center justify-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Tally_-_Logo.png" alt="Tally"
                            class="h-20 object-contain mb-4" />
                        <p class="text-center text-gray-700 text-sm">Tally Education Partner</p>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-gray-700 mb-6">
                        AHE Skill Development College is proud to be associated with leading educational and industry bodies
                        that validate our commitment to quality education and training.
                    </p>
                    <a href="#" class="text-primary hover:text-primary/80 font-medium">
                        Learn more about our accreditations and partnerships
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-primary to-tertiary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Join Our Educational Movement</h2>
            <p class="text-xl mb-10 max-w-3xl mx-auto">
                At AHESD, we don't just teach—we transform lives. By choosing skill-based education, students become
                architects of their own success and contributors to a stronger, self-reliant India. The future belongs to
                those who are prepared—are you ready?
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('user.home') }}#courses"
                    class="bg-white text-primary font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition duration-300 transform hover:scale-105">
                    Be Job-Ready, Not Just Degree-Ready
                </a>
                <a href="{{ route('user.home') }}#contact"
                    class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition duration-300 transform hover:scale-105">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

@endsection
