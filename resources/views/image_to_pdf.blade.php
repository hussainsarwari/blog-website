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

   
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
       <meta name="robots" content="index, follow">
       <style>
     #imageContainer img.selected {
            border: 2px solid blue; 
        }
        .image-wrapper {
            position: relative;
            display: inline-block;
            width: 220px;
            height: 220px;
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid transparent;
            transition: 0.3s;
            cursor: pointer;
        }

        /* Highlight the selected image */
        .image-wrapper img.selected {
            border-color: #3498db;
        }

        /* Select Icon (Hidden by Default) */
        .select-icon {
            position: absolute;
            top: 5px;
            right: 5px;
            font-size: 20px;
            color: #0b9be4;
            /* background-color: rgba(0, 0, 0, 0.5); */
            border-radius: 50%;
            padding: 5px;
            display: none;
        }

        /* Show the icon when image is selected */
        .image-wrapper img.selected + .select-icon {
            display: block;
        }

      

        #deleteBtn:disabled {
            cursor: not-allowed;
        }
</style>
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
    <div class="relative w-full h-screen mb-20 " >
        <div class=" w-[55em] h-[55em] lg:w-[80em] lg:h-[80em] bg-blue-500 shadow-md absolute top-[-18em] right-[-5em] rounded-full"></div>
        <div class="w-full flex-row  flex justify-center absolute  top-[6em] text-white">

            <h1 class="w-full  flex justify-center absolute  text-sm lg:text-3xl top-16 lg:top-[6em] text-white"><strong class="inline"> JPG to PDF </strong></h1>
             <p class="w-full  flex justify-center absolute  text-[0.87rem] md:text-md p-2 text-center top-24 lg:top-[17em] text-white">
                 Convert  images to PDF in seconds.
                </p>
            <form action="" method="post" class="flex flex-row mx-5 search">
                    @csrf
                    <label
                    class="relative top-[10em] lg:top-[20em] inline-block cursor-pointer bg-white text-primary font-medium py-2 px-4 border border-blue-500 rounded-lg shadow-sm  transition duration-300 ease-in-out">
                    <span class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>
                        Select Image
                    </span>
                    <input type="file" id="image-to-pdf" class="absolute inset-0 opacity-0 cursor-pointer" multiple>
                </label>
                <span id="errorMessage" class="text-red-300 absolute top-[14em] md:top-[12em] lg:top-[23.5em] hidden">Please choose image (jpg, jpeg, png) </span>
                <span id="successMessage" class="text-green-300 absolute top-[14em] md:top-[12em] lg:top-[23.5em] hidden">File added succesfully </span>
          
            </form>
        </div>


        {{-- open image for generate pdf --}}
        <div class=" grid-cols-12 grid-rows-12  w-full h-[100vh]  fixed top-0 z-[200] convert_box  hidden">
          
         
            <div class="grid grid-cols-1 col-span-12 h-[100%] row-span-12 bg-slate-100 grid-rows-12">
                <span class="editor_section font-bold  row-span-1 z-[200] bg-white shadow-lg  justify-evenly items-center  w-full hidden md:flex ">
                  
                 
             
                    </span>
                    
                        <div id="imageContainer" style="width: 100%;height: 100%;top: 0em;" class="flex flex-col items-center justify-center overflow-y-scroll align-middle row-span-10">
                        </div>
        
                    
                    <div class="buttons  col-span-1 row-span-12 p-3 flex items-center justify-evenly bg-white shadow-lg z-[200]" >
                        <button class="focus:outline-none text-[12px] md:text-md border-2  text-blue-400 md:mr-2 border-blue-400 py-[.8em] h-[3em] md:py-1 px-[.8em]  md:px-[6em] rounded-md close_box_btn">Cancel</button>
                        <button id="deleteBtn" class="focus:outline-none text-[12px] md:text-md border-2  text-red-400 md:mr-2 border-red-400 py-[.8em] h-[3em] md:py-1 px-[.8em]  md:px-[6em] rounded-md delete_box_btn" title="Select the image for delete" disabled>Delete</button>
                        <button class="focus:outline-none text-[12px] md:text-md previos_page bg-blue-400 text-white py-[.8em] h-[3em] md:py-1 px-[.8em]  md:px-[6em] rounded-md  add_new_img_btn">Add Image <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="inline w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg></button>
       
                        <button class="focus:outline-none text-[12px] md:text-md bg-blue-400 text-white py-[.8em] h-[3em] md:py-1 px-[.8em]  md:px-[6em] rounded-md convert_to_pdf_btn ">convert to PDF</button>
                    </div>
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

<script type="module" src="{{asset('js/img_to_pdf.js')}}"></script>


</body>
</html>