// Media Intelligence Carousel
document.addEventListener('DOMContentLoaded', function () {
    const categories = ['news', 'social', 'policy', 'broadcasts', 'podcasts', 'newsletters'];
    const images = {
        'news': 'https://framerusercontent.com/images/5XE6Em1yp20CQamkzQEcwb1DFzU.png?scale-down-to=1024',
        'social': 'https://framerusercontent.com/images/yXqiDPeFWT2cIwkbhKylcuVaX0.png?scale-down-to=1024',
        'policy': 'https://framerusercontent.com/images/Gq520mpoLjGbAXHWrH5Bpfs7s.png?scale-down-to=1024',
        'broadcasts': 'https://framerusercontent.com/images/A8C6UEwecpNQopvPRUDKWEqV08c.png?scale-down-to=1024',
        'podcasts': 'https://framerusercontent.com/images/47PaIaQJPmkfuEXD6AF8HtEwtw.png?scale-down-to=1024',
        'newsletters': 'https://framerusercontent.com/images/zLdXAsoqcFKwSzysvEogJVXWyVo.png?scale-down-to=1024'
    };

    let currentIndex = 0;
    const imageElement = document.getElementById('media-image');
    const nextButton = document.getElementById('media-next-btn');
    const prevButton = document.getElementById('media-prev-btn');
    const pills = document.querySelectorAll('.category-pill');

    if (!imageElement || !nextButton || !prevButton) return;

    function updateButtonVisibility(index) {
        const totalCategories = categories.length;

        if (index === 0) {
            prevButton.classList.add('hidden');
        } else {
            prevButton.classList.remove('hidden');
        }

        if (index === totalCategories - 1) {
            nextButton.classList.add('hidden');
        } else {
            nextButton.classList.remove('hidden');
        }
    }

    function updateActiveCategory(index) {
        pills.forEach(pill => {
            pill.classList.remove('active');
            pill.classList.add('bg-gray-100', 'dark:bg-gray-800', 'text-gray-600', 'dark:text-gray-400', 'border', 'border-gray-200', 'dark:border-gray-700');
            pill.classList.remove('bg-gray-800', 'text-white');
        });

        const currentPill = pills[index];
        if (currentPill) {
            currentPill.classList.add('active', 'bg-gray-800', 'text-white');
            currentPill.classList.remove('bg-gray-100', 'dark:bg-gray-800', 'text-gray-600', 'dark:text-gray-400', 'border', 'border-gray-200', 'dark:border-gray-700');

            const currentCategory = categories[index];
            imageElement.style.opacity = '0';
            setTimeout(() => {
                imageElement.src = images[currentCategory];
                imageElement.style.opacity = '1';
            }, 150);

            updateButtonVisibility(index);
        }
    }

    nextButton.addEventListener('click', function () {
        if (currentIndex < categories.length - 1) {
            currentIndex++;
            updateActiveCategory(currentIndex);
        }
    });

    prevButton.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateActiveCategory(currentIndex);
        }
    });

    pills.forEach((pill, index) => {
        pill.addEventListener('click', function () {
            currentIndex = index;
            updateActiveCategory(currentIndex);
        });
    });

    updateButtonVisibility(0);
});

// Testimonials slider
document.addEventListener('DOMContentLoaded', function () {
    const cards = Array.from(document.querySelectorAll('.testimonial-card'));
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');

    if (!cards.length || !prevBtn || !nextBtn) return;

    let startIndex = 0;
    let direction = 1;

    function getPerView() {
        if (window.innerWidth >= 1280) return 5;
        if (window.innerWidth >= 768) return 3;
        return 1;
    }

    function animateVisible() {
        const perView = getPerView();
        const total = cards.length;
        if (total <= perView) {
            cards.forEach(card => {
                card.classList.remove('hidden');
                card.style.opacity = '1';
                card.style.transform = 'translateX(0)';
                card.style.transition = 'none';
            });
            return;
        }

        startIndex = ((startIndex % total) + total) % total;

        cards.forEach((card, index) => {
            const offset = (index - startIndex + total) % total;
            const visible = offset < perView;

            if (visible) {
                card.classList.remove('hidden');
                card.style.opacity = '0';
                card.style.transform = `translateX(${direction * 40}px)`;
                requestAnimationFrame(() => {
                    card.style.transition = 'transform 0.4s ease-out, opacity 0.4s ease-out';
                    card.style.opacity = '1';
                    card.style.transform = 'translateX(0)';
                });
            } else {
                card.classList.add('hidden');
            }
        });
    }

    prevBtn.addEventListener('click', function () {
        direction = -1;
        startIndex -= 1;
        animateVisible();
    });

    nextBtn.addEventListener('click', function () {
        direction = 1;
        startIndex += 1;
        animateVisible();
    });

    window.addEventListener('resize', animateVisible);
    animateVisible();
});

