
<!Doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <title>Login</title>
</head>
<body>
<?php include 'navbar.php'; ?>
  <section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 ">

        <div class=" Login w-full h-5/6 rounded-lg shadow white:border md:mt-0 sm:max-w-96 xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8  ml-5">
                <h1 class="text-white">
                <img class="w-14" src="/image/logo.png">
                </h1>
                <div class="login">
                <h1 class="text-2xl font-bold" >Login</h1>
                </div>
                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-blue-600 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-blue-600 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            
                            <div class="ml-3 text-sm">
                              <label>Forgot Password?</label>
                            </div>
                        </div>
                        
                    </div>
                    <button class="btn w-full hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-md">
                     Button
                      </button>
                    <button type="submit" class="w-full text-gray bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"> Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underlin text-blue-700">Sign up</a></button>
                    
                </form>
            </div>
        </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>
</body>
</html>