@extends('admin_layout.admin_layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
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
                <form action="{{ route('pds2.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Add main title</label>
                        <input type="text" class="form-control" name="main_title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add first text</label>
                        <input type="text" class="form-control" name="first_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add second text</label>
                        <input type="text" class="form-control" name="second_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add third text</label>
                        <input type="text" class="form-control" name="third_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add fourth text</label>
                        <input type="text" class="form-control" name="fourth_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add fifth text</label>
                        <input type="text" class="form-control" name="fifth_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add sixth text</label>
                        <input type="text" class="form-control" name="sixth_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add seventh text</label>
                        <input type="text" class="form-control" name="seventh_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add eighth text</label>
                        <input type="text" class="form-control" name="eighth_text">
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
<table class="table table-striped">
    <thead>
        <tr>
            <th>Main Title</th>
            <th>First Text</th>
            <th>Second Text</th>
            <th>Third Text</th>
            <th>Fourth Text</th>
            <th>Fifth Text</th>
            <th>Sixth Text</th>
            <th>Seventh Text</th>
            <th>Eighth Text</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($section2_all_data as $item)
            <tr>
                <td>{{ $item->main_title }}</td>
                <td>{{ $item->first_text }}</td>
                <td>{{ $item->second_text }}</td>
                <td>{{ $item->third_text }}</td>
                <td>{{ $item->fourth_text }}</td>
                <td>{{ $item->fifth_text }}</td>
                <td>{{ $item->sixth_text }}</td>
                <td>{{ $item->seventh_text }}</td>
                <td>{{ $item->eighth_text }}</td>
                <td>
                    <button type="button" class="btn btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#editModal-{{ $item->id }}">Edit</button>
                
                    <a href="{{ route('pds2.delete', $item->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <!-- Edit Modal for Each Item -->
            <div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('pds2.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Edit main title</label>
                                    <input type="text" class="form-control" name="main_title" value="{{ $item->main_title }}">
                                </div>
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
                                <div class="mb-3">
                                    <label class="form-label">Edit fourth text</label>
                                    <input type="text" class="form-control" name="fourth_text" value="{{ $item->fourth_text }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Edit fifth text</label>
                                    <input type="text" class="form-control" name="fifth_text" value="{{ $item->fifth_text }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Edit sixth text</label>
                                    <input type="text" class="form-control" name="sixth_text" value="{{ $item->sixth_text }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Edit seventh text</label>
                                    <input type="text" class="form-control" name="seventh_text" value="{{ $item->seventh_text }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Edit eighth text</label>
                                    <input type="text" class="form-control" name="eighth_text" value="{{ $item->eighth_text }}">
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
