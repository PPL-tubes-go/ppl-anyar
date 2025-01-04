@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="p-5 bg-warning rounded-3 border">
                    <div class="mb-3 text-center">
                        <i class="bi bi-box-seam fs-1 text-danger"></i>
                        <h2 style="font-weight: bold">Edit Task</h2>
                    </div>
                    <hr>
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Task Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="deadline">Deadline:</label>
                            <input type="date" class="form-control" id="deadline" name="deadline" value="{{ $task->deadline }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="attachment">Attachment:</label>
                            <input type="file" class="form-control-file" id="attachment" name="attachment">
                            @if ($task->attachment)
                                <p>Current Attachment: <a href="{{ Storage::url($task->attachment) }}">Download</a></p>
                            @endif
                        </div>
                        <br>
                        {{-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="completed" name="completed" {{ $task->completed ? 'checked' : '' }}>
                            <label class="form-check-label" for="completed">Completed</label>
                        </div> --}}
                        {{-- coba edit --}}
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="onprogress" {{ $task->status == 'onprogress' ? 'selected' : '' }}>On Progress</option>
                                <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg">Update Task</button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-danger btn-lg">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
