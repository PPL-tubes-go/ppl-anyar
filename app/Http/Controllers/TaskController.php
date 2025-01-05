<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\TasksExport;
use Maatwebsite\Excel\Facades\Excel;

use \PDF;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        confirmDelete();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'deadline' => 'nullable|date',
            'attachment' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $data = $request->except('_token');

        if ($request->hasFile('attachment')) {
            $data['attachment'] = $request->file('attachment')->store('attachments');
        }

        Task::create($data);

        Alert::success('Task Added Successfully', 'Good Luck!');

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'deadline' => 'nullable|date',
            'attachment' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'status' => 'required|in:onprogress,completed', // Validasi status
        ]);

        $data = $request->except('_token');

        if ($request->hasFile('attachment')) {
            if ($task->attachment) {
                Storage::delete($task->attachment);
            }
            $data['attachment'] = $request->file('attachment')->store('attachments');
        }
        $data['status'] = $request->input('status');

        $task->update($data);

        Alert::success('Changed Successfully', 'Your task have been updated.');

        return redirect()->route('tasks.index');
    }


    public function destroy(Task $task)
    {
        if ($task->attachment) {
            Storage::delete($task->attachment);
        }
        $task->delete();
        Alert::success('Deleted Successfully', 'Task Deleted Successfully.');
        return redirect()->route('tasks.index');
    }

    public function toggle(Task $task)
    {
        $task->completed = !$task->completed;
        $task->save();
        return redirect()->route('tasks.index');
    }

    // tambah fungsi
    public function downloadFile($taskId)
    {
        $task = Task::findOrFail($taskId);

        if ($task->attachment) {
            $filePath = $task->attachment;

            // Debugging
            if (Storage::exists($filePath)) {
                return Storage::download($filePath);
            } else {
                return response()->json([
                    'error' => 'File not found in storage',
                    'file_path' => $filePath,
                ], 404);
            }
        } else {
            return response()->json([
                'error' => 'No attachment found for this task',
                'task_id' => $taskId,
            ], 404);
        }
    }


    public function export()
    {
        return Excel::download(new TasksExport, 'tasks.xlsx');
    }
    public function exportPDF()
    {
        return (new TasksExport())->exportPDF();
    }


}
