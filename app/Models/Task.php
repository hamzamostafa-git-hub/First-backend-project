<?php

namespace App\Models;

use App\Observers\TaskObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy([TaskObserver::class])] //ask about this

class Task extends Model
{
    use SoftDeletes;

protected $fillable = ['title', 'user_id', 'due_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}