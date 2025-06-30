<x-app-layout>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNook - Laravel Edition</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes flipPage {
            0% { transform: rotateY(0deg); }
            100% { transform: rotateY(-180deg); }
        }
        
        .flip {
            animation: flipPage 0.5s ease forwards;
        }
        
        .book-spine {
            transform: rotateY(60deg) translateZ(-5px);
            box-shadow: inset -5px 0 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="bg-gray-100 py-12 px-4 md:px-8 lg:px-12">
    <div class="container mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">Discover Your Next Read</h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-1">
            <!-- Book 1 - This would be a Laravel loop in your Blade template -->
            <div class="relative w-64 h-96 hover:-translate-y-1 transition-transform duration-300 cursor-pointer mx-auto" onclick="flipBook(event, this)">
                <div class="absolute inset-0 flex flex-col transform-style-preserve-3d hover:rotate-y-5 hover:scale-102 transition-transform duration-500 rounded shadow-lg overflow-hidden bg-white w-full">
                    <div class="absolute top-0 left-0 w-4 h-full bg-gradient-to-r from-gray-700 via-gray-600 to-gray-700 rounded-l book-spine"></div>
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0c1d3c1d-9998-414f-a47a-5b7aa3852097.png" alt="Fantasy novel with gold embossed title 'Eternal Kingdom' cover featuring a glowing sword in a stone" 
                         class="flex-1 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-white/95 px-4 py-3 shadow-md-t">
                        <h3 class="font-serif font-bold text-lg text-gray-800">Eternal Kingdom</h3>
                        <p class="text-gray-600 text-sm">By A.R. Blackwell</p>
                        <div class="flex justify-between mt-2 text-xs text-gray-500">
                            <span class="flex items-center">📖 412 pages</span>
                            <span class="flex items-center">⭐ 4.5</span>
                        </div>
                        <button class="w-full mt-2 px-3 py-1.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm rounded transition-colors duration-300">
                            Read Now
                        </button>
                    </div>
                </div>
            </div>
            <div class="relative w-64 h-96 hover:-translate-y-1 transition-transform duration-300 cursor-pointer mx-auto" onclick="flipBook(event, this)">
                <div class="absolute inset-0 flex flex-col transform-style-preserve-3d hover:rotate-y-5 hover:scale-102 transition-transform duration-500 rounded shadow-lg overflow-hidden bg-white w-full">
                    <div class="absolute top-0 left-0 w-4 h-full bg-gradient-to-r from-gray-700 via-gray-600 to-gray-700 rounded-l book-spine"></div>
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0c1d3c1d-9998-414f-a47a-5b7aa3852097.png" alt="Fantasy novel with gold embossed title 'Eternal Kingdom' cover featuring a glowing sword in a stone" 
                         class="flex-1 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-white/95 px-4 py-3 shadow-md-t">
                        <h3 class="font-serif font-bold text-lg text-gray-800">Eternal Kingdom</h3>
                        <p class="text-gray-600 text-sm">By A.R. Blackwell</p>
                        <div class="flex justify-between mt-2 text-xs text-gray-500">
                            <span class="flex items-center">📖 412 pages</span>
                            <span class="flex items-center">⭐ 4.5</span>
                        </div>
                        <button class="w-full mt-2 px-3 py-1.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm rounded transition-colors duration-300">
                            Read Now
                        </button>
                    </div>
                </div>
            </div>
            <div class="relative w-64 h-96 hover:-translate-y-1 transition-transform duration-300 cursor-pointer mx-auto" onclick="flipBook(event, this)">
                <div class="absolute inset-0 flex flex-col transform-style-preserve-3d hover:rotate-y-5 hover:scale-102 transition-transform duration-500 rounded shadow-lg overflow-hidden bg-white w-full">
                    <div class="absolute top-0 left-0 w-4 h-full bg-gradient-to-r from-gray-700 via-gray-600 to-gray-700 rounded-l book-spine"></div>
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0c1d3c1d-9998-414f-a47a-5b7aa3852097.png" alt="Fantasy novel with gold embossed title 'Eternal Kingdom' cover featuring a glowing sword in a stone" 
                         class="flex-1 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-white/95 px-4 py-3 shadow-md-t">
                        <h3 class="font-serif font-bold text-lg text-gray-800">Eternal Kingdom</h3>
                        <p class="text-gray-600 text-sm">By A.R. Blackwell</p>
                        <div class="flex justify-between mt-2 text-xs text-gray-500">
                            <span class="flex items-center">📖 412 pages</span>
                            <span class="flex items-center">⭐ 4.5</span>
                        </div>
                        <button class="w-full mt-2 px-3 py-1.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm rounded transition-colors duration-300">
                            Read Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function flipBook(event, element) {
            // Prevent triggering if clicking on the button
            if (event.target.closest('button')) {
                return;
            }
            
            const bookCover = element.querySelector('div > div');
            bookCover.classList.toggle('flip');
            
            // Reset animation after it completes
            setTimeout(() => {
                bookCover.classList.remove('flip');
            }, 500);
        }
        
       
    </script>
</body>
</html>



</x-app-layout>
