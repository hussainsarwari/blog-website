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
    <meta name="robots" content="index, follow">


    @vite(['resources/css/app.css'])
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
    {{-- @vite(['resources/css/templatemo-art-factory.css']) --}}
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
        class="rounded-full w-[8em] h-8em md:w-[30em] md:h-[30em] bg-yellow-300 absolute top-[60em] md:top-[50em] left-0 md:left-10 shadow-2xl shadow-yellow-500 box1">
    </div>

    {{-- main section --}}
    <div class="relative w-full h-screen mb-20 ">
        <div
            class="w-[55em] h-[55em] lg:w-[80em] lg:h-[80em] bg-blue-500 shadow-2xl shadow-blue-600 absolute top-[-18em] right-[5em] rounded-full ">
        </div>
        <div class="w-full flex-row  flex justify-center absolute  top-[6em] text-white">


            <h1 class="w-full  flex justify-center absolute  text-sm lg:text-3xl top-16 lg:top-[6em] text-white">Create
                your CV just in one minute</h1>
            <form action="" method="post"
                class=" overflow-x-hidden flex flex-col justify-center mx-5 search bg-slate-50 shadow-2xl shadow-slate-500 rounded-lg py-5 p-4 z-50 w-[30em] md:w-[50em] relative top-[20em] cv-generator">
                @csrf
                <p class="my-3 font-sans text-sm font-bold text-center text-gray-400 md:text-lg">personal
                    information(Required)
                    <hr>
                </p>

                <input
                    class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                    placeholder="name" type="text" name="name" required id="name"><span
                    class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>

                <input
                    class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                    placeholder="Last name" type="text" name="lastname" required id="lastname"><span
                    class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                <input
                    class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                    placeholder="Email" type="email" name="email" required id="email"><span
                    class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                <input
                    class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                    placeholder="Phone number" type="number" name="phone_number" required id="phone_number"><span
                    class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                <input
                    class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                    placeholder="Github" type="text" name="github" id="github">
                <input
                    class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                    placeholder="website" type="text" name="website" id="website">
                <input
                    class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                    placeholder=" Title" type="text" name="title" required id="title"><span
                    class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                {{-- education  --}}
                <div class="education">

                    <p class="my-3 font-sans text-sm font-bold text-center text-gray-400 md:text-lg">Education
                        Section(Required)
                        <hr>
                    </p>
                    <input
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="educational background" type="text" name="education" required
                        id="education"><span class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                    <input
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="educational background start date" type="date" name="educational_start"
                        required id="educational_start"><span
                        class="text-red-400 relative bottom-[2.2em] left-[44.5em]">*</span>
                    <input
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="educational background end date" type="date" name="education_end"
                        id="education_end">
                    <label for="education_date" class="text-black">It is going on:
                        <input class="w-10 border border-blue-300 border-spacing-1" type="checkbox"
                            name="education_date" id="education_date">
                    </label>
                </div>
                <button type="button"
                    class="hidden p-2 my-2 text-black border-2 border-red-400 rounded-lg remove_edu focus:outline-none hover:bg-red-400 hover:text-white">Remove</button>
                <button type="button"
                    class="p-2 my-2 bg-blue-400 rounded-lg add_edu focus:outline-none hover:bg-blue-700 hover:text-white">Add
                    new educational background</button>
                {{-- Certificates  --}}
                <div class="certificate">

                    <p class="my-3 font-sans text-sm font-bold text-center text-gray-400 md:text-lg">Certificates
                        Section (Optional)
                        <hr>
                    </p>
                    <input
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="Certificate Title" type="text" name="certificate" id="certificate">
                    <input
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="More information" type="text" name="certificate_information"
                        id="certificate_information">
                </div>
                <button type="button"
                    class="hidden p-2 my-2 text-black border-2 border-red-400 rounded-lg focus:outline-none hover:bg-red-400 hover:text-white btn_remove_certificate">Remove</button>

                <button type="button"
                    class="p-2 my-2 bg-blue-400 rounded-lg focus:outline-none hover:bg-blue-700 hover:text-white btn_add_certificate">Add
                    new Certificate</button>
                {{-- experince  --}}
                <div class="exeprince">

                    <p class="my-3 font-sans text-sm font-bold text-center text-gray-400 md:text-lg">Experince
                        Section(Required)
                        <hr>/p>
                        <input
                            class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                            required placeholder="work experince" type="text" name="experince"
                            id="experince"><span class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                        <input
                            class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                            required placeholder="Description" type="text" name="experince_description"
                            id="experince_description"><span
                            class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                        <input
                            class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                            required placeholder="work experince start date" type="date" name="experince_start"
                            id="experince_start"><span
                            class="text-red-400 relative bottom-[2.2em] left-[44.5em]">*</span>
                        <input
                            class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                            required placeholder="work experince end date" type="date" name="experince_end"
                            id="experince_end">
                        <label for="experince_date" class="text-black">Or It is going on:
                            <input class="w-5 " type="checkbox" name="experince date" id="experince_date">
                        </label>
                </div>
                <button type="button"
                    class="hidden p-2 my-2 text-black border-2 border-red-400 rounded-lg focus:outline-none hover:bg-red-400 hover:text-white btn_remove_exeprince">Remove</button>

                <button type="button"
                    class="p-2 my-2 bg-blue-400 rounded-lg focus:outline-none hover:bg-blue-700 hover:text-white btn_add_exeprince">Add
                    new Exeprince</button>

                {{-- languages --}}
                <p class="my-3 font-sans text-sm font-bold text-center text-gray-400 md:text-lg">Language
                    Section(Required)
                    <hr>
                </p>
                <div class="language">
                    <input type="text"
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="Language" required name="language" id="language"><span
                        class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                    <input type="text"
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="Writting" required name="language_writting" id="language_writing"><span
                        class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                    <input type="text"
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="Speaking" required name="language_speaking" id="language_speaking"><span
                        class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                    <input type="text"
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="Listning" required name="language_listning" id="language_listning"><span
                        class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                </div>
                <button type="button"
                    class="hidden p-2 my-2 text-black border-2 border-red-400 rounded-lg focus:outline-none hover:bg-red-400 hover:text-white btn_remove_language">Remove</button>

                <button type="button"
                    class="p-2 my-2 bg-blue-400 rounded-lg focus:outline-none hover:bg-blue-700 hover:text-white btn_add_language">Add
                    new language</button>

                {{-- skills --}}
                <p class="my-3 font-sans text-sm font-bold text-center text-gray-400 md:text-lg">Skill
                    Section(Required)
                    <hr>
                </p>
                <div class="skill">
                    <input type="text"
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="write your skill" required name="skill" id="skill"><span
                        class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                    <input type="number"
                        class=" my-2 w-full h-[3em] text-sm md:text-md border-b-2 border-b-gray-500 focus:bg-blue-100   p-2 focus:outline-none text-black"
                        placeholder="How many percent do you know? (1-100)" required name="skill_value"
                        id="skill_value"><span class="text-red-400 relative bottom-[2.2em] left-[46em]">*</span>
                </div>
                <button type="button"
                    class="hidden p-2 my-2 text-black border-2 border-red-400 rounded-lg focus:outline-none hover:bg-red-400 hover:text-white btn_remove_skill">Remove</button>

                <button type="button"
                    class="p-2 my-2 bg-blue-400 rounded-lg focus:outline-none hover:bg-blue-700 hover:text-white btn_add_skill">Add
                    new skill</button>







                <button type="submit"
                    class="p-2 my-2 bg-blue-400 rounded-lg focus:outline-none hover:bg-blue-700 hover:text-white">
                    Create my CV
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

    <script type="module" src="{{ asset('js/cv.js') }}"></script>
</body>

</html>
