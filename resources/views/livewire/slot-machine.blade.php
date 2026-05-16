<div class="flex items-center justify-center w-full py-8">
    <div class="bg-white/80 backdrop-blur-xl border border-white/50 p-10 rounded-[2.5rem] shadow-2xl text-center w-full max-w-lg transition-all duration-500 relative overflow-hidden">
        
        <!-- Decoration -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-gradient-to-br from-amber-300/30 to-orange-300/30 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 rounded-full bg-gradient-to-tr from-pink-300/30 to-purple-300/30 blur-3xl pointer-events-none"></div>

        <div class="relative z-10">
            <h1 class="text-4xl font-black bg-clip-text text-transparent bg-gradient-to-r from-orange-500 to-amber-500 mb-8 tracking-tight">
                Lucky Emojis 🎰
            </h1>

            <div class="flex justify-between items-center mb-8 bg-zinc-50/80 rounded-2xl p-4 border border-zinc-100 shadow-inner">
                <div class="text-left">
                    <div class="text-xs font-bold text-zinc-400 uppercase tracking-widest mb-1">Score</div>
                    <div class="text-3xl font-black text-amber-600 transition-all duration-300" wire:key="score-{{ $score }}">{{ $score }}</div>
                </div>
                <div class="text-right">
                    <div class="text-xs font-bold text-zinc-400 uppercase tracking-widest mb-1">Spins Left</div>
                    <div class="text-3xl font-black transition-colors duration-300 {{ $spinsRemaining <= 3 ? 'text-rose-600' : 'text-indigo-600' }}">{{ $spinsRemaining }}</div>
                </div>
            </div>

            <div class="flex justify-center gap-4 mb-10">
                @foreach($reels as $index => $slot)
                    <div wire:key="slot-{{ $index }}-{{ $slot }}" class="w-24 h-24 bg-white/90 rounded-2xl shadow-lg border border-zinc-100 flex items-center justify-center text-6xl transform transition-all duration-500 hover:scale-110" style="animation: spinPulse 0.5s ease-in-out;">
                        {{ $slot }}
                    </div>
                @endforeach
            </div>
            
            <style>
                @keyframes spinPulse {
                    0% { transform: scale(0.8) translateY(-20px); opacity: 0; }
                    50% { transform: scale(1.1) translateY(10px); }
                    100% { transform: scale(1) translateY(0); opacity: 1; }
                }
            </style>

            @if(!$isGameOver)
                <button wire:click="spin" wire:loading.attr="disabled" class="group relative w-full flex items-center justify-center gap-3 px-8 py-5 bg-gradient-to-r from-amber-500 to-orange-500 text-white font-bold rounded-2xl shadow-[0_10px_30px_rgba(245,158,11,0.3)] hover:shadow-[0_20px_40px_rgba(245,158,11,0.5)] hover:-translate-y-1 active:translate-y-0 transition-all duration-300 text-xl overflow-hidden disabled:opacity-70 disabled:cursor-not-allowed">
                    <span class="absolute inset-0 w-full h-full bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>
                    <svg wire:loading.class="animate-spin" wire:target="spin" class="w-6 h-6 relative z-10 transition-transform group-hover:rotate-180 duration-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    <span class="relative z-10 tracking-widest uppercase drop-shadow-md">Spin!</span>
                </button>
            @else
                <div class="bg-rose-50 rounded-2xl p-6 border border-rose-100 mb-6">
                    <h2 class="text-3xl font-black text-rose-600 mb-2">Game Over!</h2>
                    <p class="text-rose-500 font-medium text-lg">Final Score: {{ $score }} points</p>
                </div>
                
                <button wire:click="resetGame" class="w-full flex items-center justify-center gap-2 px-8 py-4 bg-zinc-900 text-white font-bold rounded-2xl shadow-lg hover:bg-zinc-800 hover:-translate-y-1 active:translate-y-0 transition-all duration-300 text-lg tracking-wider uppercase">
                    Play Again
                </button>
            @endif
        </div>
    </div>
</div>
