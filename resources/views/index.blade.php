<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Time management</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
    @vite(['resources/css/templatemo-art-factory.css'])
    @vite(['resources/css/style.css'])    
    @vite(['resources/js/welcome_text.js'])    
    <script type="module" src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
    <script type="module" src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script type="module" src="{{asset('js/popper.js')}}"></script>
    <script type="module" src="{{asset('js/imgfix.min.js')}}"></script>
    <script type="module" src="{{asset('js/owl-carousel.js')}}"></script>
    <script type="module" src="{{asset('js/scrollreveal.min.js')}}"></script>
    <script type="module" src="{{asset('js/waypoints.min.js')}}"></script>
    <script type="module" src="{{asset('js/custom.js')}}"></script>
</head>
<body>
    


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
                <a class="text-[.5em] d-flex align-items-center text-decoration-none text-light md:text-xl" href="tel:+93766805049"><svg class="bi bi-phone" fill="currentColor" height="20" viewbox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"></path>
                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path></svg> <span class="ms-1">+93 766805049   </span></a> 
                 <a class="text-[.5em] md:text-xl mx-2 d-flex align-items-center ms-lg-4 text-decoration-none text-light" href="mailto:info@gmail.com"><svg class="bi bi-envelope" fill="currentColor" height="20" viewbox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path></svg> 
                <span class="ms-2">S@Solution.com</span></a>
            </div>
            <div class="flex flex-row ">
                <form action="" method="post" class="flex flex-row mx-5 search">
                    
                    <input class="p-1 mx-2 text-white bg-blue-300 border-b border-blue-500 outline-none focus:outline-none focus:bg-blue-400 placeholder:text-white" placeholder="Search"  type="search" name="search" required id="search">
                    <button type="submit" name="search">
                        <svg class="mx-2 bi bi-search" fill="#fff" height="20" viewbox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path></svg>
                        </button>
                </form>
                  

                
                <div class="d-flex justify-content-end">
                    {{-- facebook --}}
                    <a class="text-light" href="{{url('https://facebook.com/')}}"><svg class="bi bi-facebook-f" fill="currentColor" height="16" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a> 
                  {{-- twitter --}}
                    <a class="text-light ms-3" href="{{url('https://twitter.com/')}}"><svg class="bi bi-twitter" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path></svg></a> 
                   {{-- instagram --}}
                    <a class="text-light ms-3" href="{{url('https://instagram.com/')}}"><svg class="bi bi-instagram" fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path></svg></a>
                </div>
            </div>
        </div>
        <div class="2xl:overflow-x-hidden">
            <div class="row">
                
                <div class="col-12">
                    <nav class="flex justify-around w-full main-nav">
                        <p  class="flex title logo"><a href="{{url('localhost:8000')}}"><img class="w-[13em]" src="{{asset('images/logo.png')}}"  alt="logo" srcset=""></a></p>
                        <ul class="nav">
                        
                            <li class="scroll-to-section "><a href="#welcome" class="active ">Home</a></li>
                           
                          
                            <div class="">
                              
                                <li class="px-3 py-2 text-white cursor-pointer scroll-to-section peer new-ite" id="blog"  style="padding: 10px 20px;  color: white; border: none; cursor: pointer;" >Tools</li>
                                    
                                    <div class="fixed flex-col hidden p-4 mt-0 bg-white shadow-lg download rounded-xl peer-hover:flex hover:flex h-fit">
                                            
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('instagram-online-video-downloader')}}">Instagram video downloader</a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('youtube-online-video-downloader')}}">youtube video downloader</a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('short-url')}}">Short URL</a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('Paraphrase')}}">Paraphrase</a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('CV-generator')}}">CV generator</a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('Online-code-editor')}}">Online coding</a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('online-pdf-editor')}}">PDF Editor</a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('online-pdf-compressor')}}">PDF Compression</a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('online-pdf-merging')}}">PDF merging</a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('online-pdf-splitting')}}">PDF Splitting</a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('pdf-to-image')}}">PDF to Image </a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('html-to-pdf')}}">HTML To PDF </a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('image-to-pdf')}}">Image To  PDF </a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('online-pdf-page-numbering')}}">PDF page numbering </a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('online-images-compression')}}">images Compression </a>
                                              <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white" href="{{url('online-video-compression')}}">video  Compression </a>
                                      
                                          
                                     
                                </div>
                             
                            </div>
                          
                            <div class="">
                                <li class="px-3 py-2 text-white cursor-pointer scroll-to-section peer new-ite" id="blog"  style="padding: 10px 20px;  color: white; border: none; cursor: pointer;" >Blog</li>
                                <!-- Dropdown menu -->
                                <div class="fixed flex-col hidden p-4 mt-0 bg-white shadow-lg blog rounded-xl peer-hover:flex hover:flex h-fit">
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white " href="{{url('Technology')}}">Technology</a> 
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white " href="{{url('sport')}}">Sport</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white " href="{{url('lifestyle')}}">Lifestyle</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white " href="{{url('information')}}">Information</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white " href="{{url('islamic')}}">Islamic</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white " href="{{url('fashion')}}">fashion</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white " href="{{url('movie')}}">Movies</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white " href="{{url('food')}}">Food</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white " href="{{url('travel')}}">Travel</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white " href="{{url('business')}}">Business</a>
                                </div>
                            </div>
                            <li class="scroll-to-section"><a href="{{url('community')}}">Community</a></li>
                            <li class="scroll-to-section"><a href="#services">Services</a></li>
                           
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
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class=" welcome-section left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                     
                     
                     
                     
                     
                     
                     
                     
                        <p style="font-size: 2em;">A free website <strong>for YOU</strong></p>
                        <p>S_solution helps you grow your skills,knowledge & solve your daily problems.</p>
                       <h3 class="text-white">Join to our community</h3> <br>
                        <a href="{{url('login')}}" class="px-5 mr-4 btn btn-primary">sign in</a>
                        <a href="{{url('register')}}" class="px-5 btn btn-outline-primary">sign up</a><br>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="{{url('images/slider-icon.gif')}}" class="mx-auto rounded img-fluid d-block" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="py-5 my-10">
        <div class="container">
            <div class="mb-3 text-center row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <h2 class="display-5 fw-bold">Our Features</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="order-2 col-md-4 order-md-1">
                    <div class="mt-4 mb-4 d-flex mt-md-0">
                        <div class="text-muted">
                            <svg class="bi bi-aspect-ratio" fill="currentColor" height="58" viewbox="0 0 16 16" width="58" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
                            <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"></path></svg>
                                
                            <br>
                            <h5 class="fw-bold">Website design & developmente</h5>
                            <p class="text-[.8em]">Custom-built websites that reflect your brand and captivate your audience.
                                </p>
                        </div>
                    </div>
                    <hr>
                    
                    <div class="d-flex">
                        <div class="text-muted">

                            <svg class="bi bi-pencil-square" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                <path d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" fill-rule="evenodd"></path></svg>
                        

                            
                                  
                            <br>
                            <h5 class="fw-bold">Content Creation for Blog</h5>
                            <p class="mb-0 fw-light">Engaging articles across various topics: technology, lifestyle, travel, and more.


                            </p>
                        </div>
                    </div>
                </div>
                <div class="order-1 col-md-4 pe-lg-5 order-md-2">
                    <img src="{{url('images/left-image.gif')}}" class="mx-auto rounded img-fluid d-block" alt="App">
                    </div>
                <div class="order-3 col-md-4 ps-lg-5 order-md-3">
                    
                    <div class="mb-4 d-flex">
                        <div class="text-muted">
                            <svg class="bi bi-speedometer2" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                            <path d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" fill-rule="evenodd"></path></svg>
                                <br>
                            <h5 class="fw-bold">SEO Optimization</h5>
                            <p class="fw-light">Improve search engine rankings and drive organic traffic.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div class="text-muted">
                            <svg class="bi bi-layout-text-window-reverse" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"></path>
                                <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z"></path></svg>
                            <br>
                            <h5 class="fw-bold">Mobile App Development</h5>
                            <p class="mb-0 fw-light">From concept to launch, we bring your app ideas to life.</p>
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


    
    
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{url('images/about_US.gif')}}" class="w-full mx-auto rounded img-fluid d-block" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>About S_solution</h5>
                    </div>
                    <div class="left-text">
                        <p class="text-justify">
                            Welcome to S_Solution—a digital haven where curiosity meets creativity!

                        </p>
                      <h5>
                          Our Mission
                        </h5>
                        <p>
                            
                            At S_Solution, we believe that knowledge is the ultimate superpower. Our mission is to empower you with insights, inspiration, and practical tips across various domains. Whether you’re a tech enthusiast, a beauty aficionado, a wanderer seeking travel tales, a foodie exploring flavors, a soul seeking spiritual nourishment, or simply someone looking for entertainment, we’ve got you covered.
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
    <section class="section bg-[#333] shadow-lg" id="services">
        
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading ">
                        <h5 class="text-white">What We Offer?</h5>
                        <hr class="bg-white">
                    </div>
                   
                    <ol class="text-justify ">
                        <li class="text-white">
                           1. <strong> Tech Bytes:</strong> Dive into the ever-evolving world of technology. From coding tutorials to gadget reviews, we decode the digital universe for you.
                        </li>
                        <li class="text-white">
                           2. <strong> Beauty Chronicles:</strong> Unleash your inner glam guru! Discover skincare routines, makeup hacks, and beauty trends that’ll make you shine.
