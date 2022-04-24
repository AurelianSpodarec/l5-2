<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class BlockInfoCTA2 extends Component
{

    public $message;
    public $class;
    public $style;
    public $as;

    public $content;
    public $buttonHref;
    public $buttonMessage;


    public function __construct(
        $message = null,
        $class = null,
        $style = null,
        $as = null,

        $content = null,
        $buttonHref = null,
        $buttonMessage = null
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;
        $this->as = $as;
        
        $this->content = $content;
        $this->buttonHref = $buttonHref;
        $this->buttonMessage = $buttonMessage;

    }

    public function render()
    {
        return $this->view('components.block-info-cta-2');
    }
}