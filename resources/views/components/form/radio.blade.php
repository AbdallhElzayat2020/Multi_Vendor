@props([
    'name',
    'options',
    'checked'=>false,
])

@foreach($options as $value => $text)
    <div class="form-check">
        <input class="form-check-input"
               @checked(old($name,$checked == $value)) type="radio" name="{{$name}}"
               id="{{$name}}" value="{{$value}}"
            {{$attributes->class([
            'form-check-input',
            'is-invalid' => $errors->has($name),

    ])}}
        >
        <label class="form-check-label" for="active">
            {{$text}}
        </label>
    </div>
@endforeach
