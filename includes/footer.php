<footer class="border-t border-gray-800 bg-[#050b14] relative overflow-hidden pt-16 pb-8">
        
        <div class="absolute inset-0 z-0 bg-grid opacity-5 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 mb-12">
                
                <div class="lg:col-span-5">
                    <a href="index.php" class="inline-flex items-center gap-3 mb-6 group">
                        <img src="assets/logo.svg" alt="NGA Logo" class="h-8 w-auto grayscale group-hover:grayscale-0 transition-all duration-300">
                        <span class="font-mono text-xl font-bold text-white tracking-tight">NGA<span class="text-brand-accent">::</span>Base</span>
                    </a>
                    <p class="text-gray-400 text-sm mb-6 leading-relaxed max-w-sm">
                        Rwanda’s Private Centre of Excellence in Software Programming, Embedded Systems & Robotics.
                    </p>
                    <div class="space-y-3 text-sm text-gray-500 font-mono">
                        <p class="flex items-center gap-3 hover:text-gray-300 transition-colors cursor-default">
                            <svg class="w-4 h-4 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            KG 643 St, Kimihurura, Rugando
                        </p>
                        <p class="flex items-center gap-3 hover:text-gray-300 transition-colors cursor-default">
                            <svg class="w-4 h-4 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            ngacodingacademy@nga.ac.rw
                        </p>
                        <p class="flex items-center gap-3 hover:text-gray-300 transition-colors cursor-default">
                            <svg class="w-4 h-4 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            +250 791 823 651
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-2 mt-8 lg:mt-0">
                    <h4 class="text-white font-bold mb-6 font-mono">>_ directories</h4>
                    <ul class="space-y-3 text-sm font-mono">
                        <li><a href="about.php" class="text-gray-500 hover:text-brand-blue transition-all duration-300 flex items-center gap-2 hover:translate-x-2">~ /about</a></li>
                        <li><a href="academics.php" class="text-gray-500 hover:text-brand-purple transition-all duration-300 flex items-center gap-2 hover:translate-x-2">~ /academics</a></li>
                        <li><a href="innovation.php" class="text-gray-500 hover:text-[#ffa657] transition-all duration-300 flex items-center gap-2 hover:translate-x-2">~ /innovation</a></li>
                        <li><a href="apply.php" class="text-brand-accent hover:text-green-400 transition-all duration-300 flex items-center gap-2 hover:translate-x-2">> ./apply_now</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-5 mt-8 lg:mt-0">
                    <div class="bg-[#0d1117] rounded-xl border border-gray-700 shadow-2xl overflow-hidden flex flex-col h-64 hover:border-brand-blue/50 transition-colors cursor-text" onclick="document.getElementById('terminal-input').focus()">
                        
                        <div class="bg-[#161b22] px-4 py-3 border-b border-gray-700 flex items-center justify-between">
                            <div class="flex gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500 hover:bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500 hover:bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500 hover:bg-green-400"></div>
                            </div>
                            <div class="text-xs font-mono text-gray-500 tracking-wider">guest@nga-academy:~</div>
                            <div class="w-12"></div> </div>
                        
                        <div class="p-4 overflow-y-auto flex-grow font-mono text-sm text-gray-300 scroll-smooth" id="terminal-body">
                            <div class="mb-2 text-brand-blue font-bold">NGA-OS v2.0.26 (tty1)</div>
                            <div class="mb-4 text-gray-400">Type <span class="text-brand-accent">'help'</span> for a list of available commands.</div>
                            
                            <div id="terminal-history"></div>

                            <div class="flex items-center mt-2 group">
                                <span class="text-brand-accent mr-2 whitespace-nowrap">guest@nga:~$</span>
                                <input type="text" id="terminal-input" class="bg-transparent border-none outline-none text-white flex-grow font-mono caret-white focus:ring-0 p-0" autocomplete="off" spellcheck="false">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-mono text-gray-600">
                <p>&copy; 2026 NGA-Coding Academy. All rights reserved.</p>
                
                <div class="flex items-center gap-4">
                    <span class="flex items-center gap-2">System Status: <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse shadow-[0_0_8px_rgba(34,197,94,0.8)]"></span></span>
                    
                    <a href="admin/login.php" class="text-[#0a0d12] hover:text-gray-400 transition-colors select-none" title="Authenticate">sys_auth</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const termInput = document.getElementById('terminal-input');
            const termHistory = document.getElementById('terminal-history');
            const termBody = document.getElementById('terminal-body');

            // List of valid commands and their outputs
            const commands = {
                'help': `Available commands:<br>
                         <span class="text-brand-blue">about</span>  - Learn about NGA<br>
                         <span class="text-brand-blue">apply</span>  - Initialize enrollment portal<br>
                         <span class="text-brand-blue">clear</span>  - Clear the terminal window<br>
                         <span class="text-brand-blue">sudo</span>   - Execute as superuser<br>
                         <span class="text-brand-blue">whoami</span> - Print current user session`,
                'about': 'New Generation Academy (NGA) is Rwanda’s premier Coding Academy integrating Software, Embedded Systems, and Robotics.',
                'apply': 'Redirecting to admissions portal...',
                'sudo': '<span class="text-red-500 font-bold">Access denied. Unauthorized attempt logged.</span>',
                'whoami': 'guest_session_9284',
                'pwd': '/var/www/nga-academy/public_html'
            };

            termInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    const cmd = termInput.value.trim().toLowerCase();
                    termInput.value = ''; // clear input field

                    if (cmd === '') return;

                    // 1. Echo the command back to the terminal
                    const cmdLine = document.createElement('div');
                    cmdLine.innerHTML = `<span class="text-brand-accent mr-2">guest@nga:~$</span><span class="text-white">${cmd}</span>`;
                    termHistory.appendChild(cmdLine);

                    // 2. Process the command
                    let output = '';
                    if (cmd === 'clear') {
                        termHistory.innerHTML = '';
                        return; // Exit early so we don't scroll
                    } else if (cmd === 'apply') {
                        output = commands['apply'];
                        setTimeout(() => { window.location.href = 'apply.php'; }, 1000);
                    } else if (commands[cmd]) {
                        output = commands[cmd];
                    } else {
                        output = `<span class="text-red-400">Command not found: ${cmd}</span>. Type 'help' for available commands.`;
                    }

                    // 3. Print the output
                    const outLine = document.createElement('div');
                    outLine.className = 'mb-4 mt-1 text-gray-400 pl-4 border-l-2 border-gray-700';
                    outLine.innerHTML = output;
                    termHistory.appendChild(outLine);

                    // 4. Auto-scroll to the bottom
                    termBody.scrollTop = termBody.scrollHeight;
                }
            });
        });
    </script>