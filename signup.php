<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold text-center mb-6 text-gray-800">Create an Account</h2>
        <form id="" action="backend/user/signup.php" method="POST">
            <div class="mb-4">
                <label for="fullname" class="block text-gray-700 font-medium">Full Name</label>
                <input type="text" id="fullname" name="fullname" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="pnumber" class="block text-gray-700 font-medium">Phone number</label>
                <input type="number" id="phone_number" name="phone_number" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="confirm-password" class="block text-gray-700 font-medium">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <p id="password-match-error" class="text-red-500 text-sm mt-2 hidden">Passwords do not match.</p>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                    Sign Up
                </button>
            </div>
        </form>
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-700">Already have an account? <a href="login.html" class="text-blue-500">Login</a></p>
        </div>
    </div>
</body>
</html>