</li>
                        <li class="text-white">
                          3.  <strong> Wanderlust Journeys:</strong> Embark on virtual adventures with our travel guides. Explore hidden gems, coltural wonders, and breathtaking landscapes.
</li>
                        <li class="text-white">
                           4. <strong> Foodie Diaries:</strong> Food is love, and we’re here to celebrate it. From exotic recipes to street food delights, our culinary journey knows no bounds.
</li>
                        <li class="text-white">
                          5. <strong>  Soulful Reflections:</strong> Connect with your spirituality. Explore Islamic teachings, mindfulness practices, and soul-stirring stories.
</li>
                        <li class="text-white">
                           6. <strong> Lifestyle Vibes:</strong> Life is a canvas, and you’re the artist. Let’s paint it with style, wellness, and positivity.
</li>
                        <li class="text-white">
                          7. <strong>  Downloads Galore:</strong> Need software, games, books, music, or movies? Look no further. Our treasure trove awaits
                           
                        </li>
                        <li class="text-white">
                         <strong>  and so on</strong>   
                        </li>
                       
                    </ol>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{url('images/right-image.gif')}}" class="mx-auto rounded img-fluid d-block" alt="App">
                </div>
            </div>
        </div>
    </section>



{{-- top blog posts --}}
<section class="mx-12 top_blogs" >
    <div class="container py-10 my-8 ">
       
          <p class="p-3 text-sm font-bold text-center text-white bg-blue-300 sm:text-xl">
            
          Top Blog Posts
        </p>
       
        <br>
        <div class="p-3 shadow-sm sm:p-5">
            
            <p><strong class="text-sm font-semibold sm:text-2xl">Techonoly</strong></p>
            <hr>
            <ul id="scrollingDiv" class="flex sm:flex-row  flex-col h-[30em] overflow-y-scroll sm:overflow-x-scroll sm:overflow-y-hidden">
                
                <li  class="col-span-1 mx-[auto] sm:mx-9 my-3 sm:p-3  shadow-2xl border border-white sm:min-w-[20em] sm:w-[20em]  w-[11em] sm:h-[20em] h-[12em] relative rounded-xl">
                 <a href="http://">
                    <img  src="{{asset('images/logo2.png')}}" alt="logo2" srcset="">
                    
                    <div class="absolute top-0 left-0 flex flex-col justify-between h-full p-4  bg-gradient-to-t from-black    opacity-65 sm:w-[20em]  w-[11em] rounded-xl">
                        
                    </div>
                    <div class="absolute top-0 flex flex-col justify-end sm:h-[20em] pb-3 h-[12em] w-[11em] sm:w-[20em] p-2">
                        
                        <h5 class="text-sm font-bold text-blue-300 sm:text-2xl">laravel
                           
                        </h5>
                        
                        <p class="text-sm font-bold text-white sm:text-md"><span>created:</span> 2024/2/1 
                            
                        </p>  
                        
                        <p class="text-[.8em] text-white description">
                            
                            laravel is a powerful php framword that use for backend 
                        </p>
                    </div>
                    </a>
                </li>
                
                
            </ul>






            <p><strong class="text-sm font-semibold sm:text-2xl">Lifestyle</strong></p>
            <hr>
            <ul id="scrollingDiv" class="flex sm:flex-row  flex-col h-[30em] overflow-y-scroll sm:overflow-x-scroll sm:overflow-y-hidden">
                
                <li  class="col-span-1 mx-[auto] sm:mx-9 my-3 sm:p-3  shadow-2xl border border-white sm:min-w-[20em] sm:w-[20em]  w-[11em] sm:h-[20em] h-[12em] relative rounded-xl">
                 <a href="http://">
                    <img  src="{{asset('images/logo2.png')}}" alt="logo2" srcset="">
                    
                    <div class="absolute top-0 left-0 flex flex-col justify-between h-full p-4  bg-gradient-to-t from-black    opacity-65 sm:w-[20em]  w-[11em] rounded-xl">
                        
                    </div>
                    <div class="absolute top-0 flex flex-col justify-end sm:h-[20em] pb-3 h-[12em] w-[11em] sm:w-[20em] p-2">
                        
                        <h5 class="text-sm font-bold text-blue-300 sm:text-2xl">laravel
                           
                        </h5>
                        
                        <p class="text-sm font-bold text-white sm:text-md"><span>created:</span> 2024/2/1 
                            
                        </p>  
                        
                        <p class="text-[.8em] text-white description">
                            
                            laravel is a powerful php framword that use for backend 
                        </p>
                    </div>
                    </a>
                </li>
                
                
            </ul>
        </div>
  
    </div>
