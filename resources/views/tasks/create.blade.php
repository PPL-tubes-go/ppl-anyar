@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="p-5 bg-warning rounded-3 border">
                    <div class="mb-3 text-center">
                        <i class="bi bi-list-check fs-1 text-danger"></i>
                        <h2 style="font-weight: bold">Create New Task</h2>
                    </div>
                    <hr>
                    <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Task Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="deadline">Deadline:</label>
                            <input type="date" class="form-control" id="deadline" name="deadline">
                        </div>
                        <div class="form-group">
                            <label for="attachment">Attachment:</label>
                            <input type="file" class="form-control-file" id="attachment" name="attachment">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Add Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
