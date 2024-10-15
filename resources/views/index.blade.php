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


</head>

<body>

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
                                        <a class="px-1 w-full text-center"
                                            href="{{ url('blog/Personal-Development') }}" role="menuitem"
                                            title="Personal Development blog">Personal Development</a>
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
    </header> <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class=" welcome-section left-text col-lg-6 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">








                        <p style="font-size: 2em;">A free website <strong>for YOU</strong></p>
                        <p>S_solution helps you grow your skills,knowledge & solve your daily problems.</p>
                        <h3 class="text-white">Join to our community</h3> <br>
                        <a href="{{ url('login') }}" class="px-5 mr-4 btn btn-primary">sign in</a>
                        <a href="{{ url('register') }}" class="px-5 btn btn-outline-primary">sign up</a><br>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="{{ url('images/slider-icon.gif') }}" class="mx-auto rounded img-fluid d-block"
                            alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="py-[10em] my-10">
        <div class="container">
            <div class="mb-3 text-center row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <h2 class="display-5  text-blue-500 font-bold py-[3em]" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">Our Features</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="order-2 col-md-4 order-md-1" data-scroll-reveal="enter left move 30px over 0.6s after 1s">
                    <div class="mt-4 mb-4 d-flex mt-md-0" >
                        <div class="text-muted">
                            <svg class="bi bi-aspect-ratio" fill="#60a5fa" height="58" viewbox="0 0 16 16"
                                width="58" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z">
                                </path>
                                <path
                                    d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z">
                                </path>
                            </svg>

                            <br>
                            <h5 class="fw-bold text-blue-400">Website design & developmente</h5>
                            <p class="text-[.8em] text-blue-400">Custom-built websites that reflect your brand and captivate your
                                audience.
                            </p>
                        </div>
                    </div>
                    <hr>

                    <div class="d-flex">
                        <div class="text-muted">

                            <svg class="bi bi-pencil-square" fill="#60a5fa" height="48" viewbox="0 0 16 16"
                                width="48" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                </path>
                                <path
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                                    fill-rule="evenodd"></path>
                            </svg>




                            <br>
                            <h5 class="fw-bold text-blue-400">Content Creation for Blog</h5>
                            <p class="mb-0 fw-light text-blue-400">Engaging articles across various topics: technology, lifestyle,
                                travel, and more.


                            </p>
                        </div>
                    </div>
                </div>
                <div class="order-1 col-md-4 pe-lg-5 order-md-2" data-scroll-reveal="enter top move 30px over 0.6s after .7s">
                    <img src="{{ url('images/left-image.gif') }}" class="mx-auto rounded img-fluid d-block"
                        alt="App">
                </div>
                <div class="order-3 col-md-4 ps-lg-5 order-md-3" data-scroll-reveal="enter right move 30px over 0.6s after 1s">

                    <div class="mb-4 d-flex">
                        <div class="text-muted">
                            <svg class="bi bi-speedometer2" fill="#60a5fa" height="48" viewbox="0 0 16 16"
                                width="48" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z">
                                </path>
                                <path
                                    d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"
                                    fill-rule="evenodd"></path>
                            </svg>
                            <br>
                            <h5 class="fw-bold text-blue-400">SEO Optimization</h5>
                            <p class="fw-light text-blue-400">Improve search engine rankings and drive organic traffic.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div class="text-muted">
                            <svg class="bi bi-layout-text-window-reverse" fill="#60a5fa" height="48"
                                viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z">
                                </path>
                                <path
                                    d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z">
                                </path>
                            </svg>
                            <br>
                            <h5 class="fw-bold text-blue-400">Mobile App Development</h5>
                            <p class="mb-0 fw-light text-blue-400">From concept to launch, we bring your app ideas to life.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <hr>
    <hr>
    <hr>
    <hr>




   
    <section class="section  sm:py-[10em] " id="">

        <div class="container">
            <div class="row">
                <div data-scroll-reveal="enter left move 30px over 0.6s after 0.4s" class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading ">
                        <h5 class="text-blue-500">What We Offer?</h5>
                        <hr>
                    </div>

                    <ol class="text-justify ">
                        <li class="text-blue-500">
                            1. <strong> Tech Bytes:</strong> Dive into the ever-evolving world of technology. From
                            coding tutorials to gadget reviews, we decode the digital universe for you.
                        </li>
                        <li class="text-blue-500">
                            2. <strong> Beauty Chronicles:</strong> Unleash your inner glam guru! Discover skincare
                            routines, makeup hacks, and beauty trends that’ll make you shine.
                        </li>
                        <li class="text-blue-500">
                            3. <strong> Wanderlust Journeys:</strong> Embark on virtual adventures with our travel
                            guides. Explore hidden gems, coltural wonders, and breathtaking landscapes.
                        </li>
                        <li class="text-blue-500">
                            4. <strong> Foodie Diaries:</strong> Food is love, and we’re here to celebrate it. From
                            exotic recipes to street food delights, our culinary journey knows no bounds.
                        </li>
                        <li class="text-blue-500">
                            5. <strong> Soulful Reflections:</strong> Connect with your spirituality. Explore Islamic
                            teachings, mindfulness practices, and soul-stirring stories.
                        </li>
                        <li class="text-blue-500">
                            6. <strong> Lifestyle Vibes:</strong> Life is a canvas, and you’re the artist. Let’s paint
                            it with style, wellness, and positivity.
                        </li>
                        <li class="text-blue-500">
                            7. <strong> Downloads Galore:</strong> Need software, games, books, music, or movies? Look
                            no further. Our treasure trove awaits

                        </li>
                        <li class="text-blue-500">
                            <strong> and so on</strong>
                        </li>

                    </ol>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{ url('images/right-image.gif') }}" class="mx-auto rounded img-fluid d-block"
                        alt="App">
                </div>
            </div>
        </div>
    </section>


    <hr>
    <hr>
    <hr>
    <hr>








    <section class="section  bg-slate-900" id="frequently-question" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class=" font-bold" style="color: #60a5fa; font-weight: bold; padding-bottom:12px;" data-scroll-reveal="enter top move 30px over 0.6s after 0.7s">Frequently Asked Questions</h2>
                    </div>
                </div>

            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="left-text col-lg-6 col-md-6 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 1s">
                    <h5 class="text-center " style="color: #60a5fa;">Send your questions</h5>
                    <div class="text-center accordion-text ">
                        <p class="text-blue-400">
                            if your have any question or suggestions, feel free to ask
                        </p>
                        <form action="" method="post" class="flex flex-col justify-between py-2">
                            @csrf
                            <input
                                class="p-2 my-2 border-b border-blue-300 focus:outline-none focus:bg-slate-800 bg-slate-900  focus:text-blue-500 text-white"
                                type="text" name="name" autocomplete="name" id="name"
                                placeholder="Enter your name" required>
                            <input
                                class="p-2 my-2 border-b border-blue-300 focus:outline-none focus:bg-slate-800 bg-slate-900  focus:text-blue-500 text-white"
                                type="email" name="Edmail" id="Edmail" autocomplete="email"
                                placeholder="Enter your Edmail" required>
                            <textarea
                                class="p-2 my-2 border-b border-blue-300 focus:outline-none focus:bg-slate-700 bg-slate-800  focus:text-blue-500 text-white"
                                name="question" id="question" cols="30" rows="10" placeholder="Enter your question" required></textarea>
                            <button class="p-2 text-white bg-blue-400" type="submit" name="question">Submit</button>
                        </form>
                    </div>
                </div>


                <div class=" col-lg-6 col-md-6 col-sm-12 rounded-lg" data-scroll-reveal="enter right move 30px over 0.6s after 1s">
                    <div class="accordions is-first-expanded " style="border-radius: 20px;">
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

                                        Custom website design and development tailored to your brand and business goals.
                                        Responsive, user-friendly interfaces that work seamlessly across devices.
                                        E-commerce solutions, portfolio sites, and more. <br>
                                        2.
                                        <strong>
                                            SEO Optimization:
                                        </strong>

                                        Boost your online visibility with effective search engine optimization.
                                        Keyword research, on-page optimization, and link building strategies.
                                        Improve your website’s ranking on search engine results pages (SERPs). <br>
                                        3. <strong>
                                            Mobile App Development:
                                        </strong>

                                        Native and cross-platform app development for iOS and Android.
                                        User-centric design, smooth performance, and intuitive interfaces.
                                        From concept to deployment, we’ve got you covered. <br>
                                        4.
                                        <strong>
                                            Content Creation for Blog:
                                        </strong>

                                        Engaging blog posts that resonate with your target audience.
                                        Well-researched articles on technology, lifestyle, travel, and more.
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
                                        S_solutions is a hub for diverse content! You’ll find technology articles,
                                        fashion tips, sports updates, food recipes, travel guides, lifestyle advice, and
                                        more. Whether you’re interested in the latest tech trends or planning your next
                                        adventure, we’ve got you covered.
                                    </p>
                                </div>
                            </div>
                        </article>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>



    <hr>
    <hr>
    <hr>
    <hr>

    <section class="section py-[10em]" id="about-us">
        <div class="container">
            <h2 class="text-center py-[1em] text-blue-500 font-bold" data-scroll-reveal="enter top move 30px over 0.6s after 0.4s">About S_solution</h2>
            <p class="text-[17px] mb-[3em] text-center text-blue-400" data-scroll-reveal="enter top move 30px over 0.6s after 0.8s">
                Welcome to S_Solution—a digital haven where curiosity meets creativity!

            </p>
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ url('images/about_US.gif') }}" class="w-full mx-auto rounded img-fluid d-block"
                        alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    
                    <div class="left-text text-center h-full flex justify-center items-center flex-col">
               
                        <h3 class="text-blue-500 font-bold" data-scroll-reveal="enter top move 30px over 0.6s after 0.4s">
                            Our Mission
                        </h3>
                        <p class="text-[17px] mb-[3em] text-center text-blue-400" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">

                            At S_Solution, we believe that knowledge is the ultimate superpower. Our mission is to
                            empower you with insights, inspiration, and practical tips across various domains. Whether
                            you’re a tech enthusiast, a beauty aficionado, a wanderer seeking travel tales, a foodie
                            exploring flavors, a soul seeking spiritual nourishment, or simply someone looking for
                            entertainment, we’ve got you covered.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                    <div class="hr"></div>
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>

    <hr>
    <hr>
    <hr>
    <hr>
    <section class="py-5 " id='contacts'>
        <div class="container flex-col flex justify-center">

            <h2 data-scroll-reveal="enter top move 30px over 0.6s after 0.4s" class="text-center text-blue-500 font-bold ">Contact <span class="text-yellow-400">Us</span></h2>
            <img data-scroll-reveal="enter top move 30px over 0.6s after 1s" width="200" class="m-auto" src="{{ asset('images/contact_us.gif') }}" alt="contact">
        </div>
        <div class="container flex justify-center p-4 shadow-md " data-scroll-reveal="enter top move 30px over 0.6s after 1.3s">
            <div class=" row">
                <div class="col-md-6">
                    <div class="p-4 text-center border rounded bg-light" data-scroll-reveal="enter bottom move 30px over 0.6s after 1.3s">
                        <span class="text-muted" data-scroll-reveal="enter bottom move 30px over 0.6s after 1.4s">Request a Callback</span>
                        <h2 class="mb-3 fw-bold display-6" data-scroll-reveal="enter bottom move 30px over 0.6s after 1.6s">Email Me Back</h2>
                        <form class="d-flex">
                            <input aria-label="input" class="form-control me-2" placeholder="Email Address"
                                type="email" name='email' autocomplete="email" id='email'> <button
                                class="btn btn-primary text-nowrap" name="email_me" type="submit">Email Me!</button>
                        </form>
                    </div>
                    <br>
                    <div class="p-4 mt-3 text-center rounded mt-md-0">
                        <span class="text-gray-500">Get Started</span>
                        <h2 class="mb-3 text-gray-400 fw-bold display-6">Sign Up Today!</h2><a
                            class="p-3 px-5 btn btn-outline-primary" href="{{ url('register') }}">Sign Up</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 mt-3 text-center rounded mt-md-0">
                        <img class="w-full" src="{{ asset('images/contact.gif') }}" alt="contact">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <hr>
    <hr>
    <hr>
    {{-- footer section --}}


    <footer class="py-4 relative top-[70em] h-[130em] md:h-[70em] w-full ">
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
                            <a title='Personal Development blog'
                                class="text-sm text-white lg:text-md text-decoration-none"
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
                    <a class="ml-2 me-2" title="follow us on instagram" aria-label="follow us on instagram"
                        href="">
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
        const scrollingDiv = document.getElementById('scrollingDiv');

        const scrollAmount = 40;

        window.addEventListener('keydown', (event) => {
            if (event.key === 'ArrowLeft') {
                scrollingDiv.scrollLeft -= scrollAmount; // Scroll left
            } else if (event.key === 'ArrowRight') {
                scrollingDiv.scrollLeft += scrollAmount; // Scroll right
            }
        });
    </script>
    <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
    <script type="module" src="{{ asset('js/custom.js') }}"></script>



</body>

</html>
