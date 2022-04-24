<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Card3 extends Component
{

    public $message;
    public $class;
    public $style;
    public $as;

    public $title;
    public $content;
    public $permalink;
    public $backgroundSrc;
    public $backgroundAlt;
    public $client;


    public function __construct(
        $message = null,
        $class = null,
        $style = null,
        $as = null,

        $title = null,
        $content = null,
        $permalink = null,
        $backgroundSrc = null,
        $backgroundAlt = null,
        $client = null
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;
        $this->as = $as;

        $this->title = $title;
        $this->content = $content;
        $this->permalink = $permalink;
        $this->backgroundSrc = $backgroundSrc;
        $this->backgroundAlt = $backgroundAlt;
        $this->client = $client;
    }

    public function render()
    {
        return $this->view('components.card3');
    }
}