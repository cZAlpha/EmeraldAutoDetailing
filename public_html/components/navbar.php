<!-- NAVBAR with full-screen dropdown mobile menu & animated hamburger -->
<nav class="sticky top-0 z-50 bg-cream dark:bg-background-dark/90 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 transition-all">
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
         <a href="/" class="cursor-pointer flex items-center gap-3">
            <img alt="Emerald Auto Detailing Logo" class="h-14 w-14 object-contain" src="/assets/images/logo.png"/>
            <span class="font-display text-xl font-bold tracking-tight text-primary dark:text-white uppercase">Emerald Auto Detailing</span>
         </a>
         
         <!-- Desktop Navigation -->
         <div class="hidden md:flex items-center space-x-8">
            <a href="/" class="text-sm font-semibold hover:text-primary transition-colors duration-300">Home</a>
            <a href="/#services" class="text-sm font-semibold hover:text-primary transition-colors duration-300">Services</a>
            <a href="/gallery/" class="text-sm font-semibold hover:text-primary transition-colors duration-300">Gallery</a>
            <a href="/#testimonials" class="text-sm font-semibold hover:text-primary transition-colors duration-300">Testimonials</a>
            <a href="/book/" class="bg-primary text-white px-6 py-2.5 rounded-full font-bold hover:bg-opacity-90 shadow-lg transition-all duration-300">Book Now</a>
         </div>
         
         <!-- Mobile menu button with animated hamburger -->
         <button id="mobileMenuBtn" class="md:hidden relative w-10 h-10 flex items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors duration-300 focus:outline-none" aria-label="Menu">
            <div class="relative w-6 h-5">
               <span class="hamburger-line line1 absolute top-0 left-0 w-full h-0.5 bg-slate-700 dark:bg-slate-200 rounded-full transition-all duration-300 ease-out"></span>
               <span class="hamburger-line line2 absolute top-1/2 left-0 w-full h-0.5 bg-slate-700 dark:bg-slate-200 rounded-full transition-all duration-300 ease-out -translate-y-1/2"></span>
               <span class="hamburger-line line3 absolute bottom-0 left-0 w-full h-0.5 bg-slate-700 dark:bg-slate-200 rounded-full transition-all duration-300 ease-out"></span>
            </div>
         </button>
      </div>
   </div>
</nav>

<!-- Mobile Full-Screen Dropdown Menu (separate element outside nav for clean positioning) -->
<div id="mobileMenu" class="fixed inset-0 z-40 bg-cream dark:bg-background-dark transform transition-all duration-500 ease-out pointer-events-none" style="top: 80px; opacity: 0; visibility: hidden;">
   <div class="flex flex-col h-full overflow-y-auto pb-20">
      <div class="flex-1 px-6 py-8 space-y-2">
         <a href="/" class="mobile-nav-link group flex items-center gap-4 px-4 py-4 text-xl font-semibold text-slate-700 dark:text-slate-200 hover:bg-primary/10 rounded-2xl transition-all duration-300">
            <span class="material-icons-outlined text-primary text-2xl">home</span>
            <span>Home</span>
         </a>
         <a href="/#services" class="mobile-nav-link group flex items-center gap-4 px-4 py-4 text-xl font-semibold text-slate-700 dark:text-slate-200 hover:bg-primary/10 rounded-2xl transition-all duration-300">
            <span class="material-icons-outlined text-primary text-2xl">build</span>
            <span>Services</span>
         </a>
         <a href="/gallery/" class="mobile-nav-link group flex items-center gap-4 px-4 py-4 text-xl font-semibold text-slate-700 dark:text-slate-200 hover:bg-primary/10 rounded-2xl transition-all duration-300">
            <span class="material-icons-outlined text-primary text-2xl">photo_library</span>
            <span>Gallery</span>
         </a>
         <a href="/#testimonials" class="mobile-nav-link group flex items-center gap-4 px-4 py-4 text-xl font-semibold text-slate-700 dark:text-slate-200 hover:bg-primary/10 rounded-2xl transition-all duration-300">
            <span class="material-icons-outlined text-primary text-2xl">star</span>
            <span>Testimonials</span>
         </a>
         <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800">
            <a href="/book/" class="bg-primary text-white w-full flex items-center justify-center gap-3 px-6 py-4 rounded-2xl font-bold text-lg hover:bg-opacity-90 shadow-xl transition-all duration-300">
               <span class="material-icons-outlined text-xl">calendar_today</span>
               Book Now
            </a>
         </div>
      </div>
      <div class="px-6 py-8 text-center border-t border-slate-200 dark:border-slate-800">
         <p class="text-xs text-slate-500 dark:text-slate-400">© 2025 Emerald Auto Detailing</p>
      </div>
   </div>
