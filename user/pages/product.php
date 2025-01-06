<?php
// Sample dynamic data for the product fetched from a database
$productName = "Smartphone XYZ";
$productDescription = "The latest smartphone with cutting-edge technology, a powerful camera, and long battery life.";
$productPrice = 799.99;
$productDiscount = 20; // Discount in percentage
$productImage = "path/to/product-image.jpg";
$productCategory = "Electronics";
$productReviews = 4.5; // Rating out of 5
$productDeliveryTime = "3-5 Business Days";
$productTags = ["Smartphone", "4G", "Latest Model", "Premium"];
$productUses = "Ideal for gaming, photography, and daily use.";
$productBenefits = [
    "High-resolution display",
    "Long-lasting battery life",
    "Fast processing speed",
    "Top-notch camera quality"
];
$productWarnings = [
    "Avoid exposure to direct sunlight for long periods.",
    "Keep away from water and moisture."
];
$relatedProducts = [
    "Smartphone ABC", "Smartphone DEF", "Smartphone GHI"
]; // Sample related products
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - <?php echo $productName; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display:flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Header Section -->
    <header class="bg-blue-600 text-white py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Product Details</h1>
            <nav>
                <a href="#" class="text-white hover:text-gray-300 px-4">Home</a>
                <a href="#" class="text-white hover:text-gray-300 px-4">Shop</a>
            </nav>
        </div>
    </header>

    <!-- Product Section -->
    <section class="max-w-7xl mx-auto my-12 bg-white p-8 rounded-lg shadow-lg">
        <div class="flex space-x-8">
            <!-- Product Images -->
            <div class="w-1/3">
                <div class="flex space-x-4">
                    <img src="<?php echo $productImage; ?>" alt="Product Image" class="w-full h-auto rounded-lg shadow-lg">
                    <!-- Add other product images as thumbnails here -->
                </div>
            </div>

            <!-- Product Details -->
            <div class="w-2/3">
                <h2 class="text-3xl font-semibold text-gray-800"><?php echo $productName; ?></h2>
                <p class="text-xl text-gray-600 mt-4"><?php echo $productDescription; ?></p>

                <div class="mt-6 flex items-center">
                    <span class="text-2xl font-bold text-gray-900">${<?php echo number_format($productPrice - ($productPrice * $productDiscount / 100), 2); ?>}</span>
                    <?php if ($productDiscount > 0): ?>
                        <span class="text-lg text-red-500 line-through ml-4">${<?php echo number_format($productPrice, 2); ?>}</span>
                        <span class="text-lg text-green-600 ml-2"><?php echo $productDiscount; ?>% OFF</span>
                    <?php endif; ?>
                </div>

                <p class="text-md text-gray-500 mt-4">Category: <strong><?php echo $productCategory; ?></strong></p>
                <p class="text-md text-gray-500 mt-2">Estimated Delivery Time: <strong><?php echo $productDeliveryTime; ?></strong></p>

                <!-- Add to Cart & Wishlist -->
                <div class="mt-8 flex space-x-4">
                    <button class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600">Add to Cart</button>
                    <button class="bg-gray-300 text-gray-800 px-6 py-2 rounded-md hover:bg-gray-400">Add to Wishlist</button>
                </div>

                <!-- Share Section -->
                <div class="mt-6">
                    <span class="font-medium text-gray-800">Share this product:</span>
                    <div class="flex space-x-4 mt-2">
                        <a href="#" class="text-blue-500 hover:text-blue-700">Facebook</a>
                        <a href="#" class="text-blue-400 hover:text-blue-600">Twitter</a>
                        <a href="#" class="text-pink-500 hover:text-pink-700">Instagram</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Features -->
        <div class="mt-12">
            <h3 class="text-2xl font-semibold text-gray-800">Features & Benefits</h3>
            <ul class="list-disc ml-8 mt-4">
                <?php foreach ($productBenefits as $benefit): ?>
                    <li class="text-lg text-gray-600"><?php echo $benefit; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Warnings -->
        <div class="mt-12">
            <h3 class="text-2xl font-semibold text-gray-800">Important Warnings</h3>
            <ul class="list-disc ml-8 mt-4">
                <?php foreach ($productWarnings as $warning): ?>
                    <li class="text-lg text-red-500"><?php echo $warning; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Reviews -->
        <div class="mt-12">
            <h3 class="text-2xl font-semibold text-gray-800">Customer Reviews</h3>
            <div class="flex items-center mt-4">
                <div class="flex space-x-2">
                    <?php for ($i = 0; $i < floor($productReviews); $i++): ?>
                        <span class="text-yellow-500">&#9733;</span>
                    <?php endfor; ?>
                    <?php if (floor($productReviews) < 5): ?>
                        <span class="text-gray-400">&#9733;</span>
                    <?php endif; ?>
                </div>
                <span class="text-gray-600 ml-4"><?php echo number_format($productReviews, 1); ?> / 5</span>
            </div>
        </div>

        <!-- Recommended Products -->
        <div class="mt-12">
            <h3 class="text-2xl font-semibold text-gray-800">You May Also Like</h3>
            <div class="flex space-x-6 mt-6">
                <?php foreach ($relatedProducts as $relatedProduct): ?>
                    <div class="w-1/3 bg-gray-50 p-4 rounded-lg shadow-md">
                        <img src="path/to/related-product.jpg" alt="Related Product" class="w-full h-auto rounded-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800"><?php echo $relatedProduct; ?></h4>
                        <p class="text-md text-gray-600 mt-2">$599.99</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="mt-12">
            <h3 class="text-2xl font-semibold text-gray-800">Payment Options</h3>
            <div class="flex space-x-6 mt-6">
                <button id="payNowBtn" class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600">Pay Now</button>
                <button class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600">Pay with PayPal</button>
                <button class="bg-gray-800 text-white px-6 py-3 rounded-md hover:bg-gray-700">Credit/Debit Card</button>
            </div>
        </div>
    </section>
    <div id="paymentModal" class="modal">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Choose Payment Method</h2>
            <div class="space-y-4">
                <button class="payment-option bg-blue-500 text-white px-6 py-2 rounded-md w-full hover:bg-blue-600">Credit / Debit Card</button>
                <button class="payment-option bg-green-500 text-white px-6 py-2 rounded-md w-full hover:bg-green-600">UPI</button>
                <button class="payment-option bg-yellow-500 text-white px-6 py-2 rounded-md w-full hover:bg-yellow-600">Net Banking</button>
            </div>

            <div id="paymentForm" class="hidden mt-8">
                <!-- Form for Card Details -->
                <div id="cardForm" class="payment-details hidden">
                    <h3 class="text-xl text-gray-700">Enter Credit/Debit Card Details</h3>
                    <input id="cardNumber" type="text" class="w-full p-3 mt-4 border border-gray-300 rounded-md" placeholder="Card Number" maxlength="16">
                    <input id="expiryDate" type="text" class="w-full p-3 mt-4 border border-gray-300 rounded-md" placeholder="Expiry Date (MM/YY)">
                    <input id="cvv" type="password" class="w-full p-3 mt-4 border border-gray-300 rounded-md" placeholder="CVV">
                </div>

                <!-- Form for UPI Details -->
                <div id="upiForm" class="payment-details hidden">
                    <h3 class="text-xl text-gray-700">Enter UPI Details</h3>
                    <input id="upiId" type="text" class="w-full p-3 mt-4 border border-gray-300 rounded-md" placeholder="UPI ID">
                </div>

                <!-- Form for Net Banking Details -->
                <div id="netBankingForm" class="payment-details hidden">
                    <h3 class="text-xl text-gray-700">Choose Bank</h3>
                    <select id="bankSelect" class="w-full p-3 mt-4 border border-gray-300 rounded-md">
                        <option value="">Select Bank</option>
                        <option value="HDFC">HDFC</option>
                        <option value="ICICI">ICICI</option>
                        <option value="SBI">SBI</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button id="submitPayment" class="bg-blue-500 text-white px-6 py-3 mt-6 rounded-md w-full hover:bg-blue-600">Submit Payment</button>
            </div>

            <!-- Payment Success -->
            <div id="paymentSuccess" class="hidden mt-8">
                <h3 class="text-xl font-semibold text-green-500">Payment Successful!</h3>
                <div id="receipt" class="mt-4 text-gray-700">
                    <p><strong>Receipt Number:</strong> <span id="receiptNumber"></span></p>
                    <p><strong>Payment ID:</strong> <span id="paymentId"></span></p>
                    <p><strong>Date:</strong> <span id="paymentDate"></span></p>
                    <p><strong>Product:</strong> Smartphone XYZ</p>
                    <p><strong>Payment Method:</strong> <span id="paymentMethod"></span></p>
                    <p><strong>Transaction Method:</strong> <span id="transactionMethod"></span></p>
                </div>
                <button id="downloadReceipt" class="bg-green-500 text-white px-6 py-3 mt-6 rounded-md w-full hover:bg-green-600">Download Receipt</button>
            </div>
        </div>
    </div>
    <script>
        $(".modal").hide();
        $('#payNowBtn').click(function() {
            console.log('Pay Now button clicked');
            $('#paymentModal').fadeIn();
        });

        $('.payment-option').click(function() {
            let paymentMethod = $(this).text().trim().toLowerCase();
            $('#paymentForm').removeClass('hidden');
            $('#paymentSuccess').addClass('hidden');
            $('.payment-details').addClass('hidden');

            if (paymentMethod === "credit / debit card") {
                $('#cardForm').removeClass('hidden');
                $('#paymentMethod').text("Credit/Debit Card");
                $('#transactionMethod').text("Card Payment");
            } else if (paymentMethod === "upi") {
                $('#upiForm').removeClass('hidden');
                $('#paymentMethod').text("UPI");
                $('#transactionMethod').text("UPI Payment");
            } else if (paymentMethod === "net banking") {
                $('#netBankingForm').removeClass('hidden');
                $('#paymentMethod').text("Net Banking");
                $('#transactionMethod').text("Net Banking");
            }
        });

        $('#submitPayment').click(function() {
            let isValid = false;

            if ($('#cardForm').hasClass('hidden') === false) {
                const cardNumber = $('#cardNumber').val();
                const expiryDate = $('#expiryDate').val();
                const cvv = $('#cvv').val();
                isValid = validateCard(cardNumber, expiryDate, cvv);
            } else if ($('#upiForm').hasClass('hidden') === false) {
                const upiId = $('#upiId').val();
                isValid = validateUPI(upiId);
            } else if ($('#netBankingForm').hasClass('hidden') === false) {
                const bank = $('#bankSelect').val();
                isValid = bank !== "";
            }
            if (isValid) {
                showPaymentSuccess();
            } else {
                alert("Please enter valid payment details.");
            }
        });
        function validateCard(cardNumber, expiryDate, cvv) {
            const cardRegex = /^[0-9]{16}$/;
            const expiryRegex = /^(0[1-9]|1[0-2])\/[0-9]{2}$/;
            const cvvRegex = /^[0-9]{3}$/;

            return cardRegex.test(cardNumber) && expiryRegex.test(expiryDate) && cvvRegex.test(cvv);
        }
        function validateUPI(upiId) {
            const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
            return upiRegex.test(upiId);
        }
        function showPaymentSuccess() {
            const receiptNumber = 'REC' + Math.floor(Math.random() * 1000000);
            const paymentId = 'PAY' + Math.floor(Math.random() * 1000000);
            const paymentDate = new Date().toLocaleString();
            $('#paymentSuccess').removeClass('hidden');
            $('#receiptNumber').text(receiptNumber);
            $('#paymentId').text(paymentId);
            $('#paymentDate').text(paymentDate);
            $('#downloadReceipt').click(function() {
                downloadReceipt(receiptNumber, paymentId, paymentDate);
            });
        }
        function downloadReceipt(receiptNumber, paymentId, paymentDate) {
            const receiptContent = `Receipt Number: ${receiptNumber}\nPayment ID: ${paymentId}\nDate: ${paymentDate}\nProduct: Smartphone XYZ\nPayment Method: ${$('#paymentMethod').text()}\nTransaction Method: ${$('#transactionMethod').text()}`;
            const blob = new Blob([receiptContent], { type: 'text/plain' });
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = `receipt_${receiptNumber}.txt`;
            link.click();
        }

        // Close the payment modal when clicked outside of it
        // $(document).click(function(event) {
        //     if (!$(event.target).closest('#paymentModal').length) {
        //         $('#paymentModal').fadeOut();
        //     }
        // });
    </script>
</body>
</html>
