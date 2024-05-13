<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>
<body>

    
<?php include 'navbar.php'; ?>
<header class="header mt-20 "> <!-- Ajustez 4rem en fonction de la hauteur exacte de votre barre de navigation -->
   <!-- <div class="w-full bg-cover bg-center  md:rounded-xl" style="height:32rem; background-image: url('../image/Article-writing.jpg');"> -->
        <div class="flex   items-center px-56 pu-5 h-full w-full bg-gray-300 bg-opacity-50">
            <div class="justify-start">
                <div class="flex gap-5 items-center text-gray-600 hover:text-gray-900 cursor-pointer">
                    <!-- Intégration de l'icône SVG -->
                    <img src="https://icons.veryicon.com/png/o/miscellaneous/yuanql/icon-article.png" jsaction="VQAsE" class="sFlh5c pT0Scc iPVvYb" 
                    style="max-width: 30px; height: 30px; width: 30px;" alt="icon-article Vector Icons free download in SVG, PNG Format" jsname="kn3ccd" aria-hidden="false">
                    <span class="text-xl text-blue-600 font-semibold">Articles</span> <!-- Titre "Articles" -->
                </div>
                
                <h1 class="text-[#000000] text-2xl mt-5 font-semibold uppercase md:text-3xl">Bienvenue sur Notre Site</h1>
                <button class="mt-5 px-4 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Login</button>
            </div>

        </div>
    <!-- </div> -->

   
</header>


