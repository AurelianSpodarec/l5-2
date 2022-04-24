<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Container extends Component
{

    public $style;
    public $class;
    public $message;



    // have padding
    public $container = [
        'default'  => 'mx-auto px-4 md:px-8 lg:px-12 max-w-7xl',
        'fluid'    => 'mx-auto px-4 md:px-8 lg:px-12',
        'xs'         => 'a',
        'sm'         => 'b',
        'md'         => 'c',
        'lg'         => 'd',
        'xl'         => 'e',
        'false'         => 'f'
    ];


    public function __construct(
        $style = null,
        $class = null,
        $container = 'default',
        $message = null
    )
    {
        $this->container = $this->container[$container] ?? $this->container['default'];

        $this->style = $style;
        $this->class = $class;
        $this->message = $message;
    }

    public function render()
    {
        return $this->view('components.container');
    }
}