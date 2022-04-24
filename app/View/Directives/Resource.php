<?php

namespace App\View\Directives;

class Resource
{
    /**
     * Invoke the @resource directive.
     *
     * @param  string $expression
     * @return string
     */
    public function __invoke($expression)
    {
        return sprintf("<?= %s(%s); ?>", '\App\resource', $expression);
    }
}
