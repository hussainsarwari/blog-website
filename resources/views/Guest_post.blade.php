<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="robots" content="index, follow">

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



    @vite(['resources/css/app.css'])
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])



    {{-- @vite(['resources/css/templatemo-art-factory.css']) --}}
    {{-- @vite(['resources/css/style.css'])      --}}

    <style>
        @keyframes grow {
            0% {
                width: 0;
            }

            100% {
                width: var(--skill-level);
            }
        }

        .skill-bar-animation {
            width: 0;
            height: 100%;
            background-color: #4F46E5;
            animation: grow 2s ease-in-out forwards;
            animation-delay: 1s;
        }
    </style>
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body class="">

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
    {{-- main section --}}

    <div class="container mx-auto p-6 top-[10em] relative">
        <!-- Welcome Section -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-blue-600 animate-bounce">Become an Author and Share Your Insights
                on <span class="text-yellow-400">site name</span></h1>
            <p class="text-lg text-blue-900 mt-4">
                At [Your Website Name], we believe in the power of shared knowledge and diverse perspectives. We invite
                passionate writers and industry experts to join our community as guest authors. Whether you have
                insights on technology, lifestyle, business, or any of our other core categories, your voice matters. By
                contributing your expertise, you not only help educate and inspire our readers but also enhance your own
                visibility within your field. Take this opportunity to connect with a wider audience and establish
                yourself as a thought leader. Submit your guest post today and be a part of our mission to inform,
                engage, and empower others!


            </p>
        </div>
        <h2 class="text-center text-blue-600 font-bold ">List of Categories</h2>
        <p class="text-center text-blue-900 my-5">Select a topic that falls under any of the below-mentioned
            categories.</p>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
            <div
                class="bg-blue-100 text-center p-4 rounded-lg shadow hover:bg-indigo-100 transition duration-300 ease-in-out">
                <i class="fas fa-laptop-code text-indigo-600 text-3xl mb-2"></i>
                <p class="text-lg font-semibold">Technology</p>
            </div>
            <div
                class="bg-blue-100 text-center p-4 rounded-lg shadow hover:bg-indigo-100 transition duration-300 ease-in-out">
                <i class="fas fa-basketball-ball text-indigo-600 text-3xl mb-2"></i>
                <p class="text-lg font-semibold">Sport</p>
            </div>
            <div
                class="bg-blue-100 text-center p-4 rounded-lg shadow hover:bg-indigo-100 transition duration-300 ease-in-out">
                <i class="fas fa-leaf text-indigo-600 text-3xl mb-2"></i>
                <p class="text-lg font-semibold">Lifestyle</p>
            </div>
            <div
                class="bg-blue-100 text-center p-4 rounded-lg shadow hover:bg-indigo-100 transition duration-300 ease-in-out">
                <i class="fas fa-brain text-indigo-600 text-3xl mb-2"></i>
                <p class="text-lg font-semibold">Personal Development</p>
            </div>
            <div
                class="bg-blue-100 text-center p-4 rounded-lg shadow hover:bg-indigo-100 transition duration-300 ease-in-out">
                <i class="fas fa-quran text-indigo-600 text-3xl mb-2"></i>
                <p class="text-lg font-semibold">Islamic</p>
            </div>
            <div
                class="bg-blue-100 text-center p-4 rounded-lg shadow hover:bg-indigo-100 transition duration-300 ease-in-out">
                <i class="fas fa-plane text-indigo-600 text-3xl mb-2"></i>
                <p class="text-lg font-semibold">Travel</p>
            </div>
            <div
                class="bg-blue-100 text-center p-4 rounded-lg shadow hover:bg-indigo-100 transition duration-300 ease-in-out">
                <i class="fas fa-utensils text-indigo-600 text-3xl mb-2"></i>
                <p class="text-lg font-semibold">Food</p>
            </div>
            <div
                class="bg-blue-100 text-center p-4 rounded-lg shadow hover:bg-indigo-100 transition duration-300 ease-in-out">
                <i class="fas fa-chart-line text-indigo-600 text-3xl mb-2"></i>
                <p class="text-lg font-semibold">Business</p>
            </div>
            <div
                class="bg-blue-100 text-center p-4 rounded-lg shadow hover:bg-indigo-100 transition duration-300 ease-in-out">
                <i class="fas fa-film text-indigo-600 text-3xl mb-2"></i>
                <p class="text-lg font-semibold">Movie</p>
            </div>
            <div
                class="bg-blue-100 text-center p-4 rounded-lg shadow hover:bg-indigo-100 transition duration-300 ease-in-out">
                <i class="fas fa-tshirt text-indigo-600 text-3xl mb-2"></i>
                <p class="text-lg font-semibold">Fashion</p>
            </div>
        </div>

        <!-- Submission Guidelines Section -->
        <div class="bg-indigo-50 p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-3xl font-bold text-indigo-600 mb-6">Guest Post Guidelines</h2>
            <p class="text-gray-700 mb-6">Before submitting, please ensure that your content adheres to the following
                guidelines:</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Guideline 1 -->
                <div class="flex items-start bg-white p-4 rounded-lg shadow transition transform hover:scale-105">
                    <i class="fas fa-check-circle text-green-500 text-3xl mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Original Content</h3>
                        <p class="text-gray-600">Your post must be 100% original and unpublished elsewhere.</p>
                    </div>
                </div>

                <!-- Guideline 2 -->
                <div class="flex items-start bg-white p-4 rounded-lg shadow transition transform hover:scale-105">
                    <i class="fas fa-file-word text-blue-500 text-3xl mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Word Count</h3>
                        <p class="text-gray-600">The article should be at least 1200 words, thoroughly covering the
                            topic.</p>
                    </div>
                </div>

                <!-- Guideline 3 -->
                <div class="flex items-start bg-white p-4 rounded-lg shadow transition transform hover:scale-105">
                    <i class="fas fa-link text-yellow-500 text-3xl mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Up to 02 no-follow links allowed</h3>
                        <p class="text-gray-600">Your blog post must include up to two no-follow links. This is to
                            maintain the integrity of the content.</p>
                    </div>
                </div>

                <!-- Guideline 4 -->
                <div class="flex items-start bg-white p-4 rounded-lg shadow transition transform hover:scale-105">
                    <i class="fas fa-user-check text-red-500 text-3xl mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Author Bio</h3>
                        <p class="text-gray-600">Include a short bio with a link to your website or social profile.</p>
                    </div>
                </div>
                <div class="flex items-start bg-white p-4 rounded-lg shadow transition transform hover:scale-105">
                    <i class="fa-solid fa-paperclip  text-red-500 text-3xl mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Link to our post</h3>
                        <p class="text-gray-600">Make sure to include at least ONE link to a relevant blog on my
                            website.</p>
                    </div>
                </div>
                <div class="flex items-start bg-white p-4 rounded-lg shadow transition transform hover:scale-105">
                    <i class="fas fa-external-link-alt text-yellow-500 text-3xl mr-4"></i>
                    {{-- <i class="fas fa-user-check text-red-500 text-3xl mr-4"></i> --}}
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Externel Link</h3>
                        <p class="text-gray-600">You can only add 5 external links in your post.</p>
                    </div>
                </div>
            </div>
            

            <!-- Submission Instructions -->
            <div class="mt-8">
                <h3 class="text-2xl font-bold text-indigo-600 mb-4">How to Submit ?</h3>
                <p class="text-gray-700">Fill out the form below to submit your content for consideration. 
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8 w-full my-10">
                <form>
                    <!-- Name -->
                    <div class="mb-4">
                        <div class="flex items-center border border-gray-300 rounded-md shadow-sm">
                            <i class="fas fa-user text-gray-400 p-2"></i>
                            <input type="text" id="name" name="name" required class="form-input p-2 w-full focus:ring-yellow-400 focus:border-yellow-400" placeholder="Your full Name">
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="mb-4">
                        <div class="flex items-center border border-gray-300 rounded-md shadow-sm">
                            <i class="fas fa-envelope text-gray-400 p-2"></i>
                            <input type="email" id="email" name="email" required class="form-input p-2 w-full focus:ring-yellow-400 focus:border-yellow-400" placeholder="Your Email">
                        </div>
                    </div>
        
                    <div class="mb-4">
                        <div class="flex items-center border border-gray-300 rounded-md shadow-sm">
                            <i class="fas fa-link text-gray-400 p-2"></i>
                            <input type="url" id="website" name="website" class="form-input p-2 w-full focus:ring-yellow-400 focus:border-yellow-400" placeholder="Your Twitter profile " required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center border border-gray-300 rounded-md shadow-sm">
                            <i class="fas fa-link text-gray-400 p-2"></i>
                            <input type="url" id="website" name="website" class="form-input p-2 w-full focus:ring-yellow-400 focus:border-yellow-400" placeholder="Your Website " required>
                        </div>
                    </div>
        
                    <!-- Example Blog Post URL -->
                    <div class="mb-4">
                        <div class="flex items-center border border-gray-300 rounded-md shadow-sm">
                            <i class="fas fa-file-alt text-gray-400 p-2"></i>
                            <input type="url" id="example-url" name="example-url" required class="form-input p-2 w-full focus:ring-yellow-400 focus:border-yellow-400" placeholder="URL of your blog post">
                        </div>
                    </div>
        
                    <!-- Bio -->
                    <div class="mb-4">
                        <textarea id="bio" name="bio" required class="form-input p-2 w-full h-24 border border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" placeholder="Tell us about yourself"></textarea>
                    </div>
        
                    <!-- Choose Categories -->
                    <div class="mb-4">
                        <select id="categories" name="categories" required class="form-input p-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400">
                            <option value="" disabled selected>Select a category</option>
                            <option value="technology">Technology</option>
                            <option value="lifestyle">Lifestyle</option>
                            <option value="business">Business</option>
                            <option value="travel">Travel</option>
                            <option value="Food">Food</option>
                            <option value="Islamic">Islamic</option>
                            <option value="Sport">Sport</option>
                            <option value="Movie">Movie</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Personal_Development">Personal Development</option>
                        </select>
                    </div>
        
                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-yellow-600 transition duration-300">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>




    {{-- footer section --}}


    <footer class="py-4 relative top-[40em] md:top-[30em] xl:top-[40em] h-[130em] md:h-[70em] w-full ">
        <x-footer/>  
    </footer>


    <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
    <script type="module" src="{{ asset('js/custom.js') }}"></script>



</body>

</html>
