@props([
    'id'=>'',
    'name' ,
    'value' => '',
    'type' => 'text',
    'label' => false,
])
@if($label)
    <label for="{{$name}}">{{$label}}</label>
@endif

<input type="{{$type ?? 'text'}}"
       @class(['form-control','is-valid' => $errors->has($name)])
       value="{{old('name',$value)}}"
       id="{{$id}}" name="{{$name}}" required
    {{$attributes->class([
'form-control',
'is-invalid' => $errors->has($name),
])}}
>
@error($name)
<div class="invalid-feedback">
    {{$message}}
</div>
@enderror
