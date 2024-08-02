@extends('dashboard.layouts.master')

@section('title','Edit Categories')

@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h4>Edit Categories</h4>
            </div>
        </section>
        <form action="{{route('dashboard.categories.update',$category->id)}}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('put')

            @include('dashboard.categories._form',[
    'button_label' => 'Update',])

        </form>

    </div>

@endsection
