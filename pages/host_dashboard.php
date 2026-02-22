<?php
session_start();


if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'host') {
    header("Location: sign_in.php");
    exit();
}

$host_name = $_SESSION['full_name'] ?? 'Host';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host Dashboard - STAYNET</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased">

    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <span class="text-2xl font-black tracking-tight text-gray-900">STAY<span class="text-[#4f46e5]">NET</span></span>
                    <span class="ml-4 px-3 py-1 bg-indigo-50 text-[#4f46e5] text-xs font-bold rounded-full uppercase tracking-wide">Host Portal</span>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm font-medium text-gray-600">Hello, <?php echo htmlspecialchars($host_name); ?></span>
                    <a href="logout.php" class="text-sm font-bold text-gray-500 hover:text-red-600 transition-colors">Log Out</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
                <p class="text-sm text-gray-500 mt-1">Manage your units, track bookings, and grow your revenue.</p>
            </div>
            <a href="add_property.php" class="inline-flex justify-center items-center px-6 py-2.5 bg-[#4f46e5] hover:bg-[#4338ca] text-white text-sm font-bold tracking-wide rounded-md transition-colors shadow-sm">
                + Add New Unit
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <p class="text-sm font-medium text-gray-500 mb-1">Total Active Units</p>
                <h3 class="text-3xl font-bold text-gray-900">3</h3>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <p class="text-sm font-medium text-gray-500 mb-1">Pending Reservations</p>
                <h3 class="text-3xl font-bold text-gray-900">5</h3>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <p class="text-sm font-medium text-gray-500 mb-1">Monthly Earnings</p>
                <h3 class="text-3xl font-bold text-[#4f46e5]">₱12,500</h3>
            </div>
        </div>

        <div class="mb-6 flex items-center justify-between">
            <h2 class="text-xl font-bold text-gray-900">My Properties</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden flex flex-col group">
                <div class="h-48 bg-gray-200 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Apartment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute top-3 right-3 bg-white px-2 py-1 rounded text-xs font-bold text-green-600 shadow-sm">
                        Available
                    </div>
                </div>
                
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-gray-900">Cozy Studio in Divisoria</h3>
                        <span class="text-[#4f46e5] font-bold">₱2,500<span class="text-xs text-gray-500 font-normal">/mo</span></span>
                    </div>
                    <p class="text-sm text-gray-500 mb-4 line-clamp-2">A perfect, quiet space for students located just a few blocks away from the main universities.</p>
                    
                    <div class="mt-auto flex space-x-3 pt-4 border-t border-gray-100">
                        <button class="flex-1 px-3 py-2 text-sm font-medium text-gray-700 bg-gray-50 border border-gray-200 rounded-md hover:bg-gray-100 transition-colors">
                            Edit Details
                        </button>
                        <button class="flex-1 px-3 py-2 text-sm font-medium text-red-600 bg-red-50 border border-red-100 rounded-md hover:bg-red-100 transition-colors">
                            Unlist
                        </button>
                    </div>
                </div>
            </div>
            </div>
    </main>

</body>
</html>