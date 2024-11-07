@extends('admin_layout.admin_layout')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Section 6</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add Data</button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('home_section6.post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Add main text</label>
                        <input type="text" class="form-control" name="main_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add image</label>
                        <input type="file" class="form-control" name="first_image">
                    </div>
            
                    
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Data Table -->
<table class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>main text</th>
            <th>first image</th>
            <th>edit</th>
            <th>delete</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($section6_all_data as $item)
        <tr>
            <td>{{ $item->main_text }}</td>
            <td><img src="../image/{{ $item->first_image }}" alt="" height="50" width="50"></td>
          
            <td>
                <a href="{{ route('home_section6.edit', $item->id) }}">
                    <button type="button" class="btn btn-warning">Edit</button>
                </a>
            </td>
            <td>
                <a href="{{ route('home_section6.delete', $item->id) }}">

                <button type="button" class="btn btn-danger">Delete</button>
            </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Edit Modal -->
 @if(isset($section6_edit))
<div class="modal fade show" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('home_section6.update', $section6_edit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">edit main text</label>
                        <input type="text" class="form-control" name="main_text" value="{{ $section6_edit->main_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">edit first image</label>
                        <input type="file" class="form-control" name="first_image" value="{{ $section6_edit->first_image }}">
                    </div>
                    
            
                    
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
@endif
@endsection
