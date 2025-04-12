<html>

<head>
    <meta charset="UTF-8" />
    <meta name="description"
        content="Academy of Higher Education and Skill Development (AHE) offers quality education and career-focused programs. Explore our courses in computer science, business administration, and more in Buniadpur, West Bengal." />
    <meta name="keywords"
        content="Academy of Higher Education, AHE, skill development, higher education, vocational training, computer science courses, business administration, data science, Buniadpur college, West Bengal education" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Sudipto" />
    <title>AHE Skill Development College - @yield('title', 'Explore Quality Education')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#3d99cd",
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
    @stack('styles')

</head>

<body class="font-sans bg-gray-50">
    @include('user.layouts.header')
    <main class="main px-4">
        @yield('content')
    </main>
    @include('user.layouts.footer')
    @stack('scripts')
  
</body>

</html>
