<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Hero2 extends Component
{

    public $message;
    public $class;
    public $style;

    public $title;
    public $subtitle;
    public $backLink;
    
    public $backgroundSrc;
    public $backgroundAlt;



    public function __construct(
        $message = null,
        $class = null,
        $style = null,

        $title = null,
        $subtitle = null,
        $backLink = null,
        $backgroundSrc = null,
        $backgroundAlt = null
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;
        
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->backLink = $backLink;
        $this->backgroundSrc = $backgroundSrc;
        $this->backgroundAlt = $backgroundAlt;
    }

    public function render()
    {
        return $this->view('components.hero-2');
    }
}