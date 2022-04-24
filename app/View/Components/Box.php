<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Box extends Component
{

    public $message;
    public $class;
    public $style;
    public $id;


    public $as = [
        'div'     => 'div',
        'span'    => 'span',
        'ul'      => 'ul',
        'ol'      => 'ol',
        'li'      => 'li',
        'main'    => 'main',
        'section' => 'section',
        'header'  => 'header',
        'footer'  => 'footer',
        'article' => 'article',
        'figure'  => 'figure'
    ];

    public $variant = [
        'primary'   => '',
        'secondary' => '',
        'teritary'  => '',

        'bg-white'     => 'bg-white',
        'black'     => 'bg-black',

        'section-1' => 'bg-white',
        'section-2' => 'bg-neutral-200',
        'section-3' => 'bg-neutral-300',

        'neutral-100' => 'bg-neutral-100',
        'neutral-200' => 'bg-neutral-200',
        'neutral-300' => 'bg-neutral-300',
        'neutral-400' => 'bg-neutral-400',
        'neutral-500' => 'bg-neutral-500',
        'neutral-600' => 'bg-neutral-600',
        'neutral-700' => 'bg-neutral-700',
        'neutral-800' => 'bg-neutral-800',
        'neutral-900' => 'bg-neutral-900',
        
        'gradient-primary' => 'gradient--primary'
        
    ];


    public function __construct(
        $message = null,
        $class = null,
        $style = null,
        $id = null,

        $variant = 'primary',
        $as = 'div'
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;
        $this->id = $id;

        $this->as = $this->as[$as] ?? $this->as['div'];
        $this->variant = $this->variant[$variant] ?? $this->variant['bg-white'];

    }

    public function render()
    {
        return $this->view('components.box');
    }
}