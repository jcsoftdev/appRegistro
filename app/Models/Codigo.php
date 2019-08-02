<?php

namespace RegistroAsistencia\Models;

use Illuminate\Database\Eloquent\Model;

class Codigo extends Model
{
    protected $primaryKey = 'id_curso';
    protected $fillable = [
        'id_curso', 'serial'
    ];
    public $timestamps = false;
}
