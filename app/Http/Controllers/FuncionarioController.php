<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargos;
use App\Models\Unidade;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Mail;
use DB;
use Validator;
use App\Mail\SendEmail;
use App\Models\GestorFuncionario;

class FuncionarioController extends Controller
{
	public function email()
	{
		$funcionario = Funcionario::where('id',3)->get();
		$cargo = $funcionario[0]->cargo;
		$cargo = Cargos::where('id', $cargo)->get();
		$unidade = $funcionario[0]->unidade_id;
		$unidade = Unidade::where('id', $unidade)->get();
		return view('mail/email', compact('funcionario','cargo','unidade'));
	}
	
	public function email2()
	{
		$funcionario = Funcionario::where('id')->get();
		$cargo = $funcionario[0]->cargo;
		$cargo = Cargos::where('id', $cargo)->get();
		$unidade = $funcionario[0]->unidade_id;
		$unidade = Unidade::where('id', $unidade)->get();
		return view('mail/email', compact('funcionario','cargo','unidade'));
	}
	
	public function storeGestor(Request $request)
	{
		$input = $request->all();
		$validator = Validator::make($request->all(), [
			'nome_completo_gestor' 		=> 'required|max:500',
			'email_gestor' 			    => 'required|max:300|email',
			'nome_completo_funcionario' => 'required|max:500',
			'email_funcionario' 		=> 'required|max:300|email'
		]);
		$text = true;
		if ($validator->fails()) {
			return view('welcome_gestor')
                        ->withErrors($validator)
                        ->withInput(session()->flashInput($request->input()));
		} else {
			$gestor 	 = $input['nome_completo_gestor'];
			$func   	 = $input['nome_completo_funcionario'];
			$func_email  = $input['email_funcionario'];
			$unidade 	 = $input['unidade']; 
			$gestor_func = GestorFuncionario::create($input);
			Mail::send([], [], function($m) use ($gestor,$func,$func_email,$unidade) {
				$m->from('joao.melo@hcpgestao.org.br', 'Informática HCP Gestão');
				$m->subject('Trabalho Home Office');
				$m->setBody('O Gestor: '.$gestor. ' solicita que '.$func.' da Unidade: '.$unidade.' ,preencha o formulário para trabalhar Home Office. Acesse o link do Formulário: https://hcpgestao.org.br/formhome/public/funcionario');
				$m->to($func_email);
			});
			$nome  = $gestor;
			return view('home2', compact('nome'));
		}
	}
	
    public function salvar(Request $request)
	{
		$input    = $request->all();
		$unidades = Unidade::all();
		$cargos   = Cargos::all();
			
		$validator = Validator::make($request->all(), [
			'unidade'  	    => 'required|max:1',
			'nome_completo'	=> 'required|min:20',
			'matricula' 	=> 'required|max:255',
			'cpf'			=> 'required|max:14',
			'cargo'			=> 'required|max:255',
			'telefone'		=> 'required|max:14',
			'atividades' 	=> 'required|max:1000',
			'declaracao'  	=> 'required|max:1',
            'email'			=> 'required|email|max:300'
			
        ]);
		$text = true;
		if ($validator->fails()) {
			return view('welcome', compact('unidades','cargos'))
                        ->withErrors($validator)
                        ->withInput(session()->flashInput($request->input()));
        } else {
			
			$email 		= $input['email'];
			$nome  		= $input['nome_completo'];
			$matricula  = $input['matricula'];
			$cpf 		= $input['cpf'];
			$cargo 		= $input['cargo'];
			$telefone   = $input['telefone'];
			$email 	 	= $input['email'];
			$atividades = $input['atividades'];
			
			$gestorF = GestorFuncionario::where('email_funcionario', $email)->get();
			$qtd = sizeof($gestorF);
			
			if($qtd == 0) {
				$validator = "Fale com seu Gestor ele não enviou a solicitação para você!";
				return view('welcome', compact('unidades','cargos'))
                        ->withErrors($validator)
                        ->withInput(session()->flashInput($request->input()));
			} else {
				$funcionario = Funcionario::create($input);
				$funcionario = Funcionario::where('email', $email)->get();
				$email       = $funcionario[0]->email;
				Mail::to($email)->send(new SendEmail($funcionario));
				return view('home', compact('nome','email'));
			}
		}
	}
}