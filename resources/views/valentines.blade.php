<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Happy Valentine's Day</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:400,700|dancing-script:400,700|great-vibes:400|pacifico:400|sacramento:400" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-pink-50 via-white to-pink-100 min-h-screen overflow-x-hidden">
    <div id="hearts-container" class="fixed inset-0 pointer-events-none z-0"></div>
    <div class="container mx-auto px-2 sm:px-4 py-8 max-w-6xl relative z-10 overflow-visible">
        <header class="text-center mb-12 px-2 sm:px-4 md:px-8 overflow-visible w-full">
            <div class="overflow-visible w-full">
                <h1 id="animatedTitle" class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-pink-600 mb-4 transition-all duration-1000 overflow-visible inline-block">
                    <span class="title-content">Happy Valentine's Day</span>
                </h1>
            </div>
            <p class="text-xl md:text-2xl text-pink-400 font-script mb-8" style="font-family: 'Dancing Script', cursive;">
                A journey of love through time
            </p>
        </header>

        <section class="mb-16 max-w-3xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 border-4 border-pink-200 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-pink-100 rounded-full -mr-16 -mt-16 opacity-50"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-pink-200 rounded-full -ml-12 -mb-12 opacity-30"></div>
                <div class="relative z-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-pink-600 mb-6 font-serif text-center">My Dearest Bubu</h2>
                    <div class="text-gray-700 leading-relaxed text-lg space-y-4 font-serif">
                        <p class="text-center italic text-pink-500 mb-6">"In your smile, I see something more beautiful than the stars."</p>
                        <p>From the moment our paths crossed, my world changed in ways I never imagined possible. Every day with you feels like a gift, every moment a treasure I hold close to my heart.</p>
                        <p>Through all these days together, you've been my constant, my anchor, my greatest adventure. I am endlessly grateful for every sunrise we've shared and every sunset we've watched together.</p>
                        <p>Sorry that this year I could not do anything for you, but I will make it up to you next year.</p>
                        <p class="text-center mt-8 text-xl text-pink-600 font-bold">Forever yours,</p>
                        <p class="text-center text-pink-500 font-script text-2xl" style="font-family: 'Dancing Script', cursive;">With all my love ❤️</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-16">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-3xl md:text-4xl font-bold text-pink-600 mb-6 font-serif text-center">Days Together</h2>
                <div class="day-counter-container relative">
                    <div class="flip-card bg-white rounded-2xl shadow-2xl p-8 border-4 border-pink-200">
                        <div class="flip-card-inner relative">
                            <div class="flip-card-front absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-pink-400 text-sm md:text-base mb-2 font-medium">DAY</div>
                                    <div id="dayCounter" class="text-6xl md:text-8xl font-bold text-pink-600 font-mono tabular-nums">0</div>
                                </div>
                            </div>
                            <div class="flip-card-back absolute inset-0 flex items-center justify-center opacity-0">
                                <div class="text-center">
                                    <div class="text-pink-400 text-sm md:text-base mb-2 font-medium">DAY</div>
                                    <div id="dayCounterNext" class="text-6xl md:text-8xl font-bold text-pink-600 font-mono tabular-nums">0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-16">
            <h2 class="text-4xl font-bold text-pink-600 text-center mb-8 font-serif">Our Story in Pictures</h2>
            <div class="image-comparison-container bg-white rounded-2xl shadow-lg p-4 md:p-6 max-w-4xl mx-auto">
                <div class="relative w-full h-64 md:h-96 rounded-xl overflow-hidden bg-pink-50">
                    <div id="imageContainer" class="relative w-full h-full cursor-pointer flex items-center justify-center">
                        <img id="currentImage" src="/images/image_1.jpg" alt="Our Story" class="absolute inset-0 w-full h-full object-contain transition-opacity duration-1000">
                    </div>
                    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-4 flex-wrap justify-center z-10">
                        <button id="prevBtn" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded-full transition-all shadow-lg hover:scale-105 active:scale-95">
                            ← Previous
                        </button>
                        <button id="nextBtn" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded-full transition-all shadow-lg hover:scale-105 active:scale-95">
                            Next →
                        </button>
                    </div>
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 md:px-4 py-1.5 md:py-2 rounded-full shadow-md z-10">
                        <span id="imageCounter" class="text-pink-600 font-semibold text-sm md:text-base">1 / 8</span>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section class="mb-16">
            <h2 class="text-4xl font-bold text-pink-600 text-center mb-8 font-serif">A Special One for You 💕</h2>
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl p-4 md:p-6 border-4 border-pink-200">
                <div class="relative w-full aspect-video rounded-xl overflow-hidden bg-pink-50">
                    <video id="valentineVideo" class="w-full h-full object-contain" controls poster="/images/image_1.jpg">
                        <source src="/videos/Valentines.mov" type="video/quicktime">
                        <source src="/videos/Valentines.mov" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div id="videoLoading" class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-pink-100 to-pink-50 z-10 transition-opacity duration-300">
                        <div class="text-center">
                            <div class="loading-spinner mb-4">
                                <svg class="animate-spin h-16 w-16 text-pink-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </div>
                            <p class="text-pink-600 text-xl font-serif mb-2">Loading your special message...</p>
                            <p class="text-pink-400 text-sm">Buffering video, please wait ❤️</p>
                        </div>
                    </div>
                    <div id="videoPlaceholder" class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-pink-100 to-pink-50 cursor-pointer hover:from-pink-200 hover:to-pink-100 transition-all hidden z-20">
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-16">
            <h2 class="text-4xl font-bold text-pink-600 text-center mb-8 font-serif">Our Kids 🐱</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto mb-8">
                <div class="cat-frame bg-white rounded-2xl shadow-xl p-6 border-4 border-pink-200 hover:border-pink-400 transition-all transform hover:scale-105">
                    <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-pink-50 flex items-center justify-center">
                        <img id="cat1" src="/cat/cotton.JPEG" alt="Cotton" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-pink-600 text-center font-serif">Cotton</h3>
                </div>
                <div class="cat-frame bg-white rounded-2xl shadow-xl p-6 border-4 border-pink-200 hover:border-pink-400 transition-all transform hover:scale-105">
                    <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-pink-50 flex items-center justify-center">
                        <img id="cat2" src="/cat/fifi.jpg" alt="Fifi" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-pink-600 text-center font-serif">Fifi</h3>
                </div>
                <div class="cat-frame bg-white rounded-2xl shadow-xl p-6 border-4 border-pink-200 hover:border-pink-400 transition-all transform hover:scale-105">
                    <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-pink-50 flex items-center justify-center">
                        <img id="cat3" src="/cat/mochi.jpg" alt="Mochi" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-pink-600 text-center font-serif">Mochi</h3>
                </div>
            </div>
            <p class="text-center text-gray-700 text-lg max-w-3xl mx-auto font-serif">
                They're not just pets—they're our family, our kids, and they make our love story even more special. ❤️
            </p>
        </section>

        <section class="mb-16">
            <h2 class="text-4xl font-bold text-pink-600 text-center mb-12 font-serif">Our Love Timeline</h2>
            <div class="timeline-container relative max-w-4xl mx-auto">
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-pink-300 via-pink-400 to-pink-300 hidden md:block"></div>
                
                <div class="timeline-item mb-12 relative">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full md:w-1/2 md:pr-8 mb-4 md:mb-0 text-right">
                            <div class="bg-white rounded-2xl shadow-lg p-6 border-2 border-pink-200 hover:border-pink-400 transition-all">
                                <div class="text-pink-500 font-semibold mb-2">December 11, 2016</div>
                                <h3 class="text-2xl font-bold text-pink-600 mb-3 font-serif">The Beginning</h3>
                                <p class="text-gray-700 leading-relaxed">The day our story began. I didn't know it then, but you were about to become the most important person in my life. Every moment since has been a gift.</p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-pink-500 rounded-full border-4 border-white shadow-lg z-10 hidden md:block"></div>
                        <div class="w-full md:w-1/2 md:pl-8"></div>
                    </div>
                </div>

                <div class="timeline-item mb-12 relative">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full md:w-1/2 md:pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-pink-500 rounded-full border-4 border-white shadow-lg z-10 hidden md:block"></div>
                        <div class="w-full md:w-1/2 md:pl-8">
                            <div class="bg-white rounded-2xl shadow-lg p-6 border-2 border-pink-200 hover:border-pink-400 transition-all">
                                <div class="text-pink-500 font-semibold mb-2">Our First Year</div>
                                <h3 class="text-2xl font-bold text-pink-600 mb-3 font-serif">Discovering You</h3>
                                <p class="text-gray-700 leading-relaxed">I may not always keep my promises, and I'm far from perfect, but through it all, you've never left my side. Your unwavering love and patience taught me that true love isn't about perfection—it's about choosing each other, every single day, flaws and all.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item mb-12 relative">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full md:w-1/2 md:pr-8 mb-4 md:mb-0 text-right">
                            <div class="bg-white rounded-2xl shadow-lg p-6 border-2 border-pink-200 hover:border-pink-400 transition-all">
                                <div class="text-pink-500 font-semibold mb-2">The Moment I Knew</div>
                                <h3 class="text-2xl font-bold text-pink-600 mb-3 font-serif">You're My Person</h3>
                                <p class="text-gray-700 leading-relaxed">There was a moment when I looked at you and thought, "What would I become without you?" You became my home, my safe place, my everything.</p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-pink-500 rounded-full border-4 border-white shadow-lg z-10 hidden md:block"></div>
                        <div class="w-full md:w-1/2 md:pl-8"></div>
                    </div>
                </div>

                <div class="timeline-item mb-12 relative">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full md:w-1/2 md:pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-pink-500 rounded-full border-4 border-white shadow-lg z-10 hidden md:block"></div>
                        <div class="w-full md:w-1/2 md:pl-8">
                            <div class="bg-white rounded-2xl shadow-lg p-6 border-2 border-pink-200 hover:border-pink-400 transition-all">
                                <div class="text-pink-500 font-semibold mb-2">Today & Always</div>
                                <h3 class="text-2xl font-bold text-pink-600 mb-3 font-serif">My Forever</h3>
                                <p class="text-gray-700 leading-relaxed">Through every season, every challenge, every joy—you've been my constant. I love you more today than yesterday, and I'll love you even more tomorrow. Here's to all our days together, my love.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-16 max-w-3xl mx-auto">
            <div class="bg-gradient-to-br from-pink-100 to-pink-50 rounded-3xl shadow-xl p-8 md:p-12 border-4 border-pink-200">
                <h2 class="text-3xl md:text-4xl font-bold text-pink-600 mb-6 font-serif text-center">Our Future</h2>
                <div class="text-gray-700 leading-relaxed text-lg space-y-4 text-center">
                    <p class="font-serif">I can't wait to create countless more memories with you.</p>
                    <p class="font-serif">To grow old together, to share a lifetime of laughter, to build our dreams side by side.</p>
                    <p class="font-serif">Every day I look forward to waking up next to you, to our adventures together, to all the moments we haven't lived yet.</p>
                    <p class="text-2xl text-pink-600 font-bold mt-8 font-serif">Here's to forever, my love.</p>
                </div>
            </div>
        </section>

        <footer class="text-center py-8">
            <p class="text-pink-400 text-lg font-script mb-4" style="font-family: 'Dancing Script', cursive;">
                Made with ❤️ for you
            </p>
            <p class="text-pink-300 text-sm">
                Every day with you is a blessing
            </p>
        </footer>
    </div>

    <div id="whatsappChat" class="fixed bottom-6 right-6 z-50">
        <a id="whatsappLink" href="https://wa.me/+60104649819?text=Hi,%20my%20love.%20I%20am%20ready%20to%20be%20your%20Valentines'%20date%20tomorrow%20night." target="_blank" class="whatsapp-button bg-green-500 hover:bg-green-600 text-white rounded-full p-4 shadow-2xl transition-all duration-300 hover:scale-110 flex items-center justify-center group">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
            <span class="whatsapp-tooltip absolute right-full mr-3 px-3 py-2 bg-gray-800 text-white text-sm rounded-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                Send me a message ❤️
            </span>
        </a>
    </div>

    <div id="whatsappPrompt" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
        <div class="bg-white rounded-3xl shadow-2xl p-8 max-w-md mx-4 text-center transform transition-all relative">
            <button id="closePromptBtn" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-2xl font-bold w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-all">
                ×
            </button>
            <div class="text-6xl mb-4">💕</div>
            <h2 class="text-3xl font-bold text-pink-600 mb-4 font-serif">Don't leave yet!</h2>
            <p id="promptMessage" class="text-gray-700 mb-6 text-lg">Send me a message on WhatsApp first! ❤️</p>
            <div class="flex gap-4 justify-center">
                <a id="promptWhatsappLink" href="https://wa.me/+60104649819?text=Hi,%20my%20love.%20I%20am%20ready%20to%20be%20your%20Valentines'%20date%20tomorrow%20night." target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-full text-lg font-semibold transition-all shadow-lg hover:scale-105">
                    Open WhatsApp 💚
                </a>
            </div>
        </div>
    </div>

    <style>
        .font-script {
            font-family: 'Dancing Script', cursive;
        }
        .font-serif {
            font-family: 'Playfair Display', serif;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .timeline-item {
            animation: fadeIn 0.6s ease-out;
        }
        .day-counter-container {
            perspective: 1200px;
        }
        .flip-card {
            width: 280px;
            height: 200px;
            position: relative;
            transform-style: preserve-3d;
        }
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.6s ease;
        }
        .flip-card-front,
        .flip-card-back {
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            border-radius: 1rem;
        }
        .flip-card-back {
            transform: rotateX(180deg);
        }
        .flip {
            transform: rotateX(180deg);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }
        .flip-card-front::before,
        .flip-card-back::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.05) 0%, transparent 50%);
            border-radius: 1rem;
            pointer-events: none;
        }
        .cat-frame {
            animation: fadeIn 0.8s ease-out;
            animation-fill-mode: both;
        }
        .cat-frame:nth-child(1) { animation-delay: 0.1s; }
        .cat-frame:nth-child(2) { animation-delay: 0.3s; }
        .cat-frame:nth-child(3) { animation-delay: 0.5s; }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        @keyframes fall {
            0% {
                transform: translateY(-100vh) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
        .heart {
            position: absolute;
            font-size: 20px;
            color: rgba(236, 72, 153, 0.6);
            animation: fall linear infinite;
            pointer-events: none;
        }
        #animatedTitle {
            transition: all 1s ease-in-out;
            overflow: visible !important;
            word-wrap: break-word;
            max-width: 100%;
            position: relative;
            z-index: 1;
        }
        .title-content {
            display: inline-block;
            overflow: visible;
            white-space: nowrap;
        }
        header {
            overflow: visible !important;
            width: 100%;
        }
        header > div {
            overflow: visible !important;
            width: 100%;
        }
        @media (max-width: 640px) {
            .title-content {
                white-space: normal;
                word-break: break-word;
            }
        }
        .title-style-1 {
            font-family: 'Great Vibes', cursive;
            background: linear-gradient(135deg, #ec4899, #f472b6, #fbbf24);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(236, 72, 153, 0.3);
            animation: float 3s ease-in-out infinite;
        }
        .title-style-1::before {
            content: '🌸 ';
        }
        .title-style-1::after {
            content: ' 🌸';
        }
        .title-style-2 {
            font-family: 'Pacifico', cursive;
            color: #ec4899;
            text-shadow: 2px 2px 4px rgba(236, 72, 153, 0.3), 0 0 20px rgba(251, 191, 36, 0.5);
            animation: pulse 2s ease-in-out infinite;
        }
        .title-style-2::before {
            content: '💐 ';
        }
        .title-style-2::after {
            content: ' 💐';
        }
        .title-style-3 {
            font-family: 'Sacramento', cursive;
            background: linear-gradient(45deg, #f43f5e, #ec4899, #d946ef);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 3s ease-in-out infinite;
        }
        .title-style-3::before {
            content: '🌺 ';
        }
        .title-style-3::after {
            content: ' 🌺';
        }
        .title-style-4 {
            font-family: 'Dancing Script', cursive;
            color: #db2777;
            text-shadow: 0 0 10px rgba(219, 39, 119, 0.5), 0 0 20px rgba(251, 191, 36, 0.3);
            animation: bounce 2s ease-in-out infinite;
        }
        .title-style-4::before {
            content: '🌷 ';
        }
        .title-style-4::after {
            content: ' 🌷';
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        @keyframes shimmer {
            0%, 100% { filter: brightness(1); }
            50% { filter: brightness(1.3); }
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .whatsapp-button {
            width: 64px;
            height: 64px;
            animation: pulse-whatsapp 2s ease-in-out infinite;
            position: relative;
        }
        @keyframes pulse-whatsapp {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
            }
            50% {
                box-shadow: 0 0 0 10px rgba(34, 197, 94, 0);
            }
        }
        .whatsapp-tooltip::after {
            content: '';
            position: absolute;
            left: 100%;
            top: 50%;
            transform: translateY(-50%);
            border: 6px solid transparent;
            border-left-color: #1f2937;
        }
        #whatsappPrompt {
            display: flex;
            animation: fadeInPrompt 0.3s ease-out;
        }
        #whatsappPrompt.hidden {
            display: none;
        }
        @keyframes fadeInPrompt {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</body>
</html>
