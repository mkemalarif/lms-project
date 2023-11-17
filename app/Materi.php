<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $fillable = ['materi'];

    public function course(){
        $this->belongsTo(Grade::class);
    }
}
