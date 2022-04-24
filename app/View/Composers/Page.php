<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Page extends Composer
{
   
    protected static $views = [
        'page',
        'single',
        'category',
        'blocks/*'
    ];

    public function with()
    {
        return [
            'page' => $this->page(),
        ];
    }


    public function page()
    {

        $data = [];

        if(get_field('flexible_content')) {
            $flexibleContent = get_field('flexible_content');
            $flexibleContentLength = count($flexibleContent);
            //  print_r($flexibleContent);  

            for ($index = 0; $index <= $flexibleContentLength - 1; $index++) {
                $row = $flexibleContent[$index];
                array_push($data);        
                
                // var_dump($row);
                // die();
            }


        }

        return $data;
    }
}