<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold text-center mb-6 text-gray-800">Login</h2>
        
        <form action="backend/user/login.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="role" class="block text-gray-700 font-medium">Select Role</label>
                <select id="role" name="role" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="customer">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                    Login
                </button>
            </div>
        </form>
        <div class="mt-4 text-center">
            <a href="#" id="forgot-password-link" class="text-blue-500 text-sm">Forgot your password?</a>
        </div>
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-700">Don't have an account? <a href="signup.php" class="text-blue-500">Sign up</a></p>
        </div>
    </div>

    <!-- Forgot Password Modal -->
    <!-- <div id="forgot-password-modal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-md w-96">
            <h3 class="text-2xl font-semibold text-gray-700 mb-4">Forgot Password</h3>
            <p class="text-gray-600 mb-4">Enter your email address and we'll send you a link to reset your password.</p>
            <form id="forgot-password-form">
                <label for="reset-email" class="block text-gray-700">Email Address</label>
                <input type="email" id="reset-email" name="reset-email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4">

                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                        Send Reset Link
                    </button>
                    <button type="button" id="close-modal" class="text-gray-500 hover:text-gray-700">Close</button>
                </div>
            </form>
        </div>
    </div> -->
</body>
</html>
