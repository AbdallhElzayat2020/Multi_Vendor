@extends('dashboard.layouts.master')

@section('title','Categories')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h4>Categories</h4>
            </div>
        </section>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Created At</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @if($categories->count())
                {{--            @if(empty($categories))--}}
                @foreach($categories as $key=> $category)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->parent_id}}</td>
                        {{--                    <td>{{$category->image}}</td>--}}
                        <td>{{$category->created_at}}</td>
                        <td>
                            <a href="{{route('categories.edit',)}}" class="btn btn-sm btm-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('categories.destroy')}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="text" name="_method" value="delete">
                                {{--                            <input type="hidden" name="id" value="{{$category->id}}">--}}
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="12">There Is No Categories</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
