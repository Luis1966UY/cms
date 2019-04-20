@extends('layouts.app')

@section('title')
CMS- Categories
@endsection

@section('content')
    <div class="d-flex justify-content-end my-2">    
        <a href="{{ route('categories.create') }}" class="btn btn-success float-right">Add Category</a>    
    </div>
            
    <div class="card card-default">
        <div class="card-header">
            Categories
        </div>
        <div class="card-body">
            <ul class="list-group">
            @foreach($categories as $category)

                <li class="list-group-item">
                    {{ $category->name }}

                    
                    <a href="/categories/{{ $category->id }}/delete" class="btn btn-danger btn-sm float-right mx-2">Delete</a> 
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success btn-sm float-right" >Edit</a> 

                </li>

            @endforeach
            </ul>
        </div>
    </div>
            
        
@endsection