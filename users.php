<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="p-4">
    <h1 class="text-2xl font-bold">Welcome to my dashboard!</h1>
    <p class="mt-2 text-gray-600">This is an example dashboard using Tailwind CSS.</p>
    <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
        <!-- Add User -->
        <td class="py-4 px-6 text-center border-b border-gray-200">
            <div class="flex justify-end">
                <button class="bg-orange-500 text-white py-1 px-2 rounded-full text-xl mb-6">Add User</button>
            </div>
        </td>
        <!-- Table -->
        <table class="w-full table-fixed">
            <thead>
                <tr class="bg-blue-700">
                    <th class="w-1/4 py-4 px-6 text-center text-white font-bold uppercase">Full Name</th>
                    <th class="w-1/4 py-4 px-6 text-center text-white font-bold uppercase">Email Address</th>
                    <th class="w-1/4 py-4 px-6 text-center text-white font-bold uppercase">Phone</th>
                    <th class="w-1/4 py-4 px-6 text-center text-orange-500 font-bold uppercase">Permissions</th>
                    <th class="w-1/4 py-4 px-6 text-center text-orange-500 font-bold uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Leslie Maya</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">Leslie@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">Admin</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>   
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Josie Deck</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">Josie@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">User</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Alex Pfeiffer</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">alex@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">User</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Mike dean</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">mike@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">User</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Leslie Maya</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">Leslie@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">Admin</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>   
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Josie Deck</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">Josie@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">User</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Alex Pfeiffer</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">alex@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">User</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Mike dean</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">mike@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">User</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Leslie Maya</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">Leslie@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">Admin</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>   
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Josie Deck</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">Josie@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">User</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Alex Pfeiffer</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">alex@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">User</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="py-4 px-6 text-center border-b border-gray-200">Mike dean</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200 truncate">mike@gmail.com</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">+212634232334</td>
                    <td class="py-4 px-6 text-center border-b border-gray-200">
                        <span class="bg-blue-600 text-white py-1 px-2 rounded-full text-xs">User</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="text-orange-500 py-1 px-2 rounded-full text-xl flex items-center justify-center">
                            <i class="fas fa-trash-alt"></i>
                        </span>
                    </td>
                </tr>
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>
</div>
</body>
