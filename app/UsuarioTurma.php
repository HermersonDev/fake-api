<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioTurma extends Model
{
    protected  $fillable = [ 'professor' ];
    
    public function usuario() {
    	return $this->belongsTo('App\Usuario');
    }
    
    public function turma() {
    	return $this->belongsTo('App\Turma');
    }
    
}