</div>

<script>
   (function() {
      const mobileMenuBtn = document.getElementById('mobileMenuBtn');
      const mobileMenu = document.getElementById('mobileMenu');
      const body = document.body;
      let isMenuOpen = false;
      
      // Get hamburger lines
      const line1 = document.querySelector('.line1');
      const line2 = document.querySelector('.line2');
      const line3 = document.querySelector('.line3');
      
      function openMenu() {
         if (!mobileMenu) return;
         isMenuOpen = true;
         
         // Make menu visible and animate in
         mobileMenu.style.visibility = 'visible';
         mobileMenu.style.opacity = '1';
         mobileMenu.style.pointerEvents = 'auto';
         mobileMenu.style.transform = 'translateY(0)';
         
         // Animate hamburger to X
         if (line1 && line2 && line3) {
            line1.style.transform = 'rotate(45deg)';
            line1.style.top = '50%';
            line1.style.marginTop = '-2px';
            
            line2.style.opacity = '0';
            line2.style.transform = 'scale(0)';
            
            line3.style.transform = 'rotate(-45deg)';
            line3.style.top = '50%';
            line3.style.marginTop = '-2px';
            line3.style.bottom = 'auto';
         }
         
         body.style.overflow = 'hidden';
      }
      
      function closeMenu() {
         if (!mobileMenu) return;
         isMenuOpen = false;
         
         // Animate menu out
         mobileMenu.style.opacity = '0';
         mobileMenu.style.pointerEvents = 'none';
         mobileMenu.style.transform = 'translateY(-20px)';
         
         setTimeout(() => {
            if (!isMenuOpen) {
               mobileMenu.style.visibility = 'hidden';
            }
         }, 500);
         
         // Reset hamburger animation
         if (line1 && line2 && line3) {
            line1.style.transform = '';
            line1.style.top = '';
            line1.style.marginTop = '';
            
            line2.style.opacity = '';
            line2.style.transform = '';
            
            line3.style.transform = '';
            line3.style.top = '';
            line3.style.marginTop = '';
            line3.style.bottom = '';
         }
         
         body.style.overflow = '';
      }
      
      function toggleMenu() {
         if (isMenuOpen) {
            closeMenu();
         } else {
            openMenu();
         }
      }
      
      // Event listeners
      if (mobileMenuBtn) {
         mobileMenuBtn.addEventListener('click', toggleMenu);
      }
      
      // Close menu when clicking on any mobile nav link
      const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
      mobileNavLinks.forEach(link => {
         link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            closeMenu();
            
            // Small delay to allow menu close animation before navigation
            setTimeout(() => {
               if (href && href !== '#') {
                  if (href === '/') {
                     window.location.href = href;
                  } else if (href.startsWith('/#')) {
                     const targetId = href.substring(2);
                     const targetElement = document.getElementById(targetId);
                     if (targetElement) {
                        targetElement.scrollIntoView({ behavior: 'smooth' });
                     } else {
                        window.location.href = href;
                     }
                  } else {
                     window.location.href = href;
                  }
               }
            }, 300);
         });
      });
      
      // Close menu on ESC key
      document.addEventListener('keydown', function(e) {
         if (e.key === 'Escape' && isMenuOpen) {
            closeMenu();
         }
      });
      
      // Handle window resize - close menu if screen becomes desktop
      let resizeTimer;
      window.addEventListener('resize', function() {
         clearTimeout(resizeTimer);
         resizeTimer = setTimeout(function() {
            if (window.innerWidth >= 768 && isMenuOpen) {
               closeMenu();
            }
         }, 250);
      });
      
      // Initialize menu hidden
      if (mobileMenu) {
         mobileMenu.style.transform = 'translateY(-20px)';
         mobileMenu.style.opacity = '0';
         mobileMenu.style.visibility = 'hidden';
         mobileMenu.style.pointerEvents = 'none';
      }
   })();
</script>

<style>
   /* Mobile menu full-screen dropdown styles */
   #mobileMenu {
      transition: opacity 0.4s ease, transform 0.4s ease, visibility 0.4s;
   }
   
   /* Hamburger animation */
   .hamburger-line {
      transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
   }
   
   /* Mobile nav link hover effect */
   .mobile-nav-link {
      transition: all 0.2s ease;
   }
   
   .mobile-nav-link:active {
      transform: scale(0.98);
   }
}
</style>