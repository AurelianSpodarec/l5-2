<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class TextField extends Component
{

    // EH WP and Contact Form 7 with blade won't work, so this component is useless as far of now
    // INSPIRATION: https://mui.com/components/text-fields/
    // TODO: Icon 
    // TODO: Select
    // TODO: Multiline
    // TODO: Validation
    // TODO: Sizes
    // TODO: margin - should be globally controlled 
    // TODO: label

    public $id;

    public $class;
    public $style;
    public $message;


    public $variant = [
        'standard'   => 'button-primary',
        'filled' => 'button-secondary',
        'outlined'  => 'button-teritary'
    ];

    public $paddingY  = [
        'xs'         => '',
        'sm'         => '',
        'md'         => '',
        'lg'         => '',
        'xl'         => ''
    ];


    public function __construct(
        $variant = 'primary',
        $style = null,
        $class = null,
        $message = null
    )
    {
        $this->variant = $this->variant[$variant] ?? $this->variant['md'];

        $this->style = $style;
        $this->class = $class;
        $this->message = $message;
    }

    public function render()
    {
        return $this->view('components.textfield');
    }
}