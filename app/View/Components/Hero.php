<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Hero extends Component
{

    public $message;
    public $class;
    public $style;

    public $title;



    public function __construct(
        $message = null,
        $class = null,
        $style = null,

        $title = null
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;
        
        $this->title = $title;
    }

    public function render()
    {
        return $this->view('components.hero');
    }
}