<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="relative bg-blue-600 h-40 flex items-center justify-center">
            <h1 class="text-2xl font-bold text-white">Google Authentication Activity</h1>
        </div>
        <!-- Content Section -->
        <div class="p-6 text-center">
            <a href="{{ route('google.redirect') }}" class="inline-block w-full bg-blue-600 text-white font-medium py-3 rounded-md shadow hover:bg-blue-700 transition duration-300">
                <div class="flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"/>
                    </svg>
                    <span>Login with Google</span>
                </div>
            </a>
        </div>
        <!-- Footer Section -->
        <div class="bg-gray-50 py-4 text-sm text-gray-500 text-center">
            <p>&copy; 2024 Your App Name. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