</section>



<hr>
<hr>
<hr>
<hr>








    <section class="section  bg-[#333]" id="frequently-question">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="text-white">Frequently Asked Questions</h2>
                    </div>
                </div>
               
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="left-text col-lg-6 col-md-6 col-sm-12">
                    <h5 class="text-center text-white">Send your questions</h5>
                    <div class="text-center accordion-text ">
                        <p class="text-white">
                            if your have any  question or suggestions, feel free to ask 
                        </p>
                        <form action="" method="post" class="flex flex-col justify-between py-2">
                            @csrf
                            <input class="p-2 my-2 border-b border-blue-300 focus:outline-none focus:bg-[#676666] bg-[#4a4a4a]  focus:text-white text-white" type="text" name="name" autocomplete="name" id="name" placeholder="Enter your name" required>
                            <input class="p-2 my-2 border-b border-blue-300 focus:outline-none focus:bg-[#676666] bg-[#4a4a4a] focus:text-white text-white" type="email" name="Edmail" id="Edmail" autocomplete="email" placeholder="Enter your Edmail" required>
                            <textarea class="p-2 my-2 border-b border-blue-300 focus:outline-none focus:bg-[#676666] bg-[#4a4a4a] focus:text-white text-white" name="question" id="question" cols="30" rows="10" placeholder="Enter your question" required></textarea>
                            <button class="p-2 text-white bg-blue-400" type="submit" name="question">Submit</button>
                        </form>
                    </div>
                </div>

                
                <div class=" col-lg-6 col-md-6 col-sm-12">
                    <div class="accordions is-first-expanded ">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span class="text-white">What are your services?</span>
                               
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                               <p class="text-white">
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
                            <div class="text-white accordion-head">
                                <span>What kind of content can I find on S_solutions?</span>
                               
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                               <p class="text-white">
                                S_solutions is a hub for diverse content! You’ll find technology articles, fashion tips, sports updates, food recipes, travel guides, lifestyle advice, and more. Whether you’re interested in the latest tech trends or planning your next adventure, we’ve got you covered.
                              </p>
                               </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="text-white accordion-head">
                                <span>How do I stay updated with S_solution latest content?</span>
                               
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                               <p class="text-white">
                                To stay in the loop, subscribe to our newsletter! We send regular updates about new blog posts, featured articles, and exciting downloads. You can also follow us on social media for real-time updates.
                            </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="text-white accordion-head">
                                <span>Can I contribute my own content to S_solution?</span>
                               
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                              
                              <p class="text-white">
                                Absolutely! We welcome guest bloggers and contributors. If you have valuable insights, travel stories, or creative pieces to share, reach out to our
                                {{-- add my email for guest post --}}
                                <a href="{{url('my-email')}}">
                                    editorial team. 
                                    </a>
                                Let’s collaborate and make S_solutions even richer!
                              </p>
                             </div>
                        </article>
                        <article class="accordion">
                            <div class="text-white accordion-head">
                                <span>How often is S_solutions updated?</span>
                               
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                              
                              <p class="text-white">
                                Our team works diligently to provide fresh content regularly. You can expect new blog posts, downloads, and updates at least once a month.
                              </p>
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


    
    <div id="about-us">
        <section class="py-5">
            <div class="container">
                <div class="row gx-4 align-items-center justify-content-between">
                    <div class="order-2 col-md-5 order-md-1">
                        <div class="mt-5 mt-md-0">
                           
                            <hr>
                            <h2 class="display-5 fw-bold">About Us</h2>
                            
                            <p class="lead">
                                Welcome to S_solutions! We’re more than just a website—we’re your digital companion on the journey of exploration, learning, and inspiration. Here’s what you need to know about us:
                            </p>
                            <h5 class="text-muted">Our Stroy</h5>
                            <p class="lead">
                                S_solutions was born out of a passion for knowledge sharing and creativity. Our team of tech enthusiasts, writers, and designers came together with a common goal: to create a platform where information meets innovation. Whether you’re a seasoned developer, a fashionista, a foodie, or an avid traveler, there’s something here for everyone.
                            </p>
                        </div>
                    </div>
                    <div class="order-1 col-md-5 order-md-2"><img class="img-fluid rounded-3" alt="about us" src="{{asset('images/about-us.png')}}"></div>
                </div>
            </div>
        </section>
    </div>

