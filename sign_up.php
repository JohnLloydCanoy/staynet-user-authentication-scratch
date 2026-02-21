<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAYNET - Boarding House Finder</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<?php include 'components/navigation.php'; ?>

<main class="min-h-[85vh] flex items-center justify-center px-4 py-12 bg-gray-50">
    
    <div class="bg-white w-full max-w-md p-8 rounded-[20px] shadow-sm border border-gray-200">
        
        <div class="text-center mb-8">
            <h2 class="text-3xl font-black tracking-wide mb-2">
                <span class="text-black">STAY</span><span class="text-[#4f46e5]">NET</span>
            </h2>
            <p class="text-gray-500 text-sm">Create an account to start booking.</p>
        </div>

        <form action="register_process.php" method="POST" class="space-y-4">
            
            <div>
                <label for="name" class="block text-sm font-bold text-gray-900 mb-1">Full Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    placeholder="e.g. Juan Dela Cruz" 
                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#4f46e5]/50 focus:border-[#4f46e5] transition-colors duration-200 text-sm"
                >
            </div>

            <div class="pt-2">
                <label class="block text-sm font-bold text-gray-900 mb-3">I want to sign up as a:</label>
                <div class="flex space-x-4">
                    
                    <label class="flex-1 cursor-pointer">
                        <input type="radio" name="role" value="guest" class="peer sr-only" checked>
                        <div class="text-center px-4 py-3 text-sm font-medium text-gray-600 bg-gray-50 border border-gray-200 rounded-md transition-all duration-200 peer-checked:bg-[#4f46e5]/10 peer-checked:text-[#4f46e5] peer-checked:border-[#4f46e5] hover:bg-gray-100">
                            Guest (Looking for a room)
                        </div>
                    </label>

                    <label class="flex-1 cursor-pointer">
                        <input type="radio" name="role" value="host" class="peer sr-only">
                        <div class="text-center px-4 py-3 text-sm font-medium text-gray-600 bg-gray-50 border border-gray-200 rounded-md transition-all duration-200 peer-checked:bg-[#4f46e5]/10 peer-checked:text-[#4f46e5] peer-checked:border-[#4f46e5] hover:bg-gray-100">
                            Host (Listing a property)
                        </div>
                    </label>
                    
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-bold text-gray-900 mb-1">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    placeholder="Enter your email" 
                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#4f46e5]/50 focus:border-[#4f46e5] transition-colors duration-200 text-sm"
                >
            </div>

            <div>
                <label for="password" class="block text-sm font-bold text-gray-900 mb-1">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    placeholder="Create a password" 
                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#4f46e5]/50 focus:border-[#4f46e5] transition-colors duration-200 text-sm"
                >
            </div>

            <div>
                <label for="confirm_password" class="block text-sm font-bold text-gray-900 mb-1">Confirm Password</label>
                <input 
                    type="password" 
                    id="confirm_password" 
                    name="confirm_password" 
                    required 
                    placeholder="Repeat your password" 
                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#4f46e5]/50 focus:border-[#4f46e5] transition-colors duration-200 text-sm"
                >
            </div>

            <div class="flex items-start mt-4">
                <input type="checkbox" id="terms" name="terms" required class="w-4 h-4 mt-1 text-[#4f46e5] border-gray-300 rounded focus:ring-[#4f46e5] cursor-pointer">
                <label for="terms" class="ml-2 text-sm text-gray-600 cursor-pointer">
                    I agree to the <a href="#" class="text-[#4f46e5] hover:underline">Terms of Service</a> and <a href="#" class="text-[#4f46e5] hover:underline">Privacy Policy</a>.
                </label>
            </div>

                <?php 
                    $btn_text = "Create Account";
                    include 'components/buttons/submit_button.php';
                ?>
        </form>

        <p class="mt-5 text-center text-sm text-gray-600">
            Already have an account? 
            <a href="login.php" class="font-bold text-[#4f46e5] hover:text-[#4338ca] transition-colors duration-200">Log in</a>
        </p>

    </div>
</main>

<?php include 'components/footer.php'; ?>