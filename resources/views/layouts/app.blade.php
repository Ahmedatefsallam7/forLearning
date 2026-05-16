<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TALL App')</title>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        :root {
            --primary: #667eea;
            --secondary: #764ba2;
            --glass: rgba(255, 255, 255, 0.7);
            --glass-border: rgba(255, 255, 255, 0.3);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #1e293b;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .glass-nav {
            background: var(--glass);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-link {
            position: relative;
            color: #475569;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #1e293b;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .gradient-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, rgba(102, 126, 234, 0.05), transparent),
                        radial-gradient(circle at bottom left, rgba(118, 75, 162, 0.05), transparent);
            z-index: -1;
        }
    </style>
    @livewireStyles
</head>

<body>
    <div class="gradient-bg"></div>

    <header class="glass-nav">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-extrabold tracking-tight" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    TALL Stack
                </a>
                <div class="flex items-center space-x-8">
                    <a href="/" class="nav-link">Home</a>
                    <a href="/counter" class="nav-link">Counter</a>
                    <a href="/slots" class="nav-link">Slot Machine</a>
                    <a href="https://github.com/livewire/livewire" target="_blank" class="px-4 py-2 bg-slate-900 text-white rounded-full text-sm font-semibold hover:bg-slate-800 transition-colors shadow-lg shadow-slate-200">
                        GitHub
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-12">
        <div style="min-height: 60vh;">
            @yield('content')
        </div>
    </main>

    <footer class="border-t border-slate-200 pt-12 pb-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="text-slate-500 font-medium">
                    &copy; {{ date('Y') }} <span class="text-slate-800">TALL Stack Project</span>. Built for learning.
                </div>
                <div class="flex items-center space-x-6 text-sm text-slate-400">
                    <a href="#" class="hover:text-slate-600 transition-colors">Privacy</a>
                    <a href="#" class="hover:text-slate-600 transition-colors">Terms</a>
                    <div class="h-4 w-px bg-slate-200"></div>
                    <span class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-green-400"></span>
                        Design System: Active
                    </span>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>

</html>
