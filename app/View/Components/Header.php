<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Header extends Component
{

    public $message;
    public $class;
    public $style;

    public $title;
    public $variant = [
        'primary'   => 'text-primary-700',
        'secondary' => 'text-secondary-700'
    ];

    public $textVariant;
    public $kicker;


    public function __construct(
        $message = null,
        $class = null,
        $style = null,

        $title = null,
        $variant = 'primary',
        $textVariant = null,
        $kicker = null
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;
        
        $this->title = $title;
        $this->variant = $this->variant[$variant] ?? $this->variant['primary'];
        $this->textVariant = $textVariant;
        $this->kicker = $kicker;
    }

    public function render()
    {
        return $this->view('components.header');
    }
}