<main>
   


    <section class=" relative mt-12 items-center justify-center w-full px-4 py-10 mx-auto  max-w-7xl shadow-lg ">
   
         
        
        <div class="grid w-full justify-center mr-40 items-center  grid-cols-1 gap-12 mx-auto lg:grid-cols-3">

               <!-- cadrs1 -->
               <div class="relative  justify-center w-96 px-8 py-4 bg-white border  border-gray-200 shadow-lg rounded-2xl "> <!-- Bordure grise, ombre, coins arrondis, texte centré -->
                <!-- Barre à gauche de couleur personnalisée -->
                <div class="absolute top-0 left-0 h-full bg-[#555555] w-2 rounded-tl-2xl rounded-bl-2xl"> <!-- Barre colorée -->
                </div>
            
                <!-- Contenu centré -->
                <img class="object-cover  object-center w-full mb-4 lg:h-48 md:h-36 rounded-xl" src="/image/Article1.jpeg" alt="Image">
            
                <h1 class="text-2xl mt-2  font-semibold leading-none tracking-tighter text-center text-[#000000] lg:text-2xl">Short headline.</h1>
                <h6 class="  mt-1 leading-none  font-semibold tracking-tighter text-center text-[#000000]">Short headline.</h6>
                <p class="text-base mt-6 justify-center leading-relaxed text-[#000000]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                
                <div class="mt-6">
                    <a href="#" class="inline-flex items-center font-semibold text-blue-600 hover:text-neutral-600">Read More »</a>
                </div>

                <div class="flex items-center space-x-3 justify-end"> <!-- Div avec des icônes espacées -->
                     <!-- Icône de "like" -->
                     <div class="flex items-center gap-1 text-gray-600 hover:text-gray-900 cursor-pointer"> <!-- Icône de "like" -->
                      
                        <svg aria-label="Notifications" class="x1lliihq x1n2onr6 x5n08af text-[#464646]" fill="currentColor" height="20" role="img" viewBox="0 0 24 24" width="20">
                            
                            <path d="M16.792 3.904A4.989 4.989 0 0 1 21.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 
                            14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 0 1 4.708-5.218 4.21 4.21 0 0 1 3.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 0 1 3.679-1.938m0-2a6.04 6.04 0 0 0-4.797 2.127 6.052 6.052 0 0 0-4.787-2.127A6.985 6.985 0 0 0 .5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 0 0 3.518 3.018 2 2 0 0 0 2.174 0 45.263 45.263 0 0 0 3.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 0 0-6.708-7.218Z"></path>
                        </svg>
                        <span class=" text-[#464646]">5k</span> <!-- Nombre de "likes" -->
                    </div>
                    <!-- Icône de commentaire -->
                   <div class="flex gap-1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXMjNvC8B_jmTrgCxLhnjEsVatUlZcgdvJiKKndG3OBvBR3WCvokt2J_RiDgrsNea9jZA&amp;usqp=CAU" 
                    jsaction="VQAsE" class="sFlh5c pT0Scc" alt="IconExperience » I-Collection » Message Icon" jsname="JuXqh" style="max-width: 25px; width: 25px; height: 25px; " data-ilt="1715556188512">
                    <span class=" text-[#464646]">56</span> <!-- Nombre de "likes" -->
                   </div>
                   
                </div>

            </div>


               <!-- cadrs2 -->
               <div class="relative  justify-center w-96 px-8 py-4 bg-white border  border-gray-200 shadow-lg rounded-2xl "> <!-- Bordure grise, ombre, coins arrondis, texte centré -->
                <!-- Barre à gauche de couleur personnalisée -->
                <div class="absolute top-0 left-0 h-full bg-[#555555] w-2 rounded-tl-2xl rounded-bl-2xl"> <!-- Barre colorée -->
                </div>
            
                <!-- Contenu centré -->
                <img class="object-cover  object-center w-full mb-4 lg:h-48 md:h-36 rounded-xl" src="/image/Article1.jpeg" alt="Image">
            
                <h1 class="text-2xl mt-2  font-semibold leading-none tracking-tighter text-center text-[#000000] lg:text-2xl">Short headline.</h1>
                <h6 class="  mt-1 leading-none  font-semibold tracking-tighter text-center text-[#000000]">Short headline.</h6>
                <p class="text-base mt-6 justify-center leading-relaxed text-[#000000]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                
                <div class="mt-6">
                    <a href="#" class="inline-flex items-center font-semibold text-blue-600 hover:text-neutral-600">Read More »</a>
                </div>

                <div class="flex items-center space-x-3 justify-end"> <!-- Div avec des icônes espacées -->
                     <!-- Icône de "like" -->
                     <div class="flex items-center gap-1 text-gray-600 hover:text-gray-900 cursor-pointer"> <!-- Icône de "like" -->
                      
                        <svg aria-label="Notifications" class="x1lliihq x1n2onr6 x5n08af text-[#464646]" fill="currentColor" height="20" role="img" viewBox="0 0 24 24" width="20">
                            
                            <path d="M16.792 3.904A4.989 4.989 0 0 1 21.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 
                            14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 0 1 4.708-5.218 4.21 4.21 0 0 1 3.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 0 1 3.679-1.938m0-2a6.04 6.04 0 0 0-4.797 2.127 6.052 6.052 0 0 0-4.787-2.127A6.985 6.985 0 0 0 .5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 0 0 3.518 3.018 2 2 0 0 0 2.174 0 45.263 45.263 0 0 0 3.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 0 0-6.708-7.218Z"></path>
                        </svg>
                        <span class=" text-[#464646]">5k</span> <!-- Nombre de "likes" -->
                    </div>
                    <!-- Icône de commentaire -->
                   <div class="flex gap-1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXMjNvC8B_jmTrgCxLhnjEsVatUlZcgdvJiKKndG3OBvBR3WCvokt2J_RiDgrsNea9jZA&amp;usqp=CAU" 
                    jsaction="VQAsE" class="sFlh5c pT0Scc" alt="IconExperience » I-Collection » Message Icon" jsname="JuXqh" style="max-width: 25px; width: 25px; height: 25px; " data-ilt="1715556188512">
                    <span class=" text-[#464646]">56</span> <!-- Nombre de "likes" -->
                   </div>
                   
                </div>

            </div>


               <!-- cadrs3 -->
               <div class="relative  justify-center w-96 px-8 py-4 bg-white border  border-gray-200 shadow-lg rounded-2xl "> <!-- Bordure grise, ombre, coins arrondis, texte centré -->
                <!-- Barre à gauche de couleur personnalisée -->
                <div class="absolute top-0 left-0 h-full bg-[#555555] w-2 rounded-tl-2xl rounded-bl-2xl"> <!-- Barre colorée -->
                </div>
            
                <!-- Contenu centré -->
                <img class="object-cover  object-center w-full mb-4 lg:h-48 md:h-36 rounded-xl" src="/image/Article1.jpeg" alt="Image">
            
                <h1 class="text-2xl mt-2  font-semibold leading-none tracking-tighter text-center text-[#000000] lg:text-2xl">Short headline.</h1>
                <h6 class="  mt-1 leading-none  font-semibold tracking-tighter text-center text-[#000000]">Short headline.</h6>
                <p class="text-base mt-6 justify-center leading-relaxed text-[#000000]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                
                <div class="mt-6">
                    <a href="#" class="inline-flex items-center font-semibold text-blue-600 hover:text-neutral-600">Read More »</a>
                </div>

                <div class="flex items-center space-x-3 justify-end"> <!-- Div avec des icônes espacées -->
                     <!-- Icône de "like" -->
                     <div class="flex items-center gap-1 text-gray-600 hover:text-gray-900 cursor-pointer"> <!-- Icône de "like" -->
                      
                        <svg aria-label="Notifications" class="x1lliihq x1n2onr6 x5n08af text-[#464646]" fill="currentColor" height="20" role="img" viewBox="0 0 24 24" width="20">
                            
                            <path d="M16.792 3.904A4.989 4.989 0 0 1 21.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 
                            14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 0 1 4.708-5.218 4.21 4.21 0 0 1 3.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 0 1 3.679-1.938m0-2a6.04 6.04 0 0 0-4.797 2.127 6.052 6.052 0 0 0-4.787-2.127A6.985 6.985 0 0 0 .5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 0 0 3.518 3.018 2 2 0 0 0 2.174 0 45.263 45.263 0 0 0 3.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 0 0-6.708-7.218Z"></path>
                        </svg>
                        <span class=" text-[#464646]">5k</span> <!-- Nombre de "likes" -->
                    </div>
                    <!-- Icône de commentaire -->
                   <div class="flex gap-1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXMjNvC8B_jmTrgCxLhnjEsVatUlZcgdvJiKKndG3OBvBR3WCvokt2J_RiDgrsNea9jZA&amp;usqp=CAU" 
                    jsaction="VQAsE" class="sFlh5c pT0Scc" alt="IconExperience » I-Collection » Message Icon" jsname="JuXqh" style="max-width: 25px; width: 25px; height: 25px; " data-ilt="1715556188512">
                    <span class=" text-[#464646]">56</span> <!-- Nombre de "likes" -->
                   </div>
                   
                </div>

            </div>
                
        </div>

        <div class="flex justify-center items-center text-center mt-10">
            <a href="#" class="block pb-1 mt-2 text-base text-[#FFCD05] w-48 uppercase border-b border-transparent hover:border-[#FFCD05]">
                View All Articles  ->
            </a>
        </div>
    </section>



    <section class="fixed w-full bottom-0 right-0 flex flex-col  "> <!-- Section fixe en bas à droite -->
        <!-- Conteneur de boutons centré -->
        <div class="flex justify-end mr-4 "> <!-- Centre les éléments -->
          <!-- Bouton "Remonter en haut" -->
          <button 
            id="scroll-top-btn" 
            class=" text-black py-2 px-2 w-14 h-14 bg-[#FFCD05] rounded-full" 
            title="Remonter en haut"
            style="display: block;"> <!-- Afficher par défaut -->
            <i class="fas fa-arrow-up fa-2x"></i> <!-- Icône de flèche vers le haut -->
          </button>
        </div>
    </section>

    
</main>


<?php include 'footer.php'; ?>











</body>
</html>