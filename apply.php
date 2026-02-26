<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now | NGA System Enrollment</title>
    
    <link rel="icon" type="image/svg+xml" href="assets/logo.svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Outfit', 'sans-serif'], mono: ['Fira Code', 'monospace'] },
                    colors: {
                        brand: { dark: '#0d1117', card: '#161b22', accent: '#7ee787', blue: '#79c0ff', purple: '#d2a8ff' }
                    }
                }
            }
        }
    </script>

    <style>
        body { background-color: #0d1117; color: #c9d1d9; }
        .bg-grid {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
        }
        .form-input {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
        }
        .form-input:focus {
            outline: none;
            border-color: #79c0ff;
            background: rgba(255, 255, 255, 0.07);
            box-shadow: 0 0 15px rgba(121, 192, 255, 0.1);
        }
        .step-node.active { background: #79c0ff; box-shadow: 0 0 15px #79c0ff; }
        .step-node.completed { background: #7ee787; }
    </style>
</head>
<body class="antialiased selection:bg-brand-blue selection:text-black">

    <?php include 'includes/header.php'; ?>

    <main class="relative pt-32 pb-20 overflow-hidden min-h-screen flex items-center">
        <div class="absolute inset-0 bg-grid pointer-events-none opacity-40"></div>
        
        <div class="max-w-3xl mx-auto px-4 w-full relative z-10">
            
            <div class="mb-12 text-center">
                <h1 class="text-4xl font-black text-white mb-4 tracking-tighter uppercase">Initialize <span class="text-brand-blue">Enrollment</span></h1>
                
                <div class="flex items-center justify-center gap-4 mt-8">
                    <div id="step-1-node" class="step-node active w-3 h-3 rounded-full transition-all duration-500"></div>
                    <div class="w-12 h-[2px] bg-gray-800"></div>
                    <div id="step-2-node" class="step-node w-3 h-3 rounded-full transition-all duration-500"></div>
                    <div class="w-12 h-[2px] bg-gray-800"></div>
                    <div id="step-3-node" class="step-node w-3 h-3 rounded-full transition-all duration-500"></div>
                </div>
                <div class="mt-4 font-mono text-[10px] text-gray-500 uppercase tracking-widest" id="step-label">Step 01: User_Identity</div>
            </div>

            <form id="applyForm" action="process_application.php" method="POST" class="bg-brand-card/50 backdrop-blur-xl border border-gray-800 rounded-[2.5rem] p-8 md:p-12 shadow-2xl">
                
                <div id="step-1" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="font-mono text-xs text-brand-blue">student_name</label>
                            <input type="text" name="name" class="form-input" placeholder="Full Name" required>
                        </div>
                        <div class="space-y-2">
                            <label class="font-mono text-xs text-brand-blue">date_of_birth</label>
                            <input type="date" name="dob" class="form-input" required>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="font-mono text-xs text-brand-blue">email_address</label>
                        <input type="email" name="email" class="form-input" placeholder="student@example.com" required>
                    </div>
                    <div class="flex justify-end pt-6">
                        <button type="button" onclick="nextStep(2)" class="bg-brand-blue text-brand-dark px-8 py-3 rounded-full font-bold hover:scale-105 transition-all">Next_Step &rarr;</button>
                    </div>
                </div>

                <div id="step-2" class="hidden space-y-6">
                    <div class="space-y-4">
                        <label class="font-mono text-xs text-brand-purple">select_major</label>
                        <div class="grid grid-cols-1 gap-4">
                            <label class="flex items-center gap-4 p-4 border border-gray-700 rounded-xl cursor-pointer hover:bg-white/5 transition-colors">
                                <input type="radio" name="program" value="software" class="text-brand-purple" checked>
                                <div>
                                    <span class="block text-white font-bold">Software Programming</span>
                                    <span class="text-xs text-gray-500">Web, Mobile, and Full-Stack Apps</span>
                                </div>
                            </label>
                            <label class="flex items-center gap-4 p-4 border border-gray-700 rounded-xl cursor-pointer hover:bg-white/5 transition-colors">
                                <input type="radio" name="program" value="embedded" class="text-brand-purple">
                                <div>
                                    <span class="block text-white font-bold">Embedded Systems & IoT</span>
                                    <span class="text-xs text-gray-500">Circuit Design & Microcontrollers</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="flex justify-between pt-6">
                        <button type="button" onclick="nextStep(1)" class="text-gray-500 font-mono text-xs hover:text-white">&larr; back()</button>
                        <button type="button" onclick="nextStep(3)" class="bg-brand-purple text-brand-dark px-8 py-3 rounded-full font-bold hover:scale-105 transition-all">Next_Step &rarr;</button>
                    </div>
                </div>

                <div id="step-3" class="hidden space-y-6">
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <label class="font-mono text-xs text-brand-accent">parent_guardian_name</label>
                            <input type="text" name="parent_name" class="form-input" placeholder="Name" required>
                        </div>
                        <div class="space-y-2">
                            <label class="font-mono text-xs text-brand-accent">emergency_contact</label>
                            <input type="tel" name="phone" class="form-input" placeholder="+250..." required>
                        </div>
                    </div>
                    <div class="flex justify-between pt-6">
                        <button type="button" onclick="nextStep(2)" class="text-gray-500 font-mono text-xs hover:text-white">&larr; back()</button>
                        <button type="submit" class="bg-brand-accent text-brand-dark px-8 py-3 rounded-full font-bold hover:shadow-[0_0_20px_rgba(126,231,135,0.4)] hover:scale-105 transition-all">Deploy_Application</button>
                    </div>
                </div>

            </form>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
        function nextStep(step) {
            // Hide all steps
            document.getElementById('step-1').classList.add('hidden');
            document.getElementById('step-2').classList.add('hidden');
            document.getElementById('step-3').classList.add('hidden');
            
            // Reset nodes
            document.querySelectorAll('.step-node').forEach(node => {
                node.classList.remove('active', 'completed');
            });

            // Show active step
            document.getElementById('step-' + step).classList.remove('hidden');
            
            // Update Nodes & Labels
            if(step >= 1) {
                document.getElementById('step-1-node').classList.add(step === 1 ? 'active' : 'completed');
                document.getElementById('step-label').innerText = "Step 01: User_Identity";
            }
            if(step >= 2) {
                document.getElementById('step-2-node').classList.add(step === 2 ? 'active' : 'completed');
                document.getElementById('step-label').innerText = "Step 02: Stack_Selection";
            }
            if(step >= 3) {
                document.getElementById('step-3-node').classList.add(step === 3 ? 'active' : 'completed');
                document.getElementById('step-label').innerText = "Step 03: Final_Deployment";
            }
        }
    </script>
</body>
</html>