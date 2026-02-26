<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGA | System Documentation</title>
    
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

        /* Animated Border Effect */
        .glow-border {
            position: relative;
            border-radius: 1rem;
            z-index: 1;
        }
        .glow-border::after {
            content: "";
            position: absolute;
            top: -1px; left: -1px; right: -1px; bottom: -1px;
            background: linear-gradient(45deg, transparent, rgba(121, 192, 255, 0.3), transparent);
            border-radius: 1rem;
            z-index: -1;
            animation: border-flow 4s linear infinite;
        }

        @keyframes border-flow {
            0% { background-position: 0% 50%; }
            100% { background-position: 200% 50%; }
        }

        .syntax-string { color: #a5d6ff; }
        .syntax-keyword { color: #ff7b72; }
        .syntax-func { color: #d2a8ff; }
    </style>
</head>
<body class="antialiased selection:bg-brand-blue selection:text-black">

    <?php include 'includes/header.php'; ?>

    <main class="relative pt-40 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-grid pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-blue/10 border border-brand-blue/20 mb-6" data-aos="fade-down">
                <span class="font-mono text-[10px] uppercase tracking-[0.2em] text-brand-blue">System Documentation v1.0.4</span>
            </div>
            <h1 class="text-5xl md:text-8xl font-black tracking-tighter text-white mb-6" data-aos="zoom-out">
                The <span class="text-brand-blue italic">Source</span> Code
            </h1>
            <p class="max-w-2xl mx-auto text-gray-400 text-lg md:text-xl font-light" data-aos="fade-up" data-aos-delay="200">
                New Generation Academy is the first private accredited coding center in Rwanda, engineered to produce world-class developers and hardware pioneers.
            </p>
        </div>
    </main>

    <section class="py-24 bg-[#0a0d12]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <div class="lg:col-span-5" data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-white mb-8 underline decoration-brand-blue decoration-4 underline-offset-8">Academy Profile</h2>
                    <div class="space-y-8">
                        <div>
                            <h4 class="font-mono text-xs text-brand-accent uppercase mb-2">// MISSION_STATEMENT</h4>
                            <p class="text-gray-300 leading-relaxed italic">
                                "To provide high-quality, competency-based training in Software Programming, Embedded Systems, and Robotics; to nurture innovation through industry-aligned curricula."
                            </p>
                        </div>
                        <div>
                            <h4 class="font-mono text-xs text-brand-purple uppercase mb-2">// VISION_2030</h4>
                            <p class="text-gray-300 leading-relaxed">
                                To shape future-ready careers by delivering excellence in software engineering and developing job-ready graduates who uphold Christian values.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7" data-aos="fade-left">
                    <div class="glow-border bg-brand-card p-1 shadow-2xl">
                        <div class="bg-[#0d1117] rounded-xl overflow-hidden border border-gray-800">
                            <div class="flex items-center justify-between px-4 py-3 bg-[#161b22] border-b border-gray-800">
                                <div class="flex gap-1.5">
                                    <div class="w-3 h-3 rounded-full bg-red-500/50"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500/50"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500/50"></div>
                                </div>
                                <span class="font-mono text-[10px] text-gray-500 italic uppercase">nga_core_logic.cpp</span>
                            </div>
                            <div class="p-6 font-mono text-sm leading-relaxed overflow-x-auto">
                                <p><span class="syntax-keyword">#include</span> <span class="syntax-string">&lt;innovation_center&gt;</span></p>
                                <p><span class="syntax-keyword">using namespace</span> rwanda_tech_vision;</p>
                                <br>
                                <p><span class="syntax-keyword">void</span> <span class="syntax-func">InitializeAcademy</span>() {</p>
                                <p class="pl-6"><span class="syntax-keyword">bool</span> isAccredited = <span class="syntax-keyword">true</span>;</p>
                                <p class="pl-6"><span class="syntax-keyword">int</span> labValue = <span class="syntax-string">100000000</span>; <span class="text-gray-500">// Frw</span></p>
                                <p class="pl-6"><span class="text-gray-500">// Deploy specialized curriculum</span></p>
                                <p class="pl-6">Curriculum <span class="text-brand-accent">nga</span> = Software + Embedded + Robotics;</p>
                                <br>
                                <p class="pl-6"><span class="syntax-keyword">if</span> (nga.ready()) {</p>
                                <p class="pl-12">nga.produce(<span class="syntax-string">"Next Gen Developers"</span>);</p>
                                <p class="pl-6">}</p>
                                <p>}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-32 relative overflow-hidden border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-brand-card rounded-[2.5rem] p-10 md:p-20 border border-gray-800 relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-64 h-64 bg-brand-blue/10 rounded-full blur-[100px] pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="relative" data-aos="zoom-in">
                        <div class="aspect-[4/5] rounded-3xl overflow-hidden border border-gray-700 bg-brand-dark">
                            <img src="https://edify.org/wp-content/uploads/2025/07/Jean-Claude.jpg" alt="Founder Jean-Claude Tuyisenge" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                        </div>
                        <div class="absolute -bottom-6 -right-6 bg-brand-blue text-brand-dark font-black px-6 py-4 rounded-2xl shadow-2xl transform rotate-3">
                            SYSTEM ARCHITECT
                        </div>
                    </div>

                    <div data-aos="fade-left">
                        <h4 class="font-mono text-brand-blue text-sm mb-4 uppercase tracking-[0.3em]">Founding Root User</h4>
                        <h2 class="text-4xl md:text-5xl font-black text-white mb-6 tracking-tight">Jean-Claude Tuyisenge</h2>
                        <p class="text-gray-400 text-lg leading-relaxed mb-8">
                            Under the leadership of <span class="text-white font-semibold">Jean-Claude Tuyisenge</span>, NGA has pioneered a model of tech education that starts as early as primary school. He envisioned a center where the youth of Rwanda don't just consume technology, but master the hardware and software behind it.
                        </p>
                        <blockquote class="bg-brand-dark/50 border-l-4 border-brand-accent p-6 rounded-r-xl">
                            <p class="text-white italic text-lg">
                                "We became a model... proving that what people have been trying to do for a long time is possible in Rwanda."
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-black text-gray-900 uppercase tracking-tighter">Core Attributes</h2>
                <div class="w-12 h-1 bg-brand-blue mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border border-gray-200">
                <div class="p-10 border-b md:border-b-0 md:border-r border-gray-200 hover:bg-gray-50 transition-colors">
                    <span class="font-mono text-brand-blue text-sm">01. Accredited</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-4 mb-3">Certified Trade</h3>
                    <p class="text-gray-500 text-sm">Recognized by HEC, providing industry-level certification for software and hardware engineering.</p>
                </div>
                <div class="p-10 border-b md:border-b-0 md:border-r border-gray-200 hover:bg-gray-50 transition-colors">
                    <span class="font-mono text-brand-blue text-sm">02. Values</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-4 mb-3">Christ-Centered</h3>
                    <p class="text-gray-500 text-sm">Built on ethical foundations, ensuring our developers are leaders in character as much as code.</p>
                </div>
                <div class="p-10 hover:bg-gray-50 transition-colors">
                    <span class="font-mono text-brand-blue text-sm">03. Impact</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-4 mb-3">Job-Ready Output</h3>
                    <p class="text-gray-500 text-sm">Our curriculum is built with industry partners to ensure graduates deploy straight into the workforce.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 50, duration: 1000, easing: 'ease-in-out' });
    </script>
</body>
</html>