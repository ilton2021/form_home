<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Funcionario;
use App\Models\Unidade;
use App\Models\Cargos;
use DB;
use App\Models\GestorFuncionario;


class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
	

    public function __construct()
    {
       
    }

    public function build(Funcionario $funcionario)
    {
		$idF = DB::table('funcionario')->max('id');
		$funcionario = Funcionario::where('id', $idF)->get();
		$unidade = $funcionario[0]->unidade_id;
		$unidade = Unidade::where('id', $unidade)->get();
		$cargo   = $funcionario[0]->cargo;
		$cargo   = Cargos::where('id', $cargo)->get();
		$gestorF = GestorFuncionario::where('email_funcionario', $funcionario[0]->email)->get();
		$emailG  = $gestorF[0]->email_gestor;
		return $this->from('joao.melo@hcpgestao.org.br', 'Informática HCP Gestão')
					->cc($emailG)
					->view('mail.email')
					->subject('Trabalho Home Office')
					->with(['funcionario' => $funcionario])
					->with(['unidade' => $unidade])
					->with(['cargo' => $cargo]);
    }
}
