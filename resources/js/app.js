import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    const images = [
        '/images/image_1.jpg',
        '/images/image_2.jpg',
        '/images/image_3.jpg',
        '/images/image_4.jpg',
        '/images/image_5.jpg',
        '/images/image_6.jpg',
        '/images/image_7.jpg',
        '/images/image_8.jpg'
    ];

    let currentIndex = 0;
    const currentImage = document.getElementById('currentImage');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const imageCounter = document.getElementById('imageCounter');
    let isTransitioning = false;

    function updateImage() {
        if (isTransitioning) return;
        isTransitioning = true;

        currentImage.style.opacity = '0';

        setTimeout(() => {
            currentImage.src = images[currentIndex];
            imageCounter.textContent = `${currentIndex + 1} / ${images.length}`;

            setTimeout(() => {
                currentImage.style.opacity = '1';
                isTransitioning = false;
            }, 300);
        }, 300);
    }

    function nextImage() {
        if (isTransitioning) return;
        currentIndex = (currentIndex + 1) % images.length;
        updateImage();
    }

    function prevImage() {
        if (isTransitioning) return;
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateImage();
    }

    nextBtn.addEventListener('click', nextImage);
    prevBtn.addEventListener('click', prevImage);

    let autoPlayInterval = setInterval(nextImage, 5000);

    const imageContainer = document.getElementById('imageContainer');
    imageContainer.addEventListener('mouseenter', () => {
        clearInterval(autoPlayInterval);
    });

    imageContainer.addEventListener('mouseleave', () => {
        autoPlayInterval = setInterval(nextImage, 5000);
    });

    imageContainer.addEventListener('click', (e) => {
        if (e.target === imageContainer || e.target.tagName === 'IMG') {
            const rect = imageContainer.getBoundingClientRect();
            const clickX = e.clientX - rect.left;
            const centerX = rect.width / 2;
            
            if (clickX < centerX) {
                prevImage();
            } else {
                nextImage();
            }
        }
    });

    const timelineItems = document.querySelectorAll('.timeline-item');
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeIn 0.6s ease-out';
            }
        });
    }, observerOptions);

    timelineItems.forEach(item => {
        observer.observe(item);
    });

    const dayCounter = document.getElementById('dayCounter');
    const dayCounterNext = document.getElementById('dayCounterNext');
    const flipCardInner = document.querySelector('.flip-card-inner');
    const flipCardFront = document.querySelector('.flip-card-front');
    const flipCardBack = document.querySelector('.flip-card-back');
    
    if (dayCounter && dayCounterNext && flipCardInner) {
        const startDate = new Date(2016, 11, 11);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        startDate.setHours(0, 0, 0, 0);
        const timeDiff = today.getTime() - startDate.getTime();
        const targetDays = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
        
        const duration = 5000;
        const startTime = Date.now();
        let lastDisplayedDay = -1;
        let animationFrameId = null;

        function updateCounter() {
            const elapsed = Date.now() - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const currentDays = Math.floor(progress * targetDays);

            if (currentDays !== lastDisplayedDay) {
                lastDisplayedDay = currentDays;
                
                dayCounterNext.textContent = currentDays;
                
                flipCardInner.classList.remove('flip');
                flipCardFront.style.opacity = '1';
                flipCardBack.style.opacity = '0';
                void flipCardInner.offsetWidth;
                
                flipCardInner.classList.add('flip');
                
                setTimeout(() => {
                    flipCardFront.style.opacity = '0';
                    flipCardBack.style.opacity = '1';
                }, 300);
                
                setTimeout(() => {
                    dayCounter.textContent = currentDays;
                    flipCardInner.classList.remove('flip');
                    flipCardFront.style.opacity = '1';
                    flipCardBack.style.opacity = '0';
                }, 600);
            }

            if (progress < 1) {
                animationFrameId = requestAnimationFrame(updateCounter);
            } else {
                if (lastDisplayedDay !== targetDays) {
                    dayCounterNext.textContent = targetDays;
                    flipCardInner.classList.remove('flip');
                    flipCardFront.style.opacity = '1';
                    flipCardBack.style.opacity = '0';
                    void flipCardInner.offsetWidth;
                    
                    flipCardInner.classList.add('flip');
                    
                    setTimeout(() => {
                        flipCardFront.style.opacity = '0';
                        flipCardBack.style.opacity = '1';
                    }, 300);
                    
                    setTimeout(() => {
                        dayCounter.textContent = targetDays;
                        flipCardInner.classList.remove('flip');
                        flipCardFront.style.opacity = '1';
                        flipCardBack.style.opacity = '0';
                    }, 600);
                }
            }
        }

        updateCounter();
    }

    const heartsContainer = document.getElementById('hearts-container');
    if (heartsContainer) {
        const heartSymbols = ['❤️', '💕', '💖', '💗', '💓', '💝', '💘', '💞'];
        
        function createHeart() {
            const heart = document.createElement('div');
            heart.className = 'heart';
            heart.textContent = heartSymbols[Math.floor(Math.random() * heartSymbols.length)];
            heart.style.left = Math.random() * 100 + '%';
            heart.style.animationDuration = (Math.random() * 3 + 2) + 's';
            heart.style.fontSize = (Math.random() * 10 + 15) + 'px';
            heart.style.opacity = Math.random() * 0.5 + 0.3;
            
            heartsContainer.appendChild(heart);
            
            setTimeout(() => {
                heart.remove();
            }, 5000);
        }
        
        setInterval(createHeart, 300);
    }

    const catFrames = document.querySelectorAll('.cat-frame');
    catFrames.forEach((frame, index) => {
        frame.addEventListener('click', function() {
            this.style.transform = 'scale(1.05)';
            setTimeout(() => {
                this.style.transform = '';
            }, 200);
        });
    });

    const animatedTitle = document.getElementById('animatedTitle');
    const titleContent = document.querySelector('.title-content');
    const titleStyles = ['title-style-1', 'title-style-2', 'title-style-3', 'title-style-4'];
    let currentStyleIndex = 0;

    function changeTitleStyle() {
        if (animatedTitle && titleContent) {
            animatedTitle.classList.remove(...titleStyles);
            animatedTitle.classList.add(titleStyles[currentStyleIndex]);
            currentStyleIndex = (currentStyleIndex + 1) % titleStyles.length;
        }
    }

    if (animatedTitle) {
        animatedTitle.classList.add(titleStyles[0]);
        setInterval(changeTitleStyle, 3000);
    }

    let whatsappClicked = false;
    let closeChances = 3;
    const whatsappPrompt = document.getElementById('whatsappPrompt');
    const whatsappLink = document.getElementById('whatsappLink');
    const promptWhatsappLink = document.getElementById('promptWhatsappLink');
    const closePromptBtn = document.getElementById('closePromptBtn');
    const promptMessage = document.getElementById('promptMessage');

    function updatePromptMessage() {
        if (promptMessage) {
            if (closeChances > 0) {
                promptMessage.textContent = `Send me a message on WhatsApp first! ❤️ (You can close this ${closeChances} more time${closeChances > 1 ? 's' : ''})`;
            } else {
                promptMessage.textContent = 'You must send a WhatsApp message to continue! ❤️';
            }
        }
    }

    function showWhatsappPrompt() {
        if (!whatsappClicked && whatsappPrompt) {
            updatePromptMessage();
            if (closePromptBtn) {
                if (closeChances > 0) {
                    closePromptBtn.style.display = 'flex';
                } else {
                    closePromptBtn.style.display = 'none';
                }
            }
            whatsappPrompt.classList.remove('hidden');
        }
    }

    function hideWhatsappPrompt() {
        if (whatsappPrompt) {
            whatsappPrompt.classList.add('hidden');
        }
    }

    function markWhatsappClicked() {
        whatsappClicked = true;
        hideWhatsappPrompt();
    }

    function closePrompt() {
        if (closeChances > 0) {
            closeChances--;
            hideWhatsappPrompt();
            updatePromptMessage();
        }
    }

    if (whatsappLink) {
        whatsappLink.addEventListener('click', markWhatsappClicked);
    }

    if (promptWhatsappLink) {
        promptWhatsappLink.addEventListener('click', markWhatsappClicked);
    }

    if (closePromptBtn) {
        closePromptBtn.addEventListener('click', closePrompt);
    }

    setInterval(showWhatsappPrompt, 60000);

    window.addEventListener('beforeunload', function(e) {
        if (!whatsappClicked) {
            e.preventDefault();
            e.returnValue = 'Please send a WhatsApp message before leaving! ❤️';
            return e.returnValue;
        }
    });

    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 'w' && !whatsappClicked) {
            e.preventDefault();
            showWhatsappPrompt();
        }
        if (e.key === 'Escape' && !whatsappPrompt.classList.contains('hidden')) {
            if (closeChances > 0) {
                closePrompt();
            }
        }
    });

    const valentineVideo = document.getElementById('valentineVideo');
    const videoPlaceholder = document.getElementById('videoPlaceholder');
    const videoLoading = document.getElementById('videoLoading');

    if (valentineVideo) {
        // Detect mobile device
        const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        
        // Optimize video for faster buffering
        valentineVideo.load(); // Force load immediately
        
        // Set buffering strategy for better performance
        if (valentineVideo.buffered && valentineVideo.buffered.length > 0) {
            // Try to buffer more aggressively
            valentineVideo.preload = 'auto';
        }

        // Show loading spinner while buffering
        function showLoading() {
            if (videoLoading) {
                videoLoading.classList.remove('opacity-0', 'hidden');
                videoLoading.classList.add('opacity-100');
            }
        }

        function hideLoading() {
            if (videoLoading) {
                videoLoading.classList.add('opacity-0');
                setTimeout(() => {
                    videoLoading.classList.add('hidden');
                }, 300);
            }
        }

        // Mobile-specific: Handle touch to start loading
        if (isMobile) {
            let videoTouched = false;
            const startVideoLoad = function() {
                if (!videoTouched) {
                    videoTouched = true;
                    showLoading();
                    valentineVideo.load();
                    // Remove listener after first touch
                    valentineVideo.removeEventListener('touchstart', startVideoLoad);
                    valentineVideo.removeEventListener('click', startVideoLoad);
                }
            };
            valentineVideo.addEventListener('touchstart', startVideoLoad, { once: true });
            valentineVideo.addEventListener('click', startVideoLoad, { once: true });
        }

        // Show loading when video starts loading
        valentineVideo.addEventListener('loadstart', function() {
            showLoading();
            if (videoPlaceholder) {
                videoPlaceholder.classList.add('hidden');
            }
        });

        // Show loading while waiting for data
        valentineVideo.addEventListener('waiting', function() {
            showLoading();
        });

        // Hide loading when video can play (buffered enough)
        valentineVideo.addEventListener('canplay', function() {
            hideLoading();
            // On mobile, try to play if user has interacted
            if (isMobile && videoTouched) {
                valentineVideo.play().catch(() => {
                    // Autoplay blocked, that's okay
                });
            }
        });

        // Hide loading when video can play through (fully buffered)
        valentineVideo.addEventListener('canplaythrough', function() {
            hideLoading();
        });

        // Hide loading when enough data is loaded (for faster initial play)
        valentineVideo.addEventListener('loadeddata', function() {
            // Only hide if we have enough buffered data
            if (valentineVideo.readyState >= 3) {
                hideLoading();
            }
            if (videoPlaceholder) {
                videoPlaceholder.classList.add('hidden');
            }
        });

        // Progress event - show progress on mobile
        valentineVideo.addEventListener('progress', function() {
            if (isMobile && valentineVideo.buffered.length > 0) {
                const bufferedEnd = valentineVideo.buffered.end(valentineVideo.buffered.length - 1);
                const duration = valentineVideo.duration;
                if (duration > 0 && bufferedEnd / duration > 0.1) {
                    // If 10% buffered, hide loading
                    hideLoading();
                }
            }
        });

        // Show placeholder on error
        valentineVideo.addEventListener('error', function(e) {
            hideLoading();
            console.error('Video error:', valentineVideo.error);
            if (videoPlaceholder) {
                videoPlaceholder.classList.remove('hidden');
            }
        });

        // Handle stalled video (common on mobile)
        valentineVideo.addEventListener('stalled', function() {
            // Try to resume loading
            if (isMobile) {
                valentineVideo.load();
            }
        });

        // Handle file input for placeholder
        if (videoPlaceholder) {
            videoPlaceholder.addEventListener('click', function() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'video/*';
                input.onchange = function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        showLoading();
                        const url = URL.createObjectURL(file);
                        valentineVideo.src = url;
                        valentineVideo.load();
                        videoPlaceholder.classList.add('hidden');
                    }
                };
                input.click();
            });

            // Check initial state
            if (valentineVideo.readyState >= 3) {
                hideLoading();
                videoPlaceholder.classList.add('hidden');
            } else {
                // Start loading immediately
                valentineVideo.load();
                showLoading();
            }
        } else {
            // Start loading immediately if no placeholder
            valentineVideo.load();
        }
    }
});
