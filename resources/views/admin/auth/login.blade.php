<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Institute Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        [x-cloak] {
            display: none !important;
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
    <div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8" x-data="{ showPassword: false }">
        <div class="max-w-md w-full space-y-8">
            <!-- Logo and Header -->
            <div class="text-center">
                <div
                    class="bg-indigo-800 text-white mx-auto w-20 h-20 rounded-full flex items-center justify-center mb-4">
                    <span class="text-3xl">🏛️</span>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900">Institute Admin</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Sign in to your account to access the admin dashboard
                </p>
            </div>

            <!-- Login Form -->
            <div class="bg-white py-8 px-6 shadow rounded-lg">
                <form class="space-y-6" action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf
                    <!-- Username/Email Input -->
                   {!! Form::adText('username') !!}

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password" name="password" :type="showPassword ? 'text' : 'password'" required
                                class="py-2 pl-10 pr-10 block w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="••••••••" />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" @click="showPassword = !showPassword"
                                    class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fas" :class="showPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" />
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700">
                                Remember me
                            </label>
                        </div>

                        <!-- <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Forgot your password?
                            </a>
                        </div> -->
                    </div>

                    <!-- Login Button -->
                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <i class="fas fa-sign-in-alt"></i>
                            </span>
                            Sign in
                        </button>
                    </div>
                </form>

                <!-- Optional: Divider and Social Login Buttons -->
                <!-- <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <div>
                            <a href="#"
                                class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <i class="fab fa-google"></i>
                            </a>
                        </div>
                        <div>
                            <a href="#"
                                class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <i class="fab fa-microsoft"></i>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- Footer Information -->
            <!-- <div class="text-center text-sm text-gray-500">
                <p>© 2025 Tech Institute of Sciences. All rights reserved.</p>
                <p class="mt-1">
                    <a href="#" class="text-indigo-600 hover:text-indigo-500">Privacy Policy</a> |
                    <a href="#" class="text-indigo-600 hover:text-indigo-500">Terms of Service</a>
                </p>
            </div> -->
        </div>
    </div>
</body>

</html>
