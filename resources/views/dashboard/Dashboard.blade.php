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
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

     

        <!-- Chart Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-6 bg-slate-50 p-3 shadow-xl">
            <!-- General Visits -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">General Visits</h2>
                <div id="visitsChart"></div>
                <a href="{{url('dashboard/General_visit')}}"
                    class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                    Information</a>
            </div>

            <!-- command -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">Commands</h2>
                <div id="commentsChart"></div>
                <a href="{{url('dashboard/command')}}"
                    class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                    Information</a>
            </div>

            <!-- Messages -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">Messages</h2>
                <div id="messagesChart"></div>
                <a href="{{url('/dashboard/messages')}}"
                    class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                    Information</a>
            </div>

            <!-- New Users -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">New Users</h2>
                <div id="newUsersChart"></div>
                <a href="{{url('/dashboard/users')}}"
                    class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                    Information</a>
            </div>



         

            <!-- Number of Blogs -->
            <div class="bg-white lg:col-span-2 p-4 rounded shadow ">
                <h2 class="text-xl font-semibold mb-2">Number of Blogs</h2>
                <div id="blogsChart"></div>
                <a href="{{url('dashboard/blogDetails')}}"
                class="inline-block mt-4 text-sm bg-blue-500 text-white py-1 px-4 rounded hover:bg-blue-600">More
                Information</a>
            </div>
        </div>


<div class="flex flex-col">

    <a href="{{url('dashboard/add_new_blog_post')}}"
    class="bg-blue-500 hover:bg-blue-600 text-white px-3 my-3 text-center py-2 rounded text-md sm:text-sm ">add new blog post</a>
    <a href="{{url('dashboard/add_new_author')}}"
    class="bg-blue-500 hover:bg-blue-600 text-white px-3 my-3 text-center py-2 rounded text-md sm:text-sm ">add new user</a>
</div>


    </div>

    <!-- ApexCharts Script -->
    <script>
      

        var commentsOptions = {
            chart: {
                type: 'area',
                height: 300,
                zoom: {
                    enabled: true
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
                height: 300,
                zoom: {
                    enabled: true
                }
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
                height: 300,
                zoom: {
                    enabled: true
                }
            },
            series: [{
                name: 'New Users',
                data: [5, 10, 12, 8, 7,2,13,42,22,12,22,11]
            }],
            xaxis: {
                categories: [1,2,3,4,5,6,7,8,9,10,11,12]
            },
            colors: ['#007bff']
        };
        var newUsersChart = new ApexCharts(document.querySelector("#newUsersChart"), newUsersOptions);
        newUsersChart.render();
        var visitsOptions = {
            chart: {
                type: 'area',
                height: 300,
                zoom: {
                    enabled: true
                }
            },
            series: [{
                name: 'Visits',
                data: [40, 50, 60, 70, 80,1,2,42,12,11,44,22]
            }],
            xaxis: {
                categories: [1,2,3,4,5,6,7,8,9,10,11,12]
            },
            stroke: {
                width: 1
            },
            colors: ['#007bff']
        };
        var visitsChart = new ApexCharts(document.querySelector("#visitsChart"), visitsOptions);
        visitsChart.render();

       

        var blogsOptions = {
            chart: {
                type: 'area',
                height: 300,
               
            },
            series: [{
                name: 'Blogs',
                data: [5, 8, 10, 6, 7,12,42,12,22,34,22,11]
            }],
            xaxis: {
                categories: [1,2,3,4,5,6,7,8,9,10,11,12]
            },
            colors: ['#007bff']
        };
        var blogsChart = new ApexCharts(document.querySelector("#blogsChart"), blogsOptions);
        blogsChart.render();
    </script>

</body>

</html>
