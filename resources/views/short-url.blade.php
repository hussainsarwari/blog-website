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
      <meta name="robots" content="index, follow">
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
    <div class="relative w-full h-screen mb-20 " >
        <div class="w-[55em] h-[55em] lg:w-[80em] lg:h-[80em] bg-blue-500 shadow-md absolute top-[-18em] right-[-5em] rounded-full"></div>
        <div class="w-full flex-row  flex justify-center absolute  top-[6em] text-white">

            <h1 class="w-full  flex justify-center absolute  text-sm lg:text-3xl top-16 lg:top-[6em] text-white">Shorten  a long link with just one click</h1>
            <form action="" method="post" class="flex flex-col justify-center mx-5 search">
                    @csrf
                <input class="p-3 shadow-md text-sm lg:text-md  w-[20em] lg:w-[50em] h-[3em] rounded-[30em] text-white bg-blue-400  outline-none focus:outline-none focus:bg-blue-400 placeholder:text-white relative top-[7em] lg:top-[21em] " placeholder="paste long link Example: https://long-url" type="text" name="short-url" required id="short-url">
                <button type="submit" class=" bg-slate-300 shadow-lg relative top-[14em] lg:top-[24em] p-2 rounded-lg text-black">
                Shorten URL
                </button>
            </form>
        </div>
        <div class="result w-[20em]  lg:w-[50em] bg-slate-100 shadow-lg rounded-xl flex justify-center flex-col p-3 relative m-auto top-[35em] lg:top-[40em] ">
            
          
            <p class="flex justify-between w-full">
                <span class="w-full text-sm font-bold text-center lg:text-3xl">Short URL</span>
          
            </p>
            <hr>
         
            <p class="flex justify-between w-full r">
                <span>it is short url</span>
                <button class="p-2 text-white bg-blue-500 rounded-md hover:bg-yellow-600 focus:outline-none">Copy</button>
            </p>
             
            
        
        
        </div>
    </div>


    {{-- footer section --}}


    <footer class="py-4 relative top-[100em] h-[130em] md:h-[70em] w-full ">
        <x-footer/> </footer>
<script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
<script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
<script type="module" src="{{ asset('js/custom.js') }}"></script>


</body>
</html>