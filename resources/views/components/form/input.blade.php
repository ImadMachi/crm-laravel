@props(['name', 'label','type' =>'text', 'placeholder'=>''])

<x-form.form-group>
  <x-form.label label="{{$label}}" name="{{$name}}" />
  <input type="{{$type}}" class="form-control" id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}">
</x-form.form-group>