@props(['label'])

<button {{$attributes(["class" => "btn btn-primary"])}}>{{$slot}} {{$label}}</button>