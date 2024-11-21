<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @vite(['resources/css/app.css'])
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
</head>
<body>
    <div class="bg-white shadow-md rounded-lg p-6 my-20 container max-h-[60em] overflow-auto ">
        <h2 class="text-2xl font-semibold mb-4 text-center ">Comments and Replies</h2>
    
        <table class="min-w-full bg-gray-50 border-collapse border border-gray-200  ">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Category</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Blog Title</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">IP Address</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Post ID</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Date</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Comment</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody class="">
                <!-- Static Data for Comments -->
                <tr class="border-t border-gray-200">
                    <td class="px-6 py-4 text-sm text-gray-700">Technology</td>
                    <td class="px-6 py-4 text-sm text-gray-700">How to Learn Programming?</td>
                    <td class="px-6 py-4 text-sm text-gray-700">192.168.0.1</td>
                    <td class="px-6 py-4 text-sm text-gray-700">1</td>
                    <td class="px-6 py-4 text-sm text-gray-700">2024-11-19 10:30</td>
                    <td class="px-6 py-4 text-sm text-gray-700">Great article! Really helped me understand the basics of programming.</td>
                    <td class="px-6 py-4 text-sm text-gray-700 flex flex-col justify-center items-center">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg m-2" data-id="1" onclick="openReplyDialog(this)">Reply</button>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg m-2" data-id="3" onclick="likeComment(this)">Like <span id="like-count-3">0</span></button>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg m-2" data-id="3" onclick="deleteComment(this)">Delete</button>
                   
                    </td>
                </tr>
                <tr class="border-t border-gray-200">
                    <td class="px-6 py-4 text-sm text-gray-700">Sport</td>
                    <td class="px-6 py-4 text-sm text-gray-700">Top 10 Football Players</td>
                    <td class="px-6 py-4 text-sm text-gray-700">192.168.0.2</td>
                    <td class="px-6 py-4 text-sm text-gray-700">2</td>
                    <td class="px-6 py-4 text-sm text-gray-700">2024-11-18 14:15</td>
                    <td class="px-6 py-4 text-sm text-gray-700">Very informative. I loved the breakdown of each player's career.</td>
                    <td class="px-6 py-4 text-sm text-gray-700 flex flex-col justify-center items-center">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg m-2" data-id="1" onclick="openReplyDialog(this)">Reply</button>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg m-2" data-id="3" onclick="likeComment(this)">Like <span id="like-count-3">0</span></button>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg m-2" data-id="3" onclick="deleteComment(this)">Delete</button>
                   
                    </td>
                </tr>
                <tr class="border-t border-gray-200">
                    <td class="px-6 py-4 text-sm text-gray-700">Lifestyle</td>
                    <td class="px-6 py-4 text-sm text-gray-700">Healthy Eating Tips</td>
                    <td class="px-6 py-4 text-sm text-gray-700">192.168.0.3</td>
                    <td class="px-6 py-4 text-sm text-gray-700">3</td>
                    <td class="px-6 py-4 text-sm text-gray-700">2024-11-17 18:00</td>
                    <td class="px-6 py-4 text-sm text-gray-700">I’m going to try these tips for a healthier lifestyle. Thanks!</td>
                    <td class="px-6 py-4 text-sm text-gray-700 flex flex-col justify-center items-center">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg m-2" data-id="1" onclick="openReplyDialog(this)">Reply</button>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg m-2" data-id="3" onclick="likeComment(this)">Like <span id="like-count-1">0</span></button>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-lg m-2" data-id="3" onclick="deleteComment(this)">Delete</button>
                   
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Reply Dialog Box -->
    <div id="replyDialog" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white rounded-lg w-96 p-6">
            <h2 class="text-2xl font-semibold mb-4">Reply to Comment</h2>
            
            <!-- Reply Form -->
            <form>
                <input type="hidden" name="comment_id" id="comment_id">
    
                <!-- Comment Text (Read-only) -->
                <div class="mb-4">
                    <label for="commentText" class="block text-sm font-medium text-gray-700">Original Comment</label>
                    <textarea id="commentText" name="commentText" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" readonly></textarea>
                </div>
    
                <!-- Reply Text -->
                <div class="mb-4">
                    <label for="replyText" class="block text-sm font-medium text-gray-700">Your Reply</label>
                    <textarea id="replyText" name="replyText" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
                </div>
    
                <div class="flex justify-between mt-4">
                    <button type="button" id="closeReplyDialog" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Submit Reply</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
           // Like button functionality
    function likeComment(button) {
        const commentId = button.getAttribute('data-id');
        const likeCount = document.getElementById('like-count-' + commentId);
        let currentLikes = parseInt(likeCount.innerText);
        likeCount.innerText =  1;
    }

    
    // Delete comment functionality
    function deleteComment(button) {
        const commentId = button.getAttribute('data-id');
        const row = button.closest('tr');
        
        // Confirm before deleting
        if(confirm('Are you sure you want to delete this comment?')) {
            row.remove(); // Remove the comment row
            alert('Comment deleted!');
        }
    }
        // Function to open the reply dialog
        function openReplyDialog(button) {
            const commentId = button.getAttribute('data-id');
            
            // For this static example, just populate with dummy data based on the ID
            let commentText;
            if(commentId === "1") {
                commentText = "Great article! Really helped me understand the basics of programming.";
            } else if(commentId === "2") {
                commentText = "Very informative. I loved the breakdown of each player's career.";
            } else if(commentId === "3") {
                commentText = "I’m going to try these tips for a healthier lifestyle. Thanks!";
            }
    
            // Set the comment ID and comment text in the dialog
            document.getElementById('comment_id').value = commentId;
            document.getElementById('commentText').value = commentText;
    
            // Show the dialog box
            document.getElementById('replyDialog').classList.remove('hidden');
        }
    
        // Close the dialog box
        document.getElementById('closeReplyDialog').addEventListener('click', function() {
            document.getElementById('replyDialog').classList.add('hidden');
        });
    </script>
    
</body>
</html>