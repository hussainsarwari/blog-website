<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shared Blogs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container m-auto">

    
        <!-- Blog List Table -->
        <div class="overflow-x-auto shadow-xl  my-5 bg-white p-4">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">blog details</h1>
                <button 
                    onclick="openFilterDialog()"
                    class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Filter
                </button>
            </div>
            <table class="min-w-full bg-white border">
                <thead>
                    <tr>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">ID</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Title</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Author</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Category</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Keywords</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Length (words)</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Publish Date</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Edit Date</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">share</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Dislike</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">like</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Comments</th>
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">1</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Understanding Laravel Basics</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">John Doe</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Technology</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Laravel, PHP, Basics</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">1200</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">2024-01-15</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">2024-02-01</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">30</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">10</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">40</td>
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">15</td>
                        <td
                            class="px-2  py-2 border text-xs sm:text-sm w-[20em]  flex flex-col justify-center items-center md:flex-row">
                            <a href="/dashboard/show/1"
                                class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded text-xs sm:text-sm m-2">Show</a>
                            <a href="/dashboard/edit/1"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-2 py-1 rounded text-xs sm:text-sm m-2">Edit</a>
                            <a href="/dashboard/edit/1"
                                class="bg-red-500 hover:bg-yellow-600 text-white px-2 py-1 rounded text-xs sm:text-sm ">Delete</a>

                        </td>
                    </tr>
                    <!-- Add more static rows as needed -->
                </tbody>
            </table>
        </div>

    </div>
    <!-- Filter Dialog -->
    <div id="filterDialog" class="fixed   inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center overflow-scroll">
        <div class="bg-white top-3  max-w-lg p-6 my-7  rounded shadow-lg ">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Filter Shared Blogs</h2>
            <form id="filterForm" class="  rounded  ">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input 
                        type="text" 
                        id="title" 
                        class="w-full border border-gray-300 rounded p-2" 
                        placeholder="Enter blog title">
                </div>
                <!-- Author -->
                <div>
                    <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                    <input 
                        type="text" 
                        id="author" 
                        class="w-full border border-gray-300 rounded p-2" 
                        placeholder="Enter author name">
                </div>
                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select id="category" class="w-full border border-gray-300 rounded p-2">
                        <option value="">All Categories</option>
                        <option value="technology">Technology</option>
                        <option value="fashion">Fashion</option>
                        <option value="sports">Sports</option>
                        <option value="food">Food</option>
                        <option value="movies">Movies</option>
                        <option value="business">Business</option>
                    </select>
                </div>
                <!-- Keywords -->
                <div>
                    <label for="keywords" class="block text-sm font-medium text-gray-700">Keywords</label>
                    <input 
                        type="text" 
                        id="keywords" 
                        class="w-full border border-gray-300 rounded p-2" 
                        placeholder="Enter keywords (comma-separated)">
                </div>
                <!-- Length -->
                <div>
                    <label for="length" class="block text-sm font-medium text-gray-700">Length (words)</label>
                    <input 
                        type="number" 
                        id="length" 
                        class="w-full border border-gray-300 rounded p-2" 
                        placeholder="Enter minimum word count">
                </div>
                <!-- Publish Date -->
                <div>
                    <label for="publishDate" class="block text-sm font-medium text-gray-700">Publish Date</label>
                    <input 
                        type="date" 
                        id="publishDate" 
                        class="w-full border border-gray-300 rounded p-2">
                </div>
                <!-- Edit Date -->
                <div>
                    <label for="editDate" class="block text-sm font-medium text-gray-700">Edit Date</label>
                    <input 
                        type="date" 
                        id="editDate" 
                        class="w-full border border-gray-300 rounded p-2">
                </div>
                <!-- Share -->
                <div>
                    <input 
                    type="number" 
                    id="minshare" 
                    class="w-full my-3 border border-gray-300 rounded p-2" 
                    placeholder="Minimum share count">
                <input 
                    type="number" 
                    id="maxshare" 
                    class="w-full my-3 border border-gray-300 rounded p-2" 
                    placeholder="maximum share count">
                </div>
                <!-- Dislike -->
                <div>
                    <input 
                    type="number" 
                    id="mindislike" 
                    class="w-full my-3 border border-gray-300 rounded p-2" 
                    placeholder="Minimum dislike count">
                <input 
                    type="number" 
                    id="maxdislike" 
                    class="w-full my-3 border border-gray-300 rounded p-2" 
                    placeholder="maximum dislike count">
                </div>
                <!-- Like -->
                <div>
                    <input 
                    type="number" 
                    id="minlike" 
                    class="w-full my-3 border border-gray-300 rounded p-2" 
                    placeholder="Minimum like count">
                <input 
                    type="number" 
                    id="maxlike" 
                    class="w-full my-3 border border-gray-300 rounded p-2" 
                    placeholder="maximum like count">
                </div>
                <!-- Comments -->
                <div>
                    <input 
                        type="number" 
                        id="mincomments" 
                        class="w-full my-3 border border-gray-300 rounded p-2" 
                        placeholder="Minimum comments count">
                    <input 
                        type="number" 
                        id="maxcomments" 
                        class="w-full my-3 border border-gray-300 rounded p-2" 
                        placeholder="maximum comments count">
                </div>
                <!-- Action Buttons -->
                <div class="flex justify-end space-x-2">
                    <button 
                    type="button"
                    onclick="closeFilterDialog()" 
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Cancel
                </button>
                    <button 
                        type="reset" 
                        class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                        Reset
                    </button>
                    <button 
                        type="submit" 
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Apply Filters
                    </button>
                </div>
            </form>
           
        </div>
    </div>

    <script>
        // Open Filter Dialog
        function openFilterDialog() {
            document.getElementById('filterDialog').classList.remove('hidden');
        }

        // Close Filter Dialog
        function closeFilterDialog() {
            document.getElementById('filterDialog').classList.add('hidden');
        }

        // Apply Filter (Placeholder for actual filtering logic)
        function applyFilter() {
            const formData = new FormData(document.getElementById('filterForm'));
            const filterData = Object.fromEntries(formData.entries());
            alert(`Filters applied: ${JSON.stringify(filterData)}`);
            closeFilterDialog();
        }
    </script>
</body>
</html>
