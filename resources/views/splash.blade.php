<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NMIXX</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .nmixx-logo {
            width: 100%;

            max-width: 600px;

            height: auto;
        }
    </style>
</head>

<body class="bg-black flex items-center justify-center min-h-screen flex-col">

    <img src="https://i.imgur.com/your-nmixx-logo-image-2.png" alt="NMIXX Logo" class="nmixx-logo mb-10">


    <a href="{{ route('nmixx.dashboard') }}" class="
        bg-gradient-to-r from-pink-500 to-purple-600 
        text-white font-bold py-4 px-10 rounded-full 
        text-lg tracking-wider uppercase 
        shadow-lg hover:shadow-xl transition-all duration-300 
        transform hover:scale-105
        ">
        Enter NMIXX World
    </a>

</body>

</html>