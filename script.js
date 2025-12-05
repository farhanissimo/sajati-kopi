document.addEventListener('DOMContentLoaded', function() {
    // --- LOGIKA SLIDER (SAMA SEPERTI SEBELUMNYA) ---
    const banner = document.getElementById('heroBanner');
    const dotsContainer = document.querySelector('.slider-dots');
    const arrowLeft = document.querySelector('.arrow-left');
    const arrowRight = document.querySelector('.arrow-right');
    
    const images = [
        'images/indoor.jpg',       
        'images/indoorYellow.jpg', 
        'images/outdoor3.jpg'      
    ];
    
    let currentIndex = 0;

    if (banner && images.length > 0) {
        function updateBanner(index) {
            banner.style.backgroundImage = `url('${images[index]}')`;
            dotsContainer.innerHTML = ''; 
            images.forEach((_, i) => {
                const dot = document.createElement('span');
                dot.classList.add('dot'); 
                if (i === index) dot.classList.add('active');
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    updateBanner(currentIndex);
                });
                dotsContainer.appendChild(dot);
            });
        }
        
        arrowLeft.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateBanner(currentIndex);
        });

        arrowRight.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            updateBanner(currentIndex);
        });

        updateBanner(currentIndex);
    }
    
    // --- LOGIKA HAMBURGER MENU (BARU) ---
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".navbar-menu");
    const navLink = document.querySelectorAll(".navbar-menu a"); // Ambil semua link menu

    if (hamburger && navMenu) {
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });

        // Tutup menu saat salah satu link diklik (agar tidak menutupi konten)
        navLink.forEach(n => n.addEventListener("click", () => {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }));
    }

    // --- SMOOTH SCROLL ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            if (this.getAttribute('href') !== '#') {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if(target){
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
});

/* ... Kode Slider sebelumnya ... */

/* --- LOGIKA ANIMASI SCROLL --- */
document.addEventListener('DOMContentLoaded', function() {
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150; // Jarak dari bawah layar sebelum muncul

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                // Opsional: Hapus else jika ingin animasi hanya sekali jalan
                // reveals[i].classList.remove("active"); 
            }
        }
    }

    // Jalankan saat di-scroll
    window.addEventListener("scroll", reveal);
    
    // Jalankan sekali saat halaman dimuat
    reveal();
});