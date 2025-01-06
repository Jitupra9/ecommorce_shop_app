<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile</title>
</head>

<body class="bg-gray-50">

    <!-- Main Profile Container -->
    <div class="max-w-4xl mx-auto my-10 bg-white shadow-xl rounded-lg overflow-hidden">

        <!-- Profile Header -->
        <div class="flex justify-between items-center p-6 bg-gradient-to-r from-blue-500 to-teal-500 text-white rounded-t-lg">
            <div class="flex items-center space-x-4">
                <img src="https://via.placeholder.com/100" alt="Profile Picture" class="rounded-full w-24 h-24">
                <div>
                    <h2 id="profile-name" class="text-3xl font-semibold">John Doe</h2>
                    <p id="profile-account" class="text-lg">Business Account</p>
                </div>
            </div>
            <button id="edit-btn"
                class="bg-transparent border-2 border-white px-6 py-2 rounded-full text-white font-semibold hover:bg-white hover:text-gray-800 transition">
                Edit Profile
            </button>
        </div>

        <!-- Editable Profile Form -->
        <div id="edit-profile-form" class="hidden p-8 space-y-6 bg-gray-50 border-t border-gray-200">
            <h3 class="text-2xl font-semibold text-gray-800">Edit Profile</h3>
            <form id="profile-form">
                <div class="space-y-4">
                    <div>
                        <label for="edit-name" class="block text-gray-700 font-medium">Full Name</label>
                        <input type="text" id="edit-name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="John Doe" required>
                    </div>
                    <div>
                        <label for="edit-email" class="block text-gray-700 font-medium">Email</label>
                        <input type="email" id="edit-email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="john.doe@example.com" required>
                    </div>
                    <div>
                        <label for="edit-phone" class="block text-gray-700 font-medium">Phone</label>
                        <input type="tel" id="edit-phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="+1234567890" required>
                    </div>
                    <div>
                        <label for="edit-address" class="block text-gray-700 font-medium">Address</label>
                        <input type="text" id="edit-address" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="123 Street, City, Country" required>
                    </div>
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Save Changes</button>
                    <button type="button" id="cancel-btn" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition">Cancel</button>
                </div>
            </form>
        </div>

        <!-- User Info (Visible by default, hidden when editing) -->
        <div id="profile-info" class="p-8 space-y-6 bg-gray-50 border-t border-gray-200">
            <h3 class="text-2xl font-semibold text-gray-800">User Information</h3>
            <p><strong class="font-medium">Email:</strong> john.doe@example.com</p>
            <p><strong class="font-medium">Phone:</strong> +1234567890</p>
            <p><strong class="font-medium">Address:</strong> 123 Street, City, Country</p>
        </div>

        <!-- Transaction History -->
        <div class="p-8 space-y-6 bg-gray-50 border-t border-gray-200">
            <h3 class="text-2xl font-semibold text-gray-800">Transaction History</h3>
            <table class="w-full table-auto border-separate border-spacing-2">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left text-gray-600">Transaction ID</th>
                        <th class="px-4 py-2 text-left text-gray-600">Date</th>
                        <th class="px-4 py-2 text-left text-gray-600">Amount</th>
                        <th class="px-4 py-2 text-left text-gray-600">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">TX123456</td>
                        <td class="px-4 py-2">2025-01-05</td>
                        <td class="px-4 py-2">$150</td>
                        <td class="px-4 py-2 text-green-500">Completed</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">TX123457</td>
                        <td class="px-4 py-2">2025-01-02</td>
                        <td class="px-4 py-2">$200</td>
                        <td class="px-4 py-2 text-yellow-500">Pending</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Wishlist Section -->
        <div class="p-8 space-y-6">
            <h3 class="text-2xl font-semibold text-gray-800">Wishlist</h3>
            <ul class="space-y-4">
                <li class="flex justify-between items-center bg-gray-100 p-4 rounded-lg shadow hover:bg-gray-200 transition">
                    <span>Luxury Hotel Room</span>
                    <button class="text-red-500 text-sm" onclick="deleteFromWishlist(1)">Delete</button>
                </li>
                <li class="flex justify-between items-center bg-gray-100 p-4 rounded-lg shadow hover:bg-gray-200 transition">
                    <span>Beachfront Villa</span>
                    <button class="text-red-500 text-sm" onclick="deleteFromWishlist(2)">Delete</button>
                </li>
            </ul>
            <button id="clear-wishlist"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Clear Wishlist</button>
        </div>

        <!-- Order History Section -->
        <div class="p-8 space-y-6 bg-gray-50 border-t border-gray-200">
            <h3 class="text-2xl font-semibold text-gray-800">Order History</h3>
            <table class="w-full table-auto border-separate border-spacing-2">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left text-gray-600">Order ID</th>
                        <th class="px-4 py-2 text-left text-gray-600">Product</th>
                        <th class="px-4 py-2 text-left text-gray-600">Date</th>
                        <th class="px-4 py-2 text-left text-gray-600">Amount</th>
                        <th class="px-4 py-2 text-left text-gray-600">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">ORD123456</td>
                        <td class="px-4 py-2">Hotel Room Booking</td>
                        <td class="px-4 py-2">2025-01-03</td>
                        <td class="px-4 py-2">$300</td>
                        <td class="px-4 py-2 text-green-500">Completed</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">ORD123457</td>
                        <td class="px-4 py-2">Guest House Booking</td>
                        <td class="px-4 py-2">2025-01-01</td>
                        <td class="px-4 py-2">$250</td>
                        <td class="px-4 py-2 text-red-500">Cancelled</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <script>
        function deleteFromWishlist(id) {
            alert('Item with ID ' + id + ' removed from wishlist');
        }
        const editBtn = document.getElementById('edit-btn');
        const profileInfo = document.getElementById('profile-info');
        const editProfileForm = document.getElementById('edit-profile-form');
        const cancelBtn = document.getElementById('cancel-btn');

        editBtn.addEventListener('click', () => {
            // Show the editable form, hide the profile info
            profileInfo.classList.add('hidden');
            editProfileForm.classList.remove('hidden');
            editBtn.classList.add('hidden');
        });

        cancelBtn.addEventListener('click', () => {
            // Show the profile info, hide the edit form
            profileInfo.classList.remove('hidden');
            editProfileForm.classList.add('hidden');
            editBtn.classList.remove('hidden');
        });

        // Handle form submission (saving data)
        const profileForm = document.getElementById('profile-form');
        profileForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = document.getElementById('edit-name').value;
            const email = document.getElementById('edit-email').value;
            const phone = document.getElementById('edit-phone').value;
            const address = document.getElementById('edit-address').value;

            // Update the profile info
            document.getElementById('profile-name').textContent = name;
            document.getElementById('profile-account').textContent = 'Business Account'; // You can dynamically change this based on the user type
            profileInfo.innerHTML = `
                <h3 class="text-2xl font-semibold text-gray-800">User Information</h3>
                <p><strong class="font-medium">Email:</strong> ${email}</p>
                <p><strong class="font-medium">Phone:</strong> ${phone}</p>
                <p><strong class="font-medium">Address:</strong> ${address}</p>
            `;
            
            // Hide the form and show updated info
            profileInfo.classList.remove('hidden');
            editProfileForm.classList.add('hidden');
            editBtn.classList.remove('hidden');
        });
    </script>
</body>

</html>
