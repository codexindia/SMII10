<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coming Soon - AHE Skill Development College</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#008a00",
                        secondary: "#c31d60",
                        tertiary: "#4ab6b0",
                        accent: "#fc9a14",
                    },
                },
            },
        };
    </script>
</head>

<body class="font-sans bg-gray-50 min-h-screen flex flex-col">
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

    <!-- Main Content -->
    <div class="flex-grow flex items-center justify-center py-12 px-4">
        <div class="max-w-3xl w-full bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <!-- Left Image Section -->
                <div class="md:w-1/2 bg-primary flex items-center justify-center p-10">
                    <div class="text-center">
                        <i class="fas fa-graduation-cap text-white text-7xl mb-6"></i>
                        <h1 class="text-white text-3xl font-bold">
                            AHE Skill Development College
                        </h1>
                        <p class="text-white/90 mt-4">Empowering minds, Shaping futures</p>
                    </div>
                </div>

                <!-- Right Content Section -->
                <div class="md:w-1/2 p-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Coming Soon</h2>
                    <p class="text-gray-600 mb-8">
                        Our new website is under construction. We're working hard to bring you an amazing experience.
                    </p>

                    <!-- Countdown -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Website Launching In:</h3>
                        <div class="grid grid-cols-4 gap-2 text-center" id="countdown">
                            <div class="bg-gray-100 rounded-lg p-3">
                                <div class="text-primary text-2xl font-bold" id="days">00</div>
                                <div class="text-gray-500 text-xs">Days</div>
                            </div>
                            <div class="bg-gray-100 rounded-lg p-3">
                                <div class="text-primary text-2xl font-bold" id="hours">00</div>
                                <div class="text-gray-500 text-xs">Hours</div>
                            </div>
                            <div class="bg-gray-100 rounded-lg p-3">
                                <div class="text-primary text-2xl font-bold" id="minutes">00</div>
                                <div class="text-gray-500 text-xs">Minutes</div>
                            </div>
                            <div class="bg-gray-100 rounded-lg p-3">
                                <div class="text-primary text-2xl font-bold" id="seconds">00</div>
                                <div class="text-gray-500 text-xs">Seconds</div>
                            </div>
                        </div>
                    </div>

                    <!-- Notify Form -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-700 mb-3">Get Notified When We Launch</h3>
                        <div class="flex">
                            <input type="email" placeholder="Your email address"
                                class="flex-grow px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-primary"
                                id="notify-email" />
                            <button
                                class="bg-primary text-white px-4 py-2 rounded-r-md hover:bg-primary/90 transition duration-300"
                                id="notify-btn">
                                Notify Me
                            </button>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="text-gray-600 text-sm">
                        <p>For inquiries, please contact:</p>
                        <p class="font-semibold">academyofeducationskilldevelop@gmail.com | +91 90646 54015</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
  
