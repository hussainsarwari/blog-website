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
    <!-- Tools Section -->
    <div class="container mx-auto p-6 mt-[9em]">
        <h1 class="text-3xl text-center font-bold text-teal-600 mb-8">Our Online Tools</h1>
<h2  class=" text-center  text-teal-600 mb-8">
    At [Your Website Name], we offer a variety of user-friendly online tools to simplify your tasks. From downloading videos and editing PDFs to generating CVs and creating short URLs, our tools are designed for efficiency and ease of use. Access them directly from your browser and complete your tasks quickly and effortlessly.
</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            <!-- Instagram Video Downloader -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fab fa-instagram text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Instagram Video Downloader</h3>
                <p class="text-gray-600 text-center mb-4">Download your favorite Instagram videos and reels with a single click. Our tool supports high-quality downloads, ensuring you can keep your favorite content without compromising quality.</p>
                <p class="text-gray-600 text-center">You can easily save Instagram videos in various formats and enjoy them offline anytime, anywhere.</p>
                <a      href="{{ url('online-tools/instagram-online-video-downloader') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- YouTube Video Downloader -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fab fa-youtube text-4xl text-red-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">YouTube Video Downloader</h3>
                <p class="text-gray-600 text-center mb-4">Our YouTube Video Downloader allows you to download high-quality YouTube videos in multiple resolutions. Save videos for offline viewing and enjoy them whenever you want.</p>
                <p class="text-gray-600 text-center">With this tool, you can quickly grab videos, playlists, and even entire channels in your preferred format.</p>
                <a     href="{{ url('online-tools/youtube-online-video-downloader') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- Short URL Generator -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-link text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Short URL Generator</h3>
                <p class="text-gray-600 text-center mb-4">Create clean, concise, and shareable short URLs for your website, blog, or any online resource. Shorten long URLs, making them easy to share via social media, email, or messaging apps.</p>
                <p class="text-gray-600 text-center">Our tool ensures your short URLs are easy to remember, look professional, and are optimized for better user engagement.</p>
                <a href="{{ url('online-tools/short-url') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- Paraphrase Tool -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-pen text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Paraphrase Tool</h3>
                <p class="text-gray-600 text-center mb-4">Need to rephrase a sentence or paragraph? Our Paraphrase Tool can help you rewrite any text, keeping its meaning intact while using different words and structures.</p>
                <p class="text-gray-600 text-center">Whether you’re a student, content writer, or blogger, this tool makes it easier to create unique, original content that suits your needs.</p>
                <a  href="{{ url('online-tools/Paraphrase') }}"  class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- CV Generator -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-id-card text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">CV Generator</h3>
                <p class="text-gray-600 text-center mb-4">Create a professional CV quickly and easily. Our tool allows you to generate a polished CV with pre-designed templates that highlight your skills and experience.</p>
                <p class="text-gray-600 text-center">Perfect for job seekers, our CV Generator will help you make a lasting impression with a visually appealing and well-structured CV.</p>
                <a   href="{{ url('online-tools/CV-generator') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- Online Code Editor -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-code text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Online Code Editor</h3>
                <p class="text-gray-600 text-center mb-4">Write, test, and debug your code online without needing to set up any software. Our Online Code Editor supports multiple programming languages and provides real-time error checking.</p>
                <p class="text-gray-600 text-center">Ideal for developers and students alike, our editor helps you streamline your coding process with instant feedback and the ability to run code directly from your browser.</p>
                <a href="{{ url('online-tools/Online-code-editor') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- PDF Editor -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">PDF Editor</h3>
                <p class="text-gray-600 text-center mb-4">Edit, merge, split, and annotate PDF documents with our easy-to-use PDF editor. No need for expensive software – everything you need is available online.</p>
                <p class="text-gray-600 text-center">Whether you want to highlight important sections or add notes to your PDFs, our tool makes it simple to edit PDFs on the go.</p>
                <a  href="{{ url('online-tools/online-pdf-editor') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- PDF Compression -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-compress text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">PDF Compression</h3>
                <p class="text-gray-600 text-center mb-4">Reduce the size of your PDF files while maintaining quality. Our PDF compression tool is perfect for compressing large PDF documents for easier sharing and storage.</p>
                <p class="text-gray-600 text-center">Save space and time with optimized PDF files that are quicker to upload and download.</p>
                <a    href="{{ url('online-tools/online-pdf-compressor') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- PDF to Image -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-image text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">PDF to Image</h3>
                <p class="text-gray-600 text-center mb-4">Convert PDF pages into high-quality images. Ideal for presentations, social media, or sharing content as individual images.</p>
                <p class="text-gray-600 text-center">Our PDF to Image tool lets you convert your documents into easy-to-share visuals, all while maintaining excellent image resolution.</p>
                <a    href="{{ url('online-tools/pdf-to-image') }}" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- HTML To PDF -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-file-alt text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">HTML to PDF</h3>
                <p class="text-gray-600 text-center mb-4">Convert any HTML webpage into a PDF document that’s easy to share and print. Whether it’s a blog, report, or article, this tool gives you a clean and professional-looking PDF version of any webpage.</p>
                <p class="text-gray-600 text-center">Save content from the web as a PDF, preserving all formatting, images, and text in an easily portable format.</p>
                <a href="/tools/html-to-pdf" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- Image To PDF -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-file-image text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Image to PDF</h3>
                <p class="text-gray-600 text-center mb-4">Turn your images into PDF documents for easier sharing and printing. Whether you have a series of images or just one, this tool quickly converts them into a portable PDF.</p>
                <p class="text-gray-600 text-center">Perfect for converting image portfolios, scans, and any collection of photos into one easy-to-share document.</p>
                <a href="/tools/image-to-pdf" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- Image Compression -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-image text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Image Compression</h3>
                <p class="text-gray-600 text-center mb-4">Reduce the file size of your images while keeping their resolution intact. Perfect for web usage, sending by email, or uploading to social media.</p>
                <p class="text-gray-600 text-center">Compress multiple image files quickly and efficiently without losing quality, ensuring faster uploads and smoother web performance.</p>
                <a href="/tools/image-compression" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
            </div>

            <!-- Extract Text From Image -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-camera text-4xl text-teal-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Extract Text From Image</h3>
                <p class="text-gray-600 text-center mb-4">Convert text within images into editable text using optical character recognition (OCR). Whether it’s a scanned document or a photo with text, this tool extracts the text for you.</p>
                <p class="text-gray-600 text-center">Perfect for digitizing printed text from images or photos to make it easier to edit, store, or share.</p>
                <a href="/tools/extract-text-from-image" class="block mt-4 text-center text-teal-600 font-semibold hover:underline transition">Use Tool</a>
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
