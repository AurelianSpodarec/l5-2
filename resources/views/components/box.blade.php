<{{$as}}
    {{ $attributes->merge(['id' =>  $id ])}}  
    {{ $attributes->merge(['style' =>  $style ])}}  
    {{ $attributes->merge(['class' => $class . " " . $variant]) }}>
    {!! $message ?? $slot !!}
</{{$as}}>