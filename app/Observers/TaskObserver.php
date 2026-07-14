<?php

namespace App\Observers;

use App\Models\Task;

class TaskObserver
{
    public function created(Task $task): void
    {
        \Log::info("Task created: '{$task->title}' by user #{$task->user_id}, due {$task->due_date}");
    }

    public function deleted(Task $task): void
    {
        \Log::info("Task deleted: '{$task->title}'");
    }
}