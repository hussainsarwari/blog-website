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

    <header class="header-area header-sticky h-[80px] md:h-[140px] " style="z-index: 300;">
        <div class="flex justify-between p-3 bg-blue-300 col d-none d-md-flex">
            <div class="d-flex">
                <a title="my phone number"
                    class="text-[.5em] d-flex align-items-center text-decoration-none text-light md:text-xl"
                    href="tel:+93766805049" aria-label="Call us at +93 766805049">
                    <svg class="bi bi-phone" fill="currentColor" height="20" viewBox="0 0 16 16" width="20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z">
                        </path>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                    </svg>
                    <span class="ms-1">+93 766805049</span>
                </a>
                <a title="my email address"
                    class="text-[.5em] md:text-xl mx-2 d-flex align-items-center ms-lg-4 text-decoration-none text-light"
                    href="mailto:info@gmail.com" aria-label="Email us at info@gmail.com">
                    <svg class="bi bi-envelope" fill="currentColor" height="20" viewBox="0 0 16 16" width="20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                        </path>
                    </svg>
                    <span class="ms-2">S@Solution.com</span>
                </a>
            </div>
            <div class="flex flex-row ">
                <form action="" method="post" class="flex flex-row mx-5 search" role="search">
                    <input
                        class="p-1 mx-2 text-white bg-blue-300 border-b border-blue-500 outline-none focus:outline-none focus:bg-blue-400 placeholder:text-white"
                        placeholder="Search" type="search" name="search" required id="search" aria-label="Search">
                    <button type="submit" name="search" aria-label="search">
                        <svg class="mx-2 bi bi-search" fill="#fff" height="20" viewBox="0 0 16 16" width="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                            </path>
                        </svg>
                    </button>
                </form>

                <div class="d-flex justify-content-end">
                    <a title="follow us on facebook" class="text-light" href="https://facebook.com/"
                        aria-label="Visit our Facebook page">
                        <svg class="bi bi-facebook-f" fill="#fff" height="16" viewBox="0 0 24 24"
                            width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                            </path>
                        </svg>
                    </a>
                    <a title='follow us on twitter' class="ml-2 me-2" href="#"
                        aria-label="Visit our Twitter page">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="16" width="16"
                            shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                            image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                            viewBox="0 0 512 462.799">
                            <path fill-rule="nonzero"
                                d="M403.229 0h78.506L310.219 196.04 512 462.799H354.002L230.261 301.007 88.669 462.799h-78.56l183.455-209.683L0 0h161.999l111.856 147.88L403.229 0zm-27.556 415.805h43.505L138.363 44.527h-46.68l283.99 371.278z" />
                        </svg>
                    </a>
                    <a title="follow on instgram" class="text-light ms-3" href="https://instagram.com/"
                        aria-label="Visit our Instagram page"><svg class="bi bi-instagram" fill="#fff"
                            height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg></a>

                </div>
            </div>
        </div>












        <div aria-hidden="true" class="2xl:overflow-x-hidden">
            <div class="row">

                <div class="col-12">
                    <nav aria-label="Main navigation" class="flex justify-around w-full main-nav">
                        <p class="flex title logo"><a title="home" href="{{ url('localhost:8000') }}">
                                <picture>
                                    <source srcset="{{ asset('images/logo.png') }}" media="(min-width: 1280px)">
                                    <source srcset="{{ asset('images/logo.png') }}" media="(min-width: 768px)">
                                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-[13em]">
                                </picture>


                            </a></p>
                        <ul class="nav">

                            <li class="scroll-to-section "><a title="home"
                                    href="{{ url('http://localhost:8000') }}" class="active ">Home</a></li>


                            {{-- tools --}}
                            <li class="flex justify-center">
                                <a class="scroll-to-section peer new-ite mt-0" href="#online-tools"
                                    title="Online Tools" aria-haspopup="true" aria-expanded="false"
                                    role="menuitem">Tools</a>

                                <ul class="fixed flex-col hidden top-[7.5em] p-2 w-fit bg-white shadow-lg rounded-xl peer-hover:flex hover:flex h-fit"
                                    role="menu">
                                    <!-- First Tool Item -->
                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/instagram-online-video-downloader') }}"
                                            role="menuitem" title="Instagram Online Video Downloader">Instagram Video
                                            Downloader</a>
                                    </li>

                                    <!-- Second Tool Item -->
                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/youtube-online-video-downloader') }}"
                                            role="menuitem" title="YouTube Online Video Downloader">YouTube Video
                                            Downloader</a>
                                    </li>

                                    <!-- Third Tool Item -->
                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('online-tools/short-url') }}"
                                            role="menuitem" title="Short URL Generator">Short URL Generator</a>
                                    </li>

                                    <!-- Fourth Tool Item -->
                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/Paraphrase') }}" role="menuitem"
                                            title="Paraphrase Tool">Paraphrase Tool</a>
                                    </li>

                                    <!-- Fifth Tool Item -->
                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/CV-generator') }}" role="menuitem"
                                            title="CV Generator Tool">CV Generator</a>
                                    </li>

                                    <!-- Sixth Tool Item -->
                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/Online-code-editor') }}" role="menuitem"
                                            title="Online Code Editor">Online Code Editor</a>
                                    </li>

                                    <!-- PDF Editing and Conversion Tools -->
                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/online-pdf-editor') }}" role="menuitem"
                                            title="Online PDF Editor">PDF Editor</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/online-pdf-compressor') }}" role="menuitem"
                                            title="Online PDF Compressor">PDF Compression</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/pdf-to-image') }}" role="menuitem"
                                            title="Convert PDF to Image">PDF to Image</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/html-to-pdf') }}" role="menuitem"
                                            title="Convert HTML to PDF">HTML To PDF</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/image-to-pdf') }}" role="menuitem"
                                            title="Convert Image to PDF">Image To PDF</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/online-images-compression') }}"
                                            role="menuitem" title="Online Image Compression">Image Compression</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('online-tools/extract-text-from-image') }}" role="menuitem"
                                            title="Extract Text From Image Tool">Extract Text From Image</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- blog --}}
                            <li class="flex justify-center">
                                <a class="scroll-to-section peer new-ite mt-0" href="#" title="blog"
                                    aria-haspopup="true" aria-expanded="false" role="menuitem">Blog</a>

                                <ul class="fixed flex-col hidden top-[7em] p-2 w-fit bg-white shadow-lg rounded-xl peer-hover:flex hover:flex h-fit"
                                    role="menu">

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Technology') }}"
                                            role="menuitem" title="Technology blog">Technology</a>
                                    </li>


                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/sport') }}"
                                            role="menuitem" title="Sport blog">Sport</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/lifestyle') }}"
                                            role="menuitem" title="Lifestyle blog">Lifestyle</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Information') }}"
                                            role="menuitem" title="Information blog">Information</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Islamic') }}"
                                            role="menuitem" title="Islamic blog">Islamic</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Fasion') }}"
                                            role="menuitem" title="Fashion blog">Fashion</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Movie') }}"
                                            role="menuitem" title="Movies blog">Movies</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Food') }}"
                                            role="menuitem" title="Food blod">Food</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Travel') }}"
                                            role="menuitem" title="Travel blog">Travel</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Business') }}"
                                            role="menuitem" title="Business blog">Business</a>
                                    </li>


                                </ul>
                            </li>




                            <li class="scroll-to-section"><a title="services" href="#services"
                                    class="text-slate-900">Services</a>
                            </li>

                            <li class="scroll-to-section"><a title="contact" href="#contacts">Contacts</a></li>
                            <li class="scroll-to-section"><a title="about us" href="#about-us">About Us</a></li>
                        </ul>
                        <a title='menu' aria-haspopup="true" aria-hidden="true" class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
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
            <p class="p-3 m-auto text-center text-blue-900">Our blog is designed to provide valuable insights,
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

                            <h3 class="mb-2 text-xl font-semibold text-white ">Large Blog Post Title</h3>
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

                                <h3 class="mb-2 text-xl font-semibold text-white">Large Blog Post Title</h3>
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

                                <h3 class="mb-2 text-xl font-semibold text-white">Large Blog Post Title</h3>
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


    <footer class="py-4 relative top-[100em] h-[130em] md:h-[70em] w-full ">
        <picture>
            <source srcset="{{ asset('images/banner-bg.svg') }}" media="(min-width: 1280px)">
            <source srcset="{{ asset('images/banner-bg.svg') }}" media="(min-width: 768px)">
            <img src="{{ asset('images/banner-bg.svg') }}" alt="footer-background-1"
                class="absolute bottom-[58em] lg:bottom-[15em]  left-0 w-full rotate-180 d-none d-sm-inline"
                width="300">
        </picture>
        <picture>
            <source srcset="{{ asset('images/banner-bg2.svg') }}" media="(min-width: 1280px)">
            <source srcset="{{ asset('images/banner-bg2.svg') }}" media="(min-width: 768px)">
            <img src="{{ asset('images/banner-bg2.svg') }}" alt="footer-background-2"
                class="absolute bottom-[55em] left-0 w-full d-sm-none footer-img" width="300">
        </picture>
        <div class="w-full h-[70em] absolute block bottom-[-4em] lg:hidden" id="xx"
            style="background: rgb(16 139 233);"></div>
        <div class="w-full h-[30em] absolute  bottom-[-4em] hidden lg:block" id="xx"
            style="background: rgb(16 139 233);"></div>
        <div class="absolute bottom-[-4em] left-0  w-[99%] px-5 text-white">
            <div class="py-4 row">
                <div class="mb-4 col-12 col-lg-3 mb-lg-0">
                    <picture>
                        <source aria-label="logo image for large devices" srcset="{{ asset('images/logo.png') }}"
                            media="(min-width: 1280px)">
                        <source aria-label="logo image for small devices" srcset="{{ asset('images/logo.png') }}"
                            media="(min-width: 768px)">
                        <img aria-label="logo image for as defualt" src="{{ asset('images/logo.png') }}"
                            alt="logo" class="mb-3 img-fluid" width="300">
                    </picture>


                    <address aria-label="address" class="mb-1 text-sm text-white small lg:text-md">Mazar-e-sharif,
                        Afghanistan</address>

                    <p aria-label="phone number" class="mb-1 text-sm text-white small lg:text-md">Tel:<a
                            title="phone number" href="tel:+93766805049"> +93
                            766805049</a></p>
                    <p aria-label="email address" class="mb-0 small"><a title="email address"
                            class="text-sm text-white text-decoration-none lg:text-md"
                            href="{{ url('company-email') }}">s@solution.com</a></p>
                </div>
                <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                    <h2 aria-label="blogs" class="text-sm lg:text-md">blogs</h2>
                    <hr>
                    <ul role="menu" class="list-unstyled">
                        <li role='menuitem' class="mb-0">
                            <a title='technology blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/Technology') }}">Technology</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='sport blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/sport') }}">Sport</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='lifestyle blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/lifestyle') }}">Lifestyle</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='information blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/Information') }}">Information</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='islamic blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/Islamic') }}">Islamic</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='fashion blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/Fashion') }}">fashion</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='movies blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/Movie') }}">Movies</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='food blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/Food') }}">Food</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='travel blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/Travel') }}">Travel</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='business blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/Business') }}">Business</a>
                        </li>



                    </ul>
                </div>
                <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                    <h2 aria-label="online tools" class="text-sm lg:text-md">Tools</h2>
                    <hr>
                    <ul role="menu" class="list-unstyled">
                        <li role='menuitem' class="mb-0">

                            <a title='instagram downloader' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/instagram-online-video-downloader') }}">Instagram video
                                downloader</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='youtube downloader' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/youtube-online-video-downloader') }}">youtube video
                                downloader</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='short url generator' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/short-url') }}">Short URL</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='paraphrasor' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/Paraphrase') }}">Paraphrase</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='cv generator' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/CV-generator') }}">CV generator</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='online coding tool' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/Online-code-editor') }}">Online coding</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='pdf editor' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/online-pdf-editor') }}">PDF Editor</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='pdf compression' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/online-pdf-compressor') }}">PDF Compression</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='pdf merging' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/online-pdf-merging') }}">PDF merging</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='pdf splitting' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/online-pdf-splitting') }}">PDF Splitting</a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='pdf to image' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/pdf-to-image') }}">PDF to Image </a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='hmtl to pdf' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/html-to-pdf') }}">HTML To PDF </a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='image to pdf' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/image-to-pdf') }}">Image To PDF </a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='iamge convertor' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/online-Image-converter') }}">Image converter </a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='image compression' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/online-images-compression') }}">images Compression </a>
                        </li>
                        <li role='menuitem' class="mb-0">
                            <a title='extract text from image'
                                class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-tools/extract-text-from-image') }}">Extract Text From Image</a>
                        </li>

                    </ul>
                </div>
                <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                    <h2 class="text-sm lg:text-md">Quick Links</h2>
                    <hr>
                    <ul aria-label="queic links" role='menu' class="list-unstyled">
                        <li role='menuitem' class="mb-1">
                            <a title='aboute us' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('https://localhost:8000/#about-us') }}">About us</a>
                        </li>
                        <li role="menuitem" class="mb-1">
                            <a title='contact us' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('https://localhost:8000/#contacts') }}">Contacts</a>
                        </li>
                        <li role="menuitem" class="mb-1">
                            <a title='quest post' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('Guest-post') }}">Guest post</a>
                        </li>
                        <li role="menuitem" class="mb-1">
                            <a title='our privacy policy' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('privacy-policy') }}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="pt-4 border-top d-lg-none"></div>
                    <h2 class="text-sm lg:text-md">Subscribe</h2>
                    <div class="mb-2 input-group">
                        <form action="" aria-label="subscribe form">
                            @csrf
                            <input class="text-sm form-cont3ol bg-light lg:text-md" required name="email"
                                aria-label="email address" placeholder="Email " type="email">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </form>
                    </div>
                    <p class="mb-0 text-sm text-white small lg:text-md">Sign up for our newsletter to get the latest
                        updates on features and releases.</p>
                    <p class="mb-0 text-sm text-white small lg:text-md">Created by: <a title="know more about me"
                            href="http://">Mohammad Hussain
                            "Sarvari"</a></p>
                </div>
            </div>
            <div class="py-3 d-lg-flex align-item-ceneter justify-content-between border-top py-lg-2 mt-lg-5">
                <div class="mb-2 text-sm text-white small mb-lg-0 lg:text-md">
                    © Copyright 2024 Mohammad hussain "sarvari".
                    <p class="text-sm text-white lg:text-md">thank <a title="icons8 website"
                            href="https://icons8.com/illustrations" class="text-white">icons8</a>'s designer for there
                        beautifull Illustrations.</p>

                    <a title="privacy policy"
                        class="mb-2 text-sm text-white lg:text-md d-block d-lg-inline ms-lg-3 mb-lg-0"
                        href="">Privacy Policy</a>
                    <a title="term of services"
                        class="mb-2 text-sm text-white lg:text-md d-block d-lg-inline ms-lg-3 mb-lg-0"
                        href="">Terms of Service</a>
                </div>

                <div class="flex">
                    {{-- instagram --}}
                    <a  class="ml-2 me-2" title="follow us on instagram"
                        aria-label="follow us on instagram" href="">
                        <svg class="bi bi-instagram" fill="#fff" height="16" viewbox="0 0 16 16"
                            width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg>
                    </a>
                    {{-- x --}}
                    <a title="follow us on twitter" aria-label="follow us on twitter" class="ml-2 me-2"
                        href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="16" width="16"
                            shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                            image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                            viewBox="0 0 512 462.799">
                            <path fill-rule="nonzero"
                                d="M403.229 0h78.506L310.219 196.04 512 462.799H354.002L230.261 301.007 88.669 462.799h-78.56l183.455-209.683L0 0h161.999l111.856 147.88L403.229 0zm-27.556 415.805h43.505L138.363 44.527h-46.68l283.99 371.278z" />
                        </svg>
                    </a>
                    {{-- facebook --}}
                    <a class="ml-2 me-2" title="follow us on facebook" aria-label="follow us on facebook"
                        href="">
                        <svg class="bi bi-facebook text-primary" fill="#fff" height="16" viewbox="0 0 16 16"
                            width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                            </path>
                        </svg></a>
                </div>
            </div>
        </div>
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
