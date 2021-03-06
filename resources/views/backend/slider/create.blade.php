@extends('backend.layouts.app')

@section('title')
    Slider Create
@endsection

@section('css')
   
@endsection

@section('backend-content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">

            <h3 class="card-title">Slider Add</h3>

            <div class="container">
                <a href="{{ route('admin.slider.index') }}" class="btn btn-outline-info btn-sm float-right">
                   <i class="fas fa-plus-circle fa-w-20"></i><span> Back</span>
                </a>
            </div>
        </div>

        <div class="card-body">
    
            <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                <label for="image">Slider Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Slider Name">

                </div>
                <div class="form-group">
                <label for="image">Slider Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Slider title">

                </div>
                <div class="form-group">
                <label for="image">Slider Sub Title</label>
                <input type="text" class="form-control" name="subtitle" placeholder="Enter Slider sub title">

                </div>
                <div class="form-group">
                <label for="image">Slider Button Link</label>
                <input type="text" class="form-control" name="button_link" placeholder="Enter Slider Button Link link https://.....">

                </div>

                <div class="form-group">
                <label for="image">Slider Image</label>
                <input type="file" class="form-control" name="image">
                </div>

                <button type="submit" class="btn btn-outline-primary btn-sm mt-3">Submit</button>
            </form>

        </div>
    </div>
</div>
   
@endsection

@section('js')

@endsection