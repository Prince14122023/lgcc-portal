<script src="https://unpkg.com/alpinejs" defer></script>

<style>
    /* LGCC Custom Brand Colors based on Logo */
    :root {
        --lgcc-blue: #2B57A7;
        --lgcc-gold: #F4CA4A;
        --lgcc-dark: #1C2738;
        --lgcc-light: #F0F4FA;
    }

    /* Modern Navbar Container */
    .lgcc-nav-wrapper {
        position: sticky;
        top: 0;
        z-index: 50;
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 1px solid var(--lgcc-light);
        font-family: 'Lexend', sans-serif;
    }

    .nav-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 85px;
    }

    /* Logo Styling */
    .logo-link {
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: transform 0.3s ease;
    }
    .logo-link:hover { transform: scale(1.02); }
    .logo-img { height: 55px; width: auto; }
    .logo-text-group { margin-left: 0.75rem; }
    .logo-main-text {
        display: block;
        font-size: 1.25rem;
        font-weight: 900;
        color: var(--lgcc-dark);
        letter-spacing: -0.5px;
        line-height: 1;
    }
    .logo-tagline {
        font-size: 8px;
        font-weight: 700;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 2px;
    }

    /* Desktop Menu Styling */
    .nav-links { display: flex; align-items: center; gap: 2rem; }
    .nav-link-item {
        position: relative;
        font-size: 0.85rem;
        font-weight: 700;
        color: #64748b;
        text-decoration: none;
        padding: 0.25rem 0;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .nav-link-item:hover, .nav-link-item.active { color: var(--lgcc-blue); }

    .nav-link-item.active::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 100%;
        height: 2.5px;
        background: var(--lgcc-gold);
        border-radius: 99px;
    }

    /* Badge & Animations */
    .badge-new {
        background: var(--lgcc-gold);
        color: var(--lgcc-dark);
        font-size: 7px;
        font-weight: 900;
        padding: 1px 5px;
        border-radius: 4px;
        position: absolute;
        top: -12px;
        right: -10px;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
        40% {transform: translateY(-3px);}
        60% {transform: translateY(-2px);}
    }

    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .animate-spin-slow { animation: spin-slow 8s linear infinite; }

    /* Login Button Premium */
    .btn-login-premium {
        background: var(--lgcc-blue);
        color: #ffffff;
        padding: 0.7rem 1.8rem;
        border-radius: 12px;
        font-weight: 900;
        font-size: 0.8rem;
        text-decoration: none;
        box-shadow: 0 10px 20px -5px rgba(43, 87, 167, 0.3);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: inline-block;
    }
    .btn-login-premium:hover {
        background: var(--lgcc-dark);
        transform: translateY(-2px);
    }

    /* Mobile Menu - THE FIX */
    .mobile-menu-btn {
        display: none;
        padding: 0.6rem;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        color: var(--lgcc-dark);
        cursor: pointer;
    }

    .mobile-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #ffffff;
        padding: 1.5rem;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
        display: flex; /* Flex added to ensure vertical stack */
        flex-direction: column;
        gap: 0.5rem;
    }

    .mobile-nav-link {
        display: flex !important; /* Force flex for alignment */
        align-items: center;
        justify-content: space-between;
        padding: 1rem;
        font-weight: 800;
        font-size: 0.95rem;
        color: var(--lgcc-dark);
        text-decoration: none;
        border-radius: 12px;
        transition: all 0.2s;
    }
    .mobile-nav-link.active {
        background: var(--lgcc-light);
        color: var(--lgcc-blue);
    }
    .mobile-nav-link:hover {
        background: #f8fafc;
    }

    @media (max-width: 1024px) {
        .logo-main-text { display: none; }
    }

    @media (max-width: 860px) {
        .nav-links { display: none; }
        .mobile-menu-btn { display: block; }
    }

    [x-cloak] { display: none !important; }
</style>

<div class="lgcc-nav-wrapper">
    <nav x-data="{ open: false }">
        <div class="nav-container">
            
            <a href="{{ url('/') }}" class="logo-link">
                <img src="{{ asset('images/logo.png') }}" alt="LGCC Logo" class="logo-img">
                <div class="logo-text-group">
                    <span class="logo-main-text">Little Genius Children Care</span>
                    <span class="logo-tagline">A Bright Future</span>
                </div>
            </a>

            <div class="nav-links">
                <a href="{{ url('/') }}" class="nav-link-item {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('mission') }}" class="nav-link-item {{ request()->routeIs('mission') ? 'active' : '' }}">Our Mission</a>
                <a href="{{ route('packages') }}" class="nav-link-item {{ request()->routeIs('packages') ? 'active' : '' }}">Services</a>
                
                <a href="{{ route('global.career') }}" class="nav-link-item {{ request()->routeIs('global.career') ? 'active' : '' }} group relative">
                    <span class="text-[var(--lgcc-blue)] animate-spin-slow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </span>
                    <span>Global Career</span>
                    <span class="badge-new">NEW</span>
                </a>

                <a href="{{ route('login') }}" class="btn-login-premium">Signup</a>
            </div>

            <button @click="open = !open" class="mobile-menu-btn">
                <svg x-show="!open" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="open" x-cloak width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <div x-show="open" x-cloak 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-5"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="mobile-dropdown">
            
            <a href="{{ url('/') }}" class="mobile-nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('mission') }}" class="mobile-nav-link {{ request()->routeIs('mission') ? 'active' : '' }}">Our Mission</a>
            <a href="{{ route('packages') }}" class="mobile-nav-link {{ request()->routeIs('packages') ? 'active' : '' }}">Services</a>
            
            <a href="{{ route('global.career') }}" class="mobile-nav-link {{ request()->routeIs('global.career') ? 'active' : '' }}">
                <span>Global Career</span>
                <span class="bg-[var(--lgcc-gold)] text-[var(--lgcc-dark)] text-[10px] px-2 py-0.5 rounded font-black">NEW</span>
            </a>

            <hr style="border: 0; border-top: 1px solid #f1f5f9; margin: 0.5rem 0;">
            <a href="{{ route('login') }}" class="btn-login-premium" style="text-align: center;">Signup</a>
        </div>
    </nav>
</div>