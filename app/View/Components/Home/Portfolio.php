<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Vue'],
                'title' => 'App one',
                'image' => asset('image/web-app.png'),
                'github' => 'Coming Soon'
            ],
            [
                'category' => ['Laravel', 'Livewire'],
                'title' => 'App Two',
                'image' => asset('image/web-app.png'),
                'github' => 'Coming Soon'
            ],
            [
                'category' => ['Laravel', 'Bootstrap'],
                'title' => 'App Three',
                'image' => asset('image/web-app.png'),
                'github' => 'Coming Soon'
            ],
            [
                'category' => ['Laravel', 'Tailwind'],
                'title' => 'App Four',
                'image' => asset('image/web-app.png'),
                'github' => 'Coming Soon'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'App Five',
                'image' => asset('image/web-app.png'),
                'github' => 'Coming Soon'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'App Six',
                'image' => asset('image/web-app.png'),
                'github' => 'Coming Soon'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
