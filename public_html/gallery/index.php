<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Emerald Auto Detailing | Vehicle Gallery</title>
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
      <!-- Google Fonts + Icons (same as reference) -->
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
                  },
                  fontFamily: {
                     display: ["Playfair Display", "serif"],
                     body: ["Montserrat", "sans-serif"],
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
      </style>
   </head>
   <body class="bg-cream dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-300">
   
   <!-- Navbar Component -->
   <?php include '../components/navbar.php'; ?>
   
   <!-- HERO SECTION (simple, gallery focused) -->
   <section class="hero-emerald-gradient-shine w-full py-20 md:py-24 flex items-center relative">
      <div class="absolute inset-0 overflow-hidden opacity-20 pointer-events-none">
         <div class="absolute top-10 left-10 w-72 h-72 rounded-full bg-white/10 blur-3xl"></div>
         <div class="absolute bottom-10 right-10 w-96 h-96 rounded-full bg-emerald-900/40 blur-3xl"></div>
      </div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
         <h1 class="font-premium text-5xl md:text-6xl font-extrabold text-white mb-5">Our Detailing <span class="text-emerald-200">Gallery</span></h1>
         <div class="w-24 h-1 bg-white/40 mx-auto rounded-full mb-6"></div>
         <p class="text-white/90 text-lg max-w-2xl mx-auto">Real results from real vehicles — each detail tells a story of precision and care.</p>
      </div>
   </section>
   
   <!-- MAIN GALLERY PAGE: List of vehicles (currently featuring 2017 Honda Pilot) -->
   <section class="py-20 bg-cream dark:bg-background-dark">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         <!-- Simple grid, one item for now — keep it stupid simple -->
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center">
            
            <!-- SINGLE GALLERY ITEM: 2017 Honda Pilot -->
            <div class="group w-full max-w-md bg-white dark:bg-slate-800/60 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
               <div class="relative aspect-[4/3] overflow-hidden bg-slate-200 dark:bg-slate-700">
                  <img 
                     alt="2017 Honda Pilot complete detailing transformation" 
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" 
                     src="/assets/images/honda_pilot_0/honda_pilot_0.jpg"
                  />
                  <div class="absolute top-4 left-4 bg-primary/90 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-full flex items-center gap-1">
                     <span class="material-icons-outlined text-sm">check_circle</span> Complete Detail
                  </div>
               </div>
               <div class="p-6">
                  <div class="flex items-center justify-between mb-2">
                     <h3 class="font-display text-2xl font-bold text-slate-800 dark:text-white">2017 Honda Pilot</h3>
                     <span class="bg-emerald-100 dark:bg-emerald-900/40 text-primary text-xs font-semibold px-3 py-1 rounded-full">Featured</span>
                  </div>
                  <p class="text-slate-600 dark:text-slate-400 text-sm mb-5 leading-relaxed">
                     Full interior and exterior restoration — before & after gallery showing every detail: seats, doors, trunk, dash, and paint correction.
                  </p>
                  <div class="flex flex-wrap gap-2 mb-6">
                     <span class="inline-flex items-center gap-1 text-xs bg-slate-100 dark:bg-slate-700 px-3 py-1.5 rounded-full text-slate-700 dark:text-slate-300"><span class="material-icons-outlined text-primary text-sm">brush</span> 22 Shots</span>
                     <span class="inline-flex items-center gap-1 text-xs bg-slate-100 dark:bg-slate-700 px-3 py-1.5 rounded-full text-slate-700 dark:text-slate-300"><span class="material-icons-outlined text-primary text-sm">event_seat</span> Interior + Exterior</span>
                  </div>
                  <a href="/gallery/2017-honda-pilot/" class="inline-flex items-center justify-center gap-2 w-full bg-primary hover:bg-opacity-90 text-white font-bold py-3 px-5 rounded-xl transition-all shadow-md group-hover:shadow-lg">
                     <span>View Full Gallery</span>
                     <span class="material-icons-outlined text-lg">arrow_forward</span>
                  </a>
               </div>
            </div>
            
            <!-- Future vehicles can be added here, same card structure -->
            <!-- Example placeholder for future expansion (commented out):
            <div class="group w-full max-w-md bg-white dark:bg-slate-800/60 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 opacity-60">
               <div class="relative aspect-[4/3] overflow-hidden bg-slate-200 dark:bg-slate-700 flex items-center justify-center">
                  <span class="material-icons-outlined text-6xl text-slate-400">car_repair</span>
               </div>
               <div class="p-6 text-center">
                  <h3 class="font-display text-xl font-semibold text-slate-500">More vehicles coming soon</h3>
                  <p class="text-slate-400 text-sm mt-2">New detailing projects added monthly</p>
               </div>
            </div>
            -->
         </div>
         
         <!-- Simple message if only one item, but still elegant -->
         <div class="text-center mt-14 text-slate-500 dark:text-slate-400 text-sm border-t border-slate-200 dark:border-slate-800 pt-10">
            <span class="material-icons-outlined text-primary align-middle mr-1">auto_awesome</span> More detailed vehicles coming soon — each with before/after deep dives.
         </div>
      </div>
   </section>
   
   <!-- Footer Component -->
   <?php include '../components/footer.php'; ?>
   
   <!-- Mobile CTA Component -->
   <?php include '../components/mobile_cta.php'; ?>
   </body>
</html>