<hr>
<hr>
<hr>
<hr>
<section class="py-5 " id='contacts'>
	<div class="container flex justify-center p-4 shadow-md" >
		<div class=" row">
			<div class="col-md-6">
				<div class="p-4 text-center border rounded bg-light">
					<span class="text-muted">Request a Callback</span>
					<h2 class="mb-3 fw-bold display-6">Email Me Back</h2>
					<form class="d-flex">
						<input aria-label="input" class="form-control me-2" placeholder="Email Address" type="email" name='email' autocomplete="email" id='email'> <button class="btn btn-primary text-nowrap" name="email_me" type="submit">Email Me!</button>
					</form>
				</div>
                <br>
				<div class="p-4 mt-3 text-center rounded mt-md-0">
					<span class="text-gray-500">Get Started</span>
					<h2 class="mb-3 text-gray-400 fw-bold display-6">Sign Up Today!</h2><a class="p-3 px-5 btn btn-outline-primary" href="{{url('register')}}">Sign Up</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="p-4 mt-3 text-center rounded mt-md-0">
			<img class="w-full" src="{{asset('images/contact.gif')}}" alt="contact">
                </div>
			</div>
		</div>
	</div>
</section>
<hr>
<hr>
<hr>
<hr>
<br>
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






{{-- footer section --}}


