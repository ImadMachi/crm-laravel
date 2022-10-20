@props(['name', 'label'])

<x-form.form-group>
  <x-form.label label="{{$label}}" name="{{$name}}" />
  <textarea id="{{$name}}" name="{{$name}}" class="form-control" rows="2"></textarea>
</x-form.form-group>