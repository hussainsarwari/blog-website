<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Categories - [Your Website Name]</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    @vite(['resources/css/app.css'])
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans text-gray-800">
    <div aria-hidden="true" id="preloader">
        <div class="flex justify-center loader" style="align-items: center;">
            <div class="box box0">
                <div></div>
            </div>
            <div class="box box1">
                <div></div>
            </div>
            <div class="box box2">
                <div></div>
            </div>
            <div class="box box3">
                <div></div>
            </div>
            <div class="box box4">
                <div></div>
            </div>
            <div class="box box5">
                <div></div>
            </div>
            <div class="box box6">
                <div></div>
            </div>
            <div class="box box7">
                <div></div>
            </div>
            <div class="ground">
                <div></div>
            </div>
        </div>
    </div>

    <x-header/>

    <!-- Blog Categories Section -->
    <div class="container mx-auto p-6 mt-[9em]">
        <h1 class="text-3xl text-center font-bold text-teal-600 mb-8">Explore Our Blog Categories</h1>
        <h2 class="text-center text-teal-600 mb-8">
            At [Your Website Name], we cover a wide range of topics to help you stay informed and inspired. Explore our categories below and dive into the latest posts.
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            <!-- Technology Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-laptop-code text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Technology</h3>
                <p class="text-gray-600 text-center mb-4">Stay up-to-date with the latest advancements in the world of technology. From software updates to gadget reviews, we cover it all.</p>
                <a href="/category/technology" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Sport Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-futbol text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Sport</h3>
                <p class="text-gray-600 text-center mb-4">Catch all the latest updates, scores, and analyses on your favorite sports. From football to basketball, we cover everything.</p>
                <a href="/category/sport" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Lifestyle Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-heart text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Lifestyle</h3>
                <p class="text-gray-600 text-center mb-4">Learn about healthy living, fitness routines, and general wellness tips to improve your lifestyle.</p>
                <a href="/category/lifestyle" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Personal Development Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-users text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Personal Development</h3>
                <p class="text-gray-600 text-center mb-4">Discover self-improvement tips, productivity hacks, and life coaching advice to reach your full potential.</p>
                <a href="/category/personal-development" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Islamic Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-mosque text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Islamic</h3>
                <p class="text-gray-600 text-center mb-4">Read insightful articles on Islamic teachings, history, and contemporary issues within the Muslim world.</p>
                <a href="/category/islamic" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Fashion Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-tshirt text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Fashion</h3>
                <p class="text-gray-600 text-center mb-4">Stay ahead in the fashion world with the latest trends, style guides, and wardrobe inspiration.</p>
                <a href="/category/fashion" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Movies Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-film text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Movies</h3>
                <p class="text-gray-600 text-center mb-4">Get movie reviews, release updates, and behind-the-scenes content about your favorite films and actors.</p>
                <a href="/category/movies" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Food Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-utensils text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Food</h3>
                <p class="text-gray-600 text-center mb-4">Explore delicious recipes, food trends, and nutrition tips to elevate your culinary experiences.</p>
                <a href="/category/food" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Travel Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-plane text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Travel</h3>
                <p class="text-gray-600 text-center mb-4">Get travel guides, tips, and destination reviews to help you plan your next adventure.</p>
                <a href="/category/travel" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>
        </div>
    </div>
    <footer class="py-4 relative top-[110em]   w-full ">
        <x-footer/>    
    </footer>
    <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
    <script type="module" src="{{ asset('js/custom.js') }}"></script>
    
</body>
</html>
