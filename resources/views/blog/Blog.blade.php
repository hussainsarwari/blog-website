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
    <div class="container mx-auto p-6 pt-[13em]">
        <h1 class="text-3xl text-center font-bold text-teal-600 mb-8">Explore Our Blog Categories</h1>
        <h2 class="text-center text-teal-600 mb-8">
            At [Your Website Name], we cover a wide range of topics to help you stay informed and inspired. Explore our categories below and dive into the latest posts.
        </h2>

        {{-- search --}}
        <form action="search_blog" method="post" class="relative flex flex-row mx-5 my-3 search">
            @csrf
            <input
                class="w-full p-3 text-blue-400 transition duration-300 ease-in-out rounded-lg shadow-lg bg-none bg-opacity-10 backdrop-blur-md focus:bg-opacity-20 focus:ring-2 focus:ring-white focus:outline-none placeholder:text-blue-300"
                placeholder="Search" type="search" name="search" required id="search">
            <button type="submit ">
                <svg class="mx-2 bi bi-search absolute right-[1em] top-[1em]" fill="#333" height="20"
                    viewbox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                    </path>
                </svg>
            </button>
        </form>
        <!-- fillter section -->
        <div class="relative flex flex-col justify-center px-20 py-0 text-center bottom-[-2em] h-fit ">
            <button onclick="toggleFilterMenu() "
                class="w-full px-6 py-3 text-white transition-all duration-300 bg-blue-400 shadow-md rounded-xl focus:outline-none focus:ring-4 focus:ring-none">
                Filter
            </button>
        </div>
        <form action="filter_blog" method="POST" id="filterMenu"
                class="max-w-4xl relative z-[200] top-[1em]   mx-auto bg-white p-6  rounded-lg shadow-lg mt-8 hidden opacity-0 transition-opacity duration-300">
               @csrf
                <div class="flex items-center justify-center mb-6">

                    <button type="button" onclick="closeFilterMenu()"
                        class="px-3 py-2 text-blue-500 transition-all duration-300 border-2 border-blue-500 rounded-md hover:text-red-500 focus:outline-none hover:border-red-500">
                        close
                    </button>
                </div>


                <!-- Date Range Filter -->
                <div class="mb-6">
                    <label class="block mb-2 font-medium text-gray-700">Filter by Date Range:</label>
                    <div class="flex flex-col ">
                        <div class="flex-1">
                            <label for="startDate" class="block mb-1 text-gray-500">Start Date:</label>
                            <input name="startdate" type="date" id="startDate"
                                class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="flex-1">
                            <label for="endDate" class="block mb-1 text-gray-500">End Date:</label>
                            <input name="enddate" type="date" id="endDate"
                                class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Rating Filter (Slider) -->
                <div class="mb-6">
                    <label for="rating" class="block mb-2 font-medium text-gray-700">Minimum Rating:</label>
                    <input name="rating" type="range" id="rating" min="1" max="5" step="1"
                        class="w-full focus:ring-2 focus:ring-blue-500">
                    <div class="mt-2 text-sm text-gray-500">Rating: <span id="ratingValue">3</span> stars or higher
                    </div>
                </div>

               
                <!-- Filter by category -->
                <div class="mb-6">
                    <label for="sort" class="block mb-2 font-medium text-gray-700">Category:</label>
                    <select id="sort" name="sort" 
                        class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="latest">Latest</option>
                        <option value="popular">Most Popular</option>
                        <option value="trending">Trending</option>
                        <option value="highestRated">Highest Rated</option>
                    </select>
                </div>

                <!-- Filter Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-3 text-white transition-all duration-300 bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Apply Filters
                    </button>
                </div>
            </form>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-20">

            <!-- Technology Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-laptop-code text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Technology</h3>
                <p class="text-gray-600 text-center mb-4">Stay up-to-date with the latest advancements in the world of technology. From software updates to gadget reviews, we cover it all.</p>
                <a title='technology' href="{{ url('blog/Technology') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Sport Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-futbol text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Sport</h3>
                <p class="text-gray-600 text-center mb-4">Catch all the latest updates, scores, and analyses on your favorite sports. From football to basketball, we cover everything.</p>
                <a title='sport' href="{{ url('blog/sport') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Lifestyle Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-heart text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Lifestyle</h3>
                <p class="text-gray-600 text-center mb-4">Learn about healthy living, fitness routines, and general wellness tips to improve your lifestyle.</p>
                <a title='lifestyle' href="{{ url('blog/lifestyle') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Personal Development Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-users text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Personal Development</h3>
                <p class="text-gray-600 text-center mb-4">Discover self-improvement tips, productivity hacks, and life coaching advice to reach your full potential.</p>
                <a title='personal development' href="{{ url('blog/Personal-Development') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Islamic Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-mosque text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Islamic</h3>
                <p class="text-gray-600 text-center mb-4">Read insightful articles on Islamic teachings, history, and contemporary issues within the Muslim world.</p>
                <a title='islamic' href="{{ url('blog/Islamic') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Fashion Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-tshirt text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Fashion</h3>
                <p class="text-gray-600 text-center mb-4">Stay ahead in the fashion world with the latest trends, style guides, and wardrobe inspiration.</p>
                <a title='fashion' href="{{ url('blog/Fashion') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Movies Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-film text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Movies</h3>
                <p class="text-gray-600 text-center mb-4">Get movie reviews, release updates, and behind-the-scenes content about your favorite films and actors.</p>
                <a title='movie' href="{{ url('blog/Movie') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Food Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-utensils text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Food</h3>
                <p class="text-gray-600 text-center mb-4">Explore delicious recipes, food trends, and nutrition tips to elevate your culinary experiences.</p>
                <a title='food' href="{{ url('blog/Food') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>

            <!-- Travel Category -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-plane text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Travel</h3>
                <p class="text-gray-600 text-center mb-4">Get travel guides, tips, and destination reviews to help you plan your next adventure.</p>
                <a title='travel' href="{{ url('blog/Travel') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Explore Category</a>
            </div>
        </div>
    </div>
    <footer class="py-4 relative top-[110em]   w-full ">
        <x-footer/>    
    </footer>
    <script>
        function toggleFilterMenu() {
            const filterMenu = document.getElementById('filterMenu');
            filterMenu.classList.toggle('hidden');
            filterMenu.classList.toggle('opacity-0');
            filterMenu.classList.toggle('opacity-100');
        }

        // Function to toggle tag active state
        function toggleTag(tag) {
            tag.classList.toggle('bg-blue-500');
            tag.classList.toggle('text-white');
            tag.classList.toggle('bg-gray-200');
            tag.classList.toggle('text-gray-700');
        }

        // Function to close the filter menu
        function closeFilterMenu() {
            const filterMenu = document.getElementById('filterMenu');
            filterMenu.classList.remove('opacity-100');
            filterMenu.classList.add('opacity-0');
            setTimeout(() => {
                filterMenu.classList.add('hidden');
            }, 300); // Timeout matches the animation duration
        }
        const ratingInput = document.getElementById('rating');
        const ratingValueDisplay = document.getElementById('ratingValue');
        ratingInput.addEventListener('input', function() {
            ratingValueDisplay.textContent = this.value;
        });
    </script>

    
    <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
    <script type="module" src="{{ asset('js/custom.js') }}"></script>
    
</body>
</html>
