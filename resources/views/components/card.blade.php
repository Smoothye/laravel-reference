@props( ['highlight' => false] ) {{-- by default has the value false --}}

<div @class([ 'highlight' => $highlight, 'card' ])> {{-- when $highlight is true, the div will have the class 'highlight' --}}

    {{-- $slot is replaced by everything put inside the component when used --}}
    {{ $slot }}

    <a {{ $attributes }} class="btn"> View Details </a>

</div>