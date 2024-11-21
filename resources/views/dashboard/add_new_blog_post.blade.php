<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   @vite(['resources/js/text_editor.js'])
   <!-- Include Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<style>
   
  /* General editor styling */
  #editor {
    min-height: 200px;
    border: 2px solid #e2e8f0; /* Light gray border */
    border-radius: 8px;
    padding: 16px;
    background-color: #ffffff;
  }

  /* Header styles */
  .ce-header {
    font-size: 2rem; /* Custom font size */
    font-weight: 700;
    color: #2d3748; /* Dark gray */
    margin-bottom: 1rem;
    border-bottom: 2px solid #e2e8f0; /* Subtle border below header */
    padding-bottom: 0.5rem;
    background: #1d75e9
  }

  /* Paragraph (Text block) styling */
  .ce-paragraph {
    font-size: 1.125rem; /* 18px */
    color: #4a5568; /* Gray */
    line-height: 1.8; /* Spacing between lines */
    margin-bottom: 1.5rem;
    padding: 0.5rem 0;
  }

  /* List styling */
  .ce-list {
    margin-left: 2rem;
    list-style: inside;
    margin-bottom: 1.5rem;
  }

  .ce-list li {
    font-size: 1.125rem;
    color: #4a5568;
    margin-bottom: 0.5rem;
  }

  /* Image block styling */
  .ce-image {
    max-width: 100%;
    border-radius: 8px;
    margin-bottom: 1.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Slight shadow for images */
  }

  /* Link styling inside Editor */
  .ce-link {
    color: #3182ce; /* Blue color */
    text-decoration: underline;
  }

  .ce-link:hover {
    color: #2b6cb0; /* Darker blue on hover */
  }

  /* Quote block styling */
  .ce-quote {
    font-size: 1.25rem;
    font-style: italic;
    color: #2d3748;
    border-left: 4px solid #3182ce;
    padding-left: 16px;
    margin-bottom: 1.5rem;
  }

  /* Code block styling */
  .ce-code {
    background-color: #f7fafc;
    padding: 16px;
    border-radius: 8px;
    font-family: 'Courier New', Courier, monospace;
    font-size: 1rem;
    color: #2d3748;
    margin-bottom: 1.5rem;
  }

  /* Inline toolbar for Editor.js */
  .codex-editor__redactor {
    padding: 0;
  }

  .codex-editor__toolbar {
    background-color: #edf2f7;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 8px;
  }

  /* Focused block styling */
  .ce-block:focus-within {
    border: 2px solid #3182ce; /* Blue border on focus */
    padding: 10px;
  }

  /* Block styles for inline elements (text and links) */
  .ce-inline {
    display: inline-block;
    margin: 0 4px;
  }

  .ce-inline:hover {
    color: #2b6cb0;
  }
  .ce-block{
    background: #e2e8f0;
  }
</style>

</style>
</head>
<body>




