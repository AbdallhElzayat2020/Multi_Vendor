@extends('dashboard.layouts.master')

@section('title','Categories')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h4>Categories</h4>
            </div>
        </section>
        <div class="mb-3">
            <a href="{{route('dashboard.categories.create')}}" class="btn btn-primary">Create New</a>
        </div>
        {{--        alert Component--}}
        <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between  mb-4">
            <x-form.input name="name" placeholader="search" class="mx-3 "/>
            <select class="form-control mx-3" name="status" id="status">
                <option value="">All</option>
                <option value="active">active</option>
                <option value="archived">Archived</option>
            </select>
            <button class="btn btn-primary mx-3">Filter</button>
        </form>
        <x-alert type="success"/>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Description</th>
                <th>status</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            {{--            @if($categories->count())--}}
            {{--            @if(empty($categories))--}}
            {{--                @foreach($categories as $key=> $category)--}}
            @forelse($categories as $key=> $category)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->parent_id}}</td>
                    <td>{{$category->description ?? 'No Description'}}</td>
                    <td>{{$category->status}}</td>
                    <td><img height="50" width="70" src="{{asset('storage/'.$category->image)}}" alt=""></td>
                    <td>{{$category->created_at}}</td>
                    <td>
                        <a href="{{route('dashboard.categories.edit',$category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('dashboard.categories.destroy',$category->id)}}" method="post">
                            @csrf
                            @method('delete')
                            {{--                            <input type="hidden" name="_method" value="delete">--}}
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12">There Is No Categories</td>
                </tr>
            @endforelse

            </tbody>
        </table>
        <div class="pagination">
            {{$categories->withQueryString()->links()}}
        </div>
    </div>
@endsection
