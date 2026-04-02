<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LGCC - Empowering Careers </title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        /* Base Styling with Lexend Font */
        body { 
            font-family: 'Lexend', sans-serif; 
            scroll-behavior: smooth; 
            -webkit-font-smoothing: antialiased;
        }

        /* Premium Glassmorphic Effect */
        .glass-effect { 
            background: rgba(255, 255, 255, 0.7); 
            backdrop-filter: blur(15px); 
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        /* Custom Scrollbar for faadu look */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #F1F5F9; }
        ::-webkit-scrollbar-thumb { 
            background: #4F46E5; 
            border-radius: 10px; 
        }

        /* Subtle Background Animations */
        .bg-blob {
            position: fixed;
            z-index: -1;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.5;
            animation: move 20s infinite alternate;
        }
        @keyframes move {
            from { transform: translate(0, 0); }
            to { transform: translate(100px, 100px); }
        }
    </style>
</head>
<body class="bg-[#F8FAFC] text-[#1E293B] overflow-x-hidden">
    
    <div class="bg-blob w-[400px] h-[400px] bg-indigo-100 top-[-100px] left-[-100px]"></div>
    <div class="bg-blob w-[300px] h-[300px] bg-blue-100 bottom-[-50px] right-[-50px]" style="animation-delay: 2s;"></div>

    @include('partials.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        // Hero section ya buttons ke liye global smooth entry animations yahan daal sakte hain
        document.addEventListener('DOMContentLoaded', function() {
            console.log("LGCC Portal Integrated Successfully!");
        });
    </script>
</body>
</html>