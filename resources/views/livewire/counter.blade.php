<div class="flex items-center justify-center w-full py-8">
    <div class="bg-white/80 backdrop-blur-xl border border-white/50 p-10 rounded-[2.5rem] shadow-2xl text-center w-full max-w-lg transition-all duration-500 relative overflow-hidden">
        
        <!-- Decorative background glow -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-gradient-to-br from-indigo-300/30 to-purple-300/30 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 rounded-full bg-gradient-to-tr from-rose-300/30 to-orange-300/30 blur-3xl pointer-events-none"></div>

        <div class="relative z-10">
            @if($totalCount > 0)
                <div class="relative mb-10 pb-4 border-b border-gray-100">
                    <h1 wire:loading.class="scale-95 opacity-50 blur-sm" class="text-6xl font-black bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 tracking-tight transition-all duration-300 transform min-h-[5rem] flex items-center justify-center">
                        {{ $name }}
                    </h1>
                </div>
                
                <div class="grid grid-cols-2 gap-5 mb-10">
                    <div class="bg-indigo-50/80 backdrop-blur-sm rounded-3xl p-5 shadow-sm border border-indigo-100/50 transform hover:scale-[1.03] transition-transform duration-300 group">
                        <div class="text-xs font-bold text-indigo-400 uppercase tracking-widest mb-2 group-hover:text-indigo-500 transition-colors">Matches ('A')</div>
                        <div class="text-5xl font-black text-indigo-600 group-hover:rotate-3 transition-transform duration-300">{{ $mattchNameCount }}</div>
                    </div>
                    <div class="bg-rose-50/80 backdrop-blur-sm rounded-3xl p-5 shadow-sm border border-rose-100/50 transform hover:scale-[1.03] transition-transform duration-300 group">
                        <div class="text-xs font-bold text-rose-400 uppercase tracking-widest mb-2 group-hover:text-rose-500 transition-colors">Remaining</div>
                        <div class="text-5xl font-black text-rose-600 group-hover:-rotate-3 transition-transform duration-300">{{ $totalCount }}</div>
                    </div>
                </div>
                
                <button wire:click="randAhmed" onclick="playArabicSpeech()" wire:loading.attr="disabled" class="group relative w-full flex items-center justify-center gap-3 px-8 py-5 bg-slate-900 text-white font-bold rounded-2xl shadow-[0_10px_30px_rgba(15,23,42,0.3)] hover:shadow-[0_20px_40px_rgba(15,23,42,0.5)] hover:-translate-y-1 active:translate-y-0 transition-all duration-300 text-lg overflow-hidden disabled:opacity-70 disabled:cursor-not-allowed">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                    <svg wire:loading.class="animate-spin" wire:target="randAhmed" class="w-6 h-6 relative z-10 transition-transform group-hover:rotate-180 duration-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    <span class="relative z-10 tracking-widest uppercase">Shuffle Name</span>
                </button>
            @else
                <div class="py-8">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-rose-100 rounded-full mb-6 shadow-inner ring-8 ring-rose-50 animate-pulse">
                        <svg class="w-12 h-12 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-black text-slate-800 mb-4 tracking-tight">Game Over!</h2>
                    <div class="space-y-2 mb-10 text-slate-500">
                        <p class="text-lg">You ran out of shuffles.</p>
                        <p class="text-md font-medium text-slate-600">Total Matches: <span class="font-bold text-indigo-600 text-xl">{{ $mattchNameCount }}</span></p>
                    </div>
                    <a href="/counter" class="w-full flex items-center justify-center gap-2 px-8 py-4 bg-indigo-600 text-white font-bold rounded-2xl shadow-[0_10px_20px_rgba(79,70,229,0.3)] hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-300 text-lg tracking-wider uppercase">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                        </svg>
                        Play Again
                    </a>
                </div>
            @endif
        </div>
    </div>

    <!-- JavaScript block for Arabic Speech Synthesis functionality -->
    <script>
        function playArabicSpeech() {
            if ('speechSynthesis' in window) {
                // Cancel current speech so we don't queue up rapidly clicked playbacks
                window.speechSynthesis.cancel();
                
                const utterance = new SpeechSynthesisUtterance('الله أكبر');
                utterance.lang = 'ar-SA';
                // Provide a slightly smoother rate and natural pitch for the phrase
                utterance.rate = 0.95; 
                utterance.pitch = 1.0;
                
                window.speechSynthesis.speak(utterance);
            } else {
                console.warn("Speech Synthesis isn't supported in this browser.");
            }
        }
    </script>
</div>
