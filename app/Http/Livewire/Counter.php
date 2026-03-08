<?php

namespace App\Livewire;

use Livewire\Component;

 class Counter extends Component
{
    public $value = 0;
      public function increment()
      {
         $this->value++;
      }
      public function decrement()
      {
         $this->value--;
      }
      public function incrementByNumber($Number)
       {
         $this->value += $Number;
      }
         public function decrementByNumber($Number)
         {
            $this->value -= $Number;
      }
 public function render()
 {
    return view('livewire.counter');
 }
}