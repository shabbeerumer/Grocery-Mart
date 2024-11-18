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
                    <form action="{{ route('home_section2.post') }}" method="POST" enctype="multipart/form-data">
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
                            <label class="form-label">Add Cut Price</label>
                            <input type="text" class="form-control" name="cut_price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
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
                <th>First Image</th>
                <th>Second Image</th>
                <th>Title</th>
                <th>Cut Price</th>
                <th>Price</th>
                <th>Button Text</th>
                <th>Actions</th>
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
                        <!-- Edit Button triggers a unique modal for each item -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                            Edit
                        </button>
                        <a href="{{ route('home_section2.delete', $item->id) }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>

                <!-- Edit Modal for this item -->
                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('home_section2.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                   
                                    <div class="mb-3">
                                        <label class="form-label">Edit First Image</label>
                                        <input type="file" class="form-control" name="image1">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label">Edit Second Image</label>
                                        <input type="file" class="form-control" name="image2">
                                    </div>
                                    <!-- Other Fields -->
                                    <div class="mb-3">
                                        <label class="form-label">Edit Title</label>
                                        <input type="text" class="form-control" name="title" value="{{ $item->title }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Edit Cut Price</label>
                                        <input type="text" class="form-control" name="cut_price" value="{{ $item->cut_price }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Edit Price</label>
                                        <input type="text" class="form-control" name="price" value="{{ $item->price }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Edit Button Text</label>
                                        <input type="text" class="form-control" name="button_text" value="{{ $item->button_text }}">
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
