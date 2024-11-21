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
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Messages</h1>
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
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Sender</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Email</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Message</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Date</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Category</th>
                        <th class="px-4 py-2 text-center text-sm font-medium text-gray-700">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Static Rows for Example -->
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-800">John Doe</td>
                        <td class="px-4 py-2 text-sm text-gray-800">john.doe@example.com</td>
                        <td class="px-4 py-2 text-sm text-gray-800">Can you call me back?</td>
                        <td class="px-4 py-2 text-sm text-gray-800">2024-11-20</td>
                        <td class="px-4 py-2 text-sm text-gray-800 capitalize">Call Me</td>
                        <td class="px-4 py-2 text-center">
                            <button 
                                onclick="openReplyDialog('John Doe', 'Can you call me back?')"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Reply
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Filter Dialog -->
    <div id="filterDialog" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-white w-11/12 max-w-lg p-6 rounded shadow-lg">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Filter Messages</h2>
            <form id="filterForm" class="space-y-4">
                <!-- Date -->
                <div>
                    <label for="filterstartDate" class="block text-sm font-medium text-gray-700">Start Date</label>
                    <input 
                        type="date" 
                        id="filterstartDate" 
                        class="w-full border border-gray-300 rounded p-2">
                </div>
                <!-- end Date -->
                <div>
                    <label for="filterendDate" class="block text-sm font-medium text-gray-700">End Date</label>
                    <input 
                        type="date" 
                        id="filterendDate" 
                        class="w-full border border-gray-300 rounded p-2">
                </div>
                <!-- Read/Unread -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="filterStatus" class="w-full border border-gray-300 rounded p-2">
                        <option value="">All</option>
                        <option value="read">Read</option>
                        <option value="unread">Unread</option>
                    </select>
                </div>
                <!-- Category -->
                <div>
                    <label for="filterCategory" class="block text-sm font-medium text-gray-700">Category</label>
                    <select id="filterCategory" class="w-full border border-gray-300 rounded p-2">
                        <option value="">All</option>
                        <option value="call-me">Call Me</option>
                        <option value="faq">FAQ</option>
                        <option value="feedback">Feedback</option>
                    </select>
                </div>
                <!-- Name -->
                <div>
                    <label for="filterName" class="block text-sm font-medium text-gray-700">Name</label>
                    <input 
                        type="text" 
                        id="filterName" 
                        class="w-full border border-gray-300 rounded p-2" 
                        placeholder="Enter sender's name">
                </div>
                <!-- Email -->
                <div>
                    <label for="filterEmail" class="block text-sm font-medium text-gray-700">Email</label>
                    <input 
                        type="email" 
                        id="filterEmail" 
                        class="w-full border border-gray-300 rounded p-2" 
                        placeholder="Enter sender's email">
                </div>
                <!-- Search -->
                <div>
                    <label for="filterSearch" class="block text-sm font-medium text-gray-700">Search</label>
                    <input 
                        type="text" 
                        id="filterSearch" 
                        class="w-full border border-gray-300 rounded p-2" 
                        placeholder="Enter keywords">
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

        // Open Reply Dialog (Placeholder for replying logic)
        function openReplyDialog(sender, message) {
            alert(`Replying to ${sender}: "${message}"`);
        }
    </script>
</body>
</html>