// Customer hero slider
document.addEventListener('DOMContentLoaded', function () {
    const slides = Array.from(document.querySelectorAll('.customer-slide'));
    const prev = document.getElementById('customer-prev');
    const next = document.getElementById('customer-next');

    if (!slides.length || !prev || !next) return;

    let current = 0;

    function updateCustomerSlider() {
        const total = slides.length;

        slides.forEach((slide, index) => {
            const offset = (index - current + total) % total;

            slide.style.zIndex = '0';

            if (offset === 0) {
                slide.style.opacity = '1';
                slide.style.transform = 'translateX(0) scale(1)';
                slide.style.filter = 'blur(0px)';
                slide.style.zIndex = '20';
            } else if (offset === 1 || offset === total - 1) {
                const sideDirection = offset === 1 ? 1 : -1;
                slide.style.opacity = '0.35';
                slide.style.transform = `translateX(${sideDirection * 160}px) scale(0.9)`;
                slide.style.filter = 'blur(1px)';
                slide.style.zIndex = '10';
            } else {
                slide.style.opacity = '0';
                slide.style.transform = 'translateX(0) scale(0.9)';
                slide.style.filter = 'blur(0px)';
            }
        });
    }

    next.addEventListener('click', function () {
        current = (current + 1) % slides.length;
        updateCustomerSlider();
    });

    prev.addEventListener('click', function () {
        current = (current - 1 + slides.length) % slides.length;
        updateCustomerSlider();
    });

    updateCustomerSlider();
});

// Reporting Section Carousel
document.addEventListener('DOMContentLoaded', function () {
    const reportingImages = [
        'https://framerusercontent.com/images/oEFlkGZtdOMSevaNvE0TaVBjSUI.png?scale-down-to=2048&width=2144&height=2056',
        'https://framerusercontent.com/images/oEFlkGZtdOMSevaNvE0TaVBjSUI.png?scale-down-to=2048&width=2144&height=2056',
        'https://framerusercontent.com/images/oEFlkGZtdOMSevaNvE0TaVBjSUI.png?scale-down-to=2048&width=2144&height=2056'
    ];

    let reportingCurrentIndex = 0;
    const reportingImageElement = document.getElementById('reporting-image');
    const reportingNextButton = document.getElementById('reporting-next-btn');
    const reportingPrevButton = document.getElementById('reporting-prev-btn');

    if (!reportingImageElement || !reportingNextButton || !reportingPrevButton) return;

    function updateReportingButtonVisibility(index) {
        const totalImages = reportingImages.length;

        if (index === 0) {
            reportingPrevButton.classList.add('hidden');
        } else {
            reportingPrevButton.classList.remove('hidden');
        }

        if (index === totalImages - 1) {
            reportingNextButton.classList.add('hidden');
        } else {
            reportingNextButton.classList.remove('hidden');
        }
    }

    function updateReportingImage(index) {
        reportingImageElement.style.opacity = '0';
        setTimeout(() => {
            reportingImageElement.src = reportingImages[index];
            reportingImageElement.style.opacity = '1';
        }, 150);
        updateReportingButtonVisibility(index);
    }

    reportingNextButton.addEventListener('click', function () {
        if (reportingCurrentIndex < reportingImages.length - 1) {
            reportingCurrentIndex++;
            updateReportingImage(reportingCurrentIndex);
        }
    });

    reportingPrevButton.addEventListener('click', function () {
        if (reportingCurrentIndex > 0) {
            reportingCurrentIndex--;
            updateReportingImage(reportingCurrentIndex);
        }
    });

    updateReportingButtonVisibility(0);
});

// Analysis Section Carousel
document.addEventListener('DOMContentLoaded', function () {
    const analysisImages = [
        'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120',
        'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120',
        'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120',
        'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120',
        'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120'
    ];

    let analysisCurrentIndex = 0;
    const analysisImageElement = document.getElementById('analysis-image');
    const analysisNextButton = document.getElementById('analysis-next-btn');
    const analysisPrevButton = document.getElementById('analysis-prev-btn');

    if (!analysisImageElement || !analysisNextButton || !analysisPrevButton) return;

    function updateAnalysisImage(index) {
        analysisImageElement.style.opacity = '0';
        setTimeout(() => {
            analysisImageElement.src = analysisImages[index];
            analysisImageElement.style.opacity = '1';
        }, 150);
    }

    analysisPrevButton.classList.remove('hidden');
    analysisNextButton.classList.remove('hidden');

    analysisNextButton.addEventListener('click', function () {
        analysisCurrentIndex = (analysisCurrentIndex + 1) % analysisImages.length;
        updateAnalysisImage(analysisCurrentIndex);
    });

    analysisPrevButton.addEventListener('click', function () {
        analysisCurrentIndex = (analysisCurrentIndex - 1 + analysisImages.length) % analysisImages.length;
        updateAnalysisImage(analysisCurrentIndex);
    });
});

