<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    protected $table = 'unidade';
	
	protected $fillable = [
		'nome',
		'created_at',
		'updated_at'
	];
}
