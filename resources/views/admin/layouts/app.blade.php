<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Institute Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        [x-cloak] {
            display: none !important;
        }

        .transition-sidebar {
            transition: all 0.3s ease-in-out;
        }

        @media (max-width: 768px) {
            .overflow-x-auto {
                -webkit-overflow-scrolling: touch;
                width: 100%;
                overflow-x: auto;
            }
        }

        .dark\:bg-gray-800 {
            background-color: white !important;
        }

        .dark\:text-gray-300 {
            color: black !important;
        }

        .dark\:bg-gray-900 {
            background-color: white !important;
        }

        .dark\:text-white {
            color: black !important;
        }
    </style>

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

<body class="bg-gray-100">
    <div x-data="{ sidebarOpen: true, currentTab: 'dashboard' }">
        @include('admin.layouts.header')
        @yield('content')
    </div>
</body>
@include('admin.layouts.footer')

</html>
