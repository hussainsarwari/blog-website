<div >
    <picture>
        <source srcset="{{ asset('images/banner-bg.svg') }}" media="(min-width: 1280px)">
        <source srcset="{{ asset('images/banner-bg.svg') }}" media="(min-width: 768px)">
        <img src="{{ asset('images/banner-bg.svg') }}" alt="footer-background-1"
            class="absolute bottom-[58em] lg:bottom-[15em]  left-0 w-full rotate-180 d-none d-sm-inline"
            width="300">
    </picture>
    <picture>
        <source srcset="{{ asset('images/banner-bg2.svg') }}" media="(min-width: 1280px)">
        <source srcset="{{ asset('images/banner-bg2.svg') }}" media="(min-width: 768px)">
        <img src="{{ asset('images/banner-bg2.svg') }}" alt="footer-background-2"
            class="absolute bottom-[55em] left-0 w-full d-sm-none footer-img" width="300">
    </picture>
    <div class="w-full h-[70em] absolute block bottom-[-4em] lg:hidden" id="xx"
        style="background: rgb(16 139 233);"></div>
    <div class="w-full h-[30em] absolute  bottom-[-4em] hidden lg:block" id="xx"
        style="background: rgb(16 139 233);"></div>
    <div class="absolute bottom-[-4em] left-0  w-[99%] px-5 text-white">
        <div class="py-4 row">
            <div class="mb-4 col-12 col-lg-3 mb-lg-0">
                <picture>
                    <source aria-label="logo image for large devices" srcset="{{ asset('images/logo.png') }}"
                        media="(min-width: 1280px)">
                    <source aria-label="logo image for small devices" srcset="{{ asset('images/logo.png') }}"
                        media="(min-width: 768px)">
                    <img aria-label="logo image for as defualt" src="{{ asset('images/logo.png') }}"
                        alt="logo" class="mb-3 img-fluid" width="300">
                </picture>


                <address aria-label="address" class="mb-1 text-sm text-white small lg:text-md">Mazar-e-sharif,
                    Afghanistan</address>

                <p aria-label="phone number" class="mb-1 text-sm text-white small lg:text-md">Tel:<a
                        title="phone number" href="tel:+93766805049"> +93
                        766805049</a></p>
                <p aria-label="email address" class="mb-0 small"><a title="email address"
                        class="text-sm text-white text-decoration-none lg:text-md"
                        href="{{ url('company-email') }}">s@solution.com</a></p>
            </div>
            <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                <h2 aria-label="blogs" class="text-sm lg:text-md">blogs</h2>
                <hr>
                <ul role="menu" class="list-unstyled">
                    <li role='menuitem' class="mb-0">
                        <a title='technology blog' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('blog/Technology') }}">Technology</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='sport blog' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('blog/sport') }}">Sport</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='lifestyle blog' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('blog/lifestyle') }}">Lifestyle</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='Personal Development blog' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('blog/Personal-Development') }}">Personal Development</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='islamic blog' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('blog/Islamic') }}">Islamic</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='fashion blog' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('blog/Fashion') }}">fashion</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='movies blog' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('blog/Movie') }}">Movies</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='food blog' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('blog/Food') }}">Food</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='travel blog' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('blog/Travel') }}">Travel</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='business blog' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('blog/Business') }}">Business</a>
                    </li>





                </ul>
            </div>
            <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                <h2 aria-label="online tools" class="text-sm lg:text-md">Tools</h2>
                <hr>
                <ul role="menu" class="list-unstyled">
                    <li role='menuitem' class="mb-0">

                        <a title='instagram downloader' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/instagram-online-video-downloader') }}">Instagram video
                            downloader</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='youtube downloader' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/youtube-online-video-downloader') }}">youtube video
                            downloader</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='short url generator' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/short-url') }}">Short URL</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='paraphrasor' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/Paraphrase') }}">Paraphrase</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='cv generator' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/CV-generator') }}">CV generator</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='online coding tool' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/Online-code-editor') }}">Online coding</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='pdf editor' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/online-pdf-editor') }}">PDF Editor</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='pdf compression' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/online-pdf-compressor') }}">PDF Compression</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='pdf merging' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/online-pdf-merging') }}">PDF merging</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='pdf splitting' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/online-pdf-splitting') }}">PDF Splitting</a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='pdf to image' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/pdf-to-image') }}">PDF to Image </a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='hmtl to pdf' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/html-to-pdf') }}">HTML To PDF </a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='image to pdf' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/image-to-pdf') }}">Image To PDF </a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='iamge convertor' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/online-Image-converter') }}">Image converter </a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='image compression' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/online-images-compression') }}">images Compression </a>
                    </li>
                    <li role='menuitem' class="mb-0">
                        <a title='extract text from image'
                            class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('online-tools/extract-text-from-image') }}">Extract Text From Image</a>
                    </li>

                </ul>
            </div>
            <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                <h2 class="text-sm lg:text-md">Quick Links</h2>
                <hr>
                <ul aria-label="queic links" role='menu' class="list-unstyled">
                    <li role='menuitem' class="mb-1">
                        <a title='aboute us' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('https://localhost:8000/#about-us') }}">About us</a>
                    </li>
                    <li role="menuitem" class="mb-1">
                        <a title='contact us' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('https://localhost:8000/#contacts') }}">Contacts</a>
                    </li>
                    <li role="menuitem" class="mb-1">
                        <a title='quest post' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('Guest-post') }}">Guest post</a>
                    </li>
                    <li role="menuitem" class="mb-1">
                        <a title='our privacy policy' class="text-sm text-white lg:text-md text-decoration-none"
                            href="{{ url('privacy-policy') }}">Privacy Policy</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-3">
                <div class="pt-4 border-top d-lg-none"></div>
                <h2 class="text-sm lg:text-md">Subscribe</h2>
                <div class="mb-2 input-group">
                    <form action="" aria-label="subscribe form">
                        @csrf
                        <input class="text-sm form-cont3ol bg-light lg:text-md" required name="email"
                            aria-label="email address" placeholder="Email " type="email">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </form>
                </div>
                <p class="mb-0 text-sm text-white small lg:text-md">Sign up for our newsletter to get the latest
                    updates on features and releases.</p>
                <p class="mb-0 text-sm text-white small lg:text-md">Created by: <a title="know more about me"
                        href="http://">Mohammad Hussain
                        "Sarvari"</a></p>
            </div>
        </div>
        <div class="py-3 d-lg-flex align-item-ceneter justify-content-between border-top py-lg-2 mt-lg-5">
            <div class="mb-2 text-sm text-white small mb-lg-0 lg:text-md">
                © Copyright 2024 Mohammad hussain "sarvari".
                <p class="text-sm text-white lg:text-md">thank <a title="icons8 website"
                        href="https://icons8.com/illustrations" class="text-white">icons8</a>'s designer for there
                    beautifull Illustrations.</p>

                <a title="privacy policy"
                    class="mb-2 text-sm text-white lg:text-md d-block d-lg-inline ms-lg-3 mb-lg-0"
                    href="">Privacy Policy</a>
                <a title="term of services"
                    class="mb-2 text-sm text-white lg:text-md d-block d-lg-inline ms-lg-3 mb-lg-0"
                    href="">Terms of Service</a>
            </div>

            <div class="flex">
                {{-- instagram --}}
                <a  class="ml-2 me-2" title="follow us on instagram"
                    aria-label="follow us on instagram" href="">
                    <svg class="bi bi-instagram" fill="#fff" height="16" viewbox="0 0 16 16"
                        width="16" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                        </path>
                    </svg>
                </a>
                {{-- x --}}
                <a title="follow us on twitter" aria-label="follow us on twitter" class="ml-2 me-2"
                    href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="16" width="16"
                        shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                        image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                        viewBox="0 0 512 462.799">
                        <path fill-rule="nonzero"
                            d="M403.229 0h78.506L310.219 196.04 512 462.799H354.002L230.261 301.007 88.669 462.799h-78.56l183.455-209.683L0 0h161.999l111.856 147.88L403.229 0zm-27.556 415.805h43.505L138.363 44.527h-46.68l283.99 371.278z" />
                    </svg>
                </a>
                {{-- facebook --}}
                <a class="ml-2 me-2" title="follow us on facebook" aria-label="follow us on facebook"
                    href="">
                    <svg class="bi bi-facebook text-primary" fill="#fff" height="16" viewbox="0 0 16 16"
                        width="16" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                        </path>
                    </svg></a>
            </div>
        </div>
    </div>

</div>