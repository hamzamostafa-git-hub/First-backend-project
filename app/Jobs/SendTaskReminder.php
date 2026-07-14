<?php

namespace App\Jobs;

use App\Models\Task;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendTaskReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Task $task)
    {
    }

    public function handle(): void
    {
        // Later you could replace this with an actual email:
        // Mail::to($this->task->user->email)->send(new TaskDueMail($this->task));

        \Log::info("Reminder: Task '{$this->task->title}' is due today for user #{$this->task->user_id}");
    }
}