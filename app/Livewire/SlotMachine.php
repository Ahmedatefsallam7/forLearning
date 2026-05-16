<?php

namespace App\Livewire;

use Livewire\Component;

class SlotMachine extends Component
{
    public $reels = ['❓', '❓', '❓'];
    public $score = 0;
    public $spinsRemaining = 10;
    public $isGameOver = false;

    private $emojis = ['🍎', '💎', '🔔', '7️⃣', '🍒'];

    public function spin()
    {
        if ($this->spinsRemaining <= 0) {
            return;
        }

        // Randomize slots
        $this->reels = [
            $this->emojis[array_rand($this->emojis)],
            $this->emojis[array_rand($this->emojis)],
            $this->emojis[array_rand($this->emojis)],
        ];

        $this->spinsRemaining--;

        $this->calculateScore();

        if ($this->spinsRemaining <= 0) {
            $this->isGameOver = true;
        }
    }

    private function calculateScore()
    {
        $unique = count(array_unique($this->reels));

        if ($unique === 1) { // 3 of a kind
            $this->score += 50;
        } elseif ($unique === 2) { // 2 of a kind
            $this->score += 10;
        }
    }

    public function resetGame()
    {
        $this->reels = ['❓', '❓', '❓'];
        $this->score = 0;
        $this->spinsRemaining = 10;
        $this->isGameOver = false;
    }

    public function render()
    {
        return view('livewire.slot-machine');
    }
}
