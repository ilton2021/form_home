<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestorFuncionario extends Model
{
    protected $table = 'gestor_funcionario';
	
	protected $fillable = [
		'nome_completo_gestor',
		'email_gestor',
		'nome_completo_funcionario',
		'email_funcionario',
		'unidade',
		'created_at',
		'updated_at'
	];
}
