@extends('admin_layout.admin_layout')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Section 4</h2>
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
                <form action="{{ route('home_section4.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Add First Image</label>
                        <input type="file" class="form-control" name="first_image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add First Text</label>
                        <input type="text" class="form-control" name="first_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Second Text</label>
                        <input type="text" class="form-control" name="second_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Third Text</label>
                        <input type="text" class="form-control" name="third_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Fourth Text</label>
                        <input type="text" class="form-control" name="fourth_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Second Image</label>
                        <input type="file" class="form-control" name="second_image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Third Image</label>
                        <input type="file" class="form-control" name="third_image">
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
            <th>First Image</th>
            <th>First Text</th>
            <th>Second Text</th>
            <th>Third Text</th>
            <th>Fourth Text</th>
            <th>Second Image</th>
            <th>Third Image</th>
            <th>Actions</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($section4_all_data as $item)
        <tr>
            <td><img src="../image/{{ $item->first_image }}" alt="" height="50" width="50"></td>
            <td>{{ $item->first_text }}</td>
            <td>{{ $item->second_text }}</td>
            <td>{{ $item->third_text }}</td>
            <td>{{ $item->fourth_text }}</td>
            <td><img src="../image/{{ $item->second_image }}" alt="" height="50" width="50"></td>
            <td><img src="../image/{{ $item->third_image }}" alt="" height="50" width="50"></td>
            <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal-{{ $item->id }}">Edit</button>
           
                <a href="{{ route('home_section4.delete', $item->id) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Edit Modal (Conditional Display with ID) -->
@foreach ($section4_all_data as $item)
<div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel-{{ $item->id }}">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('home_section4.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Edit First Image</label>
                        <input type="file" class="form-control" name="first_image" value="{{ $item->first_image }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit First Text</label>
                        <input type="text" class="form-control" name="first_text" value="{{ $item->first_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit Second Text</label>
                        <input type="text" class="form-control" name="second_text" value="{{ $item->second_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit Third Text</label>
                        <input type="text" class="form-control" name="third_text" value="{{ $item->third_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit Fourth Text</label>
                        <input type="text" class="form-control" name="fourth_text" value="{{ $item->fourth_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit Second Image</label>
                        <input type="file" class="form-control" name="second_image" value="{{ $item->second_image }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit Third Image</label>
                        <input type="file" class="form-control" name="third_image" value="{{ $item->third_image }}">
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
@endforeach

@endsection
