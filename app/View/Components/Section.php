<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Section extends Component
{
    
    public $message;
    public $id;
    public $class;
    public $style;



    public $variant = [
        'default'              => 'bg-white',
        'bg-white'             => 'bg-white',
        'bg-primary-700'       => 'bg-primary-700',
        'bg-gray-50'           => 'bg-gray-50',
        'bg-gray-800'          => 'bg-gray-800',
    ];
 
    public $gutter = [
        'xs'        => 'py-4 md:py-16',
        'sm'        => 'py-24',
        'default'   => 'py-16 md:24 lg:py-24'
    ];

    public function __construct(
        $message = null,
        $id      = null,
        $class   = null,
        $style   = null,

        $variant = 'default',
        $gutter  = 'default'
    )
    {
        $this->message = $message;
        $this->id      = $id;
        $this->class   = $class;
        $this->style   = $style;

        $this->variant = $this->variant[$variant] ?? $this->variant['default'];
        $this->gutter = $this->gutter[$gutter] ?? $this->gutter['default'];

    }

    public function render()
    {
        return $this->view('components.section');
    }
}