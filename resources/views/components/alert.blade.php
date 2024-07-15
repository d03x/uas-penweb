@props(['type'=>"success"])
<p class="alert border-{{ $type }} alert-{{$type}} text-sm alert-dismissible" role="alert">
    {{ $slot ?? '' }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</p>