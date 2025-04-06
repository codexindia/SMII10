<html>
<head>
    <meta charset="UTF-8" />
    <meta name="description"
        content="AHE Skill Development College offers quality education and career-focused programs. Explore our courses in computer science, business administration, and more in Buniadpur, West Bengal." />
    <meta name="keywords"
        content="skill development college, higher education, vocational training, computer science courses, business administration, data science, Buniadpur college, West Bengal education" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AHE Skill Development College - @yield('title', 'Explore Quality Education')</title>
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
    <style>
         .dark\:bg-gray-800 {
            background-color: white !important;
            border: 1px solid #008a00 !important;
        }

        .dark\:text-gray-300 {
            color: #008a00 !important;
        }

        .dark\:bg-gray-900 {
            background-color: white !important;
        }

        .dark\:text-white {
            color: #008a00 !important;
        }
    </style>
    @yield('styles')
    
</head>
<body class="font-sans bg-gray-50">
    @include('user.layouts.header')
    <main class="main px-4">
        @yield('content')
    </main>
    @include('user.layouts.footer')
    @yield('scripts')
    <script>
        // Sliding notices functionality
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.getElementById("notice-slides");
            const prevBtn = document.getElementById("prev-notice");
            const nextBtn = document.getElementById("next-notice");
            const indicators = document.querySelectorAll("[data-index]");
            let currentSlide = 0;
            const slideCount = 3;

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
            }, 5000);
        });
    </script>
</body>
</html>
