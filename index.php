<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGA-Coding Academy | Rwanda’s Centre of Excellence</title>
    
    <link rel="icon" type="image/svg+xml" href="assets/logo.svg">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['Fira Code', 'monospace'],
                    },
                    colors: {
                        brand: {
                            dark: '#0d1117', 
                            card: '#161b22',
                            accent: '#7ee787', /* Syntax green */
                            blue: '#79c0ff',   /* Solid blue for hero */
                            purple: '#d2a8ff'
                        }
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: var(--brand-dark);
            color: #c9d1d9;
            overflow-x: hidden;
        }

        .bg-grid {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        }

        /* 3D Tilt Card Glow Effect */
        .program-card {
            transform-style: preserve-3d;
            transition: box-shadow 0.3s ease, border-color 0.3s ease;
        }
        
        .program-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 1rem;
            box-shadow: 0 0 0px rgba(0,0,0,0);
            transition: all 0.3s ease;
            z-index: -1;
        }

        .program-card.software:hover { border-color: rgba(121, 192, 255, 0.5); }
        .program-card.software:hover::before { box-shadow: 0 20px 40px rgba(121, 192, 255, 0.15); }

        .program-card.embedded:hover { border-color: rgba(210, 168, 255, 0.5); }
        .program-card.embedded:hover::before { box-shadow: 0 20px 40px rgba(210, 168, 255, 0.15); }

        .program-card.robotics:hover { border-color: rgba(126, 231, 135, 0.5); }
        .program-card.robotics:hover::before { box-shadow: 0 20px 40px rgba(126, 231, 135, 0.15); }

        /* Infrastructure List Hover */
        .infra-item {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .infra-item:hover {
            transform: translateX(10px);
            background-color: rgba(255, 255, 255, 0.03);
            border-radius: 0.5rem;
        }
        .infra-item:hover .infra-icon {
            background-color: rgba(126, 231, 135, 0.15);
            border-color: rgba(126, 231, 135, 0.5);
            color: var(--brand-accent);
        }

        /* Hide scrollbar for partners */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        /* Light mode grid for the numbers section */
        .bg-grid-light {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.04) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(0, 0, 0, 0.04) 1px, transparent 1px);
        }
        /* High-CSS Parallax & Glassmorphism */
        .parallax-bg {
            /* LEVI: You can swap this URL with an actual photo of NGA students or your campus */
            background-image: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=2070&auto=format&fit=crop');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .glass-panel {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.01) 100%);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 40px 0 rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body class="antialiased selection:bg-brand-accent selection:text-black">

    <?php include 'includes/header.php'; ?>

<main class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <video autoplay loop muted playsinline class="absolute z-0 w-auto min-w-full min-h-full max-w-none object-cover">
            <source src="assets/hero.mp4" type="video/mp4">
        </video>
        
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0d1117]/90 via-transparent to-[#0d1117] pointer-events-none"></div>
        
        <div class="absolute inset-0 z-0 bg-[radial-gradient(circle_at_center,rgba(13,17,23,0.6)_0%,transparent_50%)] pointer-events-none"></div>

        <div class="absolute inset-0 z-0 bg-grid opacity-10 pointer-events-none"></div>

        <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="zoom-out" data-aos-duration="1200">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-card/80 backdrop-blur-sm border border-gray-700 mb-8 shadow-lg">
                <span class="w-2 h-2 rounded-full bg-brand-accent animate-pulse shadow-[0_0_8px_rgba(126,231,135,0.8)]"></span>
                <span class="font-mono text-xs text-gray-300">Rwanda’s Private Centre of Excellence</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-white drop-shadow-lg">
                Building Rwanda’s Next <br />
                <span class="text-brand-blue">Generation of Developers</span>
            </h1>
            
            <p class="mt-4 text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-light mb-10 leading-relaxed drop-shadow">
                Master Software Programming, Embedded Systems, and Robotics in a comprehensive, industry-aligned curriculum built for the digital economy.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#programs" class="group relative px-8 py-4 bg-white text-black font-semibold rounded-lg overflow-hidden transition-transform hover:scale-105 shadow-[0_0_20px_rgba(255,255,255,0.2)]">
                    <span class="relative z-10 flex items-center gap-2">
                        Initialize Career
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </a>
                <a href="about.php" class="px-8 py-4 bg-brand-card/80 backdrop-blur-md border border-gray-600 hover:border-brand-blue text-white font-semibold rounded-lg transition-all hover:bg-gray-800 shadow-lg">
                    Discover NGA
                </a>
            </div>
        </div>
    </main>

<section id="programs" class="py-32 relative bg-white overflow-hidden border-t border-gray-200">
        
        <div class="absolute inset-0 z-0 bg-[linear-gradient(to_right,rgba(0,0,0,0.04)_1px,transparent_1px),linear-gradient(to_bottom,rgba(0,0,0,0.04)_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-16" data-aos="fade-right">
                <h2 class="text-3xl md:text-5xl font-extrabold mb-4 text-gray-900 tracking-tight">
                    Core <span class="text-blue-600">Architecture</span>
                </h2>
                <p class="text-gray-500 max-w-xl text-lg font-medium">
                    Our flagship integrated program bridges the gap between software logic and hardware engineering.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="program-card software bg-white rounded-2xl p-8 border border-gray-200 relative shadow-xl hover:shadow-2xl transition-all duration-300" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.05" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-0 right-0 p-6 opacity-5 font-mono text-6xl font-extrabold text-gray-900 transform translate-z-10 pointer-events-none">01</div>
                    <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center mb-6 border border-blue-100 transform translate-z-20">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 transform translate-z-20">Software Development</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 transform translate-z-20">Full-stack web and mobile application development, UI/UX design principles, database management, and cloud deployments.</p>
                    <a href="#" class="font-mono text-sm text-blue-600 hover:text-blue-800 font-semibold transition-colors flex items-center gap-2 transform translate-z-20">
                        <span>read_docs()</span> &rarr;
                    </a>
                </div>

                <div class="program-card embedded bg-white rounded-2xl p-8 border border-gray-200 relative shadow-xl hover:shadow-2xl transition-all duration-300" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.05" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 right-0 p-6 opacity-5 font-mono text-6xl font-extrabold text-gray-900 transform translate-z-10 pointer-events-none">02</div>
                    <div class="w-12 h-12 bg-purple-50 rounded-lg flex items-center justify-center mb-6 border border-purple-100 transform translate-z-20">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 transform translate-z-20">Embedded Systems & IoT</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 transform translate-z-20">Hands-on experience with microcontrollers, IoT sensor integration, electronics fundamentals, and real-time systems architecture.</p>
                    <a href="#" class="font-mono text-sm text-purple-600 hover:text-purple-800 font-semibold transition-colors flex items-center gap-2 transform translate-z-20">
                        <span>read_docs()</span> &rarr;
                    </a>
                </div>

                <div class="program-card robotics bg-white rounded-2xl p-8 border border-gray-200 relative shadow-xl hover:shadow-2xl transition-all duration-300" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.05" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute top-0 right-0 p-6 opacity-5 font-mono text-6xl font-extrabold text-gray-900 transform translate-z-10 pointer-events-none">03</div>
                    <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center mb-6 border border-green-100 transform translate-z-20">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 transform translate-z-20">Robotics & Automation</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 transform translate-z-20">Blend mechanical design and programming. Learn actuators, algorithmic decision-making, and intelligent automation.</p>
                    <a href="#" class="font-mono text-sm text-green-600 hover:text-green-800 font-semibold transition-colors flex items-center gap-2 transform translate-z-20">
                        <span>read_docs()</span> &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 border-t border-gray-800 bg-[#0a0d12]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <div data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">State-of-the-Art <br/><span class="text-brand-blue">Infrastructure</span></h2>
                    <p class="text-gray-400 mb-8 leading-relaxed text-lg">
                        NGA-Coding Academy isn't just a classroom. We house Rwanda's premier technology and engineering labs, giving students hands-on access to industry-standard equipment.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="infra-item flex items-start gap-4 p-3 -ml-3 cursor-pointer">
                            <div class="infra-icon w-10 h-10 rounded bg-brand-card flex items-center justify-center shrink-0 border border-gray-700 transition-colors">
                                <span class="font-mono text-sm text-gray-400">01</span>
                            </div>
                            <div>
                                <h4 class="text-white font-bold mb-1">100M Frw Robotics Laboratory</h4>
                                <p class="text-gray-500 text-sm">Recently inaugurated, fully equipped facility for advanced mechanical prototyping and AI integration.</p>
                            </div>
                        </div>
                        
                        <div class="infra-item flex items-start gap-4 p-3 -ml-3 cursor-pointer">
                            <div class="infra-icon w-10 h-10 rounded bg-brand-card flex items-center justify-center shrink-0 border border-gray-700 transition-colors">
                                <span class="font-mono text-sm text-gray-400">02</span>
                            </div>
                            <div>
                                <h4 class="text-white font-bold mb-1">Industry-Aligned Curriculum</h4>
                                <p class="text-gray-500 text-sm">Designed with tech leaders to ensure graduates are job-ready for the global tech ecosystem.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden bg-brand-card border border-gray-800 relative group">
                        <img src="assets/img.png" alt="NGA Robotics Lab" class="object-cover w-full h-full opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                        <video src="assets/robotics.mp4" autoplay muted loop class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition-opacity duration-700"></video>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-brand-dark border border-gray-700 px-6 py-4 rounded-xl shadow-2xl z-20">
                        <div class="flex items-center gap-3">
                            <div class="w-3 h-3 rounded-full bg-brand-accent animate-pulse shadow-[0_0_8px_rgba(126,231,135,0.8)]"></div>
                            <p class="text-sm font-mono text-gray-400">Lab Status: <span class="text-white font-bold">Active</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 bg-white relative overflow-hidden" id="metrics-section">
        
        <div class="absolute inset-0 z-0 bg-grid-light pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">System <span class="text-brand-blue">Metrics</span></h2>
                <p class="text-gray-500 font-mono text-sm">NGA-Coding Academy by the numbers</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">
                
                <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200 text-center hover:shadow-xl hover:border-brand-blue/30 transition-all duration-300 hover:-translate-y-1 group" data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-12 h-12 mx-auto bg-blue-100 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div class="text-4xl lg:text-5xl font-extrabold font-mono text-gray-900 mb-2 flex justify-center items-center">
                        <span class="counter-value" data-target="10">0</span>
                    </div>
                    <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider">Pioneer Students</p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200 text-center hover:shadow-xl hover:border-brand-purple/30 transition-all duration-300 hover:-translate-y-1 group" data-aos="zoom-in" data-aos-delay="200">
                    <div class="w-12 h-12 mx-auto bg-purple-100 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <div class="text-4xl lg:text-5xl font-extrabold font-mono text-gray-900 mb-2 flex justify-center items-center">
                        <span class="counter-value" data-target="15">0</span><span class="text-brand-purple">+</span>
                    </div>
                    <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider">Expert Instructors</p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200 text-center hover:shadow-xl hover:border-brand-accent/30 transition-all duration-300 hover:-translate-y-1 group" data-aos="zoom-in" data-aos-delay="300">
                    <div class="w-12 h-12 mx-auto bg-green-100 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <div class="text-4xl lg:text-5xl font-extrabold font-mono text-gray-900 mb-2 flex justify-center items-center">
                        <span class="counter-value" data-target="3">0</span>
                    </div>
                    <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider">Core Programs</p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200 text-center hover:shadow-xl hover:border-orange-300/30 transition-all duration-300 hover:-translate-y-1 group" data-aos="zoom-in" data-aos-delay="400">
                    <div class="w-12 h-12 mx-auto bg-orange-100 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <div class="text-4xl lg:text-5xl font-extrabold font-mono text-gray-900 mb-2 flex justify-center items-center">
                        <span class="counter-value" data-target="100">0</span><span class="text-orange-500">M</span>
                    </div>
                    <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider">Frw Lab Facility</p>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter-value');
            const speed = 200; // The lower the slower

            // The counting function
            const animateCounters = () => {
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    
                    // Calculate increment based on target size to make them finish roughly together
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(() => animateCounters(), 15);
                    } else {
                        counter.innerText = target;
                    }
                });
            }

            // Intersection Observer to trigger animation ONLY when section is visible
            const metricsSection = document.getElementById('metrics-section');
            let animated = false;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !animated) {
                        animateCounters();
                        animated = true; // Prevents it from animating again if you scroll up and down
                    }
                });
            }, { threshold: 0.5 }); // Triggers when 50% of the section is visible

            if (metricsSection) {
                observer.observe(metricsSection);
            }
        });
    </script>
  <section class="py-24 border-t border-gray-800 bg-[#0a0d12] relative overflow-hidden" id="staff-section">
        
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-brand-purple/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Core <span class="text-brand-purple">Contributors</span></h2>
                <p class="text-gray-400 font-mono text-sm">Meet the faculty powering NGA-Coding Academy</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8" id="staff-grid">
                
                <div class="staff-card group bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-brand-purple/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_10px_30px_rgba(210,168,255,0.1)]" data-aos="fade-up" data-aos-delay="100">
                    <div class="aspect-[4/5] overflow-hidden relative">
                        <img src="https://media.licdn.com/dms/image/v2/D4D03AQF2XUNSFoOEug/profile-displayphoto-scale_200_200/B4DZgc.ovnHAAY-/0/1752832841229?e=2147483647&v=beta&t=SsynM_TgIgy5wGO7055BiXE5yP7z0n7mWDLtvcARpS0" alt="Josephine Uwitonze Nyiranzeyimana" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6 relative bg-brand-card border-t border-gray-800">
                        <div class="absolute -top-3 right-6 w-6 h-6 bg-brand-dark border border-gray-700 rounded-full flex items-center justify-center z-20">
                            <div class="w-2 h-2 rounded-full bg-brand-purple animate-pulse shadow-[0_0_8px_rgba(210,168,255,0.8)]"></div>
                        </div>
                        
                        <h3 class="text-lg font-bold text-white mb-1 line-clamp-1" title="Josephine Uwitonze Nyiranzeyimana">Josephine Uwitonze Nyiranzeyimana</h3>
                        <p class="font-mono text-xs text-brand-purple mb-4">role: "Principal Director"</p>
                        
                        <div class="flex gap-4 pt-4 border-t border-gray-800">
                            <a href="#" class="text-gray-500 hover:text-white transition-colors" title="Email">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-white transition-colors" title="LinkedIn">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="staff-card group bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-brand-blue/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_10px_30px_rgba(121,192,255,0.1)]" data-aos="fade-up" data-aos-delay="200">
                    <div class="aspect-[4/5] overflow-hidden relative">
                        <img src="https://ca.slack-edge.com/T09LDAFSNVD-U09LUQATND8-5cb87bf13ffc-512" alt="Assadou Nzigamasabo" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6 relative bg-brand-card border-t border-gray-800">
                        <div class="absolute -top-3 right-6 w-6 h-6 bg-brand-dark border border-gray-700 rounded-full flex items-center justify-center z-20">
                            <div class="w-2 h-2 rounded-full bg-brand-blue animate-pulse shadow-[0_0_8px_rgba(121,192,255,0.8)]"></div>
                        </div>
                        
                        <h3 class="text-lg font-bold text-white mb-1">Assadou Nzigamasabo</h3>
                        <p class="font-mono text-xs text-brand-blue mb-4">role: "Head of Software"</p>
                        
                        <div class="flex gap-4 pt-4 border-t border-gray-800">
                            <a href="#" class="text-gray-500 hover:text-white transition-colors" title="Email">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-white transition-colors" title="GitHub">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="staff-card group bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-[#ffa657]/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_10px_30px_rgba(255,166,87,0.1)]" data-aos="fade-up" data-aos-delay="300">
                    <div class="aspect-[4/5] overflow-hidden relative">
                        <img src="https://pbs.twimg.com/profile_images/1520352843819069440/mPezuvCt_400x400.jpg" alt="Niyongabo Emmanuel" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6 relative bg-brand-card border-t border-gray-800">
                        <div class="absolute -top-3 right-6 w-6 h-6 bg-brand-dark border border-gray-700 rounded-full flex items-center justify-center z-20">
                            <div class="w-2 h-2 rounded-full bg-[#ffa657] animate-pulse shadow-[0_0_8px_rgba(255,166,87,0.8)]"></div>
                        </div>
                        
                        <h3 class="text-lg font-bold text-white mb-1">Niyongabo Emmanuel</h3>
                        <p class="font-mono text-xs text-[#ffa657] mb-4">role: "Graphical Design & Web development Instructor"</p>
                        
                        <div class="flex gap-4 pt-4 border-t border-gray-800">
                            <a href="#" class="text-gray-500 hover:text-white transition-colors" title="Email">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-white transition-colors" title="LinkedIn">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="staff-card group bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-brand-accent/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_10px_30px_rgba(126,231,135,0.1)]" data-aos="fade-up" data-aos-delay="400">
                    <div class="aspect-[4/5] overflow-hidden relative">
                        <img src="https://i1.rgstatic.net/ii/profile.image/596305638342656-1519181751703_Q512/Habimana-Jean-Willy.jpg" alt="NDAZIVUNNYE Felix" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6 relative bg-brand-card border-t border-gray-800">
                        <div class="absolute -top-3 right-6 w-6 h-6 bg-brand-dark border border-gray-700 rounded-full flex items-center justify-center z-20">
                            <div class="w-2 h-2 rounded-full bg-brand-accent animate-pulse shadow-[0_0_8px_rgba(126,231,135,0.8)]"></div>
                        </div>
                        
                        <h3 class="text-lg font-bold text-white mb-1">HABIMANA Jean WIlly</h3>
                        <p class="font-mono text-xs text-brand-accent mb-4">role: "Embedded systems instructor"</p>
                        
                        <div class="flex gap-4 pt-4 border-t border-gray-800">
                            <a href="#" class="text-gray-500 hover:text-white transition-colors" title="Email">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="staff-card hidden group bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-brand-blue/50 transition-all duration-300 hover:-translate-y-2">
                    <div class="aspect-[4/5] overflow-hidden relative bg-gray-800 flex items-center justify-center">
                         <img src="https://ca.slack-edge.com/T09LDAFSNVD-U09NR20TTAR-79dfff9762e0-512" alt="NDAZIVUNNYE Felix" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6 relative bg-brand-card border-t border-gray-800">
                        <div class="absolute -top-3 right-6 w-6 h-6 bg-brand-dark border border-gray-700 rounded-full flex items-center justify-center z-20">
                            <div class="w-2 h-2 rounded-full bg-brand-blue animate-pulse shadow-[0_0_8px_rgba(121,192,255,0.8)]"></div>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-1">NDAZIVUNNYE Felix</h3>
                        <p class="font-mono text-xs text-brand-blue mb-4">role: "Instructor of C programming"</p>
                    </div>
                </div>

                <div class="staff-card hidden group bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-brand-blue/50 transition-all duration-300 hover:-translate-y-2">
                    <div class="aspect-[4/5] overflow-hidden relative bg-gray-800 flex items-center justify-center">
                        <img src="https://ca.slack-edge.com/T09LDAFSNVD-U09QZUUNK4L-ge4d450ee31b-512" alt="NDAZIVUNNYE Felix" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6 relative bg-brand-card border-t border-gray-800">
                        <div class="absolute -top-3 right-6 w-6 h-6 bg-brand-dark border border-gray-700 rounded-full flex items-center justify-center z-20">
                            <div class="w-2 h-2 rounded-full bg-brand-blue animate-pulse shadow-[0_0_8px_rgba(121,192,255,0.8)]"></div>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-1">Uwitonze Jean Bosco</h3>
                        <p class="font-mono text-xs text-brand-blue mb-4">role: "Math Instructor"</p>
                    </div>
                </div>
                <div class="staff-card hidden group bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-brand-blue/50 transition-all duration-300 hover:-translate-y-2">
                    <div class="aspect-[4/5] overflow-hidden relative bg-gray-800 flex items-center justify-center">
                        <img src="https://ca.slack-edge.com/T09LDAFSNVD-U09LU5H40H4-3d62a35355cc-512" alt="NDAZIVUNNYE Felix" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6 relative bg-brand-card border-t border-gray-800">
                        <div class="absolute -top-3 right-6 w-6 h-6 bg-brand-dark border border-gray-700 rounded-full flex items-center justify-center z-20">
                            <div class="w-2 h-2 rounded-full bg-brand-blue animate-pulse shadow-[0_0_8px_rgba(121,192,255,0.8)]"></div>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-1">ULeon Ntabomvura
