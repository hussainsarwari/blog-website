<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tools - [Your Website Name]</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    @vite(['resources/css/app.css'])
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans text-gray-800">
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
  
    <div class="flex justify-center items-center min-h-screen bg-gray-100 px-4 py-[5em] my-20">
        <div class="w-full max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 overflow-hidden">
          <!-- Header Section -->
          <div class="text-center">
            <img src="{{asset('images/2.jpg')}}" alt="Profile picture of John Doe" class="w-24 h-24 mx-auto rounded-full border-4 border-blue-500 animate-pulse">
            <h1 class="mt-4 text-2xl font-bold text-gray-900">John Doe</h1>

            <p class="text-gray-600 flex items-center justify-center space-x-1">
             
              <span>@john_doe</span>
            </p>
            <p class="mt-2 text-sm text-gray-500">Tech Enthusiast & Full-Stack Developer</p>
            <div class="mt-4 flex justify-center space-x-3">
              <a href="#" aria-label="Twitter profile of John Doe" class="text-blue-500 hover:text-blue-700 transition duration-200"><i class="fab fa-twitter text-2xl"></i></a>
              <a href="#" aria-label="LinkedIn profile of John Doe" class="text-blue-700 hover:text-blue-900 transition duration-200"><i class="fab fa-linkedin text-2xl"></i></a>
              <a href="#" aria-label="GitHub profile of John Doe" class="text-gray-700 hover:text-gray-900 transition duration-200"><i class="fab fa-github text-2xl"></i></a>
            </div>
          </div>
      <br>
      <hr>
      <hr>
      <br>
          <!-- Bio Section -->
          <div class="mt-6 px-4 md:px-0 text-center">
            <h2 class="text-xl font-semibold flex justify-center items-center text-gray-900">
              <i class="fas fa-info-circle text-blue-500 mr-2"></i>
              About John Doe
            </h2>
            <br>
            <p class="mt-2 text-gray-700 leading-relaxed hover:opacity-90 transition-opacity duration-300">
              John is a passionate software developer with over 5 years of experience in building web applications. He specializes in modern web technologies, writes tutorials, and loves to share knowledge.
            </p>
          </div>
      <br>
          <hr>
          <hr>
         
      
          <!-- Scrollable List of All Blog Posts -->
          <div class="mt-8 px-4 md:px-0 flex justify-center items-center flex-col ">
            <h2 class="text-xl font-semibold flex items-center text-gray-900">
              <i class="fas fa-list text-blue-500 mr-2"></i>
              All Blog Posts by John Doe
            </h2>
            <div class="mt-4 h-64 overflow-auto border-t border-gray-300 w-full text-center" role="list">
              <!-- List of 10 Blog Post Items -->
              <article class="py-3 border-b border-gray-200">
                <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">How to Build a RESTful API with Node.js</a>
                <p class="text-gray-600 text-sm">Published on Oct 20, 2024</p>
              </article>
              <hr>
              <hr>
              
              <article class="py-3 border-b border-gray-200">
                <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">CSS Grid vs. Flexbox: When to Use Each</a>
                <p class="text-gray-600 text-sm">Published on Sep 15, 2024</p>
              </article>
              <hr>
              <article class="py-3 border-b border-gray-200">
                <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">Understanding Promises in JavaScript</a>
                <p class="text-gray-600 text-sm">Published on Aug 5, 2024</p>
              </article>
              <hr>
              <article class="py-3 border-b border-gray-200">
                <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">Best Practices for Writing Clean Code</a>
                <p class="text-gray-600 text-sm">Published on Jul 25, 2024</p>
              </article>
              <hr>
              <article class="py-3 border-b border-gray-200">
                <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">Deploying Applications with Docker</a>
                <p class="text-gray-600 text-sm">Published on Jun 15, 2024</p>
              </article>
              <hr>
              <article class="py-3 border-b border-gray-200">
                <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">React Hooks: A Comprehensive Guide</a>
                <p class="text-gray-600 text-sm">Published on May 10, 2024</p>
              </article>
              <hr>
              <article class="py-3 border-b border-gray-200">
                <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">Building a Chat App with WebSockets</a>
                <p class="text-gray-600 text-sm">Published on Apr 22, 2024</p>
              </article>
              <hr>
              <article class="py-3 border-b border-gray-200">
                <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">The Basics of TypeScript</a>
                <p class="text-gray-600 text-sm">Published on Mar 30, 2024</p>
              </article>
              <hr>
              <article class="py-3 border-b border-gray-200">
                <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">Node.js Event Loop Explained</a>
                <p class="text-gray-600 text-sm">Published on Feb 18, 2024</p>
              </article>
              <hr>
              <article class="py-3 border-b border-gray-200">
                <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">Creating Animations with CSS</a>
                <p class="text-gray-600 text-sm">Published on Jan 5, 2024</p>
              </article>
              <hr>
            </div>
          </div>
        </div>
      </div>
      



    
    <footer class="py-4 relative top-[90em] h-[110em] md:h-[20em] w-full ">
        <x-footer/> </footer>
<script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
<script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
<script type="module" src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