<footer class="py-4 relative top-[20em] h-[130em] md:h-[75em] w-full ">
    <img class="absolute bottom-[58em] lg:bottom-[15em]  left-0 w-full rotate-180 d-none d-sm-inline" src="{{asset('images/banner-bg.svg')}}" alt="footer-background-1">
    <img class="absolute bottom-[55em] left-0 w-full d-sm-none footer-img" src="{{asset('images/banner-bg2.svg')}}" alt="footer-background-2">
    <div class="w-full h-[70em] absolute block bottom-[-4em] lg:hidden" id="xx"  style="background: rgb(16 139 233);"></div>
    <div class="w-full h-[30em] absolute  bottom-[-4em] hidden lg:block" id="xx"  style="background: rgb(16 139 233);"></div>
  <div class="absolute bottom-[-4em] left-0  w-[99%] px-5 text-white">
      <div class="py-4 row">
          <div class="mb-4 col-12 col-lg-3 mb-lg-0">
              <img alt="Free Frontend Logo" class="mb-3 img-fluid" height="" src="{{asset('images/logo.png')}}" width="300">
          
              <p class="mb-1 text-sm text-white small lg:text-md">Mazar-e-sharif, Afghanistan</p>
              
              <p class="mb-1 text-sm text-white small lg:text-md">Tel:<a href="tel:+93766805049"> +93 766805049</a></p>
              <p class="mb-0 small"><a class="text-sm text-white text-decoration-none lg:text-md" href="{{url('company-email')}}">s@solution.com</a></p>
          </div>
          <div class="mb-4 col-6 col-lg-2 mb-lg-0">
              <h4 class="text-sm lg:text-md">blogs</h4><hr>
              <ul class="list-unstyled">
                  <li class="mb-0">
                  <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('Technology')}}">Technology</a>  </li><li class="mb-0"> 
                  <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('sport')}}">Sport</a>  </li><li class="mb-0">
                  <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('lifestyle')}}">Lifestyle</a>  </li><li class="mb-0">
                  <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('information')}}">Information</a>  </li><li class="mb-0">
                  <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('islamic')}}">Islamic</a>  </li><li class="mb-0">
                  <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('fashion')}}">fashion</a>  </li><li class="mb-0">
                  <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('movie')}}">Movies</a>  </li><li class="mb-0">
                  <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('food')}}">Food</a>  </li><li class="mb-0">
                  <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('travel')}}">Travel</a>  </li><li class="mb-0">
                  <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('business')}}">Business</a>  </li>

                           
                    
                  
                  
              </ul>
          </div>
          <div class="mb-4 col-6 col-lg-2 mb-lg-0">
              <h4 class="text-sm lg:text-md">Tools</h4><hr>
              <ul class="list-unstyled">
                  
                             <li class="mb-0">



                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('instagram-online-video-downloader')}}">Instagram video downloader</a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('youtube-online-video-downloader')}}">youtube video downloader</a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('short-url')}}">Short URL</a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('Paraphrase')}}">Paraphrase</a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('CV-generator')}}">CV generator</a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('Online-code-editor')}}">Online coding</a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('online-pdf-editor')}}">PDF Editor</a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('online-pdf-compressor')}}">PDF Compression</a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('online-pdf-merging')}}">PDF merging</a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('online-pdf-splitting')}}">PDF Splitting</a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('pdf-to-image')}}">PDF to Image </a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('html-to-pdf')}}">HTML To PDF </a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('image-to-pdf')}}">Image To  PDF </a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('online-pdf-page-numbering')}}">PDF page numbering </a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('online-images-compression')}}">images Compression </a></li> <li class="mb-0">
                              <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('online-video-compression')}}">video  Compression </a></li>				
              </ul>
          </div>
          <div class="mb-4 col-6 col-lg-2 mb-lg-0">
              <h4 class="text-sm lg:text-md">Quick Links</h4>
              <hr>
              <ul class="list-unstyled">
                  <li class="mb-1">
                      <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('#about-us')}}">About us</a>
                  </li>
                  <li class="mb-1">
                      <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('#contacts')}}">Contacts</a>
                  </li>
                  <li class="mb-1">
                      <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('Guest-post')}}">Guest post</a>
                  </li>
                  <li class="mb-1">
                      <a class="text-sm text-white lg:text-md text-decoration-none" href="{{url('privacy-policy')}}">Privacy Policy</a>
                  </li>
              </ul>
          </div>
          <div class="col-12 col-lg-3">
              <div class="pt-4 border-top d-lg-none"></div>
              <h4 class="text-sm lg:text-md">Subscribe</h4>
              <div class="mb-2 input-group">
                  <input class="text-sm form-control bg-light lg:text-md" placeholder="Email address" type="text" autocomplete="email" name='email' id='email'> <button class="btn btn-primary" type="button" name='subscribe'>Subscribe</button>
              </div>
              <p class="mb-0 text-sm text-white small lg:text-md">Sign up for our newsletter to get the latest updates on features and releases.</p>
              <p class="mb-0 text-sm text-white small lg:text-md">Created by: <a href="http://">Mohammad Hussain "Sarvari"</a></p>
          </div>
      </div>
      <div class="py-3 d-lg-flex align-item-ceneter justify-content-between border-top py-lg-2 mt-lg-5">
          <div class="mb-2 text-sm text-white small mb-lg-0 lg:text-md">
              © Copyright  2024 Mohammad hussain "sarvari".
                 <p class="text-sm text-white lg:text-md">thank <a href="https://icons8.com/illustrations" class="text-white">icons8</a>'s  designer  for there beautifull  Illustrations.</p>
           
              <a class="mb-2 text-sm text-white lg:text-md d-block d-lg-inline ms-lg-3 mb-lg-0" href="">Privacy Policy</a> 
              <a class="mb-2 text-sm text-white lg:text-md d-block d-lg-inline ms-lg-3 mb-lg-0" href="">Terms of Service</a>
          </div>
      
          <div class="flex">
              <a class="ml-2 me-2" href="">
                  <svg class="bi bi-pinterest text-primary" fill="#fff" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"></path></svg></a> 
              <a class="ml-2 me-2" href="">
                  <svg class="bi bi-twitter text-primary" fill="#fff" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path></svg></a> 
              <a class="ml-2 me-2" href="">
                  <svg class="bi bi-facebook text-primary" fill="#fff" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path></svg></a>
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

</body>
</html>