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
            @if($categories->count() > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Posts Count</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $category)

                        <tr>
                            
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                {{ $category->posts->count() }}
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm float-right mx-2" onclick="handleDelete({{ $category->id }})">Delete</button>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success btn-sm float-right" >Edit</a> 
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="" method="POST" id="deleteCategoryForm">
                            @csrf
                            @method('DELETE')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center text-bold">
                                        Are you sure you want to delete this category?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @else
                <h3 class="text-center">No categories yet</h3>
            @endif

        </div>
    </div>
        
@endsection

@section('scripts')
    <script>
        function handleDelete(id){
            var form = document.getElementById('deleteCategoryForm');
            form.action = '/categories/' + id;
            $('#deleteModal').modal('show');
        }
    </script>
@endsection