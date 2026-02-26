<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovation | NGA R&D Lab</title>
    
    <link rel="icon" type="image/svg+xml" href="assets/logo.svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        mono: ['Fira Code', 'monospace'],
                    },
                    colors: {
                        brand: {
                            dark: '#0d1117', 
                            card: '#161b22',
                            accent: '#7ee787', 
                            blue: '#79c0ff',   
                            purple: '#d2a8ff'
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body { background-color: #0d1117; color: #c9d1d9; overflow-x: hidden; }
        
        .bg-grid {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
        }

        /* Neon Glow Card */
        .innovation-card {
            background: rgba(22, 27, 34, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .innovation-card:hover {
            border-color: #d2a8ff;
            box-shadow: 0 0 20px rgba(210, 168, 255, 0.1);
            transform: scale(1.02);
        }

        /* Scanning Line Animation */
        .scan-line {
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, transparent, #7ee787, transparent);
            position: absolute;
            top: 0;
            animation: scan 3s linear infinite;
            z-index: 20;
        }
        @keyframes scan {
            0% { top: 0%; opacity: 0; }
            50% { opacity: 1; }
            100% { top: 100%; opacity: 0; }
        }
    </style>
</head>
<body class="antialiased selection:bg-brand-accent selection:text-black">

    <?php include 'includes/header.php'; ?>

    <main class="relative pt-40 pb-20 overflow-hidden">
        <div class="absolute inset-0 bg-grid pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-brand-accent/10 border border-brand-accent/20 mb-6" data-aos="fade-right">
                <span class="font-mono text-[10px] text-brand-accent">STATUS: OVERCLOCKING_IDEAS</span>
            </div>
            <h1 class="text-6xl md:text-9xl font-black tracking-tighter text-white mb-6" data-aos="zoom-out">
                Inno<span class="text-brand-accent">vation</span>
            </h1>
            <p class="max-w-2xl text-gray-400 text-lg md:text-xl font-light" data-aos="fade-up">
                Where Rwandan youth build the hardware of the future. From AI-driven robotics to decentralized IoT networks.
            </p>
        </div>
    </main>

    <section class="py-24 relative bg-[#0a0d12] border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <div class="relative order-2 lg:order-1" data-aos="fade-right">
                    <div class="relative rounded-3xl overflow-hidden border border-gray-700 bg-brand-card aspect-video shadow-2xl">
                        <div class="scan-line"></div>
                        <img src="https://www.newtimes.co.rw/thenewtimes/uploads/images/2024/11/20/64456.jpg" alt="NGA Robotics Lab" class="w-full h-full object-cover opacity-60">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 font-mono text-xs text-brand-accent">
                            > [INTERNAL_SENSORS_ACTIVE]
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <h4 class="font-mono text-brand-accent text-sm mb-4 uppercase tracking-[0.3em]">// INFRASTRUCTURE_V2</h4>
                    <h2 class="text-4xl font-black text-white mb-6">The 100M Frw <br>Robotics Hub</h2>
                    <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                        Inaugurated in late 2024, our state-of-the-art laboratory is equipped with high-precision electronics, 3D printing arrays, and industrial-grade micro-controllers. It serves as the primary testing ground for student-led autonomous systems.
                    </p>
                    <div class="grid grid-cols-2 gap-4 font-mono text-[11px] text-gray-500">
                        <div class="p-3 border border-gray-800 rounded-lg bg-white/5">
                            <span class="text-brand-accent block mb-1">UNIT_01</span>
                            Mechanical Prototyping
                        </div>
                        <div class="p-3 border border-gray-800 rounded-lg bg-white/5">
                            <span class="text-brand-accent block mb-1">UNIT_02</span>
                            Circuit Logic Testing
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-brand-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4 font-mono">> list_active_prototypes</h2>
                <p class="text-gray-500">Student-led projects currently in beta testing.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="innovation-card rounded-2xl p-8 group" data-aos="fade-up">
                    <div class="w-10 h-10 bg-brand-blue/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 tracking-tight">AI Traffic Light System</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">Real-time computer vision algorithm designed to optimize Kigali traffic flow using adaptive timing.</p>
                    <div class="flex gap-2">
                        <span class="text-[10px] font-mono text-brand-blue px-2 py-1 bg-brand-blue/5 border border-brand-blue/10 rounded">Python</span>
                        <span class="text-[10px] font-mono text-brand-blue px-2 py-1 bg-brand-blue/5 border border-brand-blue/10 rounded">OpenCV</span>
                    </div>
                </div>

                <div class="innovation-card rounded-2xl p-8 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-10 h-10 bg-brand-accent/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-brand-accent/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 tracking-tight">Smart Trash Robot</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">Ultrasonic-guided autonomous waste bin that navigates campus environments for efficient collection.</p>
                    <div class="flex gap-2">
                        <span class="text-[10px] font-mono text-brand-accent px-2 py-1 bg-brand-accent/5 border border-brand-accent/10 rounded">C++</span>
                        <span class="text-[10px] font-mono text-brand-accent px-2 py-1 bg-brand-accent/5 border border-brand-accent/10 rounded">Arduino</span>
                    </div>
                </div>

                <div class="innovation-card rounded-2xl p-8 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-10 h-10 bg-brand-purple/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-brand-purple/20 transition-colors">
                        <svg class="w-6 h-6 text-brand-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 tracking-tight">AI Personal Trainer</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">Motion tracking application that analyzes exercise form and provides real-time corrective feedback.</p>
                    <div class="flex gap-2">
                        <span class="text-[10px] font-mono text-brand-purple px-2 py-1 bg-brand-purple/5 border border-brand-purple/10 rounded">React</span>
                        <span class="text-[10px] font-mono text-brand-purple px-2 py-1 bg-brand-purple/5 border border-brand-purple/10 rounded">MediaPipe</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 tracking-tight">SYSTEM <span class="text-brand-purple">EVOLUTION</span></h2>
                <p class="text-gray-500 mt-2">NGA Roadmap: Towards a Silicon Valley in Rwanda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 border-l-4 border-brand-blue bg-gray-50">
                    <span class="font-mono text-xs text-brand-blue font-bold">Q4 2025</span>
                    <h4 class="text-xl font-bold text-gray-900 mt-2 mb-4">Incubation Program</h4>
                    <p class="text-gray-500 text-sm">Launch of the NGA Incubator to help student projects transition into real-world startups.</p>
                </div>
                <div class="p-8 border-l-4 border-brand-purple bg-gray-50">
                    <span class="font-mono text-xs text-brand-purple font-bold">Q2 2026</span>
                    <h4 class="text-xl font-bold text-gray-900 mt-2 mb-4">IoT Network Rollout</h4>
                    <p class="text-gray-500 text-sm">Deploying student-built smart sensors across Kimihurura for environmental data tracking.</p>
                </div>
                <div class="p-8 border-l-4 border-brand-accent bg-gray-50">
                    <span class="font-mono text-xs text-brand-accent font-bold">2027</span>
                    <h4 class="text-xl font-bold text-gray-900 mt-2 mb-4">Regional Expansion</h4>
                    <p class="text-gray-500 text-sm">Exporting the NGA model to other East African tech hubs.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 50, duration: 1000 });
    </script>
</body>
</html>