@extends('layouts.app')

@section('title')
CMS- Categories - Create
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{ isset($category)  ? 'Edit Category' : 'Create category' }}
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item">
                            {{ $error }}
                        </li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="post">
                @csrf

                @if(isset($category))
                    @method('PUT')
                @endif
                
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ isset($category) ? $category->name : '' }}">
                </div>
                
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">{{ isset($category) ? 'Update Category': 'Add Category' }}</button>
                </div>
            </form>
        </div>
    </div>               
                

@endsection