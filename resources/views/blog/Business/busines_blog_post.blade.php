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





    @vite(['resources/css/app.css'])
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
    @vite(['resources/css/templatemo-art-factory.css'])
    @vite(['resources/css/style.css'])
    @vite(['resources/css/animations.css'])



    <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="module" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script type="module" src="{{ asset('js/popper.js') }}"></script>
    <script type="module" src="{{ asset('js/imgfix.min.js') }}"></script>
    <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
    <script type="module" src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script type="module" src="{{ asset('js/waypoints.min.js') }}"></script>
    <script type="module" src="{{ asset('js/custom.js') }}"></script>

    <style>
        .table_of_content::before {
            content: '';
            width: 10em;
            display: block;
            height: 2px;
            background: #FFC107;
            margin: auto;
            border-radius: 100px;
            top: 45px;
            position: relative;
        }
    </style>
</head>

<body class="overflow-x-hidden">



    <div id="preloader">
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

    <header class="header-area header-sticky h-[80px] md:h-[140px]">
        <div class="flex justify-between p-3 bg-blue-300 col d-none d-md-flex">
            <div class="d-flex">
                <a class="text-[.5em] d-flex align-items-center text-decoration-none text-light md:text-xl"
                    href="tel:+93766805049"><svg class="bi bi-phone" fill="currentColor" height="20"
                        viewbox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z">
                        </path>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                    </svg> <span class="ms-1">+93 766805049 </span></a>
                <a class="text-[.5em] md:text-xl mx-2 d-flex align-items-center ms-lg-4 text-decoration-none text-light"
                    href="mailto:info@gmail.com"><svg class="bi bi-envelope" fill="currentColor" height="20"
                        viewbox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                        </path>
                    </svg>
                    <span class="ms-2">S@Solution.com</span></a>
            </div>
            <div class="flex flex-row ">
                <form action="" method="post" class="flex flex-row mx-5 search">

                    <input
                        class="p-1 mx-2 text-white bg-blue-300 border-b border-blue-500 outline-none focus:outline-none focus:bg-blue-400 placeholder:text-white"
                        placeholder="Search" type="search" name="search" required id="search">
                    <button type="submit" name="search">
                        <svg class="mx-2 bi bi-search" fill="#fff" height="20" viewbox="0 0 16 16" width="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                            </path>
                        </svg>
                    </button>
                </form>



                <div class="d-flex justify-content-end">
                    {{-- facebook --}}
                    <a class="text-light" href="{{ url('https://facebook.com/') }}"><svg class="bi bi-facebook-f"
                            fill="#fff" height="16" viewbox="0 0 24 24" width="16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                            </path>
                        </svg></a>
                    {{-- twitter --}}
                    <a class="ml-2 me-2" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="16" width="16"
                            shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                            image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                            viewBox="0 0 512 462.799">
                            <path fill-rule="nonzero"
                                d="M403.229 0h78.506L310.219 196.04 512 462.799H354.002L230.261 301.007 88.669 462.799h-78.56l183.455-209.683L0 0h161.999l111.856 147.88L403.229 0zm-27.556 415.805h43.505L138.363 44.527h-46.68l283.99 371.278z" />
                        </svg>
                    </a>
                    {{-- instagram --}}
                    <a class="text-light ms-3" href="{{ url('https://instagram.com/') }}"><svg
                            class="bi bi-instagram" fill="#fff" height="16" viewbox="0 0 16 16"
                            width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="2xl:overflow-x-hidden">
            <div class="row">

                <div class="col-12">
                    <nav class="flex justify-around w-full main-nav">
                        <p class="flex title logo"><a href="{{ url('localhost:8000') }}">
                                <picture>
                                    <source srcset="{{ asset('images/logo.png') }}" media="(min-width: 1280px)">
                                    <source srcset="{{ asset('images/logo.png') }}" media="(min-width: 768px)">
                                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-[13em]">
                                </picture>


                            </a></p>
                        <ul class="nav">

                            <li class="scroll-to-section "><a href="{{ url('http://localhost:8000') }}"
                                    class="active ">Home</a></li>


                            <div class="">

                                <li class="scroll-to-section peer new-ite" id="blog">Tools</li>

                                <div
                                    class="fixed flex-col hidden p-4 mt-0 bg-white shadow-lg download rounded-xl peer-hover:flex hover:flex h-fit">

                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('instagram-online-video-downloader') }}">Instagram video
                                        downloader</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('youtube-online-video-downloader') }}">youtube video
                                        downloader</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('short-url') }}">Short URL</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('Paraphrase') }}">Paraphrase</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('CV-generator') }}">CV generator</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('Online-code-editor') }}">Online coding</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-pdf-editor') }}">PDF Editor</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-pdf-compressor') }}">PDF Compression</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-pdf-merging') }}">PDF merging</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-pdf-splitting') }}">PDF Splitting</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('pdf-to-image') }}">PDF to Image </a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('pdf-to-image') }}">PDF to Image </a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('html-to-pdf') }}">HTML To PDF </a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('image-to-pdf') }}">Image To PDF </a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-Image-converter') }}">Image converter </a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-images-compression') }}">images Compression </a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('extract-text-from-image') }}">Extract Text From Image</a>



                                </div>

                            </div>

                            <div class="">
                                <li class="scroll-to-section peer new-ite" id="blog">Blog</li>
                                <!-- Dropdown menu -->
                                <div
                                    class="fixed flex-col hidden p-4 mt-0 bg-white shadow-lg blog rounded-xl peer-hover:flex hover:flex h-fit">
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/Technology') }}">Technology</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/sport') }}">Sport</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/lifestyle') }}">Lifestyle</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/information') }}">Information</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/islamic') }}">Islamic</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/fashion') }}">fashion</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/movie') }}">Movies</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/food') }}">Food</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/travel') }}">Travel</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/business') }}">Business</a>
                                </div>
                            </div>
                            <li class="scroll-to-section"><a href="#services" class="text-slate-900">Services</a>
                            </li>

                            <li class="scroll-to-section"><a href="#contacts">Contacts</a></li>
                            <li class="scroll-to-section"><a href="#about-us">About Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>



    {{-- main section --}}


    {{-- btn download blog as pdf --}}
    <div class="fixed bottom-20 right-4 z-50">
        <button
            class="bg-blue-500 text-white px-4 py-3 rounded-full shadow-lg flex items-center space-x-2 transform transition-transform duration-300 hover:scale-105 hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300"
            aria-label="Download blog as PDF" id="downloadBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-download">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                <polyline points="7 10 12 15 17 10" />
                <line x1="12" y1="15" x2="12" y2="3" />
            </svg>
            <span class="hidden sm:inline">Download as PDF</span>
        </button>
    </div>

    <!-- Modal Overlay -->
    <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-[500] ">
        <!-- Modal Content -->
        <div
            class="bg-white w-full max-w-md z-[310] m-auto rounded-lg p-6 text-center shadow-lg transform scale-95  transition-transform duration-300 ease-in-out">
            <button id="closeModal" class="text-gray-500 hover:text-gray-700 absolute top-4 right-4 text-2xl">
                &times;
            </button>
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Download as PDF</h2>
            <p class="text-gray-600 mb-6">Please enter your email to start the download.</p>
            <form id="emailForm">
                <input type="email" placeholder="Your Email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"
                    required />
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg w-full hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 transition-transform transform hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 mr-2" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <polyline points="7 10 12 15 17 10" />
                        <line x1="12" y1="15" x2="12" y2="3" />
                    </svg>
                    Download PDF
                </button>
            </form>
        </div>
    </div>


    {{-- advertise --}}
    <div class="w-[80%] m-auto ad bg-black  h-[20em] relative top-[10em]">

    </div>
    <div class="w-[80%] m-auto p-0 rounded-xl shadow-2xl  relative top-[15em] h-[600em]">
        {{-- body --}}
        <div class="flex h-[400em]  text-blue-500">
            {{-- left side --}}
            <div class="bg-slate-800 h-full p-2 hidden lg:inline w-[30%]  rounded-ss-2xl">
                {{-- table of content --}}
                <div class=" ">
                    <span class="w-full block text-center text-2xl p-5 font-semibold table_of_content">Table Of
                        Content</span>
                    <div class="body_of_table">
                        <ul class="text-center list-decimal list-inside space-y-2 text-lg">
                            <li class=""><a href="#"
                                    class="relative pl-4 before:content-['•'] before:absolute before:-left-1 before:text-blue-500 before:text-[2em]">how
                                    to learn programming fast?</a></li>
                            <li class=""><a href="#"
                                    class="relative pl-4 before:content-['•'] before:absolute before:-left-1 before:text-blue-500 before:text-[2em]">how
                                    to learn programming fast?</a></li>
                            <li class=""><a href="#"
                                    class="relative pl-4 before:content-['•'] before:absolute before:-left-1 before:text-blue-500 before:text-[2em]">how
                                    to learn programming fast?</a></li>
                            <li class=""><a href="#"
                                    class="relative pl-4 before:content-['•'] before:absolute before:-left-1 before:text-blue-500 before:text-[2em]">how
                                    to learn programming fast?</a></li>
                            <li class=""><a href="#"
                                    class="relative pl-4 before:content-['•'] before:absolute before:-left-1 before:text-blue-500 before:text-[2em]">how
                                    to learn programming fast?</a></li>
                            <li class=""><a href="#"
                                    class="relative pl-4 before:content-['•'] before:absolute before:-left-1 before:text-blue-500 before:text-[2em]">how
                                    to learn programming fast?</a></li>
                            <li class=""><a href="#"
                                    class="relative pl-4 before:content-['•'] before:absolute before:-left-1 before:text-blue-500 before:text-[2em]">how
                                    to learn programming fast?</a></li>

                        </ul>

                    </div>
                    <hr class="bg-yellow-400 w-[80%] my-[3em] mx-auto">
                </div>


                {{-- top blog post --}}
                <div class=" ">
                    <span class="w-full block text-center text-2xl p-5 font-semibold table_of_content">Top Business's
                        blog post</span>
                    <div class="body_of_table">
                        <ol class="flex justify-center flex-col list-decimal list-inside space-y-2 text-lg text-gray-700 w-[100%] p-5"
                            style="list-style-type: decimal;">
                            <li class="w-[100%] text-start m-auto"><a href="#"
                                    class="relative pl-4 before:content-['•'] before:absolute before:-left-1 before:text-blue-500 before:text-[2em] break-words">how
                                    to learn kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkprogramming fast?
                                    <hr class="bg-slate-700">
                                </a></li>

                        </ol>

                    </div>
                    <hr class="bg-yellow-400 w-[80%] my-[3em] mx-auto">
                </div>

                {{-- ads --}}
                <div class="bg-white w-[90%] m-auto h-[60em]">
                    <p>show ads here</p>
                </div>

            </div>
            {{-- right side --}}
            <div class=" p-4 bg-slate-900 rounded-t-xl lg:rounded-ss-none lg:rounded-se-xl w-[100%] lg:w-[70%]">
                {{-- breadcrumb --}}
                <nav class="p-2" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-4">
                        <li>
                            <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-800">Home</a>
                        </li>
                        <li>
                            <svg class="h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </li>
                        <li>
                            <a href="{{ url('/blog/business') }}" class="text-blue-600 hover:text-blue-800">Business
                                Blog</a>
                        </li>
                        <li>
                            <svg class="h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </li>
                        <li>
                            <a href="{{ url('/blog/business/title') }}t"
                                class="text-blue-600 hover:text-blue-800">Post Title</a>
                        </li>
                    </ol>
                </nav>
                <hr class="bg-slate-600 f-[80%] m-auto my-1">
                {{-- blog  image --}}
                <div class="blog_img w-full h-[40em] mb-[5em] ">
                    <figure>
                        <picture>
                            <source srcset="{{ url('images/2.jpg') }}" media="(min-width: 1280px)">
                            <source srcset="{{ url('images/2.jpg') }}" media="(min-width: 768px)">
                            <img src="{{ url('images/2.jpg') }}" alt="logo"
                                class="object-cover w-full h-full rounded-md">
                        </picture>


                        <figcaption class="w-full text-slate-600 text-center my-3">
                            Image by from Example.com
                        </figcaption>
                    </figure>
                </div>


                <section class="article_information text-sm text-slate-600 flex items-center justify-between  ">
                    <div class="text-slate-600">

                        <p style="color:#475569;"> created by <span><a href="#" class="text-yellow-700">
                                    Mohammad hussain </a></span>
                            at: <span>04-12-2023</span> </p>
                        <p style="color:#475569;">Updated at: <span>05-02-2024</span>
                        </p>
                       



                    </div>
                    <div class=" w-[20em] text-end">
                        <p style="color:#475569;"> Downloaded : <span>201</span></p>
                        <p style="color:#475569;"> Read by : <span class="mx-1">200</span> People </p>
                        <p class=" text-yellow-700  flex justify-end ">241
                            <svg width="20" height="20" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                    fill="none" stroke="yellow" stroke-width="1" />
                            </svg>
                        </p>
                    </div>


                </section>
                <hr class="bg-slate-600">
                <main class="h-[310em] overflow-y-auto">
                    {{-- title of blog --}}
                    <h1 class="title_of_blog break-words p-2 w-full">it is
                        jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggtitle
                        of blog post</h1>
                    {{-- introduction --}}
                    <p class="introduction">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe doloremque enim ad dolorum?
                        Beatae officia, culpa quia iste natus, cum accusantium eum explicabo vero ad numquam delectus
                        perferendis deleniti assumenda!
                    </p>
                    {{-- table of content for mobile --}}
                    <div class="block lg:hidden ">
                        <span class="w-full block text-center text-2xl p-5 font-semibold table_of_content">Table Of
                            Content</span>
                        <div class="body_of_table">
                            <ul class="text-center list-decimal list-inside space-y-2 text-lg">
                                <li class=""><a href="#"
                                        class="relative pl-4 before:content-['•'] before:absolute before:-left-1 before:text-blue-500 before:text-[2em]">how
                                        to learn programming fast?</a></li>


                            </ul>

                        </div>
                        <hr class="bg-yellow-400 w-[80%] my-[3em] mx-auto">
                    </div>
                    {{-- body of content --}}
                    <div class="content h-[300em]">

                    </div>
                    <hr class="bg-slate-500">
                    {{-- ads --}}
                    <div class="bg-white h-[20em] ">
                        ads
                    </div>

                    {{-- FAG --}}
                    <div class="fag">
                        <div class="container rounded-lg">
                            <!-- ***** Section Title Start ***** -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-heading">
                                        <h2 class="text-white my-3">Frequently Asked Questions</h2>
                                    </div>
                                </div>

                            </div>
                            <!-- ***** Section Title End ***** -->

                            <div class="row">


                                <div class="col-12 ">
                                    <div class="accordions is-first-expanded ">
                                        <article class="accordion">
                                            <div class="accordion-head">
                                                <span class="text-blue-500">What are your services?</span>

                                            </div>
                                            <div class="accordion-body">
                                                <div class="content">
                                                    <p class="text-blue-400">
                                                        1. <strong>
                                                            Website & Development Services:
                                                        </strong>

                                                        Custom website design and development tailored to your brand and
                                                        business goals.
                                                        Responsive, user-friendly interfaces that work seamlessly across
                                                        devices.
                                                        E-commerce solutions, portfolio sites, and more. <br>
                                                        2.
                                                        <strong>
                                                            SEO Optimization:
                                                        </strong>

                                                        Boost your online visibility with effective search engine
                                                        optimization.
                                                        Keyword research, on-page optimization, and link building
                                                        strategies.
                                                        Improve your website’s ranking on search engine results pages
                                                        (SERPs). <br>
                                                        3. <strong>
                                                            Mobile App Development:
                                                        </strong>

                                                        Native and cross-platform app development for iOS and Android.
                                                        User-centric design, smooth performance, and intuitive
                                                        interfaces.
                                                        From concept to deployment, we’ve got you covered. <br>
                                                        4.
                                                        <strong>
                                                            Content Creation for Blog:
                                                        </strong>

                                                        Engaging blog posts that resonate with your target audience.
                                                        Well-researched articles on technology, lifestyle, travel, and
                                                        more.
                                                        Shareable content that drives traffic and builds your brand.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="accordion">
                                            <div class="text-blue-500 accordion-head">
                                                <span>What kind of content can I find on S_solutions?</span>

                                            </div>
                                            <div class="accordion-body">
                                                <div class="content">
                                                    <p class="text-blue-400">
                                                        S_solutions is a hub for diverse content! You’ll find technology
                                                        articles, fashion tips, sports updates, food recipes, travel
                                                        guides, lifestyle advice, and more. Whether you’re interested in
                                                        the latest tech trends or planning your next adventure, we’ve
                                                        got you covered.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- tags --}}
                    <section aria-label="Tags related to this blog post"
                        class="tags bg-slate-800 m-3 p-3 rounded-md shadow-md text-slate-500">

                        <h3 class="text-xl font-semibold text-slate-600 mb-4">Tags:</h3>
                        <ul class="flex flex-wrap gap-3">
                            <li>
                                <a href="{{ url('/blog/business/tag/tag_url') }}"
                                    class="inline-block bg-blue-700 text-slate-100 px-4 py-2 rounded-full text-sm font-semibold transition-transform duration-200 hover:scale-105 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                                    Business Strategy
                                </a>
                            </li>

                        </ul>


                    </section>
                </main>
                {{-- like and share section --}}
                <div class="share_like  rounded-b-xl  bg-slate-700 p-3 h-[4em] flex justify-end items-center">
                    <button class="share active:bg-slate-900 focus:outline-none bg-slate-600 p-2 rounded-md hover:bg-slate-500 mx-1">

                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                            <g fill="#fcc419" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M18,2c-1.64501,0 -3,1.35499 -3,3c0,0.19095 0.02179,0.37712 0.05664,0.55859l-7.13477,4.16211c-0.52334,-0.44285 -1.1898,-0.7207 -1.92187,-0.7207c-1.64501,0 -3,1.35499 -3,3c0,1.64501 1.35499,3 3,3c0.73208,0 1.39854,-0.27785 1.92188,-0.7207l7.13477,4.16016c-0.03509,0.18206 -0.05664,0.36893 -0.05664,0.56055c0,1.64501 1.35499,3 3,3c1.64501,0 3,-1.35499 3,-3c0,-1.64501 -1.35499,-3 -3,-3c-0.73252,0 -1.39841,0.27933 -1.92187,0.72266l-7.13477,-4.16406c0.03485,-0.18147 0.05664,-0.36764 0.05664,-0.55859c0,-0.19095 -0.02179,-0.37712 -0.05664,-0.55859l7.13477,-4.16211c0.52333,0.44285 1.1898,0.7207 1.92188,0.7207c1.64501,0 3,-1.35499 3,-3c0,-1.64501 -1.35499,-3 -3,-3zM18,4c0.56413,0 1,0.43587 1,1c0,0.56413 -0.43587,1 -1,1c-0.56413,0 -1,-0.43587 -1,-1c0,-0.56413 0.43587,-1 1,-1zM6,11c0.56413,0 1,0.43587 1,1c0,0.56413 -0.43587,1 -1,1c-0.56413,0 -1,-0.43587 -1,-1c0,-0.56413 0.43587,-1 1,-1zM18,18c0.56413,0 1,0.43587 1,1c0,0.56413 -0.43587,1 -1,1c-0.56413,0 -1,-0.43587 -1,-1c0,-0.56413 0.43587,-1 1,-1z"></path></g></g>
                        </svg>
                    </button>
                   
                    <button class="like active:bg-slate-900 focus:outline-none bg-slate-600 p-2 rounded-md hover:bg-slate-500 mx-1">
                        <svg width="30" height="30" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                    fill="none" stroke="#fcc419" stroke-width="2" />
                            </svg>
                    </button>
                </div>
                {{-- add comment --}}
                <div class="add_comment bg-slate-800 p3 h-[23em] my-5 rounded-md">
                    
                        <h3 class="text-2xl font-semibold py-4  text-center">
                           
                            Comment and see them in Morse Code!
                        </h2>
                        <form class="space-y-4 flex flex-col  p-3" action="/submit-comment" method="POST" >
                            @csrf <!-- Add CSRF token for security -->
                          
                               <input type="email" id="email" name="email" required class="m-2 p-2 mx-auto w-full bg-slate-700 outline-none border-none rounded-md focus:ring-none focus:border-blue-500 transition duration-200" placeholder="Enter your email">
                          
                                <textarea id="comment" name="comment" required rows="4" class="mt-1 p-2  outline-none resize-none bg-slate-700 rounded-md w-full focus:ring-nonr focus:border-blue-500 transition duration-200" placeholder="Write your comment..."></textarea>
                          
                            <button type="submit" class="flex items-center active:bg-slate-900 focus:outline-none justify-center px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 transition duration-200">
                                <svg class="w-4 h-4 mr-2 animate-bounce" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 15l-5-5h10l-5 5z" />
                                </svg>
                                Submit
                            </button>
                        </form>
                    
                    
                </div>
            </div>
        </div>
        {{-- footer of blog --}}
        <div class="">

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
                        <source srcset="{{ asset('images/logo.png') }}" media="(min-width: 1280px)">
                        <source srcset="{{ asset('images/logo.png') }}" media="(min-width: 768px)">
                        <img src="{{ asset('images/logo.png') }}" alt="logo" class="mb-3 img-fluid"
                            width="300">
                    </picture>


                    <p class="mb-1 text-sm text-white small lg:text-md">Mazar-e-sharif, Afghanistan</p>

                    <p class="mb-1 text-sm text-white small lg:text-md">Tel:<a href="tel:+93766805049"> +93
                            766805049</a></p>
                    <p class="mb-0 small"><a class="text-sm text-white text-decoration-none lg:text-md"
                            href="{{ url('company-email') }}">s@solution.com</a></p>
                </div>
                <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                    <h4 class="text-sm lg:text-md">blogs</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('Technology') }}">Technology</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('sport') }}">Sport</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('lifestyle') }}">Lifestyle</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('information') }}">Information</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('islamic') }}">Islamic</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('fashion') }}">fashion</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('movie') }}">Movies</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('food') }}">Food</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('travel') }}">Travel</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('business') }}">Business</a>
                        </li>





                    </ul>
                </div>
                <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                    <h4 class="text-sm lg:text-md">Tools</h4>
                    <hr>
                    <ul class="list-unstyled">

                        <li class="mb-0">



                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('instagram-online-video-downloader') }}">Instagram video downloader</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('youtube-online-video-downloader') }}">youtube video downloader</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('') }}">Short URL</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('Paraphrase') }}">Paraphrase</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('CV-generator') }}">CV generator</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('Online-code-editor') }}">Online coding</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-pdf-editor') }}">PDF Editor</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-pdf-compressor') }}">PDF Compression</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-pdf-merging') }}">PDF merging</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-pdf-splitting') }}">PDF Splitting</a>
                        </li>

                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('pdf-to-image') }}">PDF to Image </a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('html-to-pdf') }}">HTML To PDF </a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('image-to-pdf') }}">Image To PDF </a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-Image-converter') }}">Image converter </a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-images-compression') }}">images Compression </a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-video-compression') }}">video Compression </a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('extract-text-from-image') }}">Extract Text From Image</a>
                        </li>
                    </ul>
                </div>
                <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                    <h4 class="text-sm lg:text-md">Quick Links</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="mb-1">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('https://localhost:8000/#about-us') }}">About us</a>
                        </li>
                        <li class="mb-1">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('https://localhost:8000/#contacts') }}">Contacts</a>
                        </li>
                        <li class="mb-1">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('Guest-post') }}">Guest post</a>
                        </li>
                        <li class="mb-1">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('privacy-policy') }}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="pt-4 border-top d-lg-none"></div>
                    <h4 class="text-sm lg:text-md">Subscribe</h4>
                    <div class="mb-2 input-group">
                        <input class="text-sm form-cont3ol bg-light lg:text-md"
                            placeholder="Email graydres focus:bg-blue-100  s" type="text"> <button
                            class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                    <p class="mb-0 text-sm text-white small lg:text-md">Sign up for our newsletter to get the latest
                        updates on features and releases.</p>
                    <p class="mb-0 text-sm text-white small lg:text-md">Created by: <a href="http://">Mohammad Hussain
                            "Sarvari"</a></p>
                </div>
            </div>
            <div class="py-3 d-lg-flex align-item-ceneter justify-content-between border-top py-lg-2 mt-lg-5">
                <div class="mb-2 text-sm text-white small mb-lg-0 lg:text-md">
                    © Copyright 2024 Mohammad hussain "sarvari".
                    <p class="text-sm text-white lg:text-md">thank <a href="https://icons8.com/illustrations"
                            class="text-white">icons8</a>'s designer for there beautifull Illustrations.</p>

                    <a class="mb-2 text-sm text-white lg:text-md d-block d-lg-inline ms-lg-3 mb-lg-0"
                        href="">Privacy Policy</a>
                    <a class="mb-2 text-sm text-white lg:text-md d-block d-lg-inline ms-lg-3 mb-lg-0"
                        href="">Terms of Service</a>
                </div>

                <div class="flex">
                    {{-- instagram --}}
                    <a class="ml-2 me-2" href="">
                        <svg class="bi bi-instagram" fill="#fff" height="16" viewbox="0 0 16 16"
                            width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg>
                    </a>
                    {{-- x --}}
                    <a class="ml-2 me-2" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="16" width="16"
                            shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                            image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                            viewBox="0 0 512 462.799">
                            <path fill-rule="nonzero"
                                d="M403.229 0h78.506L310.219 196.04 512 462.799H354.002L230.261 301.007 88.669 462.799h-78.56l183.455-209.683L0 0h161.999l111.856 147.88L403.229 0zm-27.556 415.805h43.505L138.363 44.527h-46.68l283.99 371.278z" />
                        </svg>
                    </a>
                    {{-- facebook --}}
                    <a class="ml-2 me-2" href="">
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
        const downloadBtn = document.getElementById('downloadBtn');
        const modalOverlay = document.getElementById('modalOverlay');
        const closeModal = document.getElementById('closeModal');

        downloadBtn.addEventListener('click', () => {
            modalOverlay.classList.remove('hidden');
            modalOverlay.querySelector('.scale-95').classList.add('scale-100');
        });

        closeModal.addEventListener('click', () => {
            modalOverlay.classList.add('hidden');
            modalOverlay.querySelector('.scale-100').classList.remove('scale-100');
        });

        // Close modal if clicked outside the form
        window.addEventListener('click', (e) => {
            if (e.target === modalOverlay) {
                modalOverlay.classList.add('hidden');
                modalOverlay.querySelector('.scale-100').classList.remove('scale-100');
            }
        });
    </script>

</body>

</html>
