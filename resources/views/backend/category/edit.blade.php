@extends('backend.layouts.app')

@section('title')
    category Edit
@endsection

@section('css')
   
@endsection

@section('backend-content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">

            <h3 class="card-title">category Edit</h3>

            <div class="container">
                <a href="{{ route('admin.category.index') }}" class="btn btn-outline-info btn-sm float-right">
                   <i class="fas fa-plus-circle fa-w-20"></i><span> Back</span>
                </a>
            </div>
        </div>

        <div class="card-body">
    
            <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">

                @method('PUT')
                @csrf

                <div class="form-group">
                <label for="image">category Name</label>
                <input type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Enter Slider Name">
                </div>

                <button type="submit" class="btn btn-outline-primary btn-sm mt-3">Update</button>
            </form>

        </div>
    </div>
</div>
   
@endsection

@section('js')

@endsection