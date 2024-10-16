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
  
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
    {{-- @vite(['resources/css/templatemo-art-factory.css']) --}}
    {{-- @vite(['resources/css/style.css']) --}}
    @vite(['resources/css/app.css'])
  
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

            <h1 class="w-full  flex justify-center absolute  text-sm lg:text-3xl top-16 lg:top-[6em] text-white">Convert PDf to image </h1>
            <form action=""  method="post" class="flex flex-col justify-center mx-5  ">
                    @csrf

                    
                    <label class="relative top-[10em] lg:top-[20em] inline-block cursor-pointer bg-white text-primary font-medium py-2 px-4 border border-blue-500 rounded-lg shadow-sm  transition duration-300 ease-in-out">
                        <span class="flex items-center justify-center">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                          </svg>
                          Select PDF File
                        </span>
                        <input type="file" id="" class="absolute inset-0 opacity-0 cursor-pointer pdf_to_img">
                      </label>
                      <span id="errorMessage" class="text-red-300 absolute top-[14em] md:top-[12em] lg:top-[23.5em] hidden">Please choose pdf </span>
                      <span id="successMessage" class="text-green-300 absolute top-[14em] md:top-[12em] lg:top-[23.5em] hidden">File added succesfully </span>
                
            </form>
        </div>
        
<div class=" grid-cols-12 grid-rows-12  w-full h-full  fixed top-0 z-[200] editor_box hidden">
    <div class="col-span-12 row-span-1 bg-[#333]  py-3 font-bold text-sm md:text-lg  text-white flex items-center justify-center ">
        
       <span class="ml-2 text-sm md:text-lg ">
           Convert PDF to image 
        </span>
       
        
        </div>
 
    <div class="grid grid-cols-1 col-span-12 row-span-12 bg-slate-100 grid-rows-12">
        <span class="editor_section font-bold  row-span-1 z-[200] bg-white shadow-lg  justify-evenly items-center  w-full hidden md:flex ">
           <select name="convert_to_img" id="convert_to_img" class="border-none  p-[1em] bg-slate-100 text-gray-600">
            <option value="all_pages">Convert All pages to images</option>
            <option value="specific_page">Choose a page for convert to image</option>
           </select>
           <input type="number" name="pdf_img" id="pdf_to_image_page_number" placeholder="Enter the page number for convert to image" class="border-none focus:outline-none border border-primary rounded-md p-[1em] hidden">
           
        </span>
            
            <div class="relative col-span-1 m-auto overflow-hidden show_pdf row-span-10 ">
                <canvas id="pdf-canvas">

                </canvas>
                <canvas id="selection-canvas" style="width: 100%;height: 100%;position: absolute;top: 0em;">
                    
                </canvas>

            </div>
            
            <div class="buttons  col-span-1 row-span-12 p-3 flex items-center justify-evenly bg-white shadow-lg z-[200]" >
                <button class="focus:outline-none text-[12px] md:text-md border-2  text-blue-400 md:mr-2 border-blue-400 py-[.8em] h-[3em] md:py-1 px-[.8em]  md:px-[6em] rounded-md close-editor-btn">Cancel</button>
                <button class="focus:outline-none text-[12px] md:text-md bg-blue-400 text-white py-[.8em] h-[3em] md:py-1 px-[.8em]  md:px-[6em] rounded-md  ">Convert</button>
            </div>
    </div>
    
  
</div>
    
    </div>




    {{-- footer section --}}


    <footer class="py-4 relative top-[100em] h-[130em] md:h-[70em] w-full ">
        <x-footer/>    
    </footer>
    <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
    <script type="module" src="{{ asset('js/custom.js') }}"></script>

    <script type="module" src="{{ asset('js/pdf_to_img.js') }}"></script>

</body>

</html>
