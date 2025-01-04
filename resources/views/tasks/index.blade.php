<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do-ty List</title>
    @vite('resources/sass/app.scss')
</head>

<body style="background-color: wheat;">
    @extends('layouts.app')
    @section('content')
        <div class="container mt-4">
            <div class="row mb-0">
                <h4 class="mb-3 text-center" style="color: black; font-weight: bold;">Do Your Task!</h4>
                <div class="col-xl-4">
                    <div class="d-flex gap-2">
                        <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-danger">Tambah Tugas</a>
                        <a href="{{ route('tasks.export') }}" class="btn btn-success">Export to Excel</a>
                        <a href="{{ route('tasks.export.pdf') }}" class="btn btn-primary">Export to PDF</a>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Tabel daftar tugas -->
            <div class="table-responsive border p-3 rounded-3">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="taskTable" style="border-color: black;">
                    <thead>
                        <tr style="text-align: center;">
                            <th style="width: 3%;">No</th>
                            <th style="width: 15%;">Nama Tugas</th>
                            <th style="width: 30%;">Deskripsi</th>
                            <th style="width: 10%;">Tugas Dibuat</th>
                            <th style="width: 10%;">Deadline</th>
                            <th style="width: 6%;">Status</th>
                            <th style="width: 20%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->id }}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->description }}</td>
                                <td>{{ $task->created_at }}</td>
                                <td>{{ $task->deadline }}</td>
                                <td>{{ $task->status }}</td>
                                <td style="text-align: center;">
                                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

    @vite('resources/js/app.js')
</body>

</html>
