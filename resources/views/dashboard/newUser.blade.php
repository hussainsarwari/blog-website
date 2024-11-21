<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Registered Users</h1>
            <button 
                onclick="openFilterDialog()" 
                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Filter
            </button>
        </div>
       
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-center text-sm font-medium text-gray-700">ID</th>
                        <th class="px-4 py-2 text-center text-sm font-medium text-gray-700">Name</th>
                        <th class="px-4 py-2 text-center text-sm font-medium text-gray-700">Email</th>
                        <th class="px-4 py-2 text-center text-sm font-medium text-gray-700">Blogs / Tools</th>
                        <th class="px-4 py-2 text-center text-sm font-medium text-gray-700">Categories</th>
                        <th class="px-4 py-2 text-center text-sm font-medium text-gray-700">title</th>
                        <th class="px-4 py-2 text-center text-sm font-medium text-gray-700">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Static Row 1 -->
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-4 py-2 text-center text-sm text-gray-800">1</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">John Doe</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">john.doe@example.com</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">YouTube Downloader</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">-</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">-</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">2024-11-18</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-4 py-2 text-center text-sm text-gray-800">2</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">John Doe</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">john.doe@example.com</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">blog</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">sport</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">title</td>
                        <td class="px-4 py-2 text-center text-sm text-gray-800">2024-11-18</td>
                    </tr>
                  
                    <!-- Add More Rows as Needed -->
                </tbody>
            </table>
        </div>

    <!-- Filter Dialog -->
    <div id="filterDialog" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-white w-11/12 max-w-lg p-6 rounded shadow-lg">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Filter Users</h2>
            <form id="filterForm" class="space-y-4">
                <!-- Name -->
                <div>
                    <label for="filterName" class="block text-sm font-medium text-gray-700">Name</label>
                    <input 
                        type="text" 
                        id="filterName" 
                        class="w-full border border-gray-300 rounded p-2" 
                        placeholder="Enter name">
                </div>
                <!-- Email -->
                <div>
                    <label for="filterEmail" class="block text-sm font-medium text-gray-700">Email</label>
                    <input 
                        type="email" 
                        id="filterEmail" 
                        class="w-full border border-gray-300 rounded p-2" 
                        placeholder="Enter email">
                </div>
                <!-- Start Date -->
                <div>
                    <label for="filterStartDate" class="block text-sm font-medium text-gray-700">Start Date</label>
                    <input 
                        type="date" 
                        id="filterStartDate" 
                        class="w-full border border-gray-300 rounded p-2">
                </div>
                <!-- End Date -->
                <div>
                    <label for="filterEndDate" class="block text-sm font-medium text-gray-700">End Date</label>
                    <input 
                        type="date" 
                        id="filterEndDate" 
                        class="w-full border border-gray-300 rounded p-2">
                </div>
               
                <!-- Blogs / Tools -->
                <div>
                    <label for="filterBlogTool" class="block text-sm font-medium text-gray-700">Blogs / Tools</label>
                    <input 
                        type="text" 
                        id="filterBlogTool" 
                        class="w-full border border-gray-300 rounded p-2" 
                        placeholder="Enter blog or tool">
                </div>
                 <!-- Category -->
                 <div>
                    <label for="filterCategory" class="block text-sm font-medium text-gray-700">Category</label>
                   
                    <select id="filterCategory" class="w-full border border-gray-300 rounded p-2">
                        <option value="">All</option>
                        <option value="sport">Sport</option>
                        <option value="fashion">Fashion</option>
                        <option value="food">Food</option>
                        <option value="movie">Movie</option>
                        <option value="technology">Technology</option>
                        <option value="youtube-downloader">YouTube Downloader</option>
                        <option value="instagram-downloader">Instagram Downloader</option>
                        <option value="image-to-pdf">Image to PDF</option>
                    </select>
                </div>
            </form>
            <div class="flex justify-end space-x-2 mt-4">
                <button 
                    onclick="closeFilterDialog()" 
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Cancel
                </button>
                <button 
                    onclick="applyFilter()" 
                    class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Apply
                </button>
            </div>
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
