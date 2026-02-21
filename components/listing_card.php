<a href="<?php echo $link ?? '#'; ?>" class="flex flex-col group cursor-pointer">
    <div class="relative w-full aspect-square overflow-hidden rounded-[20px] mb-3">
        <img 
            src="<?php echo $image_url ?? 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'; ?>" 
            alt="Property Image" 
            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
        >
        
        <button class="absolute top-3 right-3 text-white hover:text-red-500 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
        </button>
    </div>
    <div class="flex flex-col">
        <h3 class="text-[19px] font-semibold text-gray-900 truncate">
            <?php echo $title ?? 'Apartment on CDO'; ?>
        </h3>
        
        <p class="text-[17px] text-gray-600 mt-0.5">
            <span class="text-gray-900">₱ <?php echo number_format($price ?? 3000); ?> pesos</span> / day
        </p>
        
        <div class="flex items-center text-gray-800 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[18px] h-[18px] mr-1.5 text-gray-700">
                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
            </svg>
            <span class="font-medium text-[15px]"><?php echo $rating ?? '4.3'; ?></span>
        </div>
    </div>
</a>