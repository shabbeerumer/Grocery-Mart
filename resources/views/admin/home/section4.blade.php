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
                <form action="{{route('home_section4.post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Add first image</label>
                        <input type="file" class="form-control" name="first_image">
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
                        <label class="form-label">add third text</label>
                        <input type="text" class="form-control" name="third_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add fourth text</label>
                        <input type="text" class="form-control" name="fourth_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add second image</label>
                        <input type="file" class="form-control" name="second_image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add third image</label>
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
            <th>first image</th>
            <th>first text</th>
            <th>second text</th>
            <th>third text</th>
            <th>fourth text</th>
            <th>second image</th>
            <th>third image</th>
            <th>edit</th>
            <th>delete</th>


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
                <a href="{{ route('home_section4.edit', $item->id) }}">
                    <button type="button" class="btn btn-warning">Edit</button>
                </a>
            </td>
            <td>
                <a href="{{ route('home_section4.delete', $item->id) }}">

                <button type="button" class="btn btn-danger">Delete</button>
            </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Edit Modal -->
 @if(isset($section4_edit))
<div class="modal fade show" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('home_section4.update', $section4_edit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">edit first image</label>
                        <input type="file" class="form-control" name="first_image" value="{{ $section4_edit->first_image }}">
                    </div>
            
                    <div class="mb-3">
                        <label class="form-label">edit first text</label>
                        <input type="text" class="form-control" name="first_text" value="{{ $section4_edit->first_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">edit second text</label>
                        <input type="text" class="form-control" name="second_text" value="{{ $section4_edit->second_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">edit third text</label>
                        <input type="text" class="form-control" name="third_text" value="{{ $section4_edit->third_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">edit fourth text</label>
                        <input type="text" class="form-control" name="fourth_text" value="{{ $section4_edit->fourth_text }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">edit second image</label>
                        <input type="file" class="form-control" name="second_image" value="{{ $section4_edit->second_image }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">edit third image</label>
                        <input type="file" class="form-control" name="third_image" value="{{ $section4_edit->third_image }}">
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
