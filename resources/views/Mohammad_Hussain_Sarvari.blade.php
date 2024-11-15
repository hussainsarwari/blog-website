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

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area " id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                    
                    <div class="col-12 relative top-[5em]"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="{{ url('images/slider-icon.gif') }}" class="mx-auto rounded img-fluid d-block"
                            alt="First Vector Graphic">
                    </div>
            </div>
        </div>
    </div>



    <section class="md:py-[10em] my-10 overflow-hidden">
        <div class="container">
            <div class="mb-3 text-center row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <h2 class="display-5  text-blue-500 font-bold py-[3em]" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">Who I am?</h2>
                </div>
            </div>
            <div class="row align-items-center justify-center">
                
                <div class="order-1 col-md-4 pe-lg-5 order-md-2" data-scroll-reveal="enter top move 30px over 0.6s after .7s">
                    <img src="{{ asset('images/who_i_am.gif') }}" class="mx-auto rounded  d-block"
                        alt="App">
                </div>
                <div class="order-3 col-md-4 ps-lg-5 order-md-3" data-scroll-reveal="enter right move 30px over 0.6s after 1s">
                    <p class="text-center text-blue-400">
                        My name is Mohammad Hussain Sarvari, a 24-year-old software engineer from Afghanistan. I hold a degree in Computer Science with a specialization in Software Engineering from Kabul University. I’m passionate about coding, solving complex problems, and continuously enhancing my technical skills. In my free time, I enjoy playing video games and football, both of which help fuel my creativity and teamwork.
                    </p>
                    
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
            <h2 class="text-blue-500 font-bold text-center">My skills</h2>
            <hr>
            <div class="col">
                <div data-scroll-reveal="enter left move 30px over 0.6s after 0.4s" >
                   
                    <div class="max-w-4xl mx-auto px-4" id="my-skills-section">
                        
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">HTML </h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 100%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">100%</p>
                        </div>
            
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Css </h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 100%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">100%</p>
                        </div>
            
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">JavaScript </h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 90%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">90%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">React.js</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 65%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">65%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Vue.js</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 75%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">75%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Anguler.js</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 60%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">60%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">SEO</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 97%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">97%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Flutter</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 70%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">70%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">java</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 40%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">40%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Python</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 78%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">78%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Codelgniter</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 48%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">48%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">GSAP</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 38%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">38%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Anime.js</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 88%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">88%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Tailwind.css</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 98%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">98%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Bootstrap.css</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 84%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">84%</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">PHP</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 84%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">84%</p>
                        </div>
            
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700"> Laravel</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 92%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">92%</p>
                        </div>
            
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700"> Node.js</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 82%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">82%</p>
                        </div>
            
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">MySQL & Database Management</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 86%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">86%</p>
                        </div>
            
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Version Control (Git/GitHub)</h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 90%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">95%</p>
                        </div>
            
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">WordPress Development </h3>
                            <div class="relative w-full h-5 bg-gray-200 rounded-full">
                                <div class="skill-bar rounded-full" style="--skill-level: 80%;"></div>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">80%</p>
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








    <section class="section  bg-slate-900" id="frequently-question" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
        <div class="container">
            <h2 class="text-blue-500 font-bold text-center">My Project</h2>
           <div class="projects">
            <div class="container mx-auto py-12 px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    <!-- Weather Application Card -->
                    <div class="project-card p-6 flex justify-center flex-col bg-white rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out" data-aos="fade-up">
                        <div class="icon mb-4 text-center">
                            <i class="fas fa-cloud-sun text-blue-500 text-5xl"></i>
                        </div>
                        <h2 class="text-2xl font-semibold mb-2 text-center">Weather Application</h2>
                        <p class="text-gray-600 text-center">A responsive web application to check the weather conditions in any location.</p>
                        <a href="https://github.com/your-github-repo-weather" class="text-blue-500 mt-4 inline-block text-center">View on GitHub</a>
                    </div>
            
                    <!-- Chat Application Card -->
                    <div class="project-card p-6 flex justify-center flex-col bg-white rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out" data-aos="fade-up">
                        <div class="icon mb-4 text-center">
                            <i class="fas fa-comments text-green-500 text-5xl"></i>
                        </div>
                        <h2 class="text-2xl font-semibold mb-2 text-center">Chat Application</h2>
                        <p class="text-gray-600 text-center">An interactive chat application to connect users in real-time.</p>
                        <a href="https://github.com/hussainsarwari/vue_chat_application/tree/master" class="text-blue-500 mt-4 inline-block text-center">View on GitHub</a>
                    </div>
            
                    <!-- Your Website Card -->
                    <div class="project-card p-6 flex justify-center flex-col bg-white rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out" data-aos="fade-up">
                        <div class="icon mb-4 text-center">
                            <i class="fas fa-laptop-code text-red-500 text-5xl"></i>
                        </div>
                        <h2 class="text-2xl font-semibold mb-2 text-center">My Website</h2>
                        <p class="text-gray-600 text-center">Showcasing my portfolio and projects.</p>
                        <a href="https://github.com/hussainsarwari/blog-website" class="text-blue-500 mt-4 inline-block text-center">View on GitHub</a>
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

    <section class="py-5">
        <div class="container">
            <div class="relative row align-items-center justify-content-center">
                <div class="order-2 col-md-8 col-lg-7 order-md-1">
                    <div class="mt-3 card-body ms-md-5 mt-md-0">
                        <div class="text-muted">
                            Programmer
                        </div>
                        <h3 class="m-0 mb-4 fw-bold">Mohammad Hussain "Sarvari"</h3>
                        <p class="lead">This is Mohammad Hussain "sarvari",a programmer and seo optimizer from Afghnaistan</p>
                        <div class="mt-4 d-flex">
                            <a class="btn btn-sm me-2" href="{{url('https://facebook.com/')}}"><svg class="bi bi-facebook" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path></svg></a> 
                            <a class="btn btn-sm me-2" href="{{url('https://twitter')}}"><svg class="bi bi-twitter" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path></svg></a> 
                            <a class="btn btn-sm" href="{{url('https://linkedin')}}"><svg class="bi bi-linkedin" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path></svg></a>
                        </div>
                    </div>
                </div>
                <div class="order-1 col-md-4 col-lg-3 order-md-2">
                    <img alt="mohammad hussain sarvari" class="z-[100] img-fluid  w-[10em] md:w-full" src="{{asset('images/mypic.png')}}"></div>
                    <div class="w-[15em] h-[15em] bg-yellow-400 rounded-full absolute top-[-1] right-20 shadow-xl shadow-yellow-400"></div>
                    <div class="w-[13em] h-[13em] md:w-[20em] md:h-[20em] bg-blue-400 rounded-full absolute top-[14em] sm:top-[-2em] left-0 shadow-xl shadow-blue-300"></div>
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


    <footer class="py-4 relative top-[0em] md:top-[30em] xl:top-[40em] h-[130em] md:h-[70em] w-full ">
        <x-footer/>    
    </footer>

    <!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <script>
         AOS.init();
        const skills=document.querySelectorAll(".skill-bar");
      window.addEventListener("scroll",()=>{
       if (scrollY >=1500) {
        skills.forEach(e => {
            
            e.classList.add('skill-bar-animation')
        });
       }else if(scrollY <=1500){
        skills.forEach(e => {
            
            e.classList.remove('skill-bar-animation')
        });
       }
      })
 </script>

    <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
    <script type="module" src="{{ asset('js/custom.js') }}"></script>



</body>

</html>
