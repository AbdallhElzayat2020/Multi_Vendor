@if(session()->has($type))
    <div class="alert alert-{{$type}} text-dark">
        {{session($type)}}
    </div>
@endif
