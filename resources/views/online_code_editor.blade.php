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
   <link rel="shortcut icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon"> <!-- Optional for older browsers -->

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



    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
    {{-- @vite(['resources/css/templatemo-art-factory.css']) --}}
    @vite(['resources/css/app.css'])
    {{-- @vite(['resources/css/style.css']) --}}
    @vite(['resources/css/animations.css'])
  
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
     <div
        class="rounded-full w-[8em] h-[8em] md:w-[30em] md:h-[30em] bg-yellow-300 absolute top-[60em] md:top-[50em] left-0 md:left-10 shadow-2xl shadow-yellow-500 box1">
    </div>

    {{-- main section --}}
    <div class="relative w-full h-screen mb-20 ">
        <div
            class="w-[55em] h-[85em] lg:w-[80em] lg:h-[80em] bg-blue-500 shadow-2xl shadow-blue-600 absolute top-[-18em] right-0 lg:right-[5em] rounded-full ">
        </div>
        <div class="w-full flex-row  flex justify-center absolute  top-[6em] text-white">


            <h1 class="w-full  flex justify-center absolute  text-sm lg:text-3xl top-16 lg:top-[6em] text-white">Online code editor</h1>
            <form action="" method="post"
                class="text-black overflow-x-hidden flex flex-col justify-center mx-5  bg-slate-50 shadow-2xl shadow-slate-500 rounded-lg py-5 p-4 z-50 w-fit relative top-[10rem] lg:top-[20em] online_code_editor">
                @csrf
                <div class="flex flex-col justify-between mb-2 md:flex-row header">
                    <span class="flex flex-col justify-center w-full my-3 text-sm text-center lg:text-md">
                      <span class="text-sm lg:text-[1.7em] font-bold ">Code Editro </span>
                    <p class="py-[1em]">
                        Select your programming language:
                        </p>
                      <select  class="text-center text-black border-2 border-blue-300 rounded-lg  h-[2em]" name="programming_language" id="programming_language">
                        <option value="java">java</option>
                        <option value="javascript">javascript</option>
                        <option value="C++">C++</option>
                        <option value="python">python</option>
                        <option value="php">php</option>
                        <option value="C#">C#</option>
                    </select>
                </span>
                </div>
                <hr>
                <div class="grid grid-cols-6 gap-6 lg:grid-cols-12">
                    <code class="col-span-6 text-black ">
                        <textarea name="code_editor" id="code_editor" class="p-2 resize-none focus:outline-none" required placeholder="Write your code here" cols="60" rows="20"></textarea>
                    </code>
                    <div class="result  h-[30em] col-span-6 bg-white ml-2 p-2 flex flex-col justify-center">
                        <div class="text-center result-header">Result <hr></div>
                        <div class="resutl-content h-[25em] w-full">
                            

                        </div>
                          <button type="submit"
                    class="p-2 my-3 text-black border-2 border-blue-400 rounded-lg focus:outline-none hover:bg-blue-700 hover:text-white">
                    Copy
                </button>
                    </div>
                </div>
                    
                <button type="button"
                    class="p-2 my-3 text-white bg-blue-400 rounded-lg focus:outline-none hover:bg-blue-700">
                    Run
                </button>
            </form>
        </div>

    </div>



    {{-- footer section --}}


    <footer class="py-4 relative top-[100em] h-[130em] md:h-[70em] w-full ">
        <x-footer/> 
    </footer>
    <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
    <script type="module" src="{{ asset('js/custom.js') }}"></script>


</body>

</html>
