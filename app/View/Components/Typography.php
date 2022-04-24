<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Typography extends Component
{

    public $message;
    public $class;
    public $style;
    
    public $as = [
        'p'     => 'p',
        'h1'    => 'h1',
        'h2'    => 'h2',
        'h3'    => 'h3',
        'h4'    => 'h4',
        'h5'    => 'h5',
        'h6'    => 'h6'
    ];

    public $variant = [
        'p'          => '',
        'h1'         => '',
        'h2'         => '',
        'h3'         => '',
        'h4'         => '',
        'h5'         => '',
        'h6'         => '',
        'body1'      => '',
        'body2'      => '',
        'subtitle1'  => '',
        'subtitle2'  => '',
        'header'     => 'text-4xl'
    ];


    public function __construct(
        $message = null,
        $class = null,
        $style = null,
        
        $as = 'p',
        $variant = 'p'
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;

        $this->as = $this->as[$as] ?? $this->as['p'];
        $this->variant = $this->variant[$variant] ?? $this->variant['p'];

    }

    public function render()
    {
        return $this->view('components.typography');
    }
}