<?php include('preloader.php') ?>
<script>
    // Logic for the mobile menu toggle
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.querySelector('.nga-mobile-toggle');
        const nav = document.querySelector('.nga-nav');
        
        toggle.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
    });
</script>

<style>
    /* * NGA-Coding Academy: IDE/Developer Header
     * Theme: Modern Floating Glass / VS Code Aesthetic
     */
    
    @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@400;500;600;700&display=swap');

    :root {
        --bg-glass: rgba(13, 17, 23, 0.85); /* GitHub Dark background */
        --border-glass: rgba(255, 255, 255, 0.1);
        --text-main: #c9d1d9;
        --text-muted: #8b949e;
        
        /* IDE Syntax Colors */
        --syntax-blue: #79c0ff;
        --syntax-yellow: #d2a8ff; 
        --syntax-orange: #ffa657;
        --syntax-cyan: #39c5cf;
        --syntax-green: #7ee787;
        --syntax-purple: #bd93f9; /* New color for the external link */
    }

    /* Floating Header Container */
    .nga-header-wrapper {
        position: fixed;
        top: 1.5rem;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        z-index: 9999;
        pointer-events: none;
    }

    .nga-header {
        pointer-events: auto;
        width: 95%;
        max-width: 1200px;
        background: var(--bg-glass);
        backdrop-filter: blur(20px) saturate(200%);
        -webkit-backdrop-filter: blur(20px) saturate(200%);
        border: 1px solid var(--border-glass);
        border-radius: 100px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.1);
        font-family: 'Inter', sans-serif;
        transition: all 0.3s ease;
    }

    .nga-header-container {
        padding: 0 1.5rem 0 0.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 64px;
    }

    .nga-brand {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        text-decoration: none;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        transition: background 0.3s ease;
    }

    .nga-brand:hover {
        background: rgba(255, 255, 255, 0.05);
    }

    .nga-logo {
        height: 32px;
        width: auto;
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .nga-brand:hover .nga-logo {
        transform: scale(1.05);
        filter: drop-shadow(0 0 8px rgba(121, 192, 255, 0.4));
    }

    .nga-brand-text {
        color: white;
        font-size: 1.1rem;
        font-weight: 700;
        font-family: 'Fira Code', monospace;
        letter-spacing: -0.5px;
    }

    .nga-brand-text .punct { color: var(--text-muted); }

    /* IDE Style Navigation Links */
    .nga-nav {
        display: flex;
        gap: 2rem;
    }

    .nga-nav-link {
        font-family: 'Fira Code', monospace;
        font-size: 0.9rem;
        color: var(--text-muted);
        text-decoration: none;
        position: relative;
        padding: 0.5rem 0;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }

    /* Syntax Highlighting Classes */
    .nga-nav-link .file { color: var(--syntax-blue); }
    .nga-nav-link .ext { color: var(--syntax-orange); }
    .nga-nav-link .func { color: var(--syntax-yellow); }
    .nga-nav-link .arr { color: var(--syntax-cyan); }
    .nga-nav-link .obj { color: var(--syntax-green); }
    .nga-nav-link .db { color: var(--syntax-purple); } /* External link style */
    .nga-nav-link .punct { color: var(--text-muted); transition: color 0.3s ease; }

    /* Terminal Cursor Effects */
    .nga-nav-link::before {
        content: '>';
        color: var(--syntax-green);
        position: absolute;
        left: -15px;
        opacity: 0;
        transform: translateX(-5px);
        transition: all 0.2s ease;
    }

    .nga-nav-link::after {
        content: '_';
        position: absolute;
        right: -12px;
        bottom: 7px;
        color: var(--syntax-green);
        opacity: 0;
        animation: blink 1s step-end infinite;
    }

    .nga-nav-link:hover { color: var(--text-main); }
    .nga-nav-link:hover .punct { color: var(--text-main); }
    .nga-nav-link:hover::before { opacity: 1; transform: translateX(0); }
    .nga-nav-link:hover::after { opacity: 1; }

    @keyframes blink {
        0%, 100% { opacity: 0; }
        50% { opacity: 1; }
    }

    /* Modern Terminal Button */
    .nga-btn-glow {
        font-family: 'Fira Code', monospace;
        font-size: 0.85rem;
        font-weight: 500;
        color: var(--syntax-green);
        text-decoration: none;
        padding: 0.5rem 1.2rem;
        border-radius: 100px;
        background: rgba(126, 231, 135, 0.1);
        border: 1px solid rgba(126, 231, 135, 0.2);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .nga-btn-glow::before { content: '~/'; color: var(--text-muted); }

    .nga-btn-glow:hover {
        background: rgba(126, 231, 135, 0.2);
        border-color: rgba(126, 231, 135, 0.5);
        transform: translateY(-1px);
        box-shadow: 0 4px 15px rgba(126, 231, 135, 0.15);
        color: white;
    }

    .nga-mobile-toggle {
        display: none;
        background: none;
        border: none;
        color: var(--text-main);
        cursor: pointer;
        padding: 0.5rem;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .nga-nav { 
            display: none; 
            position: absolute;
            top: 80px;
            background: var(--bg-glass);
            flex-direction: column;
            width: 100%;
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid var(--border-glass);
            backdrop-filter: blur(20px);
            left: 0;
            gap: 1.5rem;
        }
        .nga-nav.active { display: flex; }
        .nga-header-container { padding: 0 1rem; }
        .nga-mobile-toggle { display: block; }
        .nga-header { border-radius: 16px; width: calc(100% - 2rem); }
        .nga-btn-glow { display: none; }
    }
</style>

<div class="nga-header-wrapper">
    <header class="nga-header">
        <div class="nga-header-container">
            
            <a href="index.php" class="nga-brand">
                <img src="assets/logo.svg" alt="NGA Logo" class="nga-logo">
                <div class="nga-brand-text">
                    NGA<span class="punct">&lt;</span>Academy<span class="punct">/&gt;</span>
                </div>
            </a>

            <nav class="nga-nav">
                <a href="index.php" class="nga-nav-link">
                    <span class="file">index</span><span class="punct">.</span><span class="ext">html</span>
                </a>
                <a href="about.php" class="nga-nav-link">
                    <span class="func">about</span><span class="punct">()</span>
                </a>
                <a href="academics.php" class="nga-nav-link">
                    <span class="arr">academics</span><span class="punct">[]</span>
                </a>
                <a href="innovation.php" class="nga-nav-link">
                    <span class="obj">innovation</span><span class="punct">{}</span>
                </a>
                <a href="http://new-generation-academics.wuaze.com/" class="nga-nav-link" target="_blank">
                    <span class="db">db</span><span class="punct">.</span><span class="func">connect</span><span class="punct">()</span>
                </a>
            </nav>

            <div class="nga-nav-actions">
                <a href="apply.php" class="nga-btn-glow">apply_now</a>
            </div>

            <button class="nga-mobile-toggle" aria-label="Open Menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>

        </div>
    </header>
</div>