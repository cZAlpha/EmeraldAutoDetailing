<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Emerald Auto Detailing | Contact Us</title>
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
      <!-- Google Fonts + Icons -->
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
   
   <!-- HERO SECTION (simple contact header) -->
   <section class="hero-emerald-gradient-shine w-full py-20 md:py-24 flex items-center relative">
      <div class="absolute inset-0 overflow-hidden opacity-20 pointer-events-none">
         <div class="absolute top-10 left-10 w-72 h-72 rounded-full bg-white/10 blur-3xl"></div>
         <div class="absolute bottom-10 right-10 w-96 h-96 rounded-full bg-emerald-900/40 blur-3xl"></div>
      </div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
         <h1 class="font-premium text-5xl md:text-6xl font-extrabold text-white mb-5">Get in <span class="text-emerald-200">Touch</span></h1>
         <div class="w-24 h-1 bg-white/40 mx-auto rounded-full mb-6"></div>
         <p class="text-white/90 text-lg max-w-2xl mx-auto">Questions? Ready to book? We're here to help make your car shine.</p>
      </div>
   </section>
   
   <!-- CONTACT SECTION: simple, clean, placeholder info -->
   <section class="py-20 bg-cream dark:bg-background-dark">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
         
         <!-- Two column layout: contact info + simple contact form -->
         <div class="grid md:grid-cols-2 gap-12 items-start">
            
            <!-- LEFT COLUMN: Contact Information -->
            <div class="space-y-8">
               <div>
                  <h2 class="font-display text-3xl font-bold text-slate-800 dark:text-white mb-3">Contact Information</h2>
                  <div class="w-16 h-1 bg-primary rounded-full mb-5"></div>
                  <p class="text-slate-600 dark:text-slate-400">Reach out anytime.</p>
               </div>
               
               <!-- Phone -->
               <div class="flex gap-4 items-start">
                  <div class="bg-primary/10 p-3 rounded-xl text-primary">
                     <span class="material-icons-outlined text-2xl">call</span>
                  </div>
                  <div>
                     <h3 class="font-bold text-lg text-slate-800 dark:text-white">Call or Text</h3>
                     <a href="tel:+13023318549" class="underline text-slate-600 dark:text-slate-400 text-lg md:text-xl hover:text-primary transition-colors duration-300 block">
                        (302) 331-8549
                     </a>
                  </div>
               </div>
               
               <!-- Email -->
               <div class="flex gap-4 items-start">
                  <div class="bg-primary/10 p-3 rounded-xl text-primary">
                     <span class="material-icons-outlined text-2xl">email</span>
                  </div>
                  <div>
                     <h3 class="font-bold text-lg text-slate-800 dark:text-white">Email Us</h3>
                     <a href="mailto:emeraldautode@yahoo.com" class="underline text-slate-600 dark:text-slate-400 text-lg md:text-xl hover:text-primary transition-colors duration-300 break-all block">
                        emeraldautode@yahoo.com
                     </a>
                  </div>
               </div>
               
               <!-- Socials -->
               <div class="flex gap-4 items-start">
                  <div class="bg-primary/10 p-3 rounded-xl text-primary">
                     <span class="material-icons-outlined text-2xl">share</span>
                  </div>
                  <div>
                     <h3 class="font-bold text-lg text-slate-800 dark:text-white">Follow Us</h3>
                     <div class="flex gap-3 mt-2">
                        <a href="https://www.instagram.com/emeraldautode/" class="bg-gradient-to-br from-purple-600 via-purple-500 to-pink-500 p-3 rounded-full hover:scale-110 transition-transform duration-300 shadow-lg flex items-center justify-center w-12 h-12" target="_blank" rel="noopener noreferrer">
                           <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM12 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            
            <!-- Service 'Map' -->
            <div class="flex flex-col items-center justify-center gap-6 bg-gradient-to-br from-white via-cream/50 to-white dark:from-slate-800/80 dark:via-slate-800/60 dark:to-slate-800/80 rounded-3xl shadow-2xl p-8 border border-slate-100 dark:border-slate-700 hover:shadow-3xl transition-all duration-500">
               <!-- Delaware State Image -->
               <div class="relative">
                  <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent rounded-2xl opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                  <img class="w-auto h-[280px] md:h-[320px] object-contain mx-auto drop-shadow-xl hover:scale-105 transition-transform duration-500" src="../assets/images/delaware.png" alt="Map of Delaware highlighting our service area"/>
               </div>
               
               <!-- Divider -->
               <div class="w-20 h-1 bg-gradient-to-r from-transparent via-primary to-transparent rounded-full"></div>
               
               <!-- Text -->
               <div class="flex flex-col items-center justify-center gap-3 text-center max-w-md">
                  <div class="inline-flex items-center gap-2 bg-primary/10 px-4 py-2 rounded-full">
                     <span class="material-icons-outlined text-primary text-base">location_on</span>
                     <span class="text-primary text-xs font-semibold uppercase tracking-wide">Service Area</span>
                  </div>
                  <h3 class="font-bold text-xl md:text-2xl text-slate-800 dark:text-white">We serve the entire state of <span class="text-primary">Delaware</span></h3>
                  <p class="text-sm md:text-base text-slate-500 dark:text-slate-400 max-w-md">
                     <span class="material-icons-outlined text-primary text-sm align-middle mr-1">info</span>
                     If you're outside of Delaware, contact us — we may be able to service you!
                  </p>
               </div>
            </div>
            
            <!-- Simple Contact Form (placeholder, no backend) -->
            <!-- <div class="bg-white dark:bg-slate-800/60 rounded-3xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
               <h3 class="font-display text-2xl font-bold text-slate-800 dark:text-white mb-2">Send a Message</h3>
               <p class="text-slate-500 dark:text-slate-400 text-sm mb-6">We'll reply as soon as possible.</p>
               
               <form action="#" method="POST" class="space-y-5">
                  <div>
                     <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Full Name</label>
                     <input type="text" placeholder="John Doe" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-cream/50 dark:bg-slate-900/50 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition">
                  </div>
                  
                  <div>
                     <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Email Address</label>
                     <input type="email" placeholder="hello@example.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-cream/50 dark:bg-slate-900/50 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition">
                  </div>
                  
                  <div>
                     <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Phone (optional)</label>
                     <input type="tel" placeholder="(555) 123-4567" class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-cream/50 dark:bg-slate-900/50 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition">
                  </div>
                  
                  <div>
                     <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Message</label>
                     <textarea rows="4" placeholder="Tell us about your vehicle or ask a question..." class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-cream/50 dark:bg-slate-900/50 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent resize-none transition"></textarea>
                  </div>
                  
                  <button type="submit" class="w-full bg-primary hover:bg-opacity-90 text-white font-bold py-3.5 rounded-xl shadow-md transition flex items-center justify-center gap-2">
                     <span class="material-icons-outlined text-lg">send</span> Send Message
                  </button>
                  <p class="text-xs text-center text-slate-400 mt-3">This is a demo form — no actual message will be sent.</p>
               </form>
            </div> -->
         </div>
         
      </div>
   </section>
   
   <!-- Footer Component -->
   <?php include '../components/footer.php'; ?>
   
   <!-- Mobile CTA Component -->
   <?php include '../components/mobile_cta.php'; ?>
   </body>
</html>