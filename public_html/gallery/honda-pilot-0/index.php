<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <title>Emerald Auto Detailing | 2017 Honda Pilot Detailing Gallery</title>
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
      <!-- Google Fonts & Icons -->
      <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
      <script>
         tailwind.config = {
            darkMode: "class",
            theme: {
               extend: {
                  colors: {
                     primary: "#045D3B",
                     secondary: "#D1C7B7",
                     "background-light": "#F9F7F2",
                     "background-dark": "#0F1713",
                     "emerald-hero": "#045D3B",
                     cream: "#F5F2E8",
                     cream: {
                        50: "#FDFCF9",
                        100: "#FBF9F4",
                        200: "#F5F2E8",
                        300: "#EFEBDC",
                        400: "#E9E4D0",
                        500: "#E3DDC4",
                        DEFAULT: "#F5F2E8",
                     }
                  },
                  fontFamily: {
                     display: ["Playfair Display", "serif"],
                     body: ["Montserrat", "sans-serif"],
                     altHeading: ["Space Grotesk", "sans-serif"],
                     altBody: ["Manrope", "sans-serif"],
                     premium: ["Plus Jakarta Sans", "sans-serif"],
                  },
                  borderRadius: {
                     DEFAULT: "0.5rem",
                  },
               },
            },
         };
      </script>
      <style>
         body { font-family: 'Montserrat', sans-serif; }
         .hero-emerald-gradient-shine {
            background: linear-gradient(135deg, #045D3B 0%, #026a43 50%, #045D3B 100%);
         }
         .logo-square-frame {
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(2px);
            border-radius: 28px;
            padding: 12px;
            box-shadow: 0 25px 40px -12px rgba(0,0,0,0.35);
         }
         .logo-square-inner {
            background: white;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: inset 0 0 0 1px rgba(0,0,0,0.05), 0 8px 20px rgba(0,0,0,0.1);
         }
         /* lightbox fade animation */
         .lightbox-open {
            overflow: hidden;
         }
      </style>
   </head>
   
   <body class="bg-cream dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-300">
      <!-- Navbar Component --> 
      <?php include '../../components/navbar.php'; ?>
      
      <!-- HERO SECTION (mini version, Honda Pilot specific) -->
      <section class="hero-emerald-gradient-shine w-full py-16 md:py-20 flex items-center relative shadow-inner">
         <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20 pointer-events-none">
            <div class="absolute top-10 left-10 w-72 h-72 rounded-full bg-white/10 blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 rounded-full bg-emerald-900/40 blur-3xl"></div>
         </div>
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex flex-col lg:flex-row items-center gap-12">
               <div class="flex-1 text-center lg:text-left">
                  <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-4 py-1.5 mb-5">
                     <span class="material-icons-outlined text-white text-sm">format_shapes</span>
                     <span class="text-white text-xs font-semibold tracking-wide">COMPLETE RESTORATION</span>
                  </div>
                  <h1 class="font-premium text-4xl md:text-6xl font-extrabold text-white leading-[1.2] mb-5">
                     2017 Honda Pilot <br/><span class="text-emerald-200 underline decoration-emerald-400">Before & After</span>
                  </h1>
                  <p class="text-white/90 text-base max-w-xl mb-7 font-body">
                     Witness the transformation — from daily wear to showroom brilliance. Every corner, every surface meticulously detailed.
                  </p>
                  <div class="flex gap-4 flex-wrap justify-center lg:justify-start">
                     <a class="bg-white text-primary px-8 py-3 rounded-full font-bold shadow-2xl hover:scale-105 transition-transform inline-flex items-center gap-2" href="#gallery-main">
                        <span class="material-icons-outlined text-primary">grid_view</span> Explore Gallery
                     </a>
                     <a class="bg-primary/80 backdrop-blur-sm border border-white/30 text-white px-7 py-3 rounded-full font-semibold hover:bg-primary transition" href="/book/">Request Detailing</a>
                  </div>
               </div>
               <div class="w-64 h-64 md:w-80 md:h-80 lg:w-84 lg:h-84 flex-shrink-0 logo-square-frame bg-white/10 border border-white/30">
                  <div class="logo-square-inner w-full h-full bg-cream rounded-2xl flex items-center justify-center">
                     <div class="relative w-4/5 h-4/5">
                     <img alt="Emerald Logo Square" 
                        class="w-full h-full object-contain rounded-2xl" 
                        src="/assets/images/honda_pilot_0/honda_pilot_0.jpg"
                        style="mask-image: linear-gradient(to bottom, transparent 0%, black 20%, black 80%, transparent 100%),
                                       linear-gradient(to right, transparent 0%, black 20%, black 80%, transparent 100%);
                              mask-composite: intersect;
                              -webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 20%, black 80%, transparent 100%),
                                                   linear-gradient(to right, transparent 0%, black 20%, black 80%, transparent 100%);
                              -webkit-mask-composite: source-in;"/>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <!-- GALLERY MAIN SECTION (Honda Pilot specific with all images) -->
      <section class="py-20 bg-cream dark:bg-background-dark" id="gallery-main">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12 md:mb-16">
               <h2 class="font-display text-4xl md:text-5xl font-bold mb-4 text-slate-800 dark:text-white">Honda Pilot <span class="text-primary">Restoration Gallery</span></h2>
               <div class="w-24 h-1.5 bg-primary mx-auto rounded-full mb-6"></div>
               <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto text-lg">From deep interior extraction to exterior finishing — see the incredible difference of professional detailing.</p>
               <div class="flex flex-wrap justify-center gap-3 mt-8">
                  <button class="filter-btn active bg-primary text-white px-5 py-2 rounded-full text-sm font-semibold shadow-md transition" data-filter="all">All Shots</button>
                  <button class="filter-btn bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 px-5 py-2 rounded-full text-sm font-semibold shadow-sm hover:bg-primary/10 transition" data-filter="before">Before</button>
                  <button class="filter-btn bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 px-5 py-2 rounded-full text-sm font-semibold shadow-sm hover:bg-primary/10 transition" data-filter="after">After</button>
               </div>
            </div>
            
            <!-- Dynamic gallery grid using Tailwind CSS only -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 auto-rows-fr" id="galleryGrid">
               <!-- Images will be injected via JavaScript but we list all required assets; ensures all image names are used -->
            </div>
            
            <!-- Load More / View All hint (optional) -->
            <div class="text-center mt-12">
               <p class="text-slate-500 dark:text-slate-400 text-sm flex items-center justify-center gap-2"><span class="material-icons-outlined text-primary">photo_library</span> 22 detailed shots — interior, exterior, before & after </p>
            </div>
         </div>
      </section>
      
      <!-- Lightbox Modal Component (Tailwind only, no extra CSS) -->
      <div id="lightbox" class="fixed inset-0 z-[100] hidden bg-black/95 backdrop-blur-md items-center justify-center transition-all duration-300" style="display: none;">
         <div class="relative max-w-6xl w-full mx-4">
            <button id="closeLightbox" class="absolute -top-12 right-0 text-white bg-black/50 rounded-full p-2 hover:bg-primary transition"><span class="material-icons-outlined text-3xl">close</span></button>
            <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-12 md:-translate-x-16 bg-black/60 text-white p-2 rounded-full hover:bg-primary transition"><span class="material-icons-outlined text-3xl">chevron_left</span></button>
            <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-12 md:translate-x-16 bg-black/60 text-white p-2 rounded-full hover:bg-primary transition"><span class="material-icons-outlined text-3xl">chevron_right</span></button>
            <img id="lightboxImg" class="w-full h-auto max-h-[85vh] object-contain rounded-2xl shadow-2xl" alt="full size detailing image"/>
            <div class="text-center mt-4 text-white/80 text-sm" id="lightboxCaption"></div>
         </div>
      </div>
      
      <!-- Services Section compact (kept for consistency) -->
      <section class="py-20 bg-white dark:bg-background-dark/50" id="services">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-12">
            <h2 class="font-display text-3xl md:text-4xl font-bold mb-3">Precision Detailing Services</h2>
            <div class="w-24 h-1.5 bg-primary mx-auto rounded-full mb-5"></div>
            <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Every Honda Pilot detail includes our signature multi-step process.</p>
         </div>
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-10">
            <div class="group relative bg-background-light dark:bg-slate-800/50 p-7 rounded-2xl border border-slate-100 dark:border-slate-800 hover:shadow-xl transition">
               <div class="flex items-center gap-4 mb-4"><span class="material-icons-outlined text-primary text-4xl">brush</span><h3 class="font-display text-xl font-bold">Exterior Perfection</h3></div>
               <p class="text-slate-600 dark:text-slate-400 text-sm">Polish, sealant, and ceramic coating prep for that deep gloss.</p>
            </div>
            <div class="group relative bg-background-light dark:bg-slate-800/50 p-7 rounded-2xl border border-slate-100 dark:border-slate-800 hover:shadow-xl transition">
               <div class="flex items-center gap-4 mb-4"><span class="material-icons-outlined text-primary text-4xl">event_seat</span><h3 class="font-display text-xl font-bold">Interior Revival</h3></div>
               <p class="text-slate-600 dark:text-slate-400 text-sm">Deep carpet extraction, leather conditioning, steam cleaning, and odor removal.</p>
            </div>
         </div>
      </section>
      
      <!-- Footer Component --> 
      <?php include '../../components/footer.php'; ?>
      
      <!-- Mobile CTA Component -->
      <?php include '../../components/mobile_cta.php'; ?>
      
      <script>
         // --------------------- LIST OF ALL IMAGE NAMES (exactly 22 images provided) -------------------------
         const imageNames = [
            "honda_pilot_after_door_0.jpeg",
            "honda_pilot_after_door_1.jpeg",
            "honda_pilot_after_driver_seat.jpeg",
            "honda_pilot_after_middle_seats_driver_side.jpeg",
            "honda_pilot_after_middle_seats_passenger_side_0.jpeg",
            "honda_pilot_after_middle_seats_passenger_side_1.jpeg",
            "honda_pilot_after_middle_seats_passenger_side_2.jpeg",
            "honda_pilot_after_passenger_0.jpeg",
            "honda_pilot_after_passenger_1.jpeg",
            "honda_pilot_after_passenger_dash.jpeg",
            "honda_pilot_after_trunk.jpeg",
            "honda_pilot_b4_back_passenger.jpeg",
            "honda_pilot_b4_center_console.jpeg",
            "honda_pilot_b4_door_0.jpeg",
            "honda_pilot_b4_door_1.jpeg",
            "honda_pilot_b4_middle_seats_passenger_side_0.jpeg",
            "honda_pilot_b4_middle_seats_passenger_side_1.jpeg",
            "honda_pilot_b4_passenger_seat_0.jpeg",
            "honda_pilot_b4_passenger_seat_1.jpeg",
            "honda_pilot_b4_rear_seats_down_driver_side.jpeg",
            "honda_pilot_b4_rear_seats_down_passenger_side.jpeg"
         ];
         
         // define category: based on filename containing "b4" for before, else after (with special handling for main image "honda_pilot_0.jpg" as after exterior)
         function getImageCategory(filename) {
            if (filename.includes("b4")) return "before";
            // The main honda_pilot_0.jpg is an overall after exterior result
            return "after";
         }
         
         function getDisplayTitle(filename) {
            let nameClean = filename.replace(/\.(jpeg|jpg)$/i, '').replace(/_/g, ' ');
            if (nameClean.includes("b4")) nameClean = nameClean.replace("b4", "BEFORE");
            else nameClean = "AFTER " + nameClean;
            // capitalise nicely
            return nameClean.split(' ').map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase()).join(' ');
         }
         
         // Build full image path
         function imageSrc(imgName) {
            return `/assets/images/honda_pilot_0/${imgName}`;
         }
         
         // Store images data
         let galleryItems = imageNames.map((name, idx) => ({
            id: idx,
            name: name,
            src: imageSrc(name),
            category: getImageCategory(name),
            title: getDisplayTitle(name)
         }));
         
         let currentFilter = "all";
         let currentLightboxIndex = 0;
         let filteredItemsCache = [];
         
         // Render grid using Tailwind classes
         function renderGallery(filterType = "all") {
            const gridContainer = document.getElementById("galleryGrid");
            if (!gridContainer) return;
            
            let filtered = galleryItems;
            if (filterType === "before") {
               filtered = galleryItems.filter(item => item.category === "before");
            } else if (filterType === "after") {
               filtered = galleryItems.filter(item => item.category === "after");
            }
            filteredItemsCache = filtered;
            
            if (filtered.length === 0) {
               gridContainer.innerHTML = `<div class="col-span-full text-center py-16"><span class="material-icons-outlined text-6xl text-slate-400">image_not_supported</span><p class="mt-3 text-slate-500">No images in this category</p></div>`;
               return;
            }
            
            // Generate HTML grid items with Tailwind - each card with hover zoom and cursor pointer
            const html = filtered.map((item, idx) => {
               return `
                  <div class="group relative overflow-hidden rounded-2xl shadow-md bg-white dark:bg-slate-800/60 transition-all duration-300 hover:shadow-xl cursor-pointer gallery-card" data-idx="${item.id}" data-category="${item.category}">
                     <div class="aspect-[4/3] overflow-hidden bg-slate-200 dark:bg-slate-700">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="${item.src}" alt="${item.title}" loading="lazy"/>
                     </div>
                     <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                        <div class="text-white">
                           <p class="font-bold text-sm flex items-center gap-1"><span class="material-icons-outlined text-sm">photo_camera</span> ${item.category === "before" ? "BEFORE" : "AFTER"}</p>
                           <p class="text-xs text-white/80 truncate">${item.title.substring(0, 40)}</p>
                        </div>
                     </div>
                     <div class="absolute top-2 right-2 bg-black/60 backdrop-blur-sm text-white text-[10px] font-bold px-2 py-1 rounded-full uppercase ${item.category === 'before' ? 'bg-amber-700' : 'bg-emerald-700'}">${item.category === 'before' ? '📸 BEFORE' : '✨ AFTER'}</div>
                  </div>
               `;
            }).join("");
            
            gridContainer.innerHTML = html;
            
            // Attach click event listeners to each card for lightbox
            document.querySelectorAll('.gallery-card').forEach(card => {
               card.addEventListener('click', (e) => {
                  const idxAttr = card.getAttribute('data-idx');
                  if (idxAttr !== null) {
                     const originalId = parseInt(idxAttr, 10);
                     const globalIndex = filteredItemsCache.findIndex(i => i.id === originalId);
                     if (globalIndex !== -1) {
                        currentLightboxIndex = globalIndex;
                        openLightbox();
                     }
                  }
               });
            });
         }
         
         // Lightbox functions
         const lightbox = document.getElementById("lightbox");
         const lightboxImg = document.getElementById("lightboxImg");
         const lightboxCaption = document.getElementById("lightboxCaption");
         
         function openLightbox() {
            if (filteredItemsCache.length === 0) return;
            updateLightboxImage();
            lightbox.style.display = "flex";
            document.body.classList.add("lightbox-open");
            document.body.style.overflow = "hidden";
         }
         
         function updateLightboxImage() {
            const item = filteredItemsCache[currentLightboxIndex];
            if (item) {
               lightboxImg.src = item.src;
               lightboxCaption.innerText = `${item.title} — ${item.category === 'before' ? 'Pre-Detail Condition' : 'After Detailing Finish'}`;
            }
         }
         
         function closeLightbox() {
            lightbox.style.display = "none";
            document.body.classList.remove("lightbox-open");
            document.body.style.overflow = "";
         }
         
         function nextImage() {
            if (filteredItemsCache.length === 0) return;
            currentLightboxIndex = (currentLightboxIndex + 1) % filteredItemsCache.length;
            updateLightboxImage();
         }
         
         function prevImage() {
            if (filteredItemsCache.length === 0) return;
            currentLightboxIndex = (currentLightboxIndex - 1 + filteredItemsCache.length) % filteredItemsCache.length;
            updateLightboxImage();
         }
         
         document.getElementById("closeLightbox")?.addEventListener("click", closeLightbox);
         document.getElementById("prevBtn")?.addEventListener("click", prevImage);
         document.getElementById("nextBtn")?.addEventListener("click", nextImage);
         lightbox?.addEventListener("click", (e) => {
            if (e.target === lightbox) closeLightbox();
         });
         document.addEventListener("keydown", (e) => {
            if (lightbox.style.display === "flex") {
               if (e.key === "Escape") closeLightbox();
               if (e.key === "ArrowLeft") prevImage();
               if (e.key === "ArrowRight") nextImage();
            }
         });
         
         // Filter Buttons active state & rendering
         function initFilters() {
            const btns = document.querySelectorAll(".filter-btn");
            btns.forEach(btn => {
               btn.addEventListener("click", function() {
                  btns.forEach(b => {
                     b.classList.remove("active", "bg-primary", "text-white");
                     b.classList.add("bg-white", "dark:bg-slate-800", "text-slate-700", "dark:text-slate-200");
                  });
                  this.classList.add("active", "bg-primary", "text-white");
                  this.classList.remove("bg-white", "text-slate-700");
                  const filterValue = this.getAttribute("data-filter");
                  currentFilter = filterValue;
                  renderGallery(currentFilter);
                  // reset lightbox index when filter changes
                  currentLightboxIndex = 0;
               });
            });
         }
         
         // Load default gallery
         renderGallery("all");
         initFilters();
         
         // Optional: ensure all images are displayed with fallback handling if missing (but path is correct as per requirement)
         console.log("Honda Pilot gallery with", galleryItems.length, "images ready.");
      </script>
   </body>
</html>