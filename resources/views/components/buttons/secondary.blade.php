@props(['label'])

<a href="#" {{$attributes(["class"=>"btn btn-success"])}}>{{$slot}} {{$label}}</a>