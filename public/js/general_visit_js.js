   // Get elements
   const openFilterDialogBtn = document.getElementById('openFilterDialog');
   const closeFilterDialogBtn = document.getElementById('closeFilterDialog');
   const filterDialog = document.getElementById('filterDialog');
   
   // Open the dialog box when the filter button is clicked
   openFilterDialogBtn.addEventListener('click', function() {
       filterDialog.classList.remove('hidden');  // Show the dialog
   });
   
   // Close the dialog box when the close button is clicked
   closeFilterDialogBtn.addEventListener('click', function() {
       filterDialog.classList.add('hidden');  // Hide the dialog
   });
       // Data for Blog Categories and Tools (Last 12 Months)
       var visitorData = {
           series: [


               // Online Tools
               {
                   name: 'Instagram Video Downloader',
                   data: [60, 70, 80, 85, 90, 95, 100, 110, 115, 120, 130, 140], // Visits for 12 months
                   color: '#D63A3A' // Line color for Instagram Video Downloader
               },
               {
                   name: 'YouTube Video Downloader',
                   data: [70, 75, 80, 90, 95, 100, 105, 115, 120, 130, 140, 150], // Visits for 12 months
                   color: '#EF4444' // Line color for YouTube Video Downloader
               },
               {
                   name: 'Short URL Generator',
                   data: [45, 50, 55, 60, 70, 80, 85, 90, 95, 100, 105, 110], // Visits for 12 months
                   color: '#10B981' // Line color for Short URL Generator
               },
               {
                   name: 'Paraphrase Tool',
                   data: [50, 60, 70, 75, 80, 85, 90, 95, 100, 110, 120, 130], // Visits for 12 months
                   color: '#3B82F6' // Line color for Paraphrase Tool
               },
               {
                   name: 'CV Generator',
                   data: [40, 45, 50, 55, 60, 65, 70, 80, 85, 90, 95, 100], // Visits for 12 months
                   color: '#34D399' // Line color for CV Generator
               },
               {
                   name: 'Online Code Editor',
                   data: [30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 90], // Visits for 12 months
                   color: '#3B82F6' // Line color for Online Code Editor
               },
               {
                   name: 'PDF Editor',
                   data: [80, 90, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190], // Visits for 12 months
                   color: '#FF6347' // Line color for PDF Editor
               },
               {
                   name: 'PDF Compression',
                   data: [30, 40, 50, 55, 60, 65, 75, 80, 90, 100, 110, 120], // Visits for 12 months
                   color: '#FBBF24' // Line color for PDF Compression
               },
               {
                   name: 'PDF to Image',
                   data: [20, 25, 30, 35, 40, 45, 50, 55, 60, 70, 75, 80], // Visits for 12 months
                   color: '#F59E0B' // Line color for PDF to Image
               },
               {
                   name: 'HTML To PDF',
                   data: [60, 65, 75, 80, 90, 95, 100, 105, 110, 120, 130, 140], // Visits for 12 months
                   color: '#4F46E5' // Line color for HTML to PDF
               },
               {
                   name: 'Image To PDF',
                   data: [40, 50, 60, 65, 75, 80, 85, 90, 100, 110, 120, 130], // Visits for 12 months
                   color: '#F472B6' // Line color for Image to PDF
               },
               {
                   name: 'Image Compression',
                   data: [25, 30, 35, 40, 45, 50, 60, 65, 70, 80, 85, 90], // Visits for 12 months
                   color: '#D63A3A' // Line color for Image Compression
               },
               {
                   name: 'Extract Text From Image',
                   data: [30, 35, 45, 50, 55, 60, 70, 80, 85, 90, 100, 110], // Visits for 12 months
                   color: '#F43F5E' // Line color for Extract Text from Image
               }
           ],
           chart: {
               height: 450,
               type: 'line',
               zoom: {
                   enabled: true
               }
           },
           stroke: {
               width: 2,
               curve: 'smooth'
           },
           title: {
               text: ' Tools',
               align: 'center'
           },
           xaxis: {
               categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                   'October', 'November', 'December'
               ],
           },
           yaxis: {
               title: {
                   text: 'Number of Visits'
               }
           }
       };

       // Render Chart
       var chart = new ApexCharts(document.querySelector("#visitorChart"), visitorData);
       chart.render();

       // Data for Blog Categories and Tools (Last 12 Months)
       var visitorData = {
           series: [
               // Blog Categories
               {
                   name: 'Technology',
                   data: [50, 55, 65, 60, 70, 72, 75, 85, 95, 100, 110,
                   120], // Visits for 12 months (Example data)
                   color: '#4F46E5' // Line color for Technology
               },
               {
                   name: 'Sport',
                   data: [30, 35, 40, 50, 55, 60, 65, 70, 75, 80, 85, 90], // Visits for 12 months
                   color: '#F59E0B' // Line color for Sport
               },
               {
                   name: 'Lifestyle',
                   data: [20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75], // Visits for 12 months
                   color: '#10B981' // Line color for Lifestyle
               },
               {
                   name: 'Personal Development',
                   data: [25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80], // Visits for 12 months
                   color: '#FF6347' // Line color for Personal Development
               },
               {
                   name: 'Islamic ',
                   data: [15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70], // Visits for 12 months
                   color: '#F43F5E' // Line color for Islamic
               },
               {
                   name: 'Fashion ',
                   data: [40, 45, 50, 60, 65, 70, 75, 80, 85, 90, 95, 100], // Visits for 12 months
                   color: '#F472B6' // Line color for Fashion
               },
               {
                   name: 'Movies',
                   data: [50, 55, 60, 70, 75, 80, 85, 90, 95, 100, 110, 120], // Visits for 12 months
                   color: '#6366F1' // Line color for Movies
               },
               {
                   name: 'Food ',
                   data: [35, 40, 45, 50, 60, 65, 70, 75, 80, 85, 90, 95], // Visits for 12 months
                   color: '#FF66B2' // Line color for Food
               },
               {
                   name: 'Travel ',
                   data: [45, 50, 55, 60, 70, 75, 80, 85, 90, 95, 100, 110], // Visits for 12 months
                   color: '#34D399' // Line color for Travel
               },
               {
                   name: 'Business',
                   data: [25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80], // Visits for 12 months
                   color: '#FBBF24' // Line color for Business
               }

           ],
           chart: {
               height: 450,
               type: 'area',
               zoom: {
                   enabled: true
               }
           },
           stroke: {
               width: 2,
               curve: 'smooth'
           },
           title: {
               text: 'Blog categories',
               align: 'center'
           },
           xaxis: {
               categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                   'October', 'November', 'December'
               ],
           },
           yaxis: {
               title: {
                   text: 'Number of Visits'
               }
           }
       };

       // Render Chart
       var chart = new ApexCharts(document.querySelector("#visitorblogChart"), visitorData);
       chart.render();
       var visitorData = {
           series: [
               // Blog Categories
               {
                   name: 'visitor',
                   data: [50, 55, 65, 60, 70, 72, 75, 85, 95, 100, 110,
                   120], // Visits for 12 months (Example data)
                   color: '#4F46E5' // Line color for Technology
               }

           ],
           chart: {
               height: 450,
               type: 'area',
               zoom: {
                   enabled: true
               }
           },
           stroke: {
               width: 2,
               curve: 'smooth'
           },

           xaxis: {
               categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                   'October', 'November', 'December'
               ],
           },
           yaxis: {
               title: {
                   text: 'Number of Visits'
               }
           }
       };

       // Render Chart
       var chart = new ApexCharts(document.querySelector("#visitor"), visitorData);
       chart.render();
