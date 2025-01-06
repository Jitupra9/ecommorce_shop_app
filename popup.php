
<div id="festivalPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="relative bg-white w-full max-w-3xl rounded-lg shadow-lg overflow-hidden transform scale-90 md:scale-100 transition duration-300">
        <button id="closePopup" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="p-8 text-center">
            <h2 class="text-4xl font-bold text-indigo-600">🎉 Festival Shopping Sale 🎉</h2>
            <p class="mt-4 text-lg text-gray-700">
                Enjoy an exclusive <span class="text-red-500 font-bold">50% Discount</span> when you shop for ₹50,000 or more!
            </p>
            <p class="mt-2 text-sm text-gray-500">Offer valid for a limited time only. Don't miss out!</p>

            <div class="mt-8">
                <a href="/" class="bg-indigo-600 text-white py-3 px-6 rounded-lg text-lg hover:bg-indigo-700 transition duration-300">
                    Start Shopping Now
                </a>
            </div>
            <div class="mt-10 flex justify-center space-x-6">
                <img src="path/to/offer-image1.jpg" alt="Discount" class="w-24 h-24 object-cover rounded-full shadow-md">
                <img src="path/to/offer-image2.jpg" alt="Festival" class="w-24 h-24 object-cover rounded-full shadow-md">
                <img src="path/to/offer-image3.jpg" alt="Shopping" class="w-24 h-24 object-cover rounded-full shadow-md">
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('closePopup').addEventListener('click', function () {
        document.getElementById('festivalPopup').style.display = 'none';
    });
    setTimeout(() => {
        document.getElementById('festivalPopup').style.display = 'flex';
    }, 1000);
</script>