<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Analytics</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @vite(['resources/css/app.css'])
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
</head>

<body class="bg-gray-100 text-gray-800">

    <x-header/>
    <!-- Main Container -->
    <div class="container mx-auto px-4 py-40 ">
        <!-- Page Title -->
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-6">Visitor Analytics</h1>

        <!-- Blog Categories and Tools Line Chart -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4 text-center"> Visitor (Last 12 Months)</h2>
            <div id="visitor" class="w-full h-64"></div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4 text-center"> Tools (Last 12 Months)</h2>
            <div id="visitorChart" class="w-full h-64"></div>
        </div>


        <!-- Blog Categories and Tools Line Chart -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4 text-center"> Blog Categories (Last 12 Months)</h2>
            <div id="visitorblogChart" class="w-full h-64"></div>
        </div>


        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4 text-center">Top 10 Most Visited Blog Posts</h2>

            <ul class="space-y-4">
                <!-- Blog Post 1 -->
                @for ($i = 0; $i < 10; $i++)
                    <li class="flex items-center justify-between p-4 bg-gray-50 rounded-lg shadow-sm hover:bg-gray-100">
                        <div class="flex items-center">
                            <span class="text-xl font-medium text-blue-600">Technology / Learn Programming</span>
                        </div>
                        <div class="text-sm text-gray-500">120 Visits</div>
                    </li>
                @endfor

            </ul>
        </div>




        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4 text-center">Top 10 less Visited Blog Posts</h2>

            <ul class="space-y-4">
                <!-- Blog Post 1 -->
                @for ($i = 0; $i < 10; $i++)
                    <li class="flex items-center justify-between p-4 bg-gray-50 rounded-lg shadow-sm hover:bg-gray-100">
                        <div class="flex items-center">
                            <span class="text-xl font-medium text-blue-600">Technology / Learn Programming</span>
                        </div>
                        <div class="text-sm text-gray-500">120 Visits</div>
                    </li>
                @endfor

            </ul>
        </div>





        <!-- Visitor Activity Timeline -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col justify-center">
            <h2 class="text-2xl font-semibold mb-4 text-center">Visitor Activity Timeline</h2>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-4" id="openFilterDialog">Filter Blog
                Posts</button> 

            <div class="overflow-auto max-h-[30em]">
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-left">
                            <th class="border border-gray-300 px-4 py-2">IP Address</th>
                            <th class="border border-gray-300 px-4 py-2">Date</th>
                            <th class="border border-gray-300 px-4 py-2">Section</th>
                            <th class="border border-gray-300 px-4 py-2">Category/Tool</th>
                            <th class="border border-gray-300 px-4 py-2">Blog Post Title</th>
                            <th class="border border-gray-300 px-4 py-2">time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">192.168.1.1</td>
                            <td class="border border-gray-300 px-4 py-2">2024-11-19</td>
                            <td class="border border-gray-300 px-4 py-2">Blog</td>
                            <td class="border border-gray-300 px-4 py-2">Technology</td>
                            <td class="border border-gray-300 px-4 py-2">"Understanding AI in 2024"</td>
                            <td class="border border-gray-300 px-4 py-2"><span>120</span>sec</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">192.168.1.2</td>
                            <td class="border border-gray-300 px-4 py-2">2024-11-18</td>
                            <td class="border border-gray-300 px-4 py-2">Tool</td>
                            <td class="border border-gray-300 px-4 py-2">YouTube Video Downloader</td>
                            <td class="border border-gray-300 px-4 py-2">-</td>
                            <td class="border border-gray-300 px-4 py-2"><span>20</span>sec</td>
                        </tr>
                    </tbody>
                </table>
            </div>

    <!-- Filter Dialog Box -->
    <div id="filterDialog" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white rounded-lg w-96 p-6">
            <h2 class="text-2xl font-semibold mb-4">Filter Blog Posts</h2>
            
            <form action="#" method="GET">
                <!-- Category Filter -->
                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select id="category" name="category" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option value="">Select Category</option>
                        <option value="Technology">Technology</option>
                        <option value="Sport">Sport</option>
                        <option value="Lifestyle">Lifestyle</option>
                        <option value="Personal Development">Personal Development</option>
                        <option value="Islamic">Islamic</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Movies">Movies</option>
                        <option value="Food">Food</option>
                        <option value="Travel">Travel</option>
                        <option value="Business">Business</option>
                    </select>
                </div>

                <!-- Date Range Filter -->
                <div class="mb-4">
                    <label for="startDate" class="block text-sm font-medium text-gray-700">Start Date</label>
                    <input type="date"  id="startDate" name="startDate" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md mb-2">
                    <label for="endDate" class="block text-sm font-medium text-gray-700">End Date</label>
                    <input type="date"  id="endDate" name="endDate" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>

                <!-- Time Spent Filter -->
                <div class="mb-4">
                    <label for="timeSpent" class="block text-sm font-medium text-gray-700">Time Spent (minutes)</label>
                    <input type="number" id="minTime" name="minTime" placeholder="Min" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md mb-2">
                    <input type="number" id="maxTime" name="maxTime" placeholder="Max" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>

                <div class="flex justify-between mt-4">
                    <button type="button" id="closeFilterDialog" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Apply Filter</button>
                </div>
            </form>
        </div>
    </div>
        </div>
    </div>


    <script type="module" src="{{ asset('js/general_visit_js.js') }}"></script>

</body>

</html>
