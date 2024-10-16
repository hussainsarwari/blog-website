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

    <x-header/>

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
                            <a title="Food blogs" href="{{ url('blog/Food') }}"
                                class="text-blue-600 hover:text-blue-800">Food
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


                        <figcaption aria-label="blog image inforamtion"
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
                       {{-- CTA --}}
                       <section class="bg-gradient-to-r from-indigo-600 to-purple-500 py-12 px-6 rounded-md ">
                        <div class="container mx-auto text-center">
                            <h2 class="text-4xl font-bold text-white mb-4 animate-bounce">
                                Join Us Now!
                            </h2>
                            <p class="text-lg text-white mb-8">
                                Be part of our amazing community and get exclusive updates.
                            </p>
                            <div class="flex flex-col sm:flex-row justify-center sm:space-x-4">
                                <!-- Button 1: Sign Up -->
                                <button 
                                   class="signup-modal-btn flex items-center px-6 py-3 bg-blue-500 text-white font-bold rounded-lg shadow-lg hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105 ">
                                    <i class="fas fa-user-plus mr-2"></i> Sign Up Now
                                </button>
                    
                                <!-- Button 2: Contact Us -->
                                <button
                                   class="contact-modal-btn flex my-[2em] sm:my-0 items-center px-6 py-3 bg-green-500 text-white font-bold rounded-lg shadow-lg hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105 ">
                                    <i class="fas fa-phone-alt mr-2"></i> Contact Us
                                </button>
                            </div>
                        </div>
                    </section>
                      <!-- Sign Up Modal -->
                      <div id="signup-modal" class="fixed inset-0  items-center justify-center bg-black bg-opacity-50 hidden transition-opacity duration-300">
                        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full mx-4 animate-fadeIn">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-2xl font-bold">Sign Up</h3>
                                <i class="fas fa-times cursor-pointer text-gray-600 hover:text-gray-800 close-signup-modal-btn" ></i>
                            </div>
                            <form id="registerForm">
                                @csrf
                                <input aria-label="name for register" type="text" placeholder="Name" id="name_rgs" class="w-full px-4 py-2 mb-4 border rounded">
                                <input aria-label="email address for register" type="email" id="email_rgs" placeholder="Email" class="w-full px-4 py-2 mb-4 border rounded">
                               <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Sign Up</button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Contact Modal -->
                    <div id="contact-modal" class="fixed inset-0  items-center justify-center bg-black bg-opacity-50 hidden transition-opacity duration-300">
                        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full mx-4 animate-fadeIn">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-2xl font-bold">Contact Us</h3>
                                <i class="fas fa-times cursor-pointer text-gray-600 hover:text-gray-800 close-contact-modal-btn" ></i>
                            </div>
                            <form id="contactForm" method="post">
                                @csrf
                                <input type="text" id="name_msg" placeholder="Name" class="w-full px-4 py-2 mb-4 border rounded">
                                <input type="email" id="email_msg" placeholder="Email" class="w-full px-4 py-2 mb-4 border rounded">
                              
                                <textarea placeholder="Message" id="msg" class="w-full px-4 py-2 mb-4 border rounded"></textarea>
                               
                                <button  type="submit" class="w-full bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Send Message</button>
                            </form>
                        </div>
                    </div>
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
        <x-footer/> 
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
