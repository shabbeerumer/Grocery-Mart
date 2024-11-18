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
                <form action="{{ route('home_section3.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Input fields for adding data -->
                    <div class="mb-3">
                        <label class="form-label">Add Image 1</label>
                        <input type="file" class="form-control" name="image1">
                    </div>
                    <!-- ... additional fields ... -->
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
            <th>Title</th>
            <th>Subtitle</th>
            <th>First Button Text</th>
            <th>Second Image</th>
            <th>Second Button Text</th>
            <th>Actions</th>
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
                <!-- Edit Button triggers a unique modal per item -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">Edit</button>
           
                <a href="{{ route('home_section3.delete', $item->id) }}">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>

        <!-- Unique Edit Modal for each row -->
        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('home_section3.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Input fields for editing data with pre-filled values -->
                            <div class="mb-3">
                                <label class="form-label">Edit Image 1</label>
                                <input type="file" class="form-control" name="image1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Edit Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $item->title }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Edit Subtitle</label>
                                <input type="text" class="form-control" name="subtitle" value="{{ $item->subtitle }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Edit First Button Text</label>
                                <input type="text" class="form-control" name="first_button_text" value="{{ $item->first_button_text }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Edit Image 2</label>
                                <input type="file" class="form-control" name="image2">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Edit Second Button Text</label>
                                <input type="text" class="form-control" name="second_button_text" value="{{ $item->second_button_text }}">
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
    </tbody>
</table>
@endsection
