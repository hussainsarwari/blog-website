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

            <h1 class="w-full  flex justify-center absolute  text-sm lg:text-3xl top-16 lg:top-[6em] text-white">Online PDF editor for free</h1>
            <form action="" method="post" class="flex flex-col justify-center mx-5 ">
                    @csrf

                    
                    <label class="relative top-[10em] lg:top-[20em] inline-block cursor-pointer bg-white text-primary font-medium py-2 px-4 border border-blue-500 rounded-lg shadow-sm  transition duration-300 ease-in-out">
                        <span class="flex items-center justify-center">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                          </svg>
                          Select PDF File
                        </span>
                        <input type="file" id="pdf" class="absolute inset-0 opacity-0 cursor-pointer">
                      </label>
                      <span id="errorMessage" class="text-red-300 absolute top-[14em] md:top-[12em] lg:top-[23.5em] hidden">Please choose pdf </span>
                      <span id="successMessage" class="text-green-300 absolute top-[14em] md:top-[12em] lg:top-[23.5em] hidden">File added succesfully </span>
                
            </form>
        </div>
        
<div class=" grid-cols-12 grid-rows-12  w-full h-full  fixed top-0 z-[200] editor_box hidden">
    <div class="col-span-12 row-span-1 bg-[#333]  py-3 font-bold text-sm md:text-lg  text-white flex items-center justify-between ">
        
       <span class="ml-2 text-sm md:text-lg w-[10em]">
           Online code Editor 
        </span>
        <form action="" method="post" class="flex-row hidden mx-5 search_word md:flex">
            @csrf
            <input class="p-1 mx-2 text-white border-b text-sm border-blue-500 outline-none bg-[#333] focus:outline-none focus:bg-[#3e3e3e] placeholder:text-white" placeholder="Search word or page" type="search" name="search" required id="search">
            <button type="submit">
                <svg class="mx-2 bi bi-search" fill="#fff" height="20" viewbox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path></svg>
                </button>
        </form>
        <a class='inline menu-trigger2 md:hidden'>
            <span>Menu</span>
        </a>
        
        </div>
 
    <div class="grid grid-cols-1 col-span-12 row-span-12 bg-slate-100 grid-rows-12">
        <span class="editor_section font-bold  row-span-1 z-[200] bg-white shadow-lg  justify-evenly items-center  w-full hidden md:flex ">
          
            <form action="" method="post" class="flex flex-row mx-5 search_word md:hidden">
                @csrf
                <input class="p-1 mx-2 text-[#333] border-b text-[.8em] border-blue-500 outline-none bg-white focus:outline-none focus:border-blue-600 placeholder:text-[#333]" placeholder="Search word or page" type="search" name="search" required id="search">
                <button type="submit">
                    <svg class="mx-2 bi bi-search" fill="#333" height="20" viewbox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path></svg>
                    </button>
            </form>
          
               
               <button class =" focus:outline-none hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400 " title="Add New Text">Text</button>
               <button class =" focus:outline-none hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400 " title="Add New Image">Image</button>
               <button class =" focus:outline-none hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400 " title="Add Highlight">Highlight</button>
               <button class =" focus:outline-none hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400 " title="Add Underline">Underline</button>
               <button class =" focus:outline-none hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400 " title="Add Comment">Comments</button>
               <button class =" focus:outline-none hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400 " title="Add Shape">Shapes</button>
               <div class="">
                <span class="z-[400]  text-[.8em] p-1 hover:text-blue-600 text-blue-400 cursor-pointer scroll-to-section peer " id="watermark"  style="  border: none; cursor: pointer;"    >Watermark</span>
                <!-- Dropdown menu -->
                <div class="fixed flex-col hidden p-4 mt-0 bg-white shadow-lg blog rounded-xl peer-hover:flex hover:flex h-fit z-[500]">
                    <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400">Add new WaterMark</button> 
                    <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400">Remove Watermark </button>
               </div>
            </div>
               <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400 " title="Add link">Links</button>
               <div class="">
                <span class="z-[400]  text-[.8em] p-1 hover:text-blue-600 text-blue-400 cursor-pointer scroll-to-section peer " id="form_feild"  style="  border: none; cursor: pointer;"    >Form feilds</span>
                <!-- Dropdown menu -->
                <div class="fixed flex-col hidden p-4 mt-0 bg-white shadow-lg blog rounded-xl peer-hover:flex hover:flex h-fit z-[500]">
                    <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400">Add Checkbox</button> 
                    <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400">Add Radio button </button>
                    <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400">Add List </button>
                    <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400">Add Date  </button>
                    <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400">Add Number </button>
                    <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400">Add Textarea </button>
               </div>
            </div>
               <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400 ">Delete</button>
               <button class=" focus:outline-none zoom-in-btn rounded-[1em]  border-2 border-blue-400 w-[2em] h-[2em] text-blue-400 ">+</button>
               <button class=" focus:outline-none zoom-out-btn rounded-[1em]  border-2 border-blue-400 w-[2em] h-[2em] text-blue-400">-</button>
               <button class=" focus:outline-none  hover:text-blue-600 w-fit text-[.8em] p-1 h-[2em] text-blue-400  editor-tools-close-btn ">Close</button>
         
        </span>
            
            <div class="relative col-span-1 m-auto overflow-hidden show_pdf row-span-10 ">
                <canvas id="pdf-canvas">

                </canvas>
                <canvas id="selection-canvas" style="width: 100%;height: 100%;position: absolute;top: 0em;">
                    
                </canvas>

            </div>
            
            <div class="buttons  col-span-1 row-span-12 p-3 flex items-center justify-evenly bg-white shadow-lg z-[200]" >
                <button class="focus:outline-none text-[12px] md:text-md border-2  text-blue-400 md:mr-2 border-blue-400 py-[.8em] h-[3em] md:py-1 px-[.8em]  md:px-[6em] rounded-md close-editor-btn">Cancel</button>
                <button class="focus:outline-none text-[12px] md:text-md previos_page bg-blue-400 text-white py-[.8em] h-[3em] md:py-1 px-[.8em]  md:px-[6em] rounded-md  ">previos page</button>
                <button class="focus:outline-none text-[12px] md:text-md next_page bg-blue-400 text-white py-[.8em] h-[3em] md:py-1 px-[.8em]  md:px-[6em] rounded-md  ">Next page</button>
                <button class="focus:outline-none text-[12px] md:text-md bg-blue-400 text-white py-[.8em] h-[3em] md:py-1 px-[.8em]  md:px-[6em] rounded-md  ">Save</button>
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
@vite(['resources/js/pdf_editor.js'])
</body>
</html>