</h3>
                        <p class="font-mono text-xs text-brand-blue mb-4">role: "Networking Instructor"</p>
                    </div>
                </div>
                
                <div class="staff-card hidden group bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-brand-blue/50 transition-all duration-300 hover:-translate-y-2">
                    <div class="aspect-[4/5] overflow-hidden relative bg-gray-800 flex items-center justify-center">
                        <img src="https://ca.slack-edge.com/T09LDAFSNVD-U09LTPUSSMU-b8c1b44c7299-512" alt="NDAZIVUNNYE Felix" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6 relative bg-brand-card border-t border-gray-800">
                        <div class="absolute -top-3 right-6 w-6 h-6 bg-brand-dark border border-gray-700 rounded-full flex items-center justify-center z-20">
                            <div class="w-2 h-2 rounded-full bg-brand-blue animate-pulse shadow-[0_0_8px_rgba(121,192,255,0.8)]"></div>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-1">Jean de Dieu Nshimiyimana</h3>
                        <p class="font-mono text-xs text-brand-blue mb-4">role: "Networking Instructor"</p>
                    </div>
                </div>
                </div>

            <div class="mt-12 text-center">
                <button id="loadMoreBtn" class="font-mono text-sm font-semibold text-brand-accent bg-brand-card/50 hover:bg-gray-800 hover:text-white border border-gray-700 px-6 py-3 rounded-full transition-all duration-300 flex items-center gap-2 mx-auto shadow-lg">
                    <span>> expand_grid()</span>
                    <svg class="w-4 h-4 transition-transform duration-300" id="btnIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>

        </div>
    </section>

    <script>
        document.getElementById('loadMoreBtn').addEventListener('click', function() {
            const hiddenCards = document.querySelectorAll('.staff-card.hidden');
            const btnIcon = document.getElementById('btnIcon');
            const btnText = this.querySelector('span');

            if (hiddenCards.length > 0) {
                // Show cards
                hiddenCards.forEach(card => {
                    card.classList.remove('hidden');
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.transition = 'opacity 0.5s ease';
                        card.style.opacity = '1';
                    }, 50);
                });
                btnText.innerText = '> collapse_grid()';
                btnIcon.style.transform = 'rotate(180deg)';
            } else {
                // Hide cards
                const allCards = document.querySelectorAll('.staff-card');
                allCards.forEach((card, index) => {
                    if (index >= 4) {
                        card.classList.add('hidden');
                    }
                });
                btnText.innerText = '> expand_grid()';
                btnIcon.style.transform = 'rotate(0deg)';
                
                // Scroll back to top
                document.getElementById('staff-section').scrollIntoView({ behavior: 'smooth' });
            }
        });
    </script>

    <section class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-white mb-2">Recent <span class="text-brand-blue">Logs</span></h2>
                <p class="text-gray-400 font-mono text-sm">System updates and news from NGA</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-gray-600 transition-colors group" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 overflow-hidden">
                        <img src="https://www.nga.ac.rw/uploads/events/1765519615_Innoguration.png" alt="Delegates visit" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-3 leading-snug">IOAI, UNESCO and MINICT delegates visit NGA</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-3">On November 19th, New Generation Academy proudly welcomed esteemed delegates from the International Olympiad in Artificial Intelligence (IOAI), UNESCO, and Rwanda's Ministry of ICT...</p>
                        <a href="#" class="inline-block bg-brand-blue/10 text-brand-blue hover:bg-brand-blue hover:text-white px-4 py-2 rounded-full text-sm font-semibold transition-colors">More Details</a>
                    </div>
                </div>

                <div class="bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-gray-600 transition-colors group" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 overflow-hidden">
                        <img src="https://www.newtimes.co.rw/thenewtimes/uploads/images/2024/11/20/64456.jpg" alt="Robotics Lab" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-3 leading-snug">Rwanda inaugurated a robotics lab worth 100M Frw</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-3">Rwanda has inaugurated a state-of-the-art robotics laboratory at New Generation Academy. This facility aims to advance students' knowledge in coding and mechanics...</p>
                        <a href="#" class="inline-block bg-brand-blue/10 text-brand-blue hover:bg-brand-blue hover:text-white px-4 py-2 rounded-full text-sm font-semibold transition-colors">More Details</a>
                    </div>
                </div>

                <div class="bg-brand-card rounded-2xl border border-gray-800 overflow-hidden hover:border-gray-600 transition-colors group" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-48 overflow-hidden bg-gray-800 flex items-center justify-center">
                         <img src="https://www.newtimes.co.rw/thenewtimes/uploads/images/2024/11/20/64454.jpg" alt="Robotics Lab" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-3 leading-snug">Imbaraga u Rwanda rwashyize mu ikoranabuhanga</h3>
                        <p class="text-gray-400 text-sm mb-6 line-clamp-3">Ikoranabuhanga ry'ubwenge buhangano. Robo (Robots) + Artificial Intelligence zatangiye kubyara imbuto...</p>
                        <a href="#" class="inline-block bg-brand-blue/10 text-brand-blue hover:bg-brand-blue hover:text-white px-4 py-2 rounded-full text-sm font-semibold transition-colors">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

