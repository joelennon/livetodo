<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    protected $fillable = ['name', 'live'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
