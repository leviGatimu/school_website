<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics | NGA Program Architecture</title>
    
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

        /* Glassmorphism Module Card */
        .module-card {
            background: rgba(22, 27, 34, 0.6);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .module-card:hover {
            border-color: rgba(121, 192, 255, 0.4);
            transform: translateY(-5px) scale(1.02);
            background: rgba(22, 27, 34, 0.9);
        }

        /* Git Branch Line */
        .git-line {
            width: 2px;
            background: linear-gradient(to bottom, #79c0ff, #d2a8ff, #7ee787);
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            bottom: 0;
            z-index: 0;
        }

        .git-node {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #0d1117;
            border: 3px solid #79c0ff;
            z-index: 10;
        }
    </style>
</head>
<body class="antialiased selection:bg-brand-purple selection:text-black">

    <?php include 'includes/header.php'; ?>

    <main class="relative pt-40 pb-20 overflow-hidden">
        <div class="absolute inset-0 bg-grid pointer-events-none opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-5xl md:text-8xl font-black tracking-tighter text-white mb-6" data-aos="zoom-out">
                Program <span class="text-brand-purple">Syllabus</span>
            </h1>
            <p class="max-w-2xl mx-auto text-gray-400 text-lg md:text-xl font-light" data-aos="fade-up">
                A high-performance curriculum integrating full-stack logic, micro-controller engineering, and autonomous robotics.
            </p>
        </div>
    </main>

    <section class="py-24 relative overflow-hidden bg-[#0a0d12]">
        <div class="max-w-4xl mx-auto px-4 relative">
            <div class="git-line hidden md:block"></div>

            <div class="relative flex flex-col md:flex-row items-center justify-between mb-24" data-aos="fade-up">
                <div class="md:w-[45%] text-center md:text-right">
                    <h3 class="text-2xl font-bold text-brand-blue mb-2">Phase 01: Software Architecture</h3>
                    <p class="text-gray-400 text-sm">Deep dive into UI/UX, Web Dev (HTML/CSS/JS), PHP, and Database Management.</p>
                </div>
                <div class="git-node my-4 md:my-0"></div>
                <div class="md:w-[45%]">
                    <div class="module-card p-6 rounded-2xl">
                        <code class="text-xs text-brand-blue mb-4 block">// TECH_STACK</code>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">React.js</span>
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">PHP 8.x</span>
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">MySQL</span>
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">Tailwind</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative flex flex-col md:flex-row-reverse items-center justify-between mb-24" data-aos="fade-up">
                <div class="md:w-[45%] text-center md:text-left">
                    <h3 class="text-2xl font-bold text-brand-purple mb-2">Phase 02: Embedded Systems</h3>
                    <p class="text-gray-400 text-sm">Hardware meets software. IoT, Sensors, Circuit Design, and Micro-controllers.</p>
                </div>
                <div class="git-node my-4 md:my-0 border-brand-purple"></div>
                <div class="md:w-[45%]">
                    <div class="module-card p-6 rounded-2xl">
                        <code class="text-xs text-brand-purple mb-4 block">// HARDWARE_STACK</code>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">Arduino</span>
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">ESP32</span>
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">C++</span>
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">Circuit Design</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative flex flex-col md:flex-row items-center justify-between mb-24" data-aos="fade-up">
                <div class="md:w-[45%] text-center md:text-right">
                    <h3 class="text-2xl font-bold text-brand-accent mb-2">Phase 03: Robotics & AI</h3>
                    <p class="text-gray-400 text-sm">Autonomous navigation, Actuators, and Intelligent Automation systems.</p>
                </div>
                <div class="git-node my-4 md:my-0 border-brand-accent"></div>
                <div class="md:w-[45%]">
                    <div class="module-card p-6 rounded-2xl">
                        <code class="text-xs text-brand-accent mb-4 block">// AI_LOGIC</code>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">ROS</span>
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">Python</span>
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">OpenCV</span>
                            <span class="px-2 py-1 bg-white/5 rounded text-[10px] font-mono">Neural Networks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 tracking-tight">THE COMPETENCY <span class="text-brand-blue">FRAMEWORK</span></h2>
                <p class="text-gray-500 mt-4">Skills that define the next generation of engineers.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 auto-rows-[250px]">
                <div class="md:col-span-2 md:row-span-2 bg-gray-900 rounded-3xl p-8 flex flex-col justify-end relative overflow-hidden group shadow-2xl">
                    <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    </div>
                    <h4 class="text-brand-blue font-mono text-xs uppercase mb-2 tracking-widest">Main Core</h4>
                    <h3 class="text-white text-3xl font-bold mb-4 leading-tight">Full-Stack Development & Server Architecture</h3>
                    <p class="text-gray-400 text-sm">Mastering the end-to-end flow of data from front-end interfaces to secure back-end databases.</p>
                </div>

                <div class="md:row-span-2 bg-brand-purple rounded-3xl p-8 flex flex-col justify-between text-[#0d1117] shadow-lg">
                    <div class="w-12 h-12 bg-black/10 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Embedded Intelligence</h3>
                        <p class="text-[#0d1117]/70 text-sm">Low-level programming and real-time operating systems for intelligent machines.</p>
                    </div>
                </div>

                <div class="bg-gray-100 rounded-3xl p-8 flex flex-col justify-center border border-gray-200">
                    <h3 class="text-gray-900 font-bold text-xl mb-2">Cloud Foundations</h3>
                    <p class="text-gray-500 text-xs">Deploying and scaling systems on AWS & Azure.</p>
                </div>

                <div class="bg-gray-100 rounded-3xl p-8 flex flex-col justify-center border border-gray-200">
                    <h3 class="text-gray-900 font-bold text-xl mb-2">UI/UX Protocol</h3>
                    <p class="text-gray-500 text-xs">Designing user-centric interfaces in Figma.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#0d1117] border-t border-gray-800">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-8 font-mono">> verify_certification_status()</h2>
            <div class="p-8 glass-card rounded-3xl border border-gray-700">
                <p class="text-gray-400 leading-relaxed mb-6">
                    Our academics are verified by the <span class="text-white font-bold">Higher Education Council (HEC)</span> and the <span class="text-white font-bold">Ministry of Education</span>, ensuring your diploma is recognized both nationally and internationally as a valid technical degree.
                </p>
                <div class="inline-flex items-center gap-3 text-brand-accent">
                    <div class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></div>
                    <span class="font-mono text-sm tracking-widest uppercase">Certified Program 2026</span>
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