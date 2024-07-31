@extends('dashboard.layouts.master')

@section('title','Categories')

@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h4>Categories</h4>
            </div>
        </section>
        <form action="{{route('categories.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">Category Parent</label>
                <select name="parent_id" class="form-control form-select">
                    <option value="">Primary Category</option>
                    @foreach($parents as $parent)
                        <option value="{{$parent->id }}">{{ $parent->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="name">Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <div class="">
                <div class="form-check">
                    <input class="form-check-input" checked type="radio" name="status" id="active" value="active">
                    <label class="form-check-label" for="active">
                        Active
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="status" id="archived" value="archived">
                    <label class="form-check-label" for="archived">
                        Archived
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Category</button>
            </div>
        </form>

    </div>

@endsection
