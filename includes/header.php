<?php include('preloader.php') ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.querySelector('.nga-mobile-toggle');
        const nav = document.querySelector('.nga-nav');
        
        toggle.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
    });
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@400;500;600;700&display=swap');

    :root {
        --bg-glass: rgba(13, 17, 23, 0.85);
        --border-glass: rgba(255, 255, 255, 0.1);
        --text-main: #c9d1d9;
        --text-muted: #8b949e;
        
        /* IDE Syntax Colors */
        --syntax-blue: #79c0ff;
        --syntax-yellow: #d2a8ff; 
        --syntax-orange: #ffa657;
        --syntax-cyan: #39c5cf;
        --syntax-green: #7ee787;
        --syntax-purple: #bd93f9;
    }

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
        max-width: 1300px; /* Slightly wider to accommodate more buttons */
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

    /* Branding */
    .nga-brand {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        text-decoration: none;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        transition: background 0.3s ease;
    }
    .nga-brand:hover { background: rgba(255, 255, 255, 0.05); }
    .nga-logo { height: 32px; width: auto; transition: all 0.3s ease; }
    .nga-brand-text {
        color: white;
        font-size: 1.1rem;
        font-weight: 700;
        font-family: 'Fira Code', monospace;
    }
    .nga-brand-text .punct { color: var(--text-muted); }

    /* Main Navigation Links */
    .nga-nav { display: flex; align-items: center; gap: 1.5rem; }
    .nga-nav-link {
        font-family: 'Fira Code', monospace;
        font-size: 0.85rem;
        color: var(--text-muted);
        text-decoration: none;
        position: relative;
        padding: 0.5rem 0;
        display: flex;
        align-items: center;
    }

    /* Syntax Colors */
    .file { color: var(--syntax-blue); }
    .ext { color: var(--syntax-orange); }
    .func { color: var(--syntax-yellow); }
    .arr { color: var(--syntax-cyan); }
    .obj { color: var(--syntax-green); }
    .db { color: var(--syntax-purple); }
    .punct { color: var(--text-muted); }

    /* Actions Area (The Buttons) */
    .nga-nav-actions {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    /* THE ACADEMIC BUTTON */
    .nga-btn-secondary {
        font-family: 'Fira Code', monospace;
        font-size: 0.85rem;
        text-decoration: none;
        padding: 0.5rem 1.2rem;
        border-radius: 100px; /* Pill shape to match Apply button */
        background: rgba(189, 147, 249, 0.1);
        border: 1px solid rgba(189, 147, 249, 0.2);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }
    .nga-btn-secondary:hover {
        background: rgba(189, 147, 249, 0.2);
        border-color: var(--syntax-purple);
        box-shadow: 0 4px 15px rgba(189, 147, 249, 0.15);
        transform: translateY(-1px);
    }

    /* APPLY NOW BUTTON */
    .nga-btn-glow {
        font-family: 'Fira Code', monospace;
        font-size: 0.85rem;
        color: var(--syntax-green);
        text-decoration: none;
        padding: 0.5rem 1.2rem;
        border-radius: 100px;
        background: rgba(126, 231, 135, 0.1);
        border: 1px solid rgba(126, 231, 135, 0.2);
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
    }
    .nga-btn-glow::before { content: '~/'; color: var(--text-muted); }
    .nga-btn-glow:hover {
        background: rgba(126, 231, 135, 0.2);
        box-shadow: 0 4px 15px rgba(126, 231, 135, 0.15);
        color: white;
    }

    /* Mobile Logic */
    .nga-mobile-toggle { display: none; background: none; border: none; color: white; cursor: pointer; }

    @media (max-width: 1100px) {
        .nga-nav, .nga-nav-actions { display: none; }
        .nga-nav.active { 
            display: flex; 
            position: absolute; 
            top: 80px; 
            left: 5%; 
            width: 90%;
            background: var(--bg-glass); 
            flex-direction: column; 
            padding: 2rem;
            border-radius: 20px; 
            border: 1px solid var(--border-glass); 
            gap: 1.5rem;
            pointer-events: auto;
        }
        .nga-mobile-toggle { display: block; }
        .nga-header { border-radius: 16px; width: calc(100% - 2rem); }
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
            </nav>

            <div class="nga-nav-actions">
                <a href="http://new-generation-academics.wuaze.com/" class="nga-btn-secondary" target="_blank">
                    <span class="db">Academic</span><span class="punct">.</span><span class="func">System</span><span class="punct">()</span>
                </a>
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