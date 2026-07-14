<?php

namespace App\Console\Commands;

use App\Jobs\SendTaskReminder;
use App\Models\Task;
use Illuminate\Console\Command;

class SendTaskReminders extends Command
{
    protected $signature = 'tasks:send-reminders';
    protected $description = 'Dispatch reminder jobs for tasks due today';

    public function handle(): void
    {
        $dueTasks = Task::whereDate('due_date', today())->get();

        foreach ($dueTasks as $task) {
            SendTaskReminder::dispatch($task);
        }

        $this->info("Dispatched {$dueTasks->count()} reminder(s).");
    }
}