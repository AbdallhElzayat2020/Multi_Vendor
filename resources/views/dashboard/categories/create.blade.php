@extends('dashboard.layouts.master')

@section('title','Create Categories')

@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h4>Categories</h4>
            </div>
        </section>
        <form action="{{route('dashboard.categories.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('dashboard.categories._form',[
            'button_label' => 'Create'])
        </form>

    </div>

@endsection
