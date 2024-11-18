<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dashboard with ApexCharts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- ApexCharts CDN -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100">

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Enhanced Blog Dashboard</h1>

        <!-- Settings Button -->
        <div class="mb-6">
            <a href="/settings"
                class="inline-block bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded-md text-sm">Settings</a>
        </div>

        <!-- Chart Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <!-- General Visits -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">General Visits</h2>
                <div id="visitsChart"></div>
                <a href="/dashboard/visits/details"
                    class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                    Information</a>
            </div>

            <!-- Comments -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">Comments</h2>
                <div id="commentsChart"></div>
                <a href="/dashboard/comments/details"
                    class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                    Information</a>
            </div>

            <!-- Messages -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">Messages</h2>
                <div id="messagesChart"></div>
                <a href="/dashboard/messages/details"
                    class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                    Information</a>
            </div>

            <!-- New Users -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">New Users</h2>
                <div id="newUsersChart"></div>
                <a href="/dashboard/users/details"
                    class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                    Information</a>
            </div>


            <!-- Number of Shares -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">Number of Shares</h2>
                
                <div id="sharesChart"></div>
                <a href="/dashboard/comments/details"
                class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                Information</a>
            </div>

            <!-- Number of Likes -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">Number of Likes</h2>
                <div id="likesChart"></div>
                <a href="/dashboard/comments/details"
                class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                Information</a>
            </div>

            <!-- Number of Blogs -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">Number of Blogs</h2>
                <div id="blogsChart"></div>
                <a href="/dashboard/comments/details"
                class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                Information</a>
            </div>
        </div>
        <!-- Blog List Table -->
        <div class="overflow-x-auto">
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
                        <th class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Status</th>
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
                        <td class="px-2 sm:px-4 py-2 border text-xs sm:text-sm">Published</td>
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

    <!-- ApexCharts Script -->
    <script>
      

        var commentsOptions = {
            chart: {
                type: 'bar',
                height: 150,
                zoom: {
                    enabled: false
                }
            },
            series: [{
                name: 'Comments',
                data: [10, 12, 8, 15, 20]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May']
            },
            colors: ['#007bff']
        };
        var commentsChart = new ApexCharts(document.querySelector("#commentsChart"), commentsOptions);
        commentsChart.render();

        var messagesOptions = {
            chart: {
                type: 'donut',
                height: 150,
            },
            series: [60, 40],
            labels: ['Read', 'Unread'],
            colors: ['#007bff', '#001fff']
        };
        var messagesChart = new ApexCharts(document.querySelector("#messagesChart"), messagesOptions);
        messagesChart.render();

        var newUsersOptions = {
            chart: {
                type: 'area',
                height: 150
            },
            series: [{
                name: 'New Users',
                data: [5, 10, 12, 8, 7]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May']
            },
            colors: ['#007bff']
        };
        var newUsersChart = new ApexCharts(document.querySelector("#newUsersChart"), newUsersOptions);
        newUsersChart.render();
        var visitsOptions = {
            chart: {
                type: 'line',
                height: 150,
                zoom: {
                    enabled: false
                }
            },
            series: [{
                name: 'Visits',
                data: [40, 50, 60, 70, 80]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May']
            },
            stroke: {
                width: 2
            },
            colors: ['#007bff']
        };
        var visitsChart = new ApexCharts(document.querySelector("#visitsChart"), visitsOptions);
        visitsChart.render();

        var sharesOptions = {
            chart: {
                type: 'bar',
                height: 150,
                zoom: {
                    enabled: false
                }
            },
            series: [{
                name: 'Shares',
                data: [20, 30, 40, 50, 60]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May']
            },
            colors: ['#007bff']
        };
        var sharesChart = new ApexCharts(document.querySelector("#sharesChart"), sharesOptions);
        sharesChart.render();

        var likesOptions = {
            chart: {
                type: 'donut',
                height: 150,
            },
            series: [60, 40],
            labels: ['Likes', 'Dislikes'],
            colors: ['#007bff', '#001bff']
        };
        var likesChart = new ApexCharts(document.querySelector("#likesChart"), likesOptions);
        likesChart.render();

        var blogsOptions = {
            chart: {
                type: 'area',
                height: 150
            },
            series: [{
                name: 'Blogs',
                data: [5, 8, 10, 6, 7]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May']
            },
            colors: ['#007bff']
        };
        var blogsChart = new ApexCharts(document.querySelector("#blogsChart"), blogsOptions);
        blogsChart.render();
    </script>

</body>

</html>
