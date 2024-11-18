@extends('admin_layout.admin_layout')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Section 1</h2>
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
                <form action="{{route('pds1.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Add first text</label>
                        <input type="text" class="form-control" name="first_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add second text</label>
                        <input type="text" class="form-control" name="second_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add third text </label>
                        <input type="text" class="form-control" name="third_text">
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
            <th>first text</th>
            <th>second text</th>
            <th>third text</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($section1_all_data as $item)
        <tr>
            <td>{{ $item->first_text }}</td>
            <td>{{ $item->second_text }}</td>
            <td>{{ $item->third_text }}</td>
            <td>
                <!-- Trigger the edit modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">Edit</button>
           
                <a href="{{ route('pds1.delete', $item->id) }}">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Edit Modal (Dynamic ID) -->
@foreach ($section1_all_data as $item)
<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pds1.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Edit first text</label>
                        <input type="text" class="form-control" name="first_text" value="{{ $item->first_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit second text</label>
                        <input type="text" class="form-control" name="second_text" value="{{ $item->second_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit third text</label>
                        <input type="text" class="form-control" name="third_text" value="{{ $item->third_text }}">
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
