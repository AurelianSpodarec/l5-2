<section
    {{ $attributes->merge(['id' =>  $id ])}}  
    {{ $attributes->merge(['style' =>  $style ])}}  
    {{ $attributes->merge(['class' => $class . " " . $variant . " " . $gutter]) }}>
    {!! $message ?? $slot !!}
</section>