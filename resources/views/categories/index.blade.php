@extends('layouts.app')

@section('title')
CMS- Categories
@endsection

@section('content')
        <h1 class="text-center my-5">CATEGORIES</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
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
                                <a href="/categories/{{ $category->id }}/edit" class="btn btn-success btn-sm float-right" >Edit</a> 

                            </li>

                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection