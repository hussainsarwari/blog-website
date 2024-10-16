<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Basic SEO Meta Tags -->
    <meta name="description" content="">
    <title>Time management</title>
    <meta name="keywords" content="Laravel, Blog ">
    <meta name="author" content="">

    <!-- Favicon Meta Tag -->
    <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon"> <!-- Path to your favicon file -->
    <link rel="shortcut icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon">
    <!-- Optional for older browsers -->

    <!-- Open Graph Meta Tags (for social media sharing: Facebook, LinkedIn) -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="website name">

    <!-- Twitter Card Meta Tags (for Twitter sharing) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="robots" content="index, follow">


    @vite(['resources/css/app.css'])
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
    {{-- @vite(['resources/css/templatemo-art-factory.css']) --}}
    {{-- @vite(['resources/css/style.css']) --}}


</head>

<body class="overflow-x-hidden">



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
    <div
        class="rounded-full w-[8em] h-8em md:w-[30em] md:h-[30em] bg-yellow-300 absolute top-[60em] md:top-[50em] left-0 md:left-10 shadow-2xl shadow-yellow-500 box1">
    </div>




    {{-- main section --}}
    <div class="relative w-full h-screen mb-20 z-[200]">
        <div class="container   p-3 relative top-[20em] m-auto  z-[180] ">
            <h1 class="m-5 font-bold text-center text-blue-800 business_title">Welcome to Our Business <span
                    class="text-yellow-300">

                    Blog
                </span>
            </h1>
            <p class="p-3 m-auto text-center text-blue-950 " style="font-size: 16px;">Our blog is designed to provide valuable insights,
                strategic advice, and up-to-date knowledge to help you succeed in today’s fast-paced business
                environment. Each post is backed by thorough research, drawing from trusted sources such as leading
                blogs, articles, books, and more.</p>

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

            <!-- Filter Menu with animation -->
            <div id="filterMenu"
                class="max-w-4xl relative z-[200] top-[1em]   mx-auto bg-white p-6  rounded-lg shadow-lg mt-8 hidden opacity-0 transition-opacity duration-300">
                <div class="flex items-center justify-center mb-6">

                    <button onclick="closeFilterMenu()"
                        class="px-3 py-2 text-blue-500 transition-all duration-300 border-2 border-blue-500 rounded-md hover:text-red-500 focus:outline-none hover:border-red-500">
                        close
                    </button>
                </div>


                <!-- Filter by Tags (as clickable buttons) -->
                <div class="mb-6 ">
                    <label class="block mb-2 font-medium text-gray-700">Filter by Tags:</label>
                    <div class="flex flex-wrap gap-2">
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Affiliate Marketing
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Online Businesses
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Marketing
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Degital Marketing
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Finance
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Business
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            E-commerce
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Business Strategy
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Startups
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Sales
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Customer Service
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Human Resources
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Business Development
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Investment
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Market Research
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Branding
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Product Management
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Email Marketing
                        </button>
                        <button onclick="toggleTag(this)"
                            class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                            Social Marketing
                        </button>
                    </div>
                </div>

                <!-- Date Range Filter -->
                <div class="mb-6">
                    <label class="block mb-2 font-medium text-gray-700">Filter by Date Range:</label>
                    <div class="flex flex-col ">
                        <div class="flex-1">
                            <label for="startDate" class="block mb-1 text-gray-500">Start Date:</label>
                            <input type="date" id="startDate"
                                class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="flex-1">
                            <label for="endDate" class="block mb-1 text-gray-500">End Date:</label>
                            <input type="date" id="endDate"
                                class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Rating Filter (Slider) -->
                <div class="mb-6">
                    <label for="rating" class="block mb-2 font-medium text-gray-700">Minimum Rating:</label>
                    <input type="range" id="rating" min="1" max="5" step="1"
                        class="w-full focus:ring-2 focus:ring-blue-500">
                    <div class="mt-2 text-sm text-gray-500">Rating: <span id="ratingValue">3</span> stars or higher
                    </div>
                </div>

                <!-- Sort By Filter -->
                <div class="mb-6">
                    <label for="sort" class="block mb-2 font-medium text-gray-700">Sort by:</label>
                    <select id="sort"
                        class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="latest">Latest</option>
                        <option value="popular">Most Popular</option>
                        <option value="trending">Trending</option>
                        <option value="highestRated">Highest Rated</option>
                    </select>
                </div>

                <!-- Filter Button -->
                <div class="flex justify-end">
                    <button
                        class="px-6 py-3 text-white transition-all duration-300 bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Apply Filters
                    </button>
                </div>
            </div>
            {{-- end of fillter section --}}
        </div>


        <div
            class="w-[55em] h-[55em] lg:w-[80em] lg:h-[80em] bg-blue-500 shadow-2xl shadow-blue-600 absolute top-[-18em] right-[-5em] md:right-4 rounded-full z-[-1]">
        </div>
        <div class="container bg-white shadow-2xl  p-3 relative top-[40em] m-auto   rounded-xl ">




            <span class=" italic font-bold text-center text-blue-500  h-[2em] block w-full" style='font-size:2em;'>
                Latest Articles </span>

            <p class="text-center text-slate-400">
                Discover our three most recent posts, featuring expert analyses, industry updates, and actionable
                strategies to help you grow your business and enhance your leadership.
            </p>



            <hr>
            <hr>




            {{-- show 3 blog post --}}



            <div class="flex flex-col xl:flex-row">

                {{-- box 1 biggest --}}
                <div
                    class="flex flex-col items-center justify-center row-span-1 xl:items-baseline xl:row-span-2 xl:col-start-1">
                    <a href="{{ url('/blog/business/' . 'title') }}"
                        class="relative w-[80%] h-[20em]  xl:h-[40em] xl:w-[40em] flex justify-around flex-col rounded-lg shadow
                     mt-4 text-white hover:underline  hover:scale-95 transition-all duration-100 ease-in-out
                    ">
                        <img src="{{ url('images/2.jpg') }}" alt="Blog Post"
                            class="absolute object-cover w-full h-full rounded-md ">
                        <div
                            class="absolute top-0 flex  h-full  flex-col 
                        bg-gradient-to-t from-[#2867a3] to-none  backdrop-blur-0 hover:backdrop-blur-sm  justify-between rounded-lg p-3 transition-all duration-75
                        ">

                            <h3 class="mb-2 text-blue-400 text-sm p-2 rounded-md bg-slate-900 font-semibold ">Large Blog Post Title</h3>
                            <section>

                                <p class="text-slate-300 ">This is a brief description of the large blog post. It
                                    should
                                    provide an overview of the content, enticing readers to click through and read more.
                                </p>
                                <div class="flex items-center mb-2">
                                    <!-- Star Ratings -->


                                    <span class="pr-1 text-yellow-300">241 </span>
                                    <svg width="20" height="20" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                            fill="none" stroke="yellow" stroke-width="1" />
                                    </svg>
                                </div>
                                <div class="mt-2">
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">Business</span>
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">Technology</span>
                                </div>
                                <div class="py-1 text-sm text-white author-text">

                                    mohammad hussain sarvari

                                </div>
                                <div class="py-1 text-sm text-white date ">
                                    04-2-2024
                                </div>
                            </section>
                        </div>
                    </a>
                </div>
                {{-- box 2 --}}
                <div class="flex flex-col  h-[42em]  w-full mt-5 xl:mt-0">
                    <div class="flex flex-col items-center justify-center xl:items-end xl:justify-normal">

                        <a href="{{ url('/blog/business/' . 'title') }}"
                            class="relative m-auto  w-[80%] h-[19em] xl:w-[20em]  flex justify-around flex-col rounded-lg shadow
                     mt-[5em] text-white hover:underline  hover:scale-95 transition-all duration-100 ease-in-out
                    ">
                            <img src="{{ url('images/2.jpg') }}" alt="Blog Post"
                                class="absolute object-cover w-full h-full rounded-md">
                            <div
                                class="absolute top-0 flex  h-full  flex-col 
                        bg-gradient-to-t from-[#2867a3] to-none backdrop-blur-0 hover:backdrop-blur-sm  justify-between rounded-lg p-3 transition-all duration-75
                        ">

                                <h3 class="mb-2 text-blue-400 text-sm p-2 rounded-md bg-slate-900 font-semibold">Large Blog Post Title</h3>
                                <section>

                                    <p class="text-slate-300 ">This is a brief description of the large blog post. It
                                        should
                                        provide an overview of the content, enticing readers to click through and read
                                        more.
                                    </p>
                                    <div class="flex items-center mb-2">
                                        <!-- Star Ratings -->


                                        <span class="pr-1 text-yellow-300">241 </span>
                                        <svg width="20" height="20" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                                fill="none" stroke="yellow" stroke-width="1" />
                                        </svg>
                                    </div>
                                    <div class="mt-2">
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">Business</span>
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">Technology</span>
                                    </div>
                                    <div class="py-1 text-sm text-white author-text">

                                        mohammad hussain sarvari

                                    </div>
                                    <div class="py-1 text-sm text-white date ">
                                        04-2-2024
                                    </div>
                                </section>
                            </div>
                        </a>

                    </div>

                    {{-- box 3 --}}

                    <div class="flex flex-col items-center ">
                        <a href="{{ url('/blog/business/' . 'title') }}"
                            class="absolute  w-[78%] h-[19em] xl:w-[20em]   flex justify-around flex-col rounded-lg shadow
                    mt-4 text-white hover:underline  hover:scale-95 transition-all duration-100 ease-in-out
                    ">
                            <img src="{{ url('images/2.jpg') }}" alt="Blog Post"
                                class="absolute object-cover w-full h-full rounded-md">
                            <div
                                class="absolute top-0 flex  h-full  flex-col 
                        bg-gradient-to-t from-[#2867a3] to-none backdrop-blur-0 hover:backdrop-blur-sm  justify-between rounded-lg p-3 transition-all duration-75
                        ">

                                <h3 class="mb-2 text-blue-400 text-sm p-2 rounded-md bg-slate-900 font-semibold">Large Blog Post Title</h3>
                                <section>

                                    <p class="text-slate-300 ">This is a brief description of the large blog post. It
                                        should
                                        provide an overview of the content, enticing readers to click through and read
                                        more.
                                    </p>
                                    <div class="flex items-center mb-2">
                                        <!-- Star Ratings -->

                                        <span class="pr-1 text-yellow-300">241 </span>
                                        <svg width="20" height="20" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                                fill="none" stroke="yellow" stroke-width="1" />
                                        </svg>
                                    </div>
                                    <div class="mt-2">
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">Business</span>
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">Technology</span>
                                    </div>
                                    <div class="py-1 text-sm text-white author-text">

                                        mohammad hussain sarvari

                                    </div>
                                    <div class="py-1 text-sm text-white date ">
                                        04-2-2024
                                    </div>

                                </section>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <hr>
            <div class="">
                {{-- advertise --}}
            </div>
            {{-- show all blog post(business) --}}








            <div class="p-3 flex flex-col  min-h-[50em] sm:min-h-[40em] max-h-[150em]  overflow-y-auto mt-[20em]">
                <hr>
                <hr>
                {{-- header --}}
                <span class=" italic font-bold text-center text-blue-500  h-[2em] block w-full text-xl">All Business
                    Posts</span>
                <p class="text-center text-slate-400">
                    Browse our full archive of business content, covering a wide range of topics from leadership and
                    innovation to marketing and financial strategies. Our posts are designed to offer practical
                    solutions and expert knowledge that drive real-world results.
                </p>
                <hr>
                <hr>




                <div class="p-3  w-full h-fit z-[101] mt-[10em]">


                    <a href="{{ url('/blog/business/' . 'my name is hussain hahah') }}"
                        class="flex flex-row w-[100%] justify-around p-0 my-3  transition-all duration-100 rounded-md  hover:underline  bg-slate-50 sm:shadow-xl hover:shadow-2xl ">

                        {{-- contant --}}
                        <div
                            class="w-full h-[20em] flex flex-col justify-between p-4   z-[100]  bg-slate-900 backdrop-blur-0 hover:backdrop-blur-sm  rounded-md">
                            <p class="mb-2 text-sm font-semibold text-blue-400 md:text-xl  p-2 rounded-md w-fi">Post
                                Title

                                <hr>
                            </p>
                            <section>

                                <p class="text-sm text-blue-400">This is a brief description of the large blog post.
                                    It
                                    should
                                    provide an overview of the content, enticing readers to click through and read more.
                                </p>
                                <div class="flex items-center mb-2">
                                    <!-- Star Ratings -->

                                    <span class="pr-1 text-yellow-600">241 </span>
                                    <svg width="20" height="20" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                            fill="none" stroke="#ca8a04" stroke-width="2" />
                                    </svg>
                                </div>
                                <div class="mt-2">
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">Business</span>
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">Technology</span>
                                </div>
                                <div class="py-1 text-sm text-blue-400 author-text">

                                    mohammad hussain sarvari

                                </div>
                                <div class="py-1 text-sm text-blue-400 date ">
                                    04-2-2024
                                </div>
                            </section>

                        </div>
                        {{-- image --}}
                        <div class="image hidden sm:block  m-auto w-full h-[20em] ">
                            <img src="{{ url('images/2.jpg') }}" alt="Blog Post"
                                class=" object-cover w-full h-full rounded-md">
                        </div>
                    </a>
                    
                </div>

            </div>
        </div>

    </div>



  
    {{-- footer section --}}


    <footer class="py-4 relative top-[250em] h-[130em] md:h-[70em] w-full ">
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

    

<script  type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
<script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
<script type="module" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
