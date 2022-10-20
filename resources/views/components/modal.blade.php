@props(['title', 'content'])

<div id="modal" class="modal">
  <div class="modal-content">
    <div class="modal-head">
      <h4>{{$title}}</h4>
      <span class="close-modal close-modal-times">&times;</span>
    </div>
    {{$content}}
  </div>
</div>