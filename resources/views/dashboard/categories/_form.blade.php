<div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" value="{{$category->name ?? ''}}  " id="name" name="name" required>
</div>
<div class="form-group">
    <label for="name">Category Parent</label>
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
    <label for="name">Description</label>
    <textarea type="text" class="form-control" id="description" name="description">
                    {{$category->description}}
    </textarea>
</div>
<div class="form-group">
    <label for="name">Image</label>
    <input type="file" class="form-control" id="image" name="image">
</div>
@if($category->image)
    <img height="50" width="70" src="{{asset('storage/'.$category->image)}}" alt="">
@endif
<div class="">
    <div class="form-check">
        <input class="form-check-input" @checked($category->status == 'active') type="radio" name="status"
               id="active" value="active">
        <label class="form-check-label" for="active">
            Active
        </label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" @checked($category->status == 'archived') type="radio" name="status"
               id="archived" value="archived">
        <label class="form-check-label" for="archived">
            Archived
        </label>
    </div>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
