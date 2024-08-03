@props([
    'id'=>'',
    'name' ,
    'value' => '',
    'label' => false,
])
@if($label)
    <label for="">{{$label}}</label>
@endif

<textarea type="{{$type ?? 'text'}}"
          @class(['form-control','is-valid' => $errors->has($name)])
          id="{{$id}}" name="{{$name}}" required
        {{$attributes}}
>
{{old('name',$value)}}
</textarea>
@error($name)
<div class="invalid-feedback">
    {{$message}}
</div>
@enderror
