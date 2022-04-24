<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Card extends Component
{

    public $message;
    public $class;
    public $style;

    public $as;
    public $title;
    public $text;
    public $permalink;
    public $rawImage;
    public $date;


    public function __construct(
        $message = null,
        $class = null,
        $style = null,

        $as = null,
        $title = null,
        $text = null,
        $permalink = null,
        $rawImage = null,
        $date = null
    )
    {
        $this->message = $message;
        $this->class = $class;
        $this->style = $style;
        
        $this->as = $as;
        $this->title = $title;
        $this->text = $text;
        $this->permalink = $permalink;
        $this->rawImage = $rawImage;
        $this->date = $date;


    }

    public function render()
    {
        return $this->view('components.card');
    }
}