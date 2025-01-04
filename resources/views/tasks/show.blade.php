<!DOCTYPE html>
<html>

<head>
    <title>Task Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container-sm my-5">
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-4 border">
                    <div class="mb-3 text-center">
                        <h4 style="font-weight: bolder">Task Detail</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName" class="form-label">Nama Tugas</label>
                            <h5 style="font-weight: bold">{{ $task->name }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="lastName" class="form-label">Deskripsi</label>
                            <h5 style="font-weight: bold">{{ $task->description }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email" class="form-label">Tugas Dibuat</label>
                            <h5 style="font-weight: bold">{{ $task->created_at }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="age" class="form-label">Deadline</label>
                            <h5 style="font-weight: bold">{{ $task->deadline }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="age" class="form-label">Status Pengerjaan</label>
                            <h5 style="font-weight: bold">{{ $task->status }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="age" class="form-label">Attachment</label>
                            <br>
                            {{-- @if ($task->attachment)
                                <a href="{{ Storage::url($task->attachment) }}" class="btn btn-primary">Download
                                    Attachment</a>
                            @endif --}}
                            @if ($task->attachment)
                                <a href="{{ route('tasks.download', $task->id) }}" class="btn btn-primary">Download Attachment</a>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 d-grid">
                            <a href="{{ route('tasks.index') }}" class="btn btn-warning btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
