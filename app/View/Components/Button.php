<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Button extends Component
{


    // TODO: Add error handling
    // TODO: Add Icon Support
    // TODO: Ass 'href'
    
    public $message;
    public $class;
    public $style;

    public $buttonVariant;
    public $buttonKind;
    public $buttonRadius;
    public $buttonSize;
    
    public $disabled;
    public $type;
    public $button;
    public $href;
    // from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700

    public $variant = [
        'primary'            => 'py-4 px-6 text-white bg-primary-400 hover:bg-primary-600 rounded-xl',
        'primary-link'       => 'text-lg leading-6 underline text-blue-700 py-0 px-0',


      
        'success'   => 'button-success',
        'warning'   => 'button-warning',
        'danger'    => 'button-danger',
        'info'      => 'button-info',
        'white'     => 'button-white',
    ];

    public $kind = [
        'solid'   => 'button-solid',
        'outline' => 'button-outline',
        'clear'   => 'button-clear',
    ];

    public $radius = [
        'default' => 'rounded-full',
        'none'    => '',
        'sm'      => '',
        'md'      => '',
        'lg'      => '',
        'full'    => 'rounded-full',
    ];

    public $size = [
        'xs'     => 'button-xs',
        'sm'     => 'button-sm',
        'md'     => 'button-medium',
        'lg'     => 'button-large',
    ];



    public function __construct(
        $message = null,
        $class = null,
        $style = null,

        $variant = 'primary', 
        $kind = 'solid', 
        $radius = 'default',
        $size = 'md',
        $button = false,
        $href = null,
        $type = null
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;

        $this->buttonVariant = $this->variant[$variant] ?? $this->variant['default'];
        $this->buttonKind = $this->kind[$kind] ?? $this->kind['default'];
        $this->buttonRadius = $this->radius[$radius] ?? $this->radius['default'];
        $this->buttonSize = $this->size[$size] ?? $this->size['md'];

        $this->button = $button;
        $this->buttonDisabled = $disabled ?? 'disabled';
        $this->href = $href;
        $this->type = $type;

    }

    public function render()
    {
        return $this->view('components.button');
    }
}