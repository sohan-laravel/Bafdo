@extends('backend.layouts.app')

@section('title')
    subcategory Edit
@endsection

@section('css')
   
@endsection

@section('backend-content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">

            <h3 class="card-title">subcategory Edit</h3>

            <div class="container">
                <a href="{{ route('admin.subcategory.index') }}" class="btn btn-outline-info btn-sm float-right">
                   <i class="fas fa-plus-circle fa-w-20"></i><span> Back</span>
                </a>
            </div>
        </div>

        <div class="card-body">
    
            <form action="{{ route('admin.subcategory.update', $subcategory->id) }}" method="post" enctype="multipart/form-data">

                @method('PUT')
                @csrf


                <div class="form-group">
                    <label for="image">Category Name</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $category)
        
                        <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected' : ''  }}>{{ $category->name }}</option>

                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                <label for="image">subcategory Name</label>
                <input type="text" class="form-control" name="subcategory_name" value="{{ $subcategory->subcategory_name }}" placeholder="Enter Slider Name">
                </div>

                <button type="submit" class="btn btn-outline-primary btn-sm mt-3">Update</button>
            </form>

        </div>
    </div>
</div>
   
@endsection

@section('js')

@endsection