<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Title - My Blog</title>
    <style>
        /* Basic styles for the page */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        /* Parallax section */
        .parallax {
            height: 50vh; /* Height for parallax effect */
            background-attachment: fixed; /* Create parallax effect */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Content styling */
        .content {
            padding: 20px;
            color: #333;
            max-width: 800px; /* Limit width of the content */
            margin: 0 auto; /* Center the content */
        }

        h1, h2, h3 {
            color: #333;
        }

        /* Sidebar styling */
        .sidebar {
            width: 300px; /* Fixed width for sidebar */
            padding: 20px;
            background-color: #f4f4f4;
            border-left: 1px solid #ddd; /* Separator between content and sidebar */
            float: right; /* Float to the right */
            margin-top: -20px; /* Overlap with content */
        }

        /* Clearfix for floated elements */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Comments section styling */
        .comments {
            margin-top: 40px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }

        /* Button styling */
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff4081;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #e91e63; /* Darker shade on hover */
        }

        /* Scroll-to-top button styling */
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none; /* Initially hidden */
            padding: 10px;
            background-color: #ff4081;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .scroll-to-top:hover {
            background-color: #e91e63; /* Darker shade on hover */
        }
    </style>
</head>
<body>

<!-- First Parallax Section -->
<div class="parallax" style="background-image: url('{{ asset('images/welcome.jpg') }}');"></div>

<!-- Blog Content -->
<div class="content clearfix">
    <h1>Blog Post Title</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel egestas nisi, eu pulvinar erat.</p>
    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed sodales, nulla eget laoreet suscipit, nisi libero viverra erat, ut finibus lacus nulla ac justo.</p>
    <h2>Subheading</h2>
    <p>Donec at diam vel augue tincidunt vehicula. Suspendisse potenti. Nunc a diam eu nulla hendrerit laoreet vel id sem.</p>
    
    <div class="comments">
        <h3>Comments</h3>
        <p>No comments yet. Be the first to comment!</p>
        <!-- You can add a comment form here -->
    </div>
</div>

<!-- Sidebar -->
<div class="sidebar">
    <h3>Table of Contents</h3>
    <ul>
        <li><a href="#subheading">Subheading</a></li>
        <li><a href="#related-posts">Related Posts</a></li>
        <li><a href="#comments">Comments</a></li>
    </ul>

    <h3>Related Posts</h3>
    <ul id="related-posts">
        <li><a href="#">Related Post 1</a></li>
        <li><a href="#">Related Post 2</a></li>
        <li><a href="#">Related Post 3</a></li>
    </ul>
</div>

<!-- Second Parallax Section -->
<div class="parallax" style="background-image: url('{{ asset('images/test.jpg') }}');"></div>

<!-- Scroll-to-Top Button -->
<button id="scrollToTop" class="scroll-to-top">↑</button>

<script>
    // Smooth scrolling to anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Scroll-to-Top Button Functionality
    const scrollToTopButton = document.getElementById('scrollToTop');

    window.onscroll = function() {
        // Show button when scrolled down 200px
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollToTopButton.style.display = 'block';
        } else {
            scrollToTopButton.style.display = 'none';
        }
    };

    // Scroll to top function
    scrollToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Smooth scroll to top
        });
    });
</script>

</body>
</html>
