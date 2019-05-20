@extends('layouts.app')

@section('title')
CMS- Tags - Create
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{ isset($tag)  ? 'Edit Tag' : 'Create tag' }}
        </div>
        <div class="card-body">
            @include('partials.errors')
            <form action="{{ isset($tag) ? route('tags.update', $tag->id) : route('tags.store') }}" method="post">
                @csrf

                @if(isset($tag))
                    @method('PUT')
                @endif
                
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ isset($tag) ? $tag->name : '' }}">
                </div>
                
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">{{ isset($tag) ? 'Update Tag': 'Add Tag' }}</button>
                </div>
            </form>
        </div>
    </div>               
                

@endsection