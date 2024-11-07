@extends('admin_layout.admin_layout')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Section 2</h2>
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
                <form action="{{route('home_section2.post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Add Image 1</label>
                        <input type="file" class="form-control" name="image1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Image 2</label>
                        <input type="file" class="form-control" name="image2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add cut price</label>
                        <input type="text" class="form-control" name="cut_price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label">Add Button Text</label>
                        <input type="text" class="form-control" name="button_text">
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
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Button Text</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($section2_all_data as $item)
        <tr>
            <td><img src="../image/{{ $item->first_image }}" alt="" height="50" width="50"></td>
            <td><img src="../image/{{ $item->second_image }}" alt="" height="50" width="50"></td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->cut_price }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->button_text }}</td>
            <td>
                <a href="{{ route('home_section2.edit', $item->id) }}">
                    <button type="button" class="btn btn-warning">Edit</button>
                </a>
            </td>
            <td>
                <a href="{{ route('home_section2.delete', $item->id) }}">

                <button type="button" class="btn btn-danger">Delete</button>
            </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Edit Modal -->
@if(isset($section2_edit))
<div class="modal fade show" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('home_section2.update', $section2_edit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Edit first image</label>
                        <input type="file" class="form-control" name="image1" value="{{ $section2_edit->first_image }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit second image</label>
                        <input type="file" class="form-control" name="image2" value="{{ $section2_edit->second_image }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $section2_edit->title }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit cut price</label>
                        <input type="text" class="form-control" name="cut_price" value="{{ $section2_edit->cut_price }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit price</label>
                        <input type="text" class="form-control" name="price" value="{{ $section2_edit->price }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit Button Text</label>
                        <input type="text" class="form-control" name="button_text" value="{{ $section2_edit->button_text }}">
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
