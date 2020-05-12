@php
$arrayMenu = array(
    ['name' => 'Dashboard','href' => '/home'],
    ['name' => 'Welcome','href' => '/']
);
@endphp

@foreach($arrayMenu as $key => $value)
    <a class="dropdown-item dark-hover" href="{{ $value['href'] }}">{{ $value['name'] }}</a>
@endforeach

<div class="dropdown-divider"></div>
