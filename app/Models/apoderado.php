<?php

namespace RegistroAsistencia\Models;

use Illuminate\Database\Eloquent\Model;

class apoderado extends Model
{
    protected $fillable=['nombres','apellidos','direccion','celular','email','password'];
}
