<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = '';
    public $arr = ['Honda', 'Kawasaki', 'Yamaha', 'Suzuki'];
    public $result = [];

    public function render()
    {
        return view('livewire.hello-world');
    }

    public function updatedName() {
        if (trim($this->name) !== '') {
            $this->result = array_filter($this->arr, function ($item) {
                return stripos($item, $this->name) !== false;
        });
            } else {
                $this->result = [];
            }
    }
}
