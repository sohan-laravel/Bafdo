@extends('backend.layouts.app')

@section('title')
    Subsubcategory Create
@endsection

@section('css')
   
@endsection

@section('backend-content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">

            <h3 class="card-title">Subsubcategory Add</h3>

            <div class="container">
                <a href="{{ route('admin.subsubcategory.index') }}" class="btn btn-outline-info btn-sm float-right">
                   <i class="fas fa-plus-circle fa-w-20"></i><span> Back</span>
                </a>
            </div>
        </div>

        <div class="card-body">
    
            <form action="{{ route('admin.subsubcategory.store') }}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="image">Category Name</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="">Select Catgeory Name</option>
                        @foreach ($categories as $category)
        
                        <option value="{{ $category->id }}">{{ $category->name }}</option>

                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Sub Category Name</label>
                    <select class="form-control" name="subcategory_id" id="subcategory_id">
                        <option value="">Select Catgeory Name</option>
                        @foreach ($subcategories as $subcat)
        
                        <option value="{{ $subcat->id }}">{{ $subcat->subcategory_name }}</option>

                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Subsubcategory Name</label>
                    <input type="text" class="form-control" name="subsubcategory_name" placeholder="Enter Subsubcategory Name">
                </div>

                <button type="submit" class="btn btn-outline-primary btn-sm mt-3">Submit</button>
            </form>

        </div>
    </div>
</div>
   
@endsection

@section('js')

@endsection