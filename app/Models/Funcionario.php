<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';
	
	protected $fillable = [
		'nome_completo',
		'matricula',
		'cpf',
		'cargo',
		'telefone',
		'atividades',
		'declaracao',
		'email',
		'unidade_id',
		'created_at',
		'updated_at'
	];
}
