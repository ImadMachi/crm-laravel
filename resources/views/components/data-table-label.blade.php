@props(['label', 'add', 'import'])

<div class="d-flex justify-content-between align-items-center mb-4 pb-4 border-bottom">
  <h4>{{$label}}</h4>
  <div>
    <x-buttons.secondary class="open-modal" label="{{$add}}"><i class='bx bx-plus'></i></x-buttons.secondary>
    <x-buttons.primary label="{{$import}}"><i class='bx bx-import'></i></x-buttons.primary>
  </div>
</div>