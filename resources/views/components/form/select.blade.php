@props([
    'id' => '',
    'name',
    'value',
    'options',
    'selected'
])
<select
    name="{{$name}}"
    {{$attributes->class([
    'form-control',
    'form-select',
    'is-invalid' => $errors->has($name), // Ensure this class is added when there's an error
    ]) }}>
    @foreach($options as $value => $text)
        <option value="{{$value}}" @selected($value == $selected)>{{$text}}</option>
    @endforeach
</select>

{{-- Display validation error --}}
@error($name)
<div class="invalid-feedback">
    {{$message}}
</div>
@enderror
