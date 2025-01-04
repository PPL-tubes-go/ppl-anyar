<?php

namespace App\Exports;

use App\Models\Task;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use \PDF;


class TasksExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Task::all(['id', 'name', 'description', 'deadline', 'completed', 'attachment', 'created_at', 'updated_at', 'status']);
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Description',
            'Deadline',
            'Completed',
            'Attachment',
            'Created At',
            'Updated At',
            'Status',
        ];
    }
    public function exportPDF()
    {
        $tasks = Task::all(['id', 'name', 'description', 'deadline', 'completed', 'attachment', 'created_at', 'updated_at', 'status']);

        $pdf = PDF::loadView('tasks.pdf', compact('tasks'));

        return $pdf->download('tasks.pdf');
    }

}
