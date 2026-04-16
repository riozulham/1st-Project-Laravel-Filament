<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = [
        'sekolah','data_id'
    ];

    public function data(){
        return $this->belongsTo(Data::class);
    }
}
