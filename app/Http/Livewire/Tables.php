<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Tables extends Component
{
    public function render()
    {
        $category = Category::all();
        return view('livewire.tables', [
            'categories' => $category,
        ]);
    }
}
