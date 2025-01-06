<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        #issuesChart {
            width: 100% !important;
            height: 250px !important;
        }

        .chart-container {
            max-width: 600px;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            #issuesChart {
                height: 200px;
            }
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#menu-toggle').click(function () {
                $('#sidebar').toggleClass('hidden');
            });
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            const salesGradient = salesCtx.createLinearGradient(0, 0, 0, 400);
            salesGradient.addColorStop(0, 'rgba(54, 162, 235, 0.8)');
            salesGradient.addColorStop(1, 'rgba(54, 162, 235, 0.2)');
            new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
                    datasets: [ {
                        label: 'Sales',
                        data: [ 300, 400, 350, 450, 500, 550, 600, 650, 700, 750, 800, 850 ],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        backgroundColor: salesGradient,
                        fill: true,
                        tension: 0.4
                    } ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: true }
                    }
                }
            });
            const usersCtx = document.getElementById('usersChart').getContext('2d');
            new Chart(usersCtx, {
                type: 'bar',
                data: {
                    labels: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
                    datasets: [ {
                        label: 'New Users',
                        data: [ 50, 70, 90, 110, 130, 150, 170, 200, 220, 250, 270, 300 ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    } ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: true }
                    }
                }
            });
            const hourlyData = [ 50, 60, 45, 30, 75, 40, 80, 65, 50, 55, 60, 65 ];
            const labels = [ '1 AM', '2 AM', '3 AM', '4 AM', '5 AM', '6 AM', '7 AM', '8 AM', '9 AM', '10 AM', '11 AM', '12 PM' ];
            const activeUsersCtx = document.getElementById('activeUsersChart').getContext('2d');
            const activeUsersGradient = activeUsersCtx.createLinearGradient(0, 0, 0, 400);
            activeUsersGradient.addColorStop(0, 'rgba(54, 162, 235, 0.6)');
            activeUsersGradient.addColorStop(1, 'rgba(54, 162, 235, 0.2)');
            new Chart(activeUsersCtx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [ {
                        label: 'Active Users',
                        data: hourlyData,
                        backgroundColor: activeUsersGradient,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        datalabels: {
                            align: 'top',
                            color: 'black',
                            font: {
                                weight: 'bold'
                            }
                        }
                    } ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: true },
                        datalabels: {
                            color: '#333',  // Color of the data labels
                            font: {
                                weight: 'bold'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            const issuesCtx = document.getElementById('issuesChart').getContext('2d');
            new Chart(issuesCtx, {
                type: 'pie',
                data: {
                    labels: [ 'Resolved', 'Pending', 'In Progress' ],
                    datasets: [ {
                        label: 'Issues',
                        data: [ 70, 20, 10 ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(255, 206, 86, 0.6)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    } ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: true },
                        tooltip: {
                            callbacks: {
                                label: function (tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw + '%';  // Customize tooltip format
                                }
                            }
                        }
                    },
                    rotation: Math.PI / 4  // Rotate the pie chart for different look
                }
            });
        });

    </script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div id="sidebar" class="w-64 bg-blue-900 text-white hidden lg:block">
            <div class="p-6 text-center">
                <h1 class="text-xl font-bold">Admin Dashboard</h1>
            </div>
            <nav class="mt-4">
                <a href="#" class="block py-2 px-4 hover:bg-blue-700">Dashboard</a>
                <a href="#user-management" class="block py-2 px-4 hover:bg-blue-700">User Management</a>
                <a href="#product-management" class="block py-2 px-4 hover:bg-blue-700">Product Management</a>
                <a href="#reports" class="block py-2 px-4 hover:bg-blue-700">Reports</a>
                <a href="#issues" class="block py-2 px-4 hover:bg-blue-700">Issues</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            <!-- Header -->
            <header class="bg-white shadow flex justify-between items-center px-6 py-4">
                <button id="menu-toggle" class="lg:hidden text-blue-900">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-lg font-bold text-blue-900">Welcome, Admin</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-sm">admin@example.com</span>
                    <button class="bg-blue-900 text-white px-4 py-1 rounded">Logout</button>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="p-6 space-y-6">
                <!-- Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-white shadow rounded-lg p-4">
                        <h3 class="text-gray-700">Total Users</h3>
                        <p class="text-2xl font-bold">1,024</p>
                    </div>
                    <div class="bg-white shadow rounded-lg p-4">
                        <h3 class="text-gray-700">Total Products</h3>
                        <p class="text-2xl font-bold">582</p>
                    </div>
                    <div class="bg-white shadow rounded-lg p-4">
                        <h3 class="text-gray-700">Monthly Sales</h3>
                        <p class="text-2xl font-bold">$12,350</p>
                    </div>
                    <div class="bg-white shadow rounded-lg p-4">
                        <h3 class="text-gray-700">Pending Issues</h3>
                        <p class="text-2xl font-bold">5</p>
                    </div>
                </div>

                <!-- Charts and Reports -->
                <div id="reports" class="bg-white shadow rounded-lg p-6 space-y-6">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h2 class="text-xl font-bold mb-4">Sales Overview</h2>
                            <canvas id="salesChart" class="w-full h-64"></canvas>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold mb-4">User Growth</h2>
                            <canvas id="usersChart" class="w-full h-64"></canvas>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h2 class="text-xl font-bold mb-4">Report & Issue Status</h2>
                            <canvas id="issuesChart" class="w-20 h-20"></canvas> <!-- Reduced height -->
                        </div>
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-xl font-bold mb-4">Active Users in the Last Hour</h2>
                            <canvas id="activeUsersChart" class="w-full h-64"></canvas> <!-- Adjust size as needed -->
                        </div>
                    </div>
                </div>


                <!-- Product Management -->
                <div id="product-management" class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-4">Product Management</h2>

                    <!-- Add New Product -->
                    <div class="mb-6">
                        <h3 class="text-lg font-bold mb-2">Add New Product</h3>
                        <div class="flex space-x-4">
                            <input id="product-name" type="text" placeholder="Product Name"
                                class="border rounded px-4 py-2 w-1/2">
                            <input id="product-price" type="text" placeholder="Product Price"
                                class="border rounded px-4 py-2 w-1/2">
                            <button id="add-product-button" class="bg-blue-900 text-white px-4 py-2 rounded">Add
                                Product</button>
                        </div>
                    </div>

                    <!-- Product List -->
                    <!-- Product List -->
                    <table id="product-list" class="w-full text-left border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-blue-100">
                                <th class="p-3 border border-gray-300">Product ID</th>
                                <th class="p-3 border border-gray-300">Product Name</th>
                                <th class="p-3 border border-gray-300">Price</th>
                                <th class="p-3 border border-gray-300">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Data -->
                            <tr>
                                <td class="p-3 border border-gray-300">1</td>
                                <td class="p-3 border border-gray-300">
                                    <span class="product-name">Sample Product</span>
                                    <input type="text" class="edit-product-name hidden border rounded px-2 py-1"
                                        value="Sample Product">
                                </td>
                                <td class="p-3 border border-gray-300">
                                    <span class="product-price">$100</span>
                                    <input type="text" class="edit-product-price hidden border rounded px-2 py-1"
                                        value="100">
                                </td>
                                <td class="p-3 border border-gray-300">
                                    <button class="edit-product bg-blue-500 text-white px-3 py-1 rounded">Edit</button>
                                    <button
                                        class="save-product hidden bg-green-500 text-white px-3 py-1 rounded">Save</button>
                                    <button
                                        class="delete-product bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add Product Functionality
        $('#add-product-button').on('click', function () {
            const name = $('#product-name').val();
            const price = $('#product-price').val();

            if (name && price) {
                const newRow = `
                    <tr>
                        <td class="p-3 border border-gray-300">New</td>
                        <td class="p-3 border border-gray-300">
                            <span class="product-name">${name}</span>
                            <input type="text" class="edit-product-name hidden border rounded px-2 py-1" value="${name}">
                        </td>
                        <td class="p-3 border border-gray-300">
                            <span class="product-price">$${price}</span>
                            <input type="text" class="edit-product-price hidden border rounded px-2 py-1" value="${price}">
                        </td>
                        <td class="p-3 border border-gray-300">
                            <button class="edit-product bg-blue-500 text-white px-3 py-1 rounded">Edit</button>
                            <button class="save-product hidden bg-green-500 text-white px-3 py-1 rounded">Save</button>
                            <button class="delete-product bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                `;
                $('#product-list tbody').append(newRow);
                $('#product-name').val('');
                $('#product-price').val('');
            } else {
                alert('Please enter product name and price.');
            }
        });
        $(document).on('click', '.edit-product', function () {
            const row = $(this).closest('tr');
            row.find('.product-name, .product-price').hide();
            row.find('.edit-product-name, .edit-product-price').removeClass('hidden');
            row.find('.edit-product').hide();
            row.find('.save-product').removeClass('hidden');
        });
        $(document).on('click', '.save-product', function () {
            const row = $(this).closest('tr');
            const updatedName = row.find('.edit-product-name').val();
            const updatedPrice = row.find('.edit-product-price').val();

            row.find('.product-name').text(updatedName).show();
            row.find('.product-price').text(`$${updatedPrice}`).show();
            row.find('.edit-product-name, .edit-product-price').addClass('hidden');
            row.find('.save-product').addClass('hidden');
            row.find('.edit-product').show();
        });
        $(document).on('click', '.delete-product', function () {
            $(this).closest('tr').remove();
        });
    </script>
</body>

</html>