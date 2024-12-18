<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    protected $fillable = [
        'name',
        'city',
        'email',
        'picture'
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
