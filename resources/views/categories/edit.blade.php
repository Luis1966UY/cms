@extends('layouts.app')

@section('title')
CMS- Categories - Edit
@endsection

@section('content')
        <h1 class="text-center my-5">
            Edit category
        </h1>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card card-default">
                    <div class="card-header">
                        Edit category
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
                        <form action="/categories/{{ $category->id }}/update-category" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $category->name }}">
                            </div>
                            
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Update category</button>
                            </div>
                        </form>
                    </div>
                </div>               
                
            </div>
        </div>
@endsection