<section class="py-16 border-t border-gray-800 bg-[#0a0d12] overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8 text-center">
            <h3 class="font-mono text-gray-500 text-sm tracking-widest uppercase">Integrated With Industry Leaders</h3>
        </div>
        
        <div class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
            <ul class="flex items-center justify-center md:justify-start [&_li]:mx-12 [&_img]:max-w-none animate-marquee">
                <li><img src="assets/partner1.png" alt="Partner 1" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner2.png" alt="Partner 2" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner3.png" alt="Partner 3" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner4.png" alt="Partner 4" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner5.png" alt="Partner 5" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner6.png" alt="Partner 6" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner7.png" alt="Partner 6" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner8.png" alt="Partner 6" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
            </ul>
            <ul class="flex items-center justify-center md:justify-start [&_li]:mx-12 [&_img]:max-w-none animate-marquee" aria-hidden="true">
                <li><img src="assets/partner1.png" alt="Partner 1" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner2.png" alt="Partner 2" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner3.png" alt="Partner 3" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner4.png" alt="Partner 4" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner5.png" alt="Partner 5" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner6.png" alt="Partner 6" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner7.png" alt="Partner 6" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
                <li><img src="assets/partner8.png" alt="Partner 6" class="h-12 w-auto grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-pointer object-contain"></li>
            </ul>
        </div>
    </section>
    <section class="relative py-32 parallax-bg flex items-center justify-center border-t border-gray-800">
        
        <div class="absolute inset-0 bg-brand-dark/70 backdrop-blur-sm pointer-events-none z-0"></div>

        <div class="relative z-10 w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="glass-panel rounded-3xl p-10 md:p-16 text-center overflow-hidden relative" data-aos="zoom-in" data-aos-duration="1000">
                
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-brand-blue to-transparent opacity-50"></div>
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-brand-blue/20 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-brand-purple/20 rounded-full blur-3xl pointer-events-none"></div>

                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-8">
                    <span class="w-2 h-2 rounded-full bg-brand-accent animate-pulse shadow-[0_0_8px_rgba(126,231,135,0.8)]"></span>
                    <span class="font-mono text-xs text-gray-300 tracking-widest uppercase">Admissions Open</span>
                </div>

                <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight drop-shadow-lg">
                    Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-purple">Compile Your Future?</span>
                </h2>
                
                <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto font-light leading-relaxed drop-shadow-md">
                    Join thousands of successful graduates. Secure your spot at Rwanda’s premier Coding Academy and start building the intelligent systems of tomorrow.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-5 justify-center items-center">
                    <a href="apply.php" class="group relative px-8 py-4 bg-brand-accent text-brand-dark font-bold rounded-full overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-[0_0_30px_rgba(126,231,135,0.5)] w-full sm:w-auto">
                        <span class="relative z-10 flex items-center justify-center gap-2 font-mono text-sm">
                            > ./register_now
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </span>
                    </a>
                    
                    <a href="contact.php" class="px-8 py-4 bg-transparent border border-gray-500 hover:border-white text-white font-semibold rounded-full transition-all duration-300 hover:bg-white/5 w-full sm:w-auto">
                        Contact Admissions
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 border-t border-gray-800 bg-[#0d1117] relative overflow-hidden" id="fees-section">
        
        <div class="absolute top-1/4 left-0 w-72 h-72 bg-brand-blue/10 rounded-full blur-3xl pointer-events-none -translate-x-1/2"></div>
        <div class="absolute bottom-1/4 right-0 w-72 h-72 bg-brand-accent/10 rounded-full blur-3xl pointer-events-none translate-x-1/2"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">System <span class="text-brand-blue">Investment</span></h2>
                <p class="text-gray-400 font-medium text-lg max-w-2xl mx-auto">
                    Transparent fee structures to build your future. Choose your deployment environment.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                
                <div class="bg-brand-card/80 backdrop-blur-sm rounded-2xl border border-gray-700 p-8 hover:border-brand-blue transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_10px_30px_rgba(121,192,255,0.1)] flex flex-col" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-white mb-2">Day Scholar</h3>
                        <p class="font-mono text-xs text-brand-blue mb-4">mode: "local_compile"</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl font-extrabold text-white">XXX,XXX</span>
                            <span class="text-gray-500 font-mono text-sm">Frw / Term</span>
                        </div>
                    </div>
                    
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-gray-300">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Full Academic Curriculum Access
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            100M Frw Robotics Lab Usage
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Lunch Provided
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-b from-[#161b22] to-[#0d1117] rounded-2xl border border-brand-accent p-8 transform md:-translate-y-4 shadow-[0_0_30px_rgba(126,231,135,0.15)] flex flex-col relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <span class="bg-brand-accent text-[#0d1117] text-xs font-bold uppercase tracking-wider py-1 px-3 rounded-full">Most Popular</span>
                    </div>

                    <div class="mb-6 mt-2">
                        <h3 class="text-xl font-bold text-white mb-2">Boarding Scholar</h3>
                        <p class="font-mono text-xs text-brand-accent mb-4">mode: "full_environment"</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-white">XXX,XXX</span>
                            <span class="text-gray-500 font-mono text-sm">Frw / Term</span>
                        </div>
                    </div>
                    
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-gray-300">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Everything in Day Scholar
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Accommodation & All Meals
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Extended Lab Access Hours
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Evening Tech Mentorship
                        </li>
                    </ul>
                </div>

                <div class="bg-brand-card/80 backdrop-blur-sm rounded-2xl border border-gray-700 p-8 hover:border-brand-purple transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_10px_30px_rgba(210,168,255,0.1)] flex flex-col" data-aos="fade-up" data-aos-delay="300">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-white mb-2">International</h3>
                        <p class="font-mono text-xs text-brand-purple mb-4">mode: "global_network"</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl font-extrabold text-white">$XXX</span>
                            <span class="text-gray-500 font-mono text-sm">USD / Term</span>
                        </div>
                    </div>
                    
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-gray-300">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-purple shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Full Boarding Package
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-purple shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Visa Assistance & Processing
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-purple shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Airport Transfers
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-16 text-center" data-aos="fade-up" data-aos-delay="400">
                <a href="fees.php" class="inline-flex items-center gap-3 font-mono text-sm font-semibold text-gray-400 hover:text-white transition-colors group">
                    <span class="text-brand-accent group-hover:animate-pulse">></span>
                    <span class="border-b border-gray-700 group-hover:border-white transition-colors pb-1">fetch_full_fee_structure.pdf.</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

        </div>
    </section>
 <?php include 'includes/footer.php'; ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>
    <script>
        // Initialize Scroll Animations
        AOS.init({ once: true, offset: 50, duration: 800, easing: 'ease-out-cubic' });
        
        // Tilt is automatically initialized via the data-tilt attributes in the HTML!
    </script>
</body>
</html>