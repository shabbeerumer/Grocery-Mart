@extends('admin_layout.admin_layout')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Section 3</h2>
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
                <form action="{{route('home_section3.post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Add Image 1</label>
                        <input type="file" class="form-control" name="image1">
                    </div>
            
                    <div class="mb-3">
                        <label class="form-label">Add Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add subtitle</label>
                        <input type="text" class="form-control" name="subtitle">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">add first button text</label>
                        <input type="text" class="form-control" name="first_button_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Image 2</label>
                        <input type="file" class="form-control" name="image2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add second button text</label>
                        <input type="text" class="form-control" name="second_button_text">
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
            <th>first image</th>
            <th>title</th>
            <th>subtitle</th>
            <th>first button text </th>
            <th>second image</th>
            <th>second button text</th>
            <th>edit</th>
            <th>delete</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($section3_all_data as $item)
        <tr>
            <td><img src="../image/{{ $item->first_image }}" alt="" height="50" width="50"></td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->subtitle }}</td>
            <td>{{ $item->first_button_text }}</td>
            <td><img src="../image/{{ $item->second_image }}" alt="" height="50" width="50"></td>

            <td>{{ $item->second_button_text }}</td>
            <td>
                <a href="{{ route('home_section3.edit', $item->id) }}">
                    <button type="button" class="btn btn-warning">Edit</button>
                </a>
            </td>
            <td>
                <a href="{{ route('home_section3.delete', $item->id) }}">

                <button type="button" class="btn btn-danger">Delete</button>
            </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Edit Modal -->
 @if(isset($section3_edit))
<div class="modal fade show" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('home_section3.update', $section3_edit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">edit Image 1</label>
                        <input type="file" class="form-control" name="image1" value="{{ $section3_edit->first_image }}">
                    </div>
            
                    <div class="mb-3">
                        <label class="form-label">edit Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $section3_edit->title }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">edit subtitle</label>
                        <input type="text" class="form-control" name="subtitle" value="{{ $section3_edit->subtitle }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">edit first button text</label>
                        <input type="text" class="form-control" name="first_button_text" value="{{ $section3_edit->first_button_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">edit Image 2</label>
                        <input type="file" class="form-control" name="image2" value="{{ $section3_edit->second_image }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">edit second button text</label>
                        <input type="text" class="form-control" name="second_button_text" value="{{ $section3_edit->second_button_text }}">
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
