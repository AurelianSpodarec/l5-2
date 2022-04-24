<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Card2 extends Component
{

    public $message;
    public $class;
    public $style;
    public $as;

    public $title;
    public $content;
    public $permalink;
    public $iconSRC;
    public $iconALT;


    public function __construct(
        $message = null,
        $class = null,
        $style = null,
        $as = null,

        $title = null,
        $content = null,
        $permalink = null,
        $iconSRC = null,
        $iconALT = null
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;
        $this->as = $as;

        $this->title = $title;
        $this->content = $content;
        $this->permalink = $permalink;
        $this->iconSRC = $iconSRC;
        $this->iconALT = $iconALT;
    }

    public function render()
    {
        return $this->view('components.card2');
    }
}