<div class="container mx-auto p-6 bg-gray-50 rounded-lg shadow-md">
    <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">Write a Blog Post</h2>
    
    <form>
      <!-- Title -->
      <div class="mb-6">
        <label for="title" class="block text-lg font-semibold text-gray-700">Title</label>
        <input type="text" id="title" class="w-full p-3 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the blog title">
        <p id="titleCount" class="text-sm text-gray-500 mt-1">Recommended: 60 characters max. This will be shown as the title of the blog post in search engines.</p>
        <p id="titleWarning" class="text-sm text-red-500 hidden">Title should be less than 60 characters.</p> 
    </div>
     <!-- Keywords -->
     <div class="mb-6">
        <label for="keywords" class="block text-lg font-semibold text-gray-700">Keywords</label>
        <div class="flex items-center gap-2">
          <input type="text" id="keyword-input" class="w-full p-3 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Add a keyword">
          <button type="button" id="add-keyword-btn" class="px-4 py-2 bg-green-500 text-white font-medium rounded-lg hover:bg-green-600">Add Keyword</button>
        </div>
        <p class="text-sm text-gray-500 mt-1">Separate keywords by commas. Example: "tech, programming, AI". Max 5 keywords.</p>
        <p id="keywordsWarning" class="text-sm text-red-500 hidden">Please enter no more than 5 keywords.</p>
  
        <div id="keyword-list" class="flex flex-wrap gap-2 mt-3"></div>
      </div>
      
      <!-- Description -->
      <div class="mb-6">
        <label for="description" class="block text-lg font-semibold text-gray-700">Description</label>
        <textarea id="description" rows="4" class="w-full p-3 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Write a brief description"></textarea>
        <p id="metaDescriptionCount" class="text-sm text-gray-500 mt-1">Recommended: 150-160 characters. This description will appear in search engine results.</p>
        <p id="metaDescriptionWarning" class="text-sm text-red-500 hidden">Meta description should be between 150 and 160 characters.</p>
  
    </div>
        <!-- Table of Contents -->
    <div class="mb-6">
        <label for="toc" class="block text-lg font-semibold text-gray-700">Table of Contents</label>
        
        <!-- Section Input -->
        <div class="flex justify-center items-center flex-col  gap-2 mb-4">
          <input type="text" id="toc-heading" class="w-full p-3 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Heading (e.g., Introduction)">
          <input type="text" id="toc-subheading" class="w-full p-3 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Subheading (optional)">
          <button type="button" id="add-toc-btn" class="px-4 w-full py-2 bg-green-500 text-white font-medium rounded-lg hover:bg-green-600">Add TOC</button>
        </div>
  
        <!-- Generated TOC list -->
        <div id="toc-output" class="bg-gray-100 p-4 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold text-gray-800">Generated TOC:</h3>
          <ul id="toc-list" class="list-disc pl-6 mt-2 text-gray-700">
            <!-- Generated TOC will appear here -->
          </ul>
        </div>
      </div>
      
      
      <!-- Text Editor -->
      <div class="mb-6">
        <label for="body" class="block text-lg font-semibold text-gray-700">Blog Content</label>
        <div id="editor" class="w-full border rounded-lg p-4 bg-white focus-within:ring-2 focus-within:ring-blue-500">
            <div class="editor bg-black"></div>
        </div>
        <p class="text-gray-600 text-sm mt-2">Tip: Use headings, links, images, and customize font size or color!</p>
      </div>

        <!-- Conclusion -->
        <div>
            <label for="conclusion" class="block text-lg font-semibold text-gray-700">Conclusion</label>
            <textarea id="conclusion" name="conclusion" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('conclusion') }}</textarea>
            <p class="text-sm text-gray-500 mt-1">Optional: Summarize your blog post or provide a call-to-action.</p>
        </div>
    <!-- Tags -->
    <div class="mb-6">
        <label for="tags" class="block text-lg font-semibold text-gray-700">Tags</label>
        <div class="flex items-center gap-2">
          <input type="text" id="tag-input" class="w-full p-3 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Add a tag">
          <button type="button" id="add-tag-btn" class="px-4 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600">Add Tag</button>
        </div>
        <div id="tag-list" class="flex flex-wrap gap-2 mt-3"></div>
      </div>
  
      
      <!-- Submit Button -->
      <div class="text-center flex flex-col">
        <button type="submit" class="w-full md:w-auto px-6 py-3 bg-blue-500 text-white font-bold rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500">
          Publish Blog
        </button>
        <br>
        <button class="w-full md:w-auto px-6 py-3 bg-blue-500 text-white font-bold rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500" type="button">save</button>
      </div>
    </form>
  </div>
  



  <script>


    // Title validation
    function validateTitle() {
        const title = document.getElementById('title').value;
        const titleCount = document.getElementById('titleCount');
        const titleWarning = document.getElementById('titleWarning');
        
        if (title.length > 60) {
            titleWarning.classList.remove('hidden');
            titleCount.classList.add('text-red-500');
        } else {
            titleWarning.classList.add('hidden');
            titleCount.classList.remove('text-red-500');
        }
    }

    // Meta Description validation
    function validateMetaDescription() {
        const metaDescription = document.getElementById('meta_description').value;
        const metaDescriptionCount = document.getElementById('metaDescriptionCount');
        const metaDescriptionWarning = document.getElementById('metaDescriptionWarning');

        if (metaDescription.length < 150 || metaDescription.length > 160) {
            metaDescriptionWarning.classList.remove('hidden');
            metaDescriptionCount.classList.add('text-red-500');
        } else {
            metaDescriptionWarning.classList.add('hidden');
            metaDescriptionCount.classList.remove('text-red-500');
        }
    }

    // Keywords validation (max 5)
    function validateKeywords() {
        const keywords = document.getElementById('keywords').value.split(',');
        const keywordsWarning = document.getElementById('keywordsWarning');

        if (keywords.length > 5) {
            keywordsWarning.classList.remove('hidden');
        } else {
            keywordsWarning.classList.add('hidden');
        }
    }

    // Tags validation (max 10)
    function validateTags() {
        const tags = document.getElementById('tags').value.split(',');
        const tagsWarning = document.getElementById('tagsWarning');

        if (tags.length > 10) {
            tagsWarning.classList.remove('hidden');
        } else {
            tagsWarning.classList.add('hidden');
        }
    }
  document.addEventListener('DOMContentLoaded', () => {
    const keywordInput = document.getElementById('keyword-input');
    const tagInput = document.getElementById('tag-input');
    const addKeywordBtn = document.getElementById('add-keyword-btn');
    const addTagBtn = document.getElementById('add-tag-btn');
    const keywordList = document.getElementById('keyword-list');
    const tagList = document.getElementById('tag-list');

    // Function to add keywords
    addKeywordBtn.addEventListener('click', function() {
      const keyword = keywordInput.value.trim();

      if (keyword) {
        // Create a keyword element
        const keywordItem = document.createElement('span');
        keywordItem.classList.add('bg-green-100', 'text-green-700', 'py-1', 'px-3', 'rounded-full', 'border', 'border-green-300', 'text-sm', 'font-semibold');
        keywordItem.textContent = keyword;

        // Append the keyword to the list
        keywordList.appendChild(keywordItem);

        // Clear the input after adding
        keywordInput.value = '';
      } else {
        alert('Please enter a keyword.');
      }
    });

    // Function to add tags
    addTagBtn.addEventListener('click', function() {
      const tag = tagInput.value.trim();

      if (tag) {
        // Create a tag element
        const tagItem = document.createElement('span');
        tagItem.classList.add('bg-blue-100', 'text-blue-700', 'py-1', 'px-3', 'rounded-full', 'border', 'border-blue-300', 'text-sm', 'font-semibold');
        tagItem.textContent = tag;

        // Append the tag to the list
        tagList.appendChild(tagItem);

        // Clear the input after adding
        tagInput.value = '';
      } else {
        alert('Please enter a tag.');
      }
    });
  });


     document.addEventListener('DOMContentLoaded', () => {
    const tocHeadingInput = document.getElementById('toc-heading');
    const tocSubheadingInput = document.getElementById('toc-subheading');
    const addTocBtn = document.getElementById('add-toc-btn');
    const tocList = document.getElementById('toc-list');

    // Function to add TOC item
    addTocBtn.addEventListener('click', function() {
      const heading = tocHeadingInput.value.trim();
      const subheading = tocSubheadingInput.value.trim();

      // Ensure heading is provided
      if (!heading) {
        alert("Please enter a heading.");
        return;
      }

      // Create the TOC entry
      const listItem = document.createElement('li');
      const link = document.createElement('a');
      link.href = `#${heading.toLowerCase().replace(/\s+/g, '-')}`; // Generate a link to the section
      link.textContent = heading;

      // If there's a subheading, add it as a nested list item
      if (subheading) {
        const nestedItem = document.createElement('ul');
        const nestedListItem = document.createElement('li');
        nestedListItem.textContent = subheading;
        nestedItem.appendChild(nestedListItem);
        listItem.appendChild(nestedItem);
      }

      listItem.prepend(link); // Prepend the link to the list item
      tocList.appendChild(listItem);

      // Clear inputs after adding the item
      tocHeadingInput.value = '';
      tocSubheadingInput.value = '';
    });
  });
  </script>
</body>
</html>
