<div {{$attributes->merge(['style' =>  $style ])}} {{ $attributes->merge(['class' =>  $container . " " . $class ]) }}>
    {!! $message ?? $slot !!}
</div>

