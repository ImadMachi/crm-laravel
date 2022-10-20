@props(['head', 'body'])

<table id="data_table" class="table table-striped table-hover table-borderless">
  <thead class="border-bottom-0">
    <tr>
      {{$head}}
    </tr>
  </thead>
  <tbody>
    {{$body}}
  </tbody>
</table>