<div class="form-group">
    <x-form.label for="name">Category Name</x-form.label>
    <x-form.input type="text" id="name" class="form-control" name="name" :value="$category->name"/>
</div>
<div class="form-group">
    <x-form.label for="parent_id">Parent Id</x-form.label>
    <select name="parent_id" class="form-control form-select">
        <option value="">Primary Category</option>
        @foreach($parents as $parent)
            <option value="{{$parent->id }}" @selected($category->parent_id == $parent->id) >
                {{ $parent->name }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <x-form.label for="description">Description</x-form.label>
    <x-form.textarea type="text" :value="$category->description" id="description" name="description"/>
</div>
<div class="form-group">
    <label for="name">Image</label>
    <x-form.input type="file" label="Image" id="image" name="image"/>
</div>
@if($category->image)
    <img height="50" width="70" src="{{asset('storage/'.$category->image)}}" alt="">
@endif
<div class="form-group">
    <x-form.radio name="status" :checked="$category->status"
                  :options="['active'=>'Active','archived'=>'Archived']"/>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{$button_label}}</button>
</div>
