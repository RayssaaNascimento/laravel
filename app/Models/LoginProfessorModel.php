<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginProfessorModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'professores';
    
    // ADICIONADO: 'area_cientifica' liberado para preenchimento
    protected $fillable = ['nome', 'email', 'senha', 'code']; 

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
