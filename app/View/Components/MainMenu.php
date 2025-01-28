<?php

namespace App\View\Components;

use App\Models\PostMenu;
use Illuminate\View\Component;

class MainMenu extends Component
{
    public $menuItems;

    public function __construct()
    {
        $this->menuItems = PostMenu::where('is_active', true)
            ->orderBy('id', 'asc')
            ->get();
    }

    public function render()
    {
        return view('components.main-menu');
    }
}
