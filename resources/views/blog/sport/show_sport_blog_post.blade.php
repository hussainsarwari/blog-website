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
    {{-- css --}}
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

    <header class="header-area header-sticky h-[80px] md:h-[140px]">
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












        <div class="2xl:overflow-x-hidden">
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
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Personal-Development') }}"
                                            role="menuitem" title="Personal Development blog">Personal Development</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Islamic') }}"
                                            role="menuitem" title="Islamic blog">Islamic</a>
                                    </li>

                                    <li class="hover:bg-blue-100">
                                        <a class="px-1 w-full text-center" href="{{ url('blog/Fashion') }}"
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
            class="bg-white w-[50%] relative top-[10em]  z-[310] m-auto rounded-lg  text-center shadow-lg transform scale-95  transition-transform duration-300 ease-in-out">
           <p class="text-md text-white font-semibold text-center p-4 bg-blue-400" style="font-size: 24px;">Download will start after <span class="seconde"></span>  secondes</p>
            <div aria-label="show advertice" class="w-[100%] h-[20em] bg-white " class>
  show advertice
            </div>
            
        </div>
    </div>



    {{-- advertise --}}
    <div class="w-[80%] m-auto ad bg-white  h-[20em] relative top-[10em] z-[1]" aria-label="show advertise">
        ads
    </div>
    <div aria-label="a circle shep for background image"
        class="w-[55em] h-[55em] lg:w-[80em] lg:h-[80em] bg-blue-500 shadow-2xl shadow-blue-600 absolute top-[-18em] right-[-3em] md:right-[3em] rounded-full ">
    </div>





    <div aria-label="main part of website"
        class="w-[80%] m-auto p-0 rounded-xl bg-slate-50 shadow-2xl    relative top-[15em] h-[600em]">
        {{-- body --}}
        <div class="flex h-[400em]  text-blue-500">
            {{-- left side --}}
            <div aria-label="left side bar" class="bg-slate-100 h-full p-2 hidden lg:inline w-[30%]  rounded-ss-2xl">
                {{-- table of content --}}
                <div class=" ">
                    <h2 aria-label="table of content for large screen"
                        class="w-full block text-center text-sm xl:text-2xl p-5 font-semibold table_of_content">Table
                        Of
                        Content</h2>
                    <div class="body_of_table">
                        <ul role="menu" aria-label="item of table of content"
                            style="list-style-type: decimal; display: list-item;"
                            class="flex justify-center flex-col list-decimal list-outside  w-[10em] xl:w-[90%] py-2 px-3 m-auto">
                            <li aria-label="item of table of content" role="menuitem" class="break-words "><a
                                    title="how to learn programming" href="#" class="relative ">how
                                    to learn programming fast?</a></li>
                        </ul>


                    </div>
                    <hr class="bg-yellow-400 w-[80%]  my-[3em] mx-auto">
                </div>


                {{-- top blog post --}}
                <div aria-label="top business blog posts">
                    <h3 class="w-full block text-center text-sm xl:text-2xl p-2 py-5 font-semibold table_of_content">
                        Top Business's
                        blog post</h3>
                    <div class="body_of_table">
                        <ol role="menu"
                            class="flex justify-center flex-col list-decimal list-outside    w-[10em] xl:w-[90%] py-2 px-3 m-auto "
                            style="list-style-type: decimal; display: list-item;">
                            <li role="menuitem" class="  break-words"><a title="blog title" href="#"
                                    class="relative ">how
                                    to learn rogramming fast?
                                    <hr class="bg-slate-700">
                                </a></li>

                        </ol>

                    </div>
                    <hr class="bg-yellow-400 w-[80%] my-[3em] mx-auto">
                </div>

                {{-- ads --}}
                <div aria-label="show adversite" class="bg-white w-[90%] m-auto h-[60em]">
                    <p>show ads here</p>
                </div>

            </div>
            {{-- right side --}}
            <div aria-label="right side bar"
                class=" p-4 bg-white rounded-t-xl lg:rounded-ss-none lg:rounded-se-xl w-[100%] lg:w-[70%] start">
                {{-- breadcrumb --}}
                <nav aria-label="breadcrumb" class="p-2" aria-label="Breadcrumb">
                    <ol aria-label="breadcrumb list" class="flex items-center space-x-4">
                        <li aria-label="breadcrumb item">
                            <a title="home" href="{{ url('/') }}"
                                class="text-blue-600 hover:text-blue-800">Home</a>
                        </li>
                        <li aria-label="breadcrumb line">
                            <svg class="h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </li>
                        <li aria-label="breadcrumb item">
                            <a title="business blogs" href="{{ url('blog') }}"
                                class="text-blue-600 hover:text-blue-800">
                                Blog</a>
                        </li>
                        <li aria-label="breadcrumb line">
                            <svg class="h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </li>
                        <li aria-label="breadcrumb item">
                            <a title="Sport blogs" href="{{ url('blog/sport') }}"
                                class="text-blue-600 hover:text-blue-800">Sport
                                Blog</a>
                        </li>
                        <li aria-label="breadcrumb line">
                            <svg class="h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </li>
                        <li aria-label="breadcrumb item " class="text-blue-600 hover:text-blue-800">
                            
                                Post Title
                        </li>
                    </ol>
                </nav>
                <hr class="bg-slate-600 f-[80%] m-auto my-1">
                <br>
                {{-- blog  image --}}
                <div aria-label="image" class="blog_img w-full  overflow-hidden md:max-h-[40em]   mb-[5em] ">
                    <figure class="w-full flex justify-center items-center flex-col ">
                        <picture class="m-auto">
                            <source aria-label="blog's image for large divces" srcset="{{ url('images/2.jpg') }}"
                                media="(min-width: 1280px)">
                            <source aria-label="blog's image for small divces " srcset="{{ url('images/2.jpg') }}"
                                media="(min-width: 768px)">
                            <img aria-label="blog's image deafult" src="{{ url('images/2.jpg') }}" alt="logo"
                                class=" rounded-md  md:max-h-[30em]">
                        </picture>


                        <figcaption aria-label="blog image information"
                            class="w-full text-slate-600 text-center my-3">
                            Image by from Example.com
                        </figcaption>
                    </figure>
                </div>
                <br>


                <div aria-label="blog post details"
                    class="article_information text-sm text-slate-600 flex items-center justify-between  ">
                    <div class="text-slate-600">

                        <p style="color:#475569;"> created by <span><a title="author" aria-label="author"
                                    href="#" class="text-yellow-700">
                                    Mohammad hussain </a></span>
                            at: <span aria-label="date of write">04-12-2023</span> </p>
                        <p style="color:#475569;">Updated at: <span aria-label="date of update">05-02-2024</span>
                        </p>




                    </div>
                    <div class=" w-[20em] text-end">
                        <p style="color:#475569;">Downloaded: <span>201</span></p>
                        <p style="color:#475569;"> Visited: <span class="mx-1">200</span>  </p>
                        <p class=" text-yellow-600  flex justify-end ">241
                            <svg width="20" height="20" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                    fill="none" stroke="#ca8a04" stroke-width="1" />
                            </svg>
                        </p>
                    </div>


                </div>
                <hr class="bg-slate-600">
                <main class="h-[310em] overflow-y-auto scrollBox">
                    {{-- title of blog --}}
                    <h1 class="title_of_blog break-words text-md font-bold p-2 w-full" id="title"
                        aria-label="title">it is
                        jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggtitle
                        of blog post</h1>
                    {{-- introduction --}}
                    <p class="introduction" aria-label="blog post introduction" aria-labelledby="title">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe doloremque enim ad dolorum?
                        Beatae officia, culpa quia iste natus, cum accusantium eum explicabo vero ad numquam delectus
                        perferendis deleniti assumenda!
                    </p>
                    {{-- table of content for mobile --}}
                    <div class="block lg:hidden ">
                        <h3 aria-label="table of content for small screen"
                            class="w-full block text-center text-2xl p-5 font-semibold table_of_content">Table Of
                            Content</h3>
                        <div class="body_of_table">
                            <ul role="menu" class="text-center list-decimal list-inside space-y-2 text-lg">
                                <li role="menuitem" class=""><a href="#" title="blog title"
                                        class="relative pl-4 before:content-['•'] before:absolute before:-left-1 before:text-blue-500 before:text-[2em]">how
                                        to learn programming fast?</a></li>


                            </ul>

                        </div>
                        <hr class="bg-yellow-400 w-[80%] my-[3em] mx-auto">
                    </div>
                    {{-- body of content --}}
                    <section aria-label="content of blog post" class="content h-[300em]">

                    </section>
                    <hr class="bg-slate-600">
                    {{-- ads --}}
                    <section aria-label="advertise" class=" h-[20em] w-[100%] m-auto shadow-md rounded-md">
                        ads
                    </section>

                    {{-- FAG --}}
                    <section aria-label="FAQ of this post"
                        class="fag bg-slate-100 my-[3em] px-0 py-2 md:p-[2em] shadow-md rounded-md">
                        <div class="container rounded-lg">
                            <!-- ***** Section Title Start ***** -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-heading">
                                        <h2 aria-label="Frequently asked questions title" class=" my-3 font-semibold "
                                            style="color: rgb(14, 103, 236);">Frequently
                                            Asked Questions</h2>
                                    </div>
                                </div>

                            </div>
                            <!-- ***** Section Title End ***** -->

                            <div class="row">


                                <div class="col-12 ">
                                    <div class="accordions is-first-expanded ">
                                        <article class="accordion">
                                            <div class="accordion-head ">
                                                <h3 id="question1" aria-label="FAQ question"
                                                    class="text-blue-500 text-sm md:text-md">quesition </h3>




                                            </div>
                                            <div class="accordion-body">
                                                <div class="content">
                                                    <p aria-labelledby="question1" aria-label="answer of question"
                                                        class="text-blue-400 bg-slate-100 p-1 md:p-2">
                                                        ansower
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="accordion">
                                            <div class="text-blue-500 accordion-head">
                                                <h3 id="question2" class="text-blue-500 text-sm md:text-md">quesition
                                                </h3>

                                            </div>
                                            <div class="accordion-body">
                                                <div class="content">
                                                    <p aria-labelledby="question2"
                                                        class="text-blue-400 bg-slate-100 p-1 md:p-2">
                                                        ansower
                                                    </p>
                                                </div>
                                            </div>
                                        </article>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    {{-- tags --}}
                    <section aria-label="Tags related to this blog post"
                        class="tags bg-slate-100 p-3 my-5 rounded-md shadow-md text-slate-500">

                        <h3 aria-label="tag header" class="text-xl font-semibold text-slate-600 mb-4">Tags:</h3>
                        <ul role="menu" class="flex flex-wrap">
                            <li role="menuitem" class="m-2">
                                <a href="{{ url('/blog/business/tag/tag_url') }}" title="tags" rel="tag"
                                    class="inline-block bg-blue-700 text-slate-100 px-4 py-2 rounded-full text-sm font-semibold transition-transform duration-200 hover:scale-105 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                                    Business Strategy
                                </a>
                            </li>

                            <!-- Add more tags here -->
                        </ul>

                    </section>

                </main>
                {{-- like and share section --}}
                <div aria-label="like,share and dislike buttons"
                    class="share_like  rounded-b-xl  bg-slate-100 p-3 h-[4em] flex justify-end items-center">

                    <button aria-label="dislike button" title="dislike "
                        class="dislike active:bg-blue-700 focus:outline-none bg-blue-500 p-2 rounded-md hover:bg-blue-400 mx-1 transition-all duration-150 ease-in">
                        <svg width="39" height="30" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_15_129)">
                                <rect width="30" height="30" fill="none" />
                                <path stroke-width="2"
                                    d="M22 11.5C22 12.6046 21.1046 13.5 20 13.5L19 13.5C17.8954 13.5 17 12.6046 17 11.5L17 5.5C17 4.39543 17.8954 3.5 19 3.5L20 3.5C21.1046 3.5 22 4.39543 22 5.5L22 11.5Z"
                                    stroke="#fff" stroke-linecap="round" stroke-linejoin="round" />
                                <path stroke-width="2"
                                    d="M17 11.5C16 11.5 12 14 12 19C12 21 9 21 9 19C9 17 9 16 10 13.5L4 13.5C3.44772 13.5 3 13.0523 3 12.5L3 9.26039C3 8.77056 3.17976 8.29776 3.50518 7.93166L6.40331 4.67126C6.78285 4.24428 7.32686 3.99998 7.89813 3.99998L14.6667 3.99998C14.883 3.99998 15.0936 4.07016 15.2667 4.19998L17 5.49998"
                                    stroke="#fff" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_15_129">
                                    <rect width="30" height="30" fill="none" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>

                    <button aria-label="share button" title="share "
                        class="share active:bg-blue-700 focus:outline-none bg-blue-500 p-2 rounded-md hover:bg-blue-400 mx-1 transition-all duration-150 ease-in">

                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                            viewBox="0,0,256,256">
                            <g fill="#fff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(10.66667,10.66667)">
                                    <path
                                        d="M18,2c-1.64501,0 -3,1.35499 -3,3c0,0.19095 0.02179,0.37712 0.05664,0.55859l-7.13477,4.16211c-0.52334,-0.44285 -1.1898,-0.7207 -1.92187,-0.7207c-1.64501,0 -3,1.35499 -3,3c0,1.64501 1.35499,3 3,3c0.73208,0 1.39854,-0.27785 1.92188,-0.7207l7.13477,4.16016c-0.03509,0.18206 -0.05664,0.36893 -0.05664,0.56055c0,1.64501 1.35499,3 3,3c1.64501,0 3,-1.35499 3,-3c0,-1.64501 -1.35499,-3 -3,-3c-0.73252,0 -1.39841,0.27933 -1.92187,0.72266l-7.13477,-4.16406c0.03485,-0.18147 0.05664,-0.36764 0.05664,-0.55859c0,-0.19095 -0.02179,-0.37712 -0.05664,-0.55859l7.13477,-4.16211c0.52333,0.44285 1.1898,0.7207 1.92188,0.7207c1.64501,0 3,-1.35499 3,-3c0,-1.64501 -1.35499,-3 -3,-3zM18,4c0.56413,0 1,0.43587 1,1c0,0.56413 -0.43587,1 -1,1c-0.56413,0 -1,-0.43587 -1,-1c0,-0.56413 0.43587,-1 1,-1zM6,11c0.56413,0 1,0.43587 1,1c0,0.56413 -0.43587,1 -1,1c-0.56413,0 -1,-0.43587 -1,-1c0,-0.56413 0.43587,-1 1,-1zM18,18c0.56413,0 1,0.43587 1,1c0,0.56413 -0.43587,1 -1,1c-0.56413,0 -1,-0.43587 -1,-1c0,-0.56413 0.43587,-1 1,-1z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </button>

                    <button aria-label="like buttn" name="like_btn"
                        class="like active:bg-blue-700 focus:outline-none bg-blue-500 p-2 rounded-md hover:bg-blue-400 mx-1 transition-all duration-150 ease-in">
                        <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                fill="none" stroke="#fff" stroke-width="2" />
                        </svg>
                    </button>

                </div>
                {{-- add comment --}}
                <div aria-label="leave a comment section"
                    class="add_comment bg-slate-100 p3 h-[27em] my-5 rounded-md">

                    <h2 aria-label="leave a comment header" class="text-2xl font-semibold py-4  text-center">

                        Comment and see them in Morse Code!</h2>
                    <form id="leave_comment" aria-label="leave a comment form" class="space-y-4 flex flex-col  p-3"
                        action="/submit-comment" method="POST">
                        @csrf <!-- Add CSRF token for security -->

                        <input type="Name" id="Name" name="Name" required aria-label="name"
                            aria-required="true"
                            class="m-2 p-2 mx-auto w-full bg-slate-300 outline-none border-none rounded-md focus:ring-none focus:border-blue-500 transition duration-200"
                            placeholder="Enter your Name" aria-placeholder="enter your name">
                        <input type="email" id="email" name="email" required aria-label="email"
                            aria-required="true"
                            class="m-2 p-2 mx-auto w-full bg-slate-300 outline-none border-none rounded-md focus:ring-none focus:border-blue-500 transition duration-200"
                            placeholder="Enter your email" aria-placeholder="enter your email">

                        <textarea id="comment" name="comment" required rows="4" aria-label="comment text" aria-required="true"
                            class="mt-1 p-2  outline-none resize-none bg-slate-300 rounded-md w-full focus:ring-nonr focus:border-blue-500 transition duration-200"
                            placeholder="Write your comment..." aria-placeholder="write your comment"></textarea>

                        <button aria-labelledby="leave_comment" type="submit"
                            class="flex items-center active:bg-slate-900 focus:outline-none justify-center px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 transition duration-200">
                            <svg class="w-4 h-4 mr-2 animate-bounce" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 15l-5-5h10l-5 5z" />
                            </svg>
                            Submit
                        </button>
                    </form>


                </div>
            </div>
        </div>
        <br>
        {{-- footer of blog --}}
        <div aria-label="footer of blog post" class="bg-white flex flex-col rounded-b-lg">
            <div class="h-[40em]  bg-slate-100 p-3 pt-0">
                {{-- related post --}}
                <h3 aria-label="Related business's blog psot"
                    class="w-full block text-center text-blue-600 md:text-2xl py-5 p-2 text-sm font-semibold table_of_content">
                    Related
                    Business's
                    blog post</h3>
                <div class="body_of_table h-[25em] p-2 overflow-y-auto">
                    <ol role="menu"
                        class="flex justify-center flex-col list-decimal list-outside  text-blue-500   w-[90%] py-2 px-3 m-auto"
                        style="list-style-type: decimal; display: list-item; ">
                        <li role="menuitem" class="w-[100%] text-start m-auto"><a title="blog title" href="#"
                                class="relative   break-words">how
                                to learn fast?
                                <hr class="bg-slate-400">
                            </a></li>


                    </ol>

                </div>
                <hr class="bg-slate-400 w-[80%] my-[3em] mx-auto">

            </div>
            {{-- comments --}}
            <section aria-label="User comments section"
                class="comment flex flex-col h-[158em] rounded-b-lg justify-center">
                <div class="bg-slate-100 h-[150em] justify-center flex flex-col">
                    <h2 aria-label="comments"
                        class="w-full block text-center text-blue-600 text-2xl p-5 font-semibold">Comments</h2>
                    <button aria-label="change the text from morse code to normal text" aria-label=""
                        class="p-2 active:bg-blue-700 focus:outline-none bg-blue-600 text-slate-100 m-auto w-[50%] transition-all duration-150 ease-in rounded-md">
                        Toggle Normal Text
                    </button>
                    <hr class="bg-slate-600">
                    <div class="h-[140em] overflow-y-auto">
                        <!-- Comment Section -->

                        <div
                            class="bg-white max-h-[50em] overflow-y-auto p-6 rounded-lg shadow-md m-3 transform transition-transform duration-300">
                            <div class="flex items-start space-x-4">
                                <!-- User Icon -->
                                <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center"
                                    aria-hidden="true">
                                    <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 12c2.485 0 4.5-1.995 4.5-4.5S14.485 3 12 3 7.5 4.995 7.5 7.5 9.515 12 12 12zM16.5 15h-9c-.622 0-1.125.503-1.125 1.125v.75c0 .622.503 1.125 1.125 1.125h9c.622 0 1.125-.503 1.125-1.125v-.75c0-.622-.503-1.125-1.125-1.125z" />
                                    </svg>
                                </div>

                                <div class="flex-1 ">
                                    <div class="text-gray-700">
                                        <span aria-label="this persion " class="font-semibold">mohammad <span
                                                aria-label="commented to" class="text-slate-500"> commented
                                                to <span>post</span></span></span>
                                        <span class="text-sm text-gray-500 ml-2">2 hours ago</span>
                                    </div>
                                    <p class="mt-2 text-gray-600 break-words ">
                                        - .... .. ... / .. ... / .- / --. .-. . .- - / .--. --- ... - -.-. .... .-.-.- /
                                        .. / .-. . .-.. .-.. -.-- / . -. .--- --- -. .-.. .- - . -.. / .-. . .- -.. ..
                                        -. --. / .. - .-.-.- / .-.. --- --- -.- .. -. --. / ..-. --- .-. / -- --- .-. .
                                        / -.-. --- -. - . -. - / .-.. .. -.- . / - .... .. ... .
                                    </p>

                                    <!-- Reaction Buttons -->
                                    <div class="flex items-center mt-4 text-gray-500">
                                        <button
                                            class="likeBtn flex active:text-blue-900 focus:outline-none items-center hover:text-blue-500 ease-in transition duration-300">
                                            <svg class="w-5 h-5 mr-1 likeIcon" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7-7 7 7" />
                                            </svg>
                                            Like
                                        </button>
                                        <button data-userid="01"
                                            class="replyBtn active:text-blue-900 focus:outline-none flex items-center hover:text-blue-500 transition duration-300">
                                            <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 10h8M8 14h5" />
                                            </svg>
                                            Reply
                                        </button>
                                    </div>

                                    <div
                                        class="reply_and_registe hidden shadow-lg rounded-lg z-[100] p-3 h-full w-full relative left-0 mt-[2em] translate-y-5">
                                        <form aria-label="reply form" action="">
                                            @csrf
                                            <label for="name" class="sr-only">Name</label>
                                            <input required type="text" id="name" name="name"
                                                aria-required="true"
                                                class="w-full p-2 mt-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                                placeholder="Write your name">

                                            <label for="email" class="sr-only">Email</label>
                                            <input required type="email" id="email" name="email"
                                                aria-required="true"
                                                class="w-full p-2 mt-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                                placeholder="Write your email">

                                            <label for="comment" class="sr-only">Comment</label>
                                            <textarea id="comment" name="comment" required rows="4" aria-required="true"
                                                class="mt-1 p-2 outline-none resize-none border border-gray-300 rounded-md w-full focus:ring-none focus:border-blue-500 transition duration-200"
                                                placeholder="Write your comment..."></textarea>

                                            <button aria-label="comment button"
                                                class="mt-3 px-4 py-2 bg-blue-500 text-white rounded-lg flex items-center hover:bg-blue-600 transition duration-300">
                                                Comment
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat the above block for additional comments -->
                    </div>
                </div>
            </section>

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
                            <a title='Personal Development blog' class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/Personal-Development') }}">Personal Development</a>
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
    <style>
        .table_of_content::before {
            content: '';
            width: 10em;
            display: block;
            height: 2px;
            background: #FFC107;
            margin: auto;
            border-radius: 100px;
            top: 50px;
            position: relative;
        }

        .heart-pop {
            animation: pop 0.3s ease-in-out;
        }

        @keyframes pop {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.4);
            }

            100% {
                transform: scale(1);
            }
        }

        @media screen and (max-width:1280px) {
            .table_of_content::before {

                width: 10em;
                top: 48px;
            }
        }
    </style>
   <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
   <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
   <script type="module" src="{{ asset('js/custom.js') }}"></script>
   <script type="module" src="{{ asset('js/shows_blog_post.js') }}"></script>

</body>

</html>
