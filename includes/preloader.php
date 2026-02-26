<div id="preloader" class="fixed inset-0 z-[10000] bg-[#0d1117] flex flex-col items-center justify-center overflow-hidden transition-all duration-700 ease-in-out">
    
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:3rem_3rem]"></div>

    <div class="relative">
        <div class="absolute inset-0 bg-brand-blue/20 blur-[60px] rounded-full animate-pulse"></div>
        
        <div class="relative flex items-center justify-center">
            <span class="text-6xl md:text-8xl font-mono font-bold text-brand-blue animate-[slideRight_1.5s_infinite_alternate]">
                &lt;
            </span>
            <span class="text-6xl md:text-8xl font-mono font-bold text-brand-accent mx-2 animate-[pulse_2s_infinite]">
                /
            </span>
            <span class="text-6xl md:text-8xl font-mono font-bold text-brand-blue animate-[slideLeft_1.5s_infinite_alternate]">
                &gt;
            </span>
        </div>
    </div>

    <div class="mt-12 w-64 text-center">
        <div class="font-mono text-[10px] uppercase tracking-[0.3em] text-gray-500 mb-2" id="loader-status">Initializing_System...</div>
        
        <div class="h-[2px] w-full bg-gray-800 rounded-full overflow-hidden">
            <div id="loader-progress" class="h-full bg-gradient-to-r from-brand-blue to-brand-accent w-0 transition-all duration-300"></div>
        </div>
        
        <div class="mt-4 font-mono text-[10px] text-brand-blue opacity-50" id="loader-percentage">0%</div>
    </div>
</div>

<style>
    @keyframes slideRight {
        from { transform: translateX(-10px); opacity: 0.5; }
        to { transform: translateX(5px); opacity: 1; }
    }
    @keyframes slideLeft {
        from { transform: translateX(10px); opacity: 0.5; }
        to { transform: translateX(-5px); opacity: 1; }
    }
    
    /* Hide scrollbar while loading */
    body.loading {
        overflow: hidden;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const preloader = document.getElementById('preloader');
        const progress = document.getElementById('loader-progress');
        const percentage = document.getElementById('loader-percentage');
        const statusText = document.getElementById('loader-status');
        const body = document.body;

        body.classList.add('loading');

        let width = 0;
        const statusMessages = [
            "fetching_core_assets...",
            "mounting_robotics_lab...",
            "compiling_logic...",
            "establishing_secure_link...",
            "system_ready."
        ];

        const loadingInterval = setInterval(() => {
            if (width >= 100) {
                clearInterval(loadingInterval);
                
                // Final Exit Sequence
                setTimeout(() => {
                    preloader.style.transform = 'translateY(-100%)';
                    body.classList.remove('loading');
                    
                    // Optional: Remove from DOM after transition
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 700);
                }, 500);
            } else {
                width += Math.floor(Math.random() * 15) + 1;
                if (width > 100) width = 100;
                
                progress.style.width = width + '%';
                percentage.innerText = width + '%';
                
                // Update status messages based on progress
                if (width < 30) statusText.innerText = statusMessages[0];
                else if (width < 50) statusText.innerText = statusMessages[1];
                else if (width < 70) statusText.innerText = statusMessages[2];
                else if (width < 90) statusText.innerText = statusMessages[3];
                else statusText.innerText = statusMessages[4];
            }
        }, 150); // Speed of loading
    });
</script>
