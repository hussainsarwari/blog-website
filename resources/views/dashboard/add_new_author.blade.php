<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Add New author</h1>
        <form 
            action="#" 
            method="POST" 
            enctype="multipart/form-data" 
            class="bg-white p-6 rounded shadow space-y-4">
            
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    class="w-full border border-gray-300 rounded p-2" 
                    placeholder="Enter full name" 
                    required>
            </div>

            <!-- Profile Image -->
            <div>
                <label for="profileImage" class="block text-sm font-medium text-gray-700">Profile Image</label>
                <input 
                    type="file" 
                    id="profileImage" 
                    name="profile_image" 
                    class="w-full border border-gray-300 rounded p-2" 
                    accept="image/*" 
                    required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="w-full border border-gray-300 rounded p-2" 
                    placeholder="Enter email address" 
                    required>
            </div>

            <!-- Education -->
            <div>
                <label for="education" class="block text-sm font-medium text-gray-700">Education</label>
                <input 
                    type="text" 
                    id="education" 
                    name="education" 
                    class="w-full border border-gray-300 rounded p-2" 
                    placeholder="Enter education background" 
                    required>
            </div>
            <div>
                <label for="phone number" class="block text-sm font-medium text-gray-700">phone number</label>
                <input 
                    type="number" 
                    id="phone number" 
                    name="phone number" 
                    class="w-full border border-gray-300 rounded p-2" 
                    placeholder="Enter your phone number " 
                    required>
            </div>

            <!-- Blog Category -->
            <div>
                <label for="blogCategory" class="block text-sm font-medium text-gray-700">Blog Category</label>
                <select 
                    id="blogCategory" 
                    name="blog_category" 
                    class="w-full border border-gray-300 rounded p-2" 
                    required>
                    <option value="">Select a category</option>
                    <option value="technology">Technology</option>
                    <option value="fashion">Fashion</option>
                    <option value="sports">Sports</option>
                    <option value="food">Food</option>
                    <option value="movies">Movies</option>
                    <option value="business">Business</option>
                </select>
            </div>

            <!-- Date of Birth -->
            <div>
                <label for="dateOfBirth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input 
                    type="date" 
                    id="dateOfBirth" 
                    name="date_of_birth" 
                    class="w-full border border-gray-300 rounded p-2" 
                    required>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4" 
                    class="w-full border border-gray-300 rounded p-2" 
                    placeholder="Enter a brief description about the user"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Add User
                </button>
            </div>
        </form>
    </div>
</body>
</html>
