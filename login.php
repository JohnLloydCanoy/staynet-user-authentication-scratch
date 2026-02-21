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
            <p class="text-gray-500 text-sm">Welcome back! Please enter your details.</p>
        </div>

        <form action="login_process.php" method="POST" class="space-y-5">
            
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
                    placeholder="••••••••" 
                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-md focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#4f46e5]/50 focus:border-[#4f46e5] transition-colors duration-200 text-sm"
                >
            </div>

            <div class="flex items-center justify-between mt-2">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-[#4f46e5] border-gray-300 rounded focus:ring-[#4f46e5] cursor-pointer">
                    <label for="remember" class="ml-2 text-sm text-gray-600 cursor-pointer">Remember for 30 days</label>
                </div>
                <a href="#" class="text-sm font-semibold text-[#4f46e5] hover:text-[#4338ca] transition-colors duration-200">Forgot password?</a>
            </div>

            <button type="submit" class="w-full flex justify-center items-center px-6 py-3 mt-6 bg-[#4f46e5] hover:bg-[#4338ca] text-white text-sm font-bold tracking-wide rounded-md transition-colors duration-200 shadow-sm">
                Sign In
            </button>
            
        </form>

        <p class="mt-8 text-center text-sm text-gray-600">
            Don't have an account? 
            <a href="register.php" class="font-bold text-[#4f46e5] hover:text-[#4338ca] transition-colors duration-200">Sign up</a>
        </p>

    </div>
</main>

<?php include 'components/footer.php'; ?>