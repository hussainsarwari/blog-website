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

    <x-header />





    <div class="main ">  	
            <input type="checkbox" id="chk" aria-hidden="true">
    
                <div class="login">
                    <form class="form">
                        <label for="chk" aria-hidden="true">Log in</label>
                        <input class="input" type="email" name="email" placeholder="Email" required="">
                        <input class="input" type="password" name="pswd" placeholder="Password" required="">
                        <button>Log in</button>
                    </form>
                </div>
    
          <div class="register">
                    <form class="form">
                        <label for="chk" aria-hidden="true" class="register_btn">Register</label>
                        <input class="input" type="text" name="txt" placeholder="Username" required="">
                        <input class="input" type="email" name="email" placeholder="Email" required="">
                        <input class="input" type="password" name="pswd" placeholder="Password" required="">
                        <button >Register</button>
                    </form>
                </div>
        </div>


    {{-- <div class="flex justify-center min-h-screen items-center bg-gray-50 text-blue-400">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-center mb-6">Register</h2>

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <!-- Step 1: Ask User Type (Author or Reader) -->
                <div class="mb-6 user_type">
                    <label for="user_type" class="block text-sm font-medium text-gray-700 text-center my-10">What would
                        you like to register as?</label>
                    <div class="mt-2 flex justify-around">
                        <button name="writer" type="button" id="author_btn"
                            class="px-4 p-2 bg-blue-500 text-white rounded-sm hover:bg-blue-600">blog writter</button>
                        <button name="reader" type="button" id="reader_btn"
                            class="px-4 p-2 bg-blue-700 text-white rounded-sm hover:bg-blue-600">Reader</button>
                    </div>

                    <!-- Author Section -->
                    <div id="author_section" class="hidden mb-6">
                        <label for="category" class="block text-sm font-medium text-gray-700 my-5 text-center">Choose
                            Blog Category</label>
                        <select id="category" name="category" class="mt-2 block w-full p-3 bg-gray-100 rounded-md">
                            <option value="technology">Technology</option>
                            <option value="fashion">Fashion</option>
                            <option value="lifestyle">Lifestyle</option>
                            <option value="sports">Sports</option>
                            <option value="sports">Islamic</option>
                            <option value="Business">Business</option>
                            <option value="travel">Travel</option>
                            <option value="personal_development">personal development</option>
                            <option value="movie">Movie</option>
                            <option value="food">Food</option>
                        </select>
                    </div>

                    <!-- Reader Section -->
                    <div id="reader_section" class="hidden mb-6">
                        <label for="read_categories"
                            class="block text-center text-sm font-medium text-gray-700 my-5">Choose Categories to
                            Follow</label>
                        <div class="mb-6 ">
                            <div class="flex flex-wrap gap-2">

                                <button name="Business" type="button" onclick="toggleTag(this)"
                                    class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                                    Business
                                </button>
                                <button name="travel" type="button" onclick="toggleTag(this)"
                                    class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                                    Travel
                                </button>
                                <button name="technology" type="button" onclick="toggleTag(this)"
                                    class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                                    Technology
                                </button>
                                <button name="food" type="button" onclick="toggleTag(this)"
                                    class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                                    Food
                                </button>
                                <button name="lifestyle" type="button" onclick="toggleTag(this)"
                                    class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                                    Lifestyle
                                </button>
                                <button name="personal_development" type="button" onclick="toggleTag(this)"
                                    class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                                    Personal Development
                                </button>
                                <button name="islamic" type="button" onclick="toggleTag(this)"
                                    class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                                    Islamic
                                </button>
                                <button name="movie" type="button" onclick="toggleTag(this)"
                                    class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                                    Movie
                                </button>
                                <button name="fashion" type="button" onclick="toggleTag(this)"
                                    class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                                    Fashion
                                </button>
                                <button name="sport" type="button" onclick="toggleTag(this)"
                                    class="px-4 py-2 text-gray-700 transition-all duration-300 bg-gray-200 rounded-full hover:bg-blue-500 hover:text-white">
                                    Sport
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="next bg-blue-500 hover:bg-blue-700 p-3 rounded-md shadow-md text-white w-full ">Next</button>

                <!-- Common Form Fields -->
                <div class="hidden common_fields">
                    {{-- <p class="text-center my-4">Last step</p>

                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" placeholder="name" name="name" class="mt-2 block w-full p-3 bg-gray-100 rounded-md" required>
                    </div>
                    
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" placeholder="Email"  id="email" name="email" class="mt-2 block w-full p-3 bg-gray-100 rounded-md" required>
                </div>
    
                <div class="mb-6">
                    <label for="password"  class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" placeholder="Password" id="password" name="password" class="mt-2 block w-full p-3 bg-gray-100 rounded-md" required>
                </div>
                
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" placeholder="Confirm your password" id="password_confirmation" name="password_confirmation" class="mt-2 block w-full p-3 bg-gray-100 rounded-md" required>
                </div>
                <div class="flex justify-between">

                    <button type="submit" class="m-3 w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600 transition duration-300">Register</button>
                    <button type="button" class="back m-3 w-full border border-blue-500 text-blue-400 p-3 rounded-md hover:bg-blue-600 transition duration-300">Back</button>
                </div> 
                </div>
            </form>
        </div>
    </div> --}}


    <footer class="py-4 relative top-[110em]   w-full ">
        <x-footer />
    </footer>


    <style>
        /* From Uiverse.io by alexruix */
        .main {
            position: relative;
            display: flex;
            flex-direction: column;
            background-color: #240046;
            max-height: 420px;
            overflow: hidden;
            width: 500px;
            margin: auto;
            justify-content: center;
            top: 200px;
            border-radius: 12px;
            box-shadow: 7px 7px 10px 3px #24004628;
        }

        .register_btn{
            padding: 5px 10px;
            background: #333
        }
        
        .form {
            display: flex;
            flex-direction: column;
            gap: 14px;
            padding: 24px;
        }

        /*checkbox to switch from sign up to login*/
        #chk {
            display: none;
        }

        /*Login*/
        .login {
            position: relative;
            top: 120px;
            width: 100%;
           
            /* height: 800px; */
        }

        .login label {
            margin:15% 0 5%;
        }

        label {
            color: #fff;
            font-size: 2rem;
            justify-content: center;
            display: flex;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        .input {
            width: 100%;
            height: 40px;
            background: #e0dede;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 4px;
        }

        /*Register*/
        .register {
            
            background: #eee;
            border-radius: 60% / 10%;
            transform: translateY(30%);
            transition: .8s ease-in-out;
        }

        .register label {
            color: #573b8a;
            transform: scale(.6);
        }

        #chk:checked~.register {
            transform: translateY(-50%);
        }

        #chk:checked~.register label {
            transform: scale(1);
            margin: 10% 0 5%;
        }

        #chk:checked~.login label {
            transform: scale(.6);
            margin: 5% 0 5%;
        }

        /*Button*/
        .form button {
            width: 100%;
            height: 40px;
            margin: 12px auto 10%;
            color: #fff;
            background: #573b8a;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: .2s ease-in;
        }

        .form button:hover {
            background-color: #6d44b8;
        }
    </style>

    <script>
        let f=false;
     let b=document.querySelector(".register_btn")
     b.addEventListener('click',()=>{
            if (!f) {
                b.textContent='Login';
                f=true
            }else{
                b.textContent='Register';
                f=false

            }
        })
        // Handle the button click to toggle between Author and Reader sections
        document.getElementById('author_btn').addEventListener('click', function() {
            document.getElementById('author_section').classList.remove('hidden');
            document.getElementById('reader_section').classList.add('hidden');
        });
        document.querySelector('.next').addEventListener('click', function() {
            document.querySelector('.common_fields').classList.remove('hidden');
            document.querySelector('.user_type').classList.add('hidden');
            document.querySelector('.next').classList.add('hidden');
        });
        document.querySelector('.back').addEventListener('click', function() {
            document.querySelector('.common_fields').classList.add('hidden');
            document.querySelector('.user_type').classList.remove('hidden');
            document.querySelector('.next').classList.remove('hidden');
        });

        document.getElementById('reader_btn').addEventListener('click', function() {
            document.getElementById('reader_section').classList.remove('hidden');
            document.getElementById('author_section').classList.add('hidden');
        });

        function toggleTag(tag) {
            tag.classList.toggle('bg-blue-500');
            tag.classList.toggle('text-white');
            tag.classList.toggle('bg-gray-200');
            tag.classList.toggle('text-gray-700');
            tag.classList.toggle('active');
        }
    </script>





    <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
    <script type="module" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
