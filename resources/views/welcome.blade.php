<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('img/banner-bg.jpg'); /* Replace with your desired image path */
            background-size: cover;
            background-position: center;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.6); /* Dark overlay for contrast */
            position: absolute;
            inset: 0;
        }
        .container {
            max-width: 100%;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content-box {
            max-width: 400px;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
        }
        @media (max-width: 640px) {
            .content-box {
                width: 90%; /* Ensure it fits well on smaller screens */
            }
        }
    </style>
</head>
<body class="relative flex items-center justify-center min-h-screen text-white">

    <div class="overlay"></div>

    <div class="container">
        <div class="content-box text-center">
            <h1 class="text-4xl font-bold mb-6 flex justify-center">Welcome to Our App</h1>
            <p class="mb-8 text-gray-300">Please log in or create an account to continue.</p>
            
            @if (Route::has('login'))
                <nav class="flex justify-center space-x-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="px-6 py-3 bg-red-500 text-white rounded-full shadow-lg transition hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300"
                        >
                            Go to Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="px-6 py-3 bg-blue-500 text-white rounded-full shadow-lg transition hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
                        >
                            Log In
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="px-6 py-3 bg-green-500 text-white rounded-full shadow-lg transition hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </div>

</body>
</html>
