<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceDetail extends Model
{
    protected $guarded = [];

    public function attendance()
    {
        return $this->belongTo(Attendance::class);
    }
}
