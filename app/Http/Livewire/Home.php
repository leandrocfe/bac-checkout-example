<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Home extends Component 
{
   
    public function render()
    {
        return view('livewire.home');
    }


}
