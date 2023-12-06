<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PagesHeader extends Component
{
    public $title;
    public $postCategorie;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $postCategorie=null)
    {
        $this->title = $title;
        $this->postCategorie = $postCategorie;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.wiki-pages-components.pages-header', ["title"=>$this->title, "postCategorie"=>$this->postCategorie]);
    }
}
