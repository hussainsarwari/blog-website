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


   <x-header/>

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
        <x-footer/>    
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
