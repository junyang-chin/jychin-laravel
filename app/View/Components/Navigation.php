<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navigation extends Component
{
    const LINKS = ["Home" => "", "Blog" => "blog", "About" => "about",];

    /**
     * Create a new component instance.
     */
    public function __construct(public string $activePage)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $links = array_filter(self::LINKS, function ($slug, $title) {
            return strtolower($title) !== $this->activePage;
        }, ARRAY_FILTER_USE_BOTH);

        return view('components.navigation', compact("links"));
    }
}
