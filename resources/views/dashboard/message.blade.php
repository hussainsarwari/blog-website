<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Messages</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Sender</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Email</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Message</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Date</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Category</th>
                        <th class="px-4 py-2 text-center text-sm font-medium text-gray-700">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Static Row 1 -->
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-800">John Doe</td>
                        <td class="px-4 py-2 text-sm text-gray-800">john.doe@example.com</td>
                        <td class="px-4 py-2 text-sm text-gray-800">Can you call me back?</td>
                        <td class="px-4 py-2 text-sm text-gray-800">2024-11-20</td>
                        <td class="px-4 py-2 text-sm text-gray-800 capitalize">Call Me</td>
                        <td class="px-4 py-2 text-center">
                            <button 
                                onclick="openReplyDialog('1', 'John Doe', 'Can you call me back?')" 
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Reply
                            </button>
                        </td>
                    </tr>
                    <!-- Static Row 2 -->
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-800">Jane Smith</td>
                        <td class="px-4 py-2 text-sm text-gray-800">jane.smith@example.com</td>
                        <td class="px-4 py-2 text-sm text-gray-800">What is your refund policy?</td>
                        <td class="px-4 py-2 text-sm text-gray-800">2024-11-19</td>
                        <td class="px-4 py-2 text-sm text-gray-800 capitalize">FAQ</td>
                        <td class="px-4 py-2 text-center">
                            <button 
                                onclick="openReplyDialog('2', 'Jane Smith', 'What is your refund policy?')" 
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Reply
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="replyDialog" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-white w-11/12 max-w-md p-6 rounded shadow-lg">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Reply to <span id="dialogSender"></span></h2>
            <p class="text-gray-700 mb-4" id="dialogMessage"></p>
            <textarea id="replyContent" class="w-full border border-gray-300 rounded p-2 mb-4" rows="5" placeholder="Write your reply here..."></textarea>
            <div class="flex justify-end space-x-2">
                <button 
                    onclick="closeReplyDialog()" 
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Cancel
                </button>
                <button 
                    onclick="sendReply()" 
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Send Reply
                </button>
            </div>
        </div>
    </div>

    <script>
        // Open Reply Dialog
        function openReplyDialog(messageId, sender, message) {
            document.getElementById('dialogSender').textContent = sender;
            document.getElementById('dialogMessage').textContent = message;
            document.getElementById('replyDialog').classList.remove('hidden');
        }

        // Close Reply Dialog
        function closeReplyDialog() {
            document.getElementById('replyDialog').classList.add('hidden');
        }

        // Send Reply (Placeholder)
        function sendReply() {
            const replyContent = document.getElementById('replyContent').value;
            alert(`Reply sent: ${replyContent}`);
            closeReplyDialog();
        }
    </script>
</body>
</html>
