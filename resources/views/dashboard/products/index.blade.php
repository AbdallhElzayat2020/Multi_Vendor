@extends('dashboard.layouts.master')

@section('title','products')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h4>products</h4>
            </div>
        </section>
        <div class="mb-3">
            <a href="{{route('dashboard.products.create')}}" class="btn btn-primary">Create New</a>
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
                <th>Category</th>
                <th>Description</th>
                <th>Store</th>
                <th>status</th>
                <th>Created At</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            {{--            @if($categories->count())--}}
            {{--            @if(empty($categories))--}}
            {{--                @foreach($categories as $key=> $category)--}}
            @forelse($products as $key=> $product)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->store->name}}</td>
                    <td>{{$product->status}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>
                        <a href="{{route('dashboard.products.edit',$product->id)}}"
                           class="btn btn-sm btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('dashboard.products.destroy',$product->id)}}" method="post">
                            @csrf
                            @method('delete')
                            {{--                            <input type="hidden" name="_method" value="delete">--}}
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9">There Is No products</td>
                </tr>
            @endforelse

            </tbody>
        </table>
        <div class="pagination">
            {{$products->withQueryString()->links()}}
        </div>
    </div>
@endsection
