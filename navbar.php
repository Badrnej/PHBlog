

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav
    class="fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen border border-gray-100 bg-blue-600 py-5 px-8 shadow backdrop-blur-lg   ">
    <div class="px-4">
        <div class="flex items-center justify-between ">
            <div class="flex shrink-0 md:gap-36">
                <a aria-current="page" class="flex items-center" href="/">
                    <img class="h-7 w-auto" src="/image/logo.png" alt="">
                    <p class="sr-only">Website Title</p>
                </a>
                <div class="flex items-center justify-between gap-5 md:flex md:gap-40">
                    <!-- Menu de Navigation -->
                    <div class="flex gap-10 md:items-center md:justify-center">
                        <a aria-current="page" 
                           class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-[#FFFFFF] transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                           href="#">Home</a>
                        <a class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-[#FFFFFF] transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                           href="#">About Us</a>
                           <a class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-[#FFFFFF] transition-all duration-200 hover:bg-gray-100 hover:text-gray-900"
                           href="#">Blog</a>
                    </div>
                
                   
                </div>
            </div>
         
            
           

            <div class="flex items-center justify-end gap-3 md:gap-40">
                 <!-- Barre de Recherche -->
                 <div class="relative mx-auto text-gray-600">
                    <input class="border border-gray-300 h-10 w-96 px-5 pr-16 rounded-2xl text-sm placeholder-current focus:outline-none dark:bg-gray-500 dark:border-gray-50 dark:text-gray-200"
                           type="search" name="search" placeholder="Search">
                    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                        <svg class="text-gray-600 dark:text-gray-200 h-4 w-4 fill-current"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                             viewBox="0 0 56.966 56.966" xml:space="preserve" width="512px" height="512px">
                            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 
                             s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92 
                             c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 
                             s-17-7.626-17-17S14.61,6,23.984,6z"/>
                        </svg>
                    </button>
                </div>
               <div class="flex gap-7">
                <a class="hidden items-center   justify-center rounded-2xl bg-white px-5 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 transition-all duration-150  sm:inline-flex"
                href="/login">Login</a>
            <a class="inline-flex items-center justify-center rounded-2xl bg-blue-500 px-4 py-2 text-sm font-semibold text-white shadow-sm transition-all duration-150 hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                href="/login">Register</a>
               </div>
            </div>
        </div>
    </div>

</nav>
</body>